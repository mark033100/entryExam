<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Patient;


class ControllerPatient extends Controller
{
    public function index(){
        
        $patients = Patient::all();

        return view('patients.index',['patients' => $patients]);

    }


    public function create(){
        return view('patients.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'nullable',
            'lastName' => 'required',
            'suffix' => 'nullable',
            'dateofBirth' => 'required',
            'address' => 'required',
        ]);



        //Create new patient Model
        $patient = new Patient();
        $patient->firstName = $data['firstName'];
        $patient->middleName = $data['middleName'];
        $patient->lastName = $data['lastName'];
        $patient->suffix = $data['suffix'];
        $patient->dateofBirth = $data['dateofBirth'];
        $patient->address = $data['address'];
        $patient->save();

        return redirect(route('patient.index'));
        
    }


    //Patient Update
    public function edit(Patient $patient){
        return view('patients.edit',['patient'=> $patient]);
    }
    public function update(Patient $patient, Request $request){
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'nullable',
            'lastName' => 'required',
            'suffix' => 'nullable',
            'dateofBirth' => 'required',
            'address' => 'required',
        ]);

        $patient->update($data);
        return redirect(route('patient.index'))->with('success','Patient Updated Successfully');
    }

    //Patient Delete
    public function delete(Patient $patient){
        $patient->delete();
        return redirect(route('patient.index'))->with('success','Patient Deleted Successfully');
    }
}
