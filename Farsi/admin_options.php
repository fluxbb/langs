<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'HTTP_REFERER اشتباه . اگر شما انجمن خود را از یک محل به محل دیگری منتقل کرده و یا اینکه دامنه های خود را تغییر داده اید ، شما باید آدرس پایه را بصورت دستی در پایگاه داده بروزرسانی کنید ( به دنبال o_base_url در جدول پیکربندی بگردید ) و سپس کش را با حذف تمام فایلهای php.  در شاخه /cache خالی کنید..',
'Must enter title message'			=>	'شما باید نام انجمن را وارد کنید.',
'Invalid e-mail message'			=>	'آدرس ایمیل مدیری که وارد کرده اید معتبر نمیباشد.',
'Invalid webmaster e-mail message'	=>	'آدرس ایمیل پشتيبان سايت که وارد کرده اید معتبر نمیباشد.',
'SMTP passwords did not match'		=>	'برای تغییرش باید پسورد SMTP را دوباره مشابه هم وارد کنید.',
'Enter announcement here'			=>	'اطلاعیه خود را اینجا بنویسید.',
'Enter rules here'					=>	'قوانین خود را اینجا بنویسید.',
'Default maintenance message'		=>	'انجمن موقتا ً جهت تعمیر و نگهداری تعطیل میباشد . لطفا ً دوباره چند دقیقه دیگر تلاش کنید.',
'Timeout error message'				=>	'مقدار " انقضای زمان آنلاین بودن " باید کمتر از مقدار " انقضای زمان بازدید " باشد.',
'Options updated redirect'			=>	'گزینه ها بروزرسانی شدند . در حال تغییر مسیر ...',
'Options head'						=>	'گزینه ها',

// Essentials section
'Essentials subhead'				=>	'ملزومات',
'Board title label'					=>	'عنوان انجمن',
'Board title help'					=>	'عنوان این تالار گفتگو ( در بالای تمام صفحات نمایش داده میشود ). این کادر <STRONG> نمیتواند</STRONG> حاوی HTML باشد.',
'Board desc label'					=>	'توضیحات انجمن',
'Board desc help'					=>	'توضیحات کوتاهی درباره تالار گفتگو ( در بالای تمام صفحات نمایش داده میشود ). این کادر میتواند حاوی HTML باشد.',
'Base URL label'					=>	'آدرس پایه',
'Base URL help'						=>	'آدرس کامل انجمن بدون اسلش در انتها ( به عنوان مثال : http://www.mydomain.com/forums ). به منظور اینکه تمام ویژگی های مدیرکل و مدیرانجمن بدرستی کار کند این <STRONG> باید </STRONG> درست باشد . اگر با خطای "Bad referrer" روبرو شدید احتمالا این گزینه نادرست است.',
'Base URL problem'       			=>  'نصب و راه اندازی شما تبدیل نام های دامنه بین المللی را بصورت خودکار پشتیبانی نمیکند . چنانچه آدرس پایه شما شامل کاراکترهای خاصی است ، شما <strong> باید </strong> برای اجتناب از روبرو شدن با خطای "Bad referrer" از تبدیل کننده های آنلاین استفاده کنید.',
'Timezone label'					=>	'منطقه زمانی پیش فرض',
'Timezone help'						=>	'منطقه زمانی پیش فرض برای کاربران مهمان و کاربرانی که قصد ثبت نام در انجمن را دارند.',
'DST label'							=>	'تنظیم ساعت تابستانی',
'DST help'							=>	'اگر ساعت تابستانی تاثیرگذار است تیک زده شود ( پیشرفت زمان 1 ساعت ).',
'Language label'					=>	'زبان پیش فرض',
'Language help'						=>	'زبان پیش فرض برای کاربران مهمان و کاربرانی که تنظیمات زبان را از پروفایلشان تغییر نداده اند . اگر یک بسته زبان را حذف کنید ، این گزینه باید بروزرسانی شود.',
'Default style label'				=>	'قالب پیش فرض',
'Default style help'				=>	'قالب پیش فرض برای کاربران مهمان و کاربرانی که تنظیمات قالب را در پروفایلشان تغییر نداده اند.',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

// Timeout Section
'Timeouts subhead'					=>	'زمان و زمان انقضاء (وقفه ها)',
'Time format label'					=>	'فرمت زمان',
'PHP manual'						=>	'راهنمای PHP',
'Time format help'					=>	'[فرمت جاری: %s]. برای گزینه های فرمت بندی %s را ببینید.',
'Date format label'					=>	'فرمت تاریخ',
'Date format help'					=>	'[فرمت جاری: %s]. برای گزینه های فرمت بندی %s را ببینید.',
'Visit timeout label'				=>	'زمان انقضای بازدید',
'Visit timeout help'				=>	'مدت زمان به ثانیه که یک کاربر باید در انقضاي زمان باشد تا اطلاعات بازدیدش بروزرسانی شود ( در درجه اول بر روی شاخص های پیام جدید تاثیر میگذارد ).',
'Online timeout label'				=>	'زمان انقضای آنلاین',
'Online timeout help'				=>	'مدت زمان به ثانيه كه يك كاربر بايد در انقضاي زمان باشد تا از ليست كاربران آنلاين حذف شود.',
'Redirect time label'				=>	'زمان تغییر مسیر',
'Redirect time help'				=>	'مدت زمان به ثانيه براي تغيير مسير . اگر بر روي 0 تنظيم شود ، هيچ صفحع تغيير مسير نمايش داده نميشود ( توصيه نميشود ).',

// Display Section
'Display subhead'					=>	'نمايش',
'Version number label'				=>	'شماره نسخه',
'Version number help'				=>	'نمايش شماره نسخه FluxBB در پاورقي.',
'Info in posts label'				=>	'اطلاعات كاربر در ارسال ها',
'Info in posts help'				=>	'نمايش اطلاعات درباره ارسال كننده زير نام كاربري در نماي موضوع . اطلاعات تحت تاثير محل ، تاریخ عضویت ، تعداد ارسال و لينك هاي تماس ( ايميل و آدرس سايت )‌ ميباشد.',
'Post count label'					=>	'شمارش ارسال كاربر',
'Post count help'					=>	'نمايش تعداد ارسال هاي يك كاربر ( تحت تاثير نماي موضوع ، پروفايل و ليست كاربران ) ميباشد.',
'Smilies label'						=>	'خندانك ها در ارسال ها',
'Smilies help'						=>	'تبديل خندانك ها به آيكون هاي گرافيكي كوچك.',
'Smilies sigs label'				=>	'خندانك ها در امضاء',
'Smilies sigs help'					=>	'تبديل خندانك ها به آيكون هاي گرافيكي كوچك در امضاء كاربر.',
'Clickable links label'				=>	'ساختن لينك هاي قابل كليك كردن',
'Clickable links help'				=>	'وقتي اين گزينه فعال باشد ، FluxBB بصورت خودكار آدرس ها را در ارسال ها بصورت خودكار شناسائي كرده و آنها را به لينك هاي قابل كليك كردن تبديل ميكند.',
'Topic review label'				=>	'مرور موضوع',
'Topic review help'					=>	'حداكثر تعداد ارسال ها براي نمايش هنگام ارسال ( جديدترين در ابتدا ) . براي غيرفعال كردن به 0 تنظيم كنيد.',
'Topics per page label'				=>	'موضوع در هر صفحه',
'Topics per page help'				=>	'تعداد موضوع هاي پيش فرض براي نمايش در هرصفحه در انجمن . كاربران ميتوانند اين تنظيمات را شخصي سازي كنند.',
'Posts per page label'				=>	'ارسال در هر صفحه',
'Posts per page help'				=>	'تعداد ارسال هاي پيش فرض براي نمايش در هر صفحه در يك موضوع . كاربران ميتوانند اين تنظيمات را شخصي سازي كنند.',
'Indent label'						=>	'اندازه تورفتگي',
'Indent help'						=>	'اگر بر روي 8 تنظيم شود ، هنگام نمايش متن درون تگ [code][/code] يك زبانه معمولي استفاده خواهد شد. در غير اينصورت اين فضاهاي زياد براي تورفتگي متن استفاده خواهد شد.',
'Quote depth label'					=>	'حداكثر عمق [quote]',
'Quote depth help'					=>	'حداكثر دفعاتي كه تگ [quote] ميتواند درون ديگر تگ هاي [quote] قرار بگيرد ، هر تگ هاي عميق تر از اين ناديده گرفته خواهد شد.',

// Features section
'Features subhead'					=>	'ويژگي ها',
'Quick post label'					=>	'پاسخ سريع',
'Quick post help'					=>	'وقتي اين گزينه فعال باشد ، FluxBB يك فرم پاسخ سريع را در پايين موضوع ها اضافه ميكند . به اين روش كاربران ميتوانند مستقيما ً از نماي موضوع پاسخ ارسال كنند.',
'Users online label'				=>	'كاربران آنلاين',
'Users online help'					=>	'نمايش اطلاعات در صفحه اصلي درباره كاربران مهمان و كاربران عضوي كه در حال مرور صفحه ميباشند.',
'Censor words label'				=>	'سانسور كلمات',
'Censor words help'					=>	'فعال كردن اين گزينه براي سانسور كلمات خاص در انجمن . براي اطلاعات بيشتر %sرا ببينيد.',
'Signatures label'					=>	'امضاء',
'Signatures help'					=>	'به كاربران اين اجازه را ميدهد تا يك امضاء به ارسال هاي خود پيوست كنند.',
'User has posted label'				=>	'كاربر پيش تر ارسال داشته',
'User has posted help'				=>	'اين ويژگي درصورتي كه كاربر وارد شده به انجمن قبلا ً در يك موضوعي ارسال داشته است يك نقطه در ابتداي آن موضوع ها در viewforum.php نمايش ميدهد . اگر با بارگذاري بالاي سرور روبرو شديد اين گزينه را غيرفعال كنيد.',
'Topic views label'					=>	'بازديد موضوع',
'Topic views help'					=>	'نگه داشتن آمار تعداد بازديد يك موضوع . در انجمن هاي شلوغ اگر با بارگذاري بالاي سرور روبرو شديد اين گزينه را غيرفعال كنيد.',
'Quick jump label'					=>	'پرش سريع',
'Quick jump help'					=>	'فعال سازي پرش سريع ( پرش به انجمن ) ليست قرقره اي.',
'GZip label'						=>	'خروجي GZip',
'GZip help'							=>	'اگر اين گزينه فعال باشد ، FluxBB خروجي را براي مرورگرها بصورت gzip ارسال ميكند . اين عمل باعث كاهش مصرف پهناي باند ميشود ، ولي مقدار بيشتر از CPU استفاده ميكند . اين ويژگي مستلزم آن است كه PHP با zlib (--with-zlib) پيكربندي شده باشد . توجه : اگر شما هم اكنون يكي از ماژول هاي mod_gzip يا mod_deflate آپاچي را براي فشرده سازي اسكريپت PHP راه اندازي كرده ايد ، بايد اين ويژگي را غيرفعال كنيد.',
'Search all label'					=>	'جستجوي تمام انجمن ها',
'Search all help'					=>	'وقتي اين گزينه غيرفعال باشد ، در هر زمان فقط اجازه جستجو در يك انجمن را داريد . اگر بارگذاري سرور بنا بر جستجوهاي بيش از اندازه بالا رفت اين گزينه را غيرفعال كنيد.',
'Menu items label'					=>	'آيتم هاي اضافي منو',
'Menu items help'					=>	'با وارد کردن لینک HTML درون این جعبه متنی ، هر تعداد آیتم میتوان به منوی اصلی بالای صفحات اضافه کرد . فرمت اضافه کردن لینک جدید به این قرار است : X = <a href="URL">LINK</a> ، که X موقعیتی است که لینک باید در آن قرار گیرد ( مثلا : 0 برای درج لینک در اول "قبل از فهرست" و 2 درج لینک بعد از "لیست کاربران" ). برای جداکردن ورودی ها از "شکننده خط" استفاده کنید . ( شکننده خط br درون <> میباشد )..',

// Feeds section
'Feed subhead'						=>	'لينك بازخورد',
'Default feed label'				=>	'نوع بازخورد پيش فرض',
'Default feed help'					=>	'انتخاب نوع لينك بازخورد براي نمايش . توجه : انتخاب هيچكدام بازخورد را غيرفعال نخواهد كرد ، فقط آن ها را بصورت پيش فرض پنهان ميكند.',
'None'								=>	'هيچكدام',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'مدت زمان كش شدن بازخورد',
'Feed TTL help'						=>	'بازخورد ها ميتوانند براي استفاده كمتر از منبع بازخوردها كش شوند.',
'No cache'							=>	'كش نشود',
'Minutes'							=>	'%d دقيقه',

// Reports section
'Reports subhead'					=>	'گزارشات',
'Reporting method label'			=>	'شيوه گزارش دهي',
'Internal'							=>	'داخلي',
'By e-mail'							=>	'ايميل',
'Both'								=>	'هر دو',
'Reporting method help'				=>	'انتخاب شيوه بكاربردن گزارش دهي موضوع / ارسال . شما ميتوانيد چگونگي بكارگيري گزارش دهي موضوع / را توسط سيستم گزارش دهي داخلي ، ارسال ايميل به آدرس هاي ليست ايميل ( در زير ببينيد ) و يا هر دو را انتخاب كنيد.',
'Mailing list label'				=>	'ليست ايميل',
'Mailing list help'					=>	'يك كاما ليست مشتركين را از هم جدا ميكند . افراد اين ليست دريافت كنندگان گزارش ها هستند.',

// Avatars section
'Avatars subhead'					=>	'آواتار',
'Use avatars label'					=>	'استفاده از آواتار',
'Use avatars help'					=>	'وقتي اين گزينه فعال باشد ، كاربران قادر خواهند بود يك آواتار كه در زير عنوان آنها نمايش داده ميشود را آپلود كنند.',
'Upload directory label'			=>	'شاخه آپلود',
'Upload directory help'				=>	'پوشه آپلود براي آواتار ها ( وابسته به پوشه ريشه FluxBB ) . PHP بايد مجوز نوشتن به اين پوشه را داشته باشد.',
'Max width label'					=>	'حداكثر عرض',
'Max width help'					=>	'حداكثر عرض مجاز آواتار به پيكسل ( 60 پيكسل پيشنهاد ميشود ).',
'Max height label'					=>	'حداكثر ارتفاع',
'Max height help'					=>	'حداكثر ارتفاع مجاز آواتار به پيكسل ( 60 پيكسل پيشنهاد ميشود ).',
'Max size label'					=>	'حداكثر حجم',
'Max size help'						=>	'حداكثر حجم مجاز آواتار به بايت (10240  بايت پيشنهاد ميشود ).',

// E-mail section
'E-mail subhead'					=>	'ايميل',
'Admin e-mail label'				=>	'ايميل مدير',
'Admin e-mail help'					=>	'آدرس ايميل مدير انجمن.',
'Webmaster e-mail label'			=>	'ايميل پشتيبان سايت',
'Webmaster e-mail help'				=>	'اين آدرسي است كه همه ايميل هاي ارسال شده توسط انجمن از طرف آن خطاب خواهند شد.',
'Forum subscriptions label'			=>	'اشتراك هاي انجمن',
'Forum subscriptions help'			=>	'فعال سازي ويژگي اشتراك كاربران به انجمن ها ( هنگامي كه شخصي يك موضوع جديد ايجاد كند ايميلي دريافت ميشود ).',
'Topic subscriptions label'			=>	'اشتراك هاي موضوع',
'Topic subscriptions help'			=>	'فعال سازي ويژگي اشتراك كاربران به موضوع ها ( هنگامي كه شخصي به موضوع پاسخ دهد ايميلي دريافت ميشود ).',
'SMTP address label'				=>	'آدرس سرور SMTP',
'SMTP address help'					=>	'آدرس يك سرور SMTP خارجي براي ارسال ايميل با آن . شما ميتوانيد يك شماره پورت دلخواه را مشخص كنيد درصورتي كه پورت پيش فرض 25 اجرا نشود ( براي مثال : mail.myhost.com:3580 ) براي استفاده از برنامه ايميل محلي خالي بگذاريد.',
'SMTP username label'				=>	'نام كاربري SMTP',
'SMTP username help'				=>	'نام كاربري براي سرور SMTP . درصورت نياز سرور SMTP فقط نام كاربري را وارد كنيد ( بيشتر سرورها احتياجي به اهراز هويت <STRONG> ندارند</STRONG>). ',
'SMTP password label'				=>	'پسورد SMTP',
'SMTP change password help'			=>	'اگر ميخواهيد پسورد ذخيره شده جاري را حذف و يا تغيير دهيد اين گزينه را تيك بزنيد',
'SMTP password help'				=>	'پسورد براي سرور SMTP . درصورت نياز سرور SMTP فقط پسورد را وارد كنيد ( بيشتر سرورها احتياجي به اهراز هويت <STRONG> ندارند</STRONG>). براي تائيد لطفا ً دوبار پسورد خود را وارد كنيد',
'SMTP SSL label'					=>	'رمزگذاري SMTP با استفاده از SSL',
'SMTP SSL help'						=>	'رمزگذاري اتصال به سرور SMTP با استفاده از SSL . فقط درصورتي كه سرور SMTP شما نيازمند آن باشد و نسخه PHP شما SSL را پشتيباني كند از آن استفاده شود.',

// Registration Section
'Registration subhead'				=>	'ثبت نام',
'Allow new label'					=>	'اجازه ثبت نام جديد',
'Allow new help'					=>	'كنترل چگونگي ثبت نام هاي جديد اين انجمن . فقط شرايط خاص غيرفعال شود.',
'Verify label'						=>	'تائيد ثبت نام',
'Verify help'						=>	'هنگامي كه اين گزينه فعال باشد ، كاربران هنگامي كه ثبت نام ميكنند توسط ايميل يك پسورد تصادفي دريافت ميكنند . آنها ميتوانند پس از ورود از پروفايلشان پسورد را تغيير دهند . اين ويژگي همچنين نيازمند تائيد آدرس هاي ايميل توسط كاربران هنگامي كه ميخواهند آدرس ايميل را كه با آن ثبت نام كرده اند را تغيير دهند ، ميباشد . اين يك روش تاثير گذار براي اجتناب از سوء استفاده در ثبت نام و مطمئن شدن از آن است كه تمام كاربران آدرس ايميل " صحيحي " در پروفايلشان دارند .',
'Report new label'					=>	'گزارش ثبت نام هاي جديد',
'Report new help'					=>	'اگر اين گزينه فعال باشد ، FluxBB هنگامي كه كاربر جديدي در انجمن ثبت نام كند به ليست ايميل ( بالا را ببينيد ) اطلاع رساني ميكند.',
'Use rules label'					=>	'قوانين كاربري انجمن',
'Use rules help'					=>	'هنگامي كه اين گزينه فعال باشد ، كاربران هنگام ثبت نام بايد به قوانيني كه تعيين شده ( متني در پايين وارد كنيد )‌ موافقت كنند . قوانين هميشه از طريق يك لينك در جدول ناوبري در بالاي همه صفحات دردسترس خواهد بود.',
'Rules label'						=>	'قوانين خود را اينجا بنويسيد',
'Rules help'						=>	'در اينجا ميتوانيد هرگونه قوانين يا ديگر اطلاعاتي را كه كاربر هنگام ثبت نام بايد آن را بازبيني و قبول كند ، را وارد كنيد . اگر شما قوانين بالا را فعال كنيد بايد چيزي را وارد كنيد ، درغير اينصورت غيرفعال خواهد شد . اين متن مثل ارسال هاي معمولي تحليل نميشوند بنابراين ميتواند شامل HTML باشد.',
'E-mail default label'				=>	'تنظيمات پيش فرض ايميل',
'E-mail default help'				=>	'تنظيمات حريم خصوصي براي ثبت نام هاي كاربر جديد را انتخاب كنيد.',
'Display e-mail label'				=>	'آدرس ايميل به ديگر كاربران نمايش داده شود.',
'Hide allow form label'				=>	'آدرس ايميل پنهان ولي فرم ايميل مجاز باشد.',
'Hide both label'					=>	'آدرس ايميل پنهان و فرم ايميل غير مجاز باشد.',

// Announcement Section
'Announcement subhead'				=>	'اطلاعيه ها',
'Display announcement label'		=>	'نمايش اطلاعيه',
'Display announcement help'			=>	'براي نمايش پيام زير در انجمن اين گزينه را فعال كنيد.',
'Announcement message label'		=>	'پيام اطلاعيه',
'Announcement message help'			=>	'اين متن مثل ارسال هاي معمولي تحليل نميشوند بنابراين ميتواند شامل HTML باشد.',

// Maintenance Section
'Maintenance subhead'				=>	'تعمير و نگهداري',
'Maintenance mode label'			=>	'حالت تعمير و نگهداري',
'Maintenance mode help'				=>	'هنگامي كه اين گزينه فعال باشد ، انجمن فقط براي مديران اصلي دردسترس خواهد بود . اين ويژگي براي تعطيلي موقت جهت تعمير و نگهداري بايد مورد استفاده قرار بگيرد . <STRONG> هشدار ! هنگامي كه انجمن در حالت تعمير و نگهداري است از انجمن خارج نشويد.</STRONG> ديگر قادر به ورود دوباره به انجمن نخواهيد بود.',
'Maintenance message label'			=>	'پيام تعمير و نگهداري',
'Maintenance message help'			=>	'پيامي كه به كاربراني كه هنگام انجمن در حالت تعمير و نگهداري ميباشد به نمايش درخواهد آمد . اگر خالي بگذاريد ، يك پيام پيش فرض به نمايش داده ميشود . اين متن مثل ارسال هاي معمولي تحليل نميشوند بنابراين ميتواند شامل HTML باشد.',

);
