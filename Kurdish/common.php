<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'rtl', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ku',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'داوای خراپ ،ئەو بەستەرەی دوایکەوتوویت هەڵەیە یان لە دەرەوەی تۆمارە',
'No view'							=>	'تۆ دەسەڵاتی بینینی ئەو مەکۆیانەت نییە',
'No permission'						=>	'تۆ دەسەڵاتی گەیشتن بەو پەڕەیەت نییە',
'Bad referrer'						=>	' ی خراپ ،تۆ گەڕێندرایتەوە بۆ ئەو پەڕەیە لە سەرچاوەی ئەگەر هەڵەکە بەردەوام بوو دڵنایبەوە لەوەی بەستەری بنچینە پێشتر دانراوە لە بەڕێوەبەرایەتی/هەڵبژاردنەکان هەڵەوەHTTP_REFERER',
'No cookie'							=>	'وا دەردەکەوێ بە سەرکەوتووی هاتبیتە ژوورەوە ،هەرچۆنێکە شەکرۆکەیەک دانەنراوە ڕێکخستنەکانت بپشکنە وە ئەگەر گونجا شەکرۆکەکان چالاک بکە بۆ ئەو ماڵپەرە',
'Pun include error'					=>	'هیچ پەڕگەیەکی لەو جۆرە نییە نە لە قاڵبەکە وە نە لە شوێناوی بەکارهێنەر، %s لە قاڵبی %s ناتوانرێ بگەیت بە بەکارهێنەر لەناو',

// Miscellaneous
'Announcement'						=>	'جێگیر',
'Options'							=>	'هەڵبژرادنەکان',
'Submit'							=>	'ناردن', // "Name" of submit buttons
'Ban message'						=>	'تۆ لەو مەکۆیە ڕاگیراویت',
'Ban message 2'						=>	'ڕاگرتنەکە بەسەردەچێت لەکۆتایی',
'Ban message 3'						=>	':بەڕێوەبەرەکە یان چاودێرەکەی کە تۆی ڕاگرتووە ئەم پەیامەی بۆ جێهێشتووی',
'Ban message 4'						=>	'تکایە هەر لێکۆڵینەوەیەک بگەڕێنەوە بۆ بەڕێوەبەرایەتی مەکۆ لە',
'Never'								=>	'هەرگیز',
'Today'								=>	'ئەمڕۆ',
'Yesterday'							=>	'دوێنێ',
'Info'								=>	'زانیاری', // A common table header
'Go back'							=>	'بگەڕێوە',
'Maintenance'						=>	'چاکسازی',
'Redirecting'						=>	'گەڕاندنەوە',
'Click redirect'					=>	'کرتە لێرە بکە گەر ناتەوێ زۆرتر چاوەڕوان بیت ،یان وێبگەڕەکەت پاڵپشتی گواستنەوەی خۆکار ناکات',
'on'								=>	'چالاکە', // As in "BBCode is on"
'off'								=>	'ناچالاکە',
'Invalid email'						=>	'ئەو پۆستی ئەلیکترۆنییەی نووسیوتە بەردەست نییە',
'Required'							=>	'(داواکراوە)',
'required field'					=>	'بوارێکی داواکراوە بۆ ئەو فۆرمە', // For javascript form validation
'Last post'							=>	'دوایین پەیام',
'by'								=>	'لەلایەن', // As in last post by someuser
'New posts'							=>	'پەیامە نوێیەکان', // The link that leads to the first new post
'New posts info'					=>	'بڕۆ بۆ یەکەم پەیام لەم بابەتە.', // The popup text for new posts links
'Username'							=>	'ناوی بەکارهێنەر',
'Password'							=>	'تێپەڕەووشە',
'Email'								=>	'ئیمەیڵ',
'Send email'						=>	'ئیمەیڵ بنێرە',
'Moderated by'						=>	'چاودێریکردن لەلایەن',
'Registered'						=>	'تۆماربوو: ',
'Subject'							=>	'سەردێڕ',
'Message'							=>	'پەیام',
'Topic'								=>	'بابەت',
'Forum'								=>	'Forum',
'Posts'								=>	'پەیامەکان',
'Replies'							=>	'وەڵامەکان',
'Pages'								=>	':پەڕەکان',
'Page'								=>	'پەڕەی %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'خەندەکان:',
'and'								=>	'و',
'Image link'						=>	'وێنە', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'نووسی:', // For [quote]'s
'Mailer'							=>	'پەیامبەر', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'زانیاری گرنگ',
'Write message legend'				=>	'پەیامەکەت بنووسە و بینێرە',
'Previous'							=>	'پێشوو',
'Next'								=>	'دواتر',
'Forum index'						=>	'دەستپێکی مەکۆ',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'ناونیشان',
'Member'							=>	'ئەندام', // Default title
'Moderator'							=>	'چاودێر',
'Administrator'						=>	'بەڕێوەبەر',
'Banned'							=>	'ڕاگیراو',
'Guest'								=>	'میوان',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	' [/%1$s] دۆزرایەوە بەبێ گونجاندنێکی [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] کرایەوە لەکاتی [%2$s], ئەمە ڕێپێنەدراوە',
'BBCode error invalid self-nesting'	=>	'[%s] کرایەوە لەکاتی خۆیدا ،ئەمە ڕێپێنەدراوە',
'BBCode error no closing tag'		=>	'[%1$s] دۆزرایەوە بەبێ گونجاندنێکی [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] تاق بەش دەستێکی نادیاری هەیە',
'BBCode code problem'				=>	'[code] کێشەیەک هەیە لەگەڵ تاقەکانی',
'BBCode list size error'			=>	'لیستەکەت زۆر درێژبوو بۆ جیاکردنەوە ،تکایە بچووکی بکەوە',

// Stuff for the navigator (top of every page)
'Index'								=>	'دەستپێک',
'User list'							=>	'ئەندامان',
'Rules'								=>	'یاساکان',
'Search'							=>	'گەڕان',
'Register'							=>	'تۆماربوون',
'Login'								=>	'چوونەژوورەوە',
'Not logged in'						=>	'تۆ لە ژوورەوە نیت',
'Profile'							=>	'پرۆفایل',
'Logout'							=>	'دەرچوون',
'Logged in as'						=>	'لە ژوورەوەیت وەکو',
'Admin'								=>	'بەڕێوەبەرایەتی',
'Last visit'						=>	'دوا سەردان: %s',
'Topic searches'					=>	'بابەتەکان:',
'New posts header'					=>	'نوێ',
'Active topics'						=>	'چالاک',
'Unanswered topics'					=>	'وەڵامنەدراو',
'Posted topics'						=>	'نێردرا',
'Show new posts'					=>	'پەیامە نوێیەکان ببینە',
'Show active topics'				=>	'بابەتە چالاکەکان ببینە',
'Show unanswered topics'			=>	'بابەتە بێ وەڵامەکان ببینە',
'Show posted topics'				=>	'پەیامەکانی خۆت ببینە',
'Mark all as read'					=>	'بابەتەکان وەکو خوێندراوە نیشانبکە',
'Mark forum read'					=>	'مەکۆکان وەکو خوێندراوە لێبکە',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'تەختەی پێپەڕە',
'Jump to'							=>	'بازدان بۆ',
'Go'								=>	' بڕۆ ', // Submit button in forum jump
'Moderate topic'					=>	'چاودێریکردنی بابەت',
'Move topic'						=>	'بابەت بگوازەوە',
'Open topic'						=>	'بابەت بکەوە',
'Close topic'						=>	'داخستنی بابەت',
'Unstick topic'						=>	'دەرهێنانی لە جێگیریی',
'Stick topic'						=>	'بابەت جێگیربکە',
'Moderate forum'					=>	'مەکۆ چاودێریبکە',
'Powered by'						=>	'بەهێزە بە : %s',

// Debug information
'Debug table'						=>	'زانیاری هەڵەدۆزین',
'Querytime'							=>	'بەرهەمهات لە%1$s چرکەکان, %2$s پرسگەکان لەناوبران',
'Memory usage'						=>	'بیرگەی بەکارهاتوو %1$s :',
'Peak usage'						=>	'(هەڵگر: %1$s)',
'Query times'						=>	'(s) کات',
'Query'								=>	'پرس',
'Total query time'					=>	'کاتی گشتی پرسگە %s',

// Email related notifications
'New user notification'				=>	'ئاگاداری - تۆماربوونی نوێ',
'New user message'					=>	'%s تۆماربوو لە مەکۆکە لە \'%s\' بەکارهێنەر',
'Banned email notification'			=>	'ئاگاداری - ئیمەیڵی ڕاگیراو دۆزرایەوە',
'Banned email register message'		=>	'%s :تۆماربوو لەگەڵ پۆستی ئەلیکترۆنییەکی ڕاگیراو \'%s\' بەکارهێنەر',
'Banned email change message'		=>	'%s :گۆڕا بۆ پۆستی ئەلیکترۆنی ڕاگیراو \'%s\' بەکارهێنەر',
'Banned email post message'			=>	'%s :پەیامی نارد بە پۆستی ئەلیکترۆنی ڕاگیراو \'%s\' بەکارهێنەر',
'Duplicate email notification'		=>	'ئاگاداری - ئیمەیڵی دووبارە دۆزرایەوە',
'Duplicate email register message'	=>	'%s :تۆماربوو لەگەڵ پۆستی ئەلیکترۆنییەکی کە خاوەنەکەی \'%s\' بەکارهێنەر',
'Duplicate email change message'	=>	'%s :ئیمەیڵی گۆرێ بۆ ئیمەیڵێک کە خاوەنەکەی \'%s\' بەکارهێنەر',
'Report notification'				=>	'(%d) ڕاپۆرت- \'%s\'',
'Report message 1'					=>	'%s :ئەم پەیامەی ڕاپۆرت کرد \'%s\' بەکارهێنەر',
'Report message 2'					=>	'هۆکار: %s',

'User profile'						=>	'پرۆفایلی بەکارهێنەر: %s',
'Post URL'							=>	'بەستەری پەیام: %s',
'Email signature'					=>	'پەیامبەری مەکۆ'."\n".'(وەڵامی ئەم پەیامە مەدەوە)',

// For extern.php RSS feed
'RSS description'					=>	'چالاکترین بابەتەکان لە: %s',
'RSS description topic'				=>	'چالاکترین پەیامەکان لە: %s',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'پەیامی نوێ هەیە',
'Maintenance mode enabled'			=>	'باری چاکسازی چالاکە',

);
