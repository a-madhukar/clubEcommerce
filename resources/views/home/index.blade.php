@extends('app')

@section('content')
	<div class="container form-panel" >
		<div class="container-fluid" style="margin-bottom:5px;text-align:center;">
			<h3>Login</h3>
		</div>
		<div class="container-fluid">
			{!!Form::open(['url'=>'login'])!!}
				<div class="form-group">
					{!!Form::label('email','Email :')!!}
					{!!Form::input('email','email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('password','Password :')!!}
					{!!Form::input('password','password',null,['class'=>'form-control','placeholder'=>'password'])!!}
				</div>
				<div class="form-group">
					{!!Form::submit('Login',['class'=>'btn btn-primary form-control'])!!}
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

				@if(Session::has('loginError'))
					<div class="form-group">
						<ul class="alert alert-danger">
							<li style="margin-left:10px;">{{Session::get('loginError')}}</li>
		
						 </ul>
					</div>
				@endif
				
			{!!Form::close()!!}
		</div>

	</div>
@stop