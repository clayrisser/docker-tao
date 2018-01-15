<?php
/**
 * Default config header created during install
 */

return new common_persistence_Manager(array(
    'persistences' => array(
        'cache' => array(
            'driver' => 'phpfile'
        ),
        'default' => array(
            'driver' => 'pdo_mysql',
            'host' => '${DATABASE_HOST}',
            'dbname' => '${DATABASE_NAME}',
            'user' => '${DATABASE_USER}',
            'password' => '${DATABASE_PASSWORD}'
        ),
        'serviceState' => array(
            'driver' => 'phpfile'
        ),
        'maintenance' => array(
            'driver' => 'phpfile'
        )
    )
));
