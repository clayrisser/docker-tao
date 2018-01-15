<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\entryPoint\EntryPointService(array(
    'existing' => array(
        'passwordreset' => new oat\tao\model\entryPoint\PasswordReset(),
        'deliveryServer' => new oat\taoDelivery\model\entrypoint\FrontOfficeEntryPoint(),
        'backoffice' => new oat\taoCe\model\entryPoint\TaoCeEntrypoint(),
        'guestaccess' => new oat\taoDeliveryRdf\model\guest\GuestAccess()
    ),
    'postlogin' => array(
        'deliveryServer',
        'backoffice'
    ),
    'prelogin' => array(
        'guestaccess'
    )
));
