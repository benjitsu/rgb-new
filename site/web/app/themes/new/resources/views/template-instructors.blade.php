{{--
  Template Name: Instructors Template
--}}
@extends('layouts.app-min')

@section('content')

    <div class="container classContent mb7">
  @while(have_posts()) @php the_post() @endphp
    <div class="row mt-5 mb-5">
    <h1>{!! App::title() !!}</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 mr-auto ml-auto">
    @include('partials.content-page')
</div>
</div>
  @endwhile
  <section id="capture" class="mt7">
    @include('partials.capture')
                    </section>
</div>
@endsection
