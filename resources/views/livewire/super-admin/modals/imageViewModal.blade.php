<div wire:ignore.self class="modal fade" id="imageViewModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if ($imagePaymentProof)
                    <img class="text-center" style="height: 400px; widh:400px"
                        src="{{ asset('storage/' . $imagePaymentProof) }}" alt="">
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                    Close
                </button>
                {{-- <button type="button" class="btn btn-primary">
                    Save changes
                </button> --}}
            </div>
        </div>
    </div>
</div>
