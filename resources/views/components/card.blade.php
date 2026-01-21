@props([$color=>'blue',$bgColor=>'red'])

<div class="card" style="color:{{$color}}; background-color:{{$bgColor}}">
    {{$slot}}
</div>