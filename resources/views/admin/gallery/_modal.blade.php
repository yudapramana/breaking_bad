<!-- Tambah Group -->
<div class="modal fade" id="tambahGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <form id="groupForm" method="post" action="{{ route('galleries.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span id="judul-modal"></span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modalBox">

                    {{ csrf_field() }}

                    <div class="row card-body">
                        <div class="col-12">


                            <input type="hidden" name="id_gallery" id="id_gallery" value="">


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alt</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alt" name="alt">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Filter Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="filter_tag" name="filter_tag">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tipe Data</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="type" name="type"
                                        aria-label="Default select example">
                                        <option selected="">Pilihan
                                        </option>
                                        <option selected value="foto">Foto</option>
                                        <option value="video">Video</option>
                                        <option value="ebook">E-book</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cover_image_url" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="hidden" name="new-cover_image_url"
                                        id="new-cover_image_url">
                                    <button type="button" id="cover_image_url_btn"
                                        class="btn btn-secondary btn-sm">Unggah Cover</button>

                                    <div class="show-cover-box" style="display:none;">
                                        <img class="mb-2" id="preview-cover" src="" alt="logo_instansi"
                                            height="200"><br>
                                        <div class="mb-2">
                                            <button type="button" id="retry-cover-btn"
                                                class="btn btn-secondary btn-sm">Unggah Ulang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">url</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="url" name="url">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="submitGroupBtn" type="button" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>