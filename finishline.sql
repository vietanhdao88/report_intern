-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `finishline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`) VALUES
(2, 'Nike', 'image-4.png'),
(3, 'Adidas', 'adi.jpg'),
(4, 'Converse', 'convert.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `price`, `price_sale`, `name`, `img`) VALUES
(29, 2, 50, 40, 'Jodan 1', '408452_017.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `thumnail` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL,
  `delivery` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `colors` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `thumnail`, `detail`, `review`, `delivery`, `amount`, `status`, `title`, `colors`, `price_sale`, `id_brand`) VALUES
(2, 'Jodan 1', 50, '408452_017.webp', '', 'adfasdfasdf', 'asdfasdf', 4, 'Trending', 'Sale off 50% with coupon Vanhdeptrai', 7, 40, 0),
(4, 'Jodan 2', 50, 'a1.webp', '', 'fd', 'df', 4, 'Trending', 'Sale off 50% with code Datdeptrai', 10, 30, 0),
(8, 'Jodan 3', 60, 'a9.webp', '', 'fdads', 'adfasdf', 5, 'Top_Rated', 'Sale up 45% with coupon VANH', 5, 40, 0),
(9, 'Air Jordan Retro 1 Low Casual Shoes', 110, 'nike1.webp', '', 'ádfasdf', 'adfadsf', 682, 'Popular', '50% off with code FALL50', 6, 50, 0),
(10, 'Hoang Van Dat', 50, 'AH6789_100.webp', '', '', '', 6, 'Trending', '50% off with code FALL50', 2, 30, 0),
(11, 'Hoang Van Dat', 50, 'AH6789_100.webp', '', '', '', 6, 'Trending', '50% off with code FALL50', 4, 40, 0),
(12, 'Air Jordan Retro 3 Low Casual Shoes', 50, 'a11.webp', '', '', '', 5, 'Trending', '50% off with code Lab', 2, 30, 0),
(13, 'Air Jordan Retro 6 Basketball Shoes', 350, 'a111.webp', '', 'fff', 'fff', 4, 'Trending', '50% off with code FALL50', 4, 175, 0),
(14, 'Kids Jordan Cool Stack Printed T-Shirt', 42, 'bar2.jpg', '', '', '', 34, 'Trending', '50% off with code FALL50', 2, 20, 0),
(15, 'Little Kids Air Jordan Retro 4 Basketball Shoes', 45, 'a122.webp', '', '', '', 45, 'Top_Rated', '50% off with code FALL50', 4, 22, 0),
(16, 'Kids Toddler Jordan Gym 23 T-Shirt and Shorts Set', 90, 'bar1.jpg', '', '', '', 34, 'Top_Rated', '50% off with code FALL50', 2, 45, 0),
(17, 'Kids Toddler Air Jordan Retro 4 Basketball Shoes', 90, 'a2.webp', '', '', '', 45, 'Trending', '50% off with code FALL50', 2, 45, 0),
(18, 'Big Kids Air Jordan Retro 4 Basketball Shoes', 42, 'AH6789_100.webp', '', '', '', 196, 'Popular', '50% off with code FALL50', 3, 20, 0),
(19, 'Kids Jordan Taped Crewneck Sweatshirt', 50, 'bar4.jpg', '', '', '', 34, 'Trending', '45% off with code FALL45', 3, 25, 0),
(20, 'Boys Jordan 23 T-Shirt', 90, 'bar3.jpg', '', '', '', 42, 'Top Rated', '45% off with code FALL45', 2, 45, 0),
(21, 'Kids Jordan Fireball Dunk T-Shirt', 60, 'bar6.jpg', '', '', '', 45, 'Top Rated', '50% off with code FALL50', 2, 30, 0),
(22, 'Kids Jordan Split The Defense Graphic Shorts', 60, 'cate5.jpg', '', '', '', 23, 'Top Rated', '50% off with code FALL50', 3, 45, 0),
(23, 'Big Kids Air Jordan Retro 6 Basketball Shoes', 60, 'cate7.jpg', '', '', '', 34, 'Popular', '60% off with code VANH50', 4, 30, 0),
(24, 'Mens Supply & Demand Royalty Monogram Print Crewneck Sweatshirt', 60, 'bar7.jpg', '', '', '', 45, 'Trending', '50% off with code FALL50', 3, 30, 0),
(25, 'Little Kids Air Jordan Retro 4 Basketball Shoes', 50, 'a12.webp', '', '', '', 45, 'Popular', '50% off with code FALL50', 2, 25, 0),
(26, 'Big Kids Nike Dunk Low Casual Shoes', 90, 'AH6789_100.webp', '', '', '', 45, 'Trending', '50% off with code FALL50', 2, 45, 0),
(27, 'Big Kids Nike Dunk Low Casual Shoes', 60, 'a122.webp', '', '', '', 56, 'Trending', '50% off with code FALL50', 2, 30, 0),
(28, 'Big Kids Under Armour Curry Flow 11 Basketball Shoes', 90, 'a111.webp', '', '', '', 23, 'Trending', '50% off with code FALL50', 1, 45, 0),
(29, 'Mens Asics GEL-Lyte III OG Casual Shoes', 60, 'bar2.jpg', '', '', '', 34, 'Trending', '45% off with code FALL45', 1, 30, 0),
(30, 'Air Jordan Retro 1 Low OG Casual Shoes', 140, 'cate2.jpg', '', '', '', 34, 'Top Rated', '50% off with code FALL50', 3, 70, 0),
(31, 'Nike x FaZe Clan LeBron Witness 8 Basketball Shoes', 80, 'nike4.webp', '', '', '', 23, 'Trending', '50% off with code FALL50', 2, 40, 0),
(32, 'adidas x IVY PARK Snap Jogger Pants (3XS - 4XL)', 45, 'nike27.webp', '', '', '', 45, 'Trending', '50% off with code FALL50', 2, 20, 0),
(33, 'adidas x IVY PARK Savage Training Shoes', 45, 'nav3.jpg', '', '', '', 45, 'Trending', '50% off with code FALL50', 2, 20, 0),
(34, 'Womens adidas x IVY PARK Shiny Racerback Sports Bra (XS-XL)', 42, 'nike34.webp', '', '', '', 56, 'Trending', '50% off with code FALL50', 2, 20, 0),
(35, 'Womens Nike Air Max 1 Casual Shoes', 140, 'nike5.webp', '', '', '', 34, 'Top Rated', '50% off with code FALL50', 3, 45, 0),
(36, 'Kids Jordan Taped Club Fleece Jogger Pants', 50, 'r11.webp', '', '', '', 34, 'Trending', '50% off with code FALL50', 2, 25, 0),
(37, 'Kids Jordan Split The Defense Graphic Shorts', 60, 'r8.webp', '', '', '', 23, 'Popular', '50% off with code FALL50', 2, 30, 0),
(38, 'Jordan One Take 4 Basketball Shoes', 60, 'nike30.webp', '', '', '', 456, 'Trending', '50% off with code FALL50', 2, 30, 0),
(39, 'Girls Jordan Jumpman High-Waisted Bike Shorts', 50, 'a111.webp', '', '', '', 45, 'Trending', '50% off with code FALL50', 2, 25, 0),
(40, 'Girls Jordan Jersey Dress', 140, 'nike23.webp', '', '', '', 34, 'Trending', '50% off with code FALL50', 2, 70, 0),
(41, 'Nguyen Quang Duy Anh', 60, 'r6.webp', '', '', '', 196, 'Trending', '50% off with code FALL50', 3, 30, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thumnail`
--

CREATE TABLE `thumnail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `createdAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `birthdate`, `email`, `password`, `role`, `createdAT`) VALUES
(1, 'dao viet', 'anh anh', '2003-08-08', 'admin@gmail.com', 'Vanhvanh1', 1, '2023-10-17 05:02:22'),
(2, 'hoang van', 'dat', '2003-06-06', 'dat@gmail.com', 'datdat1234', 0, '2023-10-17 05:02:22'),
(3, 'nguyen quang duy', 'anh', '2003-05-05', 'nguyenquangduyanh@gmail.com', 'duyanh123456', 0, '2023-10-17 05:02:22'),
(4, 'nguyen quang duy', 'anh', '2003-05-05', 'nguyenquangduyanh@gmail.com', 'duyanh123456', 0, '2023-10-17 05:02:22'),
(5, 'cao duc', 'anh', '2003-04-04', 'caoducanh@gmail.com', 'ducanh123456', 0, '2023-10-17 05:02:22'),
(6, 'nguyen quang duy', 'anh', '2003-05-05', 'nguyenquangduyanh@gmail.com', 'duyanh123456', 0, '2023-10-17 05:02:22'),
(7, 'nguyen quang duy', 'anh', '2003-05-05', 'nguyenquangduyanh@gmail.com', 'duyanh123456', 0, '2023-10-17 05:02:22'),
(8, 'nguyen quang duy', 'anh', '2003-05-05', 'nguyenquangduyanh@gmail.com', 'duyanh123456', 0, '2023-10-17 05:02:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thumnail`
--
ALTER TABLE `thumnail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `thumnail`
--
ALTER TABLE `thumnail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
