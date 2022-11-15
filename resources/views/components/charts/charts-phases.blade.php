<h1>Análise Comparativa - <small>{{$groupId->edition}}</small></h1>
<br>
<?php
$comp = 4;
$student = 10;

?>
<div class="container">
    <div class="d-grid gap-2 col-8 mx-auto row">
            @foreach($testPhases as $testPhase)
                <div class="col"><a class="btn btn-primary" type="button"
                                    href="{{'/charts/'.$groupId->id.'/'.$testPhase->id}}"
                                    @if(!hasPhase($testPhase->id,$testsPhasesList))
                                        style="pointer-events: none; background-color: white; border-color: #36236a; color: black"
                        @endif
                    >{{$testPhase->description}}</a>
                </div>
            @endforeach
            <div class="col"><a class="btn btn-primary" type="button" href="{{'/charts/'.$groupId->id.'/compare/'.$comp}}"
                                @if(count($testsPhasesList)<2 )
                                    style="pointer-events: none; background-color: white; border-color: #36236a; color: black"
                    @endif
                >Comparação</a>

            </div>
            <div class="col"><a class="btn btn-primary" type="button"
                                     href="{{'/charts/'.$groupId->id.'/students/'.$student}}">Alunos</a>

            </div>
    </div>
    <br>

</div>

<?php
function hasPhase($phaseId, $testsPhasesList)
{
foreach ($testsPhasesList as $testPhase){
    if ( $testPhase["id"] ==$phaseId) {
        return true;
    }
    }
    return false;
}




