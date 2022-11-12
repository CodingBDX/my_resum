<?php require('./variables.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CV de Anto</title>
		<link rel="stylesheet" href="assets\css\style.css">
		<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	</head>
	<body>

		<header>
			<nav class="nav bd-container">
				<a href="" class="nav_logo">Antony Charier</a>
				<div class="nav_menu" id="nav-menu">
					<ul class="nav_list">
						<li class="nav_item">
							<a href="" id="home" class="nav_link">
								<i class='bx bx-home-heart active-link'></i>Home
							</a>
						</li>
						<li class="nav_item">
							<a href="" id="profile" class="nav_link">
								<i class='bx bx-user-check'></i>Profile

							</a>
						</li>

						<li class="nav_item">
							<a href="" id="education" class="nav_link">
								<i class="bx bx-book-heart"></i>Education

							</a>
						</li>

						<li class="nav_item">
							<a href="" id="skill" class="nav_link">
								<i class='bx bx-receipt'></i>Skills

							</a>
						</li>

						<li class="nav_item">
							<a href="" id="experiences" class="nav_link">
								<i class='bx bx-briefcase'></i>Experiences

							</a>
						</li>

						<li class="nav_item">
							<a href="" id="certificates" class="nav_link">
								<i class='bx bx-award'></i>Certificates

							</a>
						</li>

						<li class="nav_item">

							<a href="" id="references" class="nav_link">
								<i class='bx bx-link-external'></i>References

							</a>
						</li>


					</ul>
				</div>

				<div class="nav_toggle" id="nav-toggle">
					<i class='bx bx-grid-alt'></i>

				</div>
			</nav>
		</header>

		<main>
			<div class="resume">
				<div class="left_resume">


					<section class="home" id="home">
						<img src="./assets/antony_charier.png" alt="">


						<h1>Antony
							<b>Charier</b>
						</h1>
						<h3>developpeur web</h3>
						<div class="pdf">
							<a href="./assets/antony_cv_alternance_web_developer.pdf">Resum PDF</a>
						</div>


						<address>
							<div class="adress">
								<i class='bx bx-map-pin'></i>
								65 Avenue du Truc, Apt42, 33700 merignac
							</div>
							<div class="adress">

								<i class='bx bx-envelope'></i>
								antonycharier@gmail.com
							</div>
							<div class="adress">

								<i class='bx bx-phone-call'></i>

								0695358137
							</div>


						</address>

					</section>
					<section class="social">
						<div class="social_link">
							<a href="https://github.com/CodingBDX">
								<i class='bx bxl-github'></i>

								@codingbdx
							</a>

						</div>

						<div class="social_link">
							<a href="https://www.linkedin.com/in/codingbdx/">
								<i class='bx bxl-linkedin-square'></i>

								@codingbdx
							</a>

						</div>
					</section>
					<section class="profil">
						<h2 class="profil-title">Profile</h2>
						<p>Je suis à la recherche d'une alternance mais j'etudie toutes les propositions</p>
					</section>


				</div>

				<div class="right_resume">

					<section class="skills">
						<a href="#skills"></a>
						<h2 class="skills-title">Skills</h2>

						<div class="skills_content">
							<div class="skills_link">

							<?php

function getSkills($arrays)
{
    if (isset($_GET['lang-fr'])) {
        echo ''.
             implode('<p></p>', $arrays['lang-fr']).
             '';
    } elseif (isset($_GET['lang-en'])) {
        echo '<ul><li>'.
                     implode('<li></li>', $arrays['lang-en']).
                     '</li></ul>';
    } else {
        echo ''.
implode('<p></p>', $arrays['lang-fr']).
             '';
    }
}

getSkills($skills);
?>
			

							</div>


						</div>

					</section>

					<div class="experience-education">
						<section class="experience">
							<a href="#experiences"></a>
							<h2 class="experience-title">
								experiences
							</h2>
					

<?php

if (isset($_GET['lang-fr'])) {
    $experience = $experiences['lang-fr'];
} elseif (isset($_GET['lang-en'])) {
    $experience = $experiences['lang-en'];
} else {
    $experience = $experiences['lang-fr'];

    // or you could set a default here
}

foreach ($experience as $arrayIn => $other) {
    echo	'<div class="experience_content">';
							echo	'<div class="experience_time">';
							echo		'<span class="experience_rounded"></span>';
							echo		'<span class="experience_line"></span>';
							echo	'</div>';
							echo	'<div class="experience_data">';
    foreach ($other as $key => $value) {
        switch ($key) {
            case 'address' === $key:
                echo '<div class="experience_title">'.$value.'</div>'.'</br>';

                break;

            case 'date' === $key:
                echo '<div class="experience_years">'.$value.'</div>'.'</br>';

                break;
 case 'description' === $key:
                echo '<div class="experience_years">'.$value.'</div>'.'</br>';

                break;

            case 'name' === $key:
                echo '<div class="experience_localisation">'.$value.'</div>'.'</br>';

                break;
        }
    }
    echo '</div></div>';
}

?>

						</section>

						<section class="education">
							<a href="#education"></a>
							<h2 class="education-title">
								education
							</h2>
							

<?php

if (isset($_GET['lang-fr'])) {
    $formation = $formations['lang-fr'];
} elseif (isset($_GET['lang-en'])) {
    $formation = $formations['lang-en'];
} else {
    $formation = $formations['lang-fr'];

    // or you could set a default here
}

foreach ($formation as $arrayIn => $other) {
    echo	'<div class="education_content">';
							echo	'<div class="education_time">';
							echo		'<span class="education_rounded"></span>';
							echo		'<span class="education_line"></span>';
							echo	'</div>';
							echo	'<div class="education_data">';
    foreach ($other as $key => $value) {
        switch ($key) {
            case 'Diplome' === $key:
                echo '<div class="education_title">'.$value.'</div>'.'</br>';

                break;

            case 'Date' === $key:
                echo '<div class="education_years">'.$value.'</div>'.'</br>';

                break;

            case 'Lieux' === $key:
                echo '<div class="education_localisation">'.$value.'</div>'.'</br>';

                break;
        }
    }
    echo '</div></div>';
}

?>

<a href="#certification"></a>
			<h2 class="certification-title">
						certification
					</h2>


					<div class="experience-education">
						<section class="certification">
							<div class="certification_content">


								<div class="certification_data">

							<?php

function getMessage($arrays)
{
        echo '<ul><li>'.

 implode('</li><li>', $arrays['certificats-one']).
             '</li></ul>';
    }


getMessage($certificats);
?>

								</div>
							</div>


						</section>

						<section class="certification">
							<div class="certification_content">


								<div class="certification_data">

								
							<?php

function getCertificats2($arrays)
{
        echo '<ul><li>'.

 implode('</li><li>', $arrays['certificats-two']).
             '</li></ul>';
    }


getCertificats2($certificats);
?>
								</div>
							</div>


						</section>

						
					</div>
					<section class="workon">
						<a href="#workon"></a>
						<h2 class="workon-title">Work on</h2>
						<div class="workon_grid">
							<div class="workon_link">
								<a href="https://github.com/CodingBDX">
									<i class='bx bxl-github'></i>

									<div class="counter" data-count="25">25</div>
									projets github

								</a>

							</div>

							<div class="workon_link">
								<a href="https://www.linkedin.com/in/codingbdx/">
									<i class='bx bxl-youtube'></i>
									<div class="counter" data-count="36">36</div>
									videos youtube


								</a>

							</div>
						</div>

					</section>


				</div>


			</div>
		</main>
		<script src="assets\js\script.js"></script>
	</body>
</html>
