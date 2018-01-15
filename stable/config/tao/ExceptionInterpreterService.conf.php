<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\mvc\error\ExceptionInterpreterService(array(
    'interpreters' => array(
        'Exception' => 'oat\\tao\\model\\mvc\\error\\ExceptionInterpretor'
    )
));
