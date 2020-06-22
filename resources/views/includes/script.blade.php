<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W3B8SVJ');</script>
  <!-- End Google Tag Manager -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>    
   
  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="dompet_project/js/jquery-3.5.1.min.js">
    </script> --}}

<script>
    AOS.init();
  </script>

    <script>
        // Set the date we're counting down to
var countDownDate = new Date('{{ $promo->waktu_promo }}').getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var hari = Math.floor(distance / (1000 * 60 * 60 * 24));
  var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  jam = jam + (hari * 24);
  var menit = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var detik = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
  document.getElementById("demo").innerHTML = jam + "Jam "
  + menit + "menit " + detik + "detik ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "PROMO SELESAI";
  }
}, 1000);
    //    $(".example").TimeCircles({count_past_zero: false}).addListener(countdownComplete);
	
    // function countdownComplete(unit, value, total){
    //     if(total<=0){
    //         $(this).fadeOut('slow').replaceWith("<h2>Time's Up!</h2>");
    //     }
    // }

    // $('.carousel').carousel();

    </script>