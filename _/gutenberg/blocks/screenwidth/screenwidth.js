import { watchScreenwidth } from './watchScreenwidth';

if (window.acf) {
  window.acf.addAction('render_block_preview/type=screenwidth', () => {
    watchScreenwidth();

    // console.log('doing: render_block_preview/type=screenwidth');
    // do stuff here when the block preview renders
  });
}