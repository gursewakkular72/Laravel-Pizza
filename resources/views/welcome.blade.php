@extends('layouts.app')
@section('content')
<div>
    <p>Welcome to Pizza Store</P>
    <p>{{session('mssg')}}</p>
    <p> <a href="/create">Order Pizzas</a></p>
</div>
@endsection