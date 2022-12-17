function startHw3_1(){
    tempByCel = Number.parseInt(prompt('Введите температуру градусах Цельсия:')); // Pavel, tempByCel is local var (so not const ... or let ...)
    alert(`Цельсий: ${tempByCel}, Фаренгейт: ${(9/5*tempByCel+32).toFixed(1)}`);
}

