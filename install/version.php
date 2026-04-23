<?php
// /local/modules/tolorric.likemne/install/index.php

use Bitrix\Main\ModuleManager;

class tolorric_likemne extends CModule
{
    public $MODULE_ID = "tolorric.likemne";
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;

    public function __construct()
    {
        $arModuleVersion = [];
        include(__DIR__ . "/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = "Tolorric — ваш модуль";
        $this->MODULE_DESCRIPTION = "Краткое описание того, что делает модуль";
    }

    public function DoInstall()
    {
        // Регистрируем модуль в системе
        ModuleManager::registerModule($this->MODULE_ID);
        
        // Здесь можно добавить другие действия, например, копирование файлов
    }

    public function DoUninstall()
    {
        // Здесь можно добавить удаление файлов или данных
        
        // Снимаем регистрацию модуля
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}