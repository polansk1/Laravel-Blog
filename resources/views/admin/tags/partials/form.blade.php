<div class="form-group">

	{!! Form::label('name','Nombre de la etiqueta')!!}
	{!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}

</div>
<div class="form-group">

	{!! Form::label('slug','URL Amigable')!!}
	{!! Form::text('slug',null,['class' => 'form-control', 'id' => 'slug']) !!}

</div>

<div class="form-group">

	{!! Form::submit('Guardar',['class' => 'btn btn-primary btn-primary'])!!}
	
</div>

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/stringToSlug/jquery.stringtoslug.min.js')}}"></script>
<script>
	
$((function(){
 $("#name").keyup(function(){
        var cadena = $(this).val();
        string_to_slug(cadena);
    });
}));



</script>
@endsection