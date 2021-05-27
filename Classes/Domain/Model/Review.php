<?php
namespace Aprodax\CatalogueFtcbtclc\Domain\Model;


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
 * Review
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Auteur de l'avis
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $reviewer = '';

    /**
     * Commentaire
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $comment = '';

    /**
     * Note
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $rating = 0;

    /**
     * Date du commentaire
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $reviewDate = null;

    /**
     * Returns the reviewer
     * 
     * @return string $reviewer
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Sets the reviewer
     * 
     * @param string $reviewer
     * @return void
     */
    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    }

    /**
     * Returns the comment
     * 
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     * 
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Returns the rating
     * 
     * @return int $rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the rating
     * 
     * @param int $rating
     * @return void
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * Returns the reviewDate
     * 
     * @return \DateTime $reviewDate
     */
    public function getReviewDate()
    {
        return $this->reviewDate;
    }

    /**
     * Sets the reviewDate
     * 
     * @param \DateTime $reviewDate
     * @return void
     */
    public function setReviewDate(\DateTime $reviewDate)
    {
        $this->reviewDate = $reviewDate;
    }
}
