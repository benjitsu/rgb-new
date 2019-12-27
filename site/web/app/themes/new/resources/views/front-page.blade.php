@extends('layouts.app-min')

@section('content')
<main role="main">
    <section id="homeHero" class="reveal">
        <div class="jumbotron jumbotron-fluid">
        </div>
    </section>
    <div class="captureFloat">
    @include('partials.capture')
</div>
    <section id="homePrograms" class="reveal">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Our Programs</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="/metcon">
                    <div class="program metcon"></div>
                    <div class="name">Brazilian Jiu-Jitsu</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program strength"></div>
                    <div class="name">No Gi Grappling</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program functional"></div>
                    <div class="name">Judo</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program personal"></div>
                    <div class="name">Wrestling</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program bjj"></div>
                    <div class="name">Mobility Training</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program muaythai"></div>
                    <div class="name">Kids Jiu-Jitsu</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="homeBjj" class="reveal">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                    <h2>Brazilian Jiu-Jitsu is For Everyone</h2>
                    <p>Brazilian Jiu-Jitsu is martial art that focuses on leverage and control to defeat an opponent, whether in a competition or a self-defense situation. Jiu-Jitu is often referred to a human chess, as it requires the body and mind to work simultaneously in a technical battle against another person. For the body, Jiu-Jitsu is an excellent way to improve physical fitness, balance, and coordination. For the mind, Jiu-Jitsu helps to build confidence, focus, and reduce stress.</p>

<p>Whether you are young or old, currently in shape or not, you can enjoy and benefit of practicing Jiu-Jitsu. Students at Ralph Gracie Berkeley practice Jiu-Jitsu for a variety of reasons. Some attend primarily to improve fitness and learn a new art form, while others train to compete in tournaments and test themselves against others. All students enjoy the camaraderie and community we’ve cultivated at the academy.</p>

                    </div>
                    <div class="col-lg-4 offset-lg-1 mt-md-4 mt-sm-4">
                        <div class="sideImg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="homeMeetus">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Come Meet Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1 mt-4 mt-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12606.348640386133!2d-122.2815603!3d37.8231379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72eec717b614ecdd!2sGuardian%20Gym!5e0!3m2!1sen!2sus!4v1577260516649!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-4 details d-flex justify-content-lg-center align-items-lg-center order-1 order-lg-2 ">
                   <div class="mb-2">
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
        </div>
    </section>
    <section id="capture">
    @include('partials.capture')
                    </section>
</main>
@endsection