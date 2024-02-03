<?php

namespace App\Controller\Admin;

use App\Entity\Emprunt;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EmpruntCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Emprunt::class;
    }


    public function configureFields(string $pageName): iterable
    {
       // on ajoute les champs qui manquent de type association
       yield AssociationField::new('adherent');
       yield AssociationField::new('exemplaire');
       //yield DateTimeField::new('date_emprunt');
       yield DateTimeField::new('date_previsionnelle')->SetDisabled(true);
       }
   
}

