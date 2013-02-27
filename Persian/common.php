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
'Bad request'						=>	'درخواست ناموفق! لینک درخواستی شما اشتباه یا قدیمی است.',
'No view'							=>	'شما دسترسی به دیدن محتویات این انجمن را ندارید.',
'No permission'						=>	'شما دسترسی به دیدن این صفحه را ندارید.',
'Bad referrer'						=>	'رجوع دهنده HTTP با مشکل رو به روست. شما از یک منبع نامعتبر ارجاع داده شده اید. اگر مشکل ادامه یافت، لطفا مطمئن شوید که \ ‘Base URL’\ به درستی در Admin/Options تنظیم شده باشد و اینکه شما انجمن را از طریق هایت شدن به آن URL مشاهده کنید. اطلاعات بیشتر درباره ارجاع دهنده ها را می توانید در مستندات Fluxbb مراجعه کنید.',
'No cookie'							=>	'به نظر می رسد که شما با موفقیت وارد شده اید؛ اما یک کوکی تنظیم نشده است. لطفا تنظیمات خود را چک کرده و در صورت توان کوکی ها را برای این وبسایت فال کنید.',
'Pun include error'					=>	'ناتوان در پردازش ورودی کاربر %s از الگو %s. چنین فایلی نه در دایرکتوری الگوهای کاربر وجود دارد و نه در دایرکتوری ورودی کاربر.',

// Miscellaneous
'Announcement'						=>	'اطلاعیه',
'Options'							=>	'انتخاب ها',
'Submit'							=>	'ارسال', // "Name" of submit buttons
'Ban message'						=>	'دسترسی شما به این انجمن مسدود شده است.',
'Ban message 2'						=>	'انسداد منقضی خواهد شد در',
'Ban message 3'						=>	'مدیریت انجمن شما را با این پیام از دسترسی به انجمن منع کرده است:',
'Ban message 4'						=>	'Please direct any inquiries to the forum administrator at',
'Never'								=>	'هرگز',
'Today'								=>	'امروز',
'Yesterday'							=>	'دیروز',
'Info'								=>	'اطلاعات', // A common table header
'Go back'							=>	'بازگشت به عقب',
'Maintenance'						=>	'تعمیر',
'Redirecting'						=>	'انتقال', 
'Click redirect'					=>	'برای اینکه بیشتر از این منتظر نمانید یا اینکه مرورگر شما را به صفحه اصلی منتقل نکرده است اینجا را کلیک کنید.',
'on'								=>	'روشن', // As in "BBCode is on"
'off'								=>	'خاموش',
'Invalid email'						=>	'آدرس ایمیلی که شما وارد کرده اید اشتباه است.',
'Required'							=>	'(الزامی)',
'required field'					=>	'یک فیلد الزامی در این فرم است.', // For javascript form validation
'Last post'							=>	'آخرین ارسال',
'by'								=>	'توسط', // As in last post by someuser
'New posts'							=>	'ارسال های جدید', // The link that leads to the first new post
'New posts info'					=>	'به اولین پست جدید ارسالی برو.', // The popup text for new posts links
'Username'							=>	'نام کاربری',
'Password'							=>	'گذرواژه',
'Email'								=>	'پست الکترونیک',
'Send email'						=>	'ارسال ایمیل',
'Moderated by'						=>	'مدیریت شده توسط',
'Registered'						=>	'ثبت شده',
'Subject'							=>	'موضوع',
'Message'							=>	'پیام',
'Topic'								=>	'عنوان',
'Forum'								=>	'انجمن',
'Posts'								=>	'ارسال ها',
'Replies'							=>	'پاسخ ها',
'Pages'								=>	'صفحات:',
'Page'								=>	'صفحه %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'تگ [img]:',
'url tag'							=>	'تگ [url]:',
'Smilies'							=>	'شکلک ها:',
'and'								=>	'و',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'نوشته است که:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'اطلاعات مهم',
'Write message legend'				=>	'پیام خود را بنویسید و ارسال کنید',
'Previous'							=>	'قبلی',
'Next'								=>	'بعدی',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'عنوان',
'Member'							=>	'عضو', // Default title
'Moderator'							=>	'مدیریت',
'Administrator'						=>	'مدیریت کل انجمن',
'Banned'							=>	'مسدود شده',
'Guest'								=>	'میهمان',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] نتیجه مشابه ای یافت نشد [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] بوسیله [%2$s] باز شده است، چنین چیزی پذیرفته شده نیست.',
'BBCode error invalid self-nesting'	=>	'[%s] بوسیله خودش باز شده است، چنیین چیزی پذیرفته شده نیست.',
'BBCode error no closing tag'		=>	'[%1$s] نتیجه مشابه ای یافت نشد [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] تگ های این بخش توانایی خالی بودن را دارد.',
'BBCode code problem'				=>	'مشکلی در تگ [code] شما وجود دارد.',
'BBCode list size error'			=>	'لیست شما برای نمایش بیش از حد بلند است، لطفا کوچکترش کنید.',

// Stuff for the navigator top of every page
'Index'								=>	'صفحه نخست',
'User list'							=>	'لیست کاربران',
'Rules'								=>	'قوانین',
'Search'							=>	'جستجو',
'Register'							=>	'عضویت',
'Login'								=>	'ورود',
'Not logged in'						=>	'شما هنوز به سیستم وارد نشده اید.',
'Profile'							=>	'پروفایل',
'Logout'							=>	'خروج',
'Logged in as'						=>	'ورود با حساب کاربری:',
'Admin'								=>	'مدیریت کل انجمن',
'Last visit'						=>	'آخرین بازدید: %s',
'Topic searches'					=>	'موضوعات:',
'New posts header'					=>	'جدید',
'Active topics'						=>	'بایگانی',
'Unanswered topics'					=>	'پاسخ داده نشده',
'Posted topics'						=>	'ارسال شده',
'Show new posts'					=>	'پیدا کردن موضوعات با ارسال های جدید بعد از آخرین ورود شما.',
'Show active topics'				=>	'پیدا کردن موضوعات با آخرین ارسال ها.',
'Show unanswered topics'			=>	'پیدا کردن موضوعات بدون پاسخ.',
'Show posted topics'				=>	'پیدا کردن موضوعاتی که شما در آن پاسخ داده اید.',
'Mark all as read'					=>	'نشانه گذاری تمام موضوعات به عنوان خوانده شده',
'Mark forum read'					=>	'نشانه گذاری این موضوع به عنوان خوانده شده',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'پانوشت انجمن',
'Jump to'							=>	'پریدن به',
'Go'								=>	' برو ', // Submit button in forum jump
'Moderate topic'					=>	'مدیریت موضوع',
'Move topic'						=>	'انتقال موضوع',
'Open topic'						=>	'باز کردن مووع',
'Close topic'						=>	'بستن موضوع',
'Unstick topic'						=>	'چسباندن موضوع به عنوان "عادی"',
'Stick topic'						=>	'چسباندن موضوع به عنوان "مهم"',
'Moderate forum'					=>	'مدیریت انجمن',
'Powered by'						=>	'پشتیبانی توسط تیم آرچ لینوکس ایران و نیرو گرفته با %s',

// Debug information
'Debug table'						=>	'اطلاعات رفع اشکال',
'Querytime'							=>	'تولید شده در %1$s ثانیه, %2$s درخواست اجرا شده است',
'Memory usage'						=>	'حافظه مصرف شده: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'زمان',
'Query'								=>	'درخواست',
'Total query time'					=>	'زمان کل درخواست: %s',

// For extern.php RSS feed
'RSS description'					=>	'بیشترین موضوعات جدید در %s.',
'RSS description topic'				=>	'بیشترین ارسال های جدید در %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'خروجی RSS موضوعات فعال',
'Atom active topics feed'			=>	'خروجی Atom موضوعات فعال',
'RSS forum feed'					=>	'خروجی RSS انجمن',
'Atom forum feed'					=>	'خروجی Atom انجمن',
'RSS topic feed'					=>	'خروجی RSS موضوع',
'Atom topic feed'					=>	'خروجی Atom موضوع',

// Admin related stuff in the header
'New reports'						=>	'گزارشات جدید وجود دارد',
'Maintenance mode enabled'			=>	'تعمیر انجمن فعال شده است!',

// Units for file sizes
'Size unit B'						=>	'%s بایت',
'Size unit KiB'						=>	'%s کیلوبایت',
'Size unit MiB'						=>	'%s مگابایت',
'Size unit GiB'						=>	'%s گیگابایت',
'Size unit TiB'						=>	'%s ترابایت',
'Size unit PiB'						=>	'%s پتابایت',
'Size unit EiB'						=>	'%s اگزابایت',

);
