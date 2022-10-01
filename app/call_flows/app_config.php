<?php

	//application details
		$apps[$x]['name'] = "Call Flows";
		$apps[$x]['uuid'] = "b1b70f85-6b42-429b-8c5a-60c8b02b7d14";
		$apps[$x]['category'] = "";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Direct calls between two destinations by calling a feature code.";
		$apps[$x]['description']['zh-cn'] = "通过调用特征代码在两个目的地之间直接调用。";
		$apps[$x]['description']['en-gb'] = "Direct calls between two destinations by calling a feature code.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Anrufe zwischen zwei Ziele anhand eines Funktions-Codes steuern.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Anrufe zwischen zwei Ziele anhand eines Funktions-Codes steuern.";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "Directe oproepen tussen twee bestemmingen via een feature code.";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "call_flows";
		$apps[$x]['destinations'][$y]['name'] = "call_flows";
		$apps[$x]['destinations'][$y]['sql'] = "select call_flow_name as name, call_flow_uuid as uuid, call_flow_extension as destination, call_flow_context as context from v_call_flows ";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and call_flow_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "call_flow_name asc";
		$apps[$x]['destinations'][$y]['field']['call_flow_uuid'] = "call_flow_uuid";
		$apps[$x]['destinations'][$y]['field']['name'] = "call_flow_name";
		$apps[$x]['destinations'][$y]['field']['destination'] = "destination";
		$apps[$x]['destinations'][$y]['field']['extension'] = "destination";
		$apps[$x]['destinations'][$y]['field']['context'] = "context";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${name}";
		$y++;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "call_flows";
		$apps[$x]['destinations'][$y]['name'] = "call_flows";
		$apps[$x]['destinations'][$y]['sql'] = "select call_flow_name as name, call_flow_uuid as uuid, call_flow_extension as extension, call_flow_feature_code as destination, call_flow_context as context from v_call_flows ";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and call_flow_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "call_flow_extension asc";
		$apps[$x]['destinations'][$y]['field']['uuid'] = "uuid";
		$apps[$x]['destinations'][$y]['field']['name'] = "name";
		$apps[$x]['destinations'][$y]['field']['destination'] = "destination";
		$apps[$x]['destinations'][$y]['field']['extension'] = "extension";
		$apps[$x]['destinations'][$y]['field']['context'] = "context";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${name}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "b0939384-7055-44e8-8b4c-9f72293e1878";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_all";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_context";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_flow_destinations";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;

	//cache details
		$apps[$x]['cache']['key'] = "dialplan.\${call_flow_context}";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_call_flows";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the name.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入名称。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_extension";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the extension number.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入分机号。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_feature_code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the feature code.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入功能代码。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_context";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the context.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入上下文。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_status";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the status.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择状态。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_pin_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the PIN number.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入PIN码。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_label";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the label.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入标签。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_sound";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the sound.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择声音。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_app";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the application.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入应用程序。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the application data.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入应用程序数据。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_flow_alternate_label";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "call_flow_anti_label";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the alternate label.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入备用标签。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_alternate_sound";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the alternate sound.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择备用声音。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_flow_alternate_app";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "call_flow_anti_app";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the alternate application.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入备用应用程序。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_flow_alternate_data";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "call_flow_anti_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the alernate application data.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入alernate应用程序数据。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select whether to enable or disable the call flow";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择是启用还是禁用呼叫流";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "call_flow_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入描述。";
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
