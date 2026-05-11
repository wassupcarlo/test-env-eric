<?php
    $install_queries=array(
        "INSERT INTO `modules` (`id`, `type`,`name`, `machinename`, `folder`, `active`, `installed`, `version`, `settings`, `locked`, `created`, `lastmodif`) VALUES (NULL, 'admin', 'Tester', 'tester', NULL, '1', '1', '1.2', NULL, '0',  NOW(), NOW());",

        "INSERT INTO `menus` (`id`, `menu`, `name`, `name_fr`, `name_es`, `icon`, `link`, `itemid`, `parent`, `position`, `module`, `active`, `created`) VALUES (NULL, 'main', 'Tester', 'Tester', 'Tareas', '<i class=\"fa fa-list\"></i>', 'modules/tester/index', 'nav-tasks', '0', '4', 'tester', '1',  NOW());"
    );