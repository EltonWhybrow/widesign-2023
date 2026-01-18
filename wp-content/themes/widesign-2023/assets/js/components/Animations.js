const $ = window.jQuery;
const $window = window.$window || $(window);

/**
 * Intercept clicks on any anchor tag and if the anchor is linking to an on page ID, animate the scroll to the targeted
 * element.
 *
 * This only works if the href contains a value beginning with '#'. e.g; #about-section. You can modify this behaviour
 * by changing the this.link_is_targeting_on_page_anchor() method.
 *
 * If the clicked element has a `data-toggle=xxx` attribute, it won't be handled. You can modify this behaviour by
 * changing the this.is_excluded() method.
 */
const Animations = {



  init() {

    // Stagger headings - text animation use 'stagger-words' to a sentence
    function wrapLetters(el) {
      const text = el.textContent;
      el.innerHTML = "";

      const chars = [];

      [...text].forEach((char) => {
        if (char === " ") {
          el.appendChild(document.createTextNode(" "));
          return;
        }

        const span = document.createElement("span");
        span.className = "char";
        span.textContent = char;
        el.appendChild(span);
        chars.push(span);
      });

      return chars;
    }


    const targets = document.querySelectorAll(".stagger-words");

    targets.forEach((el) => {
      const chars = wrapLetters(el);

      gsap.set(chars, {
        display: "inline-block",
        opacity: 0,
        x: 20
      });

      const tl = gsap.timeline({
        defaults: { duration: 0.3, ease: "power3.out" },
        paused: true,
        delay: 0.2
      });

      tl.to(chars, {
        opacity: 1,
        x: 0,
        stagger: 0.1 // 👈 letter-level stagger
      });

      if (window.ScrollTrigger) {
        ScrollTrigger.create({
          trigger: el,
          start: "top 85%",
          once: true,
          onEnter: () => tl.play()
        });
      } else {
        tl.play();
      }
    });

  },




};

export default Animations;