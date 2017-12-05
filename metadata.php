<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'linslinExampleModule',
    'title'       => array(
        'de' => 'OXID6 example module',
        'en' => 'OXID6 example module',
    ),
    'description' => array(
        'de' => '<h2>OXID6 example module</h2>',
        'en' => '<h2>OXID6 example module</h2>',
    ),
    'thumbnail'   => 'out/pictures/linslin-org-logo.png',
    'version'     => '1.0.0',
    'author'      => 'linslin.org UG | Codes and freedom',
    'url'         => 'https://www.linslin.org',
    'email'       => 'info@linslin.org',
    'extend'      => array(
    ),
    'controllers'       => array(
        'linslinexamplemodulemain' => \linslin\oxid6ExampleModule\Controller\Admin\MainController::class,
    ),
    'files'       => array(),
    'templates'   => array(
        'main.tpl' => 'linslin/oxid6-example-module/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
