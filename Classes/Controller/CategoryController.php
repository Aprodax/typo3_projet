<?php
namespace Aprodax\CatalogueFtcbtclc\Controller;


/***
 *
 * This file is part of the "Catalogue ftcbtclc" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Theo Chauvreau <theo.chauvreau@etu.u-bordeaux.fr>, IUT de Bordeaux
 *           Florian Tourinel <florian.tourinel@etu.u-bordeaux.fr>, IUT de Bordeaux
 *           Corentyn Boutant <corentyn.boutant@etu.u-bordeaux.fr>, IUT de Bordeaux
 *           Loic Coissard <loic.coissard@etu.u-bordeaux.fr>, IUT de Bordeaux
 *
 ***/
/**
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     * 
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\Aprodax\CatalogueFtcbtclc\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }
}
