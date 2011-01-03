<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'輕鐵', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'恩',

// Number formatting
'lang_decimal_point'				=>	'。',
'lang_thousands_sep'				=>	'，',

// Notices
'Bad request'						=>	'不正確的要求。其次是你的鏈接不正確或過時。',
'No view'							=>	'您沒有權限查看這些論壇。',
'No permission'						=>	'您沒有權限訪問此頁面。',
'Bad referrer'						=>	'壞 HTTP_REFERER。你提到這頁從未經批准的來源。如果問題仍然存在，請確保\'基地網址\'是正確的設置管理員 /選項，而且您正在訪問的論壇，導航到該網址。更多有關引薦檢查可以發現，在FluxBB文檔。',
'No cookie'							=>	'您似乎已成功登錄，但一個 cookie沒有設置。請檢查您的設置，如果適用，本網站啟用 cookie。',
'Pun include error'					=>	'無法處理用戶包括 %s 從模板 %s 。沒有這樣的文件，無論是模板目錄，也不包括在用戶目錄中。',

// Miscellaneous
'Announcement'						=>	'公告',
'Options'							=>	'選項',
'Submit'							=>	'提交', // "Name" of submit buttons
'Ban message'						=>	'你被禁止從本次論壇。',
'Ban message 2'						=>	'這項禁令於年底到期',
'Ban message 3'						=>	'管理員或版主，禁止你留下以下信息：',
'Ban message 4'						=>	'如有任何查詢，請直接向論壇管理員在',
'Never'								=>	'從來沒有',
'Today'								=>	'今天',
'Yesterday'							=>	'昨天',
'Info'								=>	'信息', // A common table header
'Go back'							=>	'回去',
'Maintenance'						=>	'維護',
'Redirecting'						=>	'重定向',
'Click redirect'					=>	'點擊這裡如果你不想再等了（或者你的瀏覽器不自動轉發你）',
'on'								=>	'關於', // As in "BBCode is on"
'off'								=>	'關閉',
'Invalid email'						=>	'您輸入的電子郵件地址是無效的。',
'Required'							=>	'（必填）',
'required field'					=>	'是必填字段這種形式。', // For javascript form validation
'Last post'							=>	'最後發表',
'by'								=>	'由', // As in last post by someuser
'New posts'							=>	'新員額', // The link that leads to the first new post
'New posts info'					=>	'轉到第一個新帖在這個話題。', // The popup text for new posts links
'Username'							=>	'用戶名',
'Password'							=>	'密碼',
'Email'								=>	'電郵',
'Send email'						=>	'發送電子郵件',
'Moderated by'						=>	'主持',
'Registered'						=>	'註冊',
'Subject'							=>	'科目',
'Message'							=>	'消息',
'Topic'								=>	'主題',
'Forum'								=>	'論壇',
'Posts'								=>	'貼文',
'Replies'							=>	'回复',
'Pages'								=>	'頁數：',
'Page'								=>	'頁面 %s ',
'BBCode'							=>	'的BBCode：', // You probably shouldn't change this
'img tag'							=>	'[img]標籤：',
'Smilies'							=>	'表情符號：',
'and'								=>	'和',
'Image link'						=>	'圖片', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'說：', // For [quote]'s
'Mailer'							=>	'梅勒', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'重要信息',
'Write message legend'				=>	'編寫您的信息並提交',
'Previous'							=>	'上一頁',
'Next'								=>	'下一頁',
'Spacer'							=>	'...', // Ellipsis for paginate

// Title
'Title'								=>	'標題',
'Member'							=>	'會員', // Default title
'Moderator'							=>	'主持人',
'Administrator'						=>	'管理員',
'Banned'							=>	'禁止',
'Guest'								=>	'客戶',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/ %1$s ]被發現沒有匹配的[ %1$s ]',
'BBCode error invalid nesting'		=>	'[ %1$s ]被打開後 [ %2$s ]，這是不允許的',
'BBCode error invalid self-nesting'	=>	'[ %s ]在開幕本身，這是不允許的',
'BBCode error no closing tag'		=>	'[ %1$s ]被發現沒有匹配的[/ %1$s ]',
'BBCode error empty attribute'		=>	'[ %s ]標籤有一個空的屬性節',
'BBCode code problem'				=>	'有一個問題，你的[代碼]標籤',
'BBCode list size error'			=>	'您的列表太長，解析，請讓小！',

// Stuff for the navigator (top of every page)
'Index'								=>	'指數',
'User list'							=>	'用戶列表',
'Rules'								=>	'規則',
'Search'							=>	'搜索',
'Register'							=>	'註冊',
'Login'								=>	'登錄',
'Not logged in'						=>	'您還沒有登錄',
'Profile'							=>	'簡介',
'Logout'							=>	'註銷',
'Logged in as'						=>	'登錄為',
'Admin'								=>	'政府當局',
'Last visit'						=>	'上次訪問： %s ',
'New posts'							=>	'新員額',
'Active topics'						=>	'活躍的主題',
'Unanswered topics'					=>	'未答复的主題',
'Show new posts'					=>	'發現有新帖的主題自您上次訪問。',
'Show active topics'				=>	'尋找主題包含最近崗位。',
'Show unanswered topics'			=>	'尋找主題尚未得到答复。',
'Mark all as read'					=>	'標記所有主題為已讀',
'Mark forum read'					=>	'標記此論壇為已讀',
'Title separator'					=>	'/',

// Stuff for the page footer
'Board footer'						=>	'董事會頁腳',
'Jump to'							=>	'跳轉到',
'Go'								=>	'轉到', // Submit button in forum jump
'Moderate topic'					=>	'中度話題',
'Move topic'						=>	'移動主題',
'Open topic'						=>	'開放的主題',
'Close topic'						=>	'關閉主題',
'Unstick topic'						=>	'取消置頂主題',
'Stick topic'						=>	'堅持主題',
'Moderate forum'					=>	'中度論壇',
'Powered by'						=>	'技術支持 %s ',

// Debug information
'Debug table'						=>	'調試信息',
'Querytime'							=>	'生成 %1$s 秒， %2$s 查詢執行',
'Memory usage'						=>	'內存使用： %1$s ',
'Peak usage'						=>	'（峰值： %1$s ）',
'Query times'						=>	'時間（s）',
'Query'								=>	'查詢',
'Total query time'					=>	'共有查詢時間： %s ',

// Email related notifications
'New user notification'				=>	'快訊 - 新登記',
'New user message'					=>	'用戶 %s \'登記在論壇上 %s ',
'Banned email notification'			=>	'快訊 - 禁止電子郵件檢測',
'Banned email register message'		=>	'用戶 %s \'禁止註冊的電子郵件地址： %s ',
'Banned email change message'		=>	'用戶 %s \'改為禁止電子郵件地址： %s ',
'Banned email post message'			=>	'用戶 %s \'張貼禁止的電子郵件地址： %s ',
'Duplicate email notification'		=>	'快訊 - 發現重複的電子郵件',
'Duplicate email register message'	=>	'用戶 %s 我國註冊的電子郵件地址，也屬於： %s ',
'Duplicate email change message'	=>	'用戶 %s \'更改為一個電子郵件地址，也屬於： %s ',
'Report notification'				=>	'報告（％d）的 - \' %s \'',
'Report message 1'					=>	'用戶 %s \'已報告了以下信息： %s ',
'Report message 2'					=>	'原因： %s ',

'User profile'						=>	'用戶配置文件： %s ',
'Post URL'							=>	'郵政地址： %s ',
'Email signature'					=>	'Forum Mailer'."\n".'(Do not reply to this message)',

// For extern.php RSS feed
'RSS description'					=>	'在最近的話題 %s 。',
'RSS description topic'				=>	'最近的職位 %s 。',
'RSS reply'							=>	'回复：', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'活動主題的RSS提要',
'Atom active topics feed'			=>	'原子活躍主題飼料',
'RSS forum feed'					=>	'論壇的RSS飼料',
'Atom forum feed'					=>	'原子論壇供稿',
'RSS topic feed'					=>	'主題的RSS提要',
'Atom topic feed'					=>	'原子主題飼料',

// Admin related stuff in the header
'New reports'						=>	'有新的報告',
'Maintenance mode enabled'			=>	'維護模式時啟用！',

);
