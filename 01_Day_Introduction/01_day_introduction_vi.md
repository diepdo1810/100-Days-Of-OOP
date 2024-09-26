
### Giới thiệu về OOP

**Lập trình hướng đối tượng (Object-Oriented Programming - OOP)** là một cách tiếp cận để xây dựng các phần mềm phức tạp bằng cách phân chia chương trình thành các đối tượng có trách nhiệm riêng biệt, với mục đích tăng tính modular, khả năng mở rộng, và tái sử dụng code.

#### 1. **Khái niệm cơ bản về OOP**

OOP tập trung vào việc tạo ra các đối tượng (objects), là những thực thể đại diện cho các khái niệm trong thế giới thực hoặc logic của chương trình. Những đối tượng này bao gồm hai yếu tố chính:
- **Thuộc tính (Properties)**: Là những đặc điểm hoặc trạng thái của đối tượng. Ví dụ: Một đối tượng "Xe" có thể có thuộc tính như màu sắc, loại động cơ, và tốc độ tối đa.
- **Phương thức (Methods)**: Là những hành động mà đối tượng có thể thực hiện. Ví dụ: Xe có thể có phương thức "Chạy" (drive) hay "Dừng" (stop).

#### 2. **Các nguyên lý của OOP**

OOP dựa trên bốn nguyên lý chính:
1. **Tính đóng gói (Encapsulation)**: Đóng gói dữ liệu và các phương thức liên quan vào trong một đối tượng, giúp che giấu các chi tiết nội bộ và chỉ cung cấp một giao diện để tương tác với đối tượng.
   - Ví dụ: Bạn có thể "bật điều hoà" mà không cần biết cơ chế hoạt động bên trong.

2. **Tính kế thừa (Inheritance)**: Cho phép một lớp con (subclass) kế thừa các thuộc tính và phương thức của một lớp cha (superclass). Điều này giúp tái sử dụng code và dễ dàng mở rộng các tính năng mới.
   - Ví dụ: Lớp "Xe" có thể có các lớp con là "Xe hơi", "Xe máy", mỗi lớp con có thể thừa hưởng thuộc tính chung như "tốc độ", nhưng cũng có thể mở rộng thêm những đặc điểm riêng.

3. **Tính đa hình (Polymorphism)**: Các đối tượng khác nhau có thể có cùng phương thức nhưng hoạt động theo cách khác nhau.
   - Ví dụ: Cùng một phương thức "phát âm", nhưng đối tượng "Chó" có thể phát âm là "Gâu gâu", còn đối tượng "Mèo" sẽ phát âm là "Meo meo".

4. **Tính trừu tượng (Abstraction)**: Giúp bạn làm việc với đối tượng thông qua giao diện, ẩn đi các chi tiết phức tạp bên trong.
   - Ví dụ: Khi bạn sử dụng một cái điện thoại, bạn không cần biết chi tiết cách các linh kiện bên trong hoạt động, bạn chỉ cần biết cách gọi điện và nhắn tin.

#### 3. **OOP trong PHP và JavaScript**

- **PHP**: PHP là một ngôn ngữ lập trình server-side hỗ trợ lập trình hướng đối tượng từ phiên bản 5.0. Trong PHP, các lớp và đối tượng được khai báo bằng từ khoá `class` và `new`.
  
  ```php
  class Car 
  {
      public $color;
      public function __construct($color) 
      {
          $this->color = $color;
      }
      public function run() 
      {
          return "Car ${$this->color} is driving.";
      }
  }
  
  $car = new Car('red');
  echo $car->run(); // Output: Car red is driving.
  ```

- **JavaScript**: JavaScript hỗ trợ lập trình hướng đối tượng thông qua việc sử dụng các lớp (class) và đối tượng (object) từ ES6.
  
  ```javascript
  class Car {
      constructor(color) {
        this.color = color;
      }
      run() {
        console.log(`Car ${this.color} is driving.`)
      }
  }
  
    let car = new Car('red')
    car.run() // Output: Car red is driving.
  ```

#### 4. **Sự khác biệt giữa OOP và lập trình thủ tục**

- **Lập trình thủ tục**: Dữ liệu và logic được tổ chức thành các hàm riêng lẻ, với ít sự kết nối giữa chúng. Đây là mô hình lập trình cổ điển, không có tính trừu tượng, đa hình hoặc kế thừa.
  
- **OOP**: Tập trung vào việc mô tả dữ liệu và các thao tác liên quan thông qua các đối tượng. Các đối tượng này giúp bạn dễ dàng quản lý và mở rộng chương trình hơn khi chương trình trở nên phức tạp.

---
