<!-- Modal -->
<div class="modal fade" id="signature-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signature</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <canvas id="signatureCanvas" width="400" height="200"></canvas>
                <form method="POST" action="{{ route('signaturepad.upload') }}">
                    @csrf
                    <input type="hidden" name="signatureData" id="signatureData" value="">
                    <input type="hidden" name="id" value="{{ $auth->id }}">
                    <div class="modal-footer">
                        <button type="button" id="clearButton" class="btn btn-danger">Clear Signature</button>
                        <button type="submit" class="btn btn-primary" id="sign-submit-btn">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
