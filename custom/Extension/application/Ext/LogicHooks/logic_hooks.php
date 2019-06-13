<?php

//basic application level hooks
$hook_array['before_save'][] = array(
	100, //hook serial number, hooks executed in this order
	'custom before save logic hooks for all modules', //comments about the hook
	'custom/include/hooks/GeneralLogicHook.php', //hook file location within the CRM directory
	'GeneralLogicHookClass', //hook className
	'beforeSave' //hook methodName
);

//after_save application hook
$hook_array['after_save'][] = array(
	100, //hook serial number, hooks executed in this order
	'custom before save logic hooks for all modules', //comments about the hook
	'custom/include/hooks/GeneralLogicHook.php', //hook file location within the CRM directory
	'GeneralLogicHookClass', //hook className
	'afterSave' //hook methodName
);
