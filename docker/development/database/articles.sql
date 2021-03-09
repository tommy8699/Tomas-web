-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: database
-- Generation Time: Mar 01, 2021 at 08:09 PM
-- Server version: 10.3.18-MariaDB-1:10.3.18+maria~bionic
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nabidkasluzeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `urlseo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ogimage` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleshort` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsstext` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `urlseo`, `active`, `title`, `uuid`, `description`, `keywords`, `ogimage`, `titleshort`, `rsstext`, `locale`) VALUES
(1, 'domu', 1, 'Správa serverů, vývoj software, IoT, školení, konzultace a analýzy', 'bae34b31-ad49-4444-9bf7-805e513d30f6', 'Správa serverů, vývoj software, IoT, školení, konzultace a analýzy', 'programování, vývoj, software hardware, SEO, linux, server,admin,  konzultant, marketing', 'header.jpg', 'Bc. Josef Jebavý - správa serverů, vývoj software, IoT, školení, konzultace a analýzy', ' ', 'cs'),
(2, 'home', 1, 'Software and hardware custom development, server management, consulting and analysis', 'b63ccd80-a77b-4cdc-9936-a5479e2c080d ', 'Software and hardware custom development, IoT, consulting and analysis', 'programming, development, software, hardware, linux, server,admin, IoT, SEO Consultant, Marketing', 'header.jpg', 'Bc. Josef Jebavý - development of software and hardware, server management, IoT, consulting and analysis', ' ', 'en'),
(3, 'jak-zahajit-spolupraci', 1, 'Zahájení spolupráce', '557b4574-a667-4cbd-a3b3-ca62dc9d5568 ', 'Zahájení spolupráce', 'spolupráce, převzetí projektu, programování, správa serverů', 'logo-xeres.cz-250x250.png', 'Zahájení spolupráce', ' ', 'cs'),
(4, 'how-to-start-cooperation', 1, 'How to get started cooperation and how I work', 'e41aca73-fc57-4fdb-87f8-7e6ccf747adc', 'How to get started cooperation and how I work', 'cooperation, programing, server administration, takeover of the project,', 'logo-xeres.cz-250x250.png', 'How to get started cooperation and how I work', ' ', 'en'),
(5, 'poradenstvi-a-analyza', 1, 'Poradenství a analýza', ' 8f887a7a-1f5d-4219-9bd9-805a6b4e3cf3', 'IT poradenství a analýza', 'IT,poradenství, analýza, konzultace, SEO', 'logo-xeres.cz-250x250.png', 'IT poradenství a analýza', ' ', 'cs'),
(6, 'advice-analysis', 1, 'Consulting and Analysis', '4a24903e-e279-4ae4-a4cb-2cc5b146cc1f', 'IT Consulting and Analysis ', 'IT, consulting, analysis SEO', 'logo-xeres.cz-250x250.png', 'IT Consulting and Analysis ', ' ', 'en'),
(7, 'skoleni-filesystem-btrfs', 1, 'Školení souborový systém Btrfs', '55f449a2-1f0f-434e-b425-9ccee1e07a2a', 'školení souborový systém Btrfs', 'školení, souborový systém, Btrfs, filesystém, linux', 'Btrfs_logo.png', 'Školení souborový systém Btrfs', ' ', 'cs'),
(8, 'training-filesystem-btrfs', 1, 'Training -filesystem-btrfs', '55f449a2-1f0f-434e-b425-9ccee1e07a2a', 'training -filesystem-btrfs', 'training, file system, Btrfs, filesystem, linux', 'Btrfs_logo.png', 'Btrfs file system training', ' ', 'en'),
(9, 'skoleni-docker', 1, 'školení docker', '8e396166-f7eb-4cce-9bd6-f82925d7fa94 ', 'školení docker', 'školení, docker', 'docker.png', 'školení docker', ' ', 'cs'),
(10, 'training-docker', 1, 'training docker', '8e396166-f7eb-4cce-9bd6-f82925d7fa94 ', 'training docker', 'training, docker', 'docker.png', 'training-docker', ' ', 'en'),                                                                                                                                                   (8, 'skoleni-git-gitlab', 1, 'Školení git a gitlab', '901b2e96-290d-4fe8-82a2-209a99fbd099', 'Školení git a gitlab', 'školení, git, gitlab', 'gitlab-logo-white.png', 'Školení git a gitlab', ' ', 'cs'),
(11, 'skoleni', 1, 'Josef Jebavý: školení Linuxu a programování', ' 6eea882d-ab8c-4a7f-9d1f-da5691be1a5c', 'IT školení workshopy', 'školení, linux, programování, kurz, sítě', 'logo-xeres.cz-250x250.png', 'Josef Jebavý: školení Linuxu a programování', ' ', 'cs'),
(12, 'training', 1, 'Josef Jebavý: Linux training and programming', ' 6eea882d-ab8c-4a7f-9d1f-da5691be1a5c', 'IT training workshops', 'training, linux, programming, course, networks', 'logo-xeres.cz-250x250.png', 'Josef Jebavý: Linux training and programming', ' ', 'en'),
(13, 'skoleni-ispconfig', 1, 'Školení ISPConfig', 'c8eb1098-f83b-4c35-a271-9571f085149d', 'Školení ISPConfig', 'školení, linux, ispconfig', 'ispconfigserver_logo.png', 'Školení ISPConfig', ' ', 'cs'),
(14, 'training-ispconfig', 1, 'ISPConfig training', 'c8eb1098-f83b-4c35-a271-9571f085149d', 'ISPConfig training', 'training, linux, ispconfig', 'ispconfigserver_logo.png', 'ISPConfig training', ' ', 'en'),
(15, 'skoleni-kariera-hr-nabor', 1, 'Školení a konzultace kariéra, nábor', '7a4c1812-9a99-42b7-b91b-c85b17f7a8d6', 'Školení a konzultace kariéra, nábor', 'školení, konzultace, kariéra, nábor personalistika', 'html-code.png', 'Školení a konzultace kariéra, nábor', ' ', 'cs'),
(16, 'training-career-hr-recruitment', 1, 'Training and consulting career, recruitment', '7a4c1812-9a99-42b7-b91b-c85b17f7a8d6', 'Training and career consultations, recruitment', 'training, consultations, career, recruitment of human resources', 'html-code.png', 'Training and consulting career, recruitment', ' ', 'en'),
(17, 'skoleni-linux', 1, 'Školení Linux', 'f3b02d92-28de-42a0-a0bf-554069f113ea', 'Školení Linux', 'školení, linux, základy, práce, pokročilé použití', 'Tux.svg.jpg', 'Školení Linux', ' ', 'cs'),
(18, 'training-linux', 1, 'Linux training', 'f3b02d92-28de-42a0-a0bf-554069f113ea', 'Linux training', 'training, linux, basics, work, advanced use', 'Tux.svg.jpg', 'Linux training', ' ', 'en'),
(19, 'skoleni-parelelni-programovani', 1, 'Školení paralelní programování v jazyce Java', '465891ef-e263-4e2e-ba58-5db88c40b5d0', 'Školení paralelní programování v jazyce Java', 'Školení, paralelní programování, Java', 'java-logo.jpg', 'Školení paralelní programování v jazyce Java', ' ', 'cs'),
(20, 'training-parallel-programming', 1, 'Training in parallel programming in Java', '465891ef-e263-4e2e-ba58-5db88c40b5d0', 'Training in parallel programming in Java', 'Training, parallel programming, Java', 'java-logo.jpg', 'Training in parallel programming in Java', ' ', 'en'),
(21, 'skoleni-proxmox', 1, 'Školení Proxmox', 'e112fcc3-b46a-45b9-ba2f-ee17c4723936', 'Školení Proxmox', 'školení, linux, proxmox, virtualizace, VPS, KVM, LXC', 'proxmox.png', 'Školení Proxmox', ' ', 'cs'),
(22, 'training-proxmox', 1, 'Training Proxmox', 'e112fcc3-b46a-45b9-ba2f-ee17c4723936', 'Training Proxmox', 'training, linux, proxmox, virtualization, VPS, KVM, LXC', 'proxmox.png', 'Training Proxmox', ' ', 'en'),
(23, 'skoleni-remote-work', 1, 'Školení jak pracovat z domu', '05835aa8-db54-4e7d-83e7-aacb18cb84cf', 'Školení jak pracovat z domu', 'školení, remote work, homeoffice', 'remote-work.jpg', 'Školení jak pracovat z domu', ' ', 'cs'),
(24, 'training-remote-work', 1, 'Training how to work from home', '05835aa8-db54-4e7d-83e7-aacb18cb84cf', 'Training how to work from home', 'training, remote work, homeoffice', 'remote-work.jpg', 'Training how to work from home', ' ', 'en'),
(25, 'skoleni-vyvoj-webovych-aplikaci', 1, 'Školení vývoj webových aplikací: Nette, Symfony', '36afe229-a93a-4068-b571-c542038cd10f', 'Školení vývoj webových aplikací: Nette, Symfony', 'školení, vývoj webových aplikací, Nette, Symfony', 'nette-logo-blue.gif', 'Školení vývoj webových aplikací: Nette, Symfony', ' ', 'cs'),
(26, 'training-web-application-development', 1, 'Web application development training: Nette, Symfony', '36afe229-a93a-4068-b571-c542038cd10f', 'Web application development training: Nette, Symfony', 'web application development training: Nette, Symfony', 'nette-logo-blue.gif', 'Web application development training: Nette, Symfony', ' ', 'en'),
(27, 'softwarova-reseni', 1, 'Instalace softwarových řešení', '0cbe199b-c727-49c2-bb34-378ca2d0f12b', 'Instalace softwarových řešení', 'Instalace, softwarová řešení', 'logo-xeres.cz-250x250.png', 'Instalace softwarových řešení', ' ', 'cs'),
(28, 'software-solutions', 1, 'Install the existing software solutions', '8348254e-9b1f-44d8-a72d-9a552bb58c8e', 'Install the existing software solutions', 'Install, software solutions', 'logo-xeres.cz-250x250.png', 'Install the existing software solutions', ' ', 'en'),
(29, 'softwarove-reseni-sprava-linux-serveru', 1, 'Instalace softwarových řešení a správa serverů', 'b14973e0-312a-43b1-8b08-43bdb1fc0490', 'Instalace softwarových řešení a správa serverů', 'Instalace, softwarová řešení,správa serverů', 'logo-xeres.cz-250x250.png', 'Instalace softwarových řešení a správa serverů', ' ', 'cs'),
(30, 'software-solutions-linux-server-management', 1, 'Install the existing software solutions and server management', 'ae9412e9-0d18-4f36-a786-7381dc51072c', 'Install the existing software solutions and server management', 'Install, software solutions, server management', 'logo-xeres.cz-250x250.png', 'Install the existing software solutions and server management', ' ', 'en'),
(31, 'vyvoj-elektroniky', 1, 'Vývoj projektů kombinující software a elektroniku', '896b541e-3be4-4c34-b838-b6edf2aa4339', 'Vývoj projektů kombinující software a elektroniku', 'Vývoj, elektronika', 'logo-xeres.cz-250x250.png', 'Vývoj projektů kombinující software a elektroniku', ' ', 'cs'),
(32, 'electronics-development', 1, 'Development of projects combining software and electronics', '896b541e-3be4-4c34-b838-b6edf2aa4339', 'Development of projects combining software and electronics', 'Development, electronics', 'logo-xeres.cz-250x250.png', 'Development of projects combining software and electronics', ' ', 'en'),
(33, 'vyvoj-embedded-zarizeni', 1, 'Vývoj projektů kombinující software a elektroniku', '8758162e-a9b2-48e8-9d2c-f0efa7721dd7', 'Vývoj projektů kombinující software a elektroniku', 'Vývoj, elektronika', 'logo-xeres.cz-250x250.png', 'Vývoj projektů kombinující software a elektroniku', ' ', 'cs'),
(34, 'development-embedded-devices', 1, 'Development of projects combining software and electronics', '8758162e-a9b2-48e8-9d2c-f0efa7721dd7', 'Development of projects combining software and electronics', 'Development, electronics', 'logo-xeres.cz-250x250.png', 'Development of projects combining software and electronics', ' ', 'en'),
(35, 'vyvoj-software-na-miru', 1, 'Vývoj softwaru na míru', '38845ad9-432d-42b4-a163-f1b99b4a74b9', 'Vývoj softwaru na míru', 'vývoj, programovaní, software, na míru', 'logo-xeres.cz-250x250.png', 'Vývoj softwaru na míru', ' ', 'cs'),
(36, 'software-development-on-peace', 1, 'Custom software development', '38845ad9-432d-42b4-a163-f1b99b4a74b9', 'Custom software development', 'development, programming, software, tailor-made', 'logo-xeres.cz-250x250.png', 'Custom software development', ' ', 'en'),
(37, 'skoleni-git-gitlab', 1, 'školení, git, gitlab', '856ac9a6-1ede-43fd-a0fa-35ea6164865a', 'Školení git a gitlab', 'školení, git, gitlab', 'gitlab-logo-white.png', 'Školení git a gitlab', ' ', 'cs'),
(38, 'training-git-gitlab', 1, 'training, git, gitlab', '8cce3744-f91e-4708-8f73-57d568982295', 'Git and gitlab training', 'training, git, gitlab', 'gitlab-logo-white.png', 'Training git and gitlab', ' ', 'en');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
