<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}"> 
</head>

<body>
  <div id="app">
    <section class="section">
      @yield('page-body')
    </section>
</div>    
    
    @include('layouts.footer')
    
    <!-- JS Libraies -->
    @include('layouts.jsModule')
    <!-- Page Specific JS File -->
    <script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
        <script>
            iziToast.show({
                title   : 'Error',
                message : '{{$error}}',
                position: 'topRight',
                color   : 'red',
                timeout : 3000,
            });
        </script>
        
        @endforeach
    @endif
    
</body>
</html>