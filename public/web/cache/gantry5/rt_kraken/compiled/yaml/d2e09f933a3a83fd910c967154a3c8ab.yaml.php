<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/dev/dauster/public/web/media/gantry5/engines/nucleus/particles/totop.yaml',
    'modified' => 1536384995,
    'data' => [
        'name' => 'To Top',
        'description' => 'Scroll back to top.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to top particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => 'totop'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'A Font Awesome icon to be displayed for the link.'
                ],
                'content' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'The text to be displayed for the link. HTML is allowed.',
                    'placeholder' => 'To Top'
                ]
            ]
        ]
    ]
];
