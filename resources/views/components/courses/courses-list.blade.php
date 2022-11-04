<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Country</th>
        <th scope="col">Retired</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
{{--    <tbody>--}}
{{--    @foreach($players as $player)--}}
{{--        <tr>--}}
{{--            <th scope="row">{{$player->id}}</th>--}}
{{--            <td>--}}
{{--                @if ($player->image)--}}
{{--                    <img class="w-100 img-responsive" src="{{ asset('storage/'.$player->image) }}" alt="" title=""></a>--}}
{{--                @else--}}
{{--                    <p>--}}
{{--                        No Image--}}
{{--                    </p>--}}
{{--                @endif--}}
{{--            </td>--}}
{{--            <td>{{$player->name}}</td>--}}
{{--            <td>{{$player->address}}</td>--}}
{{--            @foreach($countries as $country)--}}
{{--                @if(($country ->id) == ($player -> country_id))--}}
{{--                    <td>{{$country->name}}</td>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--            <td>--}}
{{--                @if($player->retired === 1)--}}
{{--                    <i class="bi bi-emoji-laughing-fill"></i>--}}
{{--                @else--}}
{{--                    <i class="bi bi-emoji-frown-fill"></i>--}}
{{--                @endif--}}
{{--            </td>--}}

{{--            <td>--}}
{{--                <div class="d-inline-flex p-1 bd-highlight">--}}

{{--                    <a href="{{url('players/' . $player->id)}}" type="button" class="btn btn-success">Show</a>--}}
{{--                </div>--}}
{{--                @auth()--}}
{{--                    <div class="d-inline-flex p-1 bd-highlight">--}}

{{--                        <a href="{{url('players/' . $player->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>--}}
{{--                    </div>--}}
{{--                    <div class="d-inline-flex p-1 bd-highlight">--}}

{{--                        <form action="{{url('players/' . $player->id)}}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                @endauth--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}
</table>

{{--{{$courses -> links()}}--}}

