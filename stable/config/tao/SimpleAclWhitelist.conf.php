<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'tao_actions_Main' => array(
            'entry' => '*',
            'login' => '*',
            'logout' => '*'
        ),
        'tao_actions_PasswordRecovery' => array(
            'index' => '*',
            'resetPassword' => '*'
        ),
        'tao_actions_ClientConfig' => '*',
        'oat\\taoDelivery\\controller\\DeliveryServer' => array(
            'logout' => '*'
        ),
        'oat\\taoDeliveryRdf\\controller\\Guest' => array(
            'guest' => '*'
        )
    )
));
