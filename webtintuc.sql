-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 03:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `title`, `content`, `author`) VALUES
(1, '2023-04-14', 'Thoi tiet ngay 14/03/2023', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'dongkha'),
(2, '2023-04-14', 'Tu hoc tieng anh tai nha', 'Morbi tincidunt ornare massa eget egestas purus viverra. Diam ut venenatis tellus in metus vulputate. Ut sem viverra aliquet eget sit amet. Nisl suscipit adipiscing bibendum est ultricies integer. In hac habitasse platea dictumst vestibulum. Volutpat ac tincidunt vitae semper. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Rhoncus mattis rhoncus urna neque viverra justo. Vel quam elementum pulvinar etiam non. Lobortis elementum nibh tellus molestie nunc. Id venenatis a condimentum vitae sapien pellentesque. Morbi tristique senectus et netus et malesuada fames. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Adipiscing vitae proin sagittis nisl. Mauris rhoncus aenean vel elit scelerisque mauris. Imperdiet sed euismod nisi porta lorem. At tellus at urna condimentum mattis. Arcu non sodales neque sodales ut etiam. Nulla facilisi etiam dignissim diam quis enim.', 'kha_nguyen'),
(3, '2023-04-14', 'Tai sao mat troi lai nong?', 'Sapien et ligula ullamcorper malesuada proin libero nunc. Suscipit tellus mauris a diam maecenas sed. Varius morbi enim nunc faucibus a pellentesque. Lobortis mattis aliquam faucibus purus in massa. Morbi tempus iaculis urna id volutpat lacus laoreet. Posuere lorem ipsum dolor sit amet consectetur. Natoque penatibus et magnis dis. Purus semper eget duis at. Congue eu consequat ac felis donec et odio. Enim nec dui nunc mattis enim ut tellus. Quam viverra orci sagittis eu volutpat. Egestas fringilla phasellus faucibus scelerisque.', 'kha_dep_trai'),
(4, '2023-04-14', 'Vape có hại cho sức khỏe', 'Donec massa sapien faucibus et molestie ac feugiat sed. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Accumsan tortor posuere ac ut consequat semper viverra nam libero. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Ut consequat semper viverra nam libero justo laoreet sit amet. Lectus proin nibh nisl condimentum id venenatis. Dictum at tempor commodo ullamcorper a lacus. Euismod lacinia at quis risus sed.', 'McDonalds'),
(5, '2023-04-14', 'Hamburger của Mỹ gây đẹp trai', 'Yesterday, I went to a fast-food restaurant and ordered a hamburger. The server took my order and asked if I wanted any toppings on it. I decided to add some lettuce, tomatoes, onions, and pickles to my burger. When my hamburger arrived, it looked delicious! I couldn\'t wait to sink my teeth into it. The bun was toasted perfectly, and the patty was juicy and flavorful. I savored every bite of my hamburger and felt satisfied after finishing it. Despite the unhealthy reputation of fast food, sometimes there\'s nothing better than a good old-fashioned hamburger.', 'kha_sieu_dep'),
(7, '2023-04-15', 'test', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test  test ', 'dongkha'),
(9, '2023-04-15', 'Tại sao thầy Dương không làm ở Teky nữa?', 'Nguyên nhân khá là đa dạng, có thể thầy Dương phải đi bộ đội, nhưng thầy nói là thầy trốn nghĩa vụ. Tuy nhiên nguyên nhân vẫn chưa được xác minh rõ ràng, vcl thật. Anyway đây là chỉ là tin giả, nếu bạn đang đọc và bạn tin thì bạn có vấn đề rồi.', 'omg_verul_col'),
(10, '2023-04-15', 'Lorem Ipsum siêu bài be like', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Porta non pulvinar neque laoreet suspendisse interdum consectetur libero id. Adipiscing at in tellus integer feugiat. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Consectetur a erat nam at lectus urna duis convallis. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Neque aliquam vestibulum morbi blandit cursus risus at ultrices. Vitae aliquet nec ullamcorper sit.\r\n\r\nLacinia quis vel eros donec ac. Id leo in vitae turpis. Sit amet volutpat consequat mauris nunc congue. Pretium nibh ipsum consequat nisl vel pretium lectus. Vitae suscipit tellus mauris a. Venenatis tellus in metus vulputate eu. Viverra maecenas accumsan lacus vel. Vel elit scelerisque mauris pellentesque. Arcu non odio euismod lacinia at quis risus. Nisi vitae suscipit tellus mauris a. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Felis donec et odio pellentesque diam volutpat. In iaculis nunc sed augue. Diam ut venenatis tellus in metus vulputate eu scelerisque felis. Et netus et malesuada fames ac turpis egestas.\r\n\r\nLacus sed turpis tincidunt id aliquet risus. Enim ut sem viverra aliquet eget sit amet. Pharetra massa massa ultricies mi quis. Blandit volutpat maecenas volutpat blandit aliquam etiam erat. Aenean euismod elementum nisi quis eleifend quam adipiscing. Nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit. Ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim. Arcu risus quis varius quam quisque. Feugiat vivamus at augue eget arcu dictum varius duis. In ornare quam viverra orci sagittis eu volutpat odio. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Faucibus in ornare quam viverra orci sagittis eu volutpat. Ac tortor dignissim convallis aenean et. Elementum sagittis vitae et leo. In eu mi bibendum neque egestas congue. In hendrerit gravida rutrum quisque non tellus orci ac auctor.\r\n\r\nVenenatis cras sed felis eget velit aliquet sagittis id consectetur. Nibh sit amet commodo nulla facilisi nullam vehicula. Dignissim suspendisse in est ante in nibh mauris. Integer enim neque volutpat ac tincidunt vitae. Bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida. Gravida in fermentum et sollicitudin. Varius morbi enim nunc faucibus a. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Nam at lectus urna duis convallis convallis tellus id interdum. Nibh mauris cursus mattis molestie. Viverra aliquet eget sit amet tellus cras adipiscing enim eu. Lacus sed viverra tellus in. Sed risus ultricies tristique nulla aliquet enim tortor. Risus pretium quam vulputate dignissim suspendisse in est ante. Neque viverra justo nec ultrices dui sapien eget. Fames ac turpis egestas sed tempus urna et.\r\n\r\nLectus urna duis convallis convallis tellus id interdum. Nullam ac tortor vitae purus faucibus ornare suspendisse sed. Est ullamcorper eget nulla facilisi etiam dignissim. Ornare massa eget egestas purus. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Dui sapien eget mi proin sed libero enim. Vel turpis nunc eget lorem dolor. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Sed enim ut sem viverra aliquet. Dolor sit amet consectetur adipiscing elit. Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Erat velit scelerisque in dictum. Nullam eget felis eget nunc lobortis. Diam quam nulla porttitor massa id neque aliquam vestibulum. Dictum non consectetur a erat.', 'Kha Cho Tim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
