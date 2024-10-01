'use strict';

class Car {
    color;
    model;
    year;

    constructor(color, model, year) {
        this.color = color;
        this.model = model;
        this.year = year;
    }

    drive() {
        console.log(`Driving a ${this.color} ${this.model} from the year ${this.year}.`);
    }

    #honk() {
        console.log(`Beep Beep!`);
    }

    makeSound() {
        this.#honk();
    }
}

const myCar = new Car('red', 'Toyota', 2021);
myCar.drive(); // output: Driving a red Toyota from the year 2021.
myCar.makeSound(); // output: Beep Beep!
