<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'rtl', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'fa',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'درخواست اشتباه . لینکی که شما آن را دنبال کرده اید نادرست و یا منسوخ شده است.',
'No view'							=>	'شما مجوز مشاهده این انجمن را ندارید.',
'No permission'						=>	'شما مجوز دسترسی به این صفحه را ندارید.',
'Bad referrer'						=>	'HTTP_REFERER اشتباه . شما از یک منبع غیرمجاز به این صفحه مراجعه کرده اید . اگر این مشکل ادامه داشت لطفاً مطمئن شوید که \'Base URL\' بدرستی در مدیریت / گزینه ها تنظیم شده و شما با مراجعه به آن آدرس دارید از انجمن بازدید میکنید . اطلاعات بیشتر درمورد بررسی ارجاع را میتوانید در مستندات FluxBB بیابید.',
'Bad csrf hash'						=>	'CSRF hash اشتباه . شما از یک منبع غیر مجاز به این صفحه مراجعه کرده اید.',
'No cookie'							=>	'بنظر می آید با موفقیت وارد انجمن شده اید ، به هرحال کوکی تنظیم نشده است . لطفاً تنظیمات خود را بررسی کرده و اگر مقدور است ، کوکی ها را برای این سایت فعال کنید.',
'Pun include extension'  			=>	'سیستم قادر به پردازش کاربر شامل %s از قالب %s نمیباشد . فایل های "%s" غیر مجاز است',
'Pun include directory'				=>	'سیستم قادر به پردازش کاربر شامل %s از قالب %s نمیباشد . پیمایش شاخه غیر مجاز است',
'Pun include error'					=>	'سیستم قادر به پردازش کاربر شامل %s از قالب %s نمیباشد .همچنین فایلی نه در پوشه قالب و نه در پوشه شامل کاربر وجود ندارد',

// Miscellaneous
'Announcement'						=>	'اطلاعیه ها',
'Options'							=>	'گزینه ها',
'Submit'							=>	'ارسال', // "Name" of submit buttons
'Ban message'						=>	'شما از این انجمن مسدود شده اید.',
'Ban message 2'						=>	'این محروم شدن منقضی می شود در پایان',
'Ban message 3'						=>	'مدیرکل یا مدیر انجمنی که شما را مسدود کرده پیام روبرو را برای شما گذاشته است:',
'Ban message 4'						=>	'لطفاً هرگونه سوال را مستقیما ً از مدیراصلی انجمن بپرسید :',
'Never'								=>	'هرگز',
'Today'								=>	'امروز',
'Yesterday'							=>	'دیروز',
'Info'								=>	'اطلاعات', // A common table header
'Go back'							=>	'بازگشت',
'Maintenance'						=>	'تعمیر و نگهداری',
'Redirecting'						=>	'درحال تغییر مسیر',
'Click redirect'					=>	'اگر نمیخواهید بیش از این منتظر بمانید اینجا را کلیک کنید ( یا اگر مرورگر شما بصورت خودکار شما را به جلو هدایت نکرد )',
'on'								=>	'روشن', // As in "BBCode is on"
'off'								=>	'خاموش',
'Invalid email'						=>	'آدرس ایمیلی که شما وارد کرده اید معتبر نمیباشد.',
'Required'							=>	'(الزامی)',
'required field'					=>	'کادر الزامی در این فرم است.', // For javascript form validation
'Last post'							=>	'آخرین ارسال',
'by'								=>	'توسط', // As in last post by some user
'New posts'							=>	'ارسال های جدید', // The link that leads to the first new post
'New posts info'					=>	'برو به اولین ارسال جدید در این موضوع.', // The popup text for new posts links
'Username'							=>	'نام کاربری',
'Password'							=>	'کلمه عبور',
'Email'								=>	'ایمیل',
'Send email'						=>	'ارسال ایمیل',
'Moderated by'						=>	'بررسی توسط',
'Registered'						=>	'تاریخ عضویت',
'Subject'							=>	'عنوان',
'Message'							=>	'پیام',
'Topic'								=>	'موضوع',
'Forum'								=>	'انجمن',
'Posts'								=>	'ارسال ها',
'Replies'							=>	'پاسخ ها',
'Pages'								=>	'صفحات:',
'Page'								=>	'صفحه %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'تگ [url]:',
'img tag'							=>	'تگ [img]:',
'Smilies'							=>	'خندانک:',
'and'								=>	'و',
'Image link'						=>	'تصویر', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'نوشته است:', // For [quote]'s
'Mailer'							=>	'%s نامه رسان', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'اطلاعات مهم',
'Write message legend'				=>	'پیام خود را نوشته و ارسال کنید',
'Previous'							=>	'قبلی',
'Next'								=>	'بعدی',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'عنوان',
'Member'							=>	'عضو انجمن', // Default title
'Moderator'							=>	'مدیر انجمن',
'Administrator'						=>	'مدیر اصلی',
'Banned'							=>	'کاربر محروم',
'Guest'								=>	'کاربر مهمان',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s]بدون هیچ مطابقتی [/%1$s] یافت شد',
'BBCode error invalid nesting'		=>	'[%1$s] درون [%2$s] باز شده است ، و این غیر مجاز است',
'BBCode error invalid self-nesting'	=>	'[%s] درون خودش باز شده است ، و این غیر مجاز است',
'BBCode error no closing tag'		=>	'[%1$s] بدون هیچگونه مطابقت [%1$s] یافت شد',
'BBCode error empty attribute'		=>	'برچسب [%s] دارای یک بخش مشخصه خالی میباشد',
'BBCode error tag not allowed'		=>	'شما مجاز به استفاده تگ [%s] نیستید',
'BBCode error tag url not allowed'	=>	'شما مجاز به ارسال لینک نیستید',
'BBCode list size error'			=>	'لیست شما برای تجزیه و تحلیل بسیار بلند است ، لطفاً آن را کوچک تر کنید!',

// Stuff for the navigator (top of every page)
'Index'								=>	'فهرست',
'User list'							=>	'لیست کاربران',
'Rules'								=>	'قوانین',
'Search'							=>	'جستجو',
'Register'							=>	'ثبت نام',
'Login'								=>	'ورود',
'Not logged in'						=>	'شما وارد انجمن نشده اید.',
'Profile'							=>	'پروفایل',
'Logout'							=>	'خروج',
'Logged in as'						=>	'خوش آمدید : ',
'Admin'								=>	'مدیریت',
'Last visit'						=>	'آخرین حضور: %s',
'Topic searches'					=>	'موضوع ها:',
'New posts header'					=>	'جدید',
'Active topics'						=>	'فعال',
'Unanswered topics'					=>	'بدون پاسخ',
'Posted topics'						=>	'ارسال های من',
'Show new posts'					=>	'یافتن موضوع ها با ارسال های جدید از آخرین حضور شما.',
'Show active topics'				=>	'یافتن موضوع ها با جدیدترین ارسال ها.',
'Show unanswered topics'			=>	'یافتن موضوع های بدون پاسخ.',
'Show posted topics'				=>	'یافتن موضوع هایی که شما در آن ارسال داشتید.',
'Mark all as read'					=>	'علامتگذاری همه موضوع ها بعنوان خوانده شده',
'Mark forum read'					=>	'علامتگذاری این انجمن بعنوان خوانده شده',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'پاورقی انجمن',
'Jump to'							=>	'پرش به',
'Go'								=>	' برو ', // Submit button in forum jump
'Moderate topic'					=>	'مدیریت موضوع',
'All'								=>	'همه',
'Move topic'						=>	'انتقال موضوع',
'Open topic'						=>	'بازکردن موضوع',
'Close topic'						=>	'بستن موضوع',
'Unstick topic'						=>	'موضوع مهم نیست',
'Stick topic'						=>	'موضوع مهم است',
'Moderate forum'					=>	'مدیریت انجمن',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'اطلاعات اشکال زدایی',
'Querytime'							=>	'در %1$s ثانیه ایجاد شد ، %2$s پرس و جو اجرا شد',
'Memory usage'						=>	'استفاده از حافظه: %1$s',
'Peak usage'						=>	'(حداکثر: %1$s)',
'Query times'						=>	'زمان',
'Query'								=>	'پرس و جو',
'Total query time'					=>	'مجموع زمان پرس و جو: %s',

// For extern.php RSS feed
'RSS description'					=>	'جدیدترین موضوع ها در %s.',
'RSS description topic'				=>	'جدیدترین ارسال ها در %s.',
'RSS reply'							=>	'پاسخ: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS بازخورد موضوع های فعال',
'Atom active topics feed'			=>	'Atom بازخورد موضوع های فعال',
'RSS forum feed'					=>	'RSS بازخورد انجمن',
'Atom forum feed'					=>	'Atom بازخورد انجمن',
'RSS topic feed'					=>	'RSS بازخورد موضوع',
'Atom topic feed'					=>	'Atom بازخورد موضوع',

// Admin related stuff in the header
'New reports'						=>	'هیچ گزارشی وجود ندارد',
'Maintenance mode enabled'			=>	'حالت تعمیر و نگهداری فعال میباشد !',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
