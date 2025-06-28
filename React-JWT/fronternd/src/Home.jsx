import React, { useEffect, useState } from "react";

function Home() {
  const [isValidToken, setIsValidToken] = useState(null);
  const [message, setMessage] = useState("");

  useEffect(() => {
    // Faz a requisição para validar token no backend
    fetch("http://localhost/Junho-Estudo/React-JWT/Config/auth_jwt.php", {
      method: "POST",
      credentials: "include", // ← ESSENCIAL: permite que o navegador envie cookies
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({ acao: "valida" }),
    })
      .then((res) => {
        if (res.ok) return res.json();
        throw new Error("Erro na resposta do servidor");
      })
      .then((data) => {
        if (data.valid) {
          setIsValidToken(true);
          setMessage("Token válido! Bem-vindo.");
        } else {
          setIsValidToken(false);
          setMessage(data.message || "Token inválido. Faça login novamente.");
        }
      })
      .catch((err) => {
        setIsValidToken(false);
        setMessage(err.message);
      });
  }, []);

  return (
    <div>
      <h1>Página protegida</h1>
      <p>{message}</p>
      {/* Aqui você pode renderizar conteúdo protegido */}
      {isValidToken && (
        <div>
          <p>Conteúdo exclusivo para usuários autenticados.</p>
        </div>
      )}
    </div>
  );
}

export default Home;
