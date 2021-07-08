<?php
namespace Aprodax\CatalogueFtcbtclc\Domain\Repository;


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
 * The repository for Products
 */
class ProductRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function search(\Aprodax\CatalogueFtcbtclc\Domain\Dto\Query\ProductSearch $search) {
        $query = $this->createQuery();
        $constraints = [];

        if(is_string($search->getText()) && strlen($search->getText()) > 0 && $search->getText() !== null)
            $constraints[] = $query->logicalOr([ $query->like('description', '%' . $search->getText() . '%'), $query->like('title', '%' . $search->getText() . '%') ]);
        if($search->getCategory() !== null) 
            $constraints[] = $query->contains('categories', $search->getCategory());
        if($search->getMinPrice() !== null) 
            $constraints[] = $query->greaterThanOrEqual('price', $search->getMinPrice());
        if($search->getMaxPrice() !== null) 
            $constraints[] = $query->lessThanOrEqual('price', $search->getMaxPrice());

        $query->matching($query->logicalAnd($constraints));
        return $query->execute();
    }
}
