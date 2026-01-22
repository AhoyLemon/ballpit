<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Groepen';
$txt['viewing_groups'] = 'Ledengroepen bekijken';

$txt['membergroups_title'] = 'Ledengroepen beheren';
$txt['membergroups_description'] = 'Ledengroepen zijn groepen van leden die dezelfde permissies hebben. Sommige ledengroepen zijn gebaseerd op het aantal geplaatste berichten. Je kunt de leden aan &eacute;&eacute;n of meerdere groepen toewijzen door hun profiel te selecteren en de account instellingen aan te passen.';
$txt['membergroups_modify'] = 'Aanpassen';

$txt['membergroups_add_group'] = 'Ledengroep toevoegen';
$txt['membergroups_regular'] = 'Reguliere ledengroepen';
$txt['membergroups_post'] = 'Bericht-gerelateerde ledengroepen';

$txt['membergroups_group_name'] = 'Naam ledengroep';
$txt['membergroups_new_board'] = 'Zichtbare boards';
$txt['membergroups_new_board_desc'] = 'Boards die de ledengroep kan zien';
$txt['membergroups_new_board_post_groups'] = '<em>Let op: normaal gesproken hebben bericht-gerelateerde groepen geen toegang nodig omdat de groep waarin ze zitten hen toegang zal geven.</em>';
$txt['membergroups_new_as_inherit'] = 'erven van';
$txt['membergroups_new_as_type'] = 'aan de hand van type';
$txt['membergroups_new_as_copy'] = 'gebaseerd op';
$txt['membergroups_new_copy_none'] = '(geen)';
$txt['membergroups_can_edit_later'] = 'Je kunt deze later bewerken.';

$txt['membergroups_edit_group'] = 'Bewerk ledengroep';
$txt['membergroups_edit_name'] = 'Naam van de ledengroep';
$txt['membergroups_edit_inherit_permissions'] = 'Erf permissies';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Selecteer &quot;Niet&quot; om permissies voor deze groep an sich in te stellen.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Niet: gebruik unieke permissies';
$txt['membergroups_edit_inherit_permissions_from'] = 'Erven van';
$txt['membergroups_edit_hidden'] = 'Zichtbaarheid';
$txt['membergroups_edit_hidden_no'] = 'Zichtbaar';
$txt['membergroups_edit_hidden_boardindex'] = 'Zichtbaar, met uitzondering van groepssleutel';
$txt['membergroups_edit_hidden_all'] = 'Onzichtbaar';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Weet je zeker dat je niet toe wilt staan dat leden deze groep als primaire groep ingesteld krijgen?\\n\\nDit zal tot gevolg hebben dat de groep alleen als additionele groep toegekend zal kunnen worden, en dat leden die hem nu als primaire groep ingesteld hebben, hem als additionele groep krijgen.';
$txt['membergroups_edit_desc'] = 'Groepsomschrijving';
$txt['membergroups_edit_group_type'] = 'Groepsoort';
$txt['membergroups_edit_select_group_type'] = 'Selecteer groepsoort';
$txt['membergroups_group_type_private'] = 'Priv&eacute; <span class="smalltext">(lidmaatschap moet toegekend worden)</span>';
$txt['membergroups_group_type_protected'] = 'Beschermd <span class="smalltext">(Alleen beheerders kunnen beheren en toewijzen)</span>';
$txt['membergroups_group_type_request'] = 'Aanvraagbaar <span class="smalltext">(leden kunnen lidmaatschap aanvragen)</span>';
$txt['membergroups_group_type_free'] = 'Vrij <span class="smalltext">(leden kunnen toe- en aftreden naar believen)</span>';
$txt['membergroups_group_type_post'] = 'Posts-gebaseerd <span class="smalltext">(lidmaatschap gebaseerd op aantal berichten)</span>';
$txt['membergroups_min_posts'] = 'Benodigd aantal berichten';
$txt['membergroups_online_color'] = 'Kleur in de online lijst';
$txt['membergroups_star_count'] = 'Aantal sterafbeeldingen';
$txt['membergroups_star_image'] = 'Afbeelding bestandsnaam';
$txt['membergroups_star_image_note'] = 'Je kunt $language gebruiken voor de taal van de gebruiker.';
$txt['membergroups_max_messages'] = 'Maximum aantal persoonlijke berichten';
$txt['membergroups_max_messages_note'] = '0 = onbeperkt';
$txt['membergroups_edit_save'] = 'Opslaan';
$txt['membergroups_delete'] = 'Verwijder';
$txt['membergroups_confirm_delete'] = 'Weet je zeker dat je deze ledengroep wilt verwijderen?!';

$txt['membergroups_members_title'] = 'Groep bekijken';
$txt['membergroups_members_group_members'] = 'Groepsleden';
$txt['membergroups_members_no_members'] = 'Deze groep is momenteel leeg';
$txt['membergroups_members_add_title'] = 'Voeg een lid toe aan deze groep';
$txt['membergroups_members_add_desc'] = 'Lijst van leden om toe te voegen';
$txt['membergroups_members_add'] = 'Voeg leden toe';
$txt['membergroups_members_remove'] = 'Verwijder uit ledengroep';
$txt['membergroups_members_last_active'] = 'Laatst actief';
$txt['membergroups_members_additional_only'] = 'Voeg alleen als additionele groep toe.';
$txt['membergroups_members_group_moderators'] = 'Groepsbeheerders';
$txt['membergroups_members_description'] = 'Omschrijving';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Weet je zeker dat je jezelf van de beheerdersgroep wilt verwijderen?';

$txt['membergroups_postgroups'] = 'Bericht-gerelateerde groepen';
$txt['membergroups_settings'] = 'Ledengroepinstellingen';
$txt['groups_manage_membergroups'] = 'Ledengroepen die ledengroepen mogen aanpassen';
$txt['membergroups_select_permission_type'] = 'Selecteer permissieprofiel';
$txt['membergroups_images_url'] = '{thema URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Toon boards';
$txt['membergroups_members_top'] = 'Leden';
$txt['membergroups_name'] = 'Naam';
$txt['membergroups_stars'] = 'Sterren';

$txt['admin_browse_approve'] = 'Nieuwe leden die op goedkeuring wachten';
$txt['admin_browse_approve_desc'] = 'Vanaf hier kun je de nieuwe aanmeldingen beheren die op goedkeuring wachten.';
$txt['admin_browse_activate'] = 'Aanmeldingen die op activering wachten';
$txt['admin_browse_activate_desc'] = 'Dit scherm toont alle leden die nog steeds hun account niet hebben geactiveerd.';
$txt['admin_browse_awaiting_approval'] = 'Wachtend op goedkeuring (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Wachtend op activering (%1$d)';

$txt['admin_browse_username'] = 'Gebruikersnaam';
$txt['admin_browse_email'] = 'E-mailadres';
$txt['admin_browse_ip'] = 'IP-adres';
$txt['admin_browse_registered'] = 'Geregistreerd';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Met geselecteerde';
$txt['admin_browse_no_members_approval'] = 'Er zijn geen leden die wachten op goedkeuring.';
$txt['admin_browse_no_members_activate'] = 'Er zijn geen leden die hun account nog niet geactiveerd hebben.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alle geselecteerde leden?';
$txt['admin_browse_outstanding_warn'] = 'alle betrokken leden?';
$txt['admin_browse_w_approve'] = 'Goedkeuren';
$txt['admin_browse_w_activate'] = 'Activeren';
$txt['admin_browse_w_delete'] = 'Verwijder';
$txt['admin_browse_w_reject'] = 'Verwerp';
$txt['admin_browse_w_remind'] = 'Herinner';
$txt['admin_browse_w_approve_deletion'] = 'Goedkeuren (verwijder accounts)';
$txt['admin_browse_w_email'] = 'en stuur e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Goedkeuren en activering vereisen';

$txt['admin_browse_filter_by'] = 'Filteren op';
$txt['admin_browse_filter_show'] = 'Tonen';
$txt['admin_browse_filter_type_0'] = 'Niet-geactiveerde nieuwe accounts';
$txt['admin_browse_filter_type_2'] = 'Niet-geactiveerde e-mailveranderingen';
$txt['admin_browse_filter_type_3'] = 'Niet-goedgekeurde nieuwe accounts';
$txt['admin_browse_filter_type_4'] = 'Niet-goedgekeurde account-verwijderingen';
$txt['admin_browse_filter_type_5'] = 'Niet-goedgekeurde "minderjarige" accounts';

$txt['admin_browse_outstanding'] = 'Niet-afgehandelde leden';
$txt['admin_browse_outstanding_days_1'] = 'Met alle leden die zich langer dan';
$txt['admin_browse_outstanding_days_2'] = 'dagen geleden hebben geregistreerd';
$txt['admin_browse_outstanding_perform'] = 'Voer de volgende actie uit';
$txt['admin_browse_outstanding_go'] = 'Voer actie uit';

$txt['check_for_duplicate'] = 'Controleer op duplicaten';
$txt['dont_check_for_duplicate'] = 'Controleer niet op duplicaten';
$txt['duplicates'] = 'Duplicaten';

$txt['not_activated'] = 'Niet geactiveerd';

?>