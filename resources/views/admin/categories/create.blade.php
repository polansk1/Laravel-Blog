@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
					<div class="card-header">
						<span class="align-middle">Crear Categoría</span>
						<a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
					</div>
				<div class="card-body">				

					{!! Form::open(['route'=>'categories.store']) !!}

						@include('admin.categories.partials.form')

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection