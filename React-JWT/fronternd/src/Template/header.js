import React, { useEffect } from "react";
import { useNavigate } from "react-router-dom";

function Header() {
  const navigate = useNavigate();

  useEffect(() => {
    async function validarToken() {
      const token = sessionStorage.getItem("session");

      if (!token) {
        navigate("/");
        return;
      }

      try {
        const response = await fetch("http://localhost/Junho-Estudo/React-JWT/Config/auth_jwt.php", {
          method: "GET",
          headers: {
            "Authorization": token,
          },
        });

        if (!response.ok) {
          sessionStorage.removeItem("session");
          navigate("/");
        }
      } catch (error) {
        sessionStorage.removeItem("session");
        navigate("/");
      }
    }

    validarToken();
  }, [navigate]);

  return (
    <header style={{ padding: 20, backgroundColor: "#eee" }}>
      <h2>Meu App 11111111111111- Header</h2>
      {/* Links, usuário logado, logout etc */}
    </header>
  );
}

export default Header; 