<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'No estás autorizado para entrar a esta sección';
$txt['wireless_error_notyet'] = 'Lo sentimos,esta seccion no esta disponible en modo wirelles ahora.';

$txt['mods_only'] = 'Sólo Moderadores pueden usar la función de eliminado directo, por favor elimina este mensaje a través de la función modificar.';
$txt['no_name'] = 'No rellenaste el campo nombre. Es requerido.';
$txt['no_email'] = 'No rellenaste el campo email. Es requerido';
$txt['topic_locked'] = 'Este tema está bloqueado, no estás autorizado para publicar o modificar mensajes...';
$txt['no_password'] = 'Campo contraseña vacío';
$txt['already_a_user'] = 'El nombre de usuario que trataste de registrar ya existe.';
$txt['cant_move'] = 'No estás autorizado para mover temas...';
$txt['login_to_post'] = 'Para publicar debes haber ingresado. Si no tienes todavía una cuenta, <a href="' . $scripturl . '?action=register">regístrate</a>.';
$txt['passwords_dont_match'] = 'No coinciden las contraseñas.';
$txt['register_to_use'] = 'Lo siento, debes estar registrado antes de usar esta función.';
$txt['password_invalid_character'] = 'Carácter inválido en la contraseña';
$txt['name_invalid_character'] = 'Carácter inválido en el nombre.';
$txt['email_invalid_character'] = 'Carácter inválido en el Email.';
$txt['username_reserved'] = 'El nombre de usuario que trataste de registrar contiene el nombre reservado\'%s\'. Por favor intenta otro nombre de usuario.';
$txt['numbers_one_to_nine'] = 'Este campo sólo acepta números del 0-9';
$txt['not_a_user'] = 'El usuario cuyo perfil estás intentando editar no existe.';
$txt['not_a_topic'] = 'Este tema no existe en el foro.';
$txt['not_approved_topic'] = 'Este tema no ha sido aprobado aún.';
$txt['email_in_use'] = 'Esa dirección email (%s) ya está siendo utilizada por un usuario registrado. Si crees que es un error, ve a la página de registro y utiliza recordar contraseña con dicha dirección email.';

$txt['didnt_select_vote'] = 'No seleccionaste una opción del voto.';
$txt['poll_error'] = 'Esa encuesta no existe, o ha sido bloqueada, o intentaste votar más de una vez.';
$txt['members_only'] = 'Este servicio es solo para usuarios...';
$txt['locked_by_admin'] = 'Fue bloqueada por un administrador.  No la puedes desbloquear.';
$txt['not_enough_posts_karma'] = 'Lo siento, no tienes suficientes mensajes para modificar el karma - necesitas al menos %1$d.';
$txt['cant_change_own_karma'] = 'Lo siento, no estás autorizado para modificar tu propio karma.';
$txt['karma_wait_time'] = 'Lo siento, no puedes repetir una acción de karma sin esperar %1$s %2$s.';
$txt['feature_disabled'] = 'Lo siento, esta función ha sido desactivada.';
$txt['cant_access_upload_path'] = '¡No se puede acceder al directorio de los archivos adjuntos!';
$txt['file_too_big'] = 'Tu archivo es demasiado grande. El tamaño máximo permitido para archivos adjuntos es %1$d KB.';
$txt['attach_timeout'] = 'Tu archivo adjunto no se ha podido guardar. Esto puede suceder porque tarda demasiado en subirse o el archivo es más grande de lo que permite el servidor.<br /><br />Por favor consulta al administrador de tu servidor para más información.';
$txt['filename_exists'] = 'Lo siento! Ya hay un archivo adjunto con el mismo nombre de archivo que el que has intentado subir. Por favor renombra el archivo y vuelve a intentarlo.';
$txt['bad_attachment'] = 'Tu archivo adjunto no ha pasado los controles de seguridad y no se puede subir. Por favor consulta a un administrador del foro.';
$txt['ran_out_of_space'] = 'El directorio de uploads está lleno. Por favor intenta un archivo más pequeño y contacta al <a href="mailto:%s">administrador</a>.';
$txt['couldnt_connect'] = 'No se pudo conectar al servidor o no se encontró el archivo';
$txt['no_board'] = 'El foro que especificaste no existe';
$txt['cant_split'] = 'No estás autorizado para dividir temas';
$txt['cant_merge'] = 'No estás autorizado para combinar temas';
$txt['no_topic_id'] = 'Especificaste un ID de tema inválido.';
$txt['split_first_post'] = 'No puedes dividir un tema desde el primer mensaje.';
$txt['topic_one_post'] = 'Este tema sólo contiene un mensaje y no puede ser dividido';
$txt['no_posts_selected'] = 'no se seleccionaron mensajes';
$txt['selected_all_posts'] = 'Imposible dividir. Has seleccionado todos los mensajes.';
$txt['cant_find_messages'] = 'No se encontraron los mensajes';
$txt['cant_find_user_email'] = 'Imposible encontrar la dirección email del usuario.';
$txt['cant_insert_topic'] = 'No se pudo insertar el tema';
$txt['already_a_mod'] = 'Has seleccionado el nombre de usuario de un moderador. Por favor selecciona otro nombre de usuario';
$txt['session_timeout'] = 'Falla al enviar el formulario. La sesión ha expirado.';
$txt['session_verify_fail'] = 'Fallo al verificar la sesión. Por favor intenta cerrar la sesión e ingresar, y prueba de nuevo.';
$txt['verify_url_fail'] = 'Sitio de referencia inválido.';
$txt['guest_vote_disabled'] = 'Los invitados no pueden votar en esta encuesta.';

$txt['cannot_access_mod_center'] = 'No tienes permiso para acceder al Centro de Moderación.';
$txt['cannot_admin_forum'] = 'No estás autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'No estás autorizado para publicar anuncios en este foro.';
$txt['cannot_approve_posts'] = 'No tienes permiso para aprobar elementos.';
$txt['cannot_post_unapproved_attachments'] = 'No tienes permiso para publicar adjuntos no aprobados.';
$txt['cannot_post_unapproved_topics'] = 'No tienes permiso para publicar temas no aprobados.';
$txt['cannot_post_unapproved_replies_own'] = 'No tienes permiso para publicar respuestas no aprobadas a tus temas.';
$txt['cannot_post_unapproved_replies_any'] = 'No tienes permiso para publicar respuestas no aprobadas a temas de otros usuarios.';
$txt['cannot_calendar_edit_any'] = 'No puedes editar los eventos del calendario.';
$txt['cannot_calendar_edit_own'] = 'No tienes los privilegios necesarios para editar tus propios eventos.';
$txt['cannot_calendar_post'] = 'La edición de eventos no está permitida - Lo sentimos.';
$txt['cannot_calendar_view'] = 'Lo sentimos, pero no estás autorizado para ver el calendario.';
$txt['cannot_remove_any'] = 'Lo sentimos, pero no tienes los privilegios para eliminar temas.';
$txt['cannot_remove_own'] = 'No puedes eliminar tus propios temas en este foro.';
$txt['cannot_edit_news'] = 'No estás autorizado para editar los elementos de las noticias en este foro.';
$txt['cannot_pm_read'] = 'Lo sentimos, no estás autorizado para leer tus mensajes personales.';
$txt['cannot_pm_send'] = 'No estás autorizado para enviar mensajes personales.';
$txt['cannot_karma_edit'] = 'No estas autorizado para modificar el karma de otras personas.';
$txt['cannot_lock_any'] = 'No estás autorizado para bloquear temas aquí.';
$txt['cannot_lock_own'] = 'Lo sentimos, pero no puedes bloquear tus propios temas aquí.';
$txt['cannot_make_sticky'] = 'No estás autorizado para fijar este tema.';
$txt['cannot_manage_attachments'] = 'No estás autorizado para administrar archivos adjuntos o avatares.';
$txt['cannot_manage_bans'] = 'No estás autorizado para cambiar la lista de accesos prohibidos.';
$txt['cannot_manage_boards'] = 'No estás autorizado para administrar foros y categorís.';
$txt['cannot_manage_membergroups'] = 'No tienes los permisos necesarios para modificar o asignar grupos de usuarios.';
$txt['cannot_manage_permissions'] = 'No tienes los permisos necesarios para administrar los permisos.';
$txt['cannot_manage_smileys'] = 'No estás autorizado para administrar smileys.';
$txt['cannot_mark_any_notify'] = 'No tienes los permisos necesarios para obtener notificaciones de este tema.';
$txt['cannot_mark_notify'] = 'Lo sentimos, pero no puedes solicitar notificaciones desde este foro.';
$txt['cannot_merge_any'] = 'No estás autorizado para combinar temas en este foro.';
$txt['cannot_moderate_forum'] = 'No estás autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'No está autorizado para moderar este foro';
$txt['cannot_modify_any'] = 'No estás autorizado para modificar mensajes.';
$txt['cannot_modify_own'] = 'Lo sentimos, pero no estás autorizado para editar tus propios mensajes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaje es en respuesta a tu tema, no lo puedes editar.';
$txt['cannot_move_own'] = 'No puedes mover tus propios temas en este foro.';
$txt['cannot_move_any'] = 'No estás autorizado para mover temas en este foro.';
$txt['cannot_poll_add_own'] = 'Lo sentimos, pero no estás autorizado para agregarle encuestas a tus temas en este foro.';
$txt['cannot_poll_add_any'] = 'No puedes agregarle encuestas a este tema.';
$txt['cannot_poll_edit_own'] = 'No puedes editar esta encuesta, aunque sea tuya.';
$txt['cannot_poll_edit_any'] = 'Se te ha denegado el acceso para editar encuestas en este foro.';
$txt['cannot_poll_lock_own'] = 'No estás autorizado para bloquear tus propias encuestas en este foro.';
$txt['cannot_poll_lock_any'] = 'Lo sentimos, pero no estás autorizado para bloquear cualquier encuesta.';
$txt['cannot_poll_post'] = 'No estás autorizado para publicar encuestas en el foro actual.';
$txt['cannot_poll_remove_own'] = 'No tienes los permisos para eliminar esta encuesta de tu tema.';
$txt['cannot_poll_remove_any'] = 'No puedes eliminar encuestas en este foro.';
$txt['cannot_poll_view'] = 'No estás autorizado para ver encuestas en este foro.';
$txt['cannot_poll_vote'] = 'Lo sentimos, pero no puedes votar en las encuestas de este foro.';
$txt['cannot_post_attachment'] = 'No tienes los permisos necesarios para subir archivos adjuntos aquí.';
$txt['cannot_post_new'] = 'Lo sentimos, pero no puedes publicar nuevos temas en este foro.';
$txt['cannot_post_reply_any'] = 'No tienes los permisos necesarios para publicar respuestas a temas en este foro.';
$txt['cannot_post_reply_own'] = 'No estás autorizado para publicar respuestas aún para tus propios temas en este foro.';
$txt['cannot_profile_remove_own'] = 'Lo sentimos, pero no estás autorizado para borrar tu cuenta.';
$txt['cannot_profile_remove_any'] = '¿No tienes los permisos necesarios para eliminar las cuentas de otras personas!';
$txt['cannot_profile_extra_any'] = 'No tienes los permisos necesarios modificar la configuración de otros perfiles.';
$txt['cannot_profile_identity_any'] = 'No estás autorizado para modificar la configuración de otras cuentas.';
$txt['cannot_profile_title_any'] = 'No puedes editar los títulos personalizados de otras personas.';
$txt['cannot_profile_extra_own'] = 'Lo sentimos, pero no tienes los permisos necesarios para editar los datos de tu perfil.';
$txt['cannot_profile_identity_own'] = 'Por el momento, no puedes cambiar tu identidad.';
$txt['cannot_profile_title_own'] = 'No estás autorizado para cambiar tu título personalizado.';
$txt['cannot_profile_server_avatar'] = 'No estás autorizado para utilizar un avatar alojado en el servidor.';
$txt['cannot_profile_upload_avatar'] = 'No tienes permiso para subir un avatar.';
$txt['cannot_profile_remote_avatar'] = 'No tienes el privilegio de usar un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Lo sentimos, pero no puedes ver tu propio perfil.';
$txt['cannot_profile_view_any'] = 'Lo sentimos, pero no puedes ver el perfil de otras personas.';
$txt['cannot_delete_own'] = 'No estás, en este foro, autorizado para borrar tus propios mensajes.';
$txt['cannot_delete_replies'] = 'Lo sentimos, pero no puedes eliminar estos mensajes, aún cuando son respuestas a tu tema.';
$txt['cannot_delete_any'] = 'No está permitido borrar mensajes en este foro.';
$txt['cannot_report_any'] = 'No estás autorizado para reportar mensajes en este foro.';
$txt['cannot_search_posts'] = 'No estás autorizado a buscar mensajes en este foro.';
$txt['cannot_send_mail'] = 'No tienes el privilegio de enviar mails.';
$txt['cannot_issue_warning'] = 'Lo siento, no tienes permiso para advertir a usuarios.';
$txt['cannot_send_topic'] = 'Lo sentimos, pero el administrador ha desactivado la opción de enviar temas en este foro.';
$txt['cannot_split_any'] = 'No está permitido dividir temas en este foro.';
$txt['cannot_view_attachments'] = 'Parece que no estás autorizado para descargar o ver archivos adjuntos en este foro.';
$txt['cannot_view_mlist'] = 'No puedes ver la lista de usuarios, ya que no tienes permisos para ello.';
$txt['cannot_view_stats'] = 'No estás autorizado para ver las estadísticas del foro.';
$txt['cannot_who_view'] = 'Lo sentimos - no tienes los permisos necesarios para ver la lista de usuarios en línea.';

$txt['no_theme'] = 'Ese tema no existe.';
$txt['theme_dir_wrong'] = 'El directorio de defecto de los temas es incorrecto, debe corregirlo haciendo <i>clic</i> en este texto.';
$txt['registration_disabled'] = 'Lo sentimos, el registro de usuarios está actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Lo sentimos, no se ha especificado pregunta secreta para este usuario.';
$txt['poll_range_error'] = 'Lo sentimos, la encuesta debe durar más de 0 días.';
$txt['delFirstPost'] = 'No estás autorizado para borrar el primer post de este tema.<p>Si deseas borrar este tema, haz clic en \'Eliminar Tema\', o pídele a un Administrador/Moderador para que lo borre por tí.</p>';
$txt['parent_error'] = '¡No se pudo crear el foro!';
$txt['login_cookie_error'] = 'No pudiste ingresar.  Por favor revisa la configuración de tus cookies.';
$txt['incorrect_answer'] = 'Lo sentimos, pero no contestaste correctamente tu pregunta secreta.  Haz clic en el botón Atrás para intentar nuevamente, o haz clic en el botón Atrás 2 veces para usar el método por defecto para obtener tu contraseña.';
$txt['no_mods'] = '¡No se encontraron moderadores!';
$txt['parent_not_found'] = 'Estructura corrupta del foro: no se pudo encontrar el foro padre';
$txt['modify_post_time_passed'] = 'No puedes modificar este mensaje ya que el tiempo límite permitido para editar mensajes ha transcurrido.';

$txt['calendar_off'] = 'El calendario está deshabilitado, no puedes accesarlo en este momento.';
$txt['invalid_month'] = 'Mes inválido.';
$txt['invalid_year'] = 'Año inválido.';
$txt['invalid_day'] = 'Día no válido.';
$txt['event_month_missing'] = 'Falta el mes del evento.';
$txt['event_year_missing'] = 'Falta el año del evento.';
$txt['event_day_missing'] = 'Falta el día del evento.';
$txt['event_title_missing'] = 'Falta el título del evento.';
$txt['invalid_date'] = 'Fecha inválida.';
$txt['no_event_title'] = 'No se especificó el título del evento.';
$txt['missing_event_id'] = 'Falta el ID del evento.';
$txt['cant_edit_event'] = 'No estas autorizado para modificar este evento.';
$txt['missing_board_id'] = 'Falta ID del foro.';
$txt['missing_topic_id'] = 'Falta ID del tema.';
$txt['topic_doesnt_exist'] = 'No existe el tema.';
$txt['not_your_topic'] = 'No eres el dueño de este tema.';
$txt['board_doesnt_exist'] = 'El foro no existe.';
$txt['no_span'] = 'La característica de expansión está deshabilitada.';
$txt['invalid_days_numb'] = 'Número inválido de días para expandirse.';

$txt['moveto_noboards'] = '¡No hay foros a donde mover este tema!';

$txt['already_activated'] = 'Tu cuenta ya ha sido previamente activada.';
$txt['still_awaiting_approval'] = 'Tu cuenta está todavía en espera de la aprobación de un administrador.';

$txt['invalid_email'] = 'Email inválido / rango del email.<br />Ejemplo de una dirección de email válida: webmaster@HablaJapones.org.<br />Ejemplo de un rango de dirección email válido: *@*.HablaJapones.org';
$txt['invalid_expiration_date'] = 'La fecha de expiración no es válida';
$txt['invalid_hostname'] = 'Nombre del dominio inválido/ rango del dominio.<br />Ejemplo de un nombre de dominio válido: proxy4.HablaJapones.org<br />Ejemplo de un rango de dominio válido: *.HablaJapones.org';
$txt['invalid_ip'] = 'IP inválido / rango de IPs.<br />Ejemplo de una dirección IP válida: 127.0.0.1<br />Ejemplo de un rango válido de direcciones IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP / Rango de IP inválido.<br />Ejemplo de IP válida: 127.0.0.1<br />Ejemplo de rango de IP válido: 127.0.0.*';
$txt['invalid_username'] = 'Nombre del usuario no encontrado';
$txt['no_ban_admin'] = '¡No puedes prohibirle el acceso a un administrador - Debes degradarlo primero!';
$txt['no_bantype_selected'] = 'No se seleccionó el tipo prohibición de acceso';
$txt['ban_not_found'] = 'No se encontró esta restricción de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restricción desconocida';
$txt['ban_name_empty'] = 'El nombre para banear está en blanco';
$txt['ban_name_exists'] = 'Ya existe ese nombre para banear. Por favor, elige un nombre diferente.';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = 'No se ha seleccionado un foro válido para reciclar temas';

$txt['login_threshold_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar.  Por favor, inténtalo nuevamente más tarde.';
$txt['login_threshold_brute_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar. Por favor, espera 30 segundos e intentalo de nuevo más tarde.';

$txt['who_off'] = 'No puedes accesar la lista de usuarios en línea por el momento, ya que está deshabilitada.';

$txt['merge_create_topic_failed'] = 'Error al intentar crear un nuevo tema.';
$txt['merge_need_more_topics'] = 'El combinar temas necesita de al menos 2 temas para combinar.';

$txt['postWaitTime_broken'] = 'La última publicación desde tu IP fue hace menos de %d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['registerWaitTime_broken'] = '¡Te has registrado hace apenas %d segundos!';
$txt['loginWaitTime_broken'] = 'Tendrás que esperar aproximadamente %d segundos para ingresar nuevamente.';
$txt['pmWaitTime_broken'] = 'El último mensaje privado desde tu IP fue hace menos de %d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['reporttmWaitTime_broken'] = 'El último informe desde tu IP fue hace menos de %d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['sendtopcWaitTime_broken'] = 'El último tema enviado desde tu IP fue hace menos de %d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['sendmailWaitTime_broken'] = 'El último email enviado desde tu IP fue hace menos de %d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['searchWaitTime_broken'] = 'You last search was less than %d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'Debes introducir algo tanto en el título como en el texto del mensaje.';

$txt['topic_gone'] = 'El tema o foro que estás buscando parece que no existe, o fuera de tus límites.';
$txt['theme_edit_missing'] = '¡El archivo que intentas editar... no puede encontrarse!';

$txt['attachments_no_write'] = 'No puede escribirse en el directorio para subir archivos adjuntos.  Tu archivo adjunto o avatar no se pudo guardar.';
$txt['attachments_limit_per_post'] = 'No puedes subir más de %d archivos adjuntos por mensaje';

$txt['no_dump_database'] = 'iexcl;Solamente los administradores pueden hacer respaldos de la base de datos!';
$txt['pm_not_yours'] = 'El mensaje personal que estás tratando de citar no es tuyo o no existe, por favor regresa e intenta nuevamente.';
$txt['mangled_post'] = 'Datos de la forma destrozados - por favor regresa e intenta nuevamente.';
$txt['quoted_post_deleted'] = 'El mensaje que estás intentando no existe, fue eliminado, o ya no lo puedes ver.';
$txt['pm_too_many_per_hour'] = 'Has superado el límite de %d mensaje(s) privado(s) por hora.';
$txt['labels_too_many'] = '¡Lo siento, %s mensajes ya tienen el máximo número de etiquetas permitidas!';

$txt['register_only_once'] = 'Lo sentimos, pero no tienes permitido el registrar múltiples cuentas al mismo tiempo desde la misma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'Debes introducir una dirección postal o fax de contacto si se necesita aprobación de padres/tutores.';

$txt['error_long_name'] = 'El nombre que utilizaste fue muy largo.';
$txt['error_no_name'] = 'No se proporcionó ningún nombre.';
$txt['error_bad_name'] = 'El nombre que enviaste no se pudo utilizar, ya que es un nombre reservado.';
$txt['error_no_email'] = 'No se proporcionó ninguna dirección de email.';
$txt['error_bad_email'] = 'Se proporcionó una dirección de email inválida.';
$txt['error_no_event'] = 'No se proporcionó un nombre de evento.';
$txt['error_no_subject'] = 'No se llenó el asunto.';
$txt['error_no_question'] = '¡La encuesta debe tener una pregunta!';
$txt['error_no_message'] = 'El cuerpo del mensaje se dejó vacío.';
$txt['error_long_message'] = 'El mensaje excede la longitúd máxima permitida (%s caracteres).';
$txt['error_no_comment'] = 'El campo de comentario esta vacio.';
$txt['error_session_timeout'] = 'Tu sesión ha expirado. Por favor, reenvía tu mensaje.';
$txt['error_no_to'] = 'No se especificaron destinatarios.';
$txt['error_bad_to'] = 'No se encontraron uno o mas destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'No se encontraron uno o mas destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = '¡Ya haz enviado previamente este mensaje!  Probablemente hiciste doble-clic, o intentaste refrescar el navegador.';
$txt['error_poll_few'] = '¡Debes tener al menos dos opciones!';
$txt['error_need_qr_verification'] = 'Por favor completa la sección de verificación para enviar tu mensaje.';
$txt['error_wrong_verification_code'] = 'Lo que has tecleado no se corresponde con lo mostrado en la imagen.';
$txt['error_wrong_verification_answer'] = 'No has contestado a las preguntas de verificación correctamente.';
$txt['error_need_verification_code'] = 'Por favor introduce el código de verificación para continuar a los resultados.';
$txt['error_bad_file'] = 'Lo siento, pero el archivo especificado no se pudo abrir: %1$s';
$txt['error_bad_line'] = 'La línea especificada no es válida.';

$txt['smiley_not_found'] = 'No se encontró el smiley.';
$txt['smiley_has_no_code'] = 'No se proporcionó código para este smiley.';
$txt['smiley_has_no_filename'] = 'No se proporcionó el nombre del archivo para este smiley.';
$txt['smiley_not_unique'] = 'Un smiley con ese código ya existe previamente.';
$txt['smiley_set_already_exists'] = 'Un smiley con ese URL ya existe previamente';
$txt['smiley_set_not_found'] = 'No se encontró esa colección de smileys';
$txt['smiley_set_path_already_used'] = 'El URL para esa colección de smileys esta siendo utilizado actualmente por otra colección de smileys.';
$txt['smiley_set_unable_to_import'] = 'No se pudo importar la colección de smileys. El directorio es inválido o no pudo ser accesado.';

$txt['smileys_upload_error'] = 'No se pudo subir el archivo.';
$txt['smileys_upload_error_blank'] = '¡Todos los conjuntos de smileys deben tener una imagen!';
$txt['smileys_upload_error_name'] = '¡Todos los smileys deben tener el mismo nombre de archivo!';
$txt['smileys_upload_error_illegal'] = 'Tipo Ilegal.';

$txt['search_invalid_weights'] = 'Buscar pesos que no estén configurados adecuadamente. Al menos un peso debe estar configurado para que sea diferente de cero. Por favor, informa sobre este error a un administrador.';
$txt['unable_to_create_temporary'] = 'La función de búsqueda no pudo crear tablas temporales.  Por favor, inténtalo nuevamente.';

$txt['package_no_file'] = '¡No se pudo encontrar el archivo!';
$txt['packageget_unable'] = 'No fue posible conectarse al servidor.  Por favor, inténtalo usando <a href="%s" target="_blank">esta URL</a>.';
$txt['not_on_simplemachines'] = 'Lo sentimos, los paquetes solo pueden ser descargados de esta manera del servidor de simplemachines.org.';
$txt['package_cant_uninstall'] = 'Este paquete o nunca fue instalado, o ya ha sido desinstalado previamente - no puedes desinstalarlo ahora.';
$txt['package_cant_download'] = '¡No puedes descargar o instalar nuevos paquetes ya que no se puede escribir en el directorio &quot;Packages&quot;!';
$txt['package_upload_error_nofile'] = 'No has seleccionado un paquete para subir.';
$txt['package_upload_error_failed'] = 'No se ha podido subir el paquete, ¡por favor comprueba los permisos del directorio!';
$txt['package_upload_error_exists'] = 'El archivo que estás subiendo ya existe en el servidor. Por favor, bórralo e inténtalo nuevamente.';
$txt['package_upload_error_supports'] = 'El gestor de paquetes actualmente sólo soporta estos tipos de archivos: %1$s.';
$txt['package_upload_error_broken'] = 'El paquete que estás intentando subir no es un paquete válido o bien está estropeado.';

$txt['package_get_error_not_found'] = 'El paquete que estás intentando instalar no se puede encontrar. Puede que quieras subirlo manualmente a tu directorio &quot;Packages&quot;.';
$txt['package_get_error_missing_xml'] = 'Al paquete que estás intentando instalar le falta el archivo package-info.xml que debe estar en la carpeta principal del paquete.';
$txt['package_get_error_is_zero'] = 'Aunque el paquete se ha subido al servidor, parece estar vacio. Por favor comprueba que el directorio &quot;Packages&quot; y su subdirectorio &quot;temp&quot; son escribibles. Si el problema persiste, intenta extraer el paquete en tu PC y subir los archivos descomprimidos en un subdirectorio dentro de la carpeta &quot;Packages&quot; y prueba de nuevo. Por ejemplo, si el paquete se llama &quot;shout.tar.gz&quot; deberias:<br />1) Descargar el paquete a tu PC local y descomprimirlo.<br />2) Usando un cliente FTP crear un directorio dentro de la carpeta &quot;Packages&quot;, en este ejemplo, la llamarias &quot;shout&quot;.<br />3) Subir todos los archivos que has descomprimido del paquete en tu PC a este directorio.<br />4) Volver al instalador de paquetes y SMF habrá encontrado el paquete automáticamente.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF no pudo encontrar información válida dentro del archivo package-info.xml incluido en el paquete. Puede que haya un error en la modificació, o el paquete esta corrupto.';

$txt['no_membergroup_selected'] = 'No se seleccionó ningún grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'El grupo no existe o no es válido.';

$txt['at_least_one_admin'] = '¡Debe haber por lo menos un administrador en el foro!';

$txt['error_functionality_not_windows'] = 'Lo sentimos, esta funcionalidad no esta disponible para servidores Windows en este momento.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'No se encontró el archivo adjunto';

$txt['error_no_boards_selected'] = '¡No se seleccionó ningún foro válido!';
$txt['error_invalid_search_string'] = '¿Olvidaste escribir lo que se buscará?';
$txt['error_invalid_search_string_blacklist'] = 'Tu consulta contenía demasiadas palabras triviales. Por favor prueba con otra consulta.';
$txt['error_search_string_small_words'] = 'Cada palabra debe tener al menos dos caracteres.';
$txt['error_query_not_specific_enough'] = 'La consulta no es lo suficientemente específica. Por favor, utiliza palabras más largas.';
$txt['error_no_messages_in_time_frame'] = 'No se encontraron mensajes en el tiempo que se especificó';
$txt['error_no_labels_selected'] = '¡Ninguna etiqueta fue seleccionada!';
$txt['error_no_search_daemon'] = 'No se ha podido iniciar el servicio de búsqueda';

$txt['profile_errors_occurred'] = 'Ocurrieron los siguientes errores mientras se intentaba guardar tu perfil';
$txt['profile_error_bad_offset'] = 'La diferencia horaria está fuera de rango';
$txt['profile_error_no_name'] = 'El campo del nombre se dejó en blanco';
$txt['profile_error_name_taken'] = 'El nombre de usuario especificado ya está siendo utilizado por alguien más';
$txt['profile_error_name_too_long'] = 'El nombre seleccionado es demasiado largo. No puede tener mas de 60 caracteres.';
$txt['profile_error_no_email'] = 'El campo de email se dejó en blanco';
$txt['profile_error_bad_email'] = 'No has proporcionado una dirección de email válida';
$txt['profile_error_email_taken'] = 'Otro usuario ya se encuentra registrado con esa dirección de email';
$txt['profile_error_no_password'] = 'No especificaste tu contraseña';
$txt['profile_error_bad_new_password'] = 'Las nuevas contraseñas que especificaste no coinciden';
$txt['profile_error_bad_password'] = 'La contraseña que proporcionaste es incorrecta';
$txt['profile_error_bad_avatar'] = 'El avatar que has seleccionado es muy grande';
$txt['profile_error_password_short'] = 'Tu contraseña debe contener un mínimo de ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caracteres.';
$txt['profile_error_password_restricted_words'] = 'Tu contraseña no debe contener tu usuario, dirección email u otras palabras usuales.';
$txt['profile_error_password_chars'] = 'Tu contraseña debe contener una mezcla de letras mayúsculas y minúsculas, así como números.';
$txt['profile_error_already_requested_group'] = '¡Ya tienes una consulta en curso para ese grupo!';
$txt['profile_error_openid_in_use'] = 'Otro usuario esta usando esa URL de autentificación OpenID';

$txt['mysql_error_space'] = ' - revisa el espacio disponible de la base de datos.';

$txt['icon_not_found'] = 'El icono no se pudo encontrar en el tema por defecto - por favor revisa que la imagen ha sido subida a su respectivo directorio e intenta nuevamente.';
$txt['icon_after_itself'] = '¡El icono no puede colocarse después de sí mismo!';
$txt['icon_name_too_long'] = 'El nombre del inono no puede tener mas de 16 caracteres de largo';

$txt['name_censored'] = 'Lo sentimos, el nombre que intentaste usar, %s, contiene palabras que han sido censuradas.  Por favor intenta con otro nombre.';

$txt['poll_already_exists'] = '¡Un tema solamente puede contener una encuesta asociada!';
$txt['poll_not_found'] = '¡No hay ninguna encuesta asociada a este tema!';

$txt['error_while_adding_poll'] = 'Ocurrieron los siguientes errores al añadir esta encuesta';
$txt['error_while_editing_poll'] = 'Ocurrieron los siguientes errores al editar esta encuesta';

$txt['loadavg_search_disabled'] = 'Debido a la sobrecarga del servidor, la función de búsquedas no está disponible actualmente.';
$txt['loadavg_generic_disabled'] = 'Lo sentimos, debido a la sobrecarga del servidor, esta funciín no está disponible actualmente.';
$txt['loadavg_allunread_disabled'] = 'Los recursos del servidor están sobrecargados como para encontrar todos los temas que no has leído.';
$txt['loadavg_unreadreplies_disabled'] = 'El servidor está sobrecargado. Por favor, inténtalo de nuevo más tarde.';
$txt['loadavg_show_posts_disabled'] = 'Por favor, inténtalo de nuevo más tarde.  Los mesajes de este usuario no están disponibles debido a la sobrecarga del servidor.';
$txt['loadavg_unread_disabled'] = 'The server\'s resources are temporarily under too high a demand to list out the topics you have not read.';

$txt['cannot_edit_permissions_inherited'] = 'No puedes editar permisos inherentes directamente, debes editar el grupo padre o bien la correspondencia del grupo.';

$txt['mc_no_modreport_specified'] = 'Necesitas especificar que informe deseas ver.';
$txt['mc_no_modreport_found'] = 'El informe especificado no existe o está fuera de tus límites';

$txt['st_cannot_retrieve_file'] = 'No se pudo obtener el archivo %1$s.';
$txt['admin_file_not_found'] = 'No se pudo cargar el archivo solicitado: %1$s.';

$txt['themes_none_selectable'] = 'Debe seleccionarse al menos un tema.';
$txt['themes_default_selectable'] = 'El tema por defecto debe ser un tema seleccionable.';
$txt['ignoreboards_disallowed'] = 'La opción para ignorar foros no ha sido habilitada.';

$txt['mboards_delete_error'] = '¡Ninguna categoría seleccionada!';
$txt['mboards_delete_board_error'] = '¡Ningún foro seleccionado!';

$txt['mboards_parent_own_child_error'] = '¡Es imposible convertir un foro en subforo de sí mismo!';
$txt['mboards_board_own_child_error'] = '¡Es imposible convertir un foro en subforo de sí mismo!';

$txt['smileys_upload_error_notwritable'] = 'Los siguientes directorios de emoticonos son tienen permisos de escritura: %1$s';
$txt['smileys_upload_error_types'] = 'La imagen sólo puede tener una de las siguientes extensiones: %1$s.';

$txt['change_email_success'] = 'Tu dirección email ha cambiado, se enviará un nuevo email de activación a dicha dirección.';
$txt['resend_email_success'] = 'Email de activación enviado correctamente.';

$txt['custom_option_need_name'] = '¡La opción del perfil debe tener un nombre!';
$txt['custom_option_not_unique'] = '¡El nombre del campo no es único!';

$txt['warning_no_reason'] = 'Debes introducir una razón para alterar el estado de advertencia de un miembro.';
$txt['warning_notify_blank'] = 'Has seleccionado notificar al usuario pero no rellenaste los campos Asunto/Mensaje.';

$txt['cannot_connect_doc_site'] = 'No se ha podido conectar al Manual Online de Simple Machines. Por favor, comprueba que la configuración de tu servidor permite conexiones externas e inténtalo de nuevo más tarde.';

$txt['movetopic_no_reason'] = 'You must enter a reason for moving the topic, or uncheck the option to \'post a redirection topic\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'El identificador solicitado no devolvió una información apropiada.';
$txt['openid_return_no_mode'] = 'El proveedor de identidad no respondió en el modo Open ID.';
$txt['openid_not_resolved'] = 'El proveedor de identidad no aprobó tu solicitud.';
$txt['openid_no_assoc'] = 'No se pudo encontrar la asociación solicitada con el proveedor de identidad.';
$txt['openid_sig_invalid'] = 'La firma del proveedor de indentidad no es válida.';
$txt['openid_load_data'] = 'No se pudo descargar datos de tu solicitud de conexión. Por favor, inténtalo más tarde.';
$txt['openid_not_verified'] = 'La dirección OpenID dada aún no ha sido verificada. Por favor, conéctate para verificarla.';

$txt['error_custom_field_too_long'] = 'El campo &quot;%1$s&quot; no puede tener una longitud superior a los %1$d caracteres.';
$txt['error_custom_field_invalid_email'] = 'El campo &quot;%1$s&quot; debe ser una dirección de email válida.';
$txt['error_custom_field_not_number'] = 'El campo &quot;%1$s&quot; debe ser numérico.';
$txt['error_custom_field_inproper_format'] = 'El campo &quot;%1$s&quot; tiene un formato no válido.';
$txt['error_custom_field_empty'] = 'El campo &quot;%1$s&quot; no puede ser dejado en blanco.';

$txt['email_no_template'] = 'La plantilla de email &quot;%1$s&quot; no pudo ser encontrada.';

$txt['search_api_missing'] = 'No se pudo encontrar la API de búsqueda. Por favor, contacte con el administrador para que compruebe que se han subido los archivos adecuados.';
$txt['search_api_not_compatible'] = 'La API de búsqueda seleccionada que está usando el foro está obsoleta - volviendo a la búsqueda estándar. Compruebe el archivo %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'No puedes restaurar el primer mensaje de un tema.';
$txt['parent_topic_missing'] = 'El tema padre del mensaje que estás intentando restaurar ha sido eliminado.';
$txt['restored_disabled'] = 'Se ha deshabilitado la restauración de temas.';
$txt['restore_not_found'] = 'The following messages could not be restored; the original topic may have been removed:<ul style="margin-top: 0px;">%1$s</ul>You will need to move these manually.';

$txt['error_invalid_dir'] = 'El directorio introducido no es válido.';

$txt['error_sqlite_optimizing'] = 'Sqlite is optimizing the database, the forum can not be accessed until it has finished.  Please try refreshing this page momentarily.';

?>