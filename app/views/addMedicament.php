<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Inserez un medicament</h1>
  <a href="?page=liste">Liste</a>
  <form action="?page=insert" method="post">
    <div>
      <label for="">Designation</label>
      <input type="text" name="designation"></br>
    </div>

    <div>
      <label for="">Description</label>
      <input type="text" name="description"></br>
    </div>

    <div>
      <label for="">Prix</label>
      <input type="text" name="prix"></br>
    </div>

    <input type="submit" name="valider" value="Inserer">
  </form>
</body>
</html>