
      
        @foreach($tweets as $tweet)
          <div class = "content">
            <div class = "content_framework">
            <div class = "top-infomation">
              <div class = "img_framework">
                <img src="{{$profiles->where('user_id',$tweet->user_id)->first()->front_img}}">
              </div>
            </div>
            <div class = "back-infomation">
              <p class = "user_name">{{$tweet->user->name}}</p>
              @if(isset($tweet->title))
              <p>{{$tweet->title}}</p>
              <div  class = "work_text">
                <p>{{$tweet->company_name}}</p>
                <p>{{$tweet->job}}</p>
              </div>
              <div>
                <div>
                  <p>エントリー</p>
                  <p>{{$tweet->entry_data}}</p>
                </div>
                <div class = "datas">
                  <div  class = "start_data">
                  <p>開始</p>
                  <p>{{$tweet->start_data}}</p>
                  </div>
                  <div class = "end_data">
                    <p>終わり</p>
                    <p>{{$tweet->end_data}}</p>
                  </div>
                </div>
              </div>
              @else
              @endif
              <p>{{$tweet->text}}</p>
              <div class = "skills">
              @foreach($tweet->tweet_skills as $skill)
                <p>{{$skill->name}}</p>
              @endforeach
              </div>
              <div class = "hashtags">
              @foreach($tweet->tweet_hashtag as $hashtag)
                <form action="/hashtag/{{$hashtag->id}}" method = "get">
                  <input type="submit" value = "#{{$hashtag->hastag_name}}" class = "hashtag_button">
                </form>
              @endforeach
              </div>
              <div class = "back-function">
                @auth
                @if($tweet->liked(Auth::id(),$tweet->id))
                  <form action="/tweet/like/{{$tweet->liked(Auth::id(),$tweet->id)->id}}" method = "post" class = "like_form">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value = "&#xf004;" class = "like_button">
                  </form>
                @else
                  <form action="/tweet/like" method = "post" class = "like_delete_form">
                    @csrf
                    <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
                    <input type="hidden" name = "tweet_id" value = "{{$tweet->id}}">
                    <input type="submit" value = "&#xf004;" class = "like_delete_button">
                  </form>
                @endif
                <a href="/tweet/{{$tweet->id}}" class = "tweet_show"><i class="fas fa-comments"></i></a>
                @if($tweet->user_id == Auth::id())
                  <form action="/tweet/{{$tweet->id}}" method = "post" class = "tweet_delete_form">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value = "&#xf2ed;" class = "tweet_delete_button">
                  </form>
                @endif              
                @else
                  <h5>ログインすると使えるようになります</h5>
                @endauth
              </div>
            </div>
            </div>
          </div>
        @endforeach