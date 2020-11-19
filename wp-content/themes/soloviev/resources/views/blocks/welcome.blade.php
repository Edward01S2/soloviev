<section id="welcome" class="relative overflow-hidden section section-1">
  <div class="py-12 md:flex md:py-16">
    <div class="relative z-20 px-4 pb-12 md:w-1/2 md:order-1 md:mx-0 md:pr-12 md:px-6 md:max-w-384 md:ml-auto lg:pl-8 lg:pr-24 lg:max-w-512 xl:max-w-screen-sm xl:ml-auto">
      <h1 class="mb-4 text-2xl text-black font-mandrel md:text-3xl md:leading-tight lg:text-4xl lg:mb-8 xl:w-4/5">{!! $title !!}</h1>
      <div class="leading-tight prose max-w-none text-c-gray-600 lg:prose-lg lg:leading-6 xl:w-4/5 xl:leading-7">{!! $content !!}</div>
      <div class="mt-6 md:mt-8 lg:mt-10">
        <a class="inline-flex items-center px-6 py-3 bg-white rounded-full md:px-8 text-c-black-100 shadow-c1 who-btn hover:shadow-inner" href="{!! $link['url'] !!}">
          <span class="pr-4 text-sm font-semibold">{!! $link['title'] !!}</span>
          <svg class="w-5 h-5 text-c-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
    <div class="md:w-1/2 md:relative md:order-2">
      <div class="aspect-w-16 aspect-h-9 md:aspect-h-14 xl:aspect-h-8">
        <img class="object-cover object-center w-full h-full" src="{!! $image['url'] !!}"/>
      </div>
      @if($caption)
        <div class="px-4 mt-4 text-sm leading-tight text-c-gray-600 md:px-0">{!! $caption !!}</div>
      @endif
    </div>
  </div>
</section>       