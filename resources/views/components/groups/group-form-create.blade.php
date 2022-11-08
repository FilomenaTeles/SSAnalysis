
<div class="container">
    <form method="POST" action="{{ url('groups') }}">
        @csrf
        <div class="form-group">
            <label for="designacao">Designação</label>
            <input
                type="text"
                id="designacao"
                name="designacao"
                class="form-control"
                placeholder="Informe a designação da turma"
                value="{{old('designacao')}}"
                required
            >

        </div>
        <br>
        <div class="form-group">
            <label for="course_id">Escolha o curso</label>
            <select name="course_id[]" id="course_id" class="custom-select" multiple>
                <option selected>Curso007</option>
                <option value="1">Curso008</option>
                <option value="2">Curso009</option>
                <option value="3">Curso0010</option>
                <option value="4">Curso0011</option>
                <option value="5">Curso0012</option>
            </select>
        </div>


        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar turma</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
    </form>
</div>


