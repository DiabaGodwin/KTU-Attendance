<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="{{ asset('js/chart.js') }}"></script> -->
{{--    <link rel="stylesheet"  type="text/css" href="{{ asset('css/qr-interface.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('css/addcourse.css')}}">--}}
    <link rel="stylesheet" type="text/css"  href="{{ asset('bootstrap/css/bootstrap.css')}}">
{{--    <link rel="stylesheet" type="text/css"  href="{{ asset('css/classes.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/home.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/classlist.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/profile.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/analytics.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <script src="{{ mix('js/chart.js') }}"></script>
    <title>Attendify</title>

</head>
<body style="background-color: #1E1E1E;">
    {{$slot}}
    <script src="{{asset('js/sidebar.js')}}"></script>
    <script src="{{ mix('js/chart.js') }}"></script>
</body>
</html>





