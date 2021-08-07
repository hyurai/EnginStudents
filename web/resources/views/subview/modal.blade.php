<div id = "modal-subview" class = "c-modal-subview js-modal-subview">
  <div class="c-modal_bg-subview js-modal-close-subview"></div>
  <div class = "c-modal_content-subview _lg-subview">
    <div class = "c-modal_content_inner-subview">
      <a class = "js-modal-close-subview c-modal_close-subview" href=""><span>閉じる</span></a>
      @if($target = 'tweet.show')
        <form action="/tweet/comment" method = "post">
          @csrf
          <input type="hidden" name = "user_id" value = "{{Auth::id()}}">
          <input type="hidden" name = "tweet_id" value = "{{$tweet->id}}">
          <input type="text" name = "comment">
          <input type="submit" value = "追加">
         </form>
      @elseif($target = '')
      @elseif($target = '')
      @elseif($target = '')
      @endif
    </div>
  </div>
</div>