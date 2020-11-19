<div id="who" class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-16 md:pb-16 md:pt-8 lg:pb-20 xl:pb-24">
      <img class="w-8 h-8 mx-auto mb-8" src="{!! $logo['url'] !!}" alt="">
      <h2 class="text-xl font-bold text-center font-mandrel text-c-green-300 md:text-3xl lg:text-4xl">{!! $content !!}</h2>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
