let button = document.querySelector("#submit");


button.addEventListener('click', function(){
    let firstName = document.querySelector("#firstname").value; //prénom
    let lastName = document.querySelector("#lastname").value; //nom
    let emailName = document.querySelector("#email").value; //email
    let personAdress = document.querySelector("#adresse").value; //adresse
    let messageForm = document.querySelector("#message").value; //message
    

    fetch ('https://slack.com/api/chat.postMessage',{
        method: 'POST',
    headers: new Headers({
        'Authorization': `${secrets.SECRET_TOKEN}`,
        'Content-type': 'application/json'
    }),
    body: JSON.stringify({"channel":"C01JQDF93K7","text":`NOUVEAU CONTACT: \n\n Nom:${lastName} \n Prénom:${firstName} \n Email: ${emailName} \n Adresse: ${personAdress} \n Message: ${messageForm}`})
});
});
