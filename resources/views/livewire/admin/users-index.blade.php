<div>
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Buscar User">
    </div>

    @if ($users->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th colspan="2"></th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        
                        <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>
                        </td>
                        
                        {{-- <td width="10px">
                            <form action="{{route('admin.users.destroy',$user)}}" method="user">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td> --}}
                        
                    </tr>
                @endforeach
                

            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$users->links()}}
    </div>
    @else
        <div class="card-body">
            <strong>No existe ningún registro</strong>
        </div>

    @endif
</div>
