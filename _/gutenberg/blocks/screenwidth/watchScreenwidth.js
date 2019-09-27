import { debounce } from '../../../../src/scripts/utils';

export const watchScreenwidth = () => {
  const _insertWidth = (target, width) => {
    target.innerHTML = width;
  };

  const getAndSetWidth = (el, target) => {
    let width = el.offsetWidth;
    _insertWidth(target, width);
  }

  const block = document.querySelector('.block_screenwidth');
  const blockSizeTarget = block.querySelector('span');
  const viewportSizeTarget = block.querySelector('span:nth-of-type(2)');
  const viewport = document.querySelector('body');

  getAndSetWidth(block, blockSizeTarget);
  getAndSetWidth(viewport, viewportSizeTarget);

  window.addEventListener(
    'resize',
    debounce(() => {
      getAndSetWidth(block, blockSizeTarget);
      getAndSetWidth(viewport, viewportSizeTarget);
    }, 200),
    false
  );
}; //watchScreenwidth
