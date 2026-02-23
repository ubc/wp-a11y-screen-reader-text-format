# WP A11y Screen Reader Text Format

A WordPress plugin that adds a "Screen Reader Text" format to the Rich Text block toolbar controls in Gutenberg. This allows content creators to include text that is completely hidden visually on the live site but remains accessible to assistive technologies (like screen readers).

## Features

- **New Formatting Option**: Adds a "visibility" icon in the rich text formatting toolbar for text content blocks (e.g., Paragraphs and Headings).
- **Editor Indicators**: Visually distinguishes screen reader text within the block editor with a dashed black border and padding, so content authors can easily track hidden text.
- **Frontend Accessibility**: Correctly applies visually-hidden CSS techniques on the frontend so the text spans 1px by 1px and cannot be seen, but works flawlessly for screen readers.

## Installation

1. Copy or clone the `wp-a11y-screen-reader-text-format` folder into your `/wp-content/plugins/` directory.
2. Navigate to the **Plugins** menu in the WordPress dashboard and activate the **WP A11y Screen Reader Text Format** plugin.

## Usage

1. Open a post or page in the Gutenberg block editor.
2. Add a text block (e.g., Paragraph) and highlight a portion of text.
3. In the block's floating toolbar, tap the downward 'More' arrow to reveal additional rich text formatting tools.
4. Select the **Screen Reader Text** option (with the eye/visibility icon).
5. The selected text will now be styled with a dashed border in the editor.
6. When published, the text will be hidden from sighted users but picked up by screen readers.

## Development

Asset compilation is handled by `@wordpress/scripts`. The JavaScript entry points are located in `src/editor.js` and `src/block.js`.

**Commands:**

- **Install dependencies**: 
  ```bash
  npm install
  ```
- **Compile for development (watch)**: 
  ```bash
  npm run start
  ```
- **Build production assets**: 
  ```bash
  npm run build
  ```

## Requirements

- **WordPress**: 6.5 or higher
- **PHP**: 8.2 or higher

## License

This plugin is licensed under the GPL-2.0-or-later.
