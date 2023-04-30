<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->

    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
        @csrf()
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Deletar</button>
    </form>
