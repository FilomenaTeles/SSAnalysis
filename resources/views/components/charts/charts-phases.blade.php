<h1>Análise Comparativa - <small>{{$groupId->edition}}</small></h1>
<br>
<?php $comp=4 ?>
<div class="container">
    <div class="d-grid gap-2 col-6 mx-auto row ">
        @foreach($testPhases as $testPhase)
        <div class="col"><a class="btn btn-primary" type="button" href="{{'/charts/'.$groupId->id.'/'.$testPhase->id}}">{{$testPhase->description}}</a></div>
        @endforeach
            <div class="col"><a class="btn btn-primary" type="button" href="{{'/charts/'.$groupId->id.'/compare/'.$comp}}">Comparação</a></div>
    </div>
    <br>

</div>


<!--
style="pointer-events: none"
<span class="badge badge-secondary">Sem testes</span>-->
