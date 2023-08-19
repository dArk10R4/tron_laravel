@extends('backend.layout.master')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($pageTitle) }}</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-end">
                            <a href="{{ route('admin.coupon.create') }}" class="btn btn-primary"> <i class="fa fa-plus"></i>
                                {{ __('Add Coupon') }}</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>

                                            <th>{{ __('SL') }}.</th>
                                            <th>{{ __('Coupon Code') }}</th>
                                            <th>{{ __('Total Bonus') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($coupons as $coupon)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $coupon->code }}</td>
                                                <td>{{ $coupon->bonus*$coupon->apply_limit . ' ' . @$general->site_currency}}</td>
                                                <!-- <td>
                                                    @if ($coupon->amount_type == 0)
                                                        {{ number_format($coupon->minimum_amount, 0) . ' ' . @$general->site_currency }}
                                                        -
                                                        {{ number_format($coupon->maximum_amount, 0) . ' ' . @$general->site_currency }}
                                                    @else
                                                        {{ number_format($coupon->amount, 0) . ' ' . @$general->site_currency }}
                                                    @endif

                                                </td> -->

                                                <td>
                                                    <div class="custom-switch custom-switch-label-onoff">
                                                        <input class="custom-switch-input status"
                                                            id="test-{{ $coupon->id }}"
                                                            data-status="{{ $coupon->status }}"
                                                            data-url="{{ route('admin.coupon.changestatus', $coupon->id) }}"
                                                            type="checkbox" name="status"
                                                            {{ $coupon->status ? 'checked' : '' }}>
                                                        <label class="custom-switch-btn"
                                                            for="test-{{ $coupon->id }}"></label>
                                                    </div>

                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.coupon.edit', $coupon->id) }}"
                                                        class="btn btn-md btn-primary"><i class="fa fa-pen mr-2"></i
                                                            class="fa fa-pen mr-2"></i>{{ __('Edit') }}</a>
                                                </td>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td class="text-center" colspan="100%">
                                                    {{ __('No Coupon Created Yet') }}</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if ($coupons->hasPages())
                            <div class="card-footer">
                                {{ $coupons->links('backend.partial.paginate') }}
                            </div>
                        @endif


                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection


@push('script')
    <script>
        'use strict'

        $(function() {

            $('.status').on('change', function() {

                let status = $(this).data('status');
                let url = $(this).data('url');

                $.ajax({

                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },

                    url: url,

                    data: {
                        status: status
                    },

                    method: "POST",

                    success: function(response) {
                        iziToast.success({

                            message: response.success,
                            position: 'topRight'
                        });
                    }
                })
            })

        })
    </script>
@endpush
