<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Establezca los parámetros de la búsqueda. ';
$txt['choose_board'] = 'Escoge un foro en el que se buscará, o buscar en todos';
$txt['all_words'] = 'Coincidir todas las palabras';
$txt['any_words'] = 'Coincidir con cualquier palabra';
$txt['by_user'] = 'Por usuario';

$txt['search_post_age'] = 'Antiguedad del mensaje';
$txt['search_between'] = 'entre';
$txt['search_and'] = 'y';
$txt['search_options'] = 'Opciones';
$txt['search_show_complete_messages'] = 'Mostrar los resultados como mensajes';
$txt['search_subject_only'] = 'Asuntos de temas solamente';
$txt['search_relevance'] = 'Relevancia';
$txt['search_date_posted'] = 'Fecha en que se publicó';
$txt['search_order'] = 'Orden de búsqueda ';
$txt['search_orderby_relevant_first'] = 'Resultados más importantes primero';
$txt['search_orderby_large_first'] = 'Temas más largos primero';
$txt['search_orderby_small_first'] = 'Temas más pequeños primero';
$txt['search_orderby_recent_first'] = 'Temas más recientes primero';
$txt['search_orderby_old_first'] = 'Temas más antiguos primero';
$txt['search_visual_verification_label'] = 'Verificación';
$txt['search_visual_verification_desc'] = 'Por favor, introduzca el código que aparece en la imagen de arriba para usar la búsqueda.';

$txt['search_specific_topic'] = 'Buscando solamente mensajes en el tema';

$txt['mods_cat_search'] = 'Buscar';
$txt['groups_search_posts'] = 'Grupos con acceso a las búsquedas';
$txt['simpleSearch'] = 'Activar búsqueda simple';
$txt['search_results_per_page'] = 'Número de resultados de la búsqueda por página';
$txt['search_weight_frequency'] = 'Peso relativo de la búsqueda para el número de mensajes encontrados dentro de un tema';
$txt['search_weight_age'] = 'Peso relativo de la búsqueda para la edad del último mensaje encontrado';
$txt['search_weight_length'] = 'Peso relativo de la búsqueda para el tamaño del tema';
$txt['search_weight_subject'] = 'Peso relativo de la búsqueda para los resultados que se encuentren en el asunto';
$txt['search_weight_first_message'] = 'Peso relativo de la búsqueda para cuando el resultado se encuente en el primer mensaje';
$txt['search_weight_sticky'] = 'Peso de búsqueda relativo para un hilo fijado';

$txt['search_settings_desc'] = 'Aquí puedes cambiar la configuración básica de la función de búsqueda.';
$txt['search_settings_title'] = 'Función de búsqueda - configuración';

$txt['search_weights_desc'] = 'Aquí puedes cambiar los componentes individuales de la puntuación relevante. ';
$txt['search_weights_title'] = 'Búsqueda - pesos';
$txt['search_weights_total'] = 'Total';
$txt['search_weights_save'] = 'Guardar';

$txt['search_method_desc'] = 'Aquí puedes establecer el método en que la búsqueda es realizada.';
$txt['search_method_title'] = 'Búsqueda - método';
$txt['search_method_save'] = 'Guardar';
$txt['search_method_messages_table_space'] = 'Espacio usado por los mensajes del foro en la base de datos';
$txt['search_method_messages_index_space'] = 'Espacio usado para indexar los mensajes en la base de datos';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'índice Fulltext';
$txt['search_method_no_index_exists'] = 'no existe actualmente';
$txt['search_method_fulltext_create'] = 'crear un índice fulltext';
$txt['search_method_fulltext_cannot_create'] = 'no se puede crear porque el tamaño máximo del mensaje es 65.535';
$txt['search_method_index_already_exists'] = 'ya está creado';
$txt['search_method_fulltext_remove'] = 'eliminar índice fulltext';
$txt['search_method_index_partial'] = 'parcialmente creado';
$txt['search_index_custom_resume'] = 'reanudar';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '¡Para que puedas usar la búsqueda fulltext, debes crear primero un índice fulltext!';

$txt['search_index'] = 'Índice de búsqueda';
$txt['search_index_none'] = 'No hay índice';
$txt['search_index_custom'] = 'Índice personalizado';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'El panel de administrador sólo permite alternar entre índices de búsqueda. Para ajustar otras configuraciones de Sphinx, utilice la herramienta sphinx_config.php.';
$txt['search_index_label'] = 'Índice';
$txt['search_index_size'] = 'Tamaño';
$txt['search_index_create_custom'] = 'crear índice personalizado';
$txt['search_index_custom_remove'] = 'eliminar índice personalizado';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Para que sea posible usar un índice de búsqueda personalizado, primero tendrás que crear un índice personalizado';

$txt['search_force_index'] = 'Forzar el uso de un índice de búsqueda';
$txt['search_match_words'] = 'Sólo coincidencia de palabras completas';
$txt['search_max_results'] = 'Número máximo de resultados a mostrar';
$txt['search_max_results_disable'] = '(0: ilimitados)';
$txt['search_floodcontrol_time'] = 'Tiempo requerido entre búsquedas del mismo usuario';
$txt['search_floodcontrol_time_desc'] = '(tiempo en segundos, y 0 para desactivar)';

$txt['search_create_index'] = 'Crear índice';
$txt['search_create_index_why'] = '¿Por qué crear un índice de búsqueda?';
$txt['search_create_index_start'] = 'Crear';
$txt['search_predefined'] = 'Perfil predefinido';
$txt['search_predefined_small'] = 'Índice pequeño';
$txt['search_predefined_moderate'] = 'Índice moderado';
$txt['search_predefined_large'] = 'Índice grande';
$txt['search_create_index_continue'] = 'Continuar';
$txt['search_create_index_not_ready'] = 'SMF está creando actualmente un índice de búsqueda de tus mensajes. Para evitar sobrecargar tu servidor, el proceso ha sido detenido temporalmente. Debería continuar automáticamente en unos pocos segundos. Si no lo hace, por favor haz clic en el enlace de continuar de debajo.';
$txt['search_create_index_progress'] = 'Progreso';
$txt['search_create_index_done'] = '¡Índice de búsqueda personalizado creado!';
$txt['search_create_index_done_link'] = 'Continuar';
$txt['search_double_index'] = 'Actualmente tienes creados dos índices en la tabla de mensajes. Para un mejor rendimiento es recomendable que elimines uno de ellos.';

$txt['search_error_indexed_chars'] = 'Número incorrecto de caracteres indexados. Son necesarios al menos 3 caracteres para un índice útil.';
$txt['search_error_max_percentage'] = 'Porcentaje incorrecto de palabras a ser saltadas. Usa un valor de al menor el 5%.';
$txt['error_string_too_long'] = 'La cadena de búsqueda debe tener menos de %1$d caracteres de longitud.';

$txt['search_adjust_query'] = 'Ajustar parámetros de búsqueda';
$txt['search_adjust_submit'] = 'Por favor, revise la búsqueda';
$txt['search_did_you_mean'] = 'Puede que hayas intentado buscar por';

$txt['search_example'] = '<em>p.e.</em> "Rebelión en la Granja" de Orwell -película';

$txt['search_engines_description'] = 'Desde esta sección pudes decidir en qué detalle quieres seguir los motores de búsqueda a medida que indexan tu foro, así como revisar los registros del motor de búsqueda.';
$txt['spider_mode'] = 'Nivel de seguimiento del motor de búsqueda<div class="smalltext">Ten en cuenta que un nivel de seguimiento alto incrementa los requerimientos de recursos del servidor.</div>';
$txt['spider_mode_off'] = 'Deshabilitado';
$txt['spider_mode_standard'] = 'Estándar - Registra actividad de arañas mínima.';
$txt['spider_mode_high'] = 'Alto - Proporciona estadísticas más precisas.';
$txt['spider_mode_vhigh'] = 'Muy alto - Igual que el &quot;Alto&quot; pero registra datos acerca de cada página visitada.';
$txt['spider_settings_desc'] = 'Puedes cambiar la configuración deñ seguimiento de las arañas desde esta página. Ten en cuenta que si quieres activar la purga automática de los registros de hit puedes establecer esto <a href="%1$s">aquí</a>';

$txt['spider_group'] = 'Aplicar permisos restrictivos del grupo<div class="smalltext">Para permitirte impedir que las arañas indexen ciertas páginas.</div>';
$txt['spider_group_none'] = 'Desactivado';

$txt['show_spider_online'] = 'Mostrar arañas en la lísta de gente en línea';
$txt['show_spider_online_no'] = 'No, en absoluto';
$txt['show_spider_online_summary'] = 'Mostrar la cantidad de arañas';
$txt['show_spider_online_detail'] = 'Mostrar detalles de las arañas';
$txt['show_spider_online_detail_admin'] = 'Mostrar detalles de las arañas - sólo a admins';

$txt['spider_name'] = 'Nombre de la araña';
$txt['spider_last_seen'] = 'Última vez vista';
$txt['spider_last_never'] = 'Nunca';
$txt['spider_agent'] = 'Agente de usuario';
$txt['spider_ip_info'] = 'Direcciones IP';
$txt['spiders_add'] = 'Añadir una nueva araña';
$txt['spiders_edit'] = 'Editar araña';
$txt['spiders_remove_selected'] = 'Eliminar arañas seleccionadas';
$txt['spider_remove_selected_confirm'] = '¿Estás seguro de que quieres eliminar estas arañas\\n\\n¡Se borrarán también todas las estadísticas asociadas!';
$txt['spiders_no_entries'] = 'No hay arañas configuradas actualmente.';

$txt['add_spider_desc'] = 'Desde esta página puedes editar los parámetros por los que una araña es categorizada. Si el agente de usuario de un invitado o su dirección IP coincide con las introducidas a continuación será detectado como una araña de motor de búsqueda y seguida de acuerdo a las preferencias del foro.';
$txt['spider_name_desc'] = 'Nombre por el que la araña será referenciada.';
$txt['spider_agent_desc'] = 'Agente de usuario asociado con esta araña.';
$txt['spider_ip_info_desc'] = 'Lista separada por comas de las direcciones IP asociadas con esta araña.';

$txt['spider'] = 'Araña';
$txt['spider_time'] = 'Hora';
$txt['spider_viewing'] = 'Viendo';
$txt['spider_logs_empty'] = 'No hay registros de arañas actualmente.';
$txt['spider_logs_info'] = 'Ten en cuenta que registrar cada acción de las arañas sólo ocurrirá si el seguimiento se establece como &quot;alto&quot; o &quot;muy alto&quot;. El detalle de todas las acciones de las arañas sólo es registrado si el seguimiento se establece como &quot;muy alto&quot;.';
$txt['spider_disabled'] = 'Desactivado';

$txt['spider_logs_delete'] = 'Eliminar entradas';
$txt['spider_logs_delete_older'] = 'Eliminar todas las entradas con más de';
$txt['spider_logs_delete_day'] = 'días.';
$txt['spider_logs_delete_submit'] = 'Borrar';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = '¿Estás seguro de que quieres eliminar todas las entradas del registro?';

$txt['spider_stats_select_month'] = 'Saltar al mes';
$txt['spider_stats_page_hits'] = 'Hits de página';
$txt['spider_stats_no_entries'] = 'No hay estadísticas de arañas disponibles actualmente.';

?>