@extends('layouts.frontend')


@section('content')
<div class="container-fluid places">

    <h1 class="text-center">Available rooms</h1>

    @foreach( $city->rooms->chunk(4) as $chunked_rooms ) <!-- Lecture 19 -->

        <div class="row">

            @foreach( $chunked_rooms as $room ) <!-- Lecture 19 -->

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive img-circle" src="{{ $room->photos->first()->path ?? App\Helpers\Helper::getPlaceholder(150)  }}" alt="...">
                                             
                        <div class="caption">
                         
                            <h3>Nr {{ $room->room_number  }} <small class="orange bolded">{{ $room->price }}$</small> </h3>
                            <p>{{ str_limit($room->description,80)  }}</p>
                            <p>Size: {{ $room->room_size }}</p>
                            <p><a href="{{ route('room',['id'=>$room->id]) }}" class="btn btn-primary" role="button">Details</a><a href="{{ route('room',['id'=>$room->id]) }}#reservation" class="btn btn-success pull-right" role="button">Reservation</a></p>
                        </div>
                    </div>
                </div>

            @endforeach <!-- Lecture 19 -->


        </div>

    @endforeach <!-- Lecture 19 -->

</div>
@endsection