@extends('layouts.main')

@section('content')
@php 
$name = "nattapol";
$role = "user";

@endphp
<div class="bg-white w-4/5 mx-auto p-3">
    <h1>Hello {{$name}}</h1>
    <h1>ที่อยู่ {{$address}}</h1>
    <h2 id="city"></h2>
    <h3>{{$provice}}</h3>

    @if($role == "admin")
    <h1>{{$name}} is a admin</h1>
    @else
    <h1>{{$name}} is't a admin</h1>
    @endif

    <li class="flex gap-4">
    
    @for($i = 0; $i <= 5; $i++)
        <p>{{$i}}</p>
    @endfor
</div>

<script>
    let city = document.querySelector('#city');
    city.innerText = "<b>{{$city}}<br>{{$city}}</b>";
</script>
@endsection