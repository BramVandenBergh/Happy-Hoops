<header class="header">

        <div class="pagetitle">
            <h1 class="hidden">Happy Hoops</h1>
        </div>

        <nav class="menu">
            <ul class="menu__items">
                <li><img src="assets/img/logo.svg" alt="" width="115" height="70"></li>
                <li class="menu__item"><a class="menu__link" href="index.php?page=index">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="index.php?page=about">About</a></li>
                <li class="menu__item"><a class="menu__link active" href="index.php?page=events"><span>Events</span></a></li>
                <li><img class="hidden" src="assets/img/logo.svg" alt=""></li>
            </ul>
        </nav>

    </header>
    <main>
        <section class="detailpage">
            <h2 class="page__title page__title--detailpage">Events</h2>
            <article class="detail__container">
            <h3 class="hidden"><?php echo $detail['title']; ?></h3>
            <img class="detail__image" src="assets/img/<?php echo $detail['image_detail']; ?>" alt="">
            <ul class="detail">
                <li class="detail__title"><?php echo $detail['title']; ?></li>
                <li class="detail__description"><?php echo $detail['desc_long']; ?></li>
                <li class="detail__tickets--title">Tickets</li>
                <li class="detail__tickets--text">Buy your tickets to attend this event.</li>
                <li><a class="detail__tickets--button" href="index.php?page=checkout&amp;id=<?php echo $detail['id']; ?>">Buy tickets</a></li>
            </ul>
            </article>
            
     
        </section>
    </main>