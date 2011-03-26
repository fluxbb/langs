<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'                                       =>      'zh-Hant',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'錯誤請求。您要開啟的連結不存在或已失效。',
'No view'							=>	'您沒有權限檢視這些版面。',
'No permission'						=>	'您沒有權限訪問這個頁面。',
'Bad referrer'						=>	'HTTP_REFERER 錯誤。您從一個未經授權的位址接入本頁。如果這問題再次發生，請檢查設定 論壇管理設定/選項 中的 \'根目錄網址\' 輸入是否正確，並確認您訪問的連結版面正是指向該網址。要獲得關於此問題的更多資訊請訪問FluxBB官方論壇。',
'No cookie'							=>	'您似乎已經登入成功，但是cookie未能正確設定。請檢查您的相關設定，如果該功能可用，請對本站啟用cookies。',
'Pun include error'					=>	'無法處理使用者包括 %s 從範本 %s。不在範本目錄中也不在使用者包括的目錄中有此檔案。',

// Miscellaneous
'Announcement'						=>	'公告',
'Options'							=>	'選項',
'Submit'							=>	'送出', // "Name" of submit buttons
'Ban message'						=>	'您的帳號已被論壇封鎖。',
'Ban message 2'						=>	'該封鎖會持續至',
'Ban message 3'						=>	'以下是論壇管理員給您的封鎖通知：',
'Ban message 4'						=>	'任何疑問，請直接聯繫論壇管理員',
'Never'								=>	'無',
'Today'								=>	'今天',
'Yesterday'							=>	'昨天',
'Info'								=>	'資訊', // A common table header
'Go back'							=>	'返回',
'Maintenance'						=>	'維護',
'Redirecting'						=>	'重新導向中',
'Click redirect'					=>	'如果您不想繼續等待(或者您的瀏覽器不支援自動轉向)，請點選這裡',
'on'								=>	'啟用', // As in "BBCode is on"
'off'								=>	'停用',
'Invalid email'						=>	'您輸入的電子信箱無效。',
'Required'							=>	'(必需)',
'required field'					=>	'不能為空。', // For javascript form validation
'Last post'							=>	'最後發表',
'by'								=>	'by', // As in last post by someuser
'New posts'							=>	'檢視最新文章', // The link that leads to the first new post
'New posts info'					=>	'檢視該主題中最新的文章。', // The popup text for new posts links
'Username'							=>	'會員名稱',
'Password'							=>	'密碼',
'Email'								=>	'電子信箱',
'Send email'						=>	'發送郵件',
'Moderated by'						=>	'版主：',
'Registered'						=>	'註冊時間',
'Subject'							=>	'主題',
'Message'							=>	'內容',
'Topic'								=>	'主題',
'Forum'								=>	'版面',
'Posts'								=>	'文章',
'Replies'							=>	'回覆',
'Pages'								=>	'頁次：',
'Page'								=>	'第 %s 頁',
'BBCode'							=>	'BBCode：', // You probably shouldn't change this
'img tag'							=>	'[img] 貼圖：',
'Smilies'							=>	'表情符號：',
'and'								=>	'以及',
'Image link'						=>	'圖片', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'寫道：', // For [quote]'s
'Mailer'							=>	'郵件程式', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'重要資訊',
'Write message legend'				=>	'輸入內容後點選送出',
'Previous'							=>	'上一頁',
'Next'								=>	'下一頁',
'Forum index'						=>	'論壇首頁',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'頭銜',
'Member'							=>	'Member(一般會員)', // Default title
'Moderator'							=>	'版主',
'Administrator'						=>	'管理員',
'Banned'							=>	'封鎖',
'Guest'								=>	'訪客',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] 缺少符合的標籤 [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] 標籤不允許在 [%2$s] 標籤內部使用',
'BBCode error invalid self-nesting'	=>	'[%s] 標籤不允許在其自身內部使用',
'BBCode error no closing tag'		=>	'[%1$s] 缺少符合的標籤 [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] 標籤屬性不允許為空',
'BBCode code problem'				=>	'[code] 標籤出現錯誤。',
'BBCode list size error'			=>	'列表內容過長無法解析，請縮短後再試！',

// Stuff for the navigator (top of every page)
'Index'								=>	'首頁',
'User list'							=>	'會員列表',
'Rules'								=>	'服務條款',
'Search'							=>	'搜尋',
'Register'							=>	'註冊',
'Login'								=>	'登入',
'Not logged in'						=>	'您尚未登入。',
'Profile'							=>	'個人資料',
'Logout'							=>	'登出',
'Logged in as'						=>	'歡迎回來：',
'Admin'								=>	'論壇管理設定',
'Last visit'						=>	'上次登入： %s',
'Topic searches'					=>	'主題:',
'New posts header'					=>	'新發表',
'Active topics'						=>	'最近',
'Unanswered topics'					=>	'未回覆',
'Posted topics'						=>	'您參與的',
'Show new posts'					=>	'尋找您上次登入後的新主題文章。',
'Show active topics'				=>	'尋找最近的主題文章。',
'Show unanswered topics'			=>	'尋找未回覆的主題。',
'Show posted topics'				=>	'尋找您參與討論的主題。',
'Mark all as read'					=>	'標記所有文章為已閱讀',
'Mark forum read'					=>	'標記該版面為已閱讀',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'頁尾',
'Jump to'							=>	'轉移到',
'Go'								=>	'前往', // Submit button in forum jump
'Moderate topic'					=>	'管理主題',
'Move topic'						=>	'移動主題',
'Open topic'						=>	'開放主題',
'Close topic'						=>	'關閉主題',
'Unstick topic'						=>	'解除置頂',
'Stick topic'						=>	'置頂主題',
'Moderate forum'					=>	'管理版面',
'Powered by'						=>	'Powered by %s, 中文(臺灣)語系製作維護 <a href=http://web.dhjh.tcc.edu.tw/~gzqbyr/fluxbb target=blank>CRLin</a>',

// Debug information
'Debug table'						=>	'Debug資訊',
'Querytime'							=>	'於 %1$s 秒鐘內產生，執行 %2$s 的查詢',
'Memory usage'						=>	'記憶體使用量：%1$s',
'Peak usage'						=>	'(尖峰：%1$s)',
'Query times'						=>	'時間 (秒)',
'Query'								=>	'查詢',
'Total query time'					=>	'總查詢時間: %s',

// Email related notifications
'New user notification'				=>	'通知 - 有新會員註冊',
'New user message'					=>	'會員 \'%s\' 已在論壇註冊如下 %s',
'Banned email notification'			=>	'通知 - 發現封鎖的電子信箱',
'Banned email register message'		=>	'會員 \'%s\' 註冊時使用了一個被封鎖的電子信箱： %s',
'Banned email change message'		=>	'會員 \'%s\' 已更改為一個被封鎖的電子郵箱： %s',
'Banned email post message'			=>	'會員 \'%s\' 發文時使用了被封鎖的電子信箱： %s',
'Duplicate email notification'		=>	'通知 - 發現重複的電子信箱',
'Duplicate email register message'	=>	'會員 \'%s\' 註冊使用的電子郵箱已經被 %s 使用',
'Duplicate email change message'	=>	'會員 \'%s\' 更改後的電子信箱位址已經被 %s 使用',
'Report notification'				=>	'舉報(%d) - \'%s\'',
'Report message 1'					=>	'會員 \'%s\' 舉報了以下內容： %s',
'Report message 2'					=>	'理由： %s',

'User profile'						=>	'會員個人資料： %s',
'Post URL'							=>	'文章的URL： %s',
'Email signature'					=>	'論壇郵件程式'."\n".'(請勿回覆該郵件)',

// For extern.php RSS feed
'RSS description'					=>	'%s 最近發表的主題。',
'RSS description topic'				=>	'%s 最近發表的文章。',
'RSS reply'							=>	'關於: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS訂閱',
'Atom active topics feed'			=>	'Atom訂閱',
'RSS forum feed'					=>	'RSS訂閱這個版面',
'Atom forum feed'					=>	'Atom訂閱這個版面',
'RSS topic feed'					=>	'RSS訂閱這個主題',
'Atom topic feed'					=>	'Atom訂閱這個主題',

// Admin related stuff in the header
'New reports'						=>	'有新的舉報',
'Maintenance mode enabled'			=>	'維護模式已啟用！'

);
