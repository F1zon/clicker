var cash = 0;

document.querySelector("#sub").onclick = function() {
    cash += 1;
    document.getElementById('text_cash').innerHTML = cash;
}