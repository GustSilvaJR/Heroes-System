<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Meus estilos-->
    <link href='../css/bootstrap/bootstrap.min.css' rel="stylesheet">
    <link href='../css/static/style.css' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    


    <!--Meus arquivos js-->
    <script src='../js/bootstrap/bootstrap.min.js'></script>  
    <script src='../js/static/myjs.js'></script>

    <title>Home</title>
</head>
<body>
  
  <div  class="container-fluid fixed-top" id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a href="#">
                  <img class="me-5" width="75px" src="../assets/icon.png"/>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <div style="width: 320px;" class="d-md-flex justify-content-md-evenly">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#game">GAME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#box2">HERO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../logout.php">LOGOUT</a>
                    </li>
                  </div>
                </ul>
              </div>
            </div>
        </nav>
  </div>

  <div id="box1" class="ms-0"> 
    <div id="MyCarouselLegenda" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#MyCarouselLegenda" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#MyCarouselLegenda" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#MyCarouselLegenda" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  
      <div class="carousel-inner">
        <div class="carousel-item active img1 text-center">
          <img src="../assets/img1.png">
          <div class="carousel-caption">
            <div>
              <h3>Choose your hero</h3>
              <p>Become a hero and prepare to combat Bugs!</p>
            </div>
          </div>
        </div>
        <div class="carousel-item img2 pt-3 text-center">
          <img src="../assets/img2.png">
          <div class="carousel-caption">
            <p>To fight this enemy your greatest weapon is your patience</p>
          </div>
        </div>
        <div class="carousel-item img3 pt-3 text-center">
          <img src="../assets/img3.png">
          <div class="carousel-caption">
            <p>Get ready, they're everywhere</p>
          </div>
        </div>
      </div><!--FIM INNER-->
      
      <button class="carousel-control-prev" data-bs-target="#MyCarouselLegenda" type="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
  
      <button class="carousel-control-next" data-bs-target="#MyCarouselLegenda" type="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div id="game" class="conteudo row d-flex align-items-center">
      <h1 class="display-1 col-md-3">GAME</h1>
      <div class="col-md-8 mt-2">
        <p>
          During your path in the world of programming you will encounter numerous challenges. With that in mind, you need to create your hero profile right now, the one that will represent you in your development
        </p>
      </div>
  </div>

  <div id="box2">
    <div id="areaForm" class="container-fluid">
      <form class="row">
        <h1 id="tituloForm" class="display-4 text-center pb-2">Create your own hero</h1>
        <div class="col-md-8">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" aria-describedby="Seu nome de Herói"/>
        </div>
        <div class="col-md-4">
          <label for="idade" class="form-label">Idade</label>
          <input id="idade" class="form-control" aria-describedby="Sua idade" type="number">
        </div>  

        <div id="check" class="mt-5">
          <h1 class="display-5 mb-4 co-md-12">Choose your front
          </h1>
          <div class="col-md-2 form-check-inline">
            <input type="checkbox" class="form-check-input" id="html" value="HTML" name="areaAt">
            <label form="html" class="form-check-label">HTML</label>
          </div>
          <div class="col-md-3 form-check-inline">
            <input type="checkbox" class="form-check-input" id="css" value="CSS" name="areaAt">
            <label form="css" class="form-check-label">CSS</label>
          </div>
          <div class="col-md-3 form-check-inline">
            <input type="checkbox" class="form-check-input" id="python" value="PYTHON" name="areaAt">
            <label form="python" class="form-check-label">PYTHON</label>
          </div>
          <div class="col-md-3 form-check-inline">
            <input type="checkbox" class="form-check-input" id="javascript" value="JAVASCRIPT" name="areaAt">
            <label form="javascript" class="form-check-label">JAVASCRIPT</label>
          </div>

          <div class="input-group col-md-4 mt-4" name="areaAt">
            <label for="outro" class="form-label me-2">Outros: </label>
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" id="checkOutro">
            </div>
            <input style="border: none; border-bottom: 1px solid white;" id="outro" type="text" class="form-control" aria-label="Text input with checkbox" >
          </div>

        </div>

        <div class="col-md-12 mt-3">
          <label for="formFile" class="form-label  titleIcon">Insert your icon</label>
          <input class="form-control" type="file" id="icon">
        </div>

        <div class="col-md-12 d-flex justify-content-md-center">
          <button class="btn btn-primary mt-4 w-50" type="button" onclick="cadastroHeroi()">Create!</button>
        </div>  
      </form>
    </div>
  </div>
</body>
</html>