<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-dark text-light">
    <header>
        <nav class="navbar1">
            <a href="" class="brand">Life/Blog</a>
        <div class=" art-con">
            <a href="/article">Articles</a>
            <a href="/contact">Contact</a>
        </div>
           
        </nav>
    </header>
  <h1 class="titre m-5"> Articles n°{{$article->id}} {{ $article->titre }} </h1>
 
<div class="container  d-flex " >
 
  
  
  
        
          
   

    <div class="container form-group d-flex  " >
        <img class="w-25" src="{{$article->url_image}}">
        <div class="p-3">
            <h2 class="">   </h2>
            <i class=" {{ $article->a_la_une }} ">   </i>
            <h5 class="">   {{ $article->description }}     </h5>
        
        </div>
        
       
    </div>
</div>
    
<div class="container d-flex m-2 justify-content-space-between gap-2">
 
  
    <div class=" ">
       <section style="">
        @foreach ( $commentaires as $commentaire)
     
            <div class="card w-100 m-2" >
                <div class="card-body p-1">
                  <div class="">
                    <h5> {{$commentaire->auteur}}</h5>
                    
                    <p>
                  {{$commentaire->contenu}}    
                    </p>
    
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <a href="" class="btn btn-light"> <i class="fa-solid fa-share" style="color: #043e67;"></i></a>
                        <a href="/commentaire/comment/{{$commentaire->id}}" class="btn btn-light m-1"> <i class="fa-solid fa-pen" style="color: #74C0FC;"></i></a>
                        <a href="/commentaire/supprime/{{$commentaire->id}}" class="btn btn-danger m-1"> <i class="fa-solid fa-trash" style="color: #5b1706;"></i></a>
                 
                      </div>
                
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
          </section>
    </div>
    <form class=" form-group col- row-4   text-light p-3 m-3  rounded-2 border"   action="/commentaire/ajouter_commentaire"
    method="POST">
    @csrf
    <input type="hidden" name ="article_id" value="{{$article->id}}" >
        <div class="mb-3">
                  <label for="auteur" class="form-label ">auteur</label>
          <input type="text" class="form-control bg-dark-subtle" name="auteur" id="auteur">
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">description</label>
        <textarea name="contenu" class="form-control bg-dark-subtle" id="contenu" cols="8" rows="5"></textarea>
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