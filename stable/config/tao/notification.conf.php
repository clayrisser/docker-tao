<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\notification\implementation\NotificationServiceAggregator(array(
    'rds' => array(
        'class' => 'oat\\tao\\model\\notification\\implementation\\RdsNotification',
        'options' => array(
            'persistence' => 'default',
            'visibility' => false
        )
    )
));
