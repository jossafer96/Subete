<div id="report" v-bind:class="{ 'is-active': isActive, 'is-loading': isLoading }">
    <header class="header">
        <div class="header__container">
            <h1 class="header__title">SURF REPORT</h1>
            <h2 class="header__subtitle">{{ subtitle }}</h2>
        </div>
    </header>
    <div class="locations">
        <div class="locations__container">
            <div class="locations__option" v-for="surfBreak in surfBreaks"><input type="radio" name="breaks" v-model="current" v-bind:value="surfBreak" v-bind:id="surfBreak.id" v-bind:class="{ 'surfbreak': true, 'surfbreak--is-active': surfBreak.id === activeSurfBreak.id }" /><label v-bind:for="surfBreak.id"><span>{{ surfBreak.name }}</span></label></div>
        </div>
    </div>
    <div class="components">
        <div class="components__row components__row--2-1">
            <div class="component component--red component--big" data-type="surf-height">
                <header class="component__title">
                    <h4>SURF HEIGHT</h4>
                </header>
                <main class="component__main"><span class="txt-large" v-if="surfRange !== ' - &lt;span&gt;ft&lt;/span&gt;'" v-html="surfRange"></span>
                    <ul class="column-breakdown column-breakdown--swell">
                        <li v-for="swell in swells">{{ swell.height }}&rsquo; <span>{{swell.period}}sec {{ swell.direction }}</span></li>
                    </ul>
                </main>
            </div>
            <div class="component component--blue component--small" data-type="temperature">
                <header class="component__title">
                    <h4>SWELL MAP</h4>
                </header>
                <main class="component__main">
                    <div class="map"></div>
                    <div class="compass">
                        <div class="compass__dir" v-for="swell in swells">
                            <div :style="'transform: rotate(' + swell.angle + 'deg)'"><svg xmlns="http://www.w3.org/2000/svg" width="156.1" height="405.1" viewBox="0 0 156.1 405.1"><g fill="#fff"><path d="M131.7 130.3c-34.4-6.9-70.7-7.2-107.3.1l-9.8-49c43.2-8.6 86.1-8.2 126.8-.1l-9.7 49z"></path><path d="M146.3 56.7c-43.8-8.7-90-9.2-136.6.1L0 7.8C53.2-2.8 106-2.3 156.1 7.7l-9.8 49z"></path></g></svg></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="components__row components__row--2-1">
            <div class="component component--blue component--big" data-type="tide">
                <header class="component__title">
                    <h4>TIDE</h4>
                </header>
                <main class="component__main">
                    <div id="tide-graph"></div>
                    <ul class="column-breakdown column-breakdown--tide" :data-count="tide.extremes.length">
                        <li v-for="extreme in tide.extremes">
                            <h4>{{ extreme.height }}&rsquo;<span>{{ extreme.type }}</span><span>{{ extreme.time }}</span></h4>
                        </li>
                    </ul>
                </main>
            </div>
            <div class="component component--blue component--small" data-type="wind">
                <header class="component__title">
                    <h4>WIND</h4>
                </header>
                <main class="component__main"><span class="txt-large" v-if="wind.speed !== ''">{{wind.speed}} <span>kts</span></span><span>{{wind.direction}}</span></main>
            </div>
        </div>
        <div class="components__row components__row--1-1">
            <div class="component component--blue" data-type="sun">
                <header class="component__title">
                    <h4>SUNSET/SUNRISE</h4>
                </header>
                <main class="component__main"><span class="txt-medium" v-if="sunRange !== ' - '" v-html="sunRange"></span></main>
            </div>
            <div class="component component--blue component--big" data-type="temperature">
                <header class="component__title">
                    <h4>TEMPERATURE</h4>
                </header>
                <main class="component__main"><span class="txt-large" v-if="tempRange !== ' - '">{{temperature.min}} - {{temperature.max}}º</span><span v-if="tempRange !== ' - '">farenheit</span></main>
            </div>
        </div>
    </div>
</div>
<style>
/**
  EXTERNAL
**/
@import url('https://fonts.googleapis.com/css?family=Lato:400,700,900');

/**
  VARS
**/

/**
  ANIMATION
**/
@-webkit-keyframes spin {
  0%   { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}
@keyframes spin {
  0%   { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}

/**
  RESET
**/
*, *:before, *:after {
  box-sizing: border-box;
}

/**
  LAYOUT
**/
body {
  background-color: #222;
  font-family: 'Lato', 'Helvetica Neue', sans-serif;
  color: #fff;
}

/**
  HEADER
**/
.header {
  padding: 2rem 2rem 0;
}
.header__container {
    text-align: center;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }
@media screen and (min-width: 768px) {
.header__container {
      display: flex;
      align-items: baseline;
      text-align: left
  }
    }
.header__container:before {
    content: '';
    display: table;
  }
@media screen and (min-width: 768px) {
    }
.header__container:after {
    content: '';
    display: table;
    clear: both;
  }
@media screen and (min-width: 768px) {
    }
.header__title,
  .header__subtitle {
    margin: 0 0 calc(2rem/2);
    line-height: 1;
  }
.header__title {
    font-weight: 900;
  }
@media screen and (min-width: 768px) {
.header__title {
      font-size: 2.5rem;
      margin-bottom: 0
  }
    }
.header__subtitle {
    font-size: .875rem;
    font-weight: 400;
    margin-bottom: 0;
  }
@media screen and (min-width: 768px) {
.header__subtitle {
      flex-grow: 1;
      text-align: right
  }
    }

.locations {
  padding: 2rem 0;
  max-width: 100vw;
  overflow: scroll;
  -webkit-overflow-scrolling: touch;
}

.locations__container {
  }

.locations__option {
    position: relative;
    display: inline-block;
    height: 80px;
    width: 120px;
    margin-right: 2rem;
  }

.locations__option .surfbreak {
      opacity: 0;
      width: 0;
      height: 0;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

.locations__option .surfbreak--is-active + label {
        color: #fff;
        background-image:
          url('//unsplash.it/300/200?image=1041'),
          linear-gradient(to bottom right, #FA5A43, #DC4F3B);
        background-size: cover;
        background-blend-mode: soft-light;
        -webkit-transform: scale(1.1);
                transform: scale(1.1);
      }

.locations__option .surfbreak--is-active + label:before {
          opacity: 0;
        }

.is-loading.is-active .locations__option .surfbreak--is-active + label:before {
            opacity: 1;
          }

.locations__option label {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      border-radius: 6px;
      color: #222;
      background-image: linear-gradient(to bottom right, #eee, #ddd);
      cursor: pointer;
      transition: -webkit-transform ease-out 150ms;
      transition: transform ease-out 150ms;
      transition: transform ease-out 150ms, -webkit-transform ease-out 150ms;
    }

.locations__option label:before {
        content: "";
        position: absolute;
        top: calc(50% - 10px);
        right: calc(50% - 10px);
        width: 20px;
        height: 20px;
        border: 5px solid rgba(255, 255, 255, .25);
        border-bottom-color: rgba(255, 255, 255, .5);
        border-radius: 50%;
        -webkit-animation: spin 1s infinite linear;
                animation: spin 1s infinite linear;
        opacity: 0;
      }

.locations__option span {
      position: absolute;
      left: calc(2rem / 4);
      bottom: calc(2rem / 4);
      width: calc(100% - 2rem/2);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      height: 1rem;
      font-size: .875rem;
      font-weight: 600;
    }

/**
  COMPONENTS
**/
.components {
  padding: 0 2rem;
}
.components__row {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }
@media screen and (min-width: 768px) {
.components__row {
      display: flex
  }
    }
.components__row:before {
    content: '';
    display: table;
  }
@media screen and (min-width: 768px) {
    }
.components__row:after {
    content: '';
    display: table;
    clear: both;
  }
@media screen and (min-width: 768px) {
    }

.component {
  border-radius: 6px;
  overflow: hidden;
  margin-bottom: 2rem;
  background-color: #111;
  opacity: .25;
  transition: all ease-out 150ms;
}

.is-active .component {
    opacity: 1;
  }

.is-loading.is-active .component {
    opacity: .5;
    pointer-events: none;
    transition-delay: 150ms;
  }

.component__title {
    height: calc(2rem + 1.25rem);
    padding: calc(2rem/2);
    background-color: rgba(0,0,0,.125);
    opacity: 0;
    transition: opacity ease-out 150ms;
  }

.is-active .component__title {
      opacity: 1;
    }

.component__title h4 {
      margin: 0;
      font-size: 1.25rem;
      font-weight: 700;
      letter-spacing: .05rem;
      line-height: 1;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

.component__main {
    overflow: hidden;
    height: calc(100% - (2rem + 1.25rem));
    position: relative;
    padding: calc(2rem/2);
  }

.component__main--np {
      padding: 0;
    }

@media screen and (min-width: 768px) {

.component__main {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column
  }
    }

.component__main > span {
      display: block;
      line-height: 1;
      text-align: center;
      font-size: 1.375rem;
      margin-top: calc(2rem/2);
    }

.component__main > span.txt-large {
        font-size: 3rem;
        text-shadow: 1px 1px 0 rgba(0,0,0,.125);
        margin-top: 0;
      }

@media screen and (min-width: 768px) {

.component__main > span.txt-large {
          font-size: 7rem
      }
        }

.component__main > span.txt-large span {
          font-size: 2rem;
          font-weight: 600;
        }

@media screen and (min-width: 768px) {

.component__main > span.txt-large span {
            font-size: 4rem
        }
          }

.component__main > span.txt-medium {
        margin: 0;
        font-size: 2rem;
        font-weight: 600;
      }

@media screen and (min-width: 768px) {

.component__main > span.txt-medium {
          font-size: 4rem
      }
        }

.is-active .component--red {
      background-color: #FA5A43;
    }

.is-active .component--blue {
      background-color: #313E51;
    }

.component:before {
  content: '';
  display: table;
}

.is-active .component:before {
  }

.is-loading.is-active .component:before {
  }

.is-active .component:before__title {
    }

.component:before__title h4 {
    }

.component:before__main--np {
    }

@media screen and (min-width: 768px) {
    }

@media screen and (min-width: 768px) {
        }

@media screen and (min-width: 768px) {
          }

@media screen and (min-width: 768px) {
        }

.is-active .component:before--red {
    }

.is-active .component:before--blue {
    }

.component:after {
  content: '';
  display: table;
  clear: both;
}

.is-active .component:after {
  }

.is-loading.is-active .component:after {
  }

.is-active .component:after__title {
    }

.component:after__title h4 {
    }

.component:after__main--np {
    }

@media screen and (min-width: 768px) {
    }

@media screen and (min-width: 768px) {
        }

@media screen and (min-width: 768px) {
          }

@media screen and (min-width: 768px) {
        }

.is-active .component:after--red {
    }

.is-active .component:after--blue {
    }

@media screen and (min-width: 768px) {
      .components__row--2-1 .component--big {
        width: calc(99.9% * 2/3 - (2rem - 2rem * 2/3));
      }
      .components__row--2-1 .component--big:nth-child(1n) {
        float: left;
        margin-right: 2rem;
        clear: none;
      }
      .components__row--2-1 .component--big:last-child {
        margin-right: 0;
      }
      .components__row--2-1 .component--big:nth-child(2n) {
        margin-right: 0;
        float: right;
      }
      .components__row--2-1 .component--big:nth-child(2n + 1) {
        clear: both;
      }
      .components__row--2-1 .component--small {
        width: calc(99.9% * 1/3 - (2rem - 2rem * 1/3));
      }
      .components__row--2-1 .component--small:nth-child(1n) {
        float: left;
        margin-right: 2rem;
        clear: none;
      }
      .components__row--2-1 .component--small:last-child {
        margin-right: 0;
      }
      .components__row--2-1 .component--small:nth-child(2n) {
        margin-right: 0;
        float: right;
      }
      .components__row--2-1 .component--small:nth-child(2n + 1) {
        clear: both;
      }
    .components__row--1-1 .component {
      width: calc(99.9% * 1/2 - (2rem - 2rem * 1/2));
    }
    .components__row--1-1 .component:nth-child(1n) {
      float: left;
      margin-right: 2rem;
      clear: none;
    }
    .components__row--1-1 .component:last-child {
      margin-right: 0;
    }
    .components__row--1-1 .component:nth-child(2n) {
      margin-right: 0;
      float: right;
    }
    .components__row--1-1 .component:nth-child(2n + 1) {
      clear: both;
    }
}

.map {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.compass {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 50%;
  -webkit-transform: rotate(50deg) scale(1.1);
          transform: rotate(50deg) scale(1.1);
}

@media screen and (min-width: 768px) {

.compass {
    padding-bottom: 100%;
    -webkit-transform: rotate(50deg) scale(.75);
            transform: rotate(50deg) scale(.75)
}
  }

.compass__dir {
    position: absolute;
    width: 100%;
    height: 100%;
  }

.compass__dir div {
      position: absolute;
      width: 100%;
      height: 100%;
      transition: -webkit-transform 150ms ease-out;
      transition: transform 150ms ease-out;
      transition: transform 150ms ease-out, -webkit-transform 150ms ease-out;
    }

.compass__dir svg {
      position: absolute;
      width: 79%;
      height: 59%;
      -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg);
    }

@media screen and (min-width: 768px) {

.compass__dir svg {
        width: 59%
    }
      }

.compass__dir svg path {
        fill: #646E7C;
      }

.column-breakdown {
  display: block;
  width: 100%;
  font-size: 1.5rem;
  margin: calc(2rem/2) 0 0;
  padding: calc(2rem/2) 0 0;
  list-style: none;
  line-height: 1.25;
  text-align: center;
  border-top: rgba(0,0,0,.125) 2px solid;
}

.column-breakdown--swell li {
      width: calc(99.9% * 1/3 - (2rem - 2rem * 1/3));
    }

.column-breakdown--swell li:nth-child(1n) {
      float: left;
      margin-right: 2rem;
      clear: none;
    }

.column-breakdown--swell li:last-child {
      margin-right: 0;
    }

.column-breakdown--swell li:nth-child(3n) {
      margin-right: 0;
      float: right;
    }

.column-breakdown--swell li:nth-child(3n + 1) {
      clear: both;
    }

.column-breakdown--swell span {
      display: block;
      font-size: .85rem;
      color: rgba(255,255,255,.75);
    }

.column-breakdown--tide li {
      width: calc(99.9% * 1/4 - (2rem - 2rem * 1/4));
    }

.column-breakdown--tide li:nth-child(1n) {
      float: left;
      margin-right: 2rem;
      clear: none;
    }

.column-breakdown--tide li:last-child {
      margin-right: 0;
    }

.column-breakdown--tide li:nth-child(4n) {
      margin-right: 0;
      float: right;
    }

.column-breakdown--tide li:nth-child(4n + 1) {
      clear: both;
    }

.column-breakdown--tide[data-count="3"] li { width: calc(99.9% * 1/3 - (2rem - 2rem * 1/3)); }

.column-breakdown--tide[data-count="3"] li:nth-child(1n) { float: left; margin-right: 2rem; clear: none; }

.column-breakdown--tide[data-count="3"] li:last-child { margin-right: 0; }

.column-breakdown--tide[data-count="3"] li:nth-child(3n) { margin-right: 0; float: right; }

.column-breakdown--tide[data-count="3"] li:nth-child(3n + 1) { clear: both; }

.column-breakdown--tide h4 {
      font-weight: 200;
      margin: 0;
    }

.column-breakdown--tide span {
      display: block;
      font-size: .85rem;
      color: rgba(255,255,255,.75);
    }

#tide-graph {
  width: 100%;
}

#tide-graph svg {
    display: block;
    width: 100%;
  }

#tide-graph svg text {
      font-size: .75rem;
      fill: #fff;
      pointer-events: none;
    }

#tide-graph svg rect {
      fill: #202835;
      transition: all 250ms ease-out;
      cursor: pointer;
    }
</style>
<script>
/*
  HELPERS
*/

function average(arr) {
  let sum = arr.reduce((memo, num) => {
    return memo + num;
  }, 0);
  return sum / (arr.length === 0 ? 1 : arr.length);
}

function roundTenths(num) {
  return Math.round(num * 10) / 10;
}

function roundHundreths(num) {
  return Math.round(num * 100) / 100;
}

function roundHalf(num) {
  return Math.round(num * 2) / 2;
}

function degToCompass(num) {
  let val = Math.floor(num / 22.5 + 0.5),
  dirs = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
  return dirs[val % 16];
}

/*
    APP
  */
const corsProxy = 'https://cors-anywhere.herokuapp.com/';
const breakOptions = [
{
  id: '5538',
  name: 'Ala Moana',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5538?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '4756',
  name: 'Chuns',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/4756?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '10845',
  name: 'Makaha',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/10845?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '5540',
  name: 'Makapuu Beach',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5540?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '10838',
  name: 'Popoia Island',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/10838?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '5533',
  name: 'Populars',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5533?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '10837',
  name: 'Sandys Beach Park',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/10837?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '4746',
  name: 'Sunset',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/4746?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

// {
//   id: null,
//   name: '–––',
//   url: null
// },
{
  id: '5015',
  name: 'Fort Point',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5015?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '4127',
  name: 'Ocean Beach',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/4127?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '5013',
  name: 'Pacifica',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5013?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' },

{
  id: '5090',
  name: 'Stinson Beach',
  url: corsProxy + 'https://api.surfline.com/v1/forecasts/5090?resources=surf,wind,tide,weather&days=1&getAllSpots=false&units=e&interpolate=false&showOptimal=false' }];



let mapScript = document.createElement('script');
mapScript.type = 'text/javascript';
mapScript.src = '//maps.googleapis.com/maps/api/js?key=AIzaSyDsIY-GESpfBfIGFHnpcmzcBZkhSPThyto';
mapScript.defer = true;
mapScript.async = true;
let s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mapScript, s);

let report = new Vue({
  el: '#report',
  data: {
    isActive: false,
    isLoading: false,
    subtitle: 'Choose a surf break below',
    surfBreaks: breakOptions,
    activeSurfBreak: breakOptions[0],
    current: '',
    min: '',
    max: '',
    location: {
      lat: '',
      lng: '' },

    swells: [],
    wind: {
      speed: '',
      direction: '' },

    sun: {
      rise: '',
      set: '' },

    tide: {
      graph: '',
      data: '',
      extremes: [] },

    temperature: {
      min: '',
      max: '' } },


  created: function () {
    this.setWidth();
  },
  mounted: function () {
    this.isActive = true;
    this.getSurf(breakOptions[0]);
  },
  computed: {
    surfRange: function () {
      return this.min + ' - ' + this.max + '<span>ft</span>';
    },
    sunRange: function () {
      return this.sun.rise + ' - ' + this.sun.set;
    },
    tempRange: function () {
      return this.temperature.min + ' - ' + this.temperature.max;
    } },

  watch: {
    current: function (selection) {
      if (!selection.id) return;
      if (!this.isActive) this.isActive = true;

      this.getSurf(selection);
    } },

  methods: {
    setWidth: function () {
      let locationList = document.querySelector('.locations__container'),
      firstEl = document.querySelectorAll('.locations__option')[0],
      titleLeft = document.querySelector('.header__title').getBoundingClientRect().left,
      width = firstEl.getBoundingClientRect().width + parseInt(window.getComputedStyle(firstEl)['margin-right']),
      count = this.surfBreaks.length;

      locationList.style.paddingLeft = `${titleLeft}px`;
      locationList.style.paddingRight = `${titleLeft}px`;
      locationList.style.width = `${count * width + titleLeft * 2}px`;
    },
    getSurf: function (selection) {
      this.isLoading = true;
      this.activeSurfBreak = selection;

      axios.get(selection.url).
      then(response => {
        this.isLoading = false;
        let result = {
          date: response.data.Surf.startDate_pretty_LOCAL,
          surfMax: response.data.Surf.surf_max[0],
          surfMin: response.data.Surf.surf_min[0],
          location: {
            longitude: response.data.lon,
            latitude: response.data.lat },

          swells: [
          {
            angle: response.data.Surf.swell_direction1[0],
            height: response.data.Surf.spot.swell_height1[0],
            period: response.data.Surf.spot.swell_period1[0] },

          {
            angle: response.data.Surf.swell_direction2[0],
            height: response.data.Surf.spot.swell_height2[0],
            period: response.data.Surf.spot.swell_period2[0] },

          {
            angle: response.data.Surf.swell_direction3[0],
            height: response.data.Surf.spot.swell_height3[0],
            period: response.data.Surf.spot.swell_period3[0] }],


          sun: {
            rise: response.data.Tide.SunPoints[0].Rawtime,
            set: response.data.Tide.SunPoints[1].Rawtime },

          temperature: {
            min: response.data.Weather.temp_min,
            max: response.data.Weather.temp_max },

          tide: {
            data: response.data.Tide.dataPoints,
            extremes: response.data.Tide.dataPoints },

          wind: {
            speed: response.data.Wind.wind_speed[0],
            angle: response.data.Wind.wind_direction[0] } };



        this.subtitle = 'Actual data from ' + moment(result.date, 'MMMM DD, YYYY kk:mm:ss').format('M/D/YYYY');

        this.max = average(result.surfMax) < .5 ? 'flat' : roundHalf(average(result.surfMax));
        this.min = average(result.surfMin) < .5 ? 'flat' : roundHalf(average(result.surfMin));

        this.location.lng = result.location.longitude;
        this.location.lat = result.location.latitude;
        this.buildMap(this.location.lat, this.location.lng);

        result.swells.forEach((obj, index) => {
          this.swells[index] = {
            angle: average(result.swells[index].angle),
            direction: degToCompass(average(result.swells[index].angle)),
            height: roundTenths(average(result.swells[index].height)),
            period: roundTenths(average(result.swells[index].period)) };

        });

        this.sun.rise = moment(result.sun.rise, 'MMMM DD, YYYY HH:mm:ss').format('h:mma');
        this.sun.set = moment(result.sun.set, 'MMMM DD, YYYY HH:mm:ss').format('h:mma');

        this.temperature.min = roundTenths(average(result.temperature.min));
        this.temperature.max = roundTenths(average(result.temperature.max));

        this.tide.data = result.tide.data.
        filter(dataPoint => dataPoint.type == 'NORMAL').
        filter(dataPoint => {
          let dataTime = moment(dataPoint.Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('MM/DD'),
          startTime = moment(result.tide.data[0].Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('MM/DD');
          return dataTime === startTime;
        }).
        map(dataPoint => {
          return {
            time: moment(dataPoint.Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('h:mma'),
            height: dataPoint.height };

        });
        this.buildTide(this.tide.data);
        this.tide.extremes = result.tide.data.
        filter(dataPoint => dataPoint.type == 'High' || dataPoint.type == 'Low').
        filter(dataPoint => {
          let dataTime = moment(dataPoint.Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('MM/DD'),
          startTime = moment(result.tide.data[0].Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('MM/DD');
          return dataTime === startTime;
        }).
        map(dataPoint => {
          return {
            time: moment(dataPoint.Rawtime, 'MMMM DD, YYYY HH:mm:ss').format('h:mma'),
            height: dataPoint.height,
            type: dataPoint.type };

        });

        this.wind.speed = Math.round(average(result.wind.speed));
        this.wind.direction = degToCompass(average(result.wind.angle));
      }).
      catch(error => {
        this.isLoading = false;
        console.error(error);
      });
    },
    buildMap: function (lat, lng) {
      this.center = { lat: parseFloat(lat), lng: parseFloat(lng) };

      if (this.map) {
        this.map.panTo(this.center);
        return;
      }

      this.map = new google.maps.Map(document.querySelector('.map'), {
        center: this.center,
        zoom: 10,
        disableDefaultUI: true,
        styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#313E51" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#313E51" }, { "lightness": -25 }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "color": "#313E51" }, { "lightness": -40 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "visibility": "off" }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "off" }] }, { "elementType": "labels.text.fill", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative", "elementType": "geometry", "stylers": [{ "visibility": "off" }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "visibility": "off" }] }] });


      window.addEventListener('resize', () => {
        this.map.panTo(this.center);
      }, true);
    },
    buildTide: function (data) {
      let margin = { top: 0, right: 0, bottom: 0, left: 0 },
      width = 400,
      widthBar = width / data.length,
      height = 150,
      graph = d3.select('#tide-graph');

      const HEIGHTS = d3.set(data, d => {
        return d.height;
      }),
      TIMES = d3.set(data, d => {
        return d.time;
      }),
      EXTENT_TIMES = d3.extent(TIMES.values(), d => {
        return d;
      }),
      EXTENT_HEIGHTS = d3.extent(HEIGHTS.values(), d => {
        return d;
      }),
      X_SCALE = d3.scaleTime().
      domain([EXTENT_TIMES[0], EXTENT_TIMES[1]]).
      range([0, width]),
      Y_SCALE = d3.scaleLinear().
      domain([0, Math.ceil(EXTENT_HEIGHTS[1])]).
      range([height / 10, height]);

      if (!graph.select('svg').nodes().length) {
        graph.
        append('svg').
        attr('viewBox', `0 0 ${width} ${height}`).
        attr('preserveAspectRatio', 'xMidYMid meet');
      } else {
        graph.
        selectAll('rect').
        remove();
      }

      graph.select('svg').
      selectAll('rect').
      data(data).
      enter().
      append('rect').
      on('mouseover', function (d, i, elements) {
        let thisNode = d3.select(this),
        thisHeight = roundTenths(d.height),
        thisTime = d.time;

        graph.select('svg').
        append('text').
        attr('x', 8).
        attr('y', height - 8).
        html(thisHeight + '’ @ ' + thisTime);

        d3.selectAll(elements).
        filter(':not(:hover)').
        style('fill-opacity', .5);
      }).
      on('mouseout', function (d, i, elements) {
        d3.selectAll(elements).
        style('fill-opacity', 1);

        graph.selectAll('text').
        remove();
      }).
      attr('width', widthBar - widthBar / 2).
      attr('x', (d, i) => i * widthBar + widthBar / 4).
      attr('y', height).
      attr('ry', widthBar / 4).
      attr('rx', widthBar / 4).
      transition().
      duration(500).
      attr('height', d => {
        return Y_SCALE(d.height);
      }).
      attr('y', d => {
        return height - Y_SCALE(d.height);
      });


    } } });
</script>