
<br>
<div class="container">
    <form method="POST" action="{{ url('/groups/'.$group->id) }}">
        @csrf
        @method('PUT')

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
                    required>

                @error('edition')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>

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

        <div class="row">

            <div class="form-group col">

                <div class="row">
                    <br>
                    <div class="container text-right col">
                        <button type="submit" class="btn btn-primary mb-2">Editar</button>
                        <a type="button" href="{{ url('/groups') }}" class="btn btn-primary mb-2">Cancelar</a>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
