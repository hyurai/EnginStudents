@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    @component('components.contents.content')
     @slot('tweets',$tweets)
     @slot('profiles',$profiles)
     @slot('likes',$likes)
    @endcomponent
  </div>

</div>
</div>
@endsection