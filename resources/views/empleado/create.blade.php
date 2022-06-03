/*Formulario de creacion de empleados
enctype  se define asi para recibir archivos o fotos
*/

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno">
    <br>

    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno">
    <br>

    <label for="correo">E-mail</label>
    <input type="email" name="correo" id="correo">
    <br>

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto">
    <br>

    <input type="submit" value="Guardar Datos">
    <br>    
</form>