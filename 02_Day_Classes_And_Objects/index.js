'use strict'

class Car {
    constructor(model, color) {
        this.model = model;
        this.color = color;
    }

    printDetails() {
        console.log(`Model: ${this.model}, Color: ${this.color}`);
    }
}

const car = new Car('BMW', 'Black');
car.printDetails(); // Model: BMW, Color: Black
