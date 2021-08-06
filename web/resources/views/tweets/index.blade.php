@extends('layouts.content')
@section('content')
<div class = "content_main">
  @component('components.contents.head')
  @endcomponent
  <div class = "content_include_side">
    @component('components.contents.side')
    @endcomponent
    <div class = "content_content">
      @component('components.contents.content')
       @slot('tweets',$tweets)
       @slot('profiles',$profiles)
      @endcomponent
    </div>
  </div>

</div>
</div>
@endsection