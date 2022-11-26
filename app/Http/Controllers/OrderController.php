<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        $orders = DB::table('orders')
            ->select('orders.*')
            ->get()->toArray();
        return view('admin.orders.index', compact('orders'));
    }

    public function uploadreport(Request $request, $id){
        
        if ($request->file('report')) {
            $file = $request->file('report');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;
            // dd($filename);
            DB::table('orders')->where('id', '=', $id)->update([
                'report_url' => $filename,

            ]);
        }

        return redirect()->back();
    }
}
