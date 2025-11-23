document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Xử lý Slider tự chạy
    let slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function nextSlide() {
        slides[currentSlide].classList.remove('active'); // Ẩn slide hiện tại
        currentSlide = (currentSlide + 1) % slides.length; // Chuyển sang slide kế
        slides[currentSlide].classList.add('active'); // Hiện slide mới
    }
    // Chuyển ảnh sau mỗi 3 giây
    setInterval(nextSlide, 3000);


    // 2. Xử lý Đếm ngược (Countdown) giả lập
    let hours = 2;
    let minutes = 45;
    let seconds = 0;

    const hEl = document.getElementById('h');
    const mEl = document.getElementById('m');
    const sEl = document.getElementById('s');

    setInterval(() => {
        if (seconds > 0) {
            seconds--;
        } else {
            if (minutes > 0) {
                minutes--;
                seconds = 59;
            } else {
                if (hours > 0) {
                    hours--;
                    minutes = 59;
                    seconds = 59;
                }
            }
        }
        
        // Cập nhật HTML, thêm số 0 đằng trước nếu < 10
        if(hEl) hEl.innerText = hours < 10 ? '0' + hours : hours;
        if(mEl) mEl.innerText = minutes < 10 ? '0' + minutes : minutes;
        if(sEl) sEl.innerText = seconds < 10 ? '0' + seconds : seconds;
    }, 1000);
});