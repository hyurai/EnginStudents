@extends('layouts.content')
@section('content')
<div class = "content_main">
  @component('components.contents.head')
  @endcomponent
  <div class = "content_include_side">
    @component('components.contents.side')
    @endcomponent
    <div class = "content_content">
      <div class = "serach_form">
       <form action="/tweet/create" method = "get">
       <div>
          <input class = "input_company" type="text" name = "company_name" placeholder="会社名を入力してください">
        </div>
        <div class = "job_areas">
          <select  class = "job"name="job">
            <option hidden value = "">エンジニアの種類を選択してください</option>
            <option value="frontend">フロントエンドエンジニア</option>
            <option value="backend">バックエンドエンジニア</option>
            <option value="infra">インフラエンジニア</option>
            <option value="ios">iosエンジニア</option>
            <option value="andoroid">Andoroidエンジニア</option>
          </select>
        </div>
        <div class = "date_search_areas">
          <input class = "entry_date_search"type="date" name = "entry_data">
          <input class = "start_date_search"type="date" name = "start_data">
        </div>
        <div class = "search-area">
          <input class = "search-button" type="submit" value = "検索">
        </div>
       </form>
       <h4>検索結果</h4>
       <div class = "results">
         <div class = "result">
            @if(!empty($company_name))
              <h4>会社名</h4>
              <h4>{{$company_name}}</h4>
            @endif
         </div>
         <div class = "result">
            @if(!empty($job))
              <h4>職種</h4>
              <h4>{{$job}}</h4>
            @endif
         </div>
         <div class = "result">
            @if(!empty($before_entry_data))
              <h4>エントリー日付</h4>
              <h4>{{$before_entry_data}}</h4>
            @endif
         </div>
         <div class = "result">
            @if(!empty($before_start_data))
              <h4>業務開始日</h4>
              <h4>{{$before_start_data}}</h4>
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

