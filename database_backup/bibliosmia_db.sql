-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliosmia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `book_count` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `book_count`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Stephen King', 4, 'stephen-king', NULL, '2025-03-16 12:32:15'),
(2, 'Stephen Hawking', 0, 'stephen-hawking', NULL, NULL),
(3, 'Hanya Yanagihara', 1, 'hanya-yanagihara', NULL, '2025-03-16 11:18:03'),
(4, 'Bill Bryson', 1, 'bill-bryson', NULL, '2025-03-16 11:23:03'),
(5, 'Anthony Doerr', 1, 'anthony-doerr', NULL, '2025-03-16 11:27:43'),
(6, 'S.  J.  Watson', 1, 's--j--watson', NULL, '2025-03-16 11:30:38'),
(7, 'Craig Thompson', 1, 'craig-thompson', NULL, '2025-03-16 11:35:19'),
(8, 'Dan Brown', 1, 'dan-brown', NULL, '2025-03-16 13:22:05'),
(9, 'Fábio Moon', 1, 'fábio-moon', NULL, '2025-03-16 12:04:06'),
(10, 'Boris Pasternak', 1, 'boris-pasternak', NULL, '2025-03-16 12:22:47'),
(11, 'Miguel de Cervantes Saavedra', 1, 'miguel-de-cervantes-saavedra', NULL, '2025-03-16 12:28:25'),
(12, 'John Steinbeck', 0, 'john-steinbeck', NULL, NULL),
(13, 'Tara Westover', 1, 'tara-westover', NULL, '2025-03-16 12:35:47'),
(14, 'Chuck Palahniuk', 1, 'chuck-palahniuk', NULL, '2025-03-16 12:55:55'),
(15, 'Charles Dickens', 1, 'charles-dickens', NULL, '2025-03-16 13:01:43'),
(16, 'F. Scott Fitzgerald', 1, 'f-scott-fitzgerald', NULL, '2025-03-16 13:03:33'),
(17, 'J.K. Rowling', 0, 'jk-rowling', NULL, NULL),
(18, 'Yuval Noah Harari', 1, 'yuval-noah-harari', NULL, '2025-03-17 00:37:44'),
(19, 'Maya Angelou', 1, 'maya-angelou', NULL, '2025-03-16 13:10:10'),
(20, 'Art Spiegelman', 1, 'art-spiegelman', NULL, '2025-03-16 13:30:45'),
(21, 'Herman Melville', 1, 'herman-melville', NULL, '2025-03-16 13:39:17'),
(22, 'Kazuo Ishiguro', 1, 'kazuo-ishiguro', NULL, '2025-03-16 13:43:02'),
(23, 'Gabriel García Márquez', 1, 'gabriel-garcía-márquez', NULL, '2025-03-16 13:48:04'),
(24, 'Malcolm Gladwell', 1, 'malcolm-gladwell', NULL, '2025-03-16 13:50:28'),
(25, 'Marjane Satrapi', 1, 'marjane-satrapi', NULL, '2025-03-16 13:54:07'),
(26, 'Richard Dawkins', 1, 'richard-dawkins', NULL, '2025-03-16 13:56:07'),
(27, 'Thomas Harris', 1, 'thomas-harris', NULL, '2025-03-16 13:59:23'),
(28, 'Alex Michaelides', 1, 'alex-michaelides', NULL, '2025-03-16 14:01:39'),
(29, 'Marcel Proust', 1, 'marcel-proust', NULL, '2025-03-16 14:08:45'),
(30, 'Harlan Coben', 0, 'harlan-coben', NULL, NULL),
(32, 'Malcolm X', 1, 'malcolm-x', NULL, '2025-03-16 14:16:43'),
(33, 'Mario Puzo', 1, 'mario-puzo', NULL, '2025-03-16 14:19:43'),
(34, 'Alan Moore', 3, 'alan-moore', NULL, '2025-03-16 14:28:50'),
(35, 'Mariko Tamaki', 1, 'mariko-tamaki', NULL, '2025-03-16 14:25:28'),
(36, 'Kristin Hannah', 1, 'kristin-hannah', NULL, '2025-03-17 01:10:52'),
(37, 'Liz Moore', 1, 'liz-moore', NULL, '2025-03-17 01:14:33'),
(38, 'Kaliane Bradley', 1, 'kaliane-bradley', NULL, '2025-03-17 01:17:12'),
(39, 'John Marrs', 1, 'john-marrs', NULL, '2025-03-17 01:21:50'),
(40, 'Jonathan Haidt', 1, 'jonathan-haidt', NULL, '2025-03-17 01:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `book_category_id` int(11) NOT NULL,
  `book_category_name` varchar(255) NOT NULL,
  `book_publisher_id` int(11) NOT NULL,
  `book_publisher_name` varchar(255) NOT NULL,
  `book_description` text NOT NULL,
  `book_page_no` int(11) NOT NULL,
  `book_publish_date` date NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `book_tag` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `author_id`, `slug`, `price`, `quantity`, `book_category_id`, `book_category_name`, `book_publisher_id`, `book_publisher_name`, `book_description`, `book_page_no`, `book_publish_date`, `book_img`, `book_tag`, `created_at`, `updated_at`) VALUES
(1, 'A Brief History of  Time', 'Stephen King', '1', 'a-brief-history-of--time', 400, 5, 2, 'Science', 2, 'vintage', 'A landmark volume in science writing by one of the great minds of our time, Stephen Hawking’s book explores such profound questions as: How did the universe begin—and what made its start possible? Does time always flow forward? Is the universe unending—or are there boundaries? Are there other dimensions in space? What will happen when it all ends?\r\n\r\nTold in language we all can understand, A Brief History of Time plunges into the exotic realms of black holes and quarks, of antimatter and “arrows of time,” of the big bang and a bigger God—where the possibilities are wondrous and unexpected. With exciting images and profound imagination, Stephen Hawking brings us closer to the ultimate secrets at the very heart of creation.', 226, '1988-01-01', 'upload/1826771597477146.jpg', 'bestseller', NULL, '2025-03-17 00:20:21'),
(2, 'The Shining', 'Stephen King', '1', 'the-shining', 450, 10, 1, 'Horror', 1, 'Hodder', 'Jack Torrance\'s new job at the Overlook Hotel is the perfect chance for a fresh start. As the off-season caretaker at the atmospheric old hotel, he\'ll have plenty of time to spend reconnecting with his family and working on his writing. But as the harsh winter weather sets in, the idyllic location feels ever more remote...and more sinister. And the only one to notice the strange and terrible forces gathering around the Overlook is Danny Torrance, a uniquely gifted five-year-old.', 497, '1977-01-28', 'upload/1826771744969140.jpg', 'bestseller', NULL, '2025-03-17 00:20:36'),
(3, 'A Little Life', 'Hanya Yanagihara', '3', 'a-little-life', 560, 11, 3, 'Contemporary', 3, 'Doubleday', 'When four classmates from a small Massachusetts college move to New York to make their way, they\'re broke, adrift, and buoyed only by their friendship and ambition. There is kind, handsome Willem, an aspiring actor; JB, a quick-witted, sometimes cruel Brooklyn-born painter seeking entry to the art world; Malcolm, a frustrated architect at a prominent firm; and withdrawn, brilliant, enigmatic Jude, who serves as their center of gravity.\r\n\r\nOver the decades, their relationships deepen and darken, tinged by addiction, success, and pride. Yet their greatest challenge, each comes to realize, is Jude himself, by midlife a terrifyingly talented litigator yet an increasingly broken man, his mind and body scarred by an unspeakable childhood, and haunted by what he fears is a degree of trauma that he’ll not only be unable to overcome—but that will define his life forever.', 720, '2015-03-10', 'upload/1826771942493083.jpg', 'newreleased', NULL, '2025-03-17 00:25:40'),
(4, 'A Short History of Nearly Everything', 'Bill Bryson', '4', 'a-short-history-of-nearly-everything', 700, 2, 4, 'Nonfiction', 4, 'Transworld Publishers', 'The ultimate eye-opening journey through time and space, A Short History of Nearly Everything is the biggest-selling popular science book of the 21st century and has sold over 2 million copies.\r\n\r\nBill Bryson describes himself as a reluctant traveller, but even when he stays safely at home he can\'t contain his curiosity about the world around him. A Short History of Nearly Everything is his quest to understand everything that has happened from the Big Bang to the rise of civilization - how we got from there, being nothing at all, to here, being us. Bill Bryson\'s challenge is to take subjects that normally bore the pants off most of us, like geology, chemistry and particle physics, and see if there isn\'t some way to render them comprehensible to people who have never thought they could be interested in science.\r\n\r\nThe ultimate eye-opening journey through time and space, A Short History of Nearly Everything is the biggest-selling popular science book of the 21st century, and reveals the world in a way most of us have never seen it before.', 668, '2003-01-01', 'upload/1826772257094561.jpeg', NULL, NULL, NULL),
(5, 'All The Light We Cannot See', 'Anthony Doerr', '5', 'all-the-light-we-cannot-see', 420, 4, 5, 'Historical Fiction', 5, 'Scribner', 'Marie-Laure lives in Paris near the Museum of Natural History, where her father works. When she is twelve, the Nazis occupy Paris and father and daughter flee to the walled citadel of Saint-Malo, where Marie-Laure’s reclusive great uncle lives in a tall house by the sea. With them they carry what might be the museum’s most valuable and dangerous jewel.\r\n\r\nIn a mining town in Germany, Werner Pfennig, an orphan, grows up with his younger sister, enchanted by a crude radio they find that brings them news and stories from places they have never seen or imagined. Werner becomes an expert at building and fixing these crucial new instruments and is enlisted to use his talent to track down the resistance. Deftly interweaving the lives of Marie-Laure and Werner, Doerr illuminates the ways, against all odds, people try to be good to one another.\r\n\r\nFrom the highly acclaimed, multiple award-winning Anthony Doerr, the stunningly beautiful instant New York Times bestseller about a blind French girl and a German boy whose paths collide in occupied France as both try to survive the devastation of World War II.', 544, '2014-05-06', 'upload/1826772550584914.jpg', 'recentbestsellers', NULL, '2025-03-17 00:21:56'),
(6, 'Before I Go to Sleep', 'S.  J.  Watson', '6', 'before-i-go-to-sleep', 300, 5, 6, 'Thriller', 6, 'HarperCollins Publishers', 'So what if you lost yours every time you went to sleep?\r\n\r\nYour name, your identity, your past, even the people you love - all forgotten overnight.\r\n\r\nAnd the one person you trust may only be telling you half the story.\r\n\r\nWelcome to Christine\'s life.', 359, '2011-10-01', 'upload/1826772733986359.jpg', 'Goodreads_Choice_Award_Nominee_2011', NULL, NULL),
(7, 'Blankets', 'Craig Thompson', '7', 'blankets', 800, 10, 7, 'Graphic Novels', 7, 'Shelf Productions', 'Blankets is the story of a young man coming of age and finding the confidence to express his creative voice. Craig Thompson\'s poignant graphic memoir plays out against the backdrop of a Midwestern winterscape: finely-hewn linework draws together a portrait of small town life, a rigorously fundamentalist Christian childhood, and a lonely, emotionally mixed-up adolescence.\r\n\r\nUnder an engulfing blanket of snow, Craig and Raina fall in love at winter church camp, revealing to one another their struggles with faith and their dreams of escape. Over time though, their personal demons resurface and their relationship falls apart. It\'s a universal story, and Thompson\'s vibrant brushstrokes and unique page designs make the familiar heartbreaking all over again.', 582, '2003-07-23', 'upload/1826773028442145.jpg', 'bestseller', NULL, '2025-03-17 00:22:13'),
(8, 'The Da Vinci Code', 'Stephen King', '1', 'the-da-vinci-code', 500, 20, 8, 'Fiction', 8, 'Anchor', 'While in Paris on business, Harvard symbologist Robert Langdon receives an urgent late-night phone call: the elderly curator of the Louvre has been murdered inside the museum. Near the body, police have found a baffling cipher. While working to solve the enigmatic riddle, Langdon is stunned to discover it leads to a trail of clues hidden in the works of Da Vinci -- clues visible for all to see -- yet ingeniously disguised by the painter.\r\n\r\nLangdon joins forces with a gifted French cryptologist, Sophie Neveu, and learns the late curator was involved in the Priory of Sion -- an actual secret society whose members included Sir Isaac Newton, Botticelli, Victor Hugo, and Da Vinci, among others.\r\n\r\nIn a breathless race through Paris, London, and beyond, Langdon and Neveu match wits with a faceless powerbroker who seems to anticipate their every move. Unless Langdon and Neveu can decipher the labyrinthine puzzle in time, the Priory\'s ancient secret -- and an explosive historical truth -- will be lost forever.\r\n\r\nThe Da Vinci Code heralds the arrival of a new breed of lightning-paced, intelligent thriller utterly unpredictable right up to its stunning conclusion.', 480, '2003-01-01', 'upload/1826773918692012.jpg', 'bestseller', NULL, '2025-03-17 00:22:36'),
(9, 'Daytripper', 'Fábio Moon', '9', 'daytripper', 750, 2, 7, 'Graphic Novels', 9, 'Vertigo', 'What are the most important days of your life?\r\n\r\nMeet Brás de Oliva Domingos. The miracle child of a world-famous Brazilian writer, Brás spends his days penning other people\'s obituaries and his nights dreaming of becoming a successful author himself—writing the end of other people\'s stories, while his own has barely begun.\r\n\r\nBut on the day that life begins, would he even notice? Does it start at 21 when he meets the girl of his dreams? Or at 11, when he has his first kiss? Is it later in his life when his first son is born? Or earlier when he might have found his voice as a writer?\r\n\r\nEach day in Brás\'s life is like a page from a book. Each one reveals the people and things who have made him who he is: his mother and father, his child and his best friend, his first love and the love of his life. And like all great stories, each day has a twist he\'ll never see coming...\r\n\r\nIn Daytripper, the Eisner Award-winning twin brothers Fábio Moon and Gabriel Bá tell a magical, mysterious and moving story about life itself—a hauntingly lyrical journey that uses the quiet moments to ask the big questions.', 247, '2011-02-08', 'upload/1826774839916607.jpg', 'Goodreads_Choice_Award_Nominee_2011', NULL, NULL),
(10, 'Doctor Zhivago', 'Boris Pasternak', '10', 'doctor-zhivago', 500, 1, 8, 'Fiction', 10, 'Pantheon', 'This epic tale about the effects of the Russian Revolution and its aftermath on a bourgeois family was not published in the Soviet Union until 1987. One of the results of its publication in the West was Pasternak\'s complete rejection by Soviet authorities; when he was awarded the Nobel Prize for Literature in 1958 he was compelled to decline it. The book quickly became an international best-seller.\r\n\r\nDr. Yury Zhivago, Pasternak\'s alter ego, is a poet, philosopher, and physician whose life is disrupted by the war and by his love for Lara, the wife of a revolutionary. His artistic nature makes him vulnerable to the brutality and harshness of the Bolsheviks. The poems he writes constitute some of the most beautiful writing featured in the novel.', 592, '1957-11-01', 'upload/1826776015625963.jpg', NULL, NULL, NULL),
(11, 'Don Quixote', 'Miguel de Cervantes Saavedra', '11', 'don-quixote', 500, 1, 8, 'Fiction', 11, 'Penguin Books', 'Don Quixote has become so entranced by reading chivalric romances that he determines to become a knight-errant himself. In the company of his faithful squire, Sancho Panza, his exploits blossom in all sorts of wonderful ways. While Quixote\'s fancy often leads him astray—he tilts at windmills, imagining them to be giants—Sancho acquires cunning and a certain sagacity. Sane madman and wise fool, they roam the world together, and together they have haunted readers\' imaginations for nearly four hundred years.\r\n\r\nWith its experimental form and literary playfulness, Don Quixote has been generally recognized as the first modern novel. The book has been enormously influential on a host of writers, from Fielding and Sterne to Flaubert, Dickens, Melville, and Faulkner, who reread it once a year, \"just as some people read the Bible.\"', 1023, '1615-01-01', 'upload/1826776369799987.jpeg', NULL, NULL, NULL),
(12, 'East of  Eden', 'Stephen King', '1', 'east-of--eden', 450, 3, 8, 'Fiction', 11, 'Penguin Books', 'In his journal, Nobel Prize winner John Steinbeck called East of Eden “the first book,” and indeed it has the primordial power and simplicity of myth. Set in the rich farmland of California’s Salinas Valley, this sprawling and often brutal novel follows the intertwined destinies of two families—the Trasks and the Hamiltons—whose generations helplessly reenact the fall of Adam and Eve and the poisonous rivalry of Cain and Abel.\r\n\r\nAdam Trask came to California from the East to farm and raise his family on the new rich land. But the birth of his twins, Cal and Aaron, brings his wife to the brink of madness, and Adam is left alone to raise his boys to manhood. One boy thrives nurtured by the love of all those around him; the other grows up in loneliness enveloped by a mysterious darkness.\r\n\r\nFirst published in 1952, East of Eden is the work in which Steinbeck created his most mesmerizing characters and explored his most enduring themes: the mystery of identity, the inexplicability of love, and the murderous consequences of love\'s absence. A masterpiece of Steinbeck\'s later years, East of Eden is a powerful and vastly ambitious novel that is at once a family saga and a modern retelling of the Book of Genesis.', 601, '1952-01-01', 'upload/1826776611155644.jpg', NULL, NULL, NULL),
(13, 'Educated', 'Tara Westover', '13', 'educated', 350, 4, 4, 'Nonfiction', 12, 'Random House', 'Tara Westover was 17 the first time she set foot in a classroom. Born to survivalists in the mountains of Idaho, she prepared for the end of the world by stockpiling home-canned peaches and sleeping with her \"head-for-the-hills bag\". In the summer she stewed herbs for her mother, a midwife and healer, and in the winter she salvaged in her father\'s junkyard.', 352, '2018-02-20', 'upload/1826776833117482.jpeg', 'recentbestsellers', NULL, '2025-03-17 00:23:17'),
(14, 'Fight Club', 'Chuck Palahniuk', '14', 'fight-club', 300, 224, 8, 'Fiction', 13, 'W. W. Norton & Company', 'Chuck Palahniuk showed himself to be his generation’s most visionary satirist in this, his first book. Fight Club’s estranged narrator leaves his lackluster job when he comes under the thrall of Tyler Durden, an enigmatic young man who holds secret after-hours boxing matches in the basement of bars. There, two men fight \"as long as they have to.\" This is a gloriously original work that exposes the darkness at the core of our modern world.', 224, '1996-08-17', 'upload/1826778100087176.jpeg', 'bestseller', NULL, '2025-03-17 02:09:35'),
(15, 'Great Expectations', 'Charles Dickens', '15', 'great-expectations', 600, 1, 9, 'Classics', 11, 'Penguin Books', 'Great Expectations charts the progress of Pip from childhood through often painful experiences to adulthood, as he moves from the Kent marshes to busy, commercial London, encountering a variety of extraordinary characters ranging from Magwitch, the escaped convict, to Miss Havisham, locked up with her unhappy past and living with her ward, the arrogant, beautiful Estella.', 544, '1861-01-01', 'upload/1826778464146657.jpeg', NULL, NULL, NULL),
(16, 'The Great Gatsby', 'F. Scott Fitzgerald', '16', 'the-great-gatsby', 200, 5, 8, 'Fiction', 5, 'Scribner', 'James L.W. West III to include the author’s final revisions and features a note on the composition and text, a personal foreword by Fitzgerald’s granddaughter, Eleanor Lanahan—and a new introduction by two-time National Book Award winner Jesmyn Ward.\r\n\r\nThe Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme achievement of his career. First published in 1925, this quintessential novel of the Jazz Age has been acclaimed by generations of readers. The story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted “gin was the national drink and sex the national obsession,” it is an exquisitely crafted tale of America in the 1920s.', 180, '1925-04-10', 'upload/1826778579798797.webp', NULL, NULL, NULL),
(18, 'I Know Why the Caged Bird Sings', 'Maya Angelou', '19', 'i-know-why-the-caged-bird-sings', 410, 2, 4, 'Nonfiction', 15, 'Virago', 'Maya Angelou\'s seven volumes of autobiography are a testament to the talents and resilience of this extraordinary writer. Loving the world, she also knows its cruelty. As a black woman she has known discrimination and extreme poverty, but also hope and joy, achievement and celebration. In this first volume of her autobiography, Maya Angelou beautifully evoker her childhood with her grandmother in the American South of the 1930s. She learns the power of the white folks at the other end of town and suffers the terrible trauma of rape by her mother\'s lover.', 309, '1969-01-01', 'upload/1826778996318062.jpg', NULL, NULL, NULL),
(19, 'Inferno', 'Dan Brown', '8', 'inferno', 550, 10, 8, 'Fiction', 3, 'Doubleday', '‘Seek and ye shall find.’\r\n\r\nWith these words echoing in his head, eminent Harvard symbologist Robert Langdon awakes in a hospital bed with no recollection of where he is or how he got there. Nor can he explain the origin of the macabre object that is found hidden in his belongings.\r\n\r\nA threat to his life will propel him and a young doctor, Sienna Brooks, into a breakneck chase across the city of Florence. Only Langdon’s knowledge of hidden passageways and ancient secrets that lie behind its historic facade can save them from the clutches of their unknown pursuers.\r\n\r\nWith only a few lines from Dante’s dark and epic masterpiece, The Inferno, to guide them, they must decipher a sequence of codes buried deep within some of the most celebrated artefacts of the Renaissance – sculptures, paintings, buildings – to find the answers to a puzzle which may, or may not, help them save the world from a terrifying threat…\r\n\r\nSet against an extraordinary landscape inspired by one of history’s most ominous literary classics, Inferno is Dan Brown’s most compelling and thought-provoking novel yet, a breathless race-against-time thriller that will grab you from page one and not let you go until you close the book.', 463, '2013-12-05', 'upload/1826779745685273.jpeg', NULL, NULL, NULL),
(20, 'The Complete Maus', 'Art Spiegelman', '20', 'the-complete-maus', 500, 5, 7, 'Graphic Novels', 11, 'Penguin Books', 'On the occasion of the twenty-fifth anniversary of its first publication, here is the definitive edition of the book acclaimed as “the most affecting and successful narrative ever done about the Holocaust” (Wall Street Journal) and “the first masterpiece in comic book history” (The New Yorker).\r\n\r\nThe Pulitzer Prize-winning Maus tells the story of Vladek Spiegelman, a Jewish survivor of Hitler’s Europe, and his son, a cartoonist coming to terms with his father’s story. Maus approaches the unspeakable through the diminutive. Its form, the cartoon (the Nazis are cats, the Jews mice), shocks us out of any lingering sense of familiarity and succeeds in “drawing us closer to the bleak heart of the Holocaust” (The New York Times).\r\n\r\nMaus is a haunting tale within a tale. Vladek’s harrowing story of survival is woven into the author’s account of his tortured relationship with his aging father. Against the backdrop of guilt brought by survival, they stage a normal life of small arguments and unhappy visits. This astonishing retelling of our century’s grisliest news is a story of survival, not only of Vladek but of the children who survive even the survivors. Maus studies the bloody pawprints of history and tracks its meaning for all of us.', 296, '2003-10-02', 'upload/1826780291253987.jpg', NULL, NULL, NULL),
(21, 'Moby-Dick or, The Whale', 'Herman Melville', '21', 'moby-dick-or,-the-whale', 350, 10, 9, 'Classics', 11, 'Penguin Books', '\"It is the horrible texture of a fabric that should be woven of ships\' cables and hawsers. A Polar wind blows through it, and birds of prey hover over it.\"\r\n\r\nSo Melville wrote of his masterpiece, one of the greatest works of imagination in literary history. In part, Moby-Dick is the story of an eerily compelling madman pursuing an unholy war against a creature as vast and dangerous and unknowable as the sea itself. But more than just a novel of adventure, more than an encyclopaedia of whaling lore and legend, the book can be seen as part of its author\'s lifelong meditation on America. Written with wonderfully redemptive humour, Moby-Dick is also a profound inquiry into character, faith, and the nature of perception.\r\n\r\nThis edition of Moby-Dick, which reproduces the definitive text of the novel, includes invaluable explanatory notes, along with maps, illustrations, and a glossary of nautical terms.', 720, '1851-10-18', 'upload/1826780827788278.jpg', NULL, NULL, NULL),
(22, 'Never Let Me Go', 'Kazuo Ishiguro', '22', 'never-let-me-go', 540, 5, 8, 'Fiction', 9, 'Vertigo', 'Hailsham seems like a pleasant English boarding school, far from the influences of the city. Its students are well tended and supported, trained in art and literature, and become just the sort of people the world wants them to be. But, curiously, they are taught nothing of the outside world and are allowed little contact with it.\r\n\r\nWithin the grounds of Hailsham, Kathy grows from schoolgirl to young woman, but it’s only when she and her friends Ruth and Tommy leave the safe grounds of the school (as they always knew they would) that they realize the full truth of what Hailsham is.\r\n\r\nNever Let Me Go breaks through the boundaries of the literary novel. It is a gripping mystery, a beautiful love story, and also a scathing critique of human arrogance and a moral examination of how we treat the vulnerable and different in our society. In exploring the themes of memory and the impact of the past, Ishiguro takes on the idea of a possible future to create his most moving and powerful book to date.', 288, '2005-04-05', 'upload/1826781064178648.jpeg', NULL, NULL, NULL),
(23, 'One Hundred Years of Solitude', 'Gabriel García Márquez', '23', 'one-hundred-years-of-solitude', 560, 2, 8, 'Fiction', 16, 'Mass Market Paperback', 'The brilliant, bestselling, landmark novel that tells the story of the Buendia family, and chronicles the irreconcilable conflict between the desire for solitude and the need for love—in rich, imaginative prose that has come to define an entire genre known as \"magical realism.\"', 417, '1967-01-01', 'upload/1826781380926000.jpg', NULL, NULL, NULL),
(24, 'Outliers: The Story of Success', 'Malcolm Gladwell', '24', 'outliers:-the-story-of-success', 450, 5, 4, 'Nonfiction', 17, 'Little, Brown and Company', 'Learn what sets high achievers apart — from Bill Gates to the Beatles — in this #1 bestseller from \"a singular talent\" (New York Times Book Review).\r\n\r\nIn this stunning book, Malcolm Gladwell takes us on an intellectual journey through the world of \"outliers\"—the best and the brightest, the most famous and the most successful. He asks the question: what makes high-achievers different?\r\n\r\nHis answer is that we pay too much attention to what successful people are like, and too little attention to where they are from: that is, their culture, their family, their generation, and the idiosyncratic experiences of their upbringing. Along the way he explains the secrets of software billionaires, what it takes to be a great soccer player, why Asians are good at math, and what made the Beatles the greatest rock band.\r\n\r\nBrilliant and entertaining, Outliers is a landmark work that will simultaneously delight and illuminate.', 309, '2008-11-18', 'upload/1826781531334754.jpg', NULL, NULL, NULL),
(25, 'Persepolis: The Story of a Childhood', 'Marjane Satrapi', '25', 'persepolis:-the-story-of-a-childhood', 550, 15, 7, 'Graphic Novels', 10, 'Pantheon', 'In powerful black-and-white comic strip images, Satrapi tells the story of her life in Tehran from ages six to fourteen, years that saw the overthrow of the Shah’s regime, the triumph of the Islamic Revolution, and the devastating effects of war with Iraq. The intelligent and outspoken only child of committed Marxists and the great-granddaughter of one of Iran’s last emperors, Marjane bears witness to a childhood uniquely entwined with the history of her country.\r\n\r\nPersepolis paints an unforgettable portrait of daily life in Iran and of the bewildering contradictions between home life and public life. Marjane’s child’s-eye view of dethroned emperors, state-sanctioned whippings, and heroes of the revolution allows us to learn as she does the history of this fascinating country and of her own extraordinary family. Intensely personal, profoundly political, and wholly original, Persepolis is at once a story of growing up and a reminder of the human cost of war and political repression. It shows how we carry on, with laughter and tears, in the face of absurdity. And, finally, it introduces us to an irresistible little girl with whom we cannot help but fall in love.', 153, '2003-04-29', 'upload/1826781761217121.jpg', NULL, NULL, NULL),
(26, 'The Selfish Gene', 'Richard Dawkins', '26', 'the-selfish-gene', 600, 5, 2, 'Science', 18, 'Oxford University Press', '\"The Selfish Gene\" caused a wave of excitement among biologists and the general public when it was first published in 1976. Its vivid rendering of a gene\'s eye view of life, in lucid prose, gathered together the strands of thought about the nature of natural selection into a conceptual framework with far-reaching implications for our understanding of evolution. Time has confirmed its significance. Intellectually rigorous, yet written in non-technical language, \"The Selfish Gene\" is widely regarded as a masterpiece of science writing, and its insights remain as relevant today as on the day it was published.', 360, '1976-01-01', 'upload/1826781887479374.jpg', NULL, NULL, NULL),
(27, 'The Silence of the Lambs', 'Thomas Harris', '27', 'the-silence-of-the-lambs', 550, 5, 1, 'Horror', 19, 'Arrow Books', 'A serial murderer known only by a grotesquely apt nickname—Buffalo Bill—is stalking women. He has a purpose, but no one can fathom it, for the bodies are discovered in different states. Clarice Starling, a young trainee at the FBI Academy, is surprised to be summoned by Jack Crawford, chief of the Bureau\'s Behavioral Science section. Her assignment: to interview Dr. Hannibal Lecter—Hannibal the Cannibal—who is kept under close watch in the Baltimore State Hospital for the Criminally Insane.\r\n\r\nDr. Lecter is a former psychiatrist with a grisly history, unusual tastes, and an intense curiosity about the darker corners of the mind. His intimate understanding of the killer and of Clarice herself form the core of \"The Silence of the Lambs\"—an ingenious, masterfully written book and an unforgettable classic of suspense fiction.', 421, '1988-07-01', 'upload/1826782092359653.jpg', NULL, NULL, NULL),
(28, 'The Silent Patient', 'Alex Michaelides', '28', 'the-silent-patient', 350, 50, 6, 'Thriller', 20, 'Celadon Books', 'Alicia Berenson’s life is seemingly perfect. A famous painter married to an in-demand fashion photographer, she lives in a grand house with big windows overlooking a park in one of London’s most desirable areas. One evening her husband Gabriel returns home late from a fashion shoot, and Alicia shoots him five times in the face, and then never speaks another word.\r\n\r\nAlicia’s refusal to talk, or give any kind of explanation, turns a domestic tragedy into something far grander, a mystery that captures the public imagination and casts Alicia into notoriety. The price of her art skyrockets, and she, the silent patient, is hidden away from the tabloids and spotlight at the Grove, a secure forensic unit in North London.\r\n\r\nTheo Faber is a criminal psychotherapist who has waited a long time for the opportunity to work with Alicia. His determination to get her to talk and unravel the mystery of why she shot her husband takes him down a twisting path into his own motivations—a search for the truth that threatens to consume him....\r\n\r\nThe Silent Patient is a shocking psychological thriller of a woman’s act of violence against her husband—and of the therapist obsessed with uncovering her motive.', 336, '2019-02-05', 'upload/1826782235246700.jpeg', 'newreleased', NULL, '2025-03-17 00:23:53'),
(29, 'Swann’s Way', 'Marcel Proust', '29', 'swann’s-way', 500, 10, 8, 'Fiction', 11, 'Penguin Books', 'Marcel Proust’s In Search of Lost Time is one of the most entertaining reading experiences in any language and arguably the finest novel of the twentieth century. But since its original prewar translation there has been no completely new version in English. Now, Penguin Classics brings Proust’s masterpiece to new audiences throughout the world, beginning with Lydia Davis’s internationally acclaimed translation of the first volume, Swann’s Way.', 468, '1913-11-14', 'upload/1826782681677811.jpg', NULL, NULL, NULL),
(30, 'The Autobiography of Malcolm X', 'Malcolm X', '32', 'the-autobiography-of-malcolm-x', 550, 10, 4, 'Nonfiction', 21, 'Ballantine Books', 'Through a life of passion and struggle, Malcolm X became one of the most influential figures of the 20th Century. In this riveting account, he tells of his journey from a prison cell to Mecca, describing his transition from hoodlum to Muslim minister. Here, the man who called himself \"the angriest Black man in America\" relates how his conversion to true Islam helped him confront his rage and recognize the brotherhood of all mankind.\r\n\r\nAn established classic of modern America, \"The Autobiography of Malcolm X\" was hailed by the New York Times as \"Extraordinary. A brilliant, painful, important book.\" Still extraordinary, still important, this electrifying story has transformed Malcolm X\'s life into his legacy. The strength of his words, and the power of his ideas continue to resonate more than a generation after they first appeared.', 466, '1965-10-29', 'upload/1826783183700493.jpg', NULL, NULL, NULL),
(31, 'The Godfather', 'Mario Puzo', '33', 'the-godfather', 550, 12, 8, 'Fiction', 22, 'NAL', 'The Godfather—the epic tale of crime and betrayal that became a global phenomenon.\r\n\r\nAlmost fifty years ago, a classic was born. A searing portrayal of the Mafia underworld, The Godfather introduced readers to the first family of American crime fiction, the Corleones, and their powerful legacy of tradition, blood, and honor. The seduction of power, the pitfalls of greed, and the allegiance to family—these are the themes that have resonated with millions of readers around the world and made The Godfather the definitive novel of the violent subculture that, steeped in intrigue and controversy, remains indelibly etched in our collective consciousness.', 448, '1969-03-10', 'upload/1826783371754833.png', NULL, NULL, NULL),
(32, 'Batman: The Killing Joke', 'Alan Moore', '34', 'batman:-the-killing-joke', 300, 10, 7, 'Graphic Novels', 23, 'DC Comics', 'For the first time the Joker\'s origin is revealed in this tale of insanity and human perseverance. Looking to prove that any man can be pushed past his breaking point and go mad, the Joker attempts to drive Commissioner Gordon insane.\r\n\r\nAfter shooting and permanently paralyzing his daughter Barbara (a.k.a. Batgirl), the Joker kidnaps the commissioner and attacks his mind in hopes of breaking the man.\r\n\r\nBut refusing to give up, Gordon maintains his sanity with the help of Batman in an effort to beset the madman.', 50, '1988-11-16', 'upload/1826783538821552.jpg', NULL, NULL, NULL),
(33, 'This One Summer', 'Mariko Tamaki', '35', 'this-one-summer', 550, 5, 7, 'Graphic Novels', 24, 'First Second', 'Every summer, Rose goes with her mom and dad to a lake house in Awago Beach. It\'s their getaway, their refuge. Rosie\'s friend Windy is always there, too, like the little sister she never had. But this summer is different. Rose\'s mom and dad won\'t stop fighting, and when Rose and Windy seek a distraction from the drama, they find themselves with a whole new set of problems. It\'s a summer of secrets and sorrow and growing up, and it\'s a good thing Rose and Windy have each other.\r\n\r\nIn This One Summer two stellar creators redefine the teen graphic novel. Cousins Mariko and Jillian Tamaki, the team behind Skim, have collaborated on this gorgeous, heartbreaking, and ultimately hopeful story about a girl on the cusp of her teen age—a story of renewal and revelation.', 324, '2014-05-06', 'upload/1826783733932145.jpg', NULL, NULL, '2025-03-17 02:08:19'),
(34, 'V for Vendetta', 'Alan Moore', '34', 'v-for-vendetta', 650, 5, 7, 'Graphic Novels', 9, 'Vertigo', '\"Remember, remember the fifth of November...\"\r\n\r\nA frightening and powerful tale of the loss of freedom and identity in a chillingly believable totalitarian world, V for Vendetta stands as one of the highest achievements of the comics medium and a defining work for creators Alan Moore and David Lloyd.\r\n\r\nSet in an imagined future England that has given itself over to fascism, this groundbreaking story captures both the suffocating nature of life in an authoritarian police state and the redemptive power of the human spirit which rebels against it. Crafted with sterling clarity and intelligence, V for Vendetta brings an unequaled depth of characterization and verisimilitude to its unflinching account of oppression and resistance.', 296, '1990-01-14', 'upload/1826783845969587.jpg', NULL, NULL, NULL),
(35, 'Watchmen', 'Alan Moore', '34', 'watchmen', 550, 5, 7, 'Graphic Novels', 23, 'DC Comics', 'Watchmen, the groundbreaking series from award-winning author Alan Moore and Dave Gibbons, presents a world where the mere presence of American superheroes changed history—the U.S. won the Vietnam War, Nixon is still president, and the Cold War is in full effect.\r\n\r\nConsidered the greatest graphic novel in the history of the medium, the Hugo Award-winning story chronicles the fall from grace of a group of superheroes plagued by all-too-human failings. Along the way, the concept of the superhero is dissected as an unknown assassin stalks the erstwhile heroes.', 416, '1987-11-01', 'upload/1826783945555042.jpg', NULL, NULL, NULL),
(36, 'Homo Deus: A History of Tomorrow', 'Yuval Noah Harari', '18', 'homo-deus:-a-history-of-tomorrow', 450, 10, 4, 'Nonfiction', 2, 'vintage', 'Yuval Noah Harari, author of the critically-acclaimed New York Times bestseller and international phenomenon Sapiens, returns with an equally original, compelling, and provocative book, turning his focus toward humanity’s future, and our quest to upgrade humans into gods.\r\n\r\nOver the past century humankind has managed to do the impossible and rein in famine, plague, and war. This may seem hard to accept, but, as Harari explains in his trademark style—thorough, yet riveting—famine, plague and war have been transformed from incomprehensible and uncontrollable forces of nature into manageable challenges. For the first time ever, more people die from eating too much than from eating too little; more people die from old age than from infectious diseases; and more people commit suicide than are killed by soldiers, terrorists and criminals put together. The average American is a thousand times more likely to die from binging at McDonalds than from being blown up by Al Qaeda.\r\n\r\nWhat then will replace famine, plague, and war at the top of the human agenda? As the self-made gods of planet earth, what destinies will we set ourselves, and which quests will we undertake? Homo Deus explores the projects, dreams and nightmares that will shape the twenty-first century—from overcoming death to creating artificial life. It asks the fundamental questions: Where do we go from here? And how will we protect this fragile world from our own destructive powers? This is the next stage of evolution. This is Homo Deus.\r\n\r\nWith the same insight and clarity that made Sapiens an international hit and a New York Times bestseller, Harari maps out our future.', 450, '2015-01-01', 'upload/1826822254219637.jpg', 'newreleased', NULL, NULL),
(37, 'The Women', 'Kristin Hannah', '36', 'the-women', 560, 5, 5, 'Historical Fiction', 16, 'Mass Market Paperback', 'From the celebrated author of The Nightingale and The Four Winds comes Kristin Hannah\'s The Women—at once an intimate portrait of coming of age in a dangerous time and an epic tale of a nation divided.\r\n\r\nWomen can be heroes. When twenty-year-old nursing student Frances “Frankie” McGrath hears these words, it is a revelation. Raised in the sun-drenched, idyllic world of Southern California and sheltered by her conservative parents, she has always prided herself on doing the right thing. But in 1965, the world is changing, and she suddenly dares to imagine a different future for herself. When her brother ships out to serve in Vietnam, she joins the Army Nurse Corps and follows his path.\r\n\r\nAs green and inexperienced as the men sent to Vietnam to fight, Frankie is over-whelmed by the chaos and destruction of war. Each day is a gamble of life and death, hope and betrayal; friendships run deep and can be shattered in an instant. In war, she meets—and becomes one of—the lucky, the brave, the broken, and the lost.\r\n\r\nBut war is just the beginning for Frankie and her veteran friends. The real battle lies in coming home to a changed and divided America, to angry protesters, and to a country that wants to forget Vietnam.\r\n\r\nThe Women is the story of one woman gone to war, but it shines a light on all women who put themselves in harm’s way and whose sacrifice and commitment to their country has too often been forgotten. A novel about deep friendships and bold patriotism, The Women is a richly drawn story with a memorable heroine whose idealism and courage under fire will come to define an era.', 471, '2024-02-06', 'upload/1826824338506557.jpg', 'newreleased', NULL, NULL),
(38, 'The God of the Woods', 'Liz Moore', '37', 'the-god-of-the-woods', 500, 20, 6, 'Thriller', 25, 'Riverhead Books', 'When a teenager vanishes from her Adirondack summer camp, two worlds collide.\r\n\r\nEarly morning, August 1975: a camp counselor discovers an empty bunk. Its occupant, Barbara Van Laar, has gone missing. Barbara isn’t just any thirteen-year-old: she’s the daughter of the family that owns the summer camp and employs most of the region’s residents. And this isn’t the first time a Van Laar child has disappeared. Barbara’s older brother similarly vanished fourteen years ago, never to be found.\r\n\r\nAs a panicked search begins, a thrilling drama unfolds. Chasing down the layered secrets of the Van Laar family and the blue-collar community working in its shadow, Moore’s multi-threaded story invites readers into a rich and gripping dynasty of secrets and second chances. It is Liz Moore’s most ambitious and wide-reaching novel yet.', 478, '2024-07-02', 'upload/1826824570121896.jpg', 'newreleased', NULL, NULL),
(39, 'The Ministry of Time', 'Kaliane Bradley', '38', 'the-ministry-of-time', 450, 5, 8, 'Fiction', 26, 'Simon & Schuster', 'A time travel romance, a spy thriller, a workplace comedy, and an ingenious exploration of the nature of power and the potential for love to change it all:\r\n\r\nIn the near future, a civil servant is offered the salary of her dreams and is, shortly afterward, told what project she’ll be working on. A recently established government ministry is gathering “expats” from across history to establish whether time travel is feasible—for the body, but also for the fabric of space-time.\r\n\r\nShe is tasked with working as a “bridge”: living with, assisting, and monitoring the expat known as “1847” or Commander Graham Gore. As far as history is concerned, Commander Gore died on Sir John Franklin’s doomed 1845 expedition to the Arctic, so he’s a little disoriented to be living with an unmarried woman who regularly shows her calves, surrounded by outlandish concepts such as “washing machines,” “Spotify,” and “the collapse of the British Empire.” But with an appetite for discovery, a seven-a-day cigarette habit, and the support of a charming and chaotic cast of fellow expats, he soon adjusts.\r\n\r\nOver the next year, what the bridge initially thought would be, at best, a horrifically uncomfortable roommate dynamic, evolves into something much deeper. By the time the true shape of the Ministry’s project comes to light, the bridge has fallen haphazardly, fervently in love, with consequences she never could have imagined. Forced to confront the choices that brought them together, the bridge must finally reckon with how—and whether she believes—what she does next can change the future.', 339, '2024-05-07', 'upload/1826824737463520.jpg', 'recentbestsellers', NULL, NULL),
(40, 'The Family Experiment', 'John Marrs', '39', 'the-family-experiment', 420, 3, 13, 'Science Fiction', 27, 'Hanover Square Press', 'From the acclaimed author of The One and The Marriage Act, The Family Experiment is a dark and brilliant speculative thriller about families: real and virtual.\r\n\r\nSome families are virtually perfect…\r\n\r\nThe world\'s population is soaring, creating overcrowded cities and an economic crisis. And in the UK, the breaking point has arrived. A growing number of people can no longer afford to start families, let alone raise them.\r\n\r\nBut for those desperate to experience parenthood, there is an alternative. For a monthly subscription fee, clients can create a virtual child from scratch who they can access via the metaverse and a VR headset. To launch this new initiative, the company behind Virtual Children has created a reality TV show called The Substitute. It will follow ten couples as they raise a Virtual Child from birth to the age of eighteen but in a condensed nine-month time period. The prize: the right to keep their virtual child, or risk it all for the chance of a real baby…\r\n\r\nSet in the same universe as John Marrs\'s bestselling novel The One and The Marriage Act, The Family Experiment is a dark and twisted thriller about the ultimate Tamagotchi—a virtual baby.', 384, '2024-05-09', 'upload/1826825028965172.jpg', 'recentbestsellers', NULL, NULL),
(41, 'The Anxious Generation', 'Jonathan Haidt', '40', 'the-anxious-generation', 450, 10, 4, 'Nonfiction', 27, 'Hanover Square Press', 'THE INSTANT #1 NEW YORK TIMES BESTSELLER • A Wall Street Journal Top 10 Book of 2024 • A Washington Post Notable Book • A New York Times Notable Book • The Goodreads Choice Award Nonfiction Book of the Year\r\n\r\nA must-read for all parents: the generation-defining investigation into the collapse of youth mental health in the era of smartphones, social media, and big tech—and a plan for a healthier, freer childhood.\r\n\r\n“With tenacity and candor, Haidt lays out the consequences that have come with allowing kids to drift further into the virtual world . . . While also offering suggestions and solutions that could help protect a new generation of kids.” —Shannon Carlin, ,i>TIME, 100 Must-Read Books of 2024\r\n\r\nAfter more than a decade of stability or improvement, the mental health of adolescents plunged in the early 2010s. Rates of depression, anxiety, self-harm, and suicide rose sharply, more than doubling on many measures. Why?\r\n\r\nIn The Anxious Generation, social psychologist Jonathan Haidt lays out the facts about the epidemic of teen mental illness that hit many countries at the same time. He then investigates the nature of childhood, including why children need play and independent exploration to mature into competent, thriving adults. Haidt shows how the “play-based childhood” began to decline in the 1980s, and how it was finally wiped out by the arrival of the “phone-based childhood” in the early 2010s. He presents more than a dozen mechanisms by which this “great rewiring of childhood” has interfered with children’s social and neurological development, covering everything from sleep deprivation to attention fragmentation, addiction, loneliness, social contagion, social comparison, and perfectionism. He explains why social media damages girls more than boys and why boys have been withdrawing from the real world into the virtual world, with disastrous consequences for themselves, their families, and their societies.\r\n\r\nMost important, Haidt issues a clear call to action. He diagnoses the “collective action problems” that trap us, and then proposes four simple rules that might set us free. He describes steps that parents, teachers, schools, tech companies, and governments can take to end the epidemic of mental illness and restore a more humane childhood.\r\n\r\nHaidt has spent his career speaking truth backed by data in the most difficult landscapes—communities polarized by politics and religion, campuses battling culture wars, and now the public health emergency faced by Gen Z. We cannot afford to ignore his findings about protecting our children—and ourselves—from the psychological damage of a phone-based life.', 385, '2024-03-26', 'upload/1826825550590137.jpg', 'recentbestsellers', NULL, '2025-03-17 02:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `product_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `product_count`, `created_at`, `updated_at`) VALUES
(1, 'Horror', 'horror', 2, NULL, '2025-03-16 13:59:23'),
(2, 'Science', 'science', 2, NULL, '2025-03-16 13:56:07'),
(3, 'Contemporary', 'contemporary', 1, NULL, '2025-03-16 11:18:03'),
(4, 'Nonfiction', 'nonfiction', 7, NULL, '2025-03-17 01:30:08'),
(5, 'Historical Fiction', 'historical-fiction', 2, NULL, '2025-03-17 01:10:52'),
(6, 'Thriller', 'thriller', 3, NULL, '2025-03-17 01:14:33'),
(7, 'Graphic Novels', 'graphic-novels', 8, NULL, '2025-03-16 14:28:50'),
(8, 'Fiction', 'fiction', 12, NULL, '2025-03-17 01:17:12'),
(9, 'Classics', 'classics', 2, NULL, '2025-03-16 13:39:17'),
(10, 'Fantasy', 'fantasy', 0, NULL, NULL),
(11, 'Mystery', 'mystery', 0, NULL, NULL),
(12, 'St. Martin\'s Press', 'st.-martin\'s-press', 0, NULL, NULL),
(13, 'Science Fiction', 'science-fiction', 1, NULL, '2025-03-17 01:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_26_180815_laratrust_setup_tables', 1),
(6, '2023_06_27_112433_create_categories_table', 1),
(7, '2023_06_27_113300_create_publishers_table', 1),
(8, '2023_06_27_115319_create_books_table', 1),
(9, '2023_06_28_081759_create_authors_table', 1),
(10, '2023_06_30_165259_create_carts_table', 1),
(11, '2023_07_01_132616_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(2, 'users-read', 'Read Users', 'Read Users', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(3, 'users-update', 'Update Users', 'Update Users', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2025-03-15 15:19:10', '2025-03-15 15:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publisher_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `publisher_name`, `slug`, `publisher_count`, `created_at`, `updated_at`) VALUES
(1, 'Hodder', 'hodder', 1, NULL, '2025-03-16 11:14:55'),
(2, 'vintage', 'vintage', 2, NULL, '2025-03-17 00:37:44'),
(3, 'Doubleday', 'doubleday', 2, NULL, '2025-03-16 13:22:05'),
(4, 'Transworld Publishers', 'transworld-publishers', 1, NULL, '2025-03-16 11:23:03'),
(5, 'Scribner', 'scribner', 2, NULL, '2025-03-16 13:03:33'),
(6, 'HarperCollins Publishers', 'harpercollins-publishers', 1, NULL, '2025-03-16 11:30:38'),
(7, 'Shelf Productions', 'shelf-productions', 1, NULL, '2025-03-16 11:35:19'),
(8, 'Anchor', 'anchor', 1, NULL, '2025-03-16 11:49:28'),
(9, 'Vertigo', 'vertigo', 3, NULL, '2025-03-16 14:27:15'),
(10, 'Pantheon', 'pantheon', 2, NULL, '2025-03-16 13:54:07'),
(11, 'Penguin Books', 'penguin-books', 6, NULL, '2025-03-16 14:08:45'),
(12, 'Random House', 'random-house', 1, NULL, '2025-03-16 12:35:47'),
(13, 'W. W. Norton & Company', 'w.-w.-norton-&-company', 1, NULL, '2025-03-16 12:55:55'),
(14, 'Arthur A. Levine Books', 'arthur-a.-levine-books', 0, NULL, '2025-03-17 00:26:00'),
(15, 'Virago', 'virago', 1, NULL, '2025-03-16 13:10:10'),
(16, 'Mass Market Paperback', 'mass-market-paperback', 2, NULL, '2025-03-17 01:10:52'),
(17, 'Little, Brown and Company', 'little,-brown-and-company', 1, NULL, '2025-03-16 13:50:28'),
(18, 'Oxford University Press', 'oxford-university-press', 1, NULL, '2025-03-16 13:56:07'),
(19, 'Arrow Books', 'arrow-books', 1, NULL, '2025-03-16 13:59:23'),
(20, 'Celadon Books', 'celadon-books', 1, NULL, '2025-03-16 14:01:39'),
(21, 'Ballantine Books', 'ballantine-books', 1, NULL, '2025-03-16 14:16:43'),
(22, 'NAL', 'nal', 1, NULL, '2025-03-16 14:19:43'),
(23, 'DC Comics', 'dc-comics', 2, NULL, '2025-03-16 14:28:50'),
(24, 'First Second', 'first-second', 1, NULL, '2025-03-16 14:25:28'),
(25, 'Riverhead Books', 'riverhead-books', 1, NULL, '2025-03-17 01:14:33'),
(26, 'Simon & Schuster', 'simon-&-schuster', 1, NULL, '2025-03-17 01:17:12'),
(27, 'Hanover Square Press', 'hanover-square-press', 2, NULL, '2025-03-17 01:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2025-03-15 15:19:10', '2025-03-15 15:19:10'),
(2, 'user', 'User', 'User', '2025-03-15 15:19:10', '2025-03-15 15:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@bibliosmia.com', NULL, '$2y$10$JyFQbTcjhtmv4G.fkbKzuuF0ifCCEj4OOAmEqUtpBdBSypJ9M1Xs6', NULL, '2025-03-15 15:19:10', '2025-03-15 15:19:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
