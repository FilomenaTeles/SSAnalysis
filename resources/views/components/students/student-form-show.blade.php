<h4>{{$student -> name}}</h4>

<br>
<div class="container">
    <div class="row">
        <div class="form-group col ">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{$student -> name}}"
                class="form-control"
                readonly>
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
                readonly>
        </div>


    </div>
    <div class="row">
        <div class="form-group col">
            <label for="city">Localidade</label>
            <input
                type="text"
                id="city"
                name="city"
                value="{{$student -> city}}"
                class="form-control"
                readonly>

        </div>
        <div class="form-group col">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                value="{{$student -> email}}"
                required
                readonly>


        </div>

    </div>

    <div class="row">

        <div class="form-group col">
            <label for="phone_number">Telefone</label>
            <input
                type="tel"
                id="phone_number"
                name="phone_number"
                class="form-control"
                value="{{$student -> phone_number}}"
                required
                readonly>

        </div>
        <div class="form-group col">
            <label for="group_id">Turma:</label> <br>
            <select name="group_id" id="group_id">
                <option value="" disabled selected hidden>Turma</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id}}" @if($student->group_id == $group->id) selected
                            @endif disabled>{{ $group->edition}} </option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">

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
                        readonly>

                </div>
                <div class="form-group col-3 ml-0">
                    <label for="tecnico">Inativo</label>
                    <input
                        type="radio"
                        id="inactive"
                        name="isActive"
                        value="0"
                        @if(!$student -> isActive)
                            checked
                        @endif
                        required
                        readonly>

                </div>
            </div>
        </div>
        <div class="col text-right">
            <a href="{{URL::previous()}}" type="button" class="btn btn-primary">
                <i class="bi bi-arrow-left-square"></i>
            </a>
        </div>


    </div>

</div>

