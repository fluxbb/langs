<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'                                  =>        'ltr', // ltr (ezkerretik eskuinera) edo rtl (eskuinetik ezkerrera)
'lang_identifier'					=>	'eu',

// Number formatting
'lang_decimal_point'                              =>        ',',
'lang_thousands_sep'                              =>        '.',

// Notices
'Bad request'                                     =>        'Eskaera okerra. Jarraitu duzun esteka ez da zuzena edo zaharkitua dago.',
'No view'                                         =>        'Ez daukazu baimenik foro hauek ikusteko.',
'No permission'                                   =>        'Ez daukazu baimenik orri honetara sartzeko.',
'Bad referrer'                                    =>        'HTTP_REFERER okerra. Baimenik gabeko iturri batetik ekarri zaituzte hona. Arazoak jarraitzen badu, egiaztatu \'Base URL\' ondo ezarrita dagoela Admin/Aukerak atalean eta helbide hura bisitatuz etorri zarela forora. FluxBBren dokumentazioan referrer-a egiaztatzeari buruzko informazio gehiago dago.',
'No cookie'							=>	'Badirudi ongi hasi duzula saioa; hala ere, ez da cookie-rik ezarri. Begiratu zure ezarpenak eta, beharrezkoa bada, gaitu cookie-ak webgune honetarako.',
'Pun include extension'  			=>	'Ezin izan da %s erabiltzaile-includea (%s txantiloikoa) prozesatu. "%s" fitxategiak ez dira onartzen',
'Pun include directory'				=>	'Ezin izan da %s erabiltzaile-includea (%s txantiloikoa) prozesatu. Direktorioz eskalatzea ez da onartzen',
'Pun include error'					=>	'Ezin izan da %s erabiltzaile-includea (%s txantiloikoa) prozesatu. Ez da existitzen halako fitxategirik %s-(e)an.',

// Miscellaneous
'Announcement'                                    =>        'Abisua',
'Options'                                         =>        'Aukerak',
'Submit'                                          =>        'Bidali', // "Name" of submit buttons
'Ban message'                                     =>        'Debekatuta daukazu foro honetan sartzea.',
'Ban message 2'                                   =>        'Debekuaren iraungitze-data:',
'Ban message 3'                                   =>        'Debekua ezarri dizun administratzaileak edo moderatzaileak hurrengo mezua utzi dizu:',
'Ban message 4'                                   =>        'Gehiago jakin nahi baduzu, galdetu foroaren administratzaileari:',
'Never'                                           =>        'Inoiz ez',
'Today'                                           =>        'Gaur',
'Yesterday'                                       =>        'Atzo',
'Info'                                            =>        'Info', // A common table header
'Go back'                                         =>        'Atzera',
'Maintenance'                                     =>        'Mantenimendua',
'Redirecting'                                     =>        'Berbideratzen',
'Click redirect'                                  =>        'Egin klik hemen gehiago itxaron nahi ez baduzu (edo zure nabigatzaileak ez bazaitu berehala eramaten)',
'on'                                              =>        'on', // As in "BBCode is on"
'off'                                             =>        'off',
'Invalid email'                                  =>        'Sartu duzun posta-helbidea baliogabea da.',
'Required'							=>	'(Ezinbestekoa)',
'required field'                                  =>        'ezinbesteko eremua da idazki honetan.', // For javascript form validation
'Last post'                                       =>        'Azken mezua',
'by'                                              =>        ' -', // As in last post by someuser
'New posts'                                       =>        'Mezu&nbsp;berriak', // The link that leads to the first new post (use &nbsp; for spaces)
'New posts info'                                  =>        'Joan gai honetako lehen mezura.', // The popup text for new posts links
'Username'                                        =>        'Erabiltzaile-izena',
'Password'                                        =>        'Pasahitza',
'Email'                                          =>        'Posta-helbidea',
'Send email'                                     =>        'Bidali posta',
'Moderated by'                                    =>        'Moderatzailea',
'Registered'                                      =>        'Erregistratua',
'Subject'                                         =>        'Izenburua',
'Message'                                         =>        'Mezua',
'Topic'                                           =>        'Gaia',
'Forum'                                           =>        'Foroa',
'Posts'                                           =>        'Mezuak',
'Replies'                                         =>        'Erantzunak',
'Pages'                                           =>        'Orriak',
'Page'								=>	'%s. orria',
'BBCode'                                          =>        'BBCode', // You probably shouldn't change this
'url tag'							=>	'[url] etiketa:',
'img tag'                                         =>        '[img] etiketa',
'Smilies'                                         =>        'Aurpegierak',
'and'                                             =>        'eta',
'Image link'                                      =>        'irudia', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'                                           =>        '(e)k idatzi du', // For [quote]'s
'Mailer'                                          =>        'Igorlea', // As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'                           =>        'Informazio garrantzitsua',
'Write message legend'                            =>        'Idatzi mezua eta bidali',
'Previous'                                        =>        'Aurrekoa',
'Next'                                            =>        'Hurrengoa',
'Spacer'                                          =>        '&hellip;', // Ellipsis for paginate

// Title
'Title'                                           =>        'Izenburua',
'Member'                                          =>        'Kidea', // Default title
'Moderator'                                       =>        'Moderatzailea',
'Administrator'                                   =>        'Administratzailea',
'Banned'                                          =>        'Debekatua',
'Guest'                                           =>        'Gonbidatua',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] aurkitu da baina [%1$s] falta da',
'BBCode error invalid nesting'		=>	'[%1$s] [%2$s] barruan ireki da, ekintza hori ez dago onartuta',
'BBCode error invalid self-nesting'	=>	'[%s] bere baitan ireki da, ekintza hori ez dago onartuta',
'BBCode error no closing tag'		=>	'[%1$s] aurkitu da baina ez dago [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] etiketak hutsik dauka atributu-sekzioa',
'BBCode error tag not allowed'		=>	'Ez duzu [%s] etiketak erabiltzeko baimenik',
'BBCode error tag url not allowed'	=>	'Ez duzu loturak bidaltzeko baimena',
'BBCode list size error'			=>	'Zure zerrenda luzeegia da eta ezin da prozesatu, egin ezazu zerrenda laburragoa!',

// Stuff for the navigator (top of every page)
'Index'                                           =>        'Hasiera',
'User list'                                       =>        'Erabiltzaile-zerrenda',
'Rules'                                           =>        'Arauak',
'Search'                                          =>        'Bilatu',
'Register'                                        =>        'Erregistratu',
'Login'                                           =>        'Hasi saioa',
'Not logged in'                                   =>        'Ez duzu saioa hasi.',
'Profile'                                         =>        'Profila',
'Logout'                                          =>        'Amaitu saioa',
'Logged in as'                                    =>        'Kaixo',
'Admin'                                           =>        'Administrazioa',
'Last visit'                                      =>        'Azken bisita',
'Topic searches'					=>	'Gaiak:',
'New posts header'					=>	'Berriak',
'Active topics'						=>	'Aktiboak',
'Unanswered topics'					=>	'Erantzun gabeak',
'Posted topics'						=>	'Bidalitakoak',
'Show new posts'                                  =>        'Erakutsi azken bisitatik dauden mezuak',
'Show active topics'				=>	'Erakutsi mezu berriak dituzten gaiak.',
'Show unanswered topics'			=>	'Erakutsi erantzunik ez duten gaiak.',
'Show posted topics'				=>	'Erakutsi zure mezuak dituzten gaiak.',
'Mark all as read'                                =>        'Markatu gai guztiak irakurrita gisa',
'Mark forum read'                                 =>        'Markatu foro hau irakurrita gisa',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'                                    =>        'Foroen oina',
'Jump to'                                         =>        'Joan hona:',
'Go'                                              =>        ' Joan ', // Submit button in forum jump
'Moderate topic'                                  =>        'Moderatu gaia',
'All'					=>	'Guztiak',
'Move topic'                                      =>        'Mugitu gaia',
'Open topic'                                      =>        'Ireki gaia',
'Close topic'                                     =>        'Itxi gaia',
'Unstick topic'                                   =>        'Askatu gaia',
'Stick topic'                                     =>        'Itsatsi gaia',
'Moderate forum'                                  =>        'Moderatu foroa',
'Powered by'                                      =>        '%sn oinarritua',

// Debug information
'Debug table'                                     =>        'Arazketa-informazioa',
'Querytime'                                       =>        '%1$ segundotan sortua, %2$ kontsulta exekutatu dira',
'Memory usage'						=>	'Memoria erabilera: %1$s',
'Peak usage'						=>	'(Gailurra: %1$s)',
'Query times'                                     =>        'Denbora (s)',
'Query'                                           =>        'Kontsulta',
'Total query time'                                =>        'Kontsulta-denbora osoa: %s',

// For extern.php RSS feed
'RSS description'                                 =>        'Gairik berrienak %s-(e)n.',
'RSS description topic'                           =>        'Mezurik berrienak %s-(e)n.',
'RSS reply'                                       =>        'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Gai aktiboen RSS jarioa',
'Atom active topics feed'			=>	'Gai aktiboen Atom jarioa',
'RSS forum feed'					=>	'Foroen RSS jarioa',
'Atom forum feed'					=>	'Foroen Atom jarioa',
'RSS topic feed'					=>	'Gaien RSS jarioa',
'Atom topic feed'					=>	'Gaien Atom jarioa',

// Admin related stuff in the header
'New reports'						=>	'Txosten berriak daude',
'Maintenance mode enabled'			=>	'Mantenimendu-modua indarrean dago!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KB',
'Size unit MiB'						=>	'%s MB',
'Size unit GiB'						=>	'%s GB',
'Size unit TiB'						=>	'%s TB',
'Size unit PiB'						=>	'%s PB',
'Size unit EiB'						=>	'%s EB',


);
