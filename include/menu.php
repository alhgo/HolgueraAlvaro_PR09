


<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li 
                                
                                <?php
                                
                                if($current == 'home')
                                {
                                    echo "class=\"current\"";
                                }
                                
                                
                                ?>
                                
                                
                                
                                
                                ><a href="index.php">    <div>Home</div></a>
								
							</li>
                            <li 
                                
                                <?php
                                
                                if($current == 'about-me')
                                {
                                    echo "class=\"current\"";
                                }
                                
                                
                                ?>
                                
                                
                                ><a href="index.php">    <div>Sobre mí</div></a>
								
							</li>
                            
                            <li <?= ($current == 'porfolio') ? 'class=="current"' : "" ?>><a href="index.php">    <div>Portfolio</div></a>
								
							</li>
                            
                            <li <?= ($current == 'contacto') ? 'class=="current"' : "" ?>><a href="index.php">    <div>Contacto</div></a>
								
							</li>
							
						</ul>

						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->