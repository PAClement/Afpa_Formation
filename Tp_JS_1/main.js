let eleves = [
    {
        prenom: "Morgan",
        note: 5,
    },
    {
        prenom: "Rudy",
        note: 10,
    },
    {
        prenom: "Christophe",
        note: 11,
    },
    {
        prenom: "Yves",
        note: 17,
    },
    {
        prenom: "Manu",
        note: 2,
    },
    {
        prenom: "Gaétan",
        note: 20,
    },
    {
        prenom: "Quentin",
        note: 17,
    },
    {
        prenom: "Sullivan",
        note: 14,
    },
    {
        prenom: "Lucile",
        note: 16,
    },
    {
        prenom: "Steven",
        note: 7,
    },
    {
        prenom: "Alexandre",
        note: 8,
    },
    {
        prenom: "Corentin",
        note: 11,
    },
    {
        prenom: "Brandon",
        note: 15,
    },
    {
        prenom: "Rayan",
        note: 20,
    },
    {
        prenom: "Abdel",
        note: 9,
    },
    {
        prenom: "Nicolas",
        note: 11,
    },
    {
        prenom: "Julien",
        note: 12,
    },
    {
        prenom: "Thomas",
        note: 18,
    },
    {
        prenom: "Maxime",
        note: 16,
    },
    {
        prenom: "Jonathan",
        note: 13,
    }
];

let tab = [];
let best = "";
let nul = "";

let table = "<table><tr><th>Nombre élèves</th><th>Moyenne</th><th>Nom Meilleur élève</th><th>Note Max</th><th>Nom Pire élève</th><th>Note min</th></tr><tr id=\"info\"></tr></table>"

tab = eleves.map((target) => {
    return target.note
});

for (let i = 0; i < eleves.length; i++) {

    eleves[i].note === Math.min(...tab) ? nul += eleves[i].prenom + " " : "";
    eleves[i].note === Math.max(...tab) ? best += eleves[i].prenom + " " : "";
}

let build = "";
for (let i = 1; i <= 6; i++) {

    build += "<td>";

    switch (i) {
        case 1:
            build += tab.length;
            break;
        case 2:
            build += tab.reduce((a, b) => a + b) / tab.length;
            break;
        case 3:
            build += best;
            break;
        case 4:
            build += Math.max(...tab);
            break;
        case 5:
            build += nul;
            break;
        case 6:
            build += Math.min(...tab);
            break;
    }

    build += "</td>";
}

document.querySelector('body').innerHTML = table;
document.querySelector('#info').innerHTML = build; 