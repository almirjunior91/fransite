<?php

namespace Franbella\Bundle\AdminBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PDVRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PDVRepository extends EntityRepository
{
    
    public function listarTodos($limite = null)
    {
        $qb = $this->createQueryBuilder('d')
                   ->select('d')
                   ->addOrderBy('d.razaoSocial');

        if (false === is_null($limite))
            $qb->setMaxResults($limite);

        return $qb->getQuery()
                  ->getResult();
    }
    
    public function listarTodosEstados($limite = null)
    {
        $qb = $this->createQueryBuilder('p')
                   ->select('b.uf')
                   ->distinct()
                   ->innerJoin('BFOSBrasilBundle:Cidade', 'b')
                   ->where('b.id = p.cidade')
                   ->orderBy('b.uf')
                ;

        if (false === is_null($limite))
            $qb->setMaxResults($limite);

        return $qb->getQuery()
                  ->getResult();
    }
    
    public function listarTodasCidadesPorEstado($uf)
    {
        $qb = $this->createQueryBuilder('p')
                   ->select('b')
                   ->distinct()
                   ->innerJoin('BFOSBrasilBundle:Cidade', 'b')
                   ->where('b.id = p.cidade')
                   ->andWhere('b.uf = :uf')
                   ->orderBy('b.nome')
                   ->setParameter(':uf', $uf)
                ;

        return $qb->getQuery()
                  ->getResult();
    }
    
    public function listarTodosBairrosPorCidade($cidade)
    {
        $qb = $this->createQueryBuilder('p')
                   ->select('p')
                   ->distinct()
                   ->innerJoin('BFOSBrasilBundle:Cidade', 'b')
                   ->where('b.id = p.cidade')
                   ->andWhere('p.cidade = :cidade')
                   ->orderBy('p.bairro')
                   ->setParameter(':cidade', $cidade)
                ;

        return $qb->getQuery()
                  ->getResult();
    }
    
    public function listarTodosPDVsPorCidadeETipo($cidade, $bairro, $tipoPDV)
    {
        $qb = $this->createQueryBuilder('p')
                   ->select('p')
                   ->distinct()
                   ->innerJoin('BFOSBrasilBundle:Cidade', 'b')
//                   ->where('b.id = p.cidade')
                   ->where('p.cidade = :cidade')
                   ->andWhere('p.bairro = :bairro OR :bairro = -1')
                   ->andWhere('p.tipoPdv = :tipoPdv OR :tipoPdv = -1')
                   //->orWhere('p.tipoPdv = -1')
                  ->orderBy('p.bairro, p.fantasia')
                   ->setParameter(':cidade', $cidade)
                   ->setParameter(':bairro', $bairro)
                   ->setParameter(':tipoPdv', $tipoPDV)
                ;

        return $qb->getQuery()
                  ->getResult();
    }
    
}
