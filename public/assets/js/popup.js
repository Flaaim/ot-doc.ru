/**
 * Popup: показывается каждые 3 дня каждому посетителю сайта.
 * Использует localStorage для хранения даты последнего показа.
 */
(function () {
    var POPUP_KEY = 'promo_popup_last_shown';
    var DAYS_INTERVAL = 3;
    var MS_INTERVAL = DAYS_INTERVAL * 24 * 60 * 60 * 1000;

    function shouldShowPopup() {
        try {
            var lastShown = localStorage.getItem(POPUP_KEY);
            if (!lastShown) return true;
            return (Date.now() - parseInt(lastShown, 10)) >= MS_INTERVAL;
        } catch (e) {
            return true;
        }
    }

    function markShown() {
        try {
            localStorage.setItem(POPUP_KEY, Date.now().toString());
        } catch (e) {}
    }

    function closePopup() {
        var overlay = document.getElementById('promo-popup-overlay');
        if (!overlay) return;
        overlay.classList.remove('promo-popup-overlay--visible');
        setTimeout(function () {
            overlay.style.display = 'none';
        }, 350);
    }

    function showPopup() {
        var overlay = document.getElementById('promo-popup-overlay');
        if (!overlay) return;

        // 1. Сначала делаем элемент видимым (display: flex), но opacity=0
        overlay.style.display = 'flex';

        // 2. Принудительный reflow, чтобы transition сработал
        void overlay.offsetWidth;

        // 3. Добавляем класс для анимации (opacity: 1 + сдвиг попапа)
        overlay.classList.add('promo-popup-overlay--visible');

        // 4. Фиксируем время показа
        markShown();
    }

    function initPopup() {
        if (!shouldShowPopup()) return;

        var overlay = document.getElementById('promo-popup-overlay');
        if (!overlay) return;

        // Показываем через 2 секунды после загрузки страницы
        setTimeout(showPopup, 2000);

        // Закрыть по кнопке ×
        var closeBtn = document.getElementById('promo-popup-close');
        if (closeBtn) closeBtn.addEventListener('click', closePopup);

        // Закрыть по кнопке "Позже"
        var laterBtn = document.getElementById('promo-popup-later');
        if (laterBtn) laterBtn.addEventListener('click', closePopup);

        // Закрыть по клику на оверлей (вне попапа)
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) closePopup();
        });

        // Закрыть по Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closePopup();
        });
    }

    // Запускаем после загрузки DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPopup);
    } else {
        initPopup();
    }
})();

