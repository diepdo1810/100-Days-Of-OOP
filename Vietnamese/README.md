# 100 Ngày Lập Trình Hướng Đối Tượng

## Phần Cơ Bản (Ngày 1-20)

| # Ngày |                                                                       Các Chủ Đề                                                                        |
| ------- | :-------------------------------------------------------------------------------------------------------------------------------------------------: |
| 01    |                                                             [Giới Thiệu](01_Day_Introduction/01_day_introduction.md)                                                             |
| 02    |                                                             [Lớp và Đối Tượng](02_Day_Classes_And_Objects/02_day_classes_and_objects.md)                                                             |
| 03    |                                                             [Thuộc Tính và Phương Thức](03_Day_Properties_And_Methods/03_day_properties_and_methods.md)                                                             |
| 04    |                                                             [Hàm Khởi Tạo và Hủy](04_Day_Constructor_And_Destructor/04_day_constructor_and_destructor.md)                                                             |
| 05    |                                                             [Kế Thừa](05_Day_Inheritance/05_day_inheritance.md)                                                             |
| 06    |                                                             [Đóng Gói](06_Day_Encapsulation/06_day_encapsulation.md)                                                             |
| 07    |                                                             [Lớp Trừu Tượng](07_Day_Abstract_Classes/07_day_abstract_classes.md)                                                             |
| 08    |                                                             [Giao Diện](08_Day_Interfaces/08_day_interfaces.md)                                                             |
| 09    |                                                             [Thuộc Tính và Phương Thức Tĩnh](09_Day_Static_Properties_And_Methods/09_day_static_properties_and_methods.md)                                                             |
| 10    |                                                             [Giới Hạn Truy Cập](10_Day_Visibility/10_day_visibility.md)                                                             |
| 11    |                                                             [Đa Hình](11_Day_Polymorphism/11_day_polymorphism.md)                                                             |
| 12    |                                                             [Gợi Ý Kiểu](12_Day_Type_Hinting/12_day_type_hinting.md)                                                             |
| 13    |                                                             [Ghi Đè Phương Thức](13_Day_Overriding_Methods/13_day_overriding_methods.md)                                                             |
| 14    |                                                             [Nạp Chồng](14_Day_Overloading/14_day_overloading.md)                                                             |
| 15    |                                                             [Thành Phần](15_Day_Composition/15_day_composition.md)                                                             |
| 16    |                                                             [Trait trong PHP](16_Day_Traits_PHP/16_day_traits_php.md)                                                             |
| 17    |                                                             [Hằng Số](17_Day_Constants/17_day_constants.md)                                                             |
| 18    |                                                             [Phân Rã Cấu Trúc trong JS](18_Day_Destructuring_JS/18_day_destructuring_js.md)                                                             |
| 19    |                                                             [Sao Chép Đối Tượng](19_Day_Clone_Objects/19_day_clone_objects.md)                                                             |
| 20    |                                                             [Phương Thức Ảo trong PHP](20_Day_Magic_Methods_PHP/20_day_magic_methods_php.md)                                                             |

🧡🧡🧡 CHÚC BẠN CODE VUI VẺ! 🧡🧡🧡

🇻🇳 [Tiếng Việt](Vietnamese/README.md)
🇬🇧 [Tiếng Anh](README.md)

[Ngày 2 >>>](./02_Day_Data_types/02_day_data_types.md)

- [100 Ngày Lập Trình Hướng Đối Tượng](#100-ngày-lập-trình-hướng-đối-tượng)
- [📔 Ngày 1](#-ngày-1)
	- [Giới thiệu](#giới-thiệu)
	- [Khái niệm về OOP](#khái-niệm-về-oop)
	- [Lợi ích của OOP](#lợi-ích-của-oop)
- [📔 Ngày 2](#-ngày-2)
	- [Lớp và Đối tượng](#lớp-và-đối-tượng)
	- [Định nghĩa một lớp](#định-nghĩa-một-lớp)
	- [Tạo Đối tượng](#tạo-đối-tượng)
- [📔 Ngày 3](#-ngày-3)
	- [Thuộc tính và Phương thức](#thuộc-tính-và-phương-thức)
	- [Thuộc tính và Phương thức tĩnh](#thuộc-tính-và-phương-thức-tĩnh)
	- [Truy cập Phương thức](#truy-cập-phương-thức)
- [📔 Ngày 4](#-ngày-4)
	- [Constructor và Destructor](#constructor-và-destructor)
	- [Sử dụng Constructor](#sử-dụng-constructor)
	- [Hành vi của Destructor](#hành-vi-của-destructor)
- [📔 Ngày 5](#-ngày-5)
	- [Kế thừa](#kế-thừa)
	- [Các loại Kế thừa](#các-loại-kế-thừa)
	- [Sử dụng Kế thừa](#sử-dụng-kế-thừa)
- [📔 Ngày 6](#-ngày-6)
	- [Đóng gói](#đóng-gói)
	- [Phương thức Getter và Setter](#phương-thức-getter-và-setter)
- [📔 Ngày 7](#-ngày-7)
	- [Lớp trừu tượng](#lớp-trừu-tượng)
	- [Định nghĩa một lớp trừu tượng](#định-nghĩa-một-lớp-trừu-tượng)
	- [Sử dụng Phương thức trừu tượng](#sử-dụng-phương-thức-trừu-tượng)
- [📔 Ngày 8](#-ngày-8)
	- [Giao diện](#giao-diện)
	- [Triển khai Giao diện](#triển-khai-giao-diện)
- [📔 Ngày 9](#-ngày-9)
	- [Thuộc tính và Phương thức tĩnh](#thuộc-tính-và-phương-thức-tĩnh)
	- [Truy cập Phương thức tĩnh](#truy-cập-phương-thức-tĩnh)
- [📔 Ngày 10](#-ngày-10)
	- [Tính khả dụng](#tính-khả-dụng)
	- [Công khai, Riêng tư, Bảo vệ](#công-khai-riêng-tư-bảo-vệ)
- [📔 Ngày 11](#-ngày-11)
	- [Đa hình](#đa-hình)
	- [Ghi đè Phương thức](#ghi-đè-phương-thức)
- [📔 Ngày 12](#-ngày-12)
	- [Gợi ý kiểu](#gợi-ý-kiểu)
	- [Sử dụng Gợi ý kiểu](#sử-dụng-gợi-ý-kiểu)
- [📔 Ngày 13](#-ngày-13)
	- [Ghi đè Phương thức](#ghi-đè-phương-thức)
	- [Ví dụ thực tế](#ví-dụ-thực-tế)
- [📔 Ngày 14](#-ngày-14)
	- [Nạp chồng](#nạp-chồng)
	- [Định nghĩa Phương thức nạp chồng](#định-nghĩa-phương-thức-nạp-chồng)
- [📔 Ngày 15](#-ngày-15)
	- [Tổ hợp](#tổ-hợp)
	- [Sử dụng Tổ hợp](#sử-dụng-tổ-hợp)
- [📔 Ngày 16](#-ngày-16)
	- [Traits trong PHP](#traits-trong-php)
	- [Sử dụng Traits](#sử-dụng-traits)
- [📔 Ngày 17](#-ngày-17)
	- [Hằng số](#hằng-số)
	- [Định nghĩa Hằng số](#định-nghĩa-hằng-số)
- [📔 Ngày 18](#-ngày-18)
	- [Destructuring trong JS](#destructuring-trong-js)
	- [Lợi ích của Destructuring](#lợi-ích-của-destructuring)
- [📔 Ngày 19](#-ngày-19)
	- [Sao chép Đối tượng](#sao-chép-đối-tượng)
	- [Sao chép nông và sâu](#sao-chép-nông-và-sâu)
- [📔 Ngày 20](#-ngày-20)
	- [Phương thức ma trong PHP](#phương-thức-ma-trong-php)
	- [Tổng quan về Phương thức ma](#tổng-quan-về-phương-thức-ma)

# 📔 Ngày 1

## Giới thiệu

[Dễ đọc và hiểu](01_Day_Introduction/01_day_introduction_vi.md)
