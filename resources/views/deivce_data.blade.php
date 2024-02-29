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
        <h2>Device Data Table </h2>
        <p> {{ $device }}  </p>

        <table class="table">
            <thead>
                <tr>
                    <th>data</th>
                    <th>sent_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($d as $dev)
                    <tr>
                        <td>{{$dev->data}}</td>
                        <td>{{$dev->sent_at}}</td>
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
