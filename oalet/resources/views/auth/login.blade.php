@extends('auth.layout')

@section('title')
	
	Sign in

@endsection	

@section('content')


	<div class="row">
		
		<div class="card SignIn__Form__Card col-md-6 col-md-offset-3 m-t-md">

			<div class="card-block">
				
				{{-- {!! Form::open() !!} --}}
				<form>
					<div class="form-group">
						<input type="email" class="form-control" name="email" value="" placeholder="Email Address">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" value="" placeholder="Password">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<label class="c-input c-checkbox">
						  <input type="checkbox">
						  <span class="c-indicator"></span>
						  <small class="text-muted">Remember Me</small>
						</label>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-secondary btn-block">Log in</button>
					</div>
				</form>
				{{-- {!! Form::close() !!} --}}

			</div>

		</div>

	</div>

	<div class="row">
		
		<div class="card Register__Button__Card col-md-6 col-md-offset-3">
			<div class="card-block row">
				<div class="col-md-7 card-text">
					Do Not Have An Account ?
				</div>
				<div class="col-md-5">
					<a href="{{ route('getRegister') }}" class="btn btn-secondary btn-block" title="">Register</a>
				</div>
			</div>
		</div>

	</div>


@endsection