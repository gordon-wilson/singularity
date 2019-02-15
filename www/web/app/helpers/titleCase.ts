const noCase = require('no-case');
const upperCase = require('upper-case');

/**
 * Title case a string.
 *
 * @param  {string} value
 * @param  {string} [locale]
 * @return {string}
 */
export default function (value:string, locale?:string) {
    return noCase(value, locale).replace(/^.| ./g, function (m:string) {
        return upperCase(m, locale)
    })
}