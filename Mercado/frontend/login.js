$(document).ready(function() {    
    $('#btn_acess').click(function(e) {        

        const email = $('#emailInput').val();
        const senha = $('#passwordInput').val();

        // let data = {email: email, password: senha};
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', senha);
        fetch('http://localhost/Estudo php/Junho-Estudo/Mercado/Controller/LoginController.php', {

        method: 'POST',        
        body: (formData),
        })
         .then(response => response.json()) // pode usar .json() se o PHP responder em JSON
        .then(data => 
            
            window.location.href = './frontend/Telas/inicio.php'

        )
        .catch(error => console.error('Erro:', error));
        
         
    });
});
