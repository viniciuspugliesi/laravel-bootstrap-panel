import PerfectScrollbar from 'perfect-scrollbar';

export default (function () {
    // ------------------------------------------------------
    // @Window load
    // ------------------------------------------------------

    $(window).on('load', function() {

        // ------------------------------------------------------
        // @Popover
        // ------------------------------------------------------

        $('[data-toggle="popover"]').popover();


        // ------------------------------------------------------
        // @Tooltips
        // ------------------------------------------------------

        $('[data-toggle="tooltip"]').tooltip();


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
        // @Form group label
        // ------------------------------------------------------

        $(document).on('change', '.form-group-label .form-control', function() {
            if ($(this).val() && ! $(this).hasClass('has-value')) {
                $(this).addClass('has-value');
            } else if (!$(this).val()) {
                $(this).removeClass('has-value');
            }
        });

        $('.form-group-label .form-control').each((index, el) => {
            if ($(el).val()) {
                $(el).addClass('has-value');
            } else {
                $(el).removeClass('has-value');
            }
        });


        // ------------------------------------------------------
        // @Form input password
        // ------------------------------------------------------

        $(document).on('click', '.input-password', function () {
            let i = $(this).find('i');
            let input = $(this).parent().parent().parent().find('input');

            if (i.hasClass('fa-eye-slash')) {
                i.removeClass('fa-eye-slash').addClass('fa-eye');
                input.attr('type', 'text');
            } else {
                i.removeClass('fa-eye').addClass('fa-eye-slash');
                input.attr('type', 'password');
            }

            setTimeout(() => { input.focus(); }, 100);
        });
    });
}());
