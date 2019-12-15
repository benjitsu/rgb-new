{{--
  Template Name: About Template
--}}
@extends('layouts.app-min')

@section('content')
<section id="classHero">
        <div class="jumbotron about jumbotron-fluid mb-0">
        </div>
    </section>
    <div class="container classContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row position-relative">
    <h1 class="position-absolute">{!! App::title() !!}</h1>
    </div>
    <div class="row description">
        <div class="col-lg-7">
    @include('partials.content-page')
</div>
<div class="col-lg-4 offset-lg-1 mt-4 mt-lg-0">
  <div class="aboutSide"></div>
</div>
</div>
  @endwhile
  @include('partials.capture')
</div>
@endsection