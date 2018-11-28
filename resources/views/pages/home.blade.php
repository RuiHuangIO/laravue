@extends('index')

@section('content')
  @component('partials.hero')
		Home page
	@endcomponent
  @include('partials.nav')
@endsection
