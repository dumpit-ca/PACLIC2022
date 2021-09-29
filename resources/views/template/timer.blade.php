<style>
    .timer {
        background-color: #04333B;
        color: #fff;
        border-radius: 55px;
    }
    ul.time > li {
        font-size: 1.3em;
        list-style-type: none;
    }
    ul.time > li > span {
        display: block;
        font-size: 4.5rem;
    }
</style>
<h2 class="text-center" id="headline">The Conference starts in:</h2>
<div class="container">   
    <div class="text-center timer my-0 mx-auto d-flex align-items-center justify-content-center" id="countdown">
        <ul class="p-0 time">
            <li class="p-3 d-inline-block text-uppercase"><span class="pb-5" id="days"></span>days</li>
            <li class="p-3 d-inline-block text-uppercase"><span class="pb-5" id="hours"></span>Hours</li>
            <li class="p-3 d-inline-block text-uppercase"><span class="pb-5" id="minutes"></span>Minutes</li>
            <li class="p-3 d-inline-block text-uppercase"><span class="pb-5" id="seconds"></span>Seconds</li>
        </ul>
    </div>
</div>
{{-- Javascript --}}
<script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let conference = "Oct 20, 2022 09:00:00",
      countDown = new Date(conference).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;
        //do something later when date is reached
        if (distance <= 0) {
        clearInterval(x);
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

        headline.innerText = "Welcome to PACLIC36";
        countdown.style.display = "none";
        content.style.display = "block";
        document.getElementById("days").innerText = 0,
          document.getElementById("hours").innerText = 0,
          document.getElementById("minutes").innerText = 0,
          document.getElementById("seconds").innerText = 0;
          
        }
        else{
        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        }
        //seconds
      }, 0)
  }());
</script>