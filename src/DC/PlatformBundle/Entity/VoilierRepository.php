<?php

namespace DC\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VoilierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VoilierRepository extends EntityRepository
{
	public function getVoilier($id){
	
		return $this
		->createQueryBuilder('v')
		->leftjoin('v.idmbr', 'prop')
		->addSelect('prop')
		->leftjoin('v.numvoil', 'part')
		->addSelect('part')
		->where('part.codepar = :participe')
		->setParameter('participe', null )
		->andWhere('prop.idmbr > :id')
		->setParameter('id', $id)
	
	
		;
	}
}
