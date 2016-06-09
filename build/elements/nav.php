<header>
  <nav class="nav__mainMenu">
    <ul>
      <li class="nav__position"><a href="profile-with-photo.php" class="rg-home nav__link">Moje Reko</a></li>
      <li class="nav__position"><a href="#" class="rg-campaign nav__link">Kampanie i promocje</a></li>
      <li class="nav__position"><a href="#" class="rg-diary nav__link">Pamiętnik kampanii</a></li>
      <li class="nav__position"><a href="ankiety.php" class="rg-poll nav__link">Ankiety</a></li>
      <li class="nav__position"><a href="profile-edit.php" class="rg-user nav__link">Moje dane</a></li>
      <li class="nav__spacer"></li>
      <li class="nav__position"><a href="#" class="rg-logo nav__link light">Rekomenduj.to</a></li>
      <li class="nav__position"><a href="#" class="rg-news nav__link light">Aktualności</a></li>
      <li class="nav__position"><a href="#" class="rg-help nav__link light">Pomoc</a></li>
      <li class="nav__position"><a href="#" class="rg-contact nav__link light">Kontakt</a></li>
      <li class="nav__spacer"></li>
      <li class="nav__account">
        <div class="nav__username"><a href="/" onclick="localStorage.clear()" class="nav__link" data-username="Przemysław Trepka">Wyloguj mnie</a></div>
        <div class="nav__avatar"><a href="profile-edit.php" class="nav__link--avatar"><img src="https://pbs.twimg.com/profile_images/663683739508084736/N-9RoVha_bigger.jpg" alt=""></a></div>
      </li>
    </ul>
  </nav>
  <div class="nav--primary">
    <div class="nav__menuTrigger ripple" tabindex="0" id="triggerMenu"><div class="helper__navCubeCanvas">
      <div class="nav__iconCube">
        <div class="nav__icon--menuOpen" data-icon="a"></div>
        <div class="nav__icon--menuClose" data-icon="b"></div>
      </div>
    </div></div>
    <div class="nav__icon--logo" data-icon="A" tabindex="0" id="triggerLogo"></div>
    <div class="nav__icon--inbox  inbox--notify ripple" data-icon="M" tabindex="0" id="triggerInbox"></div>
  </div>
  <?php
  if (strpos($tagsNav, 'nav--double') !== false) {
    $locationName = 'Johny Walker\'s Whiskey Honey';
    include 'elements/nav-secondary.php';
  }
  ?>
</header>
