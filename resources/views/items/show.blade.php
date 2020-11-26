@extends('layouts.app')

@section('content')
<div class="wrapper items-details">
<h1> Order for {{ $item -> name}} <h1>
<p class="type"> Type - {{ $item->type}} </p>
<p class="color"> Color -{{ $item->color}} </p>
<p class="freebies"> Freebies: </p>
<ul>
@foreach($item->freebies as $freebie)
<li>{{$freebie}}</li>
@endforeach
</ul>
<form action="{{route ('items.destroy',$item->id)}}" method="POST">
@csrf
@method('DELETE')
<button> Complete Order </button>
</div>
<div>
<a href="/items" class="back"><- Back to all Items</a>
</div>
@endsection
