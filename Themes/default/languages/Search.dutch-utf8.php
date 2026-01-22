<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Stel zoekparameters in';
$txt['choose_board'] = 'Kies een board waar je in wilt zoeken, of selecteer alle boards';
$txt['all_words'] = 'Alle termen moeten overeenkomen';
$txt['any_words'] = 'E&eacute;n of meer termen moeten overeenkomen';
$txt['by_user'] = 'Door gebruiker';

$txt['search_post_age'] = 'Berichtouderdom';
$txt['search_between'] = 'tussen';
$txt['search_and'] = 'en';
$txt['search_options'] = 'Opties';
$txt['search_show_complete_messages'] = 'Toon resultaten als berichten';
$txt['search_subject_only'] = 'Zoek alleen op onderwerp';
$txt['search_relevance'] = 'Relevantie';
$txt['search_date_posted'] = 'Datum geplaatst';
$txt['search_order'] = 'Resultaatvolgorde';
$txt['search_orderby_relevant_first'] = 'Meest relevante resultaten eerst';
$txt['search_orderby_large_first'] = 'Grootste topics eerst';
$txt['search_orderby_small_first'] = 'Kleinste topics eerst';
$txt['search_orderby_recent_first'] = 'Meest recente topics eerst';
$txt['search_orderby_old_first'] = 'Oudste topics eerst';
$txt['search_visual_verification_label'] = 'Verificatie';
$txt['search_visual_verification_desc'] = 'Typ de bovenstaande code in om uw zoekopdracht uit te voeren.';

$txt['search_specific_topic'] = 'Zoek alleen berichten in de topic';

$txt['mods_cat_search'] = 'Zoekfunctie';
$txt['groups_search_posts'] = 'Ledengroepen met toegang tot de zoekfunctie';
$txt['simpleSearch'] = 'Activeer eenvoudige zoekfunctie';
$txt['search_results_per_page'] = 'Aantal zoekresultaten per pagina';
$txt['search_weight_frequency'] = 'Relatieve zoekgewicht van het aantal berichten met trefwoorden per topic';
$txt['search_weight_age'] = 'Relatieve zoekgewicht van de leeftijd van het laatste bericht met trefwoorden';
$txt['search_weight_length'] = 'Relatieve zoekgewicht van de topiclengte';
$txt['search_weight_subject'] = 'Relatieve zoekgewicht van een berichtonderwerp met trefwoorden';
$txt['search_weight_first_message'] = 'Relatieve zoekgewicht van een eerste bericht met trefwoorden';
$txt['search_weight_sticky'] = 'Relatieve zoekgewicht van een sticky topic';

$txt['search_settings_desc'] = 'Hier kun je alle basisinstellingen voor de zoekfunctie instellen.';
$txt['search_settings_title'] = 'Zoekfunctie - Instellingen';

$txt['search_weights_desc'] = 'Hier kun je de afzonderlijke onderdelen van de relevantheidsgraad instellen.';
$txt['search_weights_title'] = 'Zoekfunctie - Wegingen';
$txt['search_weights_total'] = 'Totaal';
$txt['search_weights_save'] = 'Opslaan';

$txt['search_method_desc'] = 'Hier kun je de manier instellen waarop de zoekfunctie functioneert.';
$txt['search_method_title'] = 'Zoekfunctie - Methode';
$txt['search_method_save'] = 'Opslaan';
$txt['search_method_messages_table_space'] = 'Ruimte gebruikt voor forumberichten';
$txt['search_method_messages_index_space'] = 'Ruimte gebruikt voor het indexeren van berichten';
$txt['search_method_kilobytes'] = 'kB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'bestaat op dit moment niet';
$txt['search_method_fulltext_create'] = 'cre&euml;er een fulltext index';
$txt['search_method_fulltext_cannot_create'] = 'kan niet gemaakt worden omdat de maximale berichtlengte groter dan 65.535 is of het tabeltype niet MyISAM is';
$txt['search_method_index_already_exists'] = 'bestaat al';
$txt['search_method_fulltext_remove'] = 'verwijder fulltextindex';
$txt['search_method_index_partial'] = 'gedeeltelijk gecre&euml;erd';
$txt['search_index_custom_resume'] = 'hervatten';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Om de fulltext zoekfunctie te kunnen gebruiken, moet je eerst een fulltext index cre&euml;ren!';

$txt['search_index'] = 'Zoekindex';
$txt['search_index_none'] = 'Geen index';
$txt['search_index_custom'] = 'Aangepaste index';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Het adminpanel stelt enkel in staat om tussen zoekindices te wisselen. Om de Sphinx-instellingen verder af te stellen, kun je de tool sphinx_config.php gebruiken.';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Grootte';
$txt['search_index_create_custom'] = 'cre&euml;er aangepaste index';
$txt['search_index_custom_remove'] = 'verwijder aangepaste index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Om een aangepaste zoekindex te gebruiken, dien je eerst een aangepaste index aan te maken!';

$txt['search_force_index'] = 'Forceer het gebruik van een zoekindex';
$txt['search_match_words'] = 'Alleen op hele woorden zoeken';
$txt['search_max_results'] = 'Maximaal aantal resultaten tonen';
$txt['search_max_results_disable'] = '(0 voor geen limiet)';
$txt['search_floodcontrol_time'] = 'Tijd vereist tussen zoekopdrachten van dezelfde gebruiker';
$txt['search_floodcontrol_time_desc'] = '(0 voor geen limiet, in seconden)';

$txt['search_create_index'] = 'Cre&euml;er index';
$txt['search_create_index_why'] = 'Waarom een zoekindex maken?';
$txt['search_create_index_start'] = 'Aanmaken';
$txt['search_predefined'] = 'Vooraf gedefinieerd profiel';
$txt['search_predefined_small'] = 'Kleine index qua grootte';
$txt['search_predefined_moderate'] = 'Gemiddelde index qua grootte';
$txt['search_predefined_large'] = 'Grote index qua grootte';
$txt['search_create_index_continue'] = 'Doorgaan';
$txt['search_create_index_not_ready'] = 'SMF is momenteel bezig een zoekindex van je berichten te maken. Om overbelasting van je server te voorkomen is de voortgang tijdelijk stilgelegd. Het zou automatisch door moeten gaan binnen een paar seconden. Als dat niet het geval is, klik dan hieronder op \'Doorgaan\'.';
$txt['search_create_index_progress'] = 'Voortgang';
$txt['search_create_index_done'] = 'Aangepaste zoekindex aangemaakt!';
$txt['search_create_index_done_link'] = 'Doorgaan';
$txt['search_double_index'] = 'Je hebt momenteel twee indices van de berichtentabel gemaakt. Voor de beste presaties kun je het beste &eacute;&eacute;n van de twee verwijderen.';

$txt['search_error_indexed_chars'] = 'Onjuist aantal ge&iuml;ndexeerde tekens. Ten minste drie tekens zijn vereist voor een goede index.';
$txt['search_error_max_percentage'] = 'Onjuist percentage over te slaan aantal woorden. Gebruik een waarde van ten minste 5%.';
$txt['error_string_too_long'] = 'De zoekopdracht mag niet langer zijn dan %1$d karakters.';

$txt['search_adjust_query'] = 'Pas de zoekparameters aan';
$txt['search_adjust_submit'] = 'Zoek opnieuw';
$txt['search_did_you_mean'] = 'Wellicht zocht je naar';

$txt['search_example'] = '<em>bijv.</em> Orwell "Animal Farm" -film';

$txt['search_engines_description'] = 'Vanuit deze sectie kun je instellen in hoeverre je wilt bijhouden hoe zoekmachines je forum indexeren, alsook de logs hiervan bekijken.';
$txt['spider_mode'] = 'Opsporingsniveau zoekmachines<div class="smalltext">NB: een hoger niveau betekent tevens dat meer systeembronnen nodig zijn.</div>';
$txt['spider_mode_off'] = 'Uitgeschakeld';
$txt['spider_mode_standard'] = 'Standaard - logt minimale spideractiviteit.';
$txt['spider_mode_high'] = 'Hoog - verschaft uitgebreidere statistieken.';
$txt['spider_mode_vhigh'] = 'Zeer hoog - hetzelfde als \'Hoog\', maar dan voor elke pagina.';
$txt['spider_settings_desc'] = 'Vanaf deze pagina kun je de instellingen voor spideropsporing wijzigen. NB: als je automatisch het hitlog wil opschonen, kun je dat <a href="%1$s">hier</a> instellen.';

$txt['spider_group'] = 'Groep waartoe spiders behoren<div class="smalltext">Dit stelt je in staat nauwkeuriger te bepalen wat spiders kunnen zien.</div>';
$txt['spider_group_none'] = 'Uitgeschakeld';

$txt['show_spider_online'] = 'Toon spiders in de onlinelijst';
$txt['show_spider_online_no'] = 'Helemaal niet';
$txt['show_spider_online_summary'] = 'Alleen hoeveelheid spiders';
$txt['show_spider_online_detail'] = 'Toon spidernamen';
$txt['show_spider_online_detail_admin'] = 'Toon spidernamen - alleen aan beheerders';

$txt['spider_name'] = 'Spidernaam';
$txt['spider_last_seen'] = 'Laatst gezien op';
$txt['spider_last_never'] = 'Nooit';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'IP-adres';
$txt['spiders_add'] = 'Voeg nieuwe spider toe';
$txt['spiders_edit'] = 'Spider bewerken';
$txt['spiders_remove_selected'] = 'Verwijder geselecteerde spiders';
$txt['spider_remove_selected_confirm'] = 'Weet je zeker dat je deze spiders wilt verwijderen?\\n\\nAlle bijhorende statistieken zullen ook worden verwijderd!';
$txt['spiders_no_entries'] = 'Er zijn momenteel geen spiders geconfigureerd.';

$txt['add_spider_desc'] = 'Vanaf deze pagina kun je bepalen hoe een spider getypeerd wordt. Als de user agent danwel het IP-adres van een gast overeenkomt met de gegevens hieronder, zal hij worden gedetecteerd als een zoekmachine-spider en gevolgd worden op de ingestelde wijze.';
$txt['spider_name_desc'] = 'Naam waarmee naar de spider verwezen wordt.';
$txt['spider_agent_desc'] = 'Useragent geassocieerd met deze spider.';
$txt['spider_ip_info_desc'] = 'Komma-gescheiden lijst met IP-adressen behorend bij deze spider.';

$txt['spider'] = 'Spider';
$txt['spider_time'] = 'Tijd';
$txt['spider_viewing'] = 'Bekijkt';
$txt['spider_logs_empty'] = 'Er zijn op dit moment ingangen in het spiderlog.';
$txt['spider_logs_info'] = 'NB: het loggen van spideracties vindt alleen plaats als het opsporingsniveau is ingesteld op &quot;hoog&quot; of &quot;zeer hoog&quot;. Details van elke spideractie worden alleen gelogd als het opsporingsniveau op &quot;zeer hoog&quot; staat.';
$txt['spider_disabled'] = 'Uitgeschakeld';

$txt['spider_logs_delete'] = 'Verwijder logs';
$txt['spider_logs_delete_older'] = 'Verwijder logs ouder dan';
$txt['spider_logs_delete_day'] = 'dagen.';
$txt['spider_logs_delete_submit'] = 'Verwijder';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Weet je zeker dat je alle logingangen wilt verwijderen?';

$txt['spider_stats_select_month'] = 'Ga naar maand';
$txt['spider_stats_page_hits'] = 'Paginahits';
$txt['spider_stats_no_entries'] = 'Er zijn momenteel geen spiderstatistieken beschikbaar.';

?>