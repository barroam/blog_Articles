<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Blog</title>
</head>
  <body>
    <header>
        <nav class="navbar1">
            <a href="#home" class="brand">My Blog</a>

            <div class="art-con">
              <a href="/">Articles</a>

          </div>
        </nav>
    </header>
  <h1 class="titre"> Ajouter Article </h1>
  @if (session('status'))
      <div class="alert alert-succes">
        {{session('status')}}</div>


  @endif
 <div class="container">
    <form class=" form-group col-8 justify-content-center " action="/article/sauvegarde" method="post">
        @csrf
        <div class="mb-3">
          <label for="titre" class="form-label">titre</label>
          <input type="text" class="form-control" name="titre" id="titre">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="12"></textarea>
        </div>
        <div>
            <label for="url_image" class="form-label">image</label>
            <input type="text" class="form-control" name="url_image" id="url_image" >
        </div>
        <div class="mb-3 form-check">
          <input type="radio" class="form-check-input" id="flexRadioDefault1" name="a_la_une" >
          <label class="form-check-label" for="flexRadioDefault1" value='1'>a la une</label>
        </div>


        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
 </div>






  </body>
  <style>
           body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar1 {
            background-color:royalblue;
            overflow: hidden;
        }

        .navbar1 a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar1 a:hover {
            background-color: #020818;
        }

        .navbar1 .brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
.titre{
    text-align: center;
    color: royalblue;
    font-weight: 800;
}
.art-con{
    float: right;

}
  </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</html>
