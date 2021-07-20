# 紹介
今回私が作成したwebアプリケーションは学生エンジニアのためのSNSです。
これは私が普段プログラミングをする際に辛いなと感じたところを解決したものとなっています。
 
# 作ることが大変だった機能
 
* ハッシュタグ機能
* ![aaaa](https://user-images.githubusercontent.com/72079540/126267970-29f86d61-3f4b-4ccd-a6e7-7d76a784fc16.gif)

* マイページの編集機能
* ![aaaa](https://user-images.githubusercontent.com/72079540/126269398-828c3ed1-9e17-4c89-8db2-d86cea703ace.gif)

 
# このアプリオリジナルの機能
* 企業の名前を検索するとその企業のインターンや新卒採用の情報を見ることが出来る。
* 投稿
* ![aaaa](https://user-images.githubusercontent.com/72079540/126273573-f4d8187b-1b26-428e-b263-611208e8790f.gif)
* 検索
* ![aaa](https://user-images.githubusercontent.com/72079540/126276181-bfe4654a-5aa3-483f-91ee-d108bcfc9023.gif)
 
# Requirement
 

 
* PHP 7.4.1 
* Laravel Framework 8.49.2
* "league/flysystem-aws-s3-v3": "1.*"
* "league/flysystem-cached-adapter": "~1.0"
 

 

 
# Note
* これから直していく箇所
* viewファイルに直接cssを書いているので、これらを直したい。
* viewファイルに長い条件分岐などを書いているので、モデルに書いて使い回せるようにしたい
* 検索機能をController側に書いているが、ローカルスコープなどを使い、Controllerファイルを見やすくしたい。
* バリデーションを書く
* 機能が増えてきたので、テストコードをしっかりと書く




 
