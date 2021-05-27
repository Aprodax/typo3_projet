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
 * Produits
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Titre
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * Prix
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0.0;

    /**
     * Images
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images = null;

    /**
     * Vidéos
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $videos = null;

    /**
     * Date de sortie
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $availabilityDate = null;

    /**
     * Catégories
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $categories = null;

    /**
     * Marque
     * 
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $brand = null;

    /**
     * Propriétés
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Property>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $properties = null;

    /**
     * Avis
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Review>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $reviews = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->properties = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the videos
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $videos
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Sets the videos
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $videos
     * @return void
     */
    public function setVideos(\TYPO3\CMS\Extbase\Domain\Model\FileReference $videos)
    {
        $this->videos = $videos;
    }

    /**
     * Returns the availabilityDate
     * 
     * @return \DateTime $availabilityDate
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * Sets the availabilityDate
     * 
     * @param \DateTime $availabilityDate
     * @return void
     */
    public function setAvailabilityDate(\DateTime $availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;
    }

    /**
     * Adds a Category
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Returns the brand
     * 
     * @return \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Brand $brand
     * @return void
     */
    public function setBrand(\Aprodax\CatalogueFtcbtclc\Domain\Model\Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Adds a Property
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Property $property
     * @return void
     */
    public function addProperty(\Aprodax\CatalogueFtcbtclc\Domain\Model\Property $property)
    {
        $this->properties->attach($property);
    }

    /**
     * Removes a Property
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Property $propertyToRemove The Property to be removed
     * @return void
     */
    public function removeProperty(\Aprodax\CatalogueFtcbtclc\Domain\Model\Property $propertyToRemove)
    {
        $this->properties->detach($propertyToRemove);
    }

    /**
     * Returns the properties
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Property> $properties
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets the properties
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Property> $properties
     * @return void
     */
    public function setProperties(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $properties)
    {
        $this->properties = $properties;
    }

    /**
     * Adds a Review
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Aprodax\CatalogueFtcbtclc\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Aprodax\CatalogueFtcbtclc\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }
}
