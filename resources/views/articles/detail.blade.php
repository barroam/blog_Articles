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
 
<div class="container  d-flex lith">
 
  
  
  
        
          
   

    <div class="container form-group d-flex p7 " >
        <img class="w-25" src="{{$article->url_image}}">
        <div class="p-3">
            <h2 class="xs ">   </h2>
            <i class="{{ $article->a_la_une }}">   </i>
            <p class="">   {{ $article->description }}     </hp>
        
        </div>
        
       
    </div>
</div>
    
        <form class=" form-group col-2 row-4 justify-content-end bg-dark- text-light p-4 border">
            <div class="mb-3">
              <label for="auteur" class="form-label ">titre</label>
              <input type="text" class="form-control bg-dark-subtle" name="auteur" id="auteur">
            </div>
            <div class="mb-3">
              <label for="contenu" class="form-label">description</label>
            <textarea name="contenu" class="form-control bg-dark-subtle" id="contenu" cols="5" rows="5"></textarea>
            </div>
          
            <button type="submit" class="btn btn-primary ">Submit</button>
          </form>



         
       
   
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