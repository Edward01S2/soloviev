<div id="about" class="{{ $block->classes }} section">
  <div class="relative z-10 aspect-w-16 aspect-h-9 lg:aspect-h-7 xl:aspect-h-6">
    <img class="object-cover object-center w-full h-full" src="{!! $bg['url'] !!}" alt="">
  </div>
  <div class="container relative z-20 px-4 pb-12 mx-auto -mt-8 sm:px-6 lg:px-8 md:-mt-16 lg:-mt-20 xl:-mt-24 md:pb-16 lg:pb-20 xl:pb-24">
    <div class="relative p-10 -mt-4 bg-white shadow-c4 md:py-20 md:px-32 md:max-w-2xl md:mx-auto xl:max-w-3xl xl:px-36 xl:py-24">
      <div class="absolute top-0 left-0 right-0 z-20 w-16 h-1 mx-auto bg-c-green-200"></div>
      <div class="relative z-10 leading-tight prose max-w-none text-c-green-300 lg:prose-lg lg:leading-tight">
        {!! $letter !!}
      </div>
      <div class="pt-8 pb-4">
        <img class="h-40" src="{!! $signature['url'] !!}" alt="">
      </div>
      <div class="text-sm leading-tight lg:text-base">
        {!! $subtext !!}
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
