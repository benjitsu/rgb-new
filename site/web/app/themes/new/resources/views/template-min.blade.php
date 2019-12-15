{{--
  Template Name: Minimal Template
--}}

@extends('layouts.app-min')

@section('content')
    <div class="container minContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row mt-5 mb-5">
    <h1>{!! App::title() !!}</h1>
    </div>
    <div class="row description">
        <div class="col-lg-12">
    @include('partials.content-page')
</div>
  @endwhile
</div>
</div>
@endsection
