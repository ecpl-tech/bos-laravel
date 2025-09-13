@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Students Journal List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.student_journals.create') }}">
                                <i class="fa fa-plus"></i> Add Student Journals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Title</th>
                                            <th>preview</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($journals as $key => $journal)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $journal->title }}</td>
                                                <td>
                                                    <canvas id="pdf-thumb-{{ $journal->id }}"></canvas>
                                                </td>
                                                <td>
                                                    <a href="{{ $journal->url }}" target="_blank">
                                                        {{ $journal->url }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route(currentUser()->role . '.student_journals.is_public', $journal->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="is_public"
                                                                    @if ($journal['is_public'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit">
                                                            <a href="{{ route(currentUser()->role . '.student_journals.edit', $journal->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form
                                                                action="{{ route(currentUser()->role . '.student_journals.destroy', $journal->id) }}"
                                                                method="POST" style="display:inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="btn-link">
                                                                    <button type="submit" class="btn btn-link p-0 m-0"
                                                                        onclick="return confirm('Are you sure?')">
                                                                        <i data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
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

    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

        @foreach ($journals as $journal)
            (function() {
                const url =
                "{{ route(currentUser()->role . '.student_journals.pdfthumbnail', $journal->id) }}"; 
                const canvas = document.getElementById("pdf-thumb-{{ $journal->id }}");
                const ctx = canvas.getContext("2d");

                pdfjsLib.getDocument(url).promise.then(pdf => pdf.getPage(1))
                    .then(page => {
                        const viewport = page.getViewport({
                            scale: 0.2
                        });
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
                        page.render({
                            canvasContext: ctx,
                            viewport: viewport
                        });
                    })
                    .catch(err => console.error("PDF thumbnail error for {{ $journal->id }}:", err));
            })();
        @endforeach
    </script>
@endsection
