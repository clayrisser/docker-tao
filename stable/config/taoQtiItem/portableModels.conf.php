<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'PCI' => array(
            'class' => 'oat\\qtiItemPci\\model\\PciModel'
        ),
        'IMSPCI' => array(
            'class' => 'oat\\qtiItemPci\\model\\IMSPciModel'
        )
    )
));
