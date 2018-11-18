
<div class="form-group">
	{!! form::label('name','Nombre del producto') !!}
	{!! form::text('name', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! form::label('short','Descripción breve del producto') !!}
	{!! form::text('short', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! form::label('body','Descripción completa del producto') !!}
	{!! form::textarea('body', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! form::label('file','Imagen') !!}
	{!! form::file('file') !!}
</div>
<div class="form-group">
	
	{!! form::submit('ENVIAR', ['class'=> 'btn btn-primary']) !!}
</div>
