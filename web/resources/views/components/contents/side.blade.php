<div style = "width:35%;">
  <div style = "width:100%;text-align:center;">
    @auth
      <h3>
      <form action="/logout" method = "post">
        @csrf
        <input type="submit" value = "ログアウト" style = "border: none;">
      </form>
      </h3>
      <h3><a href="/profile/{{Auth::id()}}" style = "text-decoration: none;color:black;">マイページ</a></h3>
      <h3><a href="/tweet/create" style = "text-decoration: none;color:black;">公式アカウント</a></h3>
      <h3><a class = "js-modal-open" data-target = "modal01" style = "text-decoration: none;color:black;">投稿</a></h3>

      <div id = "modal01" class = "c-modal js-modal">
        <div class="c-modal_bg js-modal-close"></div>
        <div class = "c-modal_content _lg">
          <div class = "c-modal_content_inner">
            <a class = "js-modal-close c-modal_close" href=""><span>閉じる</span></a>
            <div class = "master_tweet">
            <form action="/tweet" method = "post" style = "margin:30px;">
              @csrf
              <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
              <input type="text" name = "title">
              <div style = "display:flex;">
                <input type="text" name = "company_name">
                <select name="job">
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
            </div>
            
          </div>
        </div>
        </div>


      <h3><a href = "" class="js-modal-open-icon" data-target="modal-icon" style = "text-decoration: none;color:black;">アイコンを追加</a></h3>

      <div id = "modal-icon" class = "c-modal-icon js-modal-icon">
        <div class="c-modal_bg-icon js-modal-close-icon"></div>
        <div class = "c-modal_content-icon _lg-icon">
          <div class = "c-modal_content_inner-icon">
            <a class = "js-modal-close-icon c-modal_close-icon" href=""><span>閉じる</span></a>
            <form action="/icon" method = "post">
              @csrf
              <input type="text" name = "icon_class" placeholder="アイコンクラス">
              <input type="text" name = "icon_name" placeholder="アイコンネーム">
              <input type="submit" value = "追加">
            </form>
          </div>
        </div>
        </div>














      <h3><a href="/icon" style = "text-decoration: none;color:black;">アイコン一覧</a></h3>
      <h3><a href="/tweet/like/{{Auth::id()}}" style = "text-decoration: none;color:black;">いいね一覧</a></h3>
    @else
      <h3><a href="/register" style = "text-decoration: none;color:black;">新規登録</a></h3>
      <h3><a href="/login" style = "text-decoration: none;color:black;">ログイン</a></h3>
    @endauth
  </div>
</div>

<script>
$(document).ready(function(){
  $(document).on("click",".add",function(){
    $(this).parent().clone(true).insertAfter($(this).parent());
  });
  $(document).on("click",".del",function(){
    var target = $(this).parent();
    if(target.parent().children().length > 1){
      target.remove();
    }
  });
});

</script>