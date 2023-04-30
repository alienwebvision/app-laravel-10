<h1>Solicitação: {{ $support->id }}</h1>

{{--Alerts--}}
<x-alert/>

<button class="btn"><a href="{{route('supports.index')}}"> Lista Suportes</a></button>

<form action="{{route('supports.update', $support->id)}}" method="POST">

    @method('PUT')
    @include('admin.supports.partials.form', [
    'support'=>$support
])

</form>
