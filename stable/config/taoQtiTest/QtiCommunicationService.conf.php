<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\runner\communicator\QtiCommunicationService(array(
    'channels' => array(
        'output' => array(
            'teststate' => 'oat\\taoQtiTest\\models\\runner\\communicator\\TestStateChannel'
        ),
        'input' => array(
            'sync' => 'oat\\taoQtiTest\\models\\runner\\communicator\\SyncChannel'
        )
    )
));
