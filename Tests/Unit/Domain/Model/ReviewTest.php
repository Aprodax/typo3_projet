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
class ReviewTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Aprodax\CatalogueFtcbtclc\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getReviewerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getReviewer()
        );
    }

    /**
     * @test
     */
    public function setReviewerForStringSetsReviewer()
    {
        $this->subject->setReviewer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'reviewer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForIntSetsRating()
    {
        $this->subject->setRating(12);

        self::assertAttributeEquals(
            12,
            'rating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReviewDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getReviewDate()
        );
    }

    /**
     * @test
     */
    public function setReviewDateForDateTimeSetsReviewDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setReviewDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'reviewDate',
            $this->subject
        );
    }
}
