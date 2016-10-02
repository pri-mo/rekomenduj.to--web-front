<header>
  <nav class="nav__main-menu">
    <ul>
      <li class="nav__position"><a href="profile-with-photo.php" class="rg-home nav__link">Moje Reko</a></li>
      <li class="nav__position"><a href="kampanie-i-promocje.php" class="rg-campaign nav__link">Kampanie i promocje</a></li>
      <li class="nav__position"><a href="diary.php" class="rg-diary nav__link">Pamiętnik kampanii</a></li>
      <li class="nav__position"><a href="ankiety.php" class="rg-poll nav__link">Ankiety</a></li>
      <li class="nav__position"><a href="profile-edit.php" class="rg-user nav__link">Dane profilu</a></li>
      <li class="nav__spacer"></li>
      <li class="nav__position"><a href="#" class="rg-logo nav__link light">Rekomenduj.to</a></li>
      <li class="nav__position"><a href="#" class="rg-news nav__link light">Aktualności</a></li>
      <li class="nav__position"><a href="#" class="rg-help nav__link light">Pomoc</a></li>
      <li class="nav__position"><a href="#" class="rg-info nav__link light">Zgłoś problem</a></li>
      <li class="nav__position"><a href="#" class="rg-contact nav__link light">Kontakt</a></li>
      <li class="nav__spacer"></li>
      <li class="nav__account">
        <div class="nav__username"><a href="/" onclick="localStorage.clear()" class="nav__link" data-username="Marta Niezwykła">Wyloguj mnie</a></div>
        <div class="nav__avatar"><a href="profile-edit.php" class="nav__link--avatar"><img src="assets/images/spoof-profile-pic.jpg" alt=""></a></div>
      </li>
      <li class="nav__spacer"></li>
      <li class="nav__position"><a href="regulamin.php" class="rg-stack nav__link nav__link--tiny light">Regulamin i prywatność</a></li>
    </ul>
  </nav>
  <div class="nav--primary">
    <div class="nav__menu-trigger ripple" tabindex="0" id="triggerMenu"><div class="helper__nav-cube-canvas">
      <div class="nav__icon-cube">
        <div class="nav__icon--menu-open" data-icon="a"></div>
        <div class="nav__icon--menu-close" data-icon="b"></div>
      </div>
    </div></div>
    <div class="nav__icon--logo" data-icon="A" tabindex="0" id="triggerLogo"></div>
    <a href="notifications.php" class="nav__icon--inbox  inbox--notify no-ripple" data-icon="M" tabindex="0" id="triggerInbox"></a>
    <!-- TODO if there is no Notifications -->
    <!-- <a href="" class="nav__icon--inbox no-ripple" data-icon="M" tabindex="0" id="triggerInbox"></a> -->
  </div>
  <?php
  if (strpos($tagsNav, 'nav--double') !== false) {
    $locationName = 'Johny Walker\'s Whiskey Honey';
    include 'components/nav-secondary.php';
  }
  ?>
</header>
