-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 04:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cateid` int(11) NOT NULL,
  `nhasanxuat` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateid`, `nhasanxuat`) VALUES
(1, 'Hublot'),
(2, 'Rolex'),
(3, 'Tissot'),
(4, 'Citizen'),
(5, 'Bulova'),
(6, 'Orient'),
(7, 'Salvatore Ferragamo'),
(8, 'FC'),
(9, 'Seiko'),
(10, 'Versace'),
(11, 'Omega');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `makh` int(11) NOT NULL,
  `hovaten` varchar(300) NOT NULL,
  `tendangnhap` varchar(300) NOT NULL,
  `matkhau` varchar(300) NOT NULL,
  `rematkhau` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `sdt` varchar(300) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `madh` int(11) NOT NULL,
  `ten` varchar(500) NOT NULL,
  `dt` varchar(250) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `ghichu` varchar(500) NOT NULL,
  `thoigiandat` varchar(500) NOT NULL,
  `tongsotien` varchar(500) NOT NULL,
  `capnhatcuoi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `masp` int(11) NOT NULL,
  `tensp` int(11) NOT NULL,
  `loaisp` int(11) NOT NULL,
  `anh` int(11) NOT NULL,
  `nhasanxuat` varchar(400) NOT NULL,
  `soluong` int(20) DEFAULT NULL,
  `giacu` int(11) NOT NULL,
  `giamoi` int(11) NOT NULL,
  `mota` int(11) NOT NULL,
  `ngaybaohanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `idmanage` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `tendangnhap` varchar(500) NOT NULL,
  `matkhau` varchar(500) NOT NULL,
  `rematkhau` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `sdt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`idmanage`, `hovaten`, `tendangnhap`, `matkhau`, `rematkhau`, `email`, `sdt`) VALUES
(1, 'Anh Quan', 'anhquan', '123456', '123456', '1951120050@sv.ut.edu.vn', '0849444411');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL COMMENT 'để biết là của đơn hàng nào',
  `masp` int(11) NOT NULL,
  `soluong` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `madh` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phuongthucthanhtoan` varchar(255) NOT NULL COMMENT 'Thanh toán tiền mặt hoặc chuyển khoản',
  `ngaydat` datetime NOT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(300) NOT NULL,
  `cateid` int(11) NOT NULL,
  `dongsp` varchar(11) NOT NULL,
  `soluong` int(50) NOT NULL,
  `giacu` decimal(10,0) NOT NULL,
  `giamoi` decimal(10,0) NOT NULL,
  `anh` varchar(400) NOT NULL,
  `mota` varchar(300) DEFAULT NULL,
  `ngaybaohanh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`masp`, `tensp`, `cateid`, `dongsp`, `soluong`, `giacu`, `giamoi`, `anh`, `mota`, `ngaybaohanh`) VALUES
(78, 'Tissot PR100 Lady', 3, '   Đồng hồ', 35, '11500000', '5900000', '20211102-143932dong-ho-tissot-t1012512603600_1614245255-removebg-preview.png', 'Tissot T101.251.26.036.00 đẳng cấp cho chị em...\r\n.Case 33mm. Kính sapphire phản quang, chống trầy xước.\r\n.Mặt số màu bạc với kim chỉ số vàng sáng dạ.\r\n.Đính kim cương tại cái vị trí 3,6,9,12 giờ.\r\n.Đánh dấu phút vành ngoài, hiển thị                           ', '0000-00-00'),
(79, 'Salvatore Ferragamo', 7, '   Đồng hồ', 15, '33000000', '12900000', '20211102-1442326arqztdsdt5qz-removebg-preview.png', '                                                    Case 35mm\r\n▫Mặt dial khảm trai theo hình cánh hoa cực kỳ tinh xảo\r\n▫Dây kim loại dạng mesh mềm mại, ôm tay\r\n▫Giá retail: $1,395++\r\n▫BHTC 2 năm\r\nCTV 10,900\r\nSẵn Ship                                                               ', '0000-00-00'),
(84, 'Tissot Carson', 3, ' Đồng hồ', 30, '22300000', '10400000', '20211102-144924New-Project-4.png', '              Một mẫu đhồ mới trong BST Carson dành cho các chị em với thiết kế đơn giản lịch lãm nhưng vẫn rất sang trọng\r\nTổng thể đhồ từ dây cho tới vỏ đều được mạ PVD RoseGold lên tay cực kỳ độc đáo sang trọng và nổi bật\r\nRất hiếm khi có 1 mẫu FullRose như thế này ace nhé\r\n- Size 30 mm đều dễ lê', '0000-00-00'),
(85, 'FC-335MC4P5', 8, '   Đồng hồ', 25, '58000000', '33200000', '20211102-145149frederique-constant-fc-335mc4p5-nam-1-org-removebg-preview.png', '                                                     Mẫu Dresswatch được săn đón nhiều của FC bởi vẻ đẹp ấn tượng đến từ thiết kế vừa sang trọng, cổ điển nhưng cũng rất hiện đại và tinh tế\r\nGóc 12h là ô hở van tim Heart-beat độc đáo giúp quan sát chuyển động nhịp nhàng của cỗ máy thời gian\r\nĐối xứng', '0000-00-00'),
(86, 'Seiko Tonneau', 9, '   Đồng hồ', 14, '18000000', '12300000', '20211102-145512Seiko-Tank-Automatic-Presage-Classic-SARY113-1-removebg-preview.png', '                                                     - ĐH mới 100% fullbox đầy đủ Hộp, sổ, made in japan\r\n- Size tương đương 39mm tròn, tay 15cm trở lên đeo là ok ạ\r\n- Máy Seiko inhouse 4R35B với 23 chân kính, 21600 vph & hơn 40h tích cót. Bộ máy có cơ chế tự động, có lên cót tay & hacking stop.\r\n- ', '0000-00-00'),
(92, 'TISSOT TRADITION', 3, '   Đồng hồ', 36, '24500000', '13500000', '20211102-150330427_T063.428.22.038.00-2-removebg-preview.png', '                          ✅ Size 40, dày 11mm.\r\n✅ Mã sản phẩm: T063.428.22.038.00\r\n✅ Kính saphire chống xước.\r\n✅ Chất liệu: Thép không gỉ 316L mạ PVD.\r\n✅ Loại máy: ETA 2825-2 với\r\n42h tích cót, 28.800pvh.\r\n✅ Chống nước 30m.                                  ', '0000-00-00'),
(93, 'Tissot Bridgeport', 3, '   Đồng hồ', 67, '48000000', '21000000', '20211102-150523tissot_bridgeport_automatic_chronograph_t0974272203300_2-removebg-preview.png', '                           Tissot Bridgeport Automatic Chronograph Gent T097.427.22.033.00 - Hàng siêu hiếm đã cập bến với bộ khung đờ mi sang trọng, mặt số Chronograph được thiết kế tinh tế và lịch lãm.\r\n- Xuất xứ: Thụy Sỹ\r\n- Case 42mm\r\n- Kính Sapphire nguyên khối\r\n- Máy Automatic ETA Caliber 7753 ', '0000-00-00'),
(94, 'SEIKO SCVE058', 9, '   Đồng hồ', 55, '9800000', '7600000', '20211102-150733DONG-HO-SEIKO.png', '                            Thông số kĩ thuật\r\n-Giới tính:Nam\r\n-Xuất xứ: Made in Japan\r\n-Tình trạng:New 100%\r\n-Loại máy:cơ Automatic\r\n-Size mặt:42mm ,Demi gold sang trọng\r\n-Mặt kính cao cấp Hard Rex chống va đập tốt\r\n-Chống nước 10bar(100m)\r\n-Dây kim loại thép cao cấp 316L\r\n-Lộ máy trước sau\r\n-Chức ', '0000-00-00'),
(95, 'Citizen AU1060-51E', 4, '   Đồng hồ', 26, '7000000', '3700000', '20211102-150903174_AU1060-51E-removebg-preview.png', '                              Đồng hồ Citizen AU1060-51E mang phong cách tối giản tuyệt đối, mặt số 40mm phù hợp với hầu hết cổ tay của các quý ông, kết hợp hoàn hảo giữa 2 tông màu lạnh đen - bạc tạo vẻ ngoài lịch lãm và không kém phần nam tính.\r\nMã sản phẩm: AU1060-51E\r\nVật liệu kính: Kính cứng\r\nC', '0000-00-00'),
(96, 'Citizen AW1598-70X', 4, '   Đồng hồ', 15, '8700000', '5600000', '20211102-151323citizen-aw1598-70x-nam-ga-1-org-removebg-preview.png', '                          -Size đồng hồ 43mm hợp với kích thước cổ tay nam từ 16,5 - 20 cm\r\n- Bô máy Eco-Drive hiện đại, có thể tiếp thu mọi nguồn sáng cho đồng hồ hoạt động chính xác và ổn định\r\n-Mặt kính khoáng chịu va đập tốt\r\n- Độ chịu nước 10 bar, đủ để chịu nước khi đi bơi nhẹ. \r\n\r\n           ', '0000-00-00'),
(97, 'Omega Seamaster', 11, '   Đồng hồ', 5, '552000000', '268000000', '20211102-1517144iwegmxd04nm4-removebg-preview.png', '                                                    Omega Seamaster AquaTerra Diamond Benzel, 38.5mm\r\nThông số chi tiết:\r\n– Brand new fullbox seal, bảo hành toàn cầu 4 năm chính hãng\r\n– Model: 23125392155001\r\n– Size 38,5mm, độ dày ~ 12.9mm\r\n– Dây Demi: Vàng hồng nguyên khối 18k\r\n– Niềng: Đính full k', '0000-00-00'),
(98, 'Citizen AT4126-55E', 4, '   Đồng hồ', 12, '14000000', '9900000', '20211102-152011CITIZEN-AT4126-55E.png', '                          -Sử dụng bộ máy Eco-Drive độc quyền của hãng Citizen, chuyển hóa mọi nguồn sáng thành năng lượng, không cần thay pin thường xuyên (tuổi thọ pin lên tới 10 năm).\r\n-Chất liệu dây và vỏ làm bằng thép không gỉ\r\n-Tính năng Radio – Controlled tự động điều chỉnh giờ theo trạm phát', '0000-00-00'),
(99, 'Tissot Lelocle', 3, '   Đồng hồ', 33, '17800000', '11200000', '20211102-152234tissot_le_locle_powermatic_80_t0064071105300-removebg-preview.png', '                          Le.locle - Mẫu đhồ bán chạy nhất và cũng là dấu ấn đặc trưng của thương hiệu Tis.sot\r\nCọc số la mã kết hợp với bộ kim lá liễu thanh mảnh tạo nên nét cổ điển, nổi bật trên nền Dial mặt vân Guilloche trứ danh. Thiết ', '0000-00-00'),
(100, 'FC-200MC12B', 8, '   Đồng hồ', 20, '16800000', '9800000', '20211102-152513dong-ho-frederique-constant-fc-200mc12b-removebg-preview.png', '                           -Tình trạng: Mới 100% \r\n-Giới tính: Đồng hồ nữ\r\n-Máy: Máy Pin... vỏ thép ko gỉ mạ demi rose thời thượng...\r\n-Size: 23 mm\r\n-Mặt kính: Kính Sapphire                                                  ', '0000-00-00'),
(101, 'Tissot Mother of Pea', 3, '   Đồng hồ', 18, '18000000', '7900000', '20211102-152654tissot-le-locle-t41-5-423-93-auto-39-3mm.png', '                           Bộ kim, cọc số và vỏ đc mạ PVD Gold sang trọng\r\nThông số:\r\n- Size 39.3mm rất dễ lên tay\r\n- Máy Automatic trữ cót 38h\r\n- Kính Sapphire chống xước\r\n- Đáy lộ cơ và khắc hoa văn độc đáo rất đẹp mắt\r\n- Dây da kết hợp với khóa bướm tiện dụng\r\n- Chống nước 30m                    ', '0000-00-00'),
(102, 'Tissot  Lady Black', 3, '   Đồng hồ', 32, '13500000', '5400000', '20211102-152907tissot-pr-100-t101-251-16-051-00-black-watch-33mm-removebg-preview.png', '                             Một mẫu TS nữ rất xinh đẹp cho các chị em\r\nTone đen huyền bí, sang trọng và cổ điển, rất dễ lên tay cũng như phối đồ cùng các kiểu trang phục khác nhau\r\n- Size 33mm dễ lên tay\r\n- Máy Swiss Quartz bền bỉ chính xác, bộ máy này đạt tiêu chuẩn Chronometer về độ chính xác cao', '0000-00-00'),
(103, 'Omega  Aqua Terra', 11, '   Đồng hồ', 8, '558000000', '285000000', '20211102-153121omega-seamaster-aqua-terra-150m-23123392102001-l_e1ccf7381bb7411aa1bbb9709739cc02_master.png', '                                                Thông tin chi tiết:\r\n– Brand new fullbox seal, bảo hành toàn cầu 5 năm\r\n– Size: 38.5mm, độ dầy ~ 12.9mm\r\n– Bộ máy: Omega Co-Axial Self-Winding Calibre 8611, trữ năng lượng 55h\r\n– Thân vỏ: Vàng hồng nguyên khối 18k\r\n– Kính: Sapphire nguyên khối 18k 2 mặ', '0000-00-00'),
(104, 'ORIENT SAK00002S0', 4, '   Đồng hồ', 36, '10600000', '6200000', '20211102-153352dong-ho-orient-sak00002s0-1_1588129482-removebg-preview.png', '                          Siêu phẩm trong top tam bảo của Orient luôn được săn đón từ khi ra mắt với tính năng Sun and Moon độc đáo.\r\n- Xuất xứ: Orient - Nhật Bản\r\n- Size 42.5mm.\r\n- Máy Automatic Caliber F6B24 (có chức năng lên cót tay và Hacking stop dừng kim ', '0000-00-00'),
(106, 'Hublot Bigbang Blue', 1, '   Đồng hồ', 5, '450000000', '368000000', '20211102-154025hublot-big-bang-steel-blue-diamonds-41mm-341-sx-7170-lr-1204.png', '                          Đem lại dáng vẻ thể thao mà mọi quý ông cần đến, Hublot Big Bang Chronograph 41mm ref 341.SX.7170.LR.1204 cuốn hút phái mạnh với chất liệu thép khỏe khoắn cùng dây đeo cao su đặc trưng.                          ', '0000-00-00'),
(108, 'Hublot Spirit Black', 1, '  Đồng hồ', 3, '489000000', '379000000', '20211102-154724spirit-of-big-bang-titanium-diamonds-39-mm-665-nx-1170-rx-1204-soldier-shot.png', '                                                    Mã sản phẩm: 665.NX.1170.RX.1204\r\nĐường kính: 39 mm\r\nVỏ đồng hồ: Titanium hoàn thiện và đánh bóng bằng satin\r\nMức độ kháng nước: 100m or 10 ATM\r\nMặt kính đồng hồ: Bộ Titan đánh bóng với 50 viên kim cương có tổng trị giá ~ 1,0ct 6 vít Titan hình chữ', '0000-00-00'),
(109, 'Rolex 279171', 2, '   Đồng hồ', 6, '412000000', '349000000', '20211102-154630rolex-lady-datejust-279171-0003-watch-28mm3.png', '                           Rolex Lady-Datejust 279171 sẽ không đẹp trong trường hợp quý cô đặc biệt thích những món phụ kiện có khả năng tỏa sáng rực rỡ với những viên kim cương lấp lánh bên trên. Nhưng Rolex Lady-Datejust 279171 cũng có thể là lựa chọn hàng đầu cho những quý cô luôn tôn thờ vẻ đẹp ', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`madh`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`idmanage`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `cateid` (`cateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dathang`
--
ALTER TABLE `dathang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `idmanage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
