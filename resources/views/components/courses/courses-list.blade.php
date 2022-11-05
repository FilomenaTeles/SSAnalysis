
<div class="container text-right">
    <a href="{{url('/courses/create')}}" type="button" class="btn btn-light">Adicionar Curso <i class="bi bi-plus-circle-fill"></i></a>
</div>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Sigla</th>
    </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
            <th scope="row">{{$course->name}}</th>
            <th scope="row">{{$course->acronym}}</th>

            <td>
                <div class="d-inline-flex p-1 bd-highlight">

                    <a href="{{url('courses/' . $course->id . '/edit')}}" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

