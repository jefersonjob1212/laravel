@extends('../layout/app')
@section('content')
{{ Session::get('message') }}
<h1>Bem vindo</h1>
<a class="btn btn-primary" href="pessoas/create">Cadastrar</a>
@endsection