@extends('layouts.app')

@section('content')
	<div class="content">
        <div class="title m-b-md">
			Meal Extreme
        </div>

		<a href="{{ route('recipes.create') }}" class="btn btn-info btn-block" >Add a Recipe</a>
		<div class="title m-b-md">
			My Recipes
		</div>
		@if($recipes->count())  
			@foreach($recipes as $recipe)
			{{$recipe->recipe_name}}<br/>
			@endforeach 
		@else
			<p>No recipes found!</p>
		@endif
    </div>
@endsection