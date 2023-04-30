<h1>Listagem dos Suportes</h1>

<a href="{{route('supports.create')}}"> Criar Suporte</a>

<table>
    <thead>
    <th>PROTOCOLO</th>
    <th>ASSUNTO</th>
    <th>STATUS</th>
    <th>DESCRIÇÃO</th>
    <td></td>

    </thead>
    <tbody>
    @foreach($supports as $support)
        <tr>
            <td> {{$support['id']}} </td>
            <td> {{$support['subject']}} </td>
            <td> {{$support['status']}} </td>
            <td> {{$support['body']}} </td>
            <td>
                <a href="{{route('supports.show',$support['id'])}}">Ver</a>
                <a href="{{route('supports.edit',$support['id'])}}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{--{{ $supports->links() }}--}}
