<?php
/**
 * This configuration file instantiates the service aiming at
 * retrieving/persisting information about the organization operating
 * the TAO Platform.
 */

return new oat\tao\model\OperatedByService(array(
    'operatedByName' => '${OPERATED_BY_NAME}',
    'operatedByEmail' => '${OPERATED_BY_EMAIL}'
));
