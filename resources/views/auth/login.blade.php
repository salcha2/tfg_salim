<!-- resources/views/auth/login.blade.php -->

<h1>Iniciar sesión</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="username">Nombre de usuario</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <button type="submit">Iniciar sesión</button>
    </div>
</form>
