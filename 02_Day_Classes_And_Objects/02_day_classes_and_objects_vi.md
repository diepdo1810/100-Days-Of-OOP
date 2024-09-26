#### 📔 Ngày 2: Lớp và Đối tượng

##### **Giới thiệu**

- **Lớp (Class)** và **Đối tượng (Object)** là hai khái niệm cơ bản trong lập trình hướng đối tượng (OOP).
- Lớp có thể hiểu là một "khuôn mẫu" (template) để tạo ra các đối tượng. Nó xác định những thuộc tính và hành vi mà các đối tượng của lớp đó sẽ có.
- Đối tượng là một phiên bản cụ thể của lớp, chứa dữ liệu riêng và có thể thực hiện các hành động.

##### **Nội dung chính**

1. **Khái niệm Lớp (Class)**
   - **Định nghĩa**: Lớp là một bản thiết kế mô tả cách tạo ra một đối tượng. Nó bao gồm:
     - **Thuộc tính (Properties)**: Các đặc điểm của lớp. Ví dụ, lớp `Car` có thể có thuộc tính `color` (màu sắc) và `model` (mẫu).
     - **Phương thức (Methods)**: Các hành động mà đối tượng có thể thực hiện. Ví dụ, phương thức `drive()` có thể mô tả hành động lái xe.

   - **Ví dụ**:
     ```php
     class Car {
         public $color;  // Thuộc tính màu sắc
         public $model;  // Thuộc tính mẫu

         // Phương thức để lái xe
         public function drive() {
             return "Đang lái một chiếc xe {$this->color} {$this->model}.";
         }
     }
     ```

2. **Khái niệm Đối tượng (Object)**
   - **Định nghĩa**: Đối tượng là một thực thể cụ thể được tạo ra từ lớp. Mỗi đối tượng có thể có giá trị khác nhau cho các thuộc tính.
   - **Ví dụ**: Nếu `Car` là một lớp, thì `myCar` (chiếc xe của tôi) có thể là một đối tượng cụ thể với thuộc tính `color` là "đỏ" và `model` là "Toyota".

3. **Cách định nghĩa một Lớp**
   - **Trong PHP**: Để định nghĩa một lớp, bạn sử dụng từ khóa `class`, sau đó khai báo các thuộc tính và phương thức bên trong.
   - **Ví dụ**:
     ```php
     class Car {
         public $color;  // Thuộc tính
         public $model;  // Thuộc tính

         // Phương thức
         public function drive() {
             return "Đang lái một chiếc xe {$this->color} {$this->model}.";
         }
     }
     ```

   - **Trong JavaScript**: Tương tự như PHP, bạn sử dụng từ khóa `class`.
   - **Ví dụ**:
     ```javascript
     class Car {
         constructor(color, model) {
             this.color = color;  // Thuộc tính
             this.model = model;  // Thuộc tính
         }

         // Phương thức
         drive() {
             return `Đang lái một chiếc xe ${this.color} ${this.model}.`;
         }
     }
     ```

4. **Tạo đối tượng từ Lớp**
   - **Trong PHP**: Để tạo một đối tượng từ lớp, bạn sử dụng từ khóa `new` và gọi tên lớp.
   - **Ví dụ**:
     ```php
     $myCar = new Car();  // Tạo đối tượng từ lớp Car
     $myCar->color = "đỏ";  // Gán giá trị cho thuộc tính
     $myCar->model = "Toyota";  // Gán giá trị cho thuộc tính
     echo $myCar->drive();  // Gọi phương thức
     ```

   - **Trong JavaScript**:
   - **Ví dụ**:
     ```javascript
     const myCar = new Car("đỏ", "Toyota");  // Tạo đối tượng và truyền tham số
     console.log(myCar.drive());  // Gọi phương thức
     ```

5. **Sử dụng Các Thuộc tính và Phương thức**
   - Bạn có thể truy cập và thay đổi thuộc tính của đối tượng bằng cú pháp `$object->property` trong PHP hoặc `object.property` trong JavaScript.
   - Gọi phương thức bằng cách sử dụng cú pháp `$object->method()` trong PHP hoặc `object.method()` trong JavaScript.

##### **Thực hành**

- **Bài tập 1**: Định nghĩa một lớp `Person` với các thuộc tính `name` và `age`, và một phương thức `introduce()` để giới thiệu bản thân.
  - **Ví dụ**:
    ```php
    class Person {
        public $name;
        public $age;

        public function introduce() {
            return "Xin chào, tôi là {$this->name}, tôi {$this->age} tuổi.";
        }
    }

    $person = new Person();
    $person->name = "Nam";
    $person->age = 25;
    echo $person->introduce();
    ```

- **Bài tập 2**: Tạo một đối tượng từ lớp `Person` và gọi phương thức `introduce()`.
  - **Ví dụ**:
    ```javascript
    class Person {
        constructor(name, age) {
            this.name = name;
            this.age = age;
        }

        introduce() {
            return `Xin chào, tôi là ${this.name}, tôi ${this.age} tuổi.`;
        }
    }

    const person = new Person("Nam", 25);
    console.log(person.introduce());
    ```

##### **Kết luận**

- **Tóm tắt**: Hôm nay, chúng ta đã tìm hiểu về lớp và đối tượng, cách định nghĩa lớp, tạo đối tượng từ lớp, và cách sử dụng các thuộc tính và phương thức.
- **Nhấn mạnh**: Lớp và đối tượng là nền tảng của lập trình hướng đối tượng và sẽ giúp bạn tổ chức mã nguồn một cách tốt hơn.

##### **Tài liệu tham khảo**

- [Tài liệu OOP trong PHP](https://www.php.net/manual/en/language.oop5.php)
- [Tài liệu OOP trong JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Objects)

---
