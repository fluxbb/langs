<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'el',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Εσφαλμένο αίτημα. Ο σύνδεσμος που ακολουθήσατε είναι εσφαλμένος ή ξεπερασμένος.',
'No view'							=>	'Δεν έχετε άδεια να δείτε αυτές τις δημόσιες συζητήσεις.',
'No permission'						=>	'Δεν έχετε δικαίωμα πρόσβασης σε αυτή τη σελίδα.',
'Bad referrer'						=>	'Εσφαλμένο HTTP_REFERER. Έχετε έλθει σε αυτή τη σελίδα, με αναφορά από μη εξουσιοδοτημένη πηγή. Εάν το πρόβλημα παραμένει, παρακαλώ βεβαιωθείτε ότι το \'Base URL\' έχει οριστεί σωστά στις Επιλογές διαχείρισης και ότι επισκέπτεστε το φόρουμ με περιήγηση σε αυτή τη διεύθυνση URL. Περισσότερες πληροφορίες σχετικά με τον έλεγχο αναφοράς μπορείτε να βρείτε στην τεκμηρίωση του FluxBB.',
'No cookie'							=>	'Φαίνεται να έχετε συνδεθεί με επιτυχία, ωστόσο ένα cookie δεν έχει οριστεί. Παρακαλώ ελέγξτε τις ρυθμίσεις σας και αν χρειάζεται ενεργοποιήσεε τα cookies γι αυτόν τον ιστότοπο.',
'Pun include extension'  			=>	'Δεν είναι δυνατή η επεξεργασία του s% που περιέχει χρήστες από το πρότυπο %s. Τα αρχεία "%s" δεν επιτρέπονται',
'Pun include directory'				=>	'Δεν είναι δυνατή η επεξεργασία του s% που περιέχει χρήστες από το πρότυπο %s. Η διέλευση του καταλόγου δεν επιτρέπεται',
'Pun include error'					=>	'Δεν είναι δυνατή η επεξεργασία του s% που περιέχει χρήστες από το πρότυπο %s. Δεν υπάρχει τέτοιο αρχείο ούτε στον κατάλογο προτύπων, ούτε στον κατάλογο που περιέχει χρήστες',

// Miscellaneous
'Announcement'						=>	'Ανακοίνωση',
'Options'							=>	'Επιλογές',
'Submit'							=>	'Υποβολή', // "Name" of submit buttons
'Ban message'						=>	'Έχετε αποκλειστεί από αυτό το φόρουμ.',
'Ban message 2'						=>	'Ο αποκλεισμός λήγει στο τέλος της',
'Ban message 3'						=>	'Ο διαχειριστής ή συντονιστής που σας έχει αποκλείσει, άφησε το ακόλουθο μήνυμα:',
'Ban message 4'						=>	'Παρακαλούμε απευθύνετε οποιεσδήποτε απορίες στον διαχειριστή του φόρουμ, στο',
'Never'								=>	'Ποτέ',
'Today'								=>	'Σήμερα',
'Yesterday'							=>	'Χθες',
'Info'								=>	'Πληροφορίες', // A common table header
'Go back'							=>	'Επιστροφή',
'Maintenance'						=>	'Συντήρηση',
'Redirecting'						=>	'Ανακατεύθυνση',
'Click redirect'					=>	'Κάντε κλικ εδώ εάν δεν θέλετε να περιμένετε άλλο (ή αν ο περιηγητής σας δεν σας προωθεί αυτόματα)',
'on'								=>	'Ναι', // As in "BBCode is on"
'off'								=>	'Όχι',
'Invalid email'						=>	'Η διεύθυνση email που έχετε εισάγει δεν είναι έγκυρη.',
'Required'							=>	'(Απαιτείται)',
'required field'					=>	'είναι ένα απαιτούμενο πεδίο σε αυτή τη φόρμα.', // For javascript form validation
'Last post'							=>	'Τελευταία δημοσίευση',
'by'								=>	'από', // As in last post by some user
'New posts'							=>	'Νέες δημοσιεύσεις', // The link that leads to the first new post
'New posts info'					=>	'Μετάβαση στην πρώτη νέα δημοσίευση αυτού του θέματος.', // The popup text for new posts links
'Username'							=>	'Όνομα χρήστη',
'Password'							=>	'Κωδικός',
'Email'								=>	'Email',
'Send email'						=>	'Αποστολή email',
'Moderated by'						=>	'Συντονίζεται από',
'Registered'						=>	'Εγγραφή',
'Subject'							=>	'Τίτλος',
'Message'							=>	'Μήνυμα',
'Topic'								=>	'Θέμα',
'Forum'								=>	'Δημόσια συζήτηση',
'Posts'								=>	'Δημοσιεύσεις',
'Replies'							=>	'Απαντήσεις',
'Pages'								=>	'Σελίδες:',
'Page'								=>	'Σελίδα %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'Ετικέτα [url]:',
'img tag'							=>	'Ετικέτα [img]:',
'Smilies'							=>	'Εικονίδια συναισθημάτων:',
'and'								=>	'και',
'Image link'						=>	'εικόνα', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'έγραψε:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Σημαντικές πληροφορίες',
'Write message legend'				=>	'Γράψτε το μήνυμά σας και υποβάλετέ το',
'Previous'							=>	'Προηγούμενο',
'Next'								=>	'Επόμενο',
'Spacer'							=>	'...', // Ellipsis for paginate

// Title
'Title'								=>	'Τίτλος',
'Member'							=>	'Μέλος', // Default title
'Moderator'							=>	'Συντονιστής',
'Administrator'						=>	'Διαχειριστής',
'Banned'							=>	'Αποκλεισμένος',
'Guest'								=>	'Επισκέπτης',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'Βρέθηκε ένα [/%1$s] χωρίς το αντίστοιχο [%1$s]',
'BBCode error invalid nesting'		=>	'Το [%1$s] έχει ανοιχθεί εντός του [%2$s]. Αυτό δεν επιτρέπεται',
'BBCode error invalid self-nesting'	=>	'Το [%s] έχει ανοιχθεί εντός του ίδιου. Αυτό δεν επιτρέπεται',
'BBCode error no closing tag'		=>	'Βρέθηκε ένα [%1$s] χωρίς το αντίστοιχο [/%1$s]',
'BBCode error empty attribute'		=>	'Η ετικέτα [%s] είχε ένα κενό τμήμα χαρακτηριστικού',
'BBCode error tag not allowed'		=>	'Δεν επιτρέπεται να χρησιμοποιήσετε ετικέτες [%s]',
'BBCode error tag url not allowed'	=>	'Δεν επιτρέπεται να δημοσιεύσετε συνδέσμους',
'BBCode code problem'				=>	'Υπάρχει ένα πρόβλημα με τις ετικέτες σας [code]',
'BBCode list size error'			=>	'Η λίστα σας είναι πολύ μεγάλη για ανάλυση. Παρακαλούμε κάντε την μικρότερη!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Αρχική σελίδα',
'User list'							=>	'Λίστα χρηστών',
'Rules'								=>	'Όροι χρήσης',
'Search'							=>	'Αναζήτηση',
'Register'							=>	'Εγγραφή',
'Login'								=>	'Σύνδεση',
'Not logged in'						=>	'Δεν έχετε συνδεθεί.',
'Profile'							=>	'Προφίλ',
'Logout'							=>	'Αποσύνδεση',
'Logged in as'						=>	'Συνδεθήκατε ως',
'Admin'								=>	'Διαχείριση',
'Last visit'						=>	'Τελευταία επίσκεψη: %s',
'Topic searches'					=>	'Θέματα:',
'New posts header'					=>	'Νέα',
'Active topics'						=>	'Ενεργά',
'Unanswered topics'					=>	'Αναπάντητα',
'Posted topics'						=>	'Συμμετοχής',
'Show new posts'					=>	'Βρείτε τα θέματα με νέες δημοσιεύσεις από την τελευταία σας επίσκεψη.',
'Show active topics'				=>	'Βρείτε τα θέματα με τις πρόσφατες δημοσιεύσεις.',
'Show unanswered topics'			=>	'Βρείτε τα θέματα χωρίς απαντήσεις.',
'Show posted topics'				=>	'Βρείτε τα θέματα στα οποία έχετε κάνει δημοσιεύσεις.',
'Mark all as read'					=>	'Σήμανση όλων των θεμάτων ως αναγνωσμένα',
'Mark forum read'					=>	'Σήμανση αυτής της δημόσιας συζήτησης ως αναγνωσμένη',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Υποσέλιδο συστήματος',
'Jump to'							=>	'Μετάβαση σε',
'Go'								=>	' Μετάβαση ', // Submit button in forum jump
'Moderate topic'					=>	'Συντονισμός θέματος',
'Move topic'						=>	'Μετακίνηση θέματος',
'Open topic'						=>	'Άνοιγμα θέματος',
'Close topic'						=>	'Κλείδωμα θέματος',
'Unstick topic'						=>	'Μετατροπή σε μη μόνιμο θέμα',
'Stick topic'						=>	'Μετατροπή σε μόνιμο θέμα',
'Moderate forum'					=>	'Συντονισμός δημόσιας συζήτησης',
'Powered by'						=>	'Παρέχεται από το %s',

// Debug information
'Debug table'						=>	'Πληροφορίες εντοπισμού σφαλμάτων',
'Querytime'							=>	'Δημιουργήθηκε σε %1$s δευτερόλεπτα. Εκτελέστηκαν %2$s ερωτήματα',
'Memory usage'						=>	'Χρήση μνήμης: %1$s',
'Peak usage'						=>	'(Κορυφή: %1$s)',
'Query times'						=>	'Χρόνος (οι)',
'Query'								=>	'Ερώτημα',
'Total query time'					=>	'Συνολικός χρόνος ερωτήματος: %s',

// For extern.php RSS feed
'RSS description'					=>	'Τα πιο πρόσφατα θέματα στο %s.',
'RSS description topic'				=>	'Οι πιο πρόσφατες δημοσιεύσεις στο %s.',
'RSS reply'							=>	'Απ: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Τροφοδοσία RSS ενεργών θεμάτων',
'Atom active topics feed'			=>	'Τροφοδοσία Atom ενεργών θεμάτων',
'RSS forum feed'					=>	'Τροφοδοσία RSS του φόρουμ',
'Atom forum feed'					=>	'Τροφοδοσία Atom του φόρουμ',
'RSS topic feed'					=>	'Τροφοδοσία RSS του θέματος',
'Atom topic feed'					=>	'Τροφοδοσία Atom του θέματος',

// Admin related stuff in the header
'New reports'						=>	'Υπάρχουν νέες αναφορές',
'Maintenance mode enabled'			=>	'Η λειτουργία συντήρησης είναι ενεργοποιημένη!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
