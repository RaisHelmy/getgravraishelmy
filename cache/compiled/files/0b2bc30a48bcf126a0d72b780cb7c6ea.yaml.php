<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/themes/future/blueprints.yaml',
    'modified' => 1568003430,
    'data' => [
        'name' => 'Future',
        'version' => '1.0.7',
        'description' => 'Future Imperfect by HTML5 UP, features a clean, minimalistic design, styling for all basic page elements and HTML5/CSS3 code designed for quick and easy customization.',
        'icon' => 'group',
        'author' => [
            'name' => 'Lawrence Meckan',
            'email' => 'media@absalom.biz',
            'url' => 'http://www.absalom.biz'
        ],
        'homepage' => 'https://github.com/absalomedia/grav-theme-future',
        'keywords' => 'future, imperfect, minimalist, theme, modern, fast, responsive, html5, css3, blog',
        'bugs' => 'https://github.com/absalomedia/grav-theme-future/issues',
        'license' => 'CC-BY-3.0',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
