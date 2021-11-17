<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "robots" content = "noindex,nofollow">
    <title>Artisan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div style="margin-top: 20px" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('artisan-error'))
                <div style="margin-top: 20px" class="alert alert-danger">
                    <ul>
                        <li>{{session('artisan-error')}}</li>
                    </ul>
                </div>
            @endif
            @if(session('artisan-result'))
            <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <pre class="text-info" style="margin-top: 20px">
                    {{session('artisan-result')}}
                </pre>
            </div>
            @endif
            <form action="{{route('artisan.perform')}}" method="post" style="margin-top: 20px">
                @csrf
                <div class="form-group">
                    <label for="artisan_form">Комманда</label>
                    <div class="input-group">
                        <div class="input-group-addon">php artisan</div>
                        <input type="text" name="command" class="form-control" id="artisan_form" placeholder="Введите команду (без префикса php artisan)">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Выполнить</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
