<!-- resources/views/formulario.blade.php -->
<form action="{{ route('ruta.de.destino') }}" method="POST">
    @csrf <!-- Token de seguridad obligatorio -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <button type="submit">Enviar</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
