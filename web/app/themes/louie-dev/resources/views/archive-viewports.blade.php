@extends('layouts.app')

@section('content')
  <div class="page-header mb-5">
    <h4 class="main-sub">curated list of my favorite sites</h4>
    <h1 class="main-title">{!! post_type_archive_title( '', false ) !!}</h1>
  </div>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="viewport-list">
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
