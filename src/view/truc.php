<div class="container">

    <h1>Inscription</h1>

    <form method="post" action="./index.php?w=inscription">

        <label title="nom" id="nom" >Nom</label>
        <input type="text" name="nom" required><br>
        <label title="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" required><br>
        <label title="email">Email</label>
        <input type="email" name="email" id="email"required><br>
        <SELECT name="formation" size="1">
            <OPTION>DTA
            <OPTION>FISE
            <OPTION>CITISE
            <OPTION>FISA
            <OPTION>IPSI
            <OPTION>DUSMW
                <OPTION>L3INFO
                <OPTION>M1DC
        </SELECT><br>
        <input type="submit" name="go">


    </form>


</div>