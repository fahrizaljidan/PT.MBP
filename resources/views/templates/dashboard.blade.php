<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  @yield('custom-head')
</head>

<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        @include('layouts.navbar')
        @include('layouts.sidebar')
  
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>@yield('page-name')</h1>
            </div>
  
            <div class="section-body">
              @yield('page-body')
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2023 <div class="bullet"></div> PT. Makro Borneo Plush | Aplikasi Cleaning Service</a>
          </div>
          <div class="footer-right">
            
          </div>
        </footer>
      </div>
    </div>
  
    @include('layouts.jsModule')
    @yield('custom-js')
  </body>
  </html>