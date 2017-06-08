function foreach(array,callback) {
    for(var i=0; i<array.length; i++) {
        callback(array[i],i);
    }
}
function hasClass(el, className) {
    if (el.classList)
        return el.classList.contains(className);
    else
        return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}
function addClass(el, className) {
    if (el.classList)
        el.classList.add(className);
    else if (!hasClass(el, className)) el.className += " " + className;
}
function removeClass(el, className) {
    if (el.classList)
        el.classList.remove(className);
    else if (hasClass(el, className)) {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className=el.className.replace(reg, ' ')
    }
}

function getEase() {
    return CustomEase.create("custom", "M0,0 C0.27,0 0.5,0.04 0.5,0.8 0.5,1 0.776,1 1,1");
}

function isDefined(el) {

    return typeof el != 'undefined' && typeof el !== null;
}