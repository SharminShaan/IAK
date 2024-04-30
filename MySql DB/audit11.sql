-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 04:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_cat_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `uploaded_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `quotation` text COLLATE utf8mb4_unicode_ci,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_cat_id`, `title`, `date`, `uploaded_by`, `comment`, `long_description`, `short_description`, `image`, `quotation`, `tags`, `created_at`, `updated_at`) VALUES
(1, 3, 'IAK has significant exposure in providing', '2024-04-24', NULL, NULL, 'Islam Aftab Kamrul & Co., Chartered Accountants (IAK) was Established in 1993, under The Institute of Chartered Accountants of Bangladesh (ICAB) with a mission to continually adding value by helping clients succeed under the firm’s name and style of Islam Aftab Kamrul & Co., Chartered Accountants (IAK). Initially, two founding partners (Senior Fellow members of the Institute of Chartered Accountants of Bangladesh – (ICAB)) started their independent practice as public accountants and the firm is in public practice for more than 30 years. The then largest partnership firm was founded with a vision to build an institution which would foster an environ- ment for leadership, continuous growth, learning, and collaborations', 'Islam Aftab Kamrul & Co., Chartered Accountants (IAK) was Established in 1993, under The Institute of Chartered Accountants of Bangladesh (ICAB) with a mission to continually adding value by helping clients succeed under the firm’s name and style of Islam Aftab Kamrul & Co., Chartered Accountants (IAK)', '171395571677.jpg', 'The then largest partnership firm was founded with a vision to build an institution', 'About Us', '2024-03-31 03:24:17', '2024-03-31 03:24:17'),
(2, 3, 'IAK Services exposure in providing', '2024-04-24', NULL, NULL, 'The then largest partnership firm was founded with a vision to build an institution which would foster an environ- ment for leadership, continuous growth, learning, and collaborations', 'Accountants (IAK) was Established in 1993, under The Institute of Chartered Accountants of Bangladesh (ICAB) with a mission to continually adding value by helping clients succeed under the firm’s name and style of Islam Aftab Kamrul & Co., Chartered Accountants (IAK). Initially, two founding partners (Senior Fellow members of the Institute of Chartered Accountants of Bangladesh – (ICAB)) started their independent practice as public accountants and the firm is in public practice for more than 30 years. The then largest partnership firm was founded with a vision to build an institution which would foster an environ- ment for leadership, continuous growth, learning, and collaborations', '171395569882.jpg', 'Has established the firm as a multidisciplinary organization', 'About Us', '2024-04-23 03:34:55', '2024-04-23 03:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cats`
--

CREATE TABLE `blog_cats` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_cats`
--

INSERT INTO `blog_cats` (`id`, `blog_cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Business', NULL, '2024-03-31 00:03:17'),
(3, 'Finance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'About US', NULL, '2024-03-28 04:07:17'),
(2, 'Services', NULL, NULL),
(3, 'Client', NULL, NULL),
(5, 'Media', NULL, NULL),
(6, 'Career', NULL, NULL),
(7, 'Regulators', NULL, NULL),
(8, 'Contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` bigint UNSIGNED NOT NULL,
  `sub_cat_id` bigint UNSIGNED NOT NULL,
  `child_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `subcats_id` bigint UNSIGNED DEFAULT NULL,
  `childcat_id` bigint UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci,
  `responsibilities` text COLLATE utf8mb4_unicode_ci,
  `compensation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `category_id`, `subcats_id`, `childcat_id`, `type`, `name`, `designation`, `specialization`, `short_text`, `experience`, `short_description`, `long_description`, `email`, `phone`, `file_upload`, `youtube`, `facebook`, `twitter`, `instagram`, `title`, `subtitle`, `job_title`, `vacancy`, `age`, `education`, `responsibilities`, `compensation`, `employment_status`, `location`, `logo`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `date`, `time`, `venue`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'At present IAK consists of four partners (All are Fellow Members of ICAB) with experiences over 30 (Thirty) years having diverse expertise in auditing of various National And Multinational Organizations, Accounting, Taxation, Secretarial Service, Corporate Finance, Stocks And Security Management, Management Consultancy, Information Technology Advisory, Consultancy in Public Offering and Fund Raising, Feasibility and Market Study, Review of Financial Management System etc. IAK with its primary business office at Gulshan also operates a branch office at Mirpur for operational purposes.', 'Our major strength is our exposure and experience in the statutory audit of Multinational Companies, Listed Companies, Banks, Non-Banking Financial Institutions, Insurance, Government and Semi-Government Body, Autonomous Body, Not-for-profit organizations, Development Projects, Branch and Liaison Offices. Moreover, IAK has significant exposure in providing taxation, valuation & advisory services to its major clients.', NULL, NULL, '1712043445.pdf', 'https://youtu.be/6nwWYg_RGnI?si=gwFBtM1FYsLDnaiJ', NULL, NULL, NULL, 'Want to know more about us?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1712043445.jpg', NULL, NULL, NULL, NULL, NULL, '2024-04-03', NULL, NULL, NULL, '2024-03-31 04:13:02', '2024-04-20 23:26:59'),
(2, 2, 8, NULL, NULL, 'Statutory Audit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-31 04:21:39', '2024-03-31 04:21:39'),
(3, 2, 8, NULL, NULL, 'Internal Audit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-31 04:39:50', '2024-03-31 04:39:50'),
(4, 2, 8, NULL, NULL, 'Management Audit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-31 23:06:25', '2024-03-31 23:06:25'),
(5, 2, 8, NULL, NULL, 'Performance Audit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-31 23:37:36', '2024-03-31 23:37:36'),
(6, 2, 8, NULL, NULL, 'IT Audit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 00:22:08', '2024-04-01 00:22:08'),
(7, 3, 15, NULL, NULL, 'Agrani Bank PLC.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334423380.jpg', '171195908079.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 02:02:20', '2024-04-01 02:02:20'),
(8, 3, 16, NULL, NULL, 'Bangladesh Power Development Board', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334452210.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 02:02:50', '2024-04-01 02:02:50'),
(9, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaa', 'dddddddddd', NULL, NULL, '1712038986.pdf', 'http://127.0.0.1:8000/profile', NULL, NULL, NULL, 'About Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1712037915.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-02 00:23:06'),
(11, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Islam Aftab Kamrul & Co., Chartered Accountants (IAK) is a member firm of Key Will Group - Global Accounting and Consulting Network. Key Will Group offers services in the areas of Audit, Advisory, Consultancy services in more than 90 Countries all over the world. Key will group is pioneer in Business Consultancy and Tax Consultancy in the world especially in Hong Kong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INTERNATIONAL AFFILIATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171377121329.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://127.0.0.1:8000/affiliation/', '2024-04-01 03:54:33', '2024-04-01 03:54:33'),
(13, 1, 2, NULL, NULL, 'A.K.M AFTABUL ISLAM, FCA', 'PRINCIPAL PARTNER', 'Financial Management Sustainability Reporting and Business Compliance Advisory', 'Mr. A.K.M Aftabul Islam is the Principal Partner of this Firm and he graduated in Commerce and Law under the University of Dhaka and Fellow Chartered Accountant (FCA) of The Institute of Chartered Accountants of Bangladesh (ICAB).', '44 Years', 'Mr. A.K.M Aftabul Islam is the Principal Partner of this Firm and he graduated in Commerce and Law under the University of Dhaka and Fellow Chartered Accountant (FCA) of The Institute of Chartered Accountants of Bangladesh (ICAB).', 'Mr. Islam proactively contributed especially to the areas of Business Valuation, Fiduciary Review, Special Audit, and Advisory and Compliance Services and he worked on various clients especially in the areas Banks, Insurance and Financial Institutions, Multinational Companies, Manufacturing Companies, Service Oriented Companies, Private and Group of Companies, and Development agencies in the field of audit and advisory services. A visionary leader with a broad perspective to create a sustainable IT supported economy. Mr. Islam has been a key influential person to guide the nation’s economy of The Peoples Republic of Bangladesh. In order to support his endeavor, he occupied number of leadership positions to steer the emerging market of Bangladesh. With his formidable excellence of hegemony, he is supervising number of Government formed committee and private companies in order to see Bangladesh to become a Middle-income country highlighting the growth of the private sector comprising of local and foreign entrepreneurs. Mr. Islam promoted the country image of Bangladesh through participating different international seminars and forums as part of the delegation of government as the position of President, Chairman, Director of AmCham, DCCI & FBCCI, Bangladesh Bank (Central Bank of Bangladesh), SME Foundation, British American Tobacco, SMC, ICC Bangladesh. He is an instrumental in attracting Foreign Direct Investments (FDI) in Bangladesh. Mr. Islam has been awarded with many national and international recognitions including “Lincoln Memorial Development Award” in the \"International Business Development Sector\".', 'aftab@audit.com.bd', '+88 02 9027738', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171377045993.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-02 02:15:25', '2024-04-02 02:15:25'),
(14, 1, 2, NULL, NULL, 'A.K.M Kamrul Islam, FCA, FCS', 'Senior Partner', 'Statutory & Internal Audit, Performance Audit and Business Valuation & Advisory and Direct & Indirect Tax', NULL, '36 years', 'Mr. Islam is the Senior Partner of the Firm and he graduated with Honors and Master\'s in accounting from University of Dhaka and the Fellow member of The Institute of Chartered Accountants of Bangladesh (ICAB), the Fellow member of The Institute of Chartered Secretaries of Bangladesh (ICSB), Associate Member of Information System Audit and Control Association (ISACA), USA and Associate Member of the International Institute of Internal Auditors, Florida, USA and VAT Consultant Enlisted by National Board of Revenue.', 'Mr. Islam proactively\r\ncontributed especially to the areas of Statutory Audit, Internal Audit, Financial Statements\r\nPreparation, Business Advisory, Corporate Finance, Bookkeeping, Due Diligence, Liquidation,\r\nTax Accounting and Advisory and Compliance Services and he worked on various clients\r\nespecially in the areas Banks, Insurance and Financial Institutions, Multinational Companies, Manufacturing Companies, Service\r\nOriented Companies, Private and Group of Companies, Non-Government Organizations, and Development agencies in the field of\r\naudit and advisory services.\r\nMr. Islam was also the Director (nominated by The Government of Bangladesh) of Sonali Bank Limited (The largest Public Bank in\r\nBangladesh), Janata Bank Limited for his dynamic and spectacular leadership. He was also the Ombudsmen of Sonali Bank Limited\r\nand for some extent the Chairman of Sonali Bank Limited and Janata Bank Limited.', 'kamrul@audit.com.bd', '+88 02 9027738', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171377091138.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-02 09:11:13', '2024-04-02 09:11:13'),
(15, 1, 2, NULL, NULL, 'Muhammad Rizwanullah, FCA', 'Partner', 'Management of foreign funded organization & Advisory and Direct & Indirect Tax', NULL, '37 years', 'Mr. Rizwanullah is the Fellow Member of the Institute of Chartered Accountants in England & Wales (FCA similar to CPA), member of Association of Chartered Accountants in US (ACAUS), member of Association of Former International Civil Servants in New York and Geneva (AFICS).', 'He has vast experience in Professional Accounting/Audit/Finance, Management of UN/ Humanitarian Organization /Consultancy & Income Tax Services. Working & Living Experience in Europe,\r\nAfrica, Asia and North America.', 'rizwanullah@audit.com.bd', '+88 02 9027738', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171335203042.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-02 09:22:20', '2024-04-02 09:22:20'),
(17, 1, 2, NULL, '1', 'Saleem Arungzeb Ahmed, FCA', 'Partner', 'Strategic Financial & Sustainable Reporting, Business Valuation and Tax Planning', NULL, '38 Years', 'Mr. Ahmed is the Fellow Member of Institute of Chartered Accountants of Bangladesh and Associate Member of ICAEW, England and graduated from Dhaka University, Bachelor of Commerce.', 'He has wide experience and expertise in the areas Management Accounting, Financial Management, Financial Reporting, Managerial Finance, IFRS, UK GAAP, US GAAP, Equity Valuation,\r\nCareer Development, Risk Management, Personal Finance, Financial Planning, Audit & Assurance\r\nServices, Liquidation, Tax planning, Strategic Financial Planning.', 'saleem@audit.com.bd', '+88 02 9027738', NULL, NULL, NULL, NULL, NULL, 'Meet Our Team', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171335204278.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-02 10:58:06', '2024-04-02 10:58:06'),
(18, 1, 4, NULL, NULL, 'Bangladesh Bank (Central Bank)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171212501414.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.bb.org.bd', '2024-04-03 00:16:54', '2024-04-03 00:16:54'),
(19, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The China-Bangladesh Chamber of Commerce and Industry (CBCCI) is an organization established to promote and facilitate trade, investment, and economic cooperation between China and Bangladesh.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh China Chamber of Commerce and Industry(BCCCI)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171212743452.png', '171212743428.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://bccci-bd.org/', '2024-04-03 00:52:30', '2024-04-03 00:52:30'),
(24, 5, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Although some measures have been taken in monetary policy to deal with the current economic crisis, the exchange rate is still not stable. In this situation, the opportunity of controlling inflation in Bangladesh has become very limited. Experts believe that the ongoing monetary policy will not play much role in controlling inflation. Economists and businessmen have called for strong initiatives on the part of lawmakers in addition to increasing the decision-making skills of the central bank to overcome economic challenges. Only a slight rise in the policy rate', 'They made the comments at a roundtable discussion on \"Monetary Policy (January-June 2024)\", organised by the Institute of Chartered Accountants of Bangladesh (ICAB) at its auditorium on 31 January 2024. The Bangladesh Bank raised the policy rate by 25 basis points to 8 percent for the second half of the FY24. Primarily, there was demand-pull inflation, but now it is turning into cost-push inflation, said Prof Shamsul Alam, former state minister for the Ministry of Planning, GoB. So, bringing inflation rate within the targeted level by only raising the policy rate will be tough, he said while speaking as the chief guest. Mr. Alam also recommended reducing import tariffs in order to contain inflation, and reducing expenditure by lowering cost and time overruns for projects.', NULL, NULL, '171213172031.pdf', NULL, NULL, NULL, NULL, 'Only raising policy rate may not tame inflation Say economists at ICAB Roundtable Discussion', 'ICAB - The Institute of Chartered Accountants of Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171213172091.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-03 02:07:12', '2024-04-03 02:07:12'),
(25, 5, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171363425735.pdf', NULL, NULL, NULL, NULL, 'Company Profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-03 02:28:26', '2024-04-03 02:28:26'),
(27, 5, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants showed a great performance in winning our first cricket match of BCACP Cricket Tournament-2023. Hope for the best for the next match!! Man of the match is Ashraful Alam Hasan for his fantastic knock of 85* runs!!!!!', NULL, NULL, '171213822339.pdf', NULL, NULL, NULL, NULL, 'The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171213822395.jpg', NULL, NULL, NULL, NULL, NULL, '2024-05-12', '11:00:00', 'ICB', NULL, '2024-04-03 03:46:56', '2024-04-03 03:46:56'),
(28, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The main responsibility of NBR is to collect domestic revenue (primarily, taxes) for the government. It administers various taxes including income tax, value-added tax (VAT), customs duties, and other forms of indirect taxes.\r\n\r\nThe NBR plays a crucial role in the fiscal policies of the government of Bangladesh and is responsible for ensuring compliance with tax laws and regulations. It implements tax policies, conducts audits, and takes enforcement actions against tax evasion.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The National Board of Revenue (NBR)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171325071697.jpg', '171325071676.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://nbr.gov.bd/', '2024-04-16 00:58:36', '2024-04-16 00:58:36'),
(29, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Email : info@audit.com.bd', 'Phone : +88 02 9027738', NULL, NULL, NULL, NULL, NULL, 'Head Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Z-Tower” (5th Floor), Plot # 4, Road # 132, 54, Gulshan Avenue, Gulshan- 1, Dhaka- 1212, Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.916126907097!2d90.417295!3d23.783761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c798d4dc3537%3A0x3d97ff380c492bbb!2sIslam%20Aftab%20Kamrul%20%26%20Company!5e0!3m2!1sen!2sbd!4v1713257824752!5m2!1sen!2sbd', '2024-04-16 02:58:41', '2024-04-16 02:58:41'),
(32, 6, 23, NULL, NULL, NULL, NULL, NULL, NULL, 'Anyone can apply', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accounts Officer', '02', 'Age 25 to 32 years', 'Bachelor of Business Administration (BBA).     Minimum Bachelor Degree from any discipline.', 'Job Context\r\n\r\nWe are looking for a smart professional who will be the first point of contact for the company and serve asthe face of the company. Successful candidate will be responsible for sales & service delivery & performance at the client site.\r\n\r\nJob Responsibilities:\r\n\r\nReceive and transfer calls, connect to appropriate number, local or foreign.\r\n\r\nClient hunt, creating market opportunity.\r\n\r\nPrepare marketing and sales strategy.\r\n\r\nCarry-out promotional activities;\r\n\r\nProduct presentation and marketing to the prospective client.\r\n\r\nEnsure the overall functions of the pabx systems at corporate head office.\r\n\r\nMust be knowledgeable about Facebook (Social-media), email & web chat skype and any desk software.\r\n\r\nMust be fluent in English communication\r\n\r\nIdentify client needs, clarify information and provide solutions.\r\n\r\nMaintain managing director\'s appointment for office staffs and outside guests.\r\n\r\nCompile and send newspaper data on daily basis within a specific time period.\r\n\r\nMaking inbound/outbound calls, distribute and handle all documents. Maintaining registers sheet of all messages & visitor logs etc.\r\n\r\nEnsure knowledge of staff movements inside and outside of the organization and keep a record of visitors\' log book.\r\n\r\nReceive mail & couriers and dispatch to the respective person.', 'Negotiable', 'Full-Time', 'Anywhere of Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-16', NULL, NULL, NULL, '2024-04-16 05:07:33', '2024-04-16 05:07:33'),
(36, 6, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Intern', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24', NULL, NULL, NULL, '2024-04-16 05:18:34', '2024-04-16 05:18:34'),
(40, 5, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Chartered Accountants.... Wishing all of you a very very prosperous and successful year ahead.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New year celebration 2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171326897223.jpg', '171326831692.jpg', '171437877388.jpg', '171437877473.jpg', '171437877422.jpg', '171437877488.jpg', NULL, NULL, NULL, NULL, '2024-04-16 05:51:56', '2024-04-16 05:51:56'),
(41, 1, 4, NULL, NULL, 'Financial Reporting Council', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171333185478.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://frc.gov.bd', '2024-04-16 23:30:54', '2024-04-16 23:30:54'),
(42, 3, 16, NULL, NULL, 'Bangladesh Rural Electrification Board', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334479134.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 03:06:31', '2024-04-17 03:06:31'),
(43, 3, 16, NULL, NULL, 'Meghna Cement Mills Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334490733.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 03:08:27', '2024-04-17 03:08:27'),
(44, 3, 15, NULL, NULL, 'BRAC Bank PLC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334516495.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 03:12:44', '2024-04-17 03:12:44'),
(45, 3, 15, NULL, NULL, 'Investment Corporation of Bangladesh (ICB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171334518868.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 03:13:08', '2024-04-17 03:13:08'),
(46, 1, 2, NULL, NULL, 'Dr. AKM Moazzem Hussain', 'Advisor', NULL, 'Dr. AKM Moazzem Hussain is a man of versatile knowledge & experiences on extensive work.\r\nHe obtained BE, ME and Dr. Engg. in Naval Architecture (1961-71) from the Division of Engineering, University of Tokyo and received practical training at IHI Shipyard and Nippon Steel\r\nCorporation.\r\nMr. Hussain has been extending Advisory and Consultancy Services, as and when required, to\r\nthe Government of Bangladesh, the Embassy of Japan in Dhaka, JETRO Dhaka Office, JICA\r\nBangladesh Office and a number of Japanese Companies in Bangladesh since 1972.', NULL, 'He is also reorganized the AOTS Alumni Society in Bangladesh in 1972 and become its first\r\nPresident, later on helped in establishing at the AOTS Alumni Society in Chittagong and Kathmundu. He is also Advisor of BAAS, CAAS and NAAS. He also established Japan Bangladesh\r\nChamber of Commerce & Industry (JBCCI) in 2004 and have been serving as its Secretary\r\nGeneral (now Honorary Executive Director) since inception.', 'Mr. Hussain has been awarded with many national & international achievements namely YAMAMOTO Award for Promotion of Technology Transfer from Japan to Bangladesh in 1992, \"The Order of the Rising Sun\" from the Government of Japan for Promoting\r\nCultural, Technical and Economic Exchanges between Bangladesh & Japan for more than 30 years in 2004, \"Life Time Achievement\r\nAward\" from Bangladesh AOTS Alumni Society (BAAS) in 2018 and many more.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171376825528.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 04:39:52', '2024-04-17 04:39:52'),
(47, 1, 2, NULL, NULL, 'Jibon Chandra Das, CA Finalist', 'Director', 'Statutory Audit, IASs & IFRSs, Regulatory Compliance, Direct & Indirect Tax and Tax Planning', NULL, '15 years', 'Mr. Das is a CA Finalist of The Institute of Chartered Accountants of Bangladesh (ICAB). He\r\nobtained his BBA and MBA from the Department of Accounting, University of Jagannath. He\r\nis also an Income Tax Practitioner, ITP (Obtained from the National Board of Revenue, GoB)\r\nand Member, Dhaka Taxes Bar Association and Member, Bangladesh VAT Professionals\r\nForum, , Member, Bangladesh - Japan Training Institute (BJTI), Member, The Institute of Internal Auditors, Bangladesh (IIAB), and Life Member, Bangladesh Accounting Association (BAA).', 'During his affiliation with IAK, Mr. Das worked on various clients especially in the areas Multinational Companies, Manufacturing Companies, Service Oriented Companies, Private and Group of Companies, Non-Government\r\nOrganizations, and Development agencies in the field of audit and advisory services. He keenly attained expertise in the areas of Compliance Management of BSEC, Bangladesh Bank, IDRA, NBR, BIDA, RJSC, ICAB, FRC etc.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171376934857.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 04:43:11', '2024-04-17 04:43:11'),
(48, 1, 2, NULL, NULL, 'Shubhra Paul, ACA', 'Director (Audit & Assurance)', 'Statutory Audit, IASs & IFRSs, Management Accounting, Regulatory Compliance & Direct & Indirect Tax', NULL, '12 years', 'Mr. Paul is an Associate Chartered Accountant (ACA) and member of The Institute of Chartered Accountants of Bangladesh (ICAB). He obtained his BBA and MBA from the Department\r\nof Finance & Banking, University of Rajshahi. He is also an Income Tax Practitioner, ITP\r\n(Obtained from the National Board of Revenue, GoB) and Member, Dhaka Taxes Bar Association and Member, Bangladesh VAT Professionals Forum.', 'During his professional career Mr. Paul have acquired experiences in the fields of accounts,\r\nfinance, taxation, auditing & secretarial matters. Arrange long-term as well as short-term\r\nfunds & loan for enhancing the current & potential business growth of the concern entity. Prepared and reviewed company annual\r\nfinancial statements, submission of Annual Income Tax Return, yearly budget plan, new project profile, maintaining liaison with local\r\nlegal authorities, dealing with government officials regarding Taxation & VAT affairs.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171376953437.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 01:05:34', '2024-04-22 01:05:34'),
(49, 1, 2, NULL, NULL, 'Md. Rezaul Haq, ACA', 'Director (Audit & Assurance)', 'Statutory Audit, IASs & IFRSs, Business Valuation and Business Process Design, Preparation of Standard Operating Procedures', NULL, '11 years', 'Mr. Haq is an Associate Chartered Accountant (ACA) and member of The Institute of Chartered Accountants of Bangladesh (ICAB). He obtained his BBA and MBA from Department of\r\nAccounting & Information Systems, University of Dhaka and achieved Dean’s Honor Award in\r\nMBA, Faculty of Business Studies, University of Dhaka.', 'Mr. Haq proactively contributed especially to the areas of Statutory Audit, Internal Audit, Business Valuation Financial Statements Preparation, Fiduciary Review, Special Audit, and Advisory and Compliance Services and he worked on various clients especially in the areas Banks, Insurance and Financial Institutions,\r\nMultinational Companies, Manufacturing Companies, Service Oriented Companies, Private and Group of Companies, Non-Government Organizations, and Development agencies in the field of audit and advisory services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171377022426.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 01:13:25', '2024-04-22 01:13:25'),
(52, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ICAB is the regulatory body for the profession of accountants and connected matters therewith. The education, training and qualification imparted by the ICAB is recognized internationally. As leaders in accountancy, ICAB members have the knowledge, skills, expertise and commitment to maintain the highest professional standards', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ICAB - The Institute of Chartered Accountants of Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171378052940.jpg', '171378052986.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.icab.org.bd/', '2024-04-22 04:08:49', '2024-04-22 04:08:49'),
(53, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The Korean-Bangladesh Chamber of Commerce and Industry (KBCCI) is an organization that facilitates trade and business relations between South Korea and Bangladesh.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korea-Bangladesh Chamber of Commerce & Industry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171378150397.jpg', '171378150352.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.kbcci.net/', '2024-04-22 04:25:03', '2024-04-22 04:25:03'),
(54, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The Indian-Bangladesh Chamber of Commerce and Industry (IBCCI) is an organization aimed at fostering trade and economic relations between India and Bangladesh. It serves as a platform for businesses from both countries to collaborate, network, and explore opportunities for mutual growth.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India-Bangladesh Chamber of Commerce & Industry (IBCCI)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171378232043.png', '171378232069.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 04:38:40', '2024-04-22 04:38:40'),
(55, 2, 8, NULL, NULL, 'Due Diligence', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 04:54:53', '2024-04-22 04:54:53'),
(56, 2, 9, NULL, NULL, 'Dealing With Issues Arising From Tax Audits/Investigations', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 04:55:27', '2024-04-22 04:55:27'),
(57, 2, 9, NULL, NULL, 'Preparation, Filing, Pleading Appeals And Tribunals', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 04:57:28', '2024-04-22 04:57:28'),
(58, 2, 9, NULL, NULL, 'Preparation, Filing And Assisting In Obtaining Exemption/Reduced Rate Certifications.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 04:57:55', '2024-04-22 04:57:55'),
(59, 2, 9, NULL, NULL, 'Preparation, filing and assisting in obtaining approval of provident,                             gratuity and pension funds.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:11:31', '2024-04-22 05:11:31'),
(60, 2, 9, NULL, NULL, 'Inward investments for foreign investors .', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:12:14', '2024-04-22 05:12:14'),
(61, 2, 9, NULL, NULL, 'Monthly VAT returns & documentation.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:12:32', '2024-04-22 05:12:32'),
(62, 2, 10, NULL, NULL, 'Financial Consulting Services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:13:43', '2024-04-22 05:13:43'),
(63, 2, 10, NULL, NULL, 'Management Consulting Services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:13:59', '2024-04-22 05:13:59'),
(64, 2, 10, NULL, NULL, 'Business Advisory Services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:14:18', '2024-04-22 05:14:18'),
(65, 2, 10, NULL, NULL, 'Corporate Secretarial Services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:14:36', '2024-04-22 05:14:36'),
(66, 2, 10, NULL, NULL, 'Assets Valuation.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:14:51', '2024-04-22 05:14:51'),
(67, 2, 10, NULL, NULL, 'Business Valuation.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:15:03', '2024-04-22 05:15:03'),
(68, 2, 11, NULL, NULL, 'Secretarial, Licensing, And Compliance Are Crucial Aspects Of Running A Business, Ensuring Legal Adherence And Smooth Operations', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:23:19', '2024-04-22 05:23:19'),
(69, 2, 12, NULL, NULL, 'Nature Of Tax: Business Services Tax Is Often A Type Of Consumption Tax, Similar To A Sales Tax Or Value-Added Tax (VAT)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:27:50', '2024-04-22 05:27:50'),
(70, 2, 12, NULL, NULL, 'Services Covered: The Services Subject To Taxation Can Vary Widely.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:28:11', '2024-04-22 05:28:11'),
(71, 2, 12, NULL, NULL, 'Legislation And Regulations: Each Country Or Region May Have Its Own Legislation Regarding Business Services Tax', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:28:28', '2024-04-22 05:28:28'),
(72, 2, 12, NULL, NULL, 'Compliance And Reporting: Businesses Typically Need To Register For The Tax, Collect It From Customers, And Remit It To The Relevant Tax Authority.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:28:46', '2024-04-22 05:28:46'),
(73, 2, 13, NULL, NULL, 'Payroll Management Services (Salary Calculation, TDS Calculation, And Compliance With Local Laws)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:32:44', '2024-04-22 05:32:44'),
(74, 2, 13, NULL, NULL, 'Organizational Design And Strategy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:33:00', '2024-04-22 05:33:00'),
(75, 2, 13, NULL, NULL, 'Job Analysis And Job Profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:33:16', '2024-04-22 05:33:16'),
(76, 2, 13, NULL, NULL, 'Recruitment, Selection & Retention', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:33:30', '2024-04-22 05:33:30'),
(77, 2, 13, NULL, NULL, 'Performance Review And Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:33:43', '2024-04-22 05:33:43'),
(78, 2, 13, NULL, NULL, 'Executive Search & Recruitment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 05:33:57', '2024-04-22 05:33:57'),
(79, 3, 17, NULL, NULL, 'AIC, Inc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-23 03:09:11', '2024-04-23 03:09:11'),
(80, 5, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants showed a great performance in winning our first cricket match of BCACP Cricket Tournament-2023. Hope for the best for the next match!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cricket Tournament-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171437885927.jpg', '171437885911.jpg', '171437885919.jpg', '171437885977.jpg', '171437885974.jpg', '171437885918.jpg', NULL, NULL, NULL, NULL, '2024-04-23 04:38:25', '2024-04-23 04:38:25'),
(81, 5, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants The cricket team of Islam Aftab Kamrul & Co., Chartered AccountantsThe cricket team of Islam Aftab Kamrul & Co., Chartered Accountants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The cricket team', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171387351793.jpg', NULL, NULL, NULL, NULL, NULL, '2024-04-18', '17:03:00', 'Dhaka', NULL, '2024-04-23 05:58:37', '2024-04-23 05:58:37'),
(82, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The Registrar of Joint Stock Companies and Firms (RJSC) is an authority responsible for the registration and regulation of companies and firms in various countries. It typically operates\r\n\r\nThe RJSC in Bangladesh maintains a registry of all registered companies and firms, including their details such as incorporation documents, financial statements, and ownership information. It plays a crucial role in ensuring transparency, accountability, and legal compliance within the corporate sector. under the jurisdiction of the respective country\'s laws and regulations governing business entities.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Registrar of Joint Stock Companies And Firms  (RJSC)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171393618428.png', '171393618434.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://roc.gov.bd/', '2024-04-23 23:23:04', '2024-04-23 23:23:04'),
(83, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Email : info@audit.com.bd', 'Phone : +88 01790-700404', NULL, NULL, NULL, NULL, NULL, 'Branch Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSCIC Electronics Complex                                     (Level-5), Plot No. 1/1                                     Road-3, Avenue-4, Section-7                                     Mirpur-11, Dhaka-1216', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.076513859293!2d90.36321437419187!3d23.81587808626162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c11afbb2e74b%3A0x8cc0ef9947d0bbb0!2sIslam%20Aftab%20kamrul%20%26%20Co.%20Chartered%20Accountants!5e0!3m2!1sen!2sbd!4v1711998860511!5m2!1sen!2sbd', '2024-04-23 23:53:56', '2024-04-23 23:53:56'),
(84, 6, 23, NULL, NULL, NULL, NULL, NULL, NULL, 'Minimum 2 years', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Finance Officer', '05', '25-25', 'Bachelor of Business Administration (BBA) Minimum Bachelor Degree from any discipline', 'Job Context We are looking for a smart professional who will be the first point of contact for the company and serve asthe face of the company. Successful candidate will be responsible for sales & service delivery & performance at the client site. Job Responsibilities: Receive and transfer calls, connect to appropriate number, local or foreign. Client hunt, creating market opportunity. Prepare marketing and sales strategy. Carry-out promotional activities; Product presentation and marketing to the prospective client. Ensure the overall functions of the pabx systems at corporate head office. Must be knowledgeable about Facebook (Social-media), email & web chat skype and any desk software. Must be fluent in English communication Identify client needs, clarify information and provide solutions. Maintain managing director\'s appointment for office staffs and outside guests. Compile and send newspaper data on daily basis within a specific time period. Making inbound/outbound calls, distribute and handle all documents. Maintaining registers sheet of all messages & visitor logs etc. Ensure knowledge of staff movements inside and outside of the organization and keep a record of visitors\' log book.', 'Negotiable', 'Full-Time', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30', NULL, NULL, NULL, '2024-04-24 01:04:51', '2024-04-24 01:04:51'),
(85, 3, 17, NULL, NULL, 'Asahi Glass Co. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:19:48', '2024-04-24 01:19:48'),
(86, 3, 17, NULL, NULL, 'Ajinomoto Co. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:20:09', '2024-04-24 01:20:09'),
(87, 3, 17, NULL, NULL, 'Anowara Shimokawa Co. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:20:27', '2024-04-24 01:20:27'),
(88, 3, 17, NULL, NULL, 'Apex Nation Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:21:03', '2024-04-24 01:21:03'),
(89, 3, 17, NULL, NULL, 'Bangladesh Japan Training Institute', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:21:51', '2024-04-24 01:21:51'),
(90, 3, 17, NULL, NULL, 'Colgis BD Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:22:33', '2024-04-24 01:22:33'),
(91, 3, 17, NULL, NULL, 'EOS Textile Co. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:23:53', '2024-04-24 01:23:53'),
(92, 3, 17, NULL, NULL, 'Euglena Co. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:24:19', '2024-04-24 01:24:19'),
(93, 3, 17, NULL, NULL, 'Focus Garment Tech Pte Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:24:57', '2024-04-24 01:24:57'),
(94, 3, 17, NULL, NULL, 'Fukuya.rr. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 01:25:56', '2024-04-24 01:25:56'),
(95, 3, 17, NULL, NULL, 'YKK Bangladesh Pte Ltd. - Japan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 04:55:43', '2024-04-24 04:55:43'),
(96, 3, 17, NULL, NULL, 'Japan External Trade Organization (JETRO)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 04:56:11', '2024-04-24 04:56:11'),
(97, 2, 26, NULL, NULL, 'Actuarial Service in Insurance', NULL, NULL, NULL, NULL, NULL, 'Most actuaries work at insurance companies, where their risk-management assessment abilities are particularly useful. With motivations to take on insurance policies that offer little risk, actuarial service practices focus on analyzing factors related to life expectancy, constructing mortality tables that provide a measure of predictability, and making recommendations to brokers in individual cases. While actuarial science is most commonly applied to mortality analysis for life insurance, many of the same procedures are also used for property, liability, and other kinds of insurance. The impact of actuarial service on the costs of life insurance can encourage behaviors that would result in lower premiums, like quitting smoking.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 23:45:47', '2024-04-24 23:45:47'),
(98, 2, 26, NULL, NULL, 'Actuarial Service in Finance', NULL, NULL, NULL, NULL, NULL, 'Actuarial service is also commonly used to examine the risks of investments in the financial world. Combining their ability to statistically measure probability with predictive tools specific to a market, actuaries are very useful at investment banks, for example. In many ways, the fluctuations of a financial market are less predictable than an individual\'s lifespan. Successful actuaries in the financial world must acquire deep knowledge of potential investments and industries. Competent actuarial service can significantly reduce the overall risks of a portfolio.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 23:49:57', '2024-04-24 23:49:57'),
(99, 2, 27, NULL, NULL, 'Copyright and rights related to copyright.', NULL, NULL, NULL, NULL, NULL, 'The rights of authors of literary and artistic works (such as books and other writings, musical compositions, paintings, sculpture, computer programs and films) are protected by copyright, for a minimum period of 50 years after the death of the author.\r\n\r\nAlso protected through copyright and related (sometimes referred to as “neighbouring”) rights are the rights of performers (e.g. actors, singers and musicians), producers of phonograms (sound recordings) and broadcasting organizations. The main social purpose of protection of copyright and related rights is to encourage and reward creative work.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 23:57:27', '2024-04-24 23:57:27'),
(100, 2, 27, NULL, NULL, 'Industrial property', NULL, NULL, NULL, NULL, NULL, 'Industrial property can usefully be divided into two main areas:\r\n\r\nOne area can be characterized as the protection of distinctive signs, in particular trademarks (which distinguish the goods or services of one undertaking from those of other undertakings) and geographical indications (which identify a good as originating in a place where a given characteristic of the good is essentially attributable to its geographical origin).\r\nThe protection of such distinctive signs aims to stimulate and ensure fair competition and to protect consumers, by enabling them to make informed choices between various goods and services.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 23:58:39', '2024-04-24 23:58:39'),
(101, 1, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'IFRS (International Financial Reporting Standards)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171402708231.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.ifrs.org/', '2024-04-25 00:38:02', '2024-04-25 00:38:02'),
(102, 1, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'IAS (International Accreditation Service)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171402713556.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.iasonline.org/', '2024-04-25 00:38:55', '2024-04-25 00:38:55'),
(103, 1, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ISA (International Society of Automation)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171402722589.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.isa.org/', '2024-04-25 00:40:25', '2024-04-25 00:40:25');
INSERT INTO `contents` (`id`, `category_id`, `subcats_id`, `childcat_id`, `type`, `name`, `designation`, `specialization`, `short_text`, `experience`, `short_description`, `long_description`, `email`, `phone`, `file_upload`, `youtube`, `facebook`, `twitter`, `instagram`, `title`, `subtitle`, `job_title`, `vacancy`, `age`, `education`, `responsibilities`, `compensation`, `employment_status`, `location`, `logo`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `date`, `time`, `venue`, `link`, `created_at`, `updated_at`) VALUES
(104, 1, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'IFAC (International Federation of Accountants)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171402726668.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.ifac.org/', '2024-04-25 00:41:06', '2024-04-25 00:41:06'),
(105, 3, 28, NULL, NULL, 'Meghna Cement Mills Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-25 04:31:36', '2024-04-25 04:31:36'),
(106, 1, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'What is an Auditor? What does an auditor do?', 'Auditors help to provide the capital markets with confidence and assurance in financial reporting. Auditors perform independent evaluations to provide assurance that information, such as the financial statements, present a true and fair view of a company’s financial performance and position. The bedrock of our financial system is the audit. Check out our video to see some actual entry-level auditors on the job!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-25 05:20:54', '2024-04-25 05:20:54'),
(108, 1, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Do auditors do taxes or prepare Financial Statements?', 'It depends. While there may be some auditors who have experience in both audit and completing tax returns, most public company auditors will specialize in performing audits. These auditors will file their own taxes just like everyone else, but don’t ask them to help with filing yours!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-25 05:24:30', '2024-04-25 05:24:30'),
(109, 2, 14, NULL, NULL, 'Principle of Taxation', NULL, NULL, NULL, NULL, NULL, 'To become a CA, students must complete a practical training program called CA Articleship after completing their academic degree. The length of the articleship depends on the student\'s academic level and can range from 2 to 4 years. During the program, students work in a certified Chartered Accountancy Firm and receive training from a principal who is a member of the ICAB.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 00:59:45', '2024-04-28 00:59:45'),
(110, 1, 4, NULL, NULL, 'Bangladesh Economic Zones Authority (BEZA)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171429670833.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://beza.gov.bd/', '2024-04-28 03:31:48', '2024-04-28 03:31:48'),
(112, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'One Stop Service is an online platform integrating relevant Government agencies for providing efficient and transparent services to domestic and foreign.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Investment Development Authority (BIDA)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '171429743951.jpg', '171429743953.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://bida.gov.bd/', '2024-04-28 03:43:59', '2024-04-28 03:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_16_051846_create_permission_tables', 1),
(6, '2024_03_23_063630_create_theme_options_table', 1),
(7, '2024_03_23_142512_create_sliders_table', 1),
(12, '2024_03_25_072904_create_whoweares_table', 2),
(13, '2024_03_28_064250_create_categories_table', 2),
(14, '2024_03_28_064533_create_sub_categories_table', 2),
(15, '2024_03_28_064600_create_child_categories_table', 2),
(16, '2024_03_27_064250_create_categories_table', 3),
(17, '2024_03_27_064533_create_sub_categories_table', 3),
(18, '2024_03_27_064600_create_child_categories_table', 3),
(19, '2024_03_27_064611_create_blog_cats_table', 3),
(27, '2024_03_27_064700_create_registrations_table', 4),
(28, '2024_03_27_064749_create_blogs_table', 4),
(29, '2024_03_28_064630_create_contents_table', 4),
(30, '2024_03_29_072904_create_whoweares_table', 4),
(31, '2024_03_31_085353_add_link_to_contents_table', 4),
(32, '2024_04_02_061230_add_specialization_to_contents_ttable', 5),
(33, '2024_04_02_071446_add_short_text_to_contents_table', 6),
(34, '2024_04_03_053425_add_facebook_to_contents_table', 7),
(35, '2024_04_03_064700_create_registrations_table', 8),
(36, '2024_04_17_064701_add_description_to_sub_categories_table', 9),
(37, '2024_04_18_053628_create_subscribers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$GFTppKJq119BL5KstObV5O18D7FFqg6JOYNAWFa2bLh/PhvYahx1e', '2024-04-20 09:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(2, 'role-create', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(3, 'role-edit', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(4, 'role-delete', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(5, 'content-list', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(6, 'content-create', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(7, 'content-edit', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(8, 'content-delete', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(9, 'home-list', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(10, 'home-create', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(11, 'home-edit', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(12, 'home-delete', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(13, 'aboutUs-create', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05'),
(14, 'aboutUs-edit', 'web', '2024-03-27 22:58:05', '2024-03-27 22:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint UNSIGNED NOT NULL,
  `type` int NOT NULL COMMENT '1=event,2=professtional,3=articleship,4=contact,5=pdf_download',
  `type_id` int DEFAULT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `doc_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `type`, `type_id`, `type_name`, `name`, `email`, `phone`, `address`, `image`, `doc_file`, `service_type`, `service_name`, `message`, `created_at`, `updated_at`) VALUES
(15, 5, 25, 'Company Profile-download', 'Premium', 'admin@gmail.com', '01791739760', 'Dhaka', NULL, NULL, NULL, '', NULL, '2024-04-29 06:03:44', '2024-04-29 06:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-03-27 22:58:50', '2024-03-27 22:58:50'),
(2, 'user', 'web', '2024-03-30 08:34:52', '2024-03-30 08:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slideimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `subheading`, `heading`, `paragraph`, `button_text`, `slideimage`, `type`, `created_at`, `updated_at`) VALUES
(4, NULL, NULL, NULL, NULL, '1713950072.png', 1, '2024-03-30 09:20:55', '2024-04-24 03:14:32'),
(7, NULL, NULL, NULL, NULL, '1712212178.png', 1, '2024-03-31 04:37:19', '2024-04-04 00:29:38'),
(8, NULL, NULL, NULL, NULL, '1712212571.png', 1, '2024-04-04 00:36:11', '2024-04-04 00:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `token`, `status`, `created_at`, `updated_at`) VALUES
(3, 'sajedul.idb.info@gmail.com', '', 'Active', '2024-04-18 00:56:55', '2024-04-18 00:57:32'),
(4, 'sharminshaan505@gmail.com', '', 'Active', '2024-04-18 01:27:28', '2024-04-18 01:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` bigint UNSIGNED NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `sub_cat_name`, `image`, `created_at`, `updated_at`, `description`) VALUES
(1, 1, 'Company Profile', '1711783346.jpg', NULL, NULL, NULL),
(2, 1, 'Meet Our Team', '1711783494.jpg', '2024-03-30 01:24:54', '2024-03-30 01:24:54', NULL),
(4, 1, 'Enlistment', '171428236510.png', '2024-03-30 02:14:06', '2024-03-30 02:14:06', NULL),
(6, 1, 'Membership', '171179274346.webp', '2024-03-30 03:59:03', '2024-03-30 03:59:03', NULL),
(7, 1, 'Affiliation', '171187664856.jpg', '2024-03-31 03:17:12', '2024-03-31 03:17:12', NULL),
(8, 2, 'Audit & Assurance', '171187669628.png', '2024-03-31 03:18:16', '2024-03-31 03:18:16', 'Trade License, Trade Mark Registration (class/category wise), Export Registration Certificate (ERC), Import Registration .'),
(9, 2, 'Taxation & VAT', '171334147895.jpg', '2024-03-31 03:18:34', '2024-03-31 03:18:34', 'Preparation and submission of Company’s income tax return, attending hearing at DCT’s level from time to time and finalization of Income Tax assessment, VAT registration'),
(10, 2, 'Advisory', '171334158846.jpg', '2024-03-31 03:18:46', '2024-03-31 03:18:46', 'Name clearance, preparing & registration Memorandum & Article of Association in accordance with Companies Act. Share Certificate (4 color) & Share Register Printing and initial'),
(11, 2, 'Secretarial, licensing & compliance', '171334172954.jpg', '2024-03-31 03:18:57', '2024-03-31 03:18:57', 'IAK provides best in class corporate secretarial, licensing & compliance services in Bangladesh.'),
(12, 2, 'Business Services', '171334179278.webp', '2024-03-31 03:19:09', '2024-03-31 03:19:09', 'IAK offering professional services in the areas of audit, tax, management consulting services, valuation services and business'),
(13, 2, 'Human Resources & others Services', '171334152736.jpg', '2024-03-31 03:19:18', '2024-03-31 03:19:18', 'Preparation of monthly financial statement in accordance with International Accounting Standard (IAS)'),
(14, 2, 'Training & Development', '171334192892.jpg', '2024-03-31 03:19:28', '2024-03-31 03:19:28', 'Hard-headed, fact-based assessment of whether the work employee and Learning and Development (L&D) team have been doing has been valuable or a waste of resources'),
(15, 3, 'Financial Institutions', NULL, '2024-04-01 01:29:00', '2024-04-01 01:29:00', NULL),
(16, 3, 'Govt./Semi-Govt.', NULL, '2024-04-01 01:29:41', '2024-04-01 01:29:41', NULL),
(17, 3, 'Foreign Clients', NULL, '2024-04-01 01:30:05', '2024-04-01 01:30:05', NULL),
(18, 5, 'Newsletter', NULL, '2024-04-02 09:51:19', '2024-04-02 09:51:19', NULL),
(19, 5, 'Blog', NULL, '2024-04-02 09:51:36', '2024-04-02 09:51:36', NULL),
(20, 5, 'Publications', NULL, '2024-04-02 09:51:50', '2024-04-02 09:51:50', NULL),
(21, 5, 'Gallery', NULL, '2024-04-02 09:52:04', '2024-04-02 09:52:04', NULL),
(22, 5, 'Events', NULL, '2024-04-02 09:52:14', '2024-04-02 09:52:14', NULL),
(23, 6, 'Professional', NULL, '2024-04-02 09:52:39', '2024-04-02 09:52:39', NULL),
(24, 6, 'Articleship', NULL, '2024-04-02 09:53:06', '2024-04-02 09:53:06', NULL),
(25, 1, 'Standards', NULL, '2024-04-24 23:06:52', '2024-04-24 23:06:52', NULL),
(26, 2, 'IAK Actuarial Service', NULL, '2024-04-24 23:08:24', '2024-04-24 23:08:24', NULL),
(27, 2, 'IPR Service', NULL, '2024-04-24 23:08:46', '2024-04-24 23:08:46', NULL),
(28, 3, 'Listed Cilents', NULL, '2024-04-24 23:10:39', '2024-04-24 23:10:39', NULL),
(29, 1, 'FAQs', NULL, '2024-04-25 00:46:06', '2024-04-25 00:46:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theme_options`
--

CREATE TABLE `theme_options` (
  `id` bigint UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vmap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_options`
--

INSERT INTO `theme_options` (`id`, `sitename`, `logo`, `email`, `phone`, `address`, `paragraph`, `opening`, `facebook`, `linkedin`, `twitter`, `googleplus`, `youtube`, `vmap`, `created_at`, `updated_at`) VALUES
(1, 'ISLAM AFTAB KAMRUL & CO.', '1711602588.png', 'info@audit.com.bd', '+88 01790 700 404', 'Head Office - ‘“Z-Tower” (5th Floor), Plot # 4, Road # 132, 54, Gulshan Avenue, Gulshan- 1, Dhaka- 1212', 'Main Operational Office - BSCIC Electronics Complex (Level-5), Plot No. 1/1, Road-3, Avenue-4, Section-7, Mirpur-11, Dhaka-1216', 'Sunday (10 AM to 6 PM), Monday to Thursday (9 AM - 5 PM), Friday and Saturday Closed', '#', NULL, NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!4v1709715340681!6m8!1m7!1svykH5KHR4jK_pZ6XT6_C_w!2m2!1d23.78134505669539!2d90.41695108812661!3f126.381966!4f0!5f0.7820865974627469', NULL, '2024-04-16 23:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dnGvjJ7NxrNwn2eynQMWi.leJsu6ZgVVCMc8IwgNxbymI4Jac.04G', NULL, '2024-03-27 22:58:50', '2024-03-27 22:58:50'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$zICY9BhRNJODHCu.cl/mi.9lrZxjZBZA8AVFJxIs8s/UMtbIvKQyW', NULL, '2024-03-30 08:33:18', '2024-03-30 08:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `whoweares`
--

CREATE TABLE `whoweares` (
  `id` bigint UNSIGNED NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottomparagraph` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearsparagraph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whoweares`
--

INSERT INTO `whoweares` (`id`, `subheading`, `heading`, `paragraph`, `image1`, `image2`, `list1`, `list2`, `list3`, `list4`, `bottomparagraph`, `years`, `yearsparagraph`, `type`, `created_at`, `updated_at`) VALUES
(1, 'IAK has significant exposure in providing', 'Who We Are?', 'Islam Aftab Kamrul & Co., Chartered Accountants (IAK) was Established in 1993, under The Institute of Chartered Accountants of Bangladesh (ICAB) with a mission to continually adding value by helping clients succeed under the firm’s name and style of Islam Aftab Kamrul & Co., Chartered Accountants (IAK). Initially, two founding partners (Senior Fellow members of the Institute of Chartered Accountants of Bangladesh – (ICAB)) started their independent practice as public accountants and the firm is in public practice for more than 30 years. The partnership firm was founded with a vision to build an institution which would foster an environment for leadership, continuous growth, learning, and collaborations.', '1711905420.jpg', '171190555185.png', 'Qualified Consultants', 'IT Consultants', 'Business & Corporate Advisory Services', 'Taxation & VAT Services', 'Over the past the firm has become one of the leading and most reputable chartered accountancy firms in Bangladesh with global affiliations. At present, IAK has four partners whose expertise in audit, accounting, review, business consulting, business process outsourcing, technology solutions and taxation has established the firm as a multidisciplinary organization.', '30', 'Of Experience in This Business Consulting.', NULL, NULL, '2024-04-16 23:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_cat_id_foreign` (`blog_cat_id`);

--
-- Indexes for table `blog_cats`
--
ALTER TABLE `blog_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_categories_cat_id_foreign` (`cat_id`),
  ADD KEY `child_categories_sub_cat_id_foreign` (`sub_cat_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_category_id_foreign` (`category_id`),
  ADD KEY `contents_subcats_id_foreign` (`subcats_id`),
  ADD KEY `contents_childcat_id_foreign` (`childcat_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `theme_options`
--
ALTER TABLE `theme_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whoweares`
--
ALTER TABLE `whoweares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_cats`
--
ALTER TABLE `blog_cats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `theme_options`
--
ALTER TABLE `theme_options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whoweares`
--
ALTER TABLE `whoweares`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_cat_id_foreign` FOREIGN KEY (`blog_cat_id`) REFERENCES `blog_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD CONSTRAINT `child_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `child_categories_sub_cat_id_foreign` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contents_childcat_id_foreign` FOREIGN KEY (`childcat_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contents_subcats_id_foreign` FOREIGN KEY (`subcats_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
