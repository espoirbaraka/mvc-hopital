<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="container">
            <h1 class="display-4">Bienvenue à l'Hôpital MVC</h1>
            <p class="lead">Gestion des médicaments et patients</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Médicaments</h5>
                        <p class="card-text">Gérer la liste des médicaments.</p>
                        <a href="?page=liste" class="btn btn-primary">Voir Médicaments</a>
                        <a href="?page=insererMedoc" class="btn btn-secondary ml-2">Ajouter Médicament</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Patients</h5>
                        <p class="card-text">Gérer la liste des patients.</p>
                        <a href="?page=listePatient" class="btn btn-primary">Voir Patients</a>
                        <a href="?page=insererPatient" class="btn btn-secondary ml-2">Ajouter Patient</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>