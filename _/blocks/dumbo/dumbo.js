console.log('acf', window.acf);

if (window.acf) {
  window.acf.addAction('render_block_preview/type=dumbo', () => {
    console.log('doing: render_block_preview/type=dumbo');
    // do stuff here when the block preview renders
  });
}