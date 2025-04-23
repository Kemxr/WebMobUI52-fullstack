<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class StorySeeder extends Seeder
{
    public function run()
    {
        $story = Story::create([
            'title' => 'Le labyrinthe des ombres',
            'text' => 'Une histoire interactive où vous incarnez un archéologue explorant un ancien labyrinthe mystique.'
        ]);

        $chapters = [];

        // Chapitre 1
        $chapters[1] = Chapter::create([
            'story_id' => $story->id,
            'number' => 1,
            'content' => "La pluie tropicale martèle le feuillage au-dessus de vous, transformant la jungle en une cacophonie rythmée de gouttes et de bruissements. Vous êtes Elias Varn, archéologue reconnu, votre visage buriné par les années de fouilles et d'expéditions solitaires. Le sol est meuble sous vos bottes boueuses tandis que vous écartez les lianes qui recouvrent une dalle de pierre. D'antiques symboles y sont gravés, presque effacés par les siècles, mais vous sentez leur poids encore vivant.

Lorsque vous passez la main dessus, la dalle vibre légèrement, puis glisse avec lenteur dans un grondement sourd. Une ouverture béante se dévoile, soufflant un air stagnant chargé d'odeurs de terre humide et de pierre ancienne. Un escalier descend dans l'obscurité. La lumière du jour s'y dissout à vue d'œil."
        ]);

        // Chapitre 2
        $chapters[2] = Chapter::create([
            'story_id' => $story->id,
            'number' => 2,
            'content' => "Les marches s'enfoncent profondément sous terre. Chaque pas résonne contre les parois comme un tambour lointain. Votre lampe torche éclaire une voûte haute soutenue par des colonnes couvertes de symboles. De minces filets d'eau suintent des murs, amplifiant l'impression d'un lieu encore vivant.

La salle s'ouvre enfin devant vous. Elle est gigantesque, circulaire, et semble avoir été taillée dans un seul bloc de roche. Des fresques recouvrent les murs, animées d'un mouvement presque imperceptible, comme si les scènes gravées dans la pierre respiraient. Trois couloirs s'ouvrent depuis cette pièce : à l'est, une lumière rouge vacille à travers une brume ; au nord, un souffle glacial s'engouffre dans un tunnel obscur ; au sud, les murs vibrent doucement, couverts de glyphes luminescents.

Un murmure s'élève, indistinct, vous appelant sans mots."
        ]);

        // Chapitre 3
        $chapters[3] = Chapter::create([
            'story_id' => $story->id,
            'number' => 3,
            'content' => "L'air se fait plus dense à mesure que vous avancez dans le couloir. Une brume rougeâtre flotte au ras du sol, s'enroulant autour de vos jambes comme une présence inquisitrice. Le silence ici est total. Pas un écho, pas un bruissement. Juste vos pas étouffés par la pierre.

Au bout du couloir, une alcôve s'ouvre sur un petit sanctuaire. Une statue d'ombre s'y tient, massive et imposante, sculptée dans un matériau noir et brillant comme du verre volcanique. Elle représente une silhouette humaine sans traits, les bras levés vers le ciel. Un halo rouge palpite faiblement autour de son crâne comme un cœur battant.

Vous sentez votre esprit s'embrouiller légèrement, attiré par cette forme immobile."
        ]);

        // Chapitre 4
        $chapters[4] = Chapter::create([
            'story_id' => $story->id,
            'number' => 4,
            'content' => "Le froid devient mordant. Votre souffle se condense en nuages éphémères alors que vous progressez dans le tunnel nord. Le sol est plus lisse ici, comme s'il avait été poli par des siècles de passages. Au détour d'un coude, une silhouette apparaît, accroupie contre la paroi.

Il s'agit d'un homme, vêtu d'un blouson déchiré par endroits. Son visage est émacié, ses yeux profondément enfoncés dans leurs orbites. Il vous regarde, sans bouger, le regard figé comme un animal traqué. Un filet de sang séché coule de sa tempe.

Autour de lui, des marques griffonnées sur le mur : des mots illisibles, des formes géométriques… un délire griffonné ou un langage oublié ?"
        ]);

        // Chapitre 5
        $chapters[5] = Chapter::create([
            'story_id' => $story->id,
            'number' => 5,
            'content' => "Vous restez à l'extérieur de l'ouverture, fasciné par les gravures sur la dalle. Elles forment une frise complexe, racontant l'histoire d'un peuple disparu. Des silhouettes se prosternent devant une entité noire. Des âmes semblent être extraites de corps vivants pour être enfermées dans un labyrinthe représenté au centre de la scène.

La pluie s'estompe au-dessus de vous, remplacée par un silence inhabituel, presque surnaturel. Une voix, à la fois proche et lointaine, s'élève doucement :

« Ceux qui fuient emportent la peur. Ceux qui entrent… la vérité. »

Un frisson vous parcourt l'échine."
        ]);

        // Chapitre 6
        $chapters[6] = Chapter::create([
            'story_id' => $story->id,
            'number' => 6,
            'content' => "Le couloir au sud s'ouvre sur un espace plus étroit, presque organique. Les parois sont recouvertes de symboles lumineux pulsant lentement, comme si les murs eux-mêmes respiraient. À chaque pas, la lumière s'intensifie, réagissant à votre présence. L'air est saturé d'une odeur métallique, et un léger bourdonnement s'insinue dans vos oreilles, amplifiant une sensation de vertige.

Soudain, une voix douce et intérieure murmure dans votre esprit. Elle ne vient pas de l'extérieur, mais semble provenir de vous-même :

« Offre un souvenir, et la voie s'ouvrira… »

Le décor autour de vous ondule, comme un mirage. Une pression étrange se pose sur votre poitrine, comme si le labyrinthe lui-même attendait votre décision."
        ]);

        // Chapitre 7
        $chapters[7] = Chapter::create([
            'story_id' => $story->id,
            'number' => 7,
            'content' => "Au contact de votre main, la statue vibre faiblement. Un éclat rouge se propage dans ses veines de pierre. Une voix ancienne, grave, résonne dans la salle, sans bouche visible pour la prononcer :

« Je vis dans l'ombre mais éclaire le cœur. Qui suis-je ? »

La température chute. Une attente pèse dans l'air, lourde et implacable. Derrière la statue, une fresque s'illumine, montrant un feu dans une nuit noire, un enfant serrant une vieille lettre, et une silhouette méditant dans le silence. Autant de fragments de réponses possibles.

Votre cœur bat plus vite. La voix semble impatiente."
        ]);

        // Chapitre 8
        $chapters[8] = Chapter::create([
            'story_id' => $story->id,
            'number' => 8,
            'content' => "À peine votre réponse prononcée, un grondement sourd secoue le sanctuaire. Les murs deviennent plus sombres, la lumière rouge se met à pulser de manière agressive. La statue ouvre lentement ses bras, et une brume noire s'en échappe pour vous envelopper.

Votre gorge se serre. Vos muscles deviennent lourds. Votre lampe tombe au sol. Le monde tangue. Puis tout devient noir.

…

Vous reprenez conscience, couché sur une dalle froide, dans un lieu inconnu. Des torches bleutées éclairent faiblement les murs recouverts d'étranges symboles mouvants. Une voix lointaine fredonne un air mélancolique."
        ]);

        // Chapitre 9
        $chapters[9] = Chapter::create([
            'story_id' => $story->id,
            'number' => 9,
            'content' => "L'homme relève lentement la tête, comme s'il sortait d'un cauchemar. Son regard se fixe sur vous, plus lucide qu'il n'y paraissait. Il se lève avec raideur, grimace de douleur.

« Je m'appelle Renko… ça fait des jours que je suis ici. Je crois connaître un passage vers la sortie. »

Il tend la main, vous montrant une carte de fortune dessinée sur un tissu déchiré. Il semble sincère, mais un tic nerveux à son œil trahit une tension sous-jacente. Derrière lui, une faille dans le mur laisse deviner un couloir obscur, comme s'il vous menait dans une direction qu'il préfère éviter."
        ]);

        // Chapitre 10
        $chapters[10] = Chapter::create([
            'story_id' => $story->id,
            'number' => 10,
            'content' => "Vous détournez le regard de la statue et continuez à marcher. Le couloir semble s'allonger, interminable. Après quelques dizaines de mètres, un grondement sec retentit derrière vous. Vous vous retournez juste à temps pour voir une portion du plafond s'effondrer dans un nuage de poussière. Le chemin est bloqué.

Vous êtes seul maintenant, entre deux mondes. Une ouverture latérale, jusqu'alors invisible, s'illumine d'une faible lumière blanche. Elle pulse au rythme de votre respiration, comme si elle vous appelait spécifiquement.

Vous n'avez pas d'autre choix."
        ]);

        // Chapitre 11
        $chapters[11] = Chapter::create([
            'story_id' => $story->id,
            'number' => 11,
            'content' => "Vous êtes à genoux, au centre d'une petite chambre ronde. L'atmosphère est irréelle, presque sacrée. Le sol est pavé de carreaux de pierre gravés de symboles que vous ne comprenez pas, mais dont vous ressentez la signification au fond de vous. Les murs, eux, semblent faits d'un matériau vivant, pulsant faiblement comme un cœur endormi.

Une ombre vous entoure sans forme définie, tour à tour brume puis silhouette humaine. Elle ne parle pas, mais son intention vous traverse l'esprit comme une pensée évidente : « Pose ta question, voyageur. Tu n'auras qu'une réponse. »

L'espace entier semble suspendu. Vos souvenirs flottent devant vous, prêts à être offerts en échange d'une vérité."
        ]);

        // Chapitre 12
        $chapters[12] = Chapter::create([
            'story_id' => $story->id,
            'number' => 12,
            'content' => "Renko avance rapidement, ses pas claquant contre la roche comme un rythme militaire. Vous peinez à le suivre dans ce dédale d'escaliers étroits et de couloirs déformés. Des inscriptions passent sous vos doigts, mais vous n'avez pas le temps de les observer.

Finalement, il s'arrête devant une grande porte de pierre. Il se tourne vers vous, un sourire nerveux aux lèvres.

« C'est ici. »

Avant que vous ne puissiez réagir, il vous pousse violemment à l'intérieur. La porte se referme dans un grondement sec. Vous tambourinez, hurlez, mais aucun son ne semble traverser.

Un murmure résonne dans l'obscurité, mille voix qui se superposent, vous murmurant des vérités interdites. Le sol se dérobe sous vos pieds. Vous tombez dans votre propre esprit."
        ]);

        // Chapitre 13
        $chapters[13] = Chapter::create([
            'story_id' => $story->id,
            'number' => 13,
            'content' => "En refusant d'écouter les voix, vous accélérez le pas, aveuglé par la peur. Les couloirs s'enchaînent, de plus en plus étroits, jusqu'à ce que le sol se dérobe brusquement sous vous.

Un cri vous échappe alors que vous tombez dans le vide. L'obscurité vous avale, et tout devient flou.

…

Quand vous rouvrez les yeux, vous êtes allongé sur une dalle froide dans une vaste pièce, éclairée par une lumière diffuse bleutée. Des alcôves bordent les murs, chacune renfermant une silhouette figée. Vous êtes dans un sanctuaire du sommeil, un endroit en dehors du temps.

Un lent battement résonne autour de vous, semblable à un cœur gigantesque."
        ]);

        // Chapitre 14
        $chapters[14] = Chapter::create([
            'story_id' => $story->id,
            'number' => 14,
            'content' => "Votre réponse est accueillie par un profond silence. Puis, lentement, la statue abaisse les bras. Le sol tremble légèrement, et une section du mur derrière elle se met à coulisser. Une ouverture s'ouvre, menant vers un couloir encore plus ancien, envahi par la mousse et les racines.

Un souffle chaud s'échappe de l'ouverture, accompagné d'une brise parfumée de fleurs fanées. Vous avancez lentement, vos pas résonnant dans un long tunnel arrondi. Des fresques y ornent les murs : des scènes montrant des humains franchissant des portails, se dédoublant, vieillissant à l'envers.

Chaque image semble vous parler, mais dans une langue que seul votre inconscient comprend."
        ]);

        // Chapitre 15
        $chapters[15] = Chapter::create([
            'story_id' => $story->id,
            'number' => 15,
            'content' => "Votre instinct prend le dessus. Vous reculez légèrement, feignant l'hésitation. Puis, dans un mouvement rapide, vous attrapez la carte que Renko tient et poussez son bras de côté. Il trébuche contre la paroi, surpris.

Vous courez dans l'autre direction, vos doigts serrant le tissu sur lequel est gravé un plan sommaire. Un symbole attire votre attention : un cercle entouré d'yeux, situé au centre du labyrinthe. Une pièce centrale, ignorée jusque-là.

Guidé par les indications de la carte, vous parvenez à un escalier dissimulé derrière une colonne effondrée. Il descend en spirale, vous menant dans les profondeurs, là où la lumière ne semble jamais avoir existé."
        ]);

        // Chapitre 16
        $chapters[16] = Chapter::create([
            'story_id' => $story->id,
            'number' => 16,
            'content' => "L'ombre vous observe en silence, puis approche. Elle n'a pas de traits, mais vous sentez son regard peser sur vous, comme un poids ancien. Le décor autour de vous s'efface lentement, remplacé par un vaste vide d'étoiles et de souvenirs flottants : votre enfance, vos regrets, vos ambitions oubliées.

« Tu veux sortir, dit-elle, mais rien ne sort sans laisser quelque chose. Offre-moi ta voix, et je t'offrirai la liberté. »

Le silence revient. Votre gorge se serre instinctivement. Dans ce lieu, votre voix est plus qu'un outil : c'est votre essence, votre mémoire, votre histoire. Accepter, c'est survivre sans pouvoir jamais raconter. Refuser, c'est peut-être rester piégé à jamais."
        ]);

        // Chapitre 17
        $chapters[17] = Chapter::create([
            'story_id' => $story->id,
            'number' => 17,
            'content' => "La pièce centrale est majestueuse. Des colonnes immenses soutiennent une coupole étoilée, peinte de constellations disparues. Au centre, un autel de pierre lévite doucement, entouré d'anneaux concentriques gravés de symboles changeants.

Vous posez votre main sur l'autel. Une lumière dorée vous enveloppe, et des visions affluent : des peuples anciens traversant le temps, des cités perdues renaissant dans le futur, des civilisations s'éteignant pour renaître ailleurs. Le labyrinthe n'est pas une prison. C'est un portail, une machine cosmique.

Mais son pouvoir demande un choix : l'utiliser pour voyager, ou le sceller à jamais."
        ]);

        // Chapitre 18
        $chapters[18] = Chapter::create([
            'story_id' => $story->id,
            'number' => 18,
            'content' => "Vous franchissez le seuil de lumière. Votre corps est déchiré, reconstruit, projeté à travers les âges. Vous ouvrez les yeux dans un monde oublié, celui que vous cherchiez. Les cieux sont clairs, les rues vibrent de vie. Vous n'êtes plus un visiteur : vous êtes devenu une clé, un gardien du flux du temps.

Avec le savoir du futur, vous guidez ce peuple vers une destinée différente. Vous introduisez la mémoire, le langage, la survie. Le labyrinthe ne disparaît pas, mais change de fonction : il devient un sanctuaire de connaissance.

Fin légendaire – vous changez l'Histoire"
        ]);

        // Chapitre 19
        $chapters[19] = Chapter::create([
            'story_id' => $story->id,
            'number' => 19,
            'content' => "Vous quittez la salle sans rien toucher. À chaque pas, le labyrinthe semble se refermer, comme s'il respectait votre décision. Les ombres vous observent, silencieuses, mais aucune ne vous arrête. Elles vous saluent même, d'un hochement lent.

Une brèche s'ouvre devant vous, menant à la surface. Vous émergez dans la lumière du jour, couvert de poussière, le cœur lourd et l'esprit embué.

Vous avez survécu. Mais chaque rêve vous ramène dans ces couloirs. Une partie de vous est restée là-bas. Pour toujours.

Fin ambiguë – survivant hanté"
        ]);

        // Chapitre 20
        $chapters[20] = Chapter::create([
            'story_id' => $story->id,
            'number' => 20,
            'content' => "Vous ouvrez les lèvres pour répondre… mais aucun son ne sort. La décision est prise.

L'ombre s'avance, vous enveloppe. Vous ne ressentez ni peur ni douleur. Juste une paix étrange, une dissolution.

Vous êtes à nouveau dans le labyrinthe, mais différent. Vous flottez entre les murs, entendez les pensées des visiteurs. Vous êtes devenu une gardienne, une mémoire, une épreuve. Vous n'avez plus de nom, plus de corps.

Mais vous comprenez désormais ce lieu. Et vous l'aimez.

Fin mystique – vous êtes devenu le labyrinthe"
        ]);

        // Chapitre 21
        $chapters[21] = Chapter::create([
            'story_id' => $story->id,
            'number' => 21,
            'content' => "Le souffle court, le cœur battant, vous reculez. Vous ne pouvez pas. Pas aujourd'hui.

Vous rebouchez l'ouverture avec précaution, repoussant la dalle avec effort. La pluie vous accueille à nouveau, vous lavant de la sueur froide qui perle sur votre front.

Mais depuis ce jour, les miroirs vous troublent. Vous y voyez parfois autre chose. Quelqu'un d'autre. Une silhouette derrière vous. Et ce murmure persistant la nuit :

« Tu es déjà entré… »

Fin ouverte – le mystère vous suit"
        ]);

        // Création des choix
        // Choix du chapitre 1
        Choice::create([
            'chapter_id' => $chapters[1]->id,
            'text' => "Descendre l'escalier mystérieux",
            'target_chapter_id' => $chapters[2]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[1]->id,
            'text' => "Étudier d'abord les inscriptions sur la dalle",
            'target_chapter_id' => $chapters[5]->id
        ]);

        // Choix du chapitre 2
        Choice::create([
            'chapter_id' => $chapters[2]->id,
            'text' => "Prendre le couloir rouge (à l'est)",
            'target_chapter_id' => $chapters[3]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[2]->id,
            'text' => "Prendre le couloir glacial (au nord)",
            'target_chapter_id' => $chapters[4]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[2]->id,
            'text' => "Prendre le couloir aux glyphes (au sud)",
            'target_chapter_id' => $chapters[6]->id
        ]);

        // Choix du chapitre 3
        Choice::create([
            'chapter_id' => $chapters[3]->id,
            'text' => "Poser votre main sur la statue",
            'target_chapter_id' => $chapters[7]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[3]->id,
            'text' => "Ignorer la statue et continuer votre route",
            'target_chapter_id' => $chapters[10]->id
        ]);

        // Choix du chapitre 4
        Choice::create([
            'chapter_id' => $chapters[4]->id,
            'text' => "Lui adresser la parole",
            'target_chapter_id' => $chapters[9]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[4]->id,
            'text' => "Reculer lentement sans parler",
            'target_chapter_id' => $chapters[13]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[4]->id,
            'text' => "L'ignorer et passer votre chemin",
            'target_chapter_id' => $chapters[6]->id
        ]);

        // Choix du chapitre 5
        Choice::create([
            'chapter_id' => $chapters[5]->id,
            'text' => "Fuir le site, pris de panique",
            'target_chapter_id' => $chapters[21]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[5]->id,
            'text' => "Entrer dans le labyrinthe",
            'target_chapter_id' => $chapters[2]->id
        ]);

        // Choix du chapitre 6
        Choice::create([
            'chapter_id' => $chapters[6]->id,
            'text' => "Confier un souvenir personnel",
            'target_chapter_id' => $chapters[11]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[6]->id,
            'text' => "Résister et continuer sans répondre",
            'target_chapter_id' => $chapters[13]->id
        ]);

        // Choix du chapitre 7
        Choice::create([
            'chapter_id' => $chapters[7]->id,
            'text' => "Répondre \"le feu\"",
            'target_chapter_id' => $chapters[14]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[7]->id,
            'text' => "Répondre \"un souvenir\"",
            'target_chapter_id' => $chapters[14]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[7]->id,
            'text' => "Répondre \"le silence\"",
            'target_chapter_id' => $chapters[8]->id
        ]);

        // Choix du chapitre 8
        Choice::create([
            'chapter_id' => $chapters[8]->id,
            'text' => "Vous vous réveillez dans une salle inconnue",
            'target_chapter_id' => $chapters[11]->id
        ]);

        // Choix du chapitre 9
        Choice::create([
            'chapter_id' => $chapters[9]->id,
            'text' => "Lui faire confiance et le suivre",
            'target_chapter_id' => $chapters[12]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[9]->id,
            'text' => "Le soupçonner et chercher une autre voie",
            'target_chapter_id' => $chapters[15]->id
        ]);

        // Choix du chapitre 10
        Choice::create([
            'chapter_id' => $chapters[10]->id,
            'text' => "Avancer vers la lumière tamisée",
            'target_chapter_id' => $chapters[2]->id
        ]);

        // Choix du chapitre 11
        Choice::create([
            'chapter_id' => $chapters[11]->id,
            'text' => "Demander comment sortir du labyrinthe",
            'target_chapter_id' => $chapters[16]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[11]->id,
            'text' => "Demander quel est le secret du labyrinthe",
            'target_chapter_id' => $chapters[17]->id
        ]);

        // Choix du chapitre 12
        Choice::create([
            'chapter_id' => $chapters[12]->id,
            'text' => "Vous sombrez dans la folie",
            'target_chapter_id' => $chapters[20]->id
        ]);

        // Choix du chapitre 13
        Choice::create([
            'chapter_id' => $chapters[13]->id,
            'text' => "Vous vous réveillez dans une chambre inconnue",
            'target_chapter_id' => $chapters[19]->id
        ]);

        // Choix du chapitre 14
        Choice::create([
            'chapter_id' => $chapters[14]->id,
            'text' => "Poursuivre dans le sanctuaire",
            'target_chapter_id' => $chapters[17]->id
        ]);

        // Choix du chapitre 15
        Choice::create([
            'chapter_id' => $chapters[15]->id,
            'text' => "Suivre la carte",
            'target_chapter_id' => $chapters[18]->id
        ]);

        // Choix du chapitre 16
        Choice::create([
            'chapter_id' => $chapters[16]->id,
            'text' => "Accepter",
            'target_chapter_id' => $chapters[20]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[16]->id,
            'text' => "Refuser et chercher un autre chemin",
            'target_chapter_id' => $chapters[19]->id
        ]);

        // Choix du chapitre 17
        Choice::create([
            'chapter_id' => $chapters[17]->id,
            'text' => "Voyager dans le passé",
            'target_chapter_id' => $chapters[18]->id
        ]);
        Choice::create([
            'chapter_id' => $chapters[17]->id,
            'text' => "Sceller le lieu pour toujours",
            'target_chapter_id' => $chapters[19]->id
        ]);

        // Chapitres de fin (18, 19, 20, 21) - pas de choix ou choix spécial "fin"
        Choice::create([
            'chapter_id' => $chapters[18]->id,
            'text' => "Fin légendaire – vous changez l'Histoire",
            'target_chapter_id' => null
        ]);

        Choice::create([
            'chapter_id' => $chapters[19]->id,
            'text' => "Fin ambiguë – survivant hanté",
            'target_chapter_id' => null
        ]);

        Choice::create([
            'chapter_id' => $chapters[20]->id,
            'text' => "Fin mystique – vous êtes devenu le labyrinthe",
            'target_chapter_id' => null
        ]);

        Choice::create([
            'chapter_id' => $chapters[21]->id,
            'text' => "Fin ouverte – le mystère vous suit",
            'target_chapter_id' => null
        ]);
    }
}