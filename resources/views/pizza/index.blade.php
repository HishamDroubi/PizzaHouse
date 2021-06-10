@extends('layouts.app')
@section('content')
 @foreach($pizzas as $p)
 <ul>
 <a href="/pizzas/{{$p->id}}">
  <li>Order For {{$p->name}}</li>
  </a>
  </ul>
  
 @endforeach
@endsection