 <!DOCTYPE html>
 <html>
 <head>
<meta charset="utf-8" />

<link rel="stylesheet" href="css/style.css">

<title>Test technique</title >
</head>
<style>
#dvd {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#dvd td, #dvd th {
  border: 1px solid #ddd;
  padding: 8px;
}

#dvd tr:nth-child(even){background-color: #f2f2f2;}

#dvd tr:hover {background-color: #ddd;}

#dvd th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>
  <?php
  use App\Autoloader;
  use App\Models\Dvd;

  require_once 'Autoloader.php';
  Autoloader::register();

  $all = new Dvd();
  $values = $all->findAll();

   ?>
  <table id="dvd" style="margin-bottom:20px">
    <thead>
      <th>id</th>
      <th>Auteur</th>
      <th>Année</th>
      <th>Titre</th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
      <?php foreach($values as $key=>$value): ?>
        <tr>
          <td><?= $value['id']; ?></td>
          <td><?= $value['auteur']; ?></td>
          <td><?= $value['annee']; ?></td>
          <td><?= $value['titre']; ?></td>
          <td>
            <button>Editer</button>
          </td>
          <td>
            <button>Supprimer</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div>
    <form action="" method="post">
      <label for="auteur">Auteur</label>
      <input type="text" id="auteur" name="auteur" placeholder="Auteur..">

      <label for="annee">Année</label>
      <input type="text" id="annee" name="annee" placeholder="Année..">

      <label for="titre">Titre</label>
      <input type="text" id="titre" name="titre" placeholder="Titre..">

      <input type="submit" name="ok" value="Valider">
    </form>
  </div>
  <!-- <div>
    <a><button class="btn btn-primary">Ajouter</button></a>
  </div> -->
</body >
</html >
