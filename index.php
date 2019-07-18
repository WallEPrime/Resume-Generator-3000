<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Generator</title>

    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/2a21aa6757.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container mt-6">


        <form action="generatecv.php" method="post">

            <h1>Creez votre CV en quelques minutes</h1>
            <p>Completez ce formulaire et clickez sur Télécharger pour avoir le document en format PDF</p>
            <input type="text" name="name" placeholder=" Nom et prénom" class="form-control">
            <input type="text" name="fonction" placeholder=" Titre de la fonction" class="form-control">


            <input type="text" name="adresse" placeholder=" Adresse" class="form-control">
            <input type="text" name="codepostal" placeholder=" Code Postal" class="form-control">
            <input type="text" name="ville" placeholder=" Ville" class="form-control">
            <input type="text" name="telephone" placeholder=" Téléphone" class="form-control">
            <input type="text" name="email" placeholder="E-mail" class="form-control">

            <h2>études</h2>
            <div id="addEducation ">
                
                <input type="button" class="btn btn-primary " value="Ajoutez une scolarite" onclick="createNewSchool();" />
            </div>

            <div id="newSchoolInput"></div>


            <h2>expériences professionnelles</h2>

            <div id="addWork ">
                
                <input type="button" class="btn btn-primary " value="Ajoutez une experience" onclick="createNewWorkplace();" />
            </div>

            <div id="newWorkInput"></div>

            <h2>Hobbies</h2>

            <div id="addHobby ">
              
                <input type="button" class="btn btn-primary " value="Ajoutez un hobby" onclick="createNewHobby();" />
            </div>

            <div id="newHobbyInput"></div>

            <h2>à propos</h2>

            <textarea name="about" id="" cols="30" rows="10" placeholder="À propos" class="form-control"></textarea>



            <button type="submit" class="btn btn-success btn-md"> Télécharger</button>

        </form>

    </div>


    <script src="functions.js">

    </script>


</body>

</html>