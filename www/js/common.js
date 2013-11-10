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

    this.element.find("form").change(jQuery.proxy(this.change, this));
}

Funnel.prototype.toggle = function(event) {
    this.element.find("form, .result, .toggler .hidden, .toggler .visible").toggle();
}

Funnel.prototype.change = function(event) {
    var elements = this.element.siblings(".activities").find("li > *:only-child");
    this.element.find(".result").html(elements.eq(Math.floor(Math.random() * elements.length)).clone());
}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    })
})
