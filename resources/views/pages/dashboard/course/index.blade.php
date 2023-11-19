<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                devug: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'thumbnail',
                        name: 'thumbnail'

                    },
                    {
                        data: 'title',
                        name: 'title'

                    },
                    {
                        data: 'category.name',
                        name: 'category.name',

                    },
                    {
                        data: 'price_after',
                        name: 'price_after'

                    },
                    {
                        data: 'created_at',
                        name: 'created_at'

                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '20%'
                    },
                ],
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.course.create') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Course
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Harga Akhir</th>
                                <th>Rilis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
