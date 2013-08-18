<?php
namespace Composer\Installers;

class PyroCMSInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'     => 'addons/shared_addons/modules/{$name}/',
        'plugin' => 'addons/shared_addons/plugin/',
        'widget'      => 'addons/shared_addons/widget/',
        'theme'      => 'addons/shared_addons/themes/{$name}/',
    );
}
