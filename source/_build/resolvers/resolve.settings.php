<?php
/**
 * PHP version 7.1
 * @author Original Author Ilya Utkin https://github.com/ilyautkin/siteExtra
 * @author This version author iWatchYouFromAfar https://github.com/iWatchYouFromAfar
 * @version 1.0.0
 * 01.10.2018 - 04.10.2018
 * 
 * Устанавливаем настройки MODX и компонентов
 * 
 */

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
    return true;
}

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        /*
        * Plugin TinyMCE Rich Text Editor settings
        * 1. Вставить как текст: Да
        * 2. Путь к кастомному файлу external-config.json: ../assets/components/tinymcerte/tinymcerte/js/external-config.json
        * 3. Активируем все нужные плагины
        * 4. Устанавливаем тему lightgray для TinyMCERTE
        * 5. Настраиваем Панель инструментов 1
        * 6. Настраиваем Панель инструментов 2
        */

        // Вставить как текст: Да
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.paste_as_text'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'default',
                'xtype'     => 'combo-boolean',
                'value'     => '1',
                'key'       => 'tinymcerte.paste_as_text',
            ), '', true, true);
            $tmp->save();
        }

        // Путь к кастомному файлу external-config.json: ../assets/components/tinymcerte/tinymcerte/js/external-config.json
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.external_config'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'default',
                'xtype'     => 'textfield',
                'value'     => '../assets/components/tinymcerte/tinymcerte/js/external-config.json',
                'key'       => 'tinymcerte.external_config',
            ), '', true, true);
            $tmp->save();
        }

        // Активируем все нужные плагины
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.plugins'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'default',
                'xtype'     => 'textfield',
                'value'     => 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern modximage modxlink code paste spellchecker typograf',
                'key'       => 'tinymcerte.plugins',
            ), '', true, true);
            $tmp->save();
        }

        // Устанавливаем тему lightgray для TinyMCERTE
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.skin'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'default',
                'xtype'     => 'textfield',
                'value'     => 'lightgray',
                'key'       => 'tinymcerte.skin',
            ), '', true, true);
            $tmp->save();
        }

        // Настраиваем Панель инструментов 1
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.toolbar1'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'tinymcerte.toolbar',
                'xtype'     => 'textfield',
                'value'     => 'undo redo | formatselect fontsizeselect  | bold italic strikethrough forecolor backcolor removeformat | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent',
                'key'       => 'tinymcerte.toolbar1',
            ), '', true, true);
            $tmp->save();
        }

        // Настраиваем Панель инструментов 2
        if (in_array('TinyMCE Rich Text Editor', $options['install_addons'])) {
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => 'tinymcerte.toolbar2'))) {
                $tmp = $modx->newObject('modSystemSetting');
            }
            $tmp->fromArray(array(
                'namespace' => 'tinymcerte',
                'area'      => 'tinymcerte.toolbar',
                'xtype'     => 'textfield',
                'value'     => 'link unlink openlink | image media | template codesample code cite | hr | spellchecker typograf',
                'key'       => 'tinymcerte.toolbar2',
            ), '', true, true);
            $tmp->save();
        }

        break;

    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
