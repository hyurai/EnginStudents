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
      <h3><a href = "" class="js-modal-open-icon" data-target="modal-icon" style = "text-decoration: none;color:black;">アイコンを追加</a></h3>
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