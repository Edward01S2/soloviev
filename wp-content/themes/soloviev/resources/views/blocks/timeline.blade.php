@if($show)
<div id="shared" class="{{ $block->classes }} section">

  <div class="overflow-hidden bg-c-gray-200">
    <div class="py-12 md:py-16 lg:py-20">

      <div class="container px-4 mx-auto sm:px-6 lg:px-8">
        <div class="md:flex md:justify-between md:items-center">
          <h2 class="mb-6 text-2xl text-black font-mandrel md:text-3xl md:mb-0 md:leading-tight lg:text-4xl">{!! $title !!}</h2>
          <div class="">
            <a class="inline-block px-6 py-3 text-sm font-semibold text-white rounded-full bg-c-red-100 hover:opacity-75" target="_blank" href="{!! $pdf['url'] !!}">{!! $pdf['title'] !!}</a>
          </div>
        </div>
      </div>

      <div class="py-12">
        <div class="relative bg-stripes">
          <div class="container mx-auto swiper-container timeline-slider">
            <div class="px-4 pt-8 pb-16 swiper-wrapper sm:px-6 lg:px-8">
              @foreach($posts as $post)
                <div class="flex items-center swiper-slide" data-year="{!! $post['year'] !!}">
                  <div class="bg-white shadow-c2">
                    @if($post['image'])
                      <img class="object-cover object-center w-full h-40 sm:h-48" src="{!! $post['image']['url'] !!}" alt="">
                    @endif
                    <div class="p-8 lg:p-10">
                      <div class="mb-2 text-4xl font-bold leading-none text-c-gray-300">{!! $post['year'] !!}</div>
                      <h4 class="mb-2 text-xl font-bold leading-tight font-mandrel">{!! $post['title'] !!}</h4>
                      <div class="leading-tight prose-sm max-w-none text-c-black-100">{!! $post['content'] !!}</div>
                    </div>
                  </div>
                </div>
              @endforeach
              {{-- <div class="flex items-center invisible swiper-slide"></div> --}}
            </div>
            
          </div>

          <div class="flex justify-between w-full timeline-btns">
            <div class="left-0 inline-block p-2 ml-2 rounded-full timeline-btn-prev bg-c-red-100 timeline-btn lg:ml-6 xl:ml-12">
              <svg class="w-4 h-4 text-white fill-current lg:w-5 lg:h-5 xl:h-6 xl:w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="right-0 inline-block p-2 mr-2 rounded-full timeline-btn-next bg-c-red-100 timeline-btn lg:mr-6 xl:mr-12">
              <svg class="w-4 h-4 text-white fill-current lg:w-5 lg:h-5 xl:w-6 xl:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>

        </div>
      </div>


      <div class="container mx-auto">
        <div class="px-4 sm:px-6 lg:px-8">

          <div class="timeline-range-container">
            <input id="timeline-range" class="w-full md:px-3 lg:px-6" type="range" min="{!! $years['min_100'] !!}" max="{!! $years['current'] !!}" step="1" value="{!! $years['min'] !!}">
            <svg class="px-2 -mt-6 timeline-ticks md:px-0" role="presentation" width="100%" height="20" xmlns="http://www.w3.org/2000/svg">
              @php($tick = 5)
              @foreach($years['step_10'] as $step)
                @if($step % 50 == 0)
                <rect class="range__tick__50" x="{!! $tick !!}%" y="3" width="2" height="20"></rect>
                @else
                  <rect class="range__tick" x="{!! $tick !!}%" y="3" width="2" height="10"></rect>
                @endif
                @php($tick = $tick + 95/$loop->count)
              @endforeach
              {{-- <rect class="range__tick" x="100%" y="3" width="2" height="13"></rect> --}}

            </svg>
            <svg class="px-2 mt-2 md:hidden" role="presentation" width="100%" height="15" xmlns="http://www.w3.org/2000/svg">
              @php($tick = 5)
              @foreach($years['step_10'] as $step)
                @if($step % 100 == 0)
                  <text class="year-100 range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @elseif($step % 50 == 0)
                  <text class="hidden md:block range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @else
                  <text class="hidden range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @endif
                
                @php($tick = $tick + 95/($loop->count) )
                {{-- <rect class="range__tick" x="{!! $tick !!}%" y="3" width="2" height="10"></rect> --}}
  
              @endforeach
            </svg>

            <svg class="hidden px-3 mt-2 timeline-all-years md:block lg:px-4 xl:px-6" role="presentation" width="100%" height="15" xmlns="http://www.w3.org/2000/svg">
              @php($tick = 3.5)
              @foreach($years['step_25'] as $step)
                @if($step % 100 == 0)
                  <text class="year-100 range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @elseif($step % 50 == 0)
                  <text class="hidden md:block range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @else
                  <text class="range__point" x="{!! $tick !!}%" y="14" text-anchor="middle">{!! $step !!}</text>
                @endif
                
                @php($tick = $tick + 96.5/($loop->count) )
                {{-- <rect class="range__tick" x="{!! $tick !!}%" y="3" width="2" height="10"></rect> --}}
  
              @endforeach
              <text class="range__point" x="97.7%" y="14" text-anchor="middle">{!! $years['current'] !!}</text>
            </svg>

            @php($timelineDates = json_encode($years['all']))
            <script>
              var timelineDates = <?php echo $timelineDates; ?>
            </script>
          </div>


          <div class="flex pt-8 space-x-8 md:pt-12">
            <div class="flex-shrink-0 font-semibold text-c-red-100">Jump to:</div>
            <div class="flex flex-wrap">
              @foreach($posts as $post)
                <button class="inline mr-4 tl-jump focus:outline-none" data-index="{!! $loop->index !!}">{!! $post['year'] !!}</button>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>

@endif
