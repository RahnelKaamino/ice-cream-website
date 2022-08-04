var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

const deleteFood = async (id) => {
  const form = new FormData()

  form.append('id', id)

  const response =await fetch(URL_SERVER, {
    method: 'DELETE',
    body: form,
  })

  
  window.location.replace(URL + "/#flavourSection")
  window.location.reload(true)
}

const editFood = (id, name, price) => {
  window.location.replace(URL + "/edit-food?id=" + id + "&name=" + name + "&price=" + price)
}