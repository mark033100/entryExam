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
        <form method="POST" action="{{route('patient.confirmAdmit', ['patient' => $patient])}}">
            @csrf
            @method('put')
            <div class="group-control">
                <label class="display-6">You are about to Admit Patient# [{{$patient->id}}] {{$patient->firstName}} {{$patient->lastName}}</label>
                <input class="form-control" type="text" name="patientID" value="{{$patient->id}}" hidden></input> 
            </div>
            <div class="group-control">
                <label>Ward</label> 
                <input class="form-control" type="text" name="Ward" id="mname" placeholder="Add Ward"></input> 
            </div>
            <div class="group-control">
                <label>Date of Admission</label>
                <input class="form-control" type="datetime-local" name="admissionDate" id="admissionDate" placeholder=""></input> 
            </div>
            
            <div class="group-control">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Admit Patient"/>
            </div>
        </form>
    </div>
    
</body>
</html>