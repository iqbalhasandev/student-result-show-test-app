<x-app-layout>
    <div class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h2>
                Choose a Result to View
            </h2>
            <div class="mt-3">
                <a class="btn btn-primary" href="{{ route('result.export-to-excel') }}">Download</a>
                <a class="btn btn-primary" href="{{ route('result.show-all') }}">Show Without Pagination</a>
                <a class="btn btn-primary" href="{{ route('result.show-all-with-pagination') }}">Show With
                    Pagination</a>
            </div>

        </div>
    </div>
</x-app-layout>
