<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'util/locale' => array(
            'decimalSeparator' => '.',
            'thousandsSeparator' => '',
            'dateTimeFormat' => 'DD/MM/YYYY HH:mm:ss'
        ),
        'core/logger' => array(
            'level' => 'warn',
            'loggers' => array(
                'core/logger/console'
            )
        ),
        'taoQtiItem/qtiRunner/core/QtiRunner' => array(
            'inlineModalFeedback' => false
        ),
        'taoQtiItem/qtiCommonRenderer/renderers/config' => array(
            'associateDragAndDrop' => true,
            'gapMatchDragAndDrop' => true,
            'graphicGapMatchDragAndDrop' => true,
            'orderDragAndDrop' => true
        ),
        'taoQtiItem/controller/creator/index' => array(
            'plugins' => array(
                array(
                    'name' => 'back',
                    'module' => 'taoQtiItem/qtiCreator/plugins/navigation/back',
                    'category' => 'navigation',
                    'position' => null
                ),
                array(
                    'name' => 'pciManager',
                    'module' => 'qtiItemPci/qtiCreator/plugins/panel/pciManager',
                    'category' => 'panel',
                    'position' => null
                )
            )
        ),
        'taoQtiTest/controller/runtime/testRunner' => array(
            'qtiTools' => array(
                'markForReview' => array(
                    'hook' => 'taoQtiTest/testRunner/actionBar/markForReview',
                    'order' => 'last'
                ),
                'collapseReview' => array(
                    'hook' => 'taoQtiTest/testRunner/actionBar/collapseReview',
                    'order' => 'first'
                ),
                'comment' => array(
                    'hook' => 'taoQtiTest/testRunner/actionBar/comment'
                )
            )
        ),
        'taoQtiItem/portableElementRegistry/ciRegistry' => array(
            'providers' => array(
                array(
                    'name' => 'pciRegistry',
                    'module' => 'qtiItemPci/pciProvider'
                )
            )
        )
    )
));
