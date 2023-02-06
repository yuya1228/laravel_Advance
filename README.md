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
### プロジェクトをGit cloneする
- ① ターミナルで下記のコマンドを打ちgit cloneをしてプロジェクトをローカルに落とす。
- $ git clone [LaravelプロジェクトのURL]

- ② vendorディレクトリがないと思うので下記のコマンドをターミナルにて実行します。
- $ composer update

### .envの作成
- ① .envファイルを作成していきます。以下のコマンドを実行し、ファイルをコピーします。
- $ cp .env.example .env

- ② 次に、.envの中のAPP_KEYを発行します。
- $ php artisan key:generate

- ③ 上記まで完了したら下記のコマンドでキャッシュをクリアします。
- $ php artisan config:clear

### データベース設定
- ① データベースの設定をしていきます。下記のコマンドを実行しましょう。
- $ php artisan migrate

- ② seederファイルがある場合は下記のコマンドも実行してください。
- $ php artisan db:seed

### サーバーを立ち上げる
- ①ここまで完了したら下記のコマンドを入力しLocalで立ち上げていきます。
- $ php artisan serve
- 以上が手順になります。
## アカウントの種類
- テストユーザー　
- 管理者
- 店舗代表者
