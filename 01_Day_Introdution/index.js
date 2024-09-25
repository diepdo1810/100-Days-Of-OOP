'use strict'

// basic class
class Animal {
    #name;
 
    constructor(name) {
        this.#name = name
    }

    get name() {
        return this.#name
    }

    set name(name) {
        this.#name = name
    }

    speak() {
        console.log(`${this.#name} makes a noise.`)
    }
}

class Dog extends Animal {
    speak() {
        console.log(`${this.name} barks.`)
    }
}

let dog = new Dog('chiwawa')
dog.speak() // chiwawa barks.

class Cat extends Animal {
    speak() {
        console.log(`${this.name} meows.`)
    }
}

let cat = new Cat('kitty')
cat.speak() // kitty meows.
