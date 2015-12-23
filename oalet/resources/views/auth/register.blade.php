@extends('auth.layout')

@section('title')
	
	Register

@endsection	


@section('content')



	<div class="row">
		
		<div class="card Register__Form__Card col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 m-t-md">

			<div class="card-block">
				
				{{-- {!! Form::open() !!} --}}
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="name" value="" placeholder="Full Name">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" value="" placeholder="Email Address">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<input type="text" class="form-control" name="phone-code" value="" placeholder="+233">
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="phone-number" value="" placeholder="Phone Number">
							</div>
						</div>
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<select class="c-select form-control" name="country">
					      	<option>Select Your Country</option>
					      	<option>1</option>
					      	<option>2</option>
					      	<option>3</option>
					      	<option>4</option>
					      	<option>5</option>
					    </select>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" value="" placeholder="Password">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password-confirmation" value="" placeholder="Confirm Password">
						{{-- {!! Form::text('name', ['class'=>'form-control', 'placeholder'=>'Full Name']) !!} --}}
					</div>
					<div class="form-group">
						<label class="c-input c-checkbox">
						  <input type="checkbox">
						  <span class="c-indicator"></span>
						  <small class="text-muted">Yes, I have read and agreed to the</small> <a href="#" title="terms and conditions" class="Terms__Conditions">Terms and Conditions</a>
						</label>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-secondary btn-block">Register</button>
					</div>
				</form>
				{{-- {!! Form::close() !!} --}}

			</div>

		</div>

	</div>

	<div class="row">
		
		<div class="card SingIn__Button__Card col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
			<div class="card-block row">
				<div class="col-md-7">
					Already Have An Account ?
				</div>
				<div class="col-md-5">
					<a href="{{ route('getLogin') }}" class="btn btn-secondary btn-block" title="">Sign in</a>
				</div>
			</div>
		</div>

	</div>


@endsection