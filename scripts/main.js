buttontask1.addEventListener('click', () => 
{
    const temperaturebycelsius = +prompt('Введите температуру градусах Цельсия:'); // Pavel, tempByCel is local var (so not const ... or let ...)
    const temperaturebyfahrenheit = (9/5 * temperaturebycelsius + 32).toFixed(1)
    alert(`Цельсий: ${temperaturebycelsius}, Фаренгейт: ${temperaturebyfahrenheit}`);
})

// function greeting(){
//     // alert(event.type + " на " + event.currentTarget);
//     const username = prompt("Введите Ваше имя: "); 
//     console.log(`Здравствуйте, ${username}`);
// }

document.getElementById('buttontask2').addEventListener('click', () =>
    {
        const username = prompt("Введите Ваше имя: "); 
    console.log(`Здравствуйте, ${username}`);
    }
    );

 document.getElementById('buttontask2').addEventListener('mouseover', ()=>
    {
        let target = event.target;
        target.style.background = 'gray';
        //alert("нажми меня");
    }
    );  
document.getElementById('buttontask2').addEventListener('mouseout', ()=>
    {
    let target = event.target;
    target.style.background = '';
    }
    );

    document.getElementById('buttontask1').addEventListener('mouseover', ()=>
    {
        let target = event.target;
        target.style.background = 'gray';
        //alert("нажми меня");
    }
    );  
document.getElementById('buttontask1').addEventListener('mouseout', ()=>
    {
    let target = event.target;
    target.style.background = '';
    }
    );