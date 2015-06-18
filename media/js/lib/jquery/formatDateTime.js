;
(function (factory) {
    if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else {
        // Browser globals: jQuery or jQuery-like library, such as Zepto
        factory(window.jQuery || window.$);
    }
}(function ($) {

    var ticksTo1970 = (((1970 - 1) * 365 + Math.floor(1970 / 4)
    - Math.floor(1970 / 100)
    + Math.floor(1970 / 400)) * 24 * 60 * 60 * 10000000);

    var formatDateTime = function (format, date, settings) {
        var output = '';
        var literal = false;
        var iFormat = 0;

        // Check whether a format character is doubled
        var lookAhead = function (match) {
            var matches = (iFormat + 1 < format.length
            && format.charAt(iFormat + 1) == match);
            if (matches) {
                iFormat++;
            }
            return matches;
        };

        // Format a number, with leading zero if necessary
        var formatNumber = function (match, value, len) {
            var num = '' + value;
            if (lookAhead(match)) {
                while (num.length < len) {
                    num = '0' + num;
                }
            }
            return num;
        };

        // Format a name, short or long as requested
        var formatName = function (match, value, shortNames, longNames) {
            return (lookAhead(match) ? longNames[value] : shortNames[value]);
        };

        // Get the value for the supplied unit, e.g. year for y
        var getUnitValue = function (unit) {
            var utc = settings.utc;
            switch (unit) {
                case 'y':
                    return utc ? date.getUTCFullYear() : date.getFullYear();
                case 'm':
                    return (utc ? date.getUTCMonth() : date.getMonth()) + 1;
                case 'M':
                    return utc ? date.getUTCMonth() : date.getMonth();
                case 'd':
                    return utc ? date.getUTCDate() : date.getDate();
                case 'D':
                    return utc ? date.getUTCDay() : date.getDay();
                case 'g':
                    return (utc ? date.getUTCHours() : date.getHours()) % 12 || 12;
                case 'h':
                    return utc ? date.getUTCHours() : date.getHours();
                case 'i':
                    return utc ? date.getUTCMinutes() : date.getMinutes();
                case 's':
                    return utc ? date.getUTCSeconds() : date.getSeconds();
                case 'u':
                    return utc ? date.getUTCMilliseconds() : date.getMilliseconds();
                default:
                    return '';
            }
        };

        for (iFormat = 0; iFormat < format.length; iFormat++) {
            if (literal) {
                if (format.charAt(iFormat) == "'" && !lookAhead("'")) {
                    literal = false;
                }
                else {
                    output += format.charAt(iFormat);
                }
            } else {
                switch (format.charAt(iFormat)) {
                    case 'a':
                        output += getUnitValue('h') < 12
                            ? settings.ampmNames[0]
                            : settings.ampmNames[1];
                        break;
                    case 'd':
                        output += formatNumber('d', getUnitValue('d'), 2);
                        break;
                    case 'S':
                        var v = getUnitValue(iFormat && format.charAt(iFormat - 1));
                        output += (v && (settings.getSuffix || $.noop)(v)) || '';
                        break;
                    case 'D':
                        output += formatName('D',
                            getUnitValue('D'),
                            settings.dayNamesShort,
                            settings.dayNames);
                        break;
                    case 'o':
                        var end = new Date(date.getFullYear(),
                            date.getMonth(),
                            date.getDate()).getTime();
                        var start = new Date(date.getFullYear(), 0, 0).getTime();
                        output += formatNumber(
                            'o', Math.round((end - start) / 86400000), 3);
                        break;
                    case 'g':
                        output += formatNumber('g', getUnitValue('g'), 2);
                        break;
                    case 'h':
                        output += formatNumber('h', getUnitValue('h'), 2);
                        break;
                    case 'u':
                        output += formatNumber('u', getUnitValue('u'), 3);
                        break;
                    case 'i':
                        output += formatNumber('i', getUnitValue('i'), 2);
                        break;
                    case 'm':
                        output += formatNumber('m', getUnitValue('m'), 2);
                        break;
                    case 'M':
                        output += formatName('M',
                            getUnitValue('M'),
                            settings.monthNamesShort,
                            settings.monthNames);
                        break;
                    case 's':
                        output += formatNumber('s', getUnitValue('s'), 2);
                        break;
                    case 'y':
                        output += (lookAhead('y')
                            ? getUnitValue('y')
                            : ('' + getUnitValue('y')).substr(2));
                        break;
                    case '@':
                        output += date.getTime();
                        break;
                    case '!':
                        output += date.getTime() * 10000 + ticksTo1970;
                        break;
                    case "'":
                        if (lookAhead("'")) {
                            output += "'";
                        } else {
                            literal = true;
                        }
                        break;
                    default:
                        output += format.charAt(iFormat);
                }
            }
        }
        return output;
    };

    $.fn.formatDateTime = function (format, settings) {
        settings = $.extend({}, $.formatDateTime.defaults, settings);

        this.each(function () {
            var date = $(this).attr(settings.attribute);

            // Use explicit format string first,
            // then fallback to format attribute
            var fmt = format || $(this).attr(settings.formatAttribute);

            if (typeof date === 'undefined' || date === false) {
                date = $(this).text();
            }

            if (date === '') {
                $(this).text('');
            } else {
                $(this).text(formatDateTime(fmt, new Date(date), settings));
            }
        });

        return this;
    };

    $.formatDateTime = function (format, date, settings) {
        settings = $.extend({}, $.formatDateTime.defaults, settings);
        if (!date) {
            return '';
        }
        return formatDateTime(format, date, settings);
    };

    $.formatDateTime.defaults = {
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November',
            'December'],
        monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
            'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday',
            'Friday', 'Saturday'],
        dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        ampmNames: ['AM', 'PM'],
        getSuffix: function (num) {
            if (num > 3 && num < 21) {
                return 'th';
            }

            switch (num % 10) {
                case 1:
                    return "st";
                case 2:
                    return "nd";
                case 3:
                    return "rd";
                default:
                    return "th";
            }
        },
        attribute: 'data-datetime',
        formatAttribute: 'data-dateformat',
        utc: false
    };

}));