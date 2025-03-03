<?php
    include './server/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        .video-container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
        }

        .video-container video {
            width: 100%;
            height: 100%;
        }

        .video-container.active {
            display: flex;
        }

        .cancel {
            position: absolute;
            top: 30px;
            left: 50px;
            z-index: 2099;
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
        }
    </style>

    <section class="video-container">
        <div class="cancel">
            <i onclick="cancelVideos()" class="bi bi-x-lg"></i>
        </div>

        <video controls  style="width: 100%;" id="myVideo" width="100%">
            <source  src="<?php echo $domain ?>assets/img/myvideo.mp4" type="video/mp4">
        </video>
    </section>

    <script>
        let video_container = document.querySelector('.video-container');
        let videos = document.querySelector('.video-container > video');

        // Use oncanplay to make sure the video is ready
//         videos.oncanplay = function() {
//     console.log('Video is ready to play');
   
//     videos.loop = true;  // Mute the video to allow autoplay
//     videos.play();
//     videos.autoplay = true;
// }


        function cancelVideos() {
            videos.pause();
            window.location.href = 'index.php';
        }
    </script>

</body>
</html>
