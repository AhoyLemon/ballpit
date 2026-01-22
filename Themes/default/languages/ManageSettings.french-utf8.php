<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Cette page vous permet de paramétrer les caractéristiques et options de base de votre forum. Veuillez voir les <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">Réglages du thème</a> pour plus d\'options. Cliquez sur l\'icône d\'aide pour plus d\'informations à propos d\'un paramètre.';
$txt['security_settings_desc'] = 'Cette page vous permet de régler les options spécifiquement liées à la sécurité et la modération de votre forum, en incluant les options anti-spam.';
$txt['modification_settings_desc'] = 'Cette page contient les réglages ajoutés par les paquets à votre forum';

$txt['modification_no_misc_settings'] = 'Aucun des paquets installés n\'a encore ajouté de réglages à cet endroit.';

$txt['pollMode'] = 'Mode de sondage';
$txt['disable_polls'] = 'Désactiver les sondages';
$txt['enable_polls'] = 'Activer les sondages';
$txt['polls_as_topics'] = 'Montrer les sondages existants comme des sujets';
$txt['allow_guestAccess'] = 'Permettre aux invités de parcourir le forum';
$txt['userLanguage'] = 'Permettre aux utilisateurs de choisir la langue';
$txt['allow_editDisplayName'] = 'Permettre aux utilisateurs de modifier leur nom affiché';
$txt['allow_hideOnline'] = 'Permettre aux non-administrateurs de cacher leur présence en ligne';
$txt['guest_hideContacts'] = 'Ne pas révéler les détails de contact des membres aux invités';
$txt['titlesEnable'] = 'Activer les titres personnalisés';
$txt['enable_buddylist'] = 'Activer les listes d\'amis/ignorés';
$txt['default_personal_text'] = 'Texte personnel par défaut';
$txt['number_format'] = 'Format des nombres par défaut';
$txt['time_format'] = 'Format d\'heure par défaut';
$txt['setting_time_offset'] = 'Décalage horaire général<div class="smalltext">(ajouté aux options spécifiques des membres.)</div>';
$txt['setting_default_timezone'] = 'Fuseau horaire du serveur';
$txt['failed_login_threshold'] = 'Seuil de connexions dépassé';
$txt['lastActive'] = 'Seuil de temps de connexion en ligne';
$txt['trackStats'] = 'Suivi des statistiques au quotidien';
$txt['hitStats'] = 'Suivi des pages vues au quotidien (les stats doivent être activées)';
$txt['enableCompressedOutput'] = 'Activer la compression des pages';
$txt['disableTemplateEval'] = 'Désactiver l\'évaluation des modèles';
$txt['databaseSession_enable'] = 'Faire gérer les sessions par la base de données';
$txt['databaseSession_loose'] = 'Permettre aux navigateurs de revenir sur les pages en cache';
$txt['databaseSession_lifetime'] = 'Secondes avant la fin d\'une session pour inutilisation';
$txt['enableErrorLogging'] = 'Enregistrer les erreurs dans le journal';
$txt['enableErrorQueryLogging'] = 'Inclure la requête de base de données dans le journal d\'erreurs';
$txt['pruningOptions'] = 'Activer le délestage des entrées de journal';
$txt['pruneErrorLog'] = 'Supprimer les entrées du journal d\'erreurs plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['pruneModLog'] = 'Supprimer les entrées du journal de modération plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['pruneBanLog'] = 'Supprimer les entrées du journal d\'occurrences de bannissement plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['pruneReportLog'] = 'Supprimer les entrées du journal de rapports aux modérateurs plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['pruneScheduledTaskLog'] = 'Supprimer les entrées du journal de tâches programmées plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['pruneSpiderHitLog'] = 'Supprimer les occurrences des moteurs de recherche plus anciennes que<div class="smalltext">(0 pour désactiver)</div>';
$txt['cookieTime'] = 'Durée par défaut des témoins (<em>cookies</em>) - en minutes';
$txt['localCookies'] = 'Activer l\'archivage local des témoins<div class="smalltext">(SSI ne fonctionnera pas bien si ceci est activé.)</div>';
$txt['globalCookies'] = 'Utiliser des témoins valides pour tous les sous-domaines<div class="smalltext">(désactivez d\'abord l\'archivage local des cookies&nbsp;!)</div>';
$txt['secureCookies'] = 'Forcer la sécurisation des témoins<div class="smalltext">(Attention, à n\'utiliser que si votre site est en HTTPS&nbsp;!)</div>';
$txt['securityDisable'] = 'Désactiver la protection d\'administration';
$txt['send_validation_onChange'] = 'Demander une réactivation après un changement d\'adresse e-mail';
$txt['approveAccountDeletion'] = 'Nécessiter l\'approbation d\'un admin quand un membre supprime son compte';
$txt['autoOptMaxOnline'] = 'Attendre pour l\'optimisation que le nombre d\'utilisateurs en ligne ne dépasse pas<div class="smalltext">(0 pour aucune limite.)</div>';
$txt['autoFixDatabase'] = 'Réparer automatiquement les tables contenant des erreurs';
$txt['allow_disableAnnounce'] = 'Permettre aux utilisateurs de désactiver les annonces';
$txt['disallow_sendBody'] = 'Ne pas inclure le corps des messages dans les notifications';
$txt['queryless_urls'] = 'URLs plus compréhensibles pour les moteurs de recherche<div class="smalltext"><strong>Serveurs Apache/Lighttpd seulement&nbsp;!</strong></div>';
$txt['max_image_width'] = 'Largeur max. des images envoyées (0 = désactivé)';
$txt['max_image_height'] = 'Hauteur max. des images envoyées (0 = désactivé)';
$txt['enableReportPM'] = 'Permettre de signaler des messages personnels aux modérateurs';
$txt['max_pm_recipients'] = 'Nombre maximal autorisé de destinataires dans un message personnel<div class="smalltext">(0 pour illimit&eacute&nbsp;; les admins sont exemptés)</div>';
$txt['pm_posts_verification'] = 'Nombre de messages de forum en dessous duquel les utilisateurs doivent entrer un code lorsqu\'ils envoient des messages personnels<div class="smalltext">(0 pour pas de limite, les admins sont exemptés)</div>';
$txt['pm_posts_per_hour'] = 'Nombre de messages personnels qu\'un utilisateur peut envoyer en une heure<div class="smalltext">(0 pour pas de limite, les modérateurs sont exemptés)</div>';
$txt['compactTopicPagesEnable'] = 'Limiter le nombre de liens pointant vers les pages suivantes';
$txt['contiguous_page_display'] = 'Pages adjacentes à afficher';
$txt['to_display'] = 'à afficher';
$txt['todayMod'] = 'Activer les dates abrégées';
$txt['today_disabled'] = 'Désactivé';
$txt['today_only'] = 'Seulement Aujourd\'hui';
$txt['yesterday_today'] = 'Aujourd\'hui &amp; Hier';
$txt['topbottomEnable'] = 'Afficher les boutons Haut de page/Bas de page';
$txt['onlineEnable'] = 'Afficher \'En ligne\'/\'Hors ligne\' dans les messages et les MP';
$txt['enableVBStyleLogin'] = 'Afficher un champ de connexion sur toutes les pages';
$txt['defaultMaxMembers'] = 'Membres par page dans la liste des membres';
$txt['timeLoadPageEnable'] = 'Afficher le temps pris pour générer la page';
$txt['disableHostnameLookup'] = 'Désactiver la recherche du nom d\'hôte';
$txt['who_enabled'] = 'Activer &quot;Qui est en ligne&nbsp;?&quot;';
$txt['make_email_viewable'] = 'Permettre la consultation des adresses e-mail';
$txt['meta_keywords'] = 'Mots-clé Meta associés au forum<div class="smalltext">Pour les moteurs de recherche. Laisser vide pour les mots-clé par défaut.</div>';

$txt['karmaMode'] = 'Mode Karma';
$txt['karma_options'] = 'Désactiver le karma|Activer le karma total|Activer le karma positif/négatif';
$txt['karmaMinPosts'] = 'Nombre minimum de messages de forum avant de pouvoir modifier les karmas';
$txt['karmaWaitTime'] = 'Temps d\'attente (en heures) entre deux votes pour la même personne';
$txt['karmaTimeRestrictAdmins'] = 'Contraindre les admins au temps d\'attente&nbsp;';
$txt['karmaLabel'] = 'Label \'Karma\'';
$txt['karmaApplaudLabel'] = 'Label positif (Applaudir)';
$txt['karmaSmiteLabel'] = 'Label négatif (Fouetter)';

$txt['caching_information'] = '<div align="center"><strong><span class="underline">Important&nbsp;! Veuillez lire ce qui suit avant d\'activer ces options.</strong></span></div><br />
	SMF peut mettre des données en cache en utilisant des accélérateurs. Les accélérateurs actuellement supportés sont les suivants&nbsp;:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (pas Zend Optimizer)</li>
	</ul>
	Le système de cache fonctionnera mieux si PHP est compilé avec l\'un des accélérateurs susmentionnés, ou si memcache est disponible.
	<strong>Si aucun accélérateur n\'est installé, SMF fera du cache fichier.</strong><br /><br />
	SMF gère plusieurs niveaux de cache. Plus le niveau est haut, plus le processeur de votre serveur sera utilisé
	pour récupérer les informations. Si un système de cache est disponible sur votre serveur, il est recommandé de le tester au niveau 1 avant tout.
	<br /><br />
	Veuillez noter que l\'utilisation de memcache nécessite que vous donniez quelques indications sur votre serveur dans les réglages à effectuer ci-dessous. Elles doivent être entrées sous forme de liste, dont les éléments sont séparés par une virgule,
	comme dans l\'exemple suivant&nbsp;:<br />
	&quot;serveur1,serveur2,serveur3:port,serveur4&quot;<br />
	Si aucun port n\'est spécifié, SMF utilisera le port 11211 par défaut. SMF équilibrera de manière aléatoire la charge sur les serveurs.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF n\'a pas pu détecter d\'accélérateur compatible sur votre serveur.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF a détecté qu\'APC est installé sur votre serveur.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF a détecté qu\'eAccelerator est installé sur votre serveur.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">">SMF a détecté que MMCache est installé sur votre serveur.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF a détecté que Zend est installé sur votre serveur.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF a détecté que Memcached est installé sur votre serveur.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF a détecté que XCache est installé sur votre serveur.</strong>';

$txt['cache_enable'] = 'Niveau de cache';
$txt['cache_off'] = 'Aucun cache';
$txt['cache_level1'] = 'Cache de niveau 1 (Recommandé)';
$txt['cache_level2'] = 'Cache de niveau 2';
$txt['cache_level3'] = 'Cache de niveau 3 (Non recommandé)';
$txt['cache_memcached'] = 'Réglages de Memcache';

$txt['loadavg_warning'] = '<span class="error">Attention, les paramètres ci-dessous doivent être modifiés avec prudence. Un paramètre trop bas pourrait rendre votre forum <strong>inutilisable</strong>&nbsp;! La charge moyenne actuelle est de <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Activer la répartition de charge par moyennes';
$txt['loadavg_auto_opt'] = 'Limite pour désactiver l\'optimisation automatique de la base de données';
$txt['loadavg_search'] = 'Limite pour désactiver la recherche';
$txt['loadavg_allunread'] = 'Limite pour désactiver la liste des sujets non lus';
$txt['loadavg_unreadreplies'] = 'Limite pour désactiver la liste des réponses non lues';
$txt['loadavg_show_posts'] = 'Limite pour désactiver l\'affichage des messages';
$txt['loadavg_forum'] = 'Limite pour désactiver <strong>complètement</strong> le forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Les serveurs Windows ne supportent pas la répartition de charge.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">La configuration de votre serveur ne supporte pas la répartition de charge.</span>';

$txt['setting_password_strength'] = 'Protection requise pour les mots de passe utilisateur';
$txt['setting_password_strength_low'] = 'Basse - 4 caractères minimum';
$txt['setting_password_strength_medium'] = 'Moyenne - Ne doit pas contenir l\'identifiant';
$txt['setting_password_strength_high'] = 'Haute - mélange de différents caractères';

$txt['antispam_Settings'] = 'Vérification Anti-Spam';
$txt['antispam_Settings_desc'] = 'Cette section vous permet de régler les contrôles de vérification pour vous assurer que l\'utilisateur est un humain (et non un robot), et peaufiner comment et où ils doivent s\'appliquer.';
$txt['setting_reg_verification'] = 'Demander une vérification au moment de l\'inscription';
$txt['posts_require_captcha'] = 'Nombre de messages de forum en dessous duquel les utilisateurs doivent entrer un code pour poster un message';
$txt['posts_require_captcha_desc'] = '(0 pour pas de limite, les modérateurs sont exemptés)';
$txt['search_enable_captcha'] = 'Demander une vérification sur toutes les recherches des invités';
$txt['setting_guests_require_captcha'] = 'Les invités doivent passer la vérification pour envoyer un message';
$txt['setting_guests_require_captcha_desc'] = '(Activé d\'office si vous spécifiez un nombre minimum de messages ci-dessous)';
$txt['guests_report_require_captcha'] = 'Les invités doivent passer la vérification pour signaler un message aux modérateurs';

$txt['configure_verification_means'] = 'Configurer les méthodes de vérification';
$txt['setting_qa_verification_number'] = 'Nombre de questions de vérification auquel un utilisateur doit répondre';
$txt['setting_qa_verification_number_desc'] = '(0 pour désactiver; les questions sont réglées ci-dessous)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Ci-dessous, vous pouvez spécifier quelles fonctionnalités anti-spam activer lorsqu\'un utilisateur doit certifier qu\'il est humain. Notez que l\'utilisateur devra réussir <em>toutes</em> les vérifications. Si vous activez en même temps une image de vérification et un test question/réponse, ils devront les passer tous les deux pour continuer.</span>';
$txt['setting_visual_verification_type'] = 'Image de vérification visuelle à afficher';
$txt['setting_visual_verification_type_desc'] = 'Plus l\'image est complexe, plus il sera difficile aux robots de la contourner';
$txt['setting_image_verification_off'] = 'Aucune';
$txt['setting_image_verification_vsimple'] = 'Très Simple - Texte normal sur une image';
$txt['setting_image_verification_simple'] = 'Simple - Lettres colorées se chevauchant, pas de bruit';
$txt['setting_image_verification_medium'] = 'Moyenne - Lettres colorées se chevauchant, avec bruit et lignes';
$txt['setting_image_verification_high'] = 'Haute - Lettres en rotation, avec un bruit considérable et lignes';
$txt['setting_image_verification_extreme'] = 'Extrême - Lettres en rotation, bruit, lignes et carrés';
$txt['setting_image_verification_sample'] = 'Exemple';
$txt['setting_image_verification_nogd'] = '<strong>Note</strong>&nbsp;: ce serveur n\'ayant pas la librairie GD installée, les réglages de complexité n\'auront aucun effet.';
$txt['setup_verification_questions'] = 'Questions de Vérification';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si vous voulez que les utilisateurs répondent à des questions de vérification dans le but de stopper les robots spammeurs, vous pouvez mettre en place des questions dans la table ci-dessous. Choisissez des questions relativement simples; les réponses ne sont pas sensibles à la casse. Vous pouvez utiliser du BBCode dans les questions pour le formatage. Pour supprimer une question, effacez simplement le contenu de cette ligne.</span>';
$txt['setup_verification_question'] = 'Question';
$txt['setup_verification_answer'] = 'Réponse';
$txt['setup_verification_add_more'] = 'Ajouter une autre question';

$txt['moderation_settings'] = 'Réglages de Modération';
$txt['setting_warning_enable'] = 'Activer le système d\'avertissement utilisateur';
$txt['setting_warning_watch'] = 'Niveau d\'avertissement pour la mise sous surveillance d\'un utilisateur<div class="smalltext">Le niveau d\'avertissement utilisateur après lequel une surveillance utilisateur est mise en place - 0 pour désactiver.</div>';
$txt['setting_warning_moderate'] = 'Niveau d\'avertissement pour la modération de messages<div class="smalltext">Le niveau d\'avertissement utilisateur après lequel un utilisateur voit tous ses messages modérés - 0 pour désactiver.</div>';
$txt['setting_warning_mute'] = 'Niveau d\'avertissement pour rendre muet un utilisateur<div class="smalltext">Le niveau d\'avertissement utilisateur après lequel un utilisateur ne peut plus poster - 0 pour désactiver.</div>';
$txt['setting_user_limit'] = 'Points d\'avertissement maximum reçus d\'un utilisateur par jour<div class="smalltext">Cette valeur est la quantité maximale de points d\'avertissement qu\'un même modérateur peut assigner à un utilisateur en 24 heures - 0 pour pas de limite.</div>';
$txt['setting_warning_decrement'] = 'Points d\'avertissement à diminuer des utilisateurs toutes les 24 heures<div class="smalltext">S\'applique seulement aux utilisateurs non avertis depuis les dernières 24 heures - 0 pour désactiver.</div>';
$txt['setting_warning_show'] = 'Utilisateurs qui peuvent voir les états d\'avertissement<div class="smalltext">Détermine qui peut voir le niveau d\'avertissement des utilisateurs du forum.</div>';
$txt['setting_warning_show_mods'] = 'Modérateurs seulement';
$txt['setting_warning_show_user'] = 'Modérateurs et utilisateurs avertis';
$txt['setting_warning_show_all'] = 'Tout le monde';

$txt['signature_settings'] = 'Paramètres de Signature';
$txt['signature_settings_desc'] = 'Utiliser les paramètres de cette page pour décider comment les signatures de membre doivent être traitées dans SMF.';
$txt['signature_settings_warning'] = 'Notez que ces paramètres ne sont pas appliqués sur les signatures existantes par défaut. Cliquez <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">ici</a> pour appliquer les règles à toutes les signatures existantes.';
$txt['signature_enable'] = 'Activer les signatures';
$txt['signature_max_length'] = 'Nombre maximal de caractères autorisé<div class="smalltext">(0 pour pas de max.)</div>';
$txt['signature_max_lines'] = 'Nombre maximal de lignes<div class="smalltext">(0 pour pas de max)</div>';
$txt['signature_max_images'] = 'Nombre maximal d\'images<div class="smalltext">(0 pour pas de max - à l\'exception des smileys)</div>';
$txt['signature_allow_smileys'] = 'Autoriser les smileys dans les signatures';
$txt['signature_max_smileys'] = 'Nombre maximal de smileys<div class="smalltext">(0 pour pas de max)</div>';
$txt['signature_max_image_width'] = 'Largeur maximale des images de signature (pixels)<div class="smalltext">(0 pour pas de max)</div>';
$txt['signature_max_image_height'] = 'Hauteur maximale des images de signature (pixels)<div class="smalltext">(0 pour pas de max)</div>';
$txt['signature_max_font_size'] = 'Taille de police maximale autorisée dans les signatures<div class="smalltext">(en pixels, 0 pour pas de max)</div>';
$txt['signature_bbc'] = 'Balises BBCode autorisées';

$txt['custom_profile_title'] = 'Champs de profil personnalisés';
$txt['custom_profile_desc'] = 'Sur cette page, vous pouvez créer vos propres champs de profil correspondant aux besoins de votre forum';
$txt['custom_profile_active'] = 'Actif';
$txt['custom_profile_fieldname'] = 'Nom du champ';
$txt['custom_profile_fieldtype'] = 'Type de champ';
$txt['custom_profile_make_new'] = 'Nouveau champ';
$txt['custom_profile_none'] = 'Vous n\'avez pas encore créé de champ de profil personnalisé&nbsp;!';
$txt['custom_profile_icon'] = 'Icône';

$txt['custom_profile_type_text'] = 'Texte';
$txt['custom_profile_type_textarea'] = 'Zone de Texte';
$txt['custom_profile_type_select'] = 'Boîte de Sélection';
$txt['custom_profile_type_radio'] = 'Bouton Radio';
$txt['custom_profile_type_check'] = 'Case à Cocher';

$txt['custom_add_title'] = 'Ajouter un champ de profil';
$txt['custom_edit_title'] = 'Modifier un champ de profil';
$txt['custom_edit_general'] = 'Paramètres d\'affichage';
$txt['custom_edit_input'] = 'Paramètres d\'entrée';
$txt['custom_edit_advanced'] = 'Paramètres avancés';
$txt['custom_edit_name'] = 'Nom';
$txt['custom_edit_desc'] = 'Description';
$txt['custom_edit_profile'] = 'Section du Profil';
$txt['custom_edit_profile_desc'] = 'Section du profil dans laquelle on trouvera ce champ.';
$txt['custom_edit_profile_none'] = 'Aucun';
$txt['custom_edit_registration'] = 'Afficher à l\'inscription';
$txt['custom_edit_registration_disable'] = 'Non';
$txt['custom_edit_registration_allow'] = 'Oui';
$txt['custom_edit_registration_require'] = 'Oui, et réponse obligatoire';
$txt['custom_edit_display'] = 'Montrer dans les sujets';
$txt['custom_edit_picktype'] = 'Type de champ';

$txt['custom_edit_max_length'] = 'Longueur maximale';
$txt['custom_edit_max_length_desc'] = '(0 pour pas de limite)';
$txt['custom_edit_dimension'] = 'Dimensions';
$txt['custom_edit_dimension_row'] = 'Lignes';
$txt['custom_edit_dimension_col'] = 'Colonnes';
$txt['custom_edit_bbc'] = 'Autoriser les balises BBCode';
$txt['custom_edit_options'] = 'Options';
$txt['custom_edit_options_desc'] = 'Laisser vide la case à cocher de cette option pour la supprimer. Le bouton radio sélectionne l\'option par défaut.';
$txt['custom_edit_options_more'] = 'Plus';
$txt['custom_edit_default'] = 'État par défaut';
$txt['custom_edit_active'] = 'Actif';
$txt['custom_edit_active_desc'] = 'S\'il n\'est pas sélectionné, ce champ ne sera montré à personne.';
$txt['custom_edit_privacy'] = 'Accessibilité';
$txt['custom_edit_privacy_desc'] = 'Qui peut voir et modifier ce champ.';
$txt['custom_edit_privacy_all'] = 'Les utilisateurs peuvent voir ce champ; le propriétaire peut le modifier';
$txt['custom_edit_privacy_see'] = 'Les utilisateurs peuvent voir ce champ; seuls les admins peuvent le modifier';
$txt['custom_edit_privacy_owner'] = 'Les utilisateurs ne peuvent pas voir ce champ; le propriétaire et les admins peuvent le modifier.';
$txt['custom_edit_privacy_none'] = 'Ce champ n\'est visible que pour les admins';
$txt['custom_edit_can_search'] = 'Cherchable';
$txt['custom_edit_can_search_desc'] = 'Ce champ peut-il être utilisé dans les recherches sur la liste des membres&nbsp;?';
$txt['custom_edit_mask'] = 'Masque d\'entrée';
$txt['custom_edit_mask_desc'] = 'Pour les champs de texte, un masque d\'entrée peut être sélectionné pour valider les données.';
$txt['custom_edit_mask_email'] = 'Adresse e-mail valide';
$txt['custom_edit_mask_number'] = 'Numérique';
$txt['custom_edit_mask_nohtml'] = 'Pas de HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Avancé)';
$txt['custom_edit_enclose'] = 'Montrer inséré dans du texte (Optionnel)';
$txt['custom_edit_enclose_desc'] = 'Nous vous recommandons <strong>fortement</strong> d\'utiliser un masque d\'entrée pour valider le contenu fourni par l\'utilisateur.';

$txt['custom_edit_placement'] = 'Choose Placement';
$txt['custom_edit_placement_standard'] = 'Standard (with title)';
$txt['custom_edit_placement_withicons'] = 'With Icons';
$txt['custom_edit_placement_abovesignature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Placement';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'With Icons';
$txt['custom_profile_placement_abovesignature'] = 'Above Signature';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '&#202;tes-vous s&#369;r de vouloir supprimer ce champ ? Toutes les donn&#233;es utilisateur li&#233;es seront perdues !';

$txt['standard_profile_title'] = 'Champs de profil Standards';
$txt['standard_profile_field'] = 'Champ';

$txt['core_settings_welcome_msg'] = 'Bienvenue sur votre nouveau forum';
$txt['core_settings_welcome_msg_desc'] = 'Pour commencer, nous vous suggérons de sélectionner quelles fonctionnalités centrales d\'SMF vous voulez activer. Nous vous recommendons de n\'activer que les fonctionnalités dont vous avez besoin&nbsp;!';
$txt['core_settings_item_cd'] = 'Calendrier';
$txt['core_settings_item_cd_desc'] = 'Activer cette fonctionnalité vous donnera accès à une série d\'options pour permettre à vos utilisateurs de consulter le calendrier, ajouter et vérifier des événements, voir les dates d\'anniversaire des utilisateurs sur un calendrier et bien plus encore.';
$txt['core_settings_item_cp'] = 'Champs de profil Avancés';
$txt['core_settings_item_cp_desc'] = 'Ceci vous permet de cacher des champs de profil standards, ajouter des champs de profil à l\'inscription, et créer de nouveaux champs de profil pour votre forum.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Le karma est une fonctionnalité qui montre la popularité d\'un membre. Les utilisateurs, s\'ils y sont autorisés, peuvent \'applaudir\' ou \'huer\' les messages des autres membres, ce qui permet de calculer leur popularité.';
$txt['core_settings_item_ml'] = 'Journal de modération';
$txt['core_settings_item_ml_desc'] = 'Activer le journal de modération pour garder une trace de toutes les actions faites par vos modérateurs sur le forum.';
$txt['core_settings_item_pm'] = 'Modération de message';
$txt['core_settings_item_pm_desc'] = 'La modération de message vous permet de sélectionner les groupes et sections pour lesquels les messages doivent être approuvés avant d\'être publiés. Après avoir activé cette option, pensez à mettre en place les permissions adéquates dans la section des Permissions.';
$txt['core_settings_item_ps'] = 'Abonnements payants';
$txt['core_settings_item_ps_desc'] = 'Les abonnements payants permettent aux utilisateurs de payer des abonnements pour changer de groupe de membres dans le forum et changer ainsi leurs droits d\'accès.';
$txt['core_settings_item_rg'] = 'Génération de Rapports';
$txt['core_settings_item_rg_desc'] = 'Cette fonctionnalité administrative permet la génération de rapports (imprimables) pour présenter de façon claire vos réglages forum actuels - particulèrement utile pour les gros forums.';
$txt['core_settings_item_sp'] = 'Suivi des Moteurs de recherche';
$txt['core_settings_item_sp_desc'] = 'Activer cette fonctionnalité permettra aux administrateurs de suivre les robots des moteurs de recherche lorsqu\'ils indexent votre forum.';
$txt['core_settings_item_w'] = 'Système d\'Avertissement';
$txt['core_settings_item_w_desc'] = 'Cette fonctionnalité permet aux administrateurs et modérateurs de donner des avertissements aux utilisateurs; cela inclut aussi des fonctionnalités avancées pour supprimer automatiquement les droits utilisateur proportionnellement au niveau d\'avertissement. Notez que pour profiter pleinement de cette fonction, &quot;Modération de message&quot; doit être activé.';
$txt['core_settings_switch_on'] = 'Cliquez pour activer';
$txt['core_settings_switch_off'] = 'Cliquez pour désactiver';
$txt['core_settings_enabled'] = 'Activé';
$txt['core_settings_disabled'] = 'Désactivé';

$txt['languages_lang_name'] = 'Langue';
$txt['languages_locale'] = 'Paramètres régionaux';
$txt['languages_default'] = 'Par défaut';
$txt['languages_character_set'] = 'Jeu de caractères';
$txt['languages_users'] = 'Utilisateurs';
$txt['language_settings_writable'] = 'Attention&nbsp;: Settings.php n\'est pas inscriptible. Par conséquent, le réglage de la langue par défaut ne peut être sauvegardé.';
$txt['edit_languages'] = 'Modifier les Langues';
$txt['lang_file_not_writable'] = '<strong>Attention</strong>&nbsp;: le fichier de langue de base (%1$s) est protégé en écriture. Vous devez le rendre inscriptible avant de pouvoir faire des changements.';
$txt['lang_entries_not_writable'] = '<strong>Attention</strong>&nbsp;: le fichier langue que vous souhaitez modifier (%1$s) est protégé en écriture. Vous devez le rendre inscriptible avant de pouvoir faire des changements.';
$txt['languages_ltr'] = 'De droite à gauche';

$txt['add_language'] = 'Ajouter une Langue';
$txt['add_language_smf'] = 'Télécharger à partir de Simple Machines';
$txt['add_language_smf_browse'] = 'Nom de la langue à rechercher, ou laisser vide pour rechercher tout.';
$txt['add_language_smf_install'] = 'Installer';
$txt['add_language_smf_found'] = 'Les langues suivantes ont été trouvées. Cliquez sur le lien d\'installation à côté de la langue que vous souhaitez installer, vous serez redirigé vers le gestionnaire de paquets pour l\'installer.';
$txt['add_language_error_no_response'] = 'Le site de Simple Machines ne répond pas. Veuillez réessayer plus tard.';
$txt['add_language_error_no_files'] = 'Aucun fichier n\'a été trouvé.';
$txt['add_language_smf_desc'] = 'Description';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Ci-dessous se trouvent les paramètres de base de langue pour ce pack de Langue.';
$txt['edit_language_entries'] = 'Modifier les entrées de langue';
$txt['edit_language_entries_file'] = 'Sélectionnez le fichier à modifier';
$txt['languages_dictionary'] = 'Dictionnaire';
$txt['languages_spelling'] = 'Orthographe';
$txt['languages_for_pspell'] = 'Nécessite l\'emploi de <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - s\'il est installé';
$txt['languages_rtl'] = 'Activer le mode &quot;De gauche à droite&quot;';

$txt['lang_file_desc_index'] = 'Termes généraux';
$txt['lang_file_desc_EmailTemplates'] = 'Modèles d\'e-mail';

$txt['languages_download'] = 'Téléchargement de packs de Langue';
$txt['languages_download_note'] = 'Cette page recense tous les fichiers contenus dans le pack de Langue et des informations utiles à propos de chacun d\'entre eux. Tous les fichiers qui ont leur case associée cochée seront copiés.';
$txt['languages_download_info'] = '<strong>Note</strong>
	<ul class="normallist">
		<li>Si des fichiers ont le statut &quot;Non inscriptible&quot;, SMF ne sera pas capable de les copier dans le répertoire actuel et vous devrez rendre la destination inscriptible en utilisant un client FTP ou en remplissant les renseignements en bas de page.</li>
		<li>L\'information de version pour un fichier indique la version d\'SMF pour laquelle il a été mis à jour. Si elle est indiquée en vert, c\'est qu\'il existe une version plus récente que celle que vous avez actuellement. La couleur ambrée indique que c\'est le même numéro de version que l\'actuelle, et la couleur rouge signifie que vous avez déjà une version plus récente que celle contenue dans le pack.</li>
		<li>Si un fichier existe déjà sur votre forum, la colonne &quot;Existe déjà&quot; aura une de ces deux valeurs. &quot;Identique&quot; indique que le fichier existe déjà sous une forme identique et n\'a pas besoin d\'être écrasé. &quot;Différent&quot; veut dire que le contenu varie un peu et que l\'écrasement est probablement la meilleure solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Fichiers de base';
$txt['languages_download_theme_files'] = 'Fichiers liés aux thèmes';
$txt['languages_download_filename'] = 'Nom du fichier';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Inscriptible';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'Vous avez une nouvelle version de ce fichier en place, l\'écrasement n\'est pas recommandé.';
$txt['languages_download_exists'] = 'Existe déjà';
$txt['languages_download_exists_same'] = 'Identique';
$txt['languages_download_exists_different'] = 'Différent';
$txt['languages_download_copy'] = 'Copier';
$txt['languages_download_not_chmod'] = 'Vous ne pouvez pas effectuer l\'installation tant que tous les fichiers à copier sélectionnés ne sont pas inscriptibles.';
$txt['languages_download_illegal_paths'] = 'Le paquet contient des chemins illégaux - veuillez contacter Simple Machines';
$txt['languages_download_complete'] = 'Installation terminée';
$txt['languages_download_complete_desc'] = 'Le pack de Langue a été installé avec succès. Veuillez cliquer <a href="%1$s">ici</a> pour retourner à la page de gestion des langues';
$txt['languages_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer cette langue ?';

?>