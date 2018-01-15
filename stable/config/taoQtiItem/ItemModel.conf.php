<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiItem\model\ItemModel(array(
    'exportHandlers' => array(
        new oat\taoQtiItem\model\Export\ItemMetadataByClassExportHandler(),
        new oat\taoQtiItem\model\Export\ApipPackageExportHandler(),
        new oat\taoQtiItem\model\Export\QtiPackageExportHandler(),
        new oat\taoQtiItem\model\Export\QtiPackage22ExportHandler()
    ),
    'importHandlers' => array(
        new oat\taoQtiItem\model\import\QtiItemImport(),
        new oat\taoQtiItem\model\import\QtiPackageImport()
    ),
    'compilerClass' => 'oat\\taoQtiItem\\model\\QtiJsonItemCompiler'
));
