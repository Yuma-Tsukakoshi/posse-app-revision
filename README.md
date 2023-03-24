# laravel インストール方法

1. `cd docker`
2. `docker compose build --no-cache` (ビルドする)
3. `docker compose up -d` (コンテナをたてる)
4. `docker compose exec app bash` (app コンテナに入る)
5. `composer create-project --prefer-dist laravel/laravel . "9.*"` (src 配下に laravel 9 をインストール)
6. ブラウザで`http://localhost`にアクセスし、「laravel」が表示されることを確認。

# db接続設定
src/.envを以下のように変更して下さい
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
```
<img width="202" alt="スクリーンショット 2022-06-07 16 16 15" src="https://user-images.githubusercontent.com/74942852/172319499-e9457712-e1c6-4f3b-aa64-53a748b39d1a.png">

error対処
logs -> chmod -R 777 storage logs 
database -> php artisan migrate:refresh --seed
require index.php -> composer update