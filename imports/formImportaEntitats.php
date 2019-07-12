<html>
<body>
<h1>Dades dels Usuaris</h1>
<h2>Importaci&oacute;.</h2>
<p></p>
<form action="importaEntitats.php" method="post">
	<fieldset>
        <fieldset>
            <legend>Importació Entitats:</legend>
            <p> Introdueix dades en format [NOM_ESPORTIU;NOM;PAIS;PROVINCIA;POBLACIO;ANY;DETALLS]. </p>
            <label for="dades">Dades (*):</label>
              <textarea name="dades" id="dades" rows="10" class="text3" cols="100" ></textarea>
              <br/><br/>
             </fieldset>
             <br/><br/>
   <input type="submit" name="Submit" value="Importar" />  &nbsp;
   <input name="Reset" type="reset" id="Reset4" value="Reset" />
   </fieldset>
</form>
</body>
</html>