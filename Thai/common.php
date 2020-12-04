<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'th',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'การร้องขอไม่ถูกต้อง ลิงก์ที่คุณติดตามไม่ถูกต้องหรือล้าสมัย',
'No view'							=>	'คุณไม่มีสิทธิ์ดูฟอรั่มเหล่านี้',
'No permission'						=>	'คุณไม่มีสิทธิ์ในการเข้าถึงเพจนี้',
'Bad referrer'						=>	'HTTP_REFERER ไม่ถูกต้อง คุณถูกอ้างถึงเพจนี้จากแหล่งที่ไม่ได้รับอนุญาต หากปัญหายังคงมีอยู่โปรดตรวจสอบให้แน่ใจว่า \'URL พื้นฐาน\' ได้รับการตั้งค่าอย่างถูกต้องในผู้ดูแลระบบ / ตัวเลือกและคุณกําลังเยี่ยมชมฟอรัมโดยการนําทางไปยัง URL นั้น ข้อมูลเพิ่มเติมเกี่ยวกับการตรวจสอบผู้อ้างอิงสามารถดูได้ในเอกสาร FluxBB',
'Bad csrf hash'						=>	'แฮช CSRF ไม่ถูกต้อง คุณถูกอ้างถึงเพจนี้จากแหล่งที่ไม่ได้รับอนุญาต',
'No cookie'							=>	'คุณดูเหมือนจะเข้าสู่ระบบได้สําเร็จ แต่ยังไม่ได้ตั้งค่าคุกกี้ โปรดตรวจสอบการตั้งค่าของคุณและหากมีให้เปิดใช้งานคุกกี้สําหรับเว็บไซต์นี้',
'Pun include extension'  			=>	'ไม่สามารถประมวลผลแฟ้ม %s จากแม่แบบ %s ได้ แฟ้ม "%s" ไม่ได้รับอนุญาต',
'Pun include directory'				=>	'ไม่สามารถประมวลผลผู้ใช้มี %s จากแม่แบบ %s ไม่อนุญาตให้ใช้การข้ามไดเรกทอรี',
'Pun include error'					=>	'ไม่สามารถประมวลผลผู้ใช้มี %s จากแม่แบบ %s ไม่มีไฟล์ดังกล่าวในไดเรกทอรีเท็มเพลตหรือในไดเรกทอรีของผู้ใช้',

// Miscellaneous
'Announcement'						=>	'ประกาศ',
'Options'							=>	'ตัวเลือก',
'Submit'							=>	'ส่ง', // "Name" of submit buttons
'Ban message'						=>	'คุณถูกแบนจากฟอรั่มนี้',
'Ban message 2'						=>	'การแบนจะหมดอายุเมื่อสิ้นสุด',
'Ban message 3'						=>	'ผู้ดูแลระบบหรือผู้ควบคุมที่ห้ามคุณฝากข้อความต่อไปนี้:',
'Ban message 4'						=>	'โปรดสอบถามข้อมูลใด ๆ กับผู้ดูแลระบบฟอรัมที่',
'Never'								=>	'ไม่',
'Today'								=>	'วันนี้',
'Yesterday'							=>	'เมื่อวานนี้',
'Info'								=>	'ข้อมูล', // A common table header
'Go back'							=>	'ย้อนกลับ',
'Maintenance'						=>	'บำรุง รักษา',
'Redirecting'						=>	'การเปลี่ยนเส้นทาง',
'Click redirect'					=>	'คลิกที่นี่ถ้าคุณไม่ต้องการรออีกต่อไป (หรือถ้าเบราว์เซอร์ของคุณไม่ส่งต่อคุณโดยอัตโนมัติ)',
'on'								=>	'เปิด', // As in "BBCode is on"
'off'								=>	'ปิด',
'Invalid email'						=>	'ที่อยู่อีเมลที่คุณใส่ไม่ถูกต้อง',
'Required'							=>	'(จําเป็น)',
'required field'					=>	'เป็นเขตข้อมูลที่ต้องการในฟอร์มนี้', // For javascript form validation
'Last post'							=>	'โพสต์ล่าสุด',
'by'								=>	'โดย', // As in last post by some user
'New posts'							=>	'โพสต์ใหม่', // The link that leads to the first new post
'New posts info'					=>	'ไปที่โพสต์ใหม่แรกในหัวข้อนี้', // The popup text for new posts links
'Username'							=>	'ชื่อ',
'Password'							=>	'รหัส ผ่าน',
'Email'								=>	'อีเมล',
'Send email'						=>	'ส่งอีเมล',
'Moderated by'						=>	'ควบคุมโดย',
'Registered'						=>	'ลง ทะเบียน',
'Subject'							=>	'ชื่อเรื่อง',
'Message'							=>	'ข้อความ',
'Topic'								=>	'หัว ข้อ',
'Forum'								=>	'ฟอรั่ม',
'Posts'								=>	'โพสต์',
'Replies'							=>	'ตอบกลับ',
'Pages'								=>	'หน้า:',
'Page'								=>	'หน้า %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'แท็ก [url]:',
'img tag'							=>	'แท็ก [img]:',
'Smilies'							=>	'Smilies:',
'and'								=>	'และ',
'Image link'						=>	'ภาพ', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'จาก:', // For [quote]'s
'Mailer'							=>	'%s จดหมาย', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'ข้อมูลสําคัญ',
'Write message legend'				=>	'เขียนข้อความของคุณและส่ง',
'Previous'							=>	'ก่อนหน้า',
'Next'								=>	'ถัด ไป',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'ชื่อ เรื่อง',
'Member'							=>	'สมาชิก', // Default title
'Moderator'							=>	'ผู้ควบคุม',
'Administrator'						=>	'ผู้ดูแลระบบ',
'Banned'							=>	'แบน',
'Guest'								=>	'แขก',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'พบ [/%1$s] โดยไม่มีการจับคู่ [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] ถูกเปิดภายใน [%2$s] ซึ่งไม่ได้รับอนุญาต',
'BBCode error invalid self-nesting'	=>	'[%s] ถูกเปิดภายในตัวมันเอง',
'BBCode error no closing tag'		=>	'พบ [%1$s] โดยไม่มีการจับคู่ [/%1$s] ที่ตรงกัน',
'BBCode error empty attribute'		=>	'แท็ก [%s] มีส่วนแอตทริบิวต์ว่าง',
'BBCode error tag not allowed'		=>	'คุณไม่ได้รับอนุญาตให้ใช้แท็ก [%s]',
'BBCode error tag url not allowed'	=>	'คุณไม่ได้รับอนุญาตให้โพสต์บัญชีลิงค์',
'BBCode list size error'			=>	'รายการของคุณยาวเกินไปที่จะแยกวิเคราะห์โปรดทําให้มันเล็กลง!',

// Stuff for the navigator (top of every page)
'Index'								=>	'ดัชนี',
'User list'							=>	'รายชื่อผู้ใช้',
'Rules'								=>	'กฎ',
'Search'							=>	'ค้น หา',
'Register'							=>	'ลง ทะเบียน',
'Login'								=>	'เข้า สู่ ระบบ',
'Not logged in'						=>	'คุณยังไม่ได้เข้าสู่ระบบ',
'Profile'							=>	'โปรไฟล์',
'Logout'							=>	'ออกจากระบบ',
'Logged in as'						=>	'เข้าสู่ระบบเป็น',
'Admin'								=>	'ควบคุม',
'Last visit'						=>	'การเยี่ยมชมครั้งล่าสุด: %s',
'Topic searches'					=>	'หัว ข้อ:',
'New posts header'					=>	'ใหม่',
'Active topics'						=>	'ใช้งานอยู่',
'Unanswered topics'					=>	'ยังไม่ได้ตอบ',
'Posted topics'						=>	'โพสต์แล้ว',
'Show new posts'					=>	'ค้นหาหัวข้อที่มีโพสต์ใหม่ตั้งแต่การเยี่ยมชมครั้งล่าสุด',
'Show active topics'				=>	'ค้นหาหัวข้อที่มีโพสต์ล่าสุด',
'Show unanswered topics'			=>	'ค้นหาหัวข้อที่ไม่มีการตอบกลับ',
'Show posted topics'				=>	'ค้นหาหัวข้อที่คุณโพสต์',
'Mark all as read'					=>	'ทําเครื่องหมายหัวข้อทั้งหมดว่าอ่านแล้ว',
'Mark forum read'					=>	'ทําเครื่องหมายฟอรั่มนี้ว่าอ่านแล้ว',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'ส่วนท้ายของบอร์ด',
'Jump to'							=>	'ข้ามไปที่',
'Go'								=>	' ไป ', // Submit button in forum jump
'Moderate topic'					=>	'หัวข้อถกควบคุม',
'All'					=>	'ทั้ง หมด',
'Move topic'						=>	'ย้ายหัวข้อ',
'Open topic'						=>	'เปิดหัวข้อ',
'Close topic'						=>	'ปิดหัวข้อ',
'Unstick topic'						=>	'หัวข้อที่ไม่ติด',
'Stick topic'						=>	'หัวข้อที่ติด',
'Moderate forum'					=>	'ฟอรั่มถูกควบคุม',
'Powered by'						=>	'ขับเคลื่อนโดย %s',

// Debug information
'Debug table'						=>	'ข้อมูลการตรวจแก้จุดบกพร่อง',
'Querytime'							=>	'สร้างขึ้นใน %1$s วินาที, ดําเนินการการสอบถาม %2$s',
'Memory usage'						=>	'การใช้หน่วยความจํา: %1$s',
'Peak usage'						=>	'(จุดสูงสุด: %1$s)',
'Query times'						=>	'เวลา (s)',
'Query'								=>	'แบบ สอบ ถาม',
'Total query time'					=>	'เวลาการสอบถามทั้งหมด: %s',

// For extern.php RSS feed
'RSS description'					=>	'หัวข้อล่าสุดที่ %s',
'RSS description topic'				=>	'โพสต์ล่าสุดใน %s',
'RSS reply'							=>	'จาก: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'ตัวดึงข้อมูลหัวข้อที่ใช้งานอยู่ของ RSS',
'Atom active topics feed'			=>	'ตัวดึงข้อมูลหัวข้อที่ใช้งานอยู่ของอะตอม',
'RSS forum feed'					=>	'ฟีดฟอรั่ม RSS',
'Atom forum feed'					=>	'ฟีดฟอรั่มอะตอม',
'RSS topic feed'					=>	'ตัวดึงข้อมูลหัวข้อ RSS',
'Atom topic feed'					=>	'ตัวดึงข้อมูลหัวข้ออะตอม',

// Admin related stuff in the header
'New reports'						=>	'มีรายงานใหม่',
'Maintenance mode enabled'			=>	'เปิดใช้งานโหมดการบํารุงรักษา!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
