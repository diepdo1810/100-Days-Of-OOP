#### 📔 Day 2: Classes and Objects

##### **Introduction**

- **Classes** and **Objects** are two fundamental concepts in Object-Oriented Programming (OOP).
- A class can be understood as a "blueprint" for creating objects. It defines the properties and behaviors that the objects of that class will have.
- An object is a specific instance of a class, containing its own data and capable of performing actions.

##### **Main Content**

1. **Concept of Class**
   - **Definition**: A class is a design template describing how to create an object. It includes:
     - **Properties**: The characteristics of the class. For example, a class `Car` might have properties like `color` and `model`.
     - **Methods**: The actions that the object can perform. For example, a method `drive()` might describe the action of driving.

   - **Example**:
     ```php
     class Car {
         public $color;  // Property for color
         public $model;  // Property for model

         // Method to drive the car
         public function drive() {
             return "Driving a {$this->color} {$this->model}.";
         }
     }
     ```

2. **Concept of Object**
   - **Definition**: An object is a specific entity created from a class. Each object can have different values for its properties.
   - **Example**: If `Car` is a class, then `myCar` (my car) could be a specific object with the property `color` set to "red" and `model` set to "Toyota".

3. **How to Define a Class**
   - **In PHP**: To define a class, use the keyword `class`, and then declare the properties and methods inside it.
   - **Example**:
     ```php
     class Car {
         public $color;  // Property
         public $model;  // Property

         // Method
         public function drive() {
             return "Driving a {$this->color} {$this->model}.";
         }
     }
     ```

   - **In JavaScript**: Similar to PHP, you use the keyword `class`.
   - **Example**:
     ```javascript
     class Car {
         constructor(color, model) {
             this.color = color;  // Property
             this.model = model;  // Property
         }

         // Method
         drive() {
             return `Driving a ${this.color} ${this.model}.`;
         }
     }
     ```

4. **Creating an Object from a Class**
   - **In PHP**: To create an object from a class, use the keyword `new` followed by the class name.
   - **Example**:
     ```php
     $myCar = new Car();  // Create an object from the Car class
     $myCar->color = "red";  // Assign a value to the property
     $myCar->model = "Toyota";  // Assign a value to the property
     echo $myCar->drive();  // Call the method
     ```

   - **In JavaScript**:
   - **Example**:
     ```javascript
     const myCar = new Car("red", "Toyota");  // Create an object and pass parameters
     console.log(myCar.drive());  // Call the method
     ```

5. **Using Properties and Methods**
   - You can access and modify the properties of an object using the syntax `$object->property` in PHP or `object.property` in JavaScript.
   - Call a method using the syntax `$object->method()` in PHP or `object.method()` in JavaScript.

##### **Practice**

- **Exercise 1**: Define a class `Person` with properties `name` and `age`, and a method `introduce()` to introduce oneself.
  - **Example**:
    ```php
    class Person {
        public $name;
        public $age;

        public function introduce() {
            return "Hello, I am {$this->name}, I am {$this->age} years old.";
        }
    }

    $person = new Person();
    $person->name = "Nam";
    $person->age = 25;
    echo $person->introduce();
    ```

- **Exercise 2**: Create an object from the `Person` class and call the `introduce()` method.
  - **Example**:
    ```javascript
    class Person {
        constructor(name, age) {
            this.name = name;
            this.age = age;
        }

        introduce() {
            return `Hello, I am ${this.name}, I am ${this.age} years old.`;
        }
    }

    const person = new Person("Nam", 25);
    console.log(person.introduce());
    ```

##### **Conclusion**

- **Summary**: Today, we learned about classes and objects, how to define a class, create objects from a class, and how to use properties and methods.
- **Emphasis**: Classes and objects are the foundation of object-oriented programming and will help you organize your code better.

##### **References**

- [PHP OOP Documentation](https://www.php.net/manual/en/language.oop5.php)
- [JavaScript OOP Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Objects)

---
