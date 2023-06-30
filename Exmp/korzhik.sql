-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2023 г., 01:25
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `korzhik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `section`, `url`) VALUES
(1, 'Главная страница', 'index.php'),
(2, 'Мой питомец', 'mypet.php'),
(3, 'Ветклиники', 'vet.php'),
(4, 'Объявления', 'wanted.php');

-- --------------------------------------------------------

--
-- Структура таблицы `my_pet`
--

CREATE TABLE `my_pet` (
  `pet_name` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `chip` text NOT NULL,
  `tattoo` text NOT NULL,
  `photo` text NOT NULL,
  `user_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_text` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category`, `title`, `short_text`, `full_text`, `news_image`, `add_date`) VALUES
(1, 'РИА НОВОСТИ', 'В Шереметьево нашелся хозяин брошенной в аэропорту кошки', 'Хозяин кошки, который десять дней назад оставил переноску с питомцем в зоне вылета внутренних рейсов, нашелся, сообщается в официальном Телеграм-канале аэропорта Шереметьево.\r\n', 'Хозяин кошки, который десять дней назад оставил переноску с питомцем в зоне вылета внутренних рейсов, нашелся, сообщается в официальном Телеграм-канале аэропорта Шереметьево.\r\nМужчину зовут Антон, а кошку, которая успела стать звездой воздушного хаба, – Маруся. Также выяснилось, что ей два года.\r\nПока ее хозяин был в путешествии, всю прошлую неделю животное гостило у семьи Акрама, сотрудника камеры хранения аэропорта. За это время кошке успели дать новую кличку – Джесси, а также предлагали сделать символом воздушной гавани.“Владелец кошечки Антон выразил благодарность и приготовил гостинцы для семьи работника, которая взяла животное под временную домашнюю опеку”, – отмечается в посте. Там также добавили, что аэропорт получил более 40 обращений с предложением помощи.\r\nПочему в итоге пассажир улетел без переноски, так и неясно. “Подобные ситуации могут быть предотвращены, если мы вместе примем ответственность за перевозку наших домашних питомцев. Перед путешествием убедитесь, что у вас есть надежный план, и все необходимые формальности соблюдены”, – отмечают представители аэропорта.', 'images/news/sherem.jpg\r\n', '2022-06-16 13:36:48'),
(2, 'Forbes Life', 'Кошки и собаки в доме снижают риски развития пищевой аллергии у детей', 'Контакт с домашними кошками и собаками в младенчестве снижает риск развития пищевой аллергии у детей примерно на 15%, выяснила группа ученых из Японии. ', 'Контакт с домашними кошками и собаками в младенчестве снижает риск развития пищевой аллергии у детей примерно на 15%, выяснила группа ученых из Японии. В частности, у детей, в доме которых жили кошки, реже развивается аллергия на яйца, пшеницу и бобы, а в случае с собаками — аллергия на яйца, молоко и орехи\r\nДети, которые живут с кошками или собаками в младенчестве, могут быть менее склонны к развитию пищевой аллергии, чем другие дети. Об этом сообщает издание The Wall Street Journal со ссылкой на результаты исследования группы японских ученых под руководством доктора Хисао Окабе из Медицинского университета Фукусимы. \r\n\r\nУченые отслеживали воздействие домашних животных на детей от внутриутробного развития до младенчества и измеряли частоту возникновения аллергии. В ходе исследования были проанализированы данные более чем о 66 000 детей до трех лет. Так, согласно результатам, у детей, контактировавших с домашними кошками и собаками с раннего возраста, риск появления пищевой аллергии был снижен примерно на 15% по сравнению с детьми, которые жили в домах без них.', 'images/news/koshki.jpg\r\n', '2022-06-16 13:39:19'),
(3, 'ИЗВЕСТИЯ IZ ', 'Назван порядок действий при встрече дикого животного в лесу', 'Эксперт Лакустова: диких животных могут отпугнуть громкие звуки, музыка и горящий огонь', 'Директор Фонда поддержки и развития природоохранных и других социально-значимых проектов «Наш фонд» Ольга Лакустова рассказал «Известиям», как вести себя при встрече с диким животным в лесу.\r\n\r\nПо словам эксперта, чтобы минимизировать неприятные последствия при встрече с дикими животными, стоит соблюдать некоторые правила. Прежде всего, в лес не стоит ходить одному или же нужно ставить в известность кого-то о своем уходе в лес и примерных сроках возвращения. С собой необходимо иметь средства связи, желательно рацию, поскольку мобильная связь ловит не везде.\r\n\r\nВ лес следует одеваться соответствующим образом. Даже летом необходимо носить сапоги и плотную одежду — она защитит от насекомых и от небольших травм — например, при падении. «Увидев дикое животное, не стоит пытаться пойти с ним на контакт. Здоровые звери не будут нападать первыми, если вы им не угрожаете. Животных могут отпугнуть громкие разговоры, смех, музыка, горящий огонь и т.д. Не двигайтесь слишком быстро. Животное надо всё время держать в поле зрения, но не стоит смотреть ему в глаза. Надо аккуратно и плавно пытаться пятиться назад или отойти в сторону», — посоветовала Лакустова.\r\n\r\nПри встрече с диким кабаном не стоит пытаться от него убежать — животное всё равно окажется быстрее, отмечает эксперт. Самый лучший вариант в этом случае — быстро залезть на дерево.\r\n\r\n«Не преграждайте животному пути отхода. В большинстве своем звери сами вас боятся. Если у животного есть возможность уйти, скорее всего, оно так и сделает. Не надо бросать в животных какие-либо предметы или камни, рычать, кричать на них, размахивать руками и т.д. Это может спровоцировать агрессию», — добавила специалист.\r\n\r\nПри встрече с раненым животным лучше обойти его стороной, так как оно может нанести травмы. Также лучше держаться подальше от детенышей животных. Их родители часто нападают на людей, которые пытаются приблизиться к их потомству.\r\n\r\n«Если вы встретили волка, лося, медведя или оленя, можно попробовать поднять над головой длинную палку — это известный прием, который поможет вам казаться для зверя больше, чем вы есть. Это может его спугнуть», — добавила Лакустова.', 'images/news/wild.jpg', '2022-06-16 16:09:43'),
(4, 'ИЗВЕСТИЯ IZ', 'Бесхозный бык повредил несколько автомобилей в Батайске', 'Бык с оборванным поводком бегал по улицам Батайска Ростовской области вечером в четверг, 8 июня, сообщили местные жители в Telegram. Бесхозное животное сперва гуляло по тротуарам, а потом вышло на дорогу.', 'Бык с оборванным поводком бегал по улицам Батайска Ростовской области вечером в четверг, 8 июня, сообщили местные жители в Telegram. Бесхозное животное сперва гуляло по тротуарам, а потом вышло на дорогу.\r\n\r\n«Судя по всему, животное было не в настроении и повредило много автомобилей», — написал в соцсети очевидец, его цитирует RostovGazeta.\r\n\r\nПо его словам, местным удалось остановить быка. Остается загадкой, как он оказался на улице. В комментариях пользователи написали, что нужно найти хозяина животного и «спросить с него».', 'images/news/moo.jpg', '2023-06-09 10:45:00'),
(5, 'ИЗВЕСТИЯ IZ', 'В Волгограде запустили чат-бот по отлову бродячих собак', 'Администрация Волгограда и региональный комитет ветеринарии создали чат-бот в Telegram по отлову бездомных собак. С его помощью местные жители смогут подать онлайн-заявку на отлов животных, сообщает пресс-служба мэрии.', 'Администрация Волгограда и региональный комитет ветеринарии создали чат-бот в Telegram по отлову бездомных собак. С его помощью местные жители смогут подать онлайн-заявку на отлов животных, сообщает пресс-служба мэрии.\r\n\r\nСервис доступен по адресу @Stray_dog_VLG_bot. Следуя командам бота, пользователи смогут составить обращение. Каждой заявке присвоится номер, который будет автоматически направлен в службу отлова. Статус исполнения заявки горожане также могут уточнить в чат-боте, пишет ИА «НовостиВолгограда.Ру».\r\n\r\n17 мая Госдума приняла в первом чтении поправки в Федеральный закон «Об ответственном обращении с животными». Как пояснили законодатели, изменения помогут расширить права регионов, в которых есть трудности с выполнением требований закона по количеству приютов для бездомных животных.', 'images/news/dogs.jpg', '2022-06-09 10:30:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;