const express = require('express')
const app = express()
const boryParser = require('body-parser')

app.use(boryParser.urlencoded({ extended: true}))

app.post('/usuarios/:id', (req, resp) => {
    console.log(req, params, id)
    console.log(req.bory)
    resp.send('<h1>Parabens Usuario alterado<h1>')
})
app.post('/usuarios/:id', (req, resp) => {
    console.log(req, params, id)
    console.log(req.bory)
    resp.send('<h1>Parabens Usuario incluido<h1>')
})
app.listen(3003)

