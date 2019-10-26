<?php

namespace App\Form\Type;
 
use App\Entity\FormEntreprise;
use App\Entity\Formulaire_base;
use App\Entity\Ambiance;
use App\Entity\Nb_partie;
use App\Entity\Format;
use App\Entity\Formule;
use App\Entity\Nb_personne_formule;
use App\Entity\Duree_formule;
use App\Entity\Publique;
use App\Entity\Nationalite;
use App\Entity\Style_dj;
use App\Entity\Vetement_dj;
use App\Entity\Repas_dj;
use App\Entity\Type;
use App\Entity\Habillage;
use App\Entity\Options;
use App\Entity\Fonction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class FormEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add(
                    $builder->create('formulaire_base', FormType::class, ['by_reference' => true,'data_class'=>Formulaire_base::class])
                        ->add('date', DateType::class, [
                                'widget' => 'single_text',
                                'html5' => false,
                            ])
                        ->add('nom_du_lieu', TextType::class, ['label'=>'Quel est le nom du lieu ?',
                                                            'attr'=>['class'=>'select'],
                                                            'required' => false
                                                            ])
                        ->add('heure_de_debut', TimeType::class, [
                            'label' => "A quelle heure commence l'événement ?",
                            'input'  => 'datetime',
                            'widget' => 'choice',
                        ])  
                        ->add('nb_personne', RangeType::class, ['label' => 'Combien de convives sont attendu ?',
                                                                'attr' => [
                                                                    'min' => 10,
                                                                    'max' => 100,
                                                                    'value' => 40]])
                        ->add('nom', TextType::class, ['label' => 'Votre nom',
                                                        'attr'=>['class'=>'select'],
                                                        'required' => false
                                                    ])
                        ->add('email', EmailType::class, ['label' => "Saisissez l'adresse Email du chef de projet",
                                        'attr'=>['class'=>'select',
                                        'pattern'=>"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"],
                                        'required' => false
                                        ])
                        ->add('numero', TelType::class, ['label' => 'Téléphone',
                                            'attr'=>['class'=>'select',
                                            'required' => false,
                                            'placeholder' => 'Entrez votre numéro de téléphone',
                                            'pattern' => "^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$",
                                            'maxlength' => '10',
                                            'minlength' => '10']
                                            ])
                )
                ->add('type', EntityType::class, [ 'class' => Type::class,
                                                    'label' => "Pour quel type d'événement ?",
                                                    'attr'=>['class'=>'select'],
                                                    'choices' => $options['tabTypes'],
                                                    'choice_label' => 'nom' ])
                ->add('adresse_du_lieu', TextType::class, ['label' => "Quelle est l'adresse du lieu de l'événement ?",
                                                           'attr'=>['class'=>'select autocomplete'],
                                                           'required' => false
                                                       ])
                ->add('nb_partie', EntityType::class, [ 'class' => Nb_partie::class,
                                                       'label' => "En combien de partie va se dérouler l'événement ?",
                                                       'attr'=>['class'=>'select'],
                                                       'choices' => $options['tabNb_partie'],
                                                       'choice_label' => 'nom' ])                                                    
                ->add('format', EntityType::class, [ 'class' => Format::class,
                                                       'label' => "Quelle est le format de l'événement ?",
                                                       'attr'=>['class'=>'select'],
                                                       'choices' => $options['tabFormats'],
                                                       'choice_label' => 'nom' ])
                ->add('formule', EntityType::class, [ 'class' => Formule::class,
                                                       'label' => "Choisissez votre formule",
                                                       'multiple' => false,
                                                        'expanded' => true,
                                                       'attr'=>['class'=>'select'],
                                                       'choices' => $options['tabFormules'],
                                                       'choice_label' => 'nom' ])
                // ->add('formule', ChoiceType::class, ['label' => "Choisissez votre formule",
                //                                    'multiple' => false,
                //                                    'expanded' => true,
                //                                    'attr'=>['class'=>'formulaireRadio'],
                //                                    'choices' => [
                //                                        " " => 'Dj set',
                //                                        'dj 2 ' => 'Dj set avec sonorisation',
                //                                        'dj 3 ' => 'Dj set avec sonorisation et lumiere',
                //                                    ]])
                ->add('nb_personne_formule', EntityType::class, [ 'class' => Nb_personne_formule::class,
                                                       'label' => "Pour combien de personnes ?",
                                                       'attr'=>['class'=>'select formulaireRadio'],
                                                       'multiple' => false,
                                                        'expanded' => true,
                                                       'choices' => $options['tabNb_personne_formule'],
                                                       'choice_label' => 'nom' ])
                ->add('duree_formule', EntityType::class, [ 'class' => Duree_formule::class,
                                                       'label' => "Pour quel durée ?",
                                                       'attr'=>['class'=>'select formulaireRadio'],
                                                       'multiple' => false,
                                                        'expanded' => true,
                                                       'choices' => $options['tabDuree_formule'],
                                                       'choice_label' => 'nom' ])
                ->add('theme', TextType::class, ['label' => "Quel est le thème de l'événement ?",
                                              'attr'=>['class'=>'select',
                                                       'placeholder' => 'Soirée année 80,...'],
                                              'required' => false
                                             ])
                ->add('publique', EntityType::class, [ 'class' => Publique::class,
                                             'label' => "Quel publique sera présent ?",
                                             'attr'=>['class'=>'select'],
                                             'choices' => $options['tabPublique'],
                                             'choice_label' => 'nom' ])
                ->add('age', RangeType::class, ['label' => "Pour quelle moyenne d'âge ?",
                                                        'attr' => [
                                                            'min' => 18,
                                                            'max' => 90,
                                                            'value' => 18
                                                ]])
                ->add('nationalite', EntityType::class, [ 'class' => Nationalite::class,
                                                'label' => "De quelle nationalité ?",
                                                'attr'=>['class'=>'select'],
                                                'choices' => $options['tabNationalites'],
                                                'choice_label' => 'nom' ])
                // ->add('nationalite', ChoiceType::class, ['label' => 'De quelle nationalité ?',
                //                                 'multiple'=> true,
                //                                 'attr'=>['class'=>'selectpicker','data-style'=>'btn-primary'],
                //                                 'choices' => [
                //                                     'Français' => 'Français',
                //                                     'Anglais' => 'Anglais',
                //                                     'Espagnole' => 'Espagnole',
                //                                     'Indien' => 'Indien',
                //                                     'International' => 'International',
                //                                     'Portugais' => 'Portugais',
                //                                     'Arabe' => 'Arabe',
                //                                     'Russe' => 'Russe',
                //                                     'Chinois' => 'Chinois',
                //                                     'Italien' => 'Italien',
                //                                 ]])
                ->add('ambiance', EntityType::class, [ 'class' => Ambiance::class,
                                                    'label' => "Quelle ambiance voulez vous au début de l'événement ?",
                                                    'attr'=>['class'=>'select'],
                                                    'choices' => $options['tabAmbiances'],
                                                    'choice_label' => 'nom' ])
                ->add('ambiance_fin', EntityType::class, [ 'class' => Ambiance::class,
                                                        'label' => "Quelle ambiance voulez vous à la fin ?",
                                                        'attr'=>['class'=>'select'],
                                                        'choices' => $options['tabAmbiancesFin'],
                                                        'choice_label' => 'nom' ])
                ->add('style_dj', EntityType::class, [ 'class' => Style_dj::class,
                                                        'label' => "Vous voulez un Dj avec un style plutôt ?",
                                                        'attr'=>['class'=>'select'],
                                                        'choices' => $options['tabStyle_dj'],
                                                        'choice_label' => 'nom' ])
                ->add('vetement_dj', EntityType::class, [ 'class' => Vetement_dj::class,
                                                        'label' => "Choisissez le style vestimentaire du DJ",
                                                        'attr'=>['class'=>'select'],
                                                        'choices' => $options['tabVetement_dj'],
                                                        'choice_label' => 'nom' ])
                ->add('repas_dj', EntityType::class, [ 'class' => Repas_dj::class,
                                                        'label' => "Un repas est-il prévu pour le DJ durant l'événement ?",
                                                        'attr'=>['class'=>'select'],
                                                        'choices' => $options['tabRepas_dj'],
                                                        'choice_label' => 'nom' ])
                ->add('habillage', EntityType::class, [ 'class' => Habillage::class,
                                                        'label' => "Choisissez parmi nos deux habillages que nous fournissions pour la régie et la sonorisation du DJ",
                                                        'attr'=>['class'=>'select'],
                                                        'multiple' => false,
                                                        'expanded' => true,
                                                        'choices' => $options['tabHabillages'],
                                                        'choice_label' => 'nom' ])
                ->add('options', EntityType::class, [ 'class' => Options::class,
                                                        'label' => "Choisissez parmis les options disponibles",
                                                        'attr'=>['class'=>'select'],
                                                        'expanded' => true,
                                                        'choices' => $options['tabOptions'],
                                                        'choice_label' => 'nom' ])
                // ->add('options', ChoiceType::class, ['label' => "Choisissez parmis les options disponibles",
                //                                 'attr'=>['class'=>'select'],
                //                                 'multiple' => true,
                //                                 'expanded' => true,
                //                                 'choices' => [
                //                                     'Animation photo Booth(+400€)' => 'Animation photo',
                //                                     'Karaoké(+400€)' => 'Karaoké',
                //                                     'Quizz musical(+700€)' => 'Quizz musical',
                //                                     'Projecteur de lumière sur les murs *6 (+100€)' => 'Projecteur de lumière',
                //                                 ]])
                ->add('fonction', EntityType::class, [ 'class' => Fonction::class,
                                                        'label' => "Vous êtes",
                                                        'attr'=>['class'=>'select'],
                                                        'choices' => $options['tabFonctions'],
                                                        'choice_label' => 'nom' ])
                ->add('nom_responsable', TextType::class, ['label' => 'Saisissez le nom du responsable du projet',
                                               'attr'=>['class'=>'select'],
                                               'required' => false
                                              ])
                ->add('numero_chef', TelType::class, ['label' => 'Saisissez le numéro de téléphone du chef de projet',
                                                    'attr'=>['class'=>'select',
                                                    'placeholder' => 'Entrez votre numéro de téléphone',
                                                    'pattern' => "^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$",
                                                    'maxlength' => '10',
                                                    'minlength' => '10']
                                                   ])
                ->add('adresse', TextType::class, ['label' => 'Adresse',
                                             'attr'=>['class'=>'select'],
                                             'required' => false
                                            ])
                ->add('go',SubmitType::class, ['label'=>'Suivant']);
    }
 
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => FormEntreprise::class, 
            'tabFonctions' => null, 
            'tabOptions' => null,
            'tabHabillages' => null, 
            'tabRepas_dj' => null, 
            'tabVetement_dj' => null,
            'tabStyle_dj' => null,
            'tabAmbiancesFin' => null,
            'tabAmbiances' => null,
            'tabNationalites' => null,
            'tabPublique' => null,
            'tabDuree_formule' => null,
            'tabNb_personne_formule' => null,
            'tabFormules' => null,
            'tabFormats' => null,
            'tabNb_partie' => null,
            'tabTypes' => null,
        ));
    }
}