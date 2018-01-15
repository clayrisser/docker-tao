<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\cat\CatService(array(
    'endpoints' => array(
        'http://YOUR_URL_OAUTH/cat/api/' => array(
            'class' => 'oat\\libCat\\custom\\EchoAdaptEngine',
            'args' => array(
                'version' => 'v1.1',
                'client' => array(
                    'class' => 'oat\\taoOauth\\model\\OAuthClient',
                    'options' => array(
                        'client_id' => '',
                        'client_secret' => '',
                        'resource_owner_details_url' => false,
                        'authorize_url' => false,
                        'http_client_options' => array(
                        ),
                        'token_url' => '',
                        'token_key' => '',
                        'tokenParameters' => array(
                            'audience' => ''
                        ),
                        'token_storage' => 'cache'
                    )
                )
            )
        ),
        'http://YOUR_URL/cat/api/' => array(
            'class' => 'oat\\libCat\\custom\\EchoAdaptEngine',
            'args' => array(
                'version' => 'v1',
                'client' => array(
                    'class' => 'oat\\tao\\model\\api\\ApiClientConnector',
                    'options' => array(
                        'base_uri' => 'YOUR_BASE_URI'
                    )
                )
            )
        )
    )
));
