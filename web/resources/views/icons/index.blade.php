@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    <div style="display:flex;width:65%;">
      @foreach($icons as $icon)
       <div style = "width:15%;text-align:center;">
         <p class="fab {{$icon->icon_class}}" style="font-size:80px;margin: 0px;text-align:center;"></p>
         <p style="margin: 0px;text-align: center;">{{$icon->icon_name}}</p>
       </div>
      @endforeach
    </div>
  </div>
</div>
@endsection