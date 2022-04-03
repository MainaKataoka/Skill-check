# Skill-check

## 前回からの改善
* MVCを意識して設計し直しました
* 関数を使用するように変更しました
* バリデーションを新しく設置しました（電話番号の正規表現はできませんでした）
* セキュリティを強化するためにCSRFTokenを設置しましたできるようになりました
* DBへの登録が
* phpの基礎を勉強しなおしました

## 前々回からの改善
* 前回は修正ボタンを用意しただけで動作しなかったので、修正画面を表示できるようにしました
* 一度入力した値を引き継いで表示するように改善しました
* 前回はHTMLとPHPを分離できていなかったので分離しました
* 未入力のチェックをHTML5の機能で実現できるように変更しました
* 前回同様にmb_send_emailが機能しなかったのでphp.ini等の設定を見直したのですが、動作成功には至りませんでした。

## 開発環境
* Docker (nginx php)
## 実装に費やした時間
* 8時間程度
## 実装中に問題となったこと・工夫したとこ
* 開発環境を自分で準備するのに時間がかかってしまった
* 前回は修正画面で入力値を引き継いで表示できていなかったので改善した
## 改善点
* メール送信(mb_send_mail())が成功しなかった(設定等変更してみたのですが、最後までできませんでした）
* DockerでMySQLは準備できたものの、接続の方法を検索しても実現できなかった
* たくさんのファイルがあって似たようなものを共通化できなかった
## どのような動作テストを行ったか
* 未入力の処理
* 画面遷移
* メール送信（成功せず）
## 参考資料又は参考サイト
* 環境構築のさいにGitHubにてymlファイルをgitcloneして使用しました。(https://github.com/YasuakiHirano/codelike_web_docker)
* codecamp教科書
* Qiitta
* Udemy
