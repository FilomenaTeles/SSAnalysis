
<div class="container text-right">
    <a href="{{url('/groups/create')}}" type="button" id="add-btn" class="btn btn-light">Adicionar turma <i class="bi bi-plus-circle-fill"></i></a>
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
            <th scope="row">{{$group->course_id}}</th>
            

            <td>
                <a href="{{url('/groups/'.$group->id)}}" type="button" class="btn btn-primary">
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

{{--{{$courses -> links()}}--}}


