<h1>Bienvenue sur le site de Cercle 211B :)</h1>

<div>
    <h1><?php echo $titre; ?></h1>
    <table border="1">
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Durée</td>
    </tr>
    <?php
        foreach ($parties as $partie) {
            echo '<tr>';
            echo '<td>' . $partie['partie_id'] . '</td>';
            echo '<td>' . $partie['partie_nom'] . '</td>';
            echo '<td>' . $partie['partie_duree'] . ' min</td>';
            echo '</tr>';
        }
    ?>
    </table>
</div>

<div>
    <hr>
    <h1>Notre évènment</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae unde ipsum placeat deserunt distinctio voluptas aut accusantium suscipit consequuntur dicta! Eligendi soluta delectus sed ad ullam! Minima facilis laborum inventore? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque officiis molestiae facilis doloremque ratione, amet unde veritatis ducimus quasi quis voluptatibus et aliquid maiores, voluptas harum, minima obcaecati iste!</p>
    <button>En savoir plus</button>
    <hr>
</div>

<div>
    <h1>Voici les commentaires :</h1>
</div>