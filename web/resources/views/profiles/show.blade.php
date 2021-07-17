@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    <div class = "personal-page" style = "display:flex;">
      <div class = "back_info">
        <div style = "width:400px;height:300px;">
            <img src="{{$profile->back_img}}" style = "width:100%;">
        </div>
      </div>
      <div class = "front_info">
        <div style = "display:flex;">
          <div style = "width:100px;height:100px;">
            <img src="{{$profile->front_img}}" style = "width:100%;height:100%;border-radius:50%;"">
          </div>
          <p>{{$user->name}}</p>
          <a href="" class = "js-modal-open-profile" data-target = "modal-profile"><i class="fas fa-edit"></i></a>
        </div>
        <div>
          <p>GitHubURLorURL</p>
          <p>{{$profile->url}}</p>
          <p>一言コメント</p>
          <p>{{$profile->one_word_comment}}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id = "modal-profile" class = "c-modal-profile js-modal-profile">
        <div class="c-modal_bg-profile js-modal-close-profile"></div>
        <div class = "c-modal_content-profile _lg-profile">
          <div class = "c-modal_content_inner-profile">
            <a class = "js-modal-close-profile c-modal_close-profile" href=""><span>閉じる</span></a>






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
              </div>
              <input type="submit" value = "アップデート">
            </form>
            </div>
  
          </div>
        </div>
        </div>

@endsection