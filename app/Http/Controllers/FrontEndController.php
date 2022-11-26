<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Time;
use App\User;
use App\Booking;
use App\Prescription;
use App\Mail\AppointmentMail;
use App\Package;
use App\Category;
use App\Lab;
use App\Organ;
use App\ParentTest;
use App\SubTest;
use Illuminate\Support\Facades\DB;



class FrontEndController extends Controller
{
    public function index(Request $request)
    {
        // Set timezone
        date_default_timezone_set('America/New_York');
        // If there is set date, find the doctors
        if (request('date')) {
            $formatDate = date('m-d-yy', strtotime(request('date')));
            $doctors = Appointment::where('date', $formatDate)->get();
            return view('welcome', compact('doctors', 'formatDate'));
        };
        // Return all doctors avalable for today to the welcome page
        $doctors = Appointment::where('date', date('m-d-yy'))->get();


        $packages = Package::with('parenttest')->orderBy('created_at', 'desc')->take('6')->get();

        $labs = Lab::orderBy('created_at', 'desc')->get();

        //dd($packages);

        $categories = Category::take(5)->get();
        $organs = Organ::take(6)->get();

        return view('welcome', compact('doctors', 'packages', 'categories', 'organs', 'labs'));
    }

    public function package($id)
    {
        // Set timezone

        $all_labs = Lab::all();
        $package = Package::with('parenttest')->find($id);
        // dd($package);

        $values = new \Illuminate\Support\Collection(explode(",", $package->parent_test_id));

        $parent_tests = DB::table('parent_tests')

            ->select('parent_tests.parent_test_name as parent_name', 'parent_tests.id as id', 'parent_tests.sub_tests as parent_sub_tests')
            ->whereIn('parent_tests.id', $values)
            ->get()->toArray();
        //dd($parent_tests);


        return view('package-details', compact('package', 'parent_tests', 'all_labs'));
    }


    public function show($doctorId, $date)
    {
        $appointment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appointment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctor_id = $doctorId;
        return view('appointment', compact('times', 'date', 'user', 'doctor_id'));
    }

    public function store(Request $request)
    {
        // Set timezone
        date_default_timezone_set('America/New_York');

        $request->validate(['time' => 'required']);
        $check = $this->checkBookingTimeInterval();
        if ($check) {
            return redirect()->back()->with('errMessage', 'You already made an appointment. Please check your email for the appointment!');
        }

        $doctorId = $request->doctorId;
        $time = $request->time;
        $appointmentId = $request->appointmentId;
        $date = $request->date;
        Booking::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => $doctorId,
            'time' => $time,
            'date' => $date,
            'status' => 0
        ]);
        $doctor = User::where('id', $doctorId)->first();
        Time::where('appointment_id', $appointmentId)->where('time', $time)->update(['status' => 1]);

        // Send email notification
        $mailData = [
            'name' => auth()->user()->name,
            'time' => $time,
            'date' => $date,
            'doctorName' => $doctor->name
        ];
        try {
            \Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));
        } catch (\Exception $e) {
        }

        return redirect()->back()->with('message', 'Your appointment was booked for ' . $date . ' at ' . $time . ' with ' . $doctor->name . '.');
    }

    // check if user already make a booking.
    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id', 'desc')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', date('y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $appointments = Booking::latest()->where('user_id', auth()->user()->id)->get();
        return view('booking.index', compact('appointments'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id', auth()->user()->id)->get();
        return view('my-prescription', compact('prescriptions'));
    }
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('cart');
        echo "Data has been removed from session.";
    }

    public function addToCart($evt, $id1 = null, $id2 = null)
    {
        if ($evt === 'lab') {

            $data =  DB::table('lab_package')->where([
                ['lab_id', '=', $id2],
                ['subtest_id', '=', $id1],
            ])->first();

            $lab = Lab::find($id2);
            $subtest = SubTest::find($id1);



            $cart = session()->get('cart', []);

           // if (isset($cart[$subtest['sub_test_name']])) {

                // if ($cart[$subtest['sub_test_name']]['lab_name'] === $lab->lab_name) {

                //     $cart[$subtest['sub_test_name']]['quantity']++;
                //     session()->put('cart', $cart);
                //     return redirect()->back();
                // } else {

                //     dd($cart);

                //     $cart[$subtest['sub_test_name']] = [
                //         "name" => $subtest->sub_test_name,
                //         "price" => $data->price,
                //         "lab_name" => $lab->lab_name,
                //         "quantity" => 1
                //     ];
                //     session()->put('cart', $cart);

                //     return redirect()->back();
                // }

                if (isset($cart[$id2])) {
                     $cart[$id2] = [
                                "name" => $subtest->sub_test_name,
                                "price" => $data->price,
                                "lab_name" => $lab->lab_name,
                                "quantity" => 1
                            ];
                       
                         
            } 

            
            
            else {

                $cart[$id2] = [
                    "name" => $subtest->sub_test_name,
                    "price" => $data->price,
                    "lab_name" => $lab->lab_name,
                    "quantity" => 1
                ];
            
            }
            session()->put('cart', $cart);
            return redirect()->back();
                        
        
        } else {

            $package = Package::with('parenttest')->findOrFail($id1);
            $lab =   Lab::where(['id' => $package->lab_name])->first();

            //dd($package);
            $cart = session()->get('cart', []);

            if (isset($cart[$id1])) {

                $cart[$id1]['quantity']++;
            } else {

                $cart[$id1] = [
                    "name" =>  $package->package_name,
                    "price" => $package->price,
                    "lab_name" => $lab->lab_name,
                    "quantity" => 1
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product add to cart successfully!');
        }

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function cart()
    {
        return view('cart');
    }

    // public function update(Request $request)
    // {
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart successfully updated!');
    //     }
    // }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function edit(Request $request)
    {
        return view('edit');
    }

    public function getajaxTest(Request $request)
    {

        $search = $request->search;
        //dd($search);

        if ($search == '') {
            $tests = SubTest::orderby('sub_test_name', 'asc')->select('sub_test_name')->limit(8)->get();
        } else {
            $tests = SubTest::orderby('sub_test_name', 'asc')->select('sub_test_name')->where('sub_test_name', 'like', '%' . $search . '%')
                ->limit(8)->get();
        }

        $response = array();

        foreach ($tests as $parent_test) {

            $response[] = $parent_test->sub_test_name;
        }

        return response()->json($response);
    }

    public function addPatient(Request $request)
    {

        $data = $request->all();

        //  $this->patientvalidate($request);
        // dd($data);

        foreach ($data['addMore'] as $key => $product) {

            DB::table('patient')->insert([

                'user_id' => auth()->user()->id,
                'name' => $product['name'],
                'age' => $product['age'],
                'gender' => $product['gender']
            ]);
        }

        return view('layouts.frontend.user-details');
    }

    public function patientvalidate($request)
    {

        return $this->validate(
            $request,
            [
                'name' => 'required',
                'age' => 'required',
                'gender' => 'required'

            ]
        );
    }

    public function allOrgan()
    {
        $all_labs = Lab::all();
        $allOrgans = Organ::all();
        return view('organ.allorgans', compact('allOrgans', 'all_labs'));
    }
}
