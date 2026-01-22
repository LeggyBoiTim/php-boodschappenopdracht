const table = document.getElementById('table');
const productPrice = document.getElementsByClassName('productPrice');
const productQuantity = document.getElementsByClassName('productQuantity');
const productTotalCost = document.getElementsByClassName('productTotalCost');
const totalCost = document.getElementById('totalCost');

const message = () => console.log('Aantal producten is gewijzigd');

table.addEventListener('change', message);
console.log(productPrice, productQuantity, productTotalCost, totalCost);

const roundToTwoDecimals = number => (Math.round(number * 100) / 100).toFixed(2);

const calculate = () => {
    let totalPrice = 0;
    for (let i = 0; i < productTotalCost.length; i++) {
        productTotalCost[i].innerHTML = roundToTwoDecimals(productPrice[i].innerHTML * productQuantity[i].value);
        totalPrice += parseFloat(productTotalCost[i].innerHTML);
    }
    totalCost.innerHTML = roundToTwoDecimals(totalPrice);
}

table.addEventListener('change', calculate);