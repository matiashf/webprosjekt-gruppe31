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

function unwrap(wrappers) {
    /* Unwrap script tags, i.e. replace them with their contents. */

    return jQuery(wrappers).map(function() {
        var wrapper = jQuery(this);
        var element = jQuery.parseHTML(wrapper.html());
        wrapper.replaceWith(element);
        return element;
    });
}

var Funnel = function(template) {
    this.element = unwrap(template).filter("section.funnel");
    this.activity_map = this.compile();
    this.easter_egg_counter = 0;

    this.element.find(".toggler .show").toggle(false);
    this.element.find(".more").addClass("disabled");

    this.element.find(".toggler").click(jQuery.proxy(this.toggle, this));
    this.element.find("form").change(jQuery.proxy(this.change, this));
    this.element.find(".next").click(jQuery.proxy(this.next, this));
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
    this.easter_egg();
}

Funnel.prototype.easter_egg = function() {
    this.easter_egg_counter++;

    if (this.easter_egg_counter == 10) {
        this.element.hide();
        this.element.after("<img src=\"bilder/alfred.jpg\" class=\"easter-egg\" alt=\"alfred <3\">");
        this.element.next().click({funnel: this}, function(event){
            jQuery(this).prev().show();
            jQuery(this).remove();
            event.data.funnel.easter_egg_counter = 0;
        })
    }

else if (this.easter_egg_counter == 11) {
        this.element.children(".easter_egg").remove();
        this.element.children().toggle(true);
    }
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

var ImageOptimizer = function(data) {
    // There are downscaled images available. Replace src-attributes
    // with lower resolution images where possible.

    if (data == null)
        data = {widths: []}
    this.data = data;
    this.data.widths.sort();

    unwrap("script.optimized-image");
    this.optimize();

    jQuery(window).resize(_.debounce(jQuery.proxy(this.optimize, this), 250));
}

ImageOptimizer.prototype.optimize = function() {
    var widths = this.data.widths;

    jQuery("img[data-optimized-image-src]").each(function() {
        element = jQuery(this);
        var width = element.width();
        var src = element.attr("data-optimized-image-src");

        for ( var i = 0; i < widths.length; i++ ) {
            if ( width <= widths[i] ) {
                src = src.replace(/^(bilder)\/(.+\.jpg)$/, "$1/" + widths[i] + "px/$2")
                break;
            }
        }

        jQuery(element).attr("src", src);
    });
}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    });

    jQuery("#image-optimizer-json").each(function() {
        new ImageOptimizer(jQuery.parseJSON($(this).html()));
    });
});
