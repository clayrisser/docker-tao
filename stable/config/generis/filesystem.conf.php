<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\filesystem\FileSystemService(array(
    'filesPath' => '/var/www/html/data/',
    'adapters' => array(
        'taskQueueStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/taskQueueStorage'
            )
        ),
        'fileUploadDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/tao/upload'
            )
        ),
        'public' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/tao/public'
            )
        ),
        'private' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/tao/private'
            )
        ),
        'log' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/tao/log'
            )
        ),
        'sharedTmp' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/tmp'
            )
        ),
        'stateBackup' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/stateBackup'
            )
        ),
        'itemDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/taoItems/itemData'
            )
        ),
        'taoQtiItem' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/taoQtiItem'
            )
        ),
        'taoQtiTest' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/taoQtiTest'
            )
        ),
        'taoQtiTestSessionFilesystem' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/taoQtiTestSessionFilesystem'
            )
        ),
        'qtiItemPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/qtiItemPci'
            )
        ),
        'qtiItemImsPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/qtiItemImsPci'
            )
        ),
        'portableElementStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/html/data/portableElement'
            )
        )
    )
));
