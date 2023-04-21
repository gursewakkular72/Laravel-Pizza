@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>    
                <a class='link-all-pizzas-list' href="/allpizzas">View all pizza orders &rarr;</a>
        </div>
    </div>
</div>
@endsection
