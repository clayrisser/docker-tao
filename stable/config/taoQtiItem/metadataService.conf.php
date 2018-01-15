<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiItem\model\qti\metadata\MetadataService(array(
    'import' => new oat\taoQtiItem\model\qti\metadata\importer\MetadataImporter(array(
        'injectors' => array(
        ),
        'extractors' => array(
        ),
        'guardians' => array(
        ),
        'classLookups' => array(
        )
    )),
    'export' => new oat\taoQtiItem\model\qti\metadata\exporter\MetadataExporter(array(
        'injectors' => array(
        ),
        'extractors' => array(
        )
    ))
));
