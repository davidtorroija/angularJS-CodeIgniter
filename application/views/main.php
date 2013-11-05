<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- build:css(.tmp) styles/main.css -->
        <link rel="stylesheet" href="web/dist/styles/a281a2e5.main.css">
        <!-- endbuild -->
</head>
  <body ng-app="mainApp">

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="web/app/bower_components/es5-shim/es5-shim.js"></script>
      <script src="web/app/bower_components/json3/lib/json3.min.js"></script>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container" ng-view=""></div>
    <span>{elapsed_time}</span>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <script src="web/app/bower_components/jquery/jquery.js"></script>
    <script src="web/app/bower_components/angular/angular.js"></script>

        <!-- build:js scripts/plugins.js -->
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-affix.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-alert.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-dropdown.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-tooltip.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-modal.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-transition.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-button.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-popover.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-typeahead.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-carousel.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-scrollspy.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-collapse.js"></script>
        <script src="web/app/bower_components/bootstrap-sass/js/bootstrap-tab.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/modules.js -->
        <script src="web/app/bower_components/angular-resource/angular-resource.js"></script>
        <script src="web/app/bower_components/angular-cookies/angular-cookies.js"></script>
        <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="web/app/scripts/app.js"></script>
        <script src="web/app/scripts/controllers/main.js"></script>
        <!-- endbuild -->

</body>
</html>