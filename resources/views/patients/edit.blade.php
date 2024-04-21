<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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

    <div class="container" style="margin:0.5in">
        <div class="row">
            <div class="col-sm">
            <a class="btn btn-primary" href="{{route('patient.index')}}">Home</a>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    
    <div class="container">
        <form method="POST" action="{{route('patient.update', ['patient' => $patient])}}">
            @csrf
            @method('put')
            <div class="group-control">
                <label>First Name</label>
                <input class="form-control"  type="text" name="firstName" id="fname" value="{{$patient->firstName}}"></input> 
            </div>
            <div class="group-control">
                <label>Middle Name</label> 
                <input class="form-control" type="text" name="middleName" id="mname" value="{{$patient->middleName}}"></input> 
            </div>
            <div class="group-control">
                <label>Last Name</label>
                <input class="form-control"  type="text" name="lastName" id="lname" value="{{$patient->lastName}}"></input> 
            </div>
            <div class="group-control">
                <label>Suffix</label>
                <input class="form-control"  type="text" name="suffix" id="suffix" value="{{$patient->suffix}}"></input> 
            </div>
            <div class="group-control">
                <label>Date of birth</label>
                <input class="form-control"  type="date" name="dateofBirth" id="dob" value="{{$patient->dateofBirth}}"></input> 
            </div>
            <div class="group-control">
                <label>Address</label>
                <input class="form-control"  type="text" name="address" id="address" value="{{$patient->address}}"></input> 
            </div>
            <div class="group-control">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Update Patient"/>
            </div>
        </form>
    </div>
    
</body>
</html>