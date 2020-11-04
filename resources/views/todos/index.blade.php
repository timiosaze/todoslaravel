@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Todo</h3>
				<form action="">
					<div class="form-group">
						<textarea name="the_todo" id="" cols="20" rows="3" class="form-control" placeholder="Todo"></textarea>
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Todos</h5>
				<ul>
					<li class="no-data text-center">
						No Todos yet.
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Enim ad cupidatat officia exercitation </p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="done">Done</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Enim ad cupidatat officia exercitation </p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="done">Done</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Enim ad cupidatat officia exercitation </p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="done">Done</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>

@endsection
