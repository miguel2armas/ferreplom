</main>
</div>
		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Ferreplom, c.a. J-40031256-6</h5>
                <p class="grey-text text-lighten-4">El Vigía Edo. Mérida, Carrera 11 con Calle 11, La Inmaculada  Telefono: 0275-882.04.49
    E-mail: ferreplom.ca@gmail.com Twitter: @Ferreplomca</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                 <a href="https://twitter.com/ferreplomca?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @ferreplomca</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </ul>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="admon">Administrador</a></li>
                  <li><a class="grey-text text-lighten-3" href="AcercaDe">Acerca de</a></li>
                </ul>

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">&copy; 2017 Todos los Derechos Reservados.
					</div>
				</div>
			</div>
          </div>
        </footer>
		<script type="text/javascript" src="materialize/js/materialize.min.js">  
    </script>
		<script src="scripts/main.js"></script>
    <script> 
$('img').on('error',function(){this.src='img/p/defaul.jpg'});
</script>
<? 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp); 

++$contador; 

$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp); 
?>
	</body>
</html>