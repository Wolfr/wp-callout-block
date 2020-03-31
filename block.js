var el = wp.element.createElement;

wp.blocks.registerBlockType('jr/callout-box-2', {

  title: 'Callout Box',
  icon: 'tide',
  category: 'layout',

  attributes: {
    type: { type: 'string', default: 'default' }, // Notice box type for loading the appropriate CSS class. Default class is 'default'.
    content: { type: 'array', source: 'children', selector: 'p' } /// Notice box content in p tag
  },

  edit: function(props) {
  
       function updateContent( newdata ) {
          props.setAttributes( { content: newdata } );
       }
 
       function updateType( event ) {
          props.setAttributes( { type: event.target.value } );
       }
 
       return el( 'div',
          {
             className: 'c-callout-box c-callout-box--' + props.attributes.type
          },
          el(
             'select',
             {
                onChange: updateType,
                value: props.attributes.type,
             },
             el("option", {value: "default" }, "Default"),
             el("option", {value: "highlight" }, "Highlight"),
          ),
          el(
             wp.editor.RichText,
             {
                tagName: 'p',
                onChange: updateContent,
                value: props.attributes.content,
                placeholder: 'Enter description here...'
             }
          )
       ); // End return
 
    },  // End edit()
    
    save: function(props) {
       return el( 'div',
          {
             className: 'c-callout-box c-callout-box--' + props.attributes.type
          },
          el( wp.editor.RichText.Content, {
             tagName: 'p',
             value: props.attributes.content
          })
       ); // End return
    } // End save()

})


