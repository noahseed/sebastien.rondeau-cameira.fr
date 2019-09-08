-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u6
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 08 Septembre 2019 à 11:24
-- Version du serveur :  10.0.38-MariaDB-0+deb8u1
-- Version de PHP :  7.0.33-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sebastien`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`article_id` int(11) NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_title` varchar(255) NOT NULL,
  `article_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`article_id`, `article_date`, `article_title`, `article_content`) VALUES
(1, '2018-03-11 13:10:14', 'Introduction', '<h2>Des codes QR ?</h2>\r\n<div class="qrcode">\r\n    <a href="/?page=blog"><img src="/images/blog/qrcodes/qrcode_book.png" alt="QR Code" /></a>\r\n</div>\r\n<p>\r\n    Quelques pages de ce Blog disposent d''un code QR.\r\n</p>\r\n<p>\r\n    Vous pouvez par exemple scanner le code QR d''une page, pour continuer sa lecture sur votre\r\n    smartphone ou votre tablette.\r\n</p>\r\n<p>\r\n    Les codes QR servent notamment à venir compléter le livre en version papier (en projet).\r\n</p>\r\n<p>\r\n    Certaines pages sur ce site sont cachées, et/ou réservées aux propriétaires de la (future) version papier.\r\n</p>\r\n<p>Je vous invite à laisser cette page ouverte pour écouter la radio suivante pendant votre navigation. :)</p>\r\n<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>\r\n<script src="https://radioplayerlive.ovh/mediaelement-and-player.js"></script>\r\n<link rel="stylesheet" href="https://radioplayerlive.ovh/mediaelementplayer.css" />\r\n<!--\r\n<style>\r\n.mejs-container .mejs-controls {\r\nbackground:#747988 !important;\r\n}\r\n</style>\r\n-->\r\n<div id="radioplayerlive"></div>\r\n<script src="https://radioplayerlive.ovh/player.php?server=1&url=http://163.172.169.217:80/asp-s&autoplay=0"></script>\r\n<h2>Un livre multimédia ?</h2>\r\n<div class="portrait">\r\n    <img src="/images/blog/multimedia.png" alt="Multimedia" />\r\n</div>\r\n<p>\r\n    Ce Blog est enrichi de nombreux contenus multimédia, tels que des images, des vidéos, des radios ou des fichiers sonores comme la musique suivante, qui est un remix d''une musique des Twenty Øne Piløts (un groupe que j''aime beaucoup).^^</p>\r\n<iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/274942852&color=%23939483&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">\r\n</iframe>\r\n<h2>Bref. Un Blog qui part dans tous les sens...</h2>\r\n<h3>Comme moi...</h3>\r\n<p>\r\n    Ce Blog traite de sujet divers et variés, et c''est de manière volontaire s''il part dans toutes les directions.\r\n</p>\r\n<p>\r\n    Je traite sur ce Blog des sujets qui touchent aussi bien la spiritualité, la métaphysique, la philosophie, les logiciels libres, le véganisme, l''énergétisme, etc...\r\n</p>\r\n'),
(2, '2018-03-11 13:10:14', 'Le symbole Om̐', '<h2>Mon Avatar</h2>\r\n<div class="portrait">\r\n    <img src="/images/aum_blanc.png" alt="Aum Logo" />\r\n</div>\r\n<p>Pourquoi ?</p>\r\n<p>Parce que c''est joli.</p>\r\n<p>Parce que ça dégage quelque chose.</p>\r\n<p>Parce que ça attire le respect.</p>\r\n<p>Parce que c''est plutôt neutre.</p>\r\n<p>Parce que je partage certaines idées avec le Bouddhisme / Taoïsme / Hindouisme.</p>\r\n<p>Parce que ça représente les 4 éléments.</p>\r\n<p>Parce que ça représente le tout.</p>\r\n<p>Parce que c''est un Mantra simple.</p>\r\n<p>Parce que...</p>\r\n<hr />\r\n<p>Pour plus d''informations sur le symbole Om̐, regardez sur <a href="https://fr.wikipedia.org/wiki/Om%CC%90" target="_blank">Wikipédia</a></p>\r\n'),
(3, '2018-03-11 13:10:14', 'Paix pour tous', '<h2>Je dois faire un site Web...</h2>\r\n<p>\r\n    Je dois faire un site Web pour la cause animale; parce que je trouve ce combat noble et juste, je trouve\r\n    que c''est un sujet très important et il me préoccupe beaucoup; mais je n''ai pas d''idées, ou mes idées sont déjà prises...\r\n</p>\r\n<p>\r\n    Mais je veux quand même que mon site suscite le questionnement et incite à rechercher par soi même...\r\n</p>\r\n<p>\r\n    Je sais ! Je vais faire un site Web le plus simpliste du monde, avec juste un bouton qui redirige vers\r\n    un moteur de recherche avec la requête "vegan" déjà lancée...\r\n</p>\r\n<p>\r\n    Comme çà les visiteurs comprendront peut-être que c''est à eux de chercher si ils veulent en connaître plus sur ce sujet...\r\n</p>\r\n<p>\r\n    Donc en quelques minutes je réalise la version française :\r\n</p>\r\n<a href="https://www.paixpourtous.com/" target="_blank"><img class="site" src="/images/blog/paixpourtous.com.png" alt="PaixPourTous.com" /></a>\r\n<h3><a href="https://www.paixpourtous.com/" target="_blank"><img src="/images/flags/drap_fr.gif" alt="français" /> paixpourtous.com</a></h3>\r\n<p>\r\n    Puis la version anglaise :\r\n</p>\r\n<a href="https://www.peace4everyone.info/" target="_blank"><img class="site" src="/images/blog/peace4everyone.info.png" alt="Peace4Everyone.info" /></a>\r\n<h3><a href="https://www.peace4everyone.info/" target="_blank"><img src="/images/flags/drap_en.gif" alt="english" /> peace4everyone.info</a></h3>\r\n<p>\r\n    La version portugaise :\r\n</p>\r\n<a href="https://www.pazparatodos.com/" target="_blank"><img class="site" src="/images/blog/pazparatodos.com.png" alt="PazParaTodos.com" /></a>\r\n<h3><a href="https://www.pazparatodos.com/" target="_blank"><img src="/images/flags/drap_pt.gif" alt="português" /> pazparatodos.com</a></h3>\r\n<p>\r\n    Et enfin la version italienne :\r\n</p>\r\n<a href="https://www.pacepertutti.com/" target="_blank"><img class="site" src="/images/blog/pacepertutti.com.png" alt="PacePerTutti.com" /></a>\r\n<h3><a href="https://www.pacepertutti.com/" target="_blank"><img src="/images/flags/drap_it.gif" alt="italiano" /> pacepertutti.com</a></h3>\r\n<p>;)</p>\r\n'),
(4, '2018-03-20 10:11:11', 'Le Véganisme', '<h3>Jihem vous expliquera bien mieux que moi, ce qu''est le Véganisme. ;)</h3>\r\n<h2>Le Véganisme</h2>\r\n<iframe class="youtube" src="https://www.youtube.com/embed/wt4s2QoU3G0?rel=0" allowfullscreen></iframe>\r\n<h2>Véganement #1 - La Nouvelle Edition</h2>\r\n<iframe class="youtube" src="https://www.youtube.com/embed/vu5xyzEAn6s?rel=0" allowfullscreen></iframe>\r\n<div class="clear"></div>\r\n<div class="portrait2">\r\n    <img src="/images/blog/vegan-friendly.png" alt="Vegan Friendly" />\r\n</div>\r\n<h2>Sources</h2>\r\n<ul>\r\n    <li><a href="https://www.youtube.com/watch?v=vu5xyzEAn6s&list=PL0r7BYBa1LWPi6QT55chkBdMWz-7XS21v" target="_blank">Playlist Véganement</a></li>\r\n    <li><a href="https://www.youtube.com/watch?v=BxtQn8AwNks&list=PL0r7BYBa1LWPG0vNMiSkq-IDXt5p4YbbS" target="_blank">#BonjourJeSuisVégane</a></li>\r\n    <li><a href="https://www.youtube.com/watch?v=wt4s2QoU3G0&list=PL0r7BYBa1LWMli0_DkCr_YI2nNREEHbQ6" target="_blank">Pourquoi ? Parce Qu''EUX</a></li>\r\n    <li><a href="https://www.youtube.com/channel/UCL4aDumq1DvTw2Jp7rF87jQ" target="_blank">Chaine de Jihem Doe</a></li>\r\n</ul>\r\n<hr />\r\n<h2>Plus d''infos</h2>\r\n<ul>\r\n    <li><a href="https://fr.wikipedia.org/wiki/V%C3%A9ganisme" target="_blank">Véganisme sur Wikipédia</a></li>\r\n    <li><a href="https://www.paixpourtous.com/" target="_blank">#PaixPourTous</a></li>\r\n</ul>\r\n'),
(5, '2018-03-11 13:10:14', 'Les logiciels libres', '<h2>GNU/Linux</h2>\r\n<div class="portrait">\r\n    <a href=""><img src="/images/blog/gnu.png" alt="GNU Logo" /></a>\r\n</div>\r\n<div class="float"></div>\r\n<h3>GNU/Linux ?</h3>\r\n<p>\r\n    Linux est un système d''exploitation.\r\n</p>\r\n<p>\r\n    Tout comme le sont Microsoft Windows ou Mac OS sur les ordinateurs Apple.\r\n</p>\r\n<p>\r\n    Une distribution est un "package" de logiciels qui fonctionne autours d''un noyau.\r\n</p>\r\n<p>\r\n    Et quand on parle de linux, on parle du noyau, et quand on parle de Ubuntu, Debian, Fedora, etc.. on parle d''une distribution de logiciels, fonctionnant sur le noyau linux.\r\n</p>\r\n<h2>Ubuntu</h2>\r\n<div class="portrait">\r\n    <img src="/images/blog/ubuntu.png" alt="Ubuntu Logo" />\r\n</div>\r\n<div class="float"></div>\r\n<p>\r\n    « je suis ce que je suis grâce à ce que nous sommes tous »\r\n</p>\r\n<p>\r\n    Enfin une distribution GNU/Linux à la portée de tous !\r\n</p>\r\n<p>\r\n    <u>Wikipédia :</u> <b>Ubuntu</b> (prononciation : /u.bun.tu/) est un système d’exploitation GNU/Linux basé sur la\r\n    distribution Linux Debian. Il est développé, commercialisé et maintenu pour les ordinateurs individuels par\r\n    la société Canonical.\r\n</p>\r\n<p>\r\n    Ubuntu se définit comme « un système d''exploitation utilisé par des millions de PC à travers le monde » et avec\r\n    une interface « simple, intuitive, et sécurisée ». \r\n</p>\r\n<ul>\r\n    <li>\r\n        Si vous souhaitez tester Ubuntu, j''ai créé un tuto pour <a href="/tutos/?page=2">installer Ubuntu dans une machine virtuelle</a>.\r\n    </li>\r\n    <li>Vous pouvez aussi tout simplement lancer Ubuntu (ou une autre distribution) en mode live, ce qui permet de tester ubuntu à partir d''une clé USB ou d''un DVD sans rien modifier dans son ordinateur, voici un autre tuto pour <a href="/tutos/?page=1">créer une clé USB Live ubuntu</a>.</li>\r\n</ul>\r\n'),
(6, '2018-03-27 07:36:10', 'Moment Méditation', '<iframe class="youtube" src="https://www.youtube.com/embed/Tq3eIaKQvfE?rel=0" allowfullscreen></iframe>\r\n\r\n<h3><img alt="Chakras" src="/images/blog/chakras.png" />Un petit moment de Zenitude</h3>\r\n\r\n<hr />\r\n<ul>\r\n	<li>Respirez profond&eacute;ment...</li>\r\n	<li>Mettez-vous en position assise, et d&eacute;croisez les bras et les jambes.</li>\r\n	<li>Concentrez vous sur votre chakra du coeur. Il se trouve au niveau de votre coeur physique, mais au centre.</li>\r\n	<li>Vous pouvez fixer votre regard sur une bougie de la vid&eacute;o, ou tout simplement fermer les yeux.</li>\r\n	<li>Inspirez, expirez de mani&egrave;re consciente, tout en se d&eacute;nouant votre chakras du coeur.</li>\r\n	<li>Entrez dans le moment pr&eacute;sent, entrez dans le ici &amp; maintenant. :)</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
`diary_id` int(11) NOT NULL,
  `diary_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `diary_slug` varchar(6) NOT NULL,
  `diary_title` varchar(255) NOT NULL,
  `diary_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `diary`
--

INSERT INTO `diary` (`diary_id`, `diary_date`, `diary_slug`, `diary_title`, `diary_content`) VALUES
(1, '1993-03-11 20:10:00', 'wO51pZ', 'Vacances de Pâques, 1993 (partie 1)', '<h2>Journal</h2>\r\n\r\n<p>Aujourd&#39;hui il s&#39;est pass&eacute; quelque chose de tr&egrave;s important.</p>\r\n\r\n<p>Voil&agrave; : Ce matin je marchais avec mamie Colette sur un &quot;trottoir&quot; des Bordes. Nous &eacute;tions sur le chemin de la boulangerie et de la boucherie. Nous marchions tranquillement jusqu&#39;au moment ou elle s&#39;est tordu le pied sur un caillou.</p>\r\n\r\n<p>Apr&egrave;s avoir fait nos courses, nous sommes rentr&eacute;s &agrave; la maison pour pr&eacute;parer notre d&eacute;jeuner, mais comme le pied de ma grand-m&egrave;re enflait de plus en plus, elle a t&eacute;l&eacute;phon&eacute; &agrave; un docteur et a pris rendez-vous pour l&#39;apr&egrave;s-midi.</p>\r\n\r\n<p>Donc, l&#39;apr&egrave;s-midi nous nous sommes rendus l&agrave;-bas, et apr&egrave;s quelques minutes d&#39;attente, une dame est venue chercher mamie Colette, mais cette dame m&#39;a regard&eacute; avec insistance, assez bizarrement. Ma grand-m&egrave;re m&#39;a demand&eacute; de rester dans la salle d&#39;attente et est partie avec cette dame.</p>\r\n\r\n<p>Une demie heure apr&egrave;s, cette dame m&#39;appelle et m&#39;invite &agrave; m&#39;asseoir en face de son bureau, puis sors d&#39;une petite boite, une boule suspendue au bout d&#39;un fil.</p>\r\n\r\n<p>Je commence alors &agrave; me poser des questions :</p>\r\n\r\n<p>- Pourquoi m&#39;a-t-elle demand&eacute; de m&#39;assoir en face d&#39;elle ?<br />\r\n- Cette boule au bout du fil est-ce un pendule ?</p>\r\n\r\n<p>Je commence alors &agrave; avoir envie de rire, mais me retiens.</p>\r\n\r\n<p>&quot;S&eacute;bastien, dit-elle, comment travailles-tu &agrave; l&#39;&eacute;cole ?&quot;</p>\r\n\r\n<p>Je commence alors s&eacute;rieusement &agrave; me poser des questions. Ma grand-m&egrave;re lui aurait-elle parl&eacute; de ma scolarit&eacute; ?</p>\r\n\r\n<p>- Eh bien euh... dit-je.<br />\r\n- Je sais tr&egrave;s bien que tu travailles mal &agrave; l&#39;&eacute;cole, r&eacute;pond-elle.</p>\r\n\r\n<p>Elle faisait tournoyer son pendule en me posant des questions.</p>\r\n\r\n<p>- Tu sais que tu as d&#39;&eacute;normes capacit&eacute;s ? me dit-elle.<br />\r\n- Non...</p>\r\n\r\n<p>Elle m&#39;a dit que j&#39;avais un blocage. Elle m&#39;a demand&eacute; alors de regarder le mur derri&egrave;re elle si je voyais quelque chose.</p>\r\n\r\n<p>J&#39;ai regard&eacute;.</p>\r\n\r\n<p>Au d&eacute;but je ne voyais pas grand chose, peut-&ecirc;tre une silhouette par-ci ou une zone floue par l&agrave;, mais petit &agrave; petit j&#39;ai commenc&eacute; &agrave; voir une ruban quartet color&eacute; avec des couleurs que je n&#39;avais semble t-il jamais vues - enfin &agrave; mon avis - un genre de jaune, de vert, de bleu et de violet. Mais de tr&egrave;s belles couleurs.</p>\r\n\r\n<p>Je lui ai dit et elle m&#39;a r&eacute;pondu que c&#39;&eacute;taient la couleur des Astres.</p>\r\n\r\n<p>J&#39;&eacute;tais tr&egrave;s impressionn&eacute;.</p>\r\n\r\n<p>Comme ma grand-m&egrave;re a vu que c&rsquo;&eacute;tait b&eacute;n&eacute;fique pour moi, nous avons repris rendez-vous avec elle.</p>\r\n\r\n<p>Quand nous sommes partis, j&rsquo;ai demand&eacute; &agrave; ma grand-m&egrave;re , si elle lui avait parl&eacute; de moi. Elle ma r&eacute;pondu que non.</p>\r\n\r\n<p>A la s&eacute;ance suivante, Mme S. (la magn&eacute;tiseuse) m&rsquo;a demand&eacute; si je me rappelais de mes r&ecirc;ves.<br />\r\nJe lui ai r&eacute;pondu que non, et elle m&#39;a alors r&eacute;pondu que le soir m&ecirc;me, je r&ecirc;verais et que je m&#39;en souviendrai, et que le lendemain je devais lui raconter.</p>\r\n\r\n<p>Le soir m&ecirc;me, j&#39;ai r&ecirc;v&eacute;, &ocirc; &ccedil;&agrave;, pour m&#39;en souvenir, je m&#39;en souviens encore !</p>\r\n\r\n<p>Dans mon r&ecirc;ve, je me trouvais dans mon jardin; pas mon jardin actuel, mais <em>mon jardin</em>...<br />\r\nM&ecirc;me si je ne connais pas ce lieu, dans <em>ma vie actuelle</em>, je <em>savais</em> que j&#39;&eacute;tais dans <em>mon jardin</em>.<br />\r\nDans ce jardin l&agrave;, il y avait une petite colline dans laquelle il y avait deux grottes.</p>\r\n\r\n<p>Je suis entr&eacute; dans la premi&egrave;re. Sur les murs il y avait des y&eacute;roglyphes. Je suis all&eacute; jusqu&#39;au bout, o&ugrave; il y avait un trou. J&#39;ai pass&eacute; la t&ecirc;te dedans, et j&#39;ai regard&eacute; autours de moi. Je me trouvais dans une grande salle tr&egrave;s tr&egrave;s grande. Le plafond &eacute;tait aussi haut que le ciel, et tout &eacute;tait rouge sang.<br />\r\nJ&#39;ai baiss&eacute; les yeux et j&#39;ai vu un ruisseau couler sous ma t&ecirc;te.<br />\r\nL&#39;eau &eacute;tait toute rouge sang &eacute;galement.<br />\r\nJ&#39;ai lev&eacute; les yeux et j&#39;ai vu deux temples incas, et un homme courrait en d&eacute;valant les marches du premier temple avec un coffre aux tr&eacute;sor dans les mains et il criait :<br />\r\n&quot;J&#39;ai trouv&eacute; le tr&eacute;sor ! Je l&#39;ai trouv&eacute; !&quot;<br />\r\nC&#39;est alors que j&#39;ai retir&eacute; la t&ecirc;te du trou et suis sorti de la premi&egrave;re grotte et suis rentr&eacute; dans la seconde.</p>\r\n\r\n<p>Sur les murs, il y avait des dessins de gaulois, et je ne voyais pas le fond de la grotte, c&#39;&eacute;tait dans le noir.</p>\r\n\r\n<p>Et je me suis r&eacute;veill&eacute;.</p>\r\n'),
(2, '1993-03-11 20:20:00', '8Jk7Px', 'Vacances de Pâques, 1993 (partie 2)', '<p>J&#39;ai racont&eacute; &agrave; la magn&eacute;tiseuse tout ce r&ecirc;ve et elle a sorti un livre appel&eacute; : &quot;dictionnaire du Kent&quot;.</p>\r\n\r\n<p>Par intuition j&#39;ai tout de suite interpr&eacute;t&eacute; mon r&ecirc;ve comme repr&eacute;sentant deux vies.<br />\r\nLa premi&egrave;re grotte &eacute;tant&nbsp;ma vie ant&eacute;rieure, et la deuxi&egrave;me grotte ma vie actuelle.<br />\r\nJe pensais d&#39;ailleurs que les hi&eacute;roglyphes&nbsp;voulaient dire que j&#39;&eacute;tais &Eacute;gyptien&nbsp;&agrave; cette &eacute;poque.<br />\r\nLa magn&eacute;tiseuse m&#39;a alors dit que la deuxi&egrave;me grotte symbolisait bien ma vie actuelle, mais que la premi&egrave;re grotte ne symbolisait pas ma vie ant&eacute;rieure, mais il y a cinq vies; et je n&#39;&eacute;tais pas &Eacute;gyptien&nbsp;mais Romain, les hi&eacute;roglyphes &eacute;tant l&agrave; parce que - selon elle - les Romains commer&ccedil;aient beaucoup avec les &eacute;gyptiens &agrave; l&#39;&eacute;poque.</p>\r\n\r\n<p>Et le tr&eacute;sor que le Monsieur avait trouv&eacute; c&#39;est en fait moi qui l&#39;avait trouv&eacute; &agrave; l&#39;&eacute;poque, et que j&#39;ai voulu me l&#39;accaparer.<br />\r\nJ&#39;ai alors &eacute;t&eacute; jug&eacute; et jet&eacute; aux oubliettes, et je suis mort dedans.</p>\r\n\r\n<p>Comme j&#39;ai vu qu&#39;elle pouvait avoir des renseignements sur mes vies ant&eacute;rieures, je lui ai demand&eacute; des renseignements sur ma vie ant&eacute;rieure la plus proche.<br />\r\nElle m&#39;a alors dit qu&#39;&agrave; cette &eacute;poque j&#39;&eacute;tais une Portugaise. (Une fille, donc)</p>\r\n\r\n<p>J&#39;&eacute;tais &eacute;berlu&eacute; ! Je ne savais pas quoi dire.</p>\r\n\r\n<p>Elle m&#39;a dit que mon blocage&nbsp;s&#39;&eacute;tait &quot;cr&eacute;&eacute;&quot; durant ma deuxi&egrave;me ann&eacute;e de CP (en 1985 ou 1986), que quatre gar&ccedil;ons de ma classe avaient fait une b&ecirc;tise, et qu&#39;ils avaient dit &agrave; la ma&icirc;tresse&nbsp;que c&#39;&eacute;tait moi le coupable.</p>\r\n\r\n<p>Ca se serait pass&eacute; au mois de&nbsp;Juin.</p>\r\n\r\n<p>Ma ma&icirc;tresse m&#39;a donn&eacute; des baffes et ce serait &ccedil;&agrave; qui m&#39;a bloqu&eacute;.</p>\r\n\r\n<p>Sur le moment je ne l&#39;ai pas crue, car dans mes souvenirs, cette ma&icirc;tresse &eacute;tait de loin la plus gentille de toute ma scolarit&eacute;; mais &agrave; ce moment l&agrave;, je me suis senti bizarre, et lorsque nous sommes partis, dans la voiture je me suis mis &agrave; pleurer.<br />\r\nMa mamie ne l&#39;a pas s&ucirc; car durant tout le trajet, j&#39;ai tourn&eacute; la t&ecirc;te &agrave; l&#39;oppos&eacute;.</p>\r\n\r\n<p>Lorsque je suis revenu dans ma ville, j&#39;ai rencontr&eacute; un gar&ccedil;on qui &eacute;tait dans ma classe quand je faisais&nbsp;mon deuxi&egrave;me CP.<br />\r\nJe lui ai alors demand&eacute; si notre ma&icirc;tresse donnait des baffes, et &agrave; ma grande stup&eacute;faction il m&#39;a r&eacute;pondu que oui, et m&ecirc;me qu&#39;elle &eacute;tait tr&egrave;s m&eacute;chante.</p>\r\n\r\n<p>Cela a remis alors tous mes souvenirs en question.<br />\r\nJe me suis rendu compte &agrave; ce moment l&agrave;, que mes souvenirs n&#39;&eacute;taient pas toujours ce qu&#39;il s&#39;est r&eacute;ellement pass&eacute;, qu&#39;ils n&#39;&eacute;taient pas toujours fond&eacute;s et justes.</p>\r\n\r\n<p>La magn&eacute;tiseuse m&#39;avait dit &agrave; l&#39;&eacute;poque que si je me rappelais&nbsp;de ce moment l&agrave; (la baffe de la ma&icirc;tresse), je devais raconter &agrave; quelqu&#39;un ce qui s&#39;&eacute;tait pass&eacute;, que &ccedil;&agrave; me d&eacute;bloquerait.</p>\r\n\r\n<p>Et puis, les vacances ce sont termin&eacute;es.<br />\r\nJ&#39;ai donc arr&ecirc;t&eacute; de voir Annie (la magn&eacute;tiseuse).<br />\r\nMais tous ces &eacute;v&eacute;nements m&#39;on beaucoup marqu&eacute;.</p>\r\n\r\n<p>C&#39;est pourquoi &agrave; mon retour, je me suis mis &agrave; faire du spiritisme, j&#39;ai achet&eacute; un pendule pour faire de la radiesth&eacute;sie, je me suis amus&eacute; &agrave; faire de la l&eacute;vitation avec mes copines du Portugal... Et au Portugal, j&#39;ai m&ecirc;me parl&eacute; plusieurs fois aux esprits; une fois, j&#39;ai m&ecirc;me parl&eacute; &agrave; un ami d&#39;enfance qui &eacute;tait mort noy&eacute; dans le barrage pr&egrave;s de chez moi, au Portugal.</p>\r\n'),
(3, '1997-03-15 21:46:43', 'rDK55v', 'Samedi 15 Mars 1997', '<p>Aujourd&#39;hui j&#39;ai &eacute;t&eacute; chez Mme S., l&#39;&eacute;nerg&eacute;ticienne.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`message_id` int(11) NOT NULL,
  `message_firstname` varchar(30) NOT NULL,
  `message_lastname` varchar(30) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_subject` varchar(50) NOT NULL,
  `message_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
`music_id` int(11) NOT NULL,
  `music_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `music_title` varchar(255) NOT NULL,
  `music_slug` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `music`
--

INSERT INTO `music` (`music_id`, `music_date`, `music_title`, `music_slug`) VALUES
(1, '2018-03-18 20:58:32', 'Hilight Tribe - Free tibet', 'I3rlh18G11E'),
(2, '2018-03-18 20:58:48', 'Hilight Tribe - Temple Of Light [Full Album]', 'qe7hgTzdKyo'),
(3, '2018-03-18 21:00:15', 'Twenty Øne Piløts - Fairly Local', 'HDI9inno86U'),
(4, '2018-03-18 21:01:35', 'Twenty Øne Piløts - Heathens', 'UprcpdwuwCg'),
(5, '2018-03-18 21:02:36', 'Twenty Øne Piløts - Stressed Out', 'pXRviuL6vMY'),
(6, '2018-03-18 21:04:08', 'Twenty Øne Piløts - Lane Boy', 'ywvRgGAd2XI'),
(7, '2018-03-18 21:05:02', 'Twenty Øne Piløts - Ride', 'Pw-0pbY9JeU'),
(8, '2018-03-18 21:11:20', 'Twenty Øne Piløts - Friend, please', '2guTY5c7mSo'),
(9, '2018-03-18 21:12:25', 'Twenty Øne Piløts - Heathens (TOPxMM)', 'qNk-xjCISYQ'),
(10, '2018-03-18 21:13:39', 'Twenty Øne Piløts - Lane Boy (TOPxMM)', 'oRb0C1rMCH0'),
(11, '2018-03-18 21:17:20', 'Twenty Øne Piløts - Ride (TOPxMM)', 'fo4p5GJDk_g'),
(12, '2018-03-18 21:34:55', 'David Bowie - Space Oddity', 'iYYRH4apXDo'),
(13, '2018-03-18 21:37:22', 'Peter Kingsbery - Only the very best', 'doU4u9eJ3z0'),
(14, '2018-03-18 21:38:24', 'Cyndi Lauper - The world is stone', 'vKm9Xrf6Eno'),
(15, '2018-03-18 21:39:23', 'Amy Winehouse - Back To Black', 'TJAfLE39ZZ8'),
(16, '2018-03-18 21:40:10', 'Bigflo & Oli - Dommage', '8AF-Sm8d8yk'),
(17, '2018-03-18 21:42:41', 'Björk - Bachelorette', 'x5nNfbTS6N4'),
(18, '2018-03-18 21:43:45', 'Björk - Jóga', 'BBju9Sdh94k'),
(19, '2018-03-18 21:45:51', 'Corey Hart - Sunglasses At Night', 'X2LTL8KgKv8'),
(20, '2018-03-18 21:48:15', 'Comah & R3ckzet - Sparties (Original Intro Mix)', '1fI9GrGBuW4'),
(21, '2018-03-18 21:50:01', 'Crystal Waters - Gypsy Woman (She''s Homeless)', 'tN6FIac7Wwc'),
(22, '2018-03-18 21:52:14', 'Daft Punk - Rock''n Roll', 'ZW7WfdTuth8'),
(23, '2018-03-18 21:52:52', 'Daft Punk - Rollin'' & Scratchin''', 'Gbb8kZw-xRg'),
(24, '2018-03-18 21:54:02', 'Des''ree - I''m Kissing You', 'x55doVYxwbQ'),
(25, '2018-03-18 21:55:34', 'Talamasca - Psychedelic Trance [Full Album]', 'f04pC0_U5-I'),
(26, '2018-03-18 21:57:23', 'DjamHellVice - A Prendre', 'aoJS8Fm1ors'),
(27, '2018-03-18 21:58:47', 'DJ F.E.X - Indie Walk', 'lcBPwAWd3ZI'),
(28, '2018-03-18 22:00:08', 'Drax Ltd II - Amphetamine', 'oqW2xKjVtMo'),
(29, '2018-03-18 22:07:15', 'Felix - Don''t You Want Me', 'bj8xF2bnxp0'),
(30, '2018-03-18 22:08:21', 'Florent Pagny - Chatelet Les Halles', 'i3gVto7j3LI'),
(31, '2018-03-18 22:09:37', 'Grace - You Don''t Own Me ft. G-Eazy', '8SeRU_ZPDkE'),
(32, '2018-03-18 22:10:29', 'Hans Zimmer - Time', 'RxabLA7UQ9k'),
(33, '2018-03-18 22:11:58', 'Hilight Tribe - Free Tibet (Vini Vici Remix)', '0lBjcaMokvo'),
(34, '2018-03-18 22:12:41', 'Agatsuma Hiromitsu - Yuudachi', 'FEsluNFg6g0'),
(35, '2018-03-18 22:13:43', 'I Monster - Heaven', '8oaapqgy_bI'),
(36, '2018-03-18 22:14:57', 'I Monster - Daydream in blue (rare version)', '-RV0kUChjG8'),
(37, '2018-03-18 22:15:48', 'I Monster - Daydream In Blue', 'S6_hzqae2tw'),
(38, '2018-03-18 22:16:39', 'Indila - Dernière Danse', 'K5KAc5CoCuk'),
(39, '2018-03-18 22:18:17', 'Indila - Dernière Danse (Live Orchestre A Cordes)', 'niMdqOaWHqE'),
(40, '2018-03-18 22:19:08', 'Indila - Tourner dans le vide', 'vtNJMAyeP0s'),
(41, '2018-03-18 22:20:50', 'James Blunt - Why Do I Fall', 'pJlGGAiqDa8'),
(42, '2018-03-18 22:23:10', 'Jeremih - Down On Me ft. 50 Cent', 'AaXaig_43lU'),
(43, '2018-03-18 22:25:28', 'Luz Casal - Historia de un Amor', 'P6ZKW3xzK7I'),
(44, '2018-03-18 22:26:09', 'Luz Casal - Piensa En Mi', 'LS04M9Mz26E'),
(45, '2018-03-18 22:27:07', 'Luz Casal - Un año de amor', 'C5rVi91TGNw'),
(46, '2018-03-18 22:27:48', 'Madredeus - O Pastor', 'Dt1jMWVvcqg'),
(47, '2018-03-18 22:28:17', 'Madredeus - Haja O Que Houver', 'hhxti4nFTdc'),
(48, '2018-03-18 22:29:02', 'Madredeus - Alfama', '9f0mj6QbqsI'),
(49, '2018-03-18 22:29:47', 'Madredeus - A vaca do fogo', 'ucL1doNYpqU'),
(50, '2018-03-18 22:31:17', 'Madredeus - Oxalá (Télépopmusik Remix)', '669Cvzk6lV0'),
(51, '2018-03-18 22:32:10', 'Maître Gims - Tout donner', '-KRe61NpaTA'),
(52, '2018-03-18 22:32:51', 'Massive Attack - Teardrop', 'u7K72X4eo_s'),
(53, '2018-03-18 22:34:19', 'Massive Attack - Man next door', 'aTpky_UCNXc'),
(54, '2018-03-18 22:36:05', 'Mungo''s Hi Fi - Bike Rider Ft Pupajim', '4oUxPWnrXNk'),
(55, '2018-03-18 22:37:11', 'Ratatat - Shiller', 'rKnCY3o6uaQ'),
(56, '2018-03-18 22:38:33', 'Rockin'' Squat - Illuminazi 666', 'D6Hpsg9L4zU'),
(57, '2018-03-18 22:39:06', 'Rockin'' Squat - Le Pouvoir Secret', 'Hf2aQWLx3JA'),
(58, '2018-03-18 22:39:54', 'Scorpions - Still Loving You', '7pOr3dBFAeY'),
(59, '2018-03-18 22:40:52', 'Sono - Keep Control', 'hX5w-b4DSWA'),
(60, '2018-03-18 22:42:41', 'Stromae - Tous Les Mêmes', 'CAMWdvo71ls'),
(61, '2018-03-18 22:43:07', 'Stromae - Formidable', 'S_xH7noaqTA'),
(62, '2018-03-18 22:43:47', 'Stromae - Papaoutai', 'oiKj0Z_Xnjc'),
(63, '2018-03-18 22:44:19', 'Stromae - Alors On Danse', 'VHoT4N43jK8'),
(64, '2018-03-18 22:44:59', 'Stromae - Ave Cesaria', 'rO1VDCZh_Ko'),
(65, '2018-03-18 22:45:50', 'Stromae - Te Quiero', 'vg1ajGmQFts'),
(66, '2018-03-18 22:47:19', 'Stromae - Racine Carrée Live (Full Concert)', 'eOZLDQm9c2E'),
(67, '2018-03-18 22:48:34', 'Stromae - Ave Cesaria (in San Francisco)', 'tsqG176hmUY'),
(68, '2018-03-18 22:54:43', 'Stromae Feat Orelsan & Maitre Gims - AVF', 'q9hW4MLNp5E'),
(69, '2018-03-18 22:55:20', 'The Fugees - Killing Me Softly With His Song', 'oKOtzIo-uYw'),
(70, '2018-03-18 22:55:49', 'The Fugees - Ready or Not', 'aIXyKmElvv8'),
(71, '2018-03-18 22:57:31', 'The Weeknd - I Feel It Coming ft. Daft Punk', 'qFLhGq0060w'),
(72, '2018-03-18 23:01:15', 'The White Stripes - Seven Nation Army', '0J2QdDbelmY'),
(73, '2018-03-18 23:02:15', 'Two Feet - Love Is A Bitch', '_DjE4gbIVZk'),
(74, '2018-03-18 23:03:13', 'Two Feet - Twisted', 'skGLNdRzy-0'),
(75, '2018-03-18 23:04:29', 'Wim Mertens - Often A Bird', 'CWrQXqblE9o'),
(76, '2018-03-18 23:05:57', 'Yazoo - Only you', 'LIiyT67Sjbg'),
(77, '2018-03-18 23:06:32', 'Zaho - Je Te Promets', '6yUb-hqF_wY'),
(78, '2018-03-18 23:07:03', 'Zaho - Tourner la page', 'rZz8r8ZE93I'),
(79, '2018-03-18 23:07:41', 'Zaho - C''est Chelou', 'pHy0LkdpxSU'),
(80, '2018-03-18 23:08:11', 'Zaho - Divisés', '4gLLEPB-GZo'),
(81, '2018-03-18 23:09:13', 'Zombie Nation - Kernkraft 400', 'z5LW07FTJbI'),
(82, '2018-03-18 23:09:57', 'UnderCover - Chapati', 'et-4L_JOyGk'),
(83, '2018-03-18 23:11:13', 'Loud @ Boom Festival 2014', 'HxbnlpX9U0Y'),
(84, '2018-03-18 23:11:47', 'Captain Hook @ Ozora 2017', '46Q7-onPy3E'),
(85, '2018-03-18 23:13:25', 'Dalida - Histoire d''un amour', 'jNhZqiQd-eI'),
(86, '2018-03-18 23:15:24', 'Dalida - Je suis malade', 'ZEoft6dypiQ'),
(87, '2018-03-18 23:16:23', 'Notre Dame de Paris - Belle', '-XB7aftz6zY'),
(88, '2018-03-18 23:29:06', 'Maître Gims - Caméléon', 'Gcrs5VN9Lgk'),
(89, '2018-03-19 01:46:22', 'Yaniss Odua - Chalawa (Generation H)', 'oSlbdF-9mH0'),
(90, '2018-03-19 01:47:48', 'Taïro - Bonne Weed', 'hkC-hX_i3pw'),
(91, '2018-03-19 01:50:21', 'Manau - La tribu de Dana', '80hMEKlLVgQ'),
(92, '2018-03-19 01:51:18', 'Moos - Au nom de la rose', 'BWLfGQbqNWY'),
(93, '2018-03-19 01:52:10', 'Diam''s - La Boulette', 'OC2R5fvJsxo'),
(94, '2018-03-19 01:53:05', 'Sexion d''Assaut - Ma direction', 'Y7-vP7TnluY'),
(95, '2018-03-19 01:54:08', 'Vitaa - Game Over ft. Maître Gims', '97Nis75DAgc'),
(96, '2018-03-19 01:55:32', 'Kyo - Dernière danse', 'aU_TQcyGkvY'),
(97, '2018-03-19 01:56:14', 'Kyo - Je cours', '5xqBUE8z-bk'),
(98, '2018-03-19 01:56:41', 'Kyo - Je saigne encore', 'KE0oSP0g6Bs'),
(99, '2018-03-19 01:57:18', 'Kyo - Le chemin ft. Sita', 'CLuOd8xMRRo'),
(100, '2018-03-19 01:58:08', 'Kyo - Le Graal', 'hWXYnW2Um68'),
(101, '2018-03-19 01:59:00', 'Najoua Belyzel - Gabriel', 'xYmWLakvgIY'),
(102, '2018-03-19 01:59:35', 'Passi - Face à la mer feat. Calogero', 'ULvoKkEPCYM'),
(103, '2018-03-19 02:00:27', 'Florent Pagny - Savoir Aimer', 'g-gh2hIRhkc'),
(104, '2018-03-19 02:00:51', 'Tragédie - Hey Oh', 'm5kURsPznXw'),
(105, '2018-03-19 02:02:04', 'Matt Houston - RnB de rue', 'rcN8z4vtwms'),
(106, '2018-03-19 02:02:48', 'Matt Houston feat. P-Square - Positif', 'nkk7wKHGFRI'),
(107, '2018-03-19 02:06:52', 'Coolio - Gangsta''s Paradise (feat. L.V.)', 'fPO76Jlnz6c'),
(108, '2018-03-19 02:07:36', 'Bouga - Belsunce Breakdown', 'mVytTl0iOwQ'),
(109, '2018-03-19 02:09:29', 'Bomfunk MC''s - Freestyler', 'ymNFyxvIdaM'),
(110, '2018-03-19 02:10:34', 'The Chemical Brothers - Hey Boy Hey Girl', 'tpKCqp9CALQ'),
(111, '2018-03-19 02:11:53', 'Skrillex & Damian Marley - Make It Bun Dem', 'BGpzGu9Yp6Y'),
(112, '2018-03-19 02:14:49', 'Vini Vici - Transmission (The Lost Oracle)', '25ztioI37oc'),
(113, '2018-03-19 02:15:32', 'Run-DMC, Jason Nevins - It''s Like That', 'TLGWQfK-6DY'),
(114, '2018-03-19 02:16:39', 'Technotronic - Get Up', 'a6xDiPubxVU'),
(115, '2018-03-19 02:17:28', 'Snap - I ve Got The power', '_BRv9wGf5pk'),
(116, '2018-03-19 02:18:19', 'Ace of Base - Happy Nation', 'HWjCStB6k4o'),
(117, '2018-03-19 02:18:49', 'Ace of Base - All That She Wants', 'd73tiBBzvFM'),
(118, '2018-03-19 02:20:15', 'Vengaboys - Boom, Boom, Boom, Boom!!', 'xMP-JqFQ_l4'),
(119, '2018-03-19 02:21:34', 'Kris Kross - Jump', '010KyIQjkTk'),
(120, '2018-03-19 02:25:55', 'MC Solaar - Caroline', 'PjELabiPItw'),
(121, '2018-03-19 02:26:37', 'MC Solaar - Victime de la mode', 'uDtqGdtLkTc'),
(122, '2018-03-19 02:27:08', 'MC Solaar - Hasta la vista', '20baKNd9Pug'),
(123, '2018-03-19 02:28:04', 'Hocus Pocus - Petit pays', 'QeMNeD9cJiE'),
(124, '2018-03-19 02:28:31', 'IAM - L''empire du côté obscur', 'TUdcIF00ekg'),
(125, '2018-03-19 02:29:56', 'One-T & Cool-T - The Magic Key', '2nSvaqKcwSc'),
(126, '2018-03-19 10:08:31', 'Vanupié - Rockadown (Subway Session feat. Lidiop)', 'AcHHE9bvLgY'),
(127, '2018-03-19 10:10:18', 'Stand High Patrol - The Big Tree', 'kSjXOebB7eI'),
(128, '2018-03-19 10:12:52', 'Si-Moon - The Creation', 'uyR66vOLtZY'),
(129, '2018-03-19 10:16:38', 'Si-Moon - Dirty Prog', '4jD3HpG8nwc'),
(130, '2018-03-19 10:17:44', 'Brain Bug - Nightmare (Si-Moon Remix)', 'Da0Y2-hiAvM'),
(131, '2018-03-19 10:22:32', 'Minimal Techno Mix - Classic Vitamin Set 1', 'kVdDYd67WNs'),
(132, '2018-03-19 10:24:12', 'Minimal Techno Mix - Classic Vitamin Set 2', 'OFuh08H9CfM'),
(133, '2018-03-19 10:25:57', 'Minimal Techno Mix - Classic Vitamin Set 3', 'XFA2fxODb44'),
(134, '2018-03-19 10:26:37', 'Minimal Techno Mix - Classic Vitamin Set 4', '90dWGqN3ocE'),
(135, '2018-03-19 21:27:52', 'Soprano - Hiro feat. Indila', 'VLPRQUbhIT0'),
(136, '2018-03-19 21:39:41', 'Captain Hook - Voodoo Magic', 'cF_iY445YBg'),
(137, '2018-03-19 21:41:27', 'Captain Hook - Deeper In Trance Vol. 1', '6z3knGo2uF8'),
(138, '2018-03-19 21:42:49', 'Captain Hook - Deeper In Trance Vol. 2', 'DVKwPaCUGkg'),
(139, '2018-03-19 21:43:18', 'Captain Hook - Deeper In Trance Vol. 3', 'zsXsgU3LtCo'),
(140, '2018-03-19 21:44:46', 'Captain Hook ‎- Human Design', 'qqp0C_2m0X4'),
(141, '2018-03-19 21:46:08', 'Kruder & Dorfmeister - The K&D Sessions', 'unGEItr2gMo'),
(142, '2018-03-19 21:49:21', 'Tosca - Suzuki', 'mNk9cbJqtjs'),
(143, '2018-03-19 21:50:53', 'Gotan Project - La Revancha Del Tango', 'QybR25RPt-8'),
(144, '2018-03-22 20:01:03', 'Cesaria Evora - Petit pays', 'DeLUGn7qYP8'),
(145, '2018-03-22 20:02:30', 'Cesaria Evora - Sodade', 'Mo4dmYifj0U'),
(146, '2018-03-24 11:43:02', 'Hang Massive - Once Again', 'xk3BvNLeNgw'),
(147, '2018-03-24 11:45:09', 'Yatao - Phoenix', 'hzSwPXiPJuE'),
(148, '2018-03-27 07:32:36', 'OM Mani Padme Mantra hum', 'Tq3eIaKQvfE'),
(149, '2018-03-27 09:14:16', 'DigiCult - Cosmic Company (Talamasca Remix)', 'kdrK85li4PA'),
(150, '2018-03-30 06:16:13', 'Deborah de Luca @ Nibirii - Cologne 2018', 'kYjdVKpK8cs'),
(151, '2018-03-30 06:26:54', 'Burn in Noise @ Boom Festival 2016', '0GJDQ9d4lyE'),
(152, '2018-03-30 06:53:06', 'Talamasca @ Sonoora 2017', 'csW5fZr8XzM'),
(153, '2018-03-30 06:55:10', 'Astrix @ Sonoora 2017', '2KhVudcp-ik'),
(154, '2018-03-30 06:57:24', 'Loud @ Boom Festival 2016', 'UAFMfgtzaG8'),
(155, '2018-03-30 07:46:34', 'Tristan @ Boom Festival 2014', 'pjmLsCqMH6U'),
(156, '2018-03-30 07:47:37', 'Electric Universe @ Boom Festival 2016', 'c-JaYxFYknA'),
(157, '2018-03-30 07:54:40', 'Vini Vici @ Boom Festival 2016', 'Cg3jj5RXXq0'),
(158, '2018-03-30 08:20:59', 'Eitan Reiter @ Boom Festival 2016', 'EvF5cU63x-w'),
(159, '2018-03-30 08:23:04', 'Merkaba @ Boom Festival 2016', 'gkzXd53yWMA'),
(160, '2018-03-30 08:26:20', 'Atmos @ Boom Festival 2016', 'vyp2EzAkd5A'),
(161, '2018-03-31 20:48:54', 'Taïro - Bonne Weed Remix', 'jNBcEnIonL4'),
(162, '2018-03-31 20:54:49', 'Manau - Mais qui est la belette ?', 'I1BAY46mtZI'),
(163, '2018-03-31 20:56:28', 'Manau - Le chant du coq', 'hKnp__oNfXg'),
(164, '2018-03-31 20:57:38', 'Keny Arkana - V pour Vérités', 'eQwxh68kKYc'),
(165, '2018-03-31 20:58:31', 'Keny Arkana - Vie d''artiste', 'hFb6T6mmh6M'),
(166, '2018-03-31 20:59:56', 'Keny Arkana - J''ai Osé', 'KFJ_fFfsfNY'),
(167, '2018-03-31 21:00:27', 'Keny Arkana - J''me barre', 'CYsDi-Q5k5o'),
(168, '2018-03-31 21:01:26', 'Keny Arkana - Cinquième Soleil', 'QlS8g9EN3Hc'),
(169, '2018-03-31 21:02:12', 'Keny Arkana - Gens Pressés', 'zAMD_mHjgec'),
(170, '2018-03-31 21:04:18', 'Keny Arkana - De l''Opéra à la Plaine 2 feat. Le Secteur', '6hTWUFRUVNY'),
(171, '2018-03-31 21:06:39', 'Keny Arkana - Cherche en toi', 'KlI8sKbmZbg'),
(172, '2018-03-31 21:21:03', 'Keny Arkana - L''histoire se répète', 'GikTtrB5Z0w'),
(173, '2018-03-31 21:22:46', 'Yaniss Odua feat. Keny Arkana - Écoutez-nous', 'T4jFj1kns08'),
(174, '2018-04-01 13:16:29', 'Keny Arkana - De l''Opéra à la Plaine 3', 'L44zxOfn7Aw'),
(175, '2018-04-01 13:17:56', 'El Matador - Polémiquement incorrect', 'cVomLcGylQo'),
(176, '2018-04-04 18:59:55', 'Tricky - ''Hell Is Round the Corner', 'E3R_3h6zQEs'),
(177, '2018-04-08 10:23:54', 'Kreezy R - J''mange pas de cadavres', 'yLNluwgLNqE'),
(178, '2018-04-08 10:26:11', 'Kreezy R - Imposture', 'lzs_Z5gITTI'),
(179, '2018-04-13 08:24:57', 'Keny Arkana - De l''Opéra à la Plaine', 'Is0oqNakaqE'),
(180, '2018-04-13 08:35:44', 'Keny Arkana - De quoi es-tu si sûr ?', 'CQfBN-kgz00'),
(181, '2018-04-13 08:40:24', 'Keny Arkana - Effort de Paix', '_K9ogpMgDe0'),
(182, '2018-04-13 08:56:56', 'Keny Arkana @ Paléo Festival', 'RybU15ra9tI'),
(183, '2018-04-18 19:16:04', 'Twenty One Pilots & Melanie Martinez - Mad Heathens', 'mHyJ_MFnzi4'),
(184, '2018-04-18 19:21:31', 'Twenty One Pilots & Melanie Martinez - Soaped Out', 'B3d8WAAVkkA'),
(185, '2018-05-10 08:02:12', 'Dadju - Bob Marley', 'hQU_pgyCL6k'),
(186, '2018-05-10 08:18:15', 'OrelSan - Tout va bien', 'dq6G2YWoRqA'),
(187, '2018-05-10 08:24:01', 'Vitaa & Claudio Capéo - Un peu de rêve', 'CfVMIcP1FdY'),
(188, '2018-07-14 14:40:53', 'GayaTree ॐ Ambient, Psybient Mix', 'EFSrMwp3ydM'),
(189, '2019-02-08 11:02:23', 'Os Tincoãs - Deixa A Gira Girar (j g b edit)', '3xt8Mp8oWzc'),
(190, '2019-02-08 11:07:52', 'Christine and The Queens - Christine', 'rs40yxHjTxQ'),
(191, '2019-02-08 11:08:53', 'N''to - Alter Ego', 'g3y6MEcOX7o'),
(192, '2019-02-08 11:10:19', 'Unders – Syria', 'G5TBWxjnaIE'),
(193, '2019-02-12 15:03:49', 'Nâdiya - Amies-ennemies', '9jpiPXwcr0c'),
(194, '2019-02-12 15:42:33', 'Cappella - U Got 2 Let The Music', 'y3KihWJRh6U'),
(195, '2019-02-12 16:07:23', '2 Unlimited - No Limit', 'RkEXGgdqMz8'),
(196, '2019-02-12 16:41:45', 'Marwa Loud - Fallait pas', '5UV1aEkBgAk'),
(197, '2019-02-14 08:55:43', 'Vienna Scientists I - A Selection Into Dub Funk Trip Hop Drum''N''Bass', '2dDcxmnqrvc'),
(198, '2019-02-15 14:51:27', 'Depeche Mode - Useless ''17', '9BP08E4Uzyk'),
(199, '2019-02-15 15:40:55', 'Boozoo Bajou - Satta', '8r67q9uPk8E'),
(200, '2019-02-15 19:21:17', 'Morcheeba - Big Calm', 'qJQHjy9p_rk'),
(201, '2019-02-16 19:16:47', 'Medicinal Vibes [Dub / Psydub / Psybient Music Mix]', '4TexhCt8luw'),
(202, '2019-02-17 11:15:15', 'Depeche Mode - Personal Jesus', 'u1xrNaTO1bI'),
(203, '2019-02-17 17:14:17', 'Lucas presents - Confessions of a SuperModule', 'uAxtPztdjbk'),
(204, '2019-02-17 17:17:37', 'Captain Hollywood Project - More and More', 'V-rS174AUT0'),
(205, '2019-02-17 17:19:50', 'Da Hool - Meet her at the Loveparade', 'KO4y3nkJXDA'),
(206, '2019-02-17 17:22:35', 'Black Box - Ride on Time', 'M0quXl_od3g'),
(207, '2019-02-18 08:24:42', 'Buena Vista Social Club - Chan Chan', 'KODWcrncnUU'),
(208, '2019-02-20 09:34:28', 'Wipe Out All the Negative Energy(417Hz)', 'I_FpVaV1pHc'),
(209, '2019-02-21 10:52:59', 'Tosca - The Lounge Dub', 'qeh7hsSw2IQ'),
(210, '2019-02-21 11:17:49', 'Tosca - Opera', 'HV7OYwjKI2c'),
(211, '2019-02-21 11:26:56', 'Tosca - J.A.C.', 'hoN763DxG2U'),
(212, '2019-02-21 11:44:34', 'Tosca - Souvenirs', 'izVn4L8XYCE'),
(213, '2019-02-21 11:45:35', 'Tosca - Boom Boom Boom', '_2bDFZi_j9Q'),
(214, '2019-02-21 11:46:21', 'Tosca - No Hassle Studio', '8r5DBh3VKQM'),
(215, '2019-02-22 19:25:50', 'Bob Marley feat Lauryn Hill - Turn your lights down low', 'VitKvID-uvY'),
(216, '2019-02-22 19:29:22', 'Crystal Waters - Gypsy Woman', '_KztNIg4cvE'),
(217, '2019-02-25 15:58:05', 'Astrix @ Boom Festival 2018', 'fBT0Gm6kYUE'),
(218, '2019-03-14 17:41:26', 'Twenty One Pilots - Chlorine', 'eJnQBXmZ7Ek'),
(219, '2019-05-25 07:28:24', 'Anitta & Kevinho - Terremoto', 'O65FBF9RamQ'),
(220, '2019-05-25 07:40:26', 'NENNY x i.M - SUSHI', 'j-3LjMES1sI'),
(221, '2019-05-25 11:11:18', 'Ludmilla - Din Din Din feat. Mc Pupio & Mc Doguinha', 'FrJJlbHlxsI'),
(222, '2019-05-25 11:17:20', 'Ludmilla - Din Din Din feat. Mc Pupio & Mc Doguinha (Studio)', '1KrwaU4Yyns'),
(223, '2019-05-25 12:37:29', 'Ludmilla - Din Din Din', 'LJjms_RVCWs'),
(224, '2019-06-26 15:29:33', 'Twenty One Pilots - Løcatiøn Sessiøns: Chlorine', 'OveNvD2i-WY'),
(225, '2019-06-28 21:55:01', 'Depeche Mode - Useless (CJ Bolland Ultrasonar Extended Mix)', 'SQ9CR9cqZsY'),
(226, '2019-06-29 16:21:20', 'Wet Bed Gang - Devia ir', 'E_i0iVloA18'),
(227, '2019-06-29 16:22:15', 'Wet Bed Gang - Bairro', 'cjAycO5KYDE'),
(228, '2019-06-29 21:12:41', 'Om Mantra Meditation 10 heures - Musique de sommeil', '-gOFVB_dKNs');

-- --------------------------------------------------------

--
-- Structure de la table `pages_en`
--

CREATE TABLE IF NOT EXISTS `pages_en` (
`page_id` int(11) NOT NULL,
  `page_slug` varchar(10) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pages_en`
--

INSERT INTO `pages_en` (`page_id`, `page_slug`, `page_title`, `page_content`) VALUES
(1, 'home', 'Sébastien Rondeau Cameira', '            <div class="qrcode">\r\n                <img src="images/qrcodes/qrcode_root.png" alt="QR Code Site" />\r\n            </div>\r\n            <div class="article-text">\r\n                <h2><span id="bonjour">Hello</span> and welcome on my website !</h2>\r\n                <script>\r\n                    today=new Date()\r\n                    if(today.getHours() >= 0 && today.getHours() < 18) \r\n                    {\r\n                        document.getElementById(''bonjour'').innerHTML=''Hello'';\r\n                    } else {\r\n                        document.getElementById(''bonjour'').innerHTML=''Good evening'';\r\n                    }\r\n                </script> \r\n                <p>My name is Sébastien, and I am passionate about computers, internet, science, writing,\r\n                energetics, metaphysics, spirituality, philosophy and new technologies.</p>\r\n                <p><span id="date_heure"></span></p>\r\n                <script>\r\n                    window.onload = date_heure(''date_heure'');\r\n                </script>\r\n                <p>And this is my website.</p>\r\n                <p>You can find on this site my <a href="/?page=cv"><b>curriculum-vitae</b></a>;\r\n                various <a href="/?page=tutos"><b>tutorials</b></a>;\r\n                as well as my <a href="/?page=blog"><b>Blog</b></a>.</p>\r\n                <p>This site is a bit like a catch-all where I store and archive information, links, articles\r\n                on a little bit of everything; but always on topics that fascinate me. :)</p>\r\n                <p>You also have a <a href="/?page=contact">contact form</a>\r\n                if you want to leave me a message and the topic "<a href="/?page=about">Who am I ?</a>"\r\n                if you want to know more about me. ;)</p>\r\n                <p>I hope you will like my work. ^^</p>\r\n                <p>Good visit ! :)</p>\r\n            </div>\r\n'),
(2, 'blog', 'Blog', '<h2>\r\n    In the following pages, I will share music with you; you will find articles on computer science, articles dealing with internet, science; I will talk about energy, metaphysics, spirituality, philosophy, crypto-currencies...\r\n</h2>\r\n<h3>You will see everything.</h3>\r\n<p class="error">But only in french ;)</p>\r\n'),
(3, 'tutos', 'Tutorials', '<h2>In this category, I publish more or less regularly tutorials on various topics.</h2>\r\n<h3>Feel free to <a href="/?page=contact">leave me a message</a> if you want me to do a tutorial on a particular topic. :)</h3>\r\n<p class="error">Only in french ! :)</p>\r\n'),
(4, 'about', 'Who am I ?', '            <div class="qrcode">\r\n                <img src="images/seb.jpg" alt="Sébastien RONDEAU-CAMEIRA" />\r\n            </div>\r\n                <h2>Sébastien RONDEAU-CAMEIRA</h2>\r\n                <p>My name is Sébastien, and I am passionate about computer science, internet,\r\n                science, writing, energetics, metaphysics, spirituality, philosophy, cryptocurrency (blockchain tecnology)\r\n                and new technologies in general.</p>\r\n                <p>I have had a completely atypical story so far, but I know a lot about many things.</p>\r\n                <p>I also trained as an autodidact only.</p>\r\n                <p>I start in September 2018 a software developer training, and I want to specialize\r\n                in Web development, because developing websites is my dream, since forever.^^</p>\r\n                <p>My project is to develop websites and why not applications for smartphone on the\r\n                theme of Veganism, the Veganism is a subject that is particularly close to my heart.</p>\r\n                <p>For example, I already realized the site\r\n                <a href="https://www.peace4everyone.info/" target="_blank">peace4everyone.info</a>;\r\n                site available in\r\n                <a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif" alt="french" /> french</a>,\r\n                <a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" alt="english" /> english</a>,\r\n                <a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" alt="portuguese" /> portuguese</a> et\r\n                <a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" alt="italian" /> italian</a>.</p>\r\n                <p>I use this website as a means of expression to share my passions, my tips,\r\n                my hobbies, my thoughts, my rants.</p>\r\n                <p>You can find on this site <a href="/?page=contact">a form</a>\r\n                to contact me, consult my <a href="/?page=cv">curriculum-vitae</a>; des\r\n                <a href="/?page=tutos">tutorials</a> all sorts; as well as my\r\n                <a href="/?page=blog">Blog</a>.\r\n                </p>\r\n'),
(5, 'cv', 'Curriculum-Vitae', '<div class="pdf">\r\n    <a href="/files/cv-sebastien-en.pdf" target="_blank"><img src="images/file-icon-pdf.png" alt="Fichier PDF" /></a>\r\n</div>\r\n            <p><b><u>Internet :</u></b> Programming, use, maintenance.</p>\r\n            <p><b><u>Computer knowledge :</u></b> Windows, GNU/Linux (Debian, Ubuntu), Office,\r\n            LibreOffice, Dreamweaver, Sublime Text, Visual Studio, VirtualBox, Bluefish, The Gimp, Filezilla...</p>\r\n            <p><b><u>Programming :</u></b> HTML, XML, CSS, PHP, SQL, notions in JavaScript, JSON, C#.</p>\r\n            <p><b><u>REFERENCE :</u></b><br />1994/1997 - Webmaster - Association <a href="http://www.paris-webcube.fr/" target="_blank">Paris-Web<sup>3</sup></a>.</p>\r\n            <h3 class="mid">PROFESSIONAL EXPERIENCE</h3>\r\n            <hr />\r\n            <table>\r\n                <tr>\r\n                    <th>Sep. 2007 at Jun. 2009</th>\r\n                    <td><b>- Media-glider –</b> FMC Radio – Creil</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Dec. 2003 at Dec. 2004</th>\r\n                    <td><b>- Self Service Employee –</b> Hypermarché Champion – Lamorlaye</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Sep. 2003 at Dec. 2003</th>\r\n                    <td><b>- Different missions in interim</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jun. 2002 at Aug. 2003</th>\r\n                    <td><b>- Assistant cook –</b> restaurant « Le bouchon des Gones » – Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>May 2001 at Dec. 2007</th>\r\n                    <td><b>- Webmaster –</b> Society « Eurêka! » Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Apr. 2000 at Apr. 2001</th>\r\n                    <td><b>- Radio Technician Assistant –</b> FMC Radio – Creil</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Sep. 1999 at Jan. 2000</th>\r\n                    <td><b>- Accounting assistant –</b> Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>May 1998 at Nov. 1998</th>\r\n                    <td><b>- Self Service Employee –</b> Intermarché – Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Nov. 1997 at Aug. 1999</th>\r\n                    <td><b>- Barman –</b> Bar « La belle époque » – Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Aug. 1997</th>\r\n                    <td><b>- Assistant cook –</b> Holiday center « Le mayet de montagne » (63)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jul. 1997</th>\r\n                    <td><b>- Animator –</b> Holiday center « Demusois » – Goussainville</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jul. 1996</th>\r\n                    <td><b>- Animator –</b> Holiday center « La tour 7 » – Goussainville</td>\r\n                </tr>\r\n            </table>\r\n            <h3 class="mid">FORMATION</h3>\r\n            <hr />\r\n            <table>\r\n                <tr>\r\n                    <th>2018/2020</th>\r\n                    <td>- Training <b>« Web and Mobile Web Developer »</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2013/2014</th>\r\n                    <td>- Training and obtaining the title <b>« Technician of Computer Assistance »</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2013</th>\r\n                    <td>- Obtaining the <b>PCIE</b> (<b>European Computer Skills Passport</b>)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2006</th>\r\n                    <td>- <b>WINRADIO</b> software training</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2006</th>\r\n                    <td>- <b>Infographic</b> Training – Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2001/2002</th>\r\n                    <td>- <b>Music school</b> – Chantilly</td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>• <b>Singing</b> lessons</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1997/1998</th>\r\n                    <td>- <b>Computer</b> courses – Association « Classe 86 » - Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1995/1997</th>\r\n                    <td>- <b>Dental prosthesis</b> courses – High school "Patay" – Paris 13</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1990/1997</th>\r\n                    <td>- <b>Conservatory</b> – Goussainville (95)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>\r\n                        • Courses of <b>music theory</b> (7 years)<br />\r\n                        • <b>Piano</b> lessons (3 years)<br />\r\n                        • <b>Flute</b> lessons (4 years)<br />\r\n                        • <b>Art</b> classes (2 years)\r\n                    </td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Languages :</th>\r\n                    <td>\r\n                        • <b>French</b> (Fluently)\r\n                    </td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>\r\n                        • <b>Portuguese</b> (Fluently)<br />\r\n                        • <b>English</b> (Average)<br />\r\n			            • <b>Spanish</b> (Average)\r\n                    </td>\r\n                </tr>\r\n            </table>\r\n            <h3 class="mid">CENTERS OF INTERESTS</h3>\r\n            <hr />\r\n            <p>Passionate about computer science, internet, science, writing, energy,\r\n            metaphysics, spirituality, philosophy, cryptocurrency and new technologies.</p>\r\n'),
(6, 'contact', 'Contact-me', '                <p>You can use the following form to contact me; I will receive it by email.</p>\r\n'),
(7, 'donations', 'To support me', '<h1>You want to support me?</h1>\r\n<p>Do you like my site and would like to encourage me to do the following?<br />\r\nDo you think I''m doing some really great tutorials that explain well?</br>\r\nWould you like to see more articles or more tutorials?</p>\r\n<p>Send me something to buy a digital coffee to give me energy. ^^</p>\r\n<p>You can donate me Bitcoin, Litecoin or Ethereum. ;)</p>\r\n<hr />\r\n<div>\r\n    <p>BTC Address<sup><a href="#1">1</a></sup> : 1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst</p>\r\n    <p>LTC Address<sup><a href="#2">2</a></sup> : LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF</p>\r\n    <p>ETH Address<sup><a href="#3">3</a></sup> : 0x094d5e640cd93a8fa1f4c4002d05572f0169b11d</p>\r\n</div>\r\n<hr />\r\n<p>My portfolios are of course publicly searchable on a blockchain explorer.</p>\r\n<div id="1"><sup>1</sup>Bitcoin Address  : View on <a href="https://blockchain.info/address/1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst" target="_blank">blockchain.info</a></div>\r\n<div id="2"><sup>2</sup>Litecoin Address : View on <a href="https://live.blockcypher.com/ltc/address/LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF" target="_blank">blockcypher.com</a></div>\r\n<div id="3"><sup>3</sup>Ethereum Address : View on <a href="https://ethplorer.io/address/0xb1eea5b69c72f41bb19cea0479ca71fab157d12a" target="_blank">ethplorer.io</a></div>\r\n'),
(8, 'links', 'Links', '            <h2>Social networks</h2>\r\n            <p>You can find me on the following social networks :</p>\r\n            <ul>\r\n                <li><a href="https://www.facebook.com/RondeauSebastien" target="_blank">Facebook</a></li>\r\n                <li><a href="https://www.instagram.com/noahseed2/" target="_blank">Instagram</a></li>\r\n                <li><a href="https://www.linkedin.com/in/noahseed/" target="_blank">Linkedin</a></li>\r\n                <li><a href="https://t.me/noahseed" target="_blank">Telegram</a></li>\r\n                <li><a href="https://twitter.com/noahseed60" target="_blank">Twitter</a></li>\r\n                <li><a href="https://www.youtube.com/channel/UCoyG8tBbS-c-i525Ay8qURg" target="_blank">YouTube</a></li>\r\n            </ul>\r\n            <h2>My websites</h2>\r\n            <p>Here are the websites I created :</p>\r\n            <ul>\r\n                <li>My personal websites\r\n                    <ul>\r\n                        <li><a href="https://music.rondeau-cameira.fr/" target="_blank"> music.rondeau-cameira.fr</a></li>\r\n                        <li><a href="https://sebastien.rondeau-cameira.fr/" target="_blank"> sebastien.rondeau-cameira.fr</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>Peace for everyone\r\n                    <ul>\r\n                        <li><a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" alt="italien" /> www.pacepertutti.com</a></li>\r\n                        <li><a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif" alt="français" /> www.paixpourtous.com</a></li>\r\n                        <li><a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" alt="portugais" /> www.pazparatodos.com</a></li>\r\n                        <li><a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" alt="anglais" /> www.peace4everyone.info</a></li>\r\n                    </ul>\r\n                </li>\r\n            </ul>\r\n            <h2>Partner Websites</h2>\r\n            <ul>\r\n                <li><a href="https://aljoce.com/" target="_blank"> aljoce.com</a></li>\r\n                <li><a href="http://www.artquid.com/artist/alicecameira/" target="_blank"> aljoce on artquid.com</a></li>\r\n            </ul>\r\n'),
(9, '404', '404 Error !!!', '<h2>Sorry, but the page you are asking<br />does not exist or no longer exists.</h2>\r\n<p>If the problem persists, please <a href="/?page=contact">contact me</a>.</p>\r\n'),
(10, 'register', 'Sign up', ''),
(11, 'login', 'Log In', 'Lost password ? <a href="/?page=forget">Clic here</a><br />\r\nDo not have an account yet ? <a href="/?page=register">Create one here</a><br />\r\n'),
(12, 'confirm', 'Confirmation', ''),
(13, 'account', 'My account', '<h2>This part is still under construction, please come back in a few days :)</h2>\r\n'),
(14, 'logout', 'Sign Out', '.'),
(15, 'forget', 'Forgot your password ?', ''),
(16, 'reset', 'Reset password', ''),
(17, 'music', 'My prefered music', '<p>I put in this section a selection of my favorite music. You will see that I really listen to everything.</p>\r\n<p>(Non-exhaustive list) ^^</p>\r\n'),
(18, 'add', 'Add a page', ''),
(19, 'modify', 'Edit a page', ''),
(20, 'delete', 'Delete a page', ''),
(21, 'diary', 'Diary', '<p class="error">Only in french ;)</p>\r\n'),
(22, '403', '403 Error !!!', '<h2>Forbidden:<br />Access to the content is prohibited.</h2>\r\n<p>If the problem persists, please <a href="/?page=contact">contact me</a>.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `pages_fr`
--

CREATE TABLE IF NOT EXISTS `pages_fr` (
`page_id` int(11) NOT NULL,
  `page_slug` varchar(11) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pages_fr`
--

INSERT INTO `pages_fr` (`page_id`, `page_slug`, `page_title`, `page_content`) VALUES
(1, 'home', 'Bienvenue sur mon site web !', '                <div class="qrcode">\r\n                    <img src="images/qrcodes/qrcode_root.png" alt="QR Code Site" />\r\n                </div>\r\n                <h2><span id="bonjour">Bonjour</span> et bienvenue sur mon site web !</h2>\r\n                <script>\r\n                    today=new Date()\r\n                    if(today.getHours() >= 0 && today.getHours() < 18) \r\n                    {\r\n                        document.getElementById(''bonjour'').innerHTML=''Bonjour'';\r\n                    } else {\r\n                        document.getElementById(''bonjour'').innerHTML=''Bonsoir'';\r\n                    }\r\n                </script>\r\n                <p>Je m''appelle Sébastien, et je suis un passionné d''informatique, d''internet, de programmation, de science,\r\n                d''écriture, d''énergétisme, de métaphysique, de spiritualité, de philosophie ainsi que des\r\n                nouvelles technologies.</p>\r\n                <p><span id="date_heure"></span></p>\r\n                <script>\r\n                    window.onload = date_heure(''date_heure'');\r\n                </script>\r\n                <p>Et ceci est mon site Web.</p>\r\n                <p>Vous pourrez trouver sur ce site mon <a href="/?page=cv"><b>curriculum-vitae</b></a>;\r\n                divers <a href="/?page=tutos"><b>tutoriels</b></a>; ainsi que mon\r\n                <a href="/?page=blog"><b>Blog</b></a>.</p>\r\n                <p>Ce site est un peu comme un fourre-tout où je stock et archive des infos, liens,\r\n                articles sur un peu tout et n''importe quoi; mais toujours sur des sujets qui me passionnent. :)</p>\r\n                <p>Vous avez-également un <a href="/?page=contact">formulaire de contact</a>\r\n                si vous souhaitez me laisser un message et la rubrique "<a href="/?page=about">Qui suis-je ?</a>"\r\n                si vous voulez en savoir plus sur moi. ;)</p>\r\n                <p>J''espère que mes travaux vous plairont. ^^</p>\r\n                <p>Bonne visite ! :)</p>\r\n'),
(2, 'blog', 'Blog', '                    <h2>Dans ses pages, je partagerai avec vous de la musique, vous trouverez des articles sur l''informatique, des articles qui traiteront d''internet,\r\n                    de science; je parlerai d''énergétisme, de métaphysique, de spiritualité, de philosophie, de crypto-monnaies...</h2>\r\n                    <h3>Bref...</h3>\r\n                    <h3>Vous verrez de tout.</h3>\r\n                    <h3>J''espère que ce Blog vous plaira. ^^</h3>\r\n'),
(3, 'tutos', 'Tutoriels', '                    <h2>Dans cette catégorie, je publie plus ou moins régulièrement des tutoriels sur divers sujets.</h2>\r\n                    <h3>N''hésitez pas à me <a href="/?page=contact">laisser un message</a> si vous souhaitez que je fasse un tuto sur un sujet en particulier. :)</h3>\r\n'),
(4, 'about', 'Qui suis-je ?', '                <div class="qrcode">\r\n                    <img src="images/seb.jpg" alt="Sébastien RONDEAU-CAMEIRA" />\r\n                </div>\r\n                <h2>Sébastien RONDEAU-CAMEIRA</h2>\r\n                <p>Je m''appelle Sébastien, et je suis un passionné d''informatique, d''internet,\r\n                de science, d''écriture, d''énergétisme, de métaphysique, de spiritualité, de\r\n                philosophie, de crypto-monnaies (et de la technologie blockchain) ainsi que\r\n                des nouvelles technologies en général.</p>\r\n                <p>J''ai eu jusqu''à présent une histoire complètement atypique, mais je connais\r\n                beaucoup de choses sur de multiples sujets.</p>\r\n                <p>Je me suis également formé pratiquement qu''en autodidacte.</p>\r\n                <p>Je commence en septembre 2018 une formation de développeur logiciel, et je\r\n                souhaite me spécialiser dans le développement Web, car développer des\r\n                sites Web c''est mon rêve, depuis toujours.^^</p>\r\n                <p>J''ai pour projet de développer des sites web et pourquoi pas des applications\r\n                pour smartphone sur le thème du Véganisme, le Véganisme étant un sujet qui me\r\n                tient particulièrement à coeur.</p>\r\n                <p>J''ai par exemple déjà réalisé le site <a href="https://www.paixpourtous.com/" target="_blank">paixpourtous.com</a>;\r\n                site disponible en <a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif"\r\n                alt="français" /> français</a>, <a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" \r\n                alt="anglais" /> anglais</a>, <a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" \r\n                alt="portugais" /> portugais</a> et <a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" \r\n                alt="italien" /> italien</a>.</p>\r\n                <p>J''utilise ce site Web comme moyen d''expression pour partager mes passions,\r\n                mes astuces, mes loisirs, mes réflexions, mes coups de gueule.</p>\r\n                <p>Vous pourrez trouver sur ce site <a href="/?page=contact">un formulaire</a>\r\n                pour me contacter, consulter mon <a href="/?page=cv">curriculum-vitae</a>; des\r\n                <a href="/?page=tutos">tutoriels</a> de toutes sortes; ainsi que mon\r\n                <a href="/?page=blog">Blog</a>.</p>\r\n'),
(5, 'cv', 'Curriculum-Vitae', '                <div class="pdf">\r\n                    <a href="/files/cv-sebastien-fr.pdf" target="_blank"><img src="images/file-icon-pdf.png" alt="Fichier PDF" /></a>\r\n                </div>\r\n                <p><b><u>Internet :</u></b> Programmation, utilisation, maintenance.</p>\r\n                <p><b><u>Connaissances en informatique :</u></b> Windows, GNU/Linux (Debian, Ubuntu), Suite MS Office, LibreOffice,\r\n                Visual Studio, Visual Studio Code, Sublime Text, Bluefish, The Gimp, VirtualBox, Filezilla, Git, Trello...</p>\r\n                <p><b><u>Programmation :</u></b> HTML, CSS, PHP, MySQL/MariaDB, notions en JavaScript, jQuery, JSON, XML, C#.</p>\r\n                <p><b><u>RÉFÉRENCE :</u></b><br />1994/1997 - Webmestre - Association <a href="http://www.paris-webcube.fr/"\r\n                target="_blank">Paris-Web<sup>3</sup></a>.</p>\r\n                <h3 class="mid">EXPÉRIENCE PROFESSIONNELLE</h3>\r\n                <hr />\r\n                <table>\r\n                    <tr>\r\n                        <th>Sep. 2007 à Juin 2009</th>\r\n                        <td><b>- Média-planneur –</b> FMC Radio – Creil</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Déc. 2003 à Déc. 2004</th>\r\n                        <td><b>- Employé de libre service –</b> Hypermarché Champion – Lamorlaye</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Sep. 2003 à Déc. 2003</th>\r\n                        <td><b>- Différentes missions en intérim</b></td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Juin 2002 à Août 2003</th>\r\n                        <td><b>- Aide cuisinier –</b> restaurant « Le bouchon des Gones » – Senlis</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Mai 2001 à Déc. 2007</th>\r\n                        <td><b>- Webmestre –</b> Société « Eurêka! » Senlis</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Avr. 2000 à Avr. 2001</th>\r\n                        <td><b>- Assistant Technicien radio –</b> FMC Radio – Creil</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Sep. 1999 à Jan. 2000</th>\r\n                        <td><b>- Aide comptable –</b> Portugal</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Mai 1998 à Nov. 1998</th>\r\n                        <td><b>- Employé de libre service –</b> Intermarché – Portugal</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Nov. 1997 à Août 1999</th>\r\n                        <td><b>- Barman –</b> Bar « La belle époque » – Portugal</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Août 1997</th>\r\n                        <td><b>- Aide cuisinier –</b> Centre de vacances « Le mayet de montagne » (63)</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Juillet 1997</th>\r\n                        <td><b>- Animateur –</b> Centre de vacances « Demusois » – Goussainville</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Juillet 1996</th>\r\n                        <td><b>- Animateur –</b> Centre de vacances « La tour 7 » – Goussainville</td>\r\n                    </tr>\r\n                </table>\r\n                <h3 class="mid">FORMATION</h3>\r\n                <hr />\r\n                <table>\r\n                    <tr>\r\n                        <th>2018/2020</th>\r\n                        <td>- Formation <b>« Développeur Web et Web Mobile »</b></td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>2013/2014</th>\r\n                        <td>- Formation et obtention du titre <b>« Technicien d''Assistance Informatique »</b></td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>2013</th>\r\n                        <td>- Obtention du <b>PCIE</b> (<b>Passeport de Compétences Informatique Européen</b>)</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>2006</th>\r\n                        <td>- Formation au logiciel <b>WINRADIO</b></td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>2006</th>\r\n                        <td>- Formation en <b>infographie</b> – Senlis</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>2001/2002</th>\r\n                        <td>- École de <b>musique</b> – Chantilly</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th></th>\r\n                        <td>• Cours de <b>chant</b></td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>1997/1998</th>\r\n                        <td>- Cours d''<b>informatique</b> – Association « Classe 86 » - Portugal</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>1995/1997</th>\r\n                        <td>- Cours de <b>prothèse dentaire</b> – Lycée Patay – Paris 13ème</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>1990/1997</th>\r\n                        <td>- <b>Conservatoire</b> – Goussainville (95)</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th></th>\r\n                        <td>\r\n                            • Cours de <b>solfège</b> (7 ans)<br />\r\n                            • Cours de <b>piano</b> (3 ans)<br />\r\n                            • Cours de <b>flûte traversière</b> (4 ans)<br />\r\n                            • Cours d''<b>arts plastiques</b> (2 ans)\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th>Langues :</th>\r\n                        <td>\r\n                            • <b>Français</b> (Courant)\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <th></th>\r\n                        <td>\r\n                            • <b>Portugais</b> (Courant)<br />\r\n                            • <b>Anglais</b> (Moyen)<br />\r\n		            • <b>Espagnol</b> (Moyen)\r\n                        </td>\r\n                    </tr>\r\n                </table>\r\n                <h3 class="mid">CENTRES D''INTERETS</h3>\r\n                <hr />\r\n                <p>Passionné d''informatique, d''internet, de science, d''écriture, d''énergétisme,\r\n                de métaphysique, de spiritualité, de philosophie, de crypto-monnaie et de nouvelles technologies.</p>\r\n'),
(6, 'contact', 'Contactez-moi', '            <p>Vous pouvez utiliser le formulaire suivant pour me contacter; je le recevrai par email.</p>\r\n'),
(7, 'donations', 'Me soutenir', '<h1>Vous voulez me soutenir ?</h1>\r\n<p>\r\n    Vous aimez mon site et souhaitez m''encourager à faire la suite ?<br />\r\n    Vous trouvez que je fais des tutoriels vraiment géniaux et qui expliquent bien?<br />\r\n    Vous aimeriez voir plus d''articles ou plus de tutos?<br />\r\n</p>\r\n<p>\r\n    Envoyez moi de quoi m''acheter un café numérique pour me donner de l''énergie. ^^\r\n</p>\r\n<p>\r\n    Vous pouvez me faire un don en Bitcoin, Litecoin ou Ethereum. ;)\r\n</p>\r\n<hr />\r\n<div>\r\n    <ul>\r\n        <li>Adresse BTC<sup><a href="#1">1</a></sup> : 1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst</li>\r\n\r\n        <li>Adresse LTC<sup><a href="#2">2</a></sup> : LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF</li>\r\n\r\n        <li>Adresse ETH<sup><a href="#3">3</a></sup> : 0x094d5e640cd93a8fa1f4c4002d05572f0169b11d</li>\r\n    </ul>\r\n</div>\r\n<hr />\r\n<p>\r\n    Mes portefeuilles sont bien évidemment consultables publiquement sur un explorateur de blockchain.\r\n</p>\r\n<div id="1">\r\n    <sup>1</sup>Adresse Bitcoin : Voir sur <a href="https://blockchain.info/address/1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst" target="_blank">blockchain.info</a>\r\n</div>\r\n<div id="2">\r\n    <sup>2</sup>Adresse Litecoin : Voir sur <a href="https://live.blockcypher.com/ltc/address/LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF" target="_blank">blockcypher.com</a>\r\n</div>\r\n<div id="3">\r\n    <sup>3</sup>Adresse Ethereum : Voir sur <a href="https://ethplorer.io/address/0xb1eea5b69c72f41bb19cea0479ca71fab157d12a" target="_blank">ethplorer.io</a>\r\n</div>\r\n'),
(8, 'links', 'Liens', '            <h2>Réseaux sociaux</h2>\r\n            <p>Vous pouvez me retrouver sur les réseaux sociaux suivants :</p>\r\n            <ul>\r\n                <li><a href="https://www.facebook.com/RondeauSebastien" target="_blank">Facebook</a></li>\r\n                <li><a href="https://www.instagram.com/noahseed2/" target="_blank">Instagram</a></li>\r\n                <li><a href="https://www.linkedin.com/in/noahseed/" target="_blank">Linkedin</a></li>\r\n                <li><a href="https://t.me/noahseed" target="_blank">Telegram</a></li>\r\n                <li><a href="https://twitter.com/noahseed60" target="_blank">Twitter</a></li>\r\n                <li><a href="https://www.youtube.com/channel/UCoyG8tBbS-c-i525Ay8qURg" target="_blank">YouTube</a></li>\r\n            </ul>\r\n            <h2>Mes sites Web</h2>\r\n            <p>Voici les sites Web que j''ai déjà réalisés :</p>\r\n            <ul>\r\n                <li>Mes sites web persos\r\n                    <ul>\r\n                        <li><a href="https://music.rondeau-cameira.fr/" target="_blank"> music.rondeau-cameira.fr</a></li>\r\n                        <li><a href="https://sebastien.rondeau-cameira.fr/" target="_blank"> sebastien.rondeau-cameira.fr</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>Paix pour tous\r\n                    <ul>\r\n                        <li><a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" alt="italien" /> www.pacepertutti.com</a></li>\r\n                        <li><a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif" alt="français" /> www.paixpourtous.com</a></li>\r\n                        <li><a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" alt="portugais" /> www.pazparatodos.com</a></li>\r\n                        <li><a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" alt="anglais" /> www.peace4everyone.info</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>QR Book\r\n                    <ul>\r\n                        <li><a href="https://spiritualite-quantique.fr/" target="_blank"> spiritualite-quantique.fr</a></li>\r\n                    </ul>\r\n                </li>\r\n            </ul>\r\n            <h2>Sites Web partenaires</h2>\r\n            <ul>\r\n                <li><a href="https://aljoce.com/" target="_blank"> aljoce.com</a></li>\r\n                <li><a href="http://www.artquid.com/artist/alicecameira/" target="_blank"> aljoce sur artquid.com</a></li>\r\n            </ul>\r\n'),
(9, '404', 'Erreur 404 !!!', '<h2>Désolé, mais la page que vous demandez<br />n’existe pas ou n''existe plus.</h2>\r\n<p>Si le problème persiste, merci de <a href="/?page=contact">me contacter</a>.</p>\r\n'),
(10, 'register', 'S''enregistrer', 'Vous avez déjà un compte ? <a href="/?page=login">Connectez-vous ici</a>\r\n'),
(11, 'login', 'Se connecter', 'Mot de passe oublié ? <a href="/?page=forget">Cliquez ici</a><br />\r\nVous n''avez pas encore de compte ? <a href="/?page=register">Créez-en un ici</a><br />\r\n'),
(12, 'confirm', 'Confirmation', ''),
(13, 'account', 'Mon compte', '<h2>Cette partie est encore en travaux, revenez dans quelques jours :)</h2>\r\n<hr />\r\n'),
(14, 'logout', 'Déconnexion', '.'),
(15, 'forget', 'Oubli de mot de passe ?', ''),
(16, 'reset', 'Réinitialisation du mot de passe', ''),
(17, 'music', 'Mes musiques préférées', '<p>J''ai mis dans dans cette rubrique une sélection de mes musiques préférées. Vous verrez que j''écoute vraiment de tout.</p>\r\n<p>(Liste non exhaustive) ^^</p>\r\n<p><a href="https://music.rondeau-cameira.fr/">Site dédié...</a></p>\r\n'),
(18, 'add', 'Ajouter une page', ''),
(19, 'modify', 'Modifier une page', ''),
(20, 'delete', 'Supprimer une page', ''),
(21, 'diary', 'Journal', ''),
(22, '403', 'Erreur 403 !!!', '<h2>Forbidden:<br />L''accès au contenu est interdit.</h2>\r\n<p>Si le problème persiste, merci de <a href="/?page=contact">me contacter</a>.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `pages_pt`
--

CREATE TABLE IF NOT EXISTS `pages_pt` (
`page_id` int(11) NOT NULL,
  `page_slug` varchar(10) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pages_pt`
--

INSERT INTO `pages_pt` (`page_id`, `page_slug`, `page_title`, `page_content`) VALUES
(1, 'home', 'Sébastien Rondeau Cameira', '            <div class="qrcode">\r\n                <img src="images/qrcodes/qrcode_root.png" alt="QR Code Site" />\r\n            </div>\r\n            <div class="article-text">\r\n                <h2><span id="bonjour">Olá</span> e bem-vindo no meu site !</h2>\r\n                <script>\r\n                    today=new Date()\r\n                    if(today.getHours() >= 0 && today.getHours() < 18) \r\n                    {\r\n                        document.getElementById(''bonjour'').innerHTML=''Olá'';\r\n                    } else {\r\n                        document.getElementById(''bonjour'').innerHTML=''Boa noite'';\r\n                    }\r\n                </script> \r\n                <p>Meu nome é Sébastien, e sou apaixonado por computadores, internet, ciência, escrita,\r\n                energia, metafísica, espiritualidade, filosofia e novas tecnologias.</p>\r\n                <p><span id="date_heure"></span></p>\r\n                <script>\r\n                    window.onload = date_heure(''date_heure'');\r\n                </script>\r\n                <p>E este é o meu site.</p>\r\n                <p>Você pode encontrar neste site meu <a href="/?page=cv"><b>currículo</b></a>;\r\n                <a href="/?page=tutos"><b>tutoriais</b></a> de todos os tipos;\r\n                bem como meu <a href="/?page=blog"><b>Blog</b></a>.</p>\r\n                <p>Este site é um pouco como um tote onde eu armazeno e arquiva informações, links,\r\n                artigos sobre tudo; mas sempre em tópicos que me fascinam. :)</p>\r\n                <p>Você também tem um <a href="/?page=contact">formulário de contato</a>\r\n                se você quiser me deixar uma mensagem e o tópico "<a href="/?page=about">Quem sou eu ?</a>"\r\n                se você quiser saber mais sobre mim. ;)</p>\r\n                <p>Espero que você goste do meu trabalho. ^^</p>\r\n                <p>Tenha uma boa visita ! :)</p>\r\n            </div>\r\n'),
(2, 'blog', 'Blog', '<h2>\r\n    Nas páginas seguintes, vou compartilhar música com você; você encontrará artigos sobre ciência da computação, artigos sobre Internet, ciência; Vou falar sobre energia, metafísica, espiritualidade, filosofia, crypto-moedas...\r\n</h2>\r\n<h3>Você verá de tudo.</h3>\r\n<p class="error">Mas apenas em francês ! ;)</p>\r\n'),
(3, 'tutos', 'Tutoriais', '<h2>Nesta categoria, eu publico mais ou menos regularmente tutoriais sobre vários tópicos.</h2>\r\n<h3>Sinta-se à vontade para me <a href="/?page=contact">deixar uma mensagem</a> se quiser que eu faça um tutorial sobre um tópico em particular. :)</h3>\r\n<p class="error">Apenas em francês ! ;)</p>\r\n'),
(4, 'about', 'Quem sou eu ?', '            <div class="qrcode">\r\n                <img src="images/seb.jpg" alt="Sébastien RONDEAU-CAMEIRA" />\r\n            </div>\r\n                <h2>Sébastien RONDEAU-CAMEIRA</h2>\r\n                <p>O meu nome é Sébastien, e sou apaixonado por ciência da computação,\r\n                internet, ciência, escrita, energia, metafísica, espiritualidade, filosofia,\r\n                cryptocurrency (e tecnologia blockchain) e novas tecnologias em geral.</p>\r\n                <p>Tenho uma história completamente atípica até agora, mas eu sei muito\r\n                sobre muitas coisas.</p>\r\n                <p>Eu também treinei apenas como autodidata.</p>\r\n                <p>Começo em setembro de 2018 um treinamento para desenvolvedores de software,\r\n                e quero me especializar no desenvolvimento da Web, porque o desenvolvimento de\r\n                sites é o meu sonho, desde sempre.^^</p>\r\n                <p>Meu projeto é desenvolver sites e por que não aplicativos para smartphones\r\n                sobre o tema do Veganismo, o Véganisme é um assunto que está particularmente\r\n                perto do meu coração.</p>\r\n                <p>Por exemplo, eu já construí o site\r\n                <a href="https://www.pazparatodos.com/" target="_blank">pazparatodos.com</a>;\r\n                site disponível em\r\n                <a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif" alt="francês" /> francês</a>,\r\n                <a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" alt="inglês" /> inglês</a>,\r\n                <a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" alt="português" /> português</a> et\r\n                <a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" alt="italiano" /> italiano</a>.</p>\r\n                <p>Eu uso este site como um meio de expressão para compartilhar minhas paixões,\r\n                minhas dicas, meus hobbies, meus pensamentos, minhas novidades.</p>\r\n                <p>Você encontrará neste site <a href="/?page=contact">um formulário</a>\r\n                para me contatar, consulte meu <a href="/?page=cv">curriculum-vitae</a>;\r\n                <a href="/?page=tutos">tutoriais</a> de todos os tipos; bem como meu \r\n                <a href="/?page=blog">Blog</a>.\r\n                </p>\r\n'),
(5, 'cv', 'Resumo', '<div class="pdf">\r\n    <a href="/files/cv-sebastien-pt.pdf" target="_blank"><img src="images/file-icon-pdf.png" alt="Ficheiro PDF" /></a>\r\n</div>\r\n<p>\r\n    <b><u>Internet :</u></b> Programação, uso, manutenção.\r\n</p>\r\n<p>\r\n    <b><u>Habilidades em informática :</u></b> Windows, GNU/Linux (Debian, Ubuntu), Office,\r\n    LibreOffice, Dreamweaver, Sublime Text, Visual Studio, VirtualBox, Bluefish, The Gimp, Filezilla...\r\n</p>\r\n<p>\r\n    <b><u>Programação :</u></b> HTML, XML, CSS, PHP, SQL, noções em JavaScript, JSON, C#.\r\n</p>\r\n<p>\r\n    <b><u>REFERÊNCIA :</u></b><br />1994/1997 - Webmestre - Associação <a href="http://www.paris-webcube.fr/"\r\n    target="_blank">Paris-Web<sup>3</sup></a>.\r\n</p>\r\n            <h3 class="mid">EXPERIÊNCIA PROFISSIONAL</h3>\r\n            <hr />\r\n            <table>\r\n                <tr>\r\n                    <th>Set. 2007 à Jun. 2009</th>\r\n                    <td><b>- Media-planador –</b> FMC Radio – Creil</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Dez. 2003 à Dez. 2004</th>\r\n                    <td><b>- Empregado de Serviço Próprio –</b> Hypermarché Champion – Lamorlaye</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Set. 2003 à Dez. 2003</th>\r\n                    <td><b>- Diferentes missões interinas</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jun. 2002 à Ago. 2003</th>\r\n                    <td><b>- Ajude a cozinhar –</b> restaurant « Le bouchon des Gones » – Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Mai. 2001 à Dez. 2007</th>\r\n                    <td><b>- Webmestre –</b> Société « Eurêka! » Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Abr. 2000 à Abr. 2001</th>\r\n                    <td><b>- Assistente Técnico de Rádio –</b> FMC Radio – Creil</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Set. 1999 à Jan. 2000</th>\r\n                    <td><b>- Ajuda contábil –</b> Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Mai. 1998 à Nov. 1998</th>\r\n                    <td><b>- Empregado de Serviço Próprio –</b> Intermarché – Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Nov. 1997 à Ago. 1999</th>\r\n                    <td><b>- Barman –</b> Bar « La belle époque » – Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Ago. 1997</th>\r\n                    <td><b>- Ajude a cozinhar –</b> Centro de férias « Le mayet de montagne » (63)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jul. 1997</th>\r\n                    <td><b>- Líder –</b> Centro de férias « Demusois » – Goussainville</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Jul. 1996</th>\r\n                    <td><b>- Líder –</b> Centro de férias « La tour 7 » – Goussainville</td>\r\n                </tr>\r\n            </table>\r\n            <h3 class="mid">FORMAÇÃO</h3>\r\n            <hr />\r\n            <table>\r\n                <tr>\r\n                    <th>2013/2014</th>\r\n                    <td>- Treinando <b>« Programador Web e Web Móvel »</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2013/2014</th>\r\n                    <td>- Treinando e obtendo o título <b>« Técnico de Assistência Informática »</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2013</th>\r\n                    <td>- Obtendo o <b>PCIE</b> (<b>Passaporte Europeu de Competências Informáticas</b>)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2006</th>\r\n                    <td>- Treinamento de software <b>WINRADIO</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2006</th>\r\n                    <td>- Treinamento <b>Infográfico</b> – Senlis</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>2001/2002</th>\r\n                    <td>- <b>Escola de música</b> – Chantilly</td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>• Aulas de <b>canto</b></td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1997/1998</th>\r\n                    <td>- Aulas de <b>informática</b> – Association « Classe 86 » - Portugal</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1995/1997</th>\r\n                    <td>- Aulas de <b>prótese dentária</b> – Lycée Patay – Paris 13ème</td>\r\n                </tr>\r\n                <tr>\r\n                    <th>1990/1997</th>\r\n                    <td>- <b>Conservatório</b> – Goussainville (95)</td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>\r\n                        • Classe de <b>solfeitos</b> (7 anos)<br />\r\n                        • Aulas de <b>piano</b> (3 anos)<br />\r\n                        • Aulas de <b>flauta</b> (4 anos)<br />\r\n                        • Aulas de <b>arte plástica</b> (2 anos)\r\n                    </td>\r\n                </tr>\r\n                <tr>\r\n                    <th>Línguas :</th>\r\n                    <td>\r\n                        • <b>Francês</b> (Fluentemente)\r\n                    </td>\r\n                </tr>\r\n                <tr>\r\n                    <th></th>\r\n                    <td>\r\n                        • <b>Português</b> (Fluentemente)<br />\r\n                        • <b>Inglês</b> (Média)<br />\r\n			• <b>Espanhol</b> (Média)\r\n                    </td>\r\n                </tr>\r\n            </table>\r\n            <h3 class="mid">CENTROS DE INTERESSES</h3>\r\n            <hr />\r\n            <p>Apaixonado por informática, internet, ciência, escrita, energia,\r\n            metafísica, espiritualidade, filosofia, cryptocurrency e novas tecnologias.</p>\r\n'),
(6, 'contact', 'Contacte-me', '<p>Você pode usar o seguinte formulário para me contatar; Eu o recebo por email.</p>\r\n'),
(7, 'donations', 'Me apoiar', '<h1>Você quer me apoiar?</h1>\r\n<p>Você gosta do meu site e gostaria de me encorajar a fazer o seguinte?<br />\r\nVocê acha que estou fazendo alguns tutoriais realmente excelentes que explicam bem?<br />\r\nGostaria de ver mais artigos ou mais tutoriais?</p>\r\n<p>Envie-me algo para comprar um café digital para me dar energia. ^^</p>\r\n<p>Você pode me doar Bitcoin, Litecoin ou Ethereum. ;)</p>\r\n<hr />\r\n<div>\r\n    <p>Endereço BTC<sup><a href="#1">1</a></sup> : 1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst</p>\r\n    <p>Endereço LTC<sup><a href="#2">2</a></sup> : LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF</p>\r\n    <p>Endereço ETH<sup><a href="#3">3</a></sup> : 0x094d5e640cd93a8fa1f4c4002d05572f0169b11d</p>\r\n</div>\r\n<hr />\r\n<p>As minhas carteiras são, obviamente, publicamente pesquisáveis em um explorador de blockchain.</p>\r\n<div id="1"><sup>1</sup>Endereço Bitcoin : Vêr no site <a href="https://blockchain.info/address/1K5wy8cuFrJW1EQ2kzx4DYDB8tX53E8tst" target="_blank">blockchain.info</a></div>\r\n<div id="2"><sup>2</sup>Endereço Litecoin : Vêr no site <a href="https://live.blockcypher.com/ltc/address/LKaDhQwQPrZiDU3puyHBS718iE7UkhcUhF" target="_blank">blockcypher.com</a></div>\r\n<div id="3"><sup>3</sup>Endereço Ethereum : Vêr no site <a href="https://ethplorer.io/address/0xb1eea5b69c72f41bb19cea0479ca71fab157d12a" target="_blank">ethplorer.io</a></div>\r\n'),
(8, 'links', 'Endereços', '            <h2>Redes sociais</h2>\r\n            <p>Você pode me encontrar nas seguintes redes sociais :</p>\r\n            <ul>\r\n                <li><a href="https://www.facebook.com/RondeauSebastien" target="_blank">Facebook</a></li>\r\n                <li><a href="https://www.instagram.com/noahseed2/" target="_blank">Instagram</a></li>\r\n                <li><a href="https://www.linkedin.com/in/noahseed/" target="_blank">Linkedin</a></li>\r\n                <li><a href="https://t.me/noahseed" target="_blank">Telegram</a></li>\r\n                <li><a href="https://twitter.com/noahseed60" target="_blank">Twitter</a></li>\r\n                <li><a href="https://www.youtube.com/channel/UCoyG8tBbS-c-i525Ay8qURg" target="_blank">YouTube</a></li>\r\n            </ul>\r\n            <h2>Meus sites</h2>\r\n            <p>Aqui estão os sites que eu já fiz :</p>\r\n            <ul>\r\n                <li>Meus sites pessoais\r\n                    <ul>\r\n                        <li><a href="https://music.rondeau-cameira.fr/" target="_blank"> music.rondeau-cameira.fr</a></li>\r\n                        <li><a href="https://sebastien.rondeau-cameira.fr/" target="_blank"> sebastien.rondeau-cameira.fr</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>Paz para todos\r\n                    <ul>\r\n                        <li><a href="https://www.pacepertutti.com/" target="_blank"><img src="images/flags/drap_it.gif" alt="italien" /> www.pacepertutti.com</a></li>\r\n                        <li><a href="https://www.paixpourtous.com/" target="_blank"><img src="images/flags/drap_fr.gif" alt="français" /> www.paixpourtous.com</a></li>\r\n                        <li><a href="https://www.pazparatodos.com/" target="_blank"><img src="images/flags/drap_pt.gif" alt="portugais" /> www.pazparatodos.com</a></li>\r\n                        <li><a href="https://www.peace4everyone.info/" target="_blank"><img src="images/flags/drap_en.gif" alt="anglais" /> www.peace4everyone.info</a></li>\r\n                    </ul>\r\n                </li>\r\n            </ul>\r\n            <h2>Sites parceiros</h2>\r\n            <ul>\r\n                <li><a href="https://aljoce.com/" target="_blank"> aljoce.com</a></li>\r\n                <li><a href="http://www.artquid.com/artist/alicecameira/" target="_blank"> aljoce no site artquid.com</a></li>\r\n            </ul>\r\n'),
(9, '404', 'Erro 404 !!!', '<h2>Desculpe, mas a página que você está perguntando<br />não existe.</h2>\r\n<p>Se o problema persistir, <a href="/?page=contact">entre em contato comigo</a>.</p>\r\n'),
(10, 'register', 'Inscrever-se', ''),
(11, 'login', 'Conectar', 'Senha esquecida ? <a href="/?page=forget">Clique aqui</a><br />\r\nAinda não tem uma conta ? <a href="/?page=register">Crie uma aqui</a>\r\n'),
(12, 'confirm', 'Confirmação', ''),
(13, 'account', 'Minha conta', '<h2>Essa parte ainda está em construção, volte daqui a alguns dias :)</h2>\r\n'),
(14, 'logout', 'Desconexão', '.'),
(15, 'forget', 'Esqueceu a senha ?', ''),
(16, 'reset', 'Redefinir senha', ''),
(17, 'music', 'Minha música preferida', '<p>Eu coloquei nesta seção uma seleção da minha música favorita. Você vai ver que eu realmente ouço tudo.</p>\r\n<p>(Lista não exaustiva) ^^</p>\r\n'),
(18, 'add', 'Adicione uma página', ''),
(19, 'modify', 'Editar uma página', ''),
(20, 'delete', 'Suprimir uma página', ''),
(21, 'diary', 'Journal', '<p class="error">Apenas em francês ! ;)</p>\r\n'),
(22, '403', 'Erro 403 !!!', '<h2>Forbidden:<br />O acesso ao conteúdo é proibido.</h2>\r\n<p>Se o problema persistir, <a href="/?page=contact">entre em contato comigo</a>.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `tutos`
--

CREATE TABLE IF NOT EXISTS `tutos` (
`tuto_id` int(11) NOT NULL,
  `tuto_title` varchar(50) NOT NULL,
  `tuto_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tuto_content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tutos`
--

INSERT INTO `tutos` (`tuto_id`, `tuto_title`, `tuto_date`, `tuto_content`) VALUES
(1, 'Créer une clé USB Live Ubuntu/Debian', '2018-03-09 13:33:47', '<h2>Pour installer Linux ou le lancer à partir d''une clé USB, on doit tout d''abord préparer la clé, pour rendre cette clé "bootable".</h2>\r\n<p>Nous allons utiliser pour celà le logiciel Linux Live USB Creator.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/linuxusbcreator.png" alt="Linux USB Creator" />\r\n</div>\r\n<hr />\r\n<img class="qrcode" src="/images/tutos/usbdrive.png" alt="USB Drive" />\r\n<div class="float"></div>\r\n<h2>1 Prérequis</h2>\r\n<h3>1.1 Téléchargement</h3>\r\n<ul>\r\n    <li>Téléchargez <a href="http://www.linuxliveusb.com/fr/" target="_blank">Linux Live USB Creator</a></li>\r\n</ul>\r\n<h3>2 Linux Live USB Creator</h3>\r\n<p>Lancer LinuxLive USB Creator depuis votre menu Démarrer -> Tous les programmes -> Linux Live USB Creator.</p>\r\n<p>Créer une clé USB Linux Live comprend 5 étapes faciles :</p>\r\n<ul>\r\n    <li>étape 1 : choisir une clé USB dans la liste</li>\r\n    <li>étape 2 : sélectionner un fichier ISO ou un CD</li>\r\n    <li>étape 3 : choisir la taille des données persistentes (habituellement entre 250 Mo et 2 Go)</li>\r\n    <li>étape 4 : cocher les options que vous désirez</li>\r\n    <li>étape 5 : cliquer sur l''éclair pour démarrer la création</li>\r\n</ul>\r\n<p>De plus, chaque étape obligatoire (1, 2 et 3) voit son état indiqué par un feu de signalisation :</p>\r\n<ul>\r\n    <li>Rouge : l''étape n''a pu être complétée, vous ne pouvez commencer à créer une clé USB Live</li>\r\n    <li>Orange : un problème persiste durant cette étape mais vous pouvez toutefois commencer la création</li>\r\n    <li>Vert : tout est correct</li>\r\n</ul>\r\n<h2>3 Préparation de la clé</h2>\r\n<h3>3.1 Sélectionnez votre clé dans la liste</h3>\r\n<div class="center">\r\n    <img src="/images/tutos/usbcreator1.png" alt="Etape 1" />\r\n</div>\r\n<h2>4 L''image iso</h2>\r\n<p>Vous pouvez télécharger l''image iso de Debian ou Ubuntu depuis le site officiel, ou directement depuis Linux Live USB Creator.</p>\r\n<h3>4.1 Télécharger l''image iso manuellement</h3>\r\n<ul>\r\n    <li><a href="http://debian.univ-lorraine.fr/debian-cd/" target="_blank">Debian</a></li>\r\n    <li><a href="https://www.ubuntu.com/download/desktop" target="_blank">Ubuntu</a></li>\r\n</ul>\r\n<h3>4.2 Télécharger l''image iso dans LinuxLive USB Creator</h3>\r\n<div class="center">\r\n    <img src="/images/tutos/usbcreator2.png" alt="Etape 2" />\r\n</div>\r\n<h2>5 Choisissez le mode live ou le mode persistant</h2>\r\n<div class="center">\r\n    <img src="/images/tutos/usbcreator3.png" alt="Etape 3" />\r\n</div>\r\n<h2>6 Les options</h2>\r\n<p>Choisissez les options.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/usbcreator4.png" alt="Etape 4" />\r\n</div>\r\n<h2>7 Installer</h2>\r\n<div class="center">\r\n    <img src="/images/tutos/usbcreator5.png" alt="Etape 5" />\r\n</div>\r\n<p>Il ne vous reste plus qu''à cliquer sur le petit éclair et attendre la fin du transfert sur la clé.</p>\r\n<p>Puis, redémarrer votre ordinateur sur votre clé usb pour démarrer Linux et/ou l''installer.</p>\r\n<p>Pour l''installation, <a href="/tutos/?page=3">c''est par là...</a></p>\r\n'),
(2, 'Installer Ubuntu dans VirtualBox', '2018-03-09 19:13:36', '<h2>1. Prérequis</h2>\r\n<ul>\r\n    <li>Avoir <a href="https://www.ubuntu.com/download/desktop" target="_blank">téléchargé le fichier iso de Ubuntu</a> ou posséder le DVD.</li>\r\n    <li>Avoir téléchargé et installé VirtualBox.</li>\r\n</ul>\r\n<h2>2. On prépare la machine</h2>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox00.png" alt="VirtualBox 0" />\r\n</div>\r\n<p>On commence par créer un nouvelle machine, en cliquant sur <u><b>Nouvelle</b></u></p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox1.png" alt="VirtualBox 1" />\r\n</div>\r\n<p>On donne un nom à la nouvelle machine.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox2.png" alt="VirtualBox 2" />\r\n</div>\r\n<p>On lui attribue une partie de la mémoire RAM.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox3.png" alt="VirtualBox 3" />\r\n</div>\r\n<p>On créée le disque dur virtuel.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox4.png" alt="VirtualBox 4" />\r\n</div>\r\n<p>On choisit le format pour le disque dur virtuel.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox5.png" alt="VirtualBox 5" />\r\n</div>\r\n<p>Suivant...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox6.png" alt="VirtualBox 6" />\r\n</div>\r\n<p>Le nom du fichier du disque dur virtuel, et sa taille.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox7.png" alt="VirtualBox 7" />\r\n</div>\r\n<p>Cliquez ensuite sur le bouton "Configurer".</p>\r\n\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox8.png" alt="VirtualBox 8" />\r\n</div>\r\n<p>On charge le DVD ou le fichier iso dans le lecteur DVD virtuel.</p>\r\n\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox9.png" alt="VirtualBox 9" />\r\n</div>\r\n<p>On configure la carte réseau (mode bridge dans l''exemple).</p>\r\n\r\n<h2>3. Lancement de la machine</h2>\r\n<div class="center">\r\n    <img src="/images/tutos/virtualbox10.png" alt="VirtualBox 10" />\r\n</div>\r\n<p>On lance la machine virtuelle.</p>\r\n<p>Après quelques instants, Ubuntu se lance.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/install_ubuntu01.png" alt="Ubuntu Install 01" />\r\n</div>\r\n<p>Vous pouvez alors choisir de lancer la version live, ou d''installer Ubuntu dans la machine virtuelle.</p>\r\n<p>Dans le prochain tutoriel, nous allons voir comment <a href="/tutos/?page=3">procéder à l''installation</a>.</p>\r\n'),
(3, 'Installer Ubuntu', '2018-03-10 16:24:32', '<p>Nous allons procéder ici à l''installation de Ubuntu.<br />Cependant, l''installation de Debian ou d''une autre distribution Linux est similaire.</p>\r\n<h2>1. Prérequis</h2>\r\n<ul>\r\n    <li>Avoir <a href="/tutos/?page=1">créé une clé bootable</a> ou avoir gravé l''image iso sur DVD.</li>\r\n</ul>\r\n<h2>2. Installation</h2>\r\n<p>Commencez par démarrer votre ordinateur sur votre clé usb / disque d''installation.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst01.png" alt="Ubuntu 1" />\r\n</div>\r\n<p>Choisissez votre langue.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst02.png" alt="Ubuntu 2" />\r\n</div>\r\n<p>Vous pouvez sélectionner l''option "Essayer Ubuntu sans l''installer" si vous souhaitez lancer Ubuntu depuis votre clé USB / DVD sans toucher au disque dur de l''ordinateur (mode live).</p>\r\n<p>Pour ce tutoriel, nous allons sélectionner l''option "Installer Ubuntu".</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst03.png" alt="Ubuntu 3" />\r\n</div>\r\n<p>Choisissez la langue d''installation.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst04.png" alt="Ubuntu 4" />\r\n</div>\r\n<p>Cochez les deux cases si vous voulez télécharger les mises à jour pendant l''installation,\r\net si vous souhaitez installer les logiciels tierce partie.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst05.png" alt="Ubuntu 5" />\r\n</div>\r\n<p>Vous pouvez effacer le disque virtuel sans crainte.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst06.png" alt="Ubuntu 6" />\r\n</div>\r\n<p>Continuer...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst07.png" alt="Ubuntu 7" />\r\n</div>\r\n<p>Sélectionnez votre lieu...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst08.png" alt="Ubuntu 8" />\r\n</div>\r\n<p>La langue de votre clavier.</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst09.png" alt="Ubuntu 9" />\r\n</div>\r\n<p>Vos identifiants et le nom de l''ordinateur sur le réseau...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst10.png" alt="Ubuntu 10" />\r\n</div>\r\n<p>On attend la fin de l''installation...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst11.png" alt="Ubuntu 11" />\r\n</div>\r\n<p>On clique sur "Redémarrer maintenant"...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/ubuntu_inst12.png" alt="Ubuntu 12" />\r\n</div>\r\n<p>Après le redémarrage, il ne nous reste plus qu''à ouvrir une session... ;)</p>\r\n<p>Si vous <a href="/tutos/?page=2">installé Ubuntu dans une machine virtuelle VirtualBox</a>, pour que la machine soit 100% opérationnelle,  vous devez maintenant <a href="/tutos/?page=4">Installer les Additions Invité...</a></p>\r\n'),
(4, 'Installer VirtualBox Guest Additions', '2018-03-10 17:22:01', '<h2>1. Prérequis</h2>\r\n<ul>\r\n    <li>Avoir <a href="/tutos/?page=2">installé Ubuntu dans VirtualBox</a>.</li>\r\n</ul>\r\n<h2>2. Installation</h2>\r\n<div class="center">\r\n    <img src="/images/tutos/additions01.png" alt="VirtualBox Guest Additions 1" />\r\n</div>\r\n<p>On sélectionne dans le menu de la machine VirtualBox :</p>\r\n<p>Périphériques > Insérer l''image CD des Additions Invité...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/additions02.png" alt="VirtualBox Guest Additions 2" />\r\n</div>\r\n<p>Après quelques secondes une fenêtre apparaît. On clique alors sur "Lancer"...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/additions03.png" alt="VirtualBox Guest Additions 3" />\r\n</div>\r\n<p>On entre le mot de passe de notre session Ubuntu...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/additions04.png" alt="VirtualBox Guest Additions 4" />\r\n</div>\r\n<p>On attend la fin de l''installation, puis on appuie sur Entrée pour fermer la fenêtre...</p>\r\n<div class="center">\r\n    <img src="/images/tutos/additions05.png" alt="VirtualBox Guest Additions 5" />\r\n</div>\r\n<p>On redémarre la machine virtuelle.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_confirmation_token` varchar(60) DEFAULT NULL,
  `user_confirmed_at` datetime DEFAULT NULL,
  `user_reset_token` varchar(60) DEFAULT NULL,
  `user_reset_at` datetime DEFAULT NULL,
  `user_remember_token` varchar(250) DEFAULT NULL,
  `user_is_admin` tinyint(1) DEFAULT NULL,
  `user_is_vip` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_email`, `user_password`, `user_confirmation_token`, `user_confirmed_at`, `user_reset_token`, `user_reset_at`, `user_remember_token`, `user_is_admin`, `user_is_vip`) VALUES
(1, 'sebastien', 'sebastien@rondeau-cameira.fr', '$2y$10$5FGGwgwrdmoPwgG3gyHky.lSCuXwp1bJwn6uzqQm.3gfc6pDbsq/e', NULL, '2018-03-13 05:53:57', NULL, NULL, 'Gk6mU5IqwrC15sigtlPTZjO2RMNBmyX5Q30U9fj0dRGkvXnCSodwUs3RsjknADfP7OCBXaF5WvT8ycgtIUFpiDk1k7rtHBMgJXRrcmV96EnDEYxUL3difebMTdIisLSraliMLFOiyLIpbkvYHK6Euk2lerNHv0523ydMgKgkm1pz0sCFAzcoV9AYut0LW5gutLjgppP2tZ8HpNoGmSeGvl7TzFfIs0EYWj3gNoKqzTBVTWYMSPpbZg1wAb', 1, 1),
(2, 'noahseed', 'noahseed@hotmail.com', '$2y$10$R8DGSYWutJ3Mp45RQu6.JOXEtcn1BhG0pS/5COfvPsWCrqJcbgxBW', NULL, '2018-03-18 14:13:36', NULL, NULL, 'Olm51uGW1iHc6iPdhD5pUyLo6IoWkfXYLNUiU6NV2ZpTZF5xVcujld0bmq5Zk9xkXX9J3E1VwABVDJkH7adJAHp9ZHBstklTm5SZozCJcxlHYWdDvNTfiZXJHNIv7ysPz3XPzahKjarcgN6i9IhK247Frq12qKaRquEyG6iHhalJJAOqULkUMdkCkt4F2C6fmUB3A1Y4VD508i9PYaFzpzuTIinqYfbBqhqYI9wu30fkwctCDkNNoxgAC1', 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `diary`
--
ALTER TABLE `diary`
 ADD PRIMARY KEY (`diary_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`message_id`);

--
-- Index pour la table `music`
--
ALTER TABLE `music`
 ADD PRIMARY KEY (`music_id`), ADD UNIQUE KEY `music_slug` (`music_slug`);

--
-- Index pour la table `pages_en`
--
ALTER TABLE `pages_en`
 ADD PRIMARY KEY (`page_id`);

--
-- Index pour la table `pages_fr`
--
ALTER TABLE `pages_fr`
 ADD PRIMARY KEY (`page_id`);

--
-- Index pour la table `pages_pt`
--
ALTER TABLE `pages_pt`
 ADD PRIMARY KEY (`page_id`);

--
-- Index pour la table `tutos`
--
ALTER TABLE `tutos`
 ADD PRIMARY KEY (`tuto_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `diary`
--
ALTER TABLE `diary`
MODIFY `diary_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `music`
--
ALTER TABLE `music`
MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT pour la table `pages_en`
--
ALTER TABLE `pages_en`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `pages_fr`
--
ALTER TABLE `pages_fr`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `pages_pt`
--
ALTER TABLE `pages_pt`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `tutos`
--
ALTER TABLE `tutos`
MODIFY `tuto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
