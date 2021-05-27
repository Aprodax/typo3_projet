<?php
namespace Aprodax\CatalogueFtcbtclc\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Theo Chauvreau <theo.chauvreau@etu.u-bordeaux.fr>
 * @author Florian Tourinel <florian.tourinel@etu.u-bordeaux.fr>
 * @author Corentyn Boutant <corentyn.boutant@etu.u-bordeaux.fr>
 * @author Loic Coissard <loic.coissard@etu.u-bordeaux.fr>
 */
class ProductControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Controller\ProductController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Aprodax\CatalogueFtcbtclc\Controller\ProductController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProductsFromRepositoryAndAssignsThemToView()
    {

        $allProducts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $productRepository = $this->getMockBuilder(\Aprodax\CatalogueFtcbtclc\Domain\Repository\ProductRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $productRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProducts));
        $this->inject($this->subject, 'productRepository', $productRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('products', $allProducts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProductToView()
    {
        $product = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Product();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('product', $product);

        $this->subject->showAction($product);
    }
}
