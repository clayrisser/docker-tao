<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiItem\model\flyExporter\simpleExporter\ItemExporter(array(
    'fileSystem' => 'taoQtiItem',
    'fileLocation' => 'export/export.csv',
    'extractors' => array(
        'OntologyExtractor' => new oat\taoQtiItem\model\flyExporter\extractor\OntologyExtractor(),
        'QtiExtractor' => new oat\taoQtiItem\model\flyExporter\extractor\QtiExtractor()
    ),
    'columns' => array(
        'label' => array(
            'extractor' => 'OntologyExtractor',
            'parameters' => array(
                'property' => 'http://www.w3.org/2000/01/rdf-schema#label'
            )
        ),
        'type' => array(
            'extractor' => 'QtiExtractor',
            'parameters' => array(
                'callback' => 'getInteractionType'
            )
        ),
        'nb choice' => array(
            'extractor' => 'QtiExtractor',
            'parameters' => array(
                'callback' => 'getNumberOfChoices'
            )
        ),
        'responseIdentifier' => array(
            'extractor' => 'QtiExtractor',
            'parameters' => array(
                'callback' => 'getResponseIdentifier'
            )
        ),
        'BR' => array(
            'extractor' => 'QtiExtractor',
            'parameters' => array(
                'callback' => 'getRightAnswer',
                'callbackParameters' => array(
                    'delimiter' => '|'
                ),
                'valuesAsColumns' => true
            )
        ),
        'choiceInteraction' => array(
            'extractor' => 'QtiExtractor',
            'parameters' => array(
                'callback' => 'getChoices',
                'valuesAsColumns' => true
            )
        )
    )
));
