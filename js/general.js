var iPadMode = navigator.userAgent.match(/iP/i),
        supportsTouchEvents = ('ontouchstart' in document.documentElement) || (/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone|ZuneWP7/i.test(navigator.userAgent));

