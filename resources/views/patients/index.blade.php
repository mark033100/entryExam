<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div>
        <a href="{{route('patient.create')}}">Add Patient</a>
    </div>

    <!--Patients Table-->
    <div>
        <table border="1">
            <tr>
                <th>Patient ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Suffix</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
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
                        <a href="{{route('patient.edit', ['patient' => $patient])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('patient.delete', ['patient' => $patient])}}">
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