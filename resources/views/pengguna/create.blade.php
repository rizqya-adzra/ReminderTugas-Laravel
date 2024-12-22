@extends('templates.app', ['title' => 'Buat Tugas'])

@section('contents')
    <div class="container mt-5" style="width: 70%">
        <h2 class="mb-4" style="color: #0021F9">Tambah Tugas</h2>
        <form action="#" method="POST" class="card p-5" style="position: relative;">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul tugas"
                        required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Prioritas</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PRIORITY" id="urgent" value="PRIORITY"
                                required>
                            <label class="form-check-label" for="urgent">Urgent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PRIORITY" id="usual" value="USUAL"
                                required>
                            <label class="form-check-label" for="usual">Santai</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukan deskripsi tugas"
                        required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="datetime-local" class="form-control" id="deadline" name="deadline" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="" disabled selected hidden>Pilih</option>
                        <option value="DONE">Done</option>
                        <option value="ON_PROCESS">On Process</option>
                        <option value="UNFINISHED">Unfinished</option>
                    </select>
                </div>

            </div>

            <div class="row"> Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
