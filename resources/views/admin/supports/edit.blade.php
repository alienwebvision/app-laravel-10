<h1>Solicitação {{$support->id}}</h1>
<button class="btn"><a href="{{route('supports.index')}}"> Lista Suportes</a></button>

<form action="{{route('supports.update', $support->id)}}" method="POST">

    @csrf
    @method('PUT')
    <input type="text" name="subject" placeholder="Assunto" value="{{$support->subject}}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>
