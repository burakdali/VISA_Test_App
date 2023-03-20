<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Preview your input') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="h3 mt-2 mb-2">Review your data before saving it:</h3>
                    <br>
                    <div>
                        <h5 class="h5">Contact details:</h5>
                        <ol class="list-group list-group-numbered">

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">country code</div>
                                    <?php echo $phone['country_code']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Phone number</div>
                                    <?php echo $phone['phone_number']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">OTP Code</div>
                                    <?php echo $phone['otp_code']; ?>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="mt-2">
                        <h5 class="h5">Application details:</h5>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">First Name</div>
                                    <?php echo $application['first_name']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Last Name</div>
                                    <?php echo $application['last_name']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Date of birth</div>
                                    <?php echo $application['date_of_birth']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Gender</div>
                                    <?php echo $application['gender']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Place of birth</div>
                                    <?php echo $application['place_of_birth']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Residence</div>
                                    <?php echo $application['residence']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Passport number</div>
                                    <?php echo $application['passport_no']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Issue Date</div>
                                    <?php echo $application['issue_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Expiry Date</div>
                                    <?php echo $application['expiry_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Place of issue</div>
                                    <?php echo $application['place_of_issue']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Arrival date</div>
                                    <?php echo $application['arrival_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Profession</div>
                                    <?php echo $application['profession']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Organization</div>
                                    <?php echo $application['organization']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Visa Duration</div>
                                    <?php echo $application['visa_duration']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Visa Status</div>
                                    <?php echo $application['visa_status']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Passport Image</div>

                                    <img src="{{ url('images/passport_picture.jpeg') }}" width="500"
                                        height="600" />

                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Personal Image</div>
                                    <img src="{{ url('images/personal_picture.jpeg') }}" width="500"
                                        height="600" />
                                </div>
                            </li>

                        </ol>
                    </div>
                    <br>
                    <hr>
                    <br>
                    @if ($application['companion'] == 'yes')
                        <div class="mt-2">
                            <h5 class="h5">Companion details:</h5>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion First Name</div>
                                        <?php echo $application['companion_first_name']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Last Name</div>
                                        <?php echo $application['companion_last_name']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Date of birth</div>
                                        <?php echo $application['companion_date_of_birth']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Gender</div>
                                        <?php echo $application['companion_gender']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Place of birth</div>
                                        <?php echo $application['companion_place_of_birth']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Residence</div>
                                        <?php echo $application['companion_residence']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Passport number</div>
                                        <?php echo $application['companion_passport_NO']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Passport Issue Date</div>
                                        <?php echo $application['companion_issue_date']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Passport Expiry Date</div>
                                        <?php echo $application['companion_expiry_date']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Passport Place of issue</div>
                                        <?php echo $application['companion_place_of_issue']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Arrival date</div>
                                        <?php echo $application['companion_arrival_date']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Profession</div>
                                        <?php echo $application['companion_profession']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Organization</div>
                                        <?php echo $application['companion_organization']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Visa Duration</div>
                                        <?php echo $application['companion_visa_duration']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Visa Status</div>
                                        <?php echo $application['companion_visa_status']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion Passport Image</div>
                                        <img src="{{ url('images/companion_passport_picture.jpeg') }}"
                                            alt="No Companion Image" width="500" height="600">
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Companion personal Image</div>
                                        <img src="{{ url('images/companion_personal_picture.jpeg') }}"
                                            alt="No Companion Image" width="500" height="600">
                                    </div>
                                </li>

                            </ol>
                        </div>
                    @endif
                    <br>
                    <hr>
                    <br>
                    <div>
                        <h5 class="h5">Residence details:</h5>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">check in date</div>
                                    <?php echo $placeToStay['check_in_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Check out date</div>
                                    <?php echo $placeToStay['check_out_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Room Type</div>
                                    <?php echo $placeToStay['room_type']; ?>
                                </div>
                            </li>
                        </ol>
                        <br>
                        <h5 class="h5">Extra Nights:</h5>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Extra check in date</div>
                                    <?php echo $placeToStay['extra_check_in_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Extra Check out date</div>
                                    <?php echo $placeToStay['extra_check_out_date']; ?>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Extra Room Type</div>
                                    <?php echo $placeToStay['extra_room_type']; ?>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="row mt-4">
                        <form action="/saveApplication" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mx-auto" style="width: 200px;">
                                <button type="submit" class="btn btn-success text-dark">Save Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
