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
 * Property
 */
class Property extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Valeur
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $value = '';

    /**
     * Caractéristique
     * 
     * @var \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $feature = null;

    /**
     * Returns the value
     * 
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     * 
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the feature
     * 
     * @return \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature $feature
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets the feature
     * 
     * @param \Aprodax\CatalogueFtcbtclc\Domain\Model\Feature $feature
     * @return void
     */
    public function setFeature(\Aprodax\CatalogueFtcbtclc\Domain\Model\Feature $feature)
    {
        $this->feature = $feature;
    }
}
