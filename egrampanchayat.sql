-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 07:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egrampanchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_key` varchar(200) NOT NULL,
  `deleted` int(150) NOT NULL,
  `reset_password` int(255) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `birth_date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL,
  `other_details` varchar(255) NOT NULL,
  `can_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email_id`, `address`, `username`, `password`, `security_key`, `deleted`, `reset_password`, `type`, `birth_date`, `gender`, `salary`, `other_details`, `can_login`) VALUES
(4, 'Abc', '9876543210', 'abc@mailcom', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', 0, 0, 'admin', '0000-00-00', '', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `mobile`, `address`, `message`) VALUES
(1, 'abc', '764754647647', 'rameshwar colony', 'lihfohfkj'),
(5, 'OM', '6546541', 'rameshwar colony', 'kghjh'),
(6, 'abc', '6546541', 'rameshwar colony', ',jsbSJBcmsc');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `scheme_id`, `date`, `is_verified`) VALUES
(2, 1, 6, '2023-03-25 03:29:36', 1),
(3, 4, 6, '2023-03-25 17:20:11', 1),
(15, 8, 6, '2023-03-26 04:38:31', 1),
(17, 9, 12, '2023-03-26 07:31:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `data` text NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `title`, `image`, `data`, `is_deleted`, `exp_date`) VALUES
(2, 'Pradhan Mantri Aawas Yojna    ', 'uploads/schemes/pmayu.png', '<p class=\"ql-align-justify\"><span style=\"color: rgb(50, 50, 50);\">Pradhan Mantri Awas Yojana – Urban (PMAY-U), a flagship Mission of Government of India being implemented by Ministry of Housing and Urban Affairs (MoHUA), was launched on 25th June 2015. The Mission addresses urban housing shortage among the EWS/LIG and MIG categories including the slum dwellers by ensuring a pucca house to all eligible urban households by the year 2022, when Nation completes 75 years of its Independence.lkkkklklkllk;l lkm;lk</span></p>', 0, '2023-03-26'),
(4, 'Pradhan Mantri Gram Samridhi Yojana 2022', 'uploads/schemes/download (2).jfif', '<p>भारतीय ग्रामीण क्षेत्रों में बेरोजगारी की समस्या को समाप्त करने के साथ-साथ ग्राम समृद्धि के मूल विचार पर कार्य करते हुए भारत की मोदी सरकार और विश्व बैंक द्वारा चलाई जा रही ग्राम समृद्धि योजना 2022 के बारे में विस्तार से बताएंगे ताकि आप बहुत जल्दी। इसका जल्द से जल्द लाभ उठाकर वे अपना सामाजिक और आर्थिक विकास कर सकते हैं।</p><p>प्रधानमंत्री ग्राम समृद्धि योजना 2022 के तहत जारी नए अपडेट के तहत आपको बता दें कि पीएम ग्राम समृद्धि योजना 2022 के तहत बेरोजगार युवाओं को पहले से ही क्षेत्र में स्वरोजगार के तहत खाद्य प्रसंस्करण इकाइयां स्थापित करने के लिए प्रेरित और प्रोत्साहित किया जाएगा. कार्यशील इकाइयों का पुनर्विकास किया जाएगा और साथ ही प्रबंधन क्षेत्रों में तकनीकी सहायता प्रदान की जाएगी।</p><p>PM Gram Samridhi Yojana 2022 के सफल संचालन के लिए 1,000 करोड़ रुपयो की वित्तीय सहायता वर्ल्ड बैंक द्धारा प्रदान की जायेगी वहीं पर 500 करोड़ रुपयो की सहायता केंद्र सरकार द्धारा की जायेगी। अन्त, आप सभी इस योजना का लाभ प्राप्त कर सकें इसलिए हम, आपको PM Gram Samridhi Yojana 2022 ।। प्रधानमंत्री ग्राम समृद्धि योजना 2022 ।। पी.एम ग्राम समृद्धि योजना 2022 – ऑनलाइन रजिसट्रेशन कैसे करें? की पूरी जानकारी प्रदान करेंगे ताकि भी जल्द से जल्द योजना का लाभ प्राप्त कर सकें।</p>', 0, '2023-03-01'),
(5, 'Pravasi Bharatiya Bima Scheme', 'uploads/schemes/download (3).jfif', '<p>Visiting foreign countries and taking up a job there is not a new incident today in India. Thousands of people, every year, fly to foreign countries for commercial purposes. Pravasi Bharatiya Bima Yojana is one of the insurance policies that protect the emigrant Indian employees who are being sent for jobs in Emigration Check Required countries in the world.</p><p class=\"ql-align-center\"><br></p><p>Launch Details</p><p>This insurance scheme has launched in India in the year 2003. The scheme was amended three times in the years 2006, 2008 and recently in 2017 respectively. Rules and regulation of the scheme was revised in the year 2017. The latest version of the scheme was in effect since the month of August in the year 2017.</p><p class=\"ql-align-center\"><br></p><h3>Key features</h3><ul><li>Insurance: There are 5 sections of coverage that are given to the emigrants under this scheme. These sections are personal accident, transportation, and medical, employment contingency and finally legal expenses.</li><li>Eligibility: Indians who are applying for the emigration clearance and going outside the domestic territory for jobs will have to apply for this scheme. Any work category that is falling under the Emigration Act 1983 will be eligible for this scheme.</li><li>Validity: The tenure of the coverage is 2-3 years under this scheme. After that the emigrant worker can renew the coverage. It can be renewed till the service period of the employee.</li><li>Online registration for the insurance: Online application form for the scheme is available. Any insurance company that is listed under the scheme will have this application form. You can see the application form format by clicking on this link <a href=\"http://pbby.iffcotokio.co.in/ui/Policy.aspx\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(235, 26, 61);\">http://pbby.iffcotokio.co.in/ui/Policy.aspx</a>. One has to fill up the form and submit it online along with mandatory documents.</li></ul><h3>Emigration Check Required Countries</h3><p>There are 18 countries that fall under Emigration Check Required countries. These countries are Indonesia, Malaysia, Jordan, Libya, Kuwait, Thailand, Yemen, Lebanon, Qatar, Kingdom of Saudi Arabia, Iraq, Bahrain, Afghanistan, Syria, Sudan, South Sudan and Sultanate of Oman. Among them Yemen is currently banned for the emigrants.</p><p class=\"ql-align-center\"><br></p><h3>Sections under this scheme</h3><ul><li>Personal Accidents: Under this section, emigrants who will meet an accident will get coverage of Rs. 10 Lac. If the accident leads to permanent disability of the person or death, then only the coverage will be given.</li><li>Transportation and airfare: In case of a deceased person, his/her body or the mortal remains must take back to India. The transportation cost and expenses of a person travelling by economy class with the body or last remains will be paid by the insurance company under this scheme. The money must be claimed within 90 days of the journey.</li><li>Hospitalisation Expenses: Under this section different amount are given for different medical problems. Up to Rs. 1 Lac has been given for the hospitalisation and procedure of the emigrant. Rs. 35, 000/- will be given to pregnant women for going through the surgery procedure. The amount recorded is for the normal deliveries and for the C-sections it will be Rs. 50,000/- coverage. In case of death or permanent disability of the emigrant, his/her spouse (aged not more than 60) and kids (aged not more than 21) will be eligible to get Rs. 50,000 coverage under this scheme.</li><li>Employment contingency: Under this section one way airfare in the economy class is being provided. If by chance the employer does not receive the employee, or if there is any termination of job agreement or change in any condition by the employer of the organisation, then this section will be applicable for the employee.</li><li>Legal Expenses: Finally the last section is about the legal issues. If there is any legal matter or problems with the emigrant, such as termination of job agreement or such, then up to Rs. 45, 000/- can be given to the emigrant as the legal expenses they are bearing.</li></ul><p>The scheme will not be applicable in:</p><ul><li>If the emigrant is travelling without doctor’s permission and having health issue, then the coverage will not be applicable here. The emigrant will have to make sure that they don’t have any health issue.</li><li>War, military activities or internal conflicts don’t fall under this scheme. They won’t get any coverage in case of any damage or death.</li><li>If there is any country/region where India has put a travel restriction and the emigrant goes to that place for jobs, then the emigrant worker will not be eligible for claiming any coverage.</li><li>Engaged in any criminal offense or illegal activities, emigrants will not be eligible for this coverage. They can’t claim any coverage for their companies.</li></ul><h3>Conclusion</h3><p class=\"ql-align-center\"><br></p><p>Every Indian citizen who are applying for and obtaining emigration clearance due to taking up jobs in global market will have to opt for an insurance policy. This is a mandatory rule for every Indian. With this scheme Indian workers will be protected from any accident or such while working outside their home country.</p>', 0, '2023-03-31'),
(6, 'SABLA Yojana 2022', 'uploads/schemes/Scheme-for-Adolescent-Girls-SAG-–-SABLA-Yojana-Expansion-Approved-by-Central-And-Rapid-Reporting-System-A-web-based-online-monitoring.jpg', '<p>The Central Government has announced the expansion of the SAG- Scheme for Adolescent Girls (SABLA) to additional districts within the country. Under the new expansion scheme the central government aims at covering more number of adolescent girls for health and nutritional services. According to the sources, the central government will now try and implement the same scheme in most districts of the country.</p><p><img src=\"https://www.pradhanmantriyojana.co.in/wp-content/uploads/2017/12/Scheme-for-Adolescent-Girls-SAG-%E2%80%93-SABLA-Yojana-Expansion-Approved-by-Central-And-Rapid-Reporting-System-A-web-based-online-monitoring.jpg\" alt=\"Scheme for Adolescent Girls (SAG) – SABLA Yojana Expansion Approved by Central And Rapid Reporting System A web-based online monitoring)\" height=\"267\" width=\"564\"></p><p class=\"ql-align-center\"><br></p><h3>Coverage Details</h3><ul><li>The central government has already made it very clear that after the new expansion of the scheme the government will try and cover more districts by 30<sup>th</sup> November</li><li>In the initial stage the scheme was aimed at covering over 205 districts by the year 2010. With the later expansion in the fiscal year 2017-18 the central government aims at covering over 508 districts within the country.</li><li>By eh fiscal year 2018-19 the central government also aims at making the scheme universal by implementing it in all other districts remaining.</li><li>Along with the new implementation the central government also aims at covering KSY (Kishori Shakti Yojana) within the North Eastern Region of the country.</li></ul><h3>Beneficiary under the scheme</h3><p>According to the latest updates the scheme will only offer benefit to the Girls who belong to the Adolescent age group and are between 11 to 14 years of their age.</p><h3>Main objectives of the scheme</h3><p>As this is a type of beneficiary scheme that is designed to help the girls monitor the nutritional and other health related issues at their adolescences so the main objectives of implementing the scheme are listed here below:-</p><ul><li>To educate the adolescent girls so they can implement the habit of self development along with awareness for empowerment during this age. This will be done by educating them through the right channels.</li><li>Under the new scheme the central government will also try and provide the girls with right type of nutritional diet so they can maintain good health condition.</li><li>Apart from the above mentioned, the central government also aims at educating the girls related to maintaining self hygiene, good health and getting awareness related to other sexual and reproduction related issues (ARSH).</li><li>Under the new scheme the central government will also try and offer the girls with right type of education and awareness related to developing their skills via formal and informal system of education.</li><li>Under the scheme the girls will also be provided with all possible information related to general public services including police, banking, post office and health care services.</li><li>To ensure that the scheme is implemented effectively the central government will seek the assistance of Aanganwadi workers at the district levels to cover all districts and deliver the scheme’s objectives.</li></ul><h3>Funds allocated under SAG scheme</h3><p>For effective implementation the central government has set a budget of Rs 61021.36 lakhs for 2014-15. For implementation in 2017-18 the central government has allocated the fund of Rs 33359.64 lakh.</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\"><br></p><h2>Update On 26 Jan 2018</h2><h3 class=\"ql-align-center\">Rapid Reporting System (A web-based online monitoring)</h3><p>The central government of India has launched a new online portal under the Scheme for Adolescence Girls. Under this scheme adolescence girls will get nutritional benefit. Apart from that, girls who are school drop-outs will also get benefitted from the scheme.</p><h3>Launch Details</h3><p>The Department of Women and Child Department has launched the system. It will be implemented on the basis of phases. Rakesh Srivastava, the Secretary of WCD has officially started the first phase of the system on 24<sup>th</sup> January 2018.</p><h3>Highlights Of Rapid Reporting System</h3><ul><li>System: The system will be an online way to supervise implementation of schemes. Mainly it will monitor health issues and nutritional activities of the girls who are in adolescence period.</li><li>Nutritional Support: Indian government has already given approval for a scheme namely Scheme for Adolescence Girls aka SAG. Under this scheme, girls will get financial assistance for their nutrition.</li><li>SAG: The scheme was launched in the year 2017 during the month of November. Under this scheme girls aged between 11 years and 14 years are getting financial help. Each girl receives Rs. 9.50/- per day for their nutritional food. It will last for 300 days for each beneficiary.</li><li>School drop-outs: There are benefits for school drop-outs as well under this system. Under this scheme the authority will motivate the students who left school or dropped out for any reason. They make sure to get them back in school.</li></ul><p><br></p>', 0, '2023-03-27'),
(12, 'Pradhan Mantri Jan Dhan Yojana (PMJDY)', 'uploads/schemes/pmjdylogo.png', '<h3 class=\"ql-align-center\"><strong>Scheme Details</strong></h3><p class=\"ql-align-justify\">Pradhan Mantri Jan-Dhan Yojana (PMJDY) is National Mission for Financial Inclusion to ensure access to financial services, namely, a basic savings & deposit accounts, remittance, credit, insurance, pension in an affordable manner. Under the scheme, a basic savings bank deposit (BSBD) account can be opened in any bank branch or Business Correspondent (Bank Mitra) outlet, by persons not having any other account.</p><p><br></p><h3 class=\"ql-align-center\"><strong>Benefits under PMJDY</strong></h3><ul><li class=\"ql-align-justify\">One basic savings bank account is opened for unbanked person.</li><li class=\"ql-align-justify\">There is no requirement to maintain any minimum balance in PMJDY accounts.</li><li class=\"ql-align-justify\">Interest is earned on the deposit in PMJDY accounts.</li><li class=\"ql-align-justify\">Rupay Debit card is provided to PMJDY account holder.</li><li class=\"ql-align-justify\">Accident Insurance Cover of Rs.1 lakh (enhanced to Rs. 2 lakh to new PMJDY accounts opened after 28.8.2018) is available with RuPay card issued to the PMJDY account holders.</li><li class=\"ql-align-justify\">An overdraft (OD) facility up to Rs. 10,000 to eligible account holders is available.</li><li class=\"ql-align-justify\">PMJDY accounts are eligible for Direct Benefit Transfer (DBT), Pradhan Mantri Jeevan Jyoti Bima Yojana (PMJJBY), Pradhan Mantri Suraksha Bima Yojana (PMSBY), Atal Pension Yojana (APY), Micro Units Development & Refinance Agency Bank (MUDRA) scheme.</li></ul><p><br></p>', 0, '2023-03-04'),
(13, 'Pradhan Mantri Gram Samridhi Yojana 2022', 'uploads/schemes/KPIT-Germany-New-Office.jpg', '<p>भारतीय ग्रामीण क्षेत्रों में बेरोजगारी की समस्या को समाप्त करने के साथ-साथ ग्राम समृद्धि के मूल विचार पर कार्य करते हुए भारत की मोदी सरकार और विश्व बैंक द्वारा चलाई जा रही ग्राम समृद्धि योजना 2022 के बारे में विस्तार से बताएंगे ताकि आप बहुत जल्दी। इसका जल्द से जल्द लाभ उठाकर वे अपना सामाजिक और आर्थिक विकास कर सकते हैं।</p><p>प्रधानमंत्री ग्राम समृद्धि योजना 2022 के तहत जारी नए अपडेट के तहत आपको बता दें कि पीएम ग्राम समृद्धि योजना 2022 के तहत बेरोजगार युवाओं को पहले से ही क्षेत्र में स्वरोजगार के तहत खाद्य प्रसंस्करण इकाइयां स्थापित करने के लिए प्रेरित और प्रोत्साहित किया जाएगा. कार्यशील इकाइयों का पुनर्विकास किया जाएगा और साथ ही प्रबंधन क्षेत्रों में तकनीकी सहायता प्रदान की जाएगी।</p>', 1, '0000-00-00'),
(15, 'Demo', 'uploads/schemes/1576082642527.gif', '<p>ddddde   <strong style=\"color: rgb(230, 0, 0);\"><em>ffr</em></strong></p>', 1, '0000-00-00'),
(16, 'Hhfdhg', 'uploads/schemes/download (6).jpeg', '<p><br></p>', 1, '2023-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `image`, `title`, `subtitle`) VALUES
(33, 'uploads/slide/banner1.jpg', 'PMAY(Urban) ', ' Compendium of Indigenous Innovative Building Materials and Construction Technologies '),
(37, 'uploads/slide/azadimahotsav.jpg', 'PMAY(Urban) ', 'Pradhan Mantri Aawas Yojna'),
(38, 'uploads/slide/banner1.jpg', ' Pradhan Mantri Jan Dhan Yojana ', '(PMJDY)'),
(39, 'uploads/slide/azadimahotsav.jpg', 'Pratik aavas yojana', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first` varchar(10) NOT NULL,
  `middle` varchar(10) NOT NULL,
  `last` varchar(10) NOT NULL,
  `addhar_no` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `category` varchar(10) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first`, `middle`, `last`, `addhar_no`, `birth_date`, `gender`, `category`, `mobile_no`, `password`) VALUES
(1, 'Nilesh', '', 'Bhambale', '0', '0000-00-00', '', '', '2147483647', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(2, 'Virat', '', 'kohli', '0', '0000-00-00', '', '', '2147483647', 'b59c67bf196a4758191e42f76670ceba'),
(3, 'Rohit', '', 'Sharma', '0', '2023-03-22', 'male', 'Obc', '1111111111', 'b59c67bf196a4758191e42f76670ceba'),
(4, 'hardik', '', 'pandya', '2147483647', '2023-03-21', 'male', 'sc', '2147483647', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Nayan', '', 'Bhambale', '2147483647', '2023-02-27', 'male', 'nt', '1212121212', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(6, 'fadfs', 'af', 'adsf', '2147483647', '0003-02-23', 'female', 'adsf', '2147483647', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(7, 'alsfdj', 'adf', 'adsfafd', '909009090', '2023-03-29', 'male', 'afd', '9876543210', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'Nilesh', '', 'Bhambale', '2147483647', '2003-03-23', 'male', 'sbc', '9022540151', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'Aniket', '', 'Rajput', '667998767089', '2002-02-02', 'male', 'obc', '1234567890', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'rahul', 'kishor', 'fuse', '768906543212', '2004-01-28', 'male', 'Obc', '7261961917', 'fca51d4bbb20488c1393b27bdda385f8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
