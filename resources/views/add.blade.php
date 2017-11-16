@extends('layouts.app')

@section('content')
	<div class="content">
        <div class="title m-b-md">
			Add a Recipe
        </div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-container">
					<form method="POST" action="{{ route('recipes.store') }}"  role="form">
					{{ csrf_field() }}
						<div class="form-group">
							<input name="recipe_name" type="text" class="form-control input-sm" value="Recipe Name">
							<input name="recipe_source" type="text" class="form-control input-sm" value="Recipe Source">
							<input name="yield" type="text" class="form-control input-sm" value="Yield">
							<input name="servings" type="text" class="form-control input-sm" value="Servings">
							<textarea name="instructions" type="text" class="form-control input-sm" value="Instructions"></textarea>
							<textarea name="notes" type="text" class="form-control input-sm" value="Instructions"></textarea>
							<input name="tested" type="checkbox" class="form-control input-sm">
							<input name="rating" type="text" class="form-control input-sm" value="rating">
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<input type="submit"  value="Submit" class="btn btn-success btn-block">
								<a href="{{ route('welcome') }}" class="btn btn-info btn-block" >Back</a>
							</div>	
						</div>
				</div>
			</div>
		</div>
    </div>
@endsection