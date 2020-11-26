@extends('layouts.app')
@section('content')
<div class="wrapper create-item">
    <h1> Create a New Item</h1>
    <form action="/items" method="POST">
     @csrf
        <label for="name"> Your name: </label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose Item type: </label>
        <select name="type" id="type">
            <option value="motorbike"> Motorbike</option>
            <option value="mountainbike"> Mountainbike</option>
        </select>
        <fieldset>
        <label> Freebies:</label>
        <input type="checkbox" name="freebies[]" value="mask"> Mask
        <input type="checkbox" name="freebies[]" value="water"> Water
        <input type="checkbox" name="freebies[]" value="gloves"> Gloves
        </fieldset>
        <label for="color"> Choose Item Colors: </label>
        <select name="color" id="color">
            <option value="red"> Red</option>
            <option value="blue"> Blue</option>
        </select>
        <input type="submit" value="Order Item">
</div>
@endsection
