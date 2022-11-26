<?php

namespace App\Http\Controllers;

use App\Organ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganController extends Controller
{
    public function index()
    {

        $allOrgans = Organ::all();
        return view('admin.organ.index', compact('allOrgans'));
    }


    public function store(Request $request)
    {

        $this->validateStore($request);
        $data = $request->all();



        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;
            $data['status'] = 1;
        }

        Organ::create($data);
        return redirect()->back()->with('message', 'Organ added successfully');
    }
    public function validateStore($request)
    {
        return  $this->validate($request, [
            'name' => 'required',

        ]);
    }

    public function create()
    {
        
        return view('admin.organ.create');
    }

    public function show(Organ $testByOrgan)
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
        $organs = Organ::find($id);

        return view('admin.organ.edit', compact('organs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $organ = Organ::find($id);

        $data = $request->all();
         
         //  $user = User::find($id);

        if ($request->file('new_image')) {

            $file = $request->file('new_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = $organ['image'];
        }

        $returnValue = DB::table('organs')
            ->where('id', '=', $id)
            ->update([
                'name' => $data['name'],
                'image' => $data['image'],
                'status' => 1,
              
            ]);
        return redirect()->back()->with('message', 'information updated successfully');

        $organ->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestByOrgan  $testByOrgan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organ = Organ::find($id);
        $organ->delete();
        return redirect()->back()->with('message', 'Organ is deleted successfully!');
    
    }
}
