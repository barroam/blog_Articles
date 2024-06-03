<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Blog</title>
</head>
  <body class="bg-dark ">
    <header>
        <nav class="navbar1">
            <a href="#home" class="brand">My Blog</a>
      
            <div class="art-con">
              <a href="/article">Articles</a>
              <a href="/article/contact">Contact</a>
          </div>
        </nav>
    </header>
  <h1 class="titre"> modifier commentaire </h1>

  <a class="btn btn-primary justify-content-end m-3 align-items-end " href="/article/{{$commentaire->article_id}}">Retour</a>


  <div class="d-flex justify-content-center">
      <form class=" form-group col-5 row-4   text-light p-3 m-3  rounded-2 border  align-items-center"   action="/commentaire/update/{{$commentaire->id}}"
    method="POST">
    <!-- url('/commentaires/update/' . $commentaire->id)  -->
  @csrf
  @method('PUT')
  <input type="hidden" name ="article_id" value="{{$commentaire->artice_id}}" >
  <input type="hidden" name ="id" value="{{$commentaire->id}}" >
      <div class="mb-3">
                <label for="auteur" class="form-label ">auteur</label>
        <input type="text" class="form-control bg-dark-subtle" name="auteur" id="auteur" value="{{$commentaire->auteur}}">
      </div>
      <div class="mb-3">
        <label for="contenu" class="form-label">description</label>
      <textarea name="contenu" class="form-control bg-dark-subtle" id="contenu" cols="8" rows="5" > {{$commentaire->contenu}} </textarea>
      </div>
    
      <button type="submit" class="btn btn-primary ">Envoyer</button>
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