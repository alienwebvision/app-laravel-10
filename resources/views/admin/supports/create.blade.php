<h1>Novo Suporte</h1>
<button class="btn"><a href="{{route('supports.index')}}"> Lista Suportes</a></button>

<form action="{{route('supports.store')}}" method="POST">
    @csrf
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>




