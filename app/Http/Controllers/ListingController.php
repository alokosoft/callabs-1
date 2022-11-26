<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lab;
use App\SubTest;
use  Illuminate\Support\Facades\DB;


class ListingController extends Controller
{
    public function index()
    {

        return view('listing');
    }

    public function about(){

        return view('design.newdesign');
    }

    public function search(Request $request)
    {
        $all_labs = Lab::all();
       
        $data = $request->all();

        //dd($data);
        $search = $data['max-results'];
      
        DB::enableQueryLog();

        $subtest_id = DB::table('sub_tests')
            ->select('sub_tests.*')
            ->where('sub_tests.sub_test_name', 'like', '%' . $search . '%')
            ->limit(1)->get()->toArray();

            $labs = SubTest::with('getLab')->where('id','=',$subtest_id[0]->id)->get();
        // dd($labs);
        // dd(DB::getQueryLog());
        return view('list', compact('labs','search','all_labs'));
    }
}
