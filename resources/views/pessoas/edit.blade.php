@extends('../layout/app')
@section('content')
<div class="page-header">
	<h2>Editar {{$detailpage->nome}}</h2>
</div>
<div class="row">
<form class="form" action="/pessoas/{{$detailpage->id}}" method="POST">
	<div class="form-group">
		<div class="col-md-8">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" value="{{$detailpage->nome}}" />
		</div>
		<div class="col-md-3">
			<label for="nome">Data de Nascimento</label>
			<input type="text" name="data_nascimento" class="form-control" value="{{$detailpage->data_nascimento}}" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-5">
			<label for="nome">CPF</label>
			<input type="text" name="cpf" class="form-control" value="{{$detailpage->cpf}}" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-11">
			<label for="nome">Endereco</label>
			<input type="text" name="endereco" class="form-control" value="{{$detailpage->endereco}}" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3">
			<label for="nome">Complemento</label>
			<input type="text" name="complemento" class="form-control" value="{{$detailpage->complemento}}" />
		</div>
	
		<div class="col-md-8">
			<label for="nome">Bairro</label>
			<input type="text" name="bairro" class="form-control" value="{{$detailpage->bairro}}" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<label for="nome">Cidade</label>
			<input type="text" name="cidade" class="form-control" value="{{$detailpage->cidade}}" />
		</div>
		<div class="col-md-2">
			<label for="nome">UF</label>
			<input type="text" name="uf" class="form-control" value="{{$detailpage->uf}}" />
		</div>
	</div>
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>
<hr>
<div class="row-fluid">
	<button type="button" onclick="$('form').submit()" class="btn btn-primary">Cadastrar</button>
	<a href="/pessoas" class="btn">Voltar</a>
</div>
@endsection