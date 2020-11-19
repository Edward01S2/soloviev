<article @php(post_class([]))>
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">

    <div class="flex flex-col justify-between py-12 min-h-fixed md:pb-16">
      <div class="flex flex-col flex-grow md:flex-row md:space-x-6 lg:space-x-12">
        <div class="mb-4 aspect-w-10 aspect-h-12 md:w-2/5 md:flex-shrink-0 md:aspect-none md:mb-0 lg:w-1/3">
          <img class="object-cover object-center w-full h-full" src="{!! $image !!}" alt="">
        </div>
        <div class="md:w-3/5 lg:w-2/3">
          <div class="text-left">
            <h1 class="text-2xl font-bold leading-tight text-black md:text-3xl xl:text-4xl">{!! $name !!}</h1>
            <div class="mb-4 text-lg text-c-gray-600 lg:text-xl xl:text-2xl">{!! $position!!}</div>
            <div class="leading-snug prose text-c-gray-600 max-w-none lg:prose-lg lg:leading-snug">{!! $content !!}</div>
          </div>
        </div>
      </div>
    

      <div class="flex items-center justify-between pt-16 md:pt-24">
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold bg-white rounded-full md:text-sm" href="{{ home_url('/') }}#advisors">
          <svg class="w-4 h-4 mr-2 fill-current text-c-red-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg>
          <span>Back</span>
        </a>
        @if($next)
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold bg-white rounded-full md:text-sm" href="{!! get_permalink($next->ID) !!}">
          <span class="mr-2">Next: {!! $next->post_title !!}</span>
          <svg class="w-4 h-4 fill-current text-c-red-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
        @endif
      </div>
    </div>
  </div>  
</article>
