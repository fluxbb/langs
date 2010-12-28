<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'                                       =>      'zh-Hans',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'錯誤請求。您所打開的鏈接不存在或已失效。',
'No view'							=>	'您沒有權限查看這些論壇。',
'No permission'						=>	'您沒有權限訪問該頁面。',
'Bad referrer'						=>	'HTTP_REFERER 錯誤。您從一個未經授權的地址接入本頁。如果該問題再次發生，請檢查設置 管理設置/配置選項 中的 \'根目錄網址\' 填寫是否正確，並確認您訪問論壇的鏈接正是指向該網址。要獲得關於此問題的更多信息請訪問FluxBB官方論壇。',
'No cookie'							=>	'您似乎已經登錄成功，但是cookie未能正確設置。請檢查您的相關設置，如果該功能可用，請對本站啟用cookies。',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'公告',
'Options'							=>	'選項',
'Submit'							=>	'提交', // "Name" of submit buttons
'Ban message'						=>	'您的賬號已被論壇封禁。',
'Ban message 2'						=>	'該封禁會持續至',
'Ban message 3'						=>	'以下是論壇管理人員給您的封禁通知：',
'Ban message 4'						=>	'任何疑問，請直接聯繫論壇管理員',
'Never'								=>	'從未',
'Today'								=>	'今天',
'Yesterday'							=>	'昨天',
'Info'								=>	'信息', // A common table header
'Go back'							=>	'返回',
'Maintenance'						=>	'維護',
'Redirecting'						=>	'正在跳轉',
'Click redirect'					=>	'如果您不想繼續等待(或者您的瀏覽器不支持自動跳轉)，請點擊這裡',
'on'								=>	'可用', // As in "BBCode is on"
'off'								=>	'禁用',
'Invalid email'						=>	'您填寫的電子信箱無效。',
'Required'							=>	'（必需）',
'required field'					=>	'不能為空。', // For javascript form validation
'Last post'							=>	'最後發表',
'by'								=>	'by', // As in last post by someuser
'New posts'							=>	'查看更新', // The link that leads to the first new post
'New posts info'					=>	'查看該主題中新增的帖子。', // The popup text for new posts links
'Username'							=>	'用戶名',
'Password'							=>	'密碼',
'Email'								=>	'電子信箱',
'Send email'						=>	'發送郵件',
'Moderated by'						=>	'版主:',
'Registered'						=>	'註冊時間',
'Subject'							=>	'主題',
'Message'							=>	'內容',
'Topic'								=>	'主題',
'Forum'								=>	'論壇',
'Posts'								=>	'帖子',
'Replies'							=>	'回復',
'Pages'								=>	'頁次:',
'Page'								=>	'頁 %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img] 貼圖:',
'Smilies'							=>	'表情:',
'and'								=>	'以及',
'Image link'						=>	'圖片', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'說:', // For [quote]'s
'Mailer'							=>	'郵件服務', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'重要信息',
'Write message legend'				=>	'填寫內容後點擊按鈕提交',
'Previous'							=>	'上一頁',
'Next'								=>	'下一頁',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'頭銜',
'Member'							=>	'會員', // Default title
'Moderator'							=>	'版主',
'Administrator'						=>	'管理員',
'Banned'							=>	'封禁',
'Guest'								=>	'訪客',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] 缺少匹配的標籤 [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] 標籤不允許在 [%2$s] 標籤內部使用',
'BBCode error invalid self-nesting'	=>	'[%s] 標籤不允許在其自身內部使用',
'BBCode error no closing tag'		=>	'[%1$s] 缺少匹配的標籤 [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] 標籤屬性不允許為空',
'BBCode code problem'				=>	'[code] 標籤出現錯誤，請檢查。',
'BBCode list size error'			=>	'列表內容過長無法解析，請縮短後再試！',

// Stuff for the navigator (top of every page)
'Index'								=>	'首頁',
'User list'							=>	'用戶列表',
'Rules'								=>	'服務條款',
'Search'							=>	'搜索',
'Register'							=>	'註冊',
'Login'								=>	'登錄',
'Not logged in'						=>	'您尚未登錄。',
'Profile'							=>	'個人資料',
'Logout'							=>	'註銷',
'Logged in as'						=>	'歡迎回來:',
'Admin'								=>	'管理設置',
'Last visit'						=>	'上次登錄: %s',
'Show new posts'					=>	'顯示上次登錄後的新帖子',
'Mark all as read'					=>	'標記所有帖子為已讀',
'Mark forum read'					=>	'標記該論壇為已讀',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'頁腳',
'Search links'						=>	'搜索鏈接',
'Show recent posts'					=>	'顯示最近的帖子',
'Show unanswered posts'				=>	'顯示未回復的主題',
'Show your posts'					=>	'顯示我參與的主題',
'Show subscriptions'				=>	'顯示我訂閱的主題',
'Jump to'							=>	'論壇跳轉',
'Go'								=>	'前往', // Submit button in forum jump
'Moderate topic'					=>	'管理主題',
'Move topic'						=>	'移動主題',
'Open topic'						=>	'開啟主題',
'Close topic'						=>	'關閉主題',
'Unstick topic'						=>	'解除置頂',
'Stick topic'						=>	'置頂主題',
'Moderate forum'					=>	'管理論壇',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug信息',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// Email related notifications
'New user notification'				=>	'警報 - 有新用戶註冊',
'New user message'					=>	'用戶 \'%s\' 已在論壇註冊如下 %s',
'Banned email notification'			=>	'警報 - 發現封禁的電子信箱',
'Banned email register message'		=>	'用戶 \'%s\' 註冊時使用了一個被封禁的電子信箱: %s',
'Banned email change message'		=>	'用戶 \'%s\' 已更改為一個被封禁的電子郵箱: %s',
'Banned email post message'			=>	'用戶 \'%s\' 發帖時使用了被封禁的電子信箱: %s',
'Duplicate email notification'		=>	'警報 - 發現重複的電子信箱',
'Duplicate email register message'	=>	'用戶 \'%s\' 註冊使用的電子郵箱已經被 %s 使用',
'Duplicate email change message'	=>	'用戶 \'%s\' 更改後的電子信箱地址已經被 %s 使用',
'Report notification'				=>	'Report(%d) - \'%s\'',
'Report message 1'					=>	'用戶 \'%s\' 舉報了以下內容: %s',
'Report message 2'					=>	'理由: %s',

'User profile'						=>	'用戶個人資料: %s',
'Post URL'							=>	'帖子URL: %s',
'Email signature'					=>	'論壇郵件服務'."\n".'（請勿回復該郵件）',

// For extern.php RSS feed
'RSS description'					=>	'%s 最近發表的主題。',
'RSS description topic'				=>	'%s 最近發表的帖子。',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS訂閱',
'Atom active topics feed'			=>	'Atom訂閱',
'RSS forum feed'					=>	'RSS訂閱該版',
'Atom forum feed'					=>	'Atom訂閱該版',
'RSS topic feed'					=>	'RSS訂閱該主題',
'Atom topic feed'					=>	'Atom訂閱該主題',

// Admin related stuff in the header
'New reports'						=>	'有新的舉報',
'Maintenance mode enabled'			=>	'維護模式已啟用！'

);
