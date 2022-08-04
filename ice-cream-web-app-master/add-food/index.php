<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='../URL.js'></script>
  <title>Document</title>
</head>
<body>
  <input id="name" />
  <input id="price" />
  <button onclick="addFood()">Add Flavor</button>
</body>
<script>
  const addFood = async () => {
    const name = document.getElementById('name').value
    const price = document.getElementById('price').value
    const form = new FormData()

    form.append('name', name)
    form.append('price', price)

    const response =await fetch(URL_SERVER, {
      method: 'POST',
      body: form,
    })
    
    if (response.status === 200) {
      window.location.replace(URL + "/#flavourSection")
    }
  }
</script>
</html>