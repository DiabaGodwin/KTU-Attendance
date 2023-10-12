<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="{{ asset('js/chart.js') }}"></script> -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <script src="{{ mix('js/chart.js') }}"></script>
    <title>Attendify</title>

</head>
<body style="background-color: #1E1E1E;">
    {{$slot}}
    <script src="{{asset('js/sidebar.js')}}"></script>
    <script src="{{ mix('js/chart.js') }}"></script>

  <!-- Modal Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





