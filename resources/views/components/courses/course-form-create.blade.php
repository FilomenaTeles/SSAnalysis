<br>
<div class="container">
    <form method="POST" action="{{ url('courses') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                placeholder="Nome do curso"
                value="{{old('name')}}"
                required
            >

        </div>
        <br>
        <div class="form-group">
            <label for="acronym">Sigla</label>
            <input
                type="text"
                id="acronym"
                name="acronym"
                placeholder="Sigla do curso"
                class="form-control"
                value="{{old('acronym')}}"
                required
            >
        </div>


        <button type="submit" class="btn btn-primary mb-2">Criar curso</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="btn mb-2">Cancelar</a>
    </form>
</div>


