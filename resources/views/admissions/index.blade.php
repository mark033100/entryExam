<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION --> <!-- ADMISSION -->


<body>
<div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    
    <div>
        <a href="{{route('admission.create')}}">Add Admission</a>
    </div>

 <!--ADMISSION Table-->
 <div>
        <table border="1">
            <tr>
                <th>Admission ID</th>
                <th>Ward</th>
                <th>Patient ID</th>
                <th>Admission Date</th>
                <th>Discharge Date</th>
            </tr>
            @foreach($admissions as $admission)
                <tr>
                    <td>{{$admission->id}}</td>
                    <td>{{$admission->Ward}}</td>
                    <td>{{$admission->patientID}}</td>
                    <td>{{$admission->admissionDate}}</td>
                    <td>{{$admission->dischargeDate}}</td>
                    <td>
                        <a href="{{route('admission.edit', ['admission' => $admission])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('admission.delete', ['admission' => $admission])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>    

</body>
</html>