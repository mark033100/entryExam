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
    <h1>Add a Patient</h1>

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
        </div>
    </div>
    <div class="container" style="margin:0.5in">
        <form method="POST" action="{{route('patient.store')}}">
            @csrf
            @method('post')
            <div class="form-group">
                <label>First Name</label>
                <input class="form-control"type="text" name="firstName" id="fname" placeholder="Add First name"></input> 
            </div>
            <div class="form-group">
                <label>Middle Name</label> 
                <input class="form-control" type="text" name="middleName" id="mname" placeholder="Add Middle name"></input> 
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control"type="text" name="lastName" id="lname" placeholder="Add Last name"></input> 
            </div>
            <div class="form-group">
                <label>Suffix</label>
                <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Add Suffix"></input> 
            </div>
            <div class="form-group">
                <label>Date of birth</label>
                <input class="form-control"type="date" name="dateofBirth" id="dob" placeholder="Add Birthdate"></input> 
            </div>
            <div class="form-group">
                <label>Address</label>
                <input class="form-control" type="text" name="address" id="address" placeholder="Add Address"></input> 
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Add New Patient"/>
            </div>
        </form>
    </div>
    
</body>
</html>