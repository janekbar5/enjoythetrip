@extends('layouts.frontend')


@section('content')
<div class="container-fluid places">

    
    
    <!-- Lecture 18 -->
    @if (session('norooms'))
    <p class="text-center red bolded">
        {{ session('norooms') }}
    </p>
    @endif
    
    
    <h1 class="text-center">Interesting places</h1>

    @foreach($objects->chunk(4) as $chunked_object) <!-- Lecture 14 -->

        <div class="row">

            @foreach($chunked_object as $object) <!-- Lecture 14 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{ $object->photos->first()->path ?? null }}" alt="..."> <!-- Lecture 14 src -->
                        <div class="caption">
                            <h3>{{ $object->name }} <!-- Lecture 14 -->  <small>{{ $object->city->name  }}<!-- Lecture 14 --></small> </h3>
                            <p>{{ str_limit($object->description,100) }}<!-- Lecture 14 --></p>
                            <p><a href="{{ route('object',['id' => $object->id]) }}" class="btn btn-primary" role="button">Details</a></p>
                        </div>
                    </div>
                </div>

            @endforeach <!-- Lecture 14 -->


        </div>

    @endforeach <!-- Lecture 14 -->
 {{ $objects->links() }}
 
</div>
@endsection