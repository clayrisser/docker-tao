<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'className' => 'oat\\tao\\model\\websource\\TokenWebSource',
        'options' => array(
            'secret' => '8182ad9dc7f52d9bfd86864eadbcbea5',
            'path' => '/var/www/html/data/tao/public/',
            'ttl' => 1440,
            'fsUri' => 'public',
            'id' => '5a5bf885d0866'
        )
    )
));
