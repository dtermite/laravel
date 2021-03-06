Mostrar la lista de empleados
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->foto}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellidoPaterno}}</td>
            <td>{{$empleado->apellidoMaterno}}</td>
            <td>{{$empleado->correo}}</td>
            <td> 
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
                    Editar 
                </a>    
            
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    <!--Creo la llave de autewnticacion-->
                    @csrf
                    <!-- cambio el metodo a DELETE porque viene de POST-->
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Realmente quieres borrar?')"
                    value="Borrar">
                </form> 
            </td>
        </tr>
        
        
        @endforeach
    </tbody>
</table>