

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>
    <header>
        <nav class="navbar1">
            <a href="" class="brand">Life/Blog</a>
        <div class=" art-con">
            <a href="/">Articles</a>
        
        </div>

        </nav>
    </header>
    <h1 class="titre m-5"></h1>

    <div class="container">
        <div class="main">
            <h1 style="text-align: center;"> Articles n°{{$article->id}} {{ $article->titre }} </h1>



                <img src="{{$article->url_image}}" class="image">


            <p class="description"> {{ $article->description }}   .</p>
            <i class=" {{ $article->a_la_une }} ">



            <div class="comments-section">

                <h2>Commentaires</h2>
                @foreach ($commentaires as $commentaire)


                <div class="comment">
                    <h4>{{$commentaire->auteur}}</h4>
                    <p>{{$commentaire->contenu}}</p>
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="" class="btn btn">
                          <i class="fa-solid fa-share" style="color: #043e67;"></i>
                        </a>
                        <a href="/commentaire/comment/{{$commentaire->id}}" class="btn btn m-1">
                          <i class="fa-solid fa-pen" style="color: #74C0FC;"></i>
                        </a>
                        <a href="/commentaire/supprime/{{$commentaire->id}}" class="btn btn m-1">
                          <i class="fa-solid fa-trash" style="color: #a33013;"></i>
                        </a>
                      </div>
                </div>


                @endforeach
            </div>

            <div class="comment-form">
                <h2>Laisser un commentaire</h2>
               <!-- <form>
                    <input type="text" name="name" placeholder="Votre nom" required>
                    <textarea name="comment" rows="5" placeholder="Votre commentaire" required></textarea>
                    <button type="submit">Envoyer</button>
                </form> -->
                <form   action="/commentaire/ajouter_commentaire"
                method="POST">
                @csrf
                <input type="hidden" name ="article_id" value="{{$article->id}}" >
                    <div class="">
                              <label for="auteur" class="form-label ">auteur</label>
                      <input type="text" class="form-control " name="auteur" id="auteur">
                    </div>
                    <div class="">
                      <label for="contenu" class="form-label">description</label>
                    <textarea name="contenu" class="form-control " id="contenu" cols="8" rows="5"></textarea>
                    </div>

                    <button type="submit" >Envoyer</button>
                  </form>
            </div>
        </div>
    </div>
</body>
<style>
    :root {
        font-size: 1rem;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;

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
    .container {
        width: 100%;
        margin: auto;
        overflow: hidden;
    }
    .main {
        width: 80%;
        background: #fff;
        padding: 1.25rem; /* 20px */
        margin: auto;
        overflow: hidden;

    }
    .cont-article{
        display: flex;
        justify-content: space-between;
    }
    .image {
        width:100%;
        height:28rem;
        object-fit: cover;
       padding-top: 2%;
    }
    h1 {
      color: #175ec3;
      text-align: start;
    }
    .description {

        display: flex;
        text-align: start;
        font-size: 1.2rem;
        padding: 1rem;

    }
    .comments-section {
        margin-top: 1.875rem; /* 30px */
    }
    .comments-section h2{
        color: #175ec3;
    }
    .comment {
        background: #f8f8fb;
        padding: 0.625rem; /* 10px */
        margin-bottom: 0.625rem; /* 10px */
        border-left: 0.1875rem solid #ddd; /* 3px */


    }
    .comment h4 {
        margin: 0;

    }
    .comment-form {
        margin-top: 1.25rem; /* 20px */
        color: #175ec3;
    }
    .comment-form input, .comment-form textarea {
        width: 99%;
        padding: 0.625rem; /* 10px */
        margin: 0.3125rem 0; /* 5px */
        border: 1px solid #ddd;
    }
    .comment-form button {
        padding: 0.625rem 0.9375rem; /* 10px 15px */
        background: #175ec3;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    .comment-form button:hover {
        background: #435370;
    }
</style>
</html>
