<?php
namespace Aprodax\CatalogueFtcbtclc\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Theo Chauvreau <theo.chauvreau@etu.u-bordeaux.fr>
 * @author Florian Tourinel <florian.tourinel@etu.u-bordeaux.fr>
 * @author Corentyn Boutant <corentyn.boutant@etu.u-bordeaux.fr>
 * @author Loic Coissard <loic.coissard@etu.u-bordeaux.fr>
 */
class CategoryTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getChildrenReturnsInitialValueForCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getChildren()
        );
    }

    /**
     * @test
     */
    public function setChildrenForObjectStorageContainingCategorySetsChildren()
    {
        $child = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Category();
        $objectStorageHoldingExactlyOneChildren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneChildren->attach($child);
        $this->subject->setChildren($objectStorageHoldingExactlyOneChildren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneChildren,
            'children',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addChildToObjectStorageHoldingChildren()
    {
        $child = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Category();
        $childrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $childrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($child));
        $this->inject($this->subject, 'children', $childrenObjectStorageMock);

        $this->subject->addChild($child);
    }

    /**
     * @test
     */
    public function removeChildFromObjectStorageHoldingChildren()
    {
        $child = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Category();
        $childrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $childrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($child));
        $this->inject($this->subject, 'children', $childrenObjectStorageMock);

        $this->subject->removeChild($child);
    }
}
