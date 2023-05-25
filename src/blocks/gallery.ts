import { AlpineComponent } from "alpinejs";

const Gallery = (): AlpineComponent => ({
  /**
   * Whether the prev button is hidden, i.e. we are on the very left
   */
  prevHidden: true,

  /**
   * Whether the next button is hidden, i.e. we are on the very right
   */
  nextHidden: true,

  /**
   * Current width of the container
   */
  containerWidth: 0,

  /**
   * Event handler for when the container gets resized
   */
  onResize() {
    this.containerWidth = this.$refs.container.getBoundingClientRect().width;
  },

  /**
   * Event handler for when intersection of the first slide changes
   */
  onPrevObs(obs: IntersectionObserverEntry[]) {
    console.log("PREV", obs[0].intersectionRatio);
    this.prevHidden = obs[0].intersectionRatio === 1;
  },

  /**
   * Event handler for when intersection of the last slide changes
   */
  onNextObs(obs: IntersectionObserverEntry[]) {
    console.log("NEXT", obs[0].intersectionRatio);
    this.nextHidden = obs[0].intersectionRatio === 1;
  },

  /**
   * Apply an offset to the container's current scroll position
   *
   * @param {Number} value Scroll offset to apply, in px
   */
  scrollTo(value: number) {
    const { scrollLeft } = this.$refs.container;

    let left = scrollLeft + value;
    if (left > scrollLeft + this.containerWidth) {
      left = scrollLeft + this.containerWidth;
    } else if (left < 0) {
      left = 0;
    }

    this.$refs.container.scrollTo({ left, behavior: "smooth" });
  },

  /**
   * Event handler for when the prev button is clicked
   */
  onClickPrev() {
    this.scrollTo(-this.containerWidth);
  },

  /**
   * Event handler for when the next button is clicked
   */
  onClickNext() {
    this.scrollTo(this.containerWidth);
  },

  init() {
    const options = {
      root: this.$refs.container,
      threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]
    };

    this.containerWidth = this.$refs.container.getBoundingClientRect().width;

    const { firstElementChild, lastElementChild } = this.$refs.container;

    const prevObs = new IntersectionObserver(this.onPrevObs.bind(this), options);
    if (firstElementChild) prevObs.observe(firstElementChild);

    const nextObs = new IntersectionObserver(this.onNextObs.bind(this), options);
    if (lastElementChild) nextObs.observe(lastElementChild);
  }
});

export default Gallery;
