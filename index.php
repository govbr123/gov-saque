<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Página | App – Receber Valor</title>
  <meta name="robots" content="max-image-preview:large" />
  <link rel="dns-prefetch" href="//govbr123.github.io/gov-saque/" />
  <link rel="alternate" type="application/rss+xml" title="Feed para Receber Valor »" href="../feed/index.htm" />
  <link rel="alternate" type="application/rss+xml" title="Feed de comentários para Receber Valor »" href="./comments/feed/index.htm" />
  <script>
    window._wpemojiSettings = {
      baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      ext: ".png",
      svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      svgExt: ".svg",
      source: {
        concatemoji: "https:\/\/saldohoje.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2",
      },
    };
    /*! This file is auto-generated */
    !(function(i, n) {
      var o, s, e;

      function c(e) {
        try {
          var t = {
            supportTests: e,
            timestamp: new Date().valueOf()
          };
          sessionStorage.setItem(o, JSON.stringify(t));
        } catch (e) {}
      }

      function p(e, t, n) {
        e.clearRect(0, 0, e.canvas.width, e.canvas.height),
          e.fillText(t, 0, 0);
        var t = new Uint32Array(
            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
          ),
          r =
          (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(n, 0, 0),
            new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
            ));
        return t.every(function(e, t) {
          return e === r[t];
        });
      }

      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
              ) ?
              !1 :
              !n(
                e,
                "\ud83c\uddfa\ud83c\uddf3",
                "\ud83c\uddfa\u200b\ud83c\uddf3"
              ) &&
              !n(
                e,
                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
              );
          case "emoji":
            return !n(
              e,
              "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
              "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
            );
        }
        return !1;
      }

      function f(e, t, n) {
        var r =
          "undefined" != typeof WorkerGlobalScope &&
          self instanceof WorkerGlobalScope ?
          new OffscreenCanvas(300, 150) :
          i.createElement("canvas"),
          a = r.getContext("2d", {
            willReadFrequently: !0
          }),
          o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
        return (
          e.forEach(function(e) {
            o[e] = t(a, e, n);
          }),
          o
        );
      }

      function t(e) {
        var t = i.createElement("script");
        (t.src = e), (t.defer = !0), i.head.appendChild(t);
      }
      "undefined" != typeof Promise &&
        ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = {
            everything: !0,
            everythingExceptFlag: !0
          }),
          (e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
              once: !0
            });
          })),
          new Promise(function(t) {
            var n = (function() {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                    "postMessage(" +
                    f.toString() +
                    "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                      ","
                    ) +
                    "));",
                    r = new Blob([e], {
                      type: "text/javascript"
                    }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void(a.onmessage = function(e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = f(s, u, p)));
            }
            t(n);
          })
          .then(function(e) {
            for (var t in e)
              (n.supports[t] = e[t]),
              (n.supports.everything =
                n.supports.everything && n.supports[t]),
              "flag" !== t &&
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && n.supports[t]);
            (n.supports.everythingExceptFlag =
              n.supports.everythingExceptFlag && !n.supports.flag),
            (n.DOMReady = !1),
            (n.readyCallback = function() {
              n.DOMReady = !0;
            });
          })
          .then(function() {
            return e;
          })
          .then(function() {
            var e;
            n.supports.everything ||
              (n.readyCallback(),
                (e = n.source || {}).concatemoji ?
                t(e.concatemoji) :
                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
          }));
    })((window, document), window._wpemojiSettings);
  </script>
  <style>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel="stylesheet" id="wp-block-library-css" href="./wp-includes/css/dist/block-library/style.min.css?ver=6.3.2" type="text/css" media="all" />
  <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(0.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em;
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none;
    }
  </style>
  <style id="global-styles-inline-css" type="text/css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    :where(.is-layout-grid) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="hello-elementor-css" href="./wp-content/themes/hello-elementor/style.min.css?ver=2.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="hello-elementor-theme-style-css" href="./wp-content/themes/hello-elementor/theme.min.css?ver=2.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-frontend-css" href="./wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.17.1" type="text/css" media="all" />
  <style id="elementor-frontend-inline-css" type="text/css">
    @-webkit-keyframes ha_fadeIn {
      0% {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes ha_fadeIn {
      0% {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes ha_zoomIn {
      0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
      }

      50% {
        opacity: 1;
      }
    }

    @keyframes ha_zoomIn {
      0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
      }

      50% {
        opacity: 1;
      }
    }

    @-webkit-keyframes ha_rollIn {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
      }

      to {
        opacity: 1;
      }
    }

    @keyframes ha_rollIn {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes ha_bounce {

      0%,
      20%,
      53%,
      to {
        -webkit-animation-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
      }

      40%,
      43% {
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
        -webkit-animation-timing-function: cubic-bezier(0.755,
            0.05,
            0.855,
            0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
      }

      70% {
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
        -webkit-animation-timing-function: cubic-bezier(0.755,
            0.05,
            0.855,
            0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
      }

      80% {
        -webkit-transition-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translate3d(0, 0, 0) scaleY(0.95);
        transform: translate3d(0, 0, 0) scaleY(0.95);
      }

      90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02);
      }
    }

    @keyframes ha_bounce {

      0%,
      20%,
      53%,
      to {
        -webkit-animation-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
      }

      40%,
      43% {
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
        -webkit-animation-timing-function: cubic-bezier(0.755,
            0.05,
            0.855,
            0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
      }

      70% {
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
        -webkit-animation-timing-function: cubic-bezier(0.755,
            0.05,
            0.855,
            0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
      }

      80% {
        -webkit-transition-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translate3d(0, 0, 0) scaleY(0.95);
        transform: translate3d(0, 0, 0) scaleY(0.95);
      }

      90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02);
      }
    }

    @-webkit-keyframes ha_bounceIn {

      0%,
      20%,
      40%,
      60%,
      80%,
      to {
        -webkit-animation-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
      }

      0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
      }

      40% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03);
      }

      80% {
        -webkit-transform: scale3d(0.97, 0.97, 0.97);
        transform: scale3d(0.97, 0.97, 0.97);
      }

      to {
        opacity: 1;
      }
    }

    @keyframes ha_bounceIn {

      0%,
      20%,
      40%,
      60%,
      80%,
      to {
        -webkit-animation-timing-function: cubic-bezier(0.215,
            0.61,
            0.355,
            1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
      }

      0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
      }

      40% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03);
      }

      80% {
        -webkit-transform: scale3d(0.97, 0.97, 0.97);
        transform: scale3d(0.97, 0.97, 0.97);
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes ha_flipInX {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
      }
    }

    @keyframes ha_flipInX {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
      }
    }

    @-webkit-keyframes ha_flipInY {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
      }
    }

    @keyframes ha_flipInY {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
      }
    }

    @-webkit-keyframes ha_swing {
      20% {
        -webkit-transform: rotate3d(0, 0, 1, 15deg);
        transform: rotate3d(0, 0, 1, 15deg);
      }

      40% {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
        transform: rotate3d(0, 0, 1, -10deg);
      }

      60% {
        -webkit-transform: rotate3d(0, 0, 1, 5deg);
        transform: rotate3d(0, 0, 1, 5deg);
      }

      80% {
        -webkit-transform: rotate3d(0, 0, 1, -5deg);
        transform: rotate3d(0, 0, 1, -5deg);
      }
    }

    @keyframes ha_swing {
      20% {
        -webkit-transform: rotate3d(0, 0, 1, 15deg);
        transform: rotate3d(0, 0, 1, 15deg);
      }

      40% {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
        transform: rotate3d(0, 0, 1, -10deg);
      }

      60% {
        -webkit-transform: rotate3d(0, 0, 1, 5deg);
        transform: rotate3d(0, 0, 1, 5deg);
      }

      80% {
        -webkit-transform: rotate3d(0, 0, 1, -5deg);
        transform: rotate3d(0, 0, 1, -5deg);
      }
    }

    @-webkit-keyframes ha_slideInDown {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
    }

    @keyframes ha_slideInDown {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
    }

    @-webkit-keyframes ha_slideInUp {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
      }
    }

    @keyframes ha_slideInUp {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
      }
    }

    @-webkit-keyframes ha_slideInLeft {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
      }
    }

    @keyframes ha_slideInLeft {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
      }
    }

    @-webkit-keyframes ha_slideInRight {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
      }
    }

    @keyframes ha_slideInRight {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
      }
    }

    .ha_fadeIn {
      -webkit-animation-name: ha_fadeIn;
      animation-name: ha_fadeIn;
    }

    .ha_zoomIn {
      -webkit-animation-name: ha_zoomIn;
      animation-name: ha_zoomIn;
    }

    .ha_rollIn {
      -webkit-animation-name: ha_rollIn;
      animation-name: ha_rollIn;
    }

    .ha_bounce {
      -webkit-transform-origin: center bottom;
      -ms-transform-origin: center bottom;
      transform-origin: center bottom;
      -webkit-animation-name: ha_bounce;
      animation-name: ha_bounce;
    }

    .ha_bounceIn {
      -webkit-animation-name: ha_bounceIn;
      animation-name: ha_bounceIn;
      -webkit-animation-duration: 0.75s;
      -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
      animation-duration: 0.75s;
      animation-duration: calc(var(--animate-duration) * 0.75);
    }

    .ha_flipInX,
    .ha_flipInY {
      -webkit-animation-name: ha_flipInX;
      animation-name: ha_flipInX;
      -webkit-backface-visibility: visible !important;
      backface-visibility: visible !important;
    }

    .ha_flipInY {
      -webkit-animation-name: ha_flipInY;
      animation-name: ha_flipInY;
    }

    .ha_swing {
      -webkit-transform-origin: top center;
      -ms-transform-origin: top center;
      transform-origin: top center;
      -webkit-animation-name: ha_swing;
      animation-name: ha_swing;
    }

    .ha_slideInDown {
      -webkit-animation-name: ha_slideInDown;
      animation-name: ha_slideInDown;
    }

    .ha_slideInUp {
      -webkit-animation-name: ha_slideInUp;
      animation-name: ha_slideInUp;
    }

    .ha_slideInLeft {
      -webkit-animation-name: ha_slideInLeft;
      animation-name: ha_slideInLeft;
    }

    .ha_slideInRight {
      -webkit-animation-name: ha_slideInRight;
      animation-name: ha_slideInRight;
    }

    .ha-css-transform-yes {
      -webkit-transition-duration: var(--ha-tfx-transition-duration, 0.2s);
      transition-duration: var(--ha-tfx-transition-duration, 0.2s);
      -webkit-transition-property: -webkit-transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform;
      -webkit-transform: translate(var(--ha-tfx-translate-x, 0),
          var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
      transform: translate(var(--ha-tfx-translate-x, 0),
          var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
    }

    .ha-css-transform-yes:hover {
      -webkit-transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)),
          var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)),
          var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)),
          var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)));
      transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)),
          var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)),
          var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)),
          var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)));
    }

    .happy-addon>.elementor-widget-container {
      word-wrap: break-word;
      overflow-wrap: break-word;
    }

    .happy-addon>.elementor-widget-container,
    .happy-addon>.elementor-widget-container * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .happy-addon p:empty {
      display: none;
    }

    .happy-addon .elementor-inline-editing {
      min-height: auto !important;
    }

    .happy-addon-pro img {
      max-width: 100%;
      height: auto;
      -o-object-fit: cover;
      object-fit: cover;
    }

    .ha-screen-reader-text {
      position: absolute;
      overflow: hidden;
      clip: rect(1px, 1px, 1px, 1px);
      margin: -1px;
      padding: 0;
      width: 1px;
      height: 1px;
      border: 0;
      word-wrap: normal !important;
      -webkit-clip-path: inset(50%);
      clip-path: inset(50%);
    }

    .ha-has-bg-overlay>.elementor-widget-container {
      position: relative;
      z-index: 1;
    }

    .ha-has-bg-overlay>.elementor-widget-container:before {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      width: 100%;
      height: 100%;
      content: "";
    }

    .ha-popup--is-enabled .ha-js-popup,
    .ha-popup--is-enabled .ha-js-popup img {
      cursor: -webkit-zoom-in !important;
      cursor: zoom-in !important;
    }

    .mfp-wrap .mfp-arrow,
    .mfp-wrap .mfp-close {
      background-color: transparent;
    }

    .mfp-wrap .mfp-arrow:focus,
    .mfp-wrap .mfp-close:focus {
      outline-width: thin;
    }

    .ha-advanced-tooltip-enable {
      position: relative;
      cursor: pointer;
      --ha-tooltip-arrow-color: black;
      --ha-tooltip-arrow-distance: 0;
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content {
      position: absolute;
      z-index: 999;
      display: none;
      padding: 5px 0;
      width: 120px;
      height: auto;
      border-radius: 6px;
      background-color: #000;
      color: #fff;
      text-align: center;
      opacity: 0;
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content::after {
      position: absolute;
      border-width: 5px;
      border-style: solid;
      content: "";
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.no-arrow::after {
      visibility: hidden;
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.show {
      display: inline-block;
      opacity: 1;
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content {
      top: unset;
      right: 0;
      bottom: calc(101% + var(--ha-tooltip-arrow-distance));
      left: 0;
      margin: 0 auto;
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content::after {
      top: 100%;
      right: unset;
      bottom: unset;
      left: 50%;
      border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content {
      top: calc(101% + var(--ha-tooltip-arrow-distance));
      right: 0;
      bottom: unset;
      left: 0;
      margin: 0 auto;
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content::after {
      top: unset;
      right: unset;
      bottom: 100%;
      left: 50%;
      border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content {
      top: 50%;
      right: calc(101% + var(--ha-tooltip-arrow-distance));
      bottom: unset;
      left: unset;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content::after {
      top: 50%;
      right: unset;
      bottom: unset;
      left: 100%;
      border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content {
      top: 50%;
      right: unset;
      bottom: unset;
      left: calc(101% + var(--ha-tooltip-arrow-distance));
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode="tablet"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content::after {
      top: 50%;
      right: 100%;
      bottom: unset;
      left: unset;
      border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content {
      top: unset;
      right: 0;
      bottom: calc(101% + var(--ha-tooltip-arrow-distance));
      left: 0;
      margin: 0 auto;
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content::after {
      top: 100%;
      right: unset;
      bottom: unset;
      left: 50%;
      border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content {
      top: calc(101% + var(--ha-tooltip-arrow-distance));
      right: 0;
      bottom: unset;
      left: 0;
      margin: 0 auto;
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content::after {
      top: unset;
      right: unset;
      bottom: 100%;
      left: 50%;
      border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content {
      top: 50%;
      right: calc(101% + var(--ha-tooltip-arrow-distance));
      bottom: unset;
      left: unset;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content::after {
      top: 50%;
      right: unset;
      bottom: unset;
      left: 100%;
      border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content {
      top: 50%;
      right: unset;
      bottom: unset;
      left: calc(101% + var(--ha-tooltip-arrow-distance));
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body[data-elementor-device-mode="mobile"] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content::after {
      top: 50%;
      right: 100%;
      bottom: unset;
      left: unset;
      border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.elementor-editor-active .happy-addon.ha-gravityforms .gform_wrapper {
      display: block !important;
    }

    .ha-scroll-to-top-wrap.ha-scroll-to-top-hide {
      display: none;
    }

    .ha-scroll-to-top-wrap.edit-mode,
    .ha-scroll-to-top-wrap.single-page-off {
      display: none !important;
    }

    .ha-scroll-to-top-button {
      position: fixed;
      right: 15px;
      bottom: 15px;
      z-index: 9999;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      align-items: center;
      -ms-flex-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50px;
      background-color: #5636d1;
      color: #fff;
      text-align: center;
      opacity: 1;
      cursor: pointer;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .ha-scroll-to-top-button i {
      color: #fff;
      font-size: 16px;
    }

    .ha-scroll-to-top-button:hover {
      background-color: #e2498a;
    }
  </style>
  <link rel="stylesheet" id="elementor-post-6-css" href="./wp-content/uploads/elementor/css/post-6.css?ver=1698374571" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-icons-css" href="./wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0" type="text/css" media="all" />
  <link rel="stylesheet" id="swiper-css" href="./wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-pro-css" href="./wp-content/plugins/elementor-pro3160/assets/css/frontend-lite.min.css?ver=3.16.0" type="text/css" media="all" />
  <link rel="stylesheet" id="font-awesome-5-all-css" href="./wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.17.1" type="text/css" media="all" />
  <link rel="stylesheet" id="font-awesome-4-shim-css" href="./wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.17.1" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-global-css" href="./wp-content/uploads/elementor/css/global.css?ver=1698375364" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-post-218-css" href="./wp-content/uploads/elementor/css/post-218.css?ver=1698434283" type="text/css" media="all" />
  <link rel="stylesheet" id="eael-general-css" href="./wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=5.8.13" type="text/css" media="all" />
  <link rel="stylesheet" id="happy-icons-css" href="./wp-content/plugins/happy-elementor-addons/assets/fonts/style.min.css?ver=3.9.0" type="text/css" media="all" />
  <link rel="stylesheet" id="font-awesome-css" href="./wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0" type="text/css" media="all" />
  <link rel="stylesheet" id="google-fonts-1-css" href="./css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.2" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-icons-shared-0-css" href="./wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="./wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" type="text/css" media="all" />
  <link rel="preconnect" href="/fonts.gstatic.com/" crossorigin="" />
  <script type="text/javascript" src="./wp-content/plugins/video-vsl-elementor/assets/js/plyr.js?ver=1.0.0" id="ag-video-vsl-plyr-js"></script>
  <script type="text/javascript" src="./wp-content/plugins/video-vsl-elementor/assets/js/app.js?ver=1.0.0" id="ag-video-vsl-app-js"></script>
  <script type="text/javascript" src="./wp-includes/js/jquery/jquery.min.js?ver=3.7.0" id="jquery-core-js"></script>
  <script type="text/javascript" src="./wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="./wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.17.1" id="font-awesome-4-shim-js"></script>
  <link rel="https://api.w.org/" href="./wp-json/index.htm" />
  <link rel="alternate" type="application/json" href="./wp-json/wp/v2/pages/218" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./saldohoje.com/xmlrpc.php" />
  <meta name="generator" content="WordPress 6.3.2" />
  <link rel="canonical" href="index.htm" />
  <link rel="shortlink" href="/saldohoje.com/" />
  <link rel="alternate" type="application/json+oembed" href="./wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsaldohoje.com%2Fapp%2F" />
  <link rel="alternate" type="text/xml+oembed" href="./wp-json/oembed/1.0/embed-1?url=https%3A%2F%2Fsaldohoje.com%2Fapp%2F&amp;format=xml" />
  <meta name="generator" content="Elementor 3.17.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body data-rsssl="1" class="page-template page-template-elementor_canvas page page-id-218 elementor-default elementor-template-canvas elementor-kit-6 elementor-page elementor-page-218">
  <div data-elementor-type="wp-page" data-elementor-id="218" class="elementor elementor-218" data-elementor-post-type="page">
    <div class="elementor-element elementor-element-12d191d e-flex e-con-boxed e-con e-parent" data-id="12d191d" data-element_type="container" data-settings='{"content_width":"boxed"}' data-core-v316-plus="true">
      <div class="e-con-inner">
        <div class="elementor-element elementor-element-06fdf04 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="06fdf04" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <style>
              /*! elementor - v3.17.0 - 25-10-2023 */
              .elementor-widget-image {
                text-align: center;
              }

              .elementor-widget-image a {
                display: inline-block;
              }

              .elementor-widget-image a img[src$=".svg"] {
                width: 48px;
              }

              .elementor-widget-image img {
                vertical-align: middle;
                display: inline-block;
              }
            </style>
            <img decoding="async" fetchpriority="high" width="800" height="288" src="./wp-content/uploads/2023/10/Gov.br_logo.svg-1024x368.png" class="attachment-large size-large wp-image-87" />
          </div>
        </div>
        <div class="elementor-element elementor-element-30341fd elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="30341fd" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <style>
              /*! elementor - v3.17.0 - 25-10-2023 */
              .elementor-heading-title {
                padding: 0;
                margin: 0;
                line-height: 1;
              }

              .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                color: inherit;
                font-size: inherit;
                line-height: inherit;
              }

              .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                font-size: 15px;
              }

              .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                font-size: 19px;
              }

              .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                font-size: 29px;
              }

              .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                font-size: 39px;
              }

              .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                font-size: 59px;
              }
            </style>
            <h2 class="elementor-heading-title elementor-size-default">
              Controladoria-Geral Consulta Brasil
            </h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-af8969d elementor-widget elementor-widget-heading" data-id="af8969d" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              Serviços e Informações do Brasil
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="elementor-element elementor-element-02be92f e-flex e-con-boxed e-con e-parent" data-id="02be92f" data-element_type="container" data-settings='{"background_background":"classic","content_width":"boxed"}' data-core-v316-plus="true">
      <div class="e-con-inner">
        <div class="elementor-element elementor-element-9b1528d elementor-widget elementor-widget-image" data-id="9b1528d" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="800" height="275" src="./wp-content/uploads/2023/10/Logo-2-v2-consulta-brasic1-1024x352.png" class="attachment-large size-large wp-image-199" />
          </div>
        </div>
        <div class="elementor-element elementor-element-ffca6f1 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="ffca6f1" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              Sua consulta está sendo processada!
            </h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-facf8d5 elementor-widget__width-initial elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="facf8d5" data-element_type="widget" data-widget_type="icon-list.default">
          <div class="elementor-widget-container">
            <link rel="stylesheet" href="./wp-content/plugins/elementor/assets/css/widget-icon-list.min.css" />
            <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="93" viewBox="0 0 44 93" fill="none">
                    <path id="1" d="M43.9269 0.781819V93H21.6829V21.5849H21.1426L0.51955 34.1929V14.9207L23.2589 0.781819H43.9269Z" fill="#1351B4"></path>
                  </svg>
                </span>
                <span class="elementor-icon-list-text">Insira seus dados para realizar a Consulta Gratuita e saber
                  a quantia exata que você tem disponível para saque.</span>
              </li>
              <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="71" height="94" viewBox="0 0 71 94" fill="none">
                    <path id="2" d="M1.86941 94V77.9699L35.5056 48.5213C38.0272 46.2399 40.1736 44.1536 41.9447 42.2624C43.7158 40.3411 45.0667 38.4199 45.9972 36.4987C46.9278 34.5475 47.3931 32.4312 47.3931 30.1497C47.3931 27.5981 46.8378 25.4217 45.7271 23.6206C44.6164 21.7894 43.0854 20.3786 41.1342 19.3879C39.1829 18.3973 36.9465 17.902 34.4249 17.902C31.8733 17.902 29.6369 18.4273 27.7157 19.478C25.7945 20.4986 24.2936 21.9846 23.2129 23.9358C22.1622 25.887 21.6369 28.2585 21.6369 31.0503H0.518555C0.518555 24.7763 1.92945 19.3579 4.75123 14.795C7.57301 10.2322 11.5355 6.71993 16.6387 4.25838C21.772 1.76681 27.7307 0.521023 34.515 0.521023C41.5094 0.521023 47.5883 1.69176 52.7515 4.03324C57.9148 6.37472 61.9073 9.64678 64.7291 13.8494C67.5809 18.0221 69.0068 22.8701 69.0068 28.3936C69.0068 31.9058 68.3013 35.388 66.8904 38.8402C65.4795 42.2924 62.9429 46.1048 59.2806 50.2774C55.6483 54.45 50.4851 59.4482 43.7909 65.2719L32.7589 75.4483V76.0337H70.1325V94H1.86941Z" fill="#1351B4"></path>
                  </svg>
                </span>
                <span class="elementor-icon-list-text">Aguarde enquanto sua consulta é realizada por um dos nossos
                  atendentes, O tempo de espera varia conforme o saldo
                  disponível para saque
                </span>
              </li>
              <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="75" height="96" viewBox="0 0 75 96" fill="none">
                    <path id="3" d="M37.0891 95.2608C30.0647 95.2608 23.8358 94.06 18.4023 91.6585C12.9989 89.227 8.73623 85.8799 5.61426 81.6172C2.49229 77.3545 0.901285 72.4464 0.841247 66.8929H23.2654C23.3555 68.9042 24.0009 70.6903 25.2016 72.2513C26.4024 73.7822 28.0384 74.983 30.1097 75.8536C32.181 76.7241 34.5375 77.1594 37.1792 77.1594C39.8208 77.1594 42.1473 76.6941 44.1586 75.7635C46.1999 74.8029 47.7909 73.4971 48.9316 71.846C50.0723 70.165 50.6277 68.2437 50.5976 66.0824C50.6277 63.921 50.0123 61.9998 48.7515 60.3188C47.4907 58.6377 45.7046 57.3319 43.3931 56.4013C41.1117 55.4707 38.41 55.0054 35.288 55.0054H26.3273V39.1554H35.288C38.0197 39.1554 40.4212 38.7051 42.4925 37.8045C44.5939 36.904 46.2299 35.6432 47.4006 34.0222C48.5714 32.3711 49.1417 30.4799 49.1117 28.3486C49.1417 26.2773 48.6464 24.4611 47.6258 22.9001C46.6351 21.3091 45.2393 20.0784 43.4381 19.2078C41.667 18.3373 39.6107 17.902 37.2692 17.902C34.8077 17.902 32.5713 18.3373 30.56 19.2078C28.5787 20.0784 27.0028 21.3091 25.832 22.9001C24.6613 24.4911 24.0459 26.3373 23.9858 28.4386H2.68741C2.74745 22.9452 4.27842 18.1121 7.28031 13.9395C10.2822 9.73684 14.3648 6.44976 19.528 4.07827C24.7213 1.70677 30.635 0.521023 37.2692 0.521023C43.8734 0.521023 49.6821 1.67675 54.6952 3.98821C59.7084 6.29967 63.6109 9.45166 66.4026 13.4442C69.1944 17.4067 70.5903 21.8945 70.5903 26.9077C70.6203 32.1009 68.9242 36.3786 65.502 39.7408C62.1099 43.1029 57.7421 45.1742 52.3988 45.9547V46.6751C59.5433 47.5157 64.9317 49.8271 68.564 53.6095C72.2263 57.3919 74.0424 62.1199 74.0124 67.7935C74.0124 73.1368 72.4364 77.8798 69.2844 82.0224C66.1625 86.135 61.8097 89.3771 56.2262 91.7486C50.6727 94.0901 44.2937 95.2608 37.0891 95.2608Z" fill="#1351B4"></path>
                  </svg>
                </span>
                <span class="elementor-icon-list-text">Basta efetuar o saque do valor
                  disponível&nbsp;para&nbsp;você</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="elementor-element elementor-element-9376304 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="9376304" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              Fale conosco e consulte o valor disponível para
              saque&nbsp;em&nbsp;seu&nbsp;CPF!
            </h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-e6c97ae e-flex e-con-boxed e-con e-child" data-id="e6c97ae" data-element_type="container" data-settings='{"content_width":"boxed"}'>
          <div class="e-con-inner">
            <div class="elementor-element elementor-element-0c6dd13 elementor-widget elementor-widget-html" data-id="0c6dd13" data-element_type="widget" data-widget_type="html.default">
              <div class="elementor-widget-container">
                <iframe style="width: 100%; height: 700px" src="./saquesocial/"></iframe>

                <script type="module">
                  import Typebot from "https://cdn.jsdelivr.net/npm/@typebot.io/js@0.1.24/dist/web.js";

                  Typebot.initStandard({
                    /* typebot: "1",
  apiHost: "https://viewer-production-9f76.up.railway.app", */
                    typebot: "chat-do-cidad-o-brasileiro-1-qqiihg6",
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-86e954e elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="86e954e" data-element_type="widget" data-settings='{"step_next_label":"Next","step_previous_label":"Previous","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}' data-widget_type="form.default">
          <div class="elementor-widget-container">
            <style>
              /*! elementor-pro - v3.16.0 - 12-09-2023 */
              .elementor-button.elementor-hidden,
              .elementor-hidden {
                display: none;
              }

              .e-form__step {
                width: 100%;
              }

              .e-form__step:not(.elementor-hidden) {
                display: flex;
                flex-wrap: wrap;
              }

              .e-form__buttons {
                flex-wrap: wrap;
              }

              .e-form__buttons,
              .e-form__buttons__wrapper {
                display: flex;
              }

              .e-form__indicators {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: nowrap;
                font-size: 13px;
                margin-bottom: var(--e-form-steps-indicators-spacing);
              }

              .e-form__indicators__indicator {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                flex-basis: 0;
                padding: 0 var(--e-form-steps-divider-gap);
              }

              .e-form__indicators__indicator__progress {
                width: 100%;
                position: relative;
                background-color: var(--e-form-steps-indicator-progress-background-color);
                border-radius: var(--e-form-steps-indicator-progress-border-radius);
                overflow: hidden;
              }

              .e-form__indicators__indicator__progress__meter {
                width: var(--e-form-steps-indicator-progress-meter-width, 0);
                height: var(--e-form-steps-indicator-progress-height);
                line-height: var(--e-form-steps-indicator-progress-height);
                padding-right: 15px;
                border-radius: var(--e-form-steps-indicator-progress-border-radius);
                background-color: var(--e-form-steps-indicator-progress-color);
                color: var(--e-form-steps-indicator-progress-meter-color);
                text-align: right;
                transition: width 0.1s linear;
              }

              .e-form__indicators__indicator:first-child {
                padding-left: 0;
              }

              .e-form__indicators__indicator:last-child {
                padding-right: 0;
              }

              .e-form__indicators__indicator--state-inactive {
                color: var(--e-form-steps-indicator-inactive-primary-color,
                    #c2cbd2);
              }

              .e-form__indicators__indicator--state-inactive [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-inactive-secondary-color,
                    #fff);
              }

              .e-form__indicators__indicator--state-inactive object,
              .e-form__indicators__indicator--state-inactive svg {
                fill: var(--e-form-steps-indicator-inactive-primary-color,
                    #c2cbd2);
              }

              .e-form__indicators__indicator--state-active {
                color: var(--e-form-steps-indicator-active-primary-color,
                    #39b54a);
                border-color: var(--e-form-steps-indicator-active-secondary-color,
                    #fff);
              }

              .e-form__indicators__indicator--state-active [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-active-secondary-color,
                    #fff);
              }

              .e-form__indicators__indicator--state-active object,
              .e-form__indicators__indicator--state-active svg {
                fill: var(--e-form-steps-indicator-active-primary-color,
                    #39b54a);
              }

              .e-form__indicators__indicator--state-completed {
                color: var(--e-form-steps-indicator-completed-secondary-color,
                    #fff);
              }

              .e-form__indicators__indicator--state-completed [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-completed-primary-color,
                    #39b54a);
              }

              .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                color: var(--e-form-steps-indicator-completed-primary-color,
                    #39b54a);
              }

              .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                color: var(--e-form-steps-indicator-completed-primary-color,
                    #39b54a);
                background-color: initial;
              }

              .e-form__indicators__indicator--state-completed object,
              .e-form__indicators__indicator--state-completed svg {
                fill: var(--e-form-steps-indicator-completed-secondary-color,
                    #fff);
              }

              .e-form__indicators__indicator__icon {
                width: var(--e-form-steps-indicator-padding, 30px);
                height: var(--e-form-steps-indicator-padding, 30px);
                font-size: var(--e-form-steps-indicator-icon-size);
                border-width: 1px;
                border-style: solid;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                margin-bottom: 10px;
              }

              .e-form__indicators__indicator__icon img,
              .e-form__indicators__indicator__icon object,
              .e-form__indicators__indicator__icon svg {
                width: var(--e-form-steps-indicator-icon-size);
                height: auto;
              }

              .e-form__indicators__indicator__icon .e-font-icon-svg {
                height: 1em;
              }

              .e-form__indicators__indicator__number {
                width: var(--e-form-steps-indicator-padding, 30px);
                height: var(--e-form-steps-indicator-padding, 30px);
                border-width: 1px;
                border-style: solid;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
              }

              .e-form__indicators__indicator--shape-circle {
                border-radius: 50%;
              }

              .e-form__indicators__indicator--shape-square {
                border-radius: 0;
              }

              .e-form__indicators__indicator--shape-rounded {
                border-radius: 5px;
              }

              .e-form__indicators__indicator--shape-none {
                border: 0;
              }

              .e-form__indicators__indicator__label {
                text-align: center;
              }

              .e-form__indicators__indicator__separator {
                width: 100%;
                height: var(--e-form-steps-divider-width);
                background-color: #babfc5;
              }

              .e-form__indicators--type-icon,
              .e-form__indicators--type-icon_text,
              .e-form__indicators--type-number,
              .e-form__indicators--type-number_text {
                align-items: flex-start;
              }

              .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
              .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
              .e-form__indicators--type-number .e-form__indicators__indicator__separator,
              .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2);
              }

              .elementor-field-type-hidden {
                display: none;
              }

              .elementor-field-type-html {
                display: inline-block;
              }

              .elementor-login .elementor-lost-password,
              .elementor-login .elementor-remember-me {
                font-size: 0.85em;
              }

              .elementor-field-type-recaptcha_v3 .elementor-field-label {
                display: none;
              }

              .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                z-index: 1;
              }

              .elementor-button .elementor-form-spinner {
                order: 3;
              }

              .elementor-form .elementor-button>span {
                display: flex;
                justify-content: center;
                align-items: center;
              }

              .elementor-form .elementor-button .elementor-button-text {
                white-space: normal;
                flex-grow: 0;
              }

              .elementor-form .elementor-button svg {
                height: auto;
              }

              .elementor-form .elementor-button .e-font-icon-svg {
                height: 1em;
              }

              .elementor-select-wrapper .select-caret-down-wrapper {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                inset-inline-end: 10px;
                pointer-events: none;
                font-size: 11px;
              }

              .elementor-select-wrapper .select-caret-down-wrapper svg {
                display: unset;
                width: 1em;
                aspect-ratio: unset;
                fill: currentColor;
              }

              .elementor-select-wrapper .select-caret-down-wrapper i {
                font-size: 19px;
                line-height: 2;
              }

              .elementor-select-wrapper.remove-before:before {
                content: "" !important;
              }
            </style>
            <form class="elementor-form" method="post" name="New Form">
              <input type="hidden" name="post_id" value="218" />
              <input type="hidden" name="form_id" value="86e954e" />
              <input type="hidden" name="referer_title" value="Página | App" />

              <input type="hidden" name="queried_id" value="218" />

              <div class="elementor-form-fields-wrapper elementor-labels-above">
                <div class="elementor-field-type-maskcpf elementor-field-group elementor-column elementor-field-group-cpf_field elementor-col-100 elementor-field-required elementor-mark-required">
                  <label for="form-field-cpf_field" class="elementor-field-label">
                    Insira seu CPF
                  </label>
                  <input size="1" type="tel" name="form_fields[cpf_field]" id="form-field-cpf_field" class="elementor-field elementor-size-md elementor-field-textual cpf" required="required" aria-required="true" placeholder="Insira seu CPF" />
                </div>
                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                  <button type="submit" class="elementor-button elementor-size-lg">
                    <span>
                      <span class="elementor-align-icon-left elementor-button-icon">
                        <i aria-hidden="true" class="fas fa-search"></i>
                      </span>
                      <span class="elementor-button-text">CONSULTAR AGORA</span>
                    </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="elementor-element elementor-element-7cc2c33 e-flex e-con-boxed e-con e-parent" data-id="7cc2c33" data-element_type="container" data-settings='{"background_background":"classic","content_width":"boxed"}' data-core-v316-plus="true">
      <div class="e-con-inner">
        <div class="elementor-element elementor-element-808119f elementor-widget elementor-widget-image" data-id="808119f" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="800" height="288" src="./wp-content/uploads/2023/10/Gov.br_logwhiteo-1-1024x368.png" class="attachment-large size-large wp-image-186" />
          </div>
        </div>
        <div class="elementor-element elementor-element-c81f35f elementor-widget elementor-widget-heading" data-id="c81f35f" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              Todo o conteúdo deste site está publicado sob a licença
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../wp-content/plugins/mask-form-elementor/js/jquery.mask.min.js?ver=1.0" id="jquery.mask.min.js-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/mask-form-elementor/js/maskformelementor.js?ver=1.0" id="maskformelementor.js-js"></script>
  <script type="text/javascript" src="../wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0" id="hello-theme-frontend-js"></script>
  <script type="text/javascript" id="eael-general-js-extra">
    /* <![CDATA[ */
    var localize = {
      ajaxurl: "https:\/\/saldohoje.com\/wp-admin\/admin-ajax.php",
      nonce: "d08b6830bd",
      i18n: {
        added: "Adicionado ",
        compare: "Comparar",
        loading: "Carregando...",
      },
      eael_translate_text: {
        required_text: "\u00e9 um campo obrigat\u00f3rio",
        invalid_text: "Inv\u00e1lido",
        billing_text: "Faturamento",
        shipping_text: "Envio",
        fg_mfp_counter_text: "de",
      },
      page_permalink: "https:\/\/saldohoje.com\/app\/",
      cart_redirectition: "",
      cart_page_url: "",
      el_breakpoints: {
        mobile: {
          label: "Celular em modo retrato",
          value: 767,
          default_value: 767,
          direction: "max",
          is_enabled: true,
        },
        mobile_extra: {
          label: "Celular em modo paisagem",
          value: 880,
          default_value: 880,
          direction: "max",
          is_enabled: false,
        },
        tablet: {
          label: "Tablet Retrato",
          value: 1024,
          default_value: 1024,
          direction: "max",
          is_enabled: true,
        },
        tablet_extra: {
          label: "Paisagem do tablet",
          value: 1200,
          default_value: 1200,
          direction: "max",
          is_enabled: false,
        },
        laptop: {
          label: "Laptop",
          value: 1366,
          default_value: 1366,
          direction: "max",
          is_enabled: false,
        },
        widescreen: {
          label: "Widescreen",
          value: 2400,
          default_value: 2400,
          direction: "min",
          is_enabled: false,
        },
      },
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=5.8.13" id="eael-general-js"></script>
  <script type="text/javascript" id="happy-elementor-addons-js-extra">
    /* <![CDATA[ */
    var HappyLocalize = {
      ajax_url: "https:\/\/saldohoje.com\/wp-admin\/admin-ajax.php",
      nonce: "5914f14ba9",
      pdf_js_lib: "https:\/\/saldohoje.com\/wp-content\/plugins\/happy-elementor-addons\/assets\/vendor\/pdfjs\/lib",
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../wp-content/plugins/happy-elementor-addons/assets/js/happy-addons.min.js?ver=3.9.0" id="happy-elementor-addons-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor-pro3160/assets/js/webpack-pro.runtime.min.js?ver=3.16.0" id="elementor-pro-webpack-runtime-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.17.1" id="elementor-webpack-runtime-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.17.1" id="elementor-frontend-modules-js"></script>
  <script type="text/javascript" src="../wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
  <script type="text/javascript" src="../wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
  <script type="text/javascript" src="../wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
  <script type="text/javascript" src="../wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
  <script type="text/javascript" src="../wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
  <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
      "text direction\u0004ltr": ["ltr"]
    });
    wp.i18n.setLocaleData({
      "text direction\u0004ltr": ["ltr"]
    });
  </script>
  <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
      ajaxurl: "https:\/\/saldohoje.com\/wp-admin\/admin-ajax.php",
      nonce: "8d4033d4c3",
      urls: {
        assets: "https:\/\/saldohoje.com\/wp-content\/plugins\/elementor-pro3160\/assets\/",
        rest: "https:\/\/saldohoje.com\/wp-json\/",
      },
      shareButtonsNetworks: {
        facebook: {
          title: "Facebook",
          has_counter: true
        },
        twitter: {
          title: "Twitter"
        },
        linkedin: {
          title: "LinkedIn",
          has_counter: true
        },
        pinterest: {
          title: "Pinterest",
          has_counter: true
        },
        reddit: {
          title: "Reddit",
          has_counter: true
        },
        vk: {
          title: "VK",
          has_counter: true
        },
        odnoklassniki: {
          title: "OK",
          has_counter: true
        },
        tumblr: {
          title: "Tumblr"
        },
        digg: {
          title: "Digg"
        },
        skype: {
          title: "Skype"
        },
        stumbleupon: {
          title: "StumbleUpon",
          has_counter: true
        },
        mix: {
          title: "Mix"
        },
        telegram: {
          title: "Telegram"
        },
        pocket: {
          title: "Pocket",
          has_counter: true
        },
        xing: {
          title: "XING",
          has_counter: true
        },
        whatsapp: {
          title: "WhatsApp"
        },
        email: {
          title: "Email"
        },
        print: {
          title: "Print"
        },
      },
      facebook_sdk: {
        lang: "pt_BR",
        app_id: ""
      },
      lottie: {
        defaultAnimationUrl: "https:\/\/saldohoje.com\/wp-content\/plugins\/elementor-pro3160\/modules\/lottie\/assets\/animations\/default.json",
      },
    };
  </script>
  <script type="text/javascript" src="../wp-content/plugins/elementor-pro3160/assets/js/frontend.min.js?ver=3.16.0" id="elementor-pro-frontend-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
  <script type="text/javascript" src="../wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
  <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
      environmentMode: {
        edit: false,
        wpPreview: false,
        isScriptDebug: false,
      },
      i18n: {
        shareOnFacebook: "Compartilhar no Facebook",
        shareOnTwitter: "Compartilhar no Twitter",
        pinIt: "Fixar",
        download: "Baixar",
        downloadImage: "Baixar imagem",
        fullscreen: "Tela cheia",
        zoom: "Zoom",
        share: "Compartilhar",
        playVideo: "Reproduzir v\u00eddeo",
        previous: "Anterior",
        next: "Pr\u00f3ximo",
        close: "Fechar",
        a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide",
      },
      is_rtl: false,
      breakpoints: {
        xs: 0,
        sm: 480,
        md: 768,
        lg: 1025,
        xl: 1440,
        xxl: 1600
      },
      responsive: {
        breakpoints: {
          mobile: {
            label: "Celular em modo retrato",
            value: 767,
            default_value: 767,
            direction: "max",
            is_enabled: true,
          },
          mobile_extra: {
            label: "Celular em modo paisagem",
            value: 880,
            default_value: 880,
            direction: "max",
            is_enabled: false,
          },
          tablet: {
            label: "Tablet Retrato",
            value: 1024,
            default_value: 1024,
            direction: "max",
            is_enabled: true,
          },
          tablet_extra: {
            label: "Paisagem do tablet",
            value: 1200,
            default_value: 1200,
            direction: "max",
            is_enabled: false,
          },
          laptop: {
            label: "Laptop",
            value: 1366,
            default_value: 1366,
            direction: "max",
            is_enabled: false,
          },
          widescreen: {
            label: "Widescreen",
            value: 2400,
            default_value: 2400,
            direction: "min",
            is_enabled: false,
          },
        },
      },
      version: "3.17.1",
      is_static: false,
      experimentalFeatures: {
        e_dom_optimization: true,
        e_optimized_assets_loading: true,
        e_optimized_css_loading: true,
        additional_custom_breakpoints: true,
        container: true,
        e_swiper_latest: true,
        theme_builder_v2: true,
        "hello-theme-header-footer": true,
        "landing-pages": true,
        e_global_styleguide: true,
        "page-transitions": true,
        notes: true,
        "form-submissions": true,
        e_scroll_snap: true,
      },
      urls: {
        assets: "https:\/\/saldohoje.com\/wp-content\/plugins\/elementor\/assets\/",
      },
      swiperClass: "swiper",
      settings: {
        page: [],
        editorPreferences: []
      },
      kit: {
        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
        global_image_lightbox: "yes",
        lightbox_enable_counter: "yes",
        lightbox_enable_fullscreen: "yes",
        lightbox_enable_zoom: "yes",
        lightbox_enable_share: "yes",
        lightbox_title_src: "title",
        lightbox_description_src: "description",
        hello_header_logo_type: "title",
        hello_footer_logo_type: "logo",
      },
      post: {
        id: 218,
        title: "P%C3%A1gina%20%7C%20App%20%E2%80%93%20Receber%20Valor",
        excerpt: "",
        featuredImage: false,
      },
    };
  </script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.17.1" id="elementor-frontend-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor-pro3160/assets/js/elements-handlers.min.js?ver=3.16.0" id="pro-elements-handlers-js"></script>
</body>

</html>
