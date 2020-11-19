<footer id="contact" class="relative z-30 bg-c-green-300 section">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col py-12 md:py-20 lg:pt-28">

      <div class="md:flex md:pb-16">
        <div class="mb-12 md:w-1/2">
          <h3 class="mb-4 text-2xl leading-tight text-white font-mandrel md:text-3xl lg:text-4xl">{!! $title !!}</h3>
          <p class="mb-8 text-c-green-50 md:pr-24">{!! $subtext !!}</p>
          <div class="leading-snug prose lg:prose-lg max-w-none text-c-green-50">
            {!! $content !!}
          </div>
        </div>

        <div class="mb-8 md:w-1/2">
          <div class="footer-form">
            @include('partials.form', ['form' => $form])
          </div>
        </div>
      </div>


      <div class="pt-8 md:flex md:items-center md:justify-between">
        <div class="flex items-center space-x-2 md:space-x-4">
          <img class="h-10 md:h-12" src="{!! $logo['url'] !!}" alt="">
          <div class="text-xs text-white md:text-sm">
            &copy; <?php echo date ('Y'); ?> {!! $footer !!}
          </div>
        </div>
        <div class="hidden md:block">
          <button class="p-2 transition duration-300 transform rounded-full bg-c-red-100 hover:scale-110 return-top focus:outline-none">
            <svg class="w-4 h-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>

    </div>
  </div>
  
</footer>
