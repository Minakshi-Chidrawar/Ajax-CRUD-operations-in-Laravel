@extends('layout')
@section ('title', 'Select Winners')

@section('content')
    @include('selectWinner.form')

	<div class="container withBorder">
		@include('selectWinner.names')

		@include('selectWinner.button')

		@include('selectWinner.winners')
	</div>

	@include('selectWinner.modal')
@endsection