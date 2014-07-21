/*  
 Document   : MenuClickScripts.js
 Created on : 17 Jan, 2014, 12:05:23 PM
 Last Update: 17 Jan, 2014, 12:05:23 PM
 Author     : Smitesh
 Description: This JS is used for click event for menu current item
 */

$(function() {
    $('.menu_ul_li a').click(function() {
        $('.menu_ul_li a').removeClass('initial_home_effect');
        $('.menu_ul_li a').removeClass('selected');
        $(this).addClass('selected');

    });
});