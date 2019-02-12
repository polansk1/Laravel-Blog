@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
					<div class="card-header">
						<span class="align-middle">Ver Entrada</span>
					</div>
				<div class="card-body">			

					<p class="card-text"><strong>Nombre </strong>{{ $post->name }}</p>
					<p class="card-text"><strong>Slug </strong>  {{ $post->slug }}</p>
					<p class="card-text"><strong>Contenido </strong>  {{ $post->body }}</p>

				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection