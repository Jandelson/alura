fetch('http://127.0.0.1:8008/login', {
  method: 'POST',
  headers: {
    'content-type': 'application/json',
    //authorization: 'Bearer 123abc456def'
  },
  body: {
    email: 'teste@maestro.com.br',
    password: 'jandelson1212'
  }
})
  .then(response => {
    console.log(response)
  })
  .catch(err => {
    console.log(err)
  })