<?php

namespace App\Form\Type;
 
use App\Entity\Formulaire;
use App\Entity\Deroulement;
use App\Entity\Ambiance;
use App\Entity\Budget;
use App\Entity\CodePostal;
use App\Entity\Formulaire_base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class FormulaireType extends AbstractType
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
                        'label' => 'A quelle heure commence la musique ?',
                        'input'  => 'datetime',
                        'widget' => 'choice',
                    ])  
                    ->add('nb_personne', RangeType::class, ['label' => 'Combien de personnes seront présentes ?',
                                                            'attr' => [
                                                                'min' => 30,
                                                                'max' => 500,
                                                                'value' => 80]])
                    ->add('nom', TextType::class, ['label' => 'Votre nom',
                                                    'attr'=>['class'=>'select'],
                                                    'required' => false
                                                ])
                    ->add('prenom', TextType::class, ['label' => 'Votre nom et prenom',
                                    'attr'=>['class'=>'select'],
                                    'required' => false
                                    ])
                    ->add('email', EmailType::class, ['label' => 'Saisissez votre email pour recevoir des propositions',
                                    'attr'=>['class'=>'select',
                                    'pattern'=>"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"],
                                    'required' => false
                                    ])
                    ->add('numero', TelType::class, ['label' => 'Recevez des réponses encore plus vite avec les notifications SMS',
                                        'attr'=>['class'=>'select',
                                        'required' => false,
                                        'placeholder' => 'Entrez votre numéro de téléphone',
                                        'pattern' => "^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$",
                                        'maxlength' => '10',
                                        'minlength' => '10']
                                        ])
            )
            ->add('codePostal', TextType::class)
            ->add('deroulement', EntityType::class, [
                                                    'class' => Deroulement::class,
                                                    'label' => 'Pour quelle étapes avez-vous besoin du Dj ?',
                                                    'attr'=>['class'=>'select'],
                                                    'choices' => $options['tabDeroulement'],
                                                    'choice_label' => 'nom' ])
            ->add('ambiance', EntityType::class, [
                                                'class' => Ambiance::class,
                                                'label' => 'Quelle ambiance pour quel type de public recherchez-vous ?',
                                                'attr'=>['class'=>'select'],
                                                'choices' => $options['tabAmbiances'],
                                                'choice_label' => 'nom' ])
            ->add('budget', EntityType::class, [
                        'class' => Budget::class,
                        'label' => 'Quel niveau de prestation recherchez-vous ?',
                        'attr'=>['class'=>'select'],
                        'choices' => $options['tabBudgets'],
                        'choice_label' => 'nom' ])
            ->add('champ_libre', TextareaType::class, ['label' => 'Utilisez cet espace pour donner quelques précisions au Dj',
                                                        'attr'=>['class'=>'select'],
                                                        'required' => false
                                                        ])
            ->add('go',SubmitType::class, ['label'=>'Vérification']);
    }
 
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => Formulaire::class, 'tabDeroulement' => null, 'tabAmbiances' => null, 'tabBudgets' => null, 'tabCodePostal' => null
        ));
    }
}