@extends('index')

@include('site.partials._common')

@section('content')
  <div class="main">
    {{-- include top --}}
    @include('site.partials._top')
    @include('site.partials._navigation_top')
    <div class="index-content">
      <div class="contr">
        @include('site.index._content')
      </div>
    </div>
  </div>
@endsection