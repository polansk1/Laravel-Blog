@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">
					<span class="align-middle">Lista de mis Entradas</span>
					<a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
							@foreach($posts as $post)
							<tr>
								<td width="10px">{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td width="10px">
									<a href="{{ route('posts.show', $post->id)}}" class="btn btn-outline-secondary btn-sm float-right" role="button">
										ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('posts.edit', $post->id)}}" class="btn btn-outline-secondary btn-sm float-right" role="button">
										editar
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
										
										{!! Form::submit('eliminar',['class' => 'btn btn-sm btn-danger']) !!}
			
									{!! Form::close() !!}		
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
				</div>
			</div>
			{{ $posts->render() }}
		</div>
	</div>
</div>
@endsection