<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Gruppen';
$txt['viewing_groups'] = 'Mitgliedergruppen anzeigen';

$txt['membergroups_title'] = 'Mitgliedergruppen editieren';
$txt['membergroups_description'] = 'Mitgliedergruppen sind Gruppen von Benutzern, welche die gleichen Berechtigungen, Zugriffe und das gleiche Erscheinungsbild im Forum haben. Manche Gruppen basieren auf der Zahl der Beiträge. Sie können Mitglieder zu einer Gruppe hinzufügen, indem Sie ihr Profil öffnen und die Benutzerkonto-Einstellungen ändern.';
$txt['membergroups_modify'] = 'ändern';

$txt['membergroups_add_group'] = 'Gruppe hinzufügen';
$txt['membergroups_regular'] = 'Reguläre Gruppen';
$txt['membergroups_post'] = 'Beitragsbasierende Gruppen';

$txt['membergroups_group_name'] = 'Name der Mitgliedergruppe';
$txt['membergroups_new_board'] = 'Sichtbare Boards';
$txt['membergroups_new_board_desc'] = 'Boards, welche die Mitgliedergruppe sehen kann.';
$txt['membergroups_new_board_post_groups'] = '<em>Achtung: Beitragsabhängige Gruppen brauchen normalerweise keinen Zugriff auf die betreffenden Boards, da die Mitglieder durch ihre speziellen Benutzergruppen den Zugriff erhalten.</em>';
$txt['membergroups_new_as_inherit'] = 'Vererben von';
$txt['membergroups_new_as_type'] = 'Vom Typ';
$txt['membergroups_new_as_copy'] = 'Basierend auf';
$txt['membergroups_new_copy_none'] = '(keine)';
$txt['membergroups_can_edit_later'] = 'Sie können diese später verändern.';

$txt['membergroups_edit_group'] = 'Gruppe ändern';
$txt['membergroups_edit_name'] = 'Name der Gruppe';
$txt['membergroups_edit_inherit_permissions'] = 'Vererbte Berechtigungen';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Wählen sie "Nein" um der Gruppe ein eigenes Berechtigungprofil zuzuweisen.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Nein - benutze eigene Berechtigungen';
$txt['membergroups_edit_inherit_permissions_from'] = 'Vererbt von';
$txt['membergroups_edit_hidden'] = 'Sichtbarkeit';
$txt['membergroups_edit_hidden_no'] = 'Sichtbar';
$txt['membergroups_edit_hidden_boardindex'] = 'Sichtbar - Außer im Gruppenschlüssel';
$txt['membergroups_edit_hidden_all'] = 'Unsichtbar';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Sind Sie sicher, dass diese Gruppe nicht als primäre Gruppe zugeordnet werden kann?\\n\\nWenn Sie die Einstellung tätigen, kann diese Gruppe nur noch als zusätzliche Mitgliedergruppe zugewiesen werden. Bei alle Benutzerkonten, die sie als primäre Gruppe eingestellt haben, wird sie zu einer zusaätzliche Gruppe geändert.';
$txt['membergroups_edit_desc'] = 'Gruppenbeschreibung';
$txt['membergroups_edit_group_type'] = 'Gruppen-Typ';
$txt['membergroups_edit_select_group_type'] = 'Gruppen-Typ auswählen';
$txt['membergroups_group_type_private'] = 'Privat <span class="smalltext">(Mitgliedschaft muss zugewiesen werden)</span>';
$txt['membergroups_group_type_protected'] = 'Geschützt <span class="smalltext">(Nur Administratoren können verwalten und zuweisen)</span>';
$txt['membergroups_group_type_request'] = 'Anforderbar <span class="smalltext">(Benutzer muss die Mitgliedschaft anfordern)</span>';
$txt['membergroups_group_type_free'] = 'Frei <span class="smalltext">(Benutzer kann der Gruppe selbstständig beitreten oder sie verlassen)</span>';
$txt['membergroups_group_type_post'] = 'Beitragsabhängig <span class="smalltext">(Mitgliedschaft basiert auf der Beitragszahl)</span>';
$txt['membergroups_min_posts'] = 'Benötigte Beiträge';
$txt['membergroups_online_color'] = 'Farbe in Onlineliste';
$txt['membergroups_star_count'] = 'Anzahl der Sterne';
$txt['membergroups_star_image'] = 'Name des Sternenbildes';
$txt['membergroups_star_image_note'] = 'Sie können \'$language\' für die Benutzersprache nehmen';
$txt['membergroups_max_messages'] = 'Max. Private Mitteilungen';
$txt['membergroups_max_messages_note'] = '0 = unlimitiert';
$txt['membergroups_edit_save'] = 'Speichern';
$txt['membergroups_delete'] = 'Löschen';
$txt['membergroups_confirm_delete'] = 'Sind Sie sicher, dass Sie diese Gruppe löschen möchten?';

$txt['membergroups_members_title'] = 'Alle Mitglieder der Gruppe anzeigen';
$txt['membergroups_members_group_members'] = 'Gruppenmitglieder';
$txt['membergroups_members_no_members'] = 'Diese Gruppe ist momentan leer';
$txt['membergroups_members_add_title'] = 'Füge einen Benutzer zu dieser Gruppe hinzu';
$txt['membergroups_members_add_desc'] = 'Liste der hinzu zufügenden Benutzer';
$txt['membergroups_members_add'] = 'Mitglieder hinzufügen';
$txt['membergroups_members_remove'] = 'Aus Gruppe entfernen';
$txt['membergroups_members_last_active'] = 'Letzter Besuch';
$txt['membergroups_members_additional_only'] = 'Nur als weitere Gruppen hinzufügen.';
$txt['membergroups_members_group_moderators'] = 'Gruppenmoderatoren';
$txt['membergroups_members_description'] = 'Beschreibung';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Sind Sie sicher, dass Sie sich selbst von der Gruppe der Administratoren entfernen wollen?';

$txt['membergroups_postgroups'] = 'Beitragsgruppen';
$txt['membergroups_settings'] = 'Einstellungen';
$txt['groups_manage_membergroups'] = 'Gruppen, die Mitgliedergruppen verändern dürfen';
$txt['membergroups_select_permission_type'] = 'Wählen Sie das Berechtigungsprofil';
$txt['membergroups_images_url'] = '{Theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Boards anzeigen';
$txt['membergroups_members_top'] = 'Mitglieder';
$txt['membergroups_name'] = 'Name';
$txt['membergroups_stars'] = 'Sterne';

$txt['admin_browse_approve'] = 'Mitglieder, deren Benutzerkonto eine Genehmigung erfordert';
$txt['admin_browse_approve_desc'] = 'Auflistung der Mitglieder, welche eine Genehmigung für ihr Benutzerkonto benötigen.';
$txt['admin_browse_activate'] = 'Mitglieder, deren Benutzerkonto aktiviert werden muss';
$txt['admin_browse_activate_desc'] = 'Auflistung aller Mitglieder, welche Ihr Benutzerkonto noch nicht aktiviert haben.';
$txt['admin_browse_awaiting_approval'] = 'Erwartete Genehmigungen (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Erwartete Aktivierungen (%1$d)';

$txt['admin_browse_username'] = 'Benutzername';
$txt['admin_browse_email'] = 'E-Mail-Adresse';
$txt['admin_browse_ip'] = 'IP-Adresse';
$txt['admin_browse_registered'] = 'Registriert';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Mit Ausgewählten';
$txt['admin_browse_no_members_approval'] = 'Keine Mitglieder erwarten eine Genehmigung.';
$txt['admin_browse_no_members_activate'] = 'Keine Mitglieder müssen Ihr Benutzerkonto noch aktivieren';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alle ausgewählten Mitglieder?';
$txt['admin_browse_outstanding_warn'] = 'alle betroffenen Mitglieder?';
$txt['admin_browse_w_approve'] = 'Stimme zu';
$txt['admin_browse_w_activate'] = 'Aktiviere';
$txt['admin_browse_w_delete'] = 'Lösche';
$txt['admin_browse_w_reject'] = 'Ablehnen';
$txt['admin_browse_w_remind'] = 'Erinnere';
$txt['admin_browse_w_approve_deletion'] = 'Genehmige (Benutzerkonto löschen)';
$txt['admin_browse_w_email'] = 'und sende E-Mail';
$txt['admin_browse_w_approve_require_activate'] = 'Genehmige und erwarte Aktivierung';

$txt['admin_browse_filter_by'] = 'Filtern nach';
$txt['admin_browse_filter_show'] = 'Anzeigen';
$txt['admin_browse_filter_type_0'] = 'Neuen, nicht aktivierten Benutzerkonten';
$txt['admin_browse_filter_type_2'] = 'Nicht aktivierten E-Mail-Adressen';
$txt['admin_browse_filter_type_3'] = 'Neuen, nicht genehmigten Benutzerkonten';
$txt['admin_browse_filter_type_4'] = 'Nicht genehmigten, gelöschten Benutzerkonten';
$txt['admin_browse_filter_type_5'] = 'Nicht genehmigten, altersbeschränkten Benutzerkonten';

$txt['admin_browse_outstanding'] = 'Aussenstehende Mitglieder';
$txt['admin_browse_outstanding_days_1'] = 'Alle Mitglieder, welche länger registriert sind wie';
$txt['admin_browse_outstanding_days_2'] = 'Tage';
$txt['admin_browse_outstanding_perform'] = 'Folgende Aktionen ausführen';
$txt['admin_browse_outstanding_go'] = 'Ausführen';

$txt['check_for_duplicate'] = 'Nach Duplikaten suchen';
$txt['dont_check_for_duplicate'] = 'Nicht nach Duplikaten suchen';
$txt['duplicates'] = 'Duplikate';

$txt['not_activated'] = 'Deaktiviert';

?>