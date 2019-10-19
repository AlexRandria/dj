<?php

namespace App\Form\Type;
 
use App\Entity\FormEntreprise;
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

        $builder->add('date', DateType::class, [
                    'widget' => 'single_text',
                    'html5' => false,
                ])
                ->add('type', ChoiceType::class, ['label' => "Pour quel type d'événement ?",
                                                         'attr'=>['class'=>'select'],
                                                         'choices' => [
                                                             'Lancement de produit' => 'Lancement de produit',
                                                             'After Work' => 'After Work',
                                                             'Défilé' => 'Défilé',
                                                             'Inauguration' => 'Inauguration',
                                                             'Séminaire' => 'Séminaire',
                                                             'Fashion Shows' => 'Fashion Shows',
                                                             'Happenings' => 'Happenings',
                                                             'Cocktails' => 'Cocktails',
                                                             'Team building' => 'Team building',
                                                             'Soirée du personnel' => 'Soirée du personnel',
                                                             'Gala' => 'Gala',
                                                         ]])
                ->add('nom_du_lieu', TextType::class, [ 'label' => 'Quel est le nom du lieu ?',
                                                        'attr'=>['class'=>'select'],
                                                        'required' => false
                                                        ])           
                ->add('adresse_du_lieu', TextType::class, ['label' => "Quelle est l'adresse du lieu de l'événement ?",
                                                           'attr'=>['class'=>'select autocomplete'],
                                                           'required' => false
                                                       ])
                ->add('heure_debut', TimeType::class, [ 'label' => "A quelle heure commence l'événement ?",
                                                        'input'  => 'datetime',
                                                        'widget' => 'choice',
                                                        ])      
                ->add('nb_personne', RangeType::class, ['label' => 'Combien de convives sont attendu ?',
                                                        'attr' => [
                                                            'min' => 10,
                                                            'max' => 100,
                                                            'value' => 40]])
                ->add('nb_partie', ChoiceType::class, ['label' => "En combien de partie va se dérouler l'événement ?",
                                                       'attr'=>['class'=>'select'],
                                                       'choices' => [
                                                            'En une partie dans le même espace' => '1 partie, 1 espace',
                                                            'En une partie dans deux espace différents' => '1 partie, 2 espace',
                                                            'En deux partie dans le même espace' => '2 partie, 1 espace',
                                                            'En deux partie dans deux espace différents' => '2 partie, 2 espace ',
                                                      ]])
                ->add('format', ChoiceType::class, ['label' => "Quelle est le format de l'événement ?", 
                                                    'attr'=>['class'=>'select'],
                                                    'choices' => [
                                                        'Assis en mode conférence' => 'Assis en mode conférence',
                                                        'Cocktail dinatoire debout' => 'Cocktail dinatoire debout',
                                                        'Assis en mode conférence puis debout' => 'Assis en mode conférence puis debout',
                                                        'Repas assis' => 'Repas assis',
                                                    ]])
                ->add('formule', ChoiceType::class, ['label' => "Choisissez votre formule",
                                                   'multiple' => false,
                                                   'expanded' => true,
                                                   'attr'=>['class'=>'formulaireRadio'],
                                                   'choices' => [
                                                       " " => 'Dj set',
                                                       'dj 2 ' => 'Dj set avec sonorisation',
                                                       'dj 3 ' => 'Dj set avec sonorisation et lumiere',
                                                   ]])
                ->add('nb_personne_formule', ChoiceType::class, ['label' => "Pour combien de personnes ?",
                                                                'multiple' => false,
                                                                'expanded' => true,
                                                                'required' => false,
                                                                'attr'=>['class'=>'formulaireRadio'],
                                                                'choices' => [
                                                                    'Formule 30 personnes' => '30 personnes',
                                                                    'Formule 80 personnes' => '80 personnes',
                                                                    'Formule 120 personnes' => '120 personnes',
                                                                ]])
                ->add('duree_formule', ChoiceType::class, ['label' => "Pour quel durée ?",
                                                        'multiple' => false,
                                                        'expanded' => true,
                                                        'attr'=>['class'=>'formulaireRadio'],
                                                        'choices' => [
                                                            'Formule 4H00' => 'Formule 4H00',
                                                            'Formule 5H00' => 'Formule 5H00',
                                                            'Formule 6H00' => 'Formule 6H00',
                                                        ]])
                ->add('theme', TextType::class, ['label' => "Quel est le thème de l'événement ?",
                                              
                                              'attr'=>['class'=>'select',
                                                       'placeholder' => 'Soirée année 80,'],
                                              'required' => false
                                             ])
                ->add('public', ChoiceType::class, ['label' => 'Quel publique sera présent ?', 
                                             'attr'=>['class'=>'select'],
                                             'choices' => [
                                                 'Féminin' => 'Féminin',
                                                 'Masculin' => 'Masculin',
                                                 'Mixte' => 'Mixte',
                                             ]])
                ->add('age', RangeType::class, ['label' => "Pour quelle moyenne d'âge ?",
                                                        'attr' => [
                                                            'min' => 18,
                                                            'max' => 90,
                                                            'value' => 18
                                                ]])
                ->add('nationalite', ChoiceType::class, ['label' => 'De quelle nationalité ?',
                                                'multiple'=> true,
                                                'attr'=>['class'=>'selectpicker','data-style'=>'btn-primary'],
                                                'choices' => [
                                                    'Français' => 'Français',
                                                    'Anglais' => 'Anglais',
                                                    'Espagnole' => 'Espagnole',
                                                    'Indien' => 'Indien',
                                                    'International' => 'International',
                                                    'Portugais' => 'Portugais',
                                                    'Arabe' => 'Arabe',
                                                    'Russe' => 'Russe',
                                                    'Chinois' => 'Chinois',
                                                    'Italien' => 'Italien',
                                                ]])
                ->add('ambiance', ChoiceType::class, ['label' => "Quelle ambiance voulez vous au début de l'événement ?",
                                                'multiple'=> true,
                                                'attr'=>['class'=>'selectpicker','data-style'=>'btn-primary'],
                                                'choices' => [
                                                    'Généraliste' => 'Généraliste',
                                                    'Club' => 'Club',
                                                    'Disco' => 'Disco',
                                                    'Funck' => 'Funck',
                                                    'Soul' => 'Soul',
                                                    'House' => 'House',
                                                    'Electro Pop' => 'Electro Pop',
                                                    'RnB' => 'RnB',
                                                    "Musique d'ambiance" => "Musique d'ambiance",
                                                    'Commercial' => 'Commercial',
                                                    'Reggaeton' => 'Reggaeton',
                                                    'Deep house' => 'Deep house',
                                                    'Tech house' => 'Tech house',
                                                    'Funky house' => 'Funky house',
                                                    'Electro dance music' => 'Electro dance music',
                                                    'Internationale' => 'Internationale',
                                                    'Année 80' => 'Année 80',
                                                    'Motown' => 'Motown',
                                                    'Swing' => 'Swing',
                                                    'Lounge' => 'Lounge',
                                                    'Jazz' => 'Jazz',
                                                    'Je ne souhaite pas de musique' => 'Je ne souhaite pas de musique',
                                                ]])
                ->add('ambiance_fin', ChoiceType::class, ['label' => "Quelle ambiance voulez vous à la fin ?",
                                                'multiple'=> true,
                                                'attr'=>['class'=>'selectpicker','data-style'=>'btn-primary'],
                                                'choices' => [
                                                    'Généraliste' => 'Généraliste',
                                                    'Club' => 'Club',
                                                    'Disco' => 'Disco',
                                                    'Funck' => 'Funck',
                                                    'Soul' => 'Soul',
                                                    'House' => 'House',
                                                    'Electro Pop' => 'Electro Pop',
                                                    'RnB' => 'RnB',
                                                    "Musique d'ambiance" => "Musique d'ambiance",
                                                    'Commercial' => 'Commercial',
                                                    'Reggaeton' => 'Reggaeton',
                                                    'Deep house' => 'Deep house',
                                                    'Tech house' => 'Tech house',
                                                    'Funky house' => 'Funky house',
                                                    'Electro dance music' => 'Electro dance music',
                                                    'Internationale' => 'Internationale',
                                                    'Année 80' => 'Année 80',
                                                    'Motown' => 'Motown',
                                                    'Swing' => 'Swing',
                                                    'Lounge' => 'Lounge',
                                                    'Jazz' => 'Jazz',
                                                    'Je ne souhaite pas de musique' => 'Je ne souhaite pas de musique',
                                                ]])
                ->add('style_dj', ChoiceType::class, ['label' => "Vous voulez un Dj avec un style plutôt ?",
                                                'attr'=>['class'=>'select'],
                                                'choices' => [
                                                    'Jeune et dynamique' => 'Jeune et dynamique',
                                                    'Expérimenté avec de bonnes références (+200€)' => 'Expérimenté avec de bonnes références (+200€)',
                                                    'Moderne et féminin (+100€)' => 'Moderne et féminin (+100€)',
                                                    'Indifférent' => 'Indifférent',
                                                ]])
                ->add('vetement_dj', ChoiceType::class, ['label' => "Choisissez le style vestimentaire du DJ",
                                                'attr'=>['class'=>'select'],
                                                'choices' => [
                                                    'Summertime time (Tong Short T-shirt)' => 'Summertime time (Tong Short T-shirt)',
                                                    'Décontracté (Polo Jean Basket)' => 'Décontracté (Polo Jean Basket)',
                                                    'Smart (Chemise Pantalon)' => 'Smart (Chemise Pantalon)',
                                                    'Chic (Veste Cravate Pantalon)' => 'Chic (Veste Cravate Pantalon)',
                                                ]])
                ->add('repas_dj', ChoiceType::class, ['label' => "Un repas est-il prévu pour le DJ durant l'événement ?",
                                                'attr'=>['class'=>'select'],
                                                'choices' => [
                                                    'Oui' => 'Oui',
                                                    'Non' => 'Non',
                                                ]])
                ->add('habillage', ChoiceType::class, ['label' => 'Choisissez parmi nos deux habillages que nous fournissions pour la régie et la sonorisation du DJ',
                                                    'attr'=>['class'=>'select'],
                                                    'multiple' => false,
                                                    'expanded' => true,
                                                    'choices' => [
                                                        'White' => 'White',
                                                        'Black' => 'Black',
                                                    ]])
                ->add('options', ChoiceType::class, ['label' => "Choisissez parmis les options disponibles",
                                                'attr'=>['class'=>'select'],
                                                'multiple' => true,
                                                'expanded' => true,
                                                'choices' => [
                                                    'Animation photo Booth(+400€)' => 'Animation photo',
                                                    'Karaoké(+400€)' => 'Karaoké',
                                                    'Quizz musical(+700€)' => 'Quizz musical',
                                                    'Projecteur de lumière sur les murs *6 (+100€)' => 'Projecteur de lumière',
                                                ]])
                ->add('fonction', ChoiceType::class, ['label' => "Vous êtes",
                                                'attr'=>['class'=>'select'],
                                                'choices' => [
                                                    "Responsable du projet pour le compte d'un client ?" => 'Responsable du projet',
                                                    "Le client donneur d'ordre" => 'Client',
                                                ]])
                ->add('nom_responsable', TextType::class, ['label' => 'Saisissez le nom du responsable du projet',
                                               'attr'=>['class'=>'select'],
                                               'required' => false
                                              ])
                ->add('email_chef', EmailType::class, ['label' => "Saisissez l'adresse Email du chef de projet",
                                                 'attr'=>['class'=>'select',
                                                 'pattern'=>"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"],
                                                 'required' => false
                                                ])
                ->add('numero_chef', TelType::class, ['label' => 'Saisissez le numéro de téléphone du chef de projet',
                                                    'attr'=>['class'=>'select',
                                                    'placeholder' => 'Entrez votre numéro de téléphone',
                                                    'pattern' => "^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$",
                                                    'maxlength' => '10',
                                                    'minlength' => '10']
                                                   ])
                ->add('nom', TextType::class, ['label' => 'Nom',
                                               'attr'=>['class'=>'select'],
                                               'required' => false
                                              ])
                ->add('numero', TelType::class, ['label' => 'Téléphone',
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
            'data_class' => FormEntreprise::class
        ));
    }
}