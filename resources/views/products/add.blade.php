@extends('app')

@section('content')
	@if(count($categories))
	<div class="container form-panel">
		<div class="container-fluid" style="margin-bottom:5px;text-align:center;">
			<h3>Add New Product</h3>
		</div>
		<div class="container-fluid">
			{!!Form::open(['files'=>'true','url'=>'product'])!!}
				<div class="form-group">
					{!!Form::label('name','Product Name :')!!}
					{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Product Name'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('price','Price :')!!}
					{!!Form::input('number','price',null,['class'=>'form-control','min'=>0, 'max'=>10000,'step'=>'any','placeholder'=>0.00])!!}
				</div>
				<div class="form-group">
					{!!Form::label('quantity','Quantity :')!!}
					{!!Form::input('number','quantity',null,['class'=>'form-control','min'=>0, 'max'=>10000,'step'=>'any','placeholder'=>0])!!}
				</div>
				<div class="form-group">
					{!!Form::label('category_id','Category :')!!}
					{!!Form::select('category_id',$categories,null,['class'=>'form-control','min'=>0, 'max'=>10000,'step'=>'any','placeholder'=>0])!!}
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-2">
							{!!Form::label('image_path','Poster :')!!}
						</div>
						<div class="col-sm-9">
							{!!Form::file('image_path')!!}
						</div>
					</div>
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
			{!! Form::close()!!}
		</div>
	</div>
	@else
		<div class="container form-panel">
			<ul class="alert alert-danger">
				<li style="margin-left:10px">
					No Categories have been created!
				</li>
			</ul>
		</div>
	@endif
@stop