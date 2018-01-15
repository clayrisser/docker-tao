<?php
/**
 * A service to provide additional configurations that should
 * be send to the client
 * 
 * By default implemented by oat\tao\model\clientConfig\ClientConfigService
 */

return new oat\tao\model\clientConfig\ClientConfigService(array(
    'configs' => array(
        'themesAvailable' => new oat\tao\model\clientConfig\sources\ThemeConfig()
    )
));
