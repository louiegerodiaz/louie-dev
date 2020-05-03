<article @php post_class('d-flex mb-5') @endphp>
  <div class="entry-date">
    @include('partials/entry-time')
  </div>
  <div class="entry-content col pl-5">
    <header>
      <h5 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h5>
    </header>
    {!! get_the_excerpt() !!}
  </div>
</article>
