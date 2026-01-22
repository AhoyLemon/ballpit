<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Chiudi finestra';

$helptxt['manage_boards'] = '	<strong>Gestione sezioni</strong><br />
	In questo menu è possibile creare/riordinare/rimuovere le sezioni e le categorie. 
	Nel caso di un forum di grandi dimensioni 
	che offre informazioni su &quot;Sport&quot;, &quot;Macchine&quot; e &quot;Musica&quot;, queste
	sarebbero le categorie di livello superiore da creare. All\'interno di ciascuna di queste
	categorie si potranno creare delle &quot;sottocategorie&quot; strutturate gerarchicamente
	oppure delle &quot;sezioni&quot; dedicate a argomenti specifici. Si tratta di una semplice organizzazione gerarchica, con questa struttura: <br />
	<ul>
		<li>
			<strong>Sport</strong>
			&nbsp;- Una &quot;categoria&quot;
		</li>
		<ul>
			<li>
				<strong>Baseball</strong>
				&nbsp;- Una sezione all\'interno della categoria degli &quot;Sport&quot;
			</li>
			<ul>
				<li>
					<strong>Statistiche</strong>
					&nbsp;- Una sezione minore all\'interno della sezione del &quot;Baseball&quot;
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- Una sezione all\'interno della categoria degli &quot;Sport&quot;</li>
		</ul>
	</ul>
	Le categorie permettono di organizzare il forum individuando gli argomenti principali (&quot;Macchine,
	Sport&quot;), le &quot;sezioni&quot; si trovano all\'interno della categorie e sono il punto in cui 
	gli utenti possono effettivamente scrivere le proprie opinioni: un utente interessato alle macchine Fiat
	scriverà un messaggio in &quot;Macchine->Fiat&quot;. Le categorie permettono agli utenti di
	trovare velocemente quello che cercano: invece di un semplice &quot;Negozio&quot; si avranno
	negozi di &quot;Informatica&quot; e &quot;Abbigliamento&quot;. Questo semplifica la 
	ricerca di un &quot;componente per il computer&quot; poiché è possibile accedere alla &quot;categoria&quot; 
	Negozio di Informatica invece che Negozio d\'abbigliamento (dove difficilmente 
	si troverebbe il componente per computer cercato).<br />
	Come indicato in precedenza, una sezione è un argomento chiave all\'interno di una categoria più grande.
	Per discutere delle &quot;Fiat&quot; bisogna andare alla categoria delle &quot;Auto&quot; e
	poi alla sezione sulle &quot;Fiat&quot;.<br />
	Attraverso questa sezione gli amministratori possono creare nuove sezioni
	all\'interno delle categorie, riordinarle (mettere le &quot;Fiat&quot; prima delle &quot;Lancia&quot;) o
	cancellare sezioni intere.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <strong>News</strong><br />Questa sezione permette di impostare il testo delle notizie visualizzate nella pagina iniziale del forum. Aggiungi tutti gli elementi che vuoi (es. &quot;Non perdetevi la conferenza questo martedì&quot;). Ogni elemento viene mostrato casualmente e situato in una casella separata. </li> <li> <strong>Newsletters</strong><br /> Questa sezione ti permette di inviare la newsletter agli utenti del forum via messaggio privato o e-mail. Per prima cosa, seleziona i gruppi che vuoi che ricevano la newsletter e quelli che invece non dovranno riceverla. Se desideri, puoi aggiungere ulteriori utenti ed indirizzi e-mail. Infine, scrivi il messaggio che vuoi inviare e se vuoi che venga inviato agli utenti tramite messaggio personale o e-mail. </li> <li> <strong>Impostazioni</strong><br /> Questa sezione contiene le impostazioni relative alle notizie e alle newsletter, inclusa la selezione dei gruppi che possono modificare le notizie del forum o inviare una newsletter. È anche presente un\'opzione per configurare i feed delle notizie abilitati su questo forum, come un\'impostazione per decidere la lunghezza (quanti caratteri vuoi che vengano mostrati) per ogni post proveniente da un feed di notizie. </li> </ul>';

$helptxt['view_members'] = '	<ul>
		<li>
			<strong>Visualizza tutti gli utenti</strong><br />
				Visualizza tutti gli utenti del forum sotto forma di lista con collegamenti ipertestuali. È possibile fare clic
				su uno qualsiasi dei nomi per mostrare i dettagli dell\'utente (sito internet, età, ecc.); un amministratore
				può anche modificare questi parametri. In altre parole si ha il controllo completo degli utenti, inclusa la
				possibilità di cancellarli dal forum.<br /><br />
		</li>
		<li>
			<strong>In attesa di approvazione</strong><br />
			Questa sezione viene mostrata solo se è abilitata l\'approvazione di tutte le nuove registrazioni da parte degli amministratori. Chiunque si registri per unirsi al
			forum diventerà utente normale solo dopo l\'approvazione di un amministratore. La sezione mostra una lista di tutti gli utenti che
			stanno ancora aspettando l\'approvazione, insieme al loro indirizzo e-mail e all\'indirizzo IP. È possibile scegliere se accettare o rifiutare (cancellare)
			qualsiasi utente dalla lista spuntando la casella posizionata sulla stessa riga dell\'utente e selezionando l\'azione dal menu a discesa nella parte inferiore
			dello schermo. Quando si rifiuta l\'iscrizione di un utente è possibile scegliere se notificare o meno la cancellazione all\'utente stesso.<br /><br />
		</li>
		<li>
			<strong>In attesa di attivazione</strong><br />
			Questa sezione sarà visibile solo se è prevista l\'attivazione degli account degli utenti. Questa sezione mostra una 
			lista di tutti gli utenti che non hanno ancora attivato il proprio account: da questa pagina è possibile scegliere se accettare o rifiutare la richiesta oppure  
			inviare un promemoria agli utenti. Anche in questo caso è possibile scegliere se inviare una e-mail agli utenti per informarli
			della decisione.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Utenti interdetti</strong><br />
	SMF fornisce la possibilità di &quot;interdire&quot; gli utenti, per impedire alle persone che hanno tradito la fiducia del forum
	di inserire spam, generare discussioni fuori regolamento, ecc. Questa funzione permette di escludere gli utenti che sono negativi per il forum.
	Come amministratore, visualizzando i messaggi è possibile leggere anche l\'indirizzo IP utilizzato in quel momento dall\'utente. Inserire l\'indirizzo IP nella lista degli utenti
	interdetti e salvare: da questo momento non potranno più scrivere messaggi da quella 
	postazione.<br />È anche possibile escludere le persone utilizzando l\'indirizzo e-mail.';

$helptxt['featuresettings'] = '<strong>Funzionalità e Opzioni</strong><br /> In questa sezione sono presenti diverse funzionalità che potrai modificare a tuo piacimento.';

$helptxt['securitysettings'] = '<strong>Sicurezza e Moderazione</strong><br /> Questa sezione contiene le impostazioni relative alla sicurezza e alla funzione di moderazione del tuo forum.';

$helptxt['modsettings'] = '<strong>Caratteristiche e opzioni</strong><br />
	In questa sezione è possibile modificare molte funzionalità del forum; le opzioni di mod (pacchetti di modifica) eventualmente installati dovrebbero essere visualizzate all\'interno di questa sezione.';

$helptxt['number_format'] = '<strong>Formato predefinito dei numeri</strong><br />
	È possibile utilizzare questa impostazione per modificare il modo in cui i numeri vengono visualizzati sul forum. Il formato di questo parametro è:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Dove \',\' è il carattere usato per suddividere le migliaia, \'.\' è il carattere usato come separatore dei decimali, il numero degli zero indica la precisione degli arrotondamenti.';

$helptxt['time_format'] = '<strong>Formato predefinito della data</strong><br />
	In questa sezione è possibile impostare il formato dell\'ora e della data: sebbene si possano utilizzare diverse combinazioni di lettere, non è un\'operazione complessa.
	La struttura è la stessa della funzione PHP strftime e i possibili valori sono indicati di seguito (ulteriori informazioni sono disponibili su <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	I seguenti caratteri sono riconosciuti come parametri nella stringa per il formato: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nome abbreviato del giorno della settimana<br />
	&nbsp;&nbsp;%A - nome completo del giorno della settimana<br />
	&nbsp;&nbsp;%b - nome abbreviato del mese<br />
	&nbsp;&nbsp;%B - nome completo del mese<br />
	&nbsp;&nbsp;%d - giorno del mese (da 01 a 31)<br />
	&nbsp;&nbsp;%D<strong>*</strong> - stesso di %m/%d/%y<br />
	&nbsp;&nbsp;%e<strong>*</strong> - giorno del mese (da 1 a 31)<br />
	&nbsp;&nbsp;%H - ore usando un orologio a ventiquattro ore (da 00 a 23)<br />
	&nbsp;&nbsp;%I - ore usando un orologio a dodici ore (da 01 a 12)<br />
	&nbsp;&nbsp;%m - mese in cifre (da 01 a 12)<br />
	&nbsp;&nbsp;%M - minuti in cifre<br />
	&nbsp;&nbsp;%p - &quot;am&quot; o &quot;pm&quot; sulla base dell\'ora<br />
	&nbsp;&nbsp;%R<strong>*</strong> - formato ore a ventiquattro ore<br />
	&nbsp;&nbsp;%S - secondi come numero decimale<br />
	&nbsp;&nbsp;%T<strong>*</strong> - orario attuale, come in %H:%M:%S<br />
	&nbsp;&nbsp;%y - anno a due cifre (da 00 a 99)<br />
	&nbsp;&nbsp;%Y - anno a quattro cifre<br />
	&nbsp;&nbsp;%Z - fuso orario/nome zona o abbreviazione<br />
	&nbsp;&nbsp;%% - il carattere \'%\'<br />
	<br />
	<em>* Non funziona su server Windows.</em></span>';

$helptxt['live_news'] = '<strong>Direttamente da Simple Machines...</strong><br />
	Questo riquadro visualizza le ultime notizie da <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.
	Si consiglia di verificare periodicamente la presenza di aggiornamenti, notizie e informazioni importanti inserite dal Team di Simple Machines.';

$helptxt['registrations'] = '<strong>Gestione registrazione</strong><br />
	Questa sezione contiene tutte le funzioni relative alla gestione della registrazione di nuovi utenti. Contiene fino a quattro
	sezioni visibili sulla base delle impostazioni del forum:<br /><br />
	<ul>
		<li>
			<strong>Registra nuovo utente</strong><br />
			Da questa pagina è possibile registrare direttamente dei nuovi account. Questa sezione è indispensabile nei forum dove la registrazione è chiusa
			ai nuovi utenti o nei casi in cui l\'amministratore desidera creare un account di prova. Se si è scelto di richiedere l\'attivazione dell\'account
			l\'utente riceverà una e-mail con un link di attivazione da utilizzare per poter attivare l\'account. È possibile scegliere se inviare  
			una e-mail agli utenti con una nuova password all\'indirizzo specificato nel profilo.
		</li>
		<li>
			<strong>Modifica il documento di accettazione alla registrazione</strong><br />
			Questa sezione permette di impostare il testo per il documento di accettazione alla registrazione visualizzato quando gli utenti si iscrivono al forum.
			È possibile aggiungere o rimuovere qualsiasi parte dal testo predefinito presente in SMF.
		</li>
		<li>
			<strong>Imposta nomi riservati</strong><br />
			Questa sezione permette di impostare delle parole o dei nomi riservati: in questo modo gli utenti non potranno utilizzarli per il proprio nome utente.
		</li>
		<li>
			<strong>Preferenze</strong><br />
			Questa sezione sarà visibile se si ha il permesso di amministrare il forum. Da questa pagina è possibile decidere quale metodo di registrazione
			utilizzare sul forum, e anche altreimposdtazioni relative alla registrazione.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Registro delle azioni di moderazione</strong><br />
	Questa sezione permette agli amministratori di tenere traccia di tutte le azioni di moderazione eseguite dai moderatori del forum. Per evitare che
	i moderatori possano rimuovere riferimenti alle proprie azioni, gli elementi non possono essere cancellati finché non sono trascorse 24 ore dall\'esecuzione.
	La colonna  \'oggetti\' mostra tutte le variabili associate all\'azione.';
$helptxt['adminlog'] = '<strong>Registro Amministrazione</strong><br /> Questa sezione permette agli amministratori di tracciare alcune delle azioni amministrative eseguite sul forum. Per assicurarsi che gli amministratori non possano rimuovere tali riferimenti, i dati delle azioni non potranno essere cancellati se più recenti di 24 ore dalla loro esecuzione.';
$helptxt['warning_enable'] = '<strong>User Warning System</strong><br />
	This feature enables members of the admin and moderation team to issue warnings to users - and to use a users warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to users. Warning levels can be adjusted from a users profile. The following additional options are available:
	<ul>
		<li>
			<strong>Warning Level for User Watch</strong><br />
			This setting defines the percentage warning level a user must reach to automatically assign a &quot;watch&quot; to the user.
			Any user who is being &quot;watched&quot; will appear in the relevant area of the moderation center.
		</li>
		<li>
			<strong>Warning Level for Post Moderation</strong><br />
			Any user passing the value of this setting will find all their posts require moderator approval before they appear to the forum
			community. This will override any local board permissions which may exist related to post moderation.
		</li>
		<li>
			<strong>Warning Level for User Muting</strong><br />
			If this warning level is passed by a user they will find themselves under a post ban. The user will lose all posting rights.
		</li>
		<li>
			<strong>Maximum User Warning Point per Day</strong><br />
			This setting limits the amount of points a moderator may add/remove to any particular user in a twenty four hour period. This will
			can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero. Note that
			any users with administrator permissions are not affected by this value.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Registro degli errori del forum</strong><br />
	Il registro degli errori tiene traccia di ogni errore incontrato dagli utenti durante l\'utilizzo del forum. Mostra una lista di tutti gli errori ordinati per data: è possibile modificare 
	l\'ordine  facendo clic sulla freccia nera accanto a ogni data. Inoltre è possibile puoi filtrare gli errori facendo clic sulla figura di fianco a ogni statistica d\'errore. Questo
	permette di filtrarli, per esempio, in base all\'utente. Quando un filtro è attivo verranno visualizzati solo i risultati che soddisfano il filtro impostato.';
$helptxt['theme_settings'] = '<strong>Impostazioni correnti del tema</strong><br />
	Questa sezione permette di cambiare le impostazioni specifiche di un tema. È possibile modificare opzioni come la cartella di installazione e l\'URL oppure preferenze che influenzano 
	l\'aspetto stesso del tema. La maggior parte dei temi dispone di una varietà di opzioni che possono essere configurate dall\'utente, permettendogli di adattare il tema
	alle proprie necessità.';
$helptxt['smileys'] = '<strong>Pacchetti di smiley</strong><br />
	In questa sezione è possibile aggiungere o rimuovere gli smiley: se uno smiley appartiene a un gruppo appartiene anche a tutti gli altri gruppi -
	in caso contrario si creerebbe confusione negli utenti.<br /><br />
	
	È anche possibile modificare le icone dei messaggi, se sono state abilitate nella pagine delle preferenze.';
$helptxt['calendar'] = '<strong>Gestione agenda</strong><br />
	Da qui è possibile modificare le impostazioni correnti dell\'agenda come anche aggiungere ed elimnare le feste che compaiono in essa.';

$helptxt['serversettings'] = '<strong>Impostazioni server</strong><br />
	Qui è possibile effettuare la configurazione di base del forum. Questa sezione include le impostazioni per il database e l\'URL, come pure altre
	importanti voci di configurazione come le impostazioni di posta e il caching. Modificare con moltissima attenzione queste impostazioni poiché un errore qualsiasi potrebbe
	rendere il forum inaccessibile';
$helptxt['manage_files'] = '
	<ul>
		<li>
			<strong>Browse Files</strong><br />
			Browse through all the attachments, avatars and thumbnails stored by SMF.<br /><br />
		</li><li>
			<strong>Attachment Settings</strong><br />
			Configure where attachments are stored and set restrictions on the types of attachments.<br /><br />
		</li><li>
			<strong>Avatar Settings</strong><br />
			Configure where avarars are stored and manage resizing of avatars.<br /><br />
		</li><li>
			<strong>File Maintenance</strong><br />
			Check and repair any error in the attachment directory and delete selected attachments.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Permette di impostare il numero di messaggi visualizzati nel sommario di un topic nella pagina di risposta.';
$helptxt['enableAllMessages'] = 'Da impostare col <em>massimo</em> numero di messaggi che un topic può avere per mostrare il link a tutti.  Impostarlo più basso del &quot;Massimo numero di messaggi da visualizzare in una pagina di topic&quot; lo renderà semplicemente invisibile, e impostandolo troppo alto potrebbe rallentare il forum.';
$helptxt['enableStickyTopics'] = 'I topic importanti rimangono in cima all\'indice della sezione. Normalmente vengono utilizzati per messaggi importanti. Benché si possano modificare in qualsiasi momento i permessi relativi ai vari topic, come impostazione predefinita è consentito solamente a moderatori ed amministratori impostare i topic come importanti.';
$helptxt['allow_guestAccess'] = 'Togliendo la spunta a questa casella, agli ospiti sarà concesso solo di compiere le azioni di base sul forum: accedere, registrarsi, richiedere il promemoria della password, ecc.  Questa opzione non è la stessa cosa che impedire agli ospiti l\'accesso alle sezioni.';
$helptxt['userLanguage'] = 'Attivando questa opzione si consentirà agli utenti di selezionare
	la lingua da utilizzare. Questa scelta non influenzerà l\'impostazione predefinita.';
$helptxt['trackStats'] = 'Statistiche:<br />permette agli utenti di vedere gli ultimi messaggi
	inseriti e gli argomenti più popolari sul forum.	Visualizza anche altre statistiche, come gli utenti più attivi, gli ultimi iscritti e gli ultimi topic inseriti.<hr />
	Pagine visitate:<br />aggiunge un\'ulteriore colonna alle statistiche con il numero di pagine visitate del forum.';
$helptxt['titlesEnable'] = 'Abilitando i titoli personalizzati si consente agli utenti con i dovuti permessi di impostare un testo personalizzato.
		Questo testo verrà mostrato sotto al nome utente.<br /><em>Ad esempio:</em><br />Jeff<br />Tizio Divertente';
$helptxt['topbottomEnable'] = 'Aggiunge i pulsanti per spostarsi in alto e in basso, in modo che gli utenti possano andare in alto e in basso all\'interno di in una pagina 
		senza doverla scorrere completamente.';
$helptxt['onlineEnable'] = 'Mostra un\'immagine per indicare se l\'utente è collegato o scollegato';
$helptxt['todayMod'] = 'Mostra &quot;Oggi&quot; o &quot;Ieri&quot; al posto della data.<br /><br />  <strong>Esempi:</strong><br /><br />  <dt>  <dt>Disabilitato</dt>  <dd>3 Ottobre, 2009 alle 12:59:18 am</dd>  <dt>Solo Oggi</dt>  <dd>Oggi alle 12:59:18 am</dd>  <dt>Oggi &amp; Ieri</dt>  <dd>Ieri alle 09:36:55 pm</dd>  </dt>';
$helptxt['disableCustomPerPage'] = 'Spunta questa opzione per impedire agli utenti di personalizzare il numero di post e topic da visualizzare per pagina, sia nell\'indice dei messaggi, che nell\'indice dei topic.';
$helptxt['enablePreviousNext'] = 'Mostra un collegamento all\'argomento precedente e a quello successivo.';
$helptxt['pollMode'] = 'Imposta l\'abilitazione dei sondaggi. Se i sondaggi sono disabilitati ogni
	sondaggio esistente viene nascosto dalla lista degli argomenti. Si può scegliere se continuare a mostrare regolarmente gli argomenti senza i sondaggi selezionando
	&quot;Mostra i sondaggi esistenti come argomenti&quot;.<br /><br />Attraverso i permessi è possibile scegliere chi può inserire i sondaggi, visualizzarli e via dicendo.
	Verificare i permessi nel caso in cui i sondaggi non funzionino regolarmente.';
$helptxt['enableVBStyleLogin'] = 'Mostra agli ospiti una richiesta d\'accesso più compatta in ogni pagina del forum.';
$helptxt['enableCompressedOutput'] = 'Questa opzione comprime i dati prodotti per ridurre il consumo di banda; richiede
	l\'installazione di zlib.';
$helptxt['disableTemplateEval'] = 'Per default, i template sono valutati invece di essere inclusi. Questo aiuta a mostrare più utili informazioni di debug nel caso in cui un template contiene un errore. <br /> <br /> Tuttavia dei forum di grandi dimensioni, questo processo di inclusione personalizzata potrebbero essere essere molto più lenti. Pertanto, gli utenti avanzati potrebbero voler disattivarlo.';
$helptxt['databaseSession_enable'] = 'Questa opzione abilita l\'uso del database per il salvataggio della sessione - è la scelta ideale per i server con bilanciamento del carico, ma aiuta anche in caso di problemi di timeout e può rendere il forum più veloce. Non funziona se session.auto_start è abilitato.';
$helptxt['databaseSession_loose'] = 'Abilitando questa opzione si diminuisce il consumo di banda del forum e si fa in modo che, facendo clic su \'Torna indietro una pagina\', la pagina non venga ricaricata - l\'aspetto negativo è che, ad esempio, le icone non si aggiornano (a meno che non si faccia clic su quella pagina invece di tornare indietro).';
$helptxt['databaseSession_lifetime'] = 'È il numero di secondi di inattività dopo cui le sessioni vengono chiuse. Se non si accede a una sessione per troppo tempo, si dice che la sessione è &quot;scaduta&quot;. Si consiglia di impostare un valore superiore a 2400.';
$helptxt['enableErrorLogging'] = 'Serve per tenere traccia di tutti gli errori, come ad esempio un accesso fallito, e per individuare eventuali problemi.';
$helptxt['enableErrorQueryLogging'] = 'Questo includerà la query completa mandata al database in caso di errore. E\' necessario che il registro errori sia abilitato.<br /><br /><strong>N.B: Questa opzione intaccherà la possibilità di filtrare il registro errori in base ai messaggi.</strong>';
$helptxt['allow_disableAnnounce'] = 'Permette agli utenti di disabilitare la notifica di nuovi topic annunciati spuntando la casella &quot;annuncia topic&quot; quando si invia un messaggio';
$helptxt['disallow_sendBody'] = 'Questa opzione elimina la possibilità di ricevere il contenuto delle risposte e dei messaggi nelle e-mail di notifica.<br /><br />Spesso, gli utenti rispondono alle e-mail di notifica, cosa che di solito si traduce nella ricezione della risposta da parte del webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Mostra una selezione del numero delle pagine.<br /><em>Esempio:</em>
		&quot;3&quot; da visualizzare: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; da visualizzare: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Visualizza nella parte inferiore della finestra il tempo in secondi che SMF ha impiegato per generare la pagina.';
$helptxt['removeNestedQuotes'] = 'Mostra solamente la citazione del messaggio selezionato e non tutte le altre citazioni al suo interno.';
$helptxt['simpleSearch'] = 'Mostra un modulo di ricerca semplice e un collegamento a un modulo di ricerca più avanzata.';
$helptxt['max_image_width'] = 'Permette di impostare una dimensione massima per le immagini inserite. Le immagini inferiori alla dimensione massima non vengono influenzate.';
$helptxt['mail_type'] = 'Permette di scegliere le impostazioni predefinite di PHP, oppure di superare tali impostazioni con SMTP.  PHP non gestisce l\'autenticazione con SMTP (cosa richiesta da molti host, oggigiorno) quindi se la si desidera bisogna selezionare SMTP.  Si noti che SMTP può essere più lento, e alcuni server non accettano nomi utente e password.<br /><br />Non è necessario riempire le impostazioni SMTP se si usano le impostazioni predefinite PHP.';
$helptxt['attachment_manager_settings'] = 'Gli allegati sono dei files che gli utenti possono caricare, e allegare ad un post.<br /><br /> <strong>Controlla l\'estensione dell\'allegato</strong>:<br /> Vuoi controllare l\'estensione dei files?<br /> <strong>Estensioni di allegati permesse</strong>:<br /> Puoi settare le estensioni permesse degli allegati.<br /> <strong> Directory degli allegati</strong>:<br /> L\'indirizzo della cartella del tuo allegato<br />(esempio: /home/sites/yoursite/www/forum/allegati)<br /> <strong>Spazio massimo consentito per allegati</strong> (in KB):<br /> Scegli quanto deve essere grande la cartella degli allegati, inclusi tutti i files dentro.<br /> <strong>Massima grandezza dell\' allegato per post</strong> (in KB):<br /> Scegli la grandezza massima raggiungibile per tutti gli allegati nel post. Se questa è piu bassa del limite per-allegato, allora questa sarà il limite.<br /> <strong>Massima grandezza per allegato</strong> (in KB):<br /> Scegli la massima grandezza dei files per ogni allegato.<br /> <strong>Massimo numero di allegati per post</strong>:<br /> Scegli il numero di allegati che una persona puo\' fare, per post.<br /> <strong>MOstra gli allegati come immagini nei post</strong>:<br /> Se il file caricato è un immagine, questa verra\' mostrata sotto il post.<br /> <strong>Ridimensiona immagini quando sono mostrate in fondo ai post</strong>:<br /> Se l\'opzione di sopra è stata selezionata, questo salvera\' un separato(piu piccolo) allegato per migliorare la banda internet.<br /> <strong> Massima larghezza e altezza delle immagini</strong>:<br /> Usato solamente con il &quote;Ridimensiona le immagini quando si trovano sotto il post&quote; opzione, la larghezza e l\'altezza massima per ridimensionare gli allegati partendo da sotto. Saranno ridimensionati proporzionalmente. ';
$helptxt['attachment_image_paranoid'] = 'Questa opzione attiverà un controllo di sicurezza molto rigido sulle immagini allegate. Attenzione! Questi controlli possono segnalare come pericolose anche immagini che non lo sono. È caldamente consigliato utilizzare questa opzione solo in associazione con la ricodifica delle immagini, in tal modo SMF tenterà di ricreare le immagini che falliscono il controllo di sicurezza: se la ricodifica avviene con successo significa che le immagini sono state rese sicure e possono essere caricate come allegati. Se invece la ricodifica dell\'immagine non è attiva, tutti gli allegati che falliscono il controllo di sicurezza saranno respinti.';
$helptxt['attachment_image_reencode'] = 'Selezionando questa opzione SMF tenterà di ricodificare le immagini caricate come allegati. La ricodifica delle immagini offre maggiore sicurezza, ma allo stesso tempo rende statiche tutte le immagini animate. <br /> Questa funzione è disponibile solo se il modulo GD è installato sul tuo server.';
$helptxt['avatar_paranoid'] = 'Selezionando questa opzione verranno abilitati controlli di sicurezza molto rigidi sugli avatar. Attenzione! Questi controlli potrebbero respingere anche immagini valide. Si consiglia caldamente di utilizzare questa funzione solo insieme alla ricodifica degli avatar in modo da consentire ad SMF di ricampionare le immagini che falliscono il controllo di sicurezza: se la ricodifica ha successo, l\'immagine sarà resa sicura e caricata. Altrimenti se la ricodifica degli avatar non è abilitata, tutti quelli che non passeranno il controllo di sicurezza verranno rifiutati.';
$helptxt['avatar_reencode'] = 'Selezionando questa opzione SMF tenterà di ricodificare gli avatar caricati. La ricodifica delle immagini offre maggiore sicurezza, ma allo stesso tempo rende statiche tutte le immagini animate. <br /> Questa funzione è disponibile solo se il modulo GD è installato sul tuo server.';
$helptxt['karmaMode'] = 'Il Karma è la funzione che misura la popolarità di un utente.
	Gli utenti, se ne hanno il permesso, possono \'elogiare\' o \'bastonare\' altri utenti, permettendo così il calcolo della popolarità. È possibile cambiare il 
	numero di messaggi necessari per avere un &quot;karma&quot;, il tempo che deve trascorrere tra gli \'elogi\' e le \'bastonate\', e se gli amministratori devono anche loro rispettare questo tempo.<br /><br />La
	possibilità per i gruppi di utenti di \'bastonare\' altri utenti è gestita attraverso un apposito permesso.  Se si verificano dei problemi con questa funzione, si
	consiglia un controllo incrociato sui permessi.';
$helptxt['cal_enabled'] = 'L\'agenda può essere usata per mostrare i compleanni o gli eventi importanti nella vita della comunità.<br /><br />
	<strong>Mostra i giorni come collegamento a \'Inserisci evento\'</strong>:<br />permette agli utenti di inserire eventi per una giornata facendo clic sulla data.<br />
	<strong>Mostra i numeri delle settimane</strong>:<br />mostra la settimana in cui ci si trova.<br />
	<strong>Numero di giorni di anticipo nell\'indice della sezione</strong>:<br />se questo parametro è impostato a 7, verranno visualizzati gli eventi della settimana successiva.<br />
	<strong>Mostra le festività nell\'indice della sezione</strong>:<br />mostra le festività di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<strong>Mostra i compleanni nell\'indice della sezione</strong>:<br />mostra i compleanni di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<strong>Mostra gli eventi nell\'indice della sezione</strong>:<br />mostra gli eventi di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<strong>Permette eventi non collegati a messaggi</strong>:<br />Permette agli utenti di aggiungere eventi senza che sia necessario collegarli con un messaggio in una sezione.<br />
	<strong>Sezione predefinita per gli inserimenti</strong>:<br />qual è la sezione predefinita in cui inserire eventi?<br />
	<strong>Primo anno</strong>:<br />selezionare il &quot;primo&quot; anno sulla lista dell\'agenda.<br />
	<strong>Ultimo anno</strong>:<br />selezionare l\'&quot;ultimo&quot; anno sulla lista dell\'agenda.<br />
	<strong>Colore del compleanno</strong>:<br />selezionare il colore del testo del compleanno<br />
	<strong>Colore dell\'evento</strong>:<br />selezionare il colore del testo dell\'evento<br />
	<strong>Colore della festività</strong>:<br />selezionare il colore del testo della festività o vacanza.<br />
	<strong>Permetti agli eventi di impegnare più giorni</strong>:<br />selezionare questa opzione per permettere agli eventi di impegnare più giorni.<br />
	<strong>Numero massimo di giorni che un evento può impegnare</strong>:<br />selezionare il numero massimo di giorni che un evento può impegnare.<br /><br />
	Si ricordi che l\'uso dell\'agenda (l\'inserimento e la visualizzazione degli eventi ecc.) è controllato dai permessi impostati nell\'apposita pagina.';
$helptxt['localCookies'] = 'SMF usa i cookie per salvare le informazioni d\'accesso sul computer di chi accede al forum.
	I cookie possono essere salvati a livello globale (myserver.com) o locale (myserver.com/percorso/per/il/forum).<br />
	Verificare questa opzione se si rilevano dei problemi con l\'uscita automatica degli utenti.<hr />
	I cookie salvati a livello globale sono meno sicuri quando usati su di un server web condiviso (come Tripod).<hr />
	I cookie salvati in locale non funzionano al di fuori della cartella del forum così, se il forum è posizionato all\'indirizzo www.ilmioserver.com/forum, pagine come www.ilmioserver.com/indice.php non potranno accedere alle informazioni sugli account.
	Quando si usa SSI.php si raccomanda di salvare i cookie a livello globale.';
$helptxt['enableBBC'] = 'Questa opzione consente agli utenti di usare il Bulletin Board Code (BBC) nel forum, permettendo di formattare i messaggi con immagini, stili e altri elementi.';
$helptxt['time_offset'] = 'Non tutti gli amministratori del forum desiderano che il forum usi lo stesso fuso orario del server su cui è ospitato. Questa opzione permette di specificare una differenza (in ore) tra l\'orario del forum e quello del server. Sono consentiti valori negativi e decimali.';
$helptxt['default_timezone'] = 'Il fuso orario del server indica su PHP dove è localizzato il tuo server. Devi assicurarti che questa impostazione sia corretta, preferibilmente in base alla nazione/città dove è localizzato. Puoi trovare ulteriori informazioni sul <a href="http://www.php.net/manual/it/timezones.php" target="_blank">sito di PHP</a>.';
$helptxt['spamWaitTime'] = 'È possibile indicare il tempo che deve trascorrere tra l\'inserimento di due messaggi. Questo può essere usato per impedire agli utenti di "spammare" sul forum limitando la frequenza con cui possono scrivere.';

$helptxt['enablePostHTML'] = 'Questa opzione permette l\'inserimento di alcuni semplici tag HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'È possibile scegliere se il tema predefinito può essere scelto 
	dagli utenti, quale tema utilizzeranno gli ospiti e altre opzioni. Facendo clic a destra di un tema si possono modificare le relative impostazioni.';
$helptxt['theme_install'] = 'Permette l\'installazione di nuovi temi: è possibile usare una cartella già presente, caricare un file archivio con il tema oppure fare una copia del tema predefinito.<br /><br />L\'archivio o la cartella devono contenere un file di definizione <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Questa opzione permette agli utenti di usare Flash direttamente 
	all\'interno dei loro messaggi: questo potrebbe comportare un rischio per la sicurezza, anche
	se è stato sfruttato in rare occasioni. Da usare a proprio rischio e pericolo!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permette agli utenti di inserire un collegamento alle <a href="%s?action=.xml;sa=news">Notizie del forum</a>
	e altri dati simili. Si raccomanda di limitare la dimensione di messaggi/notizie recenti perché, quando i dati RSS
	vengono mostrati in alcuni programmi come Trillian, potrebbero risultare troncati.';
$helptxt['hotTopicPosts'] = 'Cambia il numero di messaggi che un topic deve raggiungere per essere considerato &quot;caldo&quot; o
	&quot;rovente&quot;.';
$helptxt['globalCookies'] = 'Permette l\'uso di cookie di accesso non dipendenti dal sottodominio. Per esempio, se...<br />
	il sito è http://www.simplemachines.org/,<br />
	e il forum è http://forum.simplemachines.org/,<br />
	con questa modifica sarà possibile accedere ai cookie del forum dal sito.  Non attivare questa opzione se ci sono altri sottodomini (come hacker.simplemachines.org) di cui non avete il controllo.';
$helptxt['secureCookies'] = 'Abilitare questa opzione forzerà i cookie creati per i tuoi utenti sul tuo forum, ad essere segnati come sicuri. Attiva questa opzione solo se stai usando HTTPS sul tuo forum, altrimenti creerà problemi nella gestione dei cookie.';
$helptxt['securityDisable'] = 'Questa opzione <em>disabilita</em> la richiesta aggiuntiva di password per la sezione di amministrazione. Altamente sconsigliata!';
$helptxt['securityDisable_why'] = 'Questa è la password attuale (la stessa utilizzata per accedere.)<br /><br />L\'obbligo di inserire la password assicura che l\'utente sia pienamente consapevole delle modifiche che sta effettuando e che sia il vero utente a operare.';
$helptxt['emailmembers'] = 'In questo messaggio è possibile inserire alcune &quot;variabili&quot;. Queste sono:<br />
	{\\$board_url} - Indirizzo web del forum.<br />
	{\\$current_time} - Ora attuale.<br />
	{\\$member.email} - Attuale indirizzo e-mail dell\'utente.<br />
	{\\$member.link} - Attuale link all\'utente.<br />
	{\\$member.id} - Attuale ID dell\'utente.<br />
	{\\$member.name} - Nome attuale dell\'utente (per la personalizzazione).<br />
	{\\$latest_member.link} - Collegamento all\'ultimo utente registrato.<br />
	{\\$latest_member.id} - ID dell\'ultimo utente registrato.<br />
	{\\$latest_member.name} - Nome dell\'ultimo utente registrato.';
$helptxt['attachmentEncryptFilenames'] = 'Cifrare i nomi degli allegati consente di avere più di un allegato con lo 
	stesso nome, di usare i file .php come allegati e di avere una maggiore sicurezza. Ciò, comunque, potrebbe rendere
	più difficile la ricostruzione dell\'archivio in caso di problemi.';

$helptxt['failed_login_threshold'] = 'Imposta il numero di tentativi d\'accesso falliti prima di portare l\'utente alla pagina per il recupero della password.';
$helptxt['oldTopicDays'] = 'Se questa opzione è attiva verrà visualizzato un avviso all\'utente che cerca di rispondere ad un topic non più attivo per un certo tempo, in giorni, specificato da questa impostazione. Impostare a 0 per disabilitare la funzione.';
$helptxt['edit_wait_time'] = 'Numero di secondi entro cui è possibile modificare un messaggio senza che compaia la data dell\'ultima modifica.';
$helptxt['edit_disable_time'] = 'Numero di minuti che possono trascorrere prima che un utente non possa più modificare un suo messaggio. Impostare a 0 per disabilitare. <br /><br /><em>Nota: Ciò non influenzerà gli utenti che ahnno il permesso di modificare i messaggi delle altre persone.</em>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Abilita il controllo ortografico. È necessario avere la libreria pspell installata sul server e la configurazione PHP adatta per usare la libreria pspell. Il  server ' . (function_exists('pspell_new') ? 'HA' : 'NON HA') . ' le impostazioni corrette.';
$helptxt['disable_wysiwyg'] = 'Questa impostazione impedisce a tutti gli utenti di utilizzare l\'editor WYSIWYG (&quot;What You See Is What You Get&quot;) nella pagina di creazione post.';
$helptxt['lastActive'] = 'Imposta il numero di minuti durante i quali l\'utente risulta tra gli \'Utenti attivi negli ultimi X minuti\' nella pagina iniziale del forum. Il valore predefinito è 15.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul>
		<li><strong>Default Option:</strong> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><strong>Removing Options:</strong> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><strong>Reordering Options:</strong> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <strong>not</strong> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Questa opzione serve per ottimizzare il database a intervalli regolari: impostato a 1 renderà giornaliera l\'ottimizzazione. È anche possibile specificare un numero massimo di utenti online, per evitare di sovraccaricare il server o creare inconvenienti a troppi utenti.';
$helptxt['autoFixDatabase'] = 'Serve per correggere tabelle rovinate e eventualmente ripristinarle come se nulla fosse successo. Può essere utile perché l\'unico modo per correggere una tabella è di RIPARARLA: in questo modo si evita che il forum risulti irraggiungibile fino all\'intervento di un amministratore. Ogni volta che si verifica il problema verrà inviato un messaggio e-mail.';

$helptxt['enableParticipation'] = 'Mostra una piccola icona sui topic che gli utenti hanno inserito.';

$helptxt['db_persist'] = 'Mantiene attiva la connessione per migliorare le prestazioni. Attivare questa opzione su un server non dedicato può creare problemi con il proprio provider.';
$helptxt['ssi_db_user'] = 'Impostazione opzionale per utilizzare un nome utente ed una password del database differenti quando si utilizza SSI.php.';

$helptxt['queryless_urls'] = 'Cambia il formato degli URL in modo da migliorare l\'indicizzazione da parte dei motori di ricerca. Gli indirizzi saranno del tipo index.php/topic,1.0.html.

Questa funzione ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'non') . ' è disponibile sul server in uso.';
$helptxt['countChildPosts'] = 'Spuntando questa opzione i messaggi ed i topic in una sottosezione verranno conteggiati nei totali della pagina principale.<br /><br />Questa impostazione renderà il caricamento visibilmente più lento, ma eviterà che una sezione principale senza post mostri \'0\'.';
$helptxt['fixLongWords'] = '\'Questa opzione suddivide le parole più lunghe di una certa lunghezza per non compromettere l\'impaginazione del forum. Questa opzione non dovrebbe essere impostata a un valore inferiore a 40. Questa opzione non funziona su forum che utilizzano la codifica UTF-8 o hanno una versione di PHP installata inferiore alla 4.4.0. Il server \' . (empty($GLOBALS[\'context\'][\'utf8\']) || version_compare(PHP_VERSION, \'4.4.0\') != -1 ? \'SUPPORTA\' : \'NON SUPPORTA\') . \' questa funzione\'';
$helptxt['allow_ignore_boards'] = 'Selezionando questa opzione consentirai agli utenti di selezionare le sezioni che desiderano ignorare.';

$helptxt['who_enabled'] = 'Questa opzione consente o nega agli utenti la possibilità di vedere chi è collegato e che cosa sta facendo.';

$helptxt['recycle_enable'] = '&quot;Recupera&quot; i topic ed i messaggi eliminati in una sezione specifica.';

$helptxt['enableReportPM'] = 'Questa opzione permette agli utenti di segnalare al team di amministrazione i messaggi privati che ricevono: può essere utile per isolare qualsiasi abuso nell\'utilizzo del sistema dei messaggi privati.';
$helptxt['max_pm_recipients'] = 'Questa opzione permette di impostare il numero massimo di destinatari permessi in un singolo messaggio privato inviato da un utente del forum. Ciò può essere usato per bloccare lo spam nel sistema dei MP. Si noti che gli utenti col permesso di inviare newsletter sono esentati da questa restrizione. Impostare a 0 per non impostare alcun limite.';
$helptxt['pm_posts_verification'] = 'Questa impostazione costringerà gli utenti ad inserire un codice mostrato in una immagine di verifica ogni volta che inviano un messaggio privato. Solo gli utenti con un numero di messaggi inferiore al numero impostato dovranno inserire il codice - Ciò dovrebbe aiutare a combattere gli script automatici di spam.';
$helptxt['pm_posts_per_hour'] = 'Questa opzione limiterà il numero di messaggi privati che possono essere inviati da un utente in un\'ora. Ciò non riguarda gli amministratori o i moderatori.';

$helptxt['default_personal_text'] = 'Imposta il testo di default che un nuovo utente avrà come &quot;testo personale.&quot;';

$helptxt['modlog_enabled'] = 'Registra tutte le azioni di moderazione.';

$helptxt['guest_hideContacts'] = 'Se selezionata, questa opzione nasconde gli indirizzi e-mail e
	i dettagli dei contatti IM di tutti i utenti in ogni ricerca effettuata sul forum';

$helptxt['registration_method'] = 'Questa opzione determina il metodo di registrazione utilizzato per l\'iscrizione di nuovi utenti. Le opzioni disponibili sono:<br /><br />
	<ul>
		<li>
			<strong>Registrazione disabilitata:</strong><br />
				Disabilita il processo di registrazione, il che significa che nessun nuovo utente può iscriversi al forum.<br />
		</li><li>
			<strong>Registrazione immediata</strong><br />
				I nuovi utenti possono accedere al forum e scrivere subito dopo la registrazione.<br />
		</li><li>
			<strong>Attivazione dei utenti</strong><br />
				Quando questa opzione è attivata ogni nuovo utente che si iscrive al forum riceve un link di attivazione via e-mail da utilizzare per attivare l\'account.<br />
		</li><li>
			<strong>Approvazione degli utenti</strong><br />
				Questa opzione fa in modo che ogni nuovo utente iscritto al forum debba essere approvato dall\'amministrazione prima di poter diventare un utente attivo.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Autenticazione tramite OpenID</strong><br />  OpenID permette di accedere su diversi siti web utilizzando lo stesso nome utente, per semplificare la navigazione in internet. Per utilizzare OpenID devi innanzitutto creare un account OpenID. Una lista di siti web dove poter creare un account è disponibile sul <a href="http://openid.net/" target="_blank">sito ufficiale di OpenID</a><br /><br />  Una volta creato un account OpenID semplicemente accedi inserendo l\'URL unico di autenticazione nel box di accesso e prosegui. Sarai reindirizzato sul sito internet dove hai registrato l\'account OpenID per verificare l\'autenticità dell\'accesso e successivamente avrai effettuato l\'accesso.<br /><br />  Al primo accesso ti verranno poste alcune domande e successivamente potrai modificare il tuo profilo o interagire con gli altri utenti, normalmente.<br /><br />  Per altre informazioni visita il sito <a href="http://openid.net/" target="_blank">ufficiale di OpenID</a>  ';

$helptxt['send_validation_onChange'] = 'Quando questa opzione è attivata tutti gli utenti che cambiano il proprio indirizzo e-mail nel profilo devono riattivare l\'account attraverso un messaggio e-mail che viene inviato al nuovo indirizzo.';
$helptxt['send_welcomeEmail'] = 'Quando questa opzione è attivata tutti gli utenti ricevono un messaggio e-mail di benvenuto alla tua comunità';
$helptxt['password_strength'] = 'Questa impostazione specifica la robustezza necessaria per le password selezionate dagli utenti del forum. Più robuste le password, Più difficle sarà compromettere gli account degli utenti.
	Le possibili opzioni sono:
	<ul>
		<li><strong>Bassa:</strong> La password deve essere lunga almeno quattro caratteri.</li>
		<li><strong>Media:</strong> La password deve essere lunga almeno otto caratteri, e non può contenere parte del nome utente o indirizzo e-mail.</li>
		<li><strong>Alta:</strong> Come per media, eccetto che la password deve anche contenere una mescolanza di maiuscole e minuscole, e almeno un numero.</li>
	</ul>';

$helptxt['coppaAge'] = 'Il valore specificato in questo campo determinerà l\'età minima che devono avere i nuovi utenti per vedersi garantito un accesso immediato al forum.
	Durante la registrazione gli verrà richiesto di confermare se superano tale età, e in caso negativo vedranno la loro richiesta rifiutata o sospese in attesa di approvazione da parte dei genitori - dipendentemente dal tipo di restrizione scelta.
	Se si sceglie un valore 0 per questa impostazione allora tutte le altre restrizioni sull\'età verranno ignorate.';
$helptxt['coppaType'] = 'Se le restrizioni sull\'età sono attive, allora questa impostazione indica cosa succede quando un utente al di sotto dell\'età minima tenta di registrarsi sul forum. Ci sono due possibilità:
	<ul>
		<li>
			<strong>Rifiuta la loro registrazione:</strong><br />
				Ogni nuovo utente al di sotto dell\'età minima vedrà la propria registrazione rifiutata immediatamente.<br />
		</li><li>
			<strong>Richiedi approvazione da parte dei genitori/tutori</strong><br />
				Ogni nuovo utente che tenta di registrarsi ed è al di sotto dell\'età minima permessa vedrà il proprio account marcato come in attesa di approvazione, e gli verrà mostrato un modulo da far firmare ai propri genitori per avere il permesso di diventare utenti del forum.
				Gli verranno anche mostrati i dettagli dei contatti per il forum inseriti nella pagina delle impostazioni, affinché possano inviare il modulo all\'amministratore per posta o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'I campi dei contatti sono necessari affinché i moduli che garantiscono il permesso per la registrazione dei minori possano essere inviati agli amministratori del forum. Tali dettagli sarrano mostrati a tutti i nuovi minori, e sono necessari per l\'approvazione da parte dei genitori/tutori. Deve essere fornito almeno un indirizzo postale o un numero di fax.';

$helptxt['allow_hideOnline'] = 'Con questa opzione abilitata tutti gli utenti possono nascondere il proprio stato agli altri utenti (ma non agli amministratori). Se disabilitata solo le persone che possono moderare il forum possono nascondere la loro presenza. Disabilitando questa opzione non si cambia lo stato corrente degli utenti - si impedisce solo di nascondersi in futuro.';
$helptxt['make_email_viewable'] = 'Se questa opzione è attiva l\'e.mail degli utenti pubblici sara\' visibile a utenti registrati e non. Attivarla fa correre il rischio agli utenti di essere vittime di spam da parte di chiunque sia solo di passaggio sul forum. Nota che comunque questa impostazione non influisce sul mostrare l\'indirizzo mail ai membri registrati. Attivare questa impostazione <strong>NON</strong>è raccomandato';
$helptxt['meta_keywords'] = 'Queste parole chiave vengono inviate nell\'output di ogni pagina per indicare ai motori di ricerca (ect) i contenuti chiave del tuo sito. Le parole devono essere separate da virgole e non è permesso l\'utilizzo di codice HTML.';

$helptxt['latest_support'] = 'Questo pannello mostra alcuni dei problemi più comuni e informazioni sulla configurazione del server. L\'accesso alle informazioni non viene tracciato.<br /><br />Se rimane visualizzata la scritta &quot;Sto ottenendo le informazioni di supporto...&quot;, il computer probabilmente non riesce a connettersi a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'È possibile vedere i pacchetti e i \'mod\' più diffusi, con una procedura di installazione rapida e semplice.<br /><br />Se la sezione non compare, probabilmente il computer non riesce a connettersi a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Questa sezione mostra alcuni dei più recenti e più popolari temi da <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>: è possibile che non venga mostrata correttamente se il computer non riesce a accedere a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Per ragioni di sicurezza, la risposta alla propria domanda (come la password) è cifrata in maniera tale che SMF può solo dire se è conservata correttamente, sicché non potrà mai dire all\'utente (e a nessun altro) quali siano la risposta e la password memorizzate.';
$helptxt['moderator_why_missing'] = 'Siccome la moderazione è gestita per sezione, bisogna trasformare gli utenti in moderatori dall\'<a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">interfaccia di gestione della sezione</a>.';

$helptxt['permissions'] = 'I permessi servono per consentire o vietare determinate operazioni a dei gruppi di utenti.<br /><br />Si possono modificare più sezioni contemporaneamente con l\'apposita casella di controllo oppure visualizzare i permessi per un gruppo specifico facendo clic su \'Modifica.\'';
$helptxt['permissions_board'] = 'Se la sezione è impostata come \'Globale,\' significa che la sezione non ha particolari permessi. \'Locale\' significa che ha dei permessi specifici - distinti da quelli globali. Questo permette di avere una sezione che ha più o meno permessi di un\'altra senza bisogno di impostarli per tutte le sezioni.';
$helptxt['permissions_quickgroups'] = 'Questi permettono di usare i permessi di impostazione &quot;predefiniti&quot; - standard significa \'niente di speciale\', restrittivi significa \'come un ospite\', moderatore significa \'quelli di un moderatore\', e per concludere \'manutenzione\' implica permessi di poco inferiori a quelli di un amministratore.';
$helptxt['permissions_deny'] = 'Negare i permessi può essere utile quando si vogliono togliere i permessi a certi utenti. Si può aggiungere un gruppo con un permesso \'negato\' agli utenti a cui si vuole negare un certo permesso.<br /><br />Utilizzare con cautela, un permesso negato resterà negato indipendentemente da quali altri gruppi appartiene l\'utente.';
$helptxt['permissions_postgroups'] = 'Abilitare i permessi per i gruppi basati sul numero di messaggi permetterà di attribuire permessi agli utenti che hanno inviato un certo numero di messaggi. I permessi dei gruppi basati sul numero di messaggi sono <em>aggiunti</em> ai permessi dei normali gruppi utenti.';
$helptxt['membergroup_guests'] = 'Il gruppo Ospiti contiene tutti gli utenti che non hanno effettuato l\'accesso.';
$helptxt['membergroup_regular_members'] = 'Gli utenti normali sono tutti gli utenti che ahnno effettuato l\'accesso, ma che non hanno un gruppo primario assegnato.';
$helptxt['membergroup_administrator'] = 'Gli amministratori possono, per definizione, fare ciò che vogliono e vedere qualsiasi sezione. Non ci sono impostazioni di permessi per gli amministratori.';
$helptxt['membergroup_moderator'] = 'Il gruppo Moderatori è un gruppo speciale. I permessi e le impostazioni assegnate a questo gruppo si applicano ai moderatori ma solo <em>nelle sezioni che moderano</em>. Al di fuori di tali sezioni sono solo come qualsiasi altro utente.';
$helptxt['membergroups'] = 'In SMF ci sono due tipi di gruppi di cui gli utenti possono far parte. Essi sono:
	<ul>
		<li><strong>Gruppi normali:</strong> un gruppo normale è un gruppo a cui gli utenti non accedono automaticamente. Per assegnare un utente al gruppo è sufficiente andare nel profilo e fare clic su &quot;Impostazioni relative all\'account&quot;: da qui è possibile associare all\'utente un qualsiasi numero di gruppi normali.</li>
		<li><strong>Gruppi basati sul numero di messaggi:</strong> a differenza dei gruppi normali, i gruppi basati sul numero dei messaggi non possono essere assegnati: gli utenti sono assegnati automaticamente a un gruppo basato sui messaggi quando raggiungono il numero minimo di messaggi stabilito per accedere al gruppo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Si possono modificare gli eventi facendo clic sull\'asterisco rosso (*) vicino al nome.';

$helptxt['maintenance_backup'] = 'Quest\'area permette di salvare una copia di tutti i messaggi, impostazioni, utenti e altre informazioni del forum in un file.<br /><br />Si raccomanda di farlo con frequenza, magari settimanale, per motivi di sicurezza e di salvaguardia dei dati.';
$helptxt['maintenance_rot'] = 'Permette di rimuovere <strong>completamente</strong> e <strong>senza possibilità di recupero</strong> i vecchi topic. Si consiglia di creare un archivio di ripristino, per correre ai ripari nel caso in cui venisse cancellato qualcosa di importante.<br /><br />Questa opzione va usata con cautela.';
$helptxt['maintenance_members'] = 'Questa opzione ti permette di rimuovere <strong>completamente</strong> ed <strong>irrevocabilmente</strong> gli account degli utenti dal tuo forum. E\' <strong>altamente</strong> raccomandato che tu faccia un backup prima di ogni modifica, nel caso in cui tu decida di rimuovere erroneamente qualcosa.<br /><br />Utilizza attentamente questa funzione.';

$helptxt['avatar_server_stored'] = 'Questa impostazione permette agli utenti di scegliere un avatar tra quelli salvati sul tuo server. Generalmente, questi sono collocati nella stessa cartella Avatars.<br />Suggerimento: se creati altre cartelle in Avatars, puoi creare &quot;categorie&quot; di avatar.';
$helptxt['avatar_external'] = 'Abilitando questa opzione, gli utenti potranno inserire l\'URL diretto per i propri avatar. Lo svantaggio è che, in alcuni casi, potrebbero utilizzare avatar sovradimensionati o inserire immagini non permesse sul tuo forum.';
$helptxt['avatar_download_external'] = 'Abilitando questa opzione, verrà effettuato l\'accesso all\'URL inserito dall\'utente per il download dell\'avatar. In caso positivo, l\'avatar verrà trattato come uno inserito tramite upload.';
$helptxt['avatar_upload'] = 'Questa opzione è simile a &quot;Permetti agli utenti di selezionare un avatar esterno&quot, tranne che in questo caso hai un maggiore controllo sugli avatar, un miglior modo per ridimensionarli, e i tuoi utenti non devono disporre di uno spazio dove caricarli.<br /><br />Tuttavia, lo svantaggio è che in questo modo potresti occupare molto spazio sul tuo server.';
$helptxt['avatar_download_png'] = 'Le immagini PNG sono più pesanti ma hanno un migliore rapporto qualità compressione. Se non è presente il segno di spunta verrà utilizzato il formato JPEG - che rende le immagini più leggere ma anche di qualità inferiore.';

$helptxt['disableHostnameLookup'] = 'Questa opzione disattiva la ricerca dei nomi degli host, operazione che su alcuni server risulta essere molto lenta: tale scelta potrebbe rendere meno efficaci le procedure di interdizione degli utenti.';

$helptxt['search_weight_frequency'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. Ad esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente.  Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato al numero di risultati attinenti trovati in un topic: si divide il numero di messaggi attinenti per il numero di messaggi complessivo del topic.';
$helptxt['search_weight_age'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. Ad esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente.  Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato all\'età del messaggio: a un messaggio recente verrà associato un peso maggiore.';
$helptxt['search_weight_length'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. Ad esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla lunghezza di un topic: a un numero maggiore di messaggi corrisponde un peso maggiore.';
$helptxt['search_weight_subject'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. Ad esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla presenza di risultati all\'interno del titolo del topic.';
$helptxt['search_weight_first_message'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. Ad esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla presenza di risultati all\'interno del primo messaggio del topic.';
$helptxt['search_weight_sticky'] = 'I fattori di peso sono utilizzati per determinare la rilevanza di un risultato della ricerca. Cambiare tali fattori di peso per farli corrispondere alle specificità del forum. Ad esempio, il forum di un sito di notizie, potrebbe volere un valore relativamente alto per \'età dell\'ultimo messaggio corrispondente\'. Tutti i valori sono relativi, in relazione gli uni con gli altri e dovrebbero essere interi positivi.<br /><br />Questo fattore verifica se un topic è importante e aumenta la rilevanza se lo è.';
$helptxt['search'] = 'Regolare tutte le impostazioni per la funzione di ricerca da qui.';
$helptxt['search_why_use_index'] = 'Un indice di ricerca può migliorare parecchio la velocità delle ricerche sul forum. Specialmente quando il numero di messaggi su un forum diventa grande, cercare senza un indice di ricerca può impiegare molto tempo e aumentare la pressione sul database. Se il forum ha più di 50.000 messaggi, dovreste considerare la creazione di un indece di ricerca per assicurare ottime prestazioni al forum.<br /><br />Si noti che un indice di ricerca può occupare parecchio spazio. Un indice a pieno testo è un indice standard di MySQL. È relativamente compatto (aal\'incirca della stessa dimensione della tabella dei messaggi), ma molte delle parole non sono indicizzate e può, in certe ricerche, rivelarsi molto lenta. L\'indice personalizzato è spesso più grande (a seconda della configurazione può essere fino a 3 volte la dimensione della tabella dei messaggi) ma le sue prestazioni sono migliori di quello a pieno testo e relativamente stabili.';

$helptxt['see_admin_ip'] = 'Gli indirizzi IP sono visibili solo agli amministratori e ai moderatori per facilitare la moderazione e semplificare l\'individuazione delle persone. Si ricordi che gli indirizzi IP non sempre possono essere decisivi per identificare una persona e la maggior parte degli indirizzi IP sono di tipo dinamico.<br /><br />Gli utenti hanno il permesso di vedere il proprio indirizzo IP.';
$helptxt['see_member_ip'] = 'L\'indirizzo IP di un utente è visibile solo all\'utente stesso e ai moderatori. Si ricordi che gli indirizzi IP non sempre possono essere decisivi per identificare una persona e la maggior parte degli indirizzi IP sono di tipo dinamico.<br /><br />Non è possibile visualizzare gli indirizzi IP di altri utenti.';
$helptxt['whytwoip'] = 'SMF utilizza diversi metodi per rilevare gli indirizzi IP degli utenti. Di solito questi due metodi risalgono allo stesso indirizzo, anche se in alcuni casi potrebbero essere rilevati più indirizzi IP. In questo caso SMF registra entrambi gli indirizzi e utilizza entrambi per i controlli delle interdizioni (ect). Puoi cliccare l\'uno o l\'altro per tracciare quell\'IP ed interdire se necessario.';

$helptxt['ban_cannot_post'] = 'La restrizione \'non può scrivere messaggi\' abilita la modalità di sola lettura per gli utenti esclusi. L\'utente non potrà creare nuovi topic o rispondere a quelli esistenti, inviare messaggi privati o votare nei sondaggi. Potrà comunque leggere i topic e i messaggi privati.<br /><br />Un messaggio di avviso viene mostrato agli utenti che sono stati esclusi con questa modalità.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<strong>Impostazioni invio messaggi</strong><br />
			Modifica le impostazioni relative all\'invio dei messaggi e il modo in cui i messaggi vengono visualizzati. Si può anche attivare il controllo ortografico da qui.
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Abilita il codice che mostra i messaggi del forum nella forma corretta. Inoltre regola quali codici sono permessi e quali no.
		</li><li>
			<strong>Parole censurate</strong>
			Al fine di tenere sotto controllo il linguaggio usato sul forum, si possono censurare certe parole. Questa funzione permette di scambiare le parole vietate con versioni edulcorate.
		</li><li>
			<strong>Impostazoni topic</strong>
			Modifica le impostazioni relative ai topic. Il numero di topic per pagina, se i topic importanti sono attive o meno, il numero di messaggi necessari affinché un topic sia caldo, ecc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Selezionando un gruppo restrittivo, quando un visitatore viene riconosciuto come un crawler di motori di ricerca automaticamente riceverà gli inferiori permessi possibili. Usa questa opzione per rifiutare l\'accesso ai motori di ricerca.<br />Nota: Il rilevamento degli spider non è accuratissimo, possono essere riconosciuti erroneamente come semplici visitatori e non è dunque garantita alcuna sicurezza in questo senso.';
$helptxt['show_spider_online'] = 'Questa impostazione permette di selezionare quali spider mostrare nella lista degli utenti connessi. Le opzioni sono: <ul class="normallist">  <li>  <strong>Per niente</strong><br />  Gli spider appariranno come semplici utenti. </li><li>  <strong>Mostra Quantità di Spider</strong><br />  Verrà mostrato semplicemente il numero di spider attivi sul forum. </li><li>  <strong>Mostra i nomi degli Spider</strong><br />  Ogni nome verrà rivelato, gli utenti potranno dunque leggere quali spider sono attivi sul forum. </li><li>  <strong>Mostra i nomi degli Spider - Solo Amministratore</strong><br />  Come sopra, solamente l\'opzione si applica agli amministratori e non agli altri utenti. </li>  </ul>  ';

$helptxt['birthday_email'] = 'Scegli l\'indice del messaggio e-mail da utilizzare per gli auguri di compleanno. Un\'anteprima verrà mostrata nei campi "Oggetto e-mail" e "Testo e-mail".<br /><strong>Nota:</strong> Impostare questa opzione non abilita automaticamente l\'invio di e-mail di compleanno. Per abilitarle, vai nella pagina <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">>Azioni Programmate</a> e abilita l\'opzione per l\'invio delle e-mail di compleanno.';
$helptxt['pm_bcc'] = 'Quando si invia un messaggio privato, puoi decidere di aggiungere un destinatario come CCN o &quot;Copia Carbone Nascosta&quot;. L\'identità dei destinatari CCN non verrà rivelata agli altri utenti riceventi il messaggio.';

$helptxt['move_topics_maintenance'] = 'Questa opzione permette di spostare tutti i post da una sezione all\'altra.';
$helptxt['maintain_reattribute_posts'] = 'Puoi utilizzare questa funzione per attribuire i post guest in una sezione ad un utente registrato. Questa opzione torna utile quando, ad esempio, un utente cancella il proprio account e, cambiata idea, desidera avere i vecchi post associati al proprio account.';
$helptxt['chmod_flags'] = 'Puoi impostare manualmente i permessi che desideri sui file selezionati. Per farlo, inserisci il valore chmod come numerico (octet). Attenzione - Queste impostazioni non avranno effetto sui server con sistemi operativi Microsoft Windows.';

$helptxt['postmod'] = 'Questa sezione consente ai membri del team di moderazione (con adeguati permessi) di approvare post e topic prima che siano pubblicati.';

$helptxt['field_show_enclosed'] = 'Racchiude gli input tra un semplice testo o codice html. Questo ti consentirà di aggiungere più messaggi, immagini, media in embed. Ad esempio:<br /><br />  &lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />  Nota che puoi usare le seguenti variabili:<br />  <ul class="normallist">  <li>{INPUT} - L\'input specificato dall\'utente.</li>  <li>{SCRIPTURL} - Indirizzo del forum.</li>  <li>{IMAGES_URL} - Percorso della cartella delle immagini nel tema corrente.</li>  <li>{DEFAULT_IMAGES_URL} - Percorso della cartella delle immagini nel tema predefinito.</li>  </ul>  ';

$helptxt['custom_mask'] = 'La maschera di input è importante per la sicurezza del tuo forum. Validando l\'input da un utente consente che le informazioni non siano usate in un modo che non ti aspetti. Abbiamo fornito alcune espressioni come modelli.<br /><br /> <div class="smalltext" style="margin: 0 2em">  &quot;[A-Za-z]+&quot; - Tutti i caratteri dell\'alfabeto (maiuscole e minuscole).<br />  &quot;[0-9]+&quot; - Tutti i caratteri numerici.<br />  &quot;[A-Za-z0-9]{7}&quot; - Tutti i caratteri dell\'alfabeto (maiuscole e minuscole) e i caratteri numerici sette volte.<br />  &quot;[^0-9]?&quot; - Impedisci che qualsiasi numero trovi corrispondenza.<br />  &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Permetti solo 3 o 6 caratteri esadecimali.<br />  </div><br /><br /> Possono inoltre essere definiti i caratteri speciali ?+*^$ e {xx}.<div class="smalltext" style="margin: 0 2em">  ? - Uno o nessuno corrisponde alle espressioni precedenti.<br />  + - Uno o più della precedente espressione.<br />  * - Nessuno o più della precedente espressione.<br />  {xx} - Un numero esatto dalla precedente espressione.<br />  {xx,} - Un numero esatto o maggiore dalla precedente espressione.<br />  {,xx} - Un numero esatto o inferiore dalla precedente espressione.<br />  {xx,yy} - Un\'esatta corrispondenza fra due numeri dalla precedente espressione.<br />  ^ - Inizio della stringa.<br />  $ - Fine della stringa.<br />  \\ - Usa l\'escape per il carattere successivo.<br />  </div><br /><br /> Maggiori informazioni o tecniche avanzate possono essere trovate su internet.';

?>