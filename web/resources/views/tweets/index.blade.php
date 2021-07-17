@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    <div class = "content_content" style = "width:65%;">
      @foreach($tweets as $tweet)
        @if(isset( $tweet->title ))
        <div style = "border: solid 3px #000000;padding:20px;margin-right:120px;margin-left:120px;margin-bottom:20px;">
          <div style = "width:100%;display:flex;">
          <div class = "top-infomation" style = "width:10%;">
            <div style = "width:50px;height:50px;">
              <img src="https://ferret.akamaized.net/uploads/article/6845/eyecatch/default-95e77d8922603c5a64085258c0cc3f96.png" style = "width:100%;height:100%;border-radius:50%;">
            </div>
          </div>
          <div class = "back-infomation" style = "width:90%;">
            <p style = "margin-top:0px;font-weight:bold;">{{$tweet->user->name}}</p>
            <p>{{$tweet->title}}</p>
            <div style = "display:flex;">
              <p>{{$tweet->company_name}}</p>
              <p>{{$tweet->job}}</p>
            </div>
            <div>
              <div>
                <p>エントリー</p>
                <p>{{$tweet->entry_data}}</p>
              </div>
              <div style = "display:flex;">
                <div style="display: flex;flex-direction: column;">
                 <p>開始</p>
                 <p>{{$tweet->start_data}}</p>
                </div>
                <div style = "display:flex;flex-direction:column;">
                  <p>終わり</p>
                  <p>{{$tweet->end_data}}</p>
                </div>
              </div>
            </div>
            <p>{{$tweet->text}}</p>
            <div class = "back-function" style = "display: flex;">
               @auth
               @if($likes->where('user_id',Auth::id())->where('tweet_id',$tweet->id)->first())
                 <form action="/tweet/like/{{$likes->where('user_id',Auth::id())->where('tweet_id',$tweet->id)->first()->id}}" method = "post" style = "width:33%;">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value = "&#xf004;" style = "font-family: FontAwesome;color:red;border: none;">
                 </form>
               @else
                 <form action="/tweet/like" method = "post" style = "width:33%;">
                   @csrf
                   <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
                   <input type="hidden" name = "tweet_id" value = "{{$tweet->id}}">
                   <input type="submit" value = "&#xf004;" style = "font-family: FontAwesome;border: none;">
                 </form>
               @endif
               <a href="/tweet/{{$tweet->id}}" style = "width:34%;"><i class="fas fa-comments"></i></a>
               @if($tweet->user_id == Auth::id())
                 <form action="/tweet/{{$tweet->id}}" method = "post" style = "width:33%;">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value = "&#xf2ed;" style = "font-family: FontAwesome;border: none;">
                 </form>
               @endif              
               @else
                <h5>ログインすると使えるようになります</h5>
               @endauth
            </div>
          </div>
          </div>
        </div>
        @else
        <div style = "border: solid 3px #000000;padding:20px;margin-right:120px;margin-left:120px;margin-bottom:20px;">
          <div style = "width:100%;display:flex;">
          <div class = "top-infomation" style = "width:10%;">
            <div style = "width:50px;height:50px;">
              <img src="https://ferret.akamaized.net/uploads/article/6845/eyecatch/default-95e77d8922603c5a64085258c0cc3f96.png" style = "width:100%;height:100%;border-radius:50%;">
            </div>
          </div>
          <div class = "back-infomation" style = "width:90%;">
            <p style = "margin-top:0px;font-weight:bold;">{{$tweet->user->name}}</p>
            
            <p>{{$tweet->text}}</p>
            <div class = "back-function" style = "display: flex;">
               @auth
               @if($likes->where('user_id',Auth::id())->where('tweet_id',$tweet->id)->first())
                 <form action="/tweet/like/{{$likes->where('user_id',Auth::id())->where('tweet_id',$tweet->id)->first()->id}}" method = "post" style = "width:33%;">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value = "&#xf004;" style = "font-family: FontAwesome;color:red;border: none;">
                 </form>
               @else
                 <form action="/tweet/like" method = "post" style = "width:33%;">
                   @csrf
                   <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
                   <input type="hidden" name = "tweet_id" value = "{{$tweet->id}}">
                   <input type="submit" value = "&#xf004;" style = "font-family: FontAwesome;border: none;">
                 </form>
               @endif
               <a href="/tweet/{{$tweet->id}}" style = "width:34%;"><i class="fas fa-comments"></i></a>
               @if($tweet->user_id == Auth::id())
                 <form action="/tweet/{{$tweet->id}}" method = "post" style = "width:33%;">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value = "&#xf2ed;" style = "font-family: FontAwesome;border: none;">
                 </form>
               @endif              
               @else
                <h5>ログインすると使えるようになります</h5>
               @endauth
            </div>
          </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>

</div>
</div>
@endsection