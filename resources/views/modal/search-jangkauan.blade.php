<form action="" method="POST">
<div class="modal fade text left" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">{{ __('Cari Nama Kelurahan') }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" name="searchPelanggan" class="form-control" placeholder="Search" aria-label=""
                        aria-describedby="button-addon2" value="{{ request('searchPelanggan') }}">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                            class="bx bx-search"></i></button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>
</form>