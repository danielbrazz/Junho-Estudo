


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Modal de Login -->
<div class="modal show d-block" tabindex="-1" id="loginModal">
  <div class=" modal-dialog-centered modal-dialog">
    <div class="modal-content">      
      <div class="modal-body">    
        <div class="mb-3">
        <label for="login" class="form-label">E-mail</label>
        <input type="login" class="form-control" id="login" placeholder="E-mail">
        </div>

        <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>

          <button  id="btn_acesso" class="btn btn-primary w-100">Entrar</button>        
      </div>

    </div>
  </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    console.log('1');
    $("#btn_acesso").click(function() {
    const data = {
        // Substitua pelos dados reais que você quer enviar
        email: $("#email").val(),
        senha: $("#senha").val()
    };

    $.ajax({
    url: '../Controller/FormController.php',
    method: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(data),
    dataType: 'json',
    success: function(response) {
        console.log('Resposta do servidor:', response);
        // ações com a resposta aqui
    }
});

});

</script>
</body>
</html>

