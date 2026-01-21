@props(['color','bgColor'=>'red']) 

<div class="card card-text-{{$color}}  card-bg-{{$bgColor}}">
    <div class="card-header">{{$title}}</div>
     @if($slot->isEmpty())
      please provide some content
    @else
        {{$slot}}
    @endif
    <div class="card-footer">{{$footer}}</div>
</div>