<div class="modal fade" id="resetPassword-{{ $u->id }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <lord-icon
                    src="https://cdn.lordicon.com/tdrtiskw.json"
                    trigger="loop"
                    colors="primary:#f7b84b,secondary:#405189"
                    style="width:130px;height:130px">
                </lord-icon>
                <div class="mt-4 pt-4">
                    <h4>Yakin reset password user?</h4>
                    <p class="text-muted"> Password default: <span class="badge light badge-dark">Guru345@</span></p>
                    <!-- Toogle to second dialog -->
                    <a href="{{ route('pengguna.reset_password', $u->id) }}" type="button"  class="btn btn-warning">Reset Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
