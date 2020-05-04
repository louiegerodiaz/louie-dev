<article @php post_class() @endphp>
  <img class="viewports__thumbnail" src="{{ get_the_post_thumbnail_url() }}" alt="">
  <h2 class="viewports__title h6"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  <!--
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div> -->
</article>
