<?php
/* Список файлов, которые будут запущены во время установки пакета. Сами резолверы хранятся в папке /_build/resolvers/ */
require_once 'build.class.php';
$resolvers = array(
    'providers',
    'addons',
    'settings'
);

/* Прописываем список дополнений которые можно будет установить. В файле /includes/setup.options.php отмечаем опциональные плагины */
$addons = array(
    // Из официального репозитория modx.com/extras/
    array('name' => '', 'packages' => array(
            'TinyMCE Rich Text Editor' => '1.2.1-pl'
        )),
);

/* Указываем имя стартера и версию */
$builder = new siteBuilder('tinymcerte', '1.0.0', 'beta', $resolvers, $addons);

/* Начинаем сборку */
$builder->build();
