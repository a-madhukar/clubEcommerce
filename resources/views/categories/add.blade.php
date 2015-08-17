@extends('app')

@section('content')
	<div class="container form-panel">
		<div class="container-fluid" style="margin-bottom:5px;text-align:center;">
			<h3>Add New Category</h3>
		</div>
		<div class="container-fluid">
			{!!Form::open(['url'=>'category'])!!}
				<div class="form-group">
					{!!Form::label('name','Name :')!!}
					{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Name Of Product Category'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('description','Description :')!!}
					{!!Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Name Of Product Description'])!!}
				</div>	
				<div class="form-group">
					{!!Form::submit('Add New Category',['class'=>'btn btn-primary form-control'])!!}
				</div>
				@if($errors->any())
					<div class="form-group">
						<ul class="alert alert-danger" >
							@foreach($errors->all() as $error)
								<li style="margin-left:10px;">{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif
			{!!Form::close()!!}
		</div>
	</div>
@stop