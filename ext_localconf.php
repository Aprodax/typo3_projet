<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Aprodax.CatalogueFtcbtclc',
            'Pi1',
            [
                'Product' => 'list, show, search, review',
                'Review' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Product' => 'search',
                'Review' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Aprodax.CatalogueFtcbtclc',
            'Pi2',
            [
                'Category' => 'list'
            ],
            // non-cacheable actions
            [
                'Product' => '',
                'Category' => '',
                'Review' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Aprodax.CatalogueFtcbtclc',
            'Pi3',
            [
                'Product' => 'focus'
            ],
            // non-cacheable actions
            [
                'Product' => '',
                'Category' => '',
                'Review' => 'create'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = catalogue_ftcbtclc-plugin-pi1
                            title = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi1.name
                            description = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = catalogueftcbtclc_pi1
                            }
                        }
                        pi2 {
                            iconIdentifier = catalogue_ftcbtclc-plugin-pi2
                            title = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi2.name
                            description = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi2.description
                            tt_content_defValues {
                                CType = list
                                list_type = catalogueftcbtclc_pi2
                            }
                        }
                        pi3 {
                            iconIdentifier = catalogue_ftcbtclc-plugin-pi3
                            title = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi3.name
                            description = LLL:EXT:catalogue_ftcbtclc/Resources/Private/Language/locallang_db.xlf:tx_catalogue_ftcbtclc_pi3.description
                            tt_content_defValues {
                                CType = list
                                list_type = catalogueftcbtclc_pi3
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'catalogue_ftcbtclc-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:catalogue_ftcbtclc/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
			$iconRegistry->registerIcon(
				'catalogue_ftcbtclc-plugin-pi2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:catalogue_ftcbtclc/Resources/Public/Icons/user_plugin_pi2.svg']
			);
		
			$iconRegistry->registerIcon(
				'catalogue_ftcbtclc-plugin-pi3',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:catalogue_ftcbtclc/Resources/Public/Icons/user_plugin_pi3.svg']
			);
		
    }
);
