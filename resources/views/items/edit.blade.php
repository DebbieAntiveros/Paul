@extends('layouts.app')
@section('content')
<div class="wrapper create-item">
    <h1> Create a New Item</h1>
    <form class="form-horizontal" method="post" action="/items">
     @csrf
     @method('put')
        <label for="name"> Product Name: </label>
        <input type="text" id="name" name="name" value="{{$item ->name}}">
        <label for="type"> Category: </label>
        <input type="text" id="type" name="type" value="{{$item ->type}}">
        <label for="color"> Choose Item Colors: </label>
        <select name="color" id="color">
            <option value="red"> Red</option>
            <option value="blue"> Blue</option>
        </select>
        <input type="submit" value="Save">
</div>
<a href="/items" class="back"><- Back to all Items</a>
<p class="msg"> {{session ('msg')}}</p>
@endsection
