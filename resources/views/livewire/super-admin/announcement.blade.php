<div>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Agency Management</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Announcements</a></li>
            </ol>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card mt-0">
            <div class="col-xl-6 col-lg-12"> 
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input wire:model="title" type="text" class="form-control" placeholder="Your title goes here">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Cover Image</label>
                                    <div class="col-sm-9">
                                        <input wire:model="coverImg" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row" wire:ignore>
                                    <div class="col-sm-3 col-form-label">Description</div>
                                    <div class="col-sm-9">
                                        <textarea wire:model="description" class="form-control" rows="4" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button wire:click="saveAnnouncement" type="submit" class="btn btn-primary">Post Announcement</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./assets/vendor/ckeditor/ckeditor.js"></script>

