@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('inc.validation')
				@include('inc.session')
				<h3>New Todo</h3>
				<form action="{{route('todos.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<textarea name="the_todo" id="" cols="20" rows="3" class="form-control" placeholder="Todo" required></textarea>
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
					@forelse ($todos as $todo)

					<li class="data-list">
						<div class="data-text">
							<p class="text-class {{($todo->status) == 0 ? '' : 'text-through'}}">{{$todo->the_todo}}</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('todos.change', $todo->id)}}" class="">{{($todo->status) == 0 ? 'Done' : 'Undone'}}</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$todo->id}}">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$todo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Todo</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							{{Str::limit($todo->the_todo, 20)}}
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<form action="{{route('todos.destroy', $todo->id)}}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-primary">Delete</button>
							</form>
							</div>
						</div>
						</div>
					</div>

					@empty

					<li class="no-data text-center">
						No Todos yet.
					</li>

					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$todos->links()}}
		</section>

@endsection
