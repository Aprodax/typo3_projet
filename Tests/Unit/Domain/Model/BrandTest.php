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
class BrandTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLabelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLabel()
        );
    }

    /**
     * @test
     */
    public function setLabelForStringSetsLabel()
    {
        $this->subject->setLabel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'label',
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
    public function getLogoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getLogo()
        );
    }

    /**
     * @test
     */
    public function setLogoForFileReferenceSetsLogo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setLogo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'logo',
            $this->subject
        );
    }
}
