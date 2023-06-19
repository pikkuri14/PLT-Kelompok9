@section('content')

<div class="card">
        <div class="card-header">
            <b>Defense</b> | Mark of Final Defense
        </div>
    <form class="form-inline">
        <div class="input-group mt-3 ml-5">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

<div class="table-responsive mt-3 ml-5">
    <table class="table table-sm" style="border: none; width: auto;">
        <tr>
            <td><strong>Event ID</strong></td>
            <td>    </td>
        </tr>
        <tr>
            <td><strong>Event Name</strong></td>
            <td>    </td>
        </tr>
    </table>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>Student</strong></th>
                <th><strong>Supervisors</strong></th>
                <th><strong>Examiners</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
        </tbody>
    </table>
</div>
    
        </div>
        <div class="card-footer text-muted">
            @ArSys<i>2023</i>
        </div>
    </div>

@endsection