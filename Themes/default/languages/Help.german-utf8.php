<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Fenster schließen';

$helptxt['manage_boards'] = '	<b>Boards verwalten</b><br />
	Hier können Sie die "Kategorien" und "Boards" verwalten. Kategorien sind die
	oberste Ebene eines Forums. Beispiel: Wenn Sie eine Seite betreiben, die Informationen
	für "Sport", "Autos" und "Musik" bereitstellt, wären das die Kategorien,
	die Sie erstellen. Innerhalb dieser Kategorien können Sie "Boards" einfügen.<br />
	Hier ein Beispiel:<br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- Eine "Kategorie"
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Ein Board innerhalb der Kategorie "Sport"
			</li>
			<ul>
				<li>
					<b>Statistiken</b>
					&nbsp;- Ein untergeordnetes Board des Boards "Baseball"
				</li>
			</ul>
			<li>
				<b>Fußball</b>
				&nbsp;- Ein Board innerhalb der Kategorie "Sport"</li>
		</ul>
	</ul>
	Kategorien erlauben Ihnen, das Forum in verschiedene Bereiche aufzuteilen ("Autos,
	Sport"), damit die Interessen schnell zu finden sind. Die Boards erlauben eine weitere
	Unterteilung und enthalten die Beiträge. Wenn sich ein Benutzer für Porsche
	interessiert, würde er seinen Beitrag in das Board "Porsche" der Kategorie
	"Autos" schreiben.<br />
	Administrative Funktionen in diesem Menü sind das Hinzufügen von Boards in einer 
	beliebigen Kategorie, die Änderung der Reihenfolge sowie das Löschen eines Boards bzw.
	einer Kategorie.';

$helptxt['edit_news'] = '<ul class="normallist">
<li><strong>News</strong><br/>
Diese Sektion erlaubt dir den Newstext auf der Forums Hauptseite festzulegen. Fügen Sie ein beliebiges Element hinzu (z.B. "Verpassen Sie nicht die Konferenz am Dienstag").
Jede News wird zufällig angezeigt und sollte in eine separate Box.</li>
<li><strong>Newsletter</strong><br/>
Diese Sektion erlaubt es Ihnen Newsletter über E-Mail oder persönlicher Nachricht an Benutzer zu versenden.
Zunächst wählen sie die Gruppen, an die Sie den Newsletter senden möchten und jene, an die Sie ihn nicht senden möchten.
Wenn Sie möchten können Sie zusätzlich E-Mail Adressen angeben, welche den Newsletter erhalten sollen.
Abschließend geben Sie die Nachricht, welche Sie versenden möchten, ein und wählen, ob der Newsletter als persönliche Nachricht oder als E-Mail verschickt werden soll.</li>
<li><strong>Einstellungen</strong><br />
Diese Sektion enthält einige Einstellungen, die mit News/Neuigkeiten und Newslettern zu tun haben. Dies schließt auch mit ein, welche Gruppen Foren News bearbeiten und Newsletter versenden können.
Sie können außerdem einstellen, ob News Feeds für das Forum aktiviert sein sollen und wie viele Zeichen einer News im News Feed angezeigt werden.</li>
</ul>
';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Mitglieder anzeigen</b><br />
			Hier können Sie alle Mitglieder sehen, welche im Forum registriert sind. Sie können
			auf den Namen eines Mitglieds klicken, um zu dem betreffenden Profil mit weiteren Informationen 
			zu gelangen (Homepage, Alter etc.).	Als Administrator haben Sie die Möglichkeit, diese
			Angaben zu ändern bzw. das Benutzerkonto zu löschen.<br /><br />
		</li>
		<li>
			<b>Erwartete Genehmigungen</b><br />
			Dieser Button wird nur angezeigt, wenn Sie die Genehmigung aller neuen Registrierungen durch den Administrator aktiviert haben.
			Jeder Benutzer, der sich registriert, wird erst Mitglied des Forums sein, wenn der Administrator das Benutzerkonto genehmigt hat.
			Der Bereich listet alle Mitglieder inkl. E-Mail und IP-Adresse auf, die auf ihre Genehmigung warten. Sie können
			wählen, ob Sie das Mitglied genehmigen oder ablehnen möchten, indem Sie das kleine Kästchen neben dem Mitglied
			wählen und im Drop-Down Menu die entsprechende Aktion aussuchen. Sollten Sie ein Mitglied ablehnen,
			können Sie es wahlweise mit oder ohne Benachrichtigung löschen.<br /><br />
		</li>
		<li>
			<b>Erwartete Aktivierungen</b><br />
			Dieser Button wird nur angezeigt, wenn Sie die Aktivierung der Benutzerkonten eingeschaltet haben. Von hier
			aus können Sie alle Mitglieder ansehen, die Ihr Benutzerkonto noch nicht aktiviert haben. Sie haben die Möglichkeit,
			die Mitglieder zu genehmigen, abzulehnen oder an die Aktivierung zu erinnern. Wie oben schon erwähnt, kann das
			Löschen mit oder ohne Benachrichtigung erfolgen.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Mitglieder bannen</b><br />
	SMF bietet die Möglichkeit, bestimmte Mitglieder zu "bannen", weil sie aufgrund von Spam u.a. gegen die Nutzungsbedingungen
	verstoßen haben. Als Administrator können Sie in jedem Beitrag die IP-Adresse des Benutzers sehen und diese einfach in die
	Bann-Liste eintragen, so dass der betreffende Benutzer nicht mehr unter dieser IP-Adresse schreiben kann.<br />Sie haben auch die
	Möglichkeit, die Benutzer durch die Eingabe ihrer E-Mail-Adresse zu bannen.';

$helptxt['featuresettings'] = '<strong>Features &amp; Optionen</strong><br />
	Hier können Sie verschiedene Einstellungen zu den einzelnen Features machen.';

$helptxt['securitysettings'] = '<b>Sicherheit &amp; Moderation</b><br />
	Hier können Sie Einstellungen bezüglich der Sicherheit und der Moderation ändern.';

$helptxt['modsettings'] = '<b>Features &amp; Optionen</b><br />
	Hier können Sie die Einstellungen spezieller Funktionen ändern, die in SMF integriert sind.';

$helptxt['number_format'] = '<b>Standard-Zahlenformat</b><br />
	Hier können Sie das Zahlenformat bestimmen, welches im Forum angezeigt wird. Hier ein Beispiel:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Das \'Komma\' ist das Tausender Trennzeichen, der \'Punkt\' das Dezimal Trennzeichen und abschließend die Anzahl der Nullen als Rundungsstellen.';

$helptxt['time_format'] = '<b>Voreingestelltes Zeitformat</b><br />
	Hier können Sie einzustellen, wie das Datum und die Zeit angezeigt werden. Die Vorgabe folgt den
	PHP-Richtlinien und ist im folgenden beschrieben (mehr Details unter <a href="http://www.php.net/manual/function.strftime.php">php.net</a>).<br />
	<br />
	Die folgenden Zeichen sind bei der Einstellung zu verwenden (Groß-/Kleinschreibung beachten!): <br /><br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - abgekürzter Name des Wochentags<br />
	&nbsp;&nbsp;%A - voller Name des Wochentags<br />
	&nbsp;&nbsp;%b - abgekürzter Monatsname<br />
	&nbsp;&nbsp;%B - voller Monatsname<br />
	&nbsp;&nbsp;%d - Tag des Monats (01 bis 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - das gleiche wie %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - Tag des Monats (1 bis 31)<br />
	&nbsp;&nbsp;%H - Stunde einer 24-Stunden Uhr (von 00 bis 23) <br />
	&nbsp;&nbsp;%I - Stunde einer 12-Stunden Uhr (von 01 bis 12) <br />
	&nbsp;&nbsp;%m - aktueller Monat als Zahl (01 to 12) <br />
	&nbsp;&nbsp;%M - Minute als Zahl <br />
	&nbsp;&nbsp;%p - "am" oder "pm" zur eingestellten Zeit hinzufügen<br />
	&nbsp;&nbsp;%R<b>*</b> - Zeit in 24-Stunden Anzeige <br />
	&nbsp;&nbsp;%S - Sekunde als Dezimalzahl <br />
	&nbsp;&nbsp;%T<b>*</b> - aktuelle Zeit, gleichwertig zu %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2-stelliges Jahr (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4-stelliges Jahr<br />
	&nbsp;&nbsp;%Z - Zeit-Zone, Name oder Abkürzung der Zeit-Zone <br />
	&nbsp;&nbsp;%% - ein \'%\' Zeichen <br />
	<br />
	<i>* Funktioniert nicht auf Windows basierenden Servern</i></span>';

$helptxt['live_news'] = '<b>Aktuelles von Simple Machines...</b><br />
	Diese Box zeigt aktuelle Meldungen von <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> an.
	Sie sollten hier regelmäßig wegen Updates, neuen Versionen und wichtigen Informationen vom Simple Machines Team vorbeischauen.';

$helptxt['registrations'] = '<b>Registrierungs-Management</b><br />
	Hier finden Sie alle Funktionen, die Sie zum Verwalten von neuen Mitgliedern benötigen. Es gibt drei Bereiche,
	welche je nach Einstellungen des Forums sichtbar sind:<br /><br />
	<ul>
		<li>
			<b>Neues Mitglied registrieren</b><br />
			Hier können Sie neue Mitglieder registrieren. Diese Funktion ist nützlich bei deaktivierter
			Registrierung oder wenn der Administrator ein Testkonto erstellen möchte. Wenn die Aktivierung
			der Benutzerkonten eingeschaltet ist, erhalten die Mitglieder eine E-Mail mit dem Aktivierungslink,
			welchem sie folgen müssen, bevor sie sich einloggen können. Alternativ können Sie dem neuen Mitglied
			auch eine E-Mail mit dem Passwort an die angegebene Adresse schicken.<br /><br />
		</li>
		<li>
			<b>Nutzungsbedingungen editieren</b><br />
			Diese Funktion erlaubt das Editieren der Nutzungsbedingungen, welche bei einer Neuregistrierung angezeigt werden.
			Sie können zu dem Originaltext neue Bedingungen hinzufügen oder löschen.
		</li>
		<li>
			<b>Reservierte Namen</b><br />
			Diese Funktion erlaubt das Hinzufügen von Wörtern oder Namen, die nicht von anderen Benutzern verwendet werden
			dürfen.<br /><br />
		</li>
		<li>
			<b>Einstellungen</b><br />
			Dieser Bereich wird nur sichtbar sein, wenn Sie die Berechtigung zum Administrieren des Forums haben. Hier können
			Sie unter anderem Einstellungen zur Registrierungsmethode und der Altersbegrenzung machen.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderator-Protokoll</b><br />
	Hier können die Administratoren alle Aktionen der Moderatoren verfolgen. Damit Moderatoren keine Hinweise zu ihren
	Aktionen löschen können, ist es frühestens nach 24 Stunden möglich, diese Einträge zu löschen.
	Die \'Objekte\'-Spalte listet alle Details zu der betreffenden Aktion auf.';
$helptxt['adminlog'] = '<b>Administrator-Protokoll</b><br />
In dieser Sektion können Administratoren durchgeführte administrative Aktionen nach zu verfolgen. Damit Administratoren die Spuren ihrer Aktionen nicht verwischen/entfernen können können Einträge erst nach 24 Stunden gelöscht werden.';
$helptxt['warning_enable'] = '<b>Verwarnungssystem</b><br />
	Diese Funktion erlaubt den Administratoren und Moderatoren andere Benutzer zu verwarnen und mit Hilfe des Verwarnungslevels 
	bestimmte Sanktionen zu erlassen. Nach der Aktivierung kann mit Hilfe einer Berechtigung bestimmt werden, welche Mitgliedergruppen
	Verwarnungen vergeben dürfen. Das Verwarnungslevel kann im betreffenden Profil geändert werden. Die folgenden Optionen 
	sind verfügbar:
	<ul>
		<li>
			<b>Verwarnungslevel für Beobachtung des Benutzers</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem der Benutzer automatisch beobachtet wird.
			Jeder beobachtete Benutzer erscheint im entsprechenden Bereich des Moderator-Center.
		</li>
		<li>
			<b>Verwarnungslevel für Moderation der Beiträge</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem die Beiträge des Benutzers von einem Moderator genehmigt
			werden müssen, bevor sie im Forum erscheinen. Damit wird jede existierende Boardberechtigung überschrieben.
		</li>
		<li>
			<b>Verwarnungslevel für die Stummschaltung des Benutzers</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem der Benutzer mit einem Schreib-Bann belegt wird. Der Benutzer verliert damit alle 
			Rechte im Forum zu schreiben.
		</li>
		<li>
			<b>Max. Verwarnungspunkte für einen Benutzer pro Tag</b><br />
			Diese Einstellung limitiert die Punkteanzahl, die ein Moderator dem Benutzer pro Tag hinzufügen kann. Sie kann deaktiviert 
			werden, in dem Sie den Wert auf 0 setzen. Beachten Sie, dass Administratoren von dieser Einstellunge nicht betroffen sind.
		</li>
	</ul>';
$helptxt['error_log'] = '<b>Fehlerprotokoll</b><br />
	Das Fehlerprotokoll listet alle Fehler, die von Benutzern im Forum produziert worden sind, nach Datum sortiert auf. Um den neuesten Fehler
	zuerst anzuzeigen, klicken Sie auf den kleinen schwarzen Pfeil neben dem Datum. Weiterhin können Sie die Fehlermeldungen
	nach der Art des Fehlers filtern, indem Sie auf die Grafik neben der entsprechenden Angabe klicken (z.B. filtern nach Benutzernamen).
	Wenn ein Filter aktiv ist, werden nur die übereinstimmenden Fehler angezeigt.';
$helptxt['theme_settings'] = '<b>Theme-Einstellungen</b><br />
	Hier können Sie die Einstellungen jedes einzelnen Themes verändern. Die Einstellungen betreffen u.a. das Theme-Verzeichnis
	und die URL Informationen, sowie viele Einstellungen zum Layout. Die meisten Themes enthalten eine Vielzahl von konfigurierbaren Optionen,
	welche es erlauben, das Theme den persönlichen Wünschen anzupassen.';
$helptxt['smileys'] = '<b>Smileys &amp; Beitragssymbole</b><br />
	Hier können Sie Smileys oder Smiley-Sets hinzufügen oder löschen. Beachten Sie, dass jeder Smiley aus einem Set auch in den anderen sichtbar ist, da es sonst bei Verwendung verschiedener Sets zu Verwirrungen kommen könnte.<br /><br />
	Sie können hier ebenfalls die Beitragssymbole verändern, wenn Sie diese in den Einstellungen aktiviert haben.';
$helptxt['calendar'] = '<b>Kalender verwalten</b><br />
	Hier können Sie die Einstellungen des Kalenders verändern sowie Feiertage hinzufügen bzw. löschen.';

$helptxt['serversettings'] = '<b>Servereinstellungen</b><br />
	Hier können Sie die Zentral- bzw. Zusatzkonfiguration Ihres Forums einstellen. Dieser Bereich enthält Einstellungen zur Datenbank,
	die Verzeichnispfade sowie andere wichtige Einstellungen zu E-Mail und dem Cache. Bitte handeln Sie hier mit erhöhter Vorsicht,
	da Ihr Forum unter Umständen nicht mehr funktionieren kann.';
$helptxt['manage_files'] = '<ul class="normallist">
	<li>
		<b>Dateien durchsuchen</b><br />
		Durchsuchen Sie alle Anhänge, Avatare und Thumbnails die vom SMF gespeichert wurden.<br /><br />
	</li><li>
		<b>Dateianhangs Einstellungen</b><br />
		Legen Sie fest, wo Dateianhänge gespeichert werden und geben Sie an, welche Dateitypen erlaubt sind.<br /><br />
	</li><li>
		<b>Benutzerbild-Einstellungen</b><br />
		Legen Sie fest, wo Benutzerbilder gespeichert werden und konfigurieren Sie die Größenanpassung von diesen.<br /><br />
	</li><li>
		<b>Dateien warten</b><br />
		Überprüfen und reparieren Sie Fehler im Anhangs-Verzeichnis oder löschen sie gewählte Anhänge.<br /><br />
	</li>
</ul>';

$helptxt['topicSummaryPosts'] = 'Anzahl der Beiträge, die beim Antwort-Bildschirm in der Zusammenfassung angezeigt werden.';
$helptxt['enableAllMessages'] = 'Stellen Sie hier die <em>maximale</em> Anzahl an Beiträgen ein, bei denen der "Alle"-Beiträge Link angezeigt werden soll. Stellen Sie diesen Wert auf weniger als die "Anzahl der Beiträge pro Seite im Thema" ein, wird dieser Link nie angezeigt. Wird der Wert zu hoch angesetzt, kann das Forum sehr verlangsamt werden.';
$helptxt['enableStickyTopics'] = 'Fixierte Themen werden an erster Stelle im Themen-Index angezeigt werden. Sie werden meistens für wichtige
  Nachrichten verwendet. Nur Administratoren und Moderatoren können Themen fixieren.';
$helptxt['allow_guestAccess'] = 'Sollten Sie diese Option deaktivieren, können Gäste des Forums nur noch grundlegende Funktionen benutzen (Einloggen, Registrieren, Passworterinnerung etc.). Die Option hat nicht die gleichen Auswirkungen wie Gästen den Zugriff auf die Boards zu verbieten.';
$helptxt['userLanguage'] = 'Ermöglicht dem Benutzer die Auswahl einer individuellen Sprache im Forum. Betrifft nicht die Standardeinstellung.';
$helptxt['trackStats'] = 'Statistiken aktivieren:<br />Erlaubt den Benutzern verschiedene Statistiken zu sehen, z.B. die neuesten Einträge, die meistbesuchten Themen, die neuesten Themen und vieles andere.<hr />
		Seitenaufrufe zählen:<br />Fügt den Statistiken eine weitere Spalte mit den Seitenaufrufen des Forums hinzu.';
$helptxt['titlesEnable'] = 'Diese Option erlaubt den Mitgliedern, sich einen frei definierbaren "Titel" zu geben, welcher unter dem Namen angezeigt
		wird.<br /><i>Beispiel:</i><br />Daniel D.<br />SMF-Übersetzer';
$helptxt['topbottomEnable'] = 'Fügt einen "Nach unten" bzw. "Nach oben" Button hinzu, welcher ein schnelles Navigieren zwischen Seitenanfang und Seitenende ermöglicht.';
$helptxt['onlineEnable'] = 'Ein Bild zeigt den Online-Status des Benutzers an (Online/Offline).';
$helptxt['todayMod'] = 'Zeigt "Heute" und/oder "Gestern" statt des Datums an.<br /><br /> <strong>Beispiele:</strong><br /><br /> <dt> <dt>deakiviert</dt> <dd>3. Oktober 2009 um 12:59:18</dd> <dt>nur Heute</dt> <dd>Heute um 12:59:18</dd> <dt>Heute und Gestern<dt> <dd>Gestern um 09:36:55</dd> </dt>';
$helptxt['disableCustomPerPage'] = 'Diese Option verhindert, dass Benutzer die Anzahl von Themen oder Beiträgen pro Seite selbst festlegen können.';
$helptxt['enablePreviousNext'] = 'Zeigt einen Link zum nächsten bzw. vorherigen Thema an.';
$helptxt['pollMode'] = 'Aktiviert oder deaktiviert die Umfragen. Sollten Sie die Umfragen deaktivieren, werden alle existierenden
    Umfragen auf dem Themen-Index versteckt. Sollen die Themen weiterhin angezeigt werden, dann wählen Sie "Umfragen als
    Themen anzeigen".<br /><br />Um zu bestimmen, wer Umfragen erstellen und löschen bzw. in ihnen abstimmen kann, stellen Sie die
    entsprechenden Berechtigungen ein. Beachten Sie dies bitte, wenn die Umfragen nicht funktionieren sollten.';
$helptxt['enableVBStyleLogin'] = 'Zeigt ein kleines Login-Feld am unteren Bildschirmrand an.';
$helptxt['enableCompressedOutput'] = 'Aktiviert die komprimierte Datenübertragung, um Bandbreite zu sparen. Erfordert ein installiertes \'zlib\' auf dem Server.';
$helptxt['disableTemplateEval'] = 'Standardmäßig werden Templates verarbeitet statt nur inkludiert. Dies hilft dabei hilfreiche Debug Informationen anzuzeigen, wenn das Template einen Fehler enthält.<br/>
<br/>
Bei großen Foren kann dieser eigene Inkludierungs-Prozess wesentlich mehr Zeit in Anspruch nehmen. Deshalb möchten erfahrene Benutzer dies eventuell deaktivieren.';
$helptxt['databaseSession_enable'] = 'Verwendet die Datenbank zum Speichern von Sitzungen und ist das Beste für eine ausgeglichene Belastung des Servers. Die Option hilft bei den sogenannten \'Timeouts\' und macht das Forum unter Umständen schneller.';
$helptxt['databaseSession_loose'] = 'Reduziert die Bandbreite, welche Ihr Forum benötigt, jedoch wird bei einem Klick auf den Zurück-Button im Browser die vorherige Seite nicht neu geladen, die \'Neue Beiträge\' Symbole und andere Werte werden daher nicht aktualisiert.';
$helptxt['databaseSession_lifetime'] = 'Anzahl der Sekunden für die Länge einer Datenbanksitzung. Sollte eine Sitzung eine Zeit lang nicht gebraucht werden, wird sie als "verloren gegangen" bezeichnet. Empfohlen wird mindestens der Wert 2400.';
$helptxt['enableErrorLogging'] = 'Erfasst alle Fehlermeldungen im Forum (z.B. fehlerhafter Login etc.).';
$helptxt['enableErrorQueryLogging'] = 'Diese Option fügt die komplette Datenbankabfrage in das Fehlerprotokoll ein - dazu muss das protokollieren von Fehlern aktiviert sein.<br /><br /><strong>Achtung: Damit geht die Möglichkeit verloren, das Fehlerprotokoll nach Fehlermeldungen zu filtern.</strong>';
$helptxt['allow_disableAnnounce'] = 'Diese Option erlaubt den Benutzern, die Benachrichtigung bei neuen Ankündigungen zu deaktivieren.';
$helptxt['disallow_sendBody'] = 'Verhindert das Versenden von Text aus Antworten oder neuen Beiträgen in den Benachrichtigungs E-Mails.<br /><br />Oftmals antworten Mitglieder auf diese E-Mails, so dass der Webmaster eine Flut an E-Mails erhält.';
$helptxt['compactTopicPagesEnable'] = 'Zeigt nur eine bestimmte Anzahl der Seitennummern an.<br /><i>Beispiel:</i>
		"3" für: 1 ... 4 [5] 6 ... 9 <br />
		"5" für: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Zeigt am unteren Bildschirmrand die Zeit in Sekunden an, die SMF für das Erstellen gebraucht hat.';
$helptxt['removeNestedQuotes'] = 'Dies wird alle verschachtelten Kommentare eines Beitrags entfernen wenn man einen solchen Beitrag über den entsprechenden Link zitiert.';
$helptxt['simpleSearch'] = 'Zeigt eine vereinfachte Suchmaske an.';
$helptxt['max_image_width'] = 'Erlaubt die Angabe einer maximalen Bildergröße. Bilder die kleiner sind, werden dadurch nicht beeinträchtigt.';
$helptxt['mail_type'] = 'Diese Option erlaubt das Wählen zwischen den Standardeinstellungen von PHP und den SMTP-Einstellungen. PHP unterstützt keine Authentifizierung mit SMTP (wie viele Hosts es heutzutage erfordern), so dass Sie nur SMTP aktivieren müssen, wenn Sie es benutzen möchten. SMTP kann in der Nutzung langsamer sein und manche Server nehmen keine Benutzernamen und Kennwörter an.<br /><br />Sie müssen keine SMTP Daten eingeben, wenn Sie den PHP-Standard benutzen.';
$helptxt['attachment_manager_settings'] = 'Dateianhänge sind Dateien, die von den Benutzern hochgeladen und an den Beitrag angehängt werden können.<br /><br />
		<b>Dateitypen prüfen:</b><br /> Prüft die verwendeten Dateiendungen.<br />
		<b>Erlaubte Dateitypen:</b><br /> Hier können Sie die erlaubten Dateiendungen angeben, die verwendet werden dürfen.<br />
		<b>Upload-Pfad für Dateianhänge:</b><br /> Der Pfad zu Ihrem Dateianhangsverzeichnis.<br />(Beispiel: /home/ihre/seite/www/forum/attachments)<br />
		<b>Max. Größe des Verzeichnisses (in KB):</b><br /> Wählen Sie die max. Größe des Dateianhangsverzeichnisses aus.<br />
		<b>Max. Größe der Dateianhänge pro Beitrag (in KB):</b><br /> Wählen Sie die max. Größe aller Dateianhänge aus, die einem Beitrag angehängt werden können.<br />
		<b>Max. Größe pro Dateianhang (in KB):</b><br /> Wählt die max. Größe eines Dateianhangs aus.<br />
		<b>Max. Anzahl der Dateianhänge pro Beitrag:</b><br /> Wählt die Anzahl der Dateianhänge, die ein Benutzer pro Beitrag anhängen kann.<br />
		<b>Dateianhang als Bild im Beitrag anzeigen:</b><br /> Wenn die hochgeladene Datei ein Bild ist, wird es unterhalb des Beitrags angezeigt.<br />
		<b>Bilder verkleinern, wenn sie im Beitrag angezeigt werden:</b><br /> Wenn die vorherige Option aktiviert ist, wird ein seperates (kleineres) Vorschaubild gespeichert, um Bandbreite zu sparen.<br />
		<b>Max. Breite und Höhe der Vorschaubilder:</b><br /> Wird in Verbindung mit der Option "Bilder verkleinern, wenn sie im Beitrag angezeigt werden" benutzt und gibt die max. Breite bzw. Höhe der Vorschaubilder an. Diese werden proportional verkleinert.';
$helptxt['attachment_image_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Bild Anhänge. Warnung! Diese umfangreiche Sicherheitskontrolle kann eine große Zahl von abgelehnten Anhängen verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit Bild Neukodierung zu verwenden, wo SMF die Bilder neu Kodiert. Ist die Bild Neukodierung nicht aktiviert, werden die Bild Anhänge überprüft und gegebenenfalls zurückgewiesen.
';
$helptxt['attachment_image_reencode'] = 'Bei Auswahl dieser Option wird versucht, hochgeladene Bild neu zu kodieren. Die Bild Neukodierung bietet mehr Sicherheit. Beachten Sie jedoch, dass die Bild Neukodierung alle animierte Bilder statisch macht.<br />Diese Funktion ist nur anwendbar, wenn das GD Modul auf dem Server installiert ist.
';
$helptxt['avatar_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Benutzerbilder. Warnung! Diese umfangreiche Sicherheitskontrolle kann eine große Zahl von abgelehnten Bildern verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit Bild Neukodierung zu verwenden, wo SMF die Bilder neu Kodiert. Ist die Bild Neukodierung nicht aktiviert, werden die Benutzerbilder überprüft und gegebenenfalls zurückgewiesen.';
$helptxt['avatar_reencode'] = 'Bei Auswahl dieser Option wird versucht, hochgeladene Benutzerbilder neu zu kodieren. Die Bild Neukodierung bietet mehr Sicherheit. Beachten Sie jedoch, dass die Bild Neukodierung alle animierte Benutzerbilder statisch macht.<br />Diese Funktion ist nur anwendbar, wenn das GD Modul auf dem Server installiert ist.';
$helptxt['karmaMode'] = 'Karma zeigt die Beliebtheit eines Mitglieds im Forum an. Sie können die Anzahl der Beiträge festlegen, ab der Karma genutzt werden darf,
		die Zeit zwischen zwei Abstimmungen und ob der Administrator auch von diesem Zeitlimit erfasst werden soll.';
$helptxt['cal_enabled'] = 'Der Kalender kann benutzt werden, um Geburtstage oder andere Ereignisse anzuzeigen.<hr />
		<b>Datum als Link für neues Ereignis:</b><br />Erstellt ein neues Ereignis, wenn der Benutzer auf die aktuelle Datumszahl klickt.<br />
		<b>Wochennummer anzeigen:</b><br />Zeigt im Kalender "Woche X" an.<br />
		<b>Max. Anzahl der zukünftigen Tage auf dem Board-Index:</b><br />Bestimmt die Anzahl der zukünftigen Tage, die auf dem Board-Index unter "Zukünftige Ereignisse" angezeigt werden.<br />
		<b>Feiertage anzeigen:</b><br />Zeigt die Feiertage im Kalender und/oder auf dem Board-Index an.<br />
		<b>Geburtstage anzeigen:</b><br />Zeigt die Geburtstage im Kalender und/oder auf dem Board-Index an.<br />
		<b>Ereignisse anzeigen:</b><br />Zeigt die Ereignisse im Kalender und/oder auf dem Board-Index an.<br />
		<b>Board für Kalenderereignisse:</b><br />Wählen Sie das Board, in welchem die Ereignisse erstellt werden sollen.<br />
		<b>Ereignisse ohne Beitragslink erlauben:</b><br />Erlaubt das Erstellen von Ereignissen ohne dazugehöriges Thema.<br />
		<b>Verlinkte Ereignisse im Thema anzeigen:</b><br />Zeigt einen Link zum zugehörigen Ereignis im Thema an.<br />
		<b>Min. Jahr:</b><br />Bestimmt das "erste" Jahr im Kalender.<br />
		<b>Max. Jahr:</b><br />Bestimmt das "letzte" Jahr im Kalender.<br />
		<b>Ereignisse dürfen über mehrere Tage gehen:</b><br />Aktivieren Sie diese Option, um Ereignisse über mehrere Tage laufen zu lassen.<br />
		<b>Max. Ereignisdauer:</b><br />Bestimmt die Anzahl der Tage, die ein Ereignis maximal dauern kann.<br />';
$helptxt['localCookies'] = 'SMF benutzt Cookies, um die Login-Informationen auf dem Computer zu speichern.
	Cookies können global (meineseite.de) oder lokal (meineseite.de/pfad/zum/forum) gespeichert werden.<br />
	Aktivieren Sie diese Option, wenn Sie automatisch ausgeloggt werden.<hr />
	Global gespeicherte Cookies sind weniger sicher, wenn sie auf auf einem Shared-Server benutzt werden (z.B. Tripod).<hr />
	Lokal gespeicherte Cookies funktionieren nicht außerhalb des Forum-Verzeichnis. Wenn das Forum unter www.meineseite.de/forum liegt, können Dateien wie www.meineseite.de/index.php nicht auf die Cookie Informationen zugreifen.
	Wenn Sie die Datei SSI.php benutzen, werden globale Cookies zwingend (!) benötigt.';
$helptxt['enableBBC'] = 'Erlaubt den Mitgliedern die Benutzung von Bulletin Board Code (BBC) im Forum, welcher den Text formatiert, Bilder einfügt und vieles mehr.';
$helptxt['time_offset'] = 'Nicht immer ist die Serverzeit gleich der Zeit, die vom Forum genutzt werden soll. Hier können Sie die Zeitdifferenz in Stunden eintragen (positive/negative Zahl), welche den Unterschied zwischen dem Server und der Zeit im Forum macht.';
$helptxt['default_timezone'] = 'Die Server Zeitzone teilt PHP mit, in welcher Zeitzone der Server steht.
Sie sollten sicher gehen, das dies korrekt eingestellt ist, wahrscheinlich mit der Zeitzone des Landes/der Stadt in der der Server steht.
Mehr Informationen finden sie auf der <a href="http://www.php.net/manual/de/timezones.php" target="_blank">PHP Seite</a>.';
$helptxt['spamWaitTime'] = 'Tragen Sie hier ein Zeitintervall ein, das ein Benutzer zwischen zwei Beiträgen einhalten muss. Dies kann zum Verhindern des sogenannten "Spammens" beitragen.';

$helptxt['enablePostHTML'] = 'Erlaubt das Benutzen von häufigen HTML Befehlen:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=""&gt;</li>
		<li>&lt;img src="" alt="" /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Hier können Sie das Standard- bzw. Gäste-Theme wählen, Verzeichnisse für die Themes ändern, Themes editieren sowie individuelle Theme-Optionen einstellen.';
$helptxt['theme_install'] = 'Hier können Sie neue Themes installieren, indem Sie ein schon vorhandenes Verzeichnis benutzen, ein Zip-Paket hochladen oder das vorhandene Theme kopieren.<br /><br />Beachten Sie, dass das Verzeichnis bzw. das Zip-Paket die Datei <tt>theme_info.xml</tt> enthalten muss.';
$helptxt['enableEmbeddedFlash'] = 'Diese Option erlaubt den Benutzern, Flash-Filme in ihren Beiträgen zu nutzen. Das kann ein Sicherheitsrisiko darstellen! DIE BENUTZUNG ERFOLGT AUF EIGENE GEFAHR!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Diese Option erlaubt den Benutzern, zu den <a href="%s?action=.xml;sa=news">Letzten Neuigkeiten</a> zu verlinken. Es wird empfohlen, die Größe der Neuesten Beiträge/News zu begrenzen, da es zu falschen Darstellungen in manchen Programmen wie Trillian kommen kann.';
$helptxt['hotTopicPosts'] = 'Ändert die Zahl der Beiträge, nach denen ein Thema den Status "Heiß" oder "Sehr heiß" erhält.';
$helptxt['globalCookies'] = 'Ermöglicht die Nutzung von Subdomains unabhängigen Cookies. Ein Beispiel:<br />
	Ihre Seite hat die Domain http://www.simplemachines.org,<br />
	Ihr Forum hat die Domain http://forum.simplemachines.org,<br />
	Diese Einstellung ermöglicht es, auf die Forum-Cookies Ihrer Seite zuzugreifen. <b>Aktivieren Sie diese Einstellung nicht, wenn es noch andere Subdomains gibt, die nicht unter Ihrer Kontrolle sind!!</b>';
$helptxt['secureCookies'] = 'Wenn diese Option aktiviert ist wird erzwungen, dass die Cookies, die für die Benutzer des Forums erstellt werden als sicher markiert werden.
Aktivieren sie diese Option nur, wenn sie HTTPS auf ihrer gesamten Seite verwenden, da die Cookies sonst beschädigt werden!';
$helptxt['securityDisable'] = '<i>Deaktiviert</i> die erneute Passwortüberprüfung für den Administratorbereich. NICHT EMPFEHLENSWERT!';
$helptxt['securityDisable_why'] = 'Das ist Ihr aktuelles Passwort (dasselbe, was Sie für das Einloggen benutzen).<br /><br />Warum Sie es eingeben sollten ? Damit Sie sich im Klaren darüber sind, dass <b>Sie</b> die Änderungen im Administrator-Center machen und dafür verantwortlich sind.';
$helptxt['emailmembers'] = 'In dieser Nachricht können Sie folgende Variablen benutzen:<br />
	{\\$board_url} - URL zu Ihrem Forum.<br />
	{\\$current_time} - Die aktuelle Zeit.<br />
	{\\$member.email} - Die aktuelle E-Mail-Adresse des Mitglieds.<br />
	{\\$member.link} - Den aktuellen Link zum betreffenden Mitglied.<br />
	{\\$member.id} - Die aktuelle Benutzer ID.<br />
	{\\$member.name} - Den aktuellen Mitgliedsnamen (für Private Mitteilungen).<br />
	{\\$latest_member.link} - Den Link zum neuesten Mitglied.<br />
	{\\$latest_member.id} - Die ID des neuesten Mitglieds.<br />
	{\\$latest_member.name} - Der Name des neuesten Mitglieds.';
$helptxt['attachmentEncryptFilenames'] = 'Verschlüsselte Dateinamen erlauben die Nutzung eines gleichen Dateinamens, sicheres Hochladen einer .php Datei und erhöht die allgemeine Sicherheit. Andererseits macht es das Wiederherstellen der Datenbank nach einem großen Crash schwieriger.';

$helptxt['failed_login_threshold'] = 'Geben Sie die Anzahl der erfolglosen Login-Versuche an, bevor der Benutzer zum Bildschirm \'Passwort vergessen?\' weitergeleitet wird.';
$helptxt['oldTopicDays'] = 'Ist diese Option aktiviert, wird dem Benutzer eine Warnung ausgegeben, wenn er in einem Thema schreiben möchte, in welchem seit der eigestellten Zeit (in Tagen) keiner mehr geantwortet hat. Setzen Sie den Wert auf 0, um die Funktion zu deaktivieren.';
$helptxt['edit_wait_time'] = 'Anzahl in Sekunden, bevor das Datum des letzten Editierens gespeichert wird.';
$helptxt['edit_disable_time'] = 'Anzahl in Minuten, nach denen ein Benutzer seine eigenen Beiträge noch editieren darf. Setzen Sie den Wert auf 0, um die Funktion zu deaktivieren.<br /><br /><i>Beachten Sie: Diese Option hat keinen Effekt auf die Benutzer, welche Beiträge anderer Mitglieder editieren dürfen!</i>';
$helptxt['posts_require_captcha'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor der Beitrag veröffentlicht wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll das Spammen durch automatische Skripte verhindern.';
$helptxt['enableSpellChecking'] = 'Aktiviert die Rechtschreibeprüfung. Sie MÜSSEN die pspell Bibliothek auf dem Server installiert haben und PHP muss so konfiguriert sein, dass es selbige auch benutzt. Ihr Server ' . (function_exists('pspell_new') ? 'HAT' : 'HAT NICHT') . ' diese Funktion.';
$helptxt['disable_wysiwyg'] = 'Diese Option verhindert die Benutzung des WYSIWYG-Editors ("What You See Is What You Get" - Was Sie sehen ist was Sie bekommen) auf der Antwortseite.';
$helptxt['lastActive'] = 'Gibt die Anzahl in Minuten an, in welcher die Besucher auf dem Board-Index als aktiv gekennzeichnet werden. Standard sind 15 Minuten.';

$helptxt['customoptions'] = 'Dieser Bereich definiert die Optionen, die ein Benutzer aus einem Drop-Down Menü wählen kann. Hier müssen ein paar Punkte beachtet werden:
	<ul>
		<li><b>Standardoption:</b> Das durch den Radio Button ausgewählte Textfeld ist die aktivierte Standardoption, wenn der Benutzer zum ersten Mal sein Profil anschaut.</li>
		<li><b>Optionen löschen:</b> Um eine Option zu löschen, entfernen Sie einfach den Text aus dem betreffenden Textfeld. Bei allen Benutzer, die diese Option gewählt hatten, wird sie zurückgesetzt.</li>
		<li><b>Optionen neu ordnen:</b> Sie können die Optionen neu ordnen, in dem Sie den Text von einem Textfeld in ein anderes schreiben. Seien Sie aber absolut sicher, dass Sie den Text <b>nicht</b> verändern, da sonst alle Benutzerdaten verlorengehen.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Diese Funktion optimiert die Datenbank alle angegebenen Tage. Geben Sie 1 ein, um die Datenbank täglich zu optimieren. Sie können ebenfalls eine max. Zahl von Benutzern angeben, die online sein dürfen, damit es keine Probleme mit der Geschwindigkeit gibt.';
$helptxt['autoFixDatabase'] = 'Diese Funktion repariert automatisch auftretende Fehler, wobei die Benutzer nichts davon merken werden. Das kann sinnvoll sein, andererseits ist das Forum bei Fehlern so lange funktionsuntüchtig, bis Sie selbst darauf aufmerksam werden. Ihnen wird in diesem Fall eine E-Mail zugesendet.';

$helptxt['enableParticipation'] = 'Zeigt ein verändertes Symbol vor den Themen, in denen man selbst geantwortet hat.';

$helptxt['db_persist'] = 'Erhöht die Geschwindigkeit zur Datenbank, indem eine Verbindung dauerhaft aufrecht erhalten wird. Wenn Sie einen dedizierten Server benutzen, könnte es Probleme mit Ihrem Serveranbieter geben.';
$helptxt['ssi_db_user'] = 'Diese Einstellung erlaubt das Benutzen eines anderen Benutzernamens bzw. Passwortes für die Datenbank, wenn mit der Datei SSI.php gearbeitet wird.';

$helptxt['queryless_urls'] = 'Verändert das Format der URLs ein bisschen, so dass Suchmaschinen sie besser verarbeiten können.
Diese sehen dann zum Beispiel so aus: index.php/topic,1.0.html.

Diese Option funktioniert ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nicht') . ' mit Ihrem Server.';
$helptxt['countChildPosts'] = 'Aktivieren Sie diese Option, um die Beiträge und Themen der untergeordneten Boards zum Gesamtwert auf dem Board-Index zu addieren.<br /><br />Diese Funktion macht die Anzeige merklich langsamer, zeigt aber keine Boards mehr mit \'0\' an, wenn diese untergeordnete Boards mit Beiträgen enthalten.';
$helptxt['fixLongWords'] = 'Diese Option verkürzt Wörter einer bestimmten Länge (Autolenkrad = Autol...), so dass diese nicht das Layout des Forums zerstören.';
$helptxt['allow_ignore_boards'] = 'Diese Option erlaubt den Benutzern bestimmte Boards zu ignorieren.';

$helptxt['who_enabled'] = 'Aktiviert die \'Wer ist online\' Funktion, welche dem Benutzer anzeigt, wer online ist und was der Benutzer gerade macht.';

$helptxt['recycle_enable'] = '"Wiederherstellung" von gelöschten Themen und Beiträgen in die entsprechenden Boards.';

$helptxt['enableReportPM'] = 'Diese Option erlaubt den Benutzern das Melden von Privaten Mitteilungen an die Administratoren. Sie soll helfen, Mißbräuche des Privaten Mitteilungen Systems zu verfolgen bzw. zu verhindern.';
$helptxt['max_pm_recipients'] = 'Diese Option erlaubt die Vergabe einer max. Anzahl von Empfängern, die ein Benutzer beim Schreiben einer Privaten Mitteilung eingeben kann. Dies soll helfen, dass sogenannte Spammen im Forum zu vermeiden. Benutzer mit der Berechtigung zum Senden von Newslettern sind von dieser Beschränkung ausgeschlossen. Geben Sie 0 für kein Limit ein.';
$helptxt['pm_posts_verification'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor die Private Mitteilung versendet wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll das Spammen durch automatische Skripte verhindern.';
$helptxt['pm_posts_per_hour'] = 'Diese Einstellung limitiert die Anzahl der Privaten Mitteilungen, die von einem Benutzer in einer Stunde versendet werden können. Sie betrifft nicht Administratoren oder Moderatoren.';

$helptxt['default_personal_text'] = 'Gibt den Text an, den ein Benutzer als "persönlichen Text" standardmäßig hat.';

$helptxt['modlog_enabled'] = 'Überwacht alle Aktionen der Moderatoren.';

$helptxt['guest_hideContacts'] = 'Diese Option versteckt die E-Mail-Adresse und die Messenger Angaben aller Mitglieder vor Gästen.';

$helptxt['registration_method'] = 'Diese Option stellt verschiedene Möglichkeiten der Registrierung zur Verfügung. Sie können aus folgenden wählen:<br /><br />
	<ul class="normallist">
		<li>
			<b>Sofortige Registrierung</b><br />
				Neue Mitglieder können sich sofort einloggen und Beiträge schreiben, nachdem Sie sich registriert haben.<br />
		</li><li>
			<b>Neue Mitglieder aktivieren</b><br />
				Nach der Registrierung erhalten neue Mitglieder eine E-Mail mit einem Aktivierungslink, welchen Sie anklicken müssen, bevor sie das Forum nutzen können.<br />
		</li><li>
			<b>Neue Mitglieder genehmigen</b><br />
				Alle neuen Mitglieder müssen zuerst vom Administrator genehmigt werden, bevor sie das Forum nutzen können.
		</li><li>
				<b>Registrierung deaktivieren:</b><br />
				Deaktiviert die Registrierung, so dass sich keine neuen Mitglieder im Forum registrieren können.<br />
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Authentifizierung mit OpenID</b><br />
	OpenID ist ein Verfahren ein Benutzerkonto auf mehreren Webseiten zu verwenden. Um ein OpenID Konto zu verwenden, müssen Sie zunächst eines erstellen - Eine Liste verfügbarer Anbieter findet sich auf der <a href="http://openid.net/" target="_blank">offiziellen OpenID Seite</a>.<br /><br />
	Wenn Sie ein OpenID Konto haben, geben Sie einfach die eindeutige URL in das OpenID Eingabefeld ein und senden das Formular ab. Sie werden dann zu der Seite ihres Anbieters weitergeleitet um sich zu authentifizieren, um anschließend wieder hier hin zurück geleitet zu werden.<br /><br />
	Bei ihrem ersten Besuch auf dieser Seite werden sie nach einigen Details gefragt, bevor sie erkannt werden und sich einloggen können und ihre Profildetails ändern können.<br /><br />
	Für mehr Informationen besuchen Sie die <a href="http://openid.net/" target="_blank">offizielle OpenID Seite</a>';

$helptxt['send_validation_onChange'] = 'Alle Mitglieder müssen bei einer Änderung der E-Mail-Adresse diese bestätigen, bevor sie ihr Benutzerkonto wieder nutzen können..';
$helptxt['send_welcomeEmail'] = 'Diese Option versendet allen neuen Mitgliedern eine Willkommens E-Mail, wenn diese sich im Forum registrieren.';
$helptxt['password_strength'] = 'Diese Einstellung bestimmt die "Qualität" der Passwörter aller Benutzer. Je komplexer das Passwort, desto schwieriger ist es zu erraten.
	Die verfügbaren Optionen sind:
	<ul>
		<li><b>Niedrig:</b> Das Passwort muss aus mindestens vier Zeichen bestehen.</li>
		<li><b>Mittel:</b> Das Passwort muss mindestens acht Zeichen haben und darf nicht aus Teilen des Benutzernamens oder der E-Mail-Adresse bestehen.</li>
		<li><b>Hoch:</b> Gleiche Voraussetzungen wie Mittel, das Passwort muss außerdem einen Mix aus Groß- und Kleinbuchstaben sowie mindestens eine Zahl enthalten.</li>
	</ul>';

$helptxt['coppaAge'] = 'Dieser Wert gibt das Mindestalter an, welches ein neues Mitglied haben muss, damit es sich im Forum registrieren darf.
	Während der Registrierung muss angegeben werden, ob der Benutzer älter oder jünger als das Mindestalter ist. Die Registrierung wird je nach Einstellung abgelehnt oder suspendiert, bis die Genehmigung der Eltern vorhanden ist.
	Sollten Sie einen Wert von 0 eingeben, werden alle Funktionen bezüglich der Alterbeschränkung deaktiviert.';
$helptxt['coppaType'] = 'Sollte die Altersbeschränkung aktiviert sein, bestimmt diese Option, was mit den Registrierungen der Benutzer passiert, die jünger als das Mindestalter sind. Es gibt die folgenden zwei Möglichkeiten:
	<ul>
		<li>
			<b>Registrierung anlehnen:</b><br />
				Die Registrierung neuer Mitglieder unterhalb des Mindestalters wird sofort abgelehnt.<br />
		</li><li>
			<b>Erfordert Genehmigung von Eltern/Erziehungsberechtigten</b><br />
				Die Benutzerkonten neuer Mitglieder unterhalb des Mindestalters werden auf "Erwarte Genehmigung" gesetzt und es wird ein Formular angezeigt, mit dem die Eltern die Genehmigung für die Mitgliedschaft im Forum erteilen müssen.
				Ihnen werden ebenso die Kontaktmöglichkeiten angezeigt, mit denen das Formular an den Administrator geschickt werden kann (per Post oder per Fax).
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Die Textfelder mit den Kontaktangaben sind erforderlich, damit das Formular an den Administrator geschickt werden kann. Die Angaben werden allen neuen Mitgliedern angezeigt, die das Mindestalter noch nicht erreicht haben und sind für die Genehmigung durch Eltern/Erziehungsberechtigte unbedingt notwendig. Es sollte mindestens eine Postadresse oder eine Faxnummer angegeben werden.';

$helptxt['allow_hideOnline'] = 'Aktivieren Sie diese Option, können alle Mitglieder ihren Online-Status verstecken (außer vor Administratoren). Wenn Sie diese Option deaktivieren, können nur Mitglieder den Status verstecken, welche die Möglichkeit haben, das Forum zu administrieren. Das Deaktivieren ändert keinen Status eines Mitglieds, es verhindert nur das Verstecken des Status in der Zukunft.';
$helptxt['make_email_viewable'] = 'Aktivieren Sie diese Option, um alle E-Mail-Adressen im Forum sichtbar zu machen. Dies setzt die Benutzer einer hohen Gefahr aus, Opfer von Spam-Attacken zu werden. Diese Option ordnet sich aber der Einstellung im Profil aller Benutzer bezüglich des Versteckens der E-Mail-Adresse gegenüber anderen Mitgliedern unter. <b>Eine Aktivierung wird nicht empfohlen!</b>';
$helptxt['meta_keywords'] = 'Diese Schlüsselwörter werden auf jeder Seite eingebunden um Suchmaschinen (usw.) mit zu teilen, was für Inhalt auf ihrer Seite zu finden ist.
Es muss eine Komma-geteilte Liste von Wörtern sein und sie darf kein HTML enthalten.';

$helptxt['latest_support'] = 'Dieser Bereich zeigt die häufigsten Probleme und Fragen zur Ihrer Serverkonfiguration. Diese Informationen werden nicht gespeichert.<br /><br />Sollte es bei "Lade Support Informationen..." stehen bleiben, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';
$helptxt['latest_packages'] = 'Hier können Sie ein paar der beliebtesten und zufällig ausgewählten Modifikationen bzw. Pakete sehen, welche leicht und schnell zu installieren sind.<br /><br />Wenn dieser Bereich nicht sichtbar ist, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';
$helptxt['latest_themes'] = 'Dieser Bereich zeigt die neuesten und beliebtesten Themes von<a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> an. Sollte er nicht sichtbar sein, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';

$helptxt['secret_why_blank'] = 'Zu Ihrer Sicherheit wird die Antwort (genauso wie Ihr Passwort) zu Ihrer Frage verschlüsselt, so dass SMF Ihnen nur sagen kann, ob es richtig ist oder nicht. Die Antwort oder das Passwort selbst nennen kann SMF dagegen nicht!';
$helptxt['moderator_why_missing'] = 'Da die Moderatoren von Board zu Board ausgewählt werden, müssen Sie diese im Bereich <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">Boards verwalten</a> eintragen.';

$helptxt['permissions'] = 'Berechtigungen haben die Funktion, bestimmten Gruppen Aktionen zu erlauben oder zu verbieten<br /><br />Sie können mit Hilfe der Checkboxen mehrere Boards gleichzeitig ändern oder die Berechtigungen einer bestimmten Gruppe ändern, in dem Sie auf \'Ändern\' klicken.';
$helptxt['permissions_board'] = 'Wenn ein Board auf \'Global\' gesetzt ist, hat es keine speziellen Berechtigungen. \'Lokal\' dagegen hat eigene Berechtigungen, welche sich von anderen Boards unterscheiden und somit unterschiedliche Berechtigungen zwischen den Boards erlaubt.';
$helptxt['permissions_quickgroups'] = 'Erlaubt das Verwenden der "vordefinierten" Berechtigungen - Standard bedeutet \'nichts spezielles\', Beschränkt bedutet \'wie ein Gast\', Moderator vergibt Rechte \'wie einem Moderator\' und \'Wartungsmodus\' bedeutet, dass die Berechtigungen einem Administrator sehr nahe kommen.';
$helptxt['permissions_deny'] = 'Das Verbieten von Berechtigungen erlaubt es Ihnen, bestimmte Funktionen gewählten Mitgliedergruppen zu entziehen. Dazu erstellen Sie z.B. eine Mitgliedergruppe und verbieten dieser eine bestimmte Berechtigung.<br /><br />Benutzen Sie diese Option mit großer Vorsicht, da verbotene Berechtigungen den Mitgliedern nicht mehr zur Verfügung stehen, selbst wenn die Berechtigungen in einer anderen Gruppe erlaubt sind, der dieses Mitglied angehört.';
$helptxt['permissions_postgroups'] = 'Das Aktivieren der Berechtigungen für beitragsbasierende Gruppen erlaubt das Zuweisen von Berechtigungen an Mitglieder mit einer bestimmten Beitragszahl. Diese Berechtigungen werden zu den bereits vorhanden <em>addiert</em>.';
$helptxt['membergroup_guests'] = 'Die Mitgliedergruppe "Gäste" enthält alle Benutzer, die nicht eingeloggt sind.';
$helptxt['membergroup_regular_members'] = 'Die Mitgliedergruppe "Normale Mitglieder" bezeichnet alle Benutzer die eingeloggt sind, jedoch keiner primäre Mitgliedergruppe zugeordnet sind.';
$helptxt['membergroup_administrator'] = 'Der Administrator kann alles im Forum machen und jedes Board ansehen. Es gibt keine Berechtigungseinstellungen für den Administrator.';
$helptxt['membergroup_moderator'] = 'Die Mitgliedergruppe "Moderator" ist eine spezielle Gruppe. Die zugewiesenen Berechtigungen und Einstellungen gelten <em>nur in den Boards, wo die betreffenden Mitglieder moderieren</em>. Außerhalb dieser Boards werden sie wie normale Benutzer behandelt.';
$helptxt['membergroups'] = 'In SMF gibt es zwei Arten von Gruppen, denen die Mitglieder zugeteilt sind:
	<ul>
		<li><b>Reguläre Gruppen:</b> In eine reguläre Gruppe werden Mitglieder nicht automatisch eingeteilt. Um ein Mitglied einer dieser Gruppen zuzuordnen, gehen Sie in das Profil des Benutzers und klicken auf "Benutzerkonto". Von hier aus können Sie nun das Mitglied verschiedenen Gruppen zuordnen.</li>
		<li><b>Beitragsbasierende Gruppen:</b> Im Gegenteil zu regulären Gruppen können Sie beitragsabhängige Gruppen nicht zuordnen. Stattdessen werden Mitglieder diesen automatisch zugeordnet, wenn sie eine bestimmte Zahl an Beiträgen geschrieben haben.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Sie können die Ereignisse editieren, indem Sie auf den roten Stern (*) neben dem Namen klicken.';

$helptxt['maintenance_backup'] = 'Dieser Bereich erlaubt eine Sicherung von allen Beiträgen, Einstellungen, Mitgliedern und anderen Informationen Ihres Forums in einer (womöglich sehr großen) Datei.<br /><br />Es ist empfehlenswert, die Daten regelmäßig zu sichern - am besten wöchentlich -, um die Datensicherheit zu erhöhen.';
$helptxt['maintenance_rot'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen alter Themen. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung Ihrer Daten zu machen für den Fall, dass Sie etwas löschen, was Sie nicht wollten.<br /><br />Benutzen Sie diese Funktion mit Vorsicht!';
$helptxt['maintenance_members'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen von Benutzerkonten aus dem Forum. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung Ihrer Daten zu machen für den Fall, dass Sie etwas löschen, was Sie nicht wollten.<br /><br />Benutzen Sie diese Funktion mit Vorsicht!';

$helptxt['avatar_server_stored'] = 'Erlaubt den betreffenden Mitgliedern, Benutzerbilder von Ihrem Server auszuwählen. Diese Bilder befinden sich im Unterordner \'avatars\' des SMF-Verzeichnisses.<br />Ein Tipp: Wenn Sie Unterordner in Verzeichnis \'avatars\' anlegen, können Sie verschiedenen Kategorien unter den Benutzerbildern einrichten.';
$helptxt['avatar_external'] = 'Erlaubt den betreffenden Mitgliedern, ihre Benutzerbilder von anderen Servern zu verlinken. Der Nachteil ist, dass Bilder verlinkt werden können, die nicht im Forum gewünscht sind (pornografische/gewalttätige Inhalte).';
$helptxt['avatar_download_external'] = 'Aktivieren Sie diese Option, um das externe Benutzerbild herunterzuladen. Sollte das erfolgreich sein, wird es danach wie ein hochgeladenes Benutzerbild behandelt.';
$helptxt['avatar_upload'] = 'Diese Option gleicht dem externen Benutzerbild, hat aber den Vorteil, dass Sie mehr Kontrolle über die Benutzerbilder haben und die Mitglieder keine Möglichkeit brauchen, ihre Benutzerbilder selbst hochzuladen.<br /><br />Der Nachteil ist, dass Sie ensprechend mehr Platz auf Ihrem Server bereitstellen müssen.';
$helptxt['avatar_download_png'] = 'PNGs sind größer, bieten aber eine bessere Kompression (und damit Qualität). Sollte dies nicht aktiviert sein, werden stattdessen JPEG Bilder benutzt - welche meistens kleiner in der Größe sind, jedoch eine schlechtere Qualität bieten.';

$helptxt['disableHostnameLookup'] = 'Deaktiviert die Suche nach den Hostnamen, was manche Server sehr langsam macht. Beachten Sie, dass dies das Bannen von Mitgliedern uneffektiver macht.';

$helptxt['search_weight_frequency'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor zählt die Anzahl der übereinstimmenden Beiträge und teilt sie durch die gesamte Zahl der Beiträge innerhalb eines Themas.';
$helptxt['search_weight_age'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor bewertet das Alter der neuesten Übereinstimmung innerhalb eines Themas. Je neuer der Beitrag, desto höher ist die Bewertung.';
$helptxt['search_weight_length'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor basiert auf der Themengröße. Je mehr Beiträge innerhalb eines Themas, desto höher ist die Bewertung.';
$helptxt['search_weight_subject'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach dem Vorhandensein einer Suchanfrage innerhalb des Betreffs eines Themas.';
$helptxt['search_weight_first_message'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach der Übereinstimmung des Suchbegriffs im ersten Beitrag eines Themas.';
$helptxt['search_weight_sticky'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Verändern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor kontrolliert, ob das gefundene Theme fixiert ist und weist ihm bei Bedarf eine höhere Relevanz zu.';
$helptxt['search'] = 'Hier können Sie die Einstellungen für die Suche verändern.';
$helptxt['search_why_use_index'] = 'Ein Such-Index kann die Geschwindigkeit der Suche im Forum merklich erhöhen. Gerade bei einer großen Anzahl an Beiträgen kann die Suche ohne einen Index sehr lange dauern und die Datenbank stark belasten. Wenn Ihr Forum mehr wie 50.000 Beiträge enthalten, sollten Sie die Erstellung eines Index in Erwägung ziehen, um hohe Belastungsspitzen zu vermeiden.<br /><br />Beachten Sie bitte, dass ein Index unter Umständen einiges an Platz einnehmen kann. Der Volltext-Index ist ein integrierter Index von MySQL, welcher relativ kompakt ist (ungefähr die gleiche Größe wie die Beitragstabelle), einige Wörter jedoch nicht indiziert und durchaus langsame Abfragen produzieren kann. Der benutzerdefinierte Index ist meistens größer (je nach Konfiguration bis zur 3-fachen Größe der Beitragstabelle), hat jedoch Geschwindigkeitsvorteile und ist relativ stabil.';

$helptxt['see_admin_ip'] = 'IP-Adressen werden Administratoren und Moderatoren zur besseren Moderation bzw. Verfolgung angezeigt. Beachten Sie, dass IP-Adressen einen Benutzer nicht eindeutig identifizieren und bei den meisten Leuten nach einiger Zeit wechseln.<br /><br />Mitglieder können Ihre eigenen IP-Adressen sehen.';
$helptxt['see_member_ip'] = 'Ihre IP-Adresse wird nur Ihnen und Moderatoren angezeigt. Beachten Sie, dass diese Daten nicht die Person identifizieren, da IP-Adressen häufig nach einer gewissen Zeit wechseln.<br /><br />Sie können keine IP-Adressen anderer Benutzer sehen und diese können Ihre nicht sehen.';
$helptxt['whytwoip'] = 'SMF benutzt mehrere Methoden, um die IP-Adressen zu bestimmen. Normalerweise finden beide Methoden ein und dieselbe Adresse. In manchen Fällen werden jedoch zwei Adressen gefunden, welche SMF beide protokolliert und beide zum Kontrollieren eines Banns etc. benutzt. Sie können auf eine der beiden Adressen klicken, um diese zu verfolgen und ggf. zu bannen.';

$helptxt['ban_cannot_post'] = 'Die \'Kann nicht schreiben\' Einschränkung erlaubt dem gebannten Benutzer nur noch das Lesen des Forums. Er kann keine neuen Themen erstellen oder auf existierende antworten, Persönliche Mitteilungen versenden oder bei Umfragen abstimmen. Der Benutzer kann aber weiterhin die Themen und Persönlichen Mitteilungen lesen.<br /><br />Dem gebannten Benutzer wird eine Warnmeldung angezeigt.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Beitrags-Einstellungen</b><br />
			Hier können Sie die Einstellungen bezüglich des Schreibens und der Ansicht von Beiträgen ändern. Auch die Rechtschreibeprüfung lässt sich hier aktivieren.
		</li><li>
			<b>Bulletin Board Code</b><br />
			De-/Aktivieren Sie hier die Code-Tags für das Schreiben von Beiträgen. Wählen Sie weiterhin, welche Codes erlaubt sind und welche nicht.
		</li><li>
			<b>Zensierte Wörter</b>
			Um die Ausdrücke in Ihrem Forum unter Kontrolle zu halten, können Sie bestimmte Wörter zensieren. Diese Funktion ersetzt das betroffene Wort mit einer - von Ihnen gewählten - vernünftigen Variante.
		</li><li>
			<b>Themen-Einstellungen</b>
			Hier können Sie Einstellungen bezüglich der Themen verändern: Anzahl der Themen pro Seite, fixierte Themen de-/aktivieren, Anzahl der Beiträge ab der ein Thema heiß oder sehr heiß ist etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Wenn ein Gast als Suchmaschine erkannt wird und einer Gruppe zugeordnet wird, können Sie den Umfang des Zugriffs bequem über die Berechtigungen steuern. So können Sie Suchmaschinen einen erweiterten Zugriff ermöglichen wie normalen Gästen. Sie können z.B. eine neue Gruppe mit dem Namen "Bots" erstellen und diese hier auswählen. Danach entziehen Sie dieser Gruppe die Berechtigung Profile anzuschauen, um die Benutzerdaten zu schützen.<br />Achtung: Das Erkennen der Suchmaschinen arbeitet nie perfekt und kann von anderen Benutzern simuliert werden, um trotzdem einen erweiterten Zugriff (wenn eingestellt) wie normale Gäste zu bekommen.';
$helptxt['show_spider_online'] = 'Diese Einstellung erlaubt Ihnen zu wählen, ob "Spiders" (Bots, die z.B. ihre Seiten für Suchmaschinen indexieren) in der Wer ist online Liste auf der Forums Hauptseite und "Wer ist online" Seite angezeigt werden.
Die Optionen sind:
<ul class="normallist">
<li>
<b>Überhaupt nicht</b><br />
Spider erscheinen als Gäste.</li>
<li><b>Zeige Spider Anzahl</b><br />
Die Forums Hauptseite zeigt die Anzahl der zur Zeit im Forum aktiven Spider.</li>
<li><b>Zeige Spider Namen</b><br />
Jeder Spider Name wird angezeigt, so dass jeder Benutzer sehen kann, wie viele von jedem Spider gerade das Forum besucht. Dies gilt sowohl für die Forums Hauptseite, wie auch für die Wer Ist Online Seite.</li>
<li><b>Zeige Spider Namen - Nur Administratoren</b><br />
Wie oben, nur dass lediglich Administratoren den Spider Status sehen können - alle anderen sehen sie als Gäste.</li>
</ul>';

$helptxt['birthday_email'] = 'Wählen Sie die Vorlage für die Geburtstagsnachricht. Eine Vorschau wird in den Feldern E-Mail Betreff und E-Mail Text angezeigt.<br /><strong>Achtung:</strong> Das Auswählen dieser Option aktiviert nicht automatisch den Versand der Geburtstagsnachricht. Um den Versand zu starten, benutzen Sie bitte die Seite <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Geplante Aufgaben</a> und aktivieren die Aufgabe "Geburtstagsnachricht senden".';
$helptxt['pm_bcc'] = 'Wenn Sie eine Private Mitteilung versenden möchten, können Sie einen weiteren Empfänger als BCC bzw. "Blind Carbon Copy" hinzufügen. Die Identität des BCC Empfänger wird den anderen Empfängern nicht mitgeteilt, er erhält die Mitteilungen anonym und ohne Wissen der anderen.';

$helptxt['move_topics_maintenance'] = 'Diese Funktion erlaubt es, alle Beiträge aus einem Board in ein anderes Board zu verschieben.';
$helptxt['maintain_reattribute_posts'] = 'Diese Funktion ordnet Beiträge von Gästen registrierten Mitgliedern zu. Das ist sinnvoll, wenn ein Mitglied das Benutzerkonto aus Versehen gelöscht hat und nach einer erneuten Registrierung die Beiträge zurückhaben möchte.';
$helptxt['chmod_flags'] = 'Sie können die Dateiberechtigungen auf einen selbst bestimmten Wert setzen. Geben Sie dazu einen numerischen CHMOD-Wert an. Beachten Sie - diese Einstellung hat keine Auswirkungen auf Mircosoft Windows Betriebssysteme.';

$helptxt['postmod'] = 'Diese Sektion erlaubt es Mitgliedern des Moderatoren-Teams (mit ausreichenden Berechtigungen) Beiträge und Themen zu akzeptieren bevor diese angezeigt werden.';

$helptxt['field_show_enclosed'] = 'Umschließt die Benutzereingaben mit Text oder HTML. Dies erlaubt es Ihnen weitere Sofortnachrichtenquellen, Bilder, Einbettungen oder Ähnliches hinzuzufügen. Beispielsweise:<br/><br/>
&lt;a href="http://webseite.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />Beachte, dass du folgende Variablen verwenden kannst:<br /> <ul class="normallist"> <li>{INPUT} - Die Eingabe des Benutzers.</li> <li>{SCRIPTURL} - Web-Adresse des Forums.</li> <li>{IMAGES_URL} - URL zum Bilder-Verzeichnis des vom Benutzer aktuell verwendeten Themes.</li> <li>{DEFAULT_IMAGES_URL} - URL zum Bilder-Verzeichnis des Standard-Themes.</li> </ul>';

$helptxt['custom_mask'] = 'Die Eingabemaske ist für die Forumssicherheit wichtig. Das Validieren der Benutzereingaben stellt sicher, dass Daten nicht in einer Weise genutzt werden, die Sie nicht erwarten. Wir haben einige einfache reguläre Ausdrücke als Hinweise gegeben.<br /><br /> <div class="smalltext" style="margin: 0 2em"> &quot;[A-Za-z]+&quot; - Trifft auf alle Groß- und Kleinbuchstaben des Alphabets zu.<br /> &quot;[0-9]+&quot; - Trifft auf alle numerischen Ziffern zu.<br /> &quot;[A-Za-z0-9]{7}&quot;  - Trifft auf alle Groß- und Kleinbuchstaben des Alphabets sowie numerischen Ziffern in einer Länge von 7 Zeichen zu.<br /> &quot;[^0-9]?&quot; - Schließe alle numerischen Ziffern aus.<br /> &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Erlaube nur 3 oder 6 Hex-Ziffern.<br /> </div><br /><br /> Zusätzlich können spezielle Meta-Zeichen wie  ?+*^$ und {xx} definiert werden. <div class="smalltext" style="margin: 0 2em"> ? - Ein oder kein Zutreffen des letzten Ausdrucks.<br /> + - Ein oder mehrere Vorkommnisse des vorigen Ausdrucks.<br /> * - Kein oder mehr Vorkommnisse des vorigen Ausdrucks.<br /> {xx} - Eine bestimmte Anzahl (xx) an aufeinander folgenden Vorkommnissen des vorigen Ausdrucks.<br /> {xx,} - Eine bestimmte Anzahl oder mehr Vorkommnisse des vorigen Ausdrucks.<br /> {,xx} - Eine bestimmte Anzahl oder weniger an aufeinanderfolgenden Vorkommnissen des vorigen Ausdrucks.<br /> {xx,yy} - Eine Anzahl an aufeinanderfolgenden Vorkommnissen zwischen den beiden Zahlen des vorigen Ausdrucks.<br /> ^ - Start des Textes.<br /> $ - Ende des Textes.<br /> \\ - Escapet das nächste Zeichen.<br /> </div><br /><br /> Weitere Informationen und Techniken können im Internet nachgelesen werden.';

?>