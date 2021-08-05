@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    
    <div class = "content_content" style = "width:65%;">
      <div style = "display:flex;">
        <h2 style = "margin-left:120px;">#{{$hashtag->hastag_name}}</h2>
      </div>
      @component('components.contents.content')
       @slot('tweets',$tweets)
       @slot('profiles',$profiles)
      @endcomponent
    </div>
  </div>
</div>
@endsection