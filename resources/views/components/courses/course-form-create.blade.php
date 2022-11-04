
<div class="container">
    <form method="POST" action="{{ url('courses') }}">
        @csrf
        <div class="form-group">
            <label for="test_date">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                placeholder="Informe o nome do curso"
                value="{{old('name')}}"
                required
            >

        </div>
        <br>
        <div class="form-group">
            <label for="test_date">Sigla</label>
            <input
                type="text"
                id="acronym"
                name="acronym"
                placeholder="Informe a sigla do curso"
                class="form-control"
                value="{{old('acronym')}}"
                required
            >
        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar curso</button>
        <a href="{{ URL::previous() }}" type="button" class="mt-2 mb-5 btn btn-danger">Cancelar</a>
    </form>
</div>


