<header class="banner reveal">
    <nav class="navbar navbar-expand-lg navbar-dark bg-faded">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <button class="hamburger hamburger--vortex d-lg-none" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (has_nav_menu('primary_navigation'))
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
@endif
</div>
    </nav>
</header>

