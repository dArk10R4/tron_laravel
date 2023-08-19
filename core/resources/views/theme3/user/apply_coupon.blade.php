@extends(template() . 'layout.master2')

@section('content2')
    <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title">{{ __('Apply Coupon') }}</h5>
            <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i> {{ __('Back') }}</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="site-card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h4 class="mb-0">{{ __('Apply Coupon') }}</h4>
                        <!-- <p class="mb-0">Current Balance :
                            {{ number_format(auth()->user()->balance, 2) . ' ' . $general->site_currency }}</p> -->
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">{{ __('Coupon Code') }}</label>
                                <input type="text" name="code" id="refer-link" class="form-control"
                                    placeholder="Coupon Code" required>
                            </div>


                            <button type="submit" class="btn main-btn w-100" id="basic-addon2"><span>{{ __('Apply Coupon') }}</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>

    </script>
@endpush
