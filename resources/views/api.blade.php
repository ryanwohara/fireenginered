@extends('welcome')

@section('listitems')
	<ol id="workoutlog">
	<?php $items = array_reverse($items); ?>
	@foreach ($items as $item)
		<li>
			<span>
				<span class="medtext">{{ $item->amount }}x {{ $item->weight }} lbs {{ $item->description }}</span>
				<span class="gray smalltext translate_up">{{ $item->created_at }}</span>
				<span class="delete translate_up"><a href="/api/del/{{ $item->id }}">[ delete ]</a></span>
			</span>
		</li>
	@endforeach
	</ol>
@stop
