<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>API</title>
    @livewireStyles
</head>
<body>
    <livewire:show-contacts/>


    @livewireScripts
    <script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
