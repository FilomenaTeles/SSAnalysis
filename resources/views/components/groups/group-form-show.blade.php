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

    </div>

    <div class="row">

        <div class="row">
            <div class="form-group col">
                <label for=course_id">Curso</label> <br>
                <select name="course_id" id="course_id">
                    @foreach($courses as $course)
                        <option value="{{ $course->id}}" @if($group->course_id == $course->id) selected
                            @endif>{{ $course->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <br>

    <div class="col text-right">
        <a href="{{url('$/group/'.$group->id.'/edit')}}" type="button" class="btn btn-primary mb-2">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>

