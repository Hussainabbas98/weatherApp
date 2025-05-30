<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Weather World 🍃</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="icon" type="image/x-icon" href="img/icons8-favicon-94.png">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

</head>


<body>
  <header>
    <nav>
      <div class="nav-links" id="navLnks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="#current-weather">Current Weather</a></li>
          {{-- <li><a href="#weather-forecast">Forecast</a></li> --}}
          <li><a href="#weather-map">Map</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1 class="title">🌍<b>Weather</b> Forecast</h1>

    <div class="user-interface">
      <input type="text" id="location-input" placeholder="Enter location" />
      <div id="searchbox"></div>
<div id="refinement"></div>
<div id="hits"></div>
      <button id="search-button">Search</button>
      {{-- <button onclick="darkMode()">DarkMood</button> --}}

    </div>

  </header>
  <!--------------------------------header END-------------------------------->

  <!-----------------------------------Current Weather------------------------->
  <section id="current-weather">
    <h1 class="heders">Current Weather🍃</h1>
    <div class="weather-card">
      <div class="weather-icon">
        <img class="weatherIcon1" id="weatherIcon" alt="Weather Icon" src="img/icons8-cloud-lightning-96.png" />
      </div>
      <div class="weather-info">
        <h3 class="location name" id="location">Panadura</h3>
        <p class="temperature temp_c">25°C</p>
        <p class="description url">Cloudy</p>
      </div>
      <div class="timeLbl" id="local-time"></div>
    </div>
    <div style="overflow-x:auto;">
      <table class="tblW">
        <tr>
          <td><strong class="locationPara">📍Location</strong></td>

          <td><strong class="tempPara">🌡Temperature</strong></td>

          <td><strong class="humidityPara">❄️Humidity</strong></td>

          <td><strong class="windPara">🍃Wind Speed</strong></td>

          <td><strong class="conditionPara">💧Condition</strong></td>

          <td><strong class="regionPara">🎗Region</strong></td>

          <td><strong class="countryPara">🗺 Country</strong></td>

          <td><strong>longitude</strong></td>

          <td><strong>latitude</strong></td>

        </tr>
        <tr>
          <td><span class="tz_id">Asia/colombo</span></td>
          <td><span class="temp_c">25</span></td>
          <td><span class="humidity">33</span></td>
          <td><span class="wind_kph">75.22</span></td>
          <td class="url">Cloudy</td>
          <td><span class="region">Western</span></td>
          <td><span class="country">Sri-Lanka</span></td>
          <td><span id="lon">11.33</span></td>
          <td><span id="lat">20.55</span></td>
        </tr>

      </table>
    </div>
  </section>
  <!-----------------------------------Current Weather END------------------------->

  {{-- <section id="weather-forecast">
    <h1 class="heders">Weather Forecast 🗺</h1>

    <div class="date-serch">
      To : <input id="startDate" type="date">&nbsp;&nbsp;&nbsp;
      End : <input id="endDate" type="date">
      <button onclick="searchForecast()">Search Date</button>
    </div>
    <hr>
    <div style="overflow-x:auto;">
      <table class="tblForcast">
        <tr>
          <td>
            <strong id="date1">2023-02-24</strong>
          </td>
          <td>
            <strong id="date2">2023-02-25</strong>
          </td>
          <td>
            <strong id="date3">2023-02-26</strong>
          </td>
          <td>
            <strong id="date4">2023-02-27</strong>
          </td>
          <td>
            <strong id="date5">2023-02-28</strong>
          </td>
          <td>
            <strong id="date6">2023-02-29</strong>
          </td>
          <td>
            <strong id="date7">2023-02-30</strong>
          </td>
        </tr>
        <tr>
          <td>
            <img id="img1" class="img" src="img/icons8-cloud-96.png" alt="">
          </td>
          <td>
            <img id="img2" class="img" src="img/icons8-cloud-lightning-96.png" alt="">
          </td>
          <td>
            <img id="img3" class="img" src="img/icons8-partly-cloudy-day-96.png" alt="">
          </td>
          <td>
            <img id="img4" class="img" src="img/icons8-night-wind-96.png" alt="">
          </td>
          <td>
            <img id="img5" class="img" src="img/icons8-storm-94.png" alt="">
          </td>
          <td>
            <img id="img6" class="img" src="img/icons8-cloud-lightning-96.png" alt="">
          </td>
          <td>
            <img id="img7" class="img" src="img/icons8-night-wind-96.png" alt="">
          </td>
        </tr>
        <tr>
          <td>
            <strong class="title1">cloud</strong>
          </td>
          <td>
            <strong class="title2">cloud-lightning</strong>
          </td>
          <td>
            <strong class="title3">partly-cloudy</strong>
          </td>
          <td>
            <strong class="title4">night-wind</strong>
          </td>
          <td>
            <strong class="title5">storm</strong>
          </td>
          <td>
            <strong class="title6">cloud-lightning</strong>
          </td>
          <td>
            <strong class="title7">night-wind</strong>
          </td>
        </tr>

      </table>
    </div>
  </section> --}}

  <section id="weather-map">
    <h1 class="heders">Map</h1>
    <div id="map" class="map-d">
    </div>
  </section>


  {{-- <footer id="footer">
    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
          <div class="max-w-xl lg:max-w-lg">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
              Subscribe to our newsletter.
            </h2>
            <p class="mt-4 text-lg leading-8 text-gray-300">
              Nostrud amet eu ullamco nisi aute in ad minim nostrud
              adipisicing velit quis. Duis tempor incididunt dolore.
            </p>
            <div class="mt-6 flex max-w-md gap-x-4">
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" name="email" type="email" autocomplete="email" required
                class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                placeholder="Enter your email" />
              <button type="submit"
                class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Subscribe
              </button>
            </div>
          </div>
          <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
            <div class="flex flex-col items-start">
              <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
              </div>
              <dt class="mt-4 font-semibold text-white">Weekly articles</dt>
              <dd class="mt-2 leading-7 text-gray-400">
                Non laboris consequat cupidatat laborum magna. Eiusmod non
                irure cupidatat duis commodo amet.
              </dd>
            </div>
            <div class="flex flex-col items-start">
              <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                </svg>
              </div>
              <dt class="mt-4 font-semibold text-white">No spam</dt>
              <dd class="mt-2 leading-7 text-gray-400">
                Officia excepteur ullamco ut sint duis proident non
                adipisicing. Voluptate incididunt anim.
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            "></div>
      </div>
    </div>
  </footer> --}}



  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script>
        const {
  searchBox,
  hits
} = instantsearch.widgets;

search.addWidgets([
  searchBox({
    container: "#searchbox"
  }),
  hits({
    container: "#hits"
  }),
  refinementList({
    container: "#refinement",
    attribute: "company"
  }),
]);

search.start();
    </script>
</body>

</html>