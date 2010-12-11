<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'rtl',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ar',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',', //or '`'

// Notices
'Bad request'			=>	'خطأ في الطلب. الرابط الذي تتبعه غير صحيح أو مهجور.',
'No view'				=>	'ليس لديك الصلاحية لاستعراض هذه المنتديات.',
'No permission'			=>	'عفواً غير مسموح لك بالدخول لهذه الصفحة.',
'Bad referrer'			=>	'HTTP_REFERER غير مقبول، لقد وصلت إلى هذه الصفحة من خلال مصدر غير مرخص. يرجى العودة و المحاولة مرة اخرى. في حال تكرار المشكلة تأكد من صحة \'Base URL\' ضمن Admin/Options أو أنك تقوم بزيارة المنتدى من خلال العنوان المناسب، من أجل معلومات أكثر راجع التوثيق لـ FluxBB.',
'No cookie'							=>	'لقد قمت بتسجيل الدخول بنجاح، و لكن الكوكي لديك غير مفعل. يرجى التأكد من من الإعدادات لديك، و تفعيل الكوكي لهذا الموقع.',
'Pun include error'					=>	'لا يمكن معالجة الملف الخاص %s من القالب %s. لا يوجد مثل هذا ملف في القوالب الجاهزة أو في القوالب الخاصة.',

// Miscellaneous
'Announcement'			=>	'تبليغ',
'Options'				=>	'الخيارات',
'Submit'				=>	'أرسل',	// "Name" of submit buttons
'Ban message'			=>	'انت مطرود من المنتدى.',
'Ban message 2'			=>	'مدة الطرد منتهية',
'Ban message 3'			=>	'المدير أو المشرف الذي طردك ترك لك هذه الرسالة:',
'Ban message 4'			=>	'من فضلك وجّه أي استفسار إلى مدير المنتدى على',
'Never'					=>	'أبداً',
'Today'					=>	'اليوم',
'Yesterday'				=>	'أمس',
'Info'					=>	'معلومات',		// a common table header
'Go back'				=>	'للخلف',
'Maintenance'			=>	'صيانة',
'Redirecting'			=>	'توجيه',
'Click redirect'		=>	'من فضلك انقر هنا إذا كنت لا تريد الانتظار طويلا أو أن متصفحك لا يدعم الانتقال التلقائي',
'on'					=>	'يعمل',		// as in "BBCode is on"
'off'					=>	'لا يعمل',
'Invalid email'		=>	'البريد الالكتروني الذي أدخلته غير صحيح.',
'Required'							=>	'(مطلوب)',
'required field'		=>	'من الضروري ملئ هذا الحقل.',	// for javascript form validation
'Last post'				=>	'آخر مداخلة',
'by'					=>	'بواسطة',	// as in last post by someuser
'New posts'				=>	'مداخلة&nbsp;جديدة',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'انتقل إلى أول مداخلة جديدة في هذا الموضوع.',	// the popup text for new posts links
'Username'				=>	'اسم المستخدم',
'Password'				=>	'كلمة المرور',
'Email'				=>	'البريد',
'Send email'			=>	'أرسل بريد',
'Moderated by'			=>	'بإشراف',
'Registered'			=>	'مسجل',
'Subject'				=>	'العنوان',
'Message'				=>	'الرسالة',
'Topic'					=>	'الموضوع',
'Forum'					=>	'المنتدى',
'Posts'					=>	'المداخلات',
'Replies'				=>	'الردود',
'Pages'					=>	'صفحات',
'Page'								=>	'صفحة %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'				=>	'علامة [img]',
'Smilies'				=>	'ابتسامات',
'and'					=>	'و',
'Image link'			=>	'صورة',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'كتب',	// For [quote]'s
'Mailer'				=>	'بريد',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'معلومات هامة',
'Write message legend'	=>	'اكتب رسالتك ثم أرسل',
'Previous'							=>	'السابق',
'Next'								=>	'التالي',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'					=>	'اللقب',
'Member'				=>	'عضو',	// Default title
'Moderator'				=>	'مشرف',
'Administrator'			=>	'إدارة',
'Banned'				=>	'مطرود',
'Guest'					=>	'ضيف',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] موجودة و لكن لم يتم إيجاد [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] مفتوحة داخل  [%2$s], هذا غير مسموح',
'BBCode error invalid self-nesting'	=>	'[%s] مفتوحة داخل نفس ها, هذا غير مسموح',
'BBCode error no closing tag'		=>	'[%1$s] موجودة و لكن لم يتم إيجاد [/%1$s]',
'BBCode error empty attribute'		=>	'العلامة [%s] لا تحوي الصفات المناسبة',
'BBCode code problem'				=>	'هنالك مشكلة في علامة المصدر البرمجي [code]',
'BBCode list size error'			=>	'القائمة كبيرة ليتم معالجتها, يرجى جعلها أصغر!',

// Stuff for the navigator (top of every page)
'Index'					=>	'فهرس',
'User list'				=>	'المستخدمين',
'Rules'					=>  'قواعد',
'Search'				=>  'بحث',
'Register'				=>  'تسجيل',
'Login'					=>  'دخول',
'Not logged in'			=>  'أنت لم تسجل دخول.',
'Profile'				=>	'الهيئة',
'Logout'				=>	'خروج',
'Logged in as'			=>	'مسجل دخول كـ ',
'Admin'					=>	'الإدارة',
'Last visit'			=>	'آخر زيارة %s',
'New posts'				=>	'مداخلات جديدة',
'Active topics'			=>	'مواضيع نشطة',
'Unanswered topics'		=>	'مواضيع بدون ردود',
'Show new posts'		=>	'ابحث عن المواضيع و المداخلات الجديدة من آخر زيارة.',
'Show active topics'	=>	'ابحث عن المواضيع التي تحوي مداخلات حديثة.',
'Show unanswered topics'=>	'ابحث عن المواضيع التي لم يتم الرد عليها.',
'Mark all as read'		=>	'اعتبر كل المنتديات مقروءة',
'Mark forum read'		=>	'اعتبر هذا المنتدى مقروء',
'Title separator'		=>	' / ',

// Stuff for the page footer
'Board footer'			=>	'تزييل الصفحة',
'Jump to'				=>	'انتقل إلى',
'Go'					=>	' اذهب ',		// Submit button in forum jump
'Moderate topic'					=>	'إشراف على الموضوع',
'Move topic'			=>  'انقل الموضوع',
'Open topic'			=>  'افتح الموضوع',
'Close topic'			=>  'أغلق الموضوع',
'Unstick topic'			=>  'إلغاء تثبيت الموضوع',
'Stick topic'			=>  'ثبيت الموضوع',
'Moderate forum'		=>	'إشراف على المنتدى',
'Powered by'						=>	'برعاية %s',

// Debug information
'Debug table'			=>	'Debug معلومات',
'Querytime'							=>	'تم إنتاجه في %1$s ثانية, %2$s استعلام تم تنفيذه',
'Memory usage'						=>	'الذاكرة المستخدمة: %1$s',
'Peak usage'						=>	'(الذروة: %1$s)',
'Query times'						=>	'الوقت (s)',
'Query'								=>	'استعلام',
'Total query time'					=>	'الوقت الإجمالي للاستعلام: %s',

// Email related notifications
'New user notification'				=>	'تنبيه - تسجيل جديد',
'New user message'					=>	'المستخدم \'%s\' سجل في المنتدى %s',
'Banned email notification'			=>	'تنبيه - اكتشاف لبريد مطرود',
'Banned email register message'		=>	'المستخدم \'%s\' قام بالتسجيل بعنوان بريدي مطرود: %s',
'Banned email change message'		=>	'المستخدم \'%s\' غير بريده لعنواد مطرود: %s',
'Banned email post message'			=>	'المستخدم \'%s\' قام بإجراء مداخلة ببريد مطرود: %s',
'Duplicate email notification'		=>	'تنبيه - اكتشاف لبريد مكرر',
'Duplicate email register message'	=>	'المستخدم \'%s\' قام بالتسجيل بواسطة عنوان بريد يتبع لـ: %s',
'Duplicate email change message'	=>	'المستخدم \'%s\' قام بتغيير عنوان بريده إلى عنوان يتبع لـ: %s',
'Report notification'				=>	'تقرير(%d) - \'%s\'',
'Report message 1'					=>	'المستخدم \'%s\' قام بإرسال تقرير في الرسالة التالية: %s',
'Report message 2'					=>	'السبب: %s',

'User profile'						=>	'هيئة المستخدم: %s',
'Post URL'							=>	'عنوان المداخلة URL: %s',
'Email signature'					=>	'بريد المنتدى'."\n".'(لا تقم بالرد على هذه الرسالة)',

// For extern.php RSS feed
'RSS description'           =>	'المواضيع الأكثر نشاطاً مؤخرا عند',
'RSS description topic'			=>	'الأكثر حداثة عند',
'RSS reply'							=>	'رد: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS تدفق المواضيع الفعالة',
'Atom active topics feed'			=>	'Atom تدفق المواضيع الفعالة',
'RSS forum feed'					=>	'RSS تدفق المنتدى',
'Atom forum feed'					=>	'Atom تدفق المنتدى',
'RSS topic feed'					=>	'RSS تدفق الموضوع',
'Atom topic feed'					=>	'Atom تدفق الموضوع',

// Admin related stuff in the header
'New reports'						=>	'يوجد تقارير جديدة',
'Maintenance mode enabled'			=>	'وضع الصيانة فعال!',

);
