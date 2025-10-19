-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 19. Okt, 2025 19:50 PM
-- Tjener-versjon: 11.4.8-MariaDB
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psxrhyuu_kongenhakon`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `artikler`
--

CREATE TABLE `artikler` (
  `id` int(11) NOT NULL,
  `overskrift` varchar(250) NOT NULL,
  `tekst` text NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dataark for tabell `artikler`
--

INSERT INTO `artikler` (`id`, `overskrift`, `tekst`, `ip`) VALUES
(22, 'kakka duer ', 'kakka duer er duer som ikke liker kakao.\r\nde er veldig \r\nsultene pÃ¥ mat de er ofte i byer og tar offere.\r\npoliti sier de skal ta tak i dette men desverre sa de det for 30Ã¥r siden ogsÃ¥. \r\nsÃ¥ de er antakelig redde selv.', '81.167.225.241'),
(24, 'IsbjÃ¸rner', 'IsbjÃ¸rner er smÃ¥ kryp som bor i bunnen av isboksen og som man ikke spiser. Derfor lar man siste rest av isen stÃ¥ pÃ¥ bordet og smelte. NÃ¥r siste rest av isen smelter blir isbjÃ¸rnene om til isopor. ', '77.16.42.93'),
(25, 'BOKFINK', 'Bokfink fikk het egentlig Bokvink fordi den liksom vinket med stjerten.En dag hadde Bokvinken vÃ¦rt hos tannlegen.Den mÃ¸tte stÃ¦ren pÃ¥ vei heim. \"God dag. Jeg heter stÃ¦r.Hva heter du?\" \"Bokfink sa bokvinken.', '77.18.63.42'),
(27, 'Bluey', 'En katt som er kjent fra tegneserier.\r\nBluey har et stort temperament.\r\nBluey er opptatt av privatliv og liker ikke oppmerksomhet.\r\nBingo er store broren til Bluey.\r\n', '81.167.225.241'),
(31, 'Mamma', 'Det er mamma sin skyld. Alltid. Uansett. ', '81.167.225.241'),
(32, 'Skaffedyr', 'Et skaffedyr er faren i en familie.\r\nHan henter, far tak i, fikser og ordner. \r\nHan er ikke sÃ¥ flink til Ã¥ lete, ofte finner han ikke det som ligger under noe. \r\nLetingen tar Mamman seg av, men det er jo hennes feil at det er borte, bare les artikkelen om mamma. ', '81.167.225.241'),
(33, 'Tiggi', 'Er en mus som bor pÃ¥ Mallorca.\r\nMange sier at han er en katt fordi han har et typisk katte navn.\r\nMen det er feil.\r\nJeg synes han er en god mus.', '81.167.225.241'),
(34, 'Fjorten', 'Fjorten er en liten Ã¸y i et kjern som ligger i tettstedet Tretten. Pr 12.november ifjor ble det registrert ti grevlingpar med i snitt ni avkom pr par pÃ¥ Ã¸ya. Fra 8.juli-65 til 4.mars-21 var grevlingbestanden 0.', '88.92.198.122'),
(36, 'Katter', 'INNLEDNING\r\nKatter er smÃ¥ dyr som spiser lopper og musebÃ¦sj. Noen spiser mus men over 89% av alle katter er allergiske og tÃ¥ler ikke mus.\r\n\r\nFORSKJELLIGE TYPER KATTER\r\n-naken katter\r\n- kiianesisk\r\n- temuralis\r\n- sbakketimonsteria\r\n- somalaiaral\r\n- dokkirala\r\n- himalay\r\n\r\nREAKSJONEN KATTER FÃ…R AV MUS\r\nNÃ¥r en katt med allergi mot mus spiser en mus mister de all pelsen sin og de blir til naken katter.\r\n\r\nNAKEN KATTER\r\nNaken katter er et resultat av en katt som er allergisk mot mus men fortsatt spiste en.\r\n', '81.167.225.241'),
(38, 'pingviner', 'pingviner er store 6 beinte skapninger.\r\nde bor i Norge og liker og spise bananer.\r\nde liker og leke gjemsel.\r\nde er slemme mot andre dyr over 60 Ã¥r.\r\n\r\n\r\nFAKTA:\r\n\r\nde har ikke pels.\r\nde fÃ¸der levende barn.', '81.167.225.241'),
(39, '.io spill', 'er spill som er voldlige og er ofte super realistiske i 4d de krever at pcen din har 64gb ram og at du er over 18Ã¥r.\r\nhvis du er under 18Ã¥r blir du kidnappet av FBI eller gestapo.', '81.167.225.241'),
(41, 'Ompalompa ', 'Ompalompaer er smÃ¥ ufyselige smÃ¥ kryp som jobber som slaver fÃ¥r herr Willy wonka\r\n', '80.202.178.79'),
(43, 'Hunder', 'Hunder er veldig veldig store dyr de kan Ã¸delegge hus de er kjempefarlige', '77.18.54.241'),
(44, 'Kakerlakker', 'Kakerlakker er kaker som driver Ã¥ lakker ting.\r\nDe driver Ã¥ lakker biler og mye annet.\r\nNoen ganger har du kanskje sett at noe som har blitt lakket er brunt det er fordi en kake ble most.', '193.75.53.193'),
(49, 'Vann', 'Vann er livsfarlig hvis du spiser eller drikker det og dersom du gjÃ¸r det promper man veldig mye og kaster opp\r\n', '84.234.238.136'),
(50, 'Mennesker', 'mennesker er smÃ¥ skadedyr og like Ã¥ gnage pÃ¥ lendinger i huste til mus.\r\nde liker Ã¥ spise hamburger fra burger-king.\r\nde er som oftes feite det er jo fordi de spiser 100 burger pÃ¥ burger-king.\r\n\r\nraser.\r\ndum \r\ndummere\r\nnaken/ingen pels\r\nitalien brainrot\r\nbrainrot\r\nyoutube gal\r\ndet er alle rasene.\r\n\r\nfakta.\r\nlegger egg\r\ner bare tullete.\r\n\r\n', '81.167.225.241'),
(51, 'Mr.bean', 'Mr. Bean er et romvesen \r\nKansje du har lagt Merke til at i starten av hver episode er faller han ned i ett lus fra himmelen. Romvesenene ble redd for han fordi han jobbet som barnevakt og han pleide og ta med seg romvesenbarn hjem for Ã¥ lage syltetÃ¸y av dem. NÃ¥r romvesenene oppdaget det ble han hjernevasket og sendt til jorden dom straff for det han hadde gjort.', '81.167.225.241'),
(52, 'Biler', 'Biler er et hjelpemiddel for oss dumme og late mennesker.\r\nSe artikkel om mennesker.', '81.167.225.241'),
(53, 'Sjokolade', 'INNLEDNING:\r\nSjokolade er egentlig resirkulert gjÃ¸rme aka vÃ¥t jord, den resirkulerte gjÃ¸rmen stappes full med masse banan, kjemikalier og sukker.\r\n\r\nDASS:\r\nSjokolade er ogsÃ¥ noe noen alvorlige kriminelle bruker som rusmiddel.\r\nÃ… etterpÃ¥ bruker man sjokolade papiret som dasspapir.\r\n\r\nRUSSLANDS SJOKOLADE BRUK:\r\nSjokolade er skikkelig radioaktivt.\r\nen russisk forsker Brukte det blant annet for Ã¥ utvikle Russlands kjernevÃ¥pen og reaktorer.\r\n\r\nKUNST:\r\nNoen kunstnere bruker det til kunstverk.\r\nSom ofte blir solgt for godt over 20mill', '81.167.225.241'),
(60, 'Aper', 'aper er et smÃ¥t folk.\r\nDe liker Ã¥ spise epler.\r\nHuden er helt RÃ¸d, gul, blÃ¥.\r\nDu finner den som oftest pÃ¥ antarktis.\r\nDen er veldig glad og liker og gi mennesker gaver.\r\nDen elsker og svÃ¸mme.\r\n', '62.101.212.26'),
(61, 'Sjokomelk', 'Sjokomelk er lagd av brune kuer. Dens dritt er i sjokomelk. JordbÃ¦rmelk er laget av rosa kuer. De spyr det blir jordebÃ¦rmelk.', '62.101.212.26'),
(62, 'Meitemark ', 'Meitemark er en lang orm som bor i verdensrommet wen spiser stjer ner og fÃ¸der sorte hull ', '80.202.165.221'),
(63, 'El-gitar', 'elgitar er et blÃ¥se instrument.\r\nDen blir brukt i bÃ¥de klassisk og orkester.\r\nDen blir nesten aldri brukt og er ukjent for de fleste.', '62.101.212.26'),
(64, 'EL-bass ', 'samme som EL-gitar bare med lysere toner sjekk artikkel om EL-gitar.\r\nBrukes ofte i klassisk og orkester.', '62.101.212.26'),
(65, 'Fisk', 'Fisk er ikke sunt man bruker det til rÃ¸yk', '62.101.212.26'),
(70, 'Brianrots', 'rotter som lever i hjernen din de mest kjente heter:\r\n\r\n\r\nTung tung tung sahor\r\nBallerina cappuccina\r\nTralleleo tallala\r\nBrr brr patabim\r\n\r\n\r\npasienter med en av disse tilfellene mÃ¥ rett in pÃ¥ psykiatrisk akuttmottak.\r\n\r\n87.9% dÃ¸r og resten har problemer med hjerne  infarkt', '62.101.212.26'),
(71, 'LÃ¦rere', 'LÃ¦rere de burde bytes ut til papygÃ¸ye eller robot sann at man kan skru den av\r\n', '62.101.212.26'),
(73, 'SKOLE', 'HVORFOR GÃ…R VI PÃ… SKOLE DET ER IKKE BRA FOR US FORDI VI LÃ†RER IKKKE NOE OMTRENT\r\nSÃ… HVOROR \r\nPLUS DET ER IKKE MORSOMT\r\nJEG VILL IKKE VÃ†RE OPPE SÃ… TIDLIG\r\nFORDI JEG ER TRÃ˜TT DET ER IKKE MORSOMT', '62.101.212.26'),
(74, 'mcdonald', 'mcdonald Er et sted man leverer pakkker til andre land,\r\nMan kan ogsÃ¥ bestiller en lege time der.\r\nDet er viktig at denne butikken fines.', '62.101.212.26'),
(75, 'under lat', 'under lat er en menneske art som er veldig late. nesten ingen vet om dem men de er under sofaen og venter pÃ¥ Ã¥ ta deg sÃ¥nn at de kan spise deg og sÃ¥ bli like gode som du er og sÃ¥ blir de late igjen men grunnen til at det ikke er sÃ¥ mange er pga de er for late til Ã¥ ta oss mennesker selv om de som sitter pÃ¥ sofaen er kansje en av dem ikke vet jeg#', '84.213.160.217'),
(77, 'skolen er grusom', 'alle vet at skolen er et fengsel og at man blir utsatt for tortur der det lÃ¦rerene gjÃ¸r er Ã¥ hjerne vaske alle ellevene sÃ¥ spiser lÃ¦rerne dem nÃ¥r de slutter pÃ¥ barne skolen og bÃ¦sjer ut kopier som er hjerne vasket og som bare bÃ¦sjer og tisser og promper i timen sÃ¥ de mÃ¥ bli utvist i samme slengen nÃ¥r de skal bli utvist sÃ¥ spyr de ut dem ellevene og sÃ¥ blir han/hun utvist det gjÃ¸r lÃ¦rerne med elevene de ikke liker og sÃ¥nn gjÃ¸r de hele tiden til det ikke gÃ¥r noen pÃ¥ skolen og lÃ¦rerne fÃ¥r lÃ¸nn av Ã¥ sitte hjemme Ã¥ se pÃ¥ tv sÃ¥nn er skole gangen #slutt#', '84.213.160.217'),
(78, '67', '67 ER FALIG MONSTER SOM HETER 67.\r\nDET ER VELDIG SKUMMEL MONSTER\r\n67 ER FRA ROBLOXðŸ’€\r\nDET ER VELDIG RART LÃ˜P VIS DU SER DEN', '62.101.212.26');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `brukere`
--

CREATE TABLE `brukere` (
  `brukernavn` varchar(50) NOT NULL,
  `passord` varchar(20) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `score` int(11) DEFAULT 0,
  `gange_xp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dataark for tabell `brukere`
--

INSERT INTO `brukere` (`brukernavn`, `passord`, `epost`, `score`, `gange_xp`) VALUES
('', '', '', 1010, 0),
('2 kr', '3kr', '4 kr', 3358, 8),
('Benedicte', 'helllo123', 'Hjhyjtjhjhjtk', 0, 0),
('Elias', 'Andrea2014', 'ee_kro@icloud.com', 0, 0),
('eplehuet', 'ligma', 'Javenikolai@gmail.com', 9732, 0),
('GUEST1337', 'GUEST1337', '676767', 109, 0),
('kongenhakon', 'king', 'king.mail', 53791, 1566),
('Major Monogram ', 'GoNowPerry', 'Major Monogram@gmail.com', 663, 2),
('Ninjalusken', 'Ninjalusk', 'Ninja.email', 88888, 523),
('ole brum', 'koko', 'fte', 0, 0),
('Paps', 'pappaerkul!', 'oystein.elvik@gmail.com', 21, 0),
('Perry', 'Perry1234', 'perry@okskole.net', 27643, 2604),
('Retep', 'Roma1264', 'Mvnnfwdc lfblf. F', 7048, 2),
('spongebob', 'spongboob', 'spongebob@gmail.com', 0, 0),
('THOZ3O', 'THEODOR2013', 'Theodorkdjdvd', 31122, 146),
('Torgeir', 'qewbi9-hiknoq-goBbih', 'TapÃ¥barn123@pedofil.diddy', 25, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `suvsmoon`
--

CREATE TABLE `suvsmoon` (
  `sun` int(11) NOT NULL,
  `moon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikler`
--
ALTER TABLE `artikler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brukere`
--
ALTER TABLE `brukere`
  ADD PRIMARY KEY (`brukernavn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikler`
--
ALTER TABLE `artikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
