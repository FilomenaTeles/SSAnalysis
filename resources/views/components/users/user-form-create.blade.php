
<h4>Criar utilizador</h4>
<br>
<div class="container">
    <form method="POST" action="{{ url('/users') }}" enctype="multipart/form-data">
        @csrf   <!--Metodo de segurança para envio de forms-->
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Insira o nome do utilizador"
                class="form-control
            @error('name') is-invalid @enderror"
                value="{{old('name')}}"
                required
                aria-describedby="nameHelp">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                autocomplete="email"
                placeholder="Insira o email"
                class="form-control
            @error('email') is-invalid @enderror"
                value="{{old('email')}}"
                required>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                autocomplete="password"
                value="{{old('password')}}"
                class="form-control
            @error('password') is-invalid @enderror"

                required>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="userType">Tipo de Utilizador</label>
            <div class="row">
                <div class="form-group col-2 mr-0">
                    <label for="admin">Administrador</label>
                    <input
                        type="radio"
                        id="admin"
                        name="user_type_id"
                        autocomplete="userType"
                        class="@error('userType') is-invalid @enderror"
                        value="1"
                        required>

                </div>
                <div class="form-group col-2 ml-0" >
                    <label for="tecnico">Técnico</label>
                    <input
                        type="radio"
                        id="tecnico"
                        name="user_type_id"
                        autocomplete="userType"
                        class="@error('userType') is-invalid @enderror"
                        value="2"
                        required>

                </div>
            </div>

            @error('userType')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="photo">Imagem</label>
            <input type="file"
                   id="photo"
                   name="photo"
                   autocomplete="photo"
                   class="form-control
                   @error('photo') is-invalid @enderror"
                   value="{{old('photo')}}"
            >
            @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>



        <button type="submit" class="btn btn-primary mb-2 ">Criar</button>
        <a type="button" href="{{ url('/users') }}" class="btn btn-primary mb-2 ">Cancelar</a>

    </form>
</div>


