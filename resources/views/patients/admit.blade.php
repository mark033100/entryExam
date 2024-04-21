<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admit a Patient</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <a href="{{route('patient.index')}}">Home</a>

    <form method="POST" action="{{route('patient.confirmAdmit', ['patient' => $patient])}}">
        @csrf
        @method('put')
        <div>
            <label>You are about to Admit [{{$patient->id}}] {{$patient->firtName}} {{$patient->lastName}}</label>
            <input type="text" name="patientID" value="{{$patient->id}}" hidden></input> 
        </div>
        <div>
            <label>Ward</label> 
            <input type="text" name="Ward" id="mname" placeholder="Add Ward"></input> 
        </div>
        <div>
            <label>Date of Admission</label>
            <input type="datetime-local" name="admissionDate" id="admissionDate" placeholder=""></input> 
        </div>
        
        <div>
            <input type="submit" value="Admit Patient"/>
        </div>

    </form>
</body>
</html>