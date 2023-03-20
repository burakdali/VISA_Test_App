<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($mails as $index)
                        <div class="card text-center">
                            <div class="card-header">
                                Sent from <?php echo $index->senderEmail; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                </h5>
                                <p class="card-text"><?php echo $index->messages; ?></p>
                            </div>
                            <div class="card-footer text-muted">
                                sent date: <?php echo $index->created_at; ?>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
