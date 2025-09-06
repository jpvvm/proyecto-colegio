//Hacemos la función nota()

function nota(){

// Creamos las variables: nota1, nota2...

let nota1=0;
let nota2=0;
let nota3=0;
let nota_final;

nota1= prompt("Coloque la nota de MF0491_3");
nota2= prompt("Coloque la nota de MF0492_3");
nota3= prompt("Coloque la nota de MF0493_3");
nota_final=(Number(nota1)+Number(nota2)+Number(nota3))/3;

//Ahora quiero que los datos me aparezcan:

document.getElementById('demo1').innerHTML=nota1;
document.getElementById('demo2').innerHTML=nota2;
document.getElementById('demo3').innerHTML=nota3;
document.getElementById('demo4').innerHTML=nota_final;

// Por añadir algo:

if(nota_final<5){
    alert('Suspenso');
}else
    alert('Aprobado');


};