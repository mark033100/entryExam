<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Admission</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <a href="{{route('admission.index')}}">Back</a>
    <form method="POST" action="{{route('admission.store')}}">

        @csrf
        @method('post')
        <div>
            <label>Ward</label>
            <input type="text" name="Ward" id="Ward" placeholder="Add Ward"></input> 
        </div>
        <div>
            <label>Patient ID</label> 
            <input type="text" name="patientID" id="patientID" placeholder="Add Patient ID"></input> 
        </div>
        <div>
            <label>Admission Date</label>
            <input type="date" name="admissionDate" id="admissionDate" ></input> 
        </div>
        <div>
            <label>Discharge Date</label>
            <input type="date" name="dischargeDate" id="dischargeDate" ></input> 
        </div>
        <div>
            <input type="submit" value="Add Admission"/>
        </div>

    </form>

</body>
</html>