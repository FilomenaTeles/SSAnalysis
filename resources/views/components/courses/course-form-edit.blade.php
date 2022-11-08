
<br>
<div class="container">

    <form method="POST" action="{{ url('/courses/'.$course->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                value="{{$course->name}}"
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
                class="form-control"
                value="{{$course->acronym}}"
                required
            >
        </div>

        <br>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Salvar</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
    </form>
</div>
