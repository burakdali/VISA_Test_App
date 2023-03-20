<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fill your Application') }} </h2>
        <a href="/firstPage" class="btn btn-success">
            Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Please fill below information <span class="underline">per to passport</span></h3>
                    <form action="/thirdPage" method="get" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-dark">First
                                    name:</label>
                                <input type="text" id="first_name" name="first_name" value="<?php if (Session::has('application')) {
                                    echo $application['first_name'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="John" required>
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-dark">last
                                    name:</label>
                                <input type="text" id="last_name" name="last_name" value="<?php if (Session::has('application')) {
                                    echo $application['last_name'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Doe" required>
                            </div>
                            <div>
                                <label for="date_of_birth" class="block mb-2 text-sm font-medium text-dark">Date of
                                    birth:</label>
                                <input type="date" id="date_of_birth" name="date_of_birth"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['date_of_birth'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    max="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['gender'];
                            } ?>" class="genderData">
                                <label for="gender" class="block mb-2 text-sm font-medium text-dark">Gender</label>
                                <select id="gender" name="gender"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['place_of_birth'];
                            } ?>" class="placeOfBirthData">
                                <label for="place_of_birth" class="block mb-2 text-sm font-medium text-dark">Place of
                                    birth</label>
                                <select id="place_of_birth" name="place_of_birth"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    @include('components.countries')
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['residence'];
                            } ?>" class="residenceData">
                                <label for="residence"
                                    class="block mb-2 text-sm font-medium text-dark">Residence</label>
                                <select id="residence" name="residence"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    @include('components.countries')
                                </select>
                            </div>
                            <div>
                                <label for="passport_no" class="block mb-2 text-sm font-medium text-dark">Passport
                                    number:</label>
                                <input type="text" id="passport_no" name="passport_no" value="<?php if (Session::has('application')) {
                                    echo $application['passport_no'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="6" required>
                            </div>
                            <div>
                                <label for="issue_date" class="block mb-2 text-sm font-medium text-dark">Issue
                                    Date:</label>
                                <input type="date" id="issue_date" name="issue_date" value="<?php if (Session::has('application')) {
                                    echo $application['issue_date'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    max="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div>
                                <label for="expiry_date" class="block mb-2 text-sm font-medium text-dark">Expiry
                                    Date:</label>
                                <input type="date" id="expiry_date" name="expiry_date" value="<?php if (Session::has('application')) {
                                    echo $application['expiry_date'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['place_of_issue'];
                            } ?>" class="placeOfIssueData">
                                <label for="place_of_issue" class="block mb-2 text-sm font-medium text-dark">Place of
                                    issue</label>
                                <select id="place_of_issue" name="place_of_issue"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    @include('components.countries')
                                </select>
                            </div>
                            <div>
                                <label for="arrival_date" class="block mb-2 text-sm font-medium text-dark">Arrival
                                    Date:</label>
                                <input type="date" id="arrival_date" name="arrival_date" value="<?php if (Session::has('application')) {
                                    echo $application['arrival_date'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div>
                                <label for="profession"
                                    class="block mb-2 text-sm font-medium text-dark">Profession:</label>
                                <input type="text" id="profession" name="profession" value="<?php if (Session::has('application')) {
                                    echo $application['profession'];
                                } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Doctor" required>
                            </div>
                            <div>
                                <label for="organization"
                                    class="block mb-2 text-sm font-medium text-dark">Organization:</label>
                                <input type="text" id="organization" name="organization"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['organization'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ministry of high education" required>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['visa_duration'];
                            } ?>" class="visaDurationData">
                                <label for="visa_duration" class="block mb-2 text-sm font-medium text-dark">VISA
                                    Duration</label>
                                <select id="visa_duration" name="visa_duration"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                                    @endfor
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['visa_status'];
                            } ?>" class="visaStatusData">
                                <label for="visa_status" class="block mb-2 text-sm font-medium text-dark">VISA
                                    Status</label>
                                <select id="visa_status" name="visa_status"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option value="Multiple" selected>Multiple</option>
                                    <option value="single">single</option>
                                </select>
                            </div>
                            <br>


                            <div>
                                <h6 class="mb-2">Please upload require documents for VISA requirement:</h6>
                                <label for="passport_picture"
                                    class="block mb-2 text-sm font-medium text-dark">Passport
                                    Picture:</label>
                                <input type="file" id="passport_picture"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div>
                                <h6 class="mb-2">Note: picture most meet requirement in order to apply for VISA:
                                </h6>
                                <label for="personal_picture"
                                    class="block mb-2 text-sm font-medium text-dark">Personal
                                    Picture:</label>
                                <input type="file" id="personal_picture"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                        </div>

                        <hr>
                        <hr>
                        <div id="<?php if (Session::has('application') && $application['companion'] != null) {
                            echo $application['companion'];
                        } ?>" class="companionData">
                            <h6 class="mb-2 mt-4">Are you travelling with companion?(plus one)</h6>
                            <label for="companion" class="block mb-2 text-sm font-medium text-dark">Companion
                                exist:</label>
                            <select id="companion" name="companion"
                                class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="yes" id="withCompanion">Yes</option>
                                <option value="no" id="withoutCompanion" selected>No</option>
                            </select>
                        </div>
                        <br>
                        <div id="companion_exists" class="grid gap-6 mb-6 md:grid-cols-2" style="display:none">
                            <div>
                                <label for="companion_first_name"
                                    class="block mb-2 text-sm font-medium text-dark">Companion First
                                    name:</label>
                                <input type="text" id="companion_first_name" name="companion_first_name"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_first_name'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="John">
                            </div>
                            <div>
                                <label for="companion_last_name"
                                    class="block mb-2 text-sm font-medium text-dark">Companion last
                                    name:</label>
                                <input type="text" id="companion_last_name" name="companion_last_name"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_last_name'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Doe">
                            </div>
                            <div>
                                <label for="companion_date_of_birth"
                                    class="block mb-2 text-sm font-medium text-dark">Companion date of
                                    birth:</label>
                                <input type="date" id="companion_date_of_birth" name="companion_date_of_birth"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_date_of_birth'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    max="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_gender'];
                            } ?>" class="companionGender">
                                <label for="companion_gender"
                                    class="block mb-2 text-sm font-medium text-dark">Companion
                                    gender</label>
                                <select id="companion_gender" name="companion_gender"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_place_of_birth'];
                            } ?>" class="companionPlaceOfBirth">
                                <label for="companion_place_of_birth"
                                    class="block mb-2 text-sm font-medium text-dark">Place of
                                    birth</label>
                                <select id="companion_place_of_birth" name="companion_place_of_birth"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @include('components.countries')
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_residence'];
                            } ?>" class="companionResidence">
                                <label for="companion_residence"
                                    class="block mb-2 text-sm font-medium text-dark">Residence</label>
                                <select id="companion_residence" name="companion_residence"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @include('components.countries')
                                </select>
                            </div>
                            <div>
                                <label for="companion_passport_NO"
                                    class="block mb-2 text-sm font-medium text-dark">Companion Passport
                                    number:</label>
                                <input type="text" id="companion_passport_NO" name="companion_passport_NO"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_passport_NO'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="6">
                            </div>
                            <div>
                                <label for="companion_issue_date"
                                    class="block mb-2 text-sm font-medium text-dark">Companion issue
                                    Date:</label>
                                <input type="date" id="companion_issue_date" name="companion_issue_date"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_issue_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    max="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div>
                                <label for="companion_expiry_date"
                                    class="block mb-2 text-sm font-medium text-dark">Companion expiry
                                    Date:</label>
                                <input type="date" id="companion_expiry_date" name="companion_expiry_date"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_expiry_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_place_of_issue'];
                            } ?>" class="companionPlaceOfIssue">
                                <label for="companion_place_of_issue"
                                    class="block mb-2 text-sm font-medium text-dark">Companion place of
                                    issue</label>
                                <select id="companion_place_of_issue" name="companion_place_of_issue"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @include('components.countries')
                                </select>
                            </div>
                            <div>
                                <label for="companion_arrival_date"
                                    class="block mb-2 text-sm font-medium text-dark">Companion arrival
                                    Date:</label>
                                <input type="date" id="companion_arrival_date" name="companion_arrival_date"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_arrival_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div>
                                <label for="companion_profession"
                                    class="block mb-2 text-sm font-medium text-dark">Companion profession:</label>
                                <input type="text" id="companion_profession" name="companion_profession"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_profession'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Doctor">
                            </div>
                            <div>
                                <label for="companion_organization"
                                    class="block mb-2 text-sm font-medium text-dark">Companion
                                    organization:</label>
                                <input type="text" id="companion_organization" name="companion_organization"
                                    value="<?php if (Session::has('application')) {
                                        echo $application['companion_organization'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ministry of high education">
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_visa_duration'];
                            } ?>" class="companionVisaDuration">
                                <label for="companion_visa_duration"
                                    class="block mb-2 text-sm font-medium text-dark">Companion VISA
                                    Duration</label>
                                <select id="companion_visa_duration" name="companion_visa_duration"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                                    @endfor
                                </select>
                            </div>
                            <div id="<?php if (Session::has('application')) {
                                echo $application['companion_visa_status'];
                            } ?>" class="companionVisaStatus">
                                <label for="companion_visa_status"
                                    class="block mb-2 text-sm font-medium text-dark">Companion VISA
                                    Status</label>
                                <select id="companion_visa_status" name="companion_visa_status"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="Multiple" selected>Multiple</option>
                                    <option value="single">single</option>
                                </select>
                            </div>
                            <br>

                            <div>
                                <h6 class="mb-2">Please upload require documents for VISA requirement:</h6>

                                <label for="companion_passport_picture"
                                    class="block mb-2 text-sm font-medium text-dark">Companion passport
                                    Picture:</label>
                                <input type="file" id="companion_passport_picture"
                                    name="companion_passport_picture"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <h6 class="mb-2">Note: picture most meet requirement in order to apply for VISA:
                                </h6>
                                <label for="companion_personal_picture"
                                    class="block mb-2 text-sm font-medium text-dark">Companion personal
                                    Picture:</label>
                                <input type="file" id="companion_personal_picture"
                                    name="companion_personal_picture"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mx-auto" style="width: 200px;">
                                <button type="submit" id="submitApplication"
                                    class="btn btn-primary m-4 w-full text-dark">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        var formData = new FormData();
        $("#submitApplication").on("click", function() {
            if (formData) {
                companion_personal_picture
                var passportImage = $("#passport_picture").prop("files")[0];
                var personalImage = $("#personal_picture").prop("files")[0];
                var companionPassportImage = $("#companion_passport_picture").prop("files")[0];
                var companionPersonalImage = $("#companion_personal_picture").prop("files")[0];
                formData.append('passport_picture', passportImage);
                formData.append('personal_picture', personalImage);
                formData.append('companion_passport_picture', companionPassportImage);
                formData.append('companion_personal_picture', companionPersonalImage);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    contentType: false,
                    processData: false,
                    type: "post",
                    url: "/storeImages",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        });
    });

    $(document).ready(function() {

        $('#first_name').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z]/g, ''))
        });
        $('#last_name').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z]/g, ''))
        });
        $('#passport_no').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z0-9]/g, ''))
        });
        $('#companion_first_name').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z]/g, ''))
        });
        $('#companion_last_name').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z]/g, ''))
        });
        $('#companion_passport_NO').bind('keyup blur', function() {
            $(this).val($(this).val().replace(/[^A-Za-z0-9]/g, ''))
        });

    });
    $(document).ready(function() {
        $('#companion').on("change", function() {
            if ($("#companion").val() == "yes") {
                $('#companion_exists').show();
                $("#companion_first_name").attr("required", true);
                $("#companion_last_name").attr("required", true);
                $("#companion_date_of_birth").attr("required", true);
                $("#companion_gender").attr("required", true);
                $("#companion_place_of_birth").attr("required", true);
                $("#companion_residence").attr("required", true);
                $("#companion_passport_NO").attr("required", true);
                $("#companion_issue_date").attr("required", true);
                $("#companion_expiry_date").attr("required", true);
                $("#companion_place_of_issue").attr("required", true);
                $("#companion_arrival_date").attr("required", true);
                $("#companion_profession").attr("required", true);
                $("#companion_organization").attr("required", true);
                $("#companion_visa_duration").attr("required", true);
                $("#companion_visa_status").attr("required", true);
                $("#companion_passport_picture").attr("required", true);
                $("#companion_personal_picture").attr("required", true);
            } else {
                $('#companion_exists').hide();
                $("#companion_first_name").attr("required", false);
                $("#companion_last_name").attr("required", false);
                $("#companion_date_of_birth").attr("required", false);
                $("#companion_gender").attr("required", false);
                $("#companion_place_of_birth").attr("required", false);
                $("#companion_residence").attr("required", false);
                $("#companion_passport_NO").attr("required", false);
                $("#companion_issue_date").attr("required", false);
                $("#companion_expiry_date").attr("required", false);
                $("#companion_place_of_issue").attr("required", false);
                $("#companion_arrival_date").attr("required", false);
                $("#companion_profession").attr("required", false);
                $("#companion_organization").attr("required", false);
                $("#companion_visa_duration").attr("required", false);
                $("#companion_visa_status").attr("required", false);
                $("#companion_passport_picture").attr("required", false);
                $("#companion_personal_picture").attr("required", false);
            }
        });
    });
    $(document).ready(function() {
        var gender = $(".genderData").attr('id');
        $("#gender").val(gender).change();
        var POB = $(".placeOfBirthData").attr('id');
        $("#place_of_birth").val(POB).change();
        var residence = $(".residenceData").attr('id');
        $("#residence").val(residence).change();
        var POI = $(".placeOfIssueData").attr('id');
        $("#place_of_issue").val(POI).change();
        var VDD = $(".visaDurationData").attr('id');
        $("#visa_duration").val(VDD).change();
        var VSD = $(".visaStatusData").attr('id');
        $("#visa_status").val(VSD).change();
        var companionData = $(".companionData").attr('id');
        $("#companion").val(companionData).change();
        var companionGender = $(".companionGender").attr('id');
        $("#companion_gender").val(companionGender).change();
        var companionPOB = $(".companionPlaceOfBirth").attr('id');
        $("#companion_place_of_birth").val(companionPOB).change();
        var companionResidence = $(".companionResidence").attr('id');
        $("#companion_residence").val(companionResidence).change();
        var companionPOI = $(".companionPlaceOfIssue").attr('id');
        $("#companion_place_of_issue").val(companionPOI).change();
        var companionVDD = $(".companionVisaDuration").attr('id');
        $("#companion_visa_duration").val(companionVDD).change();
        var CompanionVSD = $(".companionVisaStatus").attr('id');
        $("#companion_visa_status").val(CompanionVSD).change();
    });
</script>
