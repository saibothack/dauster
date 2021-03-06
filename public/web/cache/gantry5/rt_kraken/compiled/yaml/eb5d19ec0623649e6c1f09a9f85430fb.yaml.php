<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/dev/dauster/public/web/templates/rt_kraken/particles/newsletter.yaml',
    'modified' => 1536385015,
    'data' => [
        'name' => 'Newsletter',
        'description' => 'Display newsletter form.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'headtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Heading Text',
                    'description' => 'Customize the heading text.',
                    'placeholder' => 'Enter short heading text'
                ],
                'inputboxtext' => [
                    'type' => 'input.text',
                    'label' => 'InputBox Text',
                    'description' => 'Customize the InputBox text.',
                    'placeholder' => 'Email Address'
                ],
                'buttontext' => [
                    'type' => 'input.text',
                    'label' => 'Button Text',
                    'description' => 'Customize the Button text.',
                    'placeholder' => 'Join'
                ],
                'uri' => [
                    'type' => 'input.text',
                    'label' => 'Feedburner URI',
                    'description' => 'Please put your Feedburner Email Subscriptions URI here.',
                    'placeholder' => 'Feedburner URI'
                ],
                'buttonclass' => [
                    'type' => 'input.selectize',
                    'label' => 'Button Classes',
                    'description' => 'CSS class name for the join button.'
                ]
            ]
        ]
    ]
];
