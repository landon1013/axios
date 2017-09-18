var axios = require('axios')
axios.get('https://api.github.com/users/codeheaven-io');

function axiosPOST() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var body = document.getElementById('body').value;

  axios.post('email.php', {
    name: name,
    email: email,
    body: body
  })
  .then(function (response) {
    console.log(response)
    console.log('Good jorb')
  })
  .catch(function (error) {
    console.log('This is my error ' + error)
  })
}
