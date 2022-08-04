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
  <input type="hidden" id="food_id" value="<?php echo $_GET['id']; ?>" />
  <input id="name" value="<?php echo $_GET['name']; ?>"/>
  <input id="price" value="<?php echo $_GET['price']; ?>" />
  <button onclick="editFood()">ADD ICE CREAM FLAVOR</button>
</body>
<script>
  const editFood = async () => {
    const id = document.getElementById('food_id').value
    const name = document.getElementById('name').value
    const price = document.getElementById('price').value
    const form = new FormData()

    form.append('id', id)
    form.append('name', name)
    form.append('price', price)

    const response =await fetch(URL_SERVER, {
      method: 'PUT',
      body: form,
    })

    if (response.status === 200) {
      window.location.replace(URL + "/#flavourSection")
    }
  }
</script>
</html>