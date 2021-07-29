<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body {
       background-image:url(background.jpg);
       background-repeat:no-repeat;
       height:100vh;
       background-size:cover;
       opacity:0.9;
       overflow:hidden;
       position:relative:

   }
  
   form {
       background-color:#efd8d087;
       background-size:cover;
        width:400px;
        padding:30px;
        margin :auto;
        border-radius:15px;
        position:absolute:
        top:250px;
        }
   input,label {
        margin:3px;
        padding:8px;
        border-radius:15px;
        width:100%;

        }

    button {
        cursor:pointer;
        border-radius:15px;
        padding:8px;
        background-color:#EFD8D0;
        color:black;
        width:200px;

        }

        @media print{
	 #bt{
		display: none;
	}
}
    
</style>
<body>
  
    <form action="affichage.php" target="_blank" method="post" >
    <h1>Formulaire d'inscription</h1>
        <label>Nom</label><br>
        <input name="nom" type="text"><br><br>
        <label>Prénom</label><br>
        <input name="prenom" type="text"><br><br>
        <label>Email</label><br>
        <input name="email" type="text"><br><br>
        <button type="submit">Enregistrer</button>
    </form>

</body>
</html>