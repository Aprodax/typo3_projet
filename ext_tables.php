<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('catalogue_ftcbtclc', 'Configuration/TypoScript', 'Catalogue ftcbtclc');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_product', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_product');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_category', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_brand', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_brand.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_brand');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_feature', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_feature.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_feature');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_property', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_property.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_property');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalogueftcbtclc_domain_model_review', 'EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_csh_tx_catalogueftcbtclc_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalogueftcbtclc_domain_model_review');

    }
);
