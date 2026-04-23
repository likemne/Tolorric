<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class tolorric_likemne extends CModule
{
    public $MODULE_ID = "tolorric.likemne";
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $PARTNER_NAME;
    public $PARTNER_URI;

    public $errors = [];

    public function __construct()
    {
        $arModuleVersion = [];
        include(__DIR__ . "/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = Loc::getMessage("TOLORRIC_MODULE_NAME");
        $this->MODULE_DESCRIPTION = Loc::getMessage("TOLORRIC_MODULE_DESCRIPTION");
        $this->PARTNER_NAME = Loc::getMessage("TOLORRIC_PARTNER_NAME");
        $this->PARTNER_URI = Loc::getMessage("TOLORRIC_PARTNER_URI");
    }

    public function DoInstall()
    {
        if ($this->isAlreadyInstalled()) {
            $this->errors[] = Loc::getMessage("TOLORRIC_MODULE_ALREADY_INSTALLED");
            return false;
        }
        
        ModuleManager::registerModule($this->MODULE_ID);
        return true;
    }

    public function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
        return true;
    }

    private function isAlreadyInstalled(): bool
    {
        return ModuleManager::isModuleInstalled($this->MODULE_ID);
    }
}
