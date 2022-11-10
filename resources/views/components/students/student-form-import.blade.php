<div class="container pt-3">
    <div class="container">
        <p>Por favor certifique que o excel tem os dados na seguinte ordem:</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Localidade</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">ID da Turma</th>
            </tr>
            </thead>
        </table>
        <p>Atenção: Não coloque cabeçalhos no excel</p>
        <p>srceenshot de um exemplo de excel</p>
    </div>

    <form method="POST" action="{{ url('import') }}" enctype="multipart/form-data">
        @csrf   <!--Metodo de segurança para envio de forms-->
        <div class="form-group">
            <label for="import-form">File</label>
            <input
                type="file"
                id="import-form"
                name="import-form"
                autocomplete="import-form"
                class="form-control
            @error('import-form') is-invalid @enderror"
                value= "{{old('import-form')}}"
                required>
            @error('import-form')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}} </strong>
        </span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>
</div>
