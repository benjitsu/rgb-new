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
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12606.348640386133!2d-122.2815603!3d37.8231379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72eec717b614ecdd!2sGuardian%20Gym!5e0!3m2!1sen!2sus!4v1577260516649!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
