SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magazin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `imgFile` text NOT NULL,
  `text` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `imgFile`, `text`, `amount`) VALUES
(1, 'Yamaha', './1.jpg', 'Гитара известна своим качеством и надёжностью, а также отличным звучанием.', '35 000'),
(2, 'Ibanez ', './2.jpg', 'Универсальность и доступность инструмента, а также инновационный дизайн и технологии .', '28 000'),
(3, 'Fender', './3.jpg', 'Гитара славится своим классическим звучанием и надёжностью, а также стильным дизайном', '43 000'),
(4, 'Epiphone', './4.jpg', 'Гитара сочетает в себе высокое качество и доступную цену', '12 000'),
(5, 'Gibson', './5.jpg', 'Известна своим уникальным звучанием, прочностью и долговечностью, а также стильным дизайном.', '56 000'),
(6, 'Cort', './6.jpg', 'Гитара сочетает в себе высокое качество, доступность и инновационные технологии.', '18 000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
