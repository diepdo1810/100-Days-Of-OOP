# Khái niệm tự hiểu oop
Lập trình hương đội tượng là lập trình xoay quanh các đối tượng trong đời sống:
+ gồm có các đặc điểm
+ hành động của đối tượng đó
# 4 đặc điểm:
### đặc điểm 1
+ Kế thừa : lớp con dùng lại các thuộc tính chung của lớp cha
+  Kế thừa luôn đi cùng từ khóa (extends)

```php
class Cha {
public $name;
public function __construct($name) { //khởi tạo construction cho lớp cha chạy trước
        $this->variable = $name;
 // function hanhDong của cha
public function hanhDong(){
return  $this ->variable = 'đây là hành động của cha'
    }
  }
}

class Con extends Cha {
public funcion hanhDong(){ // gọi lại hanhDong của cha và return cái khác
$this->variable = 'đây là hành động của con'
 }
}
$newCon = new Con('đây là name truyền vào construct'); // tạo mới đi cùng new
echo $newCon->hanhDong();
  ```
### đặc điểm 2
+ Đóng gói: Đảm bảo an toàn và kiểm soát thông tin bên trong hàm
+ Đóng gói đi cùng 3 từ khóa:
+ ## public:
+ ### khai báo 1 biến thì đi đâu trong dự án cũng dùng được chỉ cần $newClass chưa biến đó là được
+ ## private:
+ ### khai báo 1 biến thì chỉ dùng được trong class đấy và đúng chỗ khai báo. chứ đi chỗ khác dùng new class chứa nó cũng ko dùng được
+ ## protected
+ ### khai báo rồi chỉ có thể dùng được ở những class mà nó kế thừa class biến mình khai báo protected thôi chứ ko kế thừa thì có newClass cũng ko dùng lại được biến đó

# Tính trừu tượng 
