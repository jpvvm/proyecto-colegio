function libro_diario(){
let fecha;
let cuenta;
let cuenta2;
let debe;
let haber;

fecha=prompt("fecha del registro");
cuenta=prompt("fecha del registro");
cuenta2=prompt("que va registrar,(debe o haber)")

switch(cuenta2){

    case 'debe':
        debe=prompt("debe");
    break;
    case 'haber':
        haber=prompt("haber");
    break;
    default: "Opción incorrecta";

}






}