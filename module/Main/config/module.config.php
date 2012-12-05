<?php
// module/Main/conﬁg/module.config.php:
return array(
    'controllers' => array(
      'invokables' => array(
        'Main\Controller\Main' => 'Main\Controller\MainController'
      ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);
