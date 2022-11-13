<div class="container text-right">
    <a href="{{url('/students/create')}}" type="button" id="add-btn" class="btn mb-2">Adicionar aluno <i class="bi bi-person-plus-fill"></i></a>
</div>
<br>

<table class="table table-striped  text-center" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Turma</th>
        <th scope="col">Localidade</th>
        <th scope="col">Estado</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <th scope="row">{{$student -> id}}</th>
            <td>{{$student -> name}}</td>
            @foreach($groups as $group)
                @if(($group -> id) == ($student -> group_id))
                    <td>{{$group -> edition}}</td>
                @endif
            @endforeach
            <td>{{$student -> city}}</td>

            @if(($student -> isActive))
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
                <a href="{{url('/students/'.$student->id)}}" type="button" id="eye-btn" class="btn">
                    <i class="bi bi-eye"></i>
                </a>
                <a href="{{url('/students/'.$student->id.'/edit')}}" type="button" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                </a>

            </td>
        </tr>
    @endforeach

    </tbody>
</table>

{{ $students->links() }}
