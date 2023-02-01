// you can import modules from the theme lib or even from
// NPM packages if they support it…
import ExampleComponent1 from "./components/ExampleComponent1";
import MobileHamburgerMenu from "./components/MobileHamburgerMenu";
import BurgerIcon from "./components/BurgerIcon";
import MainMenu from "./components/MainMenu";
import Accordian from "./components/Accordian";
import Modal from "./components/Modal";
import BackToTop from "./components/BackToTop";
import FlexSlider from "./components/jquery.flexslider-min";
import FlexSliderSetUp from "./components/FlexSliderInit";
import Messages from "./components/Messages";

// you can also require modules if they support it…
const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";
import HeaderScroll from "./components/HeaderScroll";
import ScrollAni from "./components/ScrollAni";


// Initialise our components on jQuery.ready…
jQuery(function ($) {
  // ExampleComponent1.init();
  // ExampleModule2.init();
  // ReplaceObfuscatedEmailAddresses.init();
  AnimateOnPageLinks.init();
  FlexSlider.init();
  FlexSliderSetUp.init();
  MobileHamburgerMenu.init();
  MainMenu.init();
  BurgerIcon.init();
  Accordian.init();
  Modal.init();
  BackToTop.init();
  Messages.init();
  HeaderScroll.init();
  ScrollAni.init();
});


