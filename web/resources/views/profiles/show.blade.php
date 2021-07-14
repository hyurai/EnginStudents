@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    <div class = "personal_page">
     <div class = "personal_content">
       <div class = "back_img">

       <div>
         <div>
           <img src="">
         </div>
       </div>

       </div>
       <div class = "front_img">
         <div class = "top-infomation">




         </div>
         <div class = "back-infomation">
         
         
         </div>

         <div class = "test">
           <div class = "show">
             <p>名前</p>
             <p>{{$user->name}}</p>
             <p>GithubUrlorオリジナルサイトURL</p>
             <p>{{$profile->url}}</p>
             <p>一言コメンt</p>
             <p>{{$profile->one_word_comment}}</p>
             <p>アイコン</p>
             <img src="{{$profile->front_img}}" style = "height:100px;width:100px;">
             <p>バックアイコン</p>
             <img src="{{$profile->back_img}}" style = "height:100px;width:100px;">
          </div>
          <div class = "update">
            <form action="/profile/{{$profile->id}}" method = "post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="text" name = "url" value = "{{$profile->url}}">
              <input type="text" name = "one_word_comment" value = "{{$profile->one_word_comment}}">
              <input type="file" name = "front_img">
              <input type="file" name = "back_img">
              <input type="submit" value = "アップデート">
            </form>
          </div>
         
         </div>








       </div>
     </div>
    </div>
  </div>
</div>
@endsection