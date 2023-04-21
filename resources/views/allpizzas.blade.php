@extends('layouts.app')
@section('content') 
<div class="div-order-list"> 
  <p>{{session('msg')}}</p>
  <h1 class="order-list-heading">List of Orders</h1> 
  @if(count($pizzas)===0) 
    <p> No orders have been placed </p>
    <p><a href="/create">Place order</a><p>
  @else 
    @foreach($pizzas as $pizza) 
    <div class="div-individual-order"><a class="link-individula-order" href="/allpizzas/{{$pizza->id}}">Order from {{$pizza->name}}</a></div>
    @endforeach
  @endif
</div>

@endsection