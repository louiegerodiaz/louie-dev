<a class="link-none" href="javascript:history.back()">&#8592; Go Back</a>

<article @php post_class() @endphp>
  <header>
    <div class="entry-date mt-5">
      @include('partials/entry-time')
    </div>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content mt-5">
    @php the_content() @endphp
  </div>
</article>
