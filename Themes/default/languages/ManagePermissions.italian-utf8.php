<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Gestione autorizzazioni';
$txt['permissions_modify'] = 'Modifica';
$txt['permissions_view'] = 'Visualizza';
$txt['permissions_allowed'] = 'Consentito';
$txt['permissions_denied'] = 'Vietato';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> Non puoi modificare questo permesso, in quanto è un profilo predefinito incluso di default in SMF. Se desideri cambiare i permessi di questo profilo, devi prima creare una copia del profilo stesso. Puoi fare la copia cliccando <a href="%1$s">qui</a>.';

$txt['permissions_for_profile'] = 'Permessi in base ai profili';
$txt['permissions_boards_desc'] = 'La lista sottostante mostra quale set di permessi è stato assegnato ad ogni sezione del forum. Puoi modificare il profilo assegnato cliccando sul nome della sezione, o selezionando &quot;modifica tutti&quot; in fondo alla pagina. Per modificare il profilo stesso, clicca semplicemente sul suo nome.';
$txt['permissions_board_all'] = 'Modifica tutti';
$txt['permission_profile'] = 'Profilo Permessi';
$txt['permission_profile_desc'] = 'Quale <a href="%1$s">set di permessi</a> deve essere utilizzato per la sezione.';
$txt['permission_profile_inherit'] = 'Importa i permessi dalla sezione principale';

$txt['permissions_profile'] = 'Profilo';
$txt['permissions_profiles_desc'] = 'I profili dei permessi vengono assegnati alle singole sezioni per aiutarti a gestire facilmente le impostazioni di sicurezza. Da questa area puoi creare, modificare e cancellare i profili dei permessi.';
$txt['permissions_profiles_change_for_board'] = 'Modifica il profilo dei permessi per: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Default';
$txt['permissions_profile_no_polls'] = 'Nessun sondaggio';
$txt['permissions_profile_reply_only'] = 'Solo risposta';
$txt['permissions_profile_read_only'] = 'Sola lettura';

$txt['permissions_profile_rename'] = 'Rinomina';
$txt['permissions_profile_edit'] = 'Modifica Profili';
$txt['permissions_profile_new'] = 'Nuovo Profilo';
$txt['permissions_profile_new_create'] = 'Crea';
$txt['permissions_profile_name'] = 'Nome Profilo';
$txt['permissions_profile_used_by'] = 'Usato da';
$txt['permissions_profile_used_by_one'] = '1 sezione';
$txt['permissions_profile_used_by_many'] = '%1$d sezioni';
$txt['permissions_profile_used_by_none'] = 'Nessuna sezione';
$txt['permissions_profile_do_edit'] = 'Modifica';
$txt['permissions_profile_do_delete'] = 'Elimina';
$txt['permissions_profile_copy_from'] = 'Copia permessi da';

$txt['permissions_includes_inherited'] = 'Gruppi importati';

$txt['permissions_all'] = 'tutti';
$txt['permissions_none'] = 'nessuno';
$txt['permissions_set_permissions'] = 'Imposta permessi';

$txt['permissions_advanced_options'] = 'Opzioni avanzate';
$txt['permissions_with_selection'] = 'Alla selezione';
$txt['permissions_apply_pre_defined'] = 'Applica il profilo di permessi predefinito';
$txt['permissions_select_pre_defined'] = 'Scegliere un profilo predefinito';
$txt['permissions_copy_from_board'] = 'Copia i permessi per questa sezione';
$txt['permissions_select_board'] = 'Scegliere una sezione';
$txt['permissions_like_group'] = 'Imposta autorizzazioni come in questo gruppo';
$txt['permissions_select_membergroup'] = 'Scegliere un gruppo di utenti';
$txt['permissions_add'] = 'Aggiungi autorizzazione';
$txt['permissions_remove'] = 'Elimina autorizzazione';
$txt['permissions_deny'] = 'Nega autorizzazione';
$txt['permissions_select_permission'] = 'Scegli un\'autorizzazione';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'è possibile scegliere solo un\'azione per volta nella modifica delle autorizzazioni';
$txt['permissions_no_action'] = 'Nessuna azione scelta';
$txt['permissions_deny_dangerous'] = 'Stai per negare una o più autorizzazioni.\\nQuesta operazione potrebbe essere rischiosa e provocare risultati imprevedibili se non sei certo che nessuno sia erroneamente nel gruppo o nei gruppi a cui stai negando le autorizzazioni.\\n\\nVuoi continuare?';

$txt['permissions_modify_group'] = 'Modifica gruppo';
$txt['permissions_general'] = 'Permessi generali';
$txt['permissions_board'] = 'Permessi generali della sezione';
$txt['permissions_board_desc'] = '<strong>Nota</strong>: queste modifiche dei permessi avranno effetto su tutte le sezioni attualmente assegnate al profilo &quot;Default&quot;. Le sezioni che non utilizzano il profilo &quot;Default&quot; non subiranno le modifiche apportate in questa pagina.';
$txt['permissions_commit'] = 'Salva';
$txt['permissions_on'] = 'nella sezione';
$txt['permissions_local_for'] = 'Permessi locali per gruppo';
$txt['permissions_option_on'] = 'C';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Per ogni autorizzazione è possibile scegliere \'Consentire\' (C), \'Non consentire\' (X), o <span style="color: red;">\'Negare\' (N)</span>.<br /><br />Ricordarsi che se si nega un\'autorizzazione, sarà negata anche a ogni utente - che sia o meno un moderatore - presente in quel gruppo.<br />Per questa ragione, occorre usare con attenzione la funzione nega e solo quando <strong>indispensabile</strong>. D\'altra parte, \'non consentire\' nega l\'autorizzazione a meno che questa non venga assegnata altrove.';
$txt['permissions_change_view'] = 'Cambia Visualizzazione';
$txt['permissions_view_simple'] = 'Semplice';
$txt['permissions_view_classic'] = 'Classico';

$txt['permissiongroup_general'] = 'Generale';
$txt['permissionname_view_stats'] = 'Visualizzare statistiche forum';
$txt['permissionhelp_view_stats'] = 'Le statistiche del forum sintetizzano tutti i dati principali di utilizzo del forum, come il numero di utenti, il numero di post nel giorno e alcune \'top 10\'. Attivando questa autorizzazione si aggiunge un collegamento in fondo alla pagina principale del forum (\'[Altre statistiche]\').';
$txt['permissionname_view_mlist'] = 'Visualizza l\'elenco degli utenti e dei gruppi';
$txt['permissionhelp_view_mlist'] = 'L\'elenco degli utenti mostra tutti gli utenti registrati nel forum. L\'elenco può essere ordinato e si possono effettuare ricerche. L\'elenco utenti è raggiungibile sia dalla pagina principale del forum che dalla pagina delle statistiche, facendo clic sul numero di utenti. Lo stesso vale per la pagina dei gruppi.';
$txt['permissionname_who_view'] = 'Visualizzare utenti online';
$txt['permissionhelp_who_view'] = 'Utenti online mostra tutti gli utenti che sono attualmente collegati al forum e cosa stanno facendo. Questa autorizzazione funzionerà solo se è stata attivata in \'Modifica funzionalità e opzioni\'. è possibile accedere alla pagina \'Utenti online\' seguendo il collegamento nell\'area \'Utenti on-line\' della pagina principale del forum. Anche se non attiva, gli utenti potranno vedere chi è online, ma non dove si trovano.';
$txt['permissionname_search_posts'] = 'Ricerca post e topic';
$txt['permissionhelp_search_posts'] = 'L\'autorizzazione alla ricerca permette agli utenti di ricercare nei forum a cui ha accesso. Quando l\'autorizzazione di ricerca è attivata, un pulsante \'Ricerca\' viene aggiunto alla barra superiore dei pulsanti del forum.';
$txt['permissionname_karma_edit'] = 'Modificare il karma degli altri utenti';
$txt['permissionhelp_karma_edit'] = 'Il karma è una funzione che mostra la popolarità di un utente. Per usare questa funzione occorre attivarla in \'Modifica funzionalità e opzioni\'. Questa autorizzazione permette ad un gruppo di utenti di assegnare dei voti. Questa autorizzazione non ha alcun effetto sui visitatori non registrati.';

$txt['permissiongroup_pm'] = 'Messaggi privati';
$txt['permissionname_pm_read'] = 'Leggere messaggi privati';
$txt['permissionhelp_pm_read'] = 'Consente agli utenti di accedere alla sezione dei messaggi privati e di leggere i propri messaggi. Senza questa autorizzazione un utente non può inviare alcun messaggio privato.';
$txt['permissionname_pm_send'] = 'Inviare messaggi privati';
$txt['permissionhelp_pm_send'] = 'Invia messaggi privati ad altri utenti registrati. Richiede l\'autorizzazione \'Leggere messaggi privati\'.';

$txt['permissiongroup_calendar'] = 'Calendario';
$txt['permissionname_calendar_view'] = 'Visualizzare il calendario';
$txt['permissionhelp_calendar_view'] = 'Il calendario mostra per ogni mese i compleanni, gli eventi e i giorni festivi. Questa autorizzazione consente l\'accesso al calendario. Quando è attivato, un pulsante sarà aggiunto alla barra superiore dei pulsanti e un elenco sarà visualizzato in fondo alla pagina principale del forum con i compleanni, gli eventi e le festività del giorno corrente e di quelli seguenti. Il calendario deve essere attivato tramite l\'opzione \'Configurazione - Funzioni base\'.';
$txt['permissionname_calendar_post'] = 'Aggiungere eventi al calendario';
$txt['permissionhelp_calendar_post'] = 'Un evento è un topic collegato ad una particolare data o periodo. L\'inserimento di eventi può avvenire dal calendario. Un evento può essere inserito solo se l\'utente che lo vuole creare ha il permesso di aprire nuovi topic.';
$txt['permissionname_calendar_edit'] = 'Modificare eventi nel calendario';
$txt['permissionhelp_calendar_edit'] = 'Un evento è un topic collegato ad una particolare data o periodo. Gli eventi possono essere modificati facendo clic sull\'asterisco rosso (*) che si trova vicino all\'evento nella visualizzazione del calendario. Per poter modificare un evento, l\'utente deve avere autorizzazioni sufficienti per modificare il primo post del topic collegato.';
$txt['permissionname_calendar_edit_own'] = 'I propri eventi';
$txt['permissionname_calendar_edit_any'] = 'Tutti gli eventi';

$txt['permissiongroup_maintenance'] = 'Amministrazione forum';
$txt['permissionname_admin_forum'] = 'Amministrare il forum e il database';
$txt['permissionhelp_admin_forum'] = 'Questo permesso consente ad un utente di:<ul class="normallist"><li>cambiare le impostazioni del forum, del database e del tema</li><li>gestire i pacchetti</li><li>utilizzare gli strumenti di manutenzione del forum e del database</li><li>visualizzare il registro degli errori e delle modifiche</li></ul>Utilizza questo permesso con cautela, poichéconcede molti privilegi amministrativi.';
$txt['permissionname_manage_boards'] = 'Gestire sezioni e categorie';
$txt['permissionhelp_manage_boards'] = 'Consente la creazione, la modifica e l\'eliminazione di sezioni e di categorie.';
$txt['permissionname_manage_attachments'] = 'Gestire allegati e avatar';
$txt['permissionhelp_manage_attachments'] = 'Consente l\'accesso alla gestione degli allegati, in cui tutti gli allegati del forum e le icone sono elencati e possono essere eliminati.';
$txt['permissionname_manage_smileys'] = 'Gestire smiley ed icone messaggio';
$txt['permissionhelp_manage_smileys'] = 'Consente l\'accesso alla gestione degli smiley. Qui puoi aggiungere, modificare e rimuovere emoticon e set delle stesse. Inoltre, se hai abilitato le icone personalizzate per i messaggi, puoi anche aggiungere e modificare le icone messaggio.';
$txt['permissionname_edit_news'] = 'Modificare notizie';
$txt['permissionhelp_edit_news'] = 'La funzione delle notizie consente di inserire in ogni schermata una riga di notizie estratta casualmente. Per usare la funzione delle notizie, occorre attivarla nelle impostazioni del forum.';
$txt['permissionname_access_mod_center'] = 'Accedere al centro moderazione';
$txt['permissionhelp_access_mod_center'] = 'Con questo permesso ogni utente del gruppo potrà accedere al centro moderazione, dove avrà modo di accedere alle funzionalità per semplificare la moderazione. Nota: questo permesso non conferisce alcun privilegio di moderazione.';

$txt['permissiongroup_member_admin'] = 'Gestione utenti';
$txt['permissionname_moderate_forum'] = 'Gestire gli utenti del forum';
$txt['permissionhelp_moderate_forum'] = 'Questo permesso include tutte le più importanti funzioni di moderazione utente:<ul class="normallist"><li>accesso alla gestione della registrazione</li><li>accesso alla schermata di visualizzazione/cancellazione utenti</li><li>maggiori informazioni sul profilo, inclusi tracciamento IP/utente e (nascosto) status online</li><li>attivazioni account</li><li>notifiche per le approvazioni e le approvazioni account</li><li>impossibilità ad ignorare gli MP</li><li>molte altre piccole cose</li><li>';
$txt['permissionname_manage_membergroups'] = 'Gestire e assegnare gruppi di utenti';
$txt['permissionhelp_manage_membergroups'] = 'Questa autorizzazione consente ad un utente di modificare i gruppi di utenti e di assegnare gruppi agli altri utenti.';
$txt['permissionname_manage_permissions'] = 'Gestire autorizzazioni';
$txt['permissionhelp_manage_permissions'] = 'Questa autorizzazione consente ad un utente di modificare tutti permessi di un gruppo di utenti, a livello globale o per singole sezioni.';
$txt['permissionname_manage_bans'] = 'Gestire elenchi di utenti interdetti';
$txt['permissionhelp_manage_bans'] = 'Questa autorizzazione consente ad un utente di aggiungere o togliere nomi di utenti, indirizzi IP, nomi di host e indirizzi e-mail da un elenco di utenti interdetti. Inoltre, consente di visualizzare ed eliminare voci nel registro di utenti interdetti che hanno cercato di collegarsi.';
$txt['permissionname_send_mail'] = 'Inviare una e-mail dal forum agli utenti';
$txt['permissionhelp_send_mail'] = 'Mandare un messaggio a tutti gli utenti del forum, oppure solo ad alcuni gruppi di utenti, tramite e-mail o messaggio privato (in questo ultimo caso, è richiesta l\'autorizzazione \'Inviare messaggi privati\').';
$txt['permissionname_issue_warning'] = 'Inviare un richiamo agli utenti';
$txt['permissionhelp_issue_warning'] = 'Inviare un richiamo agli utenti del forum e cambiare il loro livello avvisi. Questo permesso richiede l\'attivazione del sistema di richiamo.';

$txt['permissiongroup_profile'] = 'Profili utenti';
$txt['permissionname_profile_view'] = 'Visualizzare riassunto e statistiche profilo';
$txt['permissionhelp_profile_view'] = 'Questa autorizzazione consente agli utenti di fare clic su un nome utente per visualizzare una sintesi delle impostazioni del profilo, alcune statistiche e tutti i post dell\'utente.';
$txt['permissionname_profile_view_own'] = 'Il proprio profilo';
$txt['permissionname_profile_view_any'] = 'Tutti i profili';
$txt['permissionname_profile_identity'] = 'Modifica impostazioni account';
$txt['permissionhelp_profile_identity'] = 'Le impostazioni dell\'account sono le impostazioni di base di un profilo: password, indirizzo e-mail, gruppo di utenti e lingua preferita.';
$txt['permissionname_profile_identity_own'] = 'Il proprio profilo';
$txt['permissionname_profile_identity_any'] = 'Tutti i profili';
$txt['permissionname_profile_extra'] = 'Modificare impostazioni aggiuntive del profilo';
$txt['permissionhelp_profile_extra'] = 'Le impostazioni aggiuntive comprendono impostazioni sulle icone, preferenze sul tema, sulle notifiche e sui messaggi privati.';
$txt['permissionname_profile_extra_own'] = 'Il proprio profilo';
$txt['permissionname_profile_extra_any'] = 'Tutti i profili';
$txt['permissionname_profile_title'] = 'Modificare qualifica personalizzata';
$txt['permissionhelp_profile_title'] = 'La qualifica personalizzata è mostrata nella pagina che visualizza il topic, sotto il profilo di ogni utente che ha una qualifica personalizzata.';
$txt['permissionname_profile_title_own'] = 'Il proprio profilo';
$txt['permissionname_profile_title_any'] = 'Tutti i profili';
$txt['permissionname_profile_remove'] = 'Eliminare account';
$txt['permissionhelp_profile_remove'] = 'Questa autorizzazione consente all\'utente di eliminare il proprio account, quando viene impostata su \'Il proprio account\'.';
$txt['permissionname_profile_remove_own'] = 'Il proprio account';
$txt['permissionname_profile_remove_any'] = 'Tutti gli account';
$txt['permissionname_profile_server_avatar'] = 'Selezionare un avatar dal server';
$txt['permissionhelp_profile_server_avatar'] = 'Se viene attivata permetterà ad un utente di selezionare un avatar dalle collezioni di avatar installate sul server.';
$txt['permissionname_profile_upload_avatar'] = 'Caricare un avatar sul server';
$txt['permissionhelp_profile_upload_avatar'] = 'Questo permesso consentirà ad un utente di caricare il proprio avatar personale sul server.';
$txt['permissionname_profile_remote_avatar'] = 'Scegliere un\'avatar memorizzato su un altro server';
$txt['permissionhelp_profile_remote_avatar'] = 'Poichégli avatar possono influenzare negativamente il tempo di visualizzazione delle pagine, è possibile non autorizzare certi gruppi di utenti a usare icone ospitate su altri server.';

$txt['permissiongroup_general_board'] = 'Generale';
$txt['permissionname_moderate_board'] = 'Moderare la sezione';
$txt['permissionhelp_moderate_board'] = 'Il permesso di moderare la sezione aggiunge alcune autorizzazioni che fanno di un moderatore un \'vero\' moderatore. Le autorizzazioni comprendono: rispondere ai topic chiusi, cambiare la data di scadenza dei sondaggi, visualizzare i risultati dei sondaggi.';

$txt['permissiongroup_topic'] = 'Topic';
$txt['permissionname_post_new'] = 'Aprire nuovi topic';
$txt['permissionhelp_post_new'] = 'Questa autorizzazione consente agli utenti di aprire nuovi topic. Non consente di inviare post in risposta ai topic.';
$txt['permissionname_merge_any'] = 'Unire qualsiasi topic';
$txt['permissionhelp_merge_any'] = 'Unire due o più topic per crearne uno. L\'ordine dei post nel topic unito sarà basato sulla data e l\'ora  in cui i post sono stati creati. Un utente può unire solo i topic nelle sezioni in cui gli è stato permesso di unire. Per unire diversi topic allo stesso tempo, un utente deve essere abilitato alla &quot;moderazione rapida&quot; nelle sue impostazioni del profilo.';
$txt['permissionname_split_any'] = 'Dividere qualsiasi topic';
$txt['permissionhelp_split_any'] = 'Dividere un topic in due topic distinti.';
$txt['permissionname_send_topic'] = 'Inviare topic agli amici';
$txt['permissionhelp_send_topic'] = 'Questa autorizzazione consente ad un utente di segnalare ad un amico tramite e-mail un topic, inserendo l\'indirizzo e-mail e potendo aggiungere un post.';
$txt['permissionname_make_sticky'] = 'Marcare i topic come importanti';
$txt['permissionhelp_make_sticky'] = 'I topic importanti rimangono sempre in cima ad una sezione. Possono essere utili per annunci o altri post importanti.';
$txt['permissionname_move'] = 'Spostare topic';
$txt['permissionhelp_move'] = 'Spostare un topic da una sezione all\'altra. Gli utenti possono scegliere come sezione di destinazione solo quelle a cui hanno accesso.';
$txt['permissionname_move_own'] = 'I propri topic';
$txt['permissionname_move_any'] = 'Tutti i topic';
$txt['permissionname_lock'] = 'Chiudere i topic';
$txt['permissionhelp_lock'] = 'Questa autorizzazione consente ad un utente di chiudere un topic. Questo può servire a evitare che vengano aggiunte risposte ad un topic. Solo gli utenti con l\'autorizzazione \'Moderare la sezione\' possono ancora inviare post nei topic chiusi.';
$txt['permissionname_lock_own'] = 'I propri topic';
$txt['permissionname_lock_any'] = 'Tutti i topic';
$txt['permissionname_remove'] = 'Eliminare topic';
$txt['permissionhelp_remove'] = 'Eliminare completamente alcuni topic. Questa autorizzazione non consente di eliminare singoli post all\'interno del topic!';
$txt['permissionname_remove_own'] = 'I propri topic';
$txt['permissionname_remove_any'] = 'Tutti i topic';
$txt['permissionname_post_reply'] = 'Inviare post ai topic';
$txt['permissionhelp_post_reply'] = 'Questa autorizzazione consente di rispondere ai topic.';
$txt['permissionname_post_reply_own'] = 'I propri topic';
$txt['permissionname_post_reply_any'] = 'Tutti i topic';
$txt['permissionname_modify_replies'] = 'Modificare i post nei propri topic';
$txt['permissionhelp_modify_replies'] = 'Questa autorizzazione consente ad un utente che ha avviato un topic di modificare tutte le risposte al topic.';
$txt['permissionname_delete_replies'] = 'Eliminare post nei propri topic';
$txt['permissionhelp_delete_replies'] = 'Questa autorizzazione consente ad un utente che ha avviato un topic di eliminare tutte le risposte al topic.';
$txt['permissionname_announce_topic'] = 'Annunciare topic';
$txt['permissionhelp_announce_topic'] = 'Questa autorizzazione consente ad un utente di inviare un messaggio e-mail che annuncia la creazione di un topic a tutti gli utenti o a alcuni gruppi di utenti.';

$txt['permissiongroup_post'] = 'Post';
$txt['permissionname_delete'] = 'Eliminare post';
$txt['permissionhelp_delete'] = 'Eliminare post. Questa autorizzazione non consente ad un utente di eliminare il primo post di un topic.';
$txt['permissionname_delete_own'] = 'I propri post';
$txt['permissionname_delete_any'] = 'Tutti i post';
$txt['permissionname_modify'] = 'Modificare post';
$txt['permissionhelp_modify'] = 'Modificare post';
$txt['permissionname_modify_own'] = 'I propri post';
$txt['permissionname_modify_any'] = 'Tutti i post';
$txt['permissionname_report_any'] = 'Segnalare messaggi ai moderatori';
$txt['permissionhelp_report_any'] = 'Questa autorizzazione aggiunge un collegamento ad ogni post, per consentire ad un utente di segnalare un messaggio al moderatore. In seguito alla segnalazione, tutti i moderatori della sezione riceveranno un messaggio e-mail con il collegamento al post segnalato e una descrizione del problema (inserita dall\'utente che effettua la segnalazione).';

$txt['permissiongroup_poll'] = 'Sondaggi';
$txt['permissionname_poll_view'] = 'Visualizzare sondaggi';
$txt['permissionhelp_poll_view'] = 'Questa autorizzazione consente ad un utente di visualizzare un sondaggio. In assenza di questa autorizzazione, l\'utente potrà vedere solo il topic.';
$txt['permissionname_poll_vote'] = 'Votare nei sondaggi';
$txt['permissionhelp_poll_vote'] = 'Questa autorizzazione consente ad un utente registrato di inserire un voto. Non si può applicare agli utenti non registrati.';
$txt['permissionname_poll_post'] = 'Inserire sondaggi';
$txt['permissionhelp_poll_post'] = 'Questo permesso permetta ad un utente di creare un nuovo sondaggio. L\'utente deve risultare abilitato al permesso "Crea nuovo topic".';
$txt['permissionname_poll_add'] = 'Aggiungere un sondaggio ai topic';
$txt['permissionhelp_poll_add'] = 'Questa autorizzazione consente ad un utente di aggiungere un sondaggio dopo che un topic è stato creato. Questa autorizzazione richiede che si abbia la possibilità di modificare il primo post di un topic.';
$txt['permissionname_poll_add_own'] = 'I propri topic';
$txt['permissionname_poll_add_any'] = 'Tutti i topic';
$txt['permissionname_poll_edit'] = 'Modificare sondaggi';
$txt['permissionhelp_poll_edit'] = 'Questa autorizzazione consente ad un utente di modificare le possibili risposte di un sondaggio e di azzerare i dati di un sondaggio. Per poter modificare il numero massimo di voti consentiti e la data di scadenza, all\'utente deve essere stata assegnata l\'autorizzazione \'Moderare la sezione\'.';
$txt['permissionname_poll_edit_own'] = 'I propri sondaggi';
$txt['permissionname_poll_edit_any'] = 'Tutti i sondaggi';
$txt['permissionname_poll_lock'] = 'Chiudere sondaggi';
$txt['permissionhelp_poll_lock'] = 'Chiudere i sondaggi impedisce che vengano accettati altri voti nei sondaggi.';
$txt['permissionname_poll_lock_own'] = 'I propri sondaggi';
$txt['permissionname_poll_lock_any'] = 'Tutti i sondaggi';
$txt['permissionname_poll_remove'] = 'Eliminare sondaggi';
$txt['permissionhelp_poll_remove'] = 'Questa autorizzazione consente di eliminare i sondaggi.';
$txt['permissionname_poll_remove_own'] = 'I propri sondaggi';
$txt['permissionname_poll_remove_any'] = 'Tutti i sondaggi';

$txt['permissiongroup_approval'] = 'Moderazione post';
$txt['permissionname_approve_posts'] = 'Approvare gli elementi in attesa di moderazione';
$txt['permissionhelp_approve_posts'] = 'Permette ad un utente di approvare tutti gli elementi non moderati di una sezione.';
$txt['permissionname_post_unapproved_replies'] = 'Inviare risposte in qualsiasi topic - Richiede l\'approvazione';
$txt['permissionhelp_post_unapproved_replies'] = 'Questo permesso permette ad un utente di inviare risposte ad un topic che non verranno mostrate fino all\'approvazione del moderatore.';
$txt['permissionname_post_unapproved_replies_own'] = 'Proprio topic';
$txt['permissionname_post_unapproved_replies_any'] = 'Ogni topic';
$txt['permissionname_post_unapproved_topics'] = 'Aprire nuovi topic - Richiede l\'approvazione';
$txt['permissionhelp_post_unapproved_topics'] = 'Questo permesso permette ad un utente di creare un nuovo topic che richiederà l\'approvazione per essere mostrato.';
$txt['permissionname_post_unapproved_attachments'] = 'Inviare allegati - Richiede l\'approvazione';
$txt['permissionhelp_post_unapproved_attachments'] = 'Questo permesso permette ad un utente di allegare file ai propri post, anche se richiederanno un\'approvazione prima di essere mostrati agli altri.';

$txt['permissiongroup_notification'] = 'Notifiche';
$txt['permissionname_mark_any_notify'] = 'Richiedere notifica delle risposte';
$txt['permissionhelp_mark_any_notify'] = 'Questa funzione consente agli utenti di ricevere una notifica quando qualcuno risponde in un topic che si sta controllando.';
$txt['permissionname_mark_notify'] = 'Richiedere notifica per nuovi topic';
$txt['permissionhelp_mark_notify'] = 'La notifica dei nuovi topic è una funzione che consente ad un utente di ricevere un messaggio e-mail ogni volta che un nuovo topic viene creato nella sezione che sta controllando.';

$txt['permissiongroup_attachment'] = 'Allegati';
$txt['permissionname_view_attachments'] = 'Visualizzare allegati';
$txt['permissionhelp_view_attachments'] = 'Gli allegati sono documenti che sono allegati ai messaggi inviati. Questa funzione può essere attivata e configurata in \'Modifica funzioni e opzioni\'. Dato che gli allegati non sono direttamente collegati, è possibile usare questa autorizzazione per impedire agli utenti non autorizzati di scaricarli.';
$txt['permissionname_post_attachment'] = 'Inviare allegati';
$txt['permissionhelp_post_attachment'] = 'Gli allegati sono documenti che sono allegati ai messaggi inviati. Ogni post può contenere diversi allegati.';

$txt['permissiongroup_simple_view_basic_info'] = 'Usa le funzionalità base del forum';
$txt['permissiongroup_simple_use_pm_system'] = 'Contatta gli utenti tramite il sistema di messaggeria privata.';
$txt['permissiongroup_simple_post_calendar'] = 'Inserisci eventi nel calendario';
$txt['permissiongroup_simple_edit_profile'] = 'Personalizzare il profilo';
$txt['permissiongroup_simple_delete_account'] = 'Eliminare il proprio account';
$txt['permissiongroup_simple_use_avatar'] = 'Selezionare o caricare un avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderare l\'intero forum';
$txt['permissiongroup_simple_administrate'] = 'Prendersi carico dell\'amministrazione';

$txt['permissionname_simple_calendar_edit_own'] = 'Modificare i propri eventi nel calendario';
$txt['permissionname_simple_calendar_edit_any'] = 'Modificare gli eventi del calendario di altre persone';
$txt['permissionname_simple_profile_view_own'] = 'Visualizzare il proprio profilo';
$txt['permissionname_simple_profile_view_any'] = 'Visualizzare i profili altrui';
$txt['permissionname_simple_profile_identity_own'] = 'Modificare le impostazioni del proprio account';
$txt['permissionname_simple_profile_identity_any'] = 'Modificare le impostazioni degli account altrui';
$txt['permissionname_simple_profile_extra_own'] = 'Modificare le proprie opzioni aggiuntive del profilo';
$txt['permissionname_simple_profile_extra_any'] = 'Modificare le opzioni del profilo altrui';
$txt['permissionname_simple_profile_title_own'] = 'Scegliere un titolo personalizzato per se stessi';
$txt['permissionname_simple_profile_title_any'] = 'Modificare i titoli personalizzati altrui';
$txt['permissionname_simple_profile_remove_own'] = 'Eliminare il proprio account';
$txt['permissionname_simple_profile_remove_any'] = 'Eliminare gli account di altri';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Inviare topic e post alla sezione <span style="text-decoration: underline">solo</span> dopo che sono stati approvati';
$txt['permissiongroup_simple_make_posts'] = 'Inviare topic e post nella sezione';
$txt['permissiongroup_simple_post_polls'] = 'Realizzare nuovi sondaggi';
$txt['permissiongroup_simple_participate'] = 'Visualizzare i contenuti aggiuntivi della sezione';
$txt['permissiongroup_simple_modify'] = 'Modificare i propri post';
$txt['permissiongroup_simple_notification'] = 'Richiedere notifiche';
$txt['permissiongroup_simple_attach'] = 'Inviare allegati';
$txt['permissiongroup_simple_moderate'] = 'Moderare la sezione';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Inviare post in un topic - Richiede l\'approvazione';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Inviare post in qualsiasi topic - Richiede l\'approvazione';
$txt['permissionname_simple_post_reply_own'] = 'Inviare risposte in un topic che hanno iniziato';
$txt['permissionname_simple_post_reply_any'] = 'Inviare risposte in qualsiasi topic';
$txt['permissionname_simple_move_own'] = 'Spostare i propri topic';
$txt['permissionname_simple_move_any'] = 'Spostare il topic di chiunque';
$txt['permissionname_simple_lock_own'] = 'Chiudere il proprio topic';
$txt['permissionname_simple_lock_any'] = 'Chiudere il topic di chiunque';
$txt['permissionname_simple_remove_own'] = 'Cancellare un proprio topic';
$txt['permissionname_simple_remove_any'] = 'Cancellare il topic di chiunque';
$txt['permissionname_simple_delete_own'] = 'Cancellare un proprio post';
$txt['permissionname_simple_delete_any'] = 'Cancellare un post realizzato da qualcun altro';
$txt['permissionname_simple_modify_own'] = 'Modificare i propri post';
$txt['permissionname_simple_modify_any'] = 'Modificare il post di qualcun altro';
$txt['permissionname_simple_poll_add_own'] = 'Aggiungere un sondaggio ad un topic che hanno creato';
$txt['permissionname_simple_poll_add_any'] = 'Aggiungere un sondaggio a qualsiasi topic';
$txt['permissionname_simple_poll_edit_own'] = 'Modificare un sondaggio che hanno creato';
$txt['permissionname_simple_poll_edit_any'] = 'Modificare il sondaggio di chiunque';
$txt['permissionname_simple_poll_lock_own'] = 'Chiudere il proprio sondaggio';
$txt['permissionname_simple_poll_lock_any'] = 'Chiudere il sondaggio di chiunque';
$txt['permissionname_simple_poll_remove_own'] = 'Rimuovere un sondaggio che hanno creato';
$txt['permissionname_simple_poll_remove_any'] = 'Cancellare il sondaggio di chiunque';

$txt['permissionicon'] = 'Impostare icona';

$txt['permission_settings_title'] = 'Impostazioni permessi';
$txt['groups_manage_permissions'] = 'Gruppi che possono gestire i permessi';
$txt['permission_settings_submit'] = 'Salva';
$txt['permission_settings_enable_deny'] = 'Abilita l\'opzione di negare i permessi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Disabilitando questa opzione verranno aggiornati i permessi da \\\'Negato\\\' a \\\'Non permesso\\\'.';
$txt['permission_by_board_desc'] = 'Da qui è possibile impostare se una sezione debba utilizzare i permessi globali oppure abbia permessi specifici. Utilizzare i permessi locali significa che per quella sezione è possibile impostare ogni permesso per ogni gruppo di utenti.';
$txt['permission_settings_desc'] = 'Qui è possibile stabilire chi ha il permesso di cambiare i permessi e quanto debba essere sofisticato il sistema dei permessi.';
$txt['permission_settings_enable_postgroups'] = 'Abilita i permessi per i gruppi basati sul numero di post';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'La disabilitazione di questa impostazione causerà la rimozione dei permessi attivi al momento per i gruppi basati sul numero di post.';

$txt['permissions_post_moderation_desc'] = 'Da questa pagina, puoi facilmente decidere quali gruppi hanno i post moderati per via di un particolare profilo di permessi.';
$txt['permissions_post_moderation_deny_note'] = 'N.B: quando sono abilitati i permessi avanzati, non puoi applicare il permesso &quot;vietato&quot; da questa pagina. Modifica direttamente i permessi se desideri applicare un permesso di divieto.';
$txt['permissions_post_moderation_select'] = 'Seleziona profilo';
$txt['permissions_post_moderation_new_topics'] = 'Nuovi topic';
$txt['permissions_post_moderation_replies_own'] = 'Le proprie risposte';
$txt['permissions_post_moderation_replies_any'] = 'Ogni risposta';
$txt['permissions_post_moderation_attachments'] = 'Allegati';
$txt['permissions_post_moderation_legend'] = 'Legenda';
$txt['permissions_post_moderation_allow'] = 'Può creare';
$txt['permissions_post_moderation_moderate'] = 'Può creare ma richiede un\'autorizzazione';
$txt['permissions_post_moderation_disallow'] = 'Non è possibile creare';
$txt['permissions_post_moderation_group'] = 'Gruppo';

$txt['auto_approve_topics'] = 'Creare nuovi topic senza che venga richiesta l\'approvazione';
$txt['auto_approve_replies'] = 'Inviare risposte ai topic senza che venga richiesta l\'approvazione';
$txt['auto_approve_attachments'] = 'Inviare allegati senza che venga richiesta l\'approvazione';

?>