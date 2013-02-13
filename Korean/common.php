<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ko',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'잘못된 요청이다. 따라간 링크가 올바르지 않거나 쓸모없어졌다.',
'No view'							=>	'이 포럼을 볼 권한이 없다.',
'No permission'						=>	'이 페이지에 접근할 권한이 없다.',
'Bad referrer'						=>	'잘못된 HTTP_REFERER. 승인되지 않은 소스에서 이 페이지를 참조했다. 문제가 계속된다면 다룸판/선택항 에서 \'기본 URL\'이 올바르게 되어있고 그 URL을 따라서 포럼을 찾아왔는지 확인해라. Referrer 확인에 관한 더 많은 정보는 FluxBB 문서에서 찾을 수 있다.',
'No cookie'							=>	'제대로 로그인을 했지만 \'쿠키\'가 없다. 설정을 확인해보고 적용할 수 있다면 이 포럼을 위한 \'쿠키\'를 가능하게 해라.',
'Pun include error'					=>	'템플릿 %2$s에서 인클루드 %1$s을 처리할 수 없다. 템플릿 자료방이나 인클루드 자료방에 어디에도 그런 파일이 없다.',

// Miscellaneous
'Announcement'						=>	'알림',
'Options'							=>	'선택항',
'Submit'							=>	'제출', // "Name" of submit buttons
'Ban message'						=>	'너는 이 포럼에서 금지당했다.',
'Ban message 2'						=>	'금지는 이 날이 지나야 풀린다 : ',
'Ban message 3'						=>	'너를 금지한 다룸이나 지킴이가 이 쪽지를 남겼다:',
'Ban message 4'						=>	'모든 문의는 포럼 다룸이에게 바로해라.',
'Never'								=>	'없음',
'Today'								=>	'오늘',
'Yesterday'							=>	'어제',
'Info'								=>	'정보', // A common table header
'Go back'							=>	'돌아가기',
'Maintenance'						=>	'점검',
'Redirecting'						=>	'방향바꾸기',
'Click redirect'					=>	'더 기다리기 싫다면 (혹은 브라우저가 자동으로 앞으로 가지않으면) 여기를 눌러라',
'on'								=>	'켜짐', // As in "BBCode is on"
'off'								=>	'꺼짐',
'Invalid email'						=>	'채워넣은  email이 올바르지 않다.',
'Required'							=>	'(필수)',
'required field'					=>	'는 이 포럼에서 필요한 칸이다.', // For javascript form validation
'Last post'							=>	'마지막 글',
'by'								=>	'글쓴이:', // As in last post by someuser
'New posts'							=>	'새로운 글', // The link that leads to the first new post
'New posts info'					=>	'이 글타래의 새 글로 가기.', // The popup text for new posts links
'Username'							=>	'사용자명',
'Password'							=>	'비밀번호',
'Email'								=>	'Email',
'Send email'						=>	'email 보내기',
'Moderated by'						=>	'지킴이:',
'Registered'						=>	'가입날짜',
'Subject'							=>	'주제',
'Message'							=>	'쪽지',
'Topic'								=>	'글타래',
'Forum'								=>	'포럼',
'Posts'								=>	'글',
'Replies'							=>	'댓글',
'Pages'								=>	'쪽:',
'Page'								=>	'%s 쪽',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'                           =>  '[url] 태그:',
'img tag'							=>	'[img] 태그:',
'Smilies'							=>	'Smilies:',
'and'								=>	'와',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'씀:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'중요한 정보',
'Write message legend'				=>	'쪽지를 쓰고 제출해라',
'Previous'							=>	'먼저',
'Next'								=>	'다음',
//'Forum index'						=>	'포럼 처음',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'칭호',
'Member'							=>	'회원', // Default title
'Moderator'							=>	'지킴이',
'Administrator'						=>	'다룸이',
'Banned'							=>	'금지됨',
'Guest'								=>	'손님',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'짝이 되는 [%1$s]이 없는 [/%1$s]을 찾았다',
'BBCode error invalid nesting'		=>	'[%2$s] 안에서 [%1$s이 열렸다. 이 것은 허용되지 않는다',
'BBCode error invalid self-nesting'	=>	'[%s]이 자신 안에서 열렸다. 이 것은 허용되지 않는다',
'BBCode error no closing tag'		=>	'짝이 되는 [/%1$s]이 없는 [%1$s]을 찾았다',
'BBCode error empty attribute'		=>	'[%s] 태그가 빈 속성을 가지고 있다',
'BBCode error tag not allowed'      =>  '[%s] 태그를 쓸 수 없다',
'BBCode error tag url not allowed'  =>  '이음고리를 올릴 수 없다.',
'BBCode code problem'				=>	'[code] 태그에 문제가 있다',
'BBCode list size error'			=>	'목록이 구문분석을 하기에는 너무 길다. 더 짧게 만들어라!',

// Stuff for the navigator (top of every page)
'Index'								=>	'처음',
'User list'							=>	'회원 목록',
'Rules'								=>	'규칙',
'Search'							=>	'찾기',
'Register'							=>	'가입',
'Login'								=>	'로그인',
'Not logged in'						=>	'로그인하지 않았다.',
'Profile'							=>	'프로필',
'Logout'							=>	'로그아웃',
'Logged in as'						=>	'로그인:',
'Admin'								=>	'다룸판',
'Last visit'						=>	'마지막 들른 때: %s',
'Topic searches'					=>	'글타래:',
'New posts header'					=>	'새로운 글',
'Active topics'						=>	'살아있는 글',
'Unanswered topics'					=>	'댓글없는 글',
'Posted topics'						=>	'내가 쓴글',
'Show new posts'					=>	'마지막 들른 뒤로 새글이 있는 글타래를 찾는다.',
'Show active topics'				=>	'최근 글이 있는 글타래를 찾는다.',
'Show unanswered topics'			=>	'댓글이 없는 글타래를 찾는다.',
'Show posted topics'				=>	'네가 올린 글타래를 찾는다.',
'Mark all as read'					=>	'모든 글타래를 읽은 것으로 표시한다.',
'Mark forum read'					=>	'이 포럼을 읽은 것으로 표시한다.',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'게시판 다리',
'Jump to'							=>	'바로가기',
'Go'								=>	'가기 ', // Submit button in forum jump
'Moderate topic'					=>	'글타래 다루기',
'Move topic'						=>	'글타래 옮기기',
'Open topic'						=>	'글타래 열기',
'Close topic'						=>	'글타래 닫기',
'Unstick topic'						=>	'글타래 떼어내기',
'Stick topic'						=>	'글타래 붙여두기',
'Moderate forum'					=>	'포럼 다루기',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'벌레잡기 정보',
'Querytime'							=>	'%2$s queries를 실행해서 %1$s 초가 걸렸다',
'Memory usage'						=>	'메모리 사용량: %1$s',
'Peak usage'						=>	'(최고: %1$s)',
'Query times'						=>	'시간',
'Query'								=>	'Query',
'Total query time'					=>	'전체 query 시간: %s',

// Email related notifications
//'New user notification'				=>	'주의 - 새로운 가입자',
//'New user message'					=>	'회원 \'%s\'이 %s에 포럼에 가입했다',
//'Banned email notification'			=>	'주의 - 금지된 email을 찾아냈다',
//'Banned email register message'		=>	'회원 \'%s\'이 금지된 email로 가입했다: %s',
//'Banned email change message'		=>	'회원 \'%s\'이 금지된 email로 바꾸었다: %s',
//'Banned email post message'			=>	'회원 \'%s\'이 금지된 email로 글을 올렸다: %s',
//'Duplicate email notification'		=>	'주의 - 겹치는 email를 찾아냈다',
//'Duplicate email register message'	=>	'회원 \'%s\'이 다른 회원이 가진 email로 가입했다: %s',
//'Duplicate email change message'	=>	'회원 \'%s\'이 다른 회원이 가진 email로 바꾸었다: %s',
//'Report notification'				=>	'신고(%d) - \'%s\'',
//'Report message 1'					=>	'회원 \'%s\'이 다음 쪽지를 신고했다: %s',
//'Report message 2'					=>	'이유: %s',
//
//'User profile'						=>	'회원 프로필: %s',
//'Post URL'							=>	'올린 글 URL: %s',
//'Email signature'					=>	'포럼 Mailer'."\n".'(이 쪽지에 회답하지 마라)',

// For extern.php RSS feed
'RSS description'					=>	'%s의 가장 최근 글타래.',
'RSS description topic'				=>	'%s의 자장 최근 글.',
'RSS reply'							=>	'답: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'새로운 신고가 있다',
'Maintenance mode enabled'			=>	'점검 모드가 켜졌다!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
