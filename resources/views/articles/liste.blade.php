<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
        <nav class="navbar1">
            <a href="" class="brand">My Blog</a>
        <div class="art-con">
            <a href="article">Articles</a>
            <a href="/article/contact">Contact</a>
        </div>
        </nav>
      
    </header>


  <h1 class="titre">Mon Blog</h1>
   <a class="btn btn-primary justify-content-end m-3 align-items-end " href="ajouter">Ajouter une article</a>
  <h1 class="align-items-center">     @if (session('status'))
    <div class="alert alert-succes text-primary     ">
      {{session('status')}}</div>
      @endif</h1>

<div class="container  d-flex justify-content-space-around gap-5  flex-wrap ">

    @foreach ( $articles as $article )
        
    
    <div class="container border col-3  bg-dark text-light rounded-2 p-1 justify-content-center" >
        <img class="w-100" src="{{$article->url_image}}">
        <div>
            <h2 class=" dark "> {{$article->titre}}</h2>
        
        </div>
      
      <div class="navbar">
        <a href="article/{{ $article->id }}" class="btn btn-primary"> <i class="fa-solid fa-info" style="color: #3e4147;"></i></a> 
        @if($article->a_la_une)
        <i class="fa-solid fa-heart text-danger"></i>
        @endif
        </div>  
        <div>
          
            <a href="article/partager" class="btn btn-light"> <i class="fa-solid fa-share" style="color: #043e67;"></i></a>
            <a href="article/modifier/{{ $article->id }}" class="btn btn-light m-1"> <i class="fa-solid fa-pen" style="color: #74C0FC;"></i></a>
            <a href="supprime/{{ $article->id }}" class="btn btn-danger m-1"> <i class="fa-solid fa-trash" style="color: #5b1706;"></i></a>
        </div>
       </div>

 @endforeach
</div>
  



<div style="position: relative; width: 100%; height: 0; padding-top: 25.0000%;
padding-bottom: 0; box-shadow: 0 2px 8px 0 royalblue; margin-top: 5rem; margin-bottom: 0.0em; overflow: hidden; border-bottom: 1rem solid royalblue; 
border-radius: 00; will-change: transform;">
 <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
   src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGGwqD_CFM&#x2F;272Ra84f_jViQkIzLn1zEw&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
 </iframe>
</div>
<footer class="footer">
    <div class="container">
      <div class="footer-left">
        <p>&copy; 2024 Votre Site Web. Tous droits réservés.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons">
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
          <a href="#">Instagram</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
  </body>
  <style>
           body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
 .ajou{
    display: flex;
 
   justify-content: end;
   
   
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
.carousel-item img {
      height: 400px; /* Ajustez la hauteur de la bannière selon vos besoins */
      object-fit: cover;
    }
    .footer {
      background-color: #4169E1; /* Royal Blue */
      color: white;
      padding: 20px 0;
    }
    .footer a {
      color: white;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .footer .social-icons {
      display: flex;
      gap: 10px;
    }

  </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</html>