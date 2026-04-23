<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(
    'tolorric.likemne',
    [
        'Tolorric\\Likemne\\NoteTable' => 'lib/NoteTable.php',
    ]
);
