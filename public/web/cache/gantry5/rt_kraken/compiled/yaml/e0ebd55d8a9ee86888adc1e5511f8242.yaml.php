<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\dauster\\public\\web/templates/rt_kraken/particles/swiper.yaml',
    'modified' => 1541184822,
    'data' => [
        'name' => 'Swiper',
        'description' => 'Display swiper.',
        'type' => 'particle',
        'icon' => 'fa-newspaper-o',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
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
                'elementID' => [
                    'type' => 'input.text',
                    'label' => 'Element ID',
                    'description' => 'Please put unique Element ID to differ it with another same particle, for example: swiper-1, swiper-2, etc.',
                    'placeholder' => 'swiper-1'
                ],
                'layout' => [
                    'type' => 'select.select',
                    'label' => 'Layout',
                    'description' => 'Choose the layout.',
                    'default' => 'g-horizontal-slides',
                    'options' => [
                        'g-horizontal-slides' => 'Horizontal Slides',
                        'g-vertical-slides' => 'Vertical Slides',
                        'g-carousel' => 'Carousel'
                    ]
                ],
                'elementHeight' => [
                    'type' => 'input.text',
                    'label' => 'Element Height',
                    'description' => 'Set the Element Height if you choose Horizontal or Vertical Slides layout',
                    'placeholder' => '600px'
                ],
                'elementHeightMobile' => [
                    'type' => 'input.text',
                    'label' => 'Mobile Element Height',
                    'description' => 'Set the Element Height if you choose Horizontal or Vertical Slides layout',
                    'placeholder' => '300px'
                ],
                'slidesPerView' => [
                    'type' => 'input.text',
                    'label' => 'Slide per View',
                    'description' => 'Set the amount for the Slide per View for Carousel layout',
                    'placeholder' => 2
                ],
                'slidesPerViewMobile' => [
                    'type' => 'input.text',
                    'label' => 'Slide per View for Mobile',
                    'description' => 'Set the amount for the Slide per View for Carousel layout',
                    'placeholder' => 1
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Swiper Items',
                    'description' => 'Create each swiper item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'SubTitle'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ]
                    ]
                ]
            ]
        ]
    ]
];