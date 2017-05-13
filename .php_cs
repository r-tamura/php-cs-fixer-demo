<?php
  // PHP Lintツール「php-cs-fixer」の設定ファイル
  // 設定方法詳細: https://github.com/FriendsOfPHP/PHP-CS-Fixer
  return PhpCsFixer\Config::create()
    ->setRules([
      "@PSR2" => true,
      "braces" => [
        "position_after_functions_and_oop_constructs" => "same",
      ],
    ])
    // ->setIndent("\s")
    ->setUsingCache(false)
    ->setLineEnding("\r\n");
