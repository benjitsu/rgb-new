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
</div>
<div class="container-fluid mb7 bg-light pt7 pb7">
  <div class="container">
<div class="row">
<div class="col-lg-10 mx-auto">
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//LXd-E8Yy-8M' frameborder='0' allowfullscreen></iframe></div>
</div>
</div>
</div>
</div>
  @endwhile
  @include('partials.capture')

@endsection