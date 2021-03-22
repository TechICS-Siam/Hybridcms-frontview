-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 07:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techics_hybrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `button_one_text` text NOT NULL,
  `button_one_text_url` text NOT NULL,
  `button_two_text` text NOT NULL,
  `button_two_text_url` text NOT NULL,
  `title_one` text NOT NULL,
  `description_one` text NOT NULL,
  `title_two` text NOT NULL,
  `description_two` text NOT NULL,
  `title_three` text NOT NULL,
  `description_three` text NOT NULL,
  `title_three_link` text NOT NULL,
  `title_three_url` text NOT NULL,
  `image` text NOT NULL,
  `title_snd` text NOT NULL,
  `description_snd` text NOT NULL,
  `image_snd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `heading`, `description`, `button_one_text`, `button_one_text_url`, `button_two_text`, `button_two_text_url`, `title_one`, `description_one`, `title_two`, `description_two`, `title_three`, `description_three`, `title_three_link`, `title_three_url`, `image`, `title_snd`, `description_snd`, `image_snd`) VALUES
(1, 'We believe everyone can be a Trailblazer, and we’re building the technology to make it happen.', 'The Fourth Industrial Revolution is changing the way people work, using robotics, AI, the Internet of Things, and more. By making these innovations easier and more accessible, we’re helping create a future with greater opportunity and equality for all.', 'Watch demos', 'aa', 'Explore our products', 'aa', 'Together, we’re creating a future of new opportunities.aaa', 'Trailblazers don’t fear change, we embrace it. ', 'Welcome to our Ohana. ', 'Our Ohana, a Hawaiian word for intentional family, is guided by four core values that serve as the foundation for our decisions, actions, and communication.', 'Welcome to our Ohana.', 'Our Ohana, a Hawaiian word for intentional family, is guided by four core values that serve as the foundation for our decisions, actions, and communication. T\r\n ', 'Watch The Video', 'aa', '5.png', 'We have a history of helping companies, and the', 'In 1999, we pioneered cloud-based CRM software and have ', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `phone`, `username`, `email`, `password`, `photo`, `status`, `created_at`) VALUES
(1, 'Mr', 'Admin', '01703960157', 'admin', 'admin@admin.com', 'MTIzNDU2Nzg=', 'admin.png', 1, '2020-12-20 05:19:32'),
(3, 'Sadik', 'Khan', '01703960157', 'sadik', 'sadik.cse15@gmail.com', 'MTIzNDU2Nzg=', NULL, 1, '2020-12-20 10:37:44'),
(4, 'Tech', 'ICS', '01703960157', 'TechICS', 'info@techics.com', 'MTIzNDU2Nzg=', NULL, 1, '2020-12-20 10:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_page`
--

CREATE TABLE `admin_login_page` (
  `id` int(11) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `header` text DEFAULT NULL,
  `email_username_label_text` varchar(255) DEFAULT NULL,
  `email_username_input_field_placeholder` varchar(255) DEFAULT NULL,
  `password_label_text` varchar(255) DEFAULT NULL,
  `password_input_field_placeholder` varchar(255) DEFAULT NULL,
  `show_password_text` varchar(255) DEFAULT NULL,
  `hide_password_text` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `footer_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login_page`
--

INSERT INTO `admin_login_page` (`id`, `main_image`, `header`, `email_username_label_text`, `email_username_input_field_placeholder`, `password_label_text`, `password_input_field_placeholder`, `show_password_text`, `hide_password_text`, `button_text`, `footer_text`) VALUES
(1, 'hybrid-cms-admin-panel-login-image.jpg', 'We are the Hero', 'Email/ Username', 'Enter Your Email or username', 'Password', 'Enter Your Password', 'Show Password', 'Hide Password', 'Sign In', 'Design and Develop By Tech ICS');

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`id`, `title`, `description`) VALUES
(1, 'Plans & Pricing', 'Take a look at our list of plans and prices available to fit your\r\nteams’ needs. Get started for free. No credit card required.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_menu_tbl`
--

CREATE TABLE `blog_menu_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `alt_tag` text NOT NULL,
  `fb_url` text NOT NULL,
  `tw_url` text NOT NULL,
  `insta_url` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_menu_tbl`
--

INSERT INTO `blog_menu_tbl` (`id`, `title`, `slug`, `date`, `image`, `alt_tag`, `fb_url`, `tw_url`, `insta_url`, `description`, `status`) VALUES
(6, NULL, NULL, '', 'role-based-access-control3.jpg', 'Role-based access control', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, recusandae aliquam. Lorem ipsum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_menu`
--

CREATE TABLE `company_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `servs_title` text NOT NULL,
  `short_des` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_menu`
--

INSERT INTO `company_menu` (`id`, `title`, `servs_title`, `short_des`, `button_text`, `button_url`) VALUES
(1, 'The Full CRM Platform', 'Hybrid CMS', 'Learn more about Ravetree’s award-winning work management solution.', 'Request Demo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `heading`, `description`, `image`, `title`) VALUES
(1, ' GET IN TOUCH', '<div class=\"contatc-list\">\r\n                     <p class=\"py-3\">Chat about your company’s goals and find out how Salesforce can boost your business.</p>\r\n                     <ul class=\"list-unstyled\">\r\n                         <li><a href=\"\">\r\n                           <i class=\"con ion-checkmark\"></i> Get advice from an expert team who understand your business needs\r\n                        </a></li>\r\n                        <li><a href=\"\">          \r\n                          <i class=\"con ion-checkmark\"></i>   Learn more about how our platform works\r\n                        </a></li>\r\n                        <li><a href=\"\">                       \r\n                          <i class=\"con ion-checkmark\"></i>  Find out how Salesforce has transformed businesses in your industry.\r\n                        </a></li>\r\n                     </ul>\r\n                     </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p class=\"py-3 contact-add\">\r\n                        Simply fill out the form or call us at \r\n                         <a href=\"tel:0207 237 3388\">\r\n                        0207 237 3388\r\n                    </a>\r\n</p>', 'arrange-a-free-call-back-from-our-expert-team-to-find-out-how-salesforce-can-transform-your-business..jpg', 'Arrange a free call back from our expert team to find out how Salesforce can transform your business.'),
(1, ' GET IN TOUCH', '<div class=\"contatc-list\">\r\n                     <p class=\"py-3\">Chat about your company’s goals and find out how Salesforce can boost your business.</p>\r\n                     <ul class=\"list-unstyled\">\r\n                         <li><a href=\"\">\r\n                           <i class=\"con ion-checkmark\"></i> Get advice from an expert team who understand your business needs\r\n                        </a></li>\r\n                        <li><a href=\"\">          \r\n                          <i class=\"con ion-checkmark\"></i>   Learn more about how our platform works\r\n                        </a></li>\r\n                        <li><a href=\"\">                       \r\n                          <i class=\"con ion-checkmark\"></i>  Find out how Salesforce has transformed businesses in your industry.\r\n                        </a></li>\r\n                     </ul>\r\n                     </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p class=\"py-3 contact-add\">\r\n                        Simply fill out the form or call us at \r\n                         <a href=\"tel:0207 237 3388\">\r\n                        0207 237 3388\r\n                    </a>\r\n</p>', 'arrange-a-free-call-back-from-our-expert-team-to-find-out-how-salesforce-can-transform-your-business..jpg', 'Arrange a free call back from our expert team to find out how Salesforce can transform your business.');

-- --------------------------------------------------------

--
-- Table structure for table `customer_stories`
--

CREATE TABLE `customer_stories` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_stories`
--

INSERT INTO `customer_stories` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-28 05:29:35', 'card-title.jpg', 'Card title ', 'This is a wider card', '  Read more', '#', 1),
(6, '2021-02-28 05:30:13', 'card-title1.jpg', 'Card title', 'This is a wider card', 'Read more', '#', 1),
(7, '2021-02-28 05:30:46', 'card-title2.jpg', 'Card title', 'This is a wider card', 'Read more', '#', 1),
(8, '2021-02-28 05:31:50', 'card-title3.jpg', 'Card title', 'This is a wider card', 'Read more', '#', 1),
(9, '2021-02-28 05:32:27', 'card-title4.jpg', 'Card title', 'This is a wider card', 'Read more', '#', 1),
(10, '2021-02-28 05:33:00', 'card-title5.jpg', 'Card title ', 'This is a wider card', 'Read more', '#', 1),
(11, '2021-02-28 05:33:37', 'card-title6.jpg', 'Card title', 'This is a wider card', 'Read more', '#', 1),
(12, '2021-02-28 05:35:05', 'card-title7.jpg', 'Card title ', 'This is a wider card  ', 'Read more', '#', 1),
(13, '2021-02-28 05:37:15', 'card-title8.jpg', 'Card title ', 'This is a wider card  ', 'Read more', '#', 1),
(14, '2021-02-28 05:37:39', 'card-title9.jpg', 'Card title ', 'This is a wider card  ', 'Read more', '#', 1),
(15, '2021-02-28 05:38:04', 'card-title10.jpg', 'Card title ', 'This is a wider card ', ' Read more', '#', 1),
(16, '2021-02-28 05:38:33', 'card-title11.jpg', 'Card title ', 'This is a wider card  ', 'Read more', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table`
--

CREATE TABLE `custom_table` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_table`
--

INSERT INTO `custom_table` (`id`, `title`, `description`, `page`, `button_text`) VALUES
(1, 'Powerful alone. Better together.', 'TechICS offers a complete CRM platform with all the tools and integrations you need to grow better — whether you want to increase leads, accelerate sales, streamline customer service, or build a powerful website. They’re powerful alone, but even better when used together. TechICS offers a complete CRM platform with all the tools and integrations you need to grow better — whether you want to increase leads, accelerate sales, streamline customer service, or build a powerful website. They’re powerful alone, but even better when used together.\r\n\r\n', 'section-four', NULL),
(2, 'We\'re here to help.', 'Lorem ipsum dolor sit amet consectetur, provident aliquam fuga velit.\r\n<br>\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique', 'section-five', NULL),
(3, NULL, NULL, NULL, NULL),
(4, 'Our customer stories', 'TechICS CMS Full Plan will let you manage your business, from the start of their journey with you. Our platform allows you to manage your customers through a number of automation, helping you both grow and sustain your business.\r\n\r\nOur tools are here to help your business manage and sustain its growth. We love helping you.', 'section-ten', 'Read more case studies'),
(5, NULL, NULL, NULL, NULL),
(6, 'Start a free trial', 'Tour the product and try Scoro for free for 14\r\ndays, no credit card required.', 'section-eleven', 'Strat Trial'),
(7, NULL, NULL, NULL, NULL),
(10, 'What can Ravetree do for you?', NULL, 'section-seven', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq_info`
--

CREATE TABLE `faq_info` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL,
  `title_two` text NOT NULL,
  `dropdown` text NOT NULL,
  `dropdown_two` text NOT NULL,
  `title_three` text NOT NULL,
  `dropdown_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_info`
--

INSERT INTO `faq_info` (`id`, `heading`, `title`, `title_two`, `dropdown`, `dropdown_two`, `title_three`, `dropdown_three`) VALUES
(1, 'FREQUENTLY ASKED QUESTIONS', 'I am totally new to this website thing. How does the whole process work? ', 'How much does a website cost?', 'Simply complete our \"IT quote\" form or simply choose from our \"website packages\". A member of our team will be in touch to discuss in detail with no obligation to proceed.', 'The cost of a website can vary depending on various factors, this is based on site design, functionality as well as further support required. Though our website projects generally start in the $249 range for basic business sites and range upward depending on your unique needs. If a website or application does not match the wishes of its user or if users are unable to easily fulfil the intended actions, then less people will be visiting your website. Seemingly small features like headlines or an image next to the “buy” button can have serious consequences. Therefore, aspects like menu navigation or text to image ratio can be hugely influential. User surveys and interviews are an effort and cost intensive process and are therefore often left out of the development process. Tech ICS can address these issues by gathering invaluable usability feedback from both your internal and external stakeholders.', 'What kind of businesses do you work with?', 'We work with a broad range of company types [small start-ups, large corporations, nonprofits, B2B, B2C and more] across many business industries [technology, food, apparel, health + beauty, camps, travel, finance, arts, fair trade, and more.] Over the years, we\'ve helped businesses improve customer service, market their products, and attract customers. Functionality requests range from basic contact forms to advanced integrated applications. Our team takes the time to get to know your industry, organisation, and competitors to ensure your site supports all of your goals.');

-- --------------------------------------------------------

--
-- Table structure for table `faq_menu_tbl`
--

CREATE TABLE `faq_menu_tbl` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `menu` text NOT NULL,
  `submenu` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_menu_tbl`
--

INSERT INTO `faq_menu_tbl` (`id`, `date`, `menu`, `submenu`, `status`) VALUES
(1, '', '3. What kind of businesses do you work with?', 'We work with a broad range of company types [small start-ups, large corporations, nonprofits, B2B, B2C and more] across many business industries [technology, food, apparel, health + beauty, camps, travel, finance, arts, fair trade, and more.] Over the years, we\'ve helped businesses improve customer service, market their products, and attract customers. Functionality requests range from basic contact forms to advanced integrated applications. Our team takes the time to get to know your industry, organisation, and competitors to ensure your site supports all of your goals.', 1),
(2, '', '2. How much does a website cost?', 'The cost of a website can vary depending on various factors, this is based on site design, functionality as well as further support required. Though our website projects generally start in the $249 range for basic business sites and range upward depending on your unique needs. If a website or application does not match the wishes of its user or if users are unable to easily fulfil the intended actions, then less people will be visiting your website. Seemingly small features like headlines or an image next to the “buy” button can have serious consequences. Therefore, aspects like menu navigation or text to image ratio can be hugely influential. User surveys and interviews are an effort and cost intensive process and are therefore often left out of the development process. Tech ICS can address these issues by gathering invaluable usability feedback from both your internal and external stakeholders.', 1),
(3, '', '1. I am totally new to this \"website thing\". How does the whole process work?', 'Simply complete our \"IT quote\" form or simply choose from our \"website packages\". A member of our team will be in touch to discuss in detail with no obligation to proceed.', 1),
(4, '', '4. How does your pricing work?', 'Hybrid CMS is a tiered subscription service so the pricing depends on the number of people in your team as well as the plan that suits you the best.\r\n\r\n', 1),
(5, '', '5. Which plan is right for me?', 'Get an overview of the plans and offered features by checking out the plans’ comparison table above. Should you need any help figuring that out, our Consultants would be more than happy to help!', 1),
(6, '', '6. How long will it take to get up and running?', 'That depends on the size of your team and company, and your requirements. For most of our customers getting fully up and running with Hybrid CMS takes from a few days up to a few weeks – that includes importing your data (contacts, invoices, etc.), and getting to know the system.', 1),
(7, '', '7. How does your onboarding work?', 'Our Onboarding team helps you with all aspects of getting started with Hybrid CMS and we are happy to tailor the onboarding package to your exact needs and business processes. An onboarding package may include help on setting up the site, business process mapping, help on importing data, help on setting up integrations, training for your team, etc. See more info about the onboarding packages here.\r\nAccording to Hybrid CMS’s Onboarding team: “We’ve helped hundreds of companies in using Hybrid CMS and working more efficiently. When we’re doing team trainings for Hybrid CMS’s users, we can solve the questions and issues right away and show the new users all the tips and tricks on how to use the system.”  ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `help_info`
--

CREATE TABLE `help_info` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_two` text NOT NULL,
  `dropdown` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_info`
--

INSERT INTO `help_info` (`id`, `title`, `title_two`, `dropdown`, `description`) VALUES
(1, 'Help', ' Hi ANNA MARIE, we\'re here to help.', '', '<div class=\"col-lg-9 col-sm-6\">\r\n           <div class=\"row\">\r\n             <div class=\"col-md-12\">\r\n              <i class=\"fas fa-rocket d-inline-block fa-rocketsp pr-2\"></i>\r\n               <h4 class=\"  d-inline-block\">Popular actions</h4>\r\n             </div>\r\n             <div class=\"col-md-12\">\r\n               <div class=\"border d-inline-block p-3 px-4\">\r\n                 <h6 class=\"font-weight-bold\">\r\n                  Visit our Help Forum                 \r\n                 </h6>\r\n                <div class=\"d-flex\">\r\n                 <p class=\"\">\r\n                  View, ask, or answer questions about using Hybrid CMS. <br> Our moderators and community can help!\r\n                 </p>\r\n                 <button class=\"midarchdvspbt\">Visit Help Forum</button>\r\n                </div>\r\n               </div>\r\n             </div>\r\n             <div class=\"col-md-12 my-4\">\r\n              <div class=\"midcontdvsp\">\r\n                <h6 class=\"f\">\r\n                  Other popular actions:\r\n                  <hr class=\"\"> \r\n                </h6>\r\n                <div class=\"row\">\r\n                  <div class=\"col-md-6\">\r\n                    <ul class=\"list-unstyled\">\r\n                       <li class=\"\">\r\n                         <a href=\"\">\r\n                          Change or add email address\r\n                         </a>\r\n                        </li>\r\n                       <li class=\"\">\r\n                         <a href=\"\">\r\n                          Reset your password\r\n                         </a>\r\n                        </li>\r\n                       <li class=\"\">\r\n                         <a href=\"\">\r\n                          Upgrade or cancel your subscription\r\n                         </a>\r\n                        </li>\r\n                     </ul>\r\n                  </div>\r\n                  <div class=\"col-md-6\">\r\n                    <ul class=\"list-unstyled\">\r\n \r\n                \r\n                      <li class=\"\">\r\n                        <a href=\"\">\r\n                         Close your account\r\n                        </a>\r\n                       </li>\r\n                      <li class=\"\">\r\n                        <a href=\"\">\r\n                         Manage emails you get from Hybrid CMS\r\n                        </a>\r\n                       </li>\r\n                      <li class=\"\">\r\n                        <a href=\"\">\r\n                         Merge Connections from Two Hybrid CMS Accounts\r\n     \r\n                        </a>\r\n                       </li>\r\n                    </ul>\r\n                  </div>\r\n                </div>                           \r\n              </div>\r\n             </div>\r\n             <div class=\"col-md-12\">\r\n              <i class=\"far fa-address-book d-inline-block fa-rocketsp pr-2\"></i>\r\n               <h4 class=\"  d-inline-block\">Suggested for you</h4>\r\n               <div class=\"midcontdvsp\">\r\n                <h5 class=\"f pt-4\">\r\n                  <a href=\"\">\r\n                    Hybrid CMS Homepage - FAQs\r\n                  </a>\r\n                 \r\n                </h5> \r\n                <p class=\"\">\r\n                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, explicabo!\r\n                  consectetur adipisicing elit. Dignissimos, explicabo!consectetur adipisicing elit. Dignissimos, explicabo!\r\n                </p> \r\n                <hr class=\"\">            \r\n                </div>\r\n                <div class=\"midcontdvsp\">\r\n                  <h5 class=\"f pt-4\">\r\n                    <a href=\"\">\r\n                      Hybrid CMS Homepage - FAQs\r\n                    </a>\r\n                   \r\n                  </h5> \r\n                  <p class=\"\">\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, explicabo!\r\n                    consectetur adipisicing elit. Dignissimos, explicabo!consectetur adipisicing elit. Dignissimos, explicabo!\r\n                  </p> \r\n                  <hr class=\"\">            \r\n                  </div>\r\n                  <div class=\"midcontdvsp\">\r\n                    <h5 class=\"f pt-4\">\r\n                      <a href=\"\">\r\n                        Hybrid CMS Homepage - FAQs\r\n                      </a>\r\n                     \r\n                    </h5> \r\n                    <p class=\"\">\r\n                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, explicabo!\r\n                      consectetur adipisicing elit. Dignissimos, explicabo!consectetur adipisicing elit. Dignissimos, explicabo!\r\n                    </p> \r\n                    <hr class=\"\">            \r\n                    </div>\r\n                    <div class=\"midcontdvsp\">\r\n                      <h5 class=\"f pt-4\">\r\n                        <a href=\"\">\r\n                          Hybrid CMS Homepage - FAQs\r\n                        </a>\r\n                       \r\n                      </h5> \r\n                      <p class=\"\">\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, explicabo!\r\n                        consectetur adipisicing elit. Dignissimos, explicabo!consectetur adipisicing elit. Dignissimos, explicabo!\r\n                      </p> \r\n                      <hr class=\"\">            \r\n                      </div>\r\n             </div>\r\n             <div class=\"col-md-12\">\r\n              <div class=\"midcontdvsp\">\r\n                <div class=\"row\">\r\n                <div class=\"col-md-6\">\r\n                  <i class=\"far fa-comments d-inline-block fa-rocketsp pr-2\"></i>\r\n                  <h5 class=\"d-inline-block font-weight-bold\">Help Forum</h5>\r\n                  <p class=\"\">\r\n                    Have questions? Hybrid CMS knowledge you want to share? Head over to the\r\n                  </p>\r\n                  <a href=\"#\" class=\"\">\r\n                    Hybrid CMS Help Forum.\r\n                  </a>\r\n                </div>\r\n\r\n                 <div class=\"col-md-6\">\r\n                  <i class=\"fas fa-desktop d-inline-block fa-rocketsp pr-2\"></i>\r\n                  <h5 class=\"d-inline-block font-weight-bold\">Safety Center</h5>\r\n                  <p class=\"\">\r\n                    Concerned about safety? Learn more about staying safe\r\n                  </p>\r\n                  <a href=\"#\" class=\"\">\r\n                    Hybrid CMS Help Forum.\r\n                  </a>\r\n                </div>\r\n              </div>\r\n\r\n              </div>\r\n             </div>\r\n             \r\n             </div>\r\n            \r\n        </div>');

-- --------------------------------------------------------

--
-- Table structure for table `help_menu_tbl`
--

CREATE TABLE `help_menu_tbl` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `menu` text NOT NULL,
  `submenu_one` text NOT NULL,
  `submenu_one_link` text NOT NULL,
  `submenu_two` text NOT NULL,
  `submenu_two_link` text NOT NULL,
  `submenu_three` text NOT NULL,
  `submenu_three_link` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_menu_tbl`
--

INSERT INTO `help_menu_tbl` (`id`, `date`, `menu`, `submenu_one`, `submenu_one_link`, `submenu_two`, `submenu_two_link`, `submenu_three`, `submenu_three_link`, `status`) VALUES
(1, '', 'Getting Started', 'Sub Menu', 'Sub Menu', 'Sub Menu', 'Sub Menu', 'Sub Menu', 'Sub Menu', 1),
(2, '', 'Known Issues', 'submenu', 'http://localhost/hybrid-bck/', 'submenu', 'http://localhost/hybrid-bck/', 'submenu', 'http://localhost/hybrid-bck/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `industries_menu`
--

CREATE TABLE `industries_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `servs_title` text NOT NULL,
  `short_des` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries_menu`
--

INSERT INTO `industries_menu` (`id`, `title`, `servs_title`, `short_des`, `button_text`, `button_url`) VALUES
(1, 'The Full CRM Platform', 'Hybrid CMS', 'Learn more about Ravetree’s award-winning work management solution.', 'Request Demo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `investor_relation`
--

CREATE TABLE `investor_relation` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_relation`
--

INSERT INTO `investor_relation` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1),
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `investor_relation_one`
--

CREATE TABLE `investor_relation_one` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_des` text NOT NULL,
  `short_des_url` text NOT NULL,
  `date` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_relation_one`
--

INSERT INTO `investor_relation_one` (`id`, `image`, `title`, `short_des`, `short_des_url`, `date`, `status`) VALUES
(6, 'interim-results-2019-20.jpg', 'Interim Results 2019/20', 'Interim Results for the 28 weeks to 21st September', '#', '', 1),
(17, 'first-quarter-trading-statement-2020-21.jpg', 'First Quarter Trading Statement 2020/21', 'First Quarter Trading Statement for the 16 weeks to 27 June 2020', '#', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `investor_relation_three`
--

CREATE TABLE `investor_relation_three` (
  `id` int(11) NOT NULL,
  `tag` text DEFAULT NULL,
  `tag_url` text NOT NULL,
  `date` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_relation_three`
--

INSERT INTO `investor_relation_three` (`id`, `tag`, `tag_url`, `date`, `status`) VALUES
(17, 'Manage your shares', '#', '', 1),
(18, 'ADR information', '#', '', 1),
(19, 'Dividends', '#', '', 1),
(20, 'B Shares', '#', '', 1),
(21, 'AGM', '#', '', 1),
(22, 'HRG acquisition', '#', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `investor_relation_two`
--

CREATE TABLE `investor_relation_two` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_des` text NOT NULL,
  `short_des_url` text NOT NULL,
  `date` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_relation_two`
--

INSERT INTO `investor_relation_two` (`id`, `title`, `short_des`, `short_des_url`, `date`, `button_text`, `button_url`, `status`) VALUES
(3, 'Financial calendar ', 'Dividend Payment Date', '#', '', 'View full calendar', '#', 1),
(17, 'Regulatory news', 'Sainsbury’s to forgo business rates relief', '#', '', 'Continue Reading ', '#', 1),
(18, 'Financial calendar ', 'Dividend Payment Date', '#', '', 'View full calendar', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `investor_relation_update`
--

CREATE TABLE `investor_relation_update` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `heading` text NOT NULL,
  `short_des` text NOT NULL,
  `button_one` text NOT NULL,
  `button_one_url` text NOT NULL,
  `button_two` text NOT NULL,
  `button_two_url` text NOT NULL,
  `button_three` text NOT NULL,
  `button_three_url` text NOT NULL,
  `button_four` text NOT NULL,
  `button_four_url` text NOT NULL,
  `project_title` text NOT NULL,
  `project_short_des` text NOT NULL,
  `file_one` text NOT NULL,
  `file_two` text NOT NULL,
  `file_three` text NOT NULL,
  `file_four` text NOT NULL,
  `middle_des` text NOT NULL,
  `title_two` text NOT NULL,
  `title_three` text NOT NULL,
  `title_four` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor_relation_update`
--

INSERT INTO `investor_relation_update` (`id`, `image`, `heading`, `short_des`, `button_one`, `button_one_url`, `button_two`, `button_two_url`, `button_three`, `button_three_url`, `button_four`, `button_four_url`, `project_title`, `project_short_des`, `file_one`, `file_two`, `file_three`, `file_four`, `middle_des`, `title_two`, `title_three`, `title_four`) VALUES
(1, 'investors1.jpg', 'Investors', 'As an evolving retail group, with a portfolio of strong brands, we can create consistent value for our shareholders. In this section you’ll find all you need to know about our performance as a business.', 'Shareholder Information ', '#', 'Regulatory News', '#', 'Reports & Presentations ', '#', 'Corporate Responsibility', '#', 'Interim Results 2020/21 28 ', 'weeks to 19th September 2020', '.sql', '1.sql', '2.sql', '3.sql', '', 'Our performance', 'Latest updates', 'Quick links');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `telephone` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `email` text NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_title` text NOT NULL,
  `footer_title_two` text NOT NULL,
  `tech_link` text NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `telephone`, `button_text`, `button_url`, `email`, `logo`, `footer_title`, `footer_title_two`, `tech_link`, `favicon`, `facebook`, `twitter`, `linkedin`, `youtube`) VALUES
(1, 'Customer Services : 0207 237 3388', 'Start Free Trial', 'Start Free Trial', 'info@techics.com', 'hybrid-cms-logo8.png', ' User Agreement | GPDR | Terms & Conditions', 'Tech ICS | 2020 | All rights reserved', '', 'hybrid-cms-favicon.png', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `manage_company`
--

CREATE TABLE `manage_company` (
  `id` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_link` text NOT NULL,
  `menu_title` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_company`
--

INSERT INTO `manage_company` (`id`, `menu_icon`, `menu_name`, `date`, `menu_link`, `menu_title`, `status`) VALUES
(17, '', 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, '', 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, '', 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_industries`
--

CREATE TABLE `manage_industries` (
  `id` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_link` text NOT NULL,
  `menu_title` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_industries`
--

INSERT INTO `manage_industries` (`id`, `menu_icon`, `menu_name`, `date`, `menu_link`, `menu_title`, `status`) VALUES
(17, '', 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, '', 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, '', 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_pricing`
--

CREATE TABLE `manage_pricing` (
  `id` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_link` text NOT NULL,
  `menu_title` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_pricing`
--

INSERT INTO `manage_pricing` (`id`, `menu_icon`, `menu_name`, `date`, `menu_link`, `menu_title`, `status`) VALUES
(17, '', 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, '', 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, '', 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_ressources`
--

CREATE TABLE `manage_ressources` (
  `id` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_link` text NOT NULL,
  `menu_title` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_ressources`
--

INSERT INTO `manage_ressources` (`id`, `menu_icon`, `menu_name`, `date`, `menu_link`, `menu_title`, `status`) VALUES
(17, '', 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, '', 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, '', 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(20, 'aaaaaa', 'aaaaaaaaaa', '2021-03-01 12:57:25', 'aaaaaaaaaa', 'aaaaaaaa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_solutions`
--

CREATE TABLE `manage_solutions` (
  `id` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_link` text NOT NULL,
  `menu_title` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_solutions`
--

INSERT INTO `manage_solutions` (`id`, `menu_icon`, `menu_name`, `date`, `menu_link`, `menu_title`, `status`) VALUES
(17, '', 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, '', 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, '', 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsroom`
--

CREATE TABLE `newsroom` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsroom`
--

INSERT INTO `newsroom` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1),
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsroom_info`
--

CREATE TABLE `newsroom_info` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsroom_info`
--

INSERT INTO `newsroom_info` (`id`, `image`, `title`) VALUES
(1, 'plans-pricing1.jpg', 'Newsroom');

-- --------------------------------------------------------

--
-- Table structure for table `news_main_tbl`
--

CREATE TABLE `news_main_tbl` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_main_tbl`
--

INSERT INTO `news_main_tbl` (`id`, `date`, `heading`, `description`, `button_text`, `button_url`, `status`) VALUES
(6, '0000-00-00 00:00:00', 'Freshworks unveils Freshworks CRM, a unified sales and marketing experience that accelerates deals and creates customers for life', 'Freshworks Inc., the customer and employee engagement software company, today unveiled Freshworks CRM, uniting sales and marketing teams with out-of-the-box capabilities for an unsurpassed and unified 360-degree view of the customer to deliver better experiences and more profitable outcomes. The', 'Continue Reading', '#', 1),
(16, '0000-00-00 00:00:00', 'Freshworks Rated Top 25 Private Cloud Company to Work for during COVID-19', 'Freshworks Inc., the customer and employee engagement software company, was recognized as one of the 25 Highest Rated Private Cloud Computing Companies To Work For in a list released by Battery Ventures, a global investment firm and cloud investor, with data specifically provided by Glassdoor*', 'Continue Reading ', '#', 1),
(17, '2021-02-28 11:56:48', 'Freshworks Rated Top 25 Private Cloud Company to Work for during COVID-19', 'Freshworks Inc., the customer and employee engagement software company, was recognized as one of the 25 Highest Rated Private Cloud Computing Companies To Work For in a list released by Battery Ventures, a global investment firm and cloud investor, with data specifically provided by Glassdoor*…', 'LEARN MORE', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_sub_tbl`
--

CREATE TABLE `news_sub_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_des` text NOT NULL,
  `short_des_url` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_sub_tbl`
--

INSERT INTO `news_sub_tbl` (`id`, `title`, `short_des`, `short_des_url`, `date`, `status`) VALUES
(1, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(2, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(3, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(5, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(6, 'Tech HR Series', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(16, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(17, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1),
(19, 'Tech HR Series ', 'Freshworks Rated Top 25 Private Cloud Company To Work For During COVID-19', '#', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_five`
--

CREATE TABLE `partner_sec_five` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_five`
--

INSERT INTO `partner_sec_five` (`id`, `date`, `image`, `status`) VALUES
(17, '2021-02-27 13:48:31', '20.png', 1),
(18, '2021-02-27 13:48:21', '19.png', 1),
(19, '2021-02-27 13:48:50', '110.png', 1),
(20, '2021-02-27 13:49:00', '111.png', 1),
(21, '2021-02-27 13:49:09', '112.png', 1),
(22, '2021-02-27 13:49:17', '113.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_four`
--

CREATE TABLE `partner_sec_four` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `rating` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_four`
--

INSERT INTO `partner_sec_four` (`id`, `date`, `image`, `rating`, `status`) VALUES
(6, '2021-02-27 13:26:11', '7.webp', '4.6/5', 1),
(16, '2021-02-27 13:24:17', '17.png', '4.6/5', 1),
(17, '2021-02-27 13:25:23', '4.6-5.png', '4.6/5', 1),
(18, '2021-02-27 13:25:33', '4.6-51.png', '4.6/5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_one`
--

CREATE TABLE `partner_sec_one` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_one`
--

INSERT INTO `partner_sec_one` (`id`, `title`, `date`, `image`, `description`, `status`) VALUES
(17, 'Referral Partner', '2021-02-27 12:49:25', 'referral-partner.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(18, 'Referral Partner', '2021-02-27 13:03:24', 'referral-partner1.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1),
(19, 'Referral Partner', '2021-02-27 13:04:00', 'referral-partner2.png', '<p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">Introduce new Scoro customers and earn up to 15% referral bonus.</p><p class=\"text-center px-5\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 20px; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px;\">As a Referral Partner, we equip you with a customized personal link to sign up new prospects.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_six`
--

CREATE TABLE `partner_sec_six` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `main_title` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `dp_image` text NOT NULL,
  `dp_name` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_six`
--

INSERT INTO `partner_sec_six` (`id`, `title`, `main_title`, `date`, `image`, `dp_image`, `dp_name`, `button_text`, `button_url`, `status`) VALUES
(6, 'CASE STUDIES', 'Tehnopol Science and Business Park Accelerates Growth with Scoro', '2021-02-27 14:03:45', 'case-studies3.jpg', 'role-based-access-control15.jpg', ' ULLA KATTAI-AAV', '2 MIN READ', '#', 1),
(16, 'CASE STUDIES', 'Tehnopol Science and Business Park Accelerates Growth with Scoro', '2021-02-27 14:02:23', 'case-studies1.jpg', 'case-studies2.jpg', 'ULLA KATTAI-AAV', '2 MIN READ', '#', 1),
(18, 'CASE STUDIES  ', 'Tehnopol Science and Business Park Accelerates Growth with Scoro ', '2021-02-27 14:05:07', 'case-studies4.jpg', 'case-studies.png', 'ULLA KATTAI-AAV ', '2 MIN READ', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_three`
--

CREATE TABLE `partner_sec_three` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `dp_name` text NOT NULL,
  `address` text NOT NULL,
  `short_des` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_three`
--

INSERT INTO `partner_sec_three` (`id`, `date`, `image`, `dp_name`, `address`, `short_des`, `status`) VALUES
(6, '2021-02-27 13:20:34', 'dan-stevens1.jpg', 'Dan Stevens ', 'Primary UK', 'Scoro helped us to increase our team\'s overall efficiency by 20%. We can now manage our entire company with a single tool.', 1),
(16, '2021-02-27 13:19:14', 'dan-stevens.jpg', 'Dan Stevens ', 'Primary UK', 'Scoro helped us to increase our team\'s overall efficiency by 20%. We can now manage our entire company with a single tool.', 1),
(17, '2021-02-27 13:21:00', 'dan-stevens2.jpg', 'Dan Stevens ', 'Primary UK', 'Scoro helped us to increase our team\'s overall efficiency by 20%. We can now manage our entire company with a single tool.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sec_two`
--

CREATE TABLE `partner_sec_two` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_sec_two`
--

INSERT INTO `partner_sec_two` (`id`, `title`, `date`, `image`, `description`, `status`) VALUES
(6, 'Diversify service portfolio and boost revenue', '2021-02-27 13:11:21', 'diversify-service-portfolio-and-boost-revenue.png', '<span style=\"color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px; text-align: center;\">Add additional revenue streams plus new customization and consulting opportunities to your business.</span><br>', 1),
(16, 'Be a trusted advisor', '2021-02-27 13:08:12', 'be-a-trusted-advisor.png', '<p><span style=\"color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px; text-align: center;\">Earn customer trust by advising on the evaluation and implementation of Scoro’s all-in-one work management solution.</span><br></p>', 1),
(17, 'Drive your customers’ success', '2021-02-27 13:09:02', 'drive-your-customers-success.png', '<p><span style=\"color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; font-size: 16px; text-align: center;\">Make an impact and be a part of your customer’s success story.</span><br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_update`
--

CREATE TABLE `partner_update` (
  `id` int(11) NOT NULL,
  `title_one` text NOT NULL,
  `des_one` text NOT NULL,
  `title_two` text NOT NULL,
  `des_two` text NOT NULL,
  `title_three` text NOT NULL,
  `title_four` text NOT NULL,
  `title_five` text NOT NULL,
  `title_six` text NOT NULL,
  `button_text_one` text NOT NULL,
  `button_url_one` text NOT NULL,
  `button_text_two` text NOT NULL,
  `button_url_two` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_update`
--

INSERT INTO `partner_update` (`id`, `title_one`, `des_one`, `title_two`, `des_two`, `title_three`, `title_four`, `title_five`, `title_six`, `button_text_one`, `button_url_one`, `button_text_two`, `button_url_two`) VALUES
(1, 'Plans & Pricing', 'Take a look at our list of plans and prices available to fit your\r\nteams’ needs. Get started for free. No credit card required. a', 'Benefits of joining the Scoro Partners Program', 'As a partner, you’ll have access to exceptional resources, trainings and support to grow your practice. With Scoro, you can be the superpower behind your customer’s success, while we have your back.', 'What our clients say about us', 'Highly rated on review sites', 'Awards', 'Scoro Customer Success Stories', 'More posts', '#', 'Apply for the Partner Program', '#');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1),
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_menu`
--

CREATE TABLE `pricing_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `servs_title` text NOT NULL,
  `short_des` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_menu`
--

INSERT INTO `pricing_menu` (`id`, `title`, `servs_title`, `short_des`, `button_text`, `button_url`) VALUES
(1, 'The Full CRM Platform', 'Hybrid CMS', 'Learn more about Ravetree’s award-winning work management solution.', 'Request Demo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_sub_tbl`
--

CREATE TABLE `pricing_sub_tbl` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `feature_title` varchar(255) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `button_open` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricing_sub_tbl`
--

INSERT INTO `pricing_sub_tbl` (`id`, `icon`, `title`, `description`, `feature_title`, `features`, `status`, `date`, `button_text`, `button_url`, `button_open`) VALUES
(1, '<i class=\"fas fa-bullseye\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-28 07:11:37', 'Get Free CMS', '#', 1),
(2, '<i class=\"fab fa-artstation\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-28 07:11:37', 'Get Free CMS', '#', 1),
(3, '<i class=\"fab fa-edge\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-28 07:11:37', 'Get Free CMS', '#', 1),
(4, '<i class=\"fas fa-cannabis\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-28 07:11:37', 'Get Free CMS', '#', 1),
(5, '<i class=\"fab fa-gripfire\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-28 07:11:37', 'Get Free CMS', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_update`
--

CREATE TABLE `pricing_update` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `card_title` text NOT NULL,
  `short_des` text NOT NULL,
  `description` text NOT NULL,
  `title_two` text NOT NULL,
  `description_two` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_update`
--

INSERT INTO `pricing_update` (`id`, `title`, `image`, `card_title`, `short_des`, `description`, `title_two`, `description_two`) VALUES
(1, 'Want to learn more? Let’s talk.', 'want-to-learn-more-let-s-talk..svg', 'Stay connected with your customers 24/7', 'Leave your name and mobile number and we’ll be in touch within 24 hours', 'Take a look at our list of plans and prices available to fit your\r\nteams’ needs. Get started for free. No credit card required.', 'Powerful alone. Better together.', 'TechICS offers a complete CRM platform with all the tools and integrations you need to grow better — whether you want to increase leads, accelerate sales, streamline customer service, or build a powerful website. They’re powerful alone, but even better when used together. TechICS offers a complete CRM platform with all the tools and integrations you need to grow better — whether you want to increase leads, accelerate sales, streamline customer service, or build a powerful website. They’re powerful alone, but even better when used together.');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `heading`, `description`, `image`) VALUES
(1, 'Privacy Policy', '<div class=\"policy-p\">\r\n                <p>\r\n                    These terms of use (<b class=\"bl\">Terms of Use</b>) contain the terms and conditions that govern your (<b class=\"bl\">Client’s</b>) access to and use of the Platform and the Services (as defined below). The Platform and the Services are offered to you subject to your acceptance, without modification (other than Special Conditions (as defined below)), of the Terms of Use. <b class=\"bl\"> When accepted by you, or otherwise in accordance with section 3.1 below, these Terms of Use form a legally binding contract (Contract) between you and the Operator (as defined below).</b>\r\n                </p>\r\n                <p>\r\n                    Please read these Terms of Use carefully. By accepting these Terms of Use, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree to be bound by these Terms of Use, then please do not access or use the Platform and the Services.\r\n                </p>\r\n\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    1. DEFINITIONS\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.\r\n                </p>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several).\r\n                </p>\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    2. GENERAL PRINCIPLES\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.\r\n                </p>\r\n                <ul>\r\n                    <li>\r\n                        use the Platform to commit or incite an offence;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to the extent that they do not agree with the Terms of Use applied to that part of the Platform;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to send advertising materials, spam mail and other Contents to other Users that is in contradiction with the requirements set out in the Terms of Use;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform in any other illegal way;\r\n                    </li>\r\n                    <li>\r\n                      use the Services for the purposes of monitoring their availability or functionality, or for any other competitive purposes.\r\n                    </li>\r\n                </ul>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several).\r\n                </p>\r\n      \r\n            </div>', 'privacy-policy3.jpg'),
(1, 'Privacy Policy', '<div class=\"policy-p\">\r\n                <p>\r\n                    These terms of use (<b class=\"bl\">Terms of Use</b>) contain the terms and conditions that govern your (<b class=\"bl\">Client’s</b>) access to and use of the Platform and the Services (as defined below). The Platform and the Services are offered to you subject to your acceptance, without modification (other than Special Conditions (as defined below)), of the Terms of Use. <b class=\"bl\"> When accepted by you, or otherwise in accordance with section 3.1 below, these Terms of Use form a legally binding contract (Contract) between you and the Operator (as defined below).</b>\r\n                </p>\r\n                <p>\r\n                    Please read these Terms of Use carefully. By accepting these Terms of Use, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree to be bound by these Terms of Use, then please do not access or use the Platform and the Services.\r\n                </p>\r\n\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    1. DEFINITIONS\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.\r\n                </p>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several).\r\n                </p>\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    2. GENERAL PRINCIPLES\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.\r\n                </p>\r\n                <ul>\r\n                    <li>\r\n                        use the Platform to commit or incite an offence;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to the extent that they do not agree with the Terms of Use applied to that part of the Platform;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to send advertising materials, spam mail and other Contents to other Users that is in contradiction with the requirements set out in the Terms of Use;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform in any other illegal way;\r\n                    </li>\r\n                    <li>\r\n                      use the Services for the purposes of monitoring their availability or functionality, or for any other competitive purposes.\r\n                    </li>\r\n                </ul>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several).\r\n                </p>\r\n      \r\n            </div>', 'privacy-policy3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1),
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_features_crud_five`
--

CREATE TABLE `product_features_crud_five` (
  `id` int(11) NOT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features_crud_five`
--

INSERT INTO `product_features_crud_five` (`id`, `alt_tag`, `date`, `image`, `description`, `status`) VALUES
(10, 'aaa', '', '15.webp', '', 1),
(11, 'aaa', '', '.webp', '', 1),
(12, 'aaa', '', '13.webp', '', 1),
(13, 'aaa', '', '14.webp', '', 1),
(23, 'aaa', '', '12.webp', '', 1),
(24, NULL, '', '1.webp', '', 1),
(25, NULL, '', '2.webp', '', 1),
(26, NULL, '', '3.webp', '', 1),
(27, NULL, '', '4.webp', '', 1),
(28, NULL, '', '5.webp', '', 1),
(29, NULL, '', '6.webp', '', 1),
(30, NULL, '', '11.webp', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_features_crud_one`
--

CREATE TABLE `product_features_crud_one` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features_crud_one`
--

INSERT INTO `product_features_crud_one` (`id`, `title`, `date`, `image`, `description`, `status`) VALUES
(15, 'Manage leads and deals ', '', 'manage-leads-and-deals2.svg', 'Capture more leads and close more deals in less time', 1),
(16, 'Track communication', '', 'track-communication2.svg', 'Track calls, emails and contact history and have a full visibility and control of your schedule', 1),
(17, 'Automate and grow', '', 'automate-and-grow.svg', 'Design and execute a sales process that reduces time-wasting tasks', 1),
(18, 'Insights and reports', '', 'insights-and-reports.svg', 'Simply’s customizable reports give you at-a-glance insight into your business, so you can measure performance and find areas for improvement', 1),
(19, 'Privacy and security', '', 'privacy-and-security1.svg', 'Know how your business data is being used', 1),
(20, ' Mobile app integration', '', 'mobile-app-integration1.svg', 'Access Simply from your mobile device and work from anywhere!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_features_crud_three`
--

CREATE TABLE `product_features_crud_three` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features_crud_three`
--

INSERT INTO `product_features_crud_three` (`id`, `title`, `date`, `image`, `description`, `status`) VALUES
(23, 'Stay connected with your customers 24/7', '', '3.svg', '<p>b</p>', 1),
(24, 'Stay connected with your customers 24/7', '', '4.svg', '<p>v</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_features_crud_two`
--

CREATE TABLE `product_features_crud_two` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features_crud_two`
--

INSERT INTO `product_features_crud_two` (`id`, `title`, `date`, `image`, `description`, `status`) VALUES
(22, ' Stay connected with your customers 24/7', '', 'stay-connected-with-your-customers-24-72.svg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"font-family: \"Open Sans\", Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis eget velit eu condimentum. Proin nisi mi, tincidunt vitae aliquet et, mollis sed dolor. Aliquam elit tortor, porttitor a eros suscipit, bibendum sollicitudin purus. Nam commodo arcu ac augue suscipit pulvinar. Aliquam malesuada vulputate neque, at malesuada ex imperdiet non. Nunc tincidunt, sapien eget ornare tristique, velit nunc mattis odio, ac auctor turpis diam eu sapien. Cras eget massa nisi. Fusce aliquet consectetur ante, eu facilisis eros posuere at.</span><br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resources_menu`
--

CREATE TABLE `resources_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `servs_title` text NOT NULL,
  `short_des` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources_menu`
--

INSERT INTO `resources_menu` (`id`, `title`, `servs_title`, `short_des`, `button_text`, `button_url`) VALUES
(1, 'The Full CRM Platform', 'Hybrid CMS', 'Learn more about Ravetree’s award-winning work management solution.', 'Request Demo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `section_eight`
--

CREATE TABLE `section_eight` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `button_open` tinyint(1) NOT NULL DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_eight`
--

INSERT INTO `section_eight` (`id`, `title`, `description`, `button_text`, `button_url`, `button_open`, `photo`, `alt_tag`) VALUES
(1, 'Start a free trial', 'Tour the product and try Scoro for free for 14\r\ndays, no credit card required.', 'Start Trial', 'http://localhost/hybrid-bck/', 1, 'see-all-your-marketing-come-together.png', 'Role-based access control');

-- --------------------------------------------------------

--
-- Table structure for table `section_eleven`
--

CREATE TABLE `section_eleven` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `sub_header` text NOT NULL,
  `sub_header_two` text NOT NULL,
  `service_one` text NOT NULL,
  `service_one_url` text NOT NULL,
  `service_two` text NOT NULL,
  `service_two_url` text NOT NULL,
  `service_three` text NOT NULL,
  `service_three_url` text NOT NULL,
  `service_four` text NOT NULL,
  `service_four_url` text NOT NULL,
  `service_five` text NOT NULL,
  `service_five_url` text NOT NULL,
  `service_six` text NOT NULL,
  `service_six_url` text NOT NULL,
  `service_seven` text NOT NULL,
  `service_seven_url` text NOT NULL,
  `service_eight` text NOT NULL,
  `service_eight_url` text NOT NULL,
  `service_nine` text NOT NULL,
  `service_nine_url` text NOT NULL,
  `button_text` text NOT NULL,
  `button_text_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_eleven`
--

INSERT INTO `section_eleven` (`id`, `header`, `sub_header`, `sub_header_two`, `service_one`, `service_one_url`, `service_two`, `service_two_url`, `service_three`, `service_three_url`, `service_four`, `service_four_url`, `service_five`, `service_five_url`, `service_six`, `service_six_url`, `service_seven`, `service_seven_url`, `service_eight`, `service_eight_url`, `service_nine`, `service_nine_url`, `button_text`, `button_text_url`) VALUES
(1, 'Work the way that works for you', 'See why over 100,000 teams choose monday.com Work OS.', 'Select what you want to manage:', 'Project Management', 'aa', 'Marketing', 'aa', 'CRM and Sales', 'aa', 'Creative and Design', 'aa', 'Software Development', 'aa', 'Project Management', 'aa', 'Marketing', 'aa', 'CRM and Sales', 'aa', 'Software Development', 'aa', 'Get Strated', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `section_five`
--

CREATE TABLE `section_five` (
  `id` int(11) NOT NULL,
  `icon` text DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_five`
--

INSERT INTO `section_five` (`id`, `icon`, `alt_tag`, `description`, `title`, `status`, `date`) VALUES
(1, '<i class=\"lab la-hackerrank\"></i>', ' On-demand knowledge base', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', ' On-demand knowledge base ', 1, '2021-01-03 06:33:02'),
(2, '<i class=\"las la-chalkboard-teacher\"></i>', 'Role-based access control', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', 'Role-based access control', 1, '2021-02-03 07:28:53'),
(3, '          <i class=\"las la-address-book\"></i>', 'Role-based access control', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', 'Role-based access control', 1, '2021-02-03 10:42:22'),
(4, '<i class=\"las la-clone\"></i>', ' Activity logs', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', ' Activity logs', 1, '2021-02-03 10:44:45'),
(5, '<i class=\"las la-layer-group\"></i>', 'Enterprose-grade security', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', 'Enterprose-grade security', 1, '2021-02-03 10:46:30'),
(6, '<i class=\"las la-users\"></i>', 'Product assortment', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. \r\n', 'Product assortment', 1, '2021-02-03 10:50:48'),
(7, '<i class=\"las la-file-alt\"></i>', 'Product assortment', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit.', 'Product assortment r', 1, '2021-02-03 10:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `section_four`
--

CREATE TABLE `section_four` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `feature_title` varchar(255) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `button_open` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_four`
--

INSERT INTO `section_four` (`id`, `icon`, `title`, `description`, `feature_title`, `features`, `status`, `date`, `button_text`, `button_url`, `button_open`) VALUES
(2, '<i class=\"fas fa-bullseye\"></i>', ' Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Non ea officia??Non ea officia', 1, '2021-01-03 05:14:01', '   Get free CMS', 'ht', 1),
(6, '<i class=\"fab fa-artstation\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur?? Rem suscipit  ??Non ea officia', 1, '2021-02-04 10:25:31', 'Get Free CMS', 'http://localhost/hybrid-bck/', 1),
(7, '<i class=\"fab fa-edge\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur??Rem suscipit??Non ea officia', 1, '2021-02-04 10:28:51', 'Get Free CMS', 'http://localhost/hybrid-bck/', 1),
(8, '<i class=\"fas fa-cannabis\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Amet consectetur  ??Rem suscipit ??Non ea officia', 1, '2021-02-04 10:30:22', 'Get Free CMS', 'http://localhost/hybrid-bck/', 1),
(9, '<i class=\"fab fa-gripfire\"></i>', 'Lorem, Ipsum Dolor Consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit quos id non ea officia.Doloremque placeat accusantium neque itaque? Sapiente consectetur nobis voluptas autem quis.', 'Lorem, Ipsum Dolor', 'Non ea officia??Rem suscipit??Amet consectetur', 1, '2021-02-04 10:31:19', 'Get Free CMS', 'http://localhost/hybrid-bck/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_nine`
--

CREATE TABLE `section_nine` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tab_one_icon` varchar(255) DEFAULT NULL,
  `tab_one_title` varchar(255) DEFAULT NULL,
  `tab_one_header` varchar(255) DEFAULT NULL,
  `tab_one_description` text DEFAULT NULL,
  `tab_one_photo` varchar(255) DEFAULT NULL,
  `tab_one_alt_tag` varchar(255) DEFAULT NULL,
  `tab_one_link_text` varchar(255) DEFAULT NULL,
  `tab_one_link_url` varchar(255) DEFAULT NULL,
  `tab_one_link_open` tinyint(1) NOT NULL DEFAULT 0,
  `tab_two_icon` varchar(255) DEFAULT NULL,
  `tab_two_title` varchar(255) DEFAULT NULL,
  `tab_two_header` varchar(255) DEFAULT NULL,
  `tab_two_description` text DEFAULT NULL,
  `tab_two_photo` varchar(255) DEFAULT NULL,
  `tab_two_alt_tag` varchar(255) DEFAULT NULL,
  `tab_two_link_text` varchar(255) DEFAULT NULL,
  `tab_two_link_url` varchar(255) DEFAULT NULL,
  `tab_two_link_open` tinyint(1) NOT NULL DEFAULT 1,
  `tab_three_icon` varchar(255) DEFAULT NULL,
  `tab_three_title` varchar(255) DEFAULT NULL,
  `tab_three_header` varchar(255) DEFAULT NULL,
  `tab_three_description` text DEFAULT NULL,
  `tab_three_photo` varchar(255) DEFAULT NULL,
  `tab_three_alt_tag` varchar(255) DEFAULT NULL,
  `tab_three_link_text` varchar(255) DEFAULT NULL,
  `tab_three_link_url` varchar(255) DEFAULT NULL,
  `tab_three_link_open` tinyint(1) NOT NULL DEFAULT 0,
  `tab_four_icon` varchar(255) DEFAULT NULL,
  `tab_four_title` varchar(255) DEFAULT NULL,
  `tab_four_header` varchar(255) DEFAULT NULL,
  `tab_four_description` text DEFAULT NULL,
  `tab_four_photo` varchar(255) DEFAULT NULL,
  `tab_four_alt_tag` varchar(255) DEFAULT NULL,
  `tab_four_link_text` varchar(255) DEFAULT NULL,
  `tab_four_link_url` varchar(255) DEFAULT NULL,
  `tab_four_link_open` tinyint(1) NOT NULL DEFAULT 0,
  `tab_five_icon` varchar(255) DEFAULT NULL,
  `tab_five_title` varchar(255) DEFAULT NULL,
  `tab_five_header` varchar(255) DEFAULT NULL,
  `tab_five_description` text DEFAULT NULL,
  `tab_five_photo` varchar(255) DEFAULT NULL,
  `tab_five_alt_tag` varchar(255) DEFAULT NULL,
  `tab_five_link_text` varchar(255) DEFAULT NULL,
  `tab_five_link_url` varchar(255) DEFAULT NULL,
  `tab_five_link_open` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_nine`
--

INSERT INTO `section_nine` (`id`, `title`, `tab_one_icon`, `tab_one_title`, `tab_one_header`, `tab_one_description`, `tab_one_photo`, `tab_one_alt_tag`, `tab_one_link_text`, `tab_one_link_url`, `tab_one_link_open`, `tab_two_icon`, `tab_two_title`, `tab_two_header`, `tab_two_description`, `tab_two_photo`, `tab_two_alt_tag`, `tab_two_link_text`, `tab_two_link_url`, `tab_two_link_open`, `tab_three_icon`, `tab_three_title`, `tab_three_header`, `tab_three_description`, `tab_three_photo`, `tab_three_alt_tag`, `tab_three_link_text`, `tab_three_link_url`, `tab_three_link_open`, `tab_four_icon`, `tab_four_title`, `tab_four_header`, `tab_four_description`, `tab_four_photo`, `tab_four_alt_tag`, `tab_four_link_text`, `tab_four_link_url`, `tab_four_link_open`, `tab_five_icon`, `tab_five_title`, `tab_five_header`, `tab_five_description`, `tab_five_photo`, `tab_five_alt_tag`, `tab_five_link_text`, `tab_five_link_url`, `tab_five_link_open`) VALUES
(1, NULL, '<i class=\"fas fa-stopwatch\"></i>', 'Time', 'It\'s about time', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum temporibus incidunt doloribus expedita', 'time.jpg', 'Its about time', 'Read More', 'ht', 0, '<i class=\"fas fa-tasks\"></i>', 'Projects', 'It\'s about Projects', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi. Lorem ipsum dolor sit', 'projects.png', 'It\'s about Projects', 'Read More', 'ht', 1, '<i class=\"fas fa-money-check-alt\"></i>', 'Finance', 'It\'s about Finances', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum temporibus incidunt doloribus expedita', 'finance.jpg', 'Finance', 'Read More', 'ht', 0, '<i class=\"fas fa-shopping-bag\"></i>', 'Sales', 'It\'s about Sales', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi. Lorem ipsum dolor', 'sales.jpg', 'It\'s about Sales', 'Read More', 'gt', 0, '<i class=\"fab fa-creative-commons-share\"></i>', 'Reports', 'It\'s about Reports', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis officiis temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos est voluptatem animi minus? Us incidunt doloribus expedita commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum temporibus incidunt doloribus expedita commodi repellendus esse at magni, voluptate, dolorum, quia nihil aperiam eos\r\n\r\n', 'reports.jpg', 'It\'s about Reports', 'Read More', 'ht', 0);

-- --------------------------------------------------------

--
-- Table structure for table `section_one`
--

CREATE TABLE `section_one` (
  `id` int(11) NOT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `image_alt_tag` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `sub_header` varchar(255) DEFAULT NULL,
  `learn_more_text` varchar(255) DEFAULT NULL,
  `learn_more_url` varchar(255) DEFAULT NULL,
  `learn_more_open` varchar(255) DEFAULT NULL,
  `learn_more_text_two` varchar(11) NOT NULL,
  `watch_custom_video_text` varchar(255) DEFAULT NULL,
  `video_embed_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_one`
--

INSERT INTO `section_one` (`id`, `background_image`, `image_alt_tag`, `header`, `sub_header`, `learn_more_text`, `learn_more_url`, `learn_more_open`, `learn_more_text_two`, `watch_custom_video_text`, `video_embed_link`) VALUES
(1, 'hybrid-cms-background-photo1.jpg', 'Hybrid CMS Main Image', 'Agile & Waterfall', 'True project management capabilities that go way beyond what other tools offer.', 'Learn more', 'sdafsdfsdf', '0', 'Learn more', 'Watch Customer List', 'sdafsdfds');

-- --------------------------------------------------------

--
-- Table structure for table `section_seven`
--

CREATE TABLE `section_seven` (
  `id` int(11) NOT NULL,
  `tag` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `button_open` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_seven`
--

INSERT INTO `section_seven` (`id`, `tag`, `title`, `description`, `button_text`, `button_url`, `button_open`, `status`, `date`) VALUES
(2, 'EXECUTIVES', 'View company utilization', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 11:04:12'),
(3, 'EXECUTIVES', 'Lorem, Ipsum Dolor', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 12:53:47'),
(4, 'EXECUTIVES', 'Role-based access control', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 11:10:57'),
(5, 'EXECUTIVES', 'Role-based access control', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 12:03:08'),
(6, 'EXECUTIVES', 'Role-based access control', 'Easily see how much capacity your company has to take on more work.\r\n\r\n', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 12:04:59'),
(7, 'EXECUTIVES', 'Lorem, Ipsum Dolor ', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 12:05:13'),
(8, 'EXECUTIVES', 'Lorem, Ipsum Dolor ', 'Easily see how much capacity your company has to take on more work.', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1, 1, '2021-02-06 12:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `section_six`
--

CREATE TABLE `section_six` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `option_one` varchar(255) DEFAULT NULL,
  `option_two` varchar(255) DEFAULT NULL,
  `option_three` varchar(255) DEFAULT NULL,
  `option_four` varchar(255) DEFAULT NULL,
  `option_five` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_six`
--

INSERT INTO `section_six` (`id`, `title`, `photo`, `alt_tag`, `description`, `option_one`, `option_two`, `option_three`, `option_four`, `option_five`) VALUES
(1, '“Get added features when you take out one of our paid plans”', '1.jpg', 'Get added features when you take out one of our paid plans', '<b>All-in-One Business Management Software</b>. We know you’re using dozens of different apps to get work done. And the shuffling and fragmentation are killing your team’s productivity. Finally, you can manage it all from a single place.\r\n', 'Integrations Centre. You will be able to integrate all your apps that you use. Making it a complete solution.', 'Dynamic dashboard. You will be able to create your own dashboard and can create more than 1 to manage your teams.', 'Dynamic menus. You will be able to change menu settings and see the functions you want to use regularly.', 'Manage your teams effectively.', 'More capabilities. See product features');

-- --------------------------------------------------------

--
-- Table structure for table `section_ten`
--

CREATE TABLE `section_ten` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `percentages` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `position` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_ten`
--

INSERT INTO `section_ten` (`id`, `photo`, `alt_tag`, `title_one`, `title_two`, `percentages`, `status`, `position`, `date`) VALUES
(2, 'agencies1.png', 'Agencies', 'Agencies', 'Consectetur adipisi', '50%', 1, NULL, '2021-02-07 10:25:13'),
(3, 'agencies2.png', 'a', 'Agencies', 'Consectetur adipisi', '55%', 1, NULL, '2021-02-07 11:32:17'),
(4, 'agencies3.png', 'Agencies', 'Agencies', 'Consectetur adipisi', '40%', 1, NULL, '2021-02-07 11:40:35'),
(5, 'agencies4.png', '', 'Agencies', 'Consectetur adipisi', '45%', 1, NULL, '2021-02-07 11:43:10'),
(6, 'agencies5.png', '', 'Agencies', 'Consectetur adipisi', '70%', 1, NULL, '2021-02-07 11:58:16'),
(7, 'agencies6.png', '', 'Agencies', 'Consectetur adipisi', '12%', 1, NULL, '2021-02-07 12:00:42'),
(8, 'agencies7.png', '', 'Agencies', 'Consectetur adipisi', '50%', 1, NULL, '2021-02-07 12:02:01'),
(9, 'agencies8.png', '', 'Agencies', 'Consectetur adipisi', '45%', 1, NULL, '2021-02-07 12:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `section_three`
--

CREATE TABLE `section_three` (
  `id` int(11) NOT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `description_one` text DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `description_two` text DEFAULT NULL,
  `video` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_three`
--

INSERT INTO `section_three` (`id`, `title_one`, `description_one`, `title_two`, `description_two`, `video`) VALUES
(1, ' Hybrid <span class=\"log-clr\">CMS</span>, Customer Relations Management (CRM). Tomorrow’s Technology', '<ul class=\"list-unstyled text-justify aos-init aos-animate\" data-aos=\"fade-up\">\r\n<li>We are now in a world of innovative developing technology, that constantly requires us to keep updated.</li>\r\n<li>It is our disruptive competitiveness that leads to enhancing your business. Hybrid is to lead a new generation into building sustainable technologies that are compatible with other CRM&rsquo;s for the integration of services. Hybrid brings it all together. <strong> Our vision is to create a one-stop solution, easy integrations, and sensible pricing, whether you are a small business to larger business enterprises. </strong></li>\r\n<li>What is Hybrid, a fully managed service tool, for both you and your customers? It has never been so much more important, with the price being so competitive, businesses now need to seek to go the extra step and create personal relationships with all their stakeholders, and this is enabled by Hybrid.</li>\r\n</ul>', 'What makes Hybrid<span class=\"log-clr\">CMS</span> unique?\r\n', '<ul class=\"list-unstyled text-justify\">\r\n<li>The ability to manage a customer\'s journey from the start to the end, and then continuing that relationship., Hybrid CMS, allows simple collaboration within your team.</li>\r\n<li>We know that most of us run so many applications to run our operations, with Hybrid CMS, this stops today.</li>\r\n<li>Track progress and share the customer journey with your team using our automated reports and personally tailored dashboards, all in real-time.</li>\r\n</ul>', '<iframe width=\"546\" height=\"315\" src=\"https://www.youtube.com/embed/ndvnpXaj1kU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `section_twelve`
--

CREATE TABLE `section_twelve` (
  `id` int(11) NOT NULL,
  `link_one` text NOT NULL,
  `link_one_url` text NOT NULL,
  `link_two` text NOT NULL,
  `link_two_url` text NOT NULL,
  `link_three` text NOT NULL,
  `link_three_url` text NOT NULL,
  `link_four` text NOT NULL,
  `link_four_url` text NOT NULL,
  `link_five` text NOT NULL,
  `link_five_url` text NOT NULL,
  `link_six` text NOT NULL,
  `link_six_url` text NOT NULL,
  `link_seven` text NOT NULL,
  `link_seven_url` text NOT NULL,
  `link_eight` text NOT NULL,
  `link_eight_url` text NOT NULL,
  `link_nine` text NOT NULL,
  `link_nine_url` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL,
  `title_two` text NOT NULL,
  `button_text` text NOT NULL,
  `button_text_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_twelve`
--

INSERT INTO `section_twelve` (`id`, `link_one`, `link_one_url`, `link_two`, `link_two_url`, `link_three`, `link_three_url`, `link_four`, `link_four_url`, `link_five`, `link_five_url`, `link_six`, `link_six_url`, `link_seven`, `link_seven_url`, `link_eight`, `link_eight_url`, `link_nine`, `link_nine_url`, `title`, `description`, `icon`, `title_two`, `button_text`, `button_text_url`) VALUES
(1, '13.png', 'aa', 'do-work-with-ravetree..png', 'aa', '14.png', 'aa', '15.png', 'aa', '16.png', 'aa', '17.png', 'aa', '18.png', 'aa', '19.png', 'aa', '20.png', 'aa', 'Break free from disconnected apps', 'Focus on the work, not the tool. Ravetree includes an array of modern productivity solutions that help your teams stay organized and connected.', '<i class=\"las la-hand-holding-heart\"></i>', 'Do work with Ravetree. ', 'Learn More', 'http://localhost/hybrid-bck/');

-- --------------------------------------------------------

--
-- Table structure for table `section_two`
--

CREATE TABLE `section_two` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_two`
--

INSERT INTO `section_two` (`id`, `name`, `photo`, `alt_tag`, `status`) VALUES
(1, 'Grant Thornton', 'grant-thornton.png', 'Grant Thornton', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solutions_menu`
--

CREATE TABLE `solutions_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `servs_title` text NOT NULL,
  `short_des` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutions_menu`
--

INSERT INTO `solutions_menu` (`id`, `title`, `servs_title`, `short_des`, `button_text`, `button_url`) VALUES
(1, 'The Full CRM Platform', 'Hybrid CMS', 'Learn more about Ravetree’s award-winning work management solution.', 'Request Demo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `solutions_update`
--

CREATE TABLE `solutions_update` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_two` text NOT NULL,
  `short_des_two` text NOT NULL,
  `title_three` text NOT NULL,
  `short_des_three` text NOT NULL,
  `image` text NOT NULL,
  `short_title_four` text NOT NULL,
  `title_four` text NOT NULL,
  `des_four` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `short_title_five` text NOT NULL,
  `title_five` text NOT NULL,
  `des_five` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutions_update`
--

INSERT INTO `solutions_update` (`id`, `title`, `title_two`, `short_des_two`, `title_three`, `short_des_three`, `image`, `short_title_four`, `title_four`, `des_four`, `button_text`, `button_url`, `short_title_five`, `title_five`, `des_five`) VALUES
(1, 'Highly rated on review sites', 'Want to learn more? Let’s talk.', 'Leave your name and mobile number and we’ll be in touch within 24 hours', 'All your work done in one simple tool ', 'No credit card needed. Done in 15 seconds!', '.svg', 'SIMPLY CRM: A SIMPLE SOLUTION FOR COMPLEX PROBLEMS.', 'Why choose Simply CRM?', '<ul class=\"list-unstyled product-feature-glry\" style=\"margin-right: 0px; margin-left: 7px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; width: 634px; text-align: justify; color: rgb(33, 37, 41); font-family: Raleway, Proxima-Nova-Light; letter-spacing: normal; background-color: rgb(43, 138, 226);\"><li style=\"margin: 0px; padding: 0px;\"><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">The simplest CRM user interface</a></li><li style=\"margin: 0px; padding: 0px;\"><i class=\"icon ion-checkmark-circled\" style=\"margin: 0px; padding: 0px; color: rgb(170, 202, 44);\"></i><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">Free consultation, a comprehensive knowledge base and an extensive onboarding program that will kickstart your business</a></li><li style=\"margin: 0px; padding: 0px;\"><i class=\"icon ion-checkmark-circled\" style=\"margin: 0px; padding: 0px; color: rgb(170, 202, 44);\"></i><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">Effortless data transfer and migration</a></li><li style=\"margin: 0px; padding: 0px;\"><i class=\"icon ion-checkmark-circled\" style=\"margin: 0px; padding: 0px; color: rgb(170, 202, 44);\"></i><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">Full integration with countless third-party apps and systems</a></li><li style=\"margin: 0px; padding: 0px;\"><i class=\"icon ion-checkmark-circled\" style=\"margin: 0px; padding: 0px; color: rgb(170, 202, 44);\"></i><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">Mobile responsive application optimized for all devices and screen sizes</a></li><li style=\"margin: 0px; padding: 0px;\"><i class=\"icon ion-checkmark-circled\" style=\"margin: 0px; padding: 0px; color: rgb(170, 202, 44);\"></i><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 0px; color: rgb(254, 255, 251); cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 18px; display: block; position: relative; top: -27px;\">Mobile responsive application optimized for all devices and screen sizes</a></li><li style=\"margin: 0px; padding: 0px;\"><a href=\"http://ms.techics.com/hybrid-backend/product-features\" style=\"margin: 0px 0px 0px 23px; padding: 10px 0px 0px; color: rgb(254, 255, 251); text-decoration-line: underline; cursor: pointer; transition: all 0.2s ease-in-out 0s; font-size: 15px; display: block; position: relative; top: -27px;\">Learn more about us or sign up and try Simply for 30 days, free of charge.</a></li></ul>', 'FREE TRIAL', '#', 'EASY INTEGRATION - TO ANYTHING', 'Simply CRM integrates with your existing systems', 'Simply CRM allows you to instantly connect to the most used business apps to automate your work and optimise productivity. We are launching new integrations almost weekly, and we can also do custom integrations.');

-- --------------------------------------------------------

--
-- Table structure for table `solution_sub`
--

CREATE TABLE `solution_sub` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `title` text NOT NULL,
  `quotes` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution_sub`
--

INSERT INTO `solution_sub` (`id`, `date`, `image`, `title`, `quotes`, `button_text`, `button_url`, `status`) VALUES
(2, '2021-02-13 08:19:16', 'role-based-access-control2.jpg', 'Role-based access control', 'aa', 'LEARN MORE', 'sgsg', 1),
(0, '2021-02-13 12:27:55', '7.png', 'Role-based access control', 'aa', 'LEARN MORE', 'http://localhost/hybrid-bck/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solution_sub_one`
--

CREATE TABLE `solution_sub_one` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution_sub_one`
--

INSERT INTO `solution_sub_one` (`id`, `title`, `description`) VALUES
(1, 'Plans & Pricing', 'Take a look at our list of plans and prices available to fit your\r\nteams’ needs. Get started for free. No credit card required.');

-- --------------------------------------------------------

--
-- Table structure for table `solution_sub_one_crd`
--

CREATE TABLE `solution_sub_one_crd` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tag` varchar(255) DEFAULT NULL,
  `short_des` varchar(255) DEFAULT NULL,
  `amount` text NOT NULL,
  `pckg_title` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution_sub_one_crd`
--

INSERT INTO `solution_sub_one_crd` (`id`, `date`, `tag`, `short_des`, `amount`, `pckg_title`, `button_text`, `button_url`, `status`) VALUES
(15, '2021-02-22 13:39:45', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SUGN UP', '#', 1),
(16, '2021-02-22 13:40:44', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1),
(17, '2021-02-22 13:41:36', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1),
(18, '2021-02-22 13:42:29', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `heading`, `description`, `image`) VALUES
(1, 'Terms of Use', '<div class=\"policy-p\">\r\n                <p>\r\n                    These terms of use (<b class=\"bl\">Terms of Use</b>) contain the terms and conditions that govern your (<b class=\"bl\">Client’s</b>) access to and use of the Platform and the Services (as defined below). The Platform and the Services are offered to you subject to your acceptance, without modification (other than Special Conditions (as defined below)), of the Terms of Use. <b class=\"bl\"> When accepted by you, or otherwise in accordance with section 3.1 below, these Terms of Use form a legally binding contract (Contract) between you and the Operator (as defined below).</b>\r\n                </p>\r\n                <p>\r\n                    Please read these Terms of Use carefully. By accepting these Terms of Use, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree to be bound by these Terms of Use, then please do not access or use the Platform and the Services.\r\n                </p>\r\n\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    1. DEFINITIONS\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.</p>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several).\r\n                </p>\r\n                <h5 class=\"pt-4 pb-4\">\r\n                    2. GENERAL PRINCIPLES\r\n                </h5>\r\n                <p>\r\n                    1.1. <b class=\"bl\">Special Conditions</b> The conditions by which the Terms of Use are specified, amended or supplemented by agreement of the Parties.\r\n                </p>\r\n                <p>\r\n                    1.2. <b class=\"bl\">Operator Scoro</b> Software OÜ (registry code 10806081, address Endla 15, 10122 Tallinn, Republic of Estonia).\r\n                </p>\r\n                <p>\r\n                    1.3. <b class=\"bl\">Information System</b> An integrated cloud solution for the provision of the Services, including applications, software, hardware, databases, interfaces, connected media, documentation, updates, version upgrades and other related components or materials.\r\n                </p>\r\n                <p>\r\n                    1.4. <b class=\"bl\">Terms of Use</b> These standard terms of use of the Platform and the Services.\r\n                </p>\r\n                <ul>\r\n                    <li>\r\n                        use the Platform to commit or incite an offence;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to the extent that they do not agree with the Terms of Use applied to that part of the Platform;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform to send advertising materials, spam mail and other Contents to other Users that is in contradiction with the requirements set out in the Terms of Use;\r\n                    </li>\r\n                    <li>\r\n                        use the Platform in any other illegal way;\r\n                    </li>\r\n                    <li>\r\n                      use the Services for the purposes of monitoring their availability or functionality, or for any other competitive purposes.\r\n                    </li>\r\n                </ul>\r\n                <p>\r\n                    1.5. <b class=\"bl\">User</b> A natural person who uses the Platform and the Services in the name of and under the authorization of the Client.\r\n                </p>\r\n                <p>\r\n                    1.6. <b class=\"bl\">User Account</b> The User profile connected to the Client Account for the use of the Platform, which is used to identify the User, provide personal access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.7. <b class=\"bl\">Client Account</b> A profile connected to a specific Client for the use of the Platform used to identify the Client, provide the Users connected to the Client with access to the Services, and to change and save the settings.\r\n                </p>\r\n                <p>\r\n                    1.8. <b class=\"bl\">Client</b> A person operating in the economic and professional activity who has entered into the Contract with the Operator.\r\n                </p>\r\n                <p>\r\n                    1.9. <b class=\"bl\">Firm Account</b> A profile used to distinguish between and/or filter the information related to the Client’s different companies or departments within the Client Account (one or several). </p>\r\n      \r\n            </div>', 'terms-of-use2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webinar_tbl`
--

CREATE TABLE `webinar_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `short_des` text NOT NULL,
  `status` tinyint(11) NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webinar_tbl`
--

INSERT INTO `webinar_tbl` (`id`, `title`, `date`, `image`, `short_des`, `status`, `button_text`, `button_url`, `tag`) VALUES
(16, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-19.jpg', 'In this webinar in partnership with the Grocer, experts from the worlds of grocery retail, ecommerce.', 1, 'Learn More ', '#', 'Webinar'),
(17, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-191.jpg', '\r\n\r\nIn this webinar in partnership with the Grocer, experts from the worlds of grocery retail, eCommerce...\r\n\r\n', 1, 'Learn More', '#', 'Webinar'),
(18, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-192.jpg', 'In this webinar in partnership with the Grocer, experts from the worlds of grocery retail, ecommerce...\r\n\r\n', 1, 'Learn More', '#', 'Webinar'),
(19, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-193.jpg', '\r\nIn this webinar in partnership with the Grocer, experts from the worlds of grocery retail, ecommerce...\r\n\r\n', 1, 'Learn More', '#', 'Webinar'),
(20, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-194.jpg', 'In this webinar in partnership with the Grocer, experts from the worlds of grocery retail, ecommerce...\r\n\r\n', 1, 'Learn More', '#', 'Webinar'),
(21, 'Building better grocery operations after Covid-19', '', 'building-better-grocery-operations-after-covid-195.jpg', 'In this webinar in partnership with the Grocer, experts from the worlds of grocery retail, ecommerce...', 1, 'Learn More', '#', 'Webinar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_page`
--
ALTER TABLE `admin_login_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_menu_tbl`
--
ALTER TABLE `blog_menu_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_menu`
--
ALTER TABLE `company_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_stories`
--
ALTER TABLE `customer_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_table`
--
ALTER TABLE `custom_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_info`
--
ALTER TABLE `faq_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_menu_tbl`
--
ALTER TABLE `faq_menu_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_info`
--
ALTER TABLE `help_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_menu_tbl`
--
ALTER TABLE `help_menu_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries_menu`
--
ALTER TABLE `industries_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_relation_one`
--
ALTER TABLE `investor_relation_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_relation_three`
--
ALTER TABLE `investor_relation_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_relation_two`
--
ALTER TABLE `investor_relation_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_relation_update`
--
ALTER TABLE `investor_relation_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_company`
--
ALTER TABLE `manage_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_industries`
--
ALTER TABLE `manage_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_pricing`
--
ALTER TABLE `manage_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_ressources`
--
ALTER TABLE `manage_ressources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_solutions`
--
ALTER TABLE `manage_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsroom_info`
--
ALTER TABLE `newsroom_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_main_tbl`
--
ALTER TABLE `news_main_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_sub_tbl`
--
ALTER TABLE `news_sub_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_five`
--
ALTER TABLE `partner_sec_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_four`
--
ALTER TABLE `partner_sec_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_one`
--
ALTER TABLE `partner_sec_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_six`
--
ALTER TABLE `partner_sec_six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_three`
--
ALTER TABLE `partner_sec_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_sec_two`
--
ALTER TABLE `partner_sec_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_update`
--
ALTER TABLE `partner_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_menu`
--
ALTER TABLE `pricing_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_sub_tbl`
--
ALTER TABLE `pricing_sub_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_update`
--
ALTER TABLE `pricing_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features_crud_five`
--
ALTER TABLE `product_features_crud_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features_crud_one`
--
ALTER TABLE `product_features_crud_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features_crud_three`
--
ALTER TABLE `product_features_crud_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features_crud_two`
--
ALTER TABLE `product_features_crud_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources_menu`
--
ALTER TABLE `resources_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_eight`
--
ALTER TABLE `section_eight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_eleven`
--
ALTER TABLE `section_eleven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_five`
--
ALTER TABLE `section_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_four`
--
ALTER TABLE `section_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_nine`
--
ALTER TABLE `section_nine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_one`
--
ALTER TABLE `section_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_seven`
--
ALTER TABLE `section_seven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_six`
--
ALTER TABLE `section_six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_ten`
--
ALTER TABLE `section_ten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_three`
--
ALTER TABLE `section_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_twelve`
--
ALTER TABLE `section_twelve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_two`
--
ALTER TABLE `section_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions_menu`
--
ALTER TABLE `solutions_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions_update`
--
ALTER TABLE `solutions_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_sub_one`
--
ALTER TABLE `solution_sub_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_sub_one_crd`
--
ALTER TABLE `solution_sub_one_crd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webinar_tbl`
--
ALTER TABLE `webinar_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_login_page`
--
ALTER TABLE `admin_login_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_menu_tbl`
--
ALTER TABLE `blog_menu_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_menu`
--
ALTER TABLE `company_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_stories`
--
ALTER TABLE `customer_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `custom_table`
--
ALTER TABLE `custom_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq_info`
--
ALTER TABLE `faq_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq_menu_tbl`
--
ALTER TABLE `faq_menu_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `help_info`
--
ALTER TABLE `help_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help_menu_tbl`
--
ALTER TABLE `help_menu_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries_menu`
--
ALTER TABLE `industries_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investor_relation_one`
--
ALTER TABLE `investor_relation_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `investor_relation_three`
--
ALTER TABLE `investor_relation_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `investor_relation_two`
--
ALTER TABLE `investor_relation_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `investor_relation_update`
--
ALTER TABLE `investor_relation_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_company`
--
ALTER TABLE `manage_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manage_industries`
--
ALTER TABLE `manage_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manage_pricing`
--
ALTER TABLE `manage_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manage_ressources`
--
ALTER TABLE `manage_ressources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manage_solutions`
--
ALTER TABLE `manage_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news_main_tbl`
--
ALTER TABLE `news_main_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_sub_tbl`
--
ALTER TABLE `news_sub_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partner_sec_five`
--
ALTER TABLE `partner_sec_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `partner_sec_four`
--
ALTER TABLE `partner_sec_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partner_sec_one`
--
ALTER TABLE `partner_sec_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partner_sec_six`
--
ALTER TABLE `partner_sec_six`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partner_sec_three`
--
ALTER TABLE `partner_sec_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `partner_sec_two`
--
ALTER TABLE `partner_sec_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `partner_update`
--
ALTER TABLE `partner_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_menu`
--
ALTER TABLE `pricing_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_sub_tbl`
--
ALTER TABLE `pricing_sub_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing_update`
--
ALTER TABLE `pricing_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_features_crud_five`
--
ALTER TABLE `product_features_crud_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_features_crud_one`
--
ALTER TABLE `product_features_crud_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_features_crud_three`
--
ALTER TABLE `product_features_crud_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_features_crud_two`
--
ALTER TABLE `product_features_crud_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `resources_menu`
--
ALTER TABLE `resources_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions_menu`
--
ALTER TABLE `solutions_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions_update`
--
ALTER TABLE `solutions_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solution_sub_one`
--
ALTER TABLE `solution_sub_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solution_sub_one_crd`
--
ALTER TABLE `solution_sub_one_crd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `webinar_tbl`
--
ALTER TABLE `webinar_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
