@extends('layouts.app') 
@section('content')
<div class="div-form">
    <form action="/allpizzas" method="POST">
    @csrf
    <label class="label" for="name">Your name:</label>
    <input  type="text" name="name" id="name" required> <br></br>
    <label class="label"  for="type">Choose type of pizza:</label>
    <select  name="type" id="type">
      <option value="super veggie">Super Veggie</option>
      <option value="cheese">Cheese</option>
      <option value="meat">Meat</option>
      <option value="hawaiian">Hawaiian</option>
    </select> <br></br>
    <label class="label"  for="base">Choose crust:</label>
    <select   name="base" id="base">
      <option value="thin">Thin</option>
      <option value="thick">Thick</option>
      <option value="stuffed">Stuffed</option>
    </select> <br></br> 
    <input class="submit-button" type="submit" value="Order Pizza">
  </form> 
  <p><a href="/allpizzas">View all Orders</a></p>
</div>

@endsection