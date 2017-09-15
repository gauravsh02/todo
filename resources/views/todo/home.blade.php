@extends('layout.app')

@section('body')
	<br>
	@include('todo.partials.message')
	<a href="/todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-4 col-lg-offset-4 ">
		<h1>Todo List</h1>
		<ul class="list-group">
		@foreach ($todos as $todo)
			<li class="list-group-item">
				<a href={{"/todo/$todo->id"}}>{{$todo->title}}</a>
				<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
				<a class="pull-right" href={{"/todo/$todo->id/edit"}}>Edit</a>
				<form action='{{"/todo/$todo->id"}}' method="POST">
				<!-- {{csrf_field()}} -->
				{{method_field('DELETE')}}
					<button type="submit">Del</button>
				</form>
			</li>
		@endforeach	
		</ul>
	</div>
@endsection