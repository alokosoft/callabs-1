<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Category;
use App\Lab;
use App\ParentTest;
use App\SubTest;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $labs = Lab::all();
        $parent_tests = ParentTest::all();
        return view('admin.package.create', compact('categories', 'labs', 'parent_tests'));
    }

    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();


        $parent_test  = implode(',', $data['parent_test_id']);

        
try {
    DB::beginTransaction(); // Tell Laravel all the code beneath this is a transaction
    $packae = Package::create([
        
            'package_name' => $request->package_name,
             'package_desc' => $request->package_desc,
            'category' => $request->category,
            'lab_name' => $request->lab_name,
            'price' => $request->price
        
    ]);
   // dd($packae->id);
    foreach ($data['parent_test_id'] as $parent_id){

            DB::table('package_parent')->insert([
                'package_id'=>$packae->id,
                'parent_test_id'=>$parent_id
            ]);
    }
      
    DB::commit(); // Tell Laravel this transacion's all good and it can persist to DB
       } 
       catch(\Exception $exp) {

        dd($exp->getMessage());

          DB::rollBack(); // Tell Laravel, "It's not you, it's me. Please don't persist to DB"
          throw  $exp;;
        }

        return redirect()->back()->with('message', 'Test added successfully');
    }

    public function validateStore($request)
    {
        return  $this->validate($request, [
            'package_name' => 'required',
            'package_desc' => 'required',
            'parent_test_id' => 'required',
            'category'  => 'required|not_in:0',
            'lab_name'  => 'required|not_in:0',
            'price' => 'required'
        ]);
    }

    public function edit($id){

        $categories = Category::all();
        $parent_tests =  ParentTest::all();
        $labs = Lab::all();

        $Package = Package::with('parenttest')->find($id);

        //dd($Package);

        return view('admin.package.edit', compact('Package', 'parent_tests', 'labs', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $Package = Package::find($id);

        $data = $request->all();

        $parent_test  = implode(',', $data['parent_test_id']);

        $Package->update([

            'package_name' => $request->package_name,
            'parent_test_id' => $parent_test,
            'price' => $request->price,
            'no_of_tests' => $request->no_of_tests,
            'package_desc' => 'Test',
            'category' => $request->category,
            'lab_name' => $request->lab_name
        ]);


        //   return view('admin.package.index');
        return redirect()->route('package.show')->with('message', 'information updated successfully');
    }

    public function package()
    {
        $packages = Package::with('getLab')->get();
        //dd($packages);
        return view('admin.package.index', compact('packages'));
    }

    public function parenttest()
    {
        $sub_tests = SubTest::all();

        return view('admin.parenttest.create', compact('sub_tests'));
    }

    public function parentteststore(Request $request){

        $this->validateParentStore($request);
        $data = $request->all();
        $data['sub_tests'] = implode(',', $data['sub_tests']);


        ParentTest::create($data);

        //    foreach( $data['sub_test'] as $sub_test){

        //             SubTest::insert([
        //                 ['parent_test_name' => $request->parent_test_name, 'sub_test_name' => $sub_test]
        //             ]);
        //     }

        //     ParentTest::create($data);
        return redirect()->back()->with('message', 'Test Name added successfully');
    }

    public function validateParentStore($request)
    {

        return  $this->validate($request, [
            'parent_test_name' => 'required',
            'status'  => 'required|not_in:0',

        ]);
    }


    public function parenttestshow(Request $request)
    {

        $parent_tests =  ParentTest::all();
        return view('admin.parenttest.index', compact('parent_tests'));
    }

    public function parenttestedit($id)
    {

        $parent_tests =  ParentTest::find($id);
        return view('admin.parenttest.edit', compact('parent_tests'));
    }

    public function parenttestupdate(Request $request, $id)
    {

        $parent_test =  ParentTest::find($id);
        $data = $request->all();
        $parent_test->update($data);
        return  redirect()->route('parenttest.show')->with('mesaage', 'Information updated succesfully');
    }

    public function subtest()
    {
        $parent_tests = ParentTest::all();
        return view('admin.subtest.create', compact('parent_tests'));
    }

    public function subtestshow()
    {
        // $sub_tests =  DB::table('sub_tests')
        //     ->join('parent_tests', 'parent_tests.id', '=', 'sub_tests.parent_test_id')
        //     ->select(
        //         DB::RAW('GROUP_CONCAT(sub_tests.sub_test_name)as sub_test_name'),
        //         'parent_tests.parent_test_name as parent_name',
        //         'parent_tests.id as id'
        //     )
        //     ->groupBy('parent_tests.parent_test_name')
        //     ->groupBy('parent_tests.id')

        //     ->get()->toArray();
        //dd($sub_tests);

        $sub_tests = SubTest::all();

        return view('admin.subtest.index', compact('sub_tests'));
    }

    public function subteststore(Request $request)
    {

        $this->subtestvalidate($request);

        $data = $request->all();

        SubTest::create($data);


        // foreach ($data['sub_test'] as $sub_test) {

        //     SubTest::insert([
        //         ['parent_test_id' => $request->parent_test_id, 'sub_test_name' => $sub_test]
        //     ]);
        // }
        return redirect()->back()->with('message', 'Test Name added successfully');
    }

    public function subtestvalidate($request)
    {

        return  $this->validate($request, [

            'sub_test_name'  => 'required',
            'price' => 'required',
            'sample_type' => 'required',
            'volume' => 'required',
            'status' => 'required',

        ]);
    }

    public function findsubtest($id)
    {

        // $sub_tests =  DB::table('sub_tests')
        //     ->select(
        //         'sub_tests.sub_test_name as sub_name',
        //         'sub_tests.id as id'
        //     )
        //     ->where('sub_tests.parent_test_id', '=', $id)
        //     ->get()->toArray();

        $sub_tests = SubTest::find($id);
        return view('admin.subtest.find', compact('sub_tests'));
    }

    public function subtestedit($id){

        $sub_test = SubTest::find($id);

        return view('admin.subtest.edit', compact('sub_test'));
    }
    public function subtestupdate(Request $request, $id)
    {

        $sub_test =   SubTest::find($id);
        $data = $request->all();
        $sub_test->update($data);

        return redirect()->back()->with('message', 'Test Name updated successfully');
    }

    public function subtestdestroy($id)
    {
        $sub_test = SubTest::find($id);
        $sub_test->delete();
        return redirect()->back()->with('message', 'Test  is deleted successfully!');
    }

    public function packagedestroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->back()->with('message', 'Package  is deleted successfully!');
    }
}
