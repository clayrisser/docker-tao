<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\event\EventManager(array(
    'listeners' => array(
        'oat\\generis\\model\\data\\event\\ResourceCreated' => array(
            array(
                'oat\\generis\\model\\data\\permission\\PermissionManager',
                'catchEvent'
            )
        ),
        'oat\\tao\\model\\event\\FileUploadedEvent' => array(
            array(
                'oat\\tao\\model\\upload\\UploadService',
                'listenUploadEvent'
            )
        ),
        'oat\\tao\\model\\event\\UploadLocalCopyCreatedEvent' => array(
            array(
                'oat\\tao\\model\\upload\\UploadService',
                'listenLocalCopyEvent'
            )
        ),
        'oat\\taoItems\\model\\event\\ItemRdfUpdatedEvent' => array(
            array(
                'oat\\taoQtiItem\\model\\Listener\\ItemUpdater',
                'catchItemRdfUpdatedEvent'
            )
        ),
        'oat\\taoDelivery\\models\\classes\\execution\\event\\DeliveryExecutionState' => array(
            array(
                'taoQtiTest/QtiTestListenerService',
                'executionStateChanged'
            )
        ),
        'oat\\taoQtiTest\\models\\event\\QtiTestStateChangeEvent' => array(
            array(
                'taoQtiTest/QtiTestListenerService',
                'sessionStateChanged'
            )
        ),
        'oat\\taoDeliveryRdf\\model\\event\\DeliveryCreatedEvent' => array(
            array(
                'oat\\taoDeliveryRdf\\model\\TestRunnerFeatures',
                'enableDefaultFeatures'
            )
        )
    )
));
