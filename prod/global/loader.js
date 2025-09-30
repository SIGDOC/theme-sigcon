// Assign paths of JS files
const papaparsePath = tr_theme_url + "/prod/global/vendor/papaparse.js";
const schedulePath = tr_theme_url + "/prod/global/vendor/schedule.js";
const gsapPath = tr_theme_url + "/prod/global/vendor/gsap/gsap.min.js";
const scrollTrigPath = tr_theme_url + "/prod/global/vendor/gsap/ScrollTrigger.min.js";
const drawSVGPath = tr_theme_url + "/prod/global/vendor/gsap/DrawSVGPlugin.min.js";
const splittingPath = tr_theme_url + "/prod/global/vendor/gsap/splitting.min.js";

// Listify the paths in essential loading sequence
const resourceList = [
  papaparsePath,
  gsapPath,
  scrollTrigPath,
  drawSVGPath,
  splittingPath
];

// Load a script from given `url`
const loadScript = (url) => {
  return new Promise((resolve, reject) => {
      const script = document.createElement('script');
      script.type = "text/javascript";
      script.async = true;
      script.src = url;

      script.addEventListener('load', () => {
          // The script is loaded completely
          resolve(true);
      });
      script.addEventListener("error", (ev) => {
        reject({
          status: false,
          message: "Failed to load the script"
        });
      });

      document.body.appendChild(script);
  });
};

// Perform all promises in the order
const waterfall = (promises) => {
  return promises.reduce(
      function (p, c) {
          // Waiting for `p` completed
          return p.then(() => {
              // and then `c`
              return c.then((result) => {
                  return true;
              });
          });
      },
      // The initial value passed to the reduce method
      Promise.resolve([])
  );
};

// Load an array of scripts in order
const loadScriptsInOrder = (arrayOfJs) => {
  const promises = arrayOfJs.map((url) => {
    return loadScript(url);
  });
  return waterfall(promises);
};

loadScriptsInOrder(resourceList)
.then(() => {
  // All scripts are loaded completely
  const logoScriptEle = document.createElement("script")
  logoScriptEle.type = "text/javascript"
  logoScriptEle.src = tr_theme_url + "/prod/global/logo.js"
  document.body.appendChild(logoScriptEle)

  const landingScriptEle = document.createElement("script")
  landingScriptEle.type = "text/javascript"
  landingScriptEle.src = tr_theme_url + "/prod/global/landing-cards.js"
  document.body.appendChild(landingScriptEle)

  const scheduleScriptEle = document.createElement("script")
  scheduleScriptEle.type = "text/javascript"
  scheduleScriptEle.src = schedulePath
  document.body.appendChild(scheduleScriptEle)
})
.catch( err => {

  //- Set --progress count for  the static page
  async function* applyNoJsPanelStyles() {
    let panels = document.querySelectorAll(".panel");

    for (let i = 0; i < panels.length; i++) yield panels[i];
  }
  //- Apply the styles per panel
  (async () => {
    for await (const panel of applyNoJsPanelStyles()) {
      panel.style.cssText = '--progress: 0.5 !important;opacity: 1;';
    }
  })();

  //- Set h2 font color the static page
  async function* applyNoJsH2Styles() {
    let h2Headings = document.querySelectorAll(".panel h2");
    for (let i = 0; i < h2Headings.length; i++) yield h2Headings[i];
  }
  //- Apply the styles per panel h2
  (async () => {
    for await (const panelH2 of applyNoJsH2Styles()) {
      panelH2.style.cssText = 'color: var(--primaryColor);';
    }
  })();

  let mainWrap = document.querySelector("#landing-cards-wrap");
  mainWrap.style.cssText = 'transform: translateX(0);';
})
