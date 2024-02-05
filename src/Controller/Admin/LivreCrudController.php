<?php

namespace App\Controller\Admin;

use App\Entity\Livre;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class LivreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livre::class;
    }

    //C'est dans cette méthode qu'on va configurer les champs
    public function configureFields(string $pageName): iterable
    {
        
        yield TextField::new('titre');
        yield TextField::new('isbn');
        yield TextareaField::new('description');
        yield BooleanField::new('archive');

        yield TextareaField::new('imageFile')->setFormType(VichImageType::class);
        yield AssociationField::new('auteur');
        yield AssociationField::new('editeur');
        yield AssociationField::new('genres');

    }

}
