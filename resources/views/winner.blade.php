<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winner List  </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            @forelse($winners as $key => $winner)
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Winner List ({{\Carbon\Carbon::parse($key)->format('d-m-Y')}})</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Pseudo</th>
                                    <th>Price</th>
                                    <th>Predict Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($winner as $w)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$w->contests->email}}</td>
                                        <td>{{$w->contests->phone}}</td>
                                        <td>{{$w->contests->pseudo}}</td>
                                        <td>{{$w->contests->price}}</td>
                                        <td>{{\Carbon\Carbon::parse($w->contests->created_at)->format('d-m-Y g:i A')}}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</body>
</html>
