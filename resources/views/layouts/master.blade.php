<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Ajax Crud</title>
        <!--bootstrap cdn-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- sweetalert-->
        <link rel="stylesheet" type="text/css" href="{{asset('sweetalert/sweetalert.css')}}">
        <!-- datatables cdn-->
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container" style="margin-top: 50px;">
        @yield('content')
    @yield('modal')
    </div>
        
    </body>
    <!--jquery-->
    <script   src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
    <!--bootstrap cdn-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- sweetalert-->
    <script src="{{asset('sweetalert/sweetalert.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <!-- datatables cdn-->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>

    @stack('scripts')
</html>
