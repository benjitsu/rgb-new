{{--
  Template Name: Contact
--}}

@extends('layouts.app-min')

@section('content')
    <div class="container minContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row mt-5 mb-5">
    <h1>{!! App::title() !!}</h1>
    </div>
    <div class="row mt-5 mb-5">
    <div class="col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.3017148560903!2d-122.28095584885234!3d37.85323021531481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857e629c864151%3A0x40a5f9f069ed1de5!2sRalph%20Gracie%20Berkeley%20Jiu%20Jitsu%20Academy!5e0!3m2!1sen!2sus!4v1583734833013!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    </div>
    <div class="row description mb-5">

        <div class="col-lg-8 contactform order-2 order-lg-1">
    @include('partials.content-page')
</div>
  @endwhile
  <div class="col-lg-4 d-flex justify-content-lg-center align-items-center order-1 order-lg-2">
  <ul class="address">
                        <li class="map">Ralph Gracie Berkeley<br/>
                        1500 Ashby Ave<br />
                        Berkeley, CA 94703</li>
    <li>&nbsp;</li>
    
                        <li class="phone">(510) 486-8000</li>
                        <li class="email">info [at] ralphgracieberkeley.com</li>
                </ul>
  </div>
</div>

</div>
@endsection
