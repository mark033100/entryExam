<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Admissions</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <a href="{{route('admission.index')}}">Home</a>
    <form method="POST" action="{{route('admission.update', ['admission' => $admission])}}">
        @csrf
        @method('put')
        <div>
            <label>Ward</label>
            <input type="text" name="Ward" id="Ward" value="{{$admission->Ward}}"></input> 
        </div>
        <div>
            <label>Patient ID</label> 
            <input type="number" name="patientID" id="patientID" value="{{$admission->patientID}}"></input> 
        </div>
        <div>
            <label>Admission Date</label>
            <input type="date" name="admissionDate" id="admissionDate" value="{{$admission->dischargeDate}}"></input> 
        </div>
        <div>
            <label>Discharge Date</label>
            <input type="date" name="dischargeDate" id="dischargeDate" value="{{$admission->dischargeDate}}"></input> 
        </div>
        
        <div>
            <input type="submit" value="Update Patient"/>
        </div>

    </form>
</body>
</html>