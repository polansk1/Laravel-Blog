@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
					<div class="card-header">
						<span class="align-middle">Ver Etiqueta</span>
						<a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
					</div>
				<div class="card-body">			

					<p class="card-text"><strong>Nombre </strong>{{ $tag->name }}</p>
					<p class="card-text"><strong>Slug </strong>  {{ $tag->slug }}</p>

				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection