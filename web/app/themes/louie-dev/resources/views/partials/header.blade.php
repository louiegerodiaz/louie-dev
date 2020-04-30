<header class="side">
  <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  <div class="contact">
    <p class="mb-2"><a class="link-underline" href="mailto:hello@louie.dev">hello@louie.dev</a></p>
    <p class="mb-0">Pasig City, Manila, PH</p>
  </div>
</header>
