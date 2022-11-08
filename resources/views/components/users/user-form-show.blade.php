<h4>{{$user->name}}</h4>
<div class="container col-1">
    <a href="{{url('/users/'.$user->id.'/edit')}}" type="button" >Editar</a>
</div>

<br>
<div class="container">

    <div class="row">
        <div class="col align-items-center ml-5">
            @if($user->photo)
                <img src="{{asset('storage/' . $user->photo)}}" alt="">
            @else
                <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png"
                     width="30%" alt="">
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

                    readonly
                    >
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
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="password"
                    value="*********"
                    class="form-control"
                    readonly
                    required>


            </div>
        </div>
    </div>

</div>
