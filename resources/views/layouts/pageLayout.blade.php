<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('app.name', 'Warehousing system')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
</style>
</head>
<body>
    
    @if($logged ==true)

        @include ('inc.storekeeper-navbar')
    @endif
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

</body>
</html>               