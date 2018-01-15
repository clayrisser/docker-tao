<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'taoQtiTest/runner/plugins/content/rubricBlock/rubricBlock' => array(
            'id' => 'rubricBlock',
            'module' => 'taoQtiTest/runner/plugins/content/rubricBlock/rubricBlock',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Rubric Block',
            'description' => 'Display test rubric blocks',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/content/overlay/overlay' => array(
            'id' => 'overlay',
            'module' => 'taoQtiTest/runner/plugins/content/overlay/overlay',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Overlay',
            'description' => 'Add an overlay over items when disabled',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'technical',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/content/dialog/dialog' => array(
            'id' => 'dialog',
            'module' => 'taoQtiTest/runner/plugins/content/dialog/dialog',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Dialog',
            'description' => 'Display popups that require user interactions',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'technical',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/content/feedback/feedback' => array(
            'id' => 'feedback',
            'module' => 'taoQtiTest/runner/plugins/content/feedback/feedback',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Feedback',
            'description' => 'Display notifications into feedback popups',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'technical',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/content/dialog/exitMessages' => array(
            'id' => 'exitMessages',
            'module' => 'taoQtiTest/runner/plugins/content/dialog/exitMessages',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Exit Messages',
            'description' => 'Display messages when a test taker leaves the test',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/content/loading/loading' => array(
            'id' => 'loading',
            'module' => 'taoQtiTest/runner/plugins/content/loading/loading',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Loading bar',
            'description' => 'Show a loading bar when the test is loading',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/controls/title/title' => array(
            'id' => 'title',
            'module' => 'taoQtiTest/runner/plugins/controls/title/title',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Title indicator',
            'description' => 'Display the title of current test element',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/content/modalFeedback/modalFeedback' => array(
            'id' => 'modalFeedback',
            'module' => 'taoQtiTest/runner/plugins/content/modalFeedback/modalFeedback',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'QTI modal feedbacks',
            'description' => 'Display Qti modalFeedback element',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'qti',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/content/accessibility/keyNavigation' => array(
            'id' => 'keyNavigation',
            'module' => 'taoQtiTest/runner/plugins/content/accessibility/keyNavigation',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Using key to navigate test runner',
            'description' => 'Provide a way to navigate within the test runner with the keyboard',
            'category' => 'content',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/controls/timer/timer' => array(
            'id' => 'timer',
            'module' => 'taoQtiTest/runner/plugins/controls/timer/timer',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Timer indicator',
            'description' => 'Add countdown when remaining time',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/controls/progressbar/progressbar' => array(
            'id' => 'progressbar',
            'module' => 'taoQtiTest/runner/plugins/controls/progressbar/progressbar',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Progress indicator',
            'description' => 'Display the current progression within the test',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/controls/duration/duration' => array(
            'id' => 'duration',
            'module' => 'taoQtiTest/runner/plugins/controls/duration/duration',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Duration record',
            'description' => 'Record accurately time spent by the test taker',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core',
                'technical',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/controls/connectivity/connectivity' => array(
            'id' => 'connectivity',
            'module' => 'taoQtiTest/runner/plugins/controls/connectivity/connectivity',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Connectivity check',
            'description' => 'Pause the test when the network loose the connection',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core',
                'technical'
            )
        ),
        'taoQtiTest/runner/plugins/controls/testState/testState' => array(
            'id' => 'testState',
            'module' => 'taoQtiTest/runner/plugins/controls/testState/testState',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Test state',
            'description' => 'Manage test state',
            'category' => 'controls',
            'active' => true,
            'tags' => array(
                'core',
                'technical',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/controls/trace/itemTraceVariables' => array(
            'id' => 'itemTraceVariables',
            'module' => 'taoQtiTest/runner/plugins/controls/trace/itemTraceVariables',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Item trace variables',
            'description' => 'Send item trace variables',
            'category' => 'controls',
            'active' => false,
            'tags' => array(
                'core',
                'technical'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/review/review' => array(
            'id' => 'review',
            'module' => 'taoQtiTest/runner/plugins/navigation/review/review',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Navigation and review panel',
            'description' => 'Enable a panel to handle navigation and item reviews',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/previous' => array(
            'id' => 'previous',
            'module' => 'taoQtiTest/runner/plugins/navigation/previous',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Previous button',
            'description' => 'Enable to move backward',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/next' => array(
            'id' => 'next',
            'module' => 'taoQtiTest/runner/plugins/navigation/next',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Next button',
            'description' => 'Enable to move forward',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti',
                'required'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/nextSection' => array(
            'id' => 'nextSection',
            'module' => 'taoQtiTest/runner/plugins/navigation/nextSection',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Next section button',
            'description' => 'Enable to move to the next available section',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/skip' => array(
            'id' => 'skip',
            'module' => 'taoQtiTest/runner/plugins/navigation/skip',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Skip button',
            'description' => 'Skip the current item',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/allowSkipping' => array(
            'id' => 'allowSkipping',
            'module' => 'taoQtiTest/runner/plugins/navigation/allowSkipping',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Allow Skipping',
            'description' => 'Prevent submission of default/null responses',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/validateResponses' => array(
            'id' => 'validateResponses',
            'module' => 'taoQtiTest/runner/plugins/navigation/validateResponses',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Validate Responses',
            'description' => 'Prevent submission of invalid responses',
            'category' => 'navigation',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/navigation/warnBeforeLeaving' => array(
            'id' => 'warnBeforeLeaving',
            'module' => 'taoQtiTest/runner/plugins/navigation/warnBeforeLeaving',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Warn before leaving',
            'description' => 'Warn the test taker when closing the browser',
            'category' => 'navigation',
            'active' => false,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/comment/comment' => array(
            'id' => 'comment',
            'module' => 'taoQtiTest/runner/plugins/tools/comment/comment',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Comment tool',
            'description' => 'Allow test taker to comment an item',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
                'core',
                'qti'
            )
        ),
        'taoQtiTest/runner/plugins/tools/calculator' => array(
            'id' => 'calculator',
            'module' => 'taoQtiTest/runner/plugins/tools/calculator',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Caculator tool',
            'description' => 'Gives the student access to a basic calculator',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/tools/zoom' => array(
            'id' => 'zoom',
            'module' => 'taoQtiTest/runner/plugins/tools/zoom',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Zoom',
            'description' => 'Zoom in and out the item content',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/tools/itemThemeSwitcher/itemThemeSwitcher' => array(
            'id' => 'itemThemeSwitcher',
            'module' => 'taoQtiTest/runner/plugins/tools/itemThemeSwitcher/itemThemeSwitcher',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Item themes switcher',
            'description' => 'Allow to switch between themes',
            'category' => 'tools',
            'active' => false,
            'tags' => array(
                'core'
            )
        ),
        'taoQtiTest/runner/plugins/tools/documentViewer/documentViewer' => array(
            'id' => 'documentViewer',
            'module' => 'taoQtiTest/runner/plugins/tools/documentViewer/documentViewer',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Document Viewer',
            'description' => 'Display a document as requested by an event',
            'category' => 'tools',
            'active' => false,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/highlighter/plugin' => array(
            'id' => 'highlighter',
            'module' => 'taoQtiTest/runner/plugins/tools/highlighter/plugin',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Text Highlighter',
            'description' => 'Allows the test taker to highlight text',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/magnifier/magnifier' => array(
            'id' => 'magnifier',
            'module' => 'taoQtiTest/runner/plugins/tools/magnifier/magnifier',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Magnifier',
            'description' => 'Gives student access to a magnification tool',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/lineReader/plugin' => array(
            'id' => 'lineReader',
            'module' => 'taoQtiTest/runner/plugins/tools/lineReader/plugin',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Line Reader',
            'description' => 'Display a customisable mask with a customisable hole in it!',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/answerMasking/plugin' => array(
            'id' => 'answerMasking',
            'module' => 'taoQtiTest/runner/plugins/tools/answerMasking/plugin',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Answer Masking',
            'description' => 'Hide all answers of a choice interaction and allow revealing them',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/answerElimination/eliminator' => array(
            'id' => 'eliminator',
            'module' => 'taoQtiTest/runner/plugins/tools/answerElimination/eliminator',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Eliminate choices',
            'description' => 'Allows student to eliminate choices',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/tools/areaMasking/areaMasking' => array(
            'id' => 'area-masking',
            'module' => 'taoQtiTest/runner/plugins/tools/areaMasking/areaMasking',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Area Masking',
            'description' => 'Mask areas of the item',
            'category' => 'tools',
            'active' => true,
            'tags' => array(
            )
        ),
        'taoQtiTest/runner/plugins/security/disableRightClick' => array(
            'id' => 'disableRightClick',
            'module' => 'taoQtiTest/runner/plugins/security/disableRightClick',
            'bundle' => 'taoQtiTest/loader/testPlugins.min',
            'position' => null,
            'name' => 'Disable right click',
            'description' => 'Disable right click context menu on items',
            'category' => 'security',
            'active' => false,
            'tags' => array(
                'core'
            )
        )
    )
));
