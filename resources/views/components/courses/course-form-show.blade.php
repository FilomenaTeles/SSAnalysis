<form method="POST" action="{{ url('players') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control
@error('name') is-invalid @enderror"
            value="{{$player->name}}"
            disabled>

        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input
            type="text"
            id="inputAddress"
            name="address"
            autocomplete="address"
            placeholder="Type your address"
            class="form-control
            @error('address') is-invalid @enderror"
            value="{{ $player->address }}"
            disabled
        >
        @error('address')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>


    <div class="form-group">
        <label for="country">Choose a country:</label>
        <select name="country" id="country" disabled>
            @foreach($countries as $country)
                @if(($country ->id) == ($player -> country_id))
                    <option value="countries" >{{ $country->name}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            autocomplete="description"
            placeholder="Type your description"
            rows="5"
            disabled>
            {{$player -> description}}
        </textarea>
    </div>

    <div class="form-container w-25">
        <label for="retired">Retired</label>
        <div class="form-row">
            @if($player->retired === 1)
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" checked
                               disabled>
                        <label class="form-check-label" for="retired1">
                            Yes
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" disabled>
                        <label class="form-check-label" for="retired2">
                            No
                        </label>
                    </div>
                </div>
            @else
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" disabled>
                        <label class="form-check-label" for="retired1">
                            Yes
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" checked
                               disabled>
                        <label class="form-check-label" for="retired2">
                            No
                        </label>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <br>
    <a href="{{ URL::previous() }}" type="button" class="btn btn-primary">Back</a>
</form>

