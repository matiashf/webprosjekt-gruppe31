// «Funnel» betyr trakt, og det er det jeg kaller inspirasjonstesten
// på forsiden i javascript-koden. -Matias

var Funnel = function(template) {
    template = jQuery(template);
    this.element = jQuery(jQuery.parseHTML(template.html()));
    template.replaceWith(this.element);

    this.element.data("this", this); // For interactive debugging

    this.element.find(".toggler")
        .click(jQuery.proxy(this.toggle, this))
        .find(".hidden").toggle(false);

Funnel.prototype.toggle = function(event) {
    this.element.find("form, .result, .toggler .hidden, .toggler .visible").toggle();
}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    })
})
