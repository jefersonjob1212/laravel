@extends('../layout/app')
@section('content')
{{ Session::get('message') }}
<h1>Bem vindo</h1>
<a class="btn btn-primary" href="pessoas/create">Cadastrar</a>
<div class="row">
	<div class="panel panel-defautl">
		<div class="panel-header">
			
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th align="center">#</th>
						<th>Nome</th>
						<th align="center">Data de Nascimento</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					@foreach($todaspessoas as $pessoa)
					<tr>
						<td>{{$pessoa->id}}</td>
						<td>{{$pessoa->nome}}</td>
						<td>{{$pessoa->data_nascimento}}</td>
						<td>{{$pessoa->cidade}}</td>
						<td>{{$pessoa->uf}}</td>
						<td>
							<a class="btn btn-success" href="{{route('pessoas.edit', $pessoa->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-info" href="{{route('pessoas.show', $pessoa->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a class="btn btn-danger" onclick='$("#modal").modal("show");'><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" class="close">&times;</button>
				<div class="modal-title">Exclusão de pessoa...</div>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>SIM</button>
				<button type="button" class="btn" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span>NÃO</button>
			</div>
		</div>
	</div>
</div>
@endsection
<script type="text/javascript">
	
</script>