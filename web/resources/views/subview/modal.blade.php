<div id = "modal-subview" class = "c-modal-icon js-modal-icon">
  <div class="c-modal_bg-icon js-modal-close-icon"></div>
  <div class = "c-modal_content-icon _lg-icon">
    <div class = "c-modal_content_inner-icon">
      <a class = "js-modal-close-icon c-modal_close-icon" href=""><span>閉じる</span></a>
      @if($target == 'side') 
        <form action="/icon" method = "post">
            @csrf
            <input type="text" name = "icon_class" placeholder="アイコンクラス">
            <input type="text" name = "icon_name" placeholder="アイコンネーム">
            <input type="submit" value = "追加">
        </form>
        <form action="/tweet" method = "post" style = "margin:30px;">
          @csrf
          <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
          <input type="text" name = "title">
          <div style = "display:flex;">
            <input type="text" name = "company_name">
            <select name="job">
              <option hidden value = "">エンジニアの種類を選択してください</option>
              <option value="frontend">フロントエンド</option>
              <option value="backend">バックエンド</option>
              <option value="infra">インフラ</option>
              <option value="ios">ios</option>
              <option value="andoroid">andoroid</option>
            </select>
            </div>
            <div style = " display: flex;flex-direction: column;">
              <input type="text" name = "text">
              <input type="date" name = "entry_data">
              <input type="date" name = "start_data">
              <input type="date" name = "end_data">
              <div id = "input_pluraBox">
                <div id = "input_plural">
                  <input type="text" placeholder="サンプルテキストサンプルテキストサンプルテキスト" name = "skills[]" multipl>
                  <input type="button" value = "+" class = "add pluraBtn">
                  <input type="button" value = "-" class = "del pluraBtn">
                </div>
              </div>
              <input type="submit" value = "Tweet">
              </div>
        </form>
      @elseif($target == 'tweet_show')
        <form action="/tweet/comment" method = "post">
          @csrf
          <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
          <input type="hidden" name = "tweet_id" value = "{{$tweet->id}}">
          <input type="text" name = "comment">
          <input type="submit" value = "追加">
        </form>
      @elseif($target = 'profile_show')
        <div class = "personal-page" style = "display:flex;">
          <form action="/profile/{{$profile->id}}" method = "post" style = "display:flex;" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class = "back_info">
              <div style = "width:400px;height:300px;">
                <label><input type="file" name="back_img" id = "myImage" accept="image/*" style = "display:none;"><img src = "{{$profile->back_img}}" id = "preview" style = "width:100%;height:100%;"></label>
              </div>
            </div>
            <div class = "front_info">
              <div style = "display:flex;">
                <div style = "width:100px;height:100px;">
                  <label><input type="file" name="front_img" id = "front_myImage" accept="image/*" style = "display:none;"><img src = "{{$profile->front_img}}" id = "front_preview" style = "width:100%;height:100%;border-radius:50%;"></label>
                </div>
                <input type="text" name = "name" value = "{{$user->name}}">
              </div>
              <div>
                <p>GitHubURLorURL</p>
                <input type="text" name = "url" value = "{{$profile->url}}">
                <p>一言コメント</p>
                <input type="text" name = "one_word_comment" value = "{{$profile->one_word_comment}}">
              </div>
              <div>
                @foreach($icons as $icon)
                  <input type="checkbox" name = "icons[]" value = "{{$icon->id}}"><p class = "fab {{$icon->icon_class}}">{{$icon->icon_name}}</p>
                @endforeach
              </div>
            </div>
              <input type="submit" value = "アップデート">
          </form>
        </div>
      @endif
    </div>
  </div>
</div>