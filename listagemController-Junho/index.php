
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Controller</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

   <div class="container mt-5">        
    <button id="carregarTabela" class="btn btn-primary mb-4">Estoque GFD</button>

    <div id="tabelaUsuarios" class="d-none">
      <h3>Estoque - GFD</h3>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Item</th>            
            <th>Qtd.</th>   
            <th>Valor</th>   
          </tr>
        </thead>
        <tbody id="corpoTabela">
          
        </tbody>
      </table>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>
</html>
<script>
    $(document).ready(function () {
      $('#carregarTabela').on('click', function () {
        $.ajax({
          url: 'Controller/UserController.php',
          method: 'POST',       
          success: function (data) {
            let html = '';
            dados = JSON.parse(data);
            dados.forEach(item => {
              html += `<tr>
                          <td>${item.id}</td>
                          <td>${item.Item}</td>
                          <td>${item.Quantidade}</td>
                          <td>${item.Valor}</td>
                        </tr>`;
            });
            $('#corpoTabela').html(html);
            $('#tabelaUsuarios').removeClass('d-none');
          }
        });
      });
    });
  </script>


