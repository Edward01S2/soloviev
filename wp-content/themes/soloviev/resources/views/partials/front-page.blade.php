<div class="fixed z-10 w-screen h-screen max-w-full">
  <div class="relative flex w-full h-full outline-none">
    <div class="w-full h-full swiper-container home-slider">
      <div class="swiper-wrapper">

        @foreach($block as $item)
          <div class="relative overflow-hidden swiper-slide">
            <div class="container relative z-30 h-full px-4 py-12 mx-auto content md:px-6 md:py-16">
              <h1 class="text-5xl font-bold leading-tight text-white font-mandrel md:text-6xl md:w-3/4 md:leading-none lg:w-3/5 lg:leading-tight" data-swiper-parallax="-200">{!! $item['field_home_landing_items_title'] !!}</h1>
              @if($item['field_home_landing_items_subtitle'])
                <div class="absolute bottom-0 right-0 mb-24 mr-4 text-sm leading-tight text-white md:mr-6 md:mb-28" data-swiper-parallax="-250">{!! $item['field_home_landing_items_subtitle'] !!}</div>
              @endif
            </div>
            <div class="absolute inset-0 z-20 w-full h-full bg-black opacity-25"></div>
            <div class="absolute inset-0 z-10 w-full h-full bg-center bg-cover" data-swiper-parallax="25%" style="background-image:url('{!! wp_get_attachment_url($item['field_home_landing_items_image']) !!}')"></div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
</div>

{{-- field_home_landing_items_subtitle --}}