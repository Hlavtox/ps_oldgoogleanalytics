<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit357blablacdc9bc991f4088a2d552b69942338
{
    public static $classMap = array (
        'AdminOldganalyticsAjaxController' => __DIR__ . '/../..' . '/controllers/admin/AdminOldganalyticsAjax.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Database\\Install' => __DIR__ . '/../..' . '/classes/Database/Install.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Database\\Uninstall' => __DIR__ . '/../..' . '/classes/Database/Uninstall.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Form\\ConfigurationForm' => __DIR__ . '/../..' . '/classes/Form/ConfigurationForm.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\GoogleAnalyticsTools' => __DIR__ . '/../..' . '/classes/GoogleAnalyticsTools.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Handler\\GanalyticsDataHandler' => __DIR__ . '/../..' . '/classes/Handler/GanalyticsDataHandler.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Handler\\GanalyticsJsHandler' => __DIR__ . '/../..' . '/classes/Handler/GanalyticsJsHandler.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Handler\\ModuleHandler' => __DIR__ . '/../..' . '/classes/Handler/ModuleHandler.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookActionCarrierProcess' => __DIR__ . '/../..' . '/classes/Hook/HookActionCarrierProcess.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookActionCartSave' => __DIR__ . '/../..' . '/classes/Hook/HookActionCartSave.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookActionOrderStatusPostUpdate' => __DIR__ . '/../..' . '/classes/Hook/HookActionOrderStatusPostUpdate.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookActionProductCancel' => __DIR__ . '/../..' . '/classes/Hook/HookActionProductCancel.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayBackOfficeHeader' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayBackOfficeHeader.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayFooter' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayFooter.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayFooterProduct' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayFooterProduct.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayHeader' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayHeader.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayHome' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayHome.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookDisplayOrderConfirmation' => __DIR__ . '/../..' . '/classes/Hook/HookDisplayOrderConfirmation.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\HookInterface' => __DIR__ . '/../..' . '/classes/Hook/HookInterface.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Hooks\\WrapperInterface' => __DIR__ . '/../..' . '/classes/Wrapper/WrapperInterface.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Repository\\CarrierRepository' => __DIR__ . '/../..' . '/classes/Repository/CarrierRepository.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Repository\\GanalyticsDataRepository' => __DIR__ . '/../..' . '/classes/Repository/GanalyticsDataRepository.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Repository\\GanalyticsRepository' => __DIR__ . '/../..' . '/classes/Repository/GanalyticsRepository.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Wrapper\\OrderWrapper' => __DIR__ . '/../..' . '/classes/Wrapper/OrderWrapper.php',
        'PrestaShop\\Module\\Ps_Oldgoogleanalytics\\Wrapper\\ProductWrapper' => __DIR__ . '/../..' . '/classes/Wrapper/ProductWrapper.php',
        'Ps_Oldgoogleanalytics' => __DIR__ . '/../..' . '/ps_oldgoogleanalytics.php',
        'ps_OldgoogleanalyticsAjaxModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ajax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit357blablacdc9bc991f4088a2d552b69942338::$classMap;

        }, null, ClassLoader::class);
    }
}