document.getElementById("bookingForm")?.addEventListener("submit", function(e){
    const name = document.querySelector("[name='username']").value;
    const tickets = document.querySelector("[name='tickets']").value;
    const movie = document.querySelector("[name='movie']").value;
    
    if(name && tickets && movie) {
        alert(`🎬 Бронь: ${name}, ${tickets} бил. на "${movie}"`);
    }
});
