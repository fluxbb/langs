<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'ユーザーが登録されていません。ユーザー名を特定せずに制限する場合はブランクにします。',
'No user ID message'		=>	'このIDのユーザーは登録されていません。',
'User is admin message'		=>	'%sは管理者のためアクセス制限できません。管理者を制限する場合は、モデレータか一般ユーザーに降格させます。',
'Must enter message'		=>	'ユーザー名、IPアドレス、メールアドレスのいずれかを指定してください。',
'Cannot ban guest message'	=>	'ゲストは制限できません。',
'Invalid IP message'		=>	'IPアドレス/IPアドレスの範囲に誤りがあります。',
'Invalid e-mail message'	=>	'メールアドレス（例：user@domain.com）またはドメイン（例：domain.com）の指定に誤りがあります。',
'Invalid date message'		=>	'解除日の指定に誤りがあります。',
'Invalid date reasons'		=>	'書式はYYYY-MM-DDです。未来の日付を入力します。',
'Ban added redirect'		=>	'アクセス制限が追加されました。リダイレクト中 …' ,
'Ban edited redirect'		=>	'アクセス制限が編集されました。リダイレクト中 …',
'Ban removed redirect'		=>	'アクセス制限が削除されました。リダイレクト中 …',

'New ban head'				=>	'アクセス制限の追加',
'Add ban subhead'			=>	'追加',
'Username label'			=>	'ユーザー名',
'Username help'				=>	'ユーザー名（大文字／小文字を区別しません）',
'Username advanced help'	=>	'ユーザー名（大文字／小文字を区別しません）を指定します。次のページでIPアドレスやメールアドレスも指定できます。特定のIPアドレスやIPアドレスの範囲、メールアドレスで制限する場合は空のまま"追加"をクリックします。',

'Ban search head'			=>	'アクセス制限の検索',
'Ban search subhead'		=>	'検索条件',
'Ban search info'			=>	'データベース内のアクセス制限情報を検索します。１つ以上の項目を入力します。ワイルドカード(*)が使えます。',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'メッセージ',
'Expire after label'		=>	'解除日（以後）',
'Expire before label'		=>	'解除日（以前）',
'Order by label'			=>	'表示順',
'Order by username'			=>	'ユーザー名',
'Order by ip'				=>	'IPアドレス',
'Order by e-mail'			=>	'メールアドレス',
'Order by expire'			=>	'解除日',
'Ascending'					=>	'昇順',
'Descending'				=>	'降順',
'Submit search'				=>	'検索',

'E-mail label'				=>	'メールアドレス',
'E-mail help'				=>	'メールアドレスまたはドメインを指定します（例：someone@somewhere.com や somewhere.com など）。パーミッションオプションの"アクセス制限されたメールアドレス"も参照してください。',
'IP label'					=>	'IP/IPアドレス範囲',
'IP help'					=>	'IPアドレスまたはIPアドレスの範囲を指定します（例：150.11.110.1 や 150.11.110 など）。スペース区切りで複数指定できます。入力済みのアドレスはデータベースに記憶されたユーザーの最新アドレスです。',
'IP help link'				=>	'このユーザーのIP情報は %s をクリック',
'Ban advanced head'			=>	'アクセス制限の詳細設定',
'Ban advanced subhead'		=>	'IPアドレス・メールアドレスの指定',
'Ban message label'			=>	'制限メッセージ',
'Ban message help'			=>	'制限されたユーザーが掲示板を訪れた時に表示するメッセージ',
'Message expiry subhead'	=>	'メッセージと解除',
'Ban IP range info'			=>	'IPアドレス範囲でアクセスを制限する場合は、複数のユーザーのIPアドレスが一致する可能性があるので注意してください。',
'Expire date label'			=>	'解除日',
'Expire date help'			=>	'制限が解除される日を指定（書式：yyyy-mm-dd）。手動で削除する場合は空のままにします。',

'Results head'				=>	'検索結果',
'Results username head'		=>	'ユーザー名',
'Results e-mail head'		=>	'メールアドレス',
'Results IP address head'	=>	'IP/IPアドレス範囲',
'Results expire head'		=>	'解除日',
'Results message head'		=>	'メッセージ',
'Results banned by head'	=>	'設定者',
'Results actions head'		=>	'アクション',
'No match'					=>	'条件に一致する情報はありません。',
'Unknown'					=>	'不明',

);