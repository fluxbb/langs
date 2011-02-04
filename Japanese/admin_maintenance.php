<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'フォーラムのメンテナンス',
'Rebuild index subhead'			=>	'検索インデクスの再構築',
'Rebuild index info'			=>	'データベースの投稿データをマニュアルで追加・編集・削除した場合や検索に問題がある場合は、検索インデクスを再構築します。パフォーマンスを考慮して、再構築中はフォーラムを%sにすべきです。 <strong>通常、検索インデクスの再構築には長い時間とサーバーへの負荷が掛かります。</strong>',
'Posts per cycle label'			=>	'処理単位',
'Posts per cycle help'			=>	'１つのリクエストで処理する投稿数を指定します。例えば300を指定した場合、300件処理するごとにページがリフレッシュされます。これは、再構築処理中にスクリプトがタイムアウトすることを防ぎます。',
'Starting post label'			=>	'開始ID',
'Starting post help'			=>	'再構築を開始する投稿IDを指定します。表示中の値はデータベース内の最初の有効なIDです。通常は変更しません。',
'Empty index label'				=>	'インデクスのクリア',
'Empty index help'				=>	'インデクスを一旦削除してから再構築する場合にチェックします（下記参照）。',
'Rebuild completed info'		=>	'処理中はブラウザのJavaScriptを有効にすることを強く推奨します（１サイクルの処理が終わるたびにこのページにリダイレクトされるため）。やむを得ず処理を中断する場合は、最後に処理されたIDをメモし、"開始ID"にID+1を指定して再開します（この場合"インデクスのクリア"は選択しません）。',
'Rebuild index'					=>	'再構築',
'Rebuilding search index'		=>	'検索インデクスを再構築しています。',
'Rebuilding index info'			=>	'インデクスを再構築しています。コーヒーでも飲んでお待ちください。 ^^',
'Processing post'				=>	'<strong>%s</strong> を処理中 …',
'Click here'					=>	'クリック',
'Javascript redirect failed'	=>	'JavaScriptでのリダイレクトに失敗しました。%s で継続 …',
'Must be integer message'		=>	'投稿サイクルは正の整数を指定してください。',

);
