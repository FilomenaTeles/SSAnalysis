<div class="container text-right">
    <a href="{{url('/users/create')}}" type="button" class="btn btn-light"> Adicionar utilizador <i class="bi bi-person-plus-fill"></i></a>
</div>
<br>

<table class="table table-striped  text-center" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user -> id}}</th>
        <td>{{$user -> name}}</td>
        @foreach($userTypes as $userType)
            @if(($userType -> id) == ($user -> user_type_id))
                <td>{{$userType -> description}}</td>
            @endif
        @endforeach
        @if(($user -> isActive))
        <td>
            <a href="">
            <i class="bi bi-emoji-laughing "></i>
            </a>
        </td>
        @else
        <td>
            <a href="">
            <i class="bi bi-emoji-frown"></i>
            </a>
        </td>
        @endif
        <td>
            <a href="{{url('/users/'.$user->id.'/edit')}}" type="button">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="">
                <i class="bi bi-trash3"></i>
            </a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

