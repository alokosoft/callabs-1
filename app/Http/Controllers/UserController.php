<?php

namespace App\Http\Controllers;

use App\Lab;
use App\ParentTest;

use App\SubTest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $users = User::where('role_id','=',3)->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);

        $data = $request->all();

        // $prent_test_name = ParentTest::find($data['parent_test_id']);

        // $data ['parent_test_name'] = $prent_test_name['parent_test_name'];

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('Ymd') . $file->getClientOriginalName();

            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;
        }


        Lab::create($data);

        return redirect()->back()->with('message', 'Lab added successfully');
    }

    public function validateStore($request)
    {
        return  $this->validate($request, [
            'lab_name' => 'required',
            'address1' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin' => 'required|regex:/\b\d{6}\b/',
            'phone' => 'required|digits:10',

        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        $labs = Lab::all();
        return view('admin.lab.index', compact('labs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab = Lab::find($id);
        // dd($lab);
        $parent_tests = ParentTest::all();

        return view('admin.lab.edit', compact('lab', 'parent_tests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lab = Lab::find($id);
        // return view('admin.lab.edit', compact('lab'));
        //$this->validateUpdate($request, $id);
        $data = $request->all();
        //  $user = User::find($id);

        if ($request->file('new_image')) {

            $file = $request->file('new_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = $lab['image'];
        }

        $returnValue = DB::table('labs')
            ->where('id', '=', $id)
            ->update([
                'lab_name' => $data['lab_name'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'state' => $data['state'],
                'city' => $data['city'],
                'pin' => $data['pin'],
                'image' => $data['image']
            ]);
        return redirect()->route('lab.show')->with('message', 'information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::find($id);
        $lab->delete();
        return redirect()->back()->with('message', 'Lab ' . $lab->lab . ' is deleted successfully!');
    }

    public function labpackage()
    {
        $sub_tests = SubTest::all();
        $labs = Lab::all();

        return view('admin.lab.labpackage', compact('sub_tests', 'labs'));
    }

    public function storelabpackage(Request $request)
    {

        $data = $request->all();

        //dd($data);

        $this->validatelabpackage($request);

        DB::table('lab_package')->insert([

            'lab_id' => $data['lab_id'],
            'subtest_id' => $data['sub_test'],
            'price' => $data['price']
        ]);

        return redirect()->route('lab.package');
    }

    public function showlabpackage()
    {

        $labpackages = Lab::with('getSubtest')->get();
        //dd($labpackages);
        return view('admin.lab.labpackageindex', compact('labpackages'));
    }

   
  
}
