<?php

namespace App\Form\Type;
 
use App\Entity\Formulaire;
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

        $builder->add('code_postal', TextType::class)
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
                ->add('deroulement', ChoiceType::class, ['label' => 'Pour quelle étapes avez-vous besoin du Dj ?',
                                                         'attr'=>['class'=>'select'],
                                                         'choices' => [
                                                             'Cocktail, diner et soirée dansante' => 'Cocktail, diner et soirée dansante',
                                                             'Cérémonie, cocktail, diner et soirée dansante' => 'Cérémonie, cocktail, diner et soirée dansante',
                                                             'Diner et soirée dansante' => 'Diner et soirée dansante',
                                                             'Soirée dansante' => 'Soirée dansante',
                                                         ]])
                ->add('nb_personne', RangeType::class, ['label' => 'Combien de personnes seront présentes ?',
                                                        'attr' => [
                                                            'min' => 30,
                                                            'max' => 500,
                                                            'value' => 80]])
                ->add('ambiance', ChoiceType::class, ['label' => 'Quelle ambiance pour quel type de public recherchez-vous ?',
                                                      'attr'=>['class'=>'select'],
                                                      'choices' => [
                                                        'Généraliste' => 'Généraliste',
                                                        'Oriental' => 'Oriental',
                                                        'Afro' => 'Afro',
                                                        'Antillaise' => 'Antillaise',
                                                        'Portugaise' => 'Portugaise',
                                                        'Asiatique' => 'Asiatique',
                                                        'Réunionnais' => 'Réunionnais',
                                                        'Juif' => 'Juif',
                                                        'Latine' => 'Latine',
                                                        'International' => 'International',
                                                        'Mixte Afro Antillais' => 'Mixte Afro Antillais',
                                                        'Mixte Franco Antillais' => 'Mixte Franco Antillais',
                                                        'Mixte Franco Africain' => 'Mixte Franco Africain',
                                                        'Mixte Franco Portugais' => 'Mixte Franco Portugais',
                                                        'Mixte Franco Marocain' => 'Mixte Franco Marocain',
                                                        'Mixte Franco Algérien' => 'Mixte Franco Algérien',
                                                        'Mixte Franco Tunisien' => 'Mixte Franco Tunisien',
                                                        'Mixte Franco Turc' => 'Mixte Franco Turc',
                                                      ]])
                ->add('budget', ChoiceType::class, ['label' => 'Quel niveau de prestation recherchez-vous ?', 
                                                    'attr'=>['class'=>'select'],
                                                    'choices' => [
                                                        'Standard (Entre 800€ et 1000€)' => '800-1000',
                                                        'Basic (Entre 600€ et 800€)' => '600-800',
                                                        'Avec options (Entre 1000€ et 1200€)' => '1000-1200',
                                                        'Haut de gamme (A partir de 1500€)' => '1500',
                                                    ]])
                ->add('champ_libre', TextareaType::class, ['label' => 'Utilisez cet espace pour donner quelques précisions au Dj',
                                                           'attr'=>['class'=>'select'],
                                                           'required' => false
                                                          ])
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
                                                    'placeholder' => 'Entrez votre numéro de téléphone',
                                                    'pattern' => "^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$",
                                                    'maxlength' => '10',
                                                    'minlength' => '10']
                                                   ])
                ->add('go',SubmitType::class, ['label'=>'Vérification']);
    }
 
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => Formulaire::class
        ));
    }
}