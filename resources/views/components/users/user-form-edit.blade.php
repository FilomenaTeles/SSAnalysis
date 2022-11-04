
<h4>Editar utilizador</h4>
<br>
<div class="container">
    <form method="POST" action="{{ url('/users'.$user->id) }}" enctype="multipart/form-data">
        @csrf   <!--Metodo de segurança para envio de forms-->
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                value="{{$user->name}}"
                class="form-control
            @error('name') is-invalid @enderror"

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
                value="{{$user->email}}"
                class="form-control"
                readonly>

        </div>

        <div class="form-group">
            <label for="userType">Tipo de Utilizador</label>
            <div class="row">
                <div class="form-group col-2 mr-0">
                    <label for="admin">Administrador</label>
                    <input
                        type="radio"
                        id="admin"
                        name="userType"
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
                        name="userType"
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



        <button type="submit" class="btn btn-primary mb-2 ">Editar</button>
        @if( Auth::user()->user_type_id ==1)
            <a type="button" href="{{ url('/users') }}" class="btn btn-primary mb-2 ">Cancelar</a>
        @else
            <a type="button" href="{{url('/users/' . Auth::user()->id)}}" class="btn btn-primary mb-2 ">Cancelar</a>
        @endif


    </form>
</div>


