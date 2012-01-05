<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'                                  =>        'rtl', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'he',

// Number formatting
'lang_decimal_point'                              =>        '.',
'lang_thousands_sep'                              =>        ',',

// Notices
'Bad request'                                     =>        'הקישור שעליו לחצת שגוי או פג תוקפו.',
'No view'                                         =>        'אין לך הרשאה לצפות בפורומים אלה.',
'No permission'                                   =>        'אין לך הרשאה לגשת לדף זה.',
'Bad referrer'                                    =>        'HTTP_REFERER רע. הופנת לדף זה ממקור לא מורשה. אם הבעיה נמשכת, אנא ודא כי "כתובת בסיס" מוגדרת כהלכה בלוח מנהלים/אפשרויות וכי אתה מבקר בפורום על ידי ניווט דרך כתובת זאת. מידע נוסף לגבי בדיקת כתובת מפנה ניתן למצוא במדריך משתמש באתר התמיכה הישראלי לFluxBB בכתובת www.fluxbb.co.il',
'No cookie'			=>	'נראה שהתחברת בהצלחה, אולם עוגיות לא הוגדרו בדפדפן כראוי. אנא בדוק את הגדרות הדפדפן שלך ואם יש אפשרות, אפשר עוגיות עבור אתר זה.',
'Pun include error'		=>	'לא ניתן לכלול משתמש %s מתבנית %s. לא נמצא כזה קובץ ב %s.',

// Miscellaneous
'Announcement'                                    =>        'הכרזה',
'Options'                                         =>        'אפשרויות',
'Submit'                                          =>        'אישור', // "Name" of submit buttons
'Ban message'                                     =>        'הינך חסום בפורום זה.',
'Ban message 2'                                   =>        'החסימה תפוג ב',
'Ban message 3'                                   =>        'הסיבה לחסימה:',
'Ban message 4'                                   =>        'כל שאלה בנוגע לחסימה נא להפנות למנהל הפורום בכתובת',
'Never'                                           =>        'אף פעם',
'Today'                                           =>        'היום',
'Yesterday'                                       =>        'אתמול',
'Info'                                            =>        'מידע', // A common table header
'Go back'                                         =>        'חזור אחורה',
'Maintenance'                                     =>        'תחזוקה',
'Redirecting'                                     =>        'מעביר',
'Click redirect'                                  =>        'לחץ כאן אם אינך רוצה לחכות עוד (או אם הדפדפן אינו מעביר אותך אוטומטית)',
'on'                                              =>        'פעיל', // As in "BBCode is on"
'off'                                             =>        'מכובה',
'Invalid email'                                  =>        'כתובת הדוא"ל שהזנת אינה חוקית.',
'Required'			=>	'(חובה)',
'required field'                                  =>        'הוא שדה חובה בטופס זה.', // For javascript form validation
'Last post'                                       =>        'הודעה אחרונה',
'by'                                              =>        'מאת', // As in last post by someuser
'New posts'                                       =>        'הודעות&nbsp;חדשות', // The link that leads to the first new post (use &nbsp; for spaces)
'New posts info'                                  =>        'עבור להודעה החדשה הראשונה בנושא זה.', // The popup text for new posts links
'Username'                                        =>        'שם משתמש',
'Password'                                        =>        'סיסמה',
'Email'                                          =>        'דוא"ל',
'Send email'                                     =>        'שלח מכתב דוא"ל',
'Moderated by'                                    =>        'מנוהל על ידי',
'Registered'                                      =>        'תאריך הרשמה',
'Subject'                                         =>        'כותרת',
'Message'                                         =>        'הודעה',
'Topic'                                           =>        'נושא',
'Forum'                                           =>        'פורום',
'Posts'                                           =>        'הודעות',
'Replies'                                         =>        'תגובות',
'Pages'                                           =>        'עמודים:',
'Page'			=>	'עמוד %s',
'BBCode'                                          =>        'BBCode:', // You probably shouldn't change this
'img tag'                                         =>        '[img] תג:',
'Smilies'                                         =>        'סמיילים:',
'and'                                             =>        'ו',
'Image link'                                      =>        'תמונה', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'                                           =>        'כתב:', // For [quote]'s
'Mailer'                                          =>        'דיוור %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'                           =>        'מידע חשוב',
'Write message legend'                            =>        'כתוב את הודעתך ושלח',
'Previous'                                        =>        'קודם',
'Next'                                            =>        'הבא',
'Spacer'                                          =>        '&hellip;', // Ellipsis for paginate

// Title
'Title'                                           =>        'כותרת',
'Member'                                          =>        'משתמש רשום', // Default title
'Moderator'                                       =>        'מנהל',
'Administrator'                                   =>        'מנהל ראשי',
'Banned'                                          =>        'חסום',
'Guest'                                           =>        'אורח',

// Stuff for include/parser.php
'BBCode error no opening tag'                                  =>    '[/%1$s] נמצא ללא התאמה של [%1$s]',
'BBCode error invalid nesting'                                  =>    '[%1$s] נפתח בתוך [%2$s], זה אסור',
'BBCode error invalid self-nesting'                                  =>    '[%s] נפתח בתוך עצמו, זה אסור',
'BBCode error no closing tag'                                 =>    '[%1$s] נמצא ללא התאמה [/%1$s]',
'BBCode error empty attribute'                                =>    '[%s] תג מכיל קטע מאפיין ריק',
'BBCode code problem'                             =>    'יש בעיה עם תגי [code] שלך',
'BBCode list size error'			=>	'רשימתך ארוכה מדי לניתוח, אנא קצר אותה!',

// Stuff for the navigator (top of every page)
'Index'                                           =>        'עמוד ראשי',
'User list'                                       =>        'רשימת משתמשים',
'Rules'                                           =>        'חוקים',
'Search'                                          =>        'חיפוש',
'Register'                                        =>        'הרשמה',
'Login'                                           =>        'כניסה',
'Not logged in'                                   =>        'אתה לא מחובר כרגע.',
'Profile'                                         =>        'פרופיל',
'Logout'                                          =>        'התנתקות',
'Logged in as'                                    =>        'מחובר כ',
'Admin'                                           =>        'לוח בקרה ראשי',
'Last visit'                                      =>        'ביקור אחרון: %s',
'Topic searches'          =>  'נושאים:',
'New posts header'          =>  'חדשים',
'Active topics'            =>  'פעילים',
'Unanswered topics'          =>  'שלא נענו',
'Posted topics'            =>  'שהגבת בהם',
'Show new posts'					                    =>	   'מצא נושאים עם הודעות חדשות מאז ביקורך האחרון.',
'Show active topics'				                    =>  	'מצא נושאים עם הודעות אחרונות.',
'Show unanswered topics'			                 =>  	'מצא נושאים ללא תגובות.',
'Show posted topics'        =>  'מצא נושאים שהגבת בהם.',
'Mark all as read'                                =>        'סמן את כל הנושאים כנקראו',
'Mark forum read'                                 =>        'סמן פורום זה כנקרא',
'Title separator'		=>	' / ',

// Stuff for the page footer
'Board footer'                                    =>        'חלק תחתון של המערכת',
'Jump to'                                         =>        'עבור אל',
'Go'                                              =>        ' עבור ', // Submit button in forum jump
'Moderate topic'                                  =>        'ניהול נושא',
'Move topic'                                      =>        'העבר נושא',
'Open topic'                                      =>        'פתח נושא',
'Close topic'                                     =>        'נעל נושא',
'Unstick topic'                                   =>        'בטל נעיצת נושא',
'Stick topic'                                     =>        'נעץ נושא',
'Moderate forum'                                  =>        'ניהול פורום',
'Powered by'                                      =>        'מבוסס על %s<br />תרגום המערכת לעברית מאת <a href="http://www.fluxbb.co.il">FluxBB בעברית</a>',

// Debug information
'Debug table'                                     =>        'מידע ניפוי באגים',
'Querytime'                                       =>        'נוצר תוך %1$s שניות, %2$s שאילתות הושלמו',
'Memory usage'						=>	'שימוש זכרון: %1$s',
'Peak usage'						=>	'(שיא: %1$s)',
'Query times'                                     =>        'פעמים',
'Query'                                           =>        'שאילתה',
'Total query time'                                =>        'זמן השאילתה סה"כ: %s',

// For extern.php RSS feed
'RSS description'                                 =>        'הנושאים האחרונים ב %s.',
'RSS description topic'                           =>        'ההודעות האחרונות ב %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS נושאים פעילים',
'Atom active topics feed'			=>	'Atom נושאים פעילים',
'RSS forum feed'					=>	'RSS עדכונים בפורום',
'Atom forum feed'					=>	'Atom עדכונים בפורום',
'RSS topic feed'					=>	'RSS עדכונים בנושא',
'Atom topic feed'					=>	'Atom עדכונים בנושא',

// Admin related stuff in the header
'New reports'						=>	'ישנם דיווחים חדשים',
'Maintenance mode enabled'			=>	'מצב תחזוקה מופעל!',

// Units for file sizes
'Size unit B'            =>  '%s B',
'Size unit KiB'            =>  '%s KiB',
'Size unit MiB'            =>  '%s MiB',
'Size unit GiB'            =>  '%s GiB',
'Size unit TiB'            =>  '%s TiB',
'Size unit PiB'            =>  '%s PiB',
'Size unit EiB'            =>  '%s EiB',

);
