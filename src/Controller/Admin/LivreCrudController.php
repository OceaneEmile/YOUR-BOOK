<?php

namespace App\Controller\Admin;

use App\Entity\Livre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LivreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livre::class;
    }

    //C'est dans cette méthode qu'on va configurer les champs
    public function configureFields(string $pageName): iterable
    {
        //Appel de la méthode du parent
        yield from parent::configureFields($pageName);
        // on ajoute les champs qui manquent de type association
        yield AssociationField::new('auteur');
        yield AssociationField::new('editeur');
        yield AssociationField::new('genres');

    }

}
