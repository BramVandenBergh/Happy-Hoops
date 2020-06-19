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

    <main class="checkout">
      <h2 class="page__title page__title--checkoutpage">Tickets</h2>
    <div class="checkoutcontainer">
      <div class="checkoutcontainer__blockone">
        <img src="assets/img/eventdetail1.png" alt="">
      </div>
      <div class="checkoutcontainer__blocktwo">
        <section class="orderform">
                <h3 class="tickets__title">Order tickets for "<span class="pink"><?php echo $title['title_clean'] ?></span>"</h3>
                
                <form action="index.php?page=events" method="post" class="quote-form">

              <input type="hidden" name="action" value="insertOrder">
              <input type="hidden" name="eventid" value="<?php echo $_GET['id']; ?>">
              <div class="field-wrapper hidden">
                <label for="ticket_id">
                  <span class="input-label">Ticket ID: </span>
                  <span class="input-label"><?php echo htmlspecialchars($_GET['id'])?></span>
                </label>
                </div>
              <div class="field-wrapper">
                <label for="name">
                  <span class="input-label">Name</span>
                  <input type="text" id="name"  placeholder="BRAM" name="name" class="input" value="<?php if(!empty($_POST['name'])){ echo $_POST['name'];} ?>" required  />
                </label>
              </div>
              <div class="field-wrapper">
                <label for="email">
                  <span class="input-label">Email</span>
                  <span class="error"><?php if(!empty($errors['email'])){ $errors['email'];} ?></span>
                  <input type="email"  placeholder="BRAM@GMAIL.COM" id="email" name="email" class="input" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" required  />
                </label>
                </div>
                
              <input type="submit" class="button" value="ORDER">
            </form>

              </section>
      </div>
    </div>

    </main>
    <script src="js/validate.js"></script>