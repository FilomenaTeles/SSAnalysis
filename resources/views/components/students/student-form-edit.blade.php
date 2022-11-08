<h4>{{$student -> name}}</h4>
<br>
<div class="container">
    <form method="POST" action="{{ url('/students/'.$student->id) }}">
        @csrf   <!--Metodo de segurança para envio de forms-->
        @method('PUT')

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
                value="{{$student -> name}}"
                required>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group col">
            <label for="group_id">Escolha a turma:</label> <br>
            <select name="group_id" id="group_id">
                @foreach($groups as $group)
                    <option value="{{ $group->id}}" @if($student->group_id == $group->id) selected
                        @endif>{{ $group->edition}} </option>
                @endforeach
            </select>
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
                    value="{{$student -> city}}"
                    required>

                @error('city')
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
                    value="{{$student -> birth_date}}"
                    required

                >
            </div>
        </div>

        <div class="row">
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
                    value="{{$student -> email}}"
                    required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

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
                    value="{{$student -> phone_number}}"
                    required>

                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>

        <div class="form-group col">
            <label for="isActive">Estado:</label>
            <div class="row">
                <div class="form-group col-4 mr-0">
                    <label for="admin">Ativo</label>
                    <input
                        type="radio"
                        id="active"
                        name="isActive"
                        autocomplete="userType"
                        class="@error('userType') is-invalid @enderror"
                        value="1"
                        @if($student -> isActive)
                            checked
                        @endif
                        required
                        >

                </div>
                <div class="form-group col-3 ml-0">
                    <label for="tecnico">Inativo</label>
                    <input
                        type="radio"
                        id="inactive"
                        name="isActive"
                        value="0"
                        required
                        @if(!$student -> isActive)
                            checked
                        @endif>

                </div>
        <br>

        <div class="container text-right">
            <button type="submit" class="btn btn-primary mb-2 ">Editar</button>
            <a type="button" href="{{ url('/students') }}" class="btn btn-primary mb-2 ">Cancelar</a>
        </div>










    </form>
</div>
