<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'timerWarning' => array(
            'assessmentItemRef' => null,
            'assessmentSection' => null,
            'testPart' => null,
            'assessmentTest' => null
        ),
        'progress-indicator' => 'percentage',
        'progress-indicator-scope' => 'testSection',
        'progress-indicator-forced' => false,
        'progress-indicator-show-total' => true,
        'test-taker-review' => true,
        'test-taker-review-region' => 'left',
        'test-taker-review-show-legend' => true,
        'test-taker-review-default-open' => true,
        'test-taker-review-use-title' => true,
        'test-taker-review-force-title' => false,
        'test-taker-review-item-title' => 'Item %d',
        'test-taker-review-scope' => 'test',
        'test-taker-review-prevents-unseen' => true,
        'test-taker-review-can-collapse' => false,
        'test-taker-review-display-subsection-title' => true,
        'test-taker-unanswered-items-message' => true,
        'exitButton' => false,
        'next-section' => false,
        'reset-timer-after-resume' => false,
        'extraContextBuilder' => null,
        'plugins' => array(
            'answer-masking' => array(
                'restoreStateOnToggle' => true,
                'restoreStateOnMove' => true
            ),
            'overlay' => array(
                'full' => false
            ),
            'collapser' => array(
                'collapseTools' => true,
                'collapseNavigation' => false,
                'collapseInOrder' => false,
                'hover' => false,
                'collapseOrder' => array(
                )
            ),
            'magnifier' => array(
                'zoomMin' => 2,
                'zoomMax' => 8,
                'zoomStep' => 0.5
            ),
            'calculator' => array(
                'template' => ''
            )
        ),
        'csrf-token' => true,
        'timer' => array(
            'target' => 'server'
        ),
        'test-session' => 'oat\\taoQtiTest\\models\\runner\\session\\TestSession',
        'test-session-storage' => '\\taoQtiTest_helpers_TestSessionStorage',
        'bootstrap' => array(
            'serviceExtension' => 'taoQtiTest',
            'serviceController' => 'Runner',
            'timeout' => 0,
            'communication' => array(
                'enabled' => false,
                'type' => 'poll',
                'extension' => null,
                'controller' => null,
                'action' => 'messages',
                'service' => null,
                'params' => array(
                )
            )
        ),
        'enable-allow-skipping' => true,
        'enable-validate-responses' => true,
        'force-branchrules' => false,
        'force-preconditions' => false,
        'path-tracking' => false,
        'always-allow-jumps' => false,
        'check-informational' => true,
        'keep-timer-up-to-timeout' => false,
        'allow-shortcuts' => true,
        'shortcuts' => array(
            'calculator' => array(
                'toggle' => 'C'
            ),
            'zoom' => array(
                'in' => 'I',
                'out' => 'O'
            ),
            'comment' => array(
                'toggle' => 'A'
            ),
            'itemThemeSwitcher' => array(
                'toggle' => 'T'
            ),
            'review' => array(
                'toggle' => 'R',
                'flag' => 'M'
            ),
            'keyNavigation' => array(
                'previous' => 'Shift+Tab',
                'next' => 'Tab'
            ),
            'next' => array(
                'trigger' => 'J'
            ),
            'previous' => array(
                'trigger' => 'K'
            ),
            'dialog' => array(
            ),
            'magnifier' => array(
                'toggle' => 'L',
                'in' => 'Shift+I',
                'out' => 'Shift+O',
                'close' => 'esc'
            ),
            'highlighter' => array(
                'toggle' => 'Shift+U'
            ),
            'area-masking' => array(
                'toggle' => 'Y'
            ),
            'line-reader' => array(
                'toggle' => 'G'
            ),
            'answer-masking' => array(
                'toggle' => 'D'
            )
        ),
        'allow-browse-next-item' => false,
        'item-cache-size' => 3
    )
));
