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

        <a href="{{url('/groups/' . $group->id . '/edit')}}" type="button" class="btn btn-primary mb-2">

            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>
<br>

<div class="container ">

    <div class="row">
        <div class="col-6"><h5>Alunos:</h5></div>
        <div class="col text-right">
            <a href="{{url('/students/create/'.$group->id)}}" id="add-btn" type="button" class="btn btn-primary mb-2">Adicionar aluno
                <i class="bi bi-person-plus-fill"></i></a>

        </div>

    </div>

</div>
<br>
    <?php $cont=1 ?>
<table class="table table-striped  text-center" id="group-student" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Localidade</th>
        <th scope="col">Estado</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        @if($student -> group_id == $group->id)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$student -> name}}</td>
                <td>{{$student -> city}}</td>
                <td>
                    @if(($student -> isActive))

                        <a href="">
                            <i class="bi bi-emoji-laughing "></i>
                        </a>

                    @else

                        <a href="">
                            <i class="bi bi-emoji-frown"></i>
                        </a>

                    @endif
                </td>
                <td>
                    <a href="{{url('/students/'.$student->id)}}" type="button" class="btn btn-primary">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{url('/students/'.$student->id.'/edit')}}" type="button" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                </td>


            </tr>
            <input type="text" value="{{$cont++}}" hidden>
        @endif
    @endforeach

    </tbody>
</table>

