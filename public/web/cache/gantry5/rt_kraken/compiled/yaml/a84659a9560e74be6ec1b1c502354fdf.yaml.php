<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/dev/dauster/public/web/templates/rt_kraken/blueprints/styles/utility.yaml',
    'modified' => 1536385015,
    'data' => [
        'name' => 'Utility Styles',
        'description' => 'Utility styles for the Kraken theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#272c35'
                ]
            ]
        ]
    ]
];
