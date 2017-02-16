<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav/user/themes/ctms-theme/blueprints.yaml',
    'modified' => 1487218756,
    'data' => [
        'name' => 'Ctms Theme',
        'version' => '0.1.0',
        'description' => 'CT Music Studio Theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Jamie Guerrero <3',
            'email' => 'me@jamieguerrero.com'
        ],
        'homepage' => 'https://github.com/jamie-guerrero-3/grav-theme-ctms-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/jamie-guerrero-3/grav-theme-ctms-theme/issues',
        'readme' => 'https://github.com/jamie-guerrero-3/grav-theme-ctms-theme/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
