<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portail ADPC Lille</title>

    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/gestion_portail.css" rel="stylesheet">

</head>

<body>
  <?php include '../web_annexes/nav.html';?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Les infos du portail</h1>
            </div>
            <div class="col-lg-6 text-center">
              <button type="button" class="btn btn-success">Ouvert</button>
            </div>
            <div class="col-lg-6 text-center">
              <button type="button" class="btn btn-warning">Fermé</button>
            </div>
            <div class="col-lg-12 text-center">
                <h2>Le portail est actuellement : Fermé</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th>Action</th>
                  <th>Pseudo</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ouverture</td>
                  <td>Arthur</td>
                  <td>10:36 14/05/2017</td>
                </tr>
                <tr>
                  <td>Fermeture</td>
                  <td>Daddy</td>
                  <td>10:40 14/05/2017</td>
                </tr>
                <tr>
                  <td>Ouverture</td>
                  <td>Chat</td>
                  <td>11:00 14/05/2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.row -->

  <?php include '../web_annexes/footer.html';?>
</body>

</html>
