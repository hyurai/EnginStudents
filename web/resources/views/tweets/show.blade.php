@extends('layouts.content')
@section('content')
<div class = "content_main">
  @component('components.contents.head')
  @endcomponent
  <div class = "content_include_side">
    @component('components.contents.side')
    @endcomponent
    <div class = "content_content">
      @component('components.contents.showcontent')
       @slot('tweet',$tweet)
       @slot('profiles',$profiles)
      @endcomponent
      @inclue('subview/modal',['target' => 'tweet_show'])
      @foreach($comments as $comment)
        <div style = "border: solid 3px #000000;padding:20px;margin-right:120px;margin-left:120px;" style = "margin-bottom:20px;">
          <div style = "width:100%;display:flex;">
          <div class = "top-infomation" style = "width:10%;">
            <div style = "width:50px;height:50px;">
              <img src="https://ferret.akamaized.net/uploads/article/6845/eyecatch/default-95e77d8922603c5a64085258c0cc3f96.png" style = "width:100%;height:100%;border-radius:50%;">
            </div>
          </div>
          <div class = "back-infomation" style = "width:90%;">
            <p style = "margin-top:0px;font-weight:bold;">{{$tweet->user->name}}</p>            
            <p>{{$comment->comment}}</p>
            <div class = "back-function" style = "display: flex;">
            </div>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection