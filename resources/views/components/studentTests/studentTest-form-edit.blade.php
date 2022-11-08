
<br>

<form method="POST" action="{{ url('/studentTests/'.$testID->id) }}">
    {{ csrf_field() }}
    {{ method_field('put') }}
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Alunos</th>
        <th scope="col">Nota</th>
    </tr>
    </thead>
    <tbody>

        @foreach($tests as $test)
            @if($test ->id == $testID->id)
                @foreach($test->students as $student)
                    @if($student->group_id == $groupTest->id)
                        <tr>
                        <td>
                            <div class="form-group">

                            {{$student->name}}
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <input type="number" name="grade" value="{{$student->pivot->grade}}" max="20" min="0">

                            </div>
                        </td>
                            <td>{{$student->pivot->id}}</td>
                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>
    <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Associar nota</button>
    <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
</form>
