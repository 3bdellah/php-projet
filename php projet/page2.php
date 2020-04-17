<?php require'header.php';?>
<br><br><br><br><br><br>

<div  class="container site">
<form action="post" >
    <legend>Contact</legend>
  <em id="etoile">*</em> sont <em>obligatoires</em>
    
  <fieldset>
    
      <label for="nom">Nom <em id="etoile">*</em></label>
       <div class="form-group">
           <input id="nom" class="form-control" placeholder="your name" autofocus="" required=""></div><br>
      <label for="telephone">Portable</label>
       <div class="form-group">
           <input id="telephone" class="form-control" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"></div><br>
      <label for="email">Email <em id="etoile">*</em></label>
       <div class="form-group">
           <input id="email" class="form-control" type="email" placeholder="your email" required=""></div><br>
  </fieldset>
  <fieldset>
    <legend>Information personnelles</legend>
      <label for="age">Age<em id="etoile">*</em></label>
       <div class="form-group">
           <input id="age" type="number" placeholder="xx" pattern="[0-9]{2}" required=""></div><br>
      <label for="sexe">Sexe</label>
       <div class="form-group">
      <select id="sexe" class="form-control">
        <option value="F" name="sexe">Femme</option>
        <option value="H" name="sexe">Homme</option>
           </select></div><br>
      <label for="comments">Laisser une commentaire </label>
       <div class="form-group">
      <textarea class="form-control" id="comments"></textarea>
      </div>
  </fieldset>
    <p><i style="padding-left: 15px;"><input type="submit" class="btn btn-primary" value="Soummettre"></i></p>
</form>

<br><br><br><br><br><br>
 
</form>
</div>
    
    <?php require'footer.php';?>