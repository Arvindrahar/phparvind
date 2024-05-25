<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .error {
    color: red;
  }
</style>

<body>
  <div class="container">
    <div class="error">

    </div>
    <!-- <form action="./submit.php" method="post"> -->
    <form id="myForm" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="mb-3  col-6">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3 col-6">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">

        </div>
        <div class="mb-3 col-6">
          <label for="image" class="form-label">image</label>
          <input type="file" class="form-control" id="image" name="image">

        </div>
        <div class="mb-3  col-12">
          <label for="Phone" class="form-label">Phone</label>
          <input type="number" class="form-control" id="phone" name="phone">

        </div>
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    const myForm = document.querySelector("#myForm");
    const error = document.querySelector(".error");
    const loaddata = document.querySelector(".loaddata");

    myForm.addEventListener('submit', async (e) => {
      // console.log('hello');
      e.preventDefault();
      let formData = new FormData(myForm);
      // console.log(Array.from(formData));
      // console.log(...formData);
      formData.append('status', 'Active');

      let response = await fetch('./submit.php', {
        method: 'post',
        body: formData,
      })
      if (!response.ok) {
        console.log('something went wrong');
      }
      let resText = await response.text();
      console.log(resText);
      // errorBox.innerHTML = resText;
    })
    // loaddata.addEventListener('click',async ()=>{
    //     let response =await fetch('https://vannilla-js-basic-project-20-filters.netlify.app/products.js',{
    //         // method: "GET";
    //     })
    //     let Data =await response.text();
    //     console.log(data);
    // })
  </>
</body>

</html>