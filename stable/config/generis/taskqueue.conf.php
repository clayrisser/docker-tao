<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\task\implementation\SyncQueue(array(
    'payload' => 'oat\\oatbox\\task\\implementation\\TaskQueuePayload',
    'runner' => 'oat\\oatbox\\task\\TaskRunner',
    'persistence' => 'oat\\oatbox\\task\\implementation\\InMemoryQueuePersistence',
    'config' => array(
    )
));
