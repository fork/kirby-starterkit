panel.plugin("cookbook/block-factory", {
  blocks: {
    accordion: `
      <div @dblclick="open">
        <h2 class="k-block-type-accordion-heading" v-html="content.headline"></h2>
        <div v-if="content.accordion.length">
          <details v-for="(item, index) in content.accordion" class="k-block-type-accordion-item" :key="index">
            <summary>{{ index + item.summary }}</summary>
            <div v-html="item.details"></div>
          </details>
        </div>
        <div v-else>No items yet</div>
      </div>
    `,
  },
});
