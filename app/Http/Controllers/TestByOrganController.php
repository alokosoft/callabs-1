<?php

namespace App\Http\Controllers;

use App\Organ;
use App\TestByOrgan;
use Illuminate\Http\Request;
use App\ParentTest;
use App\SubTest;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Subset;

class TestByOrganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allOrgans = Organ::with('subtest')->get();
        return view('admin.findtestorgan.index', compact('allOrgans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_tests = SubTest::all();
        $allOrgans = Organ::all();
        $alreadyOrgans = Organ::has('subtest', '<' , 1)->with('subtest')->get();

    
        return view('admin.findtestorgan.create', compact('sub_tests', 'allOrgans','alreadyOrgans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        try {
            DB::beginTransaction(); // Tell Laravel all the code beneath this is a transaction
            // $packae = findtestbyorgan::create([

            //         'package_name' => $request->package_name,
            //          'package_desc' => $request->package_desc,
            //         'category' => $request->category,
            //         'lab_name' => $request->lab_name,
            //         'price' => $request->price

            // ]);
            // dd($packae->id);
            foreach ($data['sub_tests'] as $sub_test_id) {

                DB::table('findtestbyorgan')->insert([
                    'organ_id' => $data['organ_id'],
                    'sub_test_id' => $sub_test_id
                ]);
            }

            DB::commit(); // Tell Laravel this transacion's all good and it can persist to DB
        } catch (\Exception $exp) {

            dd($exp->getMessage());

            DB::rollBack(); // Tell Laravel, "It's not you, it's me. Please don't persist to DB"
            throw  $exp;;
        }


        return redirect()->back()->with('message', 'Test added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function show(TestByOrgan $testByOrgan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $test_organ = TestByOrgan::find($id);

        return view('admin.findtestorgan.edit', compact('test_organ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestByOrgan $testByOrgan)
    {
        //
    }

    public function organtestedit($id)
    {

        $organ_tests = Organ::with('subtest')->find($id);
        // dd($organ_tests);
        $sub_tests = Subtest::all();

        return view('admin.findtestorgan.organtestedit', compact('organ_tests', 'sub_tests'));
    }



    public function organtestupdate(Request $request, $id)
    {
        $data = $request->all();
        //dd($organ_tests);

        DB::table('findtestbyorgan')->where('organ_id', $id)->delete();

        $subtest_id  = implode(',', $data['sub_tests']);

        foreach ($data['sub_tests'] as $sub_test) {

            DB::table('findtestbyorgan')->insert([
                'organ_id' => $id,
                'sub_test_id' => $sub_test
            ]);
        }

        return redirect()->back();
    }


    public function forntendshow()
    {

        $organs = Organ::all();
        return view('organ.index', compact('organs'));
    }
}
