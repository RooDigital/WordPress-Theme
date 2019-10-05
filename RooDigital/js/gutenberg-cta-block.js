const {
  registerBlockType
} = wp.blocks;
registerBlockType('roodigital/custom-cta', {
  // built-in attributes
  title: 'Call to Action',
  description: 'Block to generate a custom Call to Action',
  icon: 'smiley',
  category: 'layout',
  // attributes
  attributes: {
    author: {
      type: 'string'
    }
  },

  // functions
  edit({
    attributes,
    setAttributes
  }) {
    function updateAuthor(event) {
      setAttributes({
        author: event.target.value
      });
    }

    return React.createElement("input", {
      value: attributes.author,
      onChange: updateAuthor,
      type: "text"
    });
  },

  save({
    attributes
  }) {
    return React.createElement("p", null, "Author Name: ", React.createElement("i", null, attributes.author));
  }

});