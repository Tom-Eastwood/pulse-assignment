<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surgeon;

class SurgeonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeons = Surgeon::all();

        return view('surgeons.index', ['surgeons' => $surgeons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surgeons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);

        //create
        $surgeon = new Surgeon;

        $surgeon->first_name = $request->first_name;
        $surgeon->last_name = $request->last_name;
        $surgeon->email = $request->email;

        $surgeon->save();

        return redirect()->route('surgeons.index')->with('status', 'You have successfully added a surgeon.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('surgeons.show', ['surgeon' => Surgeon::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('surgeons.edit', ['surgeon' => Surgeon::findOrFail($id)]);
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
        //validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);

        //update
        $surgeon = Surgeon::find($id);

        $surgeon->first_name = $request->first_name;
        $surgeon->last_name = $request->last_name;
        $surgeon->email = $request->email;

        $surgeon->save();

        return redirect()->route('surgeons.index')->with('status', 'You have successfully updated a surgeon.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surgeon = Surgeon::find($id);

        $surgeon->delete();

        return redirect()->route('surgeons.index')->with('status', 'You have successfully deleted a surgeon.');
    }
}
