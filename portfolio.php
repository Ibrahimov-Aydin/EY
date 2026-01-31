<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/styles.css">

	<title>Портфолио</title>
</head>

<body>
	<div class="wrapper">
		<?php include './partials/header.php'; ?>
		<!-- Включение шапки -->
		<main class="page page_inner">
			<nav class="breadcrubs">
				<div class="breadcrubs__container">
					<ul class="breadcrubs__list">
						<li><a href="index.php">Главная</a></li>
						<li>/</li>
						<li>Портфолио</li>
					</ul>
				</div>
			</nav>
			<section class="portfolio">
				<div class="portfolio__container">
					<h1 class="portfolio__title">Портфолио</h1>
					<div class="portfolio__actions">
						<button class="active" data-filter="home">Жилье</button>
						<button data-filter="commercial">Коммерческие объекты</button>
					</div>

					<div class="portfolio__items">
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/01.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Арабеска, 2 - комнатная квартира , г. Москва</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают
									чрезвычайно интересные особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>

							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/02.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Бриз, 1 - комнатная квартира , г. Москва</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
								<p>
									В своём стремлении повысить качество жизни, они забывают, что начало повседневной работы по
									формированию позиции
									представляет собой интересный эксперимент проверки как самодостаточных, так и внешне
									зависимых концептуальных решений.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/03.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Дом в Ольховне “Территория обитания”</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
								<p>
									В своём стремлении повысить качество жизни, они забывают, что начало повседневной работы по
									формированию позиции
									представляет собой интересный эксперимент проверки как самодостаточных, так и внешне
									зависимых концептуальных решений.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/04.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Квартал красоты. Центр эстетической медицины г.
								Липецк</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/05.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Латте с голубым, 3 - комнатная квартира , г.
								Липецк</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
								<p>
									В своём стремлении повысить качество жизни, они забывают, что начало повседневной работы по
									формированию позиции
									представляет собой интересный эксперимент проверки как самодостаточных, так и внешне
									зависимых концептуальных решений.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/06.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Коттедж шоколад, Липецкая область</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/08.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Офис Старый город , г. Липецк</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
								<p>
									В своём стремлении повысить качество жизни, они забывают, что начало повседневной работы по
									формированию позиции
									представляет собой интересный эксперимент проверки как самодостаточных, так и внешне
									зависимых концептуальных решений.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/06.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Коттедж шоколад, Липецкая область</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="commercial" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/08.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Офис Старый город , г. Липецк</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
								<p>
									В своём стремлении повысить качество жизни, они забывают, что начало повседневной работы по
									формированию позиции
									представляет собой интересный эксперимент проверки как самодостаточных, так и внешне
									зависимых концептуальных решений.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg" href="#"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a href="#" data-title="Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
						<div data-category="home" class="portfolio__item">
							<a href="project.php" class="portfolio__image">
								<img src="images/portfolio/07.jpg" alt="image">
							</a>
							<a href="project.php" class="portfolio__subtitle">Мокко-мусс, 3 - комнатная квартира , ЖК
								Атмосфера</a>
							<div class="portfolio__text-block">
								<p>
									Как уже неоднократно упомянуто, интерактивные прототипы освещают чрезвычайно интересные
									особенности картины в целом,
									однако конкретные выводы, разумеется, разоблачены. Мы вынуждены отталкиваться от того, что
									консультация с широким
									активом позволяет выполнить важные задания по разработке форм воздействия.
								</p>
							</div>
							<a href="#" data-title=" Арабеска, 2 - комнатная квартира , г. Москва"
								data-images="images/portfolio/01.jpg,images/portfolio/02.jpg,images/portfolio/03.jpg"
								class="portfolio__button">
								<span>Смотреть фото</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.8571 3.93346C20.0476 3.74294 20.0476 3.43409 19.8571 3.24358L16.7528 0.139213C16.5622 -0.051287 16.2534 -0.051287 16.0629 0.139213C15.8724 0.329712 15.8724 0.638573 16.0629 0.829073L18.8223 3.5885L16.0629 6.34794C15.8724 6.53846 15.8724 6.84731 16.0629 7.03782C16.2534 7.22831 16.5622 7.22831 16.7528 7.03782L19.8571 3.93346ZM0 4.07631H19.5122V3.1007H0V4.07631Z"
										fill="#413C3A" />
								</svg>
							</a>
						</div>
					</div>
					<div class="portfolio__cta">
						<button class="showmore">Показать больше</button>
					</div>
				</div>
			</section>
		</main>
		<?php include './partials/footer.php'; ?>
		<!-- Включение подвала -->

	</div>


	<div class="modal micromodal-slide" id="project-modal" aria-hidden="true">
		<div class="modal__overlay" tabindex="-1" data-micromodal-close>
			<div class="modal__outer-wrapper" role="dialog" aria-modal="true" aria-labelledby="project-modal-title">
				<header class="modal__header">
					<h2 class="modal__title" id="project-modal-title"></h2>
					<button class="modal__close" aria-label="Close" data-micromodal-close>
						<img src="images/icon/close.svg" alt="icon: close">
					</button>
				</header>

				<main class="modal__content" id="project-modal-content">
					<div class="modal-gallery" data-gallery></div>
				</main>
			</div>
		</div>
	</div>







	<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			// init micromodal
			MicroModal.init({
				disableScroll: true,
				awaitOpenAnimation: false,
				awaitCloseAnimation: false,
			});

			const modalId = 'project-modal';
			const modalTitle = document.getElementById('project-modal-title');
			const gallery = document.querySelector('#project-modal [data-gallery]');

			document.addEventListener('click', (e) => {
				const btn = e.target.closest('.portfolio__button');
				if (!btn) return;

				e.preventDefault(); // ⛔️ блокируем переход по href="#"

				// заголовок
				modalTitle.textContent = btn.dataset.title || '';

				// изображения
				const images = (btn.dataset.images || '')
					.split(',')
					.map(s => s.trim())
					.filter(Boolean);

				gallery.innerHTML = images
					.map(src => `<img src="${src}" alt="">`)
					.join('');

				// открываем модалку
				MicroModal.show(modalId);
			});
		});
	</script>







	<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>