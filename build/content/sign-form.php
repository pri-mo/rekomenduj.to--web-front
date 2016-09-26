<section class="layout__container paint--brand">

  <div class="sign-form">

    <?php if (!$passchange) { ?>
    <div class="input">
      <input tabindex name="email" id="email" type="email" autocomplete="email" required spellcheck="false" placeholder="email@domena.pl">
      <label for="email"
      data-focused="Mój email"
      data-original="Podaj swój e-mail"
      data-invalid="Podaj poprawny e-mail">Podaj swój e-mail</label>
    </div>
    <?php } ?>

    <?php if (!$passremind && !$passchange) { ?>
    <div class="input input--password">
      <input tabindex name="pass" type="password" id="password" required autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="np. thanks 4 all the fish">
      <label for="password"
      data-focused="Moje hasło"
      data-original="Podaj swoje hasło">Podaj swoje hasło</label>

      <div class="input__show-password" id="showPass" data-label="Pokaż hasło"></div>
    </div>
    <?php } ?>

    <?php if ($passchange) { ?>
    <div class="input input--password">
      <input tabindex name="pass" type="password" id="password" required autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="np. thanks 4 all the fish">
      <label for="password"
      data-focused="Nowe hasło"
      data-original="Podaj nowe hasło">Podaj nowe hasło</label>

      <div class="input__show-password" id="showPass" data-label-show="Pokaż hasło" data-label-hide="Ukryj hasło"></div>
    </div>

    <div class="input">
      <input tabindex
      name="password-repeat" id="password-repeat" type="password"
      autocomplete="family-name"
      required
      spellcheck="true"
      placeholder="Podaj hasło ponownie">
      <label for="password-repeat"
      data-focused="{{zwrotka_poprawności}}"
      data-original="Podaj hasło ponownie"
      data-invalid="To pole jest wymagane">Podaj hasło ponownie</label>
    </div>
    <?php } ?>

    <?php if ($signup) { ?>
    <div class="input input--check">
      <label for="rules" data-label="Zaakceptuj regulamin">
        <input tabindex name="rules" id="rules" type="checkbox" required>
        <span class="input--check__icon"></span>
        Znam oraz akceptuję warunki i zasady regulaminu strony oraz politykę prywatności. <span class="more"></span>Wyrażam zgodę na przetwarzanie moich danych osobowych przez Buzz Media, al. Wilanowska 81 lok. 24, 02-765 Warszawa (Administrator), w celach związanych z korzystaniem z serwisu www.rekomenduj.to oraz z udziałem w kampaniach wskazanych w regulaminie serwisu Rekomenduj.to, zgodnie z warunkami określonymi w ustawie z dnia 29 sierpnia 1997 roku o ochronie danych osobowych. Wyrażam także zgodę na wysyłanie drogą elektroniczną na wskazany przeze mnie adres e-mail przez Administratora informacji handlowych dotyczących działalności serwisu oraz informacji o usługach i produktach klientów Administratora. Zgody udzielam dobrowolnie. Przysługuje mi prawo do jej odwołania w każdym momencie.
      </label>
    </div>
    <?php } ?>

    <div class="layout__button-bar space--m">
      <?php if ($signup) { ?>
      <a href="#" onclick="this.classList.toggle('loading')" class="button button--cta force--cta button--with-loader" name="button">Zarejestruj mnie</a>
      <?php } elseif ($passremind) { ?>
      <button onclick="this.classList.toggle('loading')" class="button--with-loader" type="button" name="button">Nie pamiętam hasła</button>
      <?php } elseif ($passchange) { ?>
      <button onclick="this.classList.toggle('loading')" class="button--with-loader" type="button" name="button">Zapisz nowe hasło</button>
      <?php } else { ?>
      <a href="step-intro.php" class="button button--with-loader" name="button">Zaloguj mnie</a>
      <?php } ?>
    </div>

    <div class="grid__wrapper grid--no-gutter layout__button-bar button-bar--divided space--l flow--center">
      <?php if ($passremind || $passchange) { ?>
      <div class="grid__item grid__xs-span--6 grid__span--6"><a href="sign-in.php" class="link--spare">Logowanie</a></div>
      <?php } else { ?>
      <div class="grid__item grid__xs-span--6 grid__span--6"><a href="password.php" class="link--spare">Hasło</a></div>
      <?php } ?>

      <?php if ($signup) { ?>
      <div class="grid__item grid__xs-span--6 grid__span--6"><a href="sign-in.php" class="link--spare">Logowanie</a></div>
      <?php } else { ?>
      <div class="grid__item grid__xs-span--6 grid__span--6"><a href="sign-up.php" class="link--spare">Rejestracja</a></div>
      <?php } ?>

    </div>

  </div>

</section>
