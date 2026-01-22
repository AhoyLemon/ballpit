<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Termini della Registrazione';
$txt['agreement_agree'] = 'Accetto i termini della registrazione.';
$txt['agreement_agree_coppa_above'] = 'Accetto i termini della registrazione ed ho minimo %1$d anni.';
$txt['agreement_agree_coppa_below'] = 'Accetto i termini della registrazione ed ho meno di %1$d anni.';

// Registration form.
$txt['registration_form'] = 'Casella di Registrazione';
$txt['need_username'] = 'È necessario inserire un nome utente.';
$txt['no_password'] = 'Non è stata inserita alcuna password.';
$txt['incorrect_password'] = 'Password non corretta';
$txt['choose_username'] = 'Scegli un nome utente';
$txt['maintain_mode'] = 'Manutenzione in corso';
$txt['registration_successful'] = 'Registrazione completata!';
$txt['now_a_member'] = 'Complimenti! Ora sei un utente del forum.';
// Use numeric entities in the below string.
$txt['your_password'] = 'e la password è';
$txt['valid_email_needed'] = 'Inserisci un indirizzo e-mail valido, %1$s.';
$txt['required_info'] = 'Informazioni obbligatorie';
$txt['identification_by_smf'] = 'Viene utilizzato per identificarti nel forum.';
$txt['additional_information'] = 'Informazioni aggiuntive';
$txt['warning'] = 'Attenzione!';
$txt['only_members_can_access'] = 'Solo gli utenti registrati possono accedere a questa sezione.';
$txt['login_below'] = 'Effettua l\'accesso in basso o';
$txt['register_an_account'] = 'registra un account';
$txt['login_with_forum'] = 'con %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'È possibile modificarli da questa stessa pagina o dal profilo dopo aver effettuato l\'accesso:';
$txt['your_username_is'] = 'Il tuo nome utente è: ';

$txt['login_hash_error'] = 'Il livello di sicurezza richiesto per la password, è stato aumentato di recente.';

$txt['ban_register_prohibited'] = 'Spiacente, non puoi effettuare la registrazione in questo forum.';
$txt['under_age_registration_prohibited'] = 'Spiacente, ma i minori di %1$d anni non possono effettuare la registrazione in questo forum.';

$txt['activate_account'] = 'Attivazione account';
$txt['activate_success'] = 'L\'account è stato attivato correttamente. Ora è possibile effettuare l\'accesso.';
$txt['activate_not_completed1'] = 'È necessario che il proprio indirizzo e-mail venga verificato prima di effettuare l\'accesso.';
$txt['activate_not_completed2'] = 'Vuoi che l\'e-mail di attivazione venga inviata nuovamente?';
$txt['activate_after_registration'] = 'Grazie per la registrazione. Verrà presto inviata una e-mail con un link per attivare il proprio account. Se non ricevi una e-mail entro poco tempo, controlla la cartella dello spam.';
$txt['invalid_userid'] = 'L\'utente non esiste';
$txt['invalid_activation_code'] = 'Codice di attivazione non valido';
$txt['invalid_activation_username'] = 'Nome utente o e-mail';
$txt['invalid_activation_new'] = 'Se ci si è registrati con un indirizzo e-mail sbagliato, inserirne uno nuovo, insieme alla propria password, qui.';
$txt['invalid_activation_new_email'] = 'Nuovo indirizzo e-mail';
$txt['invalid_activation_password'] = 'Vecchia password';
$txt['invalid_activation_resend'] = 'Rispedisci codice di attivazione';
$txt['invalid_activation_known'] = 'Se conosci già il tuo codice di attivazione, inseriscilo qui.';
$txt['invalid_activation_retry'] = 'Codice di attivazione';
$txt['invalid_activation_submit'] = 'Attiva';

$txt['coppa_no_concent'] = 'L\'amministratore non ha ancora ricevuto il consenso dai genitori/tutori per questo account.';
$txt['coppa_need_more_details'] = 'Sono necessari ulteriori dettagli?';

$txt['awaiting_delete_account'] = 'L\'account è stato marcato per l\'eliminazione!<br />Se vuoi ripristinare il tuo account, spunta la casella &quot;Riattiva il mio account&quot; e accedi di nuovo.';
$txt['undelete_account'] = 'Riattiva il mio account';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Dettagli nuova password';
$txt['change_password_login'] = 'I propri dati di accesso su';
$txt['change_password_new'] = 'sono stati modificati e la password azzerata. Di seguito, sono elencati i nuovi dati di accesso.';

$txt['in_maintain_mode'] = 'Questo forum è in manutenzione.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Leggi e decidi se accettare i termini della registrazione.';
$txt['register_passwords_differ_js'] = 'Le due password inserite non corrispondono!';

$txt['approval_after_registration'] = 'Grazie per aver effettuato la registrazione. L\'amministratore deve approvare la registrazione prima che l\'account possa essere utilizzato; a breve riceverai una e-mail contenente il responso degli amministratori.';

$txt['admin_settings_desc'] = 'Da qui è possibile modificare una serie di impostazioni legate alla registrazione dei nuovi utenti.';

$txt['setting_enableOpenID'] = 'Consenti agli utenti di registrarsi utilizzando OpenID';

$txt['setting_registration_method'] = 'Metodo di registrazione impiegato per i nuovi utenti';
$txt['setting_registration_disabled'] = 'Registrazione disabilitata';
$txt['setting_registration_standard'] = 'Registrazione immediata';
$txt['setting_registration_activate'] = 'Attivazione via e-mail';
$txt['setting_registration_approval'] = 'Approvazione da parte dell\'amministratore';
$txt['setting_notify_new_registration'] = 'Invia una notifica agli amministratori quando si registra un nuovo utente';
$txt['setting_send_welcomeEmail'] = 'Manda un\'e-mail di benvenuto ai nuovi utenti';

$txt['setting_coppaAge'] = 'Età sotto la quale applicare le restrizioni per la registrazione';
$txt['setting_coppaAge_desc'] = '(Imposta a 0 per disabilitare)';
$txt['setting_coppaType'] = 'Azione da eseguire quando si registra un utente sotto la soglia minima di età';
$txt['setting_coppaType_reject'] = 'Rifiuta la registrazione';
$txt['setting_coppaType_approval'] = 'È necessaria l\'approvazione di un genitore/affidatario';
$txt['setting_coppaPost'] = 'Indirizzo postale dove inviare i moduli per l\'approvazione della registrazione';
$txt['setting_coppaPost_desc'] = 'Da applicare solo se si verifica una restrizione dovuta all\'età';
$txt['setting_coppaFax'] = 'Numero di fax dove inviare i moduli di approvazione per la registrazione ';
$txt['setting_coppaPhone'] = 'Numero da contattare per i genitori di utenti sotto la soglia di età minima prevista';

$txt['admin_register'] = 'Registrazione di un nuovo utente';
$txt['admin_register_desc'] = 'In questa sezione è possibile registrare un nuovo utente nel forum e, se lo si desidera, inviargli tramite e-mail i rispettivi dati.';
$txt['admin_register_username'] = 'Nuovo nome utente';
$txt['admin_register_email'] = 'Indirizzo e-mail';
$txt['admin_register_password'] = 'Password';
$txt['admin_register_username_desc'] = 'Nome utente per il nuovo membro';
$txt['admin_register_email_desc'] = 'Indirizzo e-mail dell\'utente';
$txt['admin_register_password_desc'] = 'Password dell\'utente';
$txt['admin_register_email_detail'] = 'Spedisci via e-mail la password all\'utente';
$txt['admin_register_email_detail_desc'] = 'Indirizzo e-mail richiesto, anche se non spuntato';
$txt['admin_register_email_activate'] = 'Obbliga l\'utente ad attivare l\'account';
$txt['admin_register_group'] = 'Membro di gruppo primario';
$txt['admin_register_group_desc'] = 'Il nuovo utente apparterrà come gruppo primario a';
$txt['admin_register_group_none'] = '(nessun gruppo primario)';
$txt['admin_register_done'] = 'L\'utente %1$s è stato registrato correttamente!';

$txt['coppa_title'] = 'Forum con restrizioni sull\'età';
$txt['coppa_after_registration'] = 'Grazie per la registrazione su ' . $context['forum_name_html_safe'] . '.

Poiché la tua età è inferiore a {MINIMUM_AGE} anni, vi è l\'obbligo legale di ottenere il permesso dei genitori o dei tutori prima di poter utilizzare il tuo account. Per ottenere l\'attivazione dell\'account, stampa il modulo sottostante:';
$txt['coppa_form_link_popup'] = 'Carica il modulo in una nuova finestra';
$txt['coppa_form_link_download'] = 'Scarica il modulo come un file di testo';
$txt['coppa_send_to_one_option'] = 'Avvisa i tuoi genitori/tutori che devono inviare il modulo compilato via:';
$txt['coppa_send_to_two_options'] = 'Avvisa i tuoi genitori/tutori che devono inviare il modulo compilato via:';
$txt['coppa_send_by_post'] = 'Posta, al seguente indirizzo:';
$txt['coppa_send_by_fax'] = 'Fax, al seguente numero:';
$txt['coppa_send_by_phone'] = 'In alternativa, puoi contattare direttamente l\'amministratore al numero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Modulo di approvazione della registrazione su ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Indirizzo';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Io {PARENT_NAME},

autorizzo {CHILD_NAME} (nome del minore) a diventare un utente a tutti gli effetti del forum: ' . $context['forum_name_html_safe'] . ', utilizzando il nome utente: {USER_NAME}.

Dichiaro di comprendere che alcune informazioni personali inserite da {USER_NAME} potrebbero essere mostrate ad altri utenti del forum.

Firma:
{PARENT_NAME} (Genitore/Tutore legale).';

$txt['visual_verification_sound_again'] = 'Ascolta di nuovo';
$txt['visual_verification_sound_close'] = 'Chiudi finestra';
$txt['visual_verification_sound_direct'] = 'Ci sono problemi con l\'audio? Prova con un link diretto.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nome utente disponibile';
$txt['registration_username_unavailable'] = 'Nome utente non disponibile';
$txt['registration_username_check'] = 'Controlla se il nome utente è disponibile';
$txt['registration_password_short'] = 'La password è troppo breve';
$txt['registration_password_reserved'] = 'La password contiene il tuo nome utente/e-mail';
$txt['registration_password_numbercase'] = 'La password deve contenere caratteri maiuscoli, minuscoli e numeri';
$txt['registration_password_no_match'] = 'Le password non coincidono';
$txt['registration_password_valid'] = 'La password è valida';

$txt['registration_errors_occurred'] = 'Sono stati riscontrati i seguenti errori nella tua registrazione. Correggili per continuare:';

$txt['authenticate_label'] = 'Metodo di Autenticazione';
$txt['authenticate_password'] = 'Password';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL di autenticazione OpenID';

?>