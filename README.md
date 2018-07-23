# Working with customizing Berlin

This is taken largely from [here](https://omeka.org/s/docs/developer/key_concepts/working_with_Sass_and_CSS/).

1. Install npm packages: `npm install`
2. Compile CSS: `gulp css`
3. Compile as you save changes to css: `gulp css:watch`
4. add `custom.css` to `css/sass/_custom.scss`
5. add to `styles.scss` the line: `@import "custom"`
