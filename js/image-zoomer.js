( function( $ ) {

    'use strict';

    class ImageZoomer {
      constructor ( target, settings, i ) {

        this.enabled = settings.enabled;
        this.zoomer = settings.zoomer;
        this.canvas = settings.canvas;

        this.element = this.zoomer[0];
        this.target = target;
        this.canvas = this.canvas[0];
        this.ctx = this.canvas.getContext('2d');

        this.zoomEnabled = this.zoomEnabled.bind(this);

        this.onStart = this.onStart.bind(this);
        this.onMove = this.onMove.bind(this);
        this.onEnd = this.onEnd.bind(this);
        this.update = this.update.bind(this);
        this.onResize = this.onResize.bind(this);

        this.targetBCR = null;
        this.zoomed = 0;
        this.targetZoomed = 0;

        this.x = 0;
        this.y = 0;
        this.trackingTouch = false;
        this.scheduledUpdate = false;

        this.touchDevice = false;

        this.initCanvas();
        this.addEventListeners();
        this.onResize();


        requestAnimationFrame(this.update);

      }

      initCanvas () {
        const width = 512;
        const height = 512;
        const dPR = window.devicePixelRatio || 1;
        this.canvas.width = width * dPR;
        this.canvas.height = height * dPR;

        this.canvas.style.width = `${width}px`;
        this.canvas.style.height = `${height}px`;

        this.ctx.scale(dPR, dPR);
      }

      zoomEnabled (evt = '') {

        var $zoom_toggle = $('#zoom-toggle');
            this.enabled = $zoom_toggle.data('enabled');

        if( ! this.enabled ) {

            this.removeEventListeners();

        } else {

            this.addEventListeners();

        }

      }

      onResize () {
        this.targetBCR = this.target.getBoundingClientRect();
      }

      onScroll () {
        this.targetBCR = this.target.getBoundingClientRect();
      }

      onStart (evt) {
        if(evt.target !== this.target) {
          return;
        }

        if( 'ontouchstart' in window ) {

            this.touchDevice = true;

            this.x = evt.touches[0].pageX;
            this.y = evt.touches[0].pageY;

        } else {

            this.x = evt.clientX;
            this.y = evt.clientY;

        }

        evt.preventDefault();
        this.trackingTouch = true;

        this.targetZoomed = 1;

        console.log(this.targetBCR);
      }

      onMove (evt) {
        if(!this.trackingTouch) {return;}

         if( this.touchDevice ) {

            this.x = evt.touches[0].pageX;
            this.y = evt.touches[0].pageY;

         } else {

            this.targetBCR = this.target.getBoundingClientRect();

            this.x = evt.clientX;
            this.y = evt.clientY;

         }

        if(this.scheduledUpdate) {
          return;
        }
        this.scheduledUpdate = true;
      }

      onEnd () {
        this.trackingTouch = false;
        this.targetZoomed = 0;
        this.touchDevice = false;
      }

      update () {
        const TAU = Math.PI * 2;
        const MAX_RADIUS = 128;
        const radius = this.zoomed * MAX_RADIUS;

        const targetX = (this.x - this.targetBCR.left) / this.targetBCR.width;
        const targetY = (this.y - this.targetBCR.top) / this.targetBCR.height;
        const imageScale = 3;
        const scaledTargetWidth = this.targetBCR.width * imageScale;
        const scaledTargetHeight = this.targetBCR.height * imageScale;

        this.zoomEnabled();

       //console.log(targetX, targetY);

        // console.log( 'updating' );

        this.ctx.shadowColor = 'rgba(0,0,0,0.3)';
        this.ctx.shadowBlur = 12;
        this.ctx.shadowOffsetY = 8;

        this.ctx.clearRect(0, 0, 512, 512);
        this.ctx.fillStyle = '#FFF';
        this.ctx.beginPath();
        this.ctx.arc(128, 256 - radius, radius, 0, TAU);
        this.ctx.closePath();
        this.ctx.fill();

        this.ctx.save();
        this.ctx.arc(128, 256 - (radius + 1), radius + 1, 0, TAU);
        this.ctx.clip();
        this.ctx.drawImage(this.target, -targetX * scaledTargetWidth + 128, -targetY * scaledTargetHeight + 128, scaledTargetWidth, scaledTargetHeight);
        this.ctx.restore();

        this.element.style.transform = `translate(${this.x - 64}px, ${this.y}px)`;

        this.zoomed += (this.targetZoomed - this.zoomed) / 5;
        //console.log(this.zoomed);
        this.scheduledUpdate = false;
        requestAnimationFrame(this.update);
      }

      addEventListeners () {

        // $(document).on( 'click', '#zoom-toggle', this.zoomEnabled );

        document.addEventListener('touchstart', this.onStart);
        document.addEventListener('touchmove', this.onMove);
        document.addEventListener('touchend', this.onEnd);

        this.target.addEventListener('mouseover', this.onStart);
        this.target.addEventListener('mousemove', this.onMove);
        this.target.addEventListener('mouseout', this.onEnd);

        window.addEventListener('resize', this.onResize);
      }

      removeEventListeners () {

        document.removeEventListener('touchstart', this.onStart);
        document.removeEventListener('touchmove', this.onMove);
        document.removeEventListener('touchend', this.onEnd);

        this.target.removeEventListener('mouseover', this.onStart);
        this.target.removeEventListener('mousemove', this.onMove);
        this.target.removeEventListener('mouseout', this.onEnd);

        window.removeEventListener('resize', this.onResize);
      }
    }

    $.fn.zoomer = function( options ) {

                // This is the easiest way to have default options.
        var settings = $.extend({
            // These are the defaults.
            enabled: false,
            zoomer: '.zoomer',
            canvas: '.zoomer__canvas'
        }, options );

        return this.each( function( i, val ) {

            var zoomer = $( '<div/>' ),
                canvas = $( '<canvas/>' );

            $( zoomer ).addClass( 'zoomer ' + i );
            $( canvas ).addClass( 'zoomer__canvas ' + i ).appendTo( zoomer );

            $( this ).parent().append( zoomer );

            var settings = $.extend({
                enabled: false,
                zoomer: zoomer,
                canvas: canvas

            }, options);
            
            new ImageZoomer( this, settings, i );

            

        } );

    }

    $('#learn-press-content-item .content-item-summary img').zoomer();

    $(document).on( 'click', '#zoom-toggle', function(evt) {

        evt.preventDefault();

        var $zoom_toggle = $( '#zoom-toggle' ),
            zoom_enabled = $zoom_toggle.data('enabled');

            zoom_enabled = ! zoom_enabled;

            $zoom_toggle.data('enabled', zoom_enabled );

        if( ! zoom_enabled ) {

            $zoom_toggle.find('.lnr').removeClass('lnr-circle-minus');
            $zoom_toggle.find('.lnr').addClass('lnr-plus-circle');

        } else {

            $zoom_toggle.find('.lnr').removeClass('lnr-plus-circle');
            $zoom_toggle.find('.lnr').addClass('lnr-circle-minus');


        }

        

    } );


} )( jQuery );
