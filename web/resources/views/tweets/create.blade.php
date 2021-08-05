@extends('layouts.content')
@section('content')
<div class = "content_main" style = "width:100%;">
  @component('components.contents.head')
  @endcomponent
  <div style = "display:flex;">
    @component('components.contents.side')
    @endcomponent
    <div class = "content_content" style = "width:65%;">
      <div class = "serach_form" style = "margin-right:120px;margin-left:120px;">
       <form action="/tweet/create" method = "get">
       <div>
          <input type="text" name = "company_name" placeholder="会社名を入力してください" style = "width:400px;height:40px;">
        </div>
        <div style="padding-top:10px;">
          <select name="job" style = "width:400px;">
            <option hidden value = "">エンジニアの種類を選択してください</option>
            <option value="frontend">フロントエンドエンジニア</option>
            <option value="backend">バックエンドエンジニア</option>
            <option value="infra">インフラエンジニア</option>
            <option value="ios">iosエンジニア</option>
            <option value="andoroid">Andoroidエンジニア</option>
          </select>
        </div>
        <div style = "padding-top:10px;">
          <input type="date" name = "entry_data" style = "width:198px;">
          <input type="date" name = "start_data" style = "width:198px;">
        </div>
        <div style = "padding-top:20px;">
          <input type="submit" value = "検索" style = "width:200px;">
        </div>
       </form>
       <h4>検索結果</h4>
       <div class = "result" style = "display:flex;">
         
         <div style = "display: flex;flex-direction: column;">
            @if(!empty($company_name))
              <h4 style = "margin:0px;">会社名</h4>
              <h4 style = "margin:0px;">{{$company_name}}</h4>
            @endif
         </div>
         <div style = "display: flex;flex-direction: column;">
            @if(!empty($job))
              <h4 style = "margin:0px;">職種</h4>
              <h4 style = "margin:0px;">{{$job}}</h4>
            @endif
         </div>
         <div style="display: flex;flex-direction: column;">
            @if(!empty($before_entry_data))
              <h4 style="margin:0px;">エントリー日付</h4>
              <h4 style="margin:0px;">{{$before_entry_data}}</h4>
            @endif
         </div>
         <div style="display: flex;flex-direction: column;">
            @if(!empty($before_start_data))
              <h4 style="margin:0px;">業務開始日</h4>
              <h4 style="margin:0px;">{{$before_start_data}}</h4>
            @endif
         </div>
       </div>
      </div>
      @component('components.contents.content')
         @slot('tweets',$tweets)
         @slot('profiles',$profiles)
         @slot('likes',$likes)
       @endcomponent
    </div>
  </div>
</div>
@endsection

