-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2018 lúc 07:58 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(400) NOT NULL,
  `time_create_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `fullname`, `email`, `content`, `time_create_status`) VALUES
(1, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Xin chào bạn', '2018-11-04 12:59:04'),
(2, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Xin chào', '2018-11-04 12:59:12'),
(3, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Xin chào', '2018-11-04 13:00:34'),
(4, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Xin chào', '2018-11-04 13:00:44'),
(5, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Xin chào', '2018-11-04 13:02:47'),
(6, 'Bé Mèo', 'bemeo@gmail.com', 'Xin chào, mình là mèo con!', '2018-11-04 13:26:46'),
(7, 'Bé Mèo', 'bemeo@gmail.com', 'Buồn wa đi mà!', '2018-11-04 13:35:03'),
(8, 'Lương Mèo', 'nhoxxinhtrai98@gmail.com', 'Xin chào thầy', '2018-11-04 14:39:41'),
(9, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Chủ nhật', '2018-11-04 15:37:23'),
(10, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Stack Overflow and I am eager to show the right way for PHP developers.\r\n\r\nBesides, your questions let me make my articles even better, so you are more than welcome to ask any question you got.', '2018-11-04 15:37:43'),
(11, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Stack Overflow and I am eager to show the right way for PHP developers.\r\n\r\nBesides, your questions let me make my articles even better, so you are more than welcome to ask any question you got.\r\nStack', '2018-11-04 15:39:15'),
(12, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', 'Stack Overflow and I am eager to show the right way for PHP developers.\r\n\r\nBesides, your questions let me make my articles even better, so you are more than welcome to ask any question you got.\r\nStack Overflow and I am eager to show the right way for PHP developers.\r\n\r\nBesides, your questions let me make my articles even better, so you are more than welcome to ask any question you got.\r\nStack Over', '2018-11-04 15:39:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `location`, `work`) VALUES
(1, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98@gmail.com', '$2y$10$ZYWY4.xK6Mk6vWE6BFQmv.ZAMvqa04of8WDcdCVGZCEneNWsmLmV2', 'Viet Nam', 'Sinh Viên CNTT'),
(2, 'Lương Trần Gia Bảo', 'nhoxxinhtrai98x@gmail.com', '$2y$10$oOpfe1K4zgZTVZQw.PAyKO20Loa9OlxO8HKeRwQO6TSsOeegPwcCC', '', ''),
(7, 'bao khung', 'nhoxxinhtrasaai98@gmail.com', '$2y$10$upTWq17pXGvdD6QgrqMggeA5cckHT35U5K8kFkTQWT/sT5oPPNNhK', '', ''),
(8, 'bao', 'bao@gmail.com', '$2y$10$d9SidouXmOUmo1Ij8pNVO./RqQIT7Hdt02phmk0JWumvzMxj.kFo.', '', ''),
(9, 'bao1', 'bao1@gmail.com', '$2y$10$nEopdbjg2OnkHEll2IqMuO82tvZTt1fLOEy957jkFHBpeV9S25KUy', 'Trung Quốc', 'CNTT'),
(10, 'bao khung', 'bao2@gmail.com', '$2y$10$/BL2eNDB4wKgB8gGBxkcte5VWE6MeoXfOEtjIo8c63xw/87eXUQs2', '', ''),
(16, 'bao khung', 'nhoxxindsddsdhtrai98@gmail.com', '$2y$10$iOJQiMmxDExw8GKtWRiL2e6VxB/AruYUh3AJ1t3vkp//gB/eaSwYG', '', ''),
(17, 'bao khung', 'nhoxxinhtrdddddai98@gmail.com', '$2y$10$NlC4GhE.eBt4AbT6cl5xtuX3ogcyR2e9C5UFKdsXXfPkhHQwi3th.', '', ''),
(18, 'bao18', 'bao18@gmail.com', '$2y$10$9/cDf8z7Jf8FYKzujp/aveTuwXLjYY1rwS9mVXILE8kyAFjeGPeIu', 'Sài gòn ', 'HCM'),
(19, 'bao1998', 'bao1998@gmail.com', '$2y$10$00xHw9c1Q/QwIyY8YZo2GeF2Jsb.l/49qtptVAITU4.LLN1dnlofK', '', ''),
(20, 'baobao', 'baobao@gmail.com', '$2y$10$1xga6jlGWQtsu41gaHNscea8.jMhNQMwn8KZCL2Wv7GQp.oRbeiIW', 'Sài Gòn', 'Sinh Viên CNTT'),
(21, 'bao khungds', 'nhoxxxxxxinhtrai98@gmail.com', '$2y$10$lJlPD0pn/UulYMlxBvQJseZ8zE0fYbZR7JrNH3NDFlWZ05LUw2zW6', '', ''),
(29, 'bao khung', 'nhoxxinhtrai98xx@gmail.com', '$2y$10$uPwrO3Qt2Z1MOcjz9BGKNePDoKdCMijV30eh8FnrzAHqXBIeIt8YS', '', ''),
(30, 'bao khung', 'nhoxxinhtrai98xxx@gmail.com', '$2y$10$xTdk8SZ.EyzePfJxEQ6Rc.NGaT2YMB4w5lOHDcak4woILRUXi6TMq', '', ''),
(31, 'bao khung', 'nhoxxinhtrai9812@gmail.com', '$2y$10$v/Ezsu2Ac/CvztwK7FCST.JtMwlCy8s2njb8HswTetKH7khm3kUCS', '', ''),
(32, 'bao khung', 'nhoxxinhtrai9821@gmail.com', '$2y$10$F6tpKdA5GWbqMeG1rViue.bjsmzlsv6nG5vaW.ZJruZTFKgmdUoJi', '', ''),
(34, 'bao khung', 'nhoxxinhtrai98xz@gmail.com', '$2y$10$n9hGO3m2TEloksjfqwPGyOXcrW1c5ZJ9YVyQ3gNqhLjTpk9UBUqXG', '', ''),
(35, 'Bé Mèo', 'bemeo@gmail.com', '$2y$10$7pcHTMRa5c14kt1lR69VkeRAZcFM/Z1GuJOWxFrkJHyrKvh24Vq4.', '', ''),
(36, 'bao khung', 'nhoxxinhtrxzzai98@gmail.com', '$2y$10$iVevEC6YmfbtAg5C9xlPZusuNOPpxkY4dlQxuBHHX.nfHXIhu81AW', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
