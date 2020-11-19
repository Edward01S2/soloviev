<nav id="nav" x-data="{open: false}" class="relative z-50 w-full bg-white">
  <div class="container px-4 py-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex items-center justify-between">

      <div class="lg:flex-shrink-0">
        <div class="flex items-center flex-shrink-0 md:justify-center">
          <a href="{{ home_url('/') }}" class="hover:opacity-50">
            <img id="logo-main" class="w-auto h-10 md:h-12" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="items-center hidden nav-container lg:flex lg:space-x-8 xl:space-x-8">
        @foreach ($navigation as $item)
          <a class="nav-link text-sm tracking-widest text-black focus:outline-none group transition duration-150 ease-in-out border-b-2 border-transparent hover:border-c-green-200{{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{!! $item->target !!}">
            <div class="nav-text">{{ $item->label }}</div>
          </a>
        @endforeach
      </div>

      <div class="flex items-center lg:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center mr-auto text-black transition duration-150 ease-in-out rounded-md focus:outline-none" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="bg-white shadow-md lg:hidden" x-cloak>
    <div @click.away="open = false" class="py-12 pt-4 md:px-2">
      <ul class="flex flex-col space-y-6">
        @foreach ($navigation as $item)
          <li class="group relative px-4 transition duration-150 ease-in-out {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a @click="open = false" class="inline-block text-lg tracking-wider text-black transition duration-300 ease-in-out border-transparent border-b-3 hover:font-bold hover:border-white focus:outline-none md:text-base" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>