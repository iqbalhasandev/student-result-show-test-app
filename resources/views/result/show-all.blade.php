<x-app-layout>
    <div class="row mt-5">
        <div class="col-md-12 mt2">
            <div class="card">
                <div class="card-body">
                    <div class="header-title mt-1 mb-5">
                        <div class="d-sm-flex justify-content-between">
                            <div>
                                <h4 class="">Result Table Without Pagination</h4>
                            </div>
                            <div>
                                <a href="{{ route('result.index')  }}" class="btn btn-info btn-rounded">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-md-4" style="min-height: 300px;">
                        <div class="row">
                            <div class="table-responsive">
                                <table id="" class="table table-striped table-bordered dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Batch</th>
                                            @foreach ($subjects as $subject)
                                            <th>
                                                {{ $subject->name }}
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>
                                                {{ $student->name }}
                                            </td>
                                            <td>
                                                {{ $student->batch }}
                                            </td>
                                            @foreach ($subjects as $subject)
                                            <td>
                                                {{ $student->results->where('subject_id',
                                                $subject->id)->first()->marks??0
                                                }}
                                            </td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
