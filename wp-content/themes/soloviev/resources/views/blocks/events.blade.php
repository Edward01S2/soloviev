@if($show)
  <div class="{{ $block->classes }}">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
      <div class="py-12 md:pb-20 lg:pb-24 xl:pb-28">
        <div class="lg:max-w-2xl lg:mx-auto xl:max-w-3xl">
          <h2 class="mb-4 text-2xl text-black font-mandrel md:text-3xl md:leading-tight lg:text-4xl lg:mb-8">{!! $title !!}</h2>
          <div class="leading-snug prose max-w-none lg:prose-lg lg:leading-normal">{!! $content !!}</div>
        </div>
        
        @if($upcoming)
          <div class="mt-16 lg:mt-24">
            <h3 class="mb-8 text-xl font-semibold md:text-2xl lg:mb-24 lg:max-w-2xl lg:mx-auto xl:max-w-3xl">Upcoming Events</h3>
            <div class="upcoming-slider swiper-container xl:max-w-5xl">
              <div class="swiper-wrapper">
                @foreach($upcoming as $item)
                  <div class="flex flex-col space-y-4 swiper-slide md:flex-row md:space-y-0 md:space-x-8 lg:space-x-12 xl:space-x-16">
                    <div class="w-full h-40 md:w-2/5 md:relative md:pb-2/5 lg:w-1/3 lg:pb-1/3">
                      <img class="object-cover object-center w-full h-full md:absolute md:inset-0 md:w-full md:h-full" src="{!! $item['image']['url'] !!}" alt="">
                    </div>
                    <div class="md:w-3/5">
                      <h4 class="text-lg font-bold leading-tight font-mandrel lg:text-2xl lg:mb-1 xl:text-2xl">{!! $item['title'] !!}</h4>
                      <div class="mb-4 text-sm font-semibold text-c-gray-600 lg:text-base">{!! $item['date'] !!}</div>
                      <div class="mb-8 leading-tight prose-sm max-w-none lg:prose lg:leading-snug xl:leading-normal">{!! $item['content'] !!}</div>
                      <a class="inline-block px-8 py-3 text-sm font-semibold text-white rounded-full bg-c-red-100 hover:opacity-75" href="{!! $item['link'] !!}">More Details</a>
                    </div>
                  </div>
                @endforeach 
              </div>
            </div>
            <div class="flex items-center justify-center mt-8 md:mt-12">
              <div class="flex items-center space-x-4">
                <div class="p-1 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 upcoming-swiper-prev hover:bg-opacity-50">
                  <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
                </div>
                <div class="upcoming-swiper-pagination"></div>
                <div class="p-1 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 upcoming-swiper-next hover:bg-opacity-50">
                  <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        @endif
        
        @if($past && !$upcoming)
          <div class="mt-16 border-b border-opacity-50 border-c-gray-400 lg:mt-24"></div>
        @endif

        @if($past)
          <div class="mt-16 lg:mt-24">
            <h3 class="mb-8 text-xl font-semibold lg:max-w-2xl md:text-2xl lg:mx-auto xl:max-w-3xl lg:mb-24">Past Events</h3>
            <div class="past-slider swiper-container xl:max-w-5xl">
              <div class="swiper-wrapper">
                @foreach($past as $item)
                  <div class="flex flex-col space-y-4 swiper-slide md:flex-row md:space-y-0 md:space-x-8 lg:space-x-12 xl:space-x-16">
                    <div class="w-full h-40 md:w-2/5 md:relative md:pb-2/5 lg:w-1/3 lg:pb-1/3">
                      <img class="object-cover object-center w-full h-full md:absolute md:inset-0 md:w-full md:h-full" src="{!! $item['image']['url'] !!}" alt="">
                    </div>
                    <div class="md:w-3/5">
                      <h4 class="text-lg font-bold leading-tight font-mandrel lg:text-2xl lg:mb-1 xl:text-2xl">{!! $item['title'] !!}</h4>
                      <div class="mb-4 text-sm font-semibold text-c-gray-600 lg:text-base">{!! $item['date'] !!}</div>
                      <div class="mb-8 leading-tight prose-sm max-w-none lg:prose lg:leading-snug xl:leading-normal">{!! $item['content'] !!}</div>
                      <a class="inline-block px-8 py-3 text-sm font-semibold text-white rounded-full bg-c-red-100 hover:opacity-75" href="{!! $item['link'] !!}">More Details</a>
                    </div>
                  </div>
                @endforeach 
              </div>
            </div>
            <div class="flex items-center justify-center mt-8 md:mt-12">
              <div class="flex items-center space-x-4">
                <div class="p-1 -ml-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 past-swiper-prev hover:bg-opacity-50">
                  <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
                </div>
                <div class="past-swiper-pagination"></div>
                <div class="p-1 -mr-px transition duration-150 border rounded-full cursor-pointer border-c-gray-600 past-swiper-next hover:bg-opacity-50">
                  <svg class="w-4 h-4 stroke-current text-c-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        @endif
        
      </div>
    </div>
    <div>
      <InnerBlocks />
    </div>
  </div>
@endif
