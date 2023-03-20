<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Third Page') }} </h2>
        <a href="/secondPage" class="btn btn-success">
            Back</a>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h5 class="h5">Please choose your accommodation preference as you are eligible for <span
                            class="underline">5
                            nights</span></h5>
                    <form action="/previewPage" method="get" class="mt-4">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="check_in_date" class="block mb-2 text-sm font-medium text-dark">Check in
                                    date:</label>
                                <input type="date" id="check_in_date" name="check_in_date"
                                    value="<?php if (Session::has('placeToStay')) {
                                        echo $placeToStay['check_in_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div>
                                <label for="check_out_date" class="block mb-2 text-sm font-medium text-dark">Check out
                                    date:</label>
                                <input type="date" id="check_out_date" name="check_out_date"
                                    value="<?php if (Session::has('placeToStay')) {
                                        echo $placeToStay['check_out_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d', strtotime('+5 days')); ?>" required>
                            </div>
                            <div id="<?php if (Session::has('placeToStay')) {
                                echo $placeToStay['room_type'];
                            } ?>" class="roomType">

                                <label for="room_type" class="block mb-2 text-sm font-medium text-dark">Room
                                    type:</label>
                                <select id="room_type" name="room_type"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option value="kingBed" selected>King bed</option>
                                    <option value="twinBed">Twin bed</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h5 class="h5 mt-4">Would you like to stay for extra nights?</h5>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="extra_check_in_date" class="block mb-2 text-sm font-medium text-dark">Check
                                    in
                                    date:</label>
                                <input type="date" id="extra_check_in_date" name="extra_check_in_date"
                                    value="<?php if (Session::has('placeToStay')) {
                                        echo $placeToStay['extra_check_in_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d'); ?>" required>
                            </div>

                            <div>
                                <label for="extra_check_out_date" class="block mb-2 text-sm font-medium text-dark">Check
                                    out
                                    date:</label>
                                <input type="date" id="extra_check_out_date" name="extra_check_out_date"
                                    value="<?php if (Session::has('placeToStay')) {
                                        echo $placeToStay['extra_check_out_date'];
                                    } ?>"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="<?php echo date('Y-m-d', strtotime('+5 days')); ?>" required>
                            </div>

                            <div id="<?php if (Session::has('placeToStay')) {
                                echo $placeToStay['extra_room_type'];
                            } ?>" class="extraRoomType">
                                <label for="extra_room_type" class="block mb-2 text-sm font-medium text-dark">Room
                                    type:</label>
                                <select id="extra_room_type" name="extra_room_type"
                                    class="border border-gray-50 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option value="kingBed" selected>King bed</option>
                                    <option value="twinBed">Twin bed</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="mx-auto" style="width: 200px;">
                                <button type="submit" class="btn btn-primary m-4 w-full text-dark">proceed To last
                                    step</button>
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
        var roomType = $(".roomType").attr('id');
        $("#room_type").val(roomType).change();
        var extraRoomType = $(".extraRoomType").attr('id');
        $("#extra_room_type").val(extraRoomType).change();
    });
</script>
