<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Order;
use App\Organ;
use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\SubTest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class FrontendLogInController extends Controller
{

    private $razorpayId = "rzp_test_3MBPS7Inb8AR2v";
    private $razorpayKey = "RRh4nSQ0pdd8uwTJDVTcOjyM";

    // private $razorpayId = "rzp_live_Sov1SDDvaLh47j";
    // private $razorpayKey = "rHIkpFOzmESeLw2IpNbhyI99";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // redirect to dashboard if user is admin or doctor
        return view('layouts.frontend.login');
    }
    public function signup()
    {
        // redirect to dashboard if user is admin or doctor

        return view('layouts.frontend.signup');
    }

    protected function create(Request $request)
    {
        $this->validateuser($request);

        $role = Role::where('name', 'patient')->first();

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            //role_id is patient
            'role_id' => $role['id'],
            'gender' => $request['gender']
        ]);

        return view('layouts.frontend.login');
    }
    public function validateuser($request)
    {

        return $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'phone' => 'required'
            ]

        );
    }

    protected function userlogin(Request $request)
    {
        $this->validatelogin($request);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user['role_id'] === 2) {

                return redirect()->back()->with('message', 'You are not authorized!');

            } else {

                $cart = session()->get('cart', []);

                if(count ((array)$cart)>0){
                    return view('cart');
                }
                else{
                    
                    return view('dashboard.index',compact('user'));
                
                }
            }
        } else {

            return redirect()->back()->with('message', 'Invalid Login credentials');
        }
    }

    public function validatelogin($request){

        return $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
    }

    public function checkout()
    {
        $user_role = Auth::user();

        if ($user_role === null || $user_role['role_id'] === 2) {

            return view('layouts.frontend.login');
        } else {


            return view('layouts.frontend.add-patient');
        }
    }


    public function iniitiate(Request $request){
        $data = $request->all();
        $recieptId = Str::random(20);

        if ($data['pay_option'] === '2') {

            $response = [
                'amount' => $data['amount'],
                'name' => $data['name'],
                'currency' => 'INR',
                'email' => $data['email'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'description' => 'New Test',
                'pay_option' => 2,
                'recieptId' => $recieptId,
                'user_id' => Auth::user()->id,

            ];

            $carts = session()->get('cart', []);

            $order = Order::create($response);

            foreach ($carts as $cart) {

                $data = [
                    'order_id' => $order->id,
                    'test_name' => $cart['name'],
                    'lab_name' => $cart['lab_name'],
                    'price' => $cart['price'],
                    'user_id' => Auth::user()->id
                ];

                DB::table('order_test')->insert($data);
            }

            $request->session()->forget('cart');
            return view('success', compact('response'));
        } else {

            $api = new Api($this->razorpayId, $this->razorpayKey);

            $order = [
                'receipt'         => $recieptId,
                'amount'          => $data['amount'], // 39900 rupees in paise
                'currency'        => 'INR'
            ];

            $razorpayOrder = $api->order->create($order);
            // dd($razorpayOrder);
            $response = [
                'orderId' => $razorpayOrder['id'],
                'razorpayId' => $this->razorpayId,
                'amount' => $data['amount'],
                'name' => $data['name'],
                'currency' => 'INR',
                'email' => $data['email'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'description' => 'New Test',
                'user_id' => Auth::user()->id

            ];

            $id = Order::create($response)->id;
            if ($id) {

                $carts = session()->get('cart', []);
                $order = Order::create($response);
                foreach ($carts as $cart) {

                    $data = [
                        'order_id' => $order->id,
                        'test_name' => $cart['name'],
                        'lab_name' => $cart['lab_name'],
                        'price' => $cart['price'],
                        'user_id' => Auth::user()->id
                    ];

                    DB::table('order_test')->insert($data);
                }

                $request->session()->forget('cart');
                return view('payment-page', compact('response'));
            } else {

                return redirect()->back();
            }
        }
    }

    public function success(){

        return view('success');
    }

    public function forntendshow($id)
    {

        $all_labs = Lab::all();

        $organs = Organ::with('subtest')->find($id);

        $subtests = $organs->subtest()->paginate(10);

        return view('organ.index', compact('organs', 'all_labs', 'subtests'));
    }

    public function showlab($id){
        $all_labs = Lab::all();
        DB::enableQueryLog();
        $labs = SubTest::with('getLab')->find($id);

      
        $getLabs = $labs->getLab()->get();

        $subtestId = $id;
        
        // if (count($getLabs) > 0) {
        //     $data =  DB::table('lab_package')->where([
        //         ['lab_id', '=', $getLabs[0]['id']],
        //         ['subtest_id', '=', $id],
        //     ])->first();
        // } else {
        //     $data = [];
        // }
        return view('list', compact('labs',  'getLabs', 'all_labs','subtestId'));
    }
}
