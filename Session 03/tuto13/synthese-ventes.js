
let ventes = [110, 75, 150, 180, 90, 130, 100, 160];


let somme = 0;
let maximum = ventes[0];
let minimum = ventes[0];
let nbExceptionnelles = 0;
let sommeExceptionnelles = 0;


for (let i = 0; i < ventes.length; i++) {
    let vente = ventes[i];

    somme = somme + vente;

    
    if (vente > maximum) {
        maximum = vente;
    }

    
    if (vente < minimum) {
        minimum = vente;
    }

    
    if (vente >= 130) {
        nbExceptionnelles++;
        sommeExceptionnelles = sommeExceptionnelles + vente;
    }
}


console.log("Nombre total de ventes :", ventes.length);
console.log("Chiffre d'affaires total :", somme);
console.log("Vente maximale :", maximum);
console.log("Vente minimale :", minimum);
console.log("Nombre de ventes exceptionnelles :", nbExceptionnelles);
console.log("Chiffre d'affaires exceptionnel :", sommeExceptionnelles);

