<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\mvc\DefaultUrlService(array(
    'default' => array(
        'ext' => 'tao',
        'controller' => 'Main',
        'action' => 'index'
    ),
    'login' => array(
        'ext' => 'tao',
        'controller' => 'Main',
        'action' => 'login'
    ),
    'logout' => array(
        'ext' => 'tao',
        'controller' => 'Main',
        'action' => 'logout',
        'redirect' => array(
            'class' => 'oat\\tao\\model\\mvc\\DefaultUrlModule\\TaoActionResolver',
            'options' => array(
                'action' => 'entry',
                'controller' => 'Main',
                'ext' => 'tao'
            )
        )
    ),
    'logoutDelivery' => array(
        'ext' => 'taoDelivery',
        'controller' => 'DeliveryServer',
        'action' => 'logout',
        'redirect' => array(
            'class' => 'oat\\tao\\model\\mvc\\DefaultUrlModule\\TaoActionResolver',
            'options' => array(
                'action' => 'entry',
                'controller' => 'Main',
                'ext' => 'tao'
            )
        )
    )
));
