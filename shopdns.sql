-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2024 г., 20:11
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopdns`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `phonenumber` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `phonenumber`) VALUES
(1, 'Иван', 'dsadas ', '+79146543265'),
(2, 'Иван', 'dsadas ', '+79146543265'),
(3, 'Дмитрий', 'Чё-то тут в общем плохо сделано картинки некрасивые кнопки тож какие-то не оч ну короче чё-т мне не нравится переделывайте давайте вот в общем да как-то так я хейтер мне тут ваще ничё не нравится у конкурентов сайт в разы лучше не то что ваша фигня ', '+7912541234'),
(4, 'Иван', ' выфвыфвыф', '+732195432');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `alias`, `short_description`, `description`, `price`, `image`, `meta_keywords`, `meta_description`, `meta_title`) VALUES
(1, 'Electronic', 'Ноутбук Asus TUF Gaming F15 FX507ZC4-HN009', 'NoutAsus', 'английская/русская раскладка, 1920x1080, IPS, Intel Core i5-12500H, ядра: 4 + 8 х 2.5 ГГц + 1.8 ГГц, RAM 16 ГБ, SSD 512 ГБ, GeForce RTX 3050 для ноутбуков 4 ГБ, без ОС', 'Ноутбук ASUS TUF Gaming F15 FX507ZC4-HN009 с диагональю экрана 15.6\" выполнен в черном алюминиевом корпусе. Это надежная геймерская платформа с процессором Intel Core i5-12500H. Он наделен 4 производительными и 8 энергоэффективными ядрами, поддерживает 16 потоков. За счет этого идет распределение нагрузки, что улучшает производительность системы.\n                                    ASUS TUF Gaming F15 FX507ZC4-HN009 отображает на IPS-экране детализированное изображение в качестве Full HD. При просмотре с разных углов картинка сохраняет четкость цветопередачи. Видеопроцессор GeForce RTX 3050 со встроенной памятью объемом 4 ГБ подходит для профессионального стримминга и игр с передовыми графическими технологиями. Он позволяет получить плавное изображение на дисплее.\n                                    DDR4-память объемом 16 ГБ позволяет обрабатывать одновременно несколько приложений без сбоев и задержек. Она расширяет многозадачность системы, позволяя плавно переключаться между программами. Система охлаждения модели дополнена функцией самоочистки. Это обеспечивает стабильную работу аппарата при любых нагрузках.', 72000.00, 'http://localhost/Web/Content/NoutAsus.jpg', '-', '-', '-'),
(2, 'Electronic', 'Видеокарта NVIDIA RTX 4090 GV-N4090AERO', 'Viduha', 'PCIe 4.0 24 ГБ GDDR6X, 384 бит, 3 x DisplayPort, HDMI, GPU 2235 МГц', 'Видеокарта GIGABYTE GeForce RTX 4090 AERO OC выделяется оформлением в элегантном белом цвете и мощными техническими характеристиками. Благодаря архитектуре NVIDIA Ada Lovelace и скоростной памяти стандарта GDDR6X объемом 24 ГБ достигается высокая производительность в играх с требовательными графическими настройками. Тактовая частота процессора составляет в пределах 2535 МГц в режиме разгона.\n                                    GIGABYTE GeForce RTX 4090 AERO оборудована кулером воздушного охлаждения с тремя вентиляторами, радиатором и тепловыми трубками. Вентиляторы с особой формой крыльчатки создают интенсивный поток воздуха и быстро рассеивают тепло от внутренних компонентов. Вывод изображения на мониторы выполняется посредством четырех разъемов: 3 DisplayPort и 1 HDMI. На задней стороне для повышения стойкости к деформации и повреждениям установлена металлическая пластина. Подсветка RGB предлагает широкие возможности программирования для создания собственного игрового стиля.', 50000.00, 'http://localhost/Web/Content/Viduha.jpg', '-', '-', '-'),
(3, 'Electronic', 'Телевизор Samsung UE50DU7100UXRU', 'Telek', 'Edge LED, Crystal UHD, 4K UltraHD, Wi-Fi, 60 Гц, Tizen, HDMI х 3, USB х 1 шт', 'LED-телевизор Samsung UE50DU7100UXRU обеспечивает детализированное изображение на 50-дюймовом экране Crystal UHD с разрешением 3840x2160 пикселей. Технология HDR10 гарантирует четкость в темных сценах и различимость объектов при ярком свете. За точную передачу цветовой палитры отвечает технология PurColor. Функция Motion Xcelerator гарантирует плавную смену кадров при отображении динамичного изображения. Акустическая система выходной мощностью 20 Вт с технологией Dolby Digital Plus наполняет пространство комнаты объемным звучанием.\n                                    Телевизор Samsung UE50DU7100UXRU работает под управлением ОС Tizen. Платформа Smart TV предоставляет доступ к потоковым сервисам фильмов, сериалов, музыки и другого развлекательного контента. Для беспроводного подключения к сети Интернет предусмотрен модуль Wi-Fi.', 59999.00, 'http://localhost/Web/Content/Telek.jpg', '-', '-', '-'),
(4, 'Home', 'Стиральная машина Hotpoint-Ariston WD 8548 C7S', 'Hotpoint', 'стирка - 8 кг, сушка - 5 кг, фронтальная загрузка, отжим - 1400 об/мин, программ - 15, пар, 56 дБ, 60 см x 84 см x 52.5 см - 58 см', 'Стирально-сушильная машина Hotpoint WD 8548 C7S VBW позаботится о чистоте вещей и по завершению стирки активирует процесс сушки. Внутренний барабан предусматривает загрузку до 8 кг белья. Модель оснащена 15 автоматическими программами на выбор. Технология обработки паром помогает освежать ткани, избавляться от аллергенов и неприятных запахов, а также уменьшать количество складок.\n                                    Hotpoint WD 8548 C7S VBW оснащена сенсорной панелью с информативным цифровым дисплеем. По завершению программы подается звуковой сигнал, который оповещает о возможности извлечения вещей. Технология Bluetooth предусматривает беспроводную синхронизацию со смартфоном и удаленное управление через приложение HomeWhiz. С помощью таймера отложенного запуска можно запрограммировать определенное время начала работы. Система автоматического баланса помогает равномерно распределять вещи перед отжимом и во время сушки для достижения эффективного результата.', 52999.00, 'http://localhost/Web/Content/Hotpoint.jpg', '-', '-', '-'),
(5, 'Home', 'Холодильник Candy CCRN 6200 S серебристый', 'Holodos', '157 л, внешнее покрытие-металл, размораживание - ручное, 47.4 см х 144 см х 49.5 см', 'Отдельностоящий двухкамерный холодильник с нижним расположением морозильной камеры и с системой No Frost. Встроенная ручка эргономична и функциональна, превосходно вписана под закругленные очертания двери и дает прибору более мягкий внешний вид и удобна в использовании', 49999.00, 'http://localhost/Web/Content/Holodos.jpg', '-', '-', '-'),
(6, 'Home', 'Кофемашина сенсорная Thomson CF20M01', 'Kofe', 'исп. кофе - зерновой, молотый, 1450 Вт, 1.8 л', 'Кофемашина Thomson CF20M01 – компактный и функциональным прибор с интуитивно простым сенсорным управлением. Дисплей дополнен набором индикаторов для контроля за состоянием машины и этапами готовки. Система знает 3 рецепта кофе, дополняется ручным капучинатором и встроенной кофемолкой с пятью степенями помола.\n                                    Прибор Thomson CF20M01 оснащен мощным термоблоком и помпой с давлением 19 бар, контейнерами для воды и отходов, емкостью для 150 г зерен. Съемный лоток для капель поможет всегда содержать рабочее место в чистоте. Вы сами выбираете крепость и объем напитка, можете перед готовкой смочить зерна и долить в чашку кипяток.', 52999.00, 'http://localhost/Web/Content/Kofe.jpg', '-', '-', '-');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `passwordhash` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `phonenumber` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `lastname`, `name`, `surname`, `login`, `passwordhash`, `mail`, `phonenumber`) VALUES
(14, 'aaaa', 'aaaa', 'aaaa', 'aaaa', '$2y$10$yx2Xf0Y4ycOXL012SdQ.ueG5i5z6eR8Qb2QmZdjzhAf3mFXVISy6y', 'dsa@mail.ru', '+79125168023'),
(5, 'd', 'd', 'd', 'd', '$2y$10$P8cm6M9RxFpZnhvFlTuB0.eAG976PJq4D9qVhi6Ni2QtaBQONxaRm', 'dsa@mail.ru', '+79125168023'),
(7, 'Иванов', 'Иван', 'Олегович', 'Pyro', '$2y$10$y01LzDaWZvJTZhovYruMg.kmK/ALeSaULMxhnDjxFxQOFYldxrXIq', 'dsa@mail.ru', '+79125168026'),
(9, 'd', 'd', 'd', 'ds', '$2y$10$rv74QekZ2S6T4lDkLtBHTuh0z0dYUkFDdE0N3oaKN1UKmVeINWjFS', 'dsa@mail.ru', 'd'),
(10, 'dsa', 'dsa', 'dsa', 'dsa', '$2y$10$hKSN6jyLeIyUqSjbtbJKPe8qm85/gQEZnwz6vtE2FBYGmTdTK1I/q', 'dsa@mail.ru', '+793213216'),
(11, 'd', 'd', 'd', 'da', '$2y$10$hyRZpZDqrqTF0YxMZjqfZu4nHFJGgJDqX9kj2MDIDToYbOIeBRz0W', 'dsa@mail.ru', '+79125168023'),
(12, 'ddd', 'ddd', 'ddd', 'ddd', '$2y$10$poY7NA8sJ95mWs3csh2PqeFcmLKaVfG2SJm4gIwX/RcpZtp2.Uu7K', 'dsa@mail.ru', 'ddd'),
(13, 'dddd', 'dddd', 'dddd', 'dddd', '$2y$10$YYiOfdLIKQhEqAZ0.Xut6endfsDq0pQvOhp./T2vLfiBeQ99jqqZq', 'dsa@mail.ru', 'dddd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
