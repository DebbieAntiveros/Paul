@extends('layouts.app')

@section('content')
<div class="wrapper items-details">
<h1> Order for {{ $item -> name}} <h1>
<p class="type"> Type - {{ $item->type}} </p>
<p class="color"> Color -{{ $item->color}} </p>
</div>
<div>
<a href="/items" class="back"><- Back to all Items</a>
</div>
@endsection
