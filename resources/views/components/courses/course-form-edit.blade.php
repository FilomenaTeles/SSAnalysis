{{--<form method="POST" action="{{ url('players/' . $player->id) }}">--}}
{{--    {{ csrf_field() }}--}}
{{--    {{ method_field('put') }}--}}

{{--    <div class="form-group">--}}
{{--        <label for="name">Name</label>--}}
{{--        <input--}}
{{--            type="text"--}}
{{--            id="name"--}}
{{--            name="name"--}}
{{--            autocomplete="name"--}}
{{--            placeholder="Type your Name"--}}
{{--            class="form-control--}}
{{--            @error('name') is-invalid @enderror"--}}
{{--            value="{{$player->name}}"--}}
{{--            required--}}
{{--        >--}}
{{--        @error('name')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--        @enderror--}}

{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="inputAddress">Address</label>--}}
{{--        <input--}}
{{--            type="text"--}}
{{--            id="inputAddress"--}}
{{--            name="address"--}}
{{--            autocomplete="address"--}}
{{--            placeholder="Type your address"--}}
{{--            class="form-control--}}
{{--            @error('address') is-invalid @enderror"--}}
{{--            value="{{ $player->address }}"--}}
{{--        >--}}
{{--        @error('address')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--        @enderror--}}

{{--    </div>--}}

{{--    <div class="form-group">--}}

{{--        <label for="country">Choose a country:</label>--}}

{{--        <select name="country_id" id="country">--}}
{{--            @foreach($countries as $country)--}}
{{--                @if(($country -> id) == ($player -> country_id))--}}
{{--                    <option selected>{{ $country->name}} </option>--}}
{{--                @endif--}}
{{--                <option value="{{ $country->id}}">{{ $country->name}} </option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}


{{--    <div class="form-group">--}}
{{--        <label for="description">Description</label>--}}
{{--        <textarea--}}
{{--            class="form-control"--}}
{{--            id="description"--}}
{{--            name="description"--}}
{{--            autocomplete="description"--}}
{{--            placeholder="Type your description"--}}
{{--            rows="5"--}}
{{--        >--}}
{{--            {{$player -> description}}--}}
{{--        </textarea>--}}
{{--    </div>--}}

{{--    <div class="form-container w-25">--}}
{{--        <label for="retired">Retired</label>--}}
{{--        <div class="form-row">--}}
{{--            @if($player->retired === 1)--}}
{{--                <div class="col">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" checked>--}}
{{--                        <label class="form-check-label" for="retired1">--}}
{{--                            Yes--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" >--}}
{{--                        <label class="form-check-label" for="retired2">--}}
{{--                            No--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <div class="col">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="radio" name="retired" id="retired1" value="1" >--}}
{{--                        <label class="form-check-label" for="retired1">--}}
{{--                            Yes--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="radio" name="retired" id="retired2" value="0" checked>--}}
{{--                        <label class="form-check-label" for="retired2">--}}
{{--                            No--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>--}}
{{--</form>--}}
