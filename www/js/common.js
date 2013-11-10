// «Funnel» betyr trakt, og det er det jeg kaller inspirasjonstesten
// på forsiden i javascript-koden. -Matias

var Funnel = function(template) {
    template = jQuery(template);
    this.element = jQuery(jQuery.parseHTML(template.html()));
    template.replaceWith(this.element);

    this.element.data("this", this); // For interactive debugging

}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    })
})
