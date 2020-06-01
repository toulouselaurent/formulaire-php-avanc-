<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
        <label  for="prénom">Prénom :</label>
        <input  type="text"  id="prénom"  name="user_nickname" required>
    </div>
    <div>
        <label  for="nom">Téléphone :</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
    </div>
    <div>
        <label for="theme-select">Sujet:</label>
        <select name="sujet" id="sujet" name="topic" required>
            <option value="">--Choisissez votre thême--</option>
            <option value="Les tontons codeurs">Les tontons codeurs</option>
            <option value="Tom Select">Tom Select</option>
            <option value="Thême à tic">Thême à tic</option>
            <option value="Thême à tac">Thême à tac</option>
            <option value="Chteumeul">Chteumeul</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

