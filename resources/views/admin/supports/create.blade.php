<h1>Novo Suporte</h1>

{{--Alerts--}}
<x-alert/>

<button class="btn"><a href="{{ route('supports.index') }}"> Lista Suportes</a></button>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>




