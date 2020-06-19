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

    <div class="page__title"><p>Events</p></div>

        <section class="filter">
        <h3 class="filter__title">Filter</h3>
        <form action="index.php" method="get" class="filter-form">
            <input type="hidden" name="page" value="events">
        <label class="filter__label
        <?php
            if(empty($_GET['kind'])){
                echo ' filter__label--active';
            };
            if(!empty($_GET['kind'])){
                if($_GET['kind'] == 'all'){
                  echo ' filter__label--active';
                }
              };
          ?>
        " for="all">
          <input class="filter__input hidden" type="radio" id="all" name="kind" value="all"
          <?php
            if(empty($_GET['kind'])){
                echo ' checked';
            };
            if(!empty($_GET['kind'])){
                if($_GET['kind'] == 'all'){
                  echo ' checked';
                }
              };
          ?>
          >
          <span>all</span>
      </label>
      <?php foreach($kind as $kind): ?>
      <label class="filter__label marginleft
      <?php
            if(!empty($_GET['kind'])){
              if($_GET['kind'] == $kind['id']){
                echo ' filter__label--active';
              }
            }
          ?>
      " for="<?php echo $kind['id'] ?>">
        <input class="filter__input hidden" type="radio" id="<?php echo $kind['id'] ?>" name="kind" value="<?php echo $kind['id'] ?>"
        <?php
            if(!empty($_GET['kind'])){
              if($_GET['kind'] == $kind['id']){
                echo ' checked';
              }
            }
          ?>
        >
        <span><?php echo $kind['name'] ?></span>
      </label>
      <?php endforeach; ?>
      <input type="submit" class="filter__submit" value="filter">
        </form>
      </section>
  
        <section class="events">
            <h2 class="hidden">Events</h2>
            <div class="events__container">
            <?php foreach($events as $event): ?>
            <article>
                <h3 class="hidden"><?php echo $event['title']; ?></h3>
                
                <ul class="event 
                <?php 
                    if($event['kind']=='1'){
                        echo 'pinkevent';
                    } else if($event['kind']=='2'){
                        echo 'limeevent';
                    } else if($event['kind']=='3'){
                        echo 'greyevent';
                    };
                    ?>
                ">
                    <li class="event__date"><?php echo strftime("%a %e %b", strtotime($event['date'])); ?></li>
                    <li class="event__time"><?php echo strftime("%H:%M", strtotime($event['time'])); ?></li>
                    <li class="event__title"><?php echo $event['title']; ?></li>
                    <li class="event__description"><?php echo $event['desc_short']; ?> <a class="
                    <?php 
                    if($event['kind']=='1'){
                        echo 'lime';
                    } else if($event['kind']=='2'){
                        echo 'pink';
                    } else if($event['kind']=='3'){
                        echo 'lime';
                    };
                    ?>
                    " href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">+ Read More</a></li>
                    <li class="event__kind">
                    <?php 
                    if($event['kind']=='1'){
                        echo 'Training session';
                    } else if($event['kind']=='2'){
                        echo 'How-to session';
                    } else if($event['kind']=='3'){
                        echo 'Fundraiser';
                    };
                    ?>
                    </li>
                    <li class="event__image"><img src="assets/img/<?php echo $event['image']; ?>" alt=""></li>
                </ul>
            </article>
            <?php endforeach; ?>
        </div>
        </section>
    </main>

    