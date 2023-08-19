@extends('backend.layout.master')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($pageTitle) }}</h1>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.coupon.index') }}" class="btn btn-primary"><i
                                    class="fa fa-arrow-left mr-2"></i>{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.coupon.update', $coupon->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">


                                    <div class="form-group offman col-md-3" id="bonus">
                                        <label class="font-weight-bold">{{ __('Bonus Amount') }}<span
                                                class="text-danger">*</span></label></label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="bonus"
                                                value="{{ $coupon->bonus ? $coupon->bonus : 0 }}" placeholder="Bonus Amount">
                                            <div class="input-group-append">
                                                <div class="input-group-text">{{ @$general->site_currency }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group offman col-md-3" id="apply_limit">
                                        <label class="font-weight-bold">{{ __('Apply Limit') }}<span
                                                class="text-danger">*</span></label></label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="apply_limit"
                                                value="{{ $coupon->apply_limit ? $coupon->apply_limit : 0 }}" placeholder="Apply Limit">
                                        </div>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">{{ __('Status') }}</label>
                                        <select name="status" class="form-control selectric">
                                            <option {{ $coupon->status == '0' ? 'selected' : '' }} value="0">
                                                {{ __('Disable') }}</option>

                                            <option {{ $coupon->status == '1' ? 'selected' : '' }} value="1">
                                                {{ __('Active') }}</option>
                                        </select>
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('script')
    <script>
        'use strict'

    </script>
@endpush
