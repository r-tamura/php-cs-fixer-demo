# Installation

1. デモソースをクローン

```
git clone https://github.com/r-tamura/php-cs-fixer-demo.git
```

2. php-cs-fixerのダウンロード
http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar
からダウンロードし、クローンしたディレクトリ内の最上位に保存

# Usage

 - fixせずにチェックと結果の出力を行う(確認用)

```
php php-cs-fixer-v2.phar fix --dry-run --diff src
```

 - ファイルの内容を設定どおりにfixする

```
php php-cs-fixer-v2.phar fix src
```

 - リント設定変更

 `.php_cs`を編集する。詳細設定値は[公式ページ](https://github.com/FriendsOfPHP/PHP-CS-Fixer)を参照
