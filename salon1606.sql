-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 30 2022 г., 11:20
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `salon1606`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `ID_U` int(11) NOT NULL,
  `FIO` varchar(200) NOT NULL,
  `PHONE` varchar(100) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`ID`, `ID_U`, `FIO`, `PHONE`, `mail`) VALUES
(1, 2, 'Светлова Настя', '8-958-744-64-22', 'svetlova@hgmail.com'),
(2, 3, 'Брокво Вика', '8-928-747-25-52\r\n', 'brobko20@gmail.com'),
(3, 4, 'Зайкина Екатерина', '8-927-453-45-61', 'zikina777@gmail.com'),
(4, 5, 'Александра Земина', '8-938-121-91-31', 'zemalex@mail.com'),
(5, 6, 'Федечкина Валерия', '8-928-747-14-12', 'fedechval@gmail.com'),
(6, 6, 'фролова Настя', '8-960-145-14-51', 'asdf@wwer'),
(7, 7, 'Вероника', '8-928-141-25-42', 'dref@mail.com'),
(8, 8, 'Марченко Аля', 'Марченко Иля', '');

-- --------------------------------------------------------

--
-- Структура таблицы `detali_o`
--

CREATE TABLE `detali_o` (
  `ID` int(11) NOT NULL,
  `ID_O` int(11) NOT NULL,
  `ID_U` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `ID_P` int(11) NOT NULL DEFAULT '1',
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `detali_o`
--

INSERT INTO `detali_o` (`ID`, `ID_O`, `ID_U`, `PRICE`, `ID_P`, `COMMENT`) VALUES
(1, 1, 18, 3000, 0, ''),
(2, 1, 20, 2500, 0, ''),
(3, 7, 18, 3000, 0, ''),
(4, 7, 114, 4000, 1, ''),
(5, 7, 11, 250, 1, ''),
(6, 8, 11, 2500, 1, ''),
(7, 8, 29, 3000, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `grup_u`
--

CREATE TABLE `grup_u` (
  `ID_GR` int(11) NOT NULL,
  `ID_V` int(11) NOT NULL,
  `NAME_GR` varchar(200) NOT NULL,
  `DESC` text NOT NULL,
  `FOTO` varchar(250) NOT NULL,
  `CENA_GR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `grup_u`
--

INSERT INTO `grup_u` (`ID_GR`, `ID_V`, `NAME_GR`, `DESC`, `FOTO`, `CENA_GR`) VALUES
(1, 5, 'Архитектура бровей', 'Коррекция формы и окрашивание бровей, коррекция мужских бровей', 'services-arhitektura.jpg', 500),
(6, 1, 'Перманентный макияж', 'Перманент бровей, волосковая техника, мягкая растушевка, перманент губ, стрелки', 'services-permanent.jpg', 1500),
(7, 5, 'Наращиваине ресниц', 'Наращивание ресниц объемом 1,5, 2D, 3D, 5D (голливудское)', 'services-lashes-nara.jpg', 1000),
(8, 1, 'Химический пилинг', 'стимулируют выработку в тканях коллагена, эластина и гиалуроновой кислоты', 'services-smas-liftin.jpg', 2500),
(9, 1, 'Чистка лица и тела', 'Ультразвуковая чистка, механическая, комбинированная чистка лица и тела', 'services-chistka-lit.jpg', 1200),
(10, 1, 'Косметический массаж лица', 'Омоложение кожи, избавление от второго подбородка, выравнивание рельефа', 'services-kosmetiches.jpg', 700),
(12, 4, 'Депиляция воском', '', '', 100),
(13, 4, 'Шугаринг', '', '', 200),
(14, 2, 'Микроблейдинг', '', '', 4000),
(15, 3, 'Классический массаж', '', '', 550),
(16, 3, 'Антицеллюлитный массаж', '', '', 900),
(17, 4, 'СПА Обертывание', '', '', 2000),
(18, 4, 'Комлексное СПА', '', '', 2600),
(19, 5, 'Ламинирование и окраска ресниц', 'Ламинирование ресниц Sexy Lashes, ботокс для ресниц, биозавивка, окрашивание', 'services-laminirovan.jpg', 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `masser`
--

CREATE TABLE `masser` (
  `ID` int(11) NOT NULL,
  `ID_P` int(11) NOT NULL,
  `ID_G` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `masser`
--

INSERT INTO `masser` (`ID`, `ID_P`, `ID_G`) VALUES
(1, 3, 1),
(2, 3, 6),
(3, 3, 7),
(4, 3, 9),
(5, 3, 19),
(6, 7, 1),
(7, 7, 7),
(8, 7, 6),
(9, 6, 8),
(10, 6, 9),
(11, 8, 6),
(12, 2, 8),
(13, 2, 10),
(14, 2, 14),
(15, 4, 10),
(16, 4, 13),
(17, 4, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `order_st`
--

CREATE TABLE `order_st` (
  `ID_s` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_st`
--

INSERT INTO `order_st` (`ID_s`, `NAME`) VALUES
(1, 'Новый'),
(2, 'Обработан'),
(3, 'Отмена'),
(4, 'Исполнен');

-- --------------------------------------------------------

--
-- Структура таблицы `order_u`
--

CREATE TABLE `order_u` (
  `ID_O` int(11) NOT NULL,
  `num` varchar(50) NOT NULL,
  `ID_U` int(11) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `FIO` varchar(200) NOT NULL,
  `DATA_VISIT` datetime NOT NULL,
  `DATA_F` date NOT NULL,
  `COST` double NOT NULL,
  `COMMENT` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_u`
--

INSERT INTO `order_u` (`ID_O`, `num`, `ID_U`, `PHONE`, `mail`, `FIO`, `DATA_VISIT`, `DATA_F`, `COST`, `COMMENT`, `status`) VALUES
(1, '22061161300', 6, '8-928-747-14-12', '', 'Федечкина Валерия', '2022-06-18 13:00:00', '2022-06-16', 5000, '', 2),
(2, '22061181114', 2, '8-958-744-64-22', '', 'Светлова Настя', '2022-06-19 17:00:00', '2022-06-18', 8000, '', 2),
(3, '202206181800', 8, '8-928-177-55-43', '', 'Марченко Иля', '2022-06-28 10:00:00', '2022-06-18', 5000, '', 2),
(4, '202206191116', 3, '8-928-747-25-52', '', 'Брокво Вика', '2022-06-21 15:00:00', '2022-06-19', 8000, '', 3),
(5, '202206191214', 4, '8-927-453-45-61', '', 'Зайкина Екатерина', '2022-06-28 17:00:00', '2022-06-19', 4000, '', 1),
(6, '22061191312', 5, '8-927-453-45-61', '', 'Александра Земина', '2022-06-29 16:00:00', '2022-06-19', 8000, '', 1),
(7, '202206201214', 7, '8-928-141-25-42', '', 'Вероника', '2022-06-25 17:00:00', '2022-06-20', 7250, '', 1),
(8, '2022062913', 7, '8-928-141-25-42', '', 'Вероника В', '2022-06-29 13:00:00', '2022-06-27', 3000, '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `TITILE` text NOT NULL,
  `CATEGORIA` varchar(256) NOT NULL,
  `TEXT` text NOT NULL,
  `FOTO` varchar(255) NOT NULL,
  `PAGE_S` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`ID`, `TITILE`, `CATEGORIA`, `TEXT`, `FOTO`, `PAGE_S`) VALUES
(1, 'Уходовые процедуры  со скидкой -20%', 'Акции', 'Уходовые процедуры по лицу на продуктах компании iS Clinical со скидкой -20%.Ознакомиться с услугами и прайсом вы можете на странице косметологии.', 's1.jpg', 'main'),
(2, 'Аппаратный массаж -10%', 'Акции', 'Только в нашем салоне по адресу. Эффективная и безопасная методика борьбы с целлюлитом и отечностью на аппарате R-Sculptor. Минус 5 см в объеме талии', 's2.webp', 'main'),
(3, 'Консультация косметолога бесплатно', 'Акции', 'Первая консультация косметолога бесплатно. Ознакомиться с услугами и прайсом вы можете на странице косметологии.', 's3.webp', 'main');

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE `persons` (
  `ID_P` int(11) NOT NULL,
  `FIO` varchar(155) NOT NULL,
  `SPECALIZ` varchar(2000) NOT NULL,
  `LICH_DAN` varchar(2000) NOT NULL,
  `FOTO` varchar(25) NOT NULL,
  `PAGE_S` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`ID_P`, `FIO`, `SPECALIZ`, `LICH_DAN`, `FOTO`, `PAGE_S`) VALUES
(2, 'Корунина Анна ', 'Врач-косметолог ', 'Закончив университет по специальности «Педиатрия»- Анна сразу приступила к работе по своей специальности. 6 лет набиралась управленческого опыта, работав в центре красоты заместителем директора!', 'per.webp', 'main'),
(3, 'Краснова Елена ', 'Косметолог-эстетист ', 'Благодаря своей любви к творчеству Юлия уже 5 лет активно работает в этой сфере!  Курс базового обучения авторским методикам работы с препаратами бренда HL лаборатории Pharma Cosmetics (Израиль)', 'pers6.jpg', 'main'),
(4, 'Орлова Елизавета ', 'Врач-дерматокосметолог', 'Более 5 лет работы с профессионалами. Сертификаты об окончании курсов повышения кваоификации!', 'i1.jpg', 'main'),
(6, 'Филиппова Лариса', 'Врач-дерматокосметолог', 'Cертифицированный специалист по буккальному массажу. Знает все базовые и продвинутые методики. Токарев Игорь Анатольевич - сертифицированный мастер массажа! Более 7 лет опыта! Настоящий специалист своего дела', 'kos3.png', 'main'),
(7, 'Север Ольга ', 'Косметолог-эстетист ', 'Косметолог, сертифицированный специалист по плазмолифтингу, мезотерапии, биоревитализации, контурной пластике. Прошла обучение в Москве и получила удостоверение о повышении квалификации по актуальным вопросам озонотерапии. ', 'roza.jpg', ''),
(8, 'Казанцева Ирина ', 'Косметолог-эстетист ', 'Ирина разносторонний человек. Мастер высшего разряда. Обладатель наград.', 'per1.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `MAIL` varchar(200) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'user',
  `data_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `MAIL`, `PHONE`, `role`, `data_reg`) VALUES
(1, 'admin', '$2y$10$CFTneGhBTLZSZOVHh3psZOYvvLMH/T4P2PpG0pA9.RwvbqBuPNCGO', '', '', 'admin', '0000-00-00'),
(2, 'user1', '$2y$10$Gzz2oCpqKV1nQKLC00cTV.GJGgUyWhZ636vswK8JSZ80349AlMejG', 'hhh@hhh.ttttt', '', 'user', '2022-06-22'),
(3, 'user2', '$2y$10$Gzz2oCpqKV1nQKLC00cTV.GJGgUyWhZ636vswK8JSZ80349AlMejG', 'fdasfd@ggg.ru', '4523452525', 'user', '0000-00-00'),
(4, 'user3', '$2y$10$Gzz2oCpqKV1nQKLC00cTV.GJGgUyWhZ636vswK8JSZ80349AlMejG', 'hrtherth@fff.ru', '25634563456', 'user', '0000-00-00'),
(5, 'user4', ' 1111111', 'ddfgsdfgsg@errr.rr', '4256245', 'user', '0000-00-00'),
(6, 'user5', '111111', 'fgjfg@sfd.ru', '454573', 'user', '0000-00-00'),
(7, 'serman', '$2y$10$Gzz2oCpqKV1nQKLC00cTV.GJGgUyWhZ636vswK8JSZ80349AlMejG', 'wetert@sdfasd', '5413451', 'user', '2022-06-01'),
(8, 'user7', '111111', 'fsdgsdf@ddd', '2341234', 'user', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `ID` int(11) NOT NULL,
  `ID_GR` int(11) NOT NULL,
  `USLUGA` varchar(200) NOT NULL,
  `KOMMENT` varchar(255) NOT NULL,
  `CENA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`ID`, `ID_GR`, `USLUGA`, `KOMMENT`, `CENA`) VALUES
(1, 1, 'Коррекция формы бровей', 'Коррекция бровей позволяет получить ухоженные, выразительные и симметричные брови. По желанию коррекцию бровей можно совместить с перманентным макияжем. ', 500),
(2, 1, 'Окрашивание бровей краской', ' Форма и цвет бровей подбираются под тип кожи, овал лица и индивидуальные особенности.', 500),
(3, 1, ' Окрашивание бровей хной', 'Окрашиваине происходит природным материалом для чувствительной кожи. Форма и цвет бровей подбираются под тип кожи, овал лица и индивидуальные особенности. ', 600),
(4, 1, 'Архитеутура бровей (хна/краска)', ' Перед сеансом косметолог определит оптимальную форму бровей с учетом вашего типа лица, индивидуальных особенностей и пожеланий. ', 800),
(11, 9, 'Скраб для лица', ' Скрабы предназначены для очищения кожи от ороговевшего эпидермиса, её тонизирования. ', 250),
(12, 9, 'Демакияж', 'Очищение кожи лица ', 250),
(13, 7, 'Наращивание ресниц 2D', 'Поресничное ', 2250),
(14, 7, 'Наращивание ресниц 3D', 'Поресничное ', 3500),
(15, 7, ' Наращивание ресниц ', 'Пучковое ', 1000),
(16, 7, 'Коррекция наращеных ресниц ', ' ', 1250),
(17, 7, 'Снятие наращенных ресниц', ' ', 550),
(18, 6, 'Брови мягкая растушевка', ' ', 3000),
(19, 6, 'Брови волосковая техника', ' ', 3000),
(20, 19, 'Ламинирование ресниц', ' ', 2500),
(21, 19, 'Ботокс ресниц', ' ', 1000),
(22, 8, 'Фруктовый пилинг', ' ', 1050),
(23, 8, 'Каралловый пилинг', ' ', 2250),
(24, 8, 'Молочный пилинг', ' ', 1500),
(25, 9, 'Механическая чистка лица импортной косметикой', 'Состав процедуры: демакияж, распаривающий гель, чистка, себоконтрольная поросужающая маска, крем', 2250),
(26, 9, 'Ультрозвуковая чистка лица импортной косметикой', 'Состав процедуры: демакияж, распаривающий гель, чистка, себоконтрольная поросужающая маска, крем', 2500),
(27, 9, 'Чистка лица COMODEX', ' ', 1250),
(28, 10, 'Массаж лица классический', 'длительность 20-25 минут', 550),
(29, 10, 'Массаж лица пластический', 'длительность 20-25 минут', 600),
(30, 10, 'Массаж лица лимфодренажный', 'длительность 20-25 минут', 650),
(31, 10, 'Массаж лица буккальный', 'длительность 60 минут', 2550),
(32, 12, 'Подмышечных впадин', ' ', 250),
(33, 12, 'Бикини', ' ', 1250),
(34, 12, 'Ног до клен', ' ', 550),
(35, 12, 'Ног до бедра', ' ', 950),
(36, 12, 'Рук', ' ', 750),
(37, 13, 'Подмышечных впадин', ' ', 450),
(38, 13, 'Бикини', ' ', 1500),
(39, 13, 'Ног до клен', ' ', 750),
(40, 13, 'Ног до бедра', ' ', 1450),
(41, 13, 'Рук', ' ', 850),
(42, 14, 'Брови', 'Волосковая техника ', 5550),
(43, 14, 'Ьежресничный микроблейдинг', ' ', 4250),
(44, 14, 'Стрелки', ' ', 4250),
(45, 14, 'Контура губ', ' ', 5050),
(46, 15, 'Массаж головы', 'Длительность 20 минут ', 550),
(47, 15, 'Массаж шейно-воротникой зоны', 'Длительность 20 минут ', 650),
(48, 15, 'Массаж спины', 'Длительность 30 минут ', 1050),
(49, 15, 'Массаж лимфодренажный', 'Длительность 90 минут ', 2550),
(50, 16, 'Массаж анитцеллюлитный', 'Длительность 30 минут, не более двух зон ', 950),
(106, 15, 'Массаж лимфодренажный', 'Длительность 90 минут ', 2550),
(107, 16, 'Массаж анитцеллюлитный', 'Длительность 30 минут, не более двух зон ', 950),
(108, 16, 'Массаж антицеллюлитный (бедра, ягодицы, живот)', 'Длительность 50 минут ', 1550),
(109, 17, 'Водорослевое ', 'Длительность 60 минут ', 2050),
(110, 17, 'Шоколадное ', 'Длительность 60 минут ', 2050),
(111, 17, 'Медовое', 'Длительность 60 минут ', 2050),
(112, 18, 'Комплексное 1', 'Длительность 120 минут. Обертывание (шоколад/ мед), релакс массж, пилинг ', 2550),
(113, 18, 'Комплексное 2', 'Длительность 120 минут. Обертывание (водоросли), релакс массж, пилинг ', 2550),
(114, 6, 'Стрелки верхнее веко', '', 4000),
(115, 6, 'Стрелки нижние веко', '', 3000),
(116, 6, 'Контур губ без растушевки', '', 3000),
(117, 6, 'Контур губ с растушевкой', '', 5000),
(118, 8, 'Поверхностные пилинг (лицо +шея)', ' (отшелушивание, разглаживание, уменьшение пигментации)', 2500),
(119, 8, 'Пилинг GiGi: TCA 15%;\r\nСрединные (КAVA / Medic Peel)', '', 4000),
(120, 8, 'ENERPEEL EL (пилинг вокруг глаз)', '', 4000);

-- --------------------------------------------------------

--
-- Структура таблицы `vid_uslug`
--

CREATE TABLE `vid_uslug` (
  `ID_U` int(11) NOT NULL,
  `VID_U` varchar(255) NOT NULL,
  `FOTO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid_uslug`
--

INSERT INTO `vid_uslug` (`ID_U`, `VID_U`, `FOTO`) VALUES
(1, 'Эстетическая косметология', 'services-arhitektura.jpg'),
(2, 'Аппаратная косметология', 'services-chistka-lit.jpg'),
(3, 'Массаж и СПА-процедуры', 'services-massage.jpg'),
(4, 'Эпиляция и депиляция', 'price-laser-woman.jpg'),
(5, 'Брови и ресницы', 'services-laminirovan.jpg'),
(8, 'Ногтевой сервис', 'services-instagram-m.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `ID_W` int(11) NOT NULL,
  `ID_V` int(11) NOT NULL,
  `FOTO` varchar(25) NOT NULL,
  `TEXT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`ID_W`, `ID_V`, `FOTO`, `TEXT`) VALUES
(1, 8, '1.jpeg', 'Контурная пластика носогубных складок - инъекционный метод, основанный на введение в область носогубных складок специальных филлеров. Разглаживает носогубные складки, восстанавливает скульптурные контуры лица. '),
(2, 8, '2.jpeg', 'Контурная пластика - метод коррекции черт лица с помощью инъекций гиалуроновой кислоты. Восстанавливает скульптурные линии лица, выравнивает глубокие морщины, корректирует очертания губ. Эффект наступает практически сразу же после сеанса, а результат сохр'),
(3, 8, '3.jpeg', 'Контурная пластика овала лица основана на введении под кожу филлеров с гиалуроновой кислотой. Корректирует овал лица, разглаживает морщины, устраняет ассиметрию, запускает процесс естественного омоложения. Процедура проводится однократно, результат держит'),
(4, 8, '4.jpeg', 'Контурная пластика губ - инъекционный метод, основанный на введение в кожу губ специальных филлеров с гиалуроновой кислотой. Придает губам красивые очертания, увеличивает объем, разглаживает морщинки, устраняет ассиметрию. '),
(5, 8, '5.jpeg', 'Инъекционный метод, основанный на использовании специальных филлеров. Восстанавливает овал лица, устраняет возрастные изменения, улучшает состояние кожи. '),
(6, 13, 'Shutar/1.jpeg', 'Шугаринг – это современный способ удаления нежелательных волос на теле. Это вид депиляции, в котором для удаления волос используется сахарная паста. В состав пасты входят натуральные и безопасные компоненты: вода, сахар и лимонная кислота. '),
(7, 13, 'Shutar/2.jpeg', 'Шугаринг быстро удаляет нежелательные волосы на всем теле, придает коже моментальную гладкость и блеск, а эффект сохраняется до 4-х недель. '),
(8, 13, 'Shutar/2.jpeg', 'Внимательно изучите противопоказания. '),
(9, 5, 'Nar_res/1.jpeg', 'Наращивание ресниц — безопасная и эффективная косметическая процедура, увеличивающая естественные объем и длину ресниц за счет использования натуральных или синтетических материалов. '),
(10, 5, 'Nar_res/2.jpeg', 'Густые, длинные и пышные ресницы подчеркивают выразительность и глубину взгляда, придавая особое очарование. '),
(11, 1, 'Kor_br/1.jpeg', 'Коррекция бровей позволяет получить ухоженные, выразительные и симметричные брови. '),
(12, 1, 'Kor_br/2.jpeg', 'Форма и цвет бровей подбираются под тип кожи, овал лица и индивидуальные особенности. '),
(13, 1, 'Kor_br/3.jpeg', 'Всего за одно посещение наши мастера создадут новую форму бровей, придадут им подходящий оттенок, а также исправят некачественные предыдущие корректировки. '),
(14, 1, 'Kor_br/4.jpeg', 'По желанию коррекцию бровей можно совместить с перманентным макияжем. '),
(15, 1, 'Kor_br/5.jpeg', 'Перед сеансом косметолог определит оптимальную форму бровей с учетом вашего типа лица, индивидуальных особенностей и пожеланий. '),
(16, 2, 'Maski_fase/1.jpeg', 'Маски для лица оказывают увлажняющее, омолаживающее, противовоспалительное, общеукрепляющее, тонизирующее воздействие, особенно выражен их лифтинговый эффект. '),
(17, 2, 'Maski_fase/2.jpeg', 'Благодаря использованию масок для лица подтягивается кожа, сужаются поры, повышается естественный тонус кожи, улучшается ее цвет. '),
(18, 2, 'Maski_fase/3.jpeg', 'Для каждого типа кожи нужна своя, особенная питательная маска, и правильно её подобрать может только профессионал. '),
(19, 2, 'Maski_fase/4.jpeg', 'Эффект наступает: после первой процедуры. Для его закрепления рекомендуется регулярное применение масок. '),
(20, 2, 'Maski_fase/5.jpeg', 'Противопоказания: Заболевания кожи; Повреждения и воспаления кожного покрова лица и шеи; Непереносимость компонентов. ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_U` (`ID_U`);

--
-- Индексы таблицы `detali_o`
--
ALTER TABLE `detali_o`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_O` (`ID_O`);

--
-- Индексы таблицы `grup_u`
--
ALTER TABLE `grup_u`
  ADD PRIMARY KEY (`ID_GR`),
  ADD KEY `ID_V` (`ID_V`);

--
-- Индексы таблицы `masser`
--
ALTER TABLE `masser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_G` (`ID_G`),
  ADD KEY `ID_P` (`ID_P`);

--
-- Индексы таблицы `order_st`
--
ALTER TABLE `order_st`
  ADD PRIMARY KEY (`ID_s`);

--
-- Индексы таблицы `order_u`
--
ALTER TABLE `order_u`
  ADD PRIMARY KEY (`ID_O`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ID_P`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_GR` (`ID_GR`);

--
-- Индексы таблицы `vid_uslug`
--
ALTER TABLE `vid_uslug`
  ADD PRIMARY KEY (`ID_U`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`ID_W`),
  ADD KEY `ID_V` (`ID_V`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `detali_o`
--
ALTER TABLE `detali_o`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `grup_u`
--
ALTER TABLE `grup_u`
  MODIFY `ID_GR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `masser`
--
ALTER TABLE `masser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `order_st`
--
ALTER TABLE `order_st`
  MODIFY `ID_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order_u`
--
ALTER TABLE `order_u`
  MODIFY `ID_O` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `persons`
--
ALTER TABLE `persons`
  MODIFY `ID_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT для таблицы `vid_uslug`
--
ALTER TABLE `vid_uslug`
  MODIFY `ID_U` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `ID_W` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`ID_U`) REFERENCES `users` (`ID`);

--
-- Ограничения внешнего ключа таблицы `detali_o`
--
ALTER TABLE `detali_o`
  ADD CONSTRAINT `detali_o_ibfk_1` FOREIGN KEY (`ID_O`) REFERENCES `order_u` (`ID_O`);

--
-- Ограничения внешнего ключа таблицы `grup_u`
--
ALTER TABLE `grup_u`
  ADD CONSTRAINT `grup_u_ibfk_1` FOREIGN KEY (`ID_V`) REFERENCES `vid_uslug` (`ID_U`);

--
-- Ограничения внешнего ключа таблицы `masser`
--
ALTER TABLE `masser`
  ADD CONSTRAINT `masser_ibfk_1` FOREIGN KEY (`ID_G`) REFERENCES `grup_u` (`ID_GR`),
  ADD CONSTRAINT `masser_ibfk_2` FOREIGN KEY (`ID_P`) REFERENCES `persons` (`ID_P`);

--
-- Ограничения внешнего ключа таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD CONSTRAINT `uslugi_ibfk_1` FOREIGN KEY (`ID_GR`) REFERENCES `grup_u` (`ID_GR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;