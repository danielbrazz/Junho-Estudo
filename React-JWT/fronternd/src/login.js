import React, { useState } from "react";

function Login() {
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");
    const [errorMessage, setErrorMessage] = useState(""); // ← adiciona estado para erro

  const handleSubmit = async (e) => {
    e.preventDefault();

    const response = await fetch("http://localhost/Junho-Estudo/React-JWT/Controller/FormLogin.php", { // seu backend PHP
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
       body: new URLSearchParams({
        username,
        password
      }),
    });

    const data = await response.json();

    if (data.success) {
      // Login válido
      setErrorMessage(""); // limpa erros
        sessionStorage.setItem("session", data.token); // Corrigido aqui

      // Redirecionar ou armazenar token, etc.
      alert("Login realizado com sucesso! Bem-vindo, " + data.nome);
    } else {
      // Login inválido
      setErrorMessage(data.message || "Erro ao fazer login.");
    }
  };

  return (
    <div style={{ maxWidth: 400, margin: "auto", padding: 20 }}>
      <h2>Login</h2>
      <form onSubmit={handleSubmit}>
        <div>
          <label>Usuário</label><br />
          <input
            type="text"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
            
          />
        </div>

        <div>
          <label>Senha</label><br />
          <input
            type="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            
          />
        </div>

        <button type="submit" style={{ marginTop: 10 }}>
          Entrar
        </button>
      </form>
        {/* Exibe a mensagem de erro, se houver */}
      {errorMessage && (
        <p style={{ color: "red", marginTop: 10 }}>{errorMessage}</p>
      )}
    </div>
  );
}

export default Login;
