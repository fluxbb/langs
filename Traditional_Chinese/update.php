<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'更新FluxBB',
'Update message'				=>	'您的FluxBB數據庫已經過時，繼續之前必須升級。如果您是該論壇管理員，請按下列說明完成升級。',
'Note'							=>	'注意：',
'Members message'				=>	'該進程僅供論壇管理員操作。如您不是管理員，請勿擔心——論壇馬上就會上線！',
'Administrator only'			=>	'該步驟僅供論壇管理員操作！',
'Database password info'		=>	'要執行數據庫升級請填寫FluxBB所使用的數據庫密碼。如果您不慎忘記了密碼，請查看 \'config.php\' 文件中儲存的密碼。',
'Database password note'		=>	'如果您使用的是SQLite數據庫(無須密碼)請使用數據庫名稱代替密碼。它必須與配置文件中您所給出的數據庫名稱完全匹配。',
'Database password'				=>	'數據庫密碼',
'Next'							=>	'下一步',

'You are running error'			=>	'您所運行的 %1$s 版本號為 %2$s。FluxBB %3$s 至少必須 %1$s %4$s 才能正確運行。繼續之前您必須先將您的 %1$s 升級。',
'Version mismatch error'		=>	'版本不匹配。數據庫 \'%s\' 似乎不包含本升級腳本所支持的FluxBB數據庫架構。',
'Invalid file error'			=>	'無效的數據庫名稱。當使用SQLite數據庫時，填寫的數據庫名稱必須要與您的 \'%s\' 文件中顯示的一致',
'Invalid password error'		=>	'無效的數據庫密碼。升級 FluxBB 時您填寫的數據庫密碼必須要與您的 \'%s\' 文件中顯示的一致',
'No password error'				=>	'未提供數據庫密碼',
'Script runs error'				=>	'已有其他人運行了更新腳本。如果未出現該情況，請手動刪除文件 \'%s\' 後重試',
'No update error'				=>	'您的論壇已經是該腳本所能更新到的最新版本',

'Intro 1'						=>	'該腳本將會更新您的數據庫，取決於服務器的速度以及論壇數據庫的大小，該更新過程可能持續1秒至幾小時不等。繼續之前，請不要忘記做一個數據庫的備份。',
'Intro 2'						=>	'您是否已經閱讀了文檔中的更新說明？如果沒有，請從那裡開始。',
'No charset conversion'			=>	'<strong>重要！</strong> FluxBB 已經檢測到該PHP環境尚不支持將ISO-8859-1以外的編碼轉換為UTF-8的編碼轉換機制。這意味著如果您的當前編碼不是ISO-8859-1，FluxBB 將不能自動將您的論壇數據轉換為UTF-8格式，您必須手工完成該操作。關於手工轉換字符集的指示可在更新說明中找到。',
'Enable conversion'				=>	'<strong>啟用轉換：</strong> 如啟用該功能，在更新腳本完成數據庫結構的必須更新後，還會將數據庫中的所有文字由當前編碼轉換為UTF-8。如是從FluxBB 1.2版更新，該轉換過程是必須的。',
'Current character set'			=>	'<strong>當前字符集：</strong> 如果您的論壇的主要語言是英語，您可以保留此處的默認值。否則，如果非英語，您需要填寫論壇所使用的主要語言包的字符集名稱。<em>錯誤的填寫可能會損壞您的數據庫，因此請勿依靠猜測！</em> 注意：即使原數據庫使用UTF-8編碼，此處也需要填寫。',
'Charset conversion'			=>	'字符集轉換',
'Enable conversion label'		=>	'<strong>啟用轉換</strong> (執行數據庫字符集轉換)。',
'Current character set label'	=>	'當前字符集',
'Current character set info'	=>	'英語論壇保留默認值，否則，提供主要語言包的字符集。',
'Start update'					=>	'開始更新',
'Error converting users'		=>	'用戶轉換錯誤',
'Error info 1'					=>	'轉換某些用戶時出現錯誤。當從FluxBB 1.2轉換時，如果多個用戶的名稱過於相似，如 "bob" 和 "bob"，可能會出現該錯誤。',
'Error info 2'					=>	'以下是未完成轉換的用戶列表。請為每個用戶重新命名，這些用戶將會自動接收被重命名的郵件通知。',
'New username'					=>	'新用戶名',
'Required'						=>	'(必須)',
'Correct errors'				=>	'以下錯誤需要修正：',
'Rename users'					=>	'重命名的用戶',
'Successfully updated'			=>	'您的論壇數據已經成功更新。現在您可以 %s。',
'go to index'					=>	'轉到論壇首頁',

'Unable to lock error'			=>	'更新無法寫入。請確認開放了目錄 \'%s\' 的PHP 寫入權限並確保當前沒有其他人正在運行升級腳本。',

'Converting'					=>	'正在轉換 %s …',
'Converting item'				=>	'正在轉換 %1$s %2$s …',
'Preparsing item'				=>	'正在預分析Preparsing %1$s %2$s …',
'Rebuilding index item'			=>	'正在為 %1$s %2$s 重建索引',

'ban'							=>	'封禁',
'categories'					=>	'版塊分類',
'censor words'					=>	'過濾詞彙',
'configuration'					=>	'配置',
'forums'						=>	'版塊',
'groups'						=>	'用戶組',
'post'							=>	'帖子',
'ranks'							=>	'級別',
'report'						=>	'舉報',
'topic'							=>	'主題',
'user'							=>	'用戶',
'signature'						=>	'簽名',

'Username too short error'		=>	'用戶名長度至少需要2字節。請重新選擇(更長的)用戶名。',
'Username too long error'		=>	'用戶名長度不可超過25字節。請重新選擇(更短的)用戶名。',
'Username Guest reserved error'	=>	'該用戶名已被訪客佔用。請重新選擇用戶名。',
'Username IP format error'		=>	'用戶名不得設為 IP 地址格式。請重新選擇用戶名。',
'Username bad characters error'	=>	'用戶名不可一次包含字符 \'、 " 與 [ 或 ] 。請重新選擇用戶名。',
'Username BBCode error'			=>	'用戶名不得包含論壇所使用的樣式標籤格式 (BBCode) 。請重新選擇用戶名。',
'Username duplicate error'		=>	'已有用戶註冊了用戶名 %s 。您填寫的用戶名與之太相似。用戶名必須與之不同，至少擁有一個字母、數字的差異 (a-z or 0-9)。請重新選擇用戶名。',

'JavaScript disabled'			=>	'JavaScript 可能已被禁用。%s。',
'Click here to continue'		=>	'點此繼續',
'Required field'				=>	'在此表單是必填項目。'

);
