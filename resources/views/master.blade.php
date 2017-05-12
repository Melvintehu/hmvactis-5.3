<?php

namespace App\Http\Controllers;

use Auth;
use App\Profile;

    $profiel = Profile::where('user_id', '=', Auth::id())->get();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>@yield('title') || HMV Actis</title>

        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
    </head>
    <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<style type="text/css">
    [v-clock] {
        display: none;
    }
</style>
    <body>

            @include('partials.header')
            @include('partials.navigation')
            @yield('banner')
            <div id="app" v-cloak>
              @yield('content')
            </div>
            @include('partials.footer')

        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-59969192-1', 'auto');
          ga('send', 'pageview');

        </script>

    </body>
</html>
