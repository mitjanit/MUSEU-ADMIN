<html>
<body>
<h1>Dades de Persones</h1>
<h2>Importació.</h2>
<p></p>
<form action="importaPersones.php" method="post">
	<fieldset>
        <fieldset>
            <legend>Importació Entitats:</legend>
            <p> Introdueix dades en format [NOM_ESPORTIU;LLINATGE1;LLINATGE2;NOM;PAIS;PROVINCIA;POBLACIO;NEIX;MORT;DETALLS]. </p>
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