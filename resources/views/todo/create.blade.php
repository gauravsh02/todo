@extends('layout.app')

@section('body')

	<br>
	<div class="col-lg-4 col-lg-offset-4 text-center">
		<h1>{{substr(Route::currentRouteName(),5)}}</h1>
		<form class="form-horizontal" action="/todo/@yield('editId')" method="post">
		{{csrf_field()}}
		@section('editMethod')
		@show
			<fieldset>
				<div class="form-group">
					<div class="clo-lg-10">
						<input type="text" name="title" class="form-control" placeholder="Title" value="@yield('editTitle')"><br>
						<textarea class="form-control" placeholder="Body" row="3" id="textArea" name="body">@yield('editBody')</textarea>
						<br>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>
			</fieldset>
		</form>
		@include('todo.partials.errors')
	</div>

@endsection