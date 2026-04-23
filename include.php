<?php
// /local/modules/tolorric.likemne/include.php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(
    'tolorric.likemne',
    [
        // Здесь будет список "Класс" => "путь/к/файлу.php"
        // 'Tolorric\Likemne\SomeClass' => 'lib/someclass.php',
    ]
);

// Здесь же можно будет регистрировать обработчики событий
// $eventManager = \Bitrix\Main\EventManager::getInstance();
// $eventManager->addEventHandler('main', 'OnPageStart', ['MyClass', 'myMethod']);
