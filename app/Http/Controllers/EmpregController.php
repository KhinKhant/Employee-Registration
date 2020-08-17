<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp;

class EmpregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var=emp::all();
      return view('empshow', compact('var'));

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
        $result=$request->all();
       // dd($result);

        emp::create($result);
        //return view('empshow', compact('result'));
        return redirect()->route('reg');
        //return "Register Successfully!";
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
       
     $edit= emp::find($id);
    // dd($edit);
         //$result=$request->all();
        return view('empedit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update= emp::find($id);
        //dd($update);
            $update->name=request('name');
            $update->roll=request('roll');
            $update->phone=request('phone');
            $update->email=request('email');
            $update->save();
        return redirect()->route('reg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
