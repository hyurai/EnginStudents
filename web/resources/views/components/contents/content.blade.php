<div class = "content_content" style = "width:65%;">
      
      @foreach($tweets as $tweet)
      
        @if(isset( $tweet->title ))
        <div style = "border: solid 3px #000000;padding:20px;margin-right:120px;margin-left:120px;margin-bottom:20px;">
          <div style = "width:100%;display:flex;">
          <div class = "top-infomation" style = "width:10%;">
            <div style = "width:50px;height:50px;">
              <img src="{{$profiles->where('user_id',$tweet->user_id)->first()->front_img}}" style = "width:100%;height:100%;border-radius:50%;">
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

            <div class = "skills" style = "display:flex;">
            @foreach($tweet->tweet_skills as $skill)
              <p>{{$skill->name}}</p>
            @endforeach
            </div>

            <div class = "hastags" style = "display:flex;">
            @foreach($tweet->tweet_hashtag as $hashtag)
              <form action="/hashtag/{{$hashtag->id}}" method = "get">
                <input type="submit" value = "#{{$hashtag->hastag_name}}" style = "border: none;color: rgb(27, 149, 224);">
              </form>
            @endforeach
            </div>
            <div class = "back-function" style = "display: flex;">
               @auth
               @if($tweet->liked(Auth::id(),$tweet->id))
                 <form action="/tweet/like/{{$tweet->liked(Auth::id(),$tweet->id)->id}}" method = "post" style = "width:33%;">
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
              <img src="{{$profiles->where('user_id',$tweet->user_id)->first()->front_img}}" style = "width:100%;height:100%;border-radius:50%;">
            </div>
          </div>
          <div class = "back-infomation" style = "width:90%;">
            <p style = "margin-top:0px;font-weight:bold;">{{$tweet->user->name}}</p>
            
            <p>{{$tweet->text}}</p>

            <div style = "display:flex;">
            @foreach($tweet->tweet_skills as $skill)
              <p>{{$skill->name}}</p>
            @endforeach
            </div>
            
            <div style = "display:flex;">
            @foreach($tweet->tweet_hashtag as $hashtag)
              <form action="/hashtag/{{$hashtag->id}}" method = "get">
                <input type="submit" value = "#{{$hashtag->hastag_name}}" style = "border: none;color: rgb(27, 149, 224);">
              </form>
            @endforeach
            </div>
            <div class = "back-function" style = "display: flex;">
               @auth
               @if($tweet->liked(Auth::id(),$tweet->id))
                 <form action="/tweet/like/{{$tweet->liked(Auth::id(),$tweet->id)}}" method = "post" style = "width:33%;">
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