let myContent = document.getElementById('app');

let message = 70;
message = 100;

let myCar = {
    brand: "ford",
    miles: "12000",
    fuelType: "diesel"
}

console.log('this is the console', myCar);

myContent.innerHTML = message;


let myArray = ["apple", "orange", "pear", "banana"];
console.warn(myArray)
myContent.innerHTML = myArray[1];