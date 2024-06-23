<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <meta charset="utf-8">
    <title>Oklahoma Touchdown Club</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="index, follow" />
        <link rel="canonical" href="https://outdclub.com" />
        <meta name="description" content="University of Oklahoma Touchdown Club" />
        <!-- TWITTER AND OG cards -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="https://outdclub.com" />
        <meta name="twitter:title" content="University of Oklahoma Touchdown Club" />
        <meta name="twitter:image" content="">

        <meta property="og:locale" content="en_US" />
        <meta property="og:title" content="University of Oklahoma Touchdown Club" />
        <meta property="og:description" content="University of Oklahoma Touchdown Club" />
        <meta property="og:url" content="https://outdclub.com" />
        <meta property="og:site_name" content="University of Oklahoma Touchdown Club" />
        <meta property="og:image" content="https://outdclub.com/img/2touchdown-club-logo_small.png" />
        <meta property="og:image:width" content="250" />
        <meta property="og:image:height" content="243" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<div>
   @include('partials.nav')

    @yield('content')

    @include('partials.footer')
</div>
</body>
</html>

