<?php

namespace App\Repository;

use App\Entity\Envoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Envoi>
 *
 * @method Envoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Envoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Envoi[]    findAll()
 * @method Envoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnvoiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Envoi::class);
    }

    public function add(Envoi $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Envoi $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findAllEnvoiTest($debut = NULL , $fin = NULL, $numero = NULL)
    {
        if ($debut != '' && $fin != '') {
            $clause = "WHERE envoi.dateenvoi BETWEEN '$debut' AND '$fin'";
            //dd('iray');
        }
        else {
            $clause = " ";
        }
        $str = "SELECT dbo.Envoi.numEnvoi AS dtenumenvoi, dbo.Envoi.codeBarre, dbo.Historique.dateHistorique AS dtedatehist, dbo.Historique.dateHistoriqueFull AS dtedatehistfull, TblBureau_3.Nombureau AS dteparcours, dbo.Historique.statut AS dtestatut, TblBureau_4.Nombureau AS dtebursuiv, TblBureau_1.Nombureau AS dtenomBureauOri, TblBureau_2.Nombureau AS dtenomburdest, PersonneDest.nom AS dtedest, PersonneDest.adresse AS dteadressedest, dbo.Envoi.poids AS dtepoids, dbo.Facture.numBordereau AS dtenumbord, p1.vehicle as Voiture  FROM  dbo.Envoi INNER JOIN  dbo.Historique ON dbo.Envoi.numEnvoi = dbo.Historique.numEnvoi INNER JOIN   dbo.Facture ON dbo.Historique.numEnvoi = dbo.Facture.numEnvoi INNER JOIN dbo.TblBureau ON dbo.Envoi.bureauOri = dbo.TblBureau.NCODIQUE INNER JOIN  dbo.TblBureau AS TblBureau_1 ON dbo.Envoi.bureauOri = TblBureau_1.NCODIQUE INNER JOIN dbo.TblBureau AS TblBureau_2 ON dbo.Envoi.bureauDest = TblBureau_2.NCODIQUE INNER JOIN dbo.TblBureau AS TblBureau_3 ON dbo.Historique.parcours = TblBureau_3.NCODIQUE FULL JOIN dbo.TblBureau AS TblBureau_4 ON dbo.Historique.burSuiv = TblBureau_4.NCODIQUE INNER JOIN dbo.Personne AS PersonneDest ON dbo.Facture.idPersDest = PersonneDest.idPers INNER JOIN dbo.Personne AS PersonneExp ON dbo.Facture.idPersExp = PersonneExp.idPers LEFT  JOIN dbo.PartColis p1 ON (dbo.Envoi.codeBarre = p1.idColis and p1.idPartColis=(select Max(p2.idPartColis) from PartColis p2 where dbo.Envoi.codeBarre=p2.idColis) ) ";

        
        $dql = "SELECT envoi.* FROM App\Entity\Envoi envoi
         $clause ";
        
        $str2 = "SELECT envoi.numenvoi,historique.datehistoriquefull,envoi.poids,envoi.bureauori,envoi.bureauexp,envoi.bureaudest,envoi.bureaupass,envoi.typeenvoi,envoi.prixrapida,envoi.zone FROM App\Entity\Envoi envoi INNER JOIN App\Entity\Historique historique WITH envoi.numenvoi = historique.numenvoi 
        $clause ";
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }
    public function findNumFacture()
    {
        
        $dql = "SELECT historique.isactive FROM App\Entity\Historique historique WHERE historique.idhistorique = '1051' ";
        $str = "SELECT dbo.Facture.numBordereau, dbo.Envoi.numEnvoi, dbo.Envoi.dateEnvoi, dbo.Facture.numFacture   
            FROM dbo.Envoi LEFT OUTER JOIN  dbo.Facture ON dbo.Envoi.numEnvoi = dbo.Facture.numEnvoi" ;

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }

    public function findAllEnvoiByDate($debut = NULL , $fin = NULL, $numero = NULL) 
    {
        return $this->createQueryBuilder('l')
            ->where('l.dateenvoi >= :debut ')
            ->andWhere('l.dateenvoi <= :fin')
            ->setParameter('debut', $debut)
            ->setParameter('fin', $fin)
            ->orderBy('l.dateenvoi', 'DESC')
            ->getQuery()
            ->getArrayResult();
    }

    public function findAllEnvoiByNumero($numero) 
    {
        return $this->createQueryBuilder('l')
            ->where('l.numenvoi = :numero ')
            ->setParameter('numero', $numero)
            ->getQuery()
            ->getArrayResult();
    }

    public function findAllEnvoiByNumBordereau($numbordereau) 
    {
        return $this->createQueryBuilder('l')
            ->innerJoin('f.numenvoi', 'f')
            ->where('l.numenvoi = :numero ')
            ->setParameter('numero', $numero)
            ->getQuery()
            ->getArrayResult();
    }
}
