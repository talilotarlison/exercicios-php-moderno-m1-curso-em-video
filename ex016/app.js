let aumento = document.getElementById("reajuste");
let inputValor = document.getElementById("valor");
// https://www.w3schools.com/jsref/event_onchange.asp
inputValor.addEventListener("change", ()=>{
        aumento.innerText = `(${inputValor.value}%)`;
});
