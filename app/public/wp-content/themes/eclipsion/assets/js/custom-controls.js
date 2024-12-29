(function(api) {

  api.sectionConstructor['eclipsion-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const eclipsion_section_lists = ['banner', 'service'];
  eclipsion_section_lists.forEach(eclipsion_homepage_scroll);

  function eclipsion_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('eclipsion_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);