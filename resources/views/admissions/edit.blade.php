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

    <div class="container" style="margin:0.5in">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-primary" href="{{route('admission.index')}}">Home</a>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>

    <div class="container">
        <form method="POST" action="{{route('admission.update', ['admission' => $admission])}}">
            @csrf
            @method('put')
            <div class="group-control">
                <label>Ward</label>
                <input class="form-control" type="text" name="Ward" id="Ward" value="{{$admission->Ward}}"></input> 
            </div>

            <div class="group-control">
                <input class="form-control" type="text" name="patientID" id="patientID" value="{{$admission->patientID}}" hidden ></input> 
            </div>

            <div class="group-control">
                <label>Admission Date</label>
                <input class="form-control" type="datetime-local" name="admissionDate" id="admissionDate" value="{{$admission->dischargeDate}}"></input> 
            </div>
            <div class="group-control">
                <label>Discharge Date</label>
                <input class="form-control" type="datetime-local" name="dischargeDate" id="dischargeDate" value="{{$admission->dischargeDate}}"></input> 
            </div>
            
            <div class="group-control">
                <input class="btn btn-primary btn-lg btn-block"  type="submit" value="Update Admission"/>
            </div>
        </form>

    </div>
    
</body>
</html>