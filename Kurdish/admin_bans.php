<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'هیچ بەکارهێنەرێک بەو ناوە تۆمار نەبووە. ئەگەر ئەتەوێت راگرتنێک ئەنجام بدەیت کە نەبەسترابێتەوە بەناوی بەکارهێنەرێکی دیاریکراوەوە ئەوا خانەی ناوی بەکارهێنەری بەبەتاڵی بەجێ بهێڵە.',
'No user ID message'		=>	'هیچ بەکارهێنەرێک بەو ID ـیە تۆمار نەبووە.',
'User is admin message'		=>	'ئەندام %s بەڕێوەبەرە و ناکرێت رابگیرێت. ئەگەر ئەتەوێت بەڕێوەبەرێک رابگریت، پێویستە لە پێشدا پلەکەی دابەزێنی بۆ چاودێر یان بەکارهێنەر.',
'Must enter message'		=>	'پێویستە یان ناوی بەکارهێنەر، ژمارەی ئایپی یان پۆستی ئەلکترۆنی بنووسیت (وەک لانی کەم).',
'Cannot ban guest message'	=>	'میوان ناتوانرێت رابگیرێت.',
'Invalid IP message'		=>	'ریزبەندێکی هەڵەی IP ـیت نووسیوە.',
'Invalid e-mail message'	=>	'پۆستی ئەلکترۆنی (وەک user@domain.com) یان بەشە پۆستەئەلکترۆنی دۆمەین (وەک domain.com) ـی نووسراو هەڵەیە.',
'Invalid date message'		=>	'تۆ کاتی بەسەرچوونی هەلەت نووسیوە.',
'Invalid date reasons'		=>	'کاتەشێواز پێویستە بەم جۆرە بێت YYYY-MM-DD و پێویستە ١ رۆژیش وەک لانی کەم دابنرێت بۆ داهاتووی راگرتن.',
'Ban added redirect'		=>	'راگرتن زۆر کرا. دەگوازرێیتەوە …' ,
'Ban edited redirect'		=>	'راگرتن چاککرا. دەگوازرێیتەوە …',
'Ban removed redirect'		=>	'راگرتن لابرا. دەگوازرێیتەوە …',

'New ban head'				=>	'راگرتنی نوێ',
'Add ban subhead'			=>	'راگرتن زۆر بکە',
'Username label'			=>	'ناوی بەکارهێنەر',
'Username help'				=>	'ناوی بەکارهێنەری بۆ راگرتن (ناهەستیارە).',
'Username advanced help'	=>	'ناوی بەکارهێنەر بۆ راگرتن (ناهەستیارە). پەڕەی داهاتوو رێگەت پێدەدا کە ژمارەی ئایپی ویستراو و پۆستی ئەلکترۆنی زۆر بکەیت. ئەگەر ئەتەوێت تەنها ژمارەیەکی ئایپی دیاریکراو یان پۆستێکی ئەلکترۆنی رابگریت، بەبەتاڵی بەجێی بهێڵە.',

'Ban search head'			=>	'گەران لە راگرتن',
'Ban search subhead'		=>	'Enter search criteria', //نەمزانی چی بنووسم بۆ Criteria
'Ban search info'			=>	'بگەڕێ بۆ راگرتنەکان لەبنکەی دراوەدا. ئەتوانیت بەتەنها زاراوەیەک یان زۆرتر لەزاراوەیەک بنووسیت تا بۆی بگەڕێیت. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'پەیام (نامەی راگرتن)',
'Expire after label'		=>	'بەسەربچێ لەدوای',
'Expire before label'		=>	'بەسەربچێ لەپێش',
'Order by label'			=>	'رێکخستن بەپێی',
'Order by username'			=>	'ناوی بەکارهێنەری',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'پۆستی ئەلکترۆنی',
'Order by expire'			=>	'کاتی بەسەرچوون',
'Ascending'					=>	'سەر بەرەو ژوور',
'Descending'				=>	'سەر بەرەو خوار',
'Submit search'				=>	'بگەڕێ',

'E-mail label'				=>	'پۆستی ئەلکترۆنی',
'E-mail help'				=>	'ئەو پۆستە ئەلکترۆنییە یان ئەو دۆمەینەی پۆستەئەلکترۆنییەی دەتەوێت رایبگریت (وەک. someone@somewhere.com یان somewhere.com). بڕوانە "Allow banned email addresses" لە دەسەڵاتەکاندا بۆ زانیاری زۆرتر.', //نازانم "Allow banned email addresses" چۆن کراوە بە کوردی
'IP label'					=>	'IP address/IP-ranges',
'IP help'					=>	'ژمارەی ئایپی یان ریزبەندی ژمارەی ئایپی کە دەتەوێت رایبگریت (وەک 150.11.110.1 یان 150.11.110). ناونیشانەکان بە (بۆشایی) جیا بکەرەوە لەیەکتر.ئەگەر ژمارەی ئایپییەک پێشتر نووسرا بێت، ئەوا دەبێتە دوایین ژمارەی ئایپی بۆ بەکارهێنەر لە بنکەی دراوەدا.',
'IP help link'				=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'			=>	'Ban advanced settings',
'Ban advanced subhead'		=>	'Supplement ban with IP and email',
'Ban message label'			=>	'Ban message',
'Ban message help'			=>	'A message that will be displayed to the banned user when he/she visits the board.',
'Message expiry subhead'	=>	'Ban message and expiry',
'Ban IP range info'			=>	'You should be very careful when banning an IP-range because of the possibility of multiple users matching the same partial IP.',
'Expire date label'			=>	'Expire date',
'Expire date help'			=>	'The date when this ban should be automatically removed (format: yyyy-mm-dd). Leave blank to remove manually.',

'Results head'				=>	'Search Results',
'Results username head'		=>	'Username',
'Results e-mail head'		=>	'Email',
'Results IP address head'	=>	'IP/IP-ranges',
'Results expire head'		=>	'Expires',
'Results message head'		=>	'Message',
'Results banned by head'	=>	'Banned by',
'Results actions head'		=>	'Actions',
'No match'					=>	'No match',
'Unknown'					=>	'Unknown',

);
