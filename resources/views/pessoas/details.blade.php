@extends('../layout/app')
@section('content')
<div class="page-header">
	<h2>Detalhes da pessoa</h2>
</div>
<div class="row">
<form class="form">
	<div class="form-group">
		<div class="col-md-8">
			<label for="nome">Nome</label>
			{{$detailpage->nome}}
		</div>
		<div class="col-md-3">
			<label for="nome">Data de Nascimento</label>
			{{$detailpage->data_nascimento}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-5">
			<label for="nome">CPF</label>
			{{$detailpage->cpf}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-11">
			<label for="nome">Endereco</label>
			{{$detailpage->endereco}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3">
			<label for="nome">Complemento</label>
			{{$detailpage->complemento}}
		</div>
	
		<div class="col-md-8">
			<label for="nome">Bairro</label>
			{{$detailpage->bairro}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<label for="nome">Cidade</label>
			{{$detailpage->cidade}}
		</div>
		<div class="col-md-2">
			<label for="nome">UF</label>
			{{$detailpage->uf}}
		</div>
	</div>
</form>
</div>
<hr>
<div class="row-fluid">
	<a href="/pessoas" class="btn btn-default">Voltar</a>
</div>
@endsection