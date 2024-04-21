<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a Patient</h1>

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
    <form method="POST" action="{{route('patient.update', ['patient' => $patient])}}">
        @csrf
        @method('put')
        <div>
            <label>First Name</label>
            <input type="text" name="firstName" id="fname" value="{{$patient->firstName}}"></input> 
        </div>
        <div>
            <label>Middle Name</label> 
            <input type="text" name="middleName" id="mname" value="{{$patient->middleName}}"></input> 
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastName" id="lname" value="{{$patient->lastName}}"></input> 
        </div>
        <div>
            <label>Suffix</label>
            <input type="text" name="suffix" id="suffix" value="{{$patient->suffix}}"></input> 
        </div>
        <div>
            <label>Date of birth</label>
            <input type="date" name="dateofBirth" id="dob" value="{{$patient->dateofBirth}}"></input> 
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" id="address" value="{{$patient->address}}"></input> 
        </div>
        <div>
            <input type="submit" value="Update Patient"/>
        </div>

    </form>
</body>
</html>