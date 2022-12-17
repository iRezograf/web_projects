function startHw3_1(){
    const temperaturebycelsius = +prompt('Введите температуру градусах Цельсия:'); // Pavel, tempByCel is local var (so not const ... or let ...)
    const temperaturebyfahrenheit = (9/5*temperaturebycelsius+32).toFixed(1)
    alert(`Цельсий: ${temperaturebycelsius}, Фаренгейт: ${temperaturebyfahrenheit}`);
}

buttontask1.addEventListener('click', startHw3_1)

