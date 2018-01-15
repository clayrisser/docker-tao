<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\runner\synchronisation\SynchronisationService(array(
    'actions' => array(
        'move' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Move',
        'skip' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Skip',
        'storeTraceData' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\StoreTraceData',
        'timeout' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Timeout'
    )
));
