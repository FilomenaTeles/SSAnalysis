<div class="container pt-3">
    <form method="POST" action="{{ url('import') }}" enctype="multipart/form-data">
        @csrf   <!--Metodo de segurança para envio de forms-->
        <div class="form-group">
            <label for="import-form">File</label>
            <input
                type="file"
                id="import-form"
                name="import-form"
                autocomplete="import-form"
                class="form-control
            @error('import-form') is-invalid @enderror"
                value= "{{old('import-form')}}"
                required>
            @error('import-form')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}} </strong>
        </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>
</div>
