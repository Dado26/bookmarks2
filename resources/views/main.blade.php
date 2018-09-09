<html>
    <head>
        <title>@yield('title', 'Kuhinjica')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
      
      

      
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 

      <link rel="stylesheet" href="{{mix('/css/app.css')}}">
      
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 backgroundCol">
                    @yield('content')
                    @yield('contact')
                </div>
                
            </div>
            
        </div>
        
        <script src="{{ mix('/js/app.js') }}"></script>
       <!-- <script src="{{asset('js/jquery.js')}}"></script> -->

    </body>
</html>
