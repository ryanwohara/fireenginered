@extends('welcome')

@section('listitems')
	<ol id="workoutlog">
	<?php $items = array_reverse($items); ?>
	@foreach ($items as $item)
		<li>
			<span>
				<span class="medtext negative_margin">{{ $item->amount }}x {{ $item->weight }} lbs {{ $item->description }}</span>
				<span class="gray smalltext">{{ $item->created_at }}</span>
				<span class="edit"><a href="">[ edit ]</a></span>
				<span class="delete"><a href="/api/del/{{ $item->id }}">[ delete ]</a></span>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							{!! Form::open(array('action' => 'ApiController@edit', 'method' => 'patch', 'class' => 'editform')) !!}
							    {!! Form::hidden('id', $item->id) !!}
							    {!! Form::text('amount', @$item->amount, array('placeholder' => 'Amount?', 'class' => 'col-md-3')) !!}
							    {!! Form::text('weight', @$item->weight, array('placeholder' => 'Weight?', 'class' => 'col-md-3')) !!}
							    {!! Form::text('description', @$item->description, array('placeholder' => 'What?', 'class' => 'col-md-3')) !!}
							    {!! Form::submit('Update', array('class' => 'col-md-3')) !!}
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</span>
		</li>
	@endforeach
	</ol>
@stop
