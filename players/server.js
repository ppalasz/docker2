'use strrict'

const express = require('express');
const app = express();
const HOST ='0.0.0.0';
const PORT = 80;

app.get('/', (req, res)=> {
    res.json({
		players: ['Billy', 'John', 'Zdzisiek']
		
	});
});

app.listen(PORT, HOST);
console.log(`running on http://${HOST}:${PORT}`);