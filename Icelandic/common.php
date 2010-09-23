<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'is',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Fyrirspurn mistókst. Tengill sem þú notaðir er vitlaus eða úreltur.',
'No view'							=>	'Þú hefur ekki réttindi til að skoða þessi spjallborð.',
'No permission'						=>	'Þú hefur ekki réttindi til að komast á þessa síðu.',
'Bad referrer'						=>	'Röng tilvísun(HTTP_REFERER). Þér var vísað hingað af röngum stað. Vinsamlegast farið til baka og reynið aftur. Ef vandamálið heldur áfram verið þá viss um að  \'Base URL\' sé rétt skilgreint í Admin/Options og að þú sért að heimsækja korkana á því URL. Hægt er að finna meiri upplýsingar um HTTP_REFERER í PunBB skjöluninni',
'No cookie'							=>	'Það virðist sem þér hafi tekist að skrá þig inn en hins vegar tókst ekki að gefa þér köku. Vinsamlegast kannaðu stillingarnar hjá þér og ef það á við leyfðu þá kökur frá þessum vef.',
'Pun include error'					=>	'Ekki tókst að meðhöndla notendaþráð %s frá sniðmátinu %s. Það er engin svona skrá, hvorki í sniðmátamöppunni né í notendamöppunni.',

// Miscellaneous
'Announcement'						=>	'Tilkynning',
'Options'							=>	'Valmöguleiki',
'Submit'							=>	'Senda', // "Name" of submit buttons
'Ban message'						=>	'Þú ert í banni á þessu spjallborði.',
'Ban message 2'						=>	'Bannið rennur út ',
'Ban message 3'						=>	'Stjórnandinn eða umsjónarmaðurinn sem bannaði þig skyldi eftir þessi skilaboð:',
'Ban message 4'						=>	'Vinsamlegast beinið öllum fyrirspurnum til stjórnandans',
'Never'								=>	'Aldrei',
'Today'								=>	'Í dag',
'Yesterday'							=>	'Í gær',
'Info'								=>	'Upplýsingar', // A common table header
'Go back'							=>	'Til baka',
'Maintenance'						=>	'Viðhald',
'Redirecting'						=>	'Áframsendi',
'Click redirect'					=>	'Smelltu hér ef þú vilt ekki bíða lengur (eða ef vafrinn þinn sendir þig ekki sjálfkrafa áfram)',
'on'								=>	'á', // As in "BBCode is on"
'off'								=>	'af',
'Invalid email'						=>	'Netfangið sem þú slóst inn er ekki löglegt.',
'Required'							=>	'(Þarfnast útfyllingar)',
'required field'					=>	'þarfnast útfyllingar í þessu formi.', // For javascript form validation
'Last post'							=>	'Síðasti póstur',
'by'								=>	'eftir', // As in last post by someuser
'New posts'							=>	'Nýr póstur', // The link that leads to the first new post
'New posts info'					=>	'Fara á fyrsta nýja póstinn í þessum þráð.', // The popup text for new posts links
'Username'							=>	'Notendanafn',
'Password'							=>	'Lykilorð',
'Email'								=>	'Netfang',
'Send email'						=>	'Senda tölvupóst',
'Moderated by'						=>	'Stjórnað af',
'Registered'						=>	'Skráður',
'Subject'							=>	'Efni',
'Message'							=>	'Skilaboð',
'Topic'								=>	'Þráður',
'Forum'								=>	'Spjallborð',
'Posts'								=>	'Póstar',
'Replies'							=>	'Svör',
'Pages'								=>	'Síður:',
'Page'								=>	'Síða %s',
'BBCode'							=>	'BBKóði:', // You probably shouldn't change this
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Bros:',
'and'								=>	'og',
'Image link'						=>	'mynd', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'skrifaði:', // For [quote]'s
'Mailer'							=>	'Póstari', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Áríðandi upplýsingar',
'Write message legend'				=>	'Skrifaðu skilaboðin og sendu þau',
'Previous'							=>	'Fyrri',
'Next'								=>	'Næsti',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titill',
'Member'							=>	'Meðlimur', // Default title
'Moderator'							=>	'Umsjónarmaður',
'Administrator'						=>	'Stjórnandi',
'Banned'							=>	'Bannaður',
'Guest'								=>	'Gestur',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] fannst án samsvarandi [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] var opnað innan [%2$s], það er ekki leyft',
'BBCode error invalid self-nesting'	=>	'[%s] var opnað innan sjálfs síns, það er ekki leyft',
'BBCode error no closing tag'		=>	'[%1$s] fannst án samsvarandi [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag var með tómt attribute svæði',
'BBCode code problem'				=>	'Það er vandamál með [code] tögin þín',
'BBCode list size error'			=>	'Listinn þinn var of langur til að birta, vinsamlegast styttu hann!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Heim',
'User list'							=>	'Notendur',
'Rules'								=>	'Reglur',
'Search'							=>	'Leit',
'Register'							=>	'Skráning',
'Login'								=>	'Innskrá',
'Not logged in'						=>	'Þú ert ekki skráður inn.',
'Profile'							=>	'Stillingar',
'Logout'							=>	'Útskrá',
'Logged in as'						=>	'Skráður inn sem',
'Admin'								=>	'Stjórnun',
'Last visit'						=>	'Síðasta heimsókn: %s',
'Show new posts'					=>	'Sýna nýja pósta frá síðustu heimsókn',
'Mark all as read'					=>	'Merkja alla þræði sem lesna',
'Mark forum read'					=>	'Merkja þetta spjallborð sem lesið',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Borðfótur',
'Search links'						=>	'Leita í tenglum',
'Show recent posts'					=>	'Sýna nýlega pósta',
'Show unanswered posts'				=>	'Sýna ósvaraða pósta',
'Show your posts'					=>	'Sýna mína pósta',
'Show subscriptions'				=>	'Sýna áskriftarþræði',
'Jump to'							=>	'Hoppa í',
'Go'								=>	' Áfram ', // Submit button in forum jump
'Moderate topic'					=>	'Stjórna þráð',
'Move topic'						=>	'Færa þráð',
'Open topic'						=>	'Opna þráð',
'Close topic'						=>	'Loka þráð',
'Unstick topic'						=>	'Afklístra þráð',
'Stick topic'						=>	'Klístra þráð',
'Moderate forum'					=>	'Stjórna spjallborði',
'Powered by'						=>	'Knúið af %s',

// Debug information
'Debug table'						=>	'Aflúsunar upplýsingar',
'Querytime'							=>	'Búið til á %1$s sekúndum, %2$s fyrirspurnir framkvæmdar',
'Memory usage'						=>	'Minnisnotkun: %1$s',
'Peak usage'						=>	'(Toppur: %1$s)',
'Query times'						=>	'Tími (s)',
'Query'								=>	'Fyrirspurn',
'Total query time'					=>	'Heildar fyrirspurnartími: %s',

// Email related notifications
'New user notification'				=>	'Viðvörun - Ný skráning',
'New user message'					=>	'Notandinn \'%s\' skráði sig á spjallborðið %s',
'Banned email notification'			=>	'Viðvörun - Bannað netfang fannst',
'Banned email register message'		=>	'Notandinn \'%s\' skráði sig með bönnuðu netfangi: %s',
'Banned email change message'		=>	'Notandinn \'%s\' breytti yfir í bannað netfang: %s',
'Banned email post message'			=>	'Notandinn \'%s\' póstaði með bönnuðu netfangi: %s',
'Duplicate email notification'		=>	'Viðvörun - Tvöfalt netfang fannst',
'Duplicate email register message'	=>	'Notandinn \'%s\' skráði sig með netfangi sem tilheyrir: %s',
'Duplicate email change message'	=>	'Notandinn \'%s\' breytti yfir í netfang sem tilheyrir: %s',
'Report notification'				=>	'Tilkynning(%d) - \'%s\'',
'Report message 1'					=>	'Notandinn \'%s\' hefur tilkynnt um þessi skilaboð: %s',
'Report message 2'					=>	'Ástæða: %s',

'User profile'						=>	'Notendanupplýsingar: %s',
'Post URL'							=>	'Póst URL: %s',
'Email signature'					=>	'Spjallborðs póstari'."\n".'(Do not reply to this message)',

// For extern.php RSS feed
'RSS description'					=>	'Nýjustu þræðirnir á %s.',
'RSS description topic'				=>	'Nýjustu póstarnir í %s.',
'RSS reply'							=>	'Svar: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'Það eru nýjar tilkynningar',
'Maintenance mode enabled'			=>	'Kerfið er í viðhaldsham!',

);
