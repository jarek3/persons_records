<?php

namespace App\Repository;

use App\Entity\Person;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Person|null find($id, $lockMode = null, $lockVersion = null)
 * @method Person|null findOneBy(array $criteria, array $orderBy = null)
 * @method Person[]    findAll()
 * @method Person[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @package App\Repository
 */
class PersonRepository extends ServiceEntityRepository
{
    /** @inheritdoc */
    public function __construct(ManagerRegistry $registry)
    {
        parent ::__construct($registry, Person::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    /*public function add(Person $entity, bool $flush = true): void
    {
        $this -> _em -> persist($entity);
        if ($flush) {
            $this -> _em -> flush();
        }
    }*/
    /**
     * Vrátí záznam z databáze podle jeho ID.
     * @param int $id ID osoby
     * @return Person|null první osoba, která má dané ID nebo null pokud takové neexistuje
     */
    public function findOneById(int $id): ?Person
    {
        return $this->findOneBy(['id' => $id]);
    }

    /**
     * Vrátí záznam z databáze podle jeho URL.
     * @param string $url URL osoby
     * @return Person|null první osoba, která má danou URL nebo null pokud taková neexistuje
     */
    public function findOneByUrl(string $url): ?Person
    {
        return $this->findOneBy(['url' => $url]);
    }

    /**
     * Uloží položku do systému.
     * Pokud není nastaveno ID, vloží novou, jinak provede editaci.
     * @param Person $person osoba
     * @throws ORMException Jestliže nastane chyba při ukládání položky.
     */
    public function save(Person $person): void
    {
        $this->getEntityManager()->persist($person);
        $this->getEntityManager()->flush($person);
    }

    /**
     * Odstraní položku s daným url.
     * @param string $url
     */
    public function remove(string $url): void
    {
         if ($person = $this -> findOneById($url)) {
            $this -> getEntityManager() -> remove($person);
            $this -> getEntityManager() -> flush();
        }
    }
}

    // /**
    //  * @return Person[] Returns an array of Person objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Person
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

