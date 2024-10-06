04_Day_Constructor_And_Destructor: Hiểu về Hàm Khởi Tạo và Huỷ Đối Tượng

📔 Ngày 4: Constructor và Destructor

Giới thiệu

Constructor (Hàm Khởi Tạo) và Destructor (Hàm Huỷ) là hai phương thức đặc biệt trong lập trình hướng đối tượng (OOP).

Constructor được sử dụng để khởi tạo trạng thái ban đầu của đối tượng khi nó được tạo ra.

Destructor được sử dụng để thực hiện các công việc dọn dẹp trước khi đối tượng bị hủy.


Nội dung chính

1. Constructor (Hàm Khởi Tạo)

Định nghĩa:

Constructor là một phương thức đặc biệt được gọi tự động khi một đối tượng được tạo ra từ lớp.

Nó thường được sử dụng để khởi tạo các thuộc tính của đối tượng với các giá trị ban đầu.


Cú pháp trong PHP:

class Car {
    public $color;
    public $model;

    // Constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function drive() {
        return "Driving a {$this->color} {$this->model}.";
    }
}

// Tạo đối tượng với constructor
$myCar = new Car("red", "Toyota");
echo $myCar->drive(); // Output: Driving a red Toyota.

Cú pháp trong JavaScript:

class Car {
    constructor(color, model) {
        this.color = color;
        this.model = model;
    }

    drive() {
        return `Driving a ${this.color} ${this.model}.`;
    }
}

// Tạo đối tượng với constructor
const myCar = new Car("red", "Toyota");
console.log(myCar.drive()); // Output: Driving a red Toyota.

Lợi ích:

Đảm bảo rằng đối tượng luôn được khởi tạo với trạng thái hợp lệ.

Giảm thiểu lỗi bằng cách yêu cầu cung cấp các thông tin cần thiết khi tạo đối tượng.




2. Destructor (Hàm Huỷ)

Định nghĩa:

Destructor là một phương thức đặc biệt được gọi tự động khi đối tượng bị hủy hoặc khi chương trình kết thúc.

Nó thường được sử dụng để giải phóng tài nguyên hoặc thực hiện các công việc dọn dẹp cần thiết.


Cú pháp trong PHP:

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
        echo "A new car has been created.\n";
    }

    // Destructor
    public function __destruct() {
        echo "The car {$this->model} is being destroyed.\n";
    }

    public function drive() {
        return "Driving a {$this->color} {$this->model}.";
    }
}

// Tạo đối tượng
$myCar = new Car("red", "Toyota");
echo $myCar->drive(); // Output: Driving a red Toyota.
// Khi script kết thúc hoặc đối tượng bị hủy, destructor sẽ được gọi tự động

Lưu ý trong JavaScript:

JavaScript không hỗ trợ destructor theo cách tương tự như PHP. Thay vào đó, nó sử dụng Garbage Collection để tự động quản lý bộ nhớ. Tuy nhiên, bạn có thể sử dụng các phương thức như finalize trong WeakRef để thực hiện một số công việc dọn dẹp, nhưng tính năng này vẫn đang trong giai đoạn phát triển và không phổ biến.


Ví dụ sử dụng Destructor trong PHP:

class DatabaseConnection {
    private $connection;

    public function __construct($dsn, $username, $password) {
        $this->connection = new PDO($dsn, $username, $password);
        echo "Database connection established.\n";
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function __destruct() {
        $this->connection = null; // Đóng kết nối
        echo "Database connection closed.\n";
    }
}

// Sử dụng lớp
$db = new DatabaseConnection("mysql:host=localhost;dbname=testdb", "root", "");
$result = $db->query("SELECT * FROM users");
// Khi script kết thúc hoặc đối tượng bị hủy, destructor sẽ được gọi



3. So sánh Constructor và Destructor



Thực hành

1. Bài tập 1: Định nghĩa một lớp Book với các thuộc tính title, author, và year. Sử dụng constructor để khởi tạo các thuộc tính này và một phương thức getInfo() để trả về thông tin sách.

PHP:

class Book {
    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        echo "A new book has been created.\n";
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}, published in {$this->year}.";
    }

    public function __destruct() {
        echo "The book '{$this->title}' is being destroyed.\n";
    }
}

// Tạo đối tượng
$book = new Book("1984", "George Orwell", 1949);
echo $book->getInfo(); // Output: 1984 by George Orwell, published in 1949.

JavaScript:

class Book {
    constructor(title, author, year) {
        this.title = title;
        this.author = author;
        this.year = year;
        console.log("A new book has been created.");
    }

    getInfo() {
        return `${this.title} by ${this.author}, published in ${this.year}.`;
    }

    // JavaScript không hỗ trợ destructor tương tự PHP
}

// Tạo đối tượng
const book = new Book("1984", "George Orwell", 1949);
console.log(book.getInfo()); // Output: 1984 by George Orwell, published in 1949.



2. Bài tập 2: Tạo một lớp User với các thuộc tính username và email. Sử dụng constructor để khởi tạo và một phương thức displayUser() để hiển thị thông tin người dùng. Thêm destructor để thông báo khi đối tượng người dùng bị hủy.

PHP:

class User {
    public $username;
    public $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
        echo "User '{$this->username}' has been created.\n";
    }

    public function displayUser() {
        return "Username: {$this->username}, Email: {$this->email}";
    }

    public function __destruct() {
        echo "User '{$this->username}' is being destroyed.\n";
    }
}

// Tạo đối tượng
$user = new User("john_doe", "john@example.com");
echo $user->displayUser(); // Output: Username: john_doe, Email: john@example.com

JavaScript:

class User {
    constructor(username, email) {
        this.username = username;
        this.email = email;
        console.log(`User '${this.username}' has been created.`);
    }

    displayUser() {
        return `Username: ${this.username}, Email: ${this.email}`;
    }

    // JavaScript không hỗ trợ destructor tương tự PHP
}

// Tạo đối tượng
const user = new User("john_doe", "john@example.com");
console.log(user.displayUser()); // Output: Username: john_doe, Email: john@example.com




Kết luận

Constructor và Destructor là những phương thức đặc biệt giúp quản lý vòng đời của đối tượng trong lập trình hướng đối tượng.

Constructor đảm bảo rằng đối tượng được khởi tạo với trạng thái hợp lệ ngay từ đầu.

Destructor giúp giải phóng tài nguyên và thực hiện các công việc dọn dẹp khi đối tượng không còn cần thiết.

Việc hiểu và sử dụng đúng cách constructor và destructor giúp mã nguồn của bạn trở nên hiệu quả, an toàn và dễ bảo trì hơn.


Tài liệu tham khảo

PHP Constructors and Destructors

JavaScript Classes



---


