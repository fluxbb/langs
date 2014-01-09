<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'                                       =>      'zh-Hans',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'错误请求。您所打开的链接不存在或已失效。',
'No view'							=>	'您没有权限查看这些论坛。',
'No permission'						=>	'您没有权限访问该页面。',
'Bad referrer'						=>	'HTTP_REFERER 错误。您从一个未经授权的地址接入本页。如果该问题再次发生，请检查设置 管理设置/配置选项 中的 \'根目录网址\' 填写是否正确，并确认您访问论坛的链接正是指向该网址。要获得关于此问题的更多信息请访问FluxBB官方论坛。',
'No cookie'							=>	'您似乎已经登录成功，但是cookie未能正确设置。请检查您的相关设置，如果该功能可用，请对本站启用cookies。',
'Pun include extension'  			=>	'无法用户在模版引用 %s 到模板 %s 。"%s"文件是不允许的。',
'Pun include directory'				=>	'无法用户在模版引用 %s 到模板 %s 。目录遍历是不允许的',
'Pun include error'					=>	'无法用户在模版引用 %s 到模板 %s 。在template目录和用户引用目录均无法找到该文件。',


// Miscellaneous
'Announcement'						=>	'公告',
'Options'							=>	'选项',
'Submit'							=>	'提交', // "Name" of submit buttons
'Ban message'						=>	'您的账号已被论坛封禁。',
'Ban message 2'						=>	'该封禁会持续至',
'Ban message 3'						=>	'以下是论坛管理人员给您的封禁通知：',
'Ban message 4'						=>	'任何疑问，请直接联系论坛管理员',
'Never'								=>	'从未',
'Today'								=>	'今天',
'Yesterday'							=>	'昨天',
'Info'								=>	'信息', // A common table header
'Go back'							=>	'返回',
'Maintenance'						=>	'维护',
'Redirecting'						=>	'正在跳转',
'Click redirect'					=>	'如果您不想继续等待(或者您的浏览器不支持自动跳转)，请点击这里',
'on'								=>	'可用', // As in "BBCode is on"
'off'								=>	'禁用',
'Invalid email'						=>	'您填写的电子信箱无效。',
'Required'							=>	'(必需)',
'required field'					=>	'不能为空。', // For javascript form validation
'Last post'							=>	'最后发表',
'by'								=>	'by', // As in last post by some user
'New posts'							=>	'查看更新', // The link that leads to the first new post
'New posts info'					=>	'查看该主题中新增的帖子。', // The popup text for new posts links
'Username'							=>	'用户名',
'Password'							=>	'密码',
'Email'								=>	'电子信箱',
'Send email'						=>	'发送邮件',
'Moderated by'						=>	'版主：',
'Registered'						=>	'注册时间',
'Subject'							=>	'标题',
'Message'							=>	'内容',
'Topic'								=>	'主题',
'Forum'								=>	'论坛',
'Posts'								=>	'帖子',
'Replies'							=>	'回复',
'Pages'								=>	'页次：',
'Page'								=>	'页 %s',
'BBCode'							=>	'BBCode：', // You probably shouldn't change this
'url tag'							=>	'[url] 超链接:',
'img tag'							=>	'[img] 贴图：',
'Smilies'							=>	'表情：',
'and'								=>	'以及',
'Image link'						=>	'图片', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'说：', // For [quote]'s
'Mailer'							=>	'%s邮件服务', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'重要信息',
'Write message legend'				=>	'填写内容后点击按钮提交',
'Previous'							=>	'上一页',
'Next'								=>	'下一页',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'头衔',
'Member'							=>	'会员', // Default title
'Moderator'							=>	'版主',
'Administrator'						=>	'管理员',
'Banned'							=>	'封禁',
'Guest'								=>	'访客',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] 缺少匹配的标签 [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] 标签不允许在 [%2$s] 标签内部使用',
'BBCode error invalid self-nesting'	=>	'[%s] 标签不允许在其自身内部使用',
'BBCode error no closing tag'		=>	'[%1$s] 缺少匹配的标签 [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] 标签属性不允许为空',
'BBCode error tag not allowed'		=>	'您无权限使用 [%s] 标签',
'BBCode error tag url not allowed'	=>	'您无权限发表超链接',
'BBCode code problem'				=>	'[code] 标签出现错误，请检查。',
'BBCode list size error'			=>	'列表内容过长无法解析，请缩短后再试！',

// Stuff for the navigator (top of every page)
'Index'								=>	'首页',
'User list'							=>	'用户列表',
'Rules'								=>	'服务条款',
'Search'							=>	'搜索',
'Register'							=>	'注册',
'Login'								=>	'登录',
'Not logged in'						=>	'您尚未登录。',
'Profile'							=>	'个人资料',
'Logout'							=>	'注销',
'Logged in as'						=>	'欢迎回来：',
'Admin'								=>	'管理设置',
'Last visit'						=>	'上次登录： %s',
'Topic searches'					=>	'主题:',
'New posts header'					=>	'已更新',
'Active topics'						=>	'活跃中',
'Unanswered topics'					=>	'无回复',
'Posted topics'						=>	'已参与',
'Show new posts'					=>	'查看您上次登录后出现的新帖子。',
'Show active topics'				=>	'查看包含最近回复的主题。',
'Show unanswered topics'			=>	'查看还未被回复过的主题。',
'Show posted topics'				=>	'查看您参与过的主题。',
'Mark all as read'					=>	'标记所有帖子为已读',
'Mark forum read'					=>	'标记该版块为已读',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'页脚',
'Jump to'							=>	'论坛跳转',
'Go'								=>	'前往', // Submit button in forum jump
'Moderate topic'					=>	'管理主题',
'All'                               =>  '所有',
'Move topic'						=>	'移动主题',
'Open topic'						=>	'开启主题',
'Close topic'						=>	'关闭主题',
'Unstick topic'						=>	'解除置顶',
'Stick topic'						=>	'置顶主题',
'Moderate forum'					=>	'管理该版',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug信息',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// For extern.php RSS feed
'RSS description'					=>	'%s 最近发表的主题。',
'RSS description topic'				=>	'%s 最近发表的帖子。',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS订阅',
'Atom active topics feed'			=>	'Atom订阅',
'RSS forum feed'					=>	'RSS订阅该版',
'Atom forum feed'					=>	'Atom订阅该版',
'RSS topic feed'					=>	'RSS订阅该主题',
'Atom topic feed'					=>	'Atom订阅该主题',

// Admin related stuff in the header
'New reports'						=>	'有新的举报',
'Maintenance mode enabled'			=>	'维护模式已启用！',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
