@php
$arr = array("home","member","admin");
$text = "hello";
$text1 = "world";
@endphp
<nav class="flex justify-around p-4 bg-gradient-to-r from-cyan-500 to-blue-500">
    <a href="/"><img class="w-8" src="/img/icon/logo.png" alt=""></a>
    <ul class="flex gap-10 items-center">
        @foreach($arr as $val)
        <a class="bg-blue-300 hover:bg-gray-100 px-4 rounded-xl" href="{{url('/'.$val)}}"><li>{{$val}}</li></a>
        @endforeach
    </ul>
</nav>