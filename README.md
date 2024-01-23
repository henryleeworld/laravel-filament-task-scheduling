# Laravel 10 Filament 任務排程

Filament 任務排程採用快速建立簡捷的 TALL（Tailwind CSS、Alpine.js、Laravel 和 Livewire）堆疊應用程式的工具組，在過去，開發者必須為每個需要排程的任務產生 Cron 項目，然而令人頭疼的是任務排程不受版本控制，並且您需要 SSH 到您的伺服器增加 Cron 項目，現在可以將所有排定的任務儲存在儀表板以便管理任務排程。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 intl，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在進行任何此項工作之前，請確保任務排程運行如下：
```sh
* * * * * php /專案路徑/artisan schedule:run >> /dev/null 2>&1
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 可以經由 `/admin/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/sp6f78H.png)
> 建立一個排程任務

![](https://i.imgur.com/YVnmbUZ.png)
> 伺服器會在指定的時間自動完成設定的任務
