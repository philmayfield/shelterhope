-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 07:40 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kimberly_shps`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(2) NOT NULL,
  `published` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `location`, `position`, `bio`, `img`, `email`, `sort`, `published`) VALUES
(1, 'Phil Mayfield', '3', 'Web Master', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis augue eu mi feugiat interdum quis porttitor nulla. Cras condimentum massa eget turpis suscipit gravida et in ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas lacinia mauris at nibh eleifend rhoncus. Donec nibh sem, consectetur dignissim bibendum vel, sagittis tincidunt justo. Curabitur et arcu augue. Fusce fringilla sapien a felis tristique tincidunt. Suspendisse viverra nunc elit, sed pulvinar libero pharetra eget. Mauris at dolor sed arcu ullamcorper elementum at et sem.', '../img/phil.png', 'philmayfield@gmail.com', 9, 0),
(6, 'Kim Sill', '999', 'Founder', 'Kim worked under cover with Last Chance for Animals for four years investigating pet shops selling puppy mill dogs. Her work with Cesar Millan on The Dog Whisperer gained her national attention. Kim has appeared on The Dr Phil Show and all the local news stations as an expert in animal rescue. Kim has has helped create a program to transport California Death row dogs to out of state shelters and rescues, monthly spay days for low income communities and most recently founded the Shelter Hope Pet Shop at the Janss Market Place. Kim notes, &quot;By showing the public shelter animals at a mall behind a white picket fence we may be able to change the fate of the five million killed at America&#039;s shelters every year.&quot;', '../img/kim.jpg', 'kimsill123@gmail.com', 1, 1),
(7, 'Taira Mulliken', '2', 'Manager', 'Taira is a life-long animal lover and &quot;guardian&quot; who has led the efforts to establish three dog rescue programs near Sacramento, CA.  Her true passion in life is helping dogs and in turn â€“ also having a positive impact on humans!  She has assisted directly and indirectly w/rescuing, fostering and then finding forever homes for over 600 dogs in the course of the last four+ years. Currently, Taira sits on the board of directors for the non-profit HartSong Ranch Animal Sanctuary, which has rescued 20 dogs in less than a year; dogs that no other rescue would assist due to perceived â€œspecial needs,â€ such as behavior and/or physical issues.  In addition, she is the CEO and founder of a &quot;rescued dog resource center&quot; and pending non-profit called Matching Tails.  Taira has over 25 years of business and leadership experience, including serving as an independent contractor and HR Lead at a private agriculture-science corporation for the last four years. Taira holds a BA in Liberal Studies from SJSU with an inâ€“depth area of study in Communications.', '../img/user_blank.png', '', 1, 1),
(10, 'Brenda Braga', '2', '?', 'Brenda has over 25 years of business experience as a Human Resources Manager / Director in the utility and semiconductor industries. She holds a Bachelors degree in Behavioral Sciences from SJSU. After retiring from corporate life she established her own consulting business, specifically related to organizational and leadership development.  Brenda has been actively involved in dog rescue over the past three years in various roles; volunteering at the Amador County Animal Shelter, volunteering at the Grace Foundation establishing and overseeing their dog kennels and fostering rescue dogs.', '../img/user_blank.png', '', 9, 0),
(9, 'Cathy Akana', '2', ' ', 'Cathy currently works part-time for a statewide charter school and has worked in education for the last 17 years. Six of those years were working for the Governor&#039;s Secretary for Education and later the State Superintendent of Public Instruction. She and her husband live in Granite Bay with their rescued Golden Retriever, Shane. Cathy has had an endless love for animals and desire to do more to help those in need. She has volunteered with Homeward Bound Golden Retriever Rescue and Sanctuary, HartSong Ranch and the Grace Foundation.', '../img/user_blank.png', '', 9, 1),
(12, 'Pat Heise', '2', 'Treasurer ', ' ', '../img/user_blank.png', '', 9, 1),
(13, 'Dani Caouette', '3', 'Coordinator', '', '../img/user_blank.png', '', 2, 0),
(15, 'Amy Parrish', '3', 'Manager', '', '../img/user_blank.png', '', 9, 0),
(14, 'Demetra Canning', '1', 'Secretary', '', '../img/user_blank.png', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `published` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `location`, `name`, `date`, `details`, `published`) VALUES
(1, 2, 'St. Pitty&#039;s Day Party', '2015-03-20 18:00:00', '&lt;p&gt;&lt;strong&gt;Tommy T&#039;s Comedy&lt;/strong&gt;&lt;br /&gt;12401 Folsom Blvd.&lt;br /&gt;Rancho Cordova, CA&lt;br /&gt;Info: 916-303-0334&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;$20 Donation - Full Bar &amp;amp; Restaurant&lt;/strong&gt; (2 item minimum)&lt;/p&gt;', 1),
(5, 1, 'Test', '2015-02-25 23:10:00', '&lt;p&gt;Test&lt;/p&gt;', 1),
(6, 3, 'Test Event', '2015-03-28 18:00:00', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis ante eu augue euismod dapibus. Vivamus ac aliquam orci. Sed varius luctus orci, et fermentum velit. Donec maximus vitae nulla nec placerat. Maecenas in magna dapibus lacus mattis suscipit. Phasellus id dui a orci bibendum feugiat. In vestibulum condimentum varius. Donec lobortis, diam at rutrum lobortis, risus turpis fringilla urna, eget gravida velit eros at enim. Maecenas elit lacus, varius eu tempus vitae, porta vitae mauris. Aliquam eget orci gravida, interdum ipsum id, sagittis massa. Donec ultricies velit tortor, quis blandit nisl pulvinar vel. Fusce sit amet interdum lectus. Nam eu nibh quis dui sodales lacinia eget sed mauris. Aliquam erat volutpat.&lt;/p&gt;', 1),
(7, 3, 'test', '2015-09-08 07:46:00', '', 0),
(8, 3, 'Chili&#039;s Fund Raiser Night', '2016-05-02 14:10:00', '&lt;p&gt;Let Chili&#039;s cook your dinner while supporting Shelter Hope Pet Shop Santa Clarita at the same time. Chilli&#039;s will donate 15% of the event day sale back to us.Â &lt;/p&gt;\r\n&lt;p&gt;11am-10pm&lt;/p&gt;\r\n&lt;p&gt;Bring in the flier which are available at our shop or mention the funraiser to you waiter or hostess&lt;/p&gt;\r\n&lt;p&gt;25970 The Old Rd&lt;/p&gt;\r\n&lt;p&gt;Santa Clarita, Ca 91381-1712&lt;/p&gt;\r\n&lt;p&gt;661-260-3620 ww.chilis.com&lt;/p&gt;\r\n&lt;p&gt;We look forward to seeing you there&lt;/p&gt;\r\n&lt;p&gt;Â &lt;/p&gt;', 1),
(9, 999, '5 Year Anniversary - Pet Appreciation Day!', '2016-10-16 09:00:00', '&lt;p style=&quot;text-align: left;&quot;&gt;&lt;strong&gt;Shelter Hope Pet Shop&#039;s 5 Years and over 2,500 Adoptions Pet Appreciation Day!&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;Sunday, Oct 16 - 9am to 5pm - Janss Marketplace&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;&lt;a href=&quot;https://www.google.com/maps/place/275+N+Moorpark+Rd,+Thousand+Oaks,+CA+91360/data=!4m2!3m1!1s0x80e83abb482834e5:0x10cb2c7c7db1c916?sa=X&amp;amp;ved=0ahUKEwji05n2yKTPAhUDJx4KHRRHB9QQ8gEIHTAA&quot;&gt;275 N. Moorpark Road, Thousand Oaks&lt;/a&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Is your pooch a hot doggin&#039; surfer? Â The Lucy Pet Foundation adoption bus and the Gnarly Crankin&#039; Wavemaker are searching for the best surfing dogs in the country to join them on their 2017 Rose Parade Float! Â Sign your pup up at the event!&lt;/li&gt;\r\n&lt;li&gt;Thriller Performance by the Zombie Thriller Team at 12 noon!&lt;/li&gt;\r\n&lt;li&gt;Boo! Â The Best Pet Costume Contest at 2:00pm. Â 1st Place winner: $100, 2nd Place: $50, 3rd Place: $25. Â Winners will be announced at 2:30pm!&lt;/li&gt;\r\n&lt;li&gt;Silent Auction, Raffles, Bake Sale&lt;/li&gt;\r\n&lt;li&gt;Visit our Merchant &amp;amp; Vendors - Hooters, Buca di Beppo, Regal Theater, Camp Bow Wow, CARL, DIVA, Protein for Pets, Pinot Pallete, and The Nutrition Fix!&lt;/li&gt;\r\n&lt;/ul&gt;', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Mon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Tue` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Wed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Thu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Fri` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Sat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours_Sun` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `web_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `published` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `city`, `state`, `zip`, `tel`, `fax`, `email`, `hours_Mon`, `hours_Tue`, `hours_Wed`, `hours_Thu`, `hours_Fri`, `hours_Sat`, `hours_Sun`, `web_name`, `published`) VALUES
(1, 'Thousand Oaks', '193 N. Moorpark Rd. East, Suite F', 'Thousand Oaks', 'CA', '91360', '(805) 379-3538', '', 'info@shelterhopepetshop.org', 'Closed', 'Closed', '11am-5pm', '11am-5pm', '11am-5pm', '11am-5pm', '11am-4pm', 'thousandoaks', 1),
(2, 'Sacramento', '12401 Folsom Blvd. Suite #106', 'Rancho Cordova', 'CA', '95742', '(916) 303-0334', '', 'shpssac@yahoo.com', '', '', '', '', '', '', '', 'sacramento', 1),
(3, 'Santa Clarita', '24201 Valencia Blvd Space #1355', 'Valencia', 'CA', '91355', '(661) 855-4716', '', 'scv@shelterhopepetshop.org', '10am-6pm', '10am-6pm', '10am-6pm', '10am-6pm', '10am-6pm', '10am-6pm', '11am-6pm', 'scv', 1),
(999, 'Corporate - Default', '193 N. Moorpark Rd. East, Suite F', 'Thousand Oaks', 'CA', '91360', '(805) 379-3538', '', 'info@shelterhopepetshop.org', 'Closed', 'Closed', '11am-5pm', '11am-5pm', '11am-5pm', '11am-5pm', '11am-4pm', 'default', 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_content`
--

CREATE TABLE IF NOT EXISTS `main_content` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `aapcode` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_content`
--

INSERT INTO `main_content` (`id`, `content`, `aapcode`) VALUES
(1, '&lt;h2&gt;Whats happening at Shelter Hope, Thousand Oaks?&lt;/h2&gt;\r\n&lt;p&gt;Shelter Hope Pet Shop, Thousand Oaks (SHPS TO) is a not-for-profit, charitable, volunteer-based organization devoted to: aiding in and facilitating shelter and rescue pet adoptions; promoting education and awareness within the communities we serve; and making a positive impact in the lives of shelter and rescue animals and their adopters, as well as local shelters.&lt;/p&gt;\r\n&lt;p&gt;Located in the Janss Marketplace, SHPS TO provides a friendly, inviting place where visitors and volunteers can meet and interact with shelter or rescue animals needing adoption. This retail environment provides a pleasant setting where we can introduce shelter and rescue pets to adopters who may never consider visiting a shelter.&lt;/p&gt;\r\n&lt;p&gt;SHPS SCVTO takes pride in operating with honesty and integrity, and through open communication. We maintain exceptional customer, community, and shelter/rescue relationships. We provide a satisfying, enjoyable, and positive organization for our volunteers to be a part of.&lt;/p&gt;\r\n&lt;h2&gt;How You Can Help Shelter Hope Pet Shop, Thousand Oaks&lt;/h2&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;We run our store with volunteers...come spend time with the dogs....they will love you forever!&lt;/li&gt;\r\n&lt;li&gt;Foster a dog at night... the more help we have, the more we can rescue pets and support our community!&lt;/li&gt;\r\n&lt;li&gt;Donate supplies for our foster pets or new items for sale in our store.&lt;/li&gt;\r\n&lt;li&gt;Make a financial contribution or lead a fundraiser.&lt;/li&gt;\r\n&lt;li&gt;Have a pet-related service in the area? Become a community partner through offering free or discounted services for pets adopted through SHPS TO.&lt;/li&gt;\r\n&lt;li&gt;Contact (805) 379-3538 or email us at &lt;a href=&quot;/shelterhope/manager/info@shelterhopepetshop.org&quot;&gt;info@shelterhopepetshop.org&lt;/a&gt; to ask how else you can support SHPS TO.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h2&gt;How You Can Help Within Our Community&lt;/h2&gt;\r\n&lt;p&gt;Please visit our &lt;a href=&quot;http://www.vcas.us/adopt/search-our-animals&quot;&gt;local shelters&lt;/a&gt; or work with a rescue group to adopt a dog or cat. Adopt and save a life!&lt;/p&gt;\r\n&lt;p&gt;For more information on low cost vet clinics, rescue group contact info, etc..., please call (805) 379-3538 or email us at &lt;a href=&quot;/shelterhope/manager/info@shelterhopepetshop.org&quot;&gt;info@shelterhopepetshop.org&lt;/a&gt;.&lt;/p&gt;\r\n&lt;h2&gt;Saved in America&lt;/h2&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;Founder Kim Sill would like to invite you to view her documentary film &quot;Saved In America&quot;, her journey to expose the cruelty that exists in the American pet industry, which has led to the Shelter Hope Pet Shop.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;For more information visit the official website at &lt;a href=&quot;http://savedinamericathefilm.com/&quot; target=&quot;_blank&quot;&gt;http://savedinamericathefilm.com/&lt;/a&gt;&lt;/p&gt;', '&lt;div&gt;&lt;script language=&quot;JavaScript&quot;&gt;\r\nvar AAPPetScrollerSettings = {\r\n    &#039;searchtools_box_width&#039;: &#039;&#039;,\r\n    &#039;searchtools_box_height&#039;: &#039;&#039;,\r\n    &#039;size&#039;: &#039;450x600_grid&#039;,\r\n    &#039;title&#039;: &#039;&#039;,\r\n    &#039;clan_name&#039;: &#039;&#039;,\r\n    &#039;color&#039;: &#039;blue&#039;,\r\n    &#039;shelter_id&#039;: &#039;85032&#039;,\r\n    &#039;sort_by&#039;: &#039;pet_name&#039;\r\n};\r\n\r\n&lt;/script&gt;\r\n&lt;script language=&quot;JavaScript&quot; src=&quot;http://images.adoptapet.com/js/st-portable-pet-list.js&quot;&gt;&lt;/script&gt;\r\n&lt;div align=&quot;right&quot; style=&quot;height: 29px; width: 450px; background-color: white;&quot;&gt;&lt;a href=&quot;http://www.adoptapet.com/&quot; title=&quot;Pet adoption and rescue \r\npowered by Adopt-a-Pet.com&quot; style=&quot;color: #444444; text-decoration:none;&quot;&gt;\r\n&lt;img src=&quot;http://images.adoptapet.com/images/st-logo.gif&quot; alt=&quot;Pet adoption and rescue powered by Adopt-a-Pet.com&quot; width=&quot;121&quot; height=&quot;29&quot; border=&quot;0&quot; align=&quot;right&quot; /&gt;&lt;span style=&quot;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color: #444444;&quot;&gt;Pet adoption and&lt;br /&gt;rescue powered by&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;\r\n&lt;/div&gt;'),
(2, '&lt;p&gt;Shelter Hope Pet Shop Sacramento (SHPS Sac) is a not-for-profit, charitable, volunteer-based organization devoted to: aiding in and facilitating shelter and rescue pet adoptions; promoting education and awareness within the communities we serve; and making a positive impact in the lives of shelter and rescue animals and their adopters, as well as local shelters.&lt;/p&gt;\r\n&lt;p&gt;Located in a shopping center storefront, SHPS Sac provides a fun, friendly place where visitors and volunteers can meet and interact with shelter or rescue animals needing adoption. This retail environment provides a pleasant setting where we can introduce shelter and rescue pets to adopters who may never consider visiting a shelter.&lt;/p&gt;\r\n&lt;p&gt;SHPS Sac takes pride in operating with honesty and integrity, and through open communication. We maintain exceptional customer, community, and shelter/rescue relationships. We provide a satisfying, enjoyable, and positive organization for our volunteers to be a part of.&lt;/p&gt;\r\n&lt;h2&gt;How You Can Help Shelter Hope Pet Shop Sacramento&lt;/h2&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;We run our store with volunteers... the more help we have, the more we can rescue pets and support our community! &lt;a&gt;Click here for a volunteer application&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;Donate supplies for our foster pets or new items for sale in our store.&lt;/li&gt;\r\n&lt;li&gt;Make a financial contribution or lead a fundraiser.&lt;/li&gt;\r\n&lt;li&gt;Have a pet-related service in the area? Become a community partner through offering free or discounted services for pets adopted through SHPS Sac.&lt;/li&gt;\r\n&lt;li&gt;Contact (916) 303-0334 or email us at shpssac@yahoo.com to ask how else you can support SHPS Sac.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h2&gt;How You Can Help Within Our Community&lt;/h2&gt;\r\n&lt;p&gt;Please visit our local shelters or work with a rescue group to adopt a dog or cat. Adopt and save a life! In 2012, in Sacramento County alone, 6,599 cats were euthanized in our shelters and 5,246 dogs were killed. The vast majority were healthy or treatable animals!&lt;/p&gt;\r\n&lt;p&gt;For more information on shelter locations, low cost vet clinics, hours of operations, rescue group contact info, etc.: please call (916) 303-0334 or email us at shpssac@yahoo.com.&lt;/p&gt;', '&lt;div&gt;\r\n&lt;script language=&quot;JavaScript&quot;&gt;\r\nvar AAPPetScrollerSettings = {\r\n    &#039;searchtools_box_width&#039;: &#039;&#039;,\r\n    &#039;searchtools_box_height&#039;: &#039;&#039;,\r\n    &#039;size&#039;: &#039;450x600_grid&#039;,\r\n    &#039;title&#039;: &#039;&#039;,\r\n    &#039;clan_name&#039;: &#039;&#039;,\r\n    &#039;color&#039;: &#039;blue&#039;,\r\n    &#039;shelter_id&#039;: &#039;89530&#039;,\r\n    &#039;sort_by&#039;: &#039;pet_name&#039;\r\n};\r\n&lt;/script&gt;\r\n&lt;script language=&quot;JavaScript&quot; src=&quot;http://images.adoptapet.com/js/st-portable-pet-list.js&quot;&gt;&lt;/script&gt;\r\n&lt;div align=&quot;right&quot;&gt;&lt;a href=&quot;http://www.adoptapet.com/&quot; title=&quot;Pet adoption and rescue \r\npowered by Adopt-a-Pet.com&quot;&gt;\r\n&lt;img src=&quot;http://images.adoptapet.com/images/st-logo.gif&quot; alt=&quot;Pet adoption and rescue powered by Adopt-a-Pet.com&quot; border=&quot;0&quot; align=&quot;right&quot; /&gt;&lt;span&gt;Pet adoption and rescue powered by&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;\r\n&lt;/div&gt;'),
(999, '&lt;h2&gt;Saved in America&lt;/h2&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;Founder Kim Sill would like to invite you to view her documentary film &quot;Saved In America&quot;, her journey to expose the cruelty that exists in the American pet industry, which has led to the Shelter Hope Pet Shop.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;For more information visit the official website at &lt;a href=&quot;http://savedinamericathefilm.com/&quot; target=&quot;_blank&quot;&gt;http://savedinamericathefilm.com/&lt;/a&gt;&lt;/p&gt;', ''),
(3, '&lt;h2 style=&quot;text-align: left;&quot;&gt;&lt;em&gt;Located inside the Westfield Valencia Town Center Mall, lower level, next to Sears&lt;/em&gt;&lt;/h2&gt;\r\n&lt;p&gt;Shelter Hope Pet Shop Santa Clarita (SHPS SCV) is a not-for-profit, charitable, volunteer-based organization devoted to: aiding in and facilitating shelter and rescue pet adoptions; promoting education and awareness within the communities we serve; and making a positive impact in the lives of shelter and rescue animals and their adopters, as well as local shelters.&lt;/p&gt;\r\n&lt;p&gt;Located at the Westfield Valenia Town Center, SHPS SCV provides a fun, friendly place where visitors and volunteers can meet and interact with shelter or rescue animals needing adoption. This retail environment provides a pleasant setting where we can introduce shelter and rescue pets to adopters who may never consider visiting a shelter.&lt;/p&gt;\r\n&lt;p&gt;SHPS SCV takes pride in operating with honesty and integrity, and through open communication. We maintain exceptional customer, community, and shelter/rescue relationships. We provide a satisfying, enjoyable, and positive organization for our volunteers to be a part of.&lt;/p&gt;\r\n&lt;h2&gt;How You Can Help Shelter Hope Pet Shop, Santa Clarita&lt;/h2&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;We run our store with volunteers... the more help we have, the more we can rescue pets and support our community!&lt;/li&gt;\r\n&lt;li&gt;Donate supplies for our foster pets or new items for sale in our store. We have a wish list at &lt;a href=&quot;https://www.amazon.com/gp/registry/ref=cm_reg_rd-upd?ie=UTF8&amp;amp;id=21ICP7KT9QCI6&amp;amp;type=giftlist&quot;&gt;Amazon&lt;/a&gt;.&lt;/li&gt;\r\n&lt;li&gt;Make a financial contribution or lead a fundraiser.&lt;/li&gt;\r\n&lt;li&gt;Have a pet-related service in the area? Become a community partner through offering free or discounted services for pets adopted through SHPS SCV.&lt;/li&gt;\r\n&lt;li&gt;Contact (661) 855-4716 or email us at &lt;a href=&quot;mailto:scv@shelterhopepetshop.org&quot; target=&quot;_blank&quot;&gt;scv@shelterhopepetshop.org&lt;/a&gt; to ask how else you can support SHPS SCV.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h2&gt;&lt;strong&gt;&lt;em&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;Our Wish List:&lt;/span&gt;&lt;/em&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;&lt;strong&gt; Office supplies: &lt;/strong&gt;sharpie markers, liquid and regular chalk, printing paper, post it notes, tape, staples, paper clips, bottled water or gallons jug of water, white board markers, pens.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Cleaning supplies: &lt;/strong&gt;Paper towels, windex, clorox wipes, hydrogen peroxide, pet pee spray, bleach, gloves, trash bags&lt;em&gt; (tall kitchen and small bags)&lt;/em&gt;, hand sanitizer, disinfectant spray, air freshener.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Dog supplies: &lt;/strong&gt;Pee pads, toys&lt;em&gt; (ropes and toys that can be washed or bleached)&lt;/em&gt;, treats, leashes &lt;em&gt;(99 cent store &amp;amp; dollar tree)&lt;/em&gt;, harnesses and collars &lt;em&gt;(xs,s,m) (99 cent store dollar tree)&lt;/em&gt;, poop bags, fleece blanket, dog beds &lt;em&gt;(with removable covers or the tray type as they are easy to clean)&lt;/em&gt;, small dog flea treatment, rescue remedy.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Dog Food:&lt;/strong&gt; Natural balance limited ingredients small bites,Natural Balance Limited ingredient diet chicken and sweet potato canned dog food, Natural Balance limited ingredient diet chicken and sweet potato formula in broth dog food wet cups, Natural Balance limited ingredient dog food, Small bite puppy food.&lt;/p&gt;\r\n&lt;p&gt;Â &lt;/p&gt;\r\n&lt;p&gt;If you are interested in becoming a volunteer, please call us for details.&lt;/p&gt;\r\n&lt;p&gt;Â &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Volunteers who have attended an orintation can sign up for volunteering by clicking the link(s) below:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;http://www.SignUpGenius.com/go/20F0548A8A72BA0FB6-december&quot;&gt;December Volunteer Calender&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;http://www.signupgenius.com/go/20f0548a8a72ba0fb6-january&quot;&gt;January Volunteer Calander&lt;/a&gt;Â &lt;/p&gt;\r\n&lt;h2&gt;How You Can Help Within Our Community&lt;/h2&gt;\r\n&lt;p&gt;Please visit our &lt;a href=&quot;http://animalcare.lacounty.gov/wps/portal/acc&quot;&gt;local shelters&lt;/a&gt; or work with a rescue group to adopt a dog or cat. Adopt and save a life!&lt;/p&gt;\r\n&lt;p&gt;As of April 1, 2015, &lt;a href=&quot;http://file.lacounty.gov/dacc/currentyear.pdf&quot;&gt;County of Los Angeles Animal Care and Control Animal Euthanasia Rates&lt;/a&gt; for the 2014-2015 fiscal year are as follows:&lt;/p&gt;\r\n&lt;p&gt;Cats: 13,975 &amp;amp; Dogs: 6,470&lt;/p&gt;\r\n&lt;p&gt;The vast majority of these pets were healthy and/or treatable animals!&lt;/p&gt;\r\n&lt;p&gt;For more information on low cost vet clinics, hours of operations, rescue group contact info, etc.: please call (661) 855-4716 or email us at &lt;a href=&quot;mailto:mail to: Dani@shelterhoppetshop.org&quot;&gt;Dani@shelterhopepetshop.org&lt;/a&gt;.&lt;/p&gt;\r\n&lt;h2&gt;Saved in America&lt;/h2&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;Founder Kim Sill would like to invite you to view her documentary film &quot;Saved In America&quot;, her journey to expose the cruelty that exists in the American pet industry, which has led to the Shelter Hope Pet Shop.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;For more information visit the official website at &lt;a href=&quot;http://savedinamericathefilm.com/&quot; target=&quot;_blank&quot;&gt;http://savedinamericathefilm.com/&lt;/a&gt;&lt;/p&gt;', '&lt;div&gt;&lt;script language=&quot;JavaScript&quot;&gt;\r\nvar AAPPetScrollerSettings = {\r\n    &#039;searchtools_box_width&#039;: &#039;&#039;,\r\n    &#039;searchtools_box_height&#039;: &#039;&#039;,\r\n    &#039;size&#039;: &#039;450x600_grid&#039;,\r\n    &#039;title&#039;: &#039;&#039;,\r\n    &#039;clan_name&#039;: &#039;&#039;,\r\n    &#039;color&#039;: &#039;blue&#039;,\r\n    &#039;shelter_id&#039;: &#039;89929&#039;,\r\n    &#039;sort_by&#039;: &#039;pet_name&#039;\r\n};\r\n\r\n&lt;/script&gt;\r\n&lt;script language=&quot;JavaScript&quot; src=&quot;http://images.adoptapet.com/js/st-portable-pet-list.js&quot;&gt;&lt;/script&gt;\r\n&lt;div align=&quot;right&quot; style=&quot;height: 29px; width: 450px; background-color: white;&quot;&gt;&lt;a href=&quot;http://www.adoptapet.com/&quot; title=&quot;Pet adoption and rescue \r\npowered by Adopt-a-Pet.com&quot; style=&quot;color: #444444; text-decoration:none;&quot;&gt;\r\n&lt;img src=&quot;http://images.adoptapet.com/images/st-logo.gif&quot; alt=&quot;Pet adoption and rescue powered by Adopt-a-Pet.com&quot; width=&quot;121&quot; height=&quot;29&quot; border=&quot;0&quot; align=&quot;right&quot; /&gt;&lt;span style=&quot;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:9px; color: #444444;&quot;&gt;Pet adoption and&lt;br /&gt;rescue powered by&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;\r\n&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE IF NOT EXISTS `press` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `published` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id`, `type`, `title`, `content`, `date`, `link`, `published`) VALUES
(1, 'video', 'Valley View News, about Shelter Hope Pet Shop', '', '2011-11-21', 'http://youtu.be/JvRWBcYcHR4', 1),
(5, 'release', 'Celebrating with Bunnies', '', '2014-04-04', 'http://www.free-press-release.com/news-shelter-hope-pet-shop-celebrating-with-bunnies-at-janss-marketplace-mall-1322711013.html', 1),
(6, 'video', 'BIG Dog Day at Shelter Hope Pet Shop', '', '2012-10-15', 'http://www.youtube.com/watch?v=nYOrJG3v3sM&amp;feature=share&amp;list=UU4MkzS0U5SKZvJybtkgqcUQ', 1),
(7, 'video', 'Halloween at Shelter Hope Pet Shop', '', '2015-10-08', 'http://www.youtube.com/watch?v=CojH_JfYgoY&amp;feature=share&amp;list=UU4MkzS0U5SKZvJybtkgqcUQ', 1),
(8, 'article', 'Shelter program brings adoptable dogs to Thousand Oaks mall ', '', '2012-02-18', 'http://www.vcstar.com/news/shelter-program-brings-adoptable-dogs-to-oaks', 1),
(4, 'video', 'Grand Opening of Shelter Hope Pet Shop at Janss MarketPlace, Thousand Oaks, CA', '', '2011-11-19', 'http://www.youtube.com/watch?v=xRv7p2eRS0Q', 1),
(2, 'article', 'Matthew Mcconaughey rescues shelter dog', '', '2012-08-31', 'http://fidoseofreality.com/matthew-mcconaughey-rescues-shelter-dog/', 1),
(3, 'article', 'County gets creative to adopt pets', '', '2011-11-17', 'http://www.toacorn.com/news/2011-11-17/Front_Page/County_gets_creative_to_adopt_pets.html', 1),
(9, 'article', 'Getting to know you ', '', '2012-01-19', 'http://www.toacorn.com/news/2012-01-19/Front_Page/Getting_to_know_you.html', 1),
(10, 'article', 'Join Shelter Hope Pet Shop for Grand Opening', '', '2011-11-17', 'http://www.fidofriendly.com/blog/join-shelter-hope-pet-shop-for-grand-opening', 1),
(11, 'article', 'Folsom Turkey Trot', '', '2014-11-27', 'http://gooddaysacramento.cbslocal.com/video/10896547-folsom-turkey-trot-pt-2/', 0),
(12, 'article', 'Nimbus Winery Tour', '', '2014-12-04', 'http://gooddaysacramento.cbslocal.com/video/10916191-nimbus-winery/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `is_employee` int(11) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `is_employee`, `access`) VALUES
(1, 'philmayfield', 'Mdfklot123', 1, 0),
(5, 'dani', 'shpsadmin123', 13, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `main_content`
--
ALTER TABLE `main_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
