<div>
    <h1>edit</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ old('name') ?? '' }}">
        <button type="submit">Enviar</button>
    </form>
</div>
