<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'Sie haben keine Berechtigung, dieses Profil zu ändern.';
$txt['website_title'] = 'Titel der Webseite';
$txt['website_url'] = 'URL der Webseite';
$txt['signature'] = 'Signatur';
$txt['profile_posts'] = 'Beiträge';
$txt['change_profile'] = 'Profil ändern';
$txt['delete_user'] = 'Benutzer löschen';
$txt['current_status'] = 'Dieses Mitglied ist:';
$txt['personal_text'] = 'Persönlicher Text';
$txt['personal_picture'] = 'Benutzerbild';
$txt['no_avatar'] = 'Kein Benutzerbild';
$txt['choose_avatar_gallery'] = 'Wähle einen Avatar aus der Galerie';
$txt['picture_text'] = 'Bild/Text';
$txt['reset_form'] = 'Eingabe löschen';
$txt['preferred_language'] = 'Bevorzugte Sprache';
$txt['age'] = 'Alter';
$txt['no_pic'] = '(kein Bild)';
$txt['latest_posts'] = 'Letzter Beitrag: ';
$txt['additional_info'] = 'Zusätzliche Informationen';
$txt['avatar_by_url'] = 'Geben Sie die URL zu Ihrem Benutzerbild an (z.B.: <em>http://www.meineseite.de/bild.gif</em>)';
$txt['my_own_pic'] = 'Eigenes Benutzerbild via URL';
$txt['date_format'] = 'Bestimmt das Format von Datum und Zeit im Forum.';
$txt['time_format'] = 'Zeitformat';
$txt['display_name_desc'] = 'Der im Forum angezeigte Name.';
$txt['personal_time_offset'] = 'Zeitdifferenz in +/- Stunden zwischen Serverzeit und Ihrer lokalen Zeit.';
$txt['dob'] = 'Geburtsdatum';
$txt['dob_month'] = 'Monat (MM)';
$txt['dob_day'] = 'Tag (TT)';
$txt['dob_year'] = 'Jahr (JJJJ)';
$txt['password_strength'] = 'Wir empfehlen mindestens 6 Zeichen zu verwenden und Buchstaben mit Ziffern zu kombinieren.';
$txt['include_website_url'] = 'Bitte ausfüllen, wenn Sie unten eine URL eingeben!';
$txt['complete_url'] = 'Bitte eine komplette URL eingeben (inkl. http://) - (http://www.meineseite.de).';
$txt['your_icq'] = 'Ihre ICQ-Nummer';
$txt['your_aim'] = 'Ihr AOL Name';
$txt['your_yim'] = 'Ihr Yahoo! Name';
$txt['sig_info'] = 'Signaturen werden unter jedem Beitrag und jeder Privaten Mitteilung angezeigt. In der Signatur können Smileys und BBCode verwendet werden.';
$txt['max_sig_characters'] = 'Max. Zeichen: %1$d; Zeichen übrig:';
$txt['send_member_pm'] = 'Diesem Mitglied eine Private Mitteilung senden';
$txt['hidden'] = 'versteckt';
$txt['current_time'] = 'Aktuelle Zeit des Forums';
$txt['digits_only'] = 'Die \'Beiträge\' Box kann nur Zahlen enthalten.';

$txt['language'] = 'Sprache';
$txt['avatar_too_big'] = 'Das Benutzerbild ist zu groß. Bitte verkleinern Sie es und versuchen Sie es erneut (max';
$txt['invalid_registration'] = 'Ungültiges Registrierungsdatum, gültiges Beispiel:';
$txt['msn_email_address'] = 'Ihre MSN Messenger E-Mail-Adresse';
$txt['current_password'] = 'Aktuelles Passwort';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Aus Sicherheitsgründen muss bei jeder Änderung des Benutzerkontos das aktuelle Passwort eingegeben werden.';

$txt['timeoffset_autodetect'] = '(automatisch ermittelt)';

$txt['secret_question'] = 'Geheime Frage';
$txt['secret_desc'] = 'Die eingegebene Frage kann Ihnen helfen, Ihr Passwort wieder zu bekommen. Die Antwort sollten <strong>nur</strong> Sie kennen!';
$txt['secret_desc2'] = 'Wählen Sie die Antwort vorsichtig aus. Es sollte kein anderer die Antwort erraten können!';
$txt['secret_answer'] = 'Antwort';
$txt['secret_ask'] = 'Stellen Sie mir die geheime Frage';
$txt['cant_retrieve'] = 'Sie haben keine Möglichkeit, Ihr Passwort abzufragen! Sie können aber ein neues festlegen, indem Sie dem Link folgen, welcher Ihnen per E-Mail zugeschickt werden kann. Beantworten Sie Ihre geheime Frage, können Sie gleich ein neues Passwort festlegen.';
$txt['incorrect_answer'] = 'Sie haben keine gültige Kombination von Geheimfrage und -antwort im Benutzerprofil angegeben. Bitte klicken Sie auf den \'Zurück\' Button und benutzen Sie die Standardmethode, um Ihr Passwort zu erlangen.';
$txt['enter_new_password'] = 'Bitte geben Sie die Antwort auf Ihre geheime Frage und das gewünschte Passwort ein. Ihr Passwort wird danach geändert - vorausgesetzt, Sie haben die Frage richtig beantwortet.';
$txt['password_success'] = 'Ihr Passwort wurde erfolgreich geändert.<br />Klicken Sie <a href="' . $scripturl . '?action=login">hier</a> zum einloggen.';
$txt['secret_why_blank'] = 'Warum ist dieses Feld leer?';

$txt['authentication_reminder'] = 'Authentifizierungserinnerung';
$txt['password_reminder_desc'] = 'Wenn Sie Ihre Login Daten vergessen haben, können Sie diese anfordern. Um diesen Vorgang zu starten, geben Sie bitte Ihren Benutzernamen oder Ihre E-Mail Adresse ein.';
$txt['authentication_options'] = 'Bitte wählen Sie eine der folgenden Optionen';
$txt['authentication_openid_email'] = 'Eine Erinnerung meiner OpenID Identität zusenden';
$txt['authentication_openid_secret'] = 'Die "geheime Frage" beantworten um die OpenID Identität anzuzeigen';
$txt['authentication_password_email'] = 'Neues Passwort zusenden';
$txt['authentication_password_secret'] = 'Neues Passwort nach Beantwortung der "geheimen Frage" vergeben';
$txt['openid_secret_reminder'] = 'Bitte geben Sie Ihre Antwort auf die Frage ein. Beantworten Sie diese richtig, wird Ihre OpenID Identität angezeigt.';
$txt['reminder_openid_is'] = 'Die OpenID Identität, welche mit Ihrem Benutzerkonto verknüpft ist, lautet:<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Bitte merken Sie sich dies für die Zukunft.';
$txt['reminder_continue'] = 'Weiter';

$txt['current_theme'] = 'Aktuelles Theme';
$txt['change'] = '(ändern)';
$txt['theme_preferences'] = 'Theme Voreinstellungen';
$txt['theme_forum_default'] = 'Forum- oder Boardstandard';
$txt['theme_forum_default_desc'] = 'Das ist das Standard-Theme, d.h. Ihr Theme wechselt mit den Einstellungen des Administrators und dem Board, welches Sie anschauen.';

$txt['profileConfirm'] = 'Sind Sie sicher, dass Sie diesen Benutzer löschen möchten?';

$txt['custom_title'] = 'Individueller Titel';

$txt['lastLoggedIn'] = 'Letzter Besuch';

$txt['notify_settings'] = 'Benachrichtigungs-Einstellungen:';
$txt['notify_save'] = 'Einstellungen speichern';
$txt['notify_important_email'] = 'Erhalten Sie Newsletters, Ankündigungen und wichtige Benachrichtigungen via E-Mail.';
$txt['notify_regularity'] = 'Für abonnierte Themen und Boards wie folgt benachrichtigen';
$txt['notify_regularity_instant'] = 'Sofort';
$txt['notify_regularity_first_only'] = 'Sofort - nur zur ersten ungelesenen Antwort';
$txt['notify_regularity_daily'] = 'Täglich';
$txt['notify_regularity_weekly'] = 'Wöchentlich';
$txt['auto_notify'] = 'Benachrichtigung einschalten, wenn Sie einen Beitrag oder eine Antwort schreiben';
$txt['notify_send_types'] = 'Benachrichtigen Sie mich bei abonnierten Themen';
$txt['notify_send_type_everything'] = 'Über alles was passiert';
$txt['notify_send_type_everything_own'] = 'Über alles, wenn ich das Thema gestartet habe';
$txt['notify_send_type_only_replies'] = 'Nur über neue Antworten';
$txt['notify_send_type_nothing'] = 'Gar nicht';
$txt['notify_send_body'] = 'Die Antwort auf das Thema an die E-Mail anfügen';

$txt['notifications_topics'] = 'Aktuelle Themen Benachrichtigungen';
$txt['notifications_topics_list'] = 'Sie sind über Antworten zum folgenden Thema benachtichtigt worden';
$txt['notifications_topics_none'] = 'Sie erhalten im Moment keine Benachrichtigungen über neue Themen.';
$txt['notifications_topics_howto'] = 'Um Benachrichtigungen von einem Thema zu erhalten, klicken Sie den "Benachrichtigen" Button im gewünschten Thema.';
$txt['notifications_boards'] = 'Aktuelle Board Benachrichtigungen';
$txt['notifications_boards_list'] = 'Sie sind über neue Themen im folgenden Board benachrichtigt worden';
$txt['notifications_boards_none'] = 'Sie erhalten im Moment keine Benachrichtigungen von Boards.';
$txt['notifications_boards_howto'] = 'Um Benachrichtigungen von einem Board zu erhalten, klicken Sie den "Benachrichtigen" Button im Themen-Index.';
$txt['notifications_update'] = 'Abbestellen';

$txt['statPanel_showStats'] = 'Benutzerstatistiken für: ';
$txt['statPanel_users_votes'] = 'Abgegebene Stimmen';
$txt['statPanel_users_polls'] = 'Erstellte Umfragen';
$txt['statPanel_total_time_online'] = 'Gesamte Onlinezeit';
$txt['statPanel_noPosts'] = 'Noch kein Beitrag vorhanden!';
$txt['statPanel_generalStats'] = 'Benutzerstatistiken';
$txt['statPanel_posts'] = 'Beiträge';
$txt['statPanel_topics'] = 'Themen';
$txt['statPanel_total_posts'] = 'Gesamte Beiträge';
$txt['statPanel_total_topics'] = 'Gestartete Beiträge';
$txt['statPanel_votes'] = 'Stimmen';
$txt['statPanel_polls'] = 'Umfragen';
$txt['statPanel_topBoards'] = 'Meistbesuchte Boards nach Beiträgen';
$txt['statPanel_topBoards_posts'] = '%1$d Beiträge des Boards %2$d Beiträge (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d Beiträge des Benutzers %2$d Beiträge (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Meistbesuchte Boards nach Aktivität';
$txt['statPanel_activityTime'] = 'Aktivität nach Zeit';
$txt['statPanel_activityTime_posts'] = '%1$d Beiträge (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Tageszeit';

$txt['deleteAccount_warning'] = 'Warnung - Diese Aktion ist nicht rückgängig zu machen!';
$txt['deleteAccount_desc'] = 'Auf dieser Seite können Sie das Benutzerkonto und die Beiträge des Benutzers löschen.';
$txt['deleteAccount_member'] = 'Benutzerkonto des Mitglieds löschen';
$txt['deleteAccount_posts'] = 'Beiträge des Benutzer die gelöscht werden';
$txt['deleteAccount_none'] = 'Keine';
$txt['deleteAccount_all_posts'] = 'Alle Beiträge';
$txt['deleteAccount_topics'] = 'Themen und Beiträge';
$txt['deleteAccount_confirm'] = 'Sind Sie absolut sicher, dass Sie das Benutzerkonto löschen möchten?';
$txt['deleteAccount_approval'] = 'Beachten Sie bitte, dass der Administrator dem Löschen eines Benutzerkontos zustimmen muss.';

$txt['profile_of_username'] = 'Profil von %1$s';
$txt['profileInfo'] = 'Profil-Information';
$txt['showPosts'] = 'Beiträge anzeigen';
$txt['showPosts_help'] = 'Diese Sektion erlaubt es ihnen alle Beiträge dieses Mitglieds zu sehen. Beachten sie, dass sie nur solche Beiträge sehen können, zu denen sie auch Zugriffsrechte haben.';
$txt['showMessages'] = 'Nachrichten';
$txt['showTopics'] = 'Themen';
$txt['showAttachments'] = 'Dateianhänge';
$txt['statPanel'] = 'Statistiken anzeigen';
$txt['editBuddyIgnoreLists'] = 'Freunde/Ignorier-Listen';
$txt['editBuddies'] = 'Freunde verwalten';
$txt['editIgnoreList'] = 'Ignorier-Liste bearbeiten';
$txt['trackUser'] = 'Benutzer beobachten';
$txt['trackActivity'] = 'Aktivität';
$txt['trackIP'] = 'IP-Adresse';

$txt['authentication'] = 'Authentifizierung';
$txt['change_authentication'] = 'Hier können Sie die Möglichkeit auswählen, wie sich die Benutzer in das Forum einloggen. Wählen Sie die Authentifizierung über ein OpenID Profil oder wechseln Sie zu Benutzername und Passwort.';

$txt['profileEdit'] = 'Profil-Einstellungen';
$txt['account_info'] = 'Hier können Sie alle wichtigen Informationen ändern, die Sie im Forum identifizieren. Aus Sicherheitsgründen müssen Sie Ihr Passwort eingeben, wenn Sie diese Angaben ändern.';
$txt['forumProfile_info'] = 'Hier können Sie Ihre persönlichen Informationen ändern. Diese Informationen wird überall im ' . $context['forum_name_html_safe'] . ' Forum angezeigt werden. Wenn Sie bestimmte Informationen nicht preisgeben möchten, lassen Sie die entsprechenden Felder einfach leer.';
$txt['theme'] = 'Design &amp; Layout';
$txt['theme_info'] = 'Hier können Sie das Design und Layout des Forums ändern.';
$txt['notification'] = 'Benachrichtigungen &amp; E-Mail';
$txt['notification_info'] = 'Hier können Sie die abonnierten Themen und Boards anschauen sowie die Einstellungen ändern.';
$txt['groupmembership'] = 'Gruppen Mitgliedschaft';
$txt['groupMembership_info'] = 'Hier können sie ihre Mitgliedschaft in den verschiedenen Gruppen verwalten.';
$txt['ignoreboards'] = 'Boards ignorieren';
$txt['ignoreboards_info'] = 'Hier können sie bestimmte Boards ignorieren. Wenn sie ein Board ignorieren, wird das \'Neue Beiträge\' Symbol auf dem Board-Index nicht angezeigt. Auch über den \'Ungelesene Beiträge\' Link werden aus diesen Boards keine neuen Beiträge angezeigt, da dort nicht gesucht wird. Schauen sie sich in den betreffenden Boards den Themen-Index an, werden die Themen mit neuen Beiträgen jedoch markiert. Benutzen sie hingegen den \'Ungelesene Antworten zu ihren Beiträgen\' Link, werden neue Antworten auch aus den ignorierten Boards aufgelistet.';
$txt['pmprefs'] = 'Private Mitteilungen';

$txt['profileAction'] = 'Aktionen';
$txt['deleteAccount'] = 'Benutzerkonto löschen';
$txt['profileSendIm'] = 'Private Mitteilung senden';
$txt['profile_sendpm_short'] = 'PM Senden';

$txt['profileBanUser'] = 'Benutzer bannen';

$txt['display_name'] = 'Anzeigenname';
$txt['enter_ip'] = 'IP-Adresse (Bereich) eingeben';
$txt['errors_by'] = 'Fehlermeldungen von';
$txt['errors_desc'] = 'Eine Auflistung aller Fehler, die von diesem Benutzer gemacht worden sind.';
$txt['errors_from_ip'] = 'Fehlermeldungen der IP-Adresse (Bereich)';
$txt['errors_from_ip_desc'] = 'Eine Auflistung aller Fehler, die von dieser IP-Adresse (bzw. diesem IP-Bereich) gemacht worden sind.';
$txt['ip_address'] = 'IP-Adresse';
$txt['ips_in_errors'] = 'Benutzte IP-Adressen in Fehlermeldungen';
$txt['ips_in_messages'] = 'Benutzte IP-Adressen in den letzten Beiträgen';
$txt['members_from_ip'] = 'Mitglieder der IP-Adresse (Bereich)';
$txt['members_in_range'] = 'Mögliche Mitglieder im gleichen Bereich';
$txt['messages_from_ip'] = 'Beiträge von IP-Adresse (Bereich)';
$txt['messages_from_ip_desc'] = 'Eine Auflistung aller Beiträge, die von dieser IP-Adresse (bzw. diesem IP-Bereich) geschrieben worden sind.';
$txt['most_recent_ip'] = 'Meistgenutzte IP-Adresse';
$txt['why_two_ip_address'] = 'Warum werden zwei IP-Adressen aufgelistet?';
$txt['no_errors_from_ip'] = 'Keine Fehlermeldung von dieser IP-Adresse (Bereich) gefunden';
$txt['no_errors_from_user'] = 'Keine Fehlermeldung von diesem Benutzer gefunden';
$txt['no_members_from_ip'] = 'Kein Mitglied von dieser IP-Adresse (Bereich) gefunden';
$txt['no_messages_from_ip'] = 'Keine Nachrichtvon dieser IP-Adresse (Bereich) gefunden';
$txt['none'] = 'Keine';
$txt['own_profile_confirm'] = 'Möchten Sie wirklich Ihr eigenes Benutzerkonto löschen?';
$txt['view_ips_by'] = 'Zeige IP-Adressen von';

$txt['avatar_will_upload'] = 'Eigenes Benutzerbild hochladen';

$txt['activate_changed_email_title'] = 'E-Mail Adresse wurde geändert';
$txt['activate_changed_email_desc'] = 'Sie haben Ihre E-Mail-Adresse geändert. Zur Überprüfung dieser Adresse erhalten Sie eine E-Mail. Klicken Sie auf den Link in der E-Mail um Ihr Benutzerkonto zu reaktivieren.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Senden der Erinnerungs E-Mail nicht möglich.';
$txt['send_email'] = 'E-Mail senden an';
$txt['to_ask_password'] = 'um nach dem Passwort zu fragen';

$txt['user_email'] = 'Benutzername/E-Mail';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Neues Passwort für ' . $context['forum_name'];
$txt['reminder_mail'] = 'Diese E-Mail wurde gesendet, weil Sie die \'Passwort vergessen\' Funktion benutzt haben. Um ein neues Passwort einzugeben, klicken Sie bitte auf folgenden Link';
$txt['reminder_sent'] = 'Eine E-Mail wurde an Ihre Adresse geschickt. Klicken Sie auf den dortigen Link, um ein neues Passwort einzugeben.';
$txt['reminder_openid_sent'] = 'Ihre aktuelle OpenID Identität wurde an Ihre E-Mail-Adresse gesendet.';
$txt['reminder_set_password'] = 'Passwort eingeben';
$txt['reminder_password_set'] = 'Passwort erfolgreich geändert';
$txt['reminder_error'] = '%1$s hat die geheime Frage, während des Versuches ein vergessenes Passwort zu ändern, nicht richtig beantwortet.';

$txt['registration_not_approved'] = 'Dieses Benutzerkonto wurde noch nicht akzeptiert. Wenn Sie Ihre E-Mail-Adresse ändern möchten, klicken Sie';
$txt['registration_not_activated'] = 'Dieses Benutzerkonto wurde noch nicht aktiviert. Wenn Sie die Aktivierungs E-Mail nochmals senden möchten, klicken Sie';

$txt['primary_membergroup'] = 'Primäre Mitgliedergruppe';
$txt['additional_membergroups'] = 'Weitere Mitgliedergruppe';
$txt['additional_membergroups_show'] = '[ weitere Gruppen anzeigen ]';
$txt['no_primary_membergroup'] = '(keine primäre Mitgliedergruppe)';
$txt['deadmin_confirm'] = 'Sind Sie sicher, dass Sie Ihren Administrator-Status unwiderruflich entfernen möchten?';

$txt['account_activate_method_2'] = 'Das Benutzerkonto benötigt eine erneute Aktivierung nach Änderung der E-Mail-Adresse';
$txt['account_activate_method_3'] = 'Das Benutzerkonto ist noch nicht genehmigt';
$txt['account_activate_method_4'] = 'Das Löschen des Benutzerkontos muss noch genehmigt werden';
$txt['account_activate_method_5'] = 'Dieses Benutzerkonto gehört einem Minderjährigen und muss genehmigt werden';
$txt['account_not_activated'] = 'Das Benutzerkonto ist momentan nicht aktiviert';
$txt['account_activate'] = 'aktiviere';
$txt['account_approve'] = 'akzeptiere';
$txt['user_is_banned'] = 'Benutzer ist gebannt';
$txt['view_ban'] = 'Anschauen';
$txt['user_banned_by_following'] = 'Dieser Benutzer ist wegen folgenden Regeln gebannt';
$txt['user_cannot_due_to'] = 'Benutzer kann nicht %1$s wegen des Bans: "%2$s"';
$txt['ban_type_post'] = 'schreiben';
$txt['ban_type_register'] = 'registrieren';
$txt['ban_type_login'] = 'einloggen';
$txt['ban_type_access'] = 'auf das Forum zugreifen';

$txt['show_online'] = 'Anderen Benutzern Ihren Online Status zeigen';

$txt['return_to_post'] = 'Nach dem Schreiben zum Thema zurückkehren';
$txt['no_new_reply_warning'] = 'Beim Schreiben nicht bezüglich neuer Antworten warnen';
$txt['posts_apply_ignore_list'] = 'Verstecke Mitteilungen von Benutzern auf meiner Ignorier-Liste.';
$txt['recent_posts_at_top'] = 'Die neuesten Beiträge am Anfang anzeigen';
$txt['recent_pms_at_top'] = 'Die neuesten Privaten Mitteilungen am Anfang anzeigen';
$txt['wysiwyg_default'] = 'WYSIWYG Editor standardmäßig auf Antworten-Seiten anzeigen.';

$txt['timeformat_default'] = '(Forumstandard)';
$txt['timeformat_easy1'] = 'Monat Tag, Jahr, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Monat Tag, Jahr, HH:MM:SS (24 Stunden)';
$txt['timeformat_easy3'] = 'JJJJ-MM-TT, HH:MM:SS';
$txt['timeformat_easy4'] = 'TT Monat JJJJ, HH:MM:SS';
$txt['timeformat_easy5'] = 'TT-MM-JJJJ, HH:MM:SS';

$txt['poster'] = 'Autor';

$txt['board_desc_inside'] = 'Boardbeschreibung innerhalb der Boards anzeigen';
$txt['show_children'] = 'Untergeordnete Boards auf jeder Seite im Themen-Index anzeigen';
$txt['use_sidebar_menu'] = 'Verwende Menüs im Seitenmenü statt Dropdown Menüs, wenn möglich.';
$txt['show_no_avatars'] = 'Benutzerbilder von anderen Benutzern nicht anzeigen';
$txt['show_no_signatures'] = 'Signaturen von anderen Benutzern nicht anzeigen';
$txt['show_no_censored'] = 'Wörter nicht zensieren';
$txt['topics_per_page'] = 'Anzahl der Themen pro Seite:';
$txt['messages_per_page'] = 'Anzahl der Beiträge pro Seite:';
$txt['per_page_default'] = 'Forumstandard';
$txt['calendar_start_day'] = 'Tag des Wochenanfangs';
$txt['display_quick_reply'] = 'Schnellantwort im Thema ';
$txt['display_quick_reply1'] = 'nicht anzeigen.';
$txt['display_quick_reply2'] = 'minimiert anzeigen.';
$txt['display_quick_reply3'] = 'normal anzeigen.';
$txt['display_quick_mod'] = 'Schnellmoderation anzeigen als';
$txt['display_quick_mod_none'] = 'nicht anzeigen.';
$txt['display_quick_mod_check'] = 'als Checkbox anzeigen.';
$txt['display_quick_mod_image'] = 'als Symbol anzeigen.';

$txt['whois_title'] = 'Schaue nach Informationen zu der IP-Adresse';
$txt['whois_afrinic'] = 'AfriNIC (Afrika)';
$txt['whois_apnic'] = 'APNIC (Asien Pazifik Region)';
$txt['whois_arin'] = 'ARIN (Nord Amerika, ein Teil Karibik und Afrika südl. der Sahara)';
$txt['whois_lacnic'] = 'LACNIC (Latein Amerika und Karibik)';
$txt['whois_ripe'] = 'RIPE (Europa, der Mittlere Osten and Teile von Afrika und Asien)';

$txt['moderator_why_missing'] = 'Warum fehlt hier \'Moderator\'?';
$txt['username_change'] = 'ändern';
$txt['username_warning'] = 'Um den Benutzernamen dieses Mitgliedes zu ändern, muss das Forum auch das Passwort annullieren. Das neue Passwort wird dem Mitglied mit dem neuen Benutzernamen per E-Mail zugeschickt.';

$txt['show_member_posts'] = 'Beiträge anzeigen';
$txt['show_member_topics'] = 'Themen anzeigen';
$txt['show_member_attachments'] = 'Dateianhänge anzeigen';
$txt['show_posts_none'] = 'Es wurden noch keine Beiträge erstellt.';
$txt['show_topics_none'] = 'Es wurden noch keine Themen veröffentlicht.';
$txt['show_attachments_none'] = 'Es wurden noch keine Dateianhänge veröffentlicht.';
$txt['show_attach_filename'] = 'Dateiname';
$txt['show_attach_downloads'] = 'Downloads';
$txt['show_attach_posted'] = 'Erstellt';

$txt['showPermissions'] = 'Berechtigungen anzeigen';
$txt['showPermissions_status'] = 'Berechtigungsstatus';
$txt['showPermissions_help'] = 'Dieser Abschnitt erlaubt Ihnen, alle Berechtigungen für diesen Benutzer (verbotene sind <del>durchgestrichen</del>) zu sehen.';
$txt['showPermissions_given'] = 'Erhalten von';
$txt['showPermissions_denied'] = 'Verboten von';
$txt['showPermissions_permission'] = 'Berechtigung (verbotene sind <del>durchgestrichen</del>)';
$txt['showPermissions_none_general'] = 'Dieses Mitglied hat keine generellen Berechtigungen.';
$txt['showPermissions_none_board'] = 'Dieses Mitglied hat keine Board spezifischen Berechtigungen.';
$txt['showPermissions_all'] = 'Als Administrator hat dieses Mitglied alle Berechtigungen.';
$txt['showPermissions_select'] = 'Board spezifische Berechtigungen für';
$txt['showPermissions_general'] = 'Generelle Berechtigungen';
$txt['showPermissions_global'] = 'Alle Boards';
$txt['showPermissions_restricted_boards'] = 'Eingeschränkte Boards';
$txt['showPermissions_restricted_boards_desc'] = 'Die folgenden Boards sind für den Benutzer nicht einsehbar';

$txt['local_time'] = 'Lokale Zeit';
$txt['posts_per_day'] = 'pro Tag';

$txt['buddy_ignore_desc'] = 'Dieser Bereich erlaubt Ihnen das Verwalten Ihrer Freundes- und Ignorier-Listen für dieses Forum. Das Hinzufügen von Mitgliedern in diese Listen wird, neben anderen Dingen, helfen Mail und PM Verkehr zu kontrollieren, je nach Ihren Einstellungen.';

$txt['buddy_add'] = 'Zur Freundes-Liste hinzufügen';
$txt['buddy_remove'] = 'Von Freundes-Liste entfernen';
$txt['buddy_add_button'] = 'Hinzufügen';
$txt['no_buddies'] = 'Ihre Freundes-Liste ist momentan leer';

$txt['ignore_add'] = 'Zur Ignorierungsliste hinzufügen';
$txt['ignore_remove'] = 'Von Ignorier-Liste entfernen';
$txt['ignore_add_button'] = 'Hinzufügen';
$txt['no_ignore'] = 'Ihre Ignorier-Liste ist momentan leer';

$txt['regular_members'] = 'Registrierte Mitglieder';
$txt['regular_members_desc'] = 'Jeder Benutzer des Forums ist ein Mitglied dieser Gruppe.';
$txt['group_membership_msg_free'] = 'Ihre Gruppenmitgliedschaft wurde erfolgreich aktualisiert.';
$txt['group_membership_msg_request'] = 'Ihre Anforderung wurde übermittelt, bitte warten sie, während sie bearbeitet wird.';
$txt['group_membership_msg_primary'] = 'Ihre primäre Gruppe wurde aktualisiert';
$txt['current_membergroups'] = 'Aktuelle Mitgliedergruppen';
$txt['available_groups'] = 'Verfügbare Gruppen';
$txt['join_group'] = 'Gruppe beitreten';
$txt['leave_group'] = 'Gruppe verlassen';
$txt['request_group'] = 'Mitgliedschaft anfordern';
$txt['approval_pending'] = 'Genehmigung steht aus';
$txt['make_primary'] = 'Als primäre Gruppen festlegen';

$txt['request_group_membership'] = 'Gruppenmitgliedschaft anfordern';
$txt['request_group_membership_desc'] = 'Bevor sie dieser Gruppe beitreten können, muss ihre Anfrage von einem Moderator genehmigt werden. Bitte geben sie einen Grund für ihren Beitritt an';
$txt['submit_request'] = 'Anforderung übermitteln';

$txt['profile_updated_own'] = 'Ihr Profil wurde erfolgreich aktualisiert.';
$txt['profile_updated_else'] = 'Das Profil von %1$s wurde erfolgreich aktualisiert.';

$txt['profile_error_signature_max_length'] = 'Ihre Signatur kann nicht mehr wie %1$d Zeichen enthalten';
$txt['profile_error_signature_max_lines'] = 'Ihre Signatur kann nicht aus mehr als %1$d Zeilen bestehen';
$txt['profile_error_signature_max_image_size'] = 'Die Bilder in ihrer Signatur dürfen nicht größ als %1$dx%2$d Pixel sein';
$txt['profile_error_signature_max_image_width'] = 'Die Bilder in ihrer Signatur dürfen nicht breiter als %1$d Pixel sein';
$txt['profile_error_signature_max_image_height'] = 'Die Bilder in ihrer Signatur dürfen nicht höher als %1$d Pixel sein';
$txt['profile_error_signature_max_image_count'] = 'Sie dürfen nicht mehr als %1$d Bilder in ihrer Signatur haben';
$txt['profile_error_signature_max_font_size'] = 'Der Text in ihrer Signatur darf die Größe von %1$d nicht überschreiten';
$txt['profile_error_signature_allow_smileys'] = 'Sie sind nicht berechtigt, Smileys in Ihrer Signatur zu verwenden';
$txt['profile_error_signature_max_smileys'] = 'Sie dürfen nicht mehr als %1$d Smileys in Ihrer Signatur verwenden';
$txt['profile_error_signature_disabled_bbc'] = 'Der folgende <abbr title="Bulletin Board Code">BBC</abbr> ist in der Signatur nicht erlaubt: %1$s';

$txt['profile_view_warnings'] = 'Zeige Verwarnungen';
$txt['profile_issue_warning'] = 'Verwarnung erteilen';
$txt['profile_warning_level'] = 'Verwarnungslevel';
$txt['profile_warning_desc'] = 'Hier können sie den Verwarnungslevel des Benutzers bestimmen und bei Bedarf eine schriftliche Benachrichtigung versenden. Sie haben auch die Möglichkeit, bisherige Verwarnungen und deren Auswirkungen anzuzeigen.';
$txt['profile_warning_name'] = 'Benutzername';
$txt['profile_warning_impact'] = 'Auswirkung:';
$txt['profile_warning_reason'] = 'Grund für Verwarnung';
$txt['profile_warning_reason_desc'] = 'Angabe wird benötigt und protokolliert.';
$txt['profile_warning_effect_none'] = 'Keine.';
$txt['profile_warning_effect_watch'] = 'Benutzer wird zur Beobachtenliste hinzugefügt.';
$txt['profile_warning_effect_own_watched'] = 'Sie sind auf der Moderatoren Beobachtungsliste.';
$txt['profile_warning_is_watch'] = 'wird beobachtet';
$txt['profile_warning_effect_moderation'] = 'Alle Beiträge des Benutzers werden moderiert.';
$txt['profile_warning_effect_own_moderated'] = 'Alle Ihre neuen Beiträge werden moderiert werden.';
$txt['profile_warning_is_moderation'] = 'Beiträge werden moderiert';
$txt['profile_warning_effect_mute'] = 'Der Benutzer kann keine Beiträge mehr schreiben.';
$txt['profile_warning_effect_own_muted'] = 'Sie werden keine neuen Beiträge erstellen können.';
$txt['profile_warning_is_muted'] = 'kann nicht schreiben';
$txt['profile_warning_effect_text'] = 'Level >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Benachrichtigung senden';
$txt['profile_warning_notify_template'] = 'Vorlage auswälen:';
$txt['profile_warning_notify_subject'] = 'Betreff der Benachrichtigung';
$txt['profile_warning_notify_body'] = 'Text der Benachrichtigung';
$txt['profile_warning_notify_template_subject'] = 'Sie haben eine Verwarnung erhalten';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Sie haben eine Verwarnung wegen %1$s erhalten. Bitte unterlassen sie diese Aktivitäten und halten sie sich an die Forum-Regeln, da wir sonst weitere Maßnahmen ergreifen müssen.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Sie haben eine Verwarnung wegen %1$s aufgrund dieses Beitrags:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Bitte unterlassen Sie dieses Verhalten in Zukunft und befolgen Sie die Regeln des Forums, da sonst weitere Schritte eingeleitet werden.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'Spam';
$txt['profile_warning_notify_title_spamming'] = 'Spam';
$txt['profile_warning_notify_for_offence'] = 'Schreibens von beleidigenden Texten';
$txt['profile_warning_notify_title_offence'] = 'Schreiben von beleidigendem Text';
$txt['profile_warning_notify_for_insulting'] = 'Angreifens anderer Benutzer und/oder Führungsmitglieder';
$txt['profile_warning_notify_title_insulting'] = 'Anriff auf Benutzer/Fürungsmitglieder';
$txt['profile_warning_issue'] = 'Verwarnung erteilen';
$txt['profile_warning_max'] = '(Max. 100)';
$txt['profile_warning_limit_attribute'] = 'Beachten sie, dass sie das Verwarnungslevel des Benutzers nicht mehr als %1$d%% in 24 Stunden verändern können.';
$txt['profile_warning_errors_occured'] = 'Die Verwarnung konnte aufgrund folgender Fehler nicht erteilt werden';
$txt['profile_warning_success'] = 'Verwarnung wurde erteilt';
$txt['profile_warning_new_template'] = 'Neues Template';

$txt['profile_warning_previous'] = 'Vorherige Verwarnungen';
$txt['profile_warning_previous_none'] = 'Dieser Benutzer hat bisher keine Verwarnungen erhalten.';
$txt['profile_warning_previous_issued'] = 'Erteilt von';
$txt['profile_warning_previous_time'] = 'Zeit';
$txt['profile_warning_previous_level'] = 'Punkte';
$txt['profile_warning_previous_reason'] = 'Grund';
$txt['profile_warning_previous_notice'] = 'Gesendete Benachrichtigen anzeigen';

$txt['viewwarning'] = 'Warnungen Anzeigen';
$txt['profile_viewwarning_for_user'] = 'Warnungen für %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Bisher wurden keine Warnungen ausgesprochen.';
$txt['profile_viewwarning_desc'] = 'Folgend ist eine Zusammenfassung von allen Warnungen, die durch das Forums Moderatoren Team ausgesprochen wurden.';
$txt['profile_viewwarning_previous_warnings'] = 'Letzte Warnungen';
$txt['profile_viewwarning_impact'] = 'Warnungs Auswirkungen';

$txt['subscriptions'] = 'Bezahlte Abonnements';

$txt['pm_settings_desc'] = 'Hier können Sie verschiedene Einstellungen für ihre Privaten Mitteilungen festlegen wer Ihnen Mitteilungen senden kann.';
$txt['email_notify'] = 'Eine E-Mail senden, wenn Sie eine Private Mitteilung erhalten:';
$txt['email_notify_never'] = 'Nie';
$txt['email_notify_buddies'] = 'Nur von Freunden';
$txt['email_notify_always'] = 'Immer';

$txt['pm_receive_from'] = 'Persönliche Mitteilungen erhalten von:';
$txt['pm_receive_from_everyone'] = 'Alle Mitglieder';
$txt['pm_receive_from_ignore'] = 'Alle Benutzer, nur nicht jene auf meiner Ignorier-Liste';
$txt['pm_receive_from_admins'] = 'Ausschließlich Administratoren';
$txt['pm_receive_from_buddies'] = 'Ausschließlich Freunde und Moderatoren';

$txt['copy_to_outbox'] = 'Speichere eine Kopie jeder Privaten Mitteilung im Ausgang.';
$txt['popup_messages'] = 'Zeige ein Popup-Fenster bei neuen Private Mitteilungen.';
$txt['pm_remove_inbox_label'] = 'Posteingangs-Label entfernen, wenn ein anderes hinzugefügt wird?';
$txt['pm_display_mode'] = 'Private Mitteilungen anzeigen';
$txt['pm_display_mode_all'] = 'Alle auf einmal';
$txt['pm_display_mode_one'] = 'Einzeln';
$txt['pm_display_mode_linked'] = 'Als Gespräch';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Wir empfehlen die Aktivierung der Option "Speichere eine Kopie jeder Privaten Mitteilung im Ausgang.".\\n\\nDiese stellt sicher, dass beide Seiten des Gespräches dargestellt werden und es somit leichter zu verfolgen ist.';

$txt['tracking'] = 'Aufzeichnung';
$txt['tracking_description'] = 'Hier können Sie bestimmte Änderungen im Benutzerprofil und die IP-Adresse des Mitglieds verfolgen.';

$txt['trackEdits'] = 'Profiländerungen';
$txt['trackEdit_deleted_member'] = 'Gelöschtes Mitglied';
$txt['trackEdit_no_edits'] = 'Es wurden bisher keine Änderungen für dieses Mitglied aufgezeichnet.';
$txt['trackEdit_action'] = 'Feld';
$txt['trackEdit_before'] = 'Vorheriger Wert';
$txt['trackEdit_after'] = 'Geänderter Wert';
$txt['trackEdit_applicator'] = 'Geändert von';

$txt['trackEdit_action_real_name'] = 'Angezeigter Name';
$txt['trackEdit_action_usertitle'] = 'Persönlicher Titel';
$txt['trackEdit_action_member_name'] = 'Benutzername';
$txt['trackEdit_action_email_address'] = 'E-Mail-Adresse';
$txt['trackEdit_action_id_group'] = 'Primäre Mitgliedergruppe';
$txt['trackEdit_action_additional_groups'] = 'Zusätzliche Mitgliedergruppen';

?>