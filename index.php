<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/style.css">
  <title>Dischi Json</title>
</head>
<body>
  <div class="my-container" id="app">
    <header>
      <div class="container">
       <i class="fa-brands fa-spotify"></i>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div v-for="(disk, index) in disks" :key="index" class="col-4 mt-5 mb-2">
            <div class="my-card d-flex flex-column justify-content-center align-items-center rounded-3 me-5 ms-5 pt-3 pb-3">
              <div class="image">
                <img :src="disk.poster" alt="disk.title">
              </div>
              <div class="info text-center mt-3">
                <h5 class="bold">{{disk.title}}</h5>
                <span>{{disk.author}}</span>
                <h5 class="bold mt-2">{{disk.year}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  
</body>
<script src="./js/main.js"></script>
</html>