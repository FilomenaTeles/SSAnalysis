<div class="container">
    <br>
    <div class="row ">
        @foreach($courses as $course)
            @foreach($groups as $group)
                @if($course->id === $group->course_id)
                    <div class="col-12 col-md-6 col-lg-3 mb-2">
                        <div class="card text-center" style="width: 14rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$group->edition}}</h5>
                                <p class="card-text">{{$course->name}}</p>

                                <a href="{{url('/charts/'.$group->id.'/phases')}}" type="button" id="btn-card-grades" class="btn"
                                  @if(!hasTest($group->id,$groupTests))
                                   style="pointer-events: none; background-color: white; border-color: #36236a"
                                    @endif
                                > @if(hasTest($group->id,$groupTests))
                                    Ver Gráficos
                                    @else
                                Sem Testes
                                    @endif</a>


                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>

<?php
    function hasTest($groupId,$groupTests){

        if(in_array($groupId,$groupTests)){
            return true;
        } else return false;
    }
?>
