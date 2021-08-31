<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Cidisi - Games</title>

        <!-- css de bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- JQuery -->
        <script src="../../../jquery/jquery-3.6.0.js"></script>

        <!-- Booststrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- JQuery validate -->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <h3>Inscription</h3>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Inscription au portail de jeux
                </div>


            <div class="panel-body">
                <form id="inscription_form" action="check.php" method="post">

                    <!-- Nom -->
                    <div class="form-group row">
                        <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre nom">
                        </div>
                    </div>

                    <!-- Prénom -->
                    <div class="form-group row">
                        <label for="prenom_per" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="votre prénom">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="form-group row">
                        <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email_per" name="email_per" placeholder="votre adresse e-mail">
                        </div>
                    </div>

                    <!-- mot de passe -->
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                        </div>
                    </div>

                    <!-- confirmation mot de passe -->
                    <div class="form-group row">
                        <label for="password_conf" class="col-sm-2 col-form-label">Mot de passe<br>(confirmation)</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Saisissez votre mot de passe une seconde fois">
                        </div>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group row checkbox">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-10">
                        <input type="checkbox" value="Checkbox-Checked">
                            La formation d'informaticien m'intéresse
                        </div>
                    </div>


                    <!-- buttons -->
                    <div>
                        <div class="col-sm-8">

                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary mb-5" type="submit">S'inscrire</button>

                            <button class="btn btn-warning mb-5" type="cancel">Annuler</button>
                        </div>
                    </div>



                </form>
            </div>

            <div class="panel-footer">

            </div>

            </div>

        </div>


        <script src="js/inscription.js"></script>
    </body>
</html>
