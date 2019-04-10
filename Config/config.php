<?php
return array(
    'name' => 'Google Sheet',
    'description' => 'This plugin lets you import contacts from google sheets, by providing sheet and worksheet name',
    'author' => 'Andreas Stoll',
    'website' => 'https://explainr.de',
    'version' => '1.0.0',
    "routes" => array(
        'main' => array(
            'plugin_mautic_gs_index' => array(
                'path' => '/gs',
                'controller' => 'MauticGSBundle:GS:index'
            ),
            'plugin_mautic_gs_single' => array(
                'path' => '/gs/single',
                'controller' => 'MauticGSBundle:GS:single'
            ),
            'plugin_mautic_gs_massimport' => [
                'path' => '/gs/massimport',
                'controller'=> 'MauticGSBundle:GS:massimport'
            ],
            'plugin_mautic_gs_changesegment' => [
                'path' => '/gs/changesegment',
                'controller'=> 'MauticGSBundle:GS:changesegment'
            ],
            'plugin_mautic_gs_deletechangesegment' => [
                'path' => '/gs/deletechangesegment',
                'controller'=> 'MauticGSBundle:GS:deletechangesegment'
            ]
        )
    ),
    'menu' => array(
        'main' => array(
            'priority' => 24,
            'items' => array(
                'GS Import' => array(
                    'route' => 'plugin_mautic_gs_index',
                    'iconClass' => 'fa-download'
                )
            )
        )
    ),
);