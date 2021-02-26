<form action="upload.php" method="GET" enctype="multipart/form-data">
  Envoyez plusieurs fichiers : <br />
  <input name="userfile[]" type="file" /><br />
  <input name="userfile[]" type="file" /><br />
  <input type="submit" value="Envoyer les fichiers" />
</form>