const btn = document.getElementById('pres');
var point = 0;

btn.addEventListener('click', function handleClick() {
    point += 1;
    document.getElementById('cash').innerHTML = point;
});