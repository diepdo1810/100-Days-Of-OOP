### **Object-Oriented Programming (OOP) Introduction**

**Object-Oriented Programming (OOP)** is a programming paradigm that organizes software design around data, or objects, rather than functions and logic. It aims to increase modularity and reusability of code.

#### **1. Basic OOP Concepts**

OOP revolves around the creation of **objects**, which are instances of classes. Objects encapsulate both **data** (attributes or properties) and **behavior** (methods).

-   **Attributes:** These represent the characteristics or state of an object. For example, a "Car" object might have attributes like color, engine type, and maximum speed.
-   **Methods:** These define the actions that an object can perform. For example, a "Car" object might have methods like "drive" or "stop".

#### **2. OOP Principles**

OOP is grounded in four core principles:

1.  **Encapsulation:** This involves bundling data (attributes) and the methods that operate on that data within a single unit (an object). This hides the internal implementation details and provides a public interface.
    -   Example: You can "turn on the air conditioning" without knowing the exact mechanisms involved.
2.  **Inheritance:** This mechanism allows new classes (subclasses) to be created that inherit attributes and methods from existing classes (superclasses). This promotes code reuse.
    -   Example: A "Car" class can have subclasses like "Sedan" and "SUV", inheriting common properties like "speed" but also having specific attributes.
3.  **Polymorphism:** This refers to the ability of different objects to respond to the same method call in different ways.
    -   Example: The "makeSound" method might produce "bark" for a "Dog" object and "meow" for a "Cat" object.
4.  **Abstraction:** This principle involves focusing on the essential features of an object while hiding the unnecessary details.
    -   Example: When using a smartphone, you interact with the user interface without needing to know the intricate workings of the underlying hardware.

#### **3. OOP in PHP and JavaScript**

-   **PHP:** PHP, a server-side scripting language, supports OOP from version 5.0. Classes and objects are defined using the `class` and `new` keywords.

    ```php
    class Car {
        public $color;
        public function __construct($color) {
            $this->color = $color;
        }
        public function run() {
            return "Car ${$this->color} is driving.";
        }
    }
    
    ```
    
-   **JavaScript:** JavaScript supports OOP through classes and objects introduced in ES6.

    ```javascript
    class Car {
        constructor(color) {
          this.color = color;
        }
        run() {
          console.log(`Car ${this.color} is driving.`)
        }
    }
    
    ```
    

#### **4. OOP vs. Procedural Programming**

-   **Procedural Programming:** Focuses on a sequence of steps (procedures) to achieve a task. Data and functions are separate entities.
-   **OOP:** Organizes code around objects, which encapsulate both data and behavior. This leads to more modular and maintainable code.