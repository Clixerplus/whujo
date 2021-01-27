<div>
    <h1>create</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" value="nombre">
        <input type="email" name="email" value="email@test.com">
        <input type="password" name="password" value="asdmakdla">
        <input type="text" name="role" value="{{ App\Models\Role::first()->id ?? '' }}">
        <button type="submit">enviar</button>
    </form>
</div>
