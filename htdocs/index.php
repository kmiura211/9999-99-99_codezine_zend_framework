<?php

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../library'),
    get_include_path(),
)));

require_once 'Zend/Controller/Front.php';
Zend_Controller_Front::run('../zendapps/controllers');
