@extends('layouts.app')

@section('content')
	<div class="container">
		@foreach($articles as $article)
			<h3>{{ $article->title }}</h3>
			<p>{{ $article->content }}</p>
		@endforeach
	</div>
@endsection