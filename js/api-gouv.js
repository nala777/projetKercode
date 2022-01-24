let listeAdresse = document.getElementById('liste-adresse');
let search = document.getElementById('adresse');



search.addEventListener('input', displaylist);



function displaylist() {

    fetch("https://api-adresse.data.gouv.fr/search/?q="+ search.value +"&limit=5")
    .then(response => response.json())
    .then(data => {
        let adresses = data.features;

        // console.log(adresses);

        listeAdresse.innerHTML = "";

        if(search.value){
            listeAdresse.innerHTML = "";
            adresses.forEach(element =>  {
                    
                    let li = document.createElement('li');
                    listeAdresse.appendChild(li)
                    li.innerText = element.properties.label;
                    li.addEventListener('click', ()=>{
                         listeAdresse.innerHTML = "";
                         search.value = element.properties.label;
                        
                    })
                    listeAdresse.appendChild(li);
                    
            });
        }else{
            listeAdresses.innerHTML = "";
        }

    });
}



