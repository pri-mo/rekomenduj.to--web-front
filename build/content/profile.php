<section class="layout--base layout__header">

  <!-- NOTE User view -->
  <div class="profile__photoedit">
    <div class="profile__pic-container">
      <?php if( isset($userPhoto) && ($userPhoto!=null) ) { ?>
      <img src="/assets/images/spoof-profile-pic.jpg" alt="" class="image--cover profile__uploaded">
      <?php } else { ?>
      <div class="profile__icon" data-icon="h"></div>
      <?php } ?>
    </div>
  </div>
  <h2 class="profile__welcome">Cześć Przemek</h2>
</section>

<?php if( isset($tasks) && ($tasks!=null) ) { ?>

  <section class="layout--card paint--comp profile__focus-box">
    <div class="focus--new-user">
      Twoje pierwsze kroki
      <ul class="focus__tasks">
        <?php if( !$userPhoto ) { ?>
          <li data-complete><a href=""><span data-icon="y"></span>Aktywuj konto</a></li>
        <?php } ?>
        <li <?php echo $userPhoto==true ? 'data-complete' : '' ?>><a href="profile-with-photo.php"><span data-icon="y"></span>Dodaj swoje zdjęcie</a></li>
        <li><a href="profile-edit.php"><span data-icon="y"></span>Dodaj swoje społeczności</a></li>
        <li><a href="profile-empty.php"><span data-icon="y"></span>Wypełnij ankietę</a></li>
      </ul>
    </div>
  </section>

<?php } ?>

<?php
if( isset($campInvite) && ($campInvite!=null) ) {
?>

  <section class="layout--card-3 profile__focus-box">
    <div class="focus--new-campaign" data-label="Zapraszamy Cię do kampanii...">
        <img src="/assets/images/backs/ph17.jpg" alt="" class="image--cover">
        <span class="new-campaign__name">Kocham gotować</span>
        <a href="#a" class="button">Poznaj szczegóły</a>
      </a>
    </div>
  </section>

<?php }

if( isset($contentList) && ($contentList!=null) ) {
?>

<section class="layout--base content-list profile__poll-list">
  <div class="list-sizer"></div>
  <a href="#aaa" class="list-item list-item--promo" data-label="Promocja" data-index="1"><img src="assets/images/mkino.jpg" alt="" class="image--cover"><span class="list-item__name">Bilety na dowolny seans w Multikinie</span></a>
  <a href="#aaa" class="list-item list-item--promo" data-label="Do końca zostało 16h" data-index="2"><img src="assets/images/costa.jpg" alt="" class="image--cover"><span class="list-item__name">Poranek z Costa Coffee</span></a>
  <div class="list-item list-item--promo list-item--doublesided">
    <div class="doublesided__flipper">
      <a href="#aaa" class="doublesided__side-a" data-label="Promocja" data-index="3"><img src="/assets/images/backs/ph16.jpg" alt="" class="image--cover"><span class="list-item__name">Ogoleni z BaByliss</span></a>
      <a href="#aaa" class="doublesided__side-b"><span class="list-item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit culpa repellendus quia nesciunt est pariatur amet suscipit perferendis, rerum cumque ipsa, vitae earum ea facere nisi eaque sed possimus.</span></a>
    </div>
  </div>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="4"><span class="list-item__name">Twoje śniadanie</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="5"><img src="/assets/images/backs/ph6.jpg" alt="" class="image--cover"><span class="list-item__name">Nowoczesne technologie</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="6"><span class="list-item__name">Jak korzystasz z&nbsp;urządzeń mobilnych</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="7"><span class="list-item__name">Twoje śniadanie</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="8"><img src="/assets/images/backs/ph7.jpg" alt="" class="image--cover"><span class="list-item__name">Nowoczesne technologie</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="9"><span class="list-item__name">Jak korzystasz z&nbsp;urządzeń mobilnych</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="10"><img src="/assets/images/backs/ph8.jpg" alt="" class="image--cover"><span class="list-item__name">Twoje śniadanie</span></a>
  <a href="#aaa" class="list-item list-item--poll" data-label="Opowiedz nam o..." data-index="11"><span class="list-item__name">Nowoczesne technologie</span></a>
</section>

<?php } else { ?>

  <section class="layout--base profile__focus-box">
    <div class="focus--no-items" data-label="Puchar dla Ciebie">
        <!-- <img src="/assets/images/backs/ph12.jpg" alt="" class="image--cover"> -->
        <span class="focus__name">Chwilowo nie mamy więcej dobroci dla Ciebie, wyłącznie uśmiech. Wróć tu za jakiś czas...</span>
      </a>
    </div>
  </section>

<?php } ?>
