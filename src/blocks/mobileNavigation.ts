import { AlpineComponent } from "alpinejs";
import { disableBodyScroll, enableBodyScroll } from "body-scroll-lock";

const MobileNavigation = (): AlpineComponent => ({
  isOpen: false,
  open() {
    this.isOpen = true;

    this.$nextTick(() => {
      disableBodyScroll(this.$refs.navigation);
      this.$refs.navigation.querySelector("a")?.focus();
    });
  },
  close() {
    this.isOpen = false;
    this.$refs.toggleButton.focus();

    enableBodyScroll(this.$refs.navigation);
  }
});

export default MobileNavigation;