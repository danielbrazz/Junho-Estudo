import { useState } from 'react'

function App() {
  const [contador, setContador] = useState(0)

  function aumentar() {
    setContador(contador + 1)
  }

  return (
    <div style={{ textAlign: 'center', marginTop: '50px' }}>
      <h1>Contador Simples</h1>
      <p>Você clicou {contador} vezes</p>
      <button onClick={aumentar}>Clique aqui</button>
    </div>
  )
}

export default App
