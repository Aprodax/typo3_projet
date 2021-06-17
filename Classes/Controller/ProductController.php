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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     * 
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Repository\ProductRepository
     */
    protected $productRepository = null;

    /**
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(\Aprodax\CatalogueFtcbtclc\Domain\Repository\ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction(\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $category = null, \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand $brand = null)
    {
        $products = $this->productRepository->findAll();
        $this->view->assignMultiple([
            'products' => $products,
            'categories' => $category
        ]);
    }

    /**
     * action show
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Product $product
     * @return void
     */
    public function showAction(\Aprodax\CatalogueFtcbtclc\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction(\Aprodax\CatalogueFtcbtclc\Domain\Dto\Query\ProductSearch $query)
    {
    }

    /**
     * action focus
     * 
     * @return void
     */
    public function focusAction()
    {
    }

    /**
     * action review
     * 
     * @return void
     */
    public function reviewAction()
    {
    }
}
