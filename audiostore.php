<div class="content-large-left1">
          <center>
            <p style="font-size: 1.2vw ;" id="profile_name"></p>
            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003035.png" style="width:6vw; height: 6vw; padding-top: 10%; padding-bottom: 10%">
            <hr>
          </center>
          <div class= "Profile">
            <p style="font-size: 0.9vw; padding: 0.5vw;">Student, BCS</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Madrid, Spain</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Something Else</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Status: Studying</p>
          </div>
        </div>

        <div class="content-large-left2">
        </div>

        <div class="content-large-left3">

          <div class="js audio">
            <script>
              var playing = false;

              function act()
              {
                if(playing){
                  stop();
                }
                else{
                  play();
                }
              }

              function play() {
                document.getElementById("pause").className = "bi bi-pause";
                playing = true;
                var audio = document.getElementById("audio");
                audio.play();
              }

              function stop() {
                document.getElementById("pause").className = "bi bi-play";
                playing = false;
                var audio = document.getElementById("audio");
                audio.pause();
                audio.currentTime = 0
              }
            </script>
          </div>

          <div class="audio-settings">

            <center>
              <img src="https://d3bzyjrsc4233l.cloudfront.net/news/lofimain.jpg" height="154vw" width="235vw" style="border: 2px solid black">
              <p style="font-size: 0.8vw; padding: 0.35vw">Title of Song by Name of Band</p>
              <i class="bi bi-play" onclick="act()" type="button" id="pause"></i>
            </center>
            <audio id="audio" src="./lofi-1.mp3"></audio>

          </div>
        </div>

        