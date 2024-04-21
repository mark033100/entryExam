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

<!-- PATIENTS --> <!-- PATIENTS --> <!-- PATIENTS --> <!-- PATIENTS --> <!-- PATIENTS --> <!-- PATIENTS -->


<body>
    <h1>Patients</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>



    <div class="container" style="margin:0.5in">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-primary" href="{{route('patient.create')}}">Add Patient</a>
                <a class="btn btn-primary" href="{{route('admission.index')}}">Admissions</a>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>

    <!--Patients Table-->
    <div class="container">
        <table id="example" class="table" style="width:100%" >
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Suffix</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Admit to a Ward</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->id}}</td>
                    <td>{{$patient->firstName}}</td>
                    <td>{{$patient->middleName}}</td>
                    <td>{{$patient->lastName}}</td>
                    <td>{{$patient->suffix}}</td>
                    <td>{{$patient->dateofBirth}}</td>
                    <td>{{$patient->address}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('patient.admit', ['patient' => $patient])}}">Admit</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('patient.edit', ['patient' => $patient])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('patient.delete', ['patient' => $patient])}}">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Patient ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Suffix</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Admit to a Ward</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
        </table>
    </div>


</body>
</html>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
<script>new DataTable('#example');</script>