<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Esta página te permite cambiar la configuración de caracteristicas, mods y opciones básicas de tu foro. Por favor, entra en <a href="' . $scripturl . '?action=theme;sa=settings;th=%s;sesc=%s">Configuración del tema</a> para más opciones. Pulsa en los iconos de ayuda para obtener más información acerca de una opción.';
$txt['security_settings_desc'] = 'Esta página te permite establecer opciones específicamente relacionadas con la seguridad y la moderación de tu foro, incluyendo opciones anti-spam.';
$txt['modification_settings_desc'] = 'Esta página contiene configuraciones añadidas por las modificaciones que tengas instaladas en tu foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas que hayan añadido ninguna configuración a este área aún.';

$txt['pollMode'] = 'Modo Encuesta';
$txt['disable_polls'] = 'Desactivar encuestas';
$txt['enable_polls'] = 'Activar encuestas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir ver el foro a los invitados';
$txt['userLanguage'] = 'Activar soporte de idioma seleccionable por el usuario';
$txt['allow_editDisplayName'] = '¿Permitir a los usuarios editar el nombre mostrado?';
$txt['allow_hideOnline'] = '¿Permitir a los no-administradores ocultar su estado de conexión?';
$txt['guest_hideContacts'] = 'No mostrar detalles de contacto de miembros a los invitados';
$txt['titlesEnable'] = 'Activar títulos personalizados';
$txt['enable_buddylist'] = 'Activar listas de amigos';
$txt['default_personal_text'] = 'Texto personal por defecto';
$txt['number_format'] = 'Formato de números por defecto';
$txt['time_format'] = 'Formato de Tiempo por defecto';
$txt['setting_time_offset'] = 'Diferencia horaria global<div class="smalltext">(añadida a la opción específica del usuario.)</div>';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['failed_login_threshold'] = 'Umbral de conexiones fallidas';
$txt['lastActive'] = 'Umbral de tiempo conectado';
$txt['trackStats'] = 'Estadísticas diarias';
$txt['hitStats'] = 'Visualizaciones de página diaria de Estadísticas (las estadísticas deben estar activadas)';
$txt['enableCompressedOutput'] = 'Activar salida comprimida';
$txt['disableTemplateEval'] = 'Disable evaluation of templates';
$txt['databaseSession_enable'] = 'Utilizar sesiones controladas por base de datos';
$txt['databaseSession_loose'] = 'Permitir a los navegadores ir atrás hacia páginas en caché';
$txt['databaseSession_lifetime'] = 'Segundos transcurridos antes de que expire una sesión inactiva';
$txt['enableErrorLogging'] = 'Activar log de errores';
$txt['enableErrorQueryLogging'] = 'Incluir consultas a la base de datos en el registro (log) de errores';
$txt['pruningOptions'] = 'Activar la purga de entradas del registro.';
$txt['pruneErrorLog'] = 'Eliminar entradas del registro de errores con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneModLog'] = 'Eliminar entradas del registro de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneBanLog'] = 'Eliminar entradas del registro de baneos con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneReportLog'] = 'Eliminar entradas del registro de avisos de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar entradas del registro de tareas programadas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar entradas del registro de búsquedas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['cookieTime'] = 'Duración de cookies de conexión por defecto (en minutos)';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funciona bien activando esta opción.)</div>';
$txt['globalCookies'] = 'Utilizar cookies independientes por subdominios<div class="smalltext">(¡debes desactivar las cookies locales primero!)</div>';
$txt['secureCookies'] = 'Forzar a que las cookies sean seguras<div class="smalltext">(Esto sólo se aplica si estás usando HTTPS - ¡no lo uses en otro caso!)</div>';
$txt['securityDisable'] = 'Desactivar la seguridad de la administración';
$txt['send_validation_onChange'] = 'Requerir reactivación después de un cambio de dirección email';
$txt['approveAccountDeletion'] = 'Requerir aprobación del administrador cuando el usuario borra su cuenta';
$txt['autoOptMaxOnline'] = 'Número máximo de usuarios conectados en la optimización<div class="smalltext">(0 para ilimitado.)</div>';
$txt['autoFixDatabase'] = 'Arreglar automáticamente tablas corruptas';
$txt['allow_disableAnnounce'] = 'Permitir a los usuarios desactivar notificaciones';
$txt['disallow_sendBody'] = '¿No permitir enviar el texto del mensaje en las notificaciones?';
$txt['queryless_urls'] = 'Mostrar URLs de búsqueda de modo amigable<div class="smalltext"><b>¡Sólo Apache!</b></div>';
$txt['max_image_width'] = 'Ancho máximo de las imágenes en los mensajes (0 = desactivar)';
$txt['max_image_height'] = 'Alto máximo de las imágenes en los mensajes (0 = desactivar)';
$txt['enableReportPM'] = 'Activar el aviso de mensajes privados';
$txt['max_pm_recipients'] = 'Número máximo de destinatarios permitidos en un mensaje privado.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_verification'] = 'Número de mensajes mínimo para no tener que introducir un código al enviar mensajes privados.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_per_hour'] = 'Numero de mensajes privados que puede enviar un usuario en una hora.<div class="smalltext">(0 para ilimitados, exceptuando moderadores)</div>';
$txt['compactTopicPagesEnable'] = 'Límitar el número de vínculos mostrados';
$txt['contiguous_page_display'] = 'Páginas contiguas a mostrar:';
$txt['to_display'] = 'mostrar';
$txt['todayMod'] = 'Activar la funcionalidad &quot;Hoy&quot;';
$txt['today_disabled'] = 'Desactivada';
$txt['today_only'] = 'Sólo Hoy';
$txt['yesterday_today'] = 'Hoy y Ayer';
$txt['topbottomEnable'] = 'Activar los botones Ir Arriba/Ir Abajo';
$txt['onlineEnable'] = 'Mostrar conectado/desconectados en mensajes normales y privados';
$txt['enableVBStyleLogin'] = 'Mostrar cuadro de conexión rapida en cada página';
$txt['defaultMaxMembers'] = 'Usuarios por página de la lista de usuarios';
$txt['timeLoadPageEnable'] = 'Mostrar el tiempo transcurrido para crear cada página';
$txt['disableHostnameLookup'] = '¿Desactivar búsquedas al servidor?';
$txt['who_enabled'] = 'Activar la lista de Usuarios conectados';
$txt['make_email_viewable'] = 'Permitir ver direcciones email.';
$txt['meta_keywords'] = 'Palabras clave meta (meta keywords) asociadas con el foro.<div class="smalltext">Para motores de búsqueda, dejar en blanco para usar las establecidas por defecto.</div>';

$txt['karmaMode'] = 'Modo Karma';
$txt['karma_options'] = 'Desactivar karma|Activar karma total|Activar karma positivo/negativo';
$txt['karmaMinPosts'] = 'Establecer el número mínimo de mensajes necesarios para modificar el karma';
$txt['karmaWaitTime'] = 'Establecer el periodo de espera en horas';
$txt['karmaTimeRestrictAdmins'] = 'Restringir administradores a esperar';
$txt['karmaLabel'] = 'Etiqueta de Karma';
$txt['karmaApplaudLabel'] = 'Etiqueta de aplaudir';
$txt['karmaSmiteLabel'] = 'Etiqueta de castigar';

$txt['caching_information'] = '<div align="center"><b><u>¡Importante! Lee esto antes de activar estas características.</b></u></div><br />
	SMF soporta el caché utilizado con aceleradores. Los aceleradores actualmente soportados son:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (No Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	El caché sólo funcionará en tu servidor si tienes PHP compilado con uno de los optimizadores de arriba, o si tienes el caché de memoria disponible. 
	Si no tienes ningún optimizador instalado en SMF, se utilizará un caché basado en archivos.<br /><br />
	SMF guarda en caché a varios niveles. Cuanto mayor es el nivel de caché activado más tiempo de CPU se utilizará para obtener la información en caché.
	Si está disponible el caché en tu máquina es recomendable que intentes guardar en caché al nivel 1 primero. 
	<br /><br />
	Ten en cuenta que si utilizas el caché de memoria necesitas proporcionar detalles del servidor en las opciones de abajo. Deberías introducirlo como lista separada por comas 
	como se muestra en el ejemplo de abajo:<br />
	&quot;servidor1,servidor2,servidor3:puerto,servidor4&quot;<br /><br />
	Ten en cuenta que si no se especifica el puerto, SMF utilizará el puerto 11211. SMF intentará realizar un balanceo aleatorio entre los servidores.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b class="alert">SMF no ha podido detectar un acelerador compatible en tu servidor.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado Memcached.</b>';
$txt['detected_XCache'] = '<b style="color: green">SMF ha detectado que tu servidor tiene instalado XCache.</b>';

$txt['cache_enable'] = 'Nivel de Caché';
$txt['cache_off'] = 'Sin caché';
$txt['cache_level1'] = 'Caché de Nivel 1 (Recomendado)';
$txt['cache_level2'] = 'Caché de Nivel 2';
$txt['cache_level3'] = 'Caché de Nivel 3 (No Recomendado)';
$txt['cache_memcached'] = 'Opciones de Memoria caché';

$txt['loadavg_warning'] = '<span class="error">Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Enable load balancing by load averages';
$txt['loadavg_auto_opt'] = 'Threshold to disabling automatic database optimization';
$txt['loadavg_search'] = 'Threshold to disabling search';
$txt['loadavg_allunread'] = 'Threshold to disabling all unread topics';
$txt['loadavg_unreadreplies'] = 'Threshold to disabling unread replies';
$txt['loadavg_show_posts'] = 'Threshold to disabling showing user posts';
$txt['loadavg_forum'] = 'Threshold to disabling the forum <strong>completely</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">Load balancing support is not available on Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Load balancing support is disabled by your host configuration.</span>';

$txt['setting_password_strength'] = 'Fuerza requerida para las claves de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres mínimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener el nombre de usuario';
$txt['setting_password_strength_high'] = 'Alta - mezcla de diferentes caracteres';

$txt['antispam_Settings'] = 'Verificación Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta sección te permite configurar las comprobaciones de verificación para asegurar que el usuario es un humanon (y no un bot), y determinar cómo y dónde se aplican.';
$txt['setting_reg_verification'] = 'Requierir verificación en la página de registro';
$txt['posts_require_captcha'] = 'Número de posts por debajo del cual los usuarios deben pasar la verificación para escribir un post';
$txt['posts_require_captcha_desc'] = '(0 para ilimitado, los moderadores están exentos de esta limitación)';
$txt['search_enable_captcha'] = 'Requerir verificación en todas las búsquedas de invitados';
$txt['setting_guests_require_captcha'] = 'Los invitados deben pasar la verificación cuando escriban nuevos posts';
$txt['setting_guests_require_captcha_desc'] = '(Activado automáticamente si especificas un número mínimo de posts a continuación)';
$txt['guests_report_require_captcha'] = 'Guests must pass verification when reporting a post';

$txt['configure_verification_means'] = 'Configurar métodos de verificación';
$txt['setting_qa_verification_number'] = 'Número de preguntas de verificación que el usuario debe contestar';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivas; las preguntas se establecen más abajo)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuación puedes establecer qué características anti-spam quieres tener activas cuando un usuario necesite verificar que es humano. Ten en cuenta que el usuario tendrá que pasar <em>todas</em> las verificaciones, así que si activas tanto la verificación de imagen como el test de pregunta/respuesta tendrá que completar ambas para proceder.</span>';
$txt['setting_visual_verification_type'] = 'Imagen para mostrar en la verificación visual';
$txt['setting_visual_verification_type_desc'] = 'Mientras más compleja sea la imagen más difícil será superarla para los bots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy Simple - Texto plano en una imagen';
$txt['setting_image_verification_simple'] = 'Simple - Letras de colores solapadas, sin ruido';
$txt['setting_image_verification_medium'] = 'Media - Letras de colores solapadas, con ruido';
$txt['setting_image_verification_high'] = 'Alta - Letras anguladas, ruido considerable';
$txt['setting_image_verification_extreme'] = 'Extreme - Angled letters, noise, lines and blocks';
$txt['setting_image_verification_sample'] = 'Muestra';
$txt['setting_image_verification_nogd'] = '<b>Aviso:</b> dado que este servidor no tiene la librería GD instalada las configuraciones de distinta complejidad no tendrán ningún efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificación';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si quieres que los usuarios respondan a una pregunta de verificación para detener a los bots de spam deberías establecer algunas preguntas en la tabla de debajo. Deberías elegir preguntas relativamente simples; las respuestas no son sensibles a las mayúsculas (case sensitive). Puedes usar BBC en las preguntas para darles formato. Para eliminar una pregunta simplemente borra el contenido de esa línea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'Añadir otra pregunta';

$txt['moderation_settings'] = 'Opciones de Moderación';
$txt['setting_warning_enable'] = 'Activar Sistema de Advertencias al Usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para usuarios vigilados<div class="smalltext">El nivel de advertencia al usuario con el que comenzará a ser vigilado - 0 para desactivar.</div>';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para moderación de mensajes<div class="smalltext">El nivel de advertencia al usuario a partir del que todos sus mensajes serán moderados - 0 para desactivar.</div>';
$txt['setting_warning_mute'] = 'Nivel de advertencia para enmudecer<div class="smalltext">El nivel de advertencia al usuario a partir del cual el usuario no podrá continuar publicando mensajes - 0 para desactivar.</div>';
$txt['setting_user_limit'] = 'Número máximo de puntos de advertencia por día<div class="smalltext">Este valor es la cantidad máxima de puntos de advertencia que un moderador puede asignar a un usuario en un periodo de 24 horas - 0 para ilimitado.</div>';
$txt['setting_warning_decrement'] = 'Puntos de advertencia a decrementar a los usuarios cada 24 horas<div class="smalltext">Solo se aplica en usuarios que no hayan sido advertidos en las últimas 24 horas - establecer a 0 para desactivarlo.</div>';
$txt['setting_warning_show'] = 'Mostrar el estado de advertencia de todos los usuarios<div class="smalltext">Si está desactivado, sólo los moderadores pueden ver el estado de advertencia de un usuario.</div>';
$txt['setting_warning_show_mods'] = 'Sólo moderadores';
$txt['setting_warning_show_user'] = 'Moderadores y usuarios avisados';
$txt['setting_warning_show_all'] = 'Todos los usuarios';

$txt['signature_settings'] = 'Opciones de Firma';
$txt['signature_settings_desc'] = 'Utiliza las opciones de esta página para decidir cómo deberían ser tratadas las firmas de usuarios en SMF.';
$txt['signature_settings_warning'] = 'Las opciones no se aplicarán por defecto a las firmas ya existentes. Entra <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;sesc=%1$s">aquí</a> para aplicar reglas a todas las firmas existentes.';
$txt['signature_enable'] = 'Activar firmas';
$txt['signature_max_length'] = 'Número máximo de caracteres permitidos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_lines'] = 'Número máximo de líneas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_images'] = 'Número máximo de imágenes<div class="smalltext">(0 para ilimitados - emoticonos excluidos)</div>';
$txt['signature_allow_smileys'] = 'Allow smileys in signatures';
$txt['signature_max_smileys'] = 'Número máximo de emoticonos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_width'] = 'Ancho máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_height'] = 'Largo máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_font_size'] = 'Tamaño máximo de fuente permitido en las firmas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_bbc'] = 'Activar etiquetas BBC';

$txt['custom_profile_title'] = 'Campos personalizados del Perfil';
$txt['custom_profile_desc'] = 'En esta página puedes crear tus propios campos personalizados para ajustarse a los requerimientos del foro';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre del Campo';
$txt['custom_profile_fieldtype'] = 'Tipo de Campo';
$txt['custom_profile_make_new'] = 'Nuevo Campo';
$txt['custom_profile_none'] = '¡Aún no has creado ningún campo personalizado!';
$txt['custom_profile_icon'] = 'Icon';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto largo';
$txt['custom_profile_type_select'] = 'Lista desplegable';
$txt['custom_profile_type_radio'] = 'Botón de selección';
$txt['custom_profile_type_check'] = 'Casilla de verificación';

$txt['custom_add_title'] = 'Añadir Campo del Perfil';
$txt['custom_edit_title'] = 'Editar Campo del Perfil';
$txt['custom_edit_general'] = 'Opciones de Visualización';
$txt['custom_edit_input'] = 'Opciones de Entrada';
$txt['custom_edit_advanced'] = 'Opciones Avanzadas';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_desc'] = 'Descripción';
$txt['custom_edit_profile'] = 'Sección del Perfil';
$txt['custom_edit_profile_desc'] = 'Sección del perfil donde es editado.';
$txt['custom_edit_profile_none'] = 'En ninguna';
$txt['custom_edit_registration'] = 'Mostrar en la página de registro';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Sí';
$txt['custom_edit_registration_require'] = 'Sí, y requerir entrada';
$txt['custom_edit_display'] = 'Mostrar en los Temas';
$txt['custom_edit_picktype'] = 'Tipo de Campo';

$txt['custom_edit_max_length'] = 'Longitud Máxima';
$txt['custom_edit_max_length_desc'] = '(0 para ilimitada)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = '¿Permitir BBC?';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Dejar el cuadro de opción vacío para eliminarlo. El botón de selección marca la opción por defecto.';
$txt['custom_edit_options_more'] = 'Más';
$txt['custom_edit_default'] = 'Estado por defecto';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no está seleccionado este campo no se mostrará a nadie.';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Quién puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; el propietario puede editarlo';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo; sólo los administradores pueden editarlo';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; el propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo sólo es visible para los administradores';
$txt['custom_edit_can_search'] = 'Se puede buscar';
$txt['custom_edit_can_search_desc'] = 'Este campo puede ser buscado en la lista de usuarios.';
$txt['custom_edit_mask'] = 'Máscara de Introducción';
$txt['custom_edit_mask_desc'] = 'Para los campos de texto se puede seleccionar una máscara de introducción para validar los datos.';
$txt['custom_edit_mask_email'] = 'Dirección Email válida';
$txt['custom_edit_mask_number'] = 'Numérico';
$txt['custom_edit_mask_nohtml'] = 'No HTML';
$txt['custom_edit_mask_regex'] = 'Expresión Regular (Avanzado)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_placement'] = 'Choose Placement';
$txt['custom_edit_placement_standard'] = 'Standard (with title)';
$txt['custom_edit_placement_withicons'] = 'With Icons';
$txt['custom_edit_placement_abovesignature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Placement';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'With Icons';
$txt['custom_profile_placement_abovesignature'] = 'Above Signature';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '¿Estás seguro de que quieres eliminar este campo? - ¡toda la información de usuarios relacionada se perderá!';

$txt['standard_profile_title'] = 'Campos Estándar del Perfil';
$txt['standard_profile_field'] = 'Campo';

$txt['core_settings_welcome_msg'] = 'Vienvenido a Tu Nuevo Foro';
$txt['core_settings_welcome_msg_desc'] = 'Para familiarizarte te recomendamos que selecciones qué funcionalidades principales de SMF quieres activar. ¡Te recomendamos que sólo actives aquellas que necesites!';
$txt['core_settings_item_cd'] = 'Calendario';
$txt['core_settings_item_cd_desc'] = 'Al activar esta funcionalidad se abrirán una serie de opciones para permitir a tus usuarios ver el calendario, añadir y revisar eventos, ver cumpleaños de los usuarios en el calendario y mucho más.';
$txt['core_settings_item_cp'] = 'Campos Avanzados del Perfil';
$txt['core_settings_item_cp_desc'] = 'Te permite ocultar los campos estándar del perfil, añadir campos de perfil en el registro del usuario y crear nuevos campos de perfil para tu foro.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma es una funcionalidad que te muestra la popularidad de un usuario. Los usuarios, si se les permite, pueden \'aplaudir\' o \'castigar\' a otros usuarios, que es como se calcula su popularidad.';
$txt['core_settings_item_ml'] = 'Log de Moderación';
$txt['core_settings_item_ml_desc'] = 'Activar el log de moderación para mantener un registro de todas las acciones llevadas a cabo por tus moderadores del foro.';
$txt['core_settings_item_pm'] = 'Moderación de Mensajes';
$txt['core_settings_item_pm_desc'] = 'La moderación de mensajes te permite seleccionar grupos y foros en los cuales los mensajes deben ser aprobados antes de que sean públicos. Al activar esta funcionalidad asegúrate de visitar la sección de permisos para configurar los permisos relevantes.';
$txt['core_settings_item_ps'] = 'Suscripciones de Pago';
$txt['core_settings_item_ps_desc'] = 'Las suscripciones de pago permiten a los usuarios pagar para cambiar su pertenencia a un grupo concreto del foro, y así adquirir nuevos permisos de acceso.';
$txt['core_settings_item_rg'] = 'Generación de Informes';
$txt['core_settings_item_rg_desc'] = 'Esta herramienta de administración permite la generación de informes (que pueden imprimirse) para ver la configuración actual de tu foro de manera sencilla - particularmente útil para foros extensos.';
$txt['core_settings_item_sp'] = 'Seguimiento del motor de búsqueda';
$txt['core_settings_item_sp_desc'] = 'Activar esta opción permitirá a los administradores seguir los motores de búsqueda a medida que indexan tu foro.';
$txt['core_settings_item_w'] = 'Sistema de Advertencia';
$txt['core_settings_item_w_desc'] = 'Esta funcionalidad permite a los administradores y moderadores enviar advertencias a usuarios; también incluye una funcionalidad avanzada para quitar derechos de usuarios si se incrementa su nivel de advertencia. Ten en cuenta que para obtener una funcionalidad completa de esta función se debe activar la &quot;Moderación de Mensajes&quot;.';
$txt['core_settings_switch_on'] = 'Pulsar para Activar';
$txt['core_settings_switch_off'] = 'Pulsar para Desactivar';
$txt['core_settings_enabled'] = 'Activado';
$txt['core_settings_disabled'] = 'Desactivado';

$txt['languages_lang_name'] = 'Nombre del idioma';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Por defecto';
$txt['languages_character_set'] = 'Juego de caracteres';
$txt['languages_users'] = 'Usuarios';
$txt['language_settings_writable'] = 'Aviso: el archivo Settings.php no es escribible, así que la configuración del idioma por defecto no puede ser guardada.';
$txt['edit_languages'] = 'Editar idiomas';
$txt['lang_file_not_writable'] = '<b>Aviso:</b> The primary language file (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['lang_entries_not_writable'] = '<b>Aviso:</b> El archivo de idioma que quieres editar (%1$s) no es escribible. Debes hacerlo escribible antes de que puedas hacerle algún cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'Añadir idioma';
$txt['add_language_smf'] = 'Descargar desde Simple Machines';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar, o déjelo en blanco para buscar todos los disponibles.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_smf_found'] = 'Los siguientes idiomas fueron encontrados. Haz clic en el enlace de instalación del idioma que quieres instalar, y serás conducido al gestor de paquetes para instalarlo.';
$txt['add_language_error_no_response'] = 'El sitio de Simple Machines no responde. Inténtalo más tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripción';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versión';

$txt['edit_language_entries_primary'] = 'Debajo están las opciones primarias del idioma para este paquete de idioma.';
$txt['edit_language_entries'] = 'Editar entradas del idioma';
$txt['edit_language_entries_file'] = 'Seleccionar entradas a editar';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_spelling'] = 'Deletreo';
$txt['languages_for_pspell'] = 'Esto es para <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - si está instalado';
$txt['languages_rtl'] = 'Activar el modo &quot;de derecha a izquierda&quot;';

$txt['lang_file_desc_index'] = 'Cadenas generales';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de Email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta página lista todos los archivos contenidos en el paquete de idioma, así como alguna información útil acerca de cada uno. Todos los archivos que tienen marcada la check box asociada, serán copiados.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tienen el estatus de &quot;no escribible&quot; no podrán ser copiados por SMF al directorio elegido en este momento. Tendrás que hacer el destino escribible usando un cliente FTP o bien rellenando tus detalles en la parte inferior de la página.</li>
		<li>La información de versión de un archivo muestra la última versión de SMF para la que fue actualizado. Si está marcada en verde entonces se trata de una versión más nueva de que tienes actualmente. Si está en ambar indica que es la misma versión. Y si está en rojo indica que tienes instalada una versión más nueva que la contenida en el paquete.</li>
		<li>Cuando un archivo ya existe en tu foro, la columna &quot;Ya existe&quot; uno de dos posibles valores. &quot;Idéntico&quot; indica que el archivo existente es exacto al que se quiere instalar, y no es necesario sobreescribirlo. &quot;Diferente&quot; quiere decir que los contenidos de ambos archivos varían de alguna manera, y sobreescribir el que ya tienes sea probablemente la solución óptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_theme_files'] = 'Theme-related Files';
$txt['languages_download_filename'] = 'Nombre del archivo';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Escribible';
$txt['languages_download_version'] = 'Versión';
$txt['languages_download_older'] = 'Tienes instalada una versión más nueva de este archivo; no se recomienda sobreescribirla.';
$txt['languages_download_exists'] = 'Ya existe';
$txt['languages_download_exists_same'] = 'Idéntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_copy'] = 'Copiar';
$txt['languages_download_not_chmod'] = 'No puedes proceder con la instalación hasta que todos los archivos seleccionados para ser copiados sean escribibles.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene rutas ilegales - por favor contacte con Simple Machines';
$txt['languages_download_complete'] = 'Installación completada';
$txt['languages_download_complete_desc'] = 'El paquete de idioma se instaló correctamente. Por favor haga clic <a href="%1$s">aquí</a> para volver a la página de idiomas';
$txt['languages_delete_confirm'] = 'Are you sure you want to delete this language?';

?>