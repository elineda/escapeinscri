<div class="container">

    <h1>Inscription</h1>
    <div  class="card">
    <div class="" style="margin: 2em; display: block">

    <form method="post" action="./index.php?w=inscription">

        <label title="nom" id="nom" >Nom</label>
        <input class="form-control" type="text" name="nom" required><br>
        <label title="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" required><br>
        <label title="email">Email</label>
        <input class="form-control" type="email" name="email" id="email"required><br>
        <SELECT class="form-control" name="formation" size="1">
            <OPTION>DTA
            <OPTION>FISE
            <OPTION>CITISE
            <OPTION>FISA
            <OPTION>IPSI
            <OPTION>DUSMW
                <OPTION>L3INFO
                <OPTION>M1DC
        </SELECT><br>
        <input  class="alert alert-dark" style="display: block; margin: 0 auto"  type="submit" value="Inscription" name="go">


    </form>
    </div>
    </div>

</div>