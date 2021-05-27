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
class PropertyTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Property
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Property();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValue()
        );
    }

    /**
     * @test
     */
    public function setValueForStringSetsValue()
    {
        $this->subject->setValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'value',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFeatureReturnsInitialValueForFeature()
    {
        self::assertEquals(
            null,
            $this->subject->getFeature()
        );
    }

    /**
     * @test
     */
    public function setFeatureForFeatureSetsFeature()
    {
        $featureFixture = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature();
        $this->subject->setFeature($featureFixture);

        self::assertAttributeEquals(
            $featureFixture,
            'feature',
            $this->subject
        );
    }
}
