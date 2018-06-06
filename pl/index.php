<?php require "question.php" ?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Artur Mostowiak portfolio</title>
  <meta name="keywords" content="artur, mostowiak, portfolio, webdev">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Portfolio, witryny internetowe wykonane przez Artura Mostowiaka, informacje i kontakt">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Cybertron">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/styles.css">
  <link href='http://fonts.googleapis.com/css?family=Play&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
  <nav class="navigation">
     <ul class="navigation-list">
	   <li class="navigation-list-element"><img alt="" class="navigation-icon" src="/img/about.jpg"/></li>
	   <li class="navigation-list-element"><a class="navigation-link" href="/pl/#about">O mnie</a></li>
	   <li class="navigation-list-element"><img alt="" class="navigation-icon" src="/img/skills.jpg"/></li>
	   <li><a class="navigation-link" href="/pl/#skills">Umiejętności</a></li>
	   <li class="navigation-list-element"><img alt="" class="navigation-icon" src="/img/projects.jpg"/></li>
	   <li><a class="navigation-link" href="/pl/#projects">Projekty</a></li>
	   <li class="navigation-list-element"><img alt="" class="navigation-icon" src="/img/contact-icon.jpg"/></li>
	   <li><a class="navigation-link" href="/pl/#contact">Kontakt</a></li>
	 </ul>
  </nav>
  
  <main>
  
  <section id="about"  class="about-me-background" >
   <div class="about-me-information">
   <h2  class="header">Pokrótce o mnie</h2>
	  <span class="about-me-text">Nazywam się Artur Mostowiak(tak, tak samo jak w serialu), urodziłem się w Gdyni w 1987 roku. Aktualnie mieszkam w Pucku. Szeroko rozumianą komputerową
	  twórczością interesuję się od 18-ego roku życia. Przez ubiegłe lata wypróbowałem różne technologie i języki programowania. Ostatecznie doszedłem do wniosku, iż
	  najbardziej interesujące i zyskowne są technologie internetowe. Wykonałem parę zleceń na prośbę znajomych(wszystkie strony są w pełni responsywne) i chciałbym podjąć pracę jako web-developer. Zaliczam się do samouków, nigdy nie korzystałem z jakichkolwiek kursów. Jestem otwarty na propozycje, może być zarówno
	  front-end jak i back-end. Jeżeli potrzebujesz witryny internetowej i chciałbyś abym ją dla Ciebie stworzył - śmiało możesz się ze mną kontaktować.
	  </span>
	  
	  <h2 class="header">Zainteresowania</h2>
	  <ul class="interest-container">
	   <li class="interest-item poker">Poker</li>
	   <li class="interest-item diving">Nurkowanie</li>
	   <li class="interest-item space">Kosmos</li>
	   <li class="interest-item science">Nauka i technologia</li>
	  </ul>
   </div>
  
  </section>
 <h2 id="skills" class="coupling-header" >Umiejętności</h2>
 <section class="skills-background"  > 
   <div class="skills-list">
	  <div class="about-skills-text">Posiadam doświadczenie z niżej wymienionymi
	  technologiami, oprócz tego biegle posługuję się językiem angielskim w mowie jak i w piśmie. Oczywiście na poniższej liście stopniowo przybywa pozycji.</div>
	    <ul class="skills-container">
	        <li><img alt="html - język opisujący zawartość strony internetowej" src="/img/html.svg" class="skill" /></li>
		    <li><img alt="css - język opisujący wygląd strony internetowej" src="/img/css.svg" class="skill" /></li>
		    <li><img alt="JavaScript - język programowania" src="/img/js.svg" class="skill" /></li>
			<li><img alt="sass - preprocesor css, ułatwia pracę z arkuszami stylów" src="/img/sass.svg" class="skill" /></li>
			<li><img alt="php - język programowania używany po stronie serwera" src="/img/php.svg" class="skill" /></li>
			<li><img alt="mysql - język umożliwiający operacje na bazie danych" src="/img/mysql.svg" class="skill mysql" /></li>
			<li><img alt="jquery - biblioteka programistyczna napisana w języku javascript, przyspiesza pracę z tym językiem" src="/img/jquery.svg" class="skill" /></li>
			<li><img alt="ajax - technologia umożliwiająca odświeżanie informacji na stronie bez konieczności przeładowania jej" src="/img/ajax.svg" class="skill" /></li>
			<li><img alt="rwd - zbiór technik umożliwiających tworzenie stron które poprawnie się wyświetlają w każdej rodzielczości" src="/img/rwd.png" class="skill" /></li>
	   </ul>
   </div>
 </section>
 
    <h2 id="projects" class="coupling-header" >Projekty</h2>
   <section  class="projects-background" >
   
	  <img id="rack" src="/img/rack.png" class="rack-decoration" />
	    <div class="projects-container">
		<div class="information-about-projects">Witryny stworzone na życzenie klientów(wszystkie w pełni responsywne). Po najechaniu kursorem na konkretną pozycję wyświetlą się szczegóły.</div>
		  <ul class="projects-list">
		    <li class="project porn-empire">
			  <div class="pop-up-info">
			    <div class="project-description">Filmy dla dorosłych wraz z wyszukiwarką</div>
				  <ul class="used-technologies-list" > 
				    <li><img alt="html - język opisujący zawartość strony internetowej" src="/img/html.svg" class="used-technology" /></li>
				    <li><img alt="css - język opisujący wygląd strony internetowej" src="/img/css.svg" class="used-technology" /></li>
					<li><img alt="JavaScript - język programowania" src="/img/js.svg" class="used-technology" /></li>
					<li><img alt="jquery - biblioteka programistyczna napisana w języku javascript, przyspiesza pracę z tym językiem" src="/img/jquery.svg" class="used-technology" /></li>
					<li><img alt="ajax - technologia umożliwiająca odświeżanie informacji na stronie bez konieczności przeładowania jej" src="/img/ajax.svg" class="used-technology" /></li>
					<li><img alt="php - język programowania używany po stronie serwera" src="/img/php.svg" class="used-technology" /></li>
					<li><img alt="mysql - język umożliwiający operacje na bazie danych" src="/img/mysql.svg" class="used-technology" /></li>
				  </ul>
				    <div class="links-container">
					  <a class="created-website-link" href="http://www.porno-imperium.pl">Na żywo</a>
					  <a class="created-website-link" href="https://github.com/Mostek87/porno-imperium/">Github</a>
					</div>
			  </div>
			</li>
			<li class="project nord-team-service">
			 Nord Team Service
			   <div class="pop-up-info">
			    <div class="project-description">Strona firmy zajmującej się kotłami grzewczymi</div>
				  <ul class="used-technologies-list" > 
				    <li><img alt="html - język opisujący zawartość strony internetowej" src="/img/html.svg" class="used-technology" /></li>
				    <li><img alt="css - język opisujący wygląd strony internetowej" src="/img/css.svg" class="used-technology" /></li>
					<li><img alt="JavaScript - język programowania" src="/img/js.svg" class="used-technology" /></li>
					<li><img alt="jquery - biblioteka programistyczna napisana w języku javascript, przyspiesza pracę z tym językiem" src="/img/jquery.svg" class="used-technology" /></li>
					<li><img alt="php - język programowania używany po stronie serwera" src="/img/php.svg" class="used-technology" /></li>
				  </ul>
				    <div class="links-container">
					  <a class="created-website-link" href="http://www.nordteamservice.pl">Live</a>
					  <a class="created-website-link" href="https://github.com/Mostek87/nordteamservice">Github</a>
					</div>
			  </div>
			</li>
			<li class="project portfolio">
			  Portfolio
			  <div class="pop-up-info">
			    <div class="project-description">Strona, którą właśnie przeglądasz</div>
				  <ul class="used-technologies-list" > 
				    <li><img alt="html - język opisujący zawartość strony internetowej" src="/img/html.svg" class="used-technology" /></li>
				    <li><img alt="css - język opisujący wygląd strony internetowej" src="/img/css.svg" class="used-technology" /></li>
					<li><img alt="JavaScript - język programowania" src="/img/js.svg" class="used-technology" /></li>
					<li><img alt="jquery - biblioteka programistyczna napisana w języku javascript, przyspiesza pracę z tym językiem" src="/img/jquery.svg" class="used-technology" /></li>
					<li><img alt="php - język programowania używany po stronie serwera" src="/img/php.svg" class="used-technology" /></li>
				  </ul>
				    <div class="links-container">
					  <a class="created-website-link" href="http://www.portfolio.pl">Na żywo</a>
					  <a class="created-website-link" href="">Github</a>
					</div>
			  </div>
			</li>
		  </ul>
		</div>
	  
   </section>
   
    <h2 id="contact" class="coupling-header" >Kontakt</h2>
   <section class="contact-section" >
    <div class="contact-information">Jeżeli chcesz się ze mną skontaktować, możesz użyć formularza lub wysłać wiadomość na adres e-mail poniżej</div>
	<div class="contact-information">
	   <a class="email-adress" href="mailto:cybertron@poczta.fm">cybertron@poczta.fm</a>
	</div>
    
	<form method="POST" action="send-message.php" class="contact-form">
	  <label class="form-label" for="user-contact-data">E-mail lub inny namiar(opcjonalnie)</label>
	  <input maxlength="30" class="user-contact-data" name="user-adress" type="text" id="user-contact-data" />
	   <label class="form-label" for="anti-spam-answear">Odpowiedz na pytanie antyspamowe : <?php echo $question; ?>?</label>
	  <input class="control-question" name="answear" type="text" id="anti-spam-answear" required />
	  <label class="form-label" for="text-message">Treść wiadomości</label>
	  <textarea required name="message-body" id="text-message" class="user-message"></textarea>
	  <div class="controls">
	     <input type="submit" class="submit-button" name="wyślij"/>
	     <input type="reset" class="reset-button" name="resetuj"/>
	 </div>
   </form>	
   
   </section>
</main>
<footer class="cybertron-footer">
 &copy; 2018 Cybertron
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/rack.js"></script>

</body>