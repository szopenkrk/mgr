-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: mysql5:3306
-- Czas wygenerowania: 22 Kwi 2013, 01:18
-- Wersja serwera: 5.5.29-MariaDB
-- Wersja PHP: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `akopec_karol`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `area_of_interest`
--

CREATE TABLE IF NOT EXISTS `area_of_interest` (
  `id_areaofintrest` int(11) NOT NULL AUTO_INCREMENT,
  `content_areaofintrest` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  PRIMARY KEY (`id_areaofintrest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id_attachments` int(11) NOT NULL AUTO_INCREMENT,
  `content_attachments` text COLLATE utf8_unicode_ci NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_attachments`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id_author` int(11) NOT NULL AUTO_INCREMENT,
  `autor_name` text COLLATE utf8_unicode_ci NOT NULL,
  `id_work` text COLLATE utf8_unicode_ci NOT NULL,
  `id_area_of_intrest` text COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  PRIMARY KEY (`id_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `change`
--

CREATE TABLE IF NOT EXISTS `change` (
  `id_change` int(255) NOT NULL,
  `change_date` date NOT NULL,
  `change_content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  PRIMARY KEY (`id_change`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `conference`
--

CREATE TABLE IF NOT EXISTS `conference` (
  `id_conference` int(11) NOT NULL AUTO_INCREMENT,
  `date_conference` date NOT NULL,
  `title_conference` text COLLATE utf8_unicode_ci NOT NULL,
  `place_conference` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user_cd` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  PRIMARY KEY (`id_conference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `id_editor` int(11) NOT NULL AUTO_INCREMENT,
  `name_editor` int(255) NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  PRIMARY KEY (`id_editor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ereviews`
--

CREATE TABLE IF NOT EXISTS `ereviews` (
  `id_ereviews` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(255) NOT NULL,
  `id_review` int(11) NOT NULL,
  PRIMARY KEY (`id_ereviews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id_keywords` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(11) NOT NULL,
  `id_work_version` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `content_keywords` int(255) NOT NULL,
  PRIMARY KEY (`id_keywords`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(255) NOT NULL,
  `note_content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_review` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_note`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id_person` int(255) NOT NULL,
  `name_person` text COLLATE utf8_unicode_ci NOT NULL,
  `surname_person` text COLLATE utf8_unicode_ci NOT NULL,
  `mail_person` text COLLATE utf8_unicode_ci NOT NULL,
  `status_person` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int(11) NOT NULL,
  `date_review` date NOT NULL,
  `id_work` text COLLATE utf8_unicode_ci NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reviewer`
--

CREATE TABLE IF NOT EXISTS `reviewer` (
  `id_reviewer` int(11) NOT NULL DEFAULT '0',
  `id_areaofinterest` int(255) NOT NULL,
  `id_e-reviewer` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_reviewer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `review_editor`
--

CREATE TABLE IF NOT EXISTS `review_editor` (
  `id_revieweditor` int(255) NOT NULL,
  `send` tinyint(1) NOT NULL,
  `inreview` tinyint(1) NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `id_review` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL,
  PRIMARY KEY (`id_revieweditor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(255) NOT NULL,
  `role` text COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id_schedule` int(11) NOT NULL,
  `conference_schedule` text COLLATE utf8_unicode_ci NOT NULL,
  `id_conference` int(11) NOT NULL,
  `id_speaker` int(11) NOT NULL,
  PRIMARY KEY (`id_schedule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `speaker`
--

CREATE TABLE IF NOT EXISTS `speaker` (
  `id_speaker` int(255) NOT NULL,
  `speaker_work` text COLLATE utf8_unicode_ci NOT NULL,
  `speaker_name` text COLLATE utf8_unicode_ci NOT NULL,
  `speaker_surname` text COLLATE utf8_unicode_ci NOT NULL,
  `speaker_place` text COLLATE utf8_unicode_ci NOT NULL,
  `speaker_mail` text COLLATE utf8_unicode_ci NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_conference` int(11) NOT NULL,
  PRIMARY KEY (`id_speaker`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `speaker_work`
--

CREATE TABLE IF NOT EXISTS `speaker_work` (
  `id_speaker_work` int(255) NOT NULL,
  `date_cd` date NOT NULL,
  `id_speaker` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `speaker_content_work` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_speaker_work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_work`
--

CREATE TABLE IF NOT EXISTS `type_of_work` (
  `id_type_of_work` int(11) NOT NULL AUTO_INCREMENT,
  `value_type_of_work` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_type_of_work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Karol', 'karol', 'karol@system.pl', 'karol@system.pl', 1, 'j7vnwpzvb94wwg4kko4gk4ok0w0ww4w', 'aoktD3626lgwx4GzoBc34Pd0iDjgRZhGypD+gg3F3MuAEmXzw/IbpPkmtFXrfb0FCkQK+329VT2DJJ6l87xOFA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'testowy2', 'testowy2', 'testowy2@test.pl', 'testowy2@test.pl', 1, 'qik1qe12yy8skg4s44o8g8g4wwc4ccs', 'q47rttFBhlKnrnRiLkDxnnc1DimJhvPWF20jZl7aLjg4BY+nR8ZM73f5nfJstnGU28tdfVGB8CGPjflX1yG6sA==', '2013-04-22 01:17:58', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_old`
--

CREATE TABLE IF NOT EXISTS `user_old` (
  `id_user` int(255) NOT NULL DEFAULT '0',
  `user_login` text COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(255) NOT NULL,
  `user_admin` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `user_old`
--

INSERT INTO `user_old` (`id_user`, `user_login`, `user_password`, `user_email`, `user_status`, `id_role`, `user_admin`) VALUES
(0, 'Karol', 'karolkarol1', '', '', 0, ''),
(1, 'testowy2', 'test', '', '', 2, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id_user_role` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_role` int(255) NOT NULL,
  PRIMARY KEY (`id_user_role`),
  KEY `id_user` (`id_user`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_work`
--

CREATE TABLE IF NOT EXISTS `user_work` (
  `id_user_work` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  PRIMARY KEY (`id_user_work`),
  KEY `id_user` (`idUser`),
  KEY `id_work` (`id_work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id_work` int(255) NOT NULL DEFAULT '0',
  `work_date` date NOT NULL,
  `content_work` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `editor_work` text COLLATE utf8_unicode_ci NOT NULL,
  `rewiewer_work` int(255) NOT NULL,
  `id_areaofinterest` int(255) NOT NULL,
  `id_keywords` int(255) NOT NULL,
  PRIMARY KEY (`id_work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `work_version`
--

CREATE TABLE IF NOT EXISTS `work_version` (
  `id_work_version` int(255) NOT NULL,
  `version` int(255) NOT NULL,
  `work_date_version` int(255) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `content_version` int(255) NOT NULL,
  `title_version` text COLLATE utf8_unicode_ci NOT NULL,
  `editor_work_version` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `revierw_work_version` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id_work_version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
