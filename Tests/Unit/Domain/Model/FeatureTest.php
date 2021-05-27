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
class FeatureTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUnitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUnit()
        );
    }

    /**
     * @test
     */
    public function setUnitForStringSetsUnit()
    {
        $this->subject->setUnit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'unit',
            $this->subject
        );
    }
}
