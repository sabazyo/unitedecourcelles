<h1 class="page-header">Gestions des documents de la section</small></h1>
<h2>Liste des Documents</h2>

<div class="alert alert-info" role="alert">Il est vivement conseiller de ne metre que des document au format PDF</div>

@if (count($documents) == 0)
<div class="alert alert-danger" role="alert">Pas de document</div>
@else
	<table>
		<div class="table table-striped">
			<thead>
				<tr>
					<th>Titre</th>
					<th class="text-center" >Modifier</th>
					<th class="text-center" >Supprimer</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($documents as $document)
					<tr>
						<td>{{{ $document->name }}}</td>
						<td class="text-center" ><a href="" ><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td class="text-center" ><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				@endforeach
			</tbody>
		</div>
	</table>
@endif
