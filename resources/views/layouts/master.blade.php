
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/819588693606469636/OZIVZEEP.jpg">

    <title>Elain's Accountant Book</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>

@include('layouts.header')

<div class="container-fluid">
    <div class="row">
        @yield('sidebar')

        @yield('main')
    </div>
</div>

</body>
</html>
