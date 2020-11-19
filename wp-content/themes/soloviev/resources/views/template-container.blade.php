{{--
  Template Name: Container Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
      <div class="container mx-auto px-6 py-8 sm:px-6 md:pb-20 lg:px-8 lg:py-12 lg:pb-24">
        <div class="prose max-w-none">
          @php(the_content())
        </div>
      </div>
    @endwhile
@endsection
