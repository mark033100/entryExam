<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Discharge Patient</h1>

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

    <form method="POST" action="{{route('admission.confirmDischarge', ['admission' => $admission])}}">
        @csrf
        @method('put')
        <div>
            <label>You are about to Discharge Patient #: [{{$admission->patientID}}] </label>
            <input type="text" name="patientID" value="{{$admission->patientID}}" hidden></input> 
            <input type="text" name="Ward" value="{{$admission->Ward}}" hidden></input> 
            <input type="text" name="admissionDate" value="{{$admission->admissionDate}}" hidden></input> 
        </div>
        <div>
            <label>Discharge Date</label>
            <input type="datetime-local" name="dischargeDate" id="dischargeDate"></input> 
        </div>
        
        <div>
            <input type="submit" value="Discharge Patient"/>
        </div>

    </form>
</body>
</html>