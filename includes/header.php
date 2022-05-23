<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png">
                        
                            
                            Mi <span>Página</span>
                        
                        
                        
                        </a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li id="menu_index"><a href="index.php"><div>Inicio</div><span>¡Comenzemos!</span></a>
								
							</li>
                            
                            <li id="menu_about" <?php
                                /*
                                if(strcmp($current, "about-me") == 0)
                                {
                                    echo 'class="current"';
                                }
                                */
                                if(CURRENT_PAGE == 'about-me')
                                {
                                    echo 'class="current"';
                                }
                                
                                
                                ?>><a href="about_me.php"><div>Sobre mí</div><span>¡Comenzemos!</span></a>
								
							</li>
                            
                            <li id="menu_portfolio" <?php
                                
                                if(CURRENT_PAGE == 'portfolio')
                                {
                                    echo 'class="current"';
                                }
                                
                                ?>><a href="portfolio.php"><div>Portfolio</div><span>Mis trabajos</span></a>
								
							</li>
                            
                            <li <?php
                                
                                if(CURRENT_PAGE == 'contact')
                                {
                                    echo 'class="current"';
                                }
                                
                                ?>><a href="contact.php" ><div>Contactar</div><span>Escríbeme algo</span></a>
								
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

				</div>

			</div>

		</header>