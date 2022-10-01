<?php

	//application details
		$apps[$x]['name'] = "Settings";
		$apps[$x]['uuid'] = "b6b1b2e5-4ba5-044c-8a5c-18709a15eb60";
		$apps[$x]['category'] = "Switch";;
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "PBX Settings.";
		$apps[$x]['description']['zh-cn'] = "PBX设置。";
		$apps[$x]['description']['en-gb'] = "PBX Settings.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "PBX Einstellungen.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "PBX Einstellungen.";
		$apps[$x]['description']['es-cl'] = "Configuraciones del PBX";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Confs PBX";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "Centrale intellingen.";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Definições do PBX.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "setting_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "148ea42a-3711-3d64-181b-07a6a3c3ed60";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "setting_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		//$y++;
		//$apps[$x]['permissions'][$y]['name'] = "setting_add";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		//$y++;
		//$apps[$x]['permissions'][$y]['name'] = "setting_delete";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_settings";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "setting_id";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "setting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "numbering_plan";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "event_socket_ip_address";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "event_socket_port";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "event_socket_password";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "event_socket_acl";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "xml_rpc_http_port";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "xml_rpc_auth_realm";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "xml_rpc_auth_user";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "xml_rpc_auth_pass";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "admin_pin";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "mod_shout_decoder";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "mod_shout_volume";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";

?>
