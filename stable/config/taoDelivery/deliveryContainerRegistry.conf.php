<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'service' => new oat\taoDelivery\model\container\delivery\DeliveryServiceContainer(),
        'qtiTest' => new oat\taoQtiTest\models\container\QtiTestDeliveryContainer()
    )
));
