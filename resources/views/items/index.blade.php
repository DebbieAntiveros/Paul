@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                Item List
                </div>
                <div>
                <a href="/items/create"> <button type="submit"> Add Product </button> </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Type </th>
                            <th> Color </th>
                            <th> Action </th>
                         </tr>
                    </thead>
                    <tbody>
                @foreach($items as $item)
                <tr>
                    <td> <a href="items/{{ $item ->id}}">
                    {{ $item -> name}}</a></td> 
                    <td> {{ $item ->type}}</td>
                    <td> {{ $item ->color}}</td>
                    <td> 
                    <a href="items/{{ $item ->id}}"> <button> Show </button>  </a> 
                    <a href="items/{{$item ->id}}/edit"> <button> Edit </button> </a>
                    <form action="{{route ('items.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button> Delete </button>
                    
                    </td>
                </tr> 
             @endforeach
             </tbody>
             </table>
                
            </div>
        </div>
@endsection
