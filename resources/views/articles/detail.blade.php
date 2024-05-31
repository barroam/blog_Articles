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
 
<div class="container  d-flex ">
 
  
  
  
        
          
   

    <div class="container form-group d-flex p7 " >
        <img class="w-25" src="{{$article->url_image}}">
        <div class="p-3">
            <h2 class="xs ">   </h2>
            <i class="{{ $article->a_la_une }}">   </i>
            <h5 class="">   {{ $article->description }}     </h5>
        
        </div>
        
       
    </div>
</div>
    
<div class="container d-flex ">
    <div>
        <section style="background-color: black; p-2">
            <div class="card w-100 " style=" background-color: #e7effd ;">
                <div class="card-body p-4">
                  <div class="">
                    <h5>Johny Cash</h5>
                    
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                      ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                      viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                      Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                      vulputate at, tempus viverra turpis.
                    </p>
    
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                        <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                      </div>
                
                    </div>
                  </div>
                </div>
              </div>
                   
          </section>

          <section style="background-color: #e7effd; p-2">
            <div class="card w-100">
                <div class="card-body p-4">
                  <div class="">
                    <h5>Johny Cash</h5>
                    
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                      ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                      viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                      Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                      vulputate at, tempus viverra turpis.
                    </p>
    
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                        <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                      </div>
                
                    </div>
                  </div>
                </div>
              </div>
                   
          </section>
    </div>
    <form class=" form-group col-4 row-4  bg-dark- text-light p-4 border m-2 rounded-2" action="/commentaire/ajouter_commentaire"
    method="POST">
    @csrf
    <input type="hidden" name ="article_id" value="{{$article->id}}" >
        <div class="mb-3">
                  <label for="auteur" class="form-label ">titre</label>
          <input type="text" class="form-control bg-dark-subtle" name="auteur" id="auteur">
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">description</label>
        <textarea name="contenu" class="form-control bg-dark-subtle" id="contenu" cols="8" rows="5"></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary ">Submit</button>
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