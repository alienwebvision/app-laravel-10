<div class="alert alert-danger">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>
