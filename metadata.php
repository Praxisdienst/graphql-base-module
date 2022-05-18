<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oe_graphql_base',
    'title'       => [
        'de'      => 'GraphQL Base',
        'en'      => 'GraphQL Base',
    ],
    'description' => [
        'de'      => '<span>OXID GraphQL API Framework</span>',
        'en'      => '<span>OXID GraphQL API Framework</span>',
    ],
    'thumbnail'   => 'out/pictures/logo.png',
    'version'     => '6.0.1',
    'author'      => 'OXID eSales',
    'url'         => 'www.oxid-esales.com',
    'email'       => 'info@oxid-esales.com',
    'extend'      => [
    ],
    'controllers' => [
        // Widget Controller
        'graphql' => OxidEsales\GraphQL\Base\Component\Widget\GraphQL::class,
    ],
    'templates'   => [
    ],
    'blocks'      => [
    ],
    'settings'    => [
        [
            'group' => 'graphql_base',
            'name'  => 'sJsonWebTokenSignature',
            'type'  => 'str',
            'value' => 'CHANGE ME',
        ],
        [
            'group' => 'graphql_base',
            'name'  => 'sJsonWebTokenLifetime',
            'type'        => 'select',
            'constraints' => '15min|1hrs|3hrs|8hrs|24hrs|1wk|1mo|1yr',
            'value' => '8hrs'
        ],
        [
            'group' => 'graphql_base',
            'name'  => 'sJsonWebTokenUserQuota',
            'type'  => 'str',
            'value' => '10000',
        ],
    ],
    'events'      => [
        'onActivate'   => '\OxidEsales\GraphQL\Base\Infrastructure\ModuleSetup::onActivate',
        'onDeactivate' => '\OxidEsales\GraphQL\Base\Infrastructure\ModuleSetup::onDeactivate',
    ],
];
