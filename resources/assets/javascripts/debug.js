/*
 * Detect and display HTML elements with duplicate IDs
 */
var nodes = document.querySelectorAll('[id]');
var ids = {};
var totalNodes = nodes.length;
for(var i = 0; i < totalNodes; i++) {
    var currentId = nodes[i].id ? nodes[i].id : "undefined";
    if(isNaN(ids[currentId])) ids[currentId] = 0;
    ids[currentId]++;
}
for(var key in ids) {
    if(ids[key] > 1) {
        var dupe = [];
        $('[id='+key+']').each(function(){ dupe.push($(this)[0]); });
        console.log('Duplicate Id: ' + key, dupe);
    }
}