<article @php(post_class([]))>
  <div class="relative">
    <img class="absolute inset-0 z-10 object-cover object-center w-full h-full" alt="" src="{!! $bg !!}">
    <div class="container relative z-20 px-4 mx-auto sm:px-6 lg:px-8">
      <div class="py-16 md:py-24 lg:py-28 xl:py-40">
        <h1 class="mb-4 text-4xl leading-none text-white font-mandrel md:text-5xl md:w-3/4 lg:w-1/2 lg:leading-tight xl:text-6xl xl:w-3/5">{!! $title !!}</h1>
        <div class="text-lg font-semibold text-white xl:text-xl">{!! $date !!}</div>
      </div>
    </div>
  </div>

  @if(!$past)

  <div class="container px-4 mx-auto bg-white sm:px-6 lg:px-8 lg:max-w-3xl xl:max-w-4xl">
    <div class="pt-8 pb-12 md:pt-12 md:pb-16 lg:py-16 lg:px-12 lg:pb-24">
      <h2 class="mb-4 text-2xl font-mandrel md:text-3xl lg:mb-8">About the event</h2>
      <div class="leading-snug prose max-w-none text-c-gray-600">{!! $about !!}</div>
      @if($photo)
        <div class="mt-8 aspect-w-16 aspect-h-9 md:mt-12 lg:mt-16">
          <img class="object-cover object-center w-full h-full" src="{!! $photo['url'] !!}" alt="">
        </div>
      @endif
      <div class="flex flex-col mt-8 space-y-8 md:flex-row md:space-y-0 md:space-x-16 lg:mt-12">
        <div class="md:w-1/2">
          <h2 class="mb-4 text-2xl font-mandrel md:text-3xl md:mb-8">Important Info</h2>
          <ul class="ml-5 list-disc text-c-gray-600">
            <li>{!! $date !!}</li>
            <li>{!! $start !!}@if($end) - {!! $end !!}@endif</li>
            <li>{!! $location !!}</li>
            @if($registration)
              <li>{!! $registration !!}</li>
            @endif
            @if($additional)
              <li>{!! $additional !!}</li>
            @endif
          </ul>
        </div>
        <div class="md:w-1/2">
          <h2 class="mb-4 text-2xl font-mandrel md:text-3xl md:mb-8">Important Links</h2>
          <ul class="ml-5 list-disc">
            @foreach($links as $link)
              <li><a class="underline text-c-blue-100 hover:opacity-50" href="{!! $link['link']['url'] !!}">{!! $link['link']['title'] !!}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="container px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-3xl xl:max-w-4xl">
      <div class="py-12 md:py-16 lg:py-24">
        <h2 class="text-2xl text-center font-mandrel md:text-3xl">Sponsors</h2>
        <div class="grid grid-cols-2 pt-8 gap-x-12 gap-y-6 md:grid-cols-4 md:gap-y-6 md:gap-x-16 lg:pt-12">
          @foreach($sponsors as $item)
            <a href="{!! $item['url'] !!}">
              <img class="w-full h-auto" src="{!! $item['logo']['url'] !!}" alt="">
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @else
    @if($show_video)
      <div class="container px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-3xl xl:max-w-4xl">
        <div class="pt-12 md:pt-16">
          <a class="relative block aspect-w-16 aspect-h-9 group" href="{!! $video_link !!}" data-lity>
            <img class="object-cover object-center w-full h-full" src="{!! $video_bg['url'] !!}" alt="">
            <div class="flex items-center justify-center w-full h-full">
              <div class="p-3 transform bg-white rounded-full group-hover:scale-105 transition-300 shadow-c1">
                <svg class="h-8 ml-1 text-black fill-current w-7 md:h-10 md:w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
              </div>
            </div>
          </a>
        </div>
      </div>
    @endif
    
    <div class="container px-4 mx-auto sm:px-6 lg:px-8 md:max-w-xl lg:max-w-2xl xl:max-w-3xl">
      <div class="py-12 md:py-16 md:pb-24">
        <h2 class="mb-4 text-2xl font-mandrel md:text-3xl lg:mb-8">About the event</h2>
        <div class="leading-snug prose max-w-none text-c-gray-600">{!! $about !!}</div>
      </div>
    </div>

    @if($show_gallery)
      <div class="overflow-hidden bg-c-black-100">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
          <div class="py-12 md:py-16 lg:py-20">
            <h2 class="mb-4 text-2xl text-center text-white font-mandrel md:text-3xl lg:mb-8">Scrolling Photo Gallery</h2>
            <div class="py-8 pb-12">
              <div class="gallery-slider swiper-container">
                <div class="swiper-wrapper">
                  @foreach($gallery as $item)
                    <div class="flex items-center swiper-slide">
                      <img class="w-full h-auto" src="{!! $item['url'] !!}" alt="">
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            @if($gallery_link)
              <div class="text-center">
                <a class="inline-block px-8 py-3 text-sm text-white rounded-full bg-c-blue-100 hover:opacity-75" href="{!! $gallery_link['url'] !!}">{!! $gallery_link['title'] !!}</a>
              </div>
            @endif
          </div>
        </div>
      </div>
    @endif

    @if($show_press)
      <div class="container px-4 mx-auto sm:px-6 lg:px-8">
        <div class="py-12 md:py-16 md:pb-24">
          <h2 class="mb-8 text-2xl text-center font-mandrel md:text-3xl md:mb-12">Press</h2>
          <div class="grid grid-cols-1 gap-y-8 md:grid-cols-2 md:gap-x-12 md:gap-y-12 lg:grid-cols-3 lg:gap-16 lg:gap-y-24">
            @foreach($press as $item)
              <div>
                <div class="mb-4 leading-snug prose max-w-none text-c-gray-600">{!! $item['content'] !!}</div>
                <div>{!! $item['publication'] !!}</div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    @endif
  @endif
</article>