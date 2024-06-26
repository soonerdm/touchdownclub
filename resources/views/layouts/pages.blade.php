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
    <meta name="twitter:site" content="https://outdclun.com" />
    <meta name="twitter:title" content="University of Oklahoma Touchdown Club" />
    <meta name="twitter:image" content="https://outdclub.com/img/2touchdown-club-logo_small.png">

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
    <style>
    <!-- BEGIN FOXYCART FILES -->
    <link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdn.foxycart.com/outdclub/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
    <!-- END FOXYCART FILES -->

        .hero-banner {
             background-image: url( '../img/player-flag2.jpg' );
             background-size: cover;
             background-position: center;
             height: 300px;
           }

           .hero-banner h1 {
             color: #ffffff;
             text-align: center;
             padding-top: 120px;
             font-size: 36px;
           }

           .info-box-link {
                 display: flex;
                 align-items: center;
                 color: #841617;
                 text-decoration: none; /* Remove underline for the anchor element */
               }
               .info-box {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  width: 100%;
                  max-width: 400px; /* Adjust this value as needed */
                  height: 80px; /* Adjust this value as needed */
                  border: 2px solid black;
                  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
                  margin: 16px;
                  font-family: serif;
               }

               .info-box p {
                 text-align: center;
                 font-size: 24px;
               }
               .form-box{
                 align-items: center;
                 justify-content: center;
                 width: 100%;
                 max-width: 800px; /* Adjust this value as needed */
                   padding: 16px;
                 border: 2px solid black;
                 box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
                 margin: 16px;

               }
         </style>
           <link rel="stylesheet" href="css/main.css">
         <!-- BEGIN FOXYCART FILES -->
         <link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8">
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
         <script src="//cdn.foxycart.com/outdclub/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
         <!-- END FOXYCART FILES -->
</head>
<body>
<div>
   @include('partials.nav')
 <div class="hero-banner">
     <h1>{{$banner_title}}</h1>
  </div>
    <div>
    @yield('content')
    </div>
    @include('partials.footer')
</div>
</body>
</html>
