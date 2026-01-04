console.log("js find");

function sendMail() {
    var parmes = {
        from_name : document.getElementById("fullName").value,
        email_id : document.getElementById("email").value,
        message : document.getElementById("message").value,
    }
    emailjs.send("service_9ohnmmf","template_jsb9505", parmes).then(function (res){
        alert("Success! " + res.status);
    });
}