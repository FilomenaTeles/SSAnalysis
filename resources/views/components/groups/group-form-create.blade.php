
<div class="container">
    <form method="POST" action="{{ url('groups') }}">
        @csrf
        <div class="form-group">
            <label for="edition">Designação</label>
            <input
                type="text"
                id="edition"
                name="edition"
                class="form-control"
                placeholder="Informe a designação da turma"
                value="{{old('edition')}}"
                required
            >

        </div>
        <br>
        <div class="form-group">
            <label for="course_id">Escolha o curso:</label>
            <select name="course_id" id="course_id">
                <option value="" disabled selected hidden>Curso</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id}}">{{ $course->name}} </option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar turma</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
    </form>
</div>


