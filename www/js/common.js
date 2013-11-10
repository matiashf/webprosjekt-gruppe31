// «Funnel» betyr trakt, og det er det jeg kaller inspirasjonstesten
// på forsiden i javascript-koden. Koden er «på engelsk» fordi vi
// lever i en globalisert verden; En dag kommer jeg til å jobbe med et
// team i india, og det kan jeg like så godt venne meg til
// allerede. -Matias

shuffle_array = function(remainder) {
    var shuffled = new Array();

    while (remainder.length > 0) {
        var index = Math.floor(Math.random() * remainder.length);
        shuffled.push(remainder[index]);
        remainder = remainder.slice(0, index).concat(remainder.slice(index + 1));
    }

    return shuffled;
}

var Funnel = function(template) {
    template = jQuery(template);
    this.element = jQuery(jQuery.parseHTML(template.html()));
    template.replaceWith(this.element);

    this.element.data("this", this); // For interactive debugging

    this.element.find(".toggler .show").toggle(false);
    this.element.find(".more").addClass("disabled");

    this.element.find(".toggler").click(jQuery.proxy(this.toggle, this));
    this.element.find("form").change(jQuery.proxy(this.change, this));
    this.element.find(".next").click(jQuery.proxy(this.next, this));

    this.activity_map = this.compile();
}

Funnel.prototype.activities = function() {
    return this.element.next(".activities").find("li > *:only-child");
}

Funnel.prototype.compile = function() {
    var activity_map = new Object(); // String -> jQuery
    var activities = this.activities();

    this.element.find("form input").each(function() {
        var property = jQuery(this).attr("value");
        activity_map[property] = activities.not(":has(script[type=\"text/funnel-properties\"]:contains(\"" +  property + "\"))")
    });

    // The values in activity_map are jQuery sets of all activity
    // elements that *do not* have the property of the corresponding
    // key.
    return activity_map;
}

Funnel.prototype.toggle = function(event) {
    this.element.find("form, .result, .toggler .show, .toggler .hide, .next").toggle();
}

Funnel.prototype.change = function(event) {
    this.results = this.search();
    this.resultIndex = 0;
    this.render();
}

Funnel.prototype.search = function(event) {
    var candidates = this.activities();
    var activity_map = this.activity_map; // this isn't available in the inner scope

    this.element.find("form input:checked").each(function() {
        candidates = candidates.not(activity_map[jQuery(this).attr("value")]);
    });

    return jQuery(shuffle_array(candidates.toArray()));
}

Funnel.prototype.render = function(event) {
    if (this.results.length == 0) {
        this.element.find(".result").html(this.element.siblings(".no-results-template").html());
        this.element.find(".more").addClass("disabled");
    } else {
        this.element.find(".result").html(this.results.eq(this.resultIndex).clone());
        this.element.find(".more").removeClass("disabled");
    }
}

Funnel.prototype.next = function(event) {
    this.resultIndex = ( this.resultIndex + 1 ) % this.results.length;
    this.render();
}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    })
})
