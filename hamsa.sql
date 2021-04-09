-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2021 lúc 10:32 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hamsa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `answer_id` int(12) NOT NULL,
  `answer_title` varchar(50) DEFAULT NULL,
  `answer_thumb` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `question_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_answer`
--

INSERT INTO `tbl_answer` (`answer_id`, `answer_title`, `answer_thumb`, `description`, `question_id`) VALUES
(1, 'Chocolate', 'public/images/chocolate.jpg', 'Description of chocolate', 1),
(2, 'Banana', 'public/images/banana.jpg', 'Description of banana', 1),
(3, 'Fried chicken', 'public/images/friedChicken.jpg', 'Description of fried chicken', 1),
(4, 'Dog', 'public/images/dog.jpg', 'Description of fried dog', 2),
(5, 'Cat', 'public/images/cat.jpg', 'Description of fried cat', 2),
(6, 'Hamster', 'public/images/hamster.jpg', 'Description of fried hamster', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `survey_id` int(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `answer2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_survey`
--

INSERT INTO `tbl_survey` (`survey_id`, `user_name`, `answer1`, `answer2`) VALUES
(1, 'Cuong', 'Chocolate', 'Cat'),
(3, 'Toan', 'Chocolate', 'Dog'),
(21, 'User1', 'Chocolate', 'Dog'),
(22, 'User2', 'Chocolate', 'Cat'),
(23, 'User3', 'Chocolate', 'Hamster'),
(24, 'User4', 'Chocolate', 'Dog'),
(25, 'User5', 'Chocolate', 'Hamster'),
(26, 'User5', 'Chocolate', 'Hamster'),
(27, 'User5', 'Chocolate', 'Hamster'),
(28, 'User6', 'Banana', 'Dog'),
(29, 'User7', 'Banana', 'Cat'),
(45, 'User8', 'Fried chicken', 'Hamster'),
(46, 'User8', 'Fried chicken', 'Hamster'),
(47, 'User9', 'Fried chicken', 'Hamster'),
(48, 'User10', 'Fried chicken', 'Hamster'),
(49, 'User11', 'Banana', 'Cat'),
(75, 'User19', 'Banana', 'Cat'),
(78, 'User21', 'Fried chicken', 'Dog'),
(80, 'User30', 'Banana', 'Cat'),
(95, 'User31', 'Fried chicken', 'Cat'),
(101, 'User90', 'Fried chicken', 'Cat');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Chỉ mục cho bảng `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `answer_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `survey_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
