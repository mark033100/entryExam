<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add a Patient</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{route('patient.store')}}">
        @csrf
        @method('post')
        <div>
            <label>First Name</label>
            <input type="text" name="firstName" id="fname" placeholder="Add First name"></input> 
        </div>
        <div>
            <label>Middle Name</label> 
            <input type="text" name="middleName" id="mname" placeholder="Add Middle name"></input> 
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastName" id="lname" placeholder="Add Last name"></input> 
        </div>
        <div>
            <label>Suffix</label>
            <input type="text" name="suffix" id="suffix" placeholder="Add Suffix"></input> 
        </div>
        <div>
            <label>Date of birth</label>
            <input type="date" name="dateofBirth" id="dob" placeholder="Add Birthdate"></input> 
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" id="address" placeholder="Add Address"></input> 
        </div>
        <div>
            <input type="submit" value="Add New Patient"/>
        </div>

    </form>
</body>
</html>