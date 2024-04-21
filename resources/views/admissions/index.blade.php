<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>DataTable</title>
</head>


<!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION -->


<body class=".container-fluid">
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
            <a class="btn btn-primary" href="{{route('admission.create')}}">Add Admission</a>
            <a class="btn btn-primary" href="{{route('patient.index')}}">Patient Lists</a>
            </div>
        </div>
    </div>

 <!--ADMISSION Table-->
 <div class="container" >
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Admission ID</th>
                <th>Ward</th>
                <th>Patient ID</th>
                <th>Admission Date</th>
                <th>Discharge Date</th>
                <th>Discharge</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admissions as $admission)
                <tr>
                    <td>{{$admission->id}}</td>
                    <td>{{$admission->Ward}}</td>
                    <td>{{$admission->patientID}}</td>
                    <td>{{$admission->admissionDate}}</td>
                    <td>{{$admission->dischargeDate}}</td>
                    <td>
                        @if(empty($admission->dischargeDate))
                        <a class="btn btn-primary" href="{{route('admission.discharge', ['admission' => $admission])}}">Discharge Patient</a>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admission.edit', ['admission' => $admission])}}">Edit Record</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('admission.delete', ['admission' => $admission])}}">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete Record"/>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Admission ID</th>
                <th>Ward</th>
                <th>Patient ID</th>
                <th>Admission Date</th>
                <th>Discharge Date</th>
                <th>Discharge</th>
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




