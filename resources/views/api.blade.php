@extends('welcome')

@section('listitems')
	<ol id="workoutlog">
	@foreach ($items as $item)
		<li>
			<span class="translate_up">
				<span class="medtext">{{ $item->amount }}x {{ $item->weight }} lbs {{ $item->description }}</span>
				<span class="gray smalltext translate_up">{{ $item->created_at }}</span>
			</span>
		</li>
	</ol>
	@endforeach

@stop
