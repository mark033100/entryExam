<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Patient;


class ControllerPatient extends Controller
{
    public function index(){
        return view('patients.index');
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
}
