@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                Item List
                </div>
                @foreach($items as $item)
                    <div>
                    {{$item ->name}}- {{$item->type}} -{{ $item->color }}
                    </div>

             @endforeach

                </div>
                
            </div>
        </div>
@endsection
