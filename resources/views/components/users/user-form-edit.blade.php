<h4>Editar utilizador</h4>
<br>
<div class="container">
    <form method="POST" action="{{ url('/users/' . $user->id) }}" enctype="multipart/form-data">
        @csrf   <!--Metodo de segurança para envio de forms-->
        @method('PUT')

        <div class="row">
            <div class="col align-items-center ml-5">
                @if($user->photo)
                    <img src="{{asset('storage/' . $user->photo)}}" alt="">
                @else
                    <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png"
                         width="30%" alt="">
                @endif
                <br>
                @if(Auth::user()->id==$user->id)
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
                @endif
            </div>

            <div class="col align-items-center mr-3">
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
                @if( Auth::user()->user_type_id ==1)

                    <div class="form-group">
                        <label for="userType">Estado:</label>
                        <div class="row">
                            <div class="form-group col-4 mr-0">
                                <label for="admin">Ativo</label>
                                <input
                                    type="radio"
                                    id="admin"
                                    name="userType"
                                    autocomplete="userType"
                                    class="@error('userType') is-invalid @enderror"
                                    value="1"
                                    @if($user->user_type_id==1)
                                        checked
                                    @endif
                                    required>

                            </div>
                            <div class="form-group col-3 ml-0">
                                <label for="tecnico">Inativo</label>
                                <input
                                    type="radio"
                                    id="tecnico"
                                    name="userType"
                                    autocomplete="userType"
                                    class="@error('userType') is-invalid @enderror"
                                    value="2"
                                    @if($user->user_type_id==2)
                                        checked
                                    @endif
                                    required>

                            </div>
                        </div>

                        @error('userType')
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                        @enderror
                    </div>

                @endif

                @if(Auth::user()->id==$user->id)
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            autocomplete="password"
                            value=""
                            class="form-control
            @error('password') is-invalid @enderror">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                        @enderror
                    </div>
                @endif

            </div>
        </div>


        <button type="submit" class="btn btn-primary mb-2 ">Editar</button>
        @if( Auth::user()->user_type_id ==1)
            <a type="button" href="{{ url('/users') }}" id="back-btn" class="btn mb-2 ">Cancelar</a>
        @else
            <a type="button" href="{{url('/users/' . Auth::user()->id)}}" id="back-btn" class="btn mb-2 ">Cancelar</a>
        @endif


    </form>
</div>


