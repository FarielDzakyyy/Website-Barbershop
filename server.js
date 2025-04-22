const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const app = express();

app.use(cors()); // agar frontend bisa akses API ini
app.use(bodyParser.json()); // biar bisa baca JSON dari request body

// Simulasi database user
const users = [
  { email: 'admin@barber.com', password: '123456' },
];

// Endpoint Login
app.post('/login', (req, res) => {
  const { email, password } = req.body;
  const user = users.find(u => u.email === email && u.password === password);

  if (user) {
    res.status(200).json({ message: 'Login berhasil', user: { email } });
  } else {
    res.status(401).json({ message: 'Email atau password salah' });
  }
});

const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Server berjalan di http://localhost:${PORT}`);
});