<form method="POST" action="{{ url('courses/' . $course->id) }}">
    {{ csrf_field() }}
    {{ method_field('put') }}

    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Editar o nome do curso"
            class="form-control
            value="{{old('name')}}"
            required
        >

    </div>

    <div class="form-group">
        <label for="inputAddress">Sigla</label>
        <input
            type="text"
            id="acronym"
            name="acronym"
            autocomplete="acronym"
            placeholder="Editar a sigla do curso"
            class="form-control
            value="{{old('acronym')}}"
            required
        >

    </div>

    <div class="form-group">

        <label for="country">Choose a Uma turma:</label>

        <select name="country_id" id="country">
            {{--@foreach($countries as $country)
                @if(($country -> id) == ($player -> country_id))
                    <option selected>{{ $country->name}} </option>
                @endif
                <option value="{{ $country->id}}">{{ $country->name}} </option>
            @endforeach--}}
        </select>
    </div>


    <div class="form-container w-25">
        <label for="retired">Retired</label>
        <div class="form-row">
            {{--@if($player->retired === 1)
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" checked>
                        <label class="form-check-label" for="retired1">
                            Yes
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" >
                        <label class="form-check-label" for="retired2">
                            No
                        </label>
                    </div>
                </div>
            @else
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" >
                        <label class="form-check-label" for="retired1">
                            Yes
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" checked>
                        <label class="form-check-label" for="retired2">
                            No
                        </label>
                    </div>
                </div>
            @endif--}}
        </div>
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Confirmar</button>
</form>
