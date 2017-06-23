<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Surgeon;

class PatientController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        
        return view('patients.index', 
            ['patients' => $patients, 
            'breadcrumbs' => 
                ['Home' => url('/'), 
                'Patients' => route('patients.index') ]
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surgeons = Surgeon::all();

        return view('patients.create', 
            ['surgeons' => $surgeons,
            'breadcrumbs' => 
                ['Home' => url('/'), 
                'Patients' => route('patients.index'),
                'Add Patient' => route('patients.create') ]
            ]
        );
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
            'email' => 'required|email',
            'phone1' => 'required|integer|max:999',
            'phone2' => 'required|integer|max:999',
            'phone3' => 'required|integer|max:9999',
            'gender' => 'required',
            'age' => 'required|integer|max:999',
            'surgeon_id' => 'required'
        ]);

        //create
        $patient = new Patient;

        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->email = $request->email;
        $patient->phone1 = $request->phone1;
        $patient->phone2 = $request->phone2;
        $patient->phone3 = $request->phone3;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->surgeon_id = $request->surgeon_id;

        $patient->save();

        return redirect()->route('patients.index')->with('status', 'You have successfully added a patient.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('patients.show', 
            ['patient' => Patient::findOrFail($id),
            'breadcrumbs' => 
                ['Home' => url('/'), 
                'Patients' => route('patients.index'),
                'View Patient' => route('patients.show', $id) ]
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('patients.edit', 
            ['patient' => Patient::findOrFail($id), 
            'surgeons' => Surgeon::all(),
            'breadcrumbs' => 
                ['Home' => url('/'), 
                'Patients' => route('patients.index'),
                'View Patient' => route('patients.show', $id),
                'Edit Patient' => route('patients.edit', $id) ]
            ]
        );
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
            'email' => 'required|email',
            'phone1' => 'required|integer|max:999',
            'phone2' => 'required|integer|max:999',
            'phone3' => 'required|integer|max:9999',
            'gender' => 'required',
            'age' => 'required|integer|max:999',
            'surgeon_id' => 'required'
        ]);

        //create
        $patient = Patient::find($id);

        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->email = $request->email;
        $patient->phone1 = $request->phone1;
        $patient->phone2 = $request->phone2;
        $patient->phone3 = $request->phone3;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->surgeon_id = $request->surgeon_id;

        $patient->save();

        return redirect()->route('patients.index')->with('status', 'You have successfully added a patient.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);

        $patient->delete();

        return redirect()->route('patients.index')->with('status', 'You have successfully deleted a patient.');
    }
}
