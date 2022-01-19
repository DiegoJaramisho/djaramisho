<!DOCTYPE html>
<html lang="en">
@include('layouts.src.head')
<body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url({{asset('assets/img/main_bg.png')}}"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    @yield('content')

@include('layouts.src.scripts')
</body>
</html>
