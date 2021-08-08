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
            @if($profile->front_img)
              <img src="{{$profile->front_img}}" style = "width:100%;height:100%;border-radius:50%;">
            @else
            <img src="download.png" style = "width:100%;height:100%;border-radius:50%;">
            @endif
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
        <div>
          @foreach($profile_icons as $profile_icon)
            <p class = "fab {{$profile_icon->icon_class}}">{{$profile_icon->icon_name}}</p>
          @endforeach
        </div>
      </div>
    </div>
    @inclue('subview/modal',['target' => 'profile_show'])
  </div>
</div>

@endsection