<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
  <form  action="http://localhost:8000/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required >
    </div>
    <div>
        <label  for="Sujet">Sujet :</label>
        <select id="sujet" name="user_sujet">
            <option value="">--Choisi ton plat--</option>
            <option value="Pizza">Pizza</option>
            <option value="Kebab">Kebab</option>
            <option value="Tacos">Tacos</option>
            <option value="Burger">Burger</option>
            <option value="Coucous">Couscous</option>
            <option value="Paëla">Paëla</option>
         </select>
       </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  </body>

<?php include'form.php'; ?>

</html>