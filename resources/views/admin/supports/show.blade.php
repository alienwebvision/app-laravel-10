<h1>Detalhes da Solicitação {{$support->id}}</h1>

<a href="{{route('supports.create')}}"> Criar Suporte</a>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

