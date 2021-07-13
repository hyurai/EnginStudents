<div style = "width:35%;">
  <div style = "width:100%;text-align:center;">
    @auth
      <h3>
      <form action="/logout" method = "post">
        @csrf
        <input type="submit" value = "ログアウト" style = "border: none;">
      </form>
      </h3>
      <h3><a href="/profile/{{Auth::id()}}">マイページ</a></h3>
      <h3>インターン情報</h3>
      <h3>おすすめの教材</h3>
      <h3>投稿</h3>
      <h3>アイコンを追加</h3>
      <h3>アイコン一覧</h3>
      <h3>いいね一覧</h3>
    @else
      <h3><a href="/register">新規登録</a></h3>
      <h3><a href="/login">ログイン</a></h3>
    @endauth
  </div>
</div>