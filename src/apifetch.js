document.querySelector('#adresse').addEventListener('keyup', function () {
    let inputContent = document.getElementById('adresse');
    let container = document.getElementById('result');
    container.innerHTML = "";
    let url = `https://api-adresse.data.gouv.fr/search/?q=${this.value}&limit=6`;
    fetch(url)
        .then(response =>response.json())
        .then(data => {
        let result = data.features;
        result.forEach(element => {
            let listElement = document.createElement('li');
            listElement.classList.add('item');
            listElement.innerText = element.properties.label;
            container.appendChild(listElement);
            listElement.addEventListener('click', function () {
                inputContent.value = listElement.innerText;
                container.innerHTML = "";
            });
        });
    }); 
});