<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ja',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'リクエストが不正です。リクエストされたリンクは正しくないか現在使われていません。',
'No view'							=>	'フォーラムを閲覧する権限がありません。',
'No permission'						=>	'ページにアクセスする権限がありません。',
'Bad referrer'						=>	'HTTP_REFERER が不正です。許可されていない場所からページを参照しました。問題が繰り返し起こる場合は、管理オプションの\'ベースURL\'にフォーラムのURLを正しく反映されていることを確認してください。リファラーチェックに関する詳しい情報は、FluxBBドキュメントを参照してください。',
'No cookie'							=>	'ログインは成功したように見えますが、cookie が未設定です。ブラウザの設定を確認して、このウェブサイトのクッキーを有効にしてください。',
'Pun include extension'  			=>	'Unable to process user include %s from template %s. "%s" files are not allowed',
'Pun include directory'				=>	'Unable to process user include %s from template %s. Directory traversal is not allowed',
'Pun include error'					=>	'%s が、テンプレート（%s）からインクルードできません。ファイルが template ディレクトリにも include ディレクトリにも存在しません。',

// Miscellaneous
'Announcement'						=>	'アナウンス',
'Options'							=>	'オプション',
'Submit'							=>	'送信', // "Name" of submit buttons
'Ban message'						=>	'あなたはこのフォーラムに対するアクセスが制限されています。',
'Ban message 2'						=>	'アクセス制限の解除予定日は',
'Ban message 3'						=>	'以下はアクセスを制限した管理者またはモデレータのメッセージです。',
'Ban message 4'						=>	'問い合わせ（管理者）：　',
'Never'								=>	'なし',
'Today'								=>	'今日',
'Yesterday'							=>	'昨日',
'Info'								=>	'情報', // A common table header
'Go back'							=>	'戻る',
'Maintenance'						=>	'メンテナンス',
'Redirecting'						=>	'リダイレクト中',
'Click redirect'					=>	'すぐにジャンプしたい場合、または、自動的にジャンプしない場合はここをクリックしてください。',
'on'								=>	'オン', // As in "BBCode is on"
'off'								=>	'オフ',
'Invalid email'						=>	'メールアドレスが正しくありません。',
'Required'							=>	'（必須）',
'required field'					=>	'は必須です。', // For javascript form validation
'Last post'							=>	'最新の投稿',
'by'								=>	'by', // As in last post by someuser
'New posts'							=>	'新しい投稿', // The link that leads to the first new post
'New posts info'					=>	'Go to the first new post in this topic.', // The popup text for new posts links
'Username'							=>	'ユーザー名',
'Password'							=>	'パスワード',
'Email'								=>	'メール',
'Send email'						=>	'メールを送る',
'Moderated by'						=>	'モデレータ: ',
'Registered'						=>	'登録日',
'Subject'							=>	'タイトル',
'Message'							=>	'メッセージ',
'Topic'								=>	'トピック',
'Forum'								=>	'フォーラム',
'Posts'								=>	'投稿',
'Replies'							=>	'返信',
'Pages'								=>	'ページ:',
'Page'								=>	'ページ %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img]タグ:',
'Smilies'							=>	'スマイリー:',
'and'								=>	'と',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'さんの発言:', // For [quote]'s
'Mailer'							=>	'', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'重要な情報',
'Write message legend'				=>	'メッセージを書いて送信してください。',
'Previous'							=>	'前へ',
'Next'								=>	'次へ',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'タイトル',
'Member'							=>	'メンバー', // Default title
'Moderator'							=>	'モデレーター',
'Administrator'						=>	'管理者',
'Banned'							=>	'制限ユーザー',
'Guest'								=>	'ゲストユーザー',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s]はスタートタグ [%1$s] がありません。',
'BBCode error invalid nesting'		=>	'[%1$s]は[%2$s]内で開きっ放しです。これは許可されません。',
'BBCode error invalid self-nesting'	=>	'[%s]の入れ子が正しくありません。これは許可されません。',
'BBCode error no closing tag'		=>	'[%1$s]はエンドタグ[/%1$s]がありません。',
'BBCode error empty attribute'		=>	'[%s]タグに属性が指定されていません。',
'BBCode error tag not allowed'		=>	'You are not allowed to use [%s] tags',
'BBCode error tag url not allowed'	=>	'You are not allowed to post links',
'BBCode code problem'				=>	'[code]タグに問題があります。',
'BBCode list size error'			=>	'リストが長すぎて解析できません。短くしてください！',

// Stuff for the navigator (top of every page)
'Index'								=>	'ホーム',
'User list'							=>	'ユーザー',
'Rules'								=>	'利用規約',
'Search'							=>	'検索',
'Register'							=>	'登録',
'Login'								=>	'ログイン',
'Not logged in'						=>	'ログインしていません。',
'Profile'							=>	'プロフィール',
'Logout'							=>	'ログアウト',
'Logged in as'						=>	'ログイン:',
'Admin'								=>	'管理',
'Last visit'						=>	'前回の訪問: %s',
'Topic searches'					=>	'トピック:',
'New posts header'					=>	'未読',
'Active topics'						=>	'活発',
'Unanswered topics'					=>	'未返信',
'Posted topics'						=>	'投稿',
'Show new posts'					=>	'未読の投稿を表示します。',
'Show active topics'				=>	'最近投稿されたトピックを表示します。',
'Show unanswered topics'			=>	'返信のないトピックを表示します。',
'Show posted topics'				=>	'あなたが投稿したトピックを表示します。',
'Mark all as read'					=>	'すべてのトピックを既読にする',
'Mark forum read'					=>	'このフォーラムを既読にする',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'フォーラムにジャンプ',
'Go'								=>	' Go ', // Submit button in forum jump
'Moderate topic'					=>	'トピックを管理',
'All'					=>	'All',
'Move topic'						=>	'トピックを移動',
'Open topic'						=>	'トピックの閉鎖を解除',
'Close topic'						=>	'トピックを閉鎖',
'Unstick topic'						=>	'注目トピックを解除',
'Stick topic'						=>	'注目トピックに設定',
'Moderate forum'					=>	'フォーラムを管理',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'デバッグ情報',
'Querytime'							=>	'%1$s 秒でページを生成, %2$s クエリーを実行',
'Memory usage'						=>	'使用メモリー: %1$s',
'Peak usage'						=>	'（ピーク: %1$s）',
'Query times'						=>	'クエリー時間(s)',
'Query'								=>	'クエリー',
'Total query time'					=>	'クエリー総時間: %s',

// For extern.php RSS feed
'RSS description'					=>	'%s の最近のトピック',
'RSS description topic'				=>	' %s の最近の投稿',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS フィード',
'Atom active topics feed'			=>	'Atom フィード',
'RSS forum feed'					=>	'RSS フィード',
'Atom forum feed'					=>	'Atom フィード',
'RSS topic feed'					=>	'RSS フィード',
'Atom topic feed'					=>	'Atom フィード',

// Admin related stuff in the header
'New reports'						=>	'新しい通報があります。',
'Maintenance mode enabled'			=>	'メンテナンスモード中',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
