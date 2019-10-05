const {
  registerBlockType
} = wp.blocks;
const {
  RichText
} = wp.editor;
registerBlockType('roodigital/custom-richtext', {
  // built-in attributes
  title: 'Custom Rich Text',
  description: 'Block to generate custom Rich Text',
  icon: 'smiley',
  category: 'layout',
  // attributes
  attributes: {
    title: {
      type: 'string',
      source: 'html',
      selector: 'h2'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    }
  },

  // functions
  edit({
    attributes,
    setAttributes
  }) {
    const {
      title,
      body
    } = attributes;

    function onChangeTitle(newTitle) {
      setAttributes({
        title: newTitle
      });
    }

    function onChangeBody(newBody) {
      setAttributes({
        body: newBody
      });
    }

    return [React.createElement("div", {
      "class": "cta-container"
    }, React.createElement(RichText, {
      key: "editable",
      tagName: "h2",
      placeholder: "Your Custom Title",
      value: title,
      onChange: onChangeTitle
    }), React.createElement(RichText, {
      key: "editable",
      tagName: "p",
      placeholder: "Your Custom Description",
      value: body,
      onChange: onChangeBody
    }))];
  },

  save({
    attributes
  }) {
    const {
      title,
      body
    } = attributes;
    return React.createElement("div", {
      "class": "cta-container"
    }, React.createElement("h2", null, title), React.createElement(RichText.Content, {
      tagName: "p",
      value: body
    }));
  }

});