<h1 class="page-header">Gestions des sections</h1>
<h2>Liste des sections</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Nom court</th>
			<th>Couleur</th>
			<th class="text-center" >Active</th>
			<th class="text-center" >Modifier</th>
			<th class="text-center" >Supprimer</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($sections as $section)
			<tr>
				<td>{{{ $section->name }}}</td>
				<td>{{{ $section->shortname }}}</td>
				<td>{{{ $section->color }}}</td>
				@if ($section->active == 1)
					<td class="text-center" ><a href="{{ URL::route('admin.sections.disable', $section->id) }}"><span class="glyphicon glyphicon-ok" ></span></a></td>
				@else
					<td class="text-center" ><a href="{{ URL::route('admin.sections.enable', $section->id) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
				@endif
				<td class="text-center" ><a href="{{ URL::route('admin.sections.edit', $section->id) }}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td class="text-center" ><a href="{{ URL::route('admin.sections.destroy', $section->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
		@endforeach
	</tbody>
</table>
<div class="col-md-6">
	<h2>Ajout d'une section</h2>
	{{ Form::open(['route' => 'admin.sections.create', 'id' => 'form-create', 'class' => 'form-horizontal']) }}
			<div class="form-group">
				<label for="name" class="col-sm-4 control-label">Nom de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="name">
				</div>
			</div>
			<div class="form-group has-error has-feedback">
				<label for="shortname" class="col-sm-4 control-label">Nom court de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="shortname">
				</div>
			</div>
			<div class="form-group">
				<label for="color" class="col-sm-4 control-label">Couleur de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="color">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" id="active" > Activé
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
					<button type="submit" class="btn btn-default">Enregistrer</button>
				</div>
			</div>
		{{ Form::token() }}
	{{ Form::close() }}
</div>
<div class="col-md-6" style="visibility: hidden;">
	<form accept-charset="UTF-8" action="http://scout.dev/public/admin/%7Bsection%7D/documents/new" method="POST">
		<div class="form-horizontal">
			<div class="form-group">
				<label for="name" class="col-sm-4 control-label">Nom de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="name">
				</div>
			</div>
			<div class="form-group">
				<label for="shortname" class="col-sm-4 control-label">Nom court de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="shortname">
				</div>
			</div>
			<div class="form-group">
				<label for="color" class="col-sm-4 control-label">Couleur de la section</label>
				<div class="col-sm-6">
					<input type="texte" class="form-control" id="color">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
					<div class="checkbox">
					<label>
						<input type="checkbox" id="active" > Activé
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
					<button type="submit" class="btn btn-default">Enregistré</button>
				</div>
			</div>
		</div>
		{{ Form::token() }}
	{{ Form::close() }}
</div>
