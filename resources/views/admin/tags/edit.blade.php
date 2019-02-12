@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
					<div class="card-header">
						<span class="align-middle">Editar Etiqueta</span>
					</div>
				<div class="card-body">					

					{!! Form::model($tag,['route'=>['tags.update', $tag->id], 'method' => 'PUT']) !!}

						@include('admin.tags.partials.form')

					{!! Form::close() !!}

				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection