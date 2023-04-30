<h1>Novo Suporte</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<button class="btn"><a href="{{ route('supports.index') }}"> Lista Suportes</a></button>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf
    <input type="text" name="subject" placeholder="Assunto" value=" {{ old('subject') }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>




