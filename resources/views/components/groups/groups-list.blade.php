<div class="container row text-right">
    <div class="col-6"></div>
    <div class="col text-right">
        <a href="{{url('/groups/create')}}" type="button" id="add-btn" class="btn mb-2">Adicionar turma <i
                class="bi bi-plus-circle-fill"></i></a>
    </div>
    <div class="col text-right">
        <a href="{{url('import/')}}" type="button" id="add-btn" class="btn mb-2">Importar lista de alunos <i
                class="bi bi-box-arrow-in-down"></i></a>
    </div>
</div>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Turma</th>
        <th scope="col">Curso</th>
        <th scope="col">Editar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($groups as $group)
        <tr>
            <th scope="row">{{$group->edition}}</th>
            @foreach($courses as $course)
                @if(($course -> id) == ($group -> course_id))
                    <td>{{$course -> name}}</td>
                @endif
            @endforeach

            <td>
                <a href="{{url('/groups/'.$group->id)}}" type="button" id="eye-btn" class="btn">
                    <i class="bi bi-eye"></i>
                </a>
                <a href="{{url('/groups/'.$group->id.'/edit')}}" type="button" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                </a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{--{{$groups -> links()}}--}}

<br>


