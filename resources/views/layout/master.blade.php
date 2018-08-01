<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" size="32x32" href="{{URL::asset('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/business-casual.css')}}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59988056-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<!--header-->
<div class="brand">Passaic Vision Vision Center</div>
<div class="address-bar"> 289 Monroe Street | Passaic, NJ 07055 | 973.473.5151</div>

<!--navigation-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"> Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Passaic Vision</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="current"><a href="home">Home</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="staff">Physicians</a></li>
            </ul>
        </div>
    </div><!--header-->
</nav><!--/header-wrapper-->


@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; 205Ventures 2015</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/pvcllc"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/pvcllc"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://www.google.com/+Passaicvisioncenterllc"><i class="fab fa-google-plus-square fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script>
    $('.carousel').carousel({
        iterval:3000
    });
</script>
</body>
</html>