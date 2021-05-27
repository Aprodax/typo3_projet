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
 * Catégorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * Sous-catégories
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $children = null;

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
        $this->children = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Category
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Category $child
     * @return void
     */
    public function addChild(\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $child)
    {
        $this->children->attach($child);
    }

    /**
     * Removes a Category
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Category $childToRemove The Category to be removed
     * @return void
     */
    public function removeChild(\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $childToRemove)
    {
        $this->children->detach($childToRemove);
    }

    /**
     * Returns the children
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category> $children
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets the children
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Aprodax\CatalogueFtcbtclc\Domain\Model\Category> $children
     * @return void
     */
    public function setChildren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $children)
    {
        $this->children = $children;
    }
}
