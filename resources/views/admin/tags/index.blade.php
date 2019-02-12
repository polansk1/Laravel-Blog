@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">
					<span class="align-middle">Lista de etiquetas</span>
					<a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
				</div>
				<div class="card-body">	
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tags as $tag)
							<tr>
								<td width="10px">{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td width="10px">
									<a href="{{ route('tags.show', $tag->id)}}" class="btn btn-outline-secondary btn-sm float-right" role="button">
										ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-outline-secondary btn-sm float-right" role="button">
										editar
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
										
										{!! Form::submit('eliminar',['class' => 'btn btn-sm btn-danger']) !!}
			
									{!! Form::close() !!}		
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
				</div>
			</div>
			{{ $tags->render() }}
		</div>
	</div>
</div>
@endsection