@if(is_front_page())
  @include('partials.front-page')
@endif

@include('partials.header')

@if(is_front_page())
  <div class="pointer-events-none pt-100vh"></div>
@endif
<div class="relative z-30">
  <main class="bg-c-gray-100 main">
    @yield('content')
  </main>
</div>

@include('partials.footer')

