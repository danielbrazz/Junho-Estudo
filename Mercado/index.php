<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrazMart</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="modal fade show" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-modal="true"
        role="dialog" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">                
                <div class="modal-body">                    
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter email" />                            
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" />
                    </div>
                    <button id="btn_acess" class="btn btn-primary w-100">Acessar</button>                    
                </div>
            </div>
        </div>
    </div>
    <script src="frontend/login.js"></script> 
</body>
</html>