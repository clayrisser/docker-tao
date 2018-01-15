<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'items' => array(
            'base' => 'taoQtiItem/views/css/qti-runner.css',
            'available' => array(
                array(
                    'id' => 'tao',
                    'name' => 'TAO',
                    'path' => 'taoQtiItem/views/css/themes/default.css'
                )
            ),
            'default' => 'tao'
        )
    )
));
