<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-hover" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach ($users as $index)
                                <tr>
                                    <td><?php echo $index->id; ?></td>
                                    <td><?php echo $index->name; ?></td>
                                    <td><?php echo $index->email; ?></td>
                                    <td>
                                        <form action="/sendInitialEmail?id=<?php echo $index->id; ?>" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary text-dark">Send
                                                Email</button>
                                        </form>
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
@if (Session::has('Done'))
    <script>
        alert("email has been done to user by mailtrap")
    </script>
@endif
