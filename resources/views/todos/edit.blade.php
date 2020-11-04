@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Todo</h3>
				<form action="">
					<div class="form-group">
						<textarea name="the_todo" id="" cols="20" rows="3" class="form-control" placeholder="Todo">Are you doing well. I hope so</textarea>
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
		
	