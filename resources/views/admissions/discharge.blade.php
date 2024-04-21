<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Discharge</title>
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


    <div class="container" style="margin:0.5in">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-primary"href="{{route('admission.index')}}">Home</a>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    
    <div class="container">

        <form method="POST" action="{{route('admission.confirmDischarge', ['admission' => $admission])}}">
            @csrf
            @method('put')
            <div class="form-group" style="margin:0.2in">
                <label class="display-6">You are about to Discharge Patient #: [{{$admission->patientID}}] </label>
                <input type="text" name="patientID" value="{{$admission->patientID}}" hidden></input> 
                <input type="text" name="Ward" value="{{$admission->Ward}}" hidden></input> 
                <input type="text" name="admissionDate" value="{{$admission->admissionDate}}" hidden></input> 
            </div>
            <div class="form-group" style="margin:0.2in">
                <label class="display-7">Discharge Date</label>
                <input class="form-control" type="datetime-local" name="dischargeDate" id="dischargeDate"></input> 
            </div>
            <div class="form-group" style="margin:0.2in">
                <input class="btn btn-primary" type="submit" value="Discharge Patient"/>
            </div>

        </form>
    </div>
    
</body>
</html>

<script>
    // Get the input element
    var input = document.getElementById('dischargeDate');

    // When the value of the input changes
    input.addEventListener('change', function() {
        // Get the value of the input
        var datetime = input.value;
        
        // Split the date and time parts
        var parts = datetime.split('T');

        // Format the date
        var date = parts[0].split('-').reverse().join('/');

        // Format the time
        var time = parts[1].substring(0, 5); // Extract only the hours and minutes

        // Update the value of the input with the formatted date and time
        input.value = date + ' ' + time;
    });
</script>