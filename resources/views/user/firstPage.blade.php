<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('First Page') }} </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Please enter your phone number:</h3>
                    <form action="/secondPage" method="get">
                        @csrf
                        <div class="input-group mt-4">

                            <div id="<?php if (Session::has('phone')) {
                                echo $phone['country_code'];
                            } ?>" class="countryCode">
                                <select class="countryCodeValue" name="country_code" id="select_code" required>
                                    @include('components.country-code')
                                </select>
                            </div>
                            <input type="number" class="form-control" aria-label="phone_number" required
                                placeholder="phone number" name="phone_number" value="<?php if (Session::has('phone')) {
                                    echo $phone['phone_number'];
                                } ?>">
                            <input type="text" class="form-control" aria-label="OTPcode" maxlength="4" required
                                placeholder="OTP Code" id="otp_code" name="otp_code" value="<?php if (Session::has('phone')) {
                                    echo $phone['otp_code'];
                                } ?>">
                        </div>
                        <div class="row">
                            <div class="mx-auto" style="width: 200px;">
                                <button type="submit" class="btn btn-primary m-4 w-full text-dark">Next</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        var code = $(".countryCode").attr('id');
        $("#select_code").val(code).change();
    });
    $('#otp_code').bind('keyup blur', function() {
        $(this).val($(this).val().replace(/[^A-Za-z0-9]/g, ''))
    });
</script>
