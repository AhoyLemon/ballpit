<?php
// Version: 2.0; ManageMaintenance

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['repair_zero_ids'] = 'Temas y/o mensajes encontrados con ID igual a 0.';
$txt['repair_missing_topics'] = 'El mensaje #%d está en el tema inexistente  #%d.';
$txt['repair_missing_messages'] = 'El tema #%d no contiene mensajes (reales).';
$txt['repair_stats_topics_1'] = 'En el tema #%d el primer mensaje tiene la ID %d, que es incorrecta.';
$txt['repair_stats_topics_2'] = 'En el tema #%d el último mensaje tiene la ID %d, que es incorrecta.';
$txt['repair_stats_topics_3'] = 'El tema #%d tiene un número incorrecto de respuestas, %d.';
$txt['repair_stats_topics_4'] = 'El tema #%d tiene un número incorrecto de mensajes no aprobados, %d.';
$txt['repair_stats_topics_5'] = 'El tema #%d tiene activada la bandera de aprobación erróneamente.';
$txt['repair_missing_boards'] = 'El tema #%d está en el foro #%d, que no existe.';
$txt['repair_missing_categories'] = 'El foro #%d está en la categoría #%d, que no existe.';
$txt['repair_missing_posters'] = 'El mensaje #%d fue escrito por el usuario #%d, que no existe.';
$txt['repair_missing_parents'] = 'El foro #%d es un hijo del foro #%d, que no existe.';
$txt['repair_missing_polls'] = 'El tema #%d está asociado a una encuesta que no existe, la #%d.';
$txt['repair_polls_missing_topics'] = 'La encuesta #%1$d está asociada al tema inexistente #%2$d. ';
$txt['repair_missing_calendar_topics'] = 'El evento #%d está asociado al tema #%d, que no existe.';
$txt['repair_missing_log_topics'] = 'El tema #%d está marcado como leído para uno o más usuarios, pero no existe.';
$txt['repair_missing_log_topics_members'] = 'El usuario #%d tiene marcado uno o más temas como leídos, pero este usuario no existe.';
$txt['repair_missing_log_boards'] = 'El foro #%d está marcado como leído para uno o más usuarios, pero no existe.';
$txt['repair_missing_log_boards_members'] = 'El usuario #%d tiene marcado uno o más foros como leídos, pero este usuario no existe.';
$txt['repair_missing_log_mark_read'] = 'El foro #%d está marcado como leído por una o más personas, pero no existe.';
$txt['repair_missing_log_mark_read_members'] = 'El usuario #%d tiene marcado uno o más foros como leídos, pero este usuario no existe.';
$txt['repair_missing_pms'] = 'El mensaje privado #%d ha sido enviado a una o más personas, pero no existe.';
$txt['repair_missing_recipients'] = 'El usuario #%d ha recibido uno o más mensajes privados, pero no existe.';
$txt['repair_missing_senders'] = 'El mensaje privado #%d fue enviado por el miembro #%d, que no existe.';
$txt['repair_missing_notify_members'] = 'Se han requerido notificaciones por el usuario #%d, que no existe.';
$txt['repair_missing_cached_subject'] = 'El asunto del tema #%d no está guardado actualmente en la caché de asuntos.';
$txt['repair_missing_topic_for_cache'] = 'La palabra cacheada \'%s\' está asociada a un tema no existente.';
$txt['repair_missing_log_poll_member'] = 'La encuesta #%1$d ha recibido votos del usuario #%2$d , que no existe en estos momentos.';
$txt['repair_missing_log_poll_vote'] = 'Un voto fue emitido por el usuario #%1$d en una encuesta inexistente #%2$d.';
$txt['repair_missing_thumbnail_parent'] = 'Existe una miniatura llamada %s, pero no tiene padre.';
$txt['repair_report_missing_comments'] = 'El informe #%d del tema: &quot;%s&quot; no tiene comentarios.';
$txt['repair_comments_missing_report'] = 'El comentario del informe #%d enviado por %s no tiene un informe relacionado.';
$txt['repair_group_request_missing_member'] = 'Aún exste una petición de membresía para el usuario #%d, que ha sido borrado.';
$txt['repair_group_request_missing_group'] = 'Aún exste una petición de membresía para el grupo #%d, que ha sido borrado.';

$txt['repair_currently_checking'] = 'Comprobando: &quot;%1$s&quot;';
$txt['repair_currently_fixing'] = 'Arreglando: &quot;%1$s&quot;';
$txt['repair_operation_zero_topics'] = 'Los temas con id_topic incorrectamente establecido a cero';
$txt['repair_operation_zero_messages'] = 'Mensajes con id_msg incorrectamente establecido a cero';
$txt['repair_operation_missing_topics'] = 'Mensajes con entradas en temas desaparecidos';
$txt['repair_operation_missing_messages'] = 'Temas sin ningún mensaje';
$txt['repair_operation_stats_topics'] = 'Temas cuya primera o última entrada de mensaje es incorrecta';
$txt['repair_operation_stats_topics2'] = 'Temas con un número incorrecto de respuestas';
$txt['repair_operation_stats_topics3'] = 'Temas con un conteo de posts no aprobados incorrecto';
$txt['repair_operation_missing_boards'] = 'Temas en un foro inexistente';
$txt['repair_operation_missing_categories'] = 'Foros en una categoría inexistente';
$txt['repair_operation_missing_posters'] = 'Mensajes enlazados a miembros inexistentes';
$txt['repair_operation_missing_parents'] = 'Foros hijos con padre inexistente';
$txt['repair_operation_missing_polls'] = 'Temas enlazados a encuestas inexistenetes';
$txt['repair_operation_missing_calendar_topics'] = 'Eventos enlazados a temas inexistentes';
$txt['repair_operation_missing_log_topics'] = 'Logs de temas enlazados a temas inexistentes';
$txt['repair_operation_missing_log_topics_members'] = 'Logs de temas enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_boards'] = 'Logs de foros enlazados a foros inexistentes';
$txt['repair_operation_missing_log_boards_members'] = 'Logs de foros enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_mark_read'] = 'Datos marcados como leídos enlazados a foros inexistentes';
$txt['repair_operation_missing_log_mark_read_members'] = 'Datos marcados como leídos enlazados a usuarios inexistentes';
$txt['repair_operation_missing_pms'] = 'Receptores de MP a los que les falta el mensaje privado principal';
$txt['repair_operation_missing_recipients'] = 'Receptores de MP enlazados a usuarios inexistentes';
$txt['repair_operation_missing_senders'] = 'Mensajes privados enlazados a usuarios inexistentes';
$txt['repair_operation_missing_notify_members'] = 'Logs de notificaciones enlazados a un miembro inexistente';
$txt['repair_operation_missing_cached_subject'] = 'Temas a los que les faltan sus entradas a la caché de búsqueda';
$txt['repair_operation_missing_topic_for_cache'] = 'Entradas a la caché de busqueda enlazados a temas inexistentes';
$txt['repair_operation_missing_member_vote'] = 'Votos de encuestas enlazados a usuarios inexistentes';
$txt['repair_operation_missing_log_poll_vote'] = 'Votos de encuestas enlazados a encuestas inexistentes';
$txt['repair_operation_report_missing_comments'] = 'Informes de temas sin ningún comentario';
$txt['repair_operation_comments_missing_report'] = 'Comentarios de informes a los que les falta el informe del tema';
$txt['repair_operation_group_request_missing_member'] = 'Peticiones de membresía a las que les falta el miembro que las hace';
$txt['repair_operation_group_request_missing_group'] = 'Peticiones de membresía para un grupo inexistente';

$txt['salvaged_category_name'] = 'Área de salvamento';
$txt['salvaged_category_error'] = '¡No se pudo crear la categoría Área de Salvamento!';
$txt['salvaged_board_name'] = 'Temas salvados';
$txt['salvaged_board_description'] = 'Temas creados para mensajes a los que les faltaba el tema';
$txt['salvaged_board_error'] = '¡No se pudo crear el foro de temas salvados!';
$txt['salvaged_poll_topic_name'] = 'Encuesta rescatada';
$txt['salvaged_poll_message_body'] = 'Se descubrió esta encuesta sin ningún tema asociado.';

$txt['database_optimize'] = 'Optimizar base de datos';
$txt['database_numb_tables'] = 'Su base de datos contiene  %d tablas.';
$txt['database_optimize_attempt'] = 'Tratando de optimizar su BD...';
$txt['database_optimizing'] = 'Optimizando %1$s... %2$01.2f kb optimizados.';
$txt['database_already_optimized'] = 'Todas las tablas han sido ya optimizadas.';
$txt['database_opimize_unneeded'] = 'No fue necesario optimiar ninguna tabla.';
$txt['database_optimized'] = ' tabla(s) optimizadas.';
$txt['database_no_id'] = 'tiene una ID de usuario inexistente';

$txt['apply_filter'] = 'Aplicar filtro';
$txt['applying_filter'] = 'Aplicanddo filtro';
$txt['filter_only_member'] = 'Mostrar sólo los mensajes de error de este usuario';
$txt['filter_only_ip'] = 'Mostrar sólo los mensajes de error de esta dirección IP';
$txt['filter_only_session'] = 'Mostrar sólo los mensajes de error de esta sesión';
$txt['filter_only_url'] = 'Mostrar sólo los mensajes de error de esta URL';
$txt['filter_only_message'] = 'Mostrar sólo los mensajes de error con este mensaje';
$txt['session'] = 'Sesión';
$txt['error_url'] = 'URL de la página causante del error';
$txt['error_message'] = 'Mensaje de Error';
$txt['clear_filter'] = 'Limpiar filtro';
$txt['remove_selection'] = 'Eliminar selección';
$txt['remove_filtered_results'] = 'Eliminar todos los resultados filtrados';
$txt['sure_about_errorlog_remove'] = '¿Está seguro de que quiere eliminar todos los mensajes de error?';
$txt['reverse_direction'] = 'Orden cronológico inverso de la lista';
$txt['error_type'] = 'Tipo de error';
$txt['filter_only_type'] = 'Mostrar sólo los errores de este tipo';
$txt['filter_only_file'] = 'Mostrar sólo los errores de este archivo';
$txt['apply_filter_of_type'] = 'Aplicar filtro del tipo';

$txt['errortype_all'] = 'Todos los errores';
$txt['errortype_general'] = 'Generales';
$txt['errortype_general_desc'] = 'Errores generales que no han sido categorizados dentro de otro tipo';
$txt['errortype_critical'] = '<span style="color:red;">Críticos</span>';
$txt['errortype_critical_desc'] = 'Errores críticos.  Estos deberían ser revisados tan rápido como sea posible.  Ignorar estos errores puede hacer que su foro falle, y probablemente comprometa la seguridad del mismo';
$txt['errortype_database'] = 'Base de datos';
$txt['errortype_database_desc'] = 'Errores causados por consultas a la BD defectuosas.  Deberían ser revisados e informados al equipo de SMF.';
$txt['errortype_undefined_vars'] = 'Indefinidos';
$txt['errortype_undefined_vars_desc'] = 'Errores causados por el uso de variables, índices u offsets indefinidos.';
$txt['errortype_template'] = 'Plantillas';
$txt['errortype_template_desc'] = 'Errores relacionados con la carga de plantillas.';
$txt['errortype_user'] = 'Usuario';
$txt['errortype_user_desc'] = 'Errores causados por los usuarios.  Incluyen contraseñas incorrectas, intentos de acceso cuando se está baneado e intentos de realizar acciones para las que no se tienen permisos.';

$txt['maintain_recount'] = 'Volver a contar los totales y las estadísticas de todos los foros';
$txt['maintain_recount_info'] = 'Si el total de respuestas de un tema o el número de MPs en tu bandeja de entrada son incorrectos, esta función recontará todos los conteos y estadísticas guardados.';
$txt['maintain_errors'] = 'Encontrar y reparar cualquier error';
$txt['maintain_errors_info'] = 'Si, por ejemplo, faltan posts o mensajes tras una caíde del servidor, esta función puede ayudar a encontrarlos de nuevo.';
$txt['maintain_logs'] = 'Vaciar logs poco importantes';
$txt['maintain_logs_info'] = 'Esta función vaciará todos los registros poco importantes. No debería ser usada a menos que sea necesario, aunque no dañará nada.';
$txt['maintain_cache'] = 'Vaciar la caché de ficheros';
$txt['maintain_cache_info'] = 'Si, por cualquier razón, el archivo de caché necesita ser limpiado, este es el enlace que necesitas.';
$txt['maintain_optimize'] = 'Optimizar todas las tablas';
$txt['maintain_optimize_info'] = 'Esta tarea te permite optimizar todas las tablas. Esto se librará de todos los desbordamientos, haciendo las tablas más pequeñas y por tanto tu foro más rápido.';
$txt['maintain_version'] = 'Comprobar todos los ficheros contra las versiones actuales';
$txt['maintain_version_info'] = 'Esta tares de mantenimoento te permite realizar una comprobación de versión detallada de todos los archivos de tu foro contra la lista oficial de las últimas versiones.';
$txt['maintain_run_now'] = 'Ejecutar tarea ahora';
$txt['maintain_return'] = 'Volver al mantenimiento del foro';

$txt['maintain_backup'] = 'Hacer copia de seguridad de la BD';
$txt['maintain_backup_info'] = 'Descarga una copia de seguridad de la base de datos de tus foros en caso de emergencia.';
$txt['maintain_backup_struct'] = 'Guardar la estructura de tablas.';
$txt['maintain_backup_data'] = 'Guardar los datos de las tablas (lo que de verdad importa).';
$txt['maintain_backup_gz'] = 'Comprimir el archivo con gzip.';
$txt['maintain_backup_save'] = 'Descargar';

$txt['maintain_old'] = 'Eliminar posts antiguos';
$txt['maintain_old_since_days1'] = 'Eliminar todos los temas en los que no hay posts nuevos desde hace ';
$txt['maintain_old_since_days2'] = ' días, que son:';
$txt['maintain_old_nothing_else'] = 'Cualquier tipo de tema.';
$txt['maintain_old_are_moved'] = 'Avisos de temas movidos.';
$txt['maintain_old_are_locked'] = 'Cerrados.';
$txt['maintain_old_are_not_stickied'] = 'Pero no contar los temas fijados.';
$txt['maintain_old_all'] = 'Todos los foros';
$txt['maintain_old_choose'] = 'Elegir foros específicos';
$txt['maintain_old_remove'] = 'Eliminar ahora';
$txt['maintain_old_confirm'] = '¿Está seguro de que quiere borrar los posts antiguos ahora?\\n\\n¡Esto no puede ser deshecho!';

$txt['maintain_members'] = 'Eliminar usuarios inactivos';
$txt['maintain_members_ungrouped'] = 'Usuarios desagrupados <span class="smalltext">(Usuarios sin grupo asignado)</span>';
$txt['maintain_members_since1'] = 'Eliminar todos los usuarios que no han';
$txt['maintain_members_since2'] = 'durante';
$txt['maintain_members_since3'] = 'días.';
$txt['maintain_members_activated'] = 'activado su cuenta';
$txt['maintain_members_logged_in'] = 'accedido';
$txt['maintain_members_all'] = 'Todos los grupos de usuarios';
$txt['maintain_members_choose'] = 'Grupos seleccionados';
$txt['maintain_members_confirm'] = '¿Está seguro de que quiere borrar esas cuentas de usuario?\\n\\n¡Esto no puede ser deshecho!';

$txt['utf8_title'] = 'Convertir la BD y los datos a UTF-8';
$txt['utf8_introduction'] = 'UTF-8 es un juego de caracteres internacional que cubre práacticamente todos los idiomas del mundo. Convertir su BD y sus datos a UTF-8 puede hacer más fácil el soporte de múltiples idiomas en el mismo foro. También puede mejorar las capacidades de búsqueda y clasificación para idiomas con caracteres no latinos.';
$txt['utf8_warning'] = 'Si quiere convertir sus datos y BD a UTF-8, tenga en cuenta lo siguiente:
<ul class="normallist">
	<li>¡Convertir juegos de caracteres puede ser <em>dañino</em> para sus datos! Asegúrese de que ha hecho una copia de seguridad de su BD <i>antes</i> de la conversión.</li>
	<li>Debido a que UTF-8 es un juego de caracteres más rico que la mayoría de los demás, no hay retorno, a menos que restaure la BD que guardó antes de la conversión (todos los cambios posteriores se perderían).</li>
	<li>Después de convertir sus datos y BD a, necesitará archivos de idioma compatibles con UTF-8.</li>
</ul>';
$txt['utf8_charset_not_supported'] = 'La conversín desde %s a UTF-8 no está soportada.';
$txt['utf8_detected_charset'] = 'Basándonos en su archivo de idioma por defecto (\'%1$s\'), el juego de caracteres más adecuado para sus datos sería \'%2$s\'.';
$txt['utf8_already_utf8'] = 'Su BD y sus datos paracen estar ya configurados como datos UTF-8. No es necesaria la conversión.';
$txt['utf8_source_charset'] = 'Juego de caracteres de los datos';
$txt['utf8_proceed'] = 'Proceder';
$txt['utf8_database_charset'] = 'Juego de caracteres de la base de datos';
$txt['utf8_target_charset'] = 'Convertir datos y BD a';
$txt['utf8_utf8'] = 'UTF-8';
$txt['utf8_db_version_too_low'] = 'La versión de MySQL que su servidor de base de datos usa no es lo suficientemente alta para soportar UTF-8 adecuadamente. Como mínimo se requiere una versión 4.1.2.';
$txt['utf8_cannot_convert_fulltext'] = 'Tu tabla de mensajes está usando un índice fulltext para las búsquedas. No puedes convertirla a UTF-8 hasta que ese índice sea eliminado. Puedes recrearlo más adelante, una vez que la conversión se haya completado.';

$txt['entity_convert_title'] = 'Convertir entidades-HTML a caracteres UTF-8';
$txt['entity_convert_only_utf8'] = 'La base de datos debe estar codificada en formato UTF-8 antes de que las entidades-HTML puedan ser convertidas a UTF-8';
$txt['entity_convert_introduction'] = 'Esta función convertirá todos los caracteres almacenados en la BD como entidades-HTML en caracteres UTF-8. Esto es especialmente útil cuando acaba de convertir su foro desde un juego de caracteres como ISO-8859-1 mientras que usaba caracteres no latinos en el foro. El navegador entonces envía todos los caracteres como entidades-HTML. Por ejemplo, la entidad-HTML &amp;#945; representa la letra griega &#945; (alpha). Convertir entidades a UTF-8 mejorará la búsqueda y la clasificación de texto y reducirá el tamaño de los datos almacenados.';
$txt['entity_convert_proceed'] = 'Proceder';

// Move topics out.
$txt['move_topics_maintenance'] = 'Mover temas';
$txt['move_topics_select_board'] = 'Seleccionar foro';
$txt['move_topics_from'] = 'Mover temas desde';
$txt['move_topics_to'] = 'hacia';
$txt['move_topics_now'] = 'Mover ahora';
$txt['move_topics_confirm'] = '¿Está seguro de que quiere mover TODOS los temas desde &quot;%board_from%&quot; hacia &quot;%board_to%&quot;?';

$txt['maintain_reattribute_posts'] = 'Volver a adjudicar posts de usuario';
$txt['reattribute_guest_posts'] = 'Adjudicar posts de invitado hechos con';
$txt['reattribute_email'] = 'Dirección de email de';
$txt['reattribute_username'] = 'Nombre de usuario de';
$txt['reattribute_current_member'] = 'Adjudicar posts al usuario';
$txt['reattribute_increase_posts'] = 'Añadir posts a los usuarios con un conteo de posts';
$txt['reattribute'] = 'Adjudicar';
// Don't use entities in the below string.
$txt['reattribute_confirm'] = '¿Está seguro de que quiere atribuir todos los posts de invitado con %type% "%find%" al usuario "%member_to%"?';
$txt['reattribute_confirm_username'] = 'nombre de usuario';
$txt['reattribute_confirm_email'] = 'dirección de email';
$txt['reattribute_cannot_find_member'] = 'No se pudo encontrar ese usuario para atribuirle los posts.';

?>