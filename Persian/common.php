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
'Bad request'						=>	'Bad request. The link you followed is incorrect or outdated.',
'No view'							=>	'You do not have permission to view these forums.',
'No permission'						=>	'You do not have permission to access this page.',
'Bad referrer'						=>	'Bad HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the FluxBB documentation.',
'No cookie'							=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'Announcement',
'Options'							=>	'گزینه ها',
'Submit'							=>	'ارسال', // "Name" of submit buttons
'Ban message'						=>	'You are banned from this forum.',
'Ban message 2'						=>	'The ban expires at the end of',
'Ban message 3'						=>	'The administrator or moderator that banned you left the following message:',
'Ban message 4'						=>	'Please direct any inquiries to the forum administrator at',
'Never'								=>	'Never',
'Today'								=>	'امروز',
'Yesterday'							=>	'دیروز',
'Info'								=>	'اطلاعات', // A common table header
'Go back'							=>	'بازگشت',
'Maintenance'						=>	'Maintenance',
'Redirecting'						=>	'در حال انتقال',
'Click redirect'					=>	'Click here if you do not want to wait any longer (or if your browser does not automatically forward you)',
'on'								=>	'روشن', // As in "BBCode is on"
'off'								=>	'خاموش',
'Invalid email'						=>	'The email address you entered is invalid.',
'Required'							=>	'(الزامی)',
'required field'					=>	'یک فیلد الزامی است.', // For javascript form validation
'Last post'							=>	'آخرین مطلب',
'by'								=>	'توسط', // As in last post by someuser
'New posts'							=>	'مطالب جدید', // The link that leads to the first new post
'New posts info'					=>	'برو به اولین مطلب جدید در مورد این موضوع.', // The popup text for new posts links
'Username'							=>	'نام کاربری',
'Password'							=>	'رمزعبور',
'Email'								=>	'ایمیل',
'Send email'						=>	'ارسال ایمیل',
'Moderated by'						=>	'ویرایش شده توسط',
'Registered'						=>	'ثبت نام شده',
'Subject'							=>	'موضوع',
'Message'							=>	'پیغام',
'Topic'								=>	'مبحث',
'Forum'								=>	'تالار',
'Posts'								=>	'مطالب',
'Replies'							=>	'پاسخ ها',
'Pages'								=>	'صفحات:',
'Page'								=>	'صفحه %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] تگ:',
'img tag'							=>	'[img] تگ:',
'Smilies'							=>	'خندانک ها:',
'and'								=>	'و',
'Image link'						=>	'تصویر', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'نوشته:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'اطلاعات مهم',
'Write message legend'				=>	'پیغام خود را نوشته و ارسال کنید',
'Previous'							=>	'قبلی',
'Next'								=>	'بعدی',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'عنوان',
'Member'							=>	'عضو', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'مدیر',
'Banned'							=>	'ممنوع',
'Guest'								=>	'مهمان',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] was found without a matching [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] was opened within [%2$s], this is not allowed',
'BBCode error invalid self-nesting'	=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'		=>	'[%1$s] was found without a matching [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag had an empty attribute section',
'BBCode error tag not allowed'		=>	'You are not allowed to use [%s] tags',
'BBCode error tag url not allowed'	=>	'You are not allowed to post links',
'BBCode code problem'				=>	'There is a problem with your [code] tags',
'BBCode list size error'			=>	'Your list was too long to parse, please make it smaller!',

// Stuff for the navigator (top of every page)
'Index'								=>	'فهرست',
'User list'							=>	'لیست کاربران',
'Rules'								=>	'قوانین',
'Search'							=>	'جستجو',
'Register'							=>	'ثبت نام',
'Login'								=>	'ورود',
'Not logged in'						=>	'شما هنوز وارد سایت نشده اید(با استفاده از نام کاربری ).',
'Profile'							=>	'پروفایل',
'Logout'							=>	'خروج',
'Logged in as'						=>	'وارد شده به عنوان',
'Admin'								=>	'مدیریت',
'Last visit'						=>	'آخرین بازدید: %s',
'Topic searches'					=>	'مباحث:',
'New posts header'					=>	'جدید',
'Active topics'						=>	'فعال',
'Unanswered topics'					=>	'پاسخ نداده',
'Posted topics'						=>	'ارسال شده',
'Show new posts'					=>	'Find topics with new posts since your last visit.',
'Show active topics'				=>	'Find topics with recent posts.',
'Show unanswered topics'			=>	'Find topics with no replies.',
'Show posted topics'				=>	'Find topics you have posted to.',
'Mark all as read'					=>	'همه موضوعات را به عنوان خوانده شده علامت بزن',
'Mark forum read'					=>	'این تالار را به عنوان خوانده شده علامت بزن',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'پرش به',
'Go'								=>	' برو ', // Submit button in forum jump
'Moderate topic'					=>	'مدیریت مبحث',
'Move topic'						=>	'انتقال مبحث',
'Open topic'						=>	'باز کردن موضوع',
'Close topic'						=>	'بستن مبحث',
'Unstick topic'						=>	'Unstick topic',
'Stick topic'						=>	'Stick topic',
'Moderate forum'					=>	'مدیریت تالار',
'Powered by'						=>	'قدرت یافته از %s',

// Debug information
'Debug table'						=>	'اطلاعات دیباگ',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'استفاده از حافظه: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'زمان (ثانیه)',
'Query'								=>	'Query',
'Total query time'					=>	'کل زمان جستجو: %s',

// For extern.php RSS feed
'RSS description'					=>	'The most recent topics at %s.',
'RSS description topic'				=>	'The most recent posts in %s.',
'RSS reply'							=>	'پاسخ: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'گزارش های جدیدی وجود دارند',
'Maintenance mode enabled'			=>	'Maintenance mode is enabled!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
