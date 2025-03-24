import ScrollXP from "scrollxp";

new ScrollXP({
  container: document.body,
});

// console.log(document.documentElement);

let isReset = true;
let alreadyAskedToLeave = false;

window.addEventListener("scroll", function () {
  if (window.scrollY > window.innerHeight && isReset) {
    console.log("enter");
    isReset = false;
    document.querySelector("#header-logo").classList.remove("invisible");
    document.querySelector("#header-logo").classList.add("animate");
  } else if (
    window.scrollY > window.innerHeight &&
    !isReset &&
    alreadyAskedToLeave
  ) {
    console.log("reset");
    isReset = true;
    alreadyAskedToLeave = false;
    document.querySelector("#header-logo").classList.remove("animate");
    document.querySelector("#header-logo").classList.remove("animate-out");
    document.querySelector("#header-logo").classList.add("invisible");
  } else if (
    window.scrollY < window.innerHeight &&
    !isReset &&
    !alreadyAskedToLeave
  ) {
    document.querySelector("#header-logo").classList.remove("animate");
    document.querySelector("#header-logo").classList.add("animate-out");
    console.log("exit");
    alreadyAskedToLeave = true;
    this.setTimeout(() => {
      document.querySelector("#header-logo").classList.add("animate");
    }, 50);
  }
});
