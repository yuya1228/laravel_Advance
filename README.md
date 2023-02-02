√
# 飲食店の予約アプリ
<img width="1418" alt="shop" src="https://user-images.githubusercontent.com/110316231/215603874-38ec267f-6fb9-4c05-a429-3bc61a8bb8ce.png">

## 作成した目的
模擬案件作成のため

## アプリケーションURL
- https://github.com/yuya1228/laravel_Advance.git

##　機能一覧
- 会員登録
- ログイン
- ログアウト
- ユーザー情報取得
- ユーザー飲食店お気に入り一覧取得
- ユーザー飲食店予約情報取得
- 飲食店一覧取得
- 飲食店詳細取得
- 飲食店お気に入り追加
- 飲食店お気に入り削除
- 飲食店予約情報追加
- 飲食店予約情報削除
- エリア検索
- ジャンル検索
- 店名で検索する
- 予約変更機能
- 評価機能
- メール認証機能
- ストレージ機能
- QRコード
- 決済機能
- 管理者が店舗代表者を作成する機能
- 店舗代表者が店舗情報の作成、更新できる機能

## 使用技術
 - Laravel Framework 9.47.0
 - PHP 8.1.10
## テーブル設計
<img width="1485" alt="table" src="https://user-images.githubusercontent.com/110316231/215605198-23ec76e2-cf39-462f-8024-ca8f6d23c65d.png">

## ER図
<img width="925" alt="ER" src="https://user-images.githubusercontent.com/110316231/215604632-b52e8356-c3f9-4005-ae61-4a8a88676199.png">

## 環境構築
### MAMPをインストールする
-① MAMPの公式ページにアクセスをし、MAMPダウンロードページからファイルをダウンロードします。
インストールが完了すると、MAMPアプリケーションが使用できるようになります。
<img width="1245" alt="MAMP" src="https://user-images.githubusercontent.com/110316231/215863831-c29cdf9c-1ab7-47ca-a479-16d203cfe57f.png">

### composerをインストールする
<img width="366" alt="composer" src="https://user-images.githubusercontent.com/110316231/215870900-dfa7d4ef-946b-4a95-ac85-ea4377163b5c.png">
① composerを公式サイト
トのダウンロード公式サイトからダウンロードする。
- $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
- $ php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
- $ php composer-setup.php
- $ php -r "unlink('composer-setup.php');"


② composerのインストールにあたって、インストールされているか確認します。
ターミナルを開いて以下のコマンドを実行し、ディレクトリを移動します。
- cd /Applications/MAMP/htdocs

② 移動ができたら、以下のコマンドを実行します。
- composer --version

コマンド実行後にバージョンが表示されて入ればcomposerのインストール済みです。

### Laraveでプロジェクト作成
① 以上の手順でLaravelを使用する準備ができました。
ターミナルで下記のコマンドを実行しプロジェクトを作成します。

- composer create-project "laravel/laravel" laravel

これでLaravelのプロジェクトが作成できました。
## アカウントの種類
- テストユーザー
- 管理者
- 店舗代表者
