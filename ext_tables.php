<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        // Add Page TSConfig
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:invisiblerecaptcha/Configuration/PageTsConfig/Recaptcha.typoscript">'
        );
    }
);
