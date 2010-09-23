<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'論壇維護',
'Rebuild index subhead'			=>	'重建搜索索引',
'Rebuild index info'			=>	'如果您在數據庫中手動添加，編輯或移除了帖子或者論壇的搜索出現了問題，您應該重建搜索索引。為了獲得最佳性能，在重建索引前您應該將論壇設置為%s。<strong>重建索引可能會需要較長時間並且重建過程會加重服務器負載！</strong>',
'Posts per cycle label'			=>	'每週期處理帖子',
'Posts per cycle help'			=>	'每頁面處理的帖子數量。例如，填寫300時，每處理三百個帖子將會自動刷新頁面。這樣做是為了防止在重建索引過程中出現腳本超時。',
'Starting post label'			=>	'起始帖子的ID',
'Starting post help'			=>	'要重建索引的起始帖子的ID。默認是從數據庫中存在的第一個帖子開始。一般您不需要修改。',
'Empty index label'				=>	'清空索引',
'Empty index help'				=>	'若您準備在重建索引前清空搜索索引請勾選此項（參見下文）。',
'Rebuild completed info'		=>	'一旦該過程結束，您將被重定向回此頁面。強烈建議您在操作過程中開啟瀏覽器的JavaScript功能（以使一個週期完成後能夠自動重定向）。如果重建過程被迫中止，您也可以記下已處理的最後一個帖子的ID然後將「起始帖子的ID」填寫為該ID+1再繼續建立索引（此時不得勾選「清空索引」選項）。',
'Rebuild index'					=>	'重建索引',
'Rebuilding search index'		=>	'重建搜索索引',
'Rebuilding index info'			=>	'正在重建索引。正是喝咖啡的好時機 :-)',
'Processing post'				=>	'正在處理帖子 <strong>%s</strong> …',
'Click here'					=>	'點擊這裡',
'Javascript redirect failed'	=>	'JavaScript重定向不成功。 %s 繼續 …',

);
