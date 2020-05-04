@extends('layouts.app')

@section('content')
<div class="container blogPost">
<div class="row description">
<div class="col-lg-8 mx-auto mt-5">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
</div></div></div>