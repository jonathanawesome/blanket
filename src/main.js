/* blanket front end styles and js */

// import styles for compilation
import './sass/main';



//polyfills  
import 'whatwg-fetch';
import 'promise-polyfill/src/polyfill';

//vendors
//import '../vendor/noframework.waypoints.js';

//custom js
import './scripts/init';
import './scripts/listeners';
import './scripts/fetch';
import './scripts/search';
import './scripts/utils';
