<section class="layout--base layout__header profile__welcome">
  <!-- NOTE Gdy jest zdjęcie -->
  <?php if( isset($userPhoto) && ($userPhoto!=null) ) { ?>
    <div class="profile__photo">
      <div class="profile__pic-container">
        <img src="/assets/images/spoof-profile-pic.jpg" alt="" class="image--cover profile__uploaded">
      </div>
      <div class="profile__controls">
        <a href="" class="button button--icon"><span data-icon="o"></span></a>
        <a href="" class="button button--icon"><span data-icon="k"></span></a>
      </div>
    </div>
    <?php } else { ?>
      <div class="profile__photo">
        <div class="profile__icon" data-icon="h"></div>
        <a href="" class="button">Dodaj swoje zdjęcie</a>
      </div>
      <?php } ?>

      <h2 class="profile__hi">Cześć <span id="welcomeName"></span></h2>
    </section>

    <section class="layout--base profile__focus-box">
      <div class="layout--card focus--social-reach">
        <div class="roll-out roll-out__container">
          <a href="" class="roll-out__trigger social-reach__add" id="triggerAddSocial">
            <span class="roll-out__value">
              <?php
              $arraySocialReach = [
              'sr-facebook',
              'sr-facebook-square',
              'sr-rss',
              'sr-twitter',
              'sr-globe',
              'sr-google-plus',
              'sr-google',
              'sr-get-pocket',
              'sr-google-plus-square',
              'sr-instagram',
              'sr-linkedin-square',
              'sr-medium',
              'sr-pinterest',
              'sr-pinterest-p',
              'sr-rss-square',
              'sr-spotify',
              'sr-tumblr',
              'sr-tumblr-square',
              'sr-twitch',
              'sr-twitter-square',
              'sr-vimeo',
              'sr-vimeo-square',
              'sr-vine',
              'sr-vk',
              'sr-wikipedia-w',
              'sr-yelp',
              'sr-youtube',
              'sr-youtube-play'];

              if ( isset($hasSocialReach) && ($hasSocialReach!=null) ) {
                foreach (array_rand($arraySocialReach, 3) as $srChannel) { ?>
                  <span class="social-reach__icon <?php echo $arraySocialReach[$srChannel] ?>"></span>
                  <?php
                }
              }
              ?>
              <span class="roll-out__name">Dodaj swoją społeczność</span>
              <span class="roll-out__status" data-icon="e"></span>
            </span>
          </a>
          <div class="roll-out__content">
            <a href="#" class="social-reach__add-channel"><span class="channel__icon sr-facebook"></span><span class="channel__name">Facebook</span></a>
            <a class="social-reach__add-channel"><span class="channel__icon sr-facebook-square"></span><span class="channel__name">Facebook Page Name</span></a>
            <a href="#" class="social-reach__add-channel"><span class="channel__icon sr-twitter"></span><span class="channel__name">Twitter</span></a>
            <a href="#" class="social-reach__add-channel"><span class="channel__icon sr-google-plus"></span><span class="channel__name">Google+</span></a>
            <a href="#" class="social-reach__add-channel"><span class="channel__icon sr-instagram"></span><span class="channel__name">Instagram</span></a>
            <a href="#" class="social-reach__add-channel"><span class="channel__icon sr-youtube-play"></span><span class="channel__name">Youtube</span></a>
          </div>
        </div>

        <?php
        if( isset($hasSocialReach) && ($hasSocialReach!=null) ) { ?>

          <div class="social-reach__stats">
            <div class="stats__cell"><span class="stats__val"><?php echo rand(500, 5000); ?></span><span class="stats__name">Społecznościowy zasięg</span></div>
            <div class="stats__cell"><span class="stats__val"><?php echo rand(3, 20); ?></span><span class="stats__name">Liczba kampanii</span></div>
            <div class="stats__cell"><span class="stats__val"><?php echo rand(30, 333); ?></span><span class="stats__name">Wypełnionych raportów</span></div>
          </div>

          <?php } else { ?>

            <div class="social-reach__stats">
              <div class="stats__cell"><span class="stats__val">0</span><span class="stats__name">Społecznościowy zasięg</span></div>
              <div class="stats__cell stats__cell--longform">Dodając społeczności (Facebook, Twitter itp.) zwiększasz swój zasięg. To z kolei wpływa pozytywnie na Twoje szanse uczestnictwa w naszych kampaniach.</div>
            </div>

            <?php } ?>

          </div>
        </section>

        <div class="layout__group">

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger social-reach__add">
              <span class="roll-out__icon" data-icon="h"></span><span class="roll-out__name">Kim jestem?</span><span class="roll-out__status" data-icon="e"></span>
            </a>

            <div class="roll-out__content">
              <div class="input">
                <input tabindex
                name="user-name" id="user-name" type="text"
                autocomplete="name"
                required
                spellcheck="true"
                placeholder="Jak masz na imię?">
                <label for="user-name"
                data-focused="Mam na imię"
                data-original="Jak masz na imię?"
                data-invalid="To pole jest wymagane.">Jak masz na imię?</label>
              </div>

              <div class="input">
                <input tabindex
                name="user-lastname" id="user-lastname" type="text"
                autocomplete="family-name"
                required
                spellcheck="true"
                placeholder="Jak masz na imię?">
                <label for="user-lastname"
                data-focused="Mam na nazwisko"
                data-original="Jak masz na nazwisko?"
                data-invalid="To pole jest wymagane.">Jak masz na nazwisko?</label>
              </div>

              <div class="input">
                <textarea tabindex name="user-bio" id="user-bio" spellcheck="true" placeholder="Ta historia jest o Tobie..."></textarea>
                <label for="user-bio"
                data-focused="Kilka słów o mnie"
                data-original="Kilka słów o Tobie..."
                data-invalid="Twoja odpowiedź jest dla nas ważna">Kim jesteś?</label>

                <div class="input__field"></div>
              </div>

              <div class="grid__wrapper">
                <div class="grid__item grid__span--6">
                  <div class="input input--date input--show-label">
                    <input tabindex
                    name="user-birthday" id="user-birthday" type="date" <?php echo 'max="' . date('Y-m-d', strtotime('-14 years')) . '"'; ?>
                    autocomplete="birthday"
                    required
                    spellcheck="true"
                    placeholder="Podaj datę urodzenia">
                    <label for="user-birthday"
                    data-focused="Moja data urodzenia"
                    data-original="Podaj datę urodzenia"
                    data-invalid="To pole jest wymagane.">Podaj datę urodzenia</label>
                  </div>
                </div>

                <div class="grid__item grid__span--6">
                  <div class="input input--select input--show-label">
                    <select name="user-gender" id="user-gender" required>
                      <option value="" selected disabled>Podaj płeć</option>
                      <option value="K">Kobieta</option>
                      <option value="M">Mężczyzna</option>
                    </select>
                    <label for="user-gender"
                    data-focused="Moja płeć"
                    data-original="Podaj swoją płeć"
                    data-invalid="To pole jest obowiązkowe">Podaj swoją płeć</label>
                  </div>
                </div>
              </div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>

            </div>
          </section>

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger social-reach__add">
              <span class="roll-out__icon" data-icon="C"></span><span class="roll-out__name">Kontakt ze mną</span><span class="roll-out__status" data-icon="e"></span>
            </a>
            <div class="roll-out__content">
              <div class="input">
                <input tabindex name="email" id="user-email" type="email" autocomplete="email" required spellcheck="false" value="hi@przemektrepka.pl" placeholder="email@domena.pl">
                <label for="user-email"
                data-focused="Mój email"
                data-original="Podaj swój e-mail"
                data-invalid="Podaj poprawny e-mail">Podaj swój e-mail</label>
              </div>

              <div class="input">
                <input tabindex name="user-phone" id="user-phone" type="tel" autocomplete="tel"
                pattern="[0-9]{9}|[0-9]{4}[0-9]{9}|\+[0-9]{2}[0-9]{9}"
                spellcheck="false" placeholder="np. +48600500400">
                <label for="user-phone"
                data-focused="Mój numer komórkowy"
                data-original="Podaj numer komórkowy"
                data-invalid="Poprawny numer to np. 600500400">Podaj numer komórkowy</label>
              </div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>

            </div>
          </section>

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger">
              <span class="roll-out__icon" data-icon="g"></span><span class="roll-out__name">Nowe hasło</span><span class="roll-out__status" data-icon="e"></span>
            </a>

            <div class="roll-out__content">
              <div class="input input--password">
                <input tabindex name="pass" type="password" id="password" required autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="np. thanks 4 all the fish">
                <label for="password"
                data-focused="Nowe hasło"
                data-original="Podaj nowe hasło">Podaj nowe hasło</label>

                <div class="input__show-password" id="showPass" data-label-show="Pokaż hasło" data-label-hide="Ukryj hasło"></div>
              </div>

              <div class="input">
                <input tabindex
                name="user-lastname" id="user-lastname" type="password"
                autocomplete="family-name"
                required
                spellcheck="true"
                placeholder="Podaj hasło ponownie">
                <label for="user-lastname"
                data-focused="{{zwrotka_poprawności}}"
                data-original="Podaj hasło ponownie"
                data-invalid="To pole jest wymagane">Podaj hasło ponownie</label>
              </div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>

            </div>
          </section>

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger social-reach__add">
              <span class="roll-out__icon" data-icon="i"></span><span class="roll-out__name">Mój adres dostawy</span><span class="roll-out__status" data-icon="e"></span>
            </a>
            <div class="roll-out__content">
              <div class="input">
                <input tabindex name="user-addr-street" id="user-addr-street" type="text" autocomplete="address-line1"
                required
                spellcheck="false" placeholder="ul. Kubusia Puchatka">
                <label for="user-addr-street"
                data-focused="Moja ulica"
                data-original="Podaj nazwę ulicy"
                data-invalid="To pole jest wymagane"></label>
              </div>

              <div class="grid__wrapper">
                <div class="grid__item grid__span--6">
                  <div class="input">
                    <input tabindex name="user-addr-house" id="user-addr-house" type="text" autocomplete="address-line2"
                    required
                    spellcheck="false" placeholder="domu, klatki...">
                    <label for="user-addr-house"
                    data-focused="Numer domu"
                    data-original="Nr domu"
                    data-invalid="To pole jest wymagane"></label>
                  </div>
                </div>

                <div class="grid__item grid__span--6">
                  <div class="input">
                    <input tabindex name="user-addr-flat" id="user-addr-flat" type="text" autocomplete="address-line2"
                    spellcheck="false" placeholder="...">
                    <label for="user-addr-flat"
                    data-focused="Numer mieszkania"
                    data-original="Nr mieszkania"
                    data-invalid="Numer mieszkania"></label>
                  </div>
                </div>
              </div>

              <div class="grid__wrapper">
                <div class="grid__item grid__span--6">
                  <div class="input">
                    <input tabindex name="user-addr-zip" id="user-addr-zip" type="text" autocomplete="postal-code"
                    required pattern="[0-9]{2} [0-9]{3}|[0-9]{2}-[0-9]{3}"
                    spellcheck="false" placeholder="np. 71-218">
                    <label for="user-addr-zip"
                    data-focused="Mój kod pocztowy"
                    data-original="Kod pocztowy"
                    data-invalid="Niepoprawny kod"></label>
                  </div>
                </div>

                <div class="grid__item grid__span--6">
                  <div class="input">
                    <input tabindex name="user-addr-city" id="user-addr-city" type="text" autocomplete="address-level2"
                    required
                    spellcheck="false" placeholder="np. Wąchock">
                    <label for="user-addr-city"
                    data-focused="Mój miasto"
                    data-original="Miejscowość"
                    data-invalid="To pole jest wymagane"></label>
                  </div>
                </div>
              </div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>

            </div>
          </section>

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger social-reach__add">
              <span class="roll-out__icon" data-icon="p"></span><span class="roll-out__name">Jestem blogerem</span><span class="roll-out__status" data-icon="e"></span>
            </a>
            <div class="roll-out__content">
              <div class="input input--show-label">
                <input tabindex
                name="blog-url" id="blog-url" type="url"
                autocomplete="website"
                required
                spellcheck="false"
                placeholder="http://www.domena.com">
                <label for="blog-url"
                data-focused="Adres Twojego bloga"
                data-original="Podaj adres bloga"
                data-invalid="Podaj poprawny url">Podaj adres bloga</label>
              </div>

              <div class="input input--select input--show-label">
                <select name="blog-category" id="blog-category" required>
                  <option value="" selected disabled>Wybierz</option>
                  <option value="1">Moda</option>
                  <option value="2">Technologie</option>
                  <option value="3">Sex</option>
                  <option value="4">Muzyka</option>
                  <option value="5">Fury, karki i wiertarki</option>
                </select>
                <label for="blog-category"
                data-focused="Kategoria bloga"
                data-original="Wybierz tematykę bloga"
                data-invalid="To pole jest obowiązkowe">Wybierz tematykę bloga</label>
              </div>

              <div class="input input--number">
                <input tabindex name="blog-views" id="blog-views" type="number" step="100" min="0" max="" pattern="[0-9]" required spellcheck="false" placeholder="Podaj swoją odpowiedź">
                <label for="blog-views"
                data-focused="Miesięczna liczba odsłon"
                data-original="Miesięczna liczba odsłon"
                data-invalid="Hm... nie wygląda to dobrze">Podaj liczbę odsłon</label>
                <span class="number__suffix"
                data-suffix-single="odsłona"
                data-suffix-maxfive="odsłony"
                data-suffix-fivemore="odsłon"></span>
                <span class="ripple number__more" data-icon="e"></span>
                <span class="ripple number__less" data-icon="f"></span>
              </div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>
            </div>
          </section>

          <section class="layout--card roll-out roll-out__container">
            <a href="" class="roll-out__trigger social-reach__add">
              <span class="roll-out__icon" data-icon="3"></span><span class="roll-out__name">Więcej o mnie...</span><span class="roll-out__status" data-icon="e"></span>
            </a>
            <div class="roll-out__content">
              <div class="input input--select input--show-label">
                <select name="user-education" id="user-education" required>
                  <option value="" selected disabled>Wybierz stopień</option>
                  <option value="podstawowe">wykształcenie podstawowe</option>
                  <option value="gimnazjalne">wykształcenie gimnazjalne</option>
                  <option value="zasadnicze">wykształcenie zasadnicze</option>
                  <option value="średnie">wykształcenie średnie</option>
                  <option value="wyższe">wykształcenie wyższe</option>
                </select>
                <label for="user-education"
                data-focused="Moje wykształcenie"
                data-original="Podaj stopień swojego wykszłacenia"
                data-invalid="To pole jest obowiązkowe"></label>
              </div>

              <div class="input input--select input--show-label">
                <select name="user-locality" id="user-locality" required>
                  <option value="" selected disabled>Wybierz zakres</option>
                  <option value="500+">powyżej 500 tys. mieszkańców</option>
                  <optgroup label="500 tysięcy mieszkańców">
                    <option value="200-500">od 200 do 500 tys. mieszkańców</option>
                    <option value="100-200">od 100 do 200 tys. mieszkańców</option>
                    <option value="50-100">od 50 do 100 tys. mieszkańców</option>
                  </optgroup>
                  <optgroup label="50 tysięcy mieszkańców">
                    <option value="10-50">między 10 a 50 tys. mieszkańców</option>
                    <option value="5-10">między 5 a 10 tys. mieszkańców</option>
                  </optgroup>
                  <option value="5-">poniżej 5 tysięcy mieszkańców</option>
                </select>
                <label for="user-locality"
                data-focused="Moja miejscowość liczy..."
                data-original="Ilu mieszkańców liczy Twoja miejscowość?"
                data-invalid="To pole jest obowiązkowe"></label>
              </div>

              <div class="input input--select input--show-label">
                <select name="user-family" id="user-family" required>
                  <option value="" selected disabled>Wybierz stopień</option>
                  <option value="rodzic">Jestem rodzicem</option>
                  <option value="przyszły rodzic">Spodziewamy się</option>
                  <option selected="true" value="bez dzieci">Nie posiadam dzieci</option>
                </select>
                <label for="user-family"
                data-focused="Moja rodzina"
                data-original="Czy masz dzieci?"
                data-invalid="To pole jest obowiązkowe"></label>
              </div>

              <?php
      // TODO Jeśli nie jest rodzicem (pole wyżej) nie pokazuj poniższego
      // TODO Dlaczego tutaj nie przypisuje danych z localStorage?
              ?>
              <div class="input input--number">
                <input tabindex name="kidsNumber" id="kidsNumber" type="number" step="1" min="0" max="69" autocomplete="number" pattern="[0-9]{3}" required spellcheck="false" placeholder="Podaj swoją odpowiedź">
                <label for="kidsNumber"
                data-focused="Jestem rodzicem..."
                data-original="Podaj liczbę dzieci"
                data-invalid="Podaj poprawną odpowiedź">Podaj liczbę dzieci</label>
                <span class="number__suffix"
                data-suffix-single="dziecko"
                data-suffix-maxfive="dzieci"
                data-suffix-fivemore="dzieci"></span>
                <span class="ripple number__more" data-icon="e"></span>
                <span class="ripple number__less" data-icon="f"></span>
              </div>
              <div id="kidsInputs"></div>

              <div class="layout__button-bar flow--right">
                <button class="button--secondary" type="button" name="button">Anuluj</button>
                <button class="button--cta" type="button" name="button">Zapisz</button>
              </div>

            </div>
          </section>

        </div>
