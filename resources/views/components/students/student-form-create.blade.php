<h4>Criar aluno</h4>
<br>
<div class="container">
    <form method="POST" action="{{ url('/students') }}">
        @csrf   <!--Metodo de segurança para envio de forms-->

        <div class="row">
            <div class="form-group col">
                <label for="name">Nome</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    placeholder="Insira o nome do aluno"
                    class="form-control
            @error('name') is-invalid @enderror"
                    value="{{old('name')}}"
                    required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group col">
                <label for="birth_date">Data de Nascimento</label>
                <input
                    type="date"
                    id="birth_date"
                    name="birth_date"
                    class="form-control"
                    value="{{old('birth_date')}}"
                    required

                    max="<?php echo date('Y-m-d')?>"
                >
            </div>

        </div>

        <div class="row">
            <div class="form-group col">
                <label for="city">Localidade</label>
                <input
                    type="text"
                    id="city"
                    name="city"
                    autocomplete="city"
                    placeholder="Insira a localidade"
                    class="form-control
            @error('city') is-invalid @enderror"
                    value="{{old('city')}}"
                    required>

                @error('city')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group col">
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

        </div>

        <div class="row">
            <div class="form-group col">
                <label for="phone_number">Telefone</label>
                <input
                    type="tel"
                    id="phone_number"
                    name="phone_number"
                    autocomplete="phone_number"
                    placeholder="Insira o telefone"
                    class="form-control
            @error('phone_number') is-invalid @enderror"
                    value="{{old('phone_number')}}"
                    required>

                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group col">
                <label for="group_id">Escolha a turma:</label>
                <select name="group_id" id="group_id">

                    @if(isset($groupId))
                        <option value="{{$groupId->id}}" selected>{{$groupId->edition}}</option>
                        <input name="groupRedirect" type="number" value="{{$groupId->id}}" hidden>
                    @else
                    @foreach($groups as $group)
                            <option value="" disabled selected hidden>Turma</option>
                        <option value="{{ $group->id}}">{{ $group->edition}} </option>
                    @endforeach
                    @endif
                </select>
            </div>
        </div>


        <div class="container text-right col">

            <button type="submit" class="btn btn-primary mb-2 ">Criar</button>
            <a type="button" href="{{ URL::previous() }}" id="back-btn" class="btn mb-2 ">Cancelar</a>
        </div>

    </form>
</div>


