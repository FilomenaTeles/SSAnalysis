<h4>{{$group -> edition}}</h4>

<br>
<div class="container">
    <div class="row">
        <div class="form-group col">
            <label for="edition">Turma</label>
            <input
                type="text"
                id="edition"
                name="edition"
                autocomplete="edition"
                class="form-control
                @error('edition') is-invalid @enderror"
                value="{{$group -> edition}}"
                required
                readonly>

            @error('edition')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group col">
            <label for=course_id">Curso</label> <br>
            <select name="course_id" id="course_id">
                @foreach($courses as $course)
                    <option disabled value="{{ $course->id}}" @if($group->course_id == $course->id) selected
                        @endif>{{ $course->name}}  </option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="col text-right">
        <a href="{{url('$/groups/'.$group->id.'/edit')}}" type="button" class="btn btn-primary mb-2">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>
<br>

<div class="container ">

    <div class="row">
        <div class="col-6"><h5>Alunos:</h5></div>
        <div class="col text-right">
            <a href="{{url('/students/create/'.$group->id)}}"type="button" class="btn btn-primary mb-2">Adicionar aluno <i class="bi bi-person-plus-fill"></i></a>

        </div>
        <div class="col text-right">
            <a href="{{url('import')}}" type="button" class="btn btn-primary mb-2">Importar lista de alunos <i class="bi bi-box-arrow-in-down"></i></a>
        </div>
    </div>

</div>
<br>

<table class="table table-striped  text-center" id="group-student" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Localidade</th>
        <th scope="col">Estado</th>

    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        @if($student -> group_id == $group->id)
            <tr>
                <td>index</td>
                <td>{{$student -> name}}</td>
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
            </tr>
        @endif
    @endforeach

    </tbody>
</table>

