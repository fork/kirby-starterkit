panel.plugin("cookbook/block-factory", {
  blocks: {
    accordion: `
      <div>
        <div v-if="content.summary">
          <details>
            <summary>{{ content.summary }}</summary>
            <div v-if="content.details" v-html="content.details"></div>
          </details>
        </div>
        <div v-else>
          No content yet
        </div>
      </div>
    `,
  },
});
