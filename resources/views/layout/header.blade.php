<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Swoopos">
    <meta name="keywords" content="Swoopos">
    <meta name="author" content="Swoopos">
    <title>WODJUNKIE</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="css/ickeck.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.min.css">
    <link rel="stylesheet" type="text/css" href="css/ckeckboxes-radios.min.css">
    <link rel="stylesheet" type="text/css" href="css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="css/palette-tooltip.min.css">
    <link rel="stylesheet" type="text/css" href="css/staff.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <style>
        .alert {
            position: absolute;
            width: 50%;
            border-radius: 0;
            z-index: 99999;
            margin: 0 auto;
            text-align: center;
            left: 30%;
        }
    </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    @include('layout.message')    
    @include('layout.menu')
        @include('layout.sidebar')
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-body">
                    @yield('section')
                </div>
            </div>
        </div>
        <footer class="footer footer-static footer-dark navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://www.lexxdigital.com/" target="_blank">LexxDigital </a>, All rights reserved. </span>
            </p>
        </footer>
    <script src="js/vendors.min.js" type="text/javascript"></script>
    <script src="js/icheck.min.js" type="text/javascript"></script>
    <script src="js/datatables.min.js" type="text/javascript"></script>
    <script src="js/app-menu.min.js" type="text/javascript"></script>
    <script src="js/app.min.js" type="text/javascript"></script>
    <script src="js/form-login-register.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/tagging.min.js" type="text/javascript"></script>
    <script src="js/taggin.min.js" type="text/javascript"></script>
    <script src="js/customizer.min.js" type="text/javascript"></script>
    <script src="js/datatable-basic.js" type="text/javascript"></script>
    <script src="js/checkbox-radio.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
        $("#add-more-work-timengs").click(function(){
            $("#add-more-timimg-wp").append('<div class="row mb-2"><div class="col-md-6"><div class="row"><label class="col-md-4 p-0 label-control" for="starttime">Start Time</label><div class="col-md-8"><input type="time" id="starttime" class="form-control" name="starttime"></div></div></div><div class="col-md-6"><div class="row"><label class="col-md-4 p-0 label-control" for="starttime">End Time</label><div class="col-md-8"><input type="time" id="endtime" class="form-control" name="endtime"></div></div></div></div>');
        });
    });
    </script>
</body>
</html>