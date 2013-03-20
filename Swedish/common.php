<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'en',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Bad request. The link you followed is incorrect or outdated.',
'No view'							=>	'You do not have permission to view these forums.',
'No permission'						=>	'You do not have permission to access this page.',
'Bad referrer'						=>	'Bad HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the FluxBB documentation.',
'No cookie'							=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include extension'  			=>	'Unable to process user include %s from template %s. "%s" files are not allowed',
'Pun include directory'				=>	'Unable to process user include %s from template %s. Directory traversal is not allowed',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory',

// Miscellaneous
'Announcement'						=>	'Announcement',
'Options'							=>	'Inställningar',
'Submit'							=>	'Svara', // "Name" of submit buttons
'Ban message'						=>	'You are banned from this forum.',
'Ban message 2'						=>	'The ban expires at the end of',
'Ban message 3'						=>	'The administrator or moderator that banned you left the following message:',
'Ban message 4'						=>	'Please direct any inquiries to the forum administrator at',
'Never'								=>	'Aldrig',
'Today'								=>	'Idag',
'Yesterday'							=>	'Imorgon',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Gå tillbaka',
'Maintenance'						=>	'Underhåll',
'Redirecting'						=>	'Skickar vidare',
'Click redirect'					=>	'Click here if you do not want to wait any longer (or if your browser does not automatically forward you)',
'on'								=>	'on', // As in "BBCode is on"
'off'								=>	'av',
'Invalid email'						=>	'The email address you entered is invalid.',
'Required'							=>	'(Required)',
'required field'					=>	'is a required field in this form.', // For javascript form validation
'Last post'							=>	'Senaste inlägg',
'by'								=>	'av', // As in last post by some user
'New posts'							=>	'New posts', // The link that leads to the first new post
'New posts info'					=>	'Go to the first new post in this topic.', // The popup text for new posts links
'Username'							=>	'Användarnamn',
'Password'							=>	'Lösenord',
'Email'								=>	'Email',
'Send email'						=>	'Send email',
'Moderated by'						=>	'Moderated by',
'Registered'						=>	'Registrerad',
'Subject'							=>	'Rubrik',
'Message'							=>	'Meddelande',
'Topic'								=>	'Ämne',
'Forum'								=>	'Forum',
'Posts'								=>	'Inlägg',
'Replies'							=>	'Svar',
'Pages'								=>	'Sidor:',
'Page'								=>	'sida %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Smilies:',
'and'								=>	'och',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'wrote:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Viktig information',
'Write message legend'				=>	'Write your message and submit',
'Previous'							=>	'Föregående',
'Next'								=>	'Nästa',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titel',
'Member'							=>	'Memdlem', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administratör',
'Banned'							=>	'Banned',
'Guest'								=>	'Gäst',

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
'Index'								=>	'Start',
'User list'							=>	'Medlemslista',
'Rules'								=>	'Regler',
'Search'							=>	'Sök',
'Register'							=>	'Bli medlem',
'Login'								=>	'Logga in',
'Not logged in'						=>	'Du är inte inloggad.',
'Profile'							=>	'Profil',
'Logout'							=>	'Logga ut',
'Logged in as'						=>	'Inloggad som',
'Admin'								=>	'Adminpanel',
'Last visit'						=>	'Senaste besök: %s',
'Topic searches'					=>	'Ämne:',
'New posts header'					=>	'Ny',
'Active topics'						=>	'Aktiv',
'Unanswered topics'					=>	'Obesvarat',
'Posted topics'						=>	'Postat',
'Show new posts'					=>	'Find topics with new posts since your last visit.',
'Show active topics'				=>	'Find topics with recent posts.',
'Show unanswered topics'			=>	'Find topics with no replies.',
'Show posted topics'				=>	'Find topics you have posted to.',
'Mark all as read'					=>	'Markera alla trådar som lästa',
'Mark forum read'					=>	'Markera detta forum som läst',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'Hoppa till',
'Go'								=>	' Go ', // Submit button in forum jump
'Moderate topic'					=>	'Moderate topic',
'Move topic'						=>	'Move topic',
'Open topic'						=>	'Open topic',
'Close topic'						=>	'Close topic',
'Unstick topic'						=>	'Unstick topic',
'Stick topic'						=>	'Stick topic',
'Moderate forum'					=>	'Moderate forum',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug information',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// For extern.php RSS feed
'RSS description'					=>	'The most recent topics at %s.',
'RSS description topic'				=>	'The most recent posts in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'There are new reports',
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
