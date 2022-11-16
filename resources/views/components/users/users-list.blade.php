<div class="container text-right">
    <a href="{{url('/users/create')}}" type="button" id="add-btn" class="btn mb-2 "> Adicionar utilizador <i class="bi bi-person-plus-fill"></i></a>
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

            <i class="bi bi-emoji-laughing "></i>

        </td>
        @else
        <td>

            <i class="bi bi-emoji-frown"></i>

        </td>
        @endif
        <td>
            <a href="{{url('/users/'.$user->id.'/edit')}}" type="button" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
            </a>


        </td>
    </tr>
    @endforeach

    </tbody>
</table>
<br>
