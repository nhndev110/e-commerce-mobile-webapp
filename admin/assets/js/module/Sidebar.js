export default function Sidebar() {
    $('.icon-shrink').on('click', function (e) {
        let widthSidebar = $('.sidebar-offcanvas').width()

        if (widthSidebar >= 250) {
            $('.sidebar-offcanvas').css({
                width: 'var(--shrink-sidebar-width)',
            })
            $('.icon-shrink').css({
                transform: 'translate(50%, -50%) rotate(180deg)',
            })
            $('.text-category').css({
                display: 'none',
            })
            $('.title-logo').css({
                display: 'none',
            })
            $('.category-link').css({
                padding: '0',
                justifyContent: 'center',
                width: '50px',
                height: '50px',
            })
            $('.icon-category').css({
                marginRight: '0',
            })
            $('#sidebar').css({
                padding: '0 4px',
            })
            $('.item-category').css({
                display: 'flex',
                justifyContent: 'center',
            })
            $('.logo-sidebar').css({
                padding: '12px 0',
                justifyContent: 'center',
            })
            $('.page-body-wrapper').css({
                marginLeft: 'var(--shrink-sidebar-width)',
                width: 'calc(100vw - var(--shrink-sidebar-width))',
            })
            $('header').css({
                width: 'calc(100vw - var(--shrink-sidebar-width))',
            })
        } else {
            $('.sidebar-offcanvas').css({
                width: 'var(--sidebar-width)',
            })
            $('.icon-shrink').css({
                transform: 'translate(50%, -50%) rotate(360deg)',
            })
            $('.text-category').css({
                display: 'block',
            })
            $('.title-logo').css({
                display: 'block',
            })
            $('.category-link').css({
                padding: '10px 12px',
                justifyContent: 'unset',
                width: '100%',
            })
            $('.icon-category').css({
                marginRight: '8px',
            })
            $('#sidebar').css({
                padding: '0 16px',
            })
            $('.item-category').css({
                display: 'flex',
                justifyContent: 'unset',
            })
            $('.logo-sidebar').css({
                padding: '12px 0 12px 16px',
                justifyContent: 'unset',
            })
            $('.page-body-wrapper').css({
                marginLeft: 'var(--sidebar-width)',
                width: 'calc(100vw - var(--sidebar-width))',
            })
            $('header').css({
                width: 'calc(100vw - var(--sidebar-width))',
            })
        }
    })
}
