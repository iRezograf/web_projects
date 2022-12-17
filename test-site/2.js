function greeting(){
    // alert(event.type + " на " + event.currentTarget);
    const username = prompt("Введите Ваше имя: "); 
    console.log(`Здравствуйте, ${username}`);
}

buttontask2.addEventListener('click', greeting);
