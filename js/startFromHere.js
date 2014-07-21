/*  
 Document   : startFromHere.js
 Created on : 17 Jan, 2014, 12:05:23 PM
 Last Update: 17 Jan, 2014, 12:05:23 PM
 Author     : CodeLord
 Description: This JS is used for rotate image or object around some point.
 */
$(location).attr('href');
    var AbsoulutUrlPath = "" + location.href;
    var UrlQueryName = AbsoulutUrlPath.substring(AbsoulutUrlPath.indexOf('#') + 1, AbsoulutUrlPath.length);                   

switch (UrlQueryName)
{
    case "line":

        document.location.href = '/index.html';
        break;
    default :

        break;

}

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_letsEvovleCoverDiv").animate({"left": "+=400px"}, 1500);
    });

}, 2600);

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_FincorpNameCoverWrapperStyles").animate({"left": "+=100%"}, 3000);
    });

}, 5000);

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_ConceptsNameCoverWrapperStyles").animate({"left": "+=100%"}, 3000);
    });

}, 6800);

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_FitnessNameCoverWrapperStyles").animate({"left": "+=100%"}, 3000);
    });

}, 8500);

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_LifeStyleNameCoverWrapperStyles").animate({"left": "+=100%"}, 3000);
    });

}, 10500);

setTimeout(function() {
    $(document).ready(function() {
        $("#Home_RealitiesNameCoverWrapperStyles").animate({"left": "+=100%"}, 3000);
    });

}, 12000);
setTimeout(function() {
    $(document).ready(function() {
        $("#Home_OverAllLineArt").animate({"left": "+=100%"}, 11700);
    });

}, 4000);