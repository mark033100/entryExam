<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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
    

    <div class="container" style="margin:0.5in">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-primary" href="{{route('admission.index')}}">Back</a>
            </div>
            <div class="col-sm">
           
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>




    <div class="container">
        <form method="POST" action="{{route('admission.store')}}">

            @csrf
            @method('post')

            <div class="form-group"style="margin:0.2in">
                <label>Ward</label>
                <input class="form-control" type="text" name="Ward" id="Ward" placeholder="Add Ward"></input> 
            </div>

            <div class="form-group" style="margin:0.2in">
                <!--<label>Patient ID</label>  -->
                <label>Patient</label>
                <select class="form-control" name="patientID"> 
                    @foreach ($patients as $patient) 
                    <option value="{{ $patient->id }}">{{ $patient->firstName }} {{ $patient->lastName }}</option> 
                    @endforeach 
                </select>
            </div>

            <div class="form-group" style="margin:0.2in">
                <label>Admission Date</label>
                <input class="form-control" type="datetime-local" name="admissionDate" id="admissionDate" ></input> 
            </div>

            <div  class="form-group" style="margin:0.2in">
                <input class="btn btn-primary" type="submit" value="Add Admission"/>
            </div>

        </form>
    </div>
    
    

</body>
</html>

