<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

//require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('mmimagemap').'Classes/Utility/AjaxDispatcher.php';
//$TYPO3_CONF_VARS['BE']['AJAX']['mmimagemapAjaxDispatcher'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('mmimagemap').'Classes/Utility/AjaxDispatcher.php:Tx_mmimagemap_Utility_AjaxDispatcher->initAndDispatch';

// FE plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    "mmimagemap",
    'Pi1',
    [
        \MikelMade\Mmimagemap\Controller\FrontendDisplayController::class => 'list'
    ],
    // non-cacheable actions
    [
        \MikelMade\Mmimagemap\Controller\FrontendDisplayController::class => 'list'
    ]
);
