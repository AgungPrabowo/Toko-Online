/* ========================================================================
 * contact.js
 * Page/renders: gh_frontend/page-contact.html
 * Plugins used: gmaps
 * ======================================================================== */

/* global GMaps */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'gmaps'
        ], factory);
    } else {
        factory();
    }
}(function () {
    
    $(function () {
        // gmaps - marker
        // ================================
        var marker = new GMaps({
            el: '#gmaps-marker',
            lat: -7.0011238,
            lng: 110.3362891
        });
        marker.addMarker({
            lat: -7.0011238,
            lng: 110.3362891,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content: '<p>HTML Content</p>'
            }
        });
    });
    
}));