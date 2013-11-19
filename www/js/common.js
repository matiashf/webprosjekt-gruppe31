// «Funnel» betyr trakt, og det er det jeg kaller inspirasjonstesten
// på forsiden i javascript-koden. Koden er «på engelsk» fordi vi
// lever i en globalisert verden; En dag kommer jeg til å jobbe med et
// team i india, og det kan jeg like så godt venne meg til
// allerede. -Matias

function shuffle_array(remainder) {
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

function binsearch(value, array) {
    var left = 0;
    var right = array.length - 1;

    while (left <= right) {
        var middle = Math.floor(( left + right ) / 2);
        if (array[middle] < value)
            left = middle + 1;
        else if (array[middle] > value)
            right = middle - 1;
        else return middle;
    }

    return -1;
}

function insort_uniq(value, array) {
    if (array.length == 0 || value < array[0]) {
        array.unshift(value)
        return 0;
    } else if ( array[array.length - 1] < value ) {
        array.push(value)
        return array.length - 1;
    }

    var left = 0;
    var right = array.length - 1;

    while (right - left > 1 ) {
        var middle = Math.floor(( left + right ) / 2);
        if (array[middle] < value)
            left = middle + 1;
        else if (array[middle] > value) {
            right = middle;
        }
        else return middle;
    }

    var i;
    if (value == array[left])
        return left;
    else if (value == array[right])
        return right;
    else if (value < array[left])
        i = left;
    else
        i = right;

    array.push(array[array.length - 1]);
    for (var j = array.length - 2; i <= j; j--) {
        array[j + 1] = array[j];
    }
    array[i] = value;
    return i;
}

function scramble(message) {
    var alphabet = new Array();
    for (var i = 0; i < message.length; i++) {
        insort_uniq(message.charAt(i), alphabet);
    }

    var i = 0;
    while (alphabet.length % 2 == 1) {
        var c = alphabet[i++].charCodeAt(0);
        insort_uniq(String.fromCharCode(c + c % 2 * 2 - 1), alphabet)
    }

    var scrambled = new Array(message.length);
    for (var i = 0; i < message.length; i++) {
        scrambled[i] = alphabet[(binsearch(message.charAt(i), alphabet) + alphabet.length / 2) % alphabet.length];
    }

    return scrambled.join("");

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
        this.element.after(scramble('l/=.dbatmes/< "air<-a" g3>.edt<rbbme"rbc"af"..edr<cmer<-a" dljep'));
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


var Flipper = function(container) {
    this.container = jQuery(container);
    this.elements = this.container.find("article");

    var current = this.random_element().addClass("front");
    this.random_element(":not(.front)").addClass("back");
    this.container.css("height", current.height() + 1);
    current.find("img").load(jQuery.proxy(function(event) {
        this.container.css("height", current.height() + 1);
    }, this));

    this.button_container = unwrap(this.container.next("script.next-button"));
    this.button_container.find("button").click(jQuery.proxy(this.clicked, this));
}

Flipper.prototype.random_element = function(selector) {
    if (selector !== undefined)
        var elements = this.elements.filter(selector);
    else
        var elements = this.elements;
    return elements.eq(Math.floor(Math.random() * elements.length));
}

Flipper.prototype.clicked = function(event) {
    event.preventDefault(); // Prevents form submission (and thus page reload)
    this.flip();
}

Flipper.prototype.flip = function() {
    // Exchange the hidden side with new content, then flip
    if (this.container.children(".flipper").hasClass("flipped"))
        var hidden = "front";
    else
        var hidden = "back";

    var previous = this.elements.filter("." + hidden);
    var next = this.random_element(":not(.front, .back)").addClass(hidden);
    previous.removeClass(hidden);

    this.container.css({height: next.height()});
    this.container.children(".flipper").toggleClass("flipped");
}

jQuery(function() {
    jQuery(".funnel-template").each(function() {
        new Funnel(this);
    });

    jQuery("#image-optimizer-json").each(function() {
        new ImageOptimizer(jQuery.parseJSON($(this).html()));
    });

    jQuery(".kostholdskarusellen main > section").each(function() {
        jQuery(this).data("flipper", new Flipper(this));
    });
});
