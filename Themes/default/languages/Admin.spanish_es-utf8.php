<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Foros';
$txt['admin_users'] = 'Usuarios';
$txt['admin_newsletters'] = 'Boletines de Noticias';
$txt['admin_edit_news'] = 'Noticias';
$txt['admin_groups'] = 'Grupos de usuarios';
$txt['admin_members'] = 'Ver todos los usuarios';
$txt['admin_members_list'] = 'Debajo está el listado de todos los usuarios registrados actualmente en tu foro.';
$txt['admin_next'] = 'Siguiente';
$txt['admin_censored_words'] = 'Palabras censuradas';
$txt['admin_censored_where'] = 'Escribe la palabra a ser censurada en la izquierda, y la palabra por la que se cambiará en la derecha.';
$txt['admin_censored_desc'] = 'Debido a la naturaleza pública de los foros, puede que haya algunas palabras que desees prohibir que se publiquen por usuarios en tu foro. Puedes introducir cualquier palabra que desees que se censure cuando sea usada por algún usuario.<br />Para eliminar una palabra, limpia su cuadro de texto.';
$txt['admin_reserved_names'] = 'Nombres reservados';
$txt['admin_template_edit'] = 'Editar la plantilla del foro';
$txt['admin_modifications'] = 'Configuración de modificaciones';
$txt['admin_security_moderation'] = 'Seguridad y Moderación';
$txt['admin_server_settings'] = 'Configuración del Servidor';
$txt['admin_reserved_set'] = 'Establecer nombres reservados';
$txt['admin_reserved_line'] = 'Una palabra reservada por línea';
$txt['admin_basic_settings'] = 'Esta página te permite cambiar la configuración básica de tu foro. Sé muy cuidadoso con estas configuraciones, ya que podrían dejar el foro sin funcionar. Es importante mencionar que algunas de estas opciones (como, por ejemplo, el formato de la hora) son predeterminadas solamente para visitantes.';
$txt['admin_maintain'] = 'Activar el Modo de Mantenimiento';
$txt['admin_title'] = 'Título del Foro';
$txt['admin_url'] = 'URL del Foro';
$txt['cookie_name'] = 'Nombre de la Cookie';
$txt['admin_webmaster_email'] = 'Dirección email del Webmaster';
$txt['boarddir'] = 'Directorio SMF';
$txt['sourcesdir'] = 'Directorio de Fuentes';
$txt['cachedir'] = 'Directorio Cache';
$txt['admin_news'] = 'Activar Noticias';
$txt['admin_guest_post'] = 'Activar la publicación de mensajes para visitantes';
$txt['admin_manage_members'] = 'Controles de los Usuarios';
$txt['admin_main'] = 'Controles del Foro';
$txt['admin_config'] = 'Configuración del Foro';
$txt['admin_version_check'] = 'Revisión detallada de la versión';
$txt['admin_smffile'] = 'Archivo SMF';
$txt['admin_smfpackage'] = 'Paquete SMF';
$txt['admin_maintenance'] = 'Mantenimiento';
$txt['admin_image_text'] = 'Mostrar botones como imágenes, en vez de texto';
$txt['admin_credits'] = 'Créditos';
$txt['admin_agreement'] = 'Mostrar y requerir carta de aceptación cuando se registren';
$txt['admin_agreement_default'] = 'Por defecto';
$txt['admin_agreement_select_language'] = 'Idioma a editar';
$txt['admin_agreement_select_language_change'] = 'Cambiar';
$txt['admin_delete_members'] = 'Borrar usuarios seleccionados';
$txt['admin_repair'] = 'Reparar todos los Foros y Temas';
$txt['admin_main_welcome'] = 'Este es tu "%1$s".  Desde aquí puedes modificar la configuración del foro, realizar tareas de mantenieminto, ver logs, instalar paquetes, gestionar temas, y muchas otras cosas.<div style="margin-top: 1ex;">Si tienes algún problema, por favor revisa la página de "Soporte y Créditos".  Si esa información no te sirve, puedes <a href="http://www.simplemachines.org/community/index.php?board=16.0" target="_blank" class="new_win">visitarnos para solicitar ayuda</a> acerca de tu problema.</div>También puedes encontrar respuestas a tus preguntas y problemas haciendo clic en los símbolos <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> para obtener mayor información de las funciones en cuestión.';
$txt['admin_news_desc'] = 'Introduzca una noticia en cada cuadro. Algunas etiquetas BBC, como <span title="¿Estás en negritas?">[b]</span>, <span title="¡Cursivas!">[i]</span> y <span title="Los corchetes son grandiosos, ¿no?">[u]</span> están permitidos en las noticias, así como los smileys. Limpia el cuadro de cualquier elemento de las noticias para eliminarlo.';
$txt['administrators'] = 'Administradores del Foro';
$txt['admin_reserved_desc'] = 'Los Nombres Reservados impiden que los usuarios registren ciertos nombres de usuario o usen esas palabras en sus nombres a mostrar. Escoge las opciones que desees usar en la parte inferior antes de enviar el formulario.';
$txt['admin_activation_email'] = 'Enviar email de activación a los nuevos usuarios, después de registrarse';
$txt['admin_match_whole'] = 'Coincidir palabra completa solamente. Si no está seleccionada, buscará por palabras reservadas dentro del nombre.';
$txt['admin_match_case'] = 'Sensible a mayúsculas. Si no está seleccionada, la búsqueda NO será sensible a mayúsculas.';
$txt['admin_check_user'] = 'Revisar nombre de usuario.';
$txt['admin_check_display'] = 'Revisar nombre mostrado.';
$txt['admin_newsletter_send'] = 'Puedes enviar email a cualquiera desde esta página. La dirección email del grupo de usuarios seleccionado debe aparecer debajo, pero puedes agregar o eliminar cualquier dirección de email que desees. Cada dirección de email debe estar separada de esta manera: \'dirección1; dirección2\'.';
$txt['admin_fader_delay'] = 'Retardo del desvanecimiento entre elementos en el cuadro de noticias';
$txt['admin_bbc'] = 'Mostrar botones BBC en las páginas de Publicar Mensaje y envío de MP';

$txt['admin_backup_fail'] = 'No se pudo hacer un respaldo de Settings.php - por favor revisa que Settings_bak.php exista, y pueda escribirse en él.';
$txt['modSettings_info'] = 'Cambia o especifica las opciones de control con las que opera este foro.';
$txt['database_server'] = 'Servidor de la base de datos';
$txt['database_user'] = 'Nombre de usuario de la base de datos';
$txt['database_password'] = 'Contraseña de la base de datos';
$txt['database_name'] = 'Nombre de la base de datos';
$txt['registration_agreement'] = 'Carta de Aceptación';
$txt['registration_agreement_desc'] = 'Esta Carta de Aceptación se muestra cuando un usuario registra una cuenta en el foro y tiene que ser aceptada para que los usuarios puedan continuar registrándose.';
$txt['database_prefix'] = 'Prefijo de las tablas de la Base de datos';
$txt['errors_list'] = 'Listado de errores del foro';
$txt['errors_found'] = 'Los siguientes errores están presentes en tu foro (vacío si ninguno)';
$txt['errors_fix'] = '¿Deseas intentar arreglar esos errores?';
$txt['errors_do_recount'] = 'Todos los errores han sido reparados - se creó un área de recuperación. Por favor, haga clic en el botón que hay a continuación para recontar algunas estadísticas clave.';
$txt['errors_recount_now'] = 'Recuento de estadísticas';
$txt['errors_fixing'] = 'Arreglando errores del foro';
$txt['errors_fixed'] = '¡Arreglados todos los errores! Necesitarás revisar cualquier nueva categoría, foro, o temas para decidir qué harás con ellas.';
$txt['attachments_avatars'] = 'Archivos adjuntos y Avatares';
$txt['attachments_desc'] = 'Desde aquí puedes administrar los archivos adjuntos que se encuentran en tu sistema. Puedes borrar archivos adjuntos por tamaño y por fecha. Las estadísticas de los archivos adjuntos se muestran debajo.';
$txt['attachment_stats'] = 'Estadísticas de los Archivos adjuntos';
$txt['attachment_integrity_check'] = 'Comprobar la integridad de los archivos adjuntos';
$txt['attachment_integrity_check_desc'] = 'Esta función chequea la integridad y los tamaños de los adjuntos y archivos listados en la base de datos y, si es necesario, repara los errores encontrados.';
$txt['attachment_check_now'] = 'Ejecutar el chequeo ahora';
$txt['attachment_pruning'] = 'Borrar adjuntos';
$txt['attachment_pruning_message'] = 'Texto que se añadirá al mensaje';
$txt['attachment_pruning_warning'] = '¿Estas seguro que deseas eliminar estos archivos adjuntos?\\n¡Esta acción no se puede deshacer!';
$txt['attachment_total'] = 'Total de Archivos adjuntos';
$txt['attachmentdir_size'] = 'Tamaño total del directorio de Archivos adjuntos';
$txt['attachmentdir_size_current'] = 'Espacio total para el directorio de adjuntos';
$txt['attachment_space'] = 'Espacio total disponible en el directorio de Archivos adjuntos';
$txt['attachment_space_current'] = 'Espacio total disponible en el directorio actual de archivos adjuntos';
$txt['attachment_options'] = 'Opciones de los Archivos adjuntos';
$txt['attachment_log'] = 'Log de Archivos adjuntos';
$txt['attachment_remove_old'] = 'Eliminar archivos adjuntos más antiguos que';
$txt['attachment_remove_size'] = 'Eliminar archivos adjuntos más grandes que';
$txt['attachment_name'] = 'Nombre del Archivo adjunto';
$txt['attachment_file_size'] = 'Tamaño';
$txt['attachmentdir_size_not_set'] = 'No se ha establecido un tamaño máximo del directorio de archivos adjuntos';
$txt['attachment_delete_admin'] = '[archivo adjunto borrado por el administrador]';
$txt['live'] = 'En vivo desde Simple Machines...';
$txt['remove_all'] = 'Eliminar todo';
$txt['approve_new_members'] = 'Un administrador debe aprobar todos los nuevos usuarios';
$txt['agreement_not_writable'] = 'Advertencia - NO se puede escribir en agreement.txt. Cualquier cambio que hagas NO se guardará';

$txt['version_check_desc'] = 'Esto te muestra las versiones de tus archivos instalados, comparados con las últimas versiones de éstos. Si alguno de estos archivos están desactualizados, debes descargar y actualizar a la última versión en <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(más detallado)';

$txt['lfyi'] = 'No puedes conectarte al último archivo de noticias de simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Buscar';

$txt['smileys_manage'] = 'Conjunto de Smileys e Iconos de Mensajes';
$txt['smileys_manage_info'] = 'Instalar nuevos conjuntos de smileys o agregar smileys a los conjuntos existentes, además de administrar los iconos de los mensajes.';
$txt['package_info'] = 'Instalar nuevas características o modificar las existentes con esta interfaz.';
$txt['theme_admin'] = 'Temas y Diseño';
$txt['theme_admin_info'] = 'Configurar y administrar tus temas, así como especificar o reininicalizar las opciones del tema.';
$txt['registration_center'] = 'Registro de Usuarios';
$txt['member_center_info'] = 'Ver la lista de usuarios, buscar usuarios y gestionar usuarios pendientes de aprobación y que aún no han activado su cuenta.';

$txt['viewmembers_name'] = 'Nombre de usuario (nombre mostrado)';
$txt['viewmembers_online'] = 'última vez en línea';
$txt['viewmembers_today'] = 'Hoy';
$txt['viewmembers_day_ago'] = 'día';
$txt['viewmembers_days_ago'] = 'días';

$txt['display_name'] = 'Nombre a mostrar';
$txt['email_address'] = 'Dirección Email';
$txt['ip_address'] = 'Dirección IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'desconocido';
$txt['security_wrong'] = '¡Intento de ingreso a administración!' . "\n" . 'Referidor: %1$s' . "\n" . 'Agente de usuario: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Enviar en formato HTML.  (con esto, puedes poner HTML en el email.)';
$txt['email_parsed_html'] = 'Agregar &lt;br /&gt;s y &amp;nbsp;s a este mensaje.';
$txt['email_variables'] = 'En este mensaje puedes usar algunas &quot;variables&quot;.  Haz <i>clic</i> <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">aquí</a> para más información.';
$txt['email_force'] = 'Enviar a estos usuarios aún si ellos eligieron no recibir anuncios.';
$txt['email_as_pms'] = 'Enviar esto a esos grupos usando mensajes personales.';
$txt['email_continue'] = 'Continuar';
$txt['email_done'] = 'finalizado.';

$txt['ban_title'] = 'Lista de accesos prohibidos';
$txt['ban_ip'] = 'IP con acceso prohibido: (ej. 192.168.12.213 o 128.0.*.*) - una por línea';
$txt['ban_email'] = 'Email con acceso prohibido: (ej. maldito@algunlugar.com) - uno por línea';
$txt['ban_username'] = 'Nombre de usuario con acceso prohibido: (ej. Webmaster) - uno por línea';

$txt['ban_description'] = 'Aquí puedes restringirle el acceso a personas conflictivas ya sea por IP, nombre de servidor, nombre de usuario, o email.';
$txt['ban_add_new'] = 'Agregar nueva restricción de acceso';
$txt['ban_banned_entity'] = 'Elemento restringido';
$txt['ban_on_ip'] = 'Restingir por IP (ej. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Restringir por nombre de dominio (ej. *.mil)';
$txt['ban_on_email'] = 'Restringir por dirección de Email (ej. *@sitiomalo.com)';
$txt['ban_on_username'] = 'Restringir por nombre de usuario';
$txt['ban_notes'] = 'Notas';
$txt['ban_restriction'] = 'Restricción';
$txt['ban_full_ban'] = 'Restricción completa';
$txt['ban_partial_ban'] = 'Restricción parcial';
$txt['ban_cannot_post'] = 'No puede publicar';
$txt['ban_cannot_register'] = 'No puede registrarse';
$txt['ban_cannot_login'] = 'No puede ingresar';
$txt['ban_add'] = 'Agregar';
$txt['ban_edit_list'] = 'Editar lista de accesos prohibidos';
$txt['ban_type'] = 'Tipo de restricción';
$txt['ban_days'] = 'día(s)';
$txt['ban_will_expire_within'] = 'La restricción expirará en';
$txt['ban_added'] = 'Añadido';
$txt['ban_expires'] = 'Expira';
$txt['ban_hits'] = 'Intentos';
$txt['ban_actions'] = 'Acciones';
$txt['ban_expiration'] = 'Expiración';
$txt['ban_reason_desc'] = 'Motivo por el que se le restringió el acceso, para ser mostrado al usuario en cuestión.';
$txt['ban_notes_desc'] = 'Notas que puedan ayudar a otros miembros admins.';
$txt['ban_remove_selected'] = 'Eliminar seleccionados';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '¿Estás seguro que deseas eliminar los accesos restringidos seleccionados?';
$txt['ban_modify'] = 'Modificar';
$txt['ban_name'] = 'Nombre';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Editar restricción';
$txt['ban_add_notes'] = '<strong>Nota</strong>: después de crear la restricción de arriba, puedes añadir datos adicionales que activen la restricción, como direcciones IP, nombres de dominios y direcciones email.';
$txt['ban_expired'] = 'Expirado / Desactivado';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Ninguna restricción seleccionada.';

$txt['ban_triggers'] = 'Restricciones';
$txt['ban_add_trigger'] = 'Añadir restricción';
$txt['ban_add_trigger_submit'] = 'Añadir';
$txt['ban_edit_trigger'] = 'Modificar';
$txt['ban_edit_trigger_title'] = 'Editar restricción';
$txt['ban_edit_trigger_submit'] = 'Modificar';
$txt['ban_remove_selected_triggers'] = 'Eliminar las restricciones seleccionadas';
$txt['ban_no_entries'] = 'Actualmente no hay restricciones efectuadas.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = '¿Estás seguro de que deseas eliminar las restricciones seleccionadas?';
$txt['ban_trigger_browse'] = 'Mostrar restricciones';
$txt['ban_trigger_browse_description'] = 'Esta pantalla permite mostra todas las restricciones ordenadas por IP, nombre de dominio, dirección email o usuario.';

$txt['ban_log'] = 'Log de restricciones de acceso';
$txt['ban_log_description'] = 'El log de accesos prohibidos muestra todos los intentos de ingreso al foro por los usuarios a los que se les restringió el acceso. (\'restricción completa\' y \'no puede registrarse\' solamente).';
$txt['ban_log_no_entries'] = 'No hay entradas del log de restricciones de acceso.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Dirección Email';
$txt['ban_log_member'] = 'Usuario';
$txt['ban_log_date'] = 'Fecha';
$txt['ban_log_remove_all'] = 'Eliminar Todos';
$txt['ban_log_remove_all_confirm'] = '¿Estás seguro que deseas eliminar todas las entradas del log de accesos prohibidos?';
$txt['ban_log_remove_selected'] = 'Eliminar seleccionados';
$txt['ban_log_remove_selected_confirm'] = '¿Estás seguro que deseas eliminar todas las entradas seleccionadas del log de accesos prohibidos?';
$txt['ban_no_triggers'] = 'No hay desencadenantes de restricción de acceso actualmente';

$txt['settings_not_writable'] = 'Esta configuración no puede guardarse, ya que Settings.php es de sólo lectura.';

$txt['maintain_title'] = 'Mantenimiento del Foro';
$txt['maintain_info'] = 'Con esas herramientas puedes optimizar tablas, hacer respaldos, revisar errores, y podar foros.';
$txt['maintain_sub_database'] = 'Base de datos';
$txt['maintain_sub_routine'] = 'Rutina';
$txt['maintain_sub_members'] = 'Miembros';
$txt['maintain_sub_topics'] = 'Temas';
$txt['maintain_done'] = 'La tarea de mantenimiento \'%1$s\' fue ejecutada con éxito.';
$txt['maintain_no_errors'] = '¡Felicidades, no se encontró ningún error!  Gracias por verificar.';

$txt['maintain_tasks'] = 'Tareas Programadas';
$txt['maintain_tasks_desc'] = 'Administrar todas las tareas programadas por SMF.';

$txt['scheduled_log'] = 'Registro de tareas';
$txt['scheduled_log_desc'] = 'Listar el registro de tareas que se han realizado.';
$txt['admin_log'] = 'Registro de administración';
$txt['admin_log_desc'] = 'Listar el registro de tareas administrativas que se han llevado a cabo por los administradores de tu foro.';
$txt['moderation_log'] = 'Registro de moderación';
$txt['moderation_log_desc'] = 'Listar actividades de moderación que se han llevado a cabo por los moderadores en tu foro.';
$txt['spider_log_desc'] = 'Revisar las entradas relacionadas con las arañas de los motores de búsqueda en tu foro.';
$txt['pruning_log_desc'] = 'Utiliza estas herramientas para borrar las entradas antiguas en varios registros.';

$txt['mailqueue_title'] = 'Correo';

$txt['db_error_send'] = 'Enviar emails en errores de conexión de MySQL';
$txt['db_persist'] = 'Usar una conexión persistente';
$txt['ssi_db_user'] = 'Nombre de base de datos en modo SSI';
$txt['ssi_db_passwd'] = 'Contraseña de base de datos en modo SSI';

$txt['default_language'] = 'Idioma por defecto en el foro';

$txt['maintenance_subject'] = 'Asunto a mostrar';
$txt['maintenance_message'] = 'Mensaje a mostrar';

$txt['errlog_desc'] = 'El log de errores registra cada error encontrado en tu foro.  Para eliminar cualquier error de la base de datos, selecciona la casilla, y haz <i>clic</i> en el botón  %1$s ubicado en la parte inferior de la página.';
$txt['errlog_no_entries'] = 'Actualmente no hay registro de entradas erróneas.';

$txt['theme_settings'] = 'Configuración del Tema';
$txt['theme_current_settings'] = 'Tema actual';

$txt['dvc_your'] = 'Tu versión';
$txt['dvc_current'] = 'Versión actual';
$txt['dvc_sources'] = 'Fuentes';
$txt['dvc_default'] = 'Plantillas por defecto';
$txt['dvc_templates'] = 'Plantillas actuales';
$txt['dvc_languages'] = 'Archivos de idioma';

$txt['smileys_default_set_for_theme'] = 'Selecciona la colección de smileys para este tema';
$txt['smileys_no_default'] = '(usar conjunto global por defecto de smileys)';

$txt['censor_test'] = 'Probar palabras censuradas';
$txt['censor_test_save'] = 'Probar';
$txt['censor_case'] = 'Ignorar mayúsculas/minúsculas cuando se esté censurando';
$txt['censor_whole_words'] = 'Censurar sólo palabras completas';

$txt['admin_confirm_password'] = '(confirmar)';
$txt['admin_incorrect_password'] = 'Contraseña incorrecta';

$txt['date_format'] = '(DD-MM-AAAA)';
$txt['undefined_gender'] = 'No definido';
$txt['age'] = 'Edad del usuario';
$txt['activation_status'] = 'Estado de la activación';
$txt['activated'] = 'Activado';
$txt['not_activated'] = 'No activado';
$txt['primary'] = 'Primario';
$txt['additional'] = 'Adicional';
$txt['messenger_address'] = 'Dirección del Messenger';
$txt['wild_cards_allowed'] = 'Son permitidos los caracteres * y ?';
$txt['search_for'] = 'Buscar por';
$txt['member_part_of_these_membergroups'] = 'Usuario es parte de estos grupos';
$txt['membergroups'] = 'Grupos de usuario';
$txt['confirm_delete_members'] = '¿Estás seguro que deseas eliminar los usuarios seleccionados?';

$txt['support_credits_title'] = 'Soporte y Créditos';
$txt['support_credits_info'] = 'Obtén soporte de problemas comunes e información de la versión para proporcionar en caso que tengas problemas.';
$txt['support_title'] = 'Información de Soporte';
$txt['support_versions_current'] = 'Versión actual de SMF';
$txt['support_versions_forum'] = 'Versión del Foro';
$txt['support_versions_php'] = 'Versión de PHP';
$txt['support_versions_db'] = 'versión %1$s';
$txt['support_versions_server'] = 'Versión del Servidor';
$txt['support_versions_gd'] = 'Versión de GD';
$txt['support_versions'] = 'Información de versiones';
$txt['support_resources'] = 'Recursos de soporte';
$txt['support_resources_p1'] = 'Nuestro <a href="%1$s">Manual Online</a> proporciona la documentación principal para SMF. El Manual Online de SMF contiene muchos documentos para ayudar a responder preguntas de soporte y explicar <a href="%2$s">Características</a>, <a href="%3$s">Configuraciones</a>, <a href="%4$s">Temas</a>, <a href="%5$s">Paquetes</a>, etc. El Manual  Online documenta cada área de SMF exhaustivamente y debería responder la mayoría de las preguntas rápidamente. ';
$txt['support_resources_p2'] = 'Si no puedes encontrar las respuestas a tus preguntas en el Manual Online, es posible que quieras buscar en nuestra <a href="%1$s">Comunidad de Soporte</a> o preguntar en nuestro foro en <a href="%2$s">Inglés</a> o en alguno de nuestros muchos <a href="%3$s">foros de soporte internacionales</a>. La Comunidad de Soporte SMF puede ser usada para <a href="%4$s">soporte</a>, <a href="%5$s">personalización</a>, y muchas otras cosas como discutir acerca de SMF, encontrar un proveedor de alojamiento y discutir sobre asuntos administrativos con otros administradores de foros. ';

$txt['support_latest'] = 'Soporte &amp; Asuntos comunes';
$txt['support_latest_fetch'] = 'Obteniendo información del soporte...';

$txt['edit_permissions_info'] = 'Cambiar restricciones y características disponibles globalmente o a foros específicos.';
$txt['membergroups_members'] = 'Usuarios regulares';
$txt['membergroups_guests'] = 'Visitantes';
$txt['membergroups_guests_na'] = 'n/d';
$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_permissions'] = 'Permisos';

$txt['permitgroups_restrict'] = 'Restrictivo';
$txt['permitgroups_standard'] = 'Estándar';
$txt['permitgroups_moderator'] = 'Moderador';
$txt['permitgroups_maintenance'] = 'Mantenimiento';
$txt['permitgroups_inherit'] = 'Heredar';

$txt['confirm_delete_attachments_all'] = '¿Estás seguro que deseas eliminar todos los archivos adjuntos?';
$txt['confirm_delete_attachments'] = '¿Estás seguro que deseas eliminar los archivos adjuntos seleccionados?';
$txt['attachment_manager_browse_files'] = 'Examinar Archivos';
$txt['attachment_manager_repair'] = 'Mantiene';
$txt['attachment_manager_avatars'] = 'Avatares';
$txt['attachment_manager_attachments'] = 'Archivos adjuntos';
$txt['attachment_manager_thumbs'] = 'Mosaicos';
$txt['attachment_manager_last_active'] = 'Última vez activo';
$txt['attachment_manager_member'] = 'Usuario';
$txt['attachment_manager_avatars_older'] = 'Eliminar avatares de usuarios no activos por más de';
$txt['attachment_manager_total_avatars'] = 'Total de Avatares';

$txt['attachment_manager_avatars_no_entries'] = 'Actualmente no hay avatares.';
$txt['attachment_manager_attachments_no_entries'] = 'Actualmente no hay archivos adjuntos.';
$txt['attachment_manager_thumbs_no_entries'] = 'Actualmente no hay miniaturas.';

$txt['attachment_manager_settings'] = 'Configuración de los Archivos adjuntos';
$txt['attachment_manager_avatar_settings'] = 'Configuración de los Avatares';
$txt['attachment_manager_browse'] = 'Examinar archivos';
$txt['attachment_manager_maintenance'] = 'Mantenimiento de Archivos';
$txt['attachment_manager_save'] = 'Guardar';

$txt['attachmentEnable'] = 'Modo de Adjuntos';
$txt['attachmentEnable_deactivate'] = 'Desactivar Archivos adjuntos';
$txt['attachmentEnable_enable_all'] = 'Activar todos los Archivos adjuntos';
$txt['attachmentEnable_disable_new'] = 'Desactivar nuevos Archivos adjuntos';
$txt['attachmentCheckExtensions'] = 'Revisar extensión del archivo adjunto';
$txt['attachmentExtensions'] = 'Extensiones permitidas de los archivos adjuntos';
$txt['attachmentRecodeLineEndings'] = 'Recodificar finales de línea en adjuntos textuales';
$txt['attachmentShowImages'] = 'Mostrar archivos adjuntos como imágenes debajo del mensaje';
$txt['attachmentEncryptFilenames'] = 'Encriptar los nombres de los archivos almacenados';
$txt['attachmentUploadDir'] = 'Directorio de archivos adjuntos <div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configurar múltiples directorios de adjuntos</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Directorio de archivos adjuntos';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configurar múltiples directorios de adjuntos]</a>';
$txt['attachmentDirSizeLimit'] = 'Tamaño máximo del directorio de archivos adjuntos';
$txt['attachmentPostLimit'] = 'Tamaño máximo del archivos adjunto por mensaje';
$txt['attachmentSizeLimit'] = 'Tamaño máximo del archivos adjunto';
$txt['attachmentNumPerPostLimit'] = 'Número máximo de archivos adjuntos en un mensaje';
$txt['attachment_gd_warning'] = 'El módulo GD no está instalado en estos momentos. La recodificación de imágenes no es posible.';
$txt['attachment_image_reencode'] = 'Recodificar imágenes adjuntas potencialmente peligrosas';
$txt['attachment_image_reencode_note'] = '(requiere el módulo GD)';
$txt['attachment_image_paranoid_warning'] = 'Las comprobaciones de seguridad intensivas pueden dar como resultado que un gran número de adjuntos sean rechazados.';
$txt['attachment_image_paranoid'] = 'Llevar a cabo comprobaciones de seguridad en las imágenes adjuntas subidas';
$txt['attachmentThumbnails'] = 'Redimensionar imágenes mostradas bajo los mensajes';
$txt['attachment_thumb_png'] = 'Guardar miniaturas como PNG';
$txt['attachmentThumbWidth'] = 'Ancho máximo de los mosaicos';
$txt['attachmentThumbHeight'] = 'Alto máximo de los mosaicos';

$txt['attach_dir_does_not_exist'] = 'No existe';
$txt['attach_dir_not_writable'] = 'No escribible';
$txt['attach_dir_files_missing'] = 'Faltan archivos (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Reparar</a>)';
$txt['attach_dir_unused'] = 'No usado';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Gestionar rutas de los adjuntos';
$txt['attach_paths'] = 'Rutas de archivos adjuntos';
$txt['attach_current_dir'] = 'Directorio actual';
$txt['attach_path'] = 'Ruta';
$txt['attach_current_size'] = 'Tamaño actual (KB)';
$txt['attach_num_files'] = 'Archivos';
$txt['attach_dir_status'] = 'Estado';
$txt['attach_add_path'] = 'Añadir Ruta';
$txt['attach_path_current_bad'] = 'Ruta de adjuntos actual no válida.';

$txt['mods_cat_avatars'] = 'Avatares';
$txt['avatar_directory'] = 'Directorio de Avatares';
$txt['avatar_url'] = 'URL de los Avatars';
$txt['avatar_dimension_note'] = '(0 = sin límite)';
$txt['avatar_max_width_external'] = 'Ancho máximo del avatar externo';
$txt['avatar_max_height_external'] = 'Alto máximo de avatar externo';
$txt['avatar_action_too_large'] = 'Si el avatar es demasiado grande...';
$txt['option_refuse'] = 'Rechazarlo';
$txt['option_html_resize'] = 'Permitirle al HTML ajustar el tamaño';
$txt['option_js_resize'] = 'Redimensionarlo con JavaScript';
$txt['option_download_and_resize'] = 'Descargarlo y ajustar el tamaño (se necesita el módulo GD)';
$txt['avatar_max_width_upload'] = 'Ancho máximo del avatar subido';
$txt['avatar_max_height_upload'] = 'Alto máximo del avatar subido';
$txt['avatar_resize_upload'] = 'Ajustarle el tamaño a los avatares muy grandes';
$txt['avatar_resize_upload_note'] = '(se necesita el módulo GD)';
$txt['avatar_download_png'] = 'Usar PNG para los avatares a los que se les ajustó el tamaño';
$txt['avatar_gd_warning'] = 'El modulo de GD no se encuentra instalado. Algunas funciones para la configuración de avatares están desactivadas.';
$txt['avatar_external'] = 'Avatares externos';
$txt['avatar_upload'] = 'Se pueden subir avatares';
$txt['avatar_server_stored'] = 'Avatares almacenados en el servidor';
$txt['avatar_server_stored_groups'] = 'Grupos permitidos para seleccionar un avatar alojado en el servidor';
$txt['avatar_upload_groups'] = 'Grupos permitidos para subir un avatar al servidor';
$txt['avatar_external_url_groups'] = 'Grupos permitidos para seleccionar una URL externa';
$txt['avatar_select_permission'] = 'Selecciona los permisos para cada grupo de usuarios';
$txt['avatar_download_external'] = 'Descargar un avatar de la URL especificada';
$txt['custom_avatar_enabled'] = 'Subir avatares a...';
$txt['option_attachment_dir'] = 'Directorio de Archivos adjuntos';
$txt['option_specified_dir'] = 'Directorio específico...';
$txt['custom_avatar_dir'] = 'Directorio al que se subirán los archivos';
$txt['custom_avatar_dir_desc'] = 'No debería ser el mismo que el directorio de almacenamiento del servidor.';
$txt['custom_avatar_url'] = 'Subir avatar de la URL';
$txt['custom_avatar_check_empty'] = 'El directorio personalizado de avatares que has especificado puede estar vacío o ser invalido. Por favor revisa que estas configuraciones sean correctas.';
$txt['avatar_reencode'] = 'Recodificar avatares potencialmente peligrosos';
$txt['avatar_reencode_note'] = '(requiere el módulo GD)';
$txt['avatar_paranoid_warning'] = 'Las comprobaciones de seguridad pueden dar como resultado que un importante número de avatares sean rechazados.';
$txt['avatar_paranoid'] = 'Llevar a cabo comprobaciones de seguridad en los avatares subidos';

$txt['repair_attachments'] = 'Mantenimiento de Adjuntos';
$txt['repair_attachments_complete'] = 'Completado el Mantenimiento';
$txt['repair_attachments_complete_desc'] = 'Todos los errores seleccionados han sido corregidos';
$txt['repair_attachments_no_errors'] = '¡Ningún error encontrado!';
$txt['repair_attachments_error_desc'] = 'Se encontraron los siguientes errores durante el mantenimiento. Marca la casilla correspondiente al error que deseas corregir y pulsa en Continuar.';
$txt['repair_attachments_continue'] = 'Continuar';
$txt['repair_attachments_cancel'] = 'Cancelar';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturas no tienen un adjunto padre';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d padres están marcados como contenedores de miniaturas pero no contienen ninguna';
$txt['attach_repair_file_missing_on_disk'] = '%1$d adjuntos/avatares tienen una entrada pero ya no existen en el disco';
$txt['attach_repair_file_wrong_size'] = '%1$d adjuntos/avatares con un tamaño de archivo incorrecto han sido detectados';
$txt['attach_repair_file_size_of_zero'] = '%1$d adjuntos/avatares tienen tamaño cero. (Se eliminarán)';
$txt['attach_repair_attachment_no_msg'] = '%1$d adjuntos ya no tienen ningún mensaje asociado';
$txt['attach_repair_avatar_no_member'] = '%1$d avatares no tienen un miembro asociado';
$txt['attach_repair_wrong_folder'] = '%1$d archivos adjuntos están en una carpeta errónea';

$txt['news_title'] = 'Noticias y Boletines';
$txt['news_settings_desc'] = 'Aquí puedes cambiar la configuración y los permisos relacionados con las noticias y boletines.';
$txt['news_settings_submit'] = 'Guardar';
$txt['news_mailing_desc'] = 'Desde este menú puedes enviar mensajes a todos los usuarios que se han registrado, e introducido su dirección de email. Puedes editar la lista de distribición, o enviar mensajes a todos. útil para información de noticias o modificaciones.';
$txt['groups_edit_news'] = 'Grupos permitidos para editar nuevos elementos';
$txt['groups_send_mail'] = 'Grupos permitidos para publicar boletines';
$txt['xmlnews_enable'] = '¿Activar noticias XML/RSS?';
$txt['xmlnews_maxlen'] = 'Longitud máxima del mensaje:<div class="smalltext">(cero para deshabilitarlo, mala idea)</div>';
$txt['editnews_clickadd'] = 'Haz <i>clic</i> aquí para agregar otro elemento.';
$txt['editnews_remove_selected'] = 'Eliminar seleccionados';
$txt['editnews_remove_confirm'] = '¿Estás seguro que deseas eliminar los elementos de notificas seleccionados?';
$txt['censor_clickadd'] = 'Haz <i>clic</i> aquí para agregar otra palabra.';

$txt['layout_controls'] = 'Controles de Temas y Diseño';
$txt['logs'] = 'Registros';
$txt['generate_reports'] = 'Generar Informes';

$txt['update_available'] = '¡Actualización Disponible!';
$txt['update_message'] = 'Estás utilizando una version desactualizada de SMF, que contiene algunos errores ya solventados.
	Te recomentamos que <a href="" id="update-link">actualizes tu foro</a> a la última versión cuanto antes. ¡Sólo te llevará un minuto!';

$txt['manageposts'] = 'Mensajes y Temas';
$txt['manageposts_title'] = 'Configurar Mensajes y Temas';
$txt['manageposts_description'] = 'Aquí puedes configurar todo lo relacionado con los mensajes y temas.';

$txt['manageposts_seconds'] = 'segundos';
$txt['manageposts_minutes'] = 'minutos';
$txt['manageposts_characters'] = 'caracteres';
$txt['manageposts_days'] = 'días';
$txt['manageposts_posts'] = 'mensajes';
$txt['manageposts_topics'] = 'temas';

$txt['manageposts_settings'] = 'Configuración de Mensajes';
$txt['manageposts_settings_description'] = 'Aquí puedes configurar todo lo relacionado con los mensajes.';
$txt['manageposts_settings_submit'] = 'Guardar';

$txt['manageposts_bbc_settings'] = 'Códigos BBC';
$txt['manageposts_bbc_settings_description'] = 'Se pueden utilizar códigos BBC para cambiar la apariencia de los mensajes del foro. Por ejemplo, para <b>enfatizar</b> la palabra \'casa\' puedes teclear [b]casa[/b]. Todas las marcas de códigos BBC deben ir acompañadas de corchetes (\'[\' y \']\').';
$txt['manageposts_bbc_settings_title'] = 'Configuración de códigos BBC';
$txt['manageposts_bbc_settings_submit'] = 'Guardar';

$txt['manageposts_topic_settings'] = 'Configuración de Temas';
$txt['manageposts_topic_settings_description'] = 'Aquí puedes configurar todo lo relacionado con los temas.';
$txt['manageposts_topic_settings_submit'] = 'Guardar';

$txt['removeNestedQuotes'] = 'Eliminar citas anidadas al citar texto';
$txt['enableEmbeddedFlash'] = '¿Incrustar flash? (de lo contrario, mostrarlo como un enlace)';
$txt['enableEmbeddedFlash_warning'] = '¡puede ser un riesgo de seguridad!';
$txt['enableSpellChecking'] = 'Activar la corrección ortográfica';
$txt['enableSpellChecking_warning'] = '¡esto no funciona en todos los servidores!';
$txt['disable_wysiwyg'] = 'Desactivar el editor WYSIWYG';
$txt['max_messageLength'] = 'Caracteres máximos permitidos en los mensajes';
$txt['max_messageLength_zero'] = '0 para que no haya máx';
$txt['fixLongWords'] = 'Partir palabras que tengan más letras que';
$txt['fixLongWords_zero'] = '0 para desactivar';
$txt['fixLongWords_warning'] = '¡esto no funciona en todos los servidores!';
$txt['topicSummaryPosts'] = 'Mensajes a mostrar en el resumen del tema';
$txt['spamWaitTime'] = 'Tiempo mínimo entre dos publicaciones desde la misma IP';
$txt['edit_wait_time'] = 'Editar Tiempo de Espera';
$txt['edit_disable_time'] = 'Tiempo máximo despues de publicar para permitir editarlo';
$txt['edit_disable_time_zero'] = '0 para desactivar';

$txt['enableBBC'] = 'Activar códigos BBC';
$txt['enablePostHTML'] = 'Activar HTML <em>básico</em> en los mensajes';
$txt['autoLinkUrls'] = 'Crear automáticamente los enlaces cuando se escriben URLs';
$txt['disabledBBC'] = 'Activar etiquetas BBC';
$txt['bbcTagsToUse'] = 'Activar Etiquetas BBC';
$txt['bbcTagsToUse_select'] = 'Selecciona las etiquetas permitidas';
$txt['bbcTagsToUse_select_all'] = 'Selecciona todas';

$txt['enableStickyTopics'] = 'Activar Temas Fijados';
$txt['enableParticipation'] = 'Activar Iconos de participación';
$txt['oldTopicDays'] = 'Días antes de que se advierta que un tema es viejo, al querer publicar una respuesta';
$txt['oldTopicDays_zero'] = '0 para desactivar';
$txt['defaultMaxTopics'] = 'Número máximo de temas a mostrar en el índice de Mensajes';
$txt['defaultMaxMessages'] = 'Número máximode mensajes a mostrar en una página de Tema';
$txt['hotTopicPosts'] = '¿Número de mensajes para un tema caliente?';
$txt['hotTopicVeryPosts'] = '¿Número de mensajes para un tema muy caliente?';
$txt['enableAllMessages'] = 'Número máximo de respuestas en un tema para mostrar &quot;Todos&quot; los mensajes';
$txt['enableAllMessages_zero'] = '0 para nunca mostrar &quot;Todos&quot;';
$txt['disableCustomPerPage'] = 'Desactivar la personalización de número de temas/mensajes por página';
$txt['enablePreviousNext'] = 'Activar el Mod Tema Anterior/Siguiente';

$txt['not_done_title'] = '¡No realizado aún!';
$txt['not_done_reason'] = 'Para evitar la sobrecarga de su servidor, el proceso ha sido temporalmente paralizado.  Debería continuará automáticamente en unos segundos.  Si no lo hace, por favor, pulse en continuar.';
$txt['not_done_continue'] = 'Continuar';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Base de datos y rutas';
$txt['cookies_sessions_settings'] = 'Cookies y sesiones';
$txt['caching_settings'] = 'Caché';
$txt['load_balancing_settings'] = 'Balanceo de carga';

$txt['language_configuration'] = 'Idiomas';
$txt['language_description'] = 'Esta sección le permite editar idiomas instalados en su foro y descargar otros nuevos del portal de Simple Machines. Aquí también podrá editar configuraciones relacionadas con el idioma.';
$txt['language_edit'] = 'Editar idiomas';
$txt['language_add'] = 'Añadir idioma';
$txt['language_settings'] = 'Configuraciones';

$txt['advanced'] = 'Avanzado';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Por favor, selecciona quién debería recibir una copia de las noticias';
$txt['admin_news_select_group'] = 'Grupos';
$txt['admin_news_select_group_desc'] = 'Selecciona el grupo que recibirá esta noticia.';
$txt['admin_news_select_members'] = 'Usuarios';
$txt['admin_news_select_members_desc'] = 'Usuarios adicionales que recibirán la noticia.';
$txt['admin_news_select_excluded_members'] = 'Usuarios Excluidos';
$txt['admin_news_select_excluded_members_desc'] = 'Usuarios que no deben recibir la noticia.';
$txt['admin_news_select_excluded_groups'] = 'Grupos Excluidos';
$txt['admin_news_select_excluded_groups_desc'] = 'Grupos que no recibirán la noticia.';
$txt['admin_news_select_email'] = 'Direcciones Email';
$txt['admin_news_select_email_desc'] = 'Un punto y coma separa la lista de direcciones email a las que debe enviarse la noticia. (p.e. dirección1; dirección2)';
$txt['admin_news_select_override_notify'] = 'Anular cambios de notificación';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'No puedes enviar un mensaje privado a una dirección email. Si continúas toda dirección email introducida será ignorada.\\n\\n¿Estás seguro de que quieres hacerlo?';

$txt['mailqueue_browse'] = 'Ver Cola';
$txt['mailqueue_settings'] = 'Configuración';

$txt['admin_search'] = 'Búsqueda Rápida';
$txt['admin_search_type_internal'] = 'Tarea/Config.';
$txt['admin_search_type_member'] = 'Usuario';
$txt['admin_search_type_online'] = 'Manual Online';
$txt['admin_search_go'] = 'Ir';
$txt['admin_search_results'] = 'Resultados de la Búsqueda';
$txt['admin_search_results_desc'] = 'Resultados para la búsqueda: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Buscar de nuevo';
$txt['admin_search_results_none'] = '¡Ningún resultado encontrado!';

$txt['admin_search_section_sections'] = 'Sección';
$txt['admin_search_section_settings'] = 'Configuración';

$txt['core_settings_title'] = 'Opciones Principales';
$txt['mods_cat_features'] = 'Opciones';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Miscelánea';
$txt['mods_cat_layout'] = 'Diseño';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderación';
$txt['signature_settings_short'] = 'Firmas';
$txt['custom_profile_shorttitle'] = 'Campos del Perfil';
$txt['pruning_title'] = 'Depurar registro';

$txt['boardsEdit'] = 'Modificar Foros';
$txt['mboards_new_cat'] = 'Crear una nueva categoría';
$txt['manage_holidays'] = 'Administrar Festivos';
$txt['calendar_settings'] = 'Configurar el Calendario';
$txt['search_weights'] = 'Pesos';
$txt['search_method'] = 'Método de Búsqueda';

$txt['smiley_sets'] = 'Emoticonos';
$txt['smileys_add'] = 'Añadir un Emoticono';
$txt['smileys_edit'] = 'Editar Emoticonos';
$txt['smileys_set_order'] = 'Establecer orden de Emoticonos';
$txt['icons_edit_message_icons'] = 'Editar Iconos de Mensajes';

$txt['membergroups_new_group'] = 'Añadir Grupo';
$txt['membergroups_edit_groups'] = 'Editar Grupos';
$txt['permissions_groups'] = 'Permisos por Grupo';
$txt['permissions_boards'] = 'Permisos por Foro';
$txt['permissions_profiles'] = 'Editar perfiles';
$txt['permissions_post_moderation'] = 'Moderación de mensajes';

$txt['browse_packages'] = 'Ver Paquetes';
$txt['download_packages'] = 'Descargar Paquetes';
$txt['installed_packages'] = 'Paquetes Instalados';
$txt['package_file_perms'] = 'Permisos de archivo';
$txt['package_settings'] = 'Opciones';
$txt['themeadmin_admin_title'] = 'Administrar e Instalar';
$txt['themeadmin_list_title'] = 'Configuración de Temas';
$txt['themeadmin_reset_title'] = 'Opciones de Usuario';
$txt['themeadmin_edit_title'] = 'Modificar Temas';
$txt['admin_browse_register_new'] = 'Registrar un usuario nuevo';

$txt['search_engines'] = 'Motores de búsqueda';
$txt['spiders'] = 'Arañas';
$txt['spider_logs'] = 'Logs';
$txt['spider_stats'] = 'Estadísticas';

$txt['paid_subscriptions'] = 'Suscripciones de Pago';
$txt['paid_subs_view'] = 'Ver Suscripciones';

?>