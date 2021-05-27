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
 * Marque
 */
class Brand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Libellé
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $label = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Logo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $logo = null;

    /**
     * Returns the label
     * 
     * @return string $label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the label
     * 
     * @param string $label
     * @return void
     */
    public function setLabel($label)
    {
        $this->label = $label;
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
     * Returns the logo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }
}
