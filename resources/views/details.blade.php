@extends('layouts.app') 
@section('content')
<div class="div-order-details">
    <h1>{{$pizza->name}}'s order</h1>
    <p>{{ucfirst($pizza->type)}} pizza with {{$pizza->base}} crust</p>
    <form class="form-order-complete" action="/allpizzas/{{ $pizza->id }}" method="POST">
      @csrf
      @method('DELETE')
      <button class="complete-order-button">Complete Order</button>
    </form>
</div>

@endsection