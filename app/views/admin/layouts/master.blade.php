<!doctype html>
<html lang="en" ng-app="SearchHub">
    <head>
        <title>YTU Blogger Network</title>

        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/starter-template.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/flat-ui.css') }}">
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="{{ URL::asset('assets/js/html5shiv.js') }}"</script>            
        <![endif]-->
        
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/dashboard">Blogger</a>

                </div>                                


                @if(Session::has('user'))
                    <div class="pull-right">
                        <a class="navbar-brand pull-right" href="/logout">logout</a>
                    </div>
                    <div class="pull-right">
                        <a class="navbar-brand pull-right" href="/settings">settings</a>
                    </div>
                @endif                
                    
            </div>
        </div>

        <div class="container">            

            @yield('content')

        </div><!-- /.container -->
        
        

    </body>
    {{-- Scripts goes here, to load page faster --}}    
    <script src="{{ URL::asset('assets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>    
    <script src="{{ URL::asset('assets/js/jquery.validate.min.js') }}"></script>        
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-select.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-switch.js') }}"></script>
    <script src="{{ URL::asset('assets/js/flatui-checkbox.js') }}"></script>
    <script src="{{ URL::asset('assets/js/flatui-radio.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.tagsinput.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.placeholder.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.stacktable.js') }}"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="{{ URL::asset('assets/js/application.js') }}"></script>
</html>