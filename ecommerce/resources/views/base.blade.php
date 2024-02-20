<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('titile')|{{config('app.name')}}</title>

</head>
<body>
    <div class="container">
        @if ($errors->any())
           
                <div class="alert alert-danger">
                    <strong>Errors</strong>
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item">
                             {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            
        @else
            
        @endif
        @yield('content')
    </div>
</body>
</html>