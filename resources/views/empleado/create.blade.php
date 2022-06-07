<!--
Formulario de creacion de empleados
enctype  se define asi para recibir archivos o fotos
-->
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form');
    
</form>