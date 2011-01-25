<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'论坛维护',
'Rebuild index subhead'			=>	'重建搜索索引',
'Rebuild index info'			=>	'如果您在数据库中手动添加，编辑或移除了帖子或者论坛的搜索出现了问题，您应该重建搜索索引。为了获得最佳性能，在重建索引前您应该将论坛设置为%s。<strong>重建索引可能会需要较长时间并且重建过程会加重服务器负载！</strong>',
'Posts per cycle label'			=>	'每周期处理帖子',
'Posts per cycle help'			=>	'每页面处理的帖子数量。例如，填写300时，每处理三百个帖子将会自动刷新页面。这样做是为了防止在重建索引过程中出现脚本超时。',
'Starting post label'			=>	'起始帖子的ID',
'Starting post help'			=>	'要重建索引的起始帖子的ID。默认是从数据库中存在的第一个帖子开始。一般您不需要修改。',
'Empty index label'				=>	'清空索引',
'Empty index help'				=>	'若您准备在重建索引前清空搜索索引请勾选此项(参见下文)。',
'Rebuild completed info'		=>	'一旦该过程结束，您将被重定向回此页面。强烈建议您在操作过程中开启浏览器的JavaScript功能(以使一个周期完成后能够自动重定向)。如果重建过程被迫中止，您也可以记下已处理的最后一个帖子的ID然后将“起始帖子的ID”填写为该ID+1再继续建立索引(此时不得勾选“清空索引”选项)。',
'Rebuild index'					=>	'重建索引',
'Rebuilding search index'		=>	'重建搜索索引',
'Rebuilding index info'			=>	'正在重建索引。正是喝咖啡的好时机 :-)',
'Processing post'				=>	'正在处理帖子 <strong>%s</strong> …',
'Click here'					=>	'点击这里',
'Javascript redirect failed'	=>	'JavaScript重定向不成功。 %s 继续 …',

);
