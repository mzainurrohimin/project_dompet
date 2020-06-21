
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="dompet_project/js/jquery-3.5.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <script src="dompet_project/js/TimeCircles.js"></script>
    {{-- <script src="dompet_project/js/jquery-3.3.1.min.js"></script> --}}

    <script>
       $(".example").TimeCircles({count_past_zero: false}).addListener(countdownComplete);
	
    function countdownComplete(unit, value, total){
        if(total<=0){
            $(this).fadeOut('slow').replaceWith("<h2>Time's Up!</h2>");
        }
    }
    </script>