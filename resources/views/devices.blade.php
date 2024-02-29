<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Device List</h2>
        <p>Click on Device ,, to see records of it </p>
        <table class="table">
            <thead>
                <tr>
                    <th>Record Number</th>
                    <th>Dvice ID</th>
                    <th>Last Update</th>
                    <th>latitude / longitude</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($d as $dev)
                    <tr onclick="location.href = '{{route('device.data',['device'=> $dev])}}';" >
                        <td>{{ $dev->id }}</td>
                        <td>{{ $dev->device }}</td>
                        <td>{{ $dev->last_update }}</td>
                        <td>
                            lat : &nbsp; {{ $dev->lat }} : &nbsp; | lng : &nbsp; {{ $dev->lng }}
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
         <center>
             {{$d->links('pagination::bootstrap-4')}}
            </center>
    </div>

</body>

</html>
