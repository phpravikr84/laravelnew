<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ URL::to('public/admin/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
       

    @include('includes.header')
    @include('includes.sidebar')

       <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                    <div class="col-lg-6">

                    <h1> Welecome to Dashboard </h1>

                    @yield('content')

                    </div>

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ URL::to('public/admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::to('public/admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('public/admin/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::to('public/admin/assets/js/main.js') }}"></script>

</body>
</html>
