<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Questa pagina ti permette di cambiare le impostazioni delle funzioni, modifiche e opzioni base del tuo forum. Per favore, fai riferimento alle <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">impostazioni temi</a> per maggiori opzioni. Clicca sulle icone di aiuto per maggiori informazioni sulla relativa impostazione.';
$txt['security_settings_desc'] = 'Questa pagina ti permette di impostare le opzioni legate specificatamente alla sicurezza e moderazione del tuo forum, incluse le regole anti-spam.';
$txt['modification_settings_desc'] = 'Questa pagina contiene impostazioni aggiunte dalle modifiche sul tuo forum';

$txt['modification_no_misc_settings'] = 'Nessuna modifica ha ancora inserito delle impostazioni in questa area.';

$txt['pollMode'] = 'Modalità sondaggio';
$txt['disable_polls'] = 'Disabilita sondaggi';
$txt['enable_polls'] = 'Abilita sondaggi';
$txt['polls_as_topics'] = 'Mostra i sondaggi esistenti come topic';
$txt['allow_guestAccess'] = 'Permetti ai visitatori di navigare sul forum';
$txt['userLanguage'] = 'Abilita il supporto della lingua selezionabile dall\'utente';
$txt['allow_editDisplayName'] = 'Consentire agli utenti di modificare il loro nome utente visualizzato?';
$txt['allow_hideOnline'] = 'Consente a chi non è amministratore di nascondere il proprio stato';
$txt['guest_hideContacts'] = 'Nasconde le informazioni degli utenti ai visitatori';
$txt['titlesEnable'] = 'Abilita i titoli personalizzati';
$txt['enable_buddylist'] = 'Abilita la lista amici/utenti da ignorare';
$txt['default_personal_text'] = 'Testo personale di default<div class="smalltext">Testo personale che viene assegnato ai nuovi utenti iscritti.</div>';
$txt['number_format'] = 'Formato numerico di default';
$txt['time_format'] = 'Formato orario di default';
$txt['setting_time_offset'] = 'Fuso orario generale<div class="smalltext">(aggiunto alle opzioni specifiche dell\'utente.)</div>';
$txt['setting_default_timezone'] = 'Fuso orario del server';
$txt['failed_login_threshold'] = 'Soglia limite per i login falliti';
$txt['lastActive'] = 'Soglia di tempo entro cui segnalare la presenza online';
$txt['trackStats'] = 'Traccia le statistiche giornaliere';
$txt['hitStats'] = 'Traccia le visualizzazioni giornaliere delle pagine (le statistiche devono essere abilitate)';
$txt['enableCompressedOutput'] = 'Abilita la compressione dell\'output';
$txt['disableTemplateEval'] = 'Disabilita il controllo dei template';
$txt['databaseSession_enable'] = 'Utilizza sessioni con il supporto del database';
$txt['databaseSession_loose'] = 'Abilita i browser a tornare indietro alle pagine in cache';
$txt['databaseSession_lifetime'] = 'Secondi di attesa prima del timeout per una sessione non utilizzata';
$txt['enableErrorLogging'] = 'Abilita il registro errori';
$txt['enableErrorQueryLogging'] = 'Includi la query del database nel registro errori';
$txt['pruningOptions'] = 'Abilita la pulizia delle voci di registro';
$txt['pruneErrorLog'] = 'Rimuovi dal registro le voci di errore più vecchie di:<div class="smalltext">(0 per disabilitare)</div>';
$txt['pruneModLog'] = 'Rimuovi dal registro le azioni di moderazione più vecchie di:<div class="smalltext">(0 per disabilitare)</div>';
$txt['pruneBanLog'] = 'Rimuovi dal registro le voci relative ai tentativi da accesso di utenti esclusi, più vecchie di:<div class="smalltext">(0 per disabilitare)</div>';
$txt['pruneReportLog'] = 'Rimuovi dal registro le segnalazioni di topic più vecchie di<div class="smalltext">(0 per disabilitare)</div>';
$txt['pruneScheduledTaskLog'] = 'Rimuovi dal registro le azioni programmate più vecchie di:<div class="smalltext">(0 per disabilitare)</div>';
$txt['pruneSpiderHitLog'] = 'Rimuovi dal registro le visite dei motori di ricerca più vecchie di:<div class="smalltext">(0 per disabilitare)</div>';
$txt['cookieTime'] = 'Durata di default dei cookie per il login (in minuti)';
$txt['localCookies'] = 'Abilita il salvataggio locale dei cookie<div class="smalltext">(se l\'opzione è attiva, SSI non funzionerà a dovere)</div>';
$txt['globalCookies'] = 'Utilizza cookie indipendenti di sottodominio<div class="smalltext">(prima devi disabilitare i cookie locali!)</div>';
$txt['secureCookies'] = 'Forza i cookie ad essere sicuri<div class="smalltext">(Questa funzione è valida solo se utilizzi HTTPS - viceversa, non utilizzarla!)</div>';
$txt['securityDisable'] = 'Disabilita la procedura di sicurezza per l\'amministrazione';
$txt['send_validation_onChange'] = 'Richiedi la riattivazione dell\'account dopo un cambio e-mail';
$txt['approveAccountDeletion'] = 'Richiedi l\'approvazione di un amministratore quando un utente decide di cancellare il proprio account';
$txt['autoOptMaxOnline'] = 'Numero massimo di utenti online quando viene eseguita l\'ottimizzazione del forum<div class="smalltext">(0 per nessun limite.)</div>';
$txt['autoFixDatabase'] = 'Ripara automaticamente le tabelle errate';
$txt['allow_disableAnnounce'] = 'Permetti agli utenti di disabilitare gli annunci';
$txt['disallow_sendBody'] = 'Disabilita il testo dei post nelle notifiche';
$txt['queryless_urls'] = 'URL adattati per i motori di ricerca<div class="smalltext"><b>Solo Apache!</b></div>';
$txt['max_image_width'] = 'Ampiezza massima per le immagini nei post (0 = disabilita)';
$txt['max_image_height'] = 'Altezza massima per le immagini nei post (0 = disabilita)';
$txt['enableReportPM'] = 'Abilita la segnalazione dei messaggi privati';
$txt['max_pm_recipients'] = 'Numero massimo di destinatari in un messaggio privato.<div class="smalltext">(0 per nessun limite, gli amministratori sono esonerati)</div>';
$txt['pm_posts_verification'] = 'Numero di post entro i quali gli utenti devono superare una verifica prima di inviare ogni messaggio privato.<div class="smalltext">(0 per nessun limite, gli amministratori sono esonerati)</div>';
$txt['pm_posts_per_hour'] = 'Numero massimo di messaggi privati che un utente può inviare all\'ora.<div class="smalltext">(0 per nessun limite, i moderatori sono esclusi)</div>';
$txt['compactTopicPagesEnable'] = 'Limita il numero di link delle pagine mostrate';
$txt['contiguous_page_display'] = 'Pagine contigue da mostrare';
$txt['to_display'] = 'da mostrare';
$txt['todayMod'] = 'Abilita le date "letterali"';
$txt['today_disabled'] = 'Disabilitato';
$txt['today_only'] = 'Solo Oggi';
$txt['yesterday_today'] = 'Oggi &amp; Ieri';
$txt['topbottomEnable'] = 'Abilita i bottoni Vai su/Vai giù';
$txt['onlineEnable'] = 'Mostra lo stato online/offline nei post e gli MP';
$txt['enableVBStyleLogin'] = 'Mostra un modulo per il login veloce in ogni pagina';
$txt['defaultMaxMembers'] = 'Numero di utenti per pagina nella lista utenti';
$txt['timeLoadPageEnable'] = 'Mostra il tempo occorso per la creazione di ogni pagina';
$txt['disableHostnameLookup'] = 'Disabilita il lookup degli hostname';
$txt['who_enabled'] = 'Abilita la lista di chi è online';
$txt['make_email_viewable'] = 'Consenti la visualizzazione degli indirizzi e-mail';
$txt['meta_keywords'] = 'Meta keywords associate al forum.<div class="smalltext">Per i motori di ricerca, lascia il campo in bianco per le impostazioni di default.</div>';

$txt['karmaMode'] = 'Modalità karma';
$txt['karma_options'] = 'Disabilita il karma|Abilita il karma totale|Abilita il karma positivo/negativo';
$txt['karmaMinPosts'] = 'Imposta il numero minimo di post necessari per la modifica del karma';
$txt['karmaWaitTime'] = 'Imposta in ore il tempo di attesa';
$txt['karmaTimeRestrictAdmins'] = 'Rendi necessario il tempo di attesa anche per gli amministratori';
$txt['karmaLabel'] = 'Etichetta Karma';
$txt['karmaApplaudLabel'] = 'Etichetta per il karma positivo';
$txt['karmaSmiteLabel'] = 'Etichetta per il karma negativo';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>Importante! Leggi qui prima di abilitare queste funzioni.</strong></div><br /> SMF supporta la caching attraverso l\'uso di acceleratori. Gli acceleratori attualmente supportati sono:<br /> <ul class="normallist"> <li>APC</li> <li>eAccelerator</li> <li>Turck MMCache</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (Non Zend Optimizer)</li> <li>XCache</li> </ul> La caching funziona al meglio se hai PHP compilato con uno dei suddetti ottimizzatori o hai disponibile memcache. Se non hai alcun ottimizzatore installato, SMF effettuerà una caching attraverso l\'uso dei file.<br /><br /> SMF effettua caching a diversi livelli. Maggiore è il livello di caching abilitato, maggiore sarà il tempo impiegato dalla CPU per recuperare informazioni nella cache. Se la caching è disponibile sul tuo server, ti raccomandiamo di provare inizialmente il livello 1. <br /><br /> N.B: se usi memcached, dovrai fornire i dettagli del server nelle impostazioni in basso. Tali informazioni dovranno essere inserite, come mostrato nell\'esempio sottostante, in una lista separata da virgole:<br /> &quot;server1,server2,server3:port,server4&quot;<br /><br /> Se non è specificata alcuna porta, SMF utilizzerà la 11211. SMF effettuerà un bilanciamento random del carico dati sui server. <br /><br />  %1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF non ha rilevato alcun acceleratore compatibile sul tuo server.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF ha rilevato APC installato sul tuo server.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF ha rilevato eAccelerator installato sul tuo server.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF ha rilevato MMCache installato sul tuo server.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF ha rilevato Zend installato sul tuo server.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF ha rilevato Memcached installato sul tuo server.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF ha rilevato XCache installato sul tuo server.</strong>';

$txt['cache_enable'] = 'Livello Caching';
$txt['cache_off'] = 'Niente caching';
$txt['cache_level1'] = 'Caching Livello 1 (Raccomandato)';
$txt['cache_level2'] = 'Caching Livello 2';
$txt['cache_level3'] = 'Caching Livello 3 (Non raccomandato)';
$txt['cache_memcached'] = 'Impostazioni Memcache';

$txt['loadavg_warning'] = '<span class="error">Nota: le impostazioni riportate di seguito devono essere modificate con molta attenzione. Impostare un valore troppo basso potrebbe rendere <strong>fuori uso</strong> il forum! Il caricamento medio attuale è <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Abilita l\'ottimizzazione del caricamento per caricamenti medi.';
$txt['loadavg_auto_opt'] = 'Soglia per la disattivazione automatica del sistema di ottimizzazione del database';
$txt['loadavg_search'] = 'Soglia per disattivare la funzione di ricerca';
$txt['loadavg_allunread'] = 'Soglia per disattivare la funzione di visualizzazione dei topic non letti';
$txt['loadavg_unreadreplies'] = 'Soglia per disattivare la funzione di visualizzazione delle risposte non lette';
$txt['loadavg_show_posts'] = 'Soglia per disattivare la funzione di visualizzazione dei post degli utenti.';
$txt['loadavg_forum'] = 'Soglia per disattivare <strong>completamente</forum> il forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Il bilanciamento del caricamento non è supportato in Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Il bilanciamento del caricamento è disabilitato dalla configurazione del tuo host.</span>';

$txt['setting_password_strength'] = 'Complessità richiesta per le password degli utenti';
$txt['setting_password_strength_low'] = 'Basso - Minimo quattro caratteri';
$txt['setting_password_strength_medium'] = 'Medio - Non deve contenere username';
$txt['setting_password_strength_high'] = 'Alto - Insieme di caratteri differenti';

$txt['antispam_Settings'] = 'Verifica anti-spam';
$txt['antispam_Settings_desc'] = 'Questa sezione consente di impostare i controlli verifica per stabilire se un utente è umano (e non un bot), nonché di decidere le modalità di applicazione.';
$txt['setting_reg_verification'] = 'Richiedi la verifica nella pagina di registrazione';
$txt['posts_require_captcha'] = 'Numero di post sotto i quali gli utenti devono passare una verifica per inviare un post';
$txt['posts_require_captcha_desc'] = '(0 per nessun limite, i moderatori sono esonerati)';
$txt['search_enable_captcha'] = 'Richiedi la verifica per tutte le ricerche da parte di visitatori';
$txt['setting_guests_require_captcha'] = 'I visitatori devono passare una verifica prima di poter inviare un post';
$txt['setting_guests_require_captcha_desc'] = '(Viene impostato automaticamente se specifichi in basso un numero minimo di post)';
$txt['guests_report_require_captcha'] = 'I visitatori devono superare la verifica quando segnalano un post';

$txt['configure_verification_means'] = 'Configura i metodi di verifica';
$txt['setting_qa_verification_number'] = 'Numero delle domande di verifica alle quali l\'utente deve rispondere';
$txt['setting_qa_verification_number_desc'] = '(0 per disabilitare; le domande sono impostate in basso)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">In basso puoi decidere quali funzioni anti-spam attivare. Tieni conto che l\'utente dovrà superare <em>tutta</em> la verifica, dunque se attivi sia la verifica dell\'immagine, sia la domanda/risposta, sarà obbligatorio completare entrambe per procedere.</span>';
$txt['setting_visual_verification_type'] = 'Immagine da visualizzare per la verifica visuale';
$txt['setting_visual_verification_type_desc'] = 'Più è complessa l\'immagine, più diventa difficile da bypassare per i bot';
$txt['setting_image_verification_off'] = 'Nessuno';
$txt['setting_image_verification_vsimple'] = 'Molto semplice - Testo normale su immagine';
$txt['setting_image_verification_simple'] = 'Semplice - Sovrapposizione di lettere colorate, nessun disturbo';
$txt['setting_image_verification_medium'] = 'Medio - Sovrapposizione di lettere colorate, con piccoli disturbi';
$txt['setting_image_verification_high'] = 'Elevato - Lettere "angolate" e vistosamente disturbate';
$txt['setting_image_verification_extreme'] = 'Estremo - lettere "angolate" e molto disturbate';
$txt['setting_image_verification_sample'] = 'Esempio';
$txt['setting_image_verification_nogd'] = '<strong>Nota:</strong> le differenti impostazioni di complessità non avranno alcun effetto se la libreria GD non è installata sul server.';
$txt['setup_verification_questions'] = 'Domande di verifica';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Se vuoi che gli utenti rispondano ad una domanda di verifica per evitare bot spam, devi impostare un numero di domande nella tabella sottostante. Devi scegliere domande relativamente semplici; non vengono fatte distinzioni tra maiuscole e minuscole. Puoi utilizzare i codici BBC per la formattazione, mentre per rimuovere la domanda devi solamente cancellare il contenuto di quella riga.</span>';
$txt['setup_verification_question'] = 'Domanda';
$txt['setup_verification_answer'] = 'Risposta';
$txt['setup_verification_add_more'] = 'Aggiungi un\'altra domanda';

$txt['moderation_settings'] = 'Impostazioni Moderazione';
$txt['setting_warning_enable'] = 'Abilita il sistema di richiami utente';
$txt['setting_warning_watch'] = 'Livello di richiamo per il monitoraggio dell\'utente<div class="smalltext">Il livello di richiamo dopo il quale l\'utente viene monitorato - 0 per disabilitare.</div>';
$txt['setting_warning_moderate'] = 'Livello di richiamo per la moderazione post<div class="smalltext">Il livello di richiamo dopo il quale l\'utente va moderato per ogni post inviato - 0 per disabilitare.</div>';
$txt['setting_warning_mute'] = 'Livello di richiamo per l\'inibizione dell\'utente<div class="smalltext">Il livello di richiamo dopo il quale l\'utente non può più inviare post - 0 per disabilitare.</div>';
$txt['setting_user_limit'] = 'Numero massimo di punti richiamo utente per giorno<div class="smalltext">Questo valore è il numero massimo di punti richiamo che un singolo moderatore può assegnare ad un utente nell\'arco delle 24 ore - 0 per nessun limite.</div>';
$txt['setting_warning_decrement'] = 'Punti richiamo da diminuire agli utenti ogni 24 ore<div class="smalltext">Viene applicato solo agli utenti non richiamati nelle ultime 24 ore - imposta a 0 per disabilitare.</div>';
$txt['setting_warning_show'] = 'Utenti che possono visualizzare lo stato dei richiami<div class="smalltext">Determina chi può vedere il livello richiami degli utenti sul forum.</div>';
$txt['setting_warning_show_mods'] = 'Solo moderatori';
$txt['setting_warning_show_user'] = 'Moderatori ed utenti richiamati';
$txt['setting_warning_show_all'] = 'Tutti gli utenti';

$txt['signature_settings'] = 'Impostazioni Firme';
$txt['signature_settings_desc'] = 'Utilizza le impostazioni in questa pagina per decidere come devono essere trattate le firme utenti su SMF.';
$txt['signature_settings_warning'] = 'Nota: in maniera predefinita le impostazioni non verranno applicate alla firma di utenti già registrati. Clicca <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">qui</a> per applicare le impostazioni alle firme preesistenti.';
$txt['signature_enable'] = 'Abilita firme';
$txt['signature_max_length'] = 'Numero massimo di caratteri consentiti<div class="smalltext">(0 per nessun limite)</div>';
$txt['signature_max_lines'] = 'Numero massimo di righe<div class="smalltext">(0 per nessun limite)</div>';
$txt['signature_max_images'] = 'Numero massimo di immagini<div class="smalltext">(0 per nessun limite - Smiley escluse)</div>';
$txt['signature_allow_smileys'] = 'Consenti gli smiley nelle firme';
$txt['signature_max_smileys'] = 'Numero massimo di smiley consentite <div class="smalltext">(0 per nessun limite)</div>';
$txt['signature_max_image_width'] = 'Ampiezza massima per le immagini in firma (in pixel)<div class="smalltext">(0 per nessun limite)</div>';
$txt['signature_max_image_height'] = 'Altezza massima per le immagini in firma (in pixel)<div class="smalltext">(0 per nessun limite)</div>';
$txt['signature_max_font_size'] = 'Dimensione massima dei font in firma<div class="smalltext">(0 per nessun limite, in pixel)</div>';
$txt['signature_bbc'] = 'Tag BBC abilitati';

$txt['custom_profile_title'] = 'Campi personalizzati per il profilo';
$txt['custom_profile_desc'] = 'Da questa pagina puoi creare i tuoi campi personalizzati, in maniera tale da incontrare le tue esigenze per il forum';
$txt['custom_profile_active'] = 'Attivo';
$txt['custom_profile_fieldname'] = 'Nome Campo';
$txt['custom_profile_fieldtype'] = 'Tipo Campo';
$txt['custom_profile_make_new'] = 'Nuovo campo';
$txt['custom_profile_none'] = 'Non hai ancora creato alcun campo personalizzato!';
$txt['custom_profile_icon'] = 'Icona';

$txt['custom_profile_type_text'] = 'Testo';
$txt['custom_profile_type_textarea'] = 'Testo ampio';
$txt['custom_profile_type_select'] = 'Casella di selezione';
$txt['custom_profile_type_radio'] = 'Radio button';
$txt['custom_profile_type_check'] = 'Scelta multipla';

$txt['custom_add_title'] = 'Aggiungi campo profilo';
$txt['custom_edit_title'] = 'Modifica campo del profilo';
$txt['custom_edit_general'] = 'Impostazioni Visualizzazione';
$txt['custom_edit_input'] = 'Impostazioni input';
$txt['custom_edit_advanced'] = 'Impostazioni Avanzate';
$txt['custom_edit_name'] = 'Nome';
$txt['custom_edit_desc'] = 'Descrizione';
$txt['custom_edit_profile'] = 'Sezione Profilo';
$txt['custom_edit_profile_desc'] = 'Sezione del profilo in cui viene modificato';
$txt['custom_edit_profile_none'] = 'Nessuno';
$txt['custom_edit_registration'] = 'Mostra nella pagina di registrazione';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Sì';
$txt['custom_edit_registration_require'] = 'Sì e richiede la compilazione del campo';
$txt['custom_edit_display'] = 'Mostra nella visualizzazione del topic';
$txt['custom_edit_picktype'] = 'Tipo di campo';

$txt['custom_edit_max_length'] = 'Lunghezza massima';
$txt['custom_edit_max_length_desc'] = '(0 per nessun limite)';
$txt['custom_edit_dimension'] = 'Dimensioni';
$txt['custom_edit_dimension_row'] = 'Dimensioni';
$txt['custom_edit_dimension_col'] = 'Colonne';
$txt['custom_edit_bbc'] = 'Abilita BBC';
$txt['custom_edit_options'] = 'Opzioni';
$txt['custom_edit_options_desc'] = 'Per rimuovere, lascia la casella opzione in bianco. Il bottone seleziona l\'opzione di default.';
$txt['custom_edit_options_more'] = 'Altre opzioni';
$txt['custom_edit_default'] = 'Stato Default';
$txt['custom_edit_active'] = 'Attivo';
$txt['custom_edit_active_desc'] = 'Se non viene selezionato, questo campo non verrà visualizzato.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Chi può vedere e modificare questo campo.';
$txt['custom_edit_privacy_all'] = 'Gli utenti possono vedere questo campo, il proprietario può modificarlo';
$txt['custom_edit_privacy_see'] = 'Gli utenti possono vedere questo campo, solo gli amministratori possono modificarlo';
$txt['custom_edit_privacy_owner'] = 'Gli utenti non possono vedere questo campo, il proprietario e gli amministratori possono modificarlo.';
$txt['custom_edit_privacy_none'] = 'Questo campo è visibile ai soli amministratori';
$txt['custom_edit_can_search'] = 'Cercabile';
$txt['custom_edit_can_search_desc'] = 'Questo campo può essere cercato dalla lista utenti.';
$txt['custom_edit_mask'] = 'Maschera input';
$txt['custom_edit_mask_desc'] = 'Per i campi testo, serve selezionare una maschera di inserimento per validare i dati.';
$txt['custom_edit_mask_email'] = 'E-mail valida';
$txt['custom_edit_mask_number'] = 'Numerico';
$txt['custom_edit_mask_nohtml'] = 'No HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Avanzato)';
$txt['custom_edit_enclose'] = 'Mostra racchiuso all\'interno di un testo (opzionale)';
$txt['custom_edit_enclose_desc'] = 'Raccomandiamo <strong>fortemente</strong> di utilizzare una maschera di input per verificare l\'input dell\'utente.';

$txt['custom_edit_placement'] = 'Scegliere Posizionamento';
$txt['custom_edit_placement_standard'] = 'Standard (con titolo)';
$txt['custom_edit_placement_withicons'] = 'Con Icone';
$txt['custom_edit_placement_abovesignature'] = 'Sopra la firma';
$txt['custom_profile_placement'] = 'Posizionamento';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'Con Icone';
$txt['custom_profile_placement_abovesignature'] = 'Sopra la firma';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Sei sicuro di voler cancellare questo campo? Tutti i dati utente relativi verranno rimossi!';

$txt['standard_profile_title'] = 'Campi standard del profilo';
$txt['standard_profile_field'] = 'Campo';

$txt['core_settings_welcome_msg'] = 'Benvenuto sul tuo nuovo forum!';
$txt['core_settings_welcome_msg_desc'] = 'Per iniziare, ti suggeriamo di selezionare quali caratteristiche base di SMF vuoi abilitare. Ti raccomandiamo di attivare solo ciò che ti serve!';
$txt['core_settings_item_cd'] = 'Calendario';
$txt['core_settings_item_cd_desc'] = 'Abilitando questa opzione compariranno delle opzioni per permettere agli utenti di utilizzare il calendario, aggiungere e commentare eventi, visualizzare i compleanni degli utenti e molto altro.';
$txt['core_settings_item_cp'] = 'Campi avanzati del profilo';
$txt['core_settings_item_cp_desc'] = 'Questa opzione permette di nascondere i campi predefiniti del profilo, aggiungerne di nuovi nella pagina di registrazione e crearne altri per il tuo forum.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Il karma è una funzione che indica la popolarità di un utente. Gli utenti, se abilitati, possono aumentare o diminuire il karma di altri utenti, in questo modo viene calcolata la popolarità.';
$txt['core_settings_item_ml'] = 'Registri di moderazione, amministrazione e degli utenti';
$txt['core_settings_item_ml_desc'] = 'Abilita il registro di moderazione ed amministrazione per tenere traccia di tutte le azioni chiave intraprese sul tuo forum. Permette anche di vedere una cronologia dei cambiamenti effettuati da un utente sul proprio profilo.';
$txt['core_settings_item_pm'] = 'Moderazione Post';
$txt['core_settings_item_pm_desc'] = 'La moderazione dei post ti consente di selezionare gruppi e sezioni nei quali i post dovranno essere approvati prima di essere pubblicati. Una volta abilitata questa opzione, assicurati di controllare la sezione permessi per impostare quelli rilevanti.';
$txt['core_settings_item_ps'] = 'Sottoscrizioni a pagamento';
$txt['core_settings_item_ps_desc'] = 'Le sottoscrizioni a pagamento permettono agli utenti di cambiare il gruppo utenti all\'interno del forum e di modificare i propri diritti di accesso.';
$txt['core_settings_item_rg'] = 'Generazione dei Resoconti';
$txt['core_settings_item_rg_desc'] = 'Questa opzione amministrativa permette la generazione di vari resoconti (disponibili anche per la stampa) per visualizzare in maniera semplice l\'attuale impostazione del tuo forum - particolarmente utile nei forum grandi.';
$txt['core_settings_item_sp'] = 'Tracciamento motori di ricerca';
$txt['core_settings_item_sp_desc'] = 'L\'abilitazione di questa opzione permetterà agli amministratori di tracciare i motori di ricerca se questi indicizzano il tuo forum.';
$txt['core_settings_item_w'] = 'Sistema dei richiami';
$txt['core_settings_item_w_desc'] = 'Questa funzione permette a amministratori e moderatori di inviare richiami agli utenti; include anche la funzione avanzata per la rimozione automatica dei permessi utente in relazione all\'aumento del livello di richiamo. Tieni conto che per usufruire di tutti i vantaggi di questa funzione, deve essere abilitata la &quot;Moderazione dei post&quot;.';
$txt['core_settings_switch_on'] = 'Clicca per abilitare';
$txt['core_settings_switch_off'] = 'Clicca per disabilitare';
$txt['core_settings_enabled'] = 'Abilitato';
$txt['core_settings_disabled'] = 'Disabilitato';

$txt['languages_lang_name'] = 'Nome lingua';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Default';
$txt['languages_character_set'] = 'Set caratteri';
$txt['languages_users'] = 'Utenti';
$txt['language_settings_writable'] = 'Attenzione: poichè Settings.php non è scrivibile, l\'impostazione per la lingua default non puoà essere salvata.';
$txt['edit_languages'] = 'Modifica lingue';
$txt['lang_file_not_writable'] = '<strong>Attenzione:</strong> La lingua principale (%1$s) non è scrivibile. Per effettuare modifiche, devi prima renderla scrivibile.';
$txt['lang_entries_not_writable'] = '<strong>Attenzione:</strong> Il file della lingua che intendi modificare (%1$s) non è scrivibile. Per effettuare modifiche, devi prima renderla scrivibile.';
$txt['languages_ltr'] = 'Da destra a sinistra';

$txt['add_language'] = 'Aggiungi lingua';
$txt['add_language_smf'] = 'Scarica da Simple Machines';
$txt['add_language_smf_browse'] = 'Inserisci il nome della lingua da cercare o lascia il campo in bianco per tutti i risultati disponibili.';
$txt['add_language_smf_install'] = 'Installa';
$txt['add_language_smf_found'] = 'Sono state trovate le seguenti lingue. Clicca sul link di installazione vicino alla lingua che desideri aggiungere, verrai automaticamente portato al gestore pacchetti.';
$txt['add_language_error_no_response'] = 'Il sito di Simple Machines non risponde. Riprova più tardi.';
$txt['add_language_error_no_files'] = 'Non sono stati trovati file.';
$txt['add_language_smf_desc'] = 'Descrizione';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versione';

$txt['edit_language_entries_primary'] = 'In basso sono presenti le impostazioni per il pacchetto della lingua.';
$txt['edit_language_entries'] = 'Modifica le voci di lingua';
$txt['edit_language_entries_file'] = 'Seleziona le voci da modificare';
$txt['languages_dictionary'] = 'Dizionario';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'Questa è per <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - Se installato';
$txt['languages_rtl'] = 'Abilita la modalità &quot;Da destra a sinistra&quot;';

$txt['lang_file_desc_index'] = 'Stringhe ';
$txt['lang_file_desc_EmailTemplates'] = 'Modelli per le e-mail';

$txt['languages_download'] = 'Scarica il pacchetto lingua';
$txt['languages_download_note'] = 'Questa pagina elenca tutti i file contenuti nel pacchetto lingua e alcune informazioni utili su ognuno di questi. Tutti i file con la relativa casella di spunta attiva, saranno copiati.';
$txt['languages_download_info'] = '<strong>N.B::</strong> <ul class="normallist"> <li>I file con stato &quot;Non Scrivibile&quot; significano che SMF non potrà copiare quel file nella cartella e che devi rendere la cartella di destinazione scrivibile o utilizzando un client FTP, o inserendo i tuoi dati in fondo alla pagina.</li> <li>Le Informazioni versione indicano per un file l\'ultima versione di SMF per il quale è stato aggiornato. Se viene segnato in verde, allora è disponibile una versione più recente di quella presente sul proprio server. Se ambrato, indica che è la stessa versione presente attualmente, mentre rosso segnala la presenza sul proprio server di una versione più recente di quella contenuta nel pacchetto.</li> <li>Quando un file è già presente sul tuo forum, la colonna &quot;Già esistente&quot; allora presenterà una dei due valori. &quot;Identico&quot; indica che quel file esiste già in una forma identica e non richiede di essere sovrascritto. &quot;Differente&quot; significa che i contenuti variano in qualche modo e che la sovrascrittura è probabilmente la soluzione migliore.</li> </ul';

$txt['languages_download_main_files'] = 'File Primari';
$txt['languages_download_theme_files'] = 'File relativi ai Temi';
$txt['languages_download_filename'] = 'Nome file';
$txt['languages_download_dest'] = 'Destinazione';
$txt['languages_download_writable'] = 'Scrivibile';
$txt['languages_download_version'] = 'Versione';
$txt['languages_download_older'] = 'Hai installata una versione più recente di questo file, quindi non è raccomandabile la sovrascrittura.';
$txt['languages_download_exists'] = 'E\' già esistente';
$txt['languages_download_exists_same'] = 'Identico';
$txt['languages_download_exists_different'] = 'Differente';
$txt['languages_download_copy'] = 'Copia';
$txt['languages_download_not_chmod'] = 'Non ti sarà possibile procedere con l\'installazione fino a quando tutti i file selezionati per la copia non saranno scrivibili.';
$txt['languages_download_illegal_paths'] = 'Il pacchetto contiene percorsi non validi - per favore, contatta Simple Machines';
$txt['languages_download_complete'] = 'Installazione Completata';
$txt['languages_download_complete_desc'] = 'Il pacchetto lingua è stato installato correttamente. Clicca <a href="%1$s">qui</a> per tornare alla pagina della lingua';
$txt['languages_delete_confirm'] = 'Sei sicuro di voler eliminare questa traduzione?';

?>