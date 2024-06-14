# JPRS WHOIS検索
JPRS WHOIS検索 PHPライブラリは、PHPで書かれたメソッドからJPRS サーバーへアクセスし<br>
該当ドメインが既に利用登録されているかどうかを判断します。
## インストール方法
パッケージを使用したいだけならば、下記を実行するだけです。
```php
require_once class.command.php
```
## 動作環境
PHP 7.1～

このメソッドはPHPからSOCKETを利用してサーバーへ接続するメソッドである fsockopen を使用しています。
## 使い方
```php
require_once class.command.php
$command = new Command;
$result = $command->whois($domain);
```
$result が Active の場合は利用済のため、ドメインは利用できません。


### タイムアウトについて
通信をする実行環境の通信速度によってはHTTP通信時にタイムアウトが発生する可能性があります。<br />
何度も同じような現象が起こる際は、サーバーの接続の調整もしくは`HTTPクライアントの明示的な指定`からHTTPクライアントの指定及びタイムアウトの時間を増やして、再度実行してください。

### 使用サイト
サイトスカウター [sitescouter.net](https://sitescouter.net)
