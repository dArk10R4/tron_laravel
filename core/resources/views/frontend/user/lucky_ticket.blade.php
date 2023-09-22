@extends(template() . 'layout.master2')

@section('content2')
    <div class="dashboard-body-part ">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h4 class="mb-0">{{ __('Lucky Ticket') }}</h4>
                        
                    </div>
                    <div class="card-body text-center">
                        <h2 class="site-title">Coming Soon !!!</h2>
                        <h3 style="font-size:24px;" id="timer"> 100d 20h 20m 20s</h3>
                        <p class="text-white text-justifys descripton-root text-center">
                            Coming Soon !!!
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12 col-md-12">
                        <div class="invest-plan">
                            <div class="invest-plan-shape"></div>
                            <div class="invest-plan-top">
                                
                                <p class="mb-0 fw-bold">{{ __('Lucky Ticket') }} </p>
                            </div>

                            <div class="invest-plan-middle">

                            <h2 class="site-title">{{ __('Coming Soon !!!') }}</h2>
                        <h3 style="font-size:24px;" id="timer"> 100d 20h 20m 20s</h3>
                        <p class="text-white text-justifys descripton-root text-center">
                            Coming Soon !!!
                        </p>


                                
                            </div>
                            <div class="invest-plan-action mt-3">

                            </div>
                        </div>
                    </div>

        <!-- <div class="row justify-content-center h-100  mt-5">
            <div class="row align-items-center">
                
                <div class="col-lg-12 text-center">
                    <h2 class="site-title">Coming Soon !!!</h2>
                    <h3 style="font-size:24px;" id="timer"> 100d 20h 20m 20s</h3>
                    <p class="text-white text-justifys descripton-root text-center">
                        Coming Soon !!!
                    </p>
                </div>
            </div>
        </div> -->

    </div>
@endsection

@push('script')
    <script>
                $(
        function(){
            // Set the date we're counting down to

            var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            $('#timer').html(days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ");

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                $('#timer').html("Coming Soon");
            }
            }, 1000);
        }
        )
    </script>
@endpush
