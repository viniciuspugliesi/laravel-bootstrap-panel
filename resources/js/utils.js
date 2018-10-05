import PerfectScrollbar from 'perfect-scrollbar';

export default (function () {
    // ------------------------------------------------------
    // @Window Resize
    // ------------------------------------------------------

    /**
     * NOTE: Register resize event for Masonry layout
     */
    let EVENT = document.createEvent('UIEvents');
    window.EVENT = EVENT;
    EVENT.initUIEvent('resize', true, false, window, 0);


    window.addEventListener('load', () => {
        /**
         * Trigger window resize event after page load
         * for recalculation of masonry layout.
         */
        window.dispatchEvent(EVENT);
    });


    // ------------------------------------------------------
    // @Resize Trigger
    // ------------------------------------------------------

    // Trigger resize on any element click
    document.addEventListener('click', () => {
        window.dispatchEvent(window.EVENT);
    });


    // ------------------------------------------------------
    // @External Links
    // ------------------------------------------------------

    // Open external links in new window
    $('a')
        .filter('[href^="http"], [href^="//"]')
        .not(`[href*="${window.location.host}"]`)
        .attr('rel', 'noopener noreferrer')
        .attr('target', '_blank');


    // ------------------------------------------------------
    // @Perfect Scrollbar
    // ------------------------------------------------------

    // Create perfect scrollbar for all scrollable classes
    let scrollables = $('.scrollable');
    if (scrollables.length > 0) {
        scrollables.each((index, el) => {
            new PerfectScrollbar(el);
        });
    }


    // ------------------------------------------------------
    // @Popover
    // ------------------------------------------------------

    $('[data-toggle="popover"]').popover();


    // ------------------------------------------------------
    // @Tooltips
    // ------------------------------------------------------

    $('[data-toggle="tooltip"]').tooltip();
}());
