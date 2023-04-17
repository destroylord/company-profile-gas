@extends('app')

@section('content')
@foreach ($sections as $section)
<section id="features" class="features">
  <div class="container">
    <div class="section-title">
      <h2>{{ $section->title }}</h2>
      <p>{{ $section->short_description }}</p>
    </div>
      @if ($section->id == 1)
          @include('sections.features')
      @endif
      @if ($section->id == 2)
          @include('sections.shop-category')
      @endif
      @if ($section->id == 3)
          @include('sections.map')
      @endif
      @if ($section->id == 4)
        @include('sections.content-section')
      @endif
      @if ($section->id == 5)
          <div id="tentang-kami"></div>
      @endif
      @if ($section->id == 6)
          @include('sections.career')
      @endif
  </div>
</section>
@endforeach

@endsection