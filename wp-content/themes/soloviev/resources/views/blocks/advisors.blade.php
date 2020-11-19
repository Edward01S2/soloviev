<div id="board" class="{{ $block->classes }} bg-white section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-12">
      <div class="lg:max-w-2xl lg:mx-auto xl:max-w-3xl lg:pb-8 xl:pb-12">
        <h2 class="mb-12 text-2xl text-center text-black font-mandrel md:text-3xl md:leading-tight lg:text-4xl lg:mb-8">{!! $title !!}</h2>
      </div>
      <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
        @foreach($advisors as $item)
          <div class="flex flex-col lg:flex-row lg:space-x-6">
            <div class="mb-4 aspect-w-10 aspect-h-12 lg:flex-shrink-0 lg:w-2/5 lg:aspect-w-4 lg:aspect-h-2">
              <img class="object-cover object-center w-full h-full" src="{!! $item['image'] !!}" alt="">
            </div>
            <div class="lg:w-3/5">
              <div class="text-left">
                <a href="{!! $item['link'] !!}">
                  <div class="text-lg font-bold leading-tight text-black">{!! $item['name'] !!}</div>
                </a>
                <div class="mb-4 text-c-gray-600">{!! $item['title'] !!}</div>
                <div class="leading-snug prose text-c-gray-600 max-w-none">{!! $item['excerpt'] !!} <a class="underline text-c-blue-100 hover:text-c-green-100" href="{!! $item['link'] !!}">Read more...</a></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
