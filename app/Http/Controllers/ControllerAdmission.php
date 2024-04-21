<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;

class ControllerAdmission extends Controller
{
    public function index(){
        
        $admission = Admission::all();
        return view('admissions.index',['admissions' => $admission]);

    }

    public function create(){
        return view('admissions.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Ward' => 'required',
            'patientID' => 'required',
            'admissionDate' => 'required',
            'dischargeDate' => 'nullable',
        ]);

        //Create new admission Model
        $admission = new Admission();
        $admission->Ward = $data['Ward'];
        $admission->patientID = $data['patientID'];
        $admission->admissionDate = $data['admissionDate'];
        $admission->dischargeDate = $data['dischargeDate'];

        $admission->save();

        return redirect()->route('admission.index');
    }

     //Patient Update
     public function edit(Admission $admission){
        return view('admissions.edit',['admission'=> $admission]);
    }
    public function update(Admission $admission, Request $request){
        $data = $request->validate([
            'Ward' => 'required',
            'patientID' => 'required',
            'admissionDate' => 'required',
            'dischargeDate' => 'required',
        ]);

        $admission->update($data);
        return redirect(route('admission.index'))->with('success','Admission Updated Successfully');
    }

    //Patient Delete
    public function delete(Admission $admission){
        $admission->delete();
        return redirect(route('admission.index'))->with('success','Admission Deleted Successfully');
    }

}
