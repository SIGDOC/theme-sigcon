// Register GSAP plugins (once) before using them
gsap.registerPlugin(DrawSVGPlugin);

/* layout adjustment */

let bodyLogo = document.body,
    html = document.documentElement;

let windowheight = Math.max( bodyLogo.scrollHeight, bodyLogo.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
gsap.set("#sigdoc-23-logo",{
  // left:"50%",top:"50%",
  xPercent: -50,yPercent: -50
});

let tl = gsap.timeline();

/* end layout adjustment */

// ANIMATIONS

// Logo
tl.to("path", {
  drawSVG: 1,
  yoyo: true,
  repeat:-1,
  duration:0.6
});

tl.to("path", 2, {
  drawSVG: 1,
  duration: 0.01,
  yoyo: true,
  repeat:-1,
  stagger: {
    amount:0.6,
  }
}
);

tl.to("path:nth-child(1n)", 2, {
  duration: 0.1,
  drawSVG: true,
  fill:"#2092b7",
  yoyo: true,
  repeat:-1,
  repeatDelay: 0.5,
  stagger: {
    amount: 1,
  }
});

tl.to("path:nth-child(3n)",2, {
  duration: 0.2,
  fill:"#ffd90f",
  yoyo: true,
  repeat:-1,
  repeatDelay: 0.5,
  stagger: {
    amount:1,
  }
});

tl.to("path:nth-child(5n)",2,{
  fill:"#7f0000",
  duration: 0.3,
  yoyo: true,
  repeat:-1,
  repeatDelay: 0.5,
  stagger: {
    amount:1,
  }
});

tl.play().timeScale(0.75);
