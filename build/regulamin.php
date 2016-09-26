<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');
$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--plain';
$randomImage = $faker->numberBetween($min = 900, $max = 1000);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'components/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'components/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>
      <section class="layout--base paint--brand layout__header--content-page">
        <h1>Regulamin serwisu Rekomenduj.to</h1>
      </section>
      <section class="layout--base content--small-type content--terms-and-condition">
        <h2>Postanowienia ogólne</h2>
            <ol>
                <li>Regulamin niniejszy reguluje zasady korzystania serwisu Rekomenduj.to</li>
                <li>Definicje pojęć użytych w Regulaminie:
                    <ol>
                        <li><strong>„Rekomenduj.to”</strong> – oznacza serwis internetowy prowadzony przez Buzz Media udostępniany pod adresem  www.rekomenduj.to</li>
                        <li><strong>„Buzz Media”</strong> – oznacza Buzz Media Paweł Suchocki, al. Wilanowska 81 lok. 24, 02-765 Warszawa, NIP 586-21-35-290, wpisaną do Centralnej Ewidencji i Informacji o Działalności Gospodarczej przez Prezydenta Miasta Gdyni, adres e-mail hello@rekomenduj.to</li>
                        <li><strong>„Użytkownik”</strong> – oznacza każdą osobę fizyczną, która zarejestrowała się w serwisie Rekomenduj.to</li>
                        <li><strong>„Konto”</strong> – prowadzone dla Użytkownika przez Buzz Media konto, będące zbiorem zasobów, w którym gromadzone są Dane Użytkownika oraz informacje o jego działaniach w ramach serwisu Rekomenduj.to</li>
                        <li><strong>„Dane”</strong> – dane osobowe Użytkownika oraz inne dane i treści zamieszczane przez Użytkownika w serwisie Rekomenduj.to</li>
                        <li><strong>„Kampania”</strong> – okres testowania produktów lub usług przez Użytkownika, podczas którego Użytkownik testuje produkt lub próbki produktu lub otrzymuje informacje dotyczące produktu lub usług, jak również wyraża swoją opinię o produkcie lub usługach oraz wypełnia ankietę podsumowującą</li>
                        <li><strong>„Ambasador Kampanii”</strong>– Użytkownik zakwalifikowany przez Buzz Media do udziału w Kampanii</li>
                    </ol>
                </li>
            </ol>

        <h2>Zasady rejestracji i uczestnictwa w serwisie  www.rekomenduj.to</h2>
            <ol>
                <li>Użytkownikiem serwisu Rekomenduj.to może zostać:
                  <ol>
                      <li>pełnoletnia osoba fizyczna posiadająca pełną zdolność do czynności prawnych zamieszkała na terenie Polski,</li>
                      <li>osoba niepełnoletnia, powyżej 14 roku życia, posiadająca ograniczoną zdolność do czynności prawnych, zamieszkała na terenie Polski, za zgodą rodziców lub opiekunów prawnych.</li>
                    </ol>
                </li>
                <li>Użytkownikiem serwisu Rekomenduj.to jest każda osoba, która spełnia wymagania określone w ustępie powyższym i założyła Konto w serwisie Rekomenduj.to.</li>
                <li>Założenie Konta obejmuje następujące czynności:
                    <ol>
                        <li> wypełnienie formularza rejestracyjnego, zawierającego następujące dane osobowe Użytkownika: imię i nazwisko, adres e-mail, kod pocztowy, płeć, datę urodzenia, informację czy użytkownik jest rodzicem, a jeśli tak to jakiej płci są dzieci oraz data urodzenia dzieci, jak również nazwę Użytkownika na potrzeby serwisu (login) oraz hasło,</li>
                        <li> wyrażenie zgody na przetwarzanie danych osobowych Użytkownika przez Buzz Media w brzmieniu wskazanym przez Buzz Media, przy czym w imieniu osoby niepełnoletniej zgodę wyrażają rodziców lub opiekunowie prawni,</li>
                        <li> akceptację niniejszego Regulaminu oraz Polityki Prywatności, przy czym w imieniu osoby niepełnoletniej akceptacji dokonują rodzice lub opiekunowie prawni.</li>
                    </ol>
                </li>
                <li>Założenie Konta oraz korzystanie z serwisu Rekomenduj.to jest dobrowolne i bezpłatne.</li>
                <li>Zakreślenie odpowiedniego pola obok formułki „Zapoznałem się i akceptuję warunki i zasady Regulaminu strony oraz politykę prywatności” umieszczonej w serwisie  Rekomenduj.to oznacza, że Użytkownik zapoznał się i akceptuje postanowienia Regulaminu i Polityki Prywatności oraz zobowiązuje się do przestrzegania Regulaminu. Brak akceptacji powyższej klauzuli uniemożliwia założenie Konta oraz korzystanie z serwisu Rekomenduj.to.</li>
                <li>Nieprawidłowe lub niekompletne wypełnienie formularza uniemożliwia rejestracę.</li>
                <li>Prawidłowe wypełnienie i przesłanie formularza rejestracyjnego oraz innych czynności związanych z założeniem Konta, po dokonaniu rejestracji Konta – zgodnie z warunkami niniejszego Regulaminu - w systemie informatycznym Buzz Media jest równoznaczne z zawarciem umowy o zapewnienie dostępu do zawartości serwisu Rekomenduj.to i świadczeń objętych niniejszym Regulaminem.</li>
                <li>W terminie 14 dni od zawarcia umowy, o której mowa w pkt 8, Użytkownik może od niej odstąpić bez podania przyczyn składając stosowne oświadczenie drogą elektroniczną lub na piśmie, przy czym do zachowania terminu wystarczy wysłanie pisma przed jego upływem. Użytkownik wyraża zgodę na rozpoczęcie świadczenia usług, w szczególności poprzez przystąpienie przez Użytkownika do Kampanii, przed upływem 14 dni od daty zawarcia umowy; przyjmuje nadto do wiadomości, że w takim przypadku prawo do odstąpienia od umowy nie przysługuje.</li>
                <li>Buzz Media informuje, że serwis Rekomenduj.to zawiera chronione prawem autorskim dokumenty, znaki towarowe oraz inne materiały, w szczególności teksty, artykuły, opracowania, zdjęcia, grafikę.</li>
                <li>Korzystanie z serwisu Rekomenduj.to nie oznacza nabycia przez Użytkownika jakichkolwiek praw do utworów w nim zawartych.</li>
                <li>Buzz Media zastrzega sobie prawo do krótkotrwałego zaprzestania świadczenia usług i dostępu do serwisu Rekomenduj.pl ze względu na czynności konserwacyjne lub związane z modyfikacją serwisu internetowego, mogących powodować utrudnienie lub uniemożliwienie Użytkownikom korzystanie z serwisu Rekomenduj.to. Terminy prac i przewidywany czas ich trwania będą publikowane na stronie internetowej  Rekomenduj.to przed rozpoczęciem prac.</li>
                <li>W przypadkach szczególnych, mających wpływ na bezpieczeństwo i stabilność systemu teleinformatycznego, Buzz Media ma prawo do czasowego zaprzestania lub ograniczenia świadczenia usług, i przeprowadzenia prac konserwacyjnych mających na celu przywrócenie bezpieczeństwa i stabilności systemu teleinformatycznego.</li>
                <li>Zakazane jest dostarczanie przez i do systemu teleinformatycznego Buzz Media przez Użytkownika treści o charakterze bezprawnym, w szczególności:
                    <ol>
                        <li>powodujących zachwianie pracy lub przeciążenie systemów teleinformatycznych Buzz Media lub innych podmiotów biorących bezpośredni lub pośredni udział w świadczeniu usług drogą elektroniczną</li>
                        <li>naruszających dobra osób trzecich, ogólnie przyjęte normy społeczne lub niezgodnych z powszechnie obowiązującymi przepisami prawa.</li>
                    </ol>
                </li>
                <li>Użytkownik zobowiązany jest podawać w formularzu rejestracyjnym oraz we wszystkich ankietach wypełnianych w związku z uczestnictwem w serwisie Rekomenduj.to prawdziwe i rzetelne dane. Wszystkie formularze i ankiety powinny być wypełniane w sposób kompletny i zrozumiały. Podanie nieprawdziwych, niekompletnych lub nierzetelnych danych może uniemożliwić kontakt z Użytkownikiem lub spowodować niezakwalifikowanie Użytkownika do Kampanii.<\li>
                <li>Użytkownik nie może udostępniać swojego Konta innym osobom, ani korzystać z Kont innych Użytkowników. Użytkownik może zarejestrować się w Rekomenduj.to wyłączenie poprzez podanie swojego e-maila oraz hasła.</li>
                <li>Użytkownik może połączyć swoje konto w serwisie Rekomenduj.to ze swoimi profilami w mediach społecznościowych, przy czym jest to równoznaczne z wyrażeniem zgody na udzielenie Buzz Media prawa dostępu do danych z połączonego profilu. Zakres tych danych ustalany jest każdorazowo na osobnych zasadach, przy czym treść tych zasad zostanie Użytkownikowi udostępniona.</li>
                <li>Korzystanie przez Użytkownika z serwisu Rekomenduj.to oraz udział w poszczególnych Kampaniach nie mogą odbywać się w celach komercyjnych. Użytkownik nie może sprzedawać otrzymanych do testowania produktów lub usług ani próbek produktów ani w jakikolwiek inny sposób odpłatnie przekazywać osobom trzecim.</li>
            </ol>

        <h2>Zasady udziału w Kampaniach</h2>
          <ol>
            <li>Udział w Kampanii może wziąć tylko Użytkownik serwisu Rekomenduj.to. Udział Użytkownika w Kampaniach jest bezpłatny.</li>
            <li>Buzz Media prowadzi Kampanie w ramach usług marketingowych świadczonych na rzecz klientów Buzz Media. W celu uzyskania opinii o produktach lub usługach klienta Buzz Media, w czasie Kampanii mogą być udostępniane Użytkownikom produkty lub próbki produktów klienta oraz ulotki i inne informacje o produktach lub usługach klienta Buzz Media.</li>
            <li>Użytkownik może z własnej inicjatywy zgłosić się do udziału w Kampanii, o której informacje będą dostępne w serwisie Rekomenduj.to lub też Buzz Media może wysłać zaproszenie do udziału w Kampanii do wybranych Użytkowników.</li>
            <li>Przed zakwalifikowaniem Użytkownika do Kampanii Buzz Media uprawnione jest do żądania od Użytkownika wypełnienia i wysłania ankiety rekrutacyjnej i ankiet profilowych umożliwiających Buzz Media dokonanie oceny czy Użytkownik pasuje do profilu ambasadora danej Kampanii. Buzz Media może żądać od Użytkownika ankiety również w celu zakwalifikowania go do akcji lub w celu badawczym, w szczególności w celu poznania opinii konsumentów.</li>
            <li>Ankiety profilowe mogą zawierać dane wrażliwe, o których mowa w art. 27 ustawy z dnia 29 sierpnia 1997 r. o ochronie danych osobowych, w szczególności takie jak dane  ujawniające pochodzenie etniczne, dane o stanie zdrowia, nałogach lub życiu seksualnym. Ankiety profilowe będą dostępne dla Użytkownika po otrzymaniu przez Buzz Media podpisanej zgody na przetwarzanie danych Użytkownika obejmujących dane wrażliwe. Użytkownik powinien wydrukować treść zgody udostępnioną przez Buzz Media w serwisie Rekomenduj.to, opatrzyć własnoręcznym podpisem, a następnie wysłać w formie pisemnej na adres Buzz Media.</li>
            <li>Użytkownicy zakwalifikowani do udziału w danej Kampanii, zwani dalej „Ambasadorami Kampanii”, zostaną poinformowani o tym fakcie przez Buzz Media za pomocą wiadomości e-mail wysłanej na adres mailowy Użytkownika wraz ze wskazaniem dalszych działań związanych z udziałem w Kampanii. Buzz Media nie jest zobowiązany do informowania o niezakwalifikowaniu do danej Kampanii.</li>
            <li>Ambasador Kampanii powinien podać Buzz Media adres do korespondencji lub potwierdzić aktualności podanego wcześniej adresu w celu umożliwienia wysłania przez Buzz Media produktu do testowania i/lub jego próbek i/lub ulotek dotyczących produktu.</li>
            <li>Brak wskazania adresu do korespondencji Ambasadora Kampanii w terminie określonym przez Buzz Media uniemożliwia udział Ambasadora w danej Kampanii.</li>
            <li>Biorąc udział w danej Kampanii Ambasador Kampanii powinien:
              <ol>
                  <li>przetestować produkt lub próbki produktu lub usługę objęte Kampanią udostępnione przez Buzz Media</li>
                  <li>zapoznać się z informacjami o produkcie lub usłudze objętej Kampanią udostępnionymi przez Buzz Media</li>
                  <li>dzielić się wiedzą o produkcie lub usłudze objętej Kampanią oraz próbkami ze swoimi znajomymi</li>
                  <li>wypełniać ankiety i raporty związane z Kampanią</li>
                  <li>realizować pozostałe zadania związane z Kampanią, o których zostanie poinformowany przed przystąpieniem do Kampanii.</li>
              </ol>
            </li>
            <li>Ambasador może nadto wziąć udział w dodatkowej Promocji – przez co rozumieć należy akcje, w których za drobną czynność (np. udostępnienie wskazanej grafiki na profilu Ambasadora w mediach społecznościowych) przydzielany jest kod zniżkowy na towary lub usługi osób trzecich. Nagrody ustalane są w każdej promocji indywidualnie, przystąpienie do Promocji jest dobrowolne.</li>
            <li>Ambasador Kampanii, którego Konto w serwisie Rekomenduj.to zostało zablokowane lub usunięte z przyczyn wskazanych w punkcie IX ust. 2, zostaje wyłączony z dalszego udziału w Kampanii.</li>
          </ol>

        <h2>Prawa autorskie</h2>
          <ol>
            <li>Użytkownik udziela Buzz Media nieodpłatnej, wyłącznej i bezterminowej licencji na korzystanie z utworów jego autorstwa powstałych w trakcie i w związku z korzystaniem z serwisu Rekomenduj.to lub utworów jego autorstwa albo autorstwa osób trzecich, udostępnionych przez Użytkownika Buzz Media w ramach korzystania z serwisu Rekomenduj.to, w szczególności opinii, wypowiedzi, recenzji, analiz, zdjęć, grafik, filmików,  na następujących polach eksploatacji:
              <ol>
                <li>utrwalania jakąkolwiek techniką na wszelkich nośnikach, w tym techniką drukarską, reprograficzną, zapisu magnetycznego oraz techniką cyfrową;  m. in. na dysku komputerowym, DVD, na taśmie magnetycznej, na kliszy fotograficznej, na CD, VCD, CD ROM; bez ograniczeń co do ilości i formatu oraz niezależnie od systemu i standardu</li>
                <li>zwielokrotniania jakąkolwiek techniką (w szczególności światłoczułą, magnetyczną, audiowizualną, cyfrową, optyczną, drukarską, zapisu komputerowego) w dowolnej formie</li>
                <li>nadawania w nieograniczonej częstotliwości, w całości lub we fragmentach, przy pomocy transmisji dźwiękowych i telewizyjnych, fal radiowych, lasera, mikrofal lub podobnych metod technicznych</li>
                <li>nadawania za pośrednictwem systemu przewodowego i bezprzewodowego</li>
                <li>reemitowania, tj. równoczesnego i integralnego nadawania przez inną organizację radiową lub telewizyjną</li>
                <li>najmu lub użyczania we wszelkich możliwych formach nośników fizycznych i wirtualnych</li>
                <li>publicznego wykonania, odtwarzania i udostępniania w taki sposób, aby każdy mógł mieć do nich dostęp w miejscu i czasie przez siebie wybranym (w szczególności w Internecie, w sieciach komórkowych)</li>
                <li>wykorzystania w połączeniach telefonicznych, w tym w przekazach tekstowych i graficznych (np. SMS, WAP, MMS) oraz audiowizualnych</li>
                <li>wprowadzania do obrotu w kraju i za granicą, bez ograniczeń co do ilości nakładu egzemplarzy i jego formatu</li>
                <li>opracowania, w szczególności do skracania, dzielenia, łączenia w całości lub w części z innymi Utworami</li>
                <li>prawa do używania, korzystania i rozporządzania Utworami lub fragmentami Utworów dla celów reklamowych, promocyjnych i marketingowych Buzz Media lub osób trzecich jak również do ich wykorzystania w innych utworach</li>
                <li>komercyjnego wykorzystania Utworów poprzez produkcję i dystrybucję wszelkiego rodzaju towarów związanych z Utworami, jak również poprzez promocję wszelkiego rodzaju towarów i usług przy użyciu przerobionych, opracowanych lub oryginalnych Utworów lub fragmentów Utworów</li>
              </ol>
            </li>
            <li>Użytkownik wyraża nadto zgodę na korzystanie ze swojego wizerunku utrwalonego na fotografiach udostępnionych Buzz Media w ramach korzystania z serwisu Rekomenduj.to, na polach eksploatacji wymienionych w ustępie powyższym (dalej o fotografiach oraz utworach, o których mowa w ust. 1: Utwory).</li>
            <li>Użytkownik oświadcza, iż dostarczone przez niego Utwory są dziełem oryginalnym i że Użytkownikowi przysługują do nich autorskie prawa majątkowe w pełnym zakresie, ponadto oświadcza że Utwory nie są w jakikolwiek sposób ograniczone na rzecz osób trzecich, a Użytkownik nabył prawa do nich zgodnie z obwiązującymi w tym zakresie przepisami. Użytkownik oświadcza, że prawa autorskie do Utworów nie będą naruszać praw osób trzecich, w szczególności w zakresie praw autorskich, w tym praw zależnych.</li>
            <li>Użytkownik wyraża nadto zgodę na wykonywanie i zezwalanie innym na wykonywanie autorskich praw zależnych w odniesieniu do Utworów.</li>
            <li>Użytkownikowi nie przysługuje wynagrodzenie z tytułu udzielenia powyższej licencji, zgody na korzystanie z jego wizerunku oraz z tytułu korzystania z Utworów na poszczególnych polach eksploatacji.</li>
            <li>Buzz Media jest uprawnione do udzielania dalszych zgód i licencji (sublicencji) osobom trzecim w zakresie określonym w ust. ust. 1-5. W szczególności Buzz Media jest uprawnione do rozpowszechniania opinii zamieszczonych w serwisie Rekomenduj.to, również wśród osób niezarejestrowanych w serwisie, a także do zamieszczania na witrynach internetowych osób trzecich.</li>
          </ol>

        <h2>Wymagania techniczne, zagrożenia związane z korzystaniem z sieci Internet</h2>
          <ol>
            <li>Minimalne wymagania techniczne umożliwiające prawidłowe korzystanie z serwisu Rekomenduj.to obejmują:
              <ol>
                <li>komputer osobisty lub inny kompatybilny</li>
                <li>dostęp do sieci Internet</li>
                <li>posiadanie konta e-mail</li>
                <li>dostęp do witryn www – poprawnie skonfigurowana przeglądarka www (rekomendowana  aktualna wersja Chrome).</li>
              </ol>
            </li>
            <li>Odmienna lub niekompletna konfiguracja sprzętu komputerowego lub oprogramowania od wskazanych powyżej może prowadzić do braku możliwości korzystania z przedmiotowych usług.</li>
            <li>Korzystanie przez Użytkownika z serwisu Rekomenduj.to nie wiąże się dla użytkownika ze szczególnymi zagrożeniami związanymi z korzystaniem z usług świadczonych drogą elektroniczną, poza tymi, które powszechnie występują przy korzystaniu z publicznej sieci teleinformatycznej.</li>
          </ol>

        <h2>Odpowiedzialność Buzz Media</h2>
        <ol>
          <li>Buzz Media nie ponosi odpowiedzialności za:
            <ol>
              <li>jakiekolwiek szkody wyrządzone osobom trzecim, powstałe w wyniku korzystania przez Użytkownika z dostępu do usług w sposób sprzeczny z Regulaminem lub obowiązującymi przepisami prawa</li>
              <li>jakiekolwiek szkody wyrządzone osobom trzecim będące następstwem podania przez Użytkownika nieprawdziwych danych na formularzu rejestracyjnym lub w ankietach</li>
              <li>szkody powstałe w przypadku wystąpienia istotnych błędów w skonfigurowaniu urządzenia odbiorczego Użytkownika</li>
              <li>szkody i straty poniesione przez Użytkownika będące następstwem zagrożeń związanych z korzystaniem z sieci Internet, w szczególności działania wirusów komputerowych i włamania do systemu komputerowego.</li>
            </ol>
          </li>
        </ol>

        <h2>Przetwarzanie danych osobowych</h2>
          <ol>
            <li>Administratorem danych osobowych Użytkowników jest Buzz Media Paweł Suchocki, al. Wilanowska 81 lok. 24, 02-765 Warszawa, NIP 586-21-35-290, wpisana do Centralnej Ewidencji i Informacji o Działalności Gospodarczej przez Prezydenta Miasta Gdyni</li>
            <li>Dane osobowe Użytkownika w zakresie podanym w formularzu zgłoszeniowym lub w ankietach będą zbierane i przetwarzane w celach związanych z korzystaniem przez Użytkownika serwisu Rekomenduj.to oraz z udziałem w Kampaniach, w tym w szczególności z procesem doboru Ambasadorów Kampanii, zgodnie z ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną (Dz. U. z 2002 r., nr 144, poz. 1204) oraz ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (Dz. U. z 2002 r., nr 101, poz. 962).</li>
            <li>Dane osobowe Użytkownik podaje dobrowolnie, aczkolwiek podanie danych jest konieczne do korzystania z serwisu Rekomenduj.to oraz do udziału w Kampaniach.  Użytkownikowi przysługuje prawo do wglądu do swoich danych osobowych, prawo  ich zmiany oraz żądania zaprzestania przetwarzania zgodnie z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (Dz. U. z 2002 r., nr 101, poz. 962).</li>
            <li>Użytkownik może też udzielić zgody na przetwarzanie jego danych osobowych w celach marketingowych Buzz Media.</li>
            <li>Ponadto, Użytkownik może udzielić zgody na wykorzystanie jego adresu elektronicznego do celów komercyjnych, w szczególności na otrzymywanie niezamówionych informacji handlowych za pośrednictwem Internetu.</li>
          </ol>

        <h2>Tryb postępowania reklamacyjnego</h2>
          <ol>
            <li>Użytkownik ma prawo składać reklamacje w sprawach dotyczących dostępu do serwisu Rekomenduj.to. W szczególności reklamacje mogą być składane z tytułu braku lub nienależytego dostępu do usług.</li>
            <li>Reklamację rozpatruje Buzz Media.</li>
            <li>Prawidłowo złożona reklamacja powinna zawierać, co najmniej następujące dane:
              <ol>
                <li> imię i nazwisko Użytkownika</li>
                <li> przedmiot reklamacji</li>
                <li> okoliczności uzasadniające reklamację</li>
                <li> adres poczty elektronicznej, na który ma zostać przesłana decyzja Buzz Media dotycząca reklamacji.</li>
              </ol>
            </li>
            <li>Reklamacje nie zawierające powyższych danych nie będą rozpatrywane.</li>
            <li>Reklamacje należy zgłaszać pocztą elektroniczną na adres hello@rekomenduj.to</li>
            <li>Reklamacje należy wnieść w terminie 30 dni licząc od dnia, w którym zaistniało zdarzenie będące podstawą reklamacji.</li>
            <li>Buzz Media dołoży starań, aby reklamacje były rozpatrzone w terminie 14 dni roboczych od ich otrzymania od Użytkownika. Buzz Media zawiadomi Użytkownika o swojej decyzji zapadłej w wyniku rozpatrzenia reklamacji za pośrednictwem poczty elektronicznej na adres podany w reklamacji.</li>
            <li>Wszelkie problemy techniczne mogą być zgłaszane przez Użytkowników na adres mamproblem@rekomenduj.to.</li>
            <li>Użytkownik jest nadto uprawniony do zgłoszenia dowolnej treści pochodzącej od osoby trzeciej jako nadużycia lub jako treści obraźliwej. Użytkownik jest nadto uprawniony do zgłoszenia innego użytkownika jako osoby naruszającej postanowienia niniejszego regulaminu lub przepisy prawa. Do zgłoszeń powyższych ust. ust. 2, 3, 5 i 6 stosuje się odpowiednio. Buzz Media rozpatrzy każde zgłoszenie w terminie 24 godzin od jego otrzymania od Użytkownika. Buzz Media zawiadomi Użytkownika o swojej decyzji zapadłej w wyniku rozpatrzenia zgłoszenia za pośrednictwem poczty elektronicznej na adres podany w zgłoszenia.</li>
          </ol>

        <h2>Rezygnacja/zakończenie korzystania z serwisu Rekomenduj.to</h2>
          <ol>
          <li>Użytkownik może w każdym czasie zrezygnować z dostępu do serwisu Rekomenduj.to i usunąć swoje Konto. W tym celu powinien wysłać oświadczenie w tym zakresie na adres e-mail: rezygnuje@rekomenduj.to.</li>
          <li>Buzz Media może zablokować lub usunąć  Konto Użytkownika oraz dostęp do serwisu Rekomenduj.to, jeżeli:
            <ol>
              <li> Użytkownik narusza postanowienia niniejszego Regulaminu</li>
              <li> Użytkownik dopuszcza się działań mogących utrudniać działanie serwisu Rekomenduj.to</li>
              <li> Użytkownik dopuszcza się działań, które mogłyby narazić Buzz Media lub jego klientów na utratę lub naruszenie renomy i dobrego imienia.</li>
            </ol>
          </li>
          <li>Odblokowanie lub ponowne założenie Konta wymaga zgody Buzz Media.</li>
          <li>Usunięcie konta przez Użytkownika lub Buzz Media nie powoduje wygaśnięcia licencji, o której mowa w pkt IV niniejszego regulaminu. Użytkownik, którego konto zostało usunięte, uprawniony jest do wypowiedzenia licencji zgodnie z terminem wynikającym z bezwzględnie obowiązujących przepisów.</li>
          </ol>

        <h2>Zmiana Regulaminu</h2>
          <ol>
            <li>Buzz Media może zmienić Regulamin, w szczególności z przyczyn techniczno - organizacyjnych. Zmiana wchodzi w życie w terminie wskazanym przez Buzz Media nie krótszym niż 14 dni od momentu udostępnienia zmienionego Regulaminu w serwisie Rekomenduj.to. Kampanie rozpoczęte przed wejściem w życie zmian prowadzone są na dotychczasowych zasadach.</li>
            <li>Przy pierwszym logowaniu przez Użytkownika na Koncie w serwisie Rekomenduj.to, które będzie miało miejsce po wejściu w życie zmian do Regulaminu, Użytkownik zostanie poinformowany o takich zmianach oraz o możliwości ich akceptacji. Odmowa akceptacji zmian jest równoznaczna z rezygnacją przez Użytkownika z korzystania z serwisu Rekomenduj.to oraz rozwiązaniem umowy z Buzz Media. W takim przypadku Konto Użytkownika zostanie usunięte z serwisu Rekomenduj.to.</li>
          </ol>
        <h2>Postanowienia końcowe</h2>
          <ol>
            <li>Regulamin obowiązuje od dnia ogłoszenia go na stronach internetowych serwisu Rekomenduj.to.</li>
            <li>Prawem właściwym dla wszystkich stosunków prawnych wynikających z Regulaminu jest prawo polskie. Wszelkie spory są rozstrzygane przez polskie sądy powszechne.</li>
            <li>W sprawach nieuregulowanych Regulaminem zastosowanie mają odpowiednie przepisy prawa polskiego, w szczególności kodeksu cywilnego, ustawy z dnia 18 lipca 2002 roku o świadczeniu usług drogą elektroniczną (Dz. U. z 2002 roku, Nr 144, poz. 1204 ze  zm.) oraz Ustawy z dnia 4 lutego 1994 r.  o prawie autorskim i prawach pokrewnych (Dz. U. Nr Nr 24, poz. 83).</li>
          </ol>

      </section>
    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper('.cs__container', {
    pagination: '.cs__pagination',
      slidesPerView: 1.1,
      centeredSlides: true,
      paginationClickable: true,
      spaceBetween: 10
    });
  </script>
</body>
</html>
