<a href="{{url('/empleado/create')}}"> Agregar nuevo empleado</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
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
             <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$empleado->Foto)}}"/>
             {{$empleado->Foto}}
            
            
            </td>
             <td>{{$empleado->Nombre}}</td>
             <td>{{$empleado->ApellidoPaterno}}</td>
             <td>{{$empleado->ApellidoMaterno}}</td>
             <td>

             <a href="{{url('/empleado/'.$empleado->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
