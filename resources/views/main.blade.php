<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel blog</title>

    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon">
    <meta name="robots" content="all"/>
</head>
<body>
<header class="header_fixed">
    <div class="container">
        <div class="row">


        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 footer_show">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="follow">


                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 regions_cont_footer">
                <div class="regions_cont_ul">

                </div>
            </div>

        </div>
    </div>
</footer>


<!-- Scripts-->
<script type="text/javascript" src="{{asset('/js/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/script.js')}}"></script>

</body>

</html>