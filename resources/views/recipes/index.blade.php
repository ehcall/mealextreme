
@extends('layouts.app')
@section('content')
	<div class="content">
		<div class="title m-b-md">
			My Recipes
		</div>
		@if($recipes->count())  
			@foreach($recipes as $recipe)
			<strong>{{$recipe->recipe_name}}</strong><br/>
			@endforeach 
		@else
			<p>No recipes found!</p>
		@endif
		
		<a href="{{ route('recipes.create') }}" class="btn btn-info btn-block" >Add a Recipe</a>
    </div>
@endsection