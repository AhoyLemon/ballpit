<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Berechtigungen editieren';
$txt['permissions_modify'] = 'Ändern';
$txt['permissions_view'] = 'Anschauen';
$txt['permissions_allowed'] = 'Erlaubt';
$txt['permissions_denied'] = 'Verboten';
$txt['permission_cannot_edit'] = '<strong>Achtung:</strong> Sie können dieses Berechtigungsprofil nicht editieren, da es ein vordefiniertes Profil ist, welches standardmäßig in SMF integriert ist. Wenn Sie es verändern möchten, müssen Sie zuerst eine Kopie des Profils erstellen. Sie können den Vorgang starten, in dem Sie <a href="%1$s">hier</a> klicken.';

$txt['permissions_for_profile'] = 'Berechtigungen für das Profil';
$txt['permissions_boards_desc'] = 'Die folgende Liste zeigt eine Zusammenstellung von Berechtigungen, die zu den einzelnen Boards Ihres Forums zugeordnet sind. Sie können das zugeordnete Berechtigungsprofil ändern, in dem Sie auf den Boardnamen klicken oder "Alle editieren" am Ende der Seite wählen. Um das Profil selbst zu ändern, klicken Sie einfach auf den Profilnamen.';
$txt['permissions_board_all'] = 'Alle bearbeiten';
$txt['permission_profile'] = 'Berechtigungsprofil';
$txt['permission_profile_desc'] = '<a href="%1$s">Berechtigungsprofil</a>, welches das Board benutzen soll.';
$txt['permission_profile_inherit'] = 'Von Elternforum erben';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'Berechtigungsprofile können den einzelnen Boards zugeordnet werden, um die Sicherheitseinstellungen einfach zu verwalten. Hier können Sie die Profile erstellen, editieren und löschen.';
$txt['permissions_profiles_change_for_board'] = 'Editiere Berechtigungsprofil für: "%1$s"';
$txt['permissions_profile_default'] = 'Standard';
$txt['permissions_profile_no_polls'] = 'Keine Umfragen';
$txt['permissions_profile_reply_only'] = 'Nur Antworten';
$txt['permissions_profile_read_only'] = 'Nur Lesen';

$txt['permissions_profile_rename'] = 'Umbenennen';
$txt['permissions_profile_edit'] = 'Profile ändern';
$txt['permissions_profile_new'] = 'Neues Profil';
$txt['permissions_profile_new_create'] = 'Erstellen';
$txt['permissions_profile_name'] = 'Profilname';
$txt['permissions_profile_used_by'] = 'Benutzt von';
$txt['permissions_profile_used_by_one'] = 'Einem Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'Keine Boards';
$txt['permissions_profile_do_edit'] = 'Bearbeiten';
$txt['permissions_profile_do_delete'] = 'Löschen';
$txt['permissions_profile_copy_from'] = 'Berechtigungen kopieren von';

$txt['permissions_includes_inherited'] = 'Vererbte Gruppen';

$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'keine';
$txt['permissions_set_permissions'] = 'Berechtigungen speichern';

$txt['permissions_advanced_options'] = 'Erweiterte Optionen';
$txt['permissions_with_selection'] = 'Mit der Auswahl';
$txt['permissions_apply_pre_defined'] = 'Definiertes Berechtigungsprofil verwenden';
$txt['permissions_select_pre_defined'] = 'Wähle ein vordefiniertes Profil';
$txt['permissions_copy_from_board'] = 'Berechtigungen von diesem Board kopieren';
$txt['permissions_select_board'] = 'Wählen Sie ein Board';
$txt['permissions_like_group'] = 'Setze Berechtigung wie diese Gruppe';
$txt['permissions_select_membergroup'] = 'Wähle Mitgliedergruppe';
$txt['permissions_add'] = 'Füge Berechtigung hinzu';
$txt['permissions_remove'] = 'Lösche Berechtigung';
$txt['permissions_deny'] = 'Verbiete Berechtigung';
$txt['permissions_select_permission'] = 'Wählen Sie eine Berechtigung';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Sie können nur eine Aktion zum editieren der Berechtigung wählen';
$txt['permissions_no_action'] = 'Keine Aktion ausgewählt';
$txt['permissions_deny_dangerous'] = 'Sie verbieten eine oder mehrere Berechtigungen.\\nDies kann unter Umständen unvorhergesehene Folgen nach sich ziehen, wenn Sie nicht kontrolliert haben, ob ein Mitglied \\"fälschlicherweise\\" in der betreffenden Gruppe ist.\\n\\nSind Sie sicher, dass Sie fortfahren möchten?';

$txt['permissions_modify_group'] = 'Gruppe ändern';
$txt['permissions_general'] = 'Generelle Berechtigungen';
$txt['permissions_board'] = 'Globale Board Berechtigungen';
$txt['permissions_board_desc'] = 'Bitte beachten Sie, dass Änderungen am "Standard"-Profil sämtliche Boards betreffen, welche dieses Profil verwenden.';
$txt['permissions_commit'] = 'Änderungen speichern';
$txt['permissions_on'] = 'im Profil';
$txt['permissions_local_for'] = 'Lokale Berechtigungen für die Gruppe';
$txt['permissions_option_on'] = 'E';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'V';
$txt['permissions_option_desc'] = 'Für jede Berechtigung können Sie \'Erlauben\' (E), \'Nicht erlauben\' (X) oder <span style="color: red;">\'Verbieten\' (V)</span> auswählen.<br /><br />Beachten Sie: Wenn Sie eine Berechtigung verbieten, kann kein Mitglied - weder Moderator noch andere - in dieser Gruppe die betreffende Funktion nutzen.<br />Deshalb benutzen Sie diese Option mit größter Sorgfalt und nur wenn es <strong>nötig</strong> ist. \'Nicht erlauben\' verbietet nur so lange, bis es an anderer Stelle erlaubt wird.';
$txt['permissions_change_view'] = 'Ansicht wechseln';
$txt['permissions_view_simple'] = 'Einfach';
$txt['permissions_view_classic'] = 'Klassisch';

$txt['permissiongroup_general'] = 'Generell';
$txt['permissionname_view_stats'] = 'Forumstatistiken anschauen';
$txt['permissionhelp_view_stats'] = 'Die Forumstatistiken fassen alle Statistiken wie Mitgliederanzahl, täglich geschriebene Beiträge und mehrere Top 10 Statistiken zusammen. Wenn Sie diese Berechtigung aktivieren, wird der Link (\'Weitere Statistiken\') im unteren Teil des Board-Index hinzugefügt.';
$txt['permissionname_view_mlist'] = 'Mitgliederliste und Gruppen anzeigen';
$txt['permissionhelp_view_mlist'] = 'Die Mitgliederliste zeigt alle Mitglieder des Forums an. Sie kann sortiert und durchsucht werden und ist vom Board-Index und innerhalb der Statistiken verlinkt, wenn Sie dort auf die Mitgliederanzahl klicken. Sie gilt außerdem für die Gruppen-Seite, welche eine Mini-Mitgliederliste mit Benutzern dieser Gruppe darstellt.';
$txt['permissionname_who_view'] = '\'Wer ist online\' anschauen';
$txt['permissionhelp_who_view'] = '\'Wer ist online\' zeigt alle Mitglieder, die aktuell online sind und was sie gerade machen. Diese Berechtigung funktioniert nur, wenn Sie die Funktion in den \'Forumeinstellungen\' aktiviert haben. Sie können die Aktionen anschauen, wenn Sie auf den Link \'Wer ist online\' im Board-Index klicken.';
$txt['permissionname_search_posts'] = 'Nach Beiträgen und Themen suchen';
$txt['permissionhelp_search_posts'] = 'Die Berechtigung \'Suche\' erlaubt dem Benutzer alle Boards zu durchsuchen, auf die er zugreifen darf. Wenn diese Berechtigung aktiviert ist, befindet sich der \'Suchen\' Button in der Menuleiste.';
$txt['permissionname_karma_edit'] = 'Karma anderer Benutzer verändern';
$txt['permissionhelp_karma_edit'] = 'Karma ist eine Funktion, die den Beliebtheitsgrad eines Benutzers anzeigt. Um sie benutzen zu können, müssen Sie es in den \'Forumeinstellungen\' aktiviert haben. Diese Berechtigung erlaubt es einer Mitgliedergruppe eine Wertung abzugeben und steht Gästen nicht zur Verfügung.';

$txt['permissiongroup_pm'] = 'Private Mitteilungen';
$txt['permissionname_pm_read'] = 'Private Mitteilungen lesen';
$txt['permissionhelp_pm_read'] = 'Diese Berechtigung erlaubt dem Benutzer seine Privaten Mitteilungen zu lesen. Ohne diese Berechtigung kann er nicht auf diesen Bereich zugreifen.';
$txt['permissionname_pm_send'] = 'Private Mitteilungen senden';
$txt['permissionhelp_pm_send'] = 'Diese Berechtigung erlaubt dem Benutzer das Senden von Privaten Mitteilungen. Benötigt \'Private Mitteilungen lesen\'.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Kalender anschauen';
$txt['permissionhelp_calendar_view'] = 'Der Kalender zeigt für jeden Monat die Geburtstage, Ereignisse und Feiertage an. Diese Berechtigung erlaubt den Zugriff auf den Kalender, blendet den entsprechenden Button in der Menüleiste ein und zeigt im Board-Index eine Liste mit den aktuellen und kommenden Geburtstagen, Ereignissen und Feiertagen. Der Kalender muss dazu unter \'Konfiguration - Kalender\' aktiviert werden.';
$txt['permissionname_calendar_post'] = 'Ereignisse im Kalender erstellen';
$txt['permissionhelp_calendar_post'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Ereignisse können nur im Kalender erstellt werden, wenn der Benutzer die Berechtigung hat, neue Beiträge zu erstellen.';
$txt['permissionname_calendar_edit'] = 'Ereignisse editieren';
$txt['permissionhelp_calendar_edit'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Sie können editiert werden, indem man auf den kleinen Stern (*) neben dem Ereignistitel im Kalender klickt. Um sie editieren zu können, benötigt der Benutzer ausreichend Rechte zum ändern des ersten Beitrags des betreffenden Themas.';
$txt['permissionname_calendar_edit_own'] = 'Eigene Ereignisse';
$txt['permissionname_calendar_edit_any'] = 'Jedes Ereignis';

$txt['permissiongroup_maintenance'] = 'Forum Administration';
$txt['permissionname_admin_forum'] = 'Forum und Datenbank administrieren';
$txt['permissionhelp_admin_forum'] = 'Diese Berechtigung erlaubt dem Benutzer das:<ul class="normallist"><li>Ändern der Einstellungen des Forums, der Datenbank und der Themes</li><li>Verwalten von Paketen</li><li>Benutzen der Wartungsfunktionen</li><li>Anschauen der Fehler- bzw. Moderator-Protokollen</li></ul> Benutzen Sie diese Berechtigung mit Vorsicht, da sie sehr mächtig ist.';
$txt['permissionname_manage_boards'] = 'Boards und Kategorien verwalten';
$txt['permissionhelp_manage_boards'] = 'Diese Berechtigung erlaubt das Erstellen, Ändern und Löschen von Boards oder Kategorien.';
$txt['permissionname_manage_attachments'] = 'Anhänge und Benutzerbilder verwalten';
$txt['permissionhelp_manage_attachments'] = 'Diese Berechtigung erlaubt den Zugriff auf die Verwaltung der Dateianhänge, wo alle Anhänge und Benutzerbilder aufgelistet und entfernt werden können.';
$txt['permissionname_manage_smileys'] = 'Smileys und Nachrichtenicons verwalten';
$txt['permissionhelp_manage_smileys'] = 'Diese Berechtigung erlaubt den Zugriff auf die Smiley Verwaltung, wo Sie Smileys bzw. Smiley-Sets hinzufügen, ändern und löschen können. Wenn persönliche Beitragssymbole aktiviert sind, können diese ebenfalls mit dieser Berechtigung bearbeitet werden.';
$txt['permissionname_edit_news'] = 'News ändern';
$txt['permissionhelp_edit_news'] = 'Diese Berechtigung erlaubt das Ändern der News-Meldungen. Um sie zu benutzen, muss die News Funktion in den Einstellungen aktiviert sein.';
$txt['permissionname_access_mod_center'] = 'Zugriff auf Moderator-Center';
$txt['permissionhelp_access_mod_center'] = 'Diese Berechtigung erlaubt den Mitgliedern den Zugang zum Moderator-Center. Dort haben sie Zugriff auf Funktionen, die das Moderieren im Forum vereinfach, jedoch keine weiteren Moderatorberechtigungen erhalten.';

$txt['permissiongroup_member_admin'] = 'Mitglieder Administration';
$txt['permissionname_moderate_forum'] = 'Mitglieder verwalten';
$txt['permissionhelp_moderate_forum'] = 'Diese Berechtigung beinhaltet alle wichtigen Funktionen der Mitgliederverwaltung:<ul><li>Zugriff auf die Registrierungsverwaltung</li><li>Zugriff auf den Mitglieder anzeigen/löschen Bereich</li><li>erweiterte Profil Informationen, inkl. IP/Benutzer beobachten und (versteckten) Online Status</li><li>Aktivierung von Zugängen</li><li>Benachrichtigungen über Zustimmungen erhalten und aktivieren von Zugängen</li><li>immun gegen Ignorierfunktion der Privaten Mitteilungen</li><li>weitere kleine Funktionen</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Mitgliedergruppen verwalten und zuordnen';
$txt['permissionhelp_manage_membergroups'] = 'Diese Berechtigung erlaubt das Editieren von Mitgliedergruppen und zuordnen von Benutzern zu anderen Mitgliedergruppen.';
$txt['permissionname_manage_permissions'] = 'Berechtigungen verwalten';
$txt['permissionhelp_manage_permissions'] = 'Diese Berechtigung erlaubt das Ändern aller Berechtigungen einer Mitgliedergruppe bzw. eines Boards (global und lokal).';
$txt['permissionname_manage_bans'] = 'Bann-Liste verwalten';
$txt['permissionhelp_manage_bans'] = 'Diese Berechtigung erlaubt das Hinzufügen oder Löschen von Benutzernamen, IP-Adressen, Hostnamen und E-Mail-Adressen zu einer Liste von gebannten Benutzern. Sie erlaubt weiterhin das Anschauen bzw. Löschen von Protokolleinträgen der gebannten Benutzer, die probieren sich wieder einzuloggen.';
$txt['permissionname_send_mail'] = 'Newsletter versenden';
$txt['permissionhelp_send_mail'] = 'Sendet eine E-Mail oder wahlweise eine Private Mitteilung an alle Mitglieder oder an eine bestimmte Gruppe. Benötigt die Berechtigung \'Private Mitteilungen senden\'.';
$txt['permissionname_issue_warning'] = 'Verwarnung erteilen';
$txt['permissionhelp_issue_warning'] = 'Verteilt eine Warnung an Benutzer und verändert deren Verwarnungslevel. Das Verwarnungssystem muss aktiviert sein.';

$txt['permissiongroup_profile'] = 'Benutzerprofile';
$txt['permissionname_profile_view'] = 'Profil und Statistiken anschauen';
$txt['permissionhelp_profile_view'] = 'Diese Berechtigung erlaubt das Anklicken des Benutzernamens und somit das Betrachten des Profils, der Statistiken und den Beiträgen des Benutzers.';
$txt['permissionname_profile_view_own'] = 'Eigenes Profil';
$txt['permissionname_profile_view_any'] = 'Alle Profile';
$txt['permissionname_profile_identity'] = 'Benutzerkonto-Einstellungen';
$txt['permissionhelp_profile_identity'] = 'Benutzerkonto-Einstellungen sind die einfachsten Einstellungen im Profil des Benutzers wie Passwort, E-Mail, Mitgliedergruppe und bevorzugte Sprache.';
$txt['permissionname_profile_identity_own'] = 'Eigenes Profil';
$txt['permissionname_profile_identity_any'] = 'Alle Profile';
$txt['permissionname_profile_extra'] = 'Erweiterte Profileinstellungen';
$txt['permissionhelp_profile_extra'] = 'Erweiterte Profileinstellungen inklusive Optionen für das Benutzerbild, Theme-Einstellungen, Benachrichtigungen und Private Mitteilungen.';
$txt['permissionname_profile_extra_own'] = 'Eigenes Profil';
$txt['permissionname_profile_extra_any'] = 'Alle Profile';
$txt['permissionname_profile_title'] = 'Persönlichen Titel ändern';
$txt['permissionhelp_profile_title'] = 'Der persönliche Titel wird im Beitrag unterhalb des Namens angezeigt (wenn für diesen Benutzer vorhanden).';
$txt['permissionname_profile_title_own'] = 'Eigenes Profil';
$txt['permissionname_profile_title_any'] = 'Alle Profile';
$txt['permissionname_profile_remove'] = 'Benutzerkonto löschen';
$txt['permissionhelp_profile_remove'] = 'Diese Berechtigung erlaubt dem Benutzer sein Benutzerkonto zu löschen, wenn sie auf \'Eigenes Profil\' gestellt ist.';
$txt['permissionname_profile_remove_own'] = 'Eigenes Benutzerkonto';
$txt['permissionname_profile_remove_any'] = 'Jedes Benutzerkonto';
$txt['permissionname_profile_server_avatar'] = 'Wählen Sie ein Benutzerbild vom Server';
$txt['permissionhelp_profile_server_avatar'] = 'Aktivieren Sie die Option, um den Benutzern die Möglichkeit zu geben, ein auf diesem Server gespeichertes Benutzerbild auszuwählen.';
$txt['permissionname_profile_upload_avatar'] = 'Benutzerbild auf diesen Server hochladen';
$txt['permissionhelp_profile_upload_avatar'] = 'Erlaubt den Benutzern das Hochladen ihrer eigenen Benutzerbilder auf diesen Server.';
$txt['permissionname_profile_remote_avatar'] = 'Externes Benutzerbild wählen';
$txt['permissionhelp_profile_remote_avatar'] = 'Externe Benutzerbilder können die Geschwindigkeit des Forums herabsetzen, so dass es sinnvoll ist, bestimmten Gruppen dieses Recht zu entziehen. ';

$txt['permissiongroup_general_board'] = 'Generell';
$txt['permissionname_moderate_board'] = 'Board moderieren';
$txt['permissionhelp_moderate_board'] = 'Diese Berechtigung gibt dem Moderator weitere Funktionen, die ihn zu einem richtigen Moderator zu machen. Das umfasst die Möglichkeit auf geschlossene Themen zu antworten, die Ablaufzeit von Umfragen zu ändern und die Umfragenergebnisse jederzeit einzusehen.';

$txt['permissiongroup_topic'] = 'Themen';
$txt['permissionname_post_new'] = 'Neues Thema erstellen';
$txt['permissionhelp_post_new'] = 'Diese Berechtigung erlaubt dem Benutzer neue Themen zu starten. Sie erlaubt jedoch nicht, auf Themen zu antworten.';
$txt['permissionname_merge_any'] = 'Themen zusammenführen';
$txt['permissionhelp_merge_any'] = 'Führt zwei oder mehr Themen zusammen. Die Reihenfolge der Beiträge basiert auf der Zeit, wann diese geschrieben worden sind, d.h. der älteste Beitrag ist am Schluss des neuen Themas. Der Benutzer kann nur Themen in Boards zusammenführen, zu denen er auch Zugriff hat. Um gleichzeitig mehrere Themen zusammen zu führen, muss die Funktion Schnellmoderation im Profil aktiviert sein.';
$txt['permissionname_split_any'] = 'Thema teilen';
$txt['permissionhelp_split_any'] = 'Teilt ein Thema in zwei einzelne Themen.';
$txt['permissionname_send_topic'] = 'Thema an ein Freund senden';
$txt['permissionhelp_send_topic'] = 'Diese Berechtigung erlaubt es dem Benutzer, einem Freund einen Hinweis auf ein Thema per E-Mail zu senden. Dazu muss er die E-Mail-Adresse eingeben und kann einen Nachricht dazu verfassen.';
$txt['permissionname_make_sticky'] = 'Fixiertes Thema erstellen';
$txt['permissionhelp_make_sticky'] = 'Fixierte Themen werden immer als erste Themen in einem Board angezeigt. Sie sind nützlich für Ankündigungen oder wichtige Hinweise.';
$txt['permissionname_move'] = 'Thema verschieben';
$txt['permissionhelp_move'] = 'Verschiebt ein Thema von einem Board in ein anderes. Die Benutzer können nur die Boards als Ziel wählen, auf welche sie Zugriff haben.';
$txt['permissionname_move_own'] = 'Eigenes Thema';
$txt['permissionname_move_any'] = 'Jedes Thema';
$txt['permissionname_lock'] = 'Themen schließen';
$txt['permissionhelp_lock'] = 'Diese Berechtigung erlaubt dem Benutzer das Schließen von Themen. Danach kann kein Benutzer mehr auf das Thema antworten, außer Benutzer mit \'Moderator\' Rechten.';
$txt['permissionname_lock_own'] = 'Eigene Themen';
$txt['permissionname_lock_any'] = 'Alle Themen';
$txt['permissionname_remove'] = 'Themen löschen';
$txt['permissionhelp_remove'] = 'Diese Berechtigung erlaubt das Löschen ganzer Themen. Bitte beachten Sie, dass mit dieser Funktion keine einzelnen Beiträge gelöscht werden dürfen!';
$txt['permissionname_remove_own'] = 'Eigene Themen';
$txt['permissionname_remove_any'] = 'Alle Themen';
$txt['permissionname_post_reply'] = 'Antworten auf Themen schreiben';
$txt['permissionhelp_post_reply'] = 'Diese Berechtigung erlaubt das Antworten auf Themen.';
$txt['permissionname_post_reply_own'] = 'Eigene Themen';
$txt['permissionname_post_reply_any'] = 'Alle Themen';
$txt['permissionname_modify_replies'] = 'Antworten auf eigene Themen ändern';
$txt['permissionhelp_modify_replies'] = 'Diese Berechtigung erlaubt das nachträgliche Ändern aller Beiträge in einem vom ihm erstellten Themen.';
$txt['permissionname_delete_replies'] = 'Antworten auf eigene Themen löschen';
$txt['permissionhelp_delete_replies'] = 'Diese Berechtigung erlaubt es dem Benutzer, alle Antworten auf ein von ihm erstelltes Thema zu löschen.';
$txt['permissionname_announce_topic'] = 'Thema ankündigen';
$txt['permissionhelp_announce_topic'] = 'Diese Berechtigung erlaubt das Senden einer Ankündigungs-E-Mail über ein Thema an alle Mitglieder oder an bestimmte Mitgliedergruppen.';

$txt['permissiongroup_post'] = 'Beiträge';
$txt['permissionname_delete'] = 'Beiträge löschen';
$txt['permissionhelp_delete'] = 'Erlaubt dem Benutzer Beiträge zu löschen, erlaubt jedoch nicht, den ersten Beitrag eines Themas zu löschen.';
$txt['permissionname_delete_own'] = 'Eigener Beitrag';
$txt['permissionname_delete_any'] = 'Alle Beiträge';
$txt['permissionname_modify'] = 'Beiträge editieren';
$txt['permissionhelp_modify'] = 'Erlaubt das Editieren von Beiträgen';
$txt['permissionname_modify_own'] = 'Eigener Beitrag';
$txt['permissionname_modify_any'] = 'Alle Beiträge';
$txt['permissionname_report_any'] = 'Beiträge dem Moderator melden';
$txt['permissionhelp_report_any'] = 'Diese Berechtigung fügt einen Link zu jedem Beitrag hinzu, welcher es dem Benutzer erlaubt, diesen einem Moderator zu melden. Bei einer Meldung erhalten alle Moderatoren des Boards diese Nachricht mit einer Beschreibung des Benutzers und dem Link zum entsprechenden Beitrag.';

$txt['permissiongroup_poll'] = 'Umfragen';
$txt['permissionname_poll_view'] = 'Umfrage anschauen';
$txt['permissionhelp_poll_view'] = 'Diese Berechtigung erlaubt dem Benutzer das Anschauen einer Umfrage. Ohne diese Berechtigung sieht der Benutzer nur das Thema ohne die Umfrage.';
$txt['permissionname_poll_vote'] = 'Abstimmen in Umfragen';
$txt['permissionhelp_poll_vote'] = 'Diese Berechtigung erlaubt einem registrierten Benutzer das Abgeben einer Stimme bei Umfragen. Die Funktion gilt nicht für Gäste.';
$txt['permissionname_poll_post'] = 'Umfragen erstellen';
$txt['permissionhelp_poll_post'] = 'Diese Berechtigung erlaubt dem Benutzer eine neue Umfrage zu erstellen. Er benötigt aber zusätzlich die "neue Themen erstellen" Berechtigung.';
$txt['permissionname_poll_add'] = 'Umfragen zu Themen hinzufügen';
$txt['permissionhelp_poll_add'] = 'Fügt einen Umfrage zu einem existierenden Thema hinzu. Diese Berechtigung erfordert die Möglichkeit, den ersten Beitrag eines Themas zu ändern.';
$txt['permissionname_poll_add_own'] = 'Eigene Themen';
$txt['permissionname_poll_add_any'] = 'Alle Themen';
$txt['permissionname_poll_edit'] = 'Umfragen editieren';
$txt['permissionhelp_poll_edit'] = 'Diese Berechtigung erlaubt die Änderung einer bestehenden Umfrage sowie das Zurücksetzen der Stimmen auf Null. Um die Anzahl der max. abzugebenen Stimmen und die Laufzeit der Umfrage zu ändern, muss der Benutzer \'Moderator\' Rechte besitzen.';
$txt['permissionname_poll_edit_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_edit_any'] = 'Alle Umfragen';
$txt['permissionname_poll_lock'] = 'Umfragen schließen';
$txt['permissionhelp_poll_lock'] = 'Verhindert das weitere Abstimmen in der betreffenden Umfrage.';
$txt['permissionname_poll_lock_own'] = 'Eigene Umfragen';
$txt['permissionname_poll_lock_any'] = 'Alle Umfragen';
$txt['permissionname_poll_remove'] = 'Umfragen löschen';
$txt['permissionhelp_poll_remove'] = 'Diese Berechtigung erlaubt das Löschen einer Umfrage.';
$txt['permissionname_poll_remove_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_remove_any'] = 'Alle Umfragen';

$txt['permissiongroup_approval'] = 'Beitragsmoderation';
$txt['permissionname_approve_posts'] = 'Ausstehende Moderationspunkte genehmigen';
$txt['permissionhelp_approve_posts'] = 'Diese Berechtigung erlaubt dem Benutzer alle noch nicht genehmigten Moderationspunkte im Forum zu genehmigen.';
$txt['permissionname_post_unapproved_replies'] = 'Zu genehmigende Antwort schreiben';
$txt['permissionhelp_post_unapproved_replies'] = 'Diese Berechtigung erlaubt dem Benutzer eine Antwort zu schreiben, die nicht angezeigt wird, bevor ein Moderator sie genehmigt hat.';
$txt['permissionname_post_unapproved_replies_own'] = 'Eigene Themen';
$txt['permissionname_post_unapproved_replies_any'] = 'Alle Themen';
$txt['permissionname_post_unapproved_topics'] = 'Zu genehmigendes Thema erstellen';
$txt['permissionhelp_post_unapproved_topics'] = 'Diese Berechtigung erlaubt dem Benutzer ein Thema zu erstellen, das nicht angezeigt wird, bevor ein Moderator es genehmigt hat.';
$txt['permissionname_post_unapproved_attachments'] = 'Zu genehmigenden Dateianhang hinzufügen';
$txt['permissionhelp_post_unapproved_attachments'] = 'Diese Berechtigung erlaubt dem Benutzer einen Dateianhang hinzuzufügen. Dieser wird erst für alle Mitglieder angezeigt wenn ein Moderator ihn genehmigt hat.';

$txt['permissiongroup_notification'] = 'Benachrichtigungen';
$txt['permissionname_mark_any_notify'] = 'Benachrichtigung bei neuen Antworten';
$txt['permissionhelp_mark_any_notify'] = 'Diese Berechtigung erlaubt das Einstellen von Benachrichtigungen für gewünschte Themen.';
$txt['permissionname_mark_notify'] = 'Benachrichtigung bei neuen Themen';
$txt['permissionhelp_mark_notify'] = 'Diese Berechtigung erlaubt das Aktivieren von Benachrichtigungen bei Boards, sobald ein neues Thema in diesem geschrieben wurde.';

$txt['permissiongroup_attachment'] = 'Dateianhänge';
$txt['permissionname_view_attachments'] = 'Dateianhänge anschauen';
$txt['permissionhelp_view_attachments'] = 'Dateianhänge sind Dateien, die an einen Beitrag angefügt worden sind. Diese Funktion kann im Bereich \'Dateien verwalten\' aktiviert und eingestellt werden. Dateianhänge sind nicht direkt anwählbar und können für die Benutzer blockiert werden, die diese Berechtigung nicht besitzen.';
$txt['permissionname_post_attachment'] = 'Dateianhänge erstellen';
$txt['permissionhelp_post_attachment'] = 'Dateianhänge sind Dateien, die an einen Beitrag angefügt worden sind. Ein Beitag kann mehrere Dateianhänge enthalten.';

$txt['permissiongroup_simple_view_basic_info'] = 'Grundlegende Funktionen benutzen';
$txt['permissiongroup_simple_use_pm_system'] = 'Mitglieder mit Privaten Mitteilungen kontaktieren';
$txt['permissiongroup_simple_post_calendar'] = 'Ereignisse im Kalender erstellen';
$txt['permissiongroup_simple_edit_profile'] = 'Profil bearbeiten';
$txt['permissiongroup_simple_delete_account'] = 'Profil löschen';
$txt['permissiongroup_simple_use_avatar'] = 'Benutzerbild auswählen oder hochladen';
$txt['permissiongroup_simple_moderate_general'] = 'Gesamtes Forum moderieren';
$txt['permissiongroup_simple_administrate'] = 'Administrative Aufgaben ausführen';

$txt['permissionname_simple_calendar_edit_own'] = 'Eigene Kalenderereignisse editieren';
$txt['permissionname_simple_calendar_edit_any'] = 'Alle Kalenderereignisse editieren';
$txt['permissionname_simple_profile_view_own'] = 'Eigenes Profil anschauen';
$txt['permissionname_simple_profile_view_any'] = 'Alle Profile anschauen';
$txt['permissionname_simple_profile_identity_own'] = 'Eigenes Benutzerkonto editieren';
$txt['permissionname_simple_profile_identity_any'] = 'Alle Benutzerkonten editieren';
$txt['permissionname_simple_profile_extra_own'] = 'Eigene erweiterte Einstellungen editieren';
$txt['permissionname_simple_profile_extra_any'] = 'Alle erweiterten Einstellungen editieren';
$txt['permissionname_simple_profile_title_own'] = 'Eigenen persönlichen Titel editieren';
$txt['permissionname_simple_profile_title_any'] = 'Alle persönlichen Titel editieren';
$txt['permissionname_simple_profile_remove_own'] = 'Eigenes Profil löschen';
$txt['permissionname_simple_profile_remove_any'] = 'Alle Profile löschen';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Themen und Antworten ohne Genehmigung erstellen';
$txt['permissiongroup_simple_make_posts'] = 'Themen und Antworten erstellen';
$txt['permissiongroup_simple_post_polls'] = 'Neue Umfragen erstellen';
$txt['permissiongroup_simple_participate'] = 'Erweiterten Inhalt anschauen';
$txt['permissiongroup_simple_modify'] = 'Eigene Beiträge editieren';
$txt['permissiongroup_simple_notification'] = 'Benachrichtigungen anfordern';
$txt['permissiongroup_simple_attach'] = 'Dateianhänge erstellen';
$txt['permissiongroup_simple_moderate'] = 'Gesamtes Forum moderieren';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Antworten ohne Genehmigung zu selbst erstellten Themen schreiben';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Antworten ohne Genehmigung zu allen Themen schreiben';
$txt['permissionname_simple_post_reply_own'] = 'Antworten zu selbst erstellten Themen schreiben';
$txt['permissionname_simple_post_reply_any'] = 'Antworten zu allen Themen schreiben';
$txt['permissionname_simple_move_own'] = 'Eigene Themen verschieben';
$txt['permissionname_simple_move_any'] = 'Alle Themen verschieben';
$txt['permissionname_simple_lock_own'] = 'Eigene Themen schließen';
$txt['permissionname_simple_lock_any'] = 'Alle Themen schließen';
$txt['permissionname_simple_remove_own'] = 'Eigene Themen löschen';
$txt['permissionname_simple_remove_any'] = 'Alle Themen löschen';
$txt['permissionname_simple_delete_own'] = 'Eigene Beiträge löschen';
$txt['permissionname_simple_delete_any'] = 'Alle Beiträge löschen';
$txt['permissionname_simple_modify_own'] = 'Eigene Beiträge editieren';
$txt['permissionname_simple_modify_any'] = 'Alle Beiträge editieren';
$txt['permissionname_simple_poll_add_own'] = 'Umfrage zu selbst erstellten Themen hinzufügen';
$txt['permissionname_simple_poll_add_any'] = 'Umfrage zu allen Themen hinzufügen';
$txt['permissionname_simple_poll_edit_own'] = 'Eigene Umfrage editieren';
$txt['permissionname_simple_poll_edit_any'] = 'Alle Umfagen editieren';
$txt['permissionname_simple_poll_lock_own'] = 'Eigene Umfragen schließen';
$txt['permissionname_simple_poll_lock_any'] = 'Alle Umfragen schließen';
$txt['permissionname_simple_poll_remove_own'] = 'Eigene Umfragen löschen';
$txt['permissionname_simple_poll_remove_any'] = 'Alle Umfragen löschen';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Einstellungen';
$txt['groups_manage_permissions'] = 'Gruppen, die Berechtigungen verwalten dürfen';
$txt['permission_settings_submit'] = 'Speichern';
$txt['permission_settings_enable_deny'] = 'Verbieten von Berechtigungen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Das Deaktivieren dieser Option ändert die \\\'Verboten\\\'-Berechtigung in \\\'Nicht erlauben\\\'.';
$txt['permission_by_board_desc'] = 'Hier können Sie einstellen, ob ein Board die globalen Berechtigungen benutzt oder ein eigenes Schema verwendet. Sollten Sie lokale Berechtigungen verwenden, können Sie im betreffenden Board für jede Mitgliedergruppe individuelle Berechtigungen angeben.';
$txt['permission_settings_desc'] = 'Wählen Sie hier, wer die Erlaubnis zum ändern der Berechtigungen hat und wie komplex das Berechtigungssystem sein soll.';
$txt['permission_settings_enable_postgroups'] = 'Berechtigungen für beitragsbasierende Gruppen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Das Deaktivieren dieser Option entfernt die gesetzten Berechtigungen der beitragsbasierenden Gruppen.';

$txt['permissions_post_moderation_desc'] = 'Hier können Sie bestimmen, welche Gruppen Ihre Beiträge in bestimmten Berechtigungsprofilen genehmigen lassen müssen.';
$txt['permissions_post_moderation_deny_note'] = 'Sollten Sie die erweiterten Berechtigungen aktiviert haben, können Sie von dieser Seite aus keine Berechtigung "Verbieten (V)". Bitte editieren Sie die betreffende Berechtigung direkt, um sie zu verbieten.';
$txt['permissions_post_moderation_select'] = 'Profil auswählen';
$txt['permissions_post_moderation_new_topics'] = 'Neue Themen';
$txt['permissions_post_moderation_replies_own'] = 'Eigene Antworten';
$txt['permissions_post_moderation_replies_any'] = 'Alle Antworten';
$txt['permissions_post_moderation_attachments'] = 'Dateianhänge';
$txt['permissions_post_moderation_legend'] = 'Legende';
$txt['permissions_post_moderation_allow'] = 'Kann erstellen';
$txt['permissions_post_moderation_moderate'] = 'Kann mit Genehmigung erstellen';
$txt['permissions_post_moderation_disallow'] = 'Kann nicht erstellen';
$txt['permissions_post_moderation_group'] = 'Gruppe';

$txt['auto_approve_topics'] = 'Themen automatisch genehmigen';
$txt['auto_approve_replies'] = 'Antworten automatisch genehmigen';
$txt['auto_approve_attachments'] = 'Dateianhänge automatisch genehmigen';

?>