<?php

$manifest = array (
  'author' => '<author_name>',
  'description' => '<module_description>',
  'name' => '<module_name>',
  'acceptable_sugar_versions' => 
  array (
    0 => '6.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'CE',
    1 => 'PRO',
    2 => 'CORP',
    3 => 'ENT',
    4 => 'ULT',
  ),
  'key' => '<module_key>',
  'type' => 'module',
  'icon' => '<icon_file>',
  'is_uninstallable' => true,
  'published_date' => '@@PUBLISH_DATE@@',
  'readme' => '<path_to_readme>',
  'version' => '@@VERSION@@',
);

$installdefs = array (
  'id' => '<module_id>',
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/<module_name>',
      'to' => 'modules/<module_name>',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/Extension',
      'to' => 'custom/Extension',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/en_us.lang.php',
      'to_module' => '<module_name>',
      'language' => 'en_us',
    ),
  ),
  'logic_hooks' => 
  array (
    0 => 
    array (
      'module' => '<module_name>',
      'hook' => '<logic_hook_type>',
      'order' => '<execution_order>',
      'description' => '<logic_hook_description>',
      'file' => '<logic_hook_path>',
      'class' => '<logic_hook_class>',
      'function' => '<logic_hook_function>',
    ),
    1 => 
    array (
      'module' => '<module_name>',
      'hook' => '<overridden_logic_hook_type>',
      'order' => '<execution_order>',
      'description' => '<logic_hook_description>',
      'file' => '<overridden_logic_hook_path>',
      'class' => '<logic_hook_class>',
      'function' => '<logic_hook_function>',
    ),
    2 => 
    array (
      'module' => '<overridden_module_name>',
      'hook' => '<logic_hook_type>',
      'order' => '<execution_order>',
      'description' => '<logic_hook_description>',
      'file' => '<logic_hook_path>',
      'class' => '<logic_hook_class>',
      'function' => '<logic_hook_function>',
    ),
  ),
);

?>