$(document).ready(function() {
    var currentAudio = null;

    $('.play-btn').click(function() {
        var audioSrc = $(this).data('src');
        var icon = $(this).find('i');
        var stopBtn = $(this).siblings('.stop-btn');

        if (currentAudio !== null && currentAudio.src !== audioSrc) {
            // Stop the currently playing audio
            currentAudio.pause();
            var currentIcon = $('h1[data-src="'+currentAudio.src+'"]').find('i');
            currentIcon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
            stopBtn.removeClass('d-block').addClass('d-none');
        }

        if (icon.hasClass('mdi-play-circle')) {
            var audio = new Audio(audioSrc);
            if (currentAudio !== null) {
                currentAudio.pause();
                var currentPlayIcon = $('h1[data-src="'+currentAudio.src+'"]').find('i');
                currentPlayIcon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
            }
            audio.play();
            currentAudio = audio;
            icon.removeClass('mdi-play-circle').addClass('mdi-pause-circle');
            stopBtn.removeClass('d-none').addClass('d-block');
        } else if (icon.hasClass('mdi-pause-circle')) {
            if (currentAudio !== null) {
                currentAudio.pause();
                icon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
            }
        } else {
            if (currentAudio !== null) {
                currentAudio.pause();
                currentAudio = null;
            }
            icon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
            stopBtn.removeClass('d-block').addClass('d-none');
        }

        currentAudio.onended = function() {
            icon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
            currentAudio = null;
            stopBtn.removeClass('d-block').addClass('d-none');
        };

        stopBtn.click(function() {
            if (currentAudio !== null) {
                currentAudio.pause();
                var currentPlayIcon = $('h1[data-src="'+currentAudio.src+'"]').find('i');
                currentPlayIcon.removeClass('mdi-pause-circle').addClass('mdi-play-circle');
                currentAudio = null;
                stopBtn.removeClass('d-block').addClass('d-none');
            }
        });
    });
});
