document.getElementById("adresse").addEventListener('input', function(){
    
    fetch("https://api-adresse.data.gouv.fr/search/?q=")
    .then(response => response.json)
    .then(data => 
        console.log(data.features[0].properties.label)
        
        );




});

console.log('hello')