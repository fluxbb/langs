<?php

// Language definitions for frequently used strings
// Finnish translation by Pauligrinder
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'fi',

// Number formatting
'lang_decimal_point'					=>	'.',
'lang_thousands_sep'					=>	',',

// Notices
'Bad request'						=>	'Virheellinen pyyntö. Avaamasi linkki on virheellinen tai vanhentunut.',
'No view'                           =>	'Sinulla ei ole oikeutta katsoa näitä forumeita.',
'No permission'						=>	'Sinulla ei ole oikeutta avata tätä sivua.',
'Bad referrer'						=>	'Väärä HTTP_REFERER. Vahvistamaton lähde ohjasi sinut tälle sivulle. Jos ongelma toistuu, varmista että "Pää URL" on asetettu oikein Ylläpitovalikossa ja että selaat forumia siellä asetetusta osoitteesta. Lisätietoja löytyy FluxBB:n dokumentaatiosta',
'No cookie'                         =>	'Näyttää siltä että onnistuit kirjautumaan, mutta cookieta ei luotu. Tarkista asetuksesi, ja ota tarvittaessa cookiet käyttöön.',
'Pun include error'					=>	'Käyttäjän %s liitettä mallipohjasta %s ei voitu käsitellä. Kyseistä tiedostoa ei ole templates- eikä include-kansiossa.',

// Miscellaneous
'Announcement'						=>	'Tiedoitus',
'Options'                           =>	'Ylläpito',
'Submit'                            =>	'Hyväksy', // "Name" of submit buttons
'Ban message'						=>	'Sinut on bannattu tältä forumilta.',
'Ban message 2'						=>	'Banni menee umpeen',
'Ban message 3'						=>	'Bannaajan antama viesti:',
'Ban message 4'						=>	'Voit kysellä forumin ylläpitäjältä @',
'Never'                             =>	'Ei koskaan',
'Today'                             =>	'Tänään',
'Yesterday'                         =>	'Eilen',
'Info'                              =>	'Info', // A common table header
'Go back'                           =>	'Takaisin',
'Maintenance'						=>	'Huolto',
'Redirecting'						=>	'Siirrytään',
'Click redirect'					=>	'Napsauta tätä jos et malta odottaa (tai jos selaimesi ei siirrä sinua automaattisesti seuraavalle sivulle)',
'on'                                =>	'päällä', // As in "BBCode is on"
'off'                               =>	'pois',
'Invalid email'						=>	'Syöttämäsi sähköpostiosoite virheellinen',
'Required'                          =>	'(Vaaditaan)',
'required field'					=>	'tämä kenttä on pakollinen tässä lomakkeessa.', // For javascript form validation
'Last post'                         =>	'Viimeisin kirjoitus',
'by'                                =>	'kirjoitti', // As in last post by someuser
'New posts'                         =>	'Uudet kirjoitukset', // The link that leads to the first new post
'New posts info'					=>	'Siirry tämän aiheen ensimmäiseen uuteen kirjoitukseen.', // The popup text for new posts links
'Username'                          =>	'Käyttäjä',
'Password'                          =>	'Salasana',
'Email'                             =>	'Sähköpostiosoite',
'Send email'						=>	'Lähetä saähköpostia',
'Moderated by'						=>	'Forumia hallitsee: ',
'Registered'						=>	'Rekisteröity',
'Subject'                           =>	'Aihe',
'Message'                           =>	'Viesti',
'Topic'                             =>	'Otsikko',
'Forum'                             =>	'Forumi',
'Posts'                             =>	'Kirjoituksia',
'Replies'                           =>	'Vastauksia',
'Pages'                             =>	'Sivuja:',
'Page'                              =>	'Sivu %s',
'BBCode'                            =>	'BBCode:', // You probably shouldn't change this
'img tag'                           =>	'[img] tagi:',
'Smilies'                           =>	'Hymiöt:',
'and'                               =>	'ja',
'Image link'                        =>	'kuva', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'                             =>	'kirjoitti:', // For [quote]'s
'Mailer'                            =>	'Postittaja', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Tärkeää tietoa',
'Write message legend'				=>	'Kirjoita viestisi ja hyväksy',
'Previous'                          =>	'Edellinen',
'Next'                              =>	'Seuraava',
'Forum index'						=>	'Forumin pääsivu',
'Spacer'                            =>	'…', // Ellipsis for paginate

// Title
'Title'                             =>	'Titteli',
'Member'                            =>	'Jäsen', // Default title
'Moderator'                         =>	'Moderaattori',
'Administrator'						=>	'Ylläpitäjä',
'Banned'                            =>	'Bannattu',
'Guest'                             =>	'Vieras',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] löytyi ilman [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] avattiin [%2$s] sisällä, tämä ei ole sallittua',
'BBCode error invalid self-nesting'	=>	'[%s] avattiin samanlaisen sisällä, tämä ei ole sallittua',
'BBCode error no closing tag'		=>	'[%1$s] löytyi ilman vastaavaa [/%1$s]:a',
'BBCode error empty attribute'		=>	'[%s] tagista puuttui atribuutti.',
'BBCode code problem'               =>	'[code] tageissasi on ongelma',
'BBCode list size error'            =>	'Listasi on liian pitkä, lyhennä sitä!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Pääsivu',
'User list'							=>	'Käyttäjälista',
'Rules'								=>	'Säännöt',
'Search'							=>	'Etsi',
'Register'							=>	'Rekisteröidy',
'Login'								=>	'Kirjaudu',
'Not logged in'						=>	'Et ole kirjautunut',
'Profile'							=>	'Profiili',
'Logout'							=>	'Ulos',
'Logged in as'						=>	'Kirjautuneena: ',
'Admin'								=>	'Ylläpito',
'Last visit'						=>	'Viime käyntisi: %s',
'Topic searches'					=>	'Otsikot:',
'New posts header'					=>	'Uudet',
'Active topics'						=>	'Aktiiviset',
'Unanswered topics'					=>	'Vastaamattomat',
'Posted topics'						=>	'Postatut',
'Show new posts'					=>	'Etsi otsikot joissa on uusia kirjoituksia.',
'Show active topics'				=>	'Etsi otsikot joihin on kirjoitettu lähiaikoina.',
'Show unanswered topics'			=>	'Etsi otsikot joihin ei ole vastattu.',
'Show posted topics'				=>	'Etsu otsikot joihin olet itse kirjoittanut.',
'Mark all as read'					=>	'Merkkaa kaikki otsikot luetuiksi',
'Mark forum read'					=>	'Merkkaa forumi luetuksi',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'							=>	'Laudan alaosa',
'Jump to'                               =>	'Hyppää',
'Go'                                    =>	' Mene ', // Submit button in forum jump
'Moderate topic'						=>	'Säädä otsikkoa',
'Move topic'							=>	'Siirrä otsikko',
'Open topic'							=>	'Avaa otsikko',
'Close topic'							=>	'Sulje otsikko',
'Unstick topic'							=>	'Poista liimaus otsikosta',
'Stick topic'							=>	'Liimaa otsikko',
'Moderate forum'						=>	'Säädä forumia',
'Powered by'							=>	'Pyörii %s:llä',
'Share on Facebook'						=>	'Jaa Facebookissa',

// Debug information
'Debug table'							=>	'Debug tiedot',
'Querytime'                             =>	'Generoitu %1$s sekunnissa, %2$s kyselyä suoritettu',
'Memory usage'							=>	'Muistinkäyttö: %1$s',
'Peak usage'							=>	'(Huippu: %1$s)',
'Query times'							=>	'Aika (s)',
'Query'                                 =>	'Kysely',
'Total query time'						=>	'Kyselyn kokonaisaika: %s',

// Email related notifications
'New user notification'					=>	'Huomio - Uusi rekisteröinti',
'New user message'						=>	'Käyttäjä \'%s\' rekisteröityä %s',
'Banned email notification'				=>	'Huomio - Bannattu säköpostiosoite havaittu',
'Banned email register message'			=>	'Käyttäjä \'%s\' rekisteröityi bannatulla osoitteella: %s',
'Banned email change message'			=>	'Käyttäjä \'%s\' vaihtoi bannattuun osoitteeseen: %s',
'Banned email post message'				=>	'Käyttäjä \'%s\' kirjoitti bannatusta osoitteesta: %s',
'Duplicate email notification'			=>	'Huomio - Monta käyttäjää samasta osoitteesta',
'Duplicate email register message'		=>	'Käyttäjä \'%s\' rekisteröi osoitteesta joka kuuluu käyttäjälle: %s',
'Duplicate email change message'		=>	'Käyttäjä \'%s\' vaihtoi osoitteeseen joka kuuluu käyttäjälle: %s',
'Report notification'					=>	'Raportoi(%d) - \'%s\'',
'Report message 1'						=>	'Käyttäjä \'%s\' raportoi seuraavasta viestistä: %s',
'Report message 2'						=>	'Syystä että: %s',

'User profile'							=>	'Käyttäjäprofiili: %s',
'Post URL'                              =>	'Lähetä URL: %s',
'Email signature'						=>	'Forumin postittaja'."\n".'(Älä vastaa tähän viestiin)',

// For extern.php RSS feed
'RSS description'						=>	'Uusimmat otsikot @ %s.',
'RSS description topic'					=>	'Uusimmat kirjoitukset @ %s.',
'RSS reply'                             =>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'				=>	'RSS aktiivisten otsikoiden syöte',
'Atom active topics feed'				=>	'Atom aktiivisten otsikoiden syöte',
'RSS forum feed'						=>	'RSS forumi syöte',
'Atom forum feed'						=>	'Atom forumi syöte',
'RSS topic feed'						=>	'RSS otsikko syöte',
'Atom topic feed'						=>	'Atom otsikko syöte',

// Admin related stuff in the header
'New reports'							=>	'Uusia raportteja!',
'Maintenance mode enabled'				=>	'Lauta on huollossa!',

);
