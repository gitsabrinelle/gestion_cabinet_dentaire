<form action="file-upload.php" method="post" enctype="multipart/form-data">
  Envoyez plusieurs fichiers : <br />
  <input name="userfile[]" type="file" /><br />
  <input name="userfile[]" type="file" /><br />
  <input type="submit" value="Envoyer les fichiers" />
</form>