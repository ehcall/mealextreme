@extends('layouts.app')

@section('content')
	<div class="content">
        <div class="title m-b-md">
			Meal Extreme
        </div>

		<a href="{{ route('recipes.create') }}" class="btn btn-info btn-block" >Add a Recipe</a>
		<a href="{{ route('recipes.index') }}" class="btn btn-info btn-block" >View Recipes</a>
		
    </div>
@endsection