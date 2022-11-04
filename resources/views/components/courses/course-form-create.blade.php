<form method="POST" action="{{ url('courses') }}">
    @csrf

    <div class="form-group">
        <label for="name">Nome</label>
        <input
            type="text"
            id="nameCourse"
            autocomplete="name"
            placeholder="Informe o nome do curso"
            class="form-control
{{--@error('name') is-invalid @enderror"--}}

            disabled>

        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputAddress">Sigla do curso</label>
        <input
            type="text"
            id="inputAddress"
            name="address"
            autocomplete="address"
            placeholder="Informe a sigla do curso"
            class="form-control
{{--            @error('address') is-invalid @enderror"--}}

            disabled
        >
        @error('address')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <div class="form-group">
{{--        <label for="country">Selecione o curso:</label>--}}
{{--        <select name="country" id="country" disabled>--}}
{{--            @foreach($countries as $country)--}}

{{--            @endforeach--}}
        </select>
    </div>



    <br>
    <button type="button" class="btn btn-danger">Cancelar</button>
    <button type="button" class="btn btn-primary">Adicionar</button>


</form>
