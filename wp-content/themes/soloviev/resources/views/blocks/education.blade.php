<div id="education" class="{{ $block->classes }} section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="py-12">
      <div class="lg:max-w-2xl lg:mx-auto xl:max-w-3xl lg:pb-8 xl:pb-12">
        <h2 class="mb-4 text-2xl text-black font-mandrel md:text-3xl md:leading-tight lg:text-4xl lg:mb-8">{!! $title !!}</h2>
        <div class="leading-snug prose max-w-none lg:prose-lg lg:leading-normal">{!! $content !!}</div>
      </div>
      <div class="flex flex-col py-12 space-y-8 md:flex-row md:space-y-0 md:space-x-4 lg:justify-between lg:space-x-16">
        @foreach($items as $item)
          <a class="block w-3/5 mx-auto group md:w-1/3" href="{!! $item['file']['url'] !!}">
            <div>
              <img class="transition duration-300 transform group-hover:scale-105"src="{!! $item['image']['url'] !!}" alt="">
              <div class="text-center md:text-left md:pl-6 lg:pl-8">
                <div class="font-bold text-black">{!! $item['title'] !!}</div>
                <div class="text-c-gray-600">{!! $item['description'] !!}</div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
