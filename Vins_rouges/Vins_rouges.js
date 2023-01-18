window.onload = function() {
    let json = `
    [
        {
            "nom": "Uby n°7",
            "nom_de_domaine": "Domaine uby",
            "description": "Vin rouge merlot. Côte de Gascogne fruité et tannique.",
            "annee": 2021,
            "lien_image":"https://www.vinatis.com/64266-detail_default/uby-n7-rouge-merlot-tannat-2021-domaine-uby.png"
        },
    
        {
            "nom": "Uby n°7",
            "nom_de_domaine": "Domaine uby",
            "description": "Vin rouge merlot. Côte de Gascogne fruité et tannique.",
            "annee": 2021,
            "lien_image":"https://www.vinatis.com/64266-detail_default/uby-n7-rouge-merlot-tannat-2021-domaine-uby.png"
        },
    
        {
            "nom": "Uby n°7",
            "nom_de_domaine": "Domaine uby",
            "description": "Vin rouge merlot. Côte de Gascogne fruité et tannique.",
            "annee": 2021,
            "lien_image":"https://www.vinatis.com/64266-detail_default/uby-n7-rouge-merlot-tannat-2021-domaine-uby.png"
        },
    
        {
            "nom": "Uby n°7",
            "nom_de_domaine": "Domaine uby",
            "description": "Vin rouge merlot. Côte de Gascogne fruité et tannique.",
            "annee": 2021,
            "lien_image":"https://www.vinatis.com/64266-detail_default/uby-n7-rouge-merlot-tannat-2021-domaine-uby.png"
        },
    
        {
            "nom": "Uby n°7",
            "nom_de_domaine": "Domaine uby",
            "description": "Vin rouge merlot. Côte de Gascogne fruité et tannique.",
            "annee": 2021,
            "lien_image":"https://www.vinatis.com/64266-detail_default/uby-n7-rouge-merlot-tannat-2021-domaine-uby.png"
        }
        
    ]`

    const obj = JSON.parse(json)

    GenerateMain(obj)
};

function GenerateMain(obj)
{
    let main = document.getElementsByTagName('main')[0]

    if (obj.length == 0)
    {
        main.innerHTML = "Produits momentanément indisponible"
    }
    else
    {
        let contenu =  ""

        let indexVin = 0

        while (indexVin < obj.length)
        {
            contenu += `<div class="row div_vin_rouge">\n`
            
            let nbVin = 0

            while (nbVin < 3 && indexVin < obj.length)
            {
                let vin = obj[indexVin]

                contenu += `<div class="col-4 card" style="width: 17rem; height: 40rem;">
                <img src="${vin.lien_image}" alt="" title="" class="img-fluid photo">
                <div class="texte">
                    <h1>Description</h1>
                    <p>${vin.nom}</p>
                    <p>${vin.nom_de_domaine}</p>
                    <p>${vin.description}</p>
                </div>
            </div>

            `
            indexVin++
            nbVin++
            }

            contenu += `</div>`
            
        }

        main.innerHTML = contenu
    }
}