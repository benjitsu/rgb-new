{{--
  Template Name: Class Template
--}}
@extends('layouts.app-min')

@section('content')
<section id="classHero">
        <div class="jumbotron @php   
        $the_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
$slug = $the_page->post_name;
echo $slug;
        @endphp jumbotron-fluid mb-0">
        </div>
    </section>
    <div class="container classContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row position-relative">
    <h1 class="position-absolute">{!! App::title() !!}</h1>
    </div>
    <div class="row description">
        <div class="col-lg-8">
    @include('partials.content-page')
</div>
<div class="col-lg-4 sideBar"></div>
</div>
  @endwhile
  <section id="capture">
    @include('partials.capture')
                    </section>
</div>
@endsection
