@extends('welcome')

@section('listitems')
	@foreach ($items as $item)
		<li>{{ $item->amount }}x {{ $item->weight }} lbs {{ $item->description }}</li>
	@endforeach

@stop
