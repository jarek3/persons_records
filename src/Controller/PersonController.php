<?php

namespace App\Controller;

use App\Entity\Person;
use App\Repository\PersonRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use phpDocumentor\Reflection\Types\Float_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Kontroler pro práci s osobami.
 * @package App\Controller
 */
class PersonController extends AbstractController
{
    /** @var PersonRepository Repositář pro správu osob. */
    private $personRepository;

    /**
     * Konstruktor kontroleru pro práci s osobami.
     * @param PersonRepository $personRepository automaticky injektovaný repositář pro správu osob
     */
    public function __construct(PersonRepository $personRepository)
    {
        $this -> personRepository = $personRepository;
    }

    /**
     * Načte a předá seznam všech osob do šablony.
     * @return Response HTTP odpověď
     * @Route("/seznam-polozek", name="person_list")
     */
    public function list(): Response
    {
        return $this -> render('person/list.html.twig', ['persons' => $this -> personRepository -> findAll()]);
    }

    /**
     * Odstraní položku podle jeho ID.
     * @param string|null $url
     * @return Response HTTP odpověď
     * @Route("/odstranit/{url}", name="remove_person")
     */
    public function remove(string $url = null): Response
    {
        $this->personRepository->remove($url);
        $this->addFlash('notice', 'Položka byla úspěšně odstraněna.');
        return $this->redirectToRoute('person_list');
    }


    /**
     * Vytváří a zpracovává formulář pro editaci osoby podle jeho ID.
     * @param Request $request HTTP požadavek
     * @param int|null $id
     * @return Response HTTP odpověď
     * @throws ORMException Jestliže nastane chyba při ukládání osoby.
     * @Route("/editor/{id}", name="person_editor")
     */
    public function editor(Request $request, int $id = null): Response
    {
        if ($id) { // Pokud bylo zadáno ID, pokusí se načíst položku podle něho.
             if (!($person = $this -> personRepository -> findOneById($id))) {
                // Pokud se položku s daným ID nepodaří najít, vypíše chybovou hlášku a vytvoří nový.
                $this -> addFlash('warning', 'Položka se zadanoým ID nebyla nalezena!');
                $person = (new Person()) -> setUrl($id);
            }
        } else $person = new Person(); // Jinak se nejedná o editaci osoby a vytváří se nová položka.
        // Vytváření editačního formuláře podle entity osoby.
        $editorForm = $this->createFormBuilder($person)
            ->add('name', null, ['label' => 'Jméno'])
            ->add('surname', null, ['label' => 'Příjmení'])
            ->add('phone_number', null, ['label' => 'Telefonní číslo'])
            ->add('submit', SubmitType::class, ['label' => 'Uložit položku'])
            ->getForm();

        // Zpracování editačního formuláře.
        $editorForm->handleRequest($request);
        if ($editorForm->isSubmitted() && $editorForm->isValid()) {
            $this->personRepository->save($person);
            $this->addFlash('notice', 'Záznam o osobě byl úspěšně uložen.');
            //return $this->redirectToRoute('person', ['url' => $person->getUrl()]);
            return $this->redirectToRoute('person_list');
        }

        // Předání editačního formuláře do šablony.
        return $this->render('person/editor.html.twig', ['editorForm' => $editorForm->createView()]);
    }

}